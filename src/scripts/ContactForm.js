import React, { useState, useEffect, useRef, useMemo } from "react"

// ─────────────────────────────────────────────────────────────────────────────
//  ⚙️  CONFIGURATION — fill these in before deploying
// ─────────────────────────────────────────────────────────────────────────────
const EMAILJS_SERVICE_ID  = "YOUR_SERVICE_ID"   // EmailJS → Email Services
const EMAILJS_TEMPLATE_ID = "YOUR_TEMPLATE_ID"  // EmailJS → Email Templates
const EMAILJS_PUBLIC_KEY  = "YOUR_PUBLIC_KEY"   // EmailJS → Account → Public Key
const RECAPTCHA_SITE_KEY  = "YOUR_SITE_KEY"     // Google reCAPTCHA v2 Site Key

// ─────────────────────────────────────────────────────────────────────────────
//  Brand tokens
// ─────────────────────────────────────────────────────────────────────────────
const C = {
  navy:    "#0d1b2a",
  gold:    "#C9A84C",
  goldHov: "#DFB95A",
  steel:   "#415a77",
  midGray: "#6b7280",
  lightGray:"#d1d5db",
}

// ─────────────────────────────────────────────────────────────────────────────
//  Default contact info (homepage variant)
// ─────────────────────────────────────────────────────────────────────────────
const DEFAULT_INFO = {
  headline:      "Your Home Deserves Certainty.",
  headlineGold:  "Let's Build It Together.",
  sub: "Whether you're planning a kitchen transformation, a bathroom renovation, or new flooring — Tikal Empire delivers the result you imagined, on time and without surprises.\n\nRequest your free in-home estimate today. No pressure. Just clarity.",
  phones:        [{ label: "Call Us Directly", number: "(301) 300-4172", href: "tel:+13013004172" }],
  email:         null,
  address:       null,
  whatsapp:      "https://wa.me/13013004172",
  googleReviews: null,
}

// ─────────────────────────────────────────────────────────────────────────────
//  Shared base style for all inputs
// ─────────────────────────────────────────────────────────────────────────────
const INPUT_BASE = {
  width: "100%",
  background: "rgba(255,255,255,0.06)",
  border: "1px solid rgba(255,255,255,0.12)",
  borderRadius: "4px",
  padding: "12px 14px",
  fontFamily: "'Inter', sans-serif",
  fontSize: "14px",
  color: "#fff",
  outline: "none",
  boxSizing: "border-box",
  transition: "border-color 0.2s",
  appearance: "none",
  WebkitAppearance: "none",
}

// ─────────────────────────────────────────────────────────────────────────────
//  Primitives
// ─────────────────────────────────────────────────────────────────────────────
function FieldLabel({ children }) {
  return (
    <span style={{
      display: "block",
      fontFamily: "'Montserrat', sans-serif",
      fontSize: "10px",
      fontWeight: 700,
      letterSpacing: "0.12em",
      textTransform: "uppercase",
      color: "rgba(255,255,255,0.45)",
      marginBottom: "6px",
    }}>
      {children}
    </span>
  )
}

function FieldWrap({ label, error, children }) {
  return (
    <div>
      <FieldLabel>{label}</FieldLabel>
      {children}
      {error && (
        <span style={{
          display: "block",
          fontFamily: "'Inter', sans-serif",
          fontSize: "11px",
          color: "#ff6b6b",
          marginTop: "5px",
        }}>
          {error}
        </span>
      )}
    </div>
  )
}

// ─────────────────────────────────────────────────────────────────────────────
//  SVG icons
// ─────────────────────────────────────────────────────────────────────────────
const ICONS = {
  phone: (color) => (
    <svg width="17" height="17" viewBox="0 0 24 24" fill={color}>
      <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
    </svg>
  ),
  email: (color) => (
    <svg width="17" height="17" viewBox="0 0 24 24" fill={color}>
      <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
    </svg>
  ),
  pin: (color) => (
    <svg width="17" height="17" viewBox="0 0 24 24" fill={color}>
      <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
    </svg>
  ),
  shield: (color) => (
    <svg width="20" height="20" viewBox="0 0 24 24" fill={color}>
      <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-1 14l-3-3 1.41-1.41L11 12.17l4.59-4.58L17 9l-6 6z" />
    </svg>
  ),
  check: (color) => (
    <svg width="28" height="28" viewBox="0 0 24 24" fill={color}>
      <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
    </svg>
  ),
  whatsapp: (
    <svg viewBox="0 0 24 24" fill="#25D366" style={{ width: "17px", height: "17px" }}>
      <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
    </svg>
  ),
  google: (
    <svg viewBox="0 0 24 24" style={{ width: "18px", height: "18px", flexShrink: 0 }}>
      <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
      <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
      <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" />
      <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" />
    </svg>
  ),
}

// ─────────────────────────────────────────────────────────────────────────────
//  IconBox
// ─────────────────────────────────────────────────────────────────────────────
function IconBox({ bg, border, children }) {
  return (
    <div style={{
      width: "42px", height: "42px", borderRadius: "8px",
      background: bg, border: `1px solid ${border}`,
      display: "flex", alignItems: "center", justifyContent: "center",
      flexShrink: 0,
    }}>
      {children}
    </div>
  )
}

// ─────────────────────────────────────────────────────────────────────────────
//  ContactInfo — left panel
// ─────────────────────────────────────────────────────────────────────────────
function ContactInfo({ info }) {
  const paragraphs = info.sub.split("\n\n")

  return (
    <div>
      <div style={{ display: "inline-flex", alignItems: "center", gap: "12px", marginBottom: "20px" }}>
        <div style={{ width: "36px", height: "1px", background: C.gold }} />
        <span style={{
          fontFamily: "'Montserrat', sans-serif", fontSize: "10px", fontWeight: 700,
          letterSpacing: "0.25em", textTransform: "uppercase", color: C.gold,
        }}>
          Ready to Start?
        </span>
      </div>

      <h2 style={{
        fontFamily: "'Playfair Display', serif",
        fontSize: "clamp(1.8rem,3.5vw,3rem)",
        fontWeight: 900, color: "#fff", lineHeight: 1.12, marginBottom: "20px",
      }}>
        {info.headline}{" "}
        <span style={{ color: C.gold }}>{info.headlineGold}</span>
      </h2>

      <div style={{ marginBottom: "32px" }}>
        {paragraphs.map((para, i) => (
          <p key={i} style={{
            fontFamily: "'Inter', sans-serif", fontSize: "15px",
            color: "rgba(255,255,255,0.58)", lineHeight: 1.8,
            margin: i < paragraphs.length - 1 ? "0 0 14px" : 0,
          }}>
            {para}
          </p>
        ))}
      </div>

      <div style={{ display: "flex", flexDirection: "column", gap: "16px", marginBottom: "28px" }}>

        {info.phones.map((ph) => (
          <a key={ph.href} href={ph.href}
            style={{ display: "flex", alignItems: "center", gap: "14px", textDecoration: "none" }}>
            <IconBox bg="rgba(201,168,76,0.1)" border="rgba(201,168,76,0.2)">
              {ICONS.phone(C.gold)}
            </IconBox>
            <div>
              <p style={{ fontFamily: "'Montserrat',sans-serif", fontSize: "10px", fontWeight: 600, letterSpacing: "0.1em", textTransform: "uppercase", color: "rgba(255,255,255,0.32)", margin: 0 }}>
                {ph.label}
              </p>
              <p style={{ fontFamily: "'Montserrat',sans-serif", fontSize: "17px", fontWeight: 700, color: "#fff", margin: "3px 0 0" }}>
                {ph.number}
              </p>
            </div>
          </a>
        ))}

        {info.email && (
          <a href={`mailto:${info.email}`}
            style={{ display: "flex", alignItems: "center", gap: "14px", textDecoration: "none" }}>
            <IconBox bg="rgba(74,111,138,0.12)" border="rgba(74,111,138,0.2)">
              {ICONS.email(C.steel)}
            </IconBox>
            <div>
              <p style={{ fontFamily: "'Montserrat',sans-serif", fontSize: "10px", fontWeight: 600, letterSpacing: "0.1em", textTransform: "uppercase", color: "rgba(255,255,255,0.32)", margin: 0 }}>
                Email
              </p>
              <p style={{ fontFamily: "'Montserrat',sans-serif", fontSize: "14px", fontWeight: 600, color: "rgba(255,255,255,0.75)", margin: "3px 0 0" }}>
                {info.email}
              </p>
            </div>
          </a>
        )}

        {info.address && (
          <div style={{ display: "flex", alignItems: "flex-start", gap: "14px" }}>
            <IconBox bg="rgba(74,111,138,0.12)" border="rgba(74,111,138,0.2)">
              {ICONS.pin(C.steel)}
            </IconBox>
            <div>
              <p style={{ fontFamily: "'Montserrat',sans-serif", fontSize: "10px", fontWeight: 600, letterSpacing: "0.1em", textTransform: "uppercase", color: "rgba(255,255,255,0.32)", margin: 0 }}>
                Address
              </p>
              <p style={{ fontFamily: "'Montserrat',sans-serif", fontSize: "14px", fontWeight: 500, color: "rgba(255,255,255,0.65)", margin: "3px 0 0", lineHeight: 1.5 }}>
                {info.address.split("\n").map((line, i, arr) => (
                  <React.Fragment key={i}>
                    {line}{i < arr.length - 1 && <br />}
                  </React.Fragment>
                ))}
              </p>
            </div>
          </div>
        )}

        <a
          href={info.whatsapp || "https://wa.me/13013004172"}
          target="_blank"
          rel="noopener noreferrer"
          style={{ display: "flex", alignItems: "center", gap: "14px", textDecoration: "none" }}
        >
          <IconBox bg="rgba(37,211,102,0.1)" border="rgba(37,211,102,0.2)">
            {ICONS.whatsapp}
          </IconBox>
          <div>
            <p style={{ fontFamily: "'Montserrat',sans-serif", fontSize: "10px", fontWeight: 600, letterSpacing: "0.1em", textTransform: "uppercase", color: "rgba(255,255,255,0.32)", margin: 0 }}>
              WhatsApp
            </p>
            <p style={{ fontFamily: "'Montserrat',sans-serif", fontSize: "15px", fontWeight: 700, color: "#fff", margin: "3px 0 0" }}>
              Message Us
            </p>
          </div>
        </a>

      </div>

      <div style={{
        display: "inline-flex", alignItems: "center", gap: "12px",
        padding: "12px 18px", borderRadius: "6px",
        border: "1px solid rgba(201,168,76,0.25)",
        background: "rgba(201,168,76,0.05)",
      }}>
        {ICONS.shield(C.gold)}
        <div>
          <p style={{ fontFamily: "'Montserrat',sans-serif", fontSize: "11px", fontWeight: 800, letterSpacing: "0.08em", textTransform: "uppercase", color: C.gold, margin: 0 }}>
            MHIC #154361 — Licensed & Insured
          </p>
          <p style={{ fontFamily: "'Inter',sans-serif", fontSize: "11px", color: "rgba(255,255,255,0.32)", margin: "4px 0 0" }}>
            We respond within 24–48 hours. No pressure. Just clarity.
          </p>
        </div>
      </div>

      {info.googleReviews && (
        <a
          href={info.googleReviews}
          target="_blank"
          rel="noopener noreferrer"
          style={{
            display: "inline-flex", alignItems: "center", gap: "10px",
            padding: "10px 16px", borderRadius: "6px", marginTop: "10px",
            border: "1px solid rgba(255,255,255,0.1)",
            background: "rgba(255,255,255,0.04)",
            textDecoration: "none",
            transition: "border-color 0.2s, background 0.2s",
          }}
          onMouseEnter={(e) => {
            e.currentTarget.style.borderColor = "rgba(201,168,76,0.4)"
            e.currentTarget.style.background  = "rgba(201,168,76,0.06)"
          }}
          onMouseLeave={(e) => {
            e.currentTarget.style.borderColor = "rgba(255,255,255,0.1)"
            e.currentTarget.style.background  = "rgba(255,255,255,0.04)"
          }}
        >
          {ICONS.google}
          <span style={{ fontFamily: "'Montserrat',sans-serif", fontSize: "11px", fontWeight: 600, letterSpacing: "0.06em", color: "rgba(255,255,255,0.55)" }}>
            See Our Google Reviews ★★★★★
          </span>
        </a>
      )}
    </div>
  )
}

// ─────────────────────────────────────────────────────────────────────────────
//  useScript — load external script once, return ready flag
// ─────────────────────────────────────────────────────────────────────────────
function useScript(src) {
  const [ready, setReady] = useState(false)
  useEffect(() => {
    if (!src) return
    if (document.querySelector(`script[src="${src}"]`)) { setReady(true); return }
    const s   = document.createElement("script")
    s.src     = src
    s.async   = true
    s.onload  = () => setReady(true)
    s.onerror = () => console.warn("[ContactForm] Script failed:", src)
    document.head.appendChild(s)
  }, [src])
  return ready
}

// ─────────────────────────────────────────────────────────────────────────────
//  Form status
// ─────────────────────────────────────────────────────────────────────────────
const STATUS = { IDLE: "idle", SENDING: "sending", SUCCESS: "success", ERROR: "error" }

// ─────────────────────────────────────────────────────────────────────────────
//  ContactForm — main component
// ─────────────────────────────────────────────────────────────────────────────
function ContactForm() {
  const info = useMemo(() => {
    const el = document.querySelector("[data-cf-config]")
    if (!el) return DEFAULT_INFO
    try { return { ...DEFAULT_INFO, ...JSON.parse(el.dataset.cfConfig) } }
    catch { return DEFAULT_INFO }
  }, [])

  const [fields, setFields] = useState({
    full_name: "", phone: "", email: "",
    service: "", city_zip: "", message: "",
  })
  const [errors, setErrors] = useState({})
  const [status, setStatus] = useState(STATUS.IDLE)

  // reCAPTCHA v2 refs
  const captchaContainerRef = useRef(null)  // div where widget renders
  const widgetIdRef         = useRef(null)  // grecaptcha widget ID
  const captchaTokenRef     = useRef("")    // token set by callback

  // Load SDKs
  const emailjsReady   = useScript("https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js")
  // render=explicit → we control when the widget renders
  const recaptchaReady = useScript("https://www.google.com/recaptcha/api.js?render=explicit")

  // Init EmailJS
  useEffect(() => {
    if (emailjsReady && window.emailjs) {
      window.emailjs.init({ publicKey: EMAILJS_PUBLIC_KEY })
    }
  }, [emailjsReady])

  // Render reCAPTCHA v2 widget once the script is ready and the div exists
  useEffect(() => {
    if (!recaptchaReady) return

    // Poll until grecaptcha.render is available
    const poll = setInterval(() => {
      if (
        window.grecaptcha &&
        typeof window.grecaptcha.render === "function" &&
        captchaContainerRef.current &&
        widgetIdRef.current === null
      ) {
        widgetIdRef.current = window.grecaptcha.render(captchaContainerRef.current, {
          sitekey:  RECAPTCHA_SITE_KEY,
          theme:    "dark",        // matches our dark form card
          size:     "normal",
          callback: (token) => {
            // Called when user checks the box — store the token
            captchaTokenRef.current = token
            // Clear any captcha error
            setErrors((prev) => ({ ...prev, captcha: "" }))
          },
          "expired-callback": () => {
            // Token expired — user needs to re-check
            captchaTokenRef.current = ""
          },
          "error-callback": () => {
            captchaTokenRef.current = ""
          },
        })
        clearInterval(poll)
      }
    }, 150)

    return () => clearInterval(poll)
  }, [recaptchaReady])

  // ── Field helpers ──────────────────────────────────────────────────────────
  function update(e) {
    const { name, value } = e.target
    setFields((prev) => ({ ...prev, [name]: value }))
    if (errors[name]) setErrors((prev) => ({ ...prev, [name]: "" }))
  }

  function inputStyle(name) {
    return { ...INPUT_BASE, borderColor: errors[name] ? "#ff6b6b" : "rgba(255,255,255,0.12)" }
  }

  function onFocus(e) { e.currentTarget.style.borderColor = C.gold }
  function onBlur(e) {
    e.currentTarget.style.borderColor =
      errors[e.currentTarget.name] ? "#ff6b6b" : "rgba(255,255,255,0.12)"
  }

  // ── Validation ─────────────────────────────────────────────────────────────
  function validate() {
    const e = {}
    if (!fields.full_name.trim()) e.full_name = "Please enter your name."
    if (!fields.phone.trim())     e.phone     = "Please enter your phone number."
    if (!fields.email.trim()) {
      e.email = "Please enter your email address."
    } else if (!/\S+@\S+\.\S+/.test(fields.email)) {
      e.email = "Please enter a valid email address."
    }
    if (!fields.city_zip.trim()) e.city_zip = "Please enter your city or ZIP code."
    // reCAPTCHA v2 — must be checked
    if (!captchaTokenRef.current) e.captcha = "Please confirm you're not a robot."
    return e
  }

  // ── Submit ─────────────────────────────────────────────────────────────────
  async function handleSubmit(e) {
    e.preventDefault()

    const errs = validate()
    if (Object.keys(errs).length > 0) {
      setErrors(errs)
      return
    }

    setStatus(STATUS.SENDING)

    try {
      if (!window.emailjs) throw new Error("EmailJS not initialized")

      await window.emailjs.send(EMAILJS_SERVICE_ID, EMAILJS_TEMPLATE_ID, {
        from_name:      fields.full_name,
        from_phone:     fields.phone,
        from_email:     fields.email,
        service_needed: fields.service  || "Not specified",
        city_zip:       fields.city_zip,
        message:        fields.message  || "No additional details.",
        captcha_token:  captchaTokenRef.current,
        reply_to:       fields.email,
      })

      setStatus(STATUS.SUCCESS)
      setFields({ full_name: "", phone: "", email: "", service: "", city_zip: "", message: "" })

      // Reset the reCAPTCHA widget so it can be used again
      captchaTokenRef.current = ""
      if (widgetIdRef.current !== null && window.grecaptcha) {
        window.grecaptcha.reset(widgetIdRef.current)
      }

    } catch (err) {
      console.error("[ContactForm] Submit error:", err)
      setStatus(STATUS.ERROR)
      // Reset captcha on error too
      captchaTokenRef.current = ""
      if (widgetIdRef.current !== null && window.grecaptcha) {
        window.grecaptcha.reset(widgetIdRef.current)
      }
    }
  }

  // ── Reset form after success ───────────────────────────────────────────────
  function resetForm() {
    setStatus(STATUS.IDLE)
    setErrors({})
    // Re-render widget (it was already reset above, just clear any lingering state)
    captchaTokenRef.current = ""
  }

  // ── JSX ────────────────────────────────────────────────────────────────────
  return (
    <>
      <style>{`
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Montserrat:wght@400;500;600;700;800&family=Inter:wght@400;500&display=swap');

        .cf-section {
          background: ${C.navy};
          padding: 96px 0;
          position: relative;
          overflow: hidden;
        }
        .cf-section::before {
          content: ''; position: absolute;
          top: -80px; right: -80px;
          width: 360px; height: 360px; border-radius: 50%;
          background: rgba(201,168,76,0.04); pointer-events: none;
        }
        .cf-section::after {
          content: ''; position: absolute;
          bottom: -100px; left: -100px;
          width: 450px; height: 450px; border-radius: 50%;
          background: rgba(74,111,138,0.07); pointer-events: none;
        }
        .cf-inner {
          max-width: 1280px; margin: 0 auto; padding: 0 24px;
          display: grid; grid-template-columns: 1fr 1fr;
          gap: 80px; align-items: start;
          position: relative; z-index: 1;
        }
        .cf-card {
          background: rgba(255,255,255,0.04);
          border: 1px solid rgba(255,255,255,0.1);
          border-radius: 12px; padding: 40px 36px;
        }
        .cf-row-2 {
          display: grid; grid-template-columns: 1fr 1fr; gap: 14px;
        }

        /* reCAPTCHA widget wrapper — dark theme blends naturally */
        .cf-captcha-wrap {
          display: flex;
          flex-direction: column;
          gap: 6px;
        }
        .cf-captcha-error {
          font-family: 'Inter', sans-serif;
          font-size: 11px;
          color: #ff6b6b;
        }

        .cf-submit {
          width: 100%; background: ${C.gold}; color: ${C.navy};
          font-family: 'Montserrat', sans-serif;
          font-size: 12px; font-weight: 800;
          letter-spacing: 0.13em; text-transform: uppercase;
          border: none; border-radius: 4px; padding: 16px;
          cursor: pointer; box-shadow: 0 4px 20px rgba(201,168,76,0.28);
          transition: background 0.2s, transform 0.15s, opacity 0.2s;
        }
        .cf-submit:hover:not(:disabled) {
          background: ${C.goldHov}; transform: translateY(-1px);
        }
        .cf-submit:disabled { opacity: 0.6; cursor: not-allowed; }

        .cf-success {
          display: flex; flex-direction: column;
          align-items: center; justify-content: center;
          text-align: center; gap: 16px; padding: 48px 0;
        }
        .cf-success-icon {
          width: 64px; height: 64px; border-radius: 50%;
          background: rgba(201,168,76,0.12);
          border: 2px solid rgba(201,168,76,0.3);
          display: flex; align-items: center; justify-content: center;
          animation: cfPop 0.4s cubic-bezier(0.175,0.885,0.32,1.275);
        }
        @keyframes cfPop {
          from { transform: scale(0.5); opacity: 0; }
          to   { transform: scale(1);   opacity: 1; }
        }

        .cf-card input::placeholder,
        .cf-card textarea::placeholder { color: rgba(255,255,255,0.28); }
        .cf-card select option { background: ${C.navy}; color: #fff; }

        @media (max-width: 1024px) {
          .cf-inner { grid-template-columns: 1fr !important; gap: 48px !important; }
        }
        @media (max-width: 640px) {
          .cf-row-2 { grid-template-columns: 1fr !important; }
          .cf-card  { padding: 28px 20px !important; }
        }
      `}</style>

      <section className="cf-section">
        <div className="cf-inner">

          {/* ── Left: contact info ── */}
          <ContactInfo info={info} />

          {/* ── Right: form card ── */}
          <div className="cf-card">

            {status === STATUS.SUCCESS ? (
              /* ── Success screen ── */
              <div className="cf-success">
                <div className="cf-success-icon">
                  {ICONS.check(C.gold)}
                </div>
                <h3 style={{ fontFamily: "'Playfair Display',serif", fontSize: "1.6rem", fontWeight: 700, color: "#fff", margin: 0 }}>
                  We Got Your Request!
                </h3>
                <p style={{ fontFamily: "'Inter',sans-serif", fontSize: "14px", color: "rgba(255,255,255,0.5)", lineHeight: 1.75, maxWidth: "340px", margin: 0 }}>
                  We'll reach out within 24–48 hours to schedule your free in-home estimate. No pressure — just clarity.
                </p>
                <a
                  href="tel:+13013004172"
                  style={{ fontFamily: "'Montserrat',sans-serif", fontSize: "11px", fontWeight: 700, letterSpacing: "0.1em", textTransform: "uppercase", color: C.gold, textDecoration: "none", borderBottom: "1px solid rgba(201,168,76,0.35)", paddingBottom: "2px" }}
                >
                  Or call us now: (301) 300-4172
                </a>
                <button
                  onClick={resetForm}
                  style={{ background: "none", border: "1px solid rgba(255,255,255,0.15)", borderRadius: "4px", padding: "8px 20px", cursor: "pointer", fontFamily: "'Montserrat',sans-serif", fontSize: "10px", fontWeight: 700, letterSpacing: "0.1em", textTransform: "uppercase", color: "rgba(255,255,255,0.4)", transition: "border-color 0.2s, color 0.2s" }}
                  onMouseEnter={(e) => { e.currentTarget.style.borderColor = C.gold; e.currentTarget.style.color = C.gold }}
                  onMouseLeave={(e) => { e.currentTarget.style.borderColor = "rgba(255,255,255,0.15)"; e.currentTarget.style.color = "rgba(255,255,255,0.4)" }}
                >
                  Submit another request
                </button>
              </div>
            ) : (
              /* ── Form ── */
              <>
                <h3 style={{ fontFamily: "'Playfair Display',serif", fontSize: "1.5rem", fontWeight: 700, color: "#fff", marginBottom: "6px" }}>
                  Request Your Free Estimate
                </h3>
                <p style={{ fontFamily: "'Inter',sans-serif", fontSize: "13px", color: "rgba(255,255,255,0.4)", marginBottom: "28px", lineHeight: 1.6 }}>
                  We respond within 24–48 hours. No pressure. Just clarity.
                </p>

                <form onSubmit={handleSubmit} noValidate style={{ display: "flex", flexDirection: "column", gap: "14px" }}>

                  <FieldWrap label="Full Name *" error={errors.full_name}>
                    <input
                      type="text" name="full_name" placeholder="Your full name"
                      value={fields.full_name}
                      onChange={update} onFocus={onFocus} onBlur={onBlur}
                      style={inputStyle("full_name")}
                    />
                  </FieldWrap>

                  <div className="cf-row-2">
                    <FieldWrap label="Phone Number *" error={errors.phone}>
                      <input
                        type="tel" name="phone" placeholder="(301) 000-0000"
                        value={fields.phone}
                        onChange={update} onFocus={onFocus} onBlur={onBlur}
                        style={inputStyle("phone")}
                      />
                    </FieldWrap>
                    <FieldWrap label="Email Address *" error={errors.email}>
                      <input
                        type="email" name="email" placeholder="you@email.com"
                        value={fields.email}
                        onChange={update} onFocus={onFocus} onBlur={onBlur}
                        style={inputStyle("email")}
                      />
                    </FieldWrap>
                  </div>

                  <div className="cf-row-2">
                    <FieldWrap label="Service Needed">
                      <select
                        name="service" value={fields.service}
                        onChange={update} onFocus={onFocus} onBlur={onBlur}
                        style={{ ...inputStyle("service"), cursor: "pointer" }}
                      >
                        <option value="">Select service...</option>
                        <option value="Kitchen Remodeling">Kitchen Remodeling</option>
                        <option value="Bathroom Remodeling">Bathroom Remodeling</option>
                        <option value="Flooring Installation">Flooring Installation</option>
                        <option value="Multiple Services">Multiple Services</option>
                        <option value="Not Sure">Not Sure</option>
                      </select>
                    </FieldWrap>
                    <FieldWrap label="City or ZIP Code *" error={errors.city_zip}>
                      <input
                        type="text" name="city_zip" placeholder="Columbia, 21044"
                        value={fields.city_zip}
                        onChange={update} onFocus={onFocus} onBlur={onBlur}
                        style={inputStyle("city_zip")}
                      />
                    </FieldWrap>
                  </div>

                  <FieldWrap label="Tell Us About Your Project">
                    <textarea
                      name="message"
                      placeholder="Describe your project — scope, timeline, specific ideas..."
                      value={fields.message}
                      onChange={update} onFocus={onFocus} onBlur={onBlur}
                      rows={4}
                      style={{ ...inputStyle("message"), resize: "vertical", minHeight: "100px" }}
                    />
                  </FieldWrap>

                  {/* ── reCAPTCHA v2 widget ── */}
                  <div className="cf-captcha-wrap">
                    {/* This div is the mount point — grecaptcha.render() targets it */}
                    <div ref={captchaContainerRef} />
                    {errors.captcha && (
                      <span className="cf-captcha-error">{errors.captcha}</span>
                    )}
                  </div>

                  {/* Error banner */}
                  {status === STATUS.ERROR && (
                    <div style={{ padding: "12px 16px", borderRadius: "6px", background: "rgba(255,107,107,0.1)", border: "1px solid rgba(255,107,107,0.25)" }}>
                      <p style={{ fontFamily: "'Inter',sans-serif", fontSize: "13px", color: "#ff6b6b", margin: 0, lineHeight: 1.5 }}>
                        Something went wrong. Please call us at{" "}
                        <a href="tel:+13013004172" style={{ color: C.gold }}>(301) 300-4172</a>.
                      </p>
                    </div>
                  )}

                  <button type="submit" className="cf-submit" disabled={status === STATUS.SENDING}>
                    {status === STATUS.SENDING ? "Sending…" : "Request Free Estimate"}
                  </button>

                </form>
              </>
            )}
          </div>

        </div>
      </section>
    </>
  )
}

export default ContactForm