import React from "react"

// ─── Brand Tokens (same as Navbar) ────────────────────────────────────────────
const C = {
  navy:     "#0d1b2a",
  navyDeep: "#060d18",
  gold:     "#C9A84C",
  goldHover:"#DFB95A",
  carbon:   "#2f2f2f",
  steel:    "#415a77",
  midGray:  "#6b7280",
  lightGray:"#d1d5db",
}

// ─── Data ─────────────────────────────────────────────────────────────────────
const serviceLinks = [
  { label: "Kitchen Remodeling",   href: "/kitchen-remodeling" },
  { label: "Bathroom Remodeling",  href: "/bathroom-remodeling" },
  { label: "Flooring Installation", href: "/flooring-installation" },
]

const pageLinks = [
  { label: "Home",           href: "/" },
  { label: "Our Work",       href: "/our-work" },
  { label: "About Us",       href: "/about-us" },
  { label: "Contact",        href: "/contact" },
  { label: "Privacy Policy", href: "/privacy-policy" },
]

const serviceAreas = [
  "Howard County",
  "Montgomery County",
  "Frederick County",
  "Prince George's County",
  "Baltimore County",
  "Anne Arundel County",
]

const socialLinks = [
  {
    label: "Facebook",
    href: "https://facebook.com",
    icon: (
      <svg viewBox="0 0 24 24" fill="currentColor" style={{ width: "18px", height: "18px" }}>
        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12.07h2.54V9.845c0-2.503 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12.07h2.773l-.443 2.89h-2.33v6.988C20.343 21.128 24 16.991 24 12.073z" />
      </svg>
    ),
  },
  {
    label: "Instagram",
    href: "https://instagram.com",
    icon: (
      <svg viewBox="0 0 24 24" fill="currentColor" style={{ width: "18px", height: "18px" }}>
        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
      </svg>
    ),
  },
  {
    label: "Houzz",
    href: "https://houzz.com",
    icon: (
      <svg viewBox="0 0 24 24" fill="currentColor" style={{ width: "18px", height: "18px" }}>
        <path d="M 12 1 L 3 6.5 L 3 12 L 9 12 L 9 23 L 15 23 L 15 15 L 21 15 L 21 6.5 Z" />
      </svg>
    ),
  },
  {
    label: "YouTube",
    href: "https://youtube.com",
    icon: (
      <svg viewBox="0 0 24 24" fill="currentColor" style={{ width: "18px", height: "18px" }}>
        <path d="M23.495 6.205a3.007 3.007 0 00-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 00.527 6.205a31.247 31.247 0 00-.522 5.805 31.247 31.247 0 00.522 5.783 3.007 3.007 0 002.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 002.088-2.088 31.247 31.247 0 00.5-5.783 31.247 31.247 0 00-.5-5.805zM9.609 15.601V8.408l6.264 3.602z" />
      </svg>
    ),
  },
]

// ─── Reusable Footer Heading ───────────────────────────────────────────────────
function FooterHeading({ children }) {
  return (
    <div style={{ marginBottom: "20px" }}>
      <span
        style={{
          fontFamily: "'Montserrat', sans-serif",
          fontSize: "10px",
          fontWeight: 700,
          letterSpacing: "0.22em",
          textTransform: "uppercase",
          color: C.gold,
        }}
      >
        {children}
      </span>
      {/* Gold underline accent */}
      <div style={{ width: "28px", height: "2px", background: C.gold, marginTop: "8px", opacity: 0.6 }} />
    </div>
  )
}

// ─── Footer Link ───────────────────────────────────────────────────────────────
function FooterLink({ href, children, external }) {
  return (
    <a
      href={href}
      target={external ? "_blank" : undefined}
      rel={external ? "noopener noreferrer" : undefined}
      style={{
        display: "flex",
        alignItems: "center",
        gap: "8px",
        fontFamily: "'Montserrat', sans-serif",
        fontSize: "12px",
        fontWeight: 500,
        letterSpacing: "0.04em",
        color: "rgba(255,255,255,0.5)",
        textDecoration: "none",
        transition: "color 0.2s, gap 0.2s",
        paddingBottom: "10px",
      }}
      onMouseEnter={(e) => {
        e.currentTarget.style.color = C.gold
        e.currentTarget.style.gap = "12px"
      }}
      onMouseLeave={(e) => {
        e.currentTarget.style.color = "rgba(255,255,255,0.5)"
        e.currentTarget.style.gap = "8px"
      }}
    >
      <span style={{ width: "4px", height: "4px", borderRadius: "50%", backgroundColor: C.gold, flexShrink: 0, opacity: 0.6 }} />
      {children}
    </a>
  )
}

// ─── Google Reviews Badge ──────────────────────────────────────────────────────
function GoogleReviewsBadge() {
  return (
    <a
      href="https://g.page/r/YOUR_GOOGLE_PLACE_ID/review"
      target="_blank"
      rel="noopener noreferrer"
      style={{
        display: "inline-flex",
        alignItems: "center",
        gap: "10px",
        padding: "10px 16px",
        borderRadius: "6px",
        border: `1px solid rgba(255,255,255,0.1)`,
        background: "rgba(255,255,255,0.04)",
        textDecoration: "none",
        transition: "border-color 0.2s, background 0.2s",
      }}
      onMouseEnter={(e) => {
        e.currentTarget.style.borderColor = `rgba(201,168,76,0.4)`
        e.currentTarget.style.background = "rgba(201,168,76,0.06)"
      }}
      onMouseLeave={(e) => {
        e.currentTarget.style.borderColor = "rgba(255,255,255,0.1)"
        e.currentTarget.style.background = "rgba(255,255,255,0.04)"
      }}
    >
      {/* Google G icon */}
      <svg viewBox="0 0 24 24" style={{ width: "20px", height: "20px", flexShrink: 0 }}>
        <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
        <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
        <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" />
        <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" />
      </svg>
      <div style={{ display: "flex", flexDirection: "column", gap: "2px" }}>
        {/* Stars */}
        <div style={{ display: "flex", gap: "2px" }}>
          {[1,2,3,4,5].map((s) => (
            <svg key={s} viewBox="0 0 20 20" fill="#FBBC05" style={{ width: "11px", height: "11px" }}>
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>
          ))}
        </div>
        <span style={{ fontFamily: "'Montserrat', sans-serif", fontSize: "10px", fontWeight: 600, letterSpacing: "0.06em", color: "rgba(255,255,255,0.55)" }}>
          See our Google Reviews
        </span>
      </div>
    </a>
  )
}

// ─── License Badge ─────────────────────────────────────────────────────────────
function LicenseBadge() {
  return (
    <div
      style={{
        display: "inline-flex",
        alignItems: "center",
        gap: "10px",
        padding: "10px 16px",
        borderRadius: "6px",
        border: `1px solid rgba(201,168,76,0.3)`,
        background: "rgba(201,168,76,0.05)",
      }}
    >
      {/* Shield icon */}
      <svg viewBox="0 0 24 24" fill={C.gold} style={{ width: "20px", height: "20px", flexShrink: 0 }}>
        <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-1 14l-3-3 1.41-1.41L11 12.17l4.59-4.58L17 9l-6 6z" />
      </svg>
      <div style={{ display: "flex", flexDirection: "column", gap: "2px" }}>
        <span style={{ fontFamily: "'Montserrat', sans-serif", fontSize: "11px", fontWeight: 800, letterSpacing: "0.1em", textTransform: "uppercase", color: C.gold }}>
          MHIC #154361
        </span>
        <span style={{ fontFamily: "'Montserrat', sans-serif", fontSize: "10px", fontWeight: 500, letterSpacing: "0.06em", color: "rgba(255,255,255,0.45)" }}>
          Licensed &amp; Insured · Maryland
        </span>
      </div>
    </div>
  )
}

// ─── Footer Component ──────────────────────────────────────────────────────────
function Footer() {
  const currentYear = new Date().getFullYear()

  return (
    <>
      <style>{`
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Montserrat:wght@400;500;600;700;800&family=Inter:wght@400;500&display=swap');
      `}</style>

      <footer style={{ backgroundColor: C.navy }}>

        {/* ── Top Divider — Gold gradient line ──────────────────────────────── */}
        <div style={{ height: "2px", background: `linear-gradient(90deg, transparent 0%, ${C.gold} 30%, ${C.gold} 70%, transparent 100%)` }} />

        {/* ── Main Footer Body ──────────────────────────────────────────────── */}
        <div
          style={{
            maxWidth: "1280px",
            margin: "0 auto",
            padding: "64px 24px 48px",
            display: "grid",
            gridTemplateColumns: "repeat(auto-fit, minmax(200px, 1fr))",
            gap: "48px",
          }}
        >

          {/* ── Col 1: Logo + Tagline + Badges ──────────────────────────────── */}
          <div style={{ gridColumn: "span 1" }}>
            {/* Logo */}
            <a href="/" style={{ display: "inline-block", textDecoration: "none", marginBottom: "16px" }}>
              <img
                src="/wp-content/uploads/2026/04/Tikal_imagotipo_condensado-scaled.png"
                alt="Tikal Empire — Kitchen, Bath & Flooring"
                style={{ height: "52px", width: "auto", display: "block" }}
              />
            </a>

            {/* Tagline */}
            <p
              style={{
                fontFamily: "'Inter', sans-serif",
                fontSize: "13px",
                fontWeight: 400,
                lineHeight: 1.7,
                color: "rgba(255,255,255,0.42)",
                marginTop: "16px",
                marginBottom: "24px",
                maxWidth: "240px",
              }}
            >
              Premium interior remodeling for Maryland homeowners — delivered with schedule discipline and craftsmanship you can see.
            </p>

            {/* Badges stacked */}
            <div style={{ display: "flex", flexDirection: "column", gap: "10px" }}>
              <LicenseBadge />
              <GoogleReviewsBadge />
            </div>

            {/* Social icons */}
            <div style={{ display: "flex", gap: "10px", marginTop: "24px" }}>
              {socialLinks.map((s) => (
                <a
                  key={s.label}
                  href={s.href}
                  target="_blank"
                  rel="noopener noreferrer"
                  aria-label={s.label}
                  style={{
                    width: "36px",
                    height: "36px",
                    borderRadius: "6px",
                    display: "flex",
                    alignItems: "center",
                    justifyContent: "center",
                    color: "rgba(255,255,255,0.45)",
                    background: "rgba(255,255,255,0.06)",
                    border: "1px solid rgba(255,255,255,0.08)",
                    textDecoration: "none",
                    transition: "color 0.2s, background 0.2s, border-color 0.2s, transform 0.15s",
                  }}
                  onMouseEnter={(e) => {
                    e.currentTarget.style.color = C.gold
                    e.currentTarget.style.background = "rgba(201,168,76,0.1)"
                    e.currentTarget.style.borderColor = `rgba(201,168,76,0.35)`
                    e.currentTarget.style.transform = "translateY(-2px)"
                  }}
                  onMouseLeave={(e) => {
                    e.currentTarget.style.color = "rgba(255,255,255,0.45)"
                    e.currentTarget.style.background = "rgba(255,255,255,0.06)"
                    e.currentTarget.style.borderColor = "rgba(255,255,255,0.08)"
                    e.currentTarget.style.transform = "none"
                  }}
                >
                  {s.icon}
                </a>
              ))}
            </div>
          </div>

          {/* ── Col 2: Services ───────────────────────────────────────────────── */}
          <div>
            <FooterHeading>Services</FooterHeading>
            <nav>
              {serviceLinks.map((link) => (
                <FooterLink key={link.href} href={link.href}>
                  {link.label}
                </FooterLink>
              ))}
            </nav>

            <div style={{ marginTop: "20px" }}>
              <FooterHeading>Pages</FooterHeading>
              <nav>
                {pageLinks.map((link) => (
                  <FooterLink key={link.href} href={link.href}>
                    {link.label}
                  </FooterLink>
                ))}
              </nav>
            </div>
          </div>

          {/* ── Col 3: Service Areas ──────────────────────────────────────────── */}
          <div>
            <FooterHeading>Service Areas</FooterHeading>
            <p
              style={{
                fontFamily: "'Inter', sans-serif",
                fontSize: "12px",
                color: "rgba(255,255,255,0.38)",
                marginBottom: "14px",
                letterSpacing: "0.02em",
              }}
            >
              Serving a 50-mile radius across Maryland:
            </p>
            <div style={{ display: "flex", flexDirection: "column", gap: "0" }}>
              {serviceAreas.map((area) => (
                <span
                  key={area}
                  style={{
                    display: "flex",
                    alignItems: "center",
                    gap: "8px",
                    fontFamily: "'Montserrat', sans-serif",
                    fontSize: "12px",
                    fontWeight: 500,
                    letterSpacing: "0.04em",
                    color: "rgba(255,255,255,0.5)",
                    paddingBottom: "10px",
                  }}
                >
                  <span style={{ width: "4px", height: "4px", borderRadius: "50%", backgroundColor: C.steel, flexShrink: 0 }} />
                  {area}
                </span>
              ))}
            </div>

            {/* Map pin note */}
            <div
              style={{
                marginTop: "8px",
                padding: "10px 14px",
                borderRadius: "6px",
                background: "rgba(74,111,138,0.12)",
                border: `1px solid rgba(74,111,138,0.2)`,
                display: "flex",
                alignItems: "flex-start",
                gap: "8px",
              }}
            >
              <svg viewBox="0 0 24 24" fill={C.steel} style={{ width: "14px", height: "14px", flexShrink: 0, marginTop: "1px" }}>
                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
              </svg>
              <span style={{ fontFamily: "'Inter', sans-serif", fontSize: "11px", color: "rgba(255,255,255,0.32)", lineHeight: 1.5 }}>
                Based in the Duluth, GA area. Traveling throughout Maryland for interior projects.
              </span>
            </div>
          </div>

          {/* ── Col 4: Contact Info ───────────────────────────────────────────── */}
          <div>
            <FooterHeading>Contact Us</FooterHeading>

            <div style={{ display: "flex", flexDirection: "column", gap: "18px" }}>

              {/* Phone */}
              <a
                href="tel:+13013004172"
                style={{
                  display: "flex",
                  alignItems: "center",
                  gap: "12px",
                  textDecoration: "none",
                  transition: "opacity 0.2s",
                }}
                onMouseEnter={(e) => e.currentTarget.style.opacity = "0.8"}
                onMouseLeave={(e) => e.currentTarget.style.opacity = "1"}
              >
                <div style={{ width: "36px", height: "36px", borderRadius: "6px", background: `rgba(201,168,76,0.1)`, border: `1px solid rgba(201,168,76,0.2)`, display: "flex", alignItems: "center", justifyContent: "center", flexShrink: 0 }}>
                  <svg viewBox="0 0 24 24" fill={C.gold} style={{ width: "16px", height: "16px" }}>
                    <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                  </svg>
                </div>
                <div>
                  <p style={{ fontFamily: "'Montserrat', sans-serif", fontSize: "10px", fontWeight: 600, letterSpacing: "0.1em", textTransform: "uppercase", color: "rgba(255,255,255,0.35)", margin: 0 }}>Phone</p>
                  <p style={{ fontFamily: "'Montserrat', sans-serif", fontSize: "14px", fontWeight: 700, color: "#fff", margin: 0, marginTop: "2px" }}>(301) 300-4172</p>
                </div>
              </a>

              {/* WhatsApp */}
              <a
                href="https://wa.me/13013004172"
                target="_blank"
                rel="noopener noreferrer"
                style={{ display: "flex", alignItems: "center", gap: "12px", textDecoration: "none", transition: "opacity 0.2s" }}
                onMouseEnter={(e) => e.currentTarget.style.opacity = "0.8"}
                onMouseLeave={(e) => e.currentTarget.style.opacity = "1"}
              >
                <div style={{ width: "36px", height: "36px", borderRadius: "6px", background: "rgba(37,211,102,0.1)", border: "1px solid rgba(37,211,102,0.2)", display: "flex", alignItems: "center", justifyContent: "center", flexShrink: 0 }}>
                  <svg viewBox="0 0 24 24" fill="#25D366" style={{ width: "17px", height: "17px" }}>
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                  </svg>
                </div>
                <div>
                  <p style={{ fontFamily: "'Montserrat', sans-serif", fontSize: "10px", fontWeight: 600, letterSpacing: "0.1em", textTransform: "uppercase", color: "rgba(255,255,255,0.35)", margin: 0 }}>WhatsApp</p>
                  <p style={{ fontFamily: "'Montserrat', sans-serif", fontSize: "14px", fontWeight: 700, color: "#fff", margin: 0, marginTop: "2px" }}>Message Us</p>
                </div>
              </a>

              {/* Email placeholder */}
              <a
                href="mailto:info@yourcompany.com"
                style={{ display: "flex", alignItems: "center", gap: "12px", textDecoration: "none", transition: "opacity 0.2s" }}
                onMouseEnter={(e) => e.currentTarget.style.opacity = "0.8"}
                onMouseLeave={(e) => e.currentTarget.style.opacity = "1"}
              >
                <div style={{ width: "36px", height: "36px", borderRadius: "6px", background: "rgba(74,111,138,0.12)", border: "1px solid rgba(74,111,138,0.2)", display: "flex", alignItems: "center", justifyContent: "center", flexShrink: 0 }}>
                  <svg viewBox="0 0 24 24" fill={C.steel} style={{ width: "16px", height: "16px" }}>
                    <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                  </svg>
                </div>
                <div>
                  <p style={{ fontFamily: "'Montserrat', sans-serif", fontSize: "10px", fontWeight: 600, letterSpacing: "0.1em", textTransform: "uppercase", color: "rgba(255,255,255,0.35)", margin: 0 }}>Email</p>
                  <p style={{ fontFamily: "'Montserrat', sans-serif", fontSize: "13px", fontWeight: 600, color: "rgba(255,255,255,0.7)", margin: 0, marginTop: "2px" }}>info@yourcompany.com</p>
                </div>
              </a>

            </div>

            {/* Free Estimate CTA */}
            <a
              href="/contact"
              style={{
                display: "inline-flex",
                alignItems: "center",
                justifyContent: "center",
                width: "100%",
                marginTop: "28px",
                padding: "14px 0",
                background: C.gold,
                color: C.navy,
                fontFamily: "'Montserrat', sans-serif",
                fontSize: "11px",
                fontWeight: 800,
                letterSpacing: "0.13em",
                textTransform: "uppercase",
                textDecoration: "none",
                borderRadius: "4px",
                transition: "background 0.2s, transform 0.15s",
                boxShadow: `0 2px 14px rgba(201,168,76,0.25)`,
              }}
              onMouseEnter={(e) => {
                e.currentTarget.style.background = C.goldHover
                e.currentTarget.style.transform = "translateY(-1px)"
              }}
              onMouseLeave={(e) => {
                e.currentTarget.style.background = C.gold
                e.currentTarget.style.transform = "none"
              }}
            >
              Request a Free Estimate
            </a>
          </div>

        </div>

        {/* ── Bottom Bar ────────────────────────────────────────────────────── */}
        <div style={{ borderTop: "1px solid rgba(255,255,255,0.07)" }}>
          <div
            style={{
              maxWidth: "1280px",
              margin: "0 auto",
              padding: "20px 24px",
              display: "flex",
              alignItems: "center",
              justifyContent: "space-between",
              flexWrap: "wrap",
              gap: "12px",
            }}
          >
            {/* Copyright */}
            <p
              style={{
                fontFamily: "'Inter', sans-serif",
                fontSize: "11px",
                color: "rgba(255,255,255,0.25)",
                margin: 0,
              }}
            >
              © {currentYear} Your Company Name. All rights reserved.
            </p>

            {/* Legal links + MHIC inline */}
            <div style={{ display: "flex", alignItems: "center", gap: "20px", flexWrap: "wrap" }}>
              <a href="/privacy-policy" style={{ fontFamily: "'Montserrat', sans-serif", fontSize: "10px", fontWeight: 600, letterSpacing: "0.08em", textTransform: "uppercase", color: "rgba(255,255,255,0.25)", textDecoration: "none", transition: "color 0.2s" }}
                onMouseEnter={(e) => e.currentTarget.style.color = C.gold}
                onMouseLeave={(e) => e.currentTarget.style.color = "rgba(255,255,255,0.25)"}
              >
                Privacy Policy
              </a>
              <span style={{ color: "rgba(255,255,255,0.12)", fontSize: "10px" }}>|</span>
              <span style={{ fontFamily: "'Montserrat', sans-serif", fontSize: "10px", fontWeight: 600, letterSpacing: "0.08em", textTransform: "uppercase", color: "rgba(255,255,255,0.25)" }}>
                MHIC #154361
              </span>
            </div>
          </div>
        </div>

      </footer>
    </>
  )
}

export default Footer