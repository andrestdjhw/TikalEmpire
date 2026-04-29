import React, { useState, useEffect } from "react"

// ─── Brand Tokens ──────────────────────────────────────────────────────────────
const C = {
  navy:     "#0d1b2a",   // Deep Navy — primary bg, navbar, footer
  gold:     "#C9A84C",   // Refined Gold — CTAs, accents, ticker
  goldHover:"#DFB95A",   // Gold brightened on hover
  navyDeep: "#060d18",   // Deeper navy for top bar
  carbon:   "#2f2f2f",   // Body text
  steel:    "#415a77",   // Steel Blue — secondary elements
  midGray:  "#6b7280",   // Mid Gray — subtle text, dividers
  lightGray:"#d1d5db",   // Light Gray — section backgrounds
}

// ─── Static Data ───────────────────────────────────────────────────────────────
const services = [
  { label: "Kitchen Remodeling",   href: "/kitchen-remodeling" },
  { label: "Bathroom Remodeling",  href: "/bathroom-remodeling" },
  { label: "Flooring Installation", href: "/flooring-installation" },
]

const navLinks = [
  { label: "Home",     href: "/" },
  { label: "Services", href: "#", dropdown: services },
  { label: "Our Work", href: "/our-work" },
  { label: "About Us", href: "/about-us" },
  { label: "Contact",  href: "/contact" },
]

const tickerItems = [
  "MHIC #154361",
  "Licensed & Insured",
  "Howard County",
  "Montgomery County",
  "Frederick County",
  "Kitchen · Bath · Flooring",
  "Schedule Discipline",
  "Your home, transformed with certainty.",
]

// ─── Ticker ────────────────────────────────────────────────────────────────────
// Spec: Navy background · Gold text · Full-width marquee
function TickerBand() {
  const segment = tickerItems.join("   ·   ")
  return (
    <div style={{ backgroundColor: C.navyDeep, borderTop: `1px solid rgba(201,168,76,0.12)`, overflow: "hidden", padding: "7px 0" }}>
      <div style={{ display: "flex", animation: "navTicker 40s linear infinite", willChange: "transform" }}>
        {[0, 1, 2].map((i) => (
          <span
            key={i}
            style={{
              fontFamily: "'Montserrat', sans-serif",
              fontSize: "10px",
              fontWeight: 700,
              letterSpacing: "0.2em",
              textTransform: "uppercase",
              color: C.gold,
              paddingRight: "7rem",
              flexShrink: 0,
              whiteSpace: "nowrap",
            }}
          >
            {segment}
          </span>
        ))}
      </div>
    </div>
  )
}

// ─── Services Dropdown ─────────────────────────────────────────────────────────
function ServicesDropdown({ open, onEnter, onLeave }) {
  return (
    <div
      onMouseEnter={onEnter}
      onMouseLeave={onLeave}
      style={{
        position: "absolute",
        top: "calc(100% + 14px)",
        left: "50%",
        width: "228px",
        backgroundColor: C.navy,
        border: `1px solid rgba(201,168,76,0.28)`,
        borderRadius: "6px",
        boxShadow: "0 20px 52px rgba(0,0,0,0.5)",
        overflow: "hidden",
        zIndex: 100,
        opacity: open ? 1 : 0,
        pointerEvents: open ? "auto" : "none",
        transform: open
          ? "translateX(-50%) translateY(0)"
          : "translateX(-50%) translateY(-8px)",
        transition: "opacity 0.22s ease, transform 0.22s ease",
      }}
    >
      {/* Gold accent line at top */}
      <div style={{ height: "2px", background: `linear-gradient(90deg, transparent, ${C.gold}, transparent)` }} />
      {services.map((item, i) => (
        <a
          key={item.href}
          href={item.href}
          className="nb-dropdown-item"
          style={{
            display: "flex",
            alignItems: "center",
            gap: "12px",
            padding: "13px 20px",
            fontFamily: "'Montserrat', sans-serif",
            fontSize: "11px",
            fontWeight: 600,
            letterSpacing: "0.08em",
            textTransform: "uppercase",
            color: "rgba(255,255,255,0.7)",
            textDecoration: "none",
            borderBottom: i < services.length - 1 ? "1px solid rgba(255,255,255,0.06)" : "none",
            transition: "color 0.18s, background 0.18s, padding-left 0.18s",
          }}
          onMouseEnter={(e) => {
            e.currentTarget.style.color = C.gold
            e.currentTarget.style.background = "rgba(201,168,76,0.08)"
            e.currentTarget.style.paddingLeft = "24px"
          }}
          onMouseLeave={(e) => {
            e.currentTarget.style.color = "rgba(255,255,255,0.7)"
            e.currentTarget.style.background = "transparent"
            e.currentTarget.style.paddingLeft = "20px"
          }}
        >
          <span style={{ width: "5px", height: "5px", borderRadius: "50%", backgroundColor: C.gold, flexShrink: 0, opacity: 0.75 }} />
          {item.label}
        </a>
      ))}
    </div>
  )
}

// ─── Navbar ────────────────────────────────────────────────────────────────────
function Navbar() {
  const [mobileOpen, setMobileOpen]                 = useState(false)
  const [servicesOpen, setServicesOpen]             = useState(false)
  const [mobileServicesOpen, setMobileServicesOpen] = useState(false)
  const [scrolled, setScrolled]                     = useState(false)
  const closeTimer                                  = React.useRef(null)

  const openServices  = () => { clearTimeout(closeTimer.current); setServicesOpen(true) }
  const closeServices = () => { closeTimer.current = setTimeout(() => setServicesOpen(false), 120) }

  useEffect(() => {
    const onScroll = () => setScrolled(window.scrollY > 10)
    window.addEventListener("scroll", onScroll)
    return () => window.removeEventListener("scroll", onScroll)
  }, [])

  useEffect(() => {
    const onResize = () => { if (window.innerWidth >= 1024) setMobileOpen(false) }
    window.addEventListener("resize", onResize)
    return () => window.removeEventListener("resize", onResize)
  }, [])

  // Lock body scroll when mobile menu is open
  useEffect(() => {
    document.body.style.overflow = mobileOpen ? "hidden" : ""
    return () => { document.body.style.overflow = "" }
  }, [mobileOpen])

  return (
    <>
      {/* ── Fonts & Global Styles ─────────────────────────────────────────── */}
      <style>{`
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Montserrat:wght@400;500;600;700;800&family=Inter:wght@400;500&display=swap');

        @keyframes navTicker {
          from { transform: translateX(0); }
          to   { transform: translateX(-33.333%); }
        }

        .nb-link {
          position: relative;
          font-family: 'Montserrat', sans-serif;
          font-size: 11px;
          font-weight: 700;
          letter-spacing: 0.12em;
          text-transform: uppercase;
          color: rgba(255,255,255,0.75);
          text-decoration: none;
          padding-bottom: 3px;
          transition: color 0.2s;
          background: none;
          border: none;
          cursor: pointer;
        }
        .nb-link::after {
          content: '';
          position: absolute;
          bottom: -3px;
          left: 0;
          width: 0;
          height: 2px;
          background: ${C.gold};
          transition: width 0.25s ease;
          border-radius: 1px;
        }
        .nb-link:hover        { color: #fff; }
        .nb-link:hover::after { width: 100%; }

        .nb-cta {
          display: inline-flex;
          align-items: center;
          justify-content: center;
          background: ${C.gold};
          color: ${C.navy};
          font-family: 'Montserrat', sans-serif;
          font-size: 11px;
          font-weight: 800;
          letter-spacing: 0.13em;
          text-transform: uppercase;
          text-decoration: none;
          padding: 0 22px;
          height: 46px;
          min-height: 48px;
          border-radius: 4px;
          white-space: nowrap;
          border: none;
          cursor: pointer;
          transition: background 0.2s, transform 0.15s, box-shadow 0.2s;
          box-shadow: 0 2px 14px rgba(201,168,76,0.28);
        }
        .nb-cta:hover {
          background: ${C.goldHover};
          transform: translateY(-1px);
          box-shadow: 0 6px 22px rgba(201,168,76,0.38);
          color: ${C.navy};
          text-decoration: none;
        }

        .nb-whatsapp {
          position: fixed;
          bottom: 24px;
          right: 24px;
          z-index: 9999;
          width: 56px;
          height: 56px;
          border-radius: 50%;
          background: #25D366;
          display: flex;
          align-items: center;
          justify-content: center;
          box-shadow: 0 8px 28px rgba(37,211,102,0.38);
          transition: transform 0.22s ease, box-shadow 0.22s ease;
          text-decoration: none;
        }
        .nb-whatsapp:hover {
          transform: scale(1.1) translateY(-2px);
          box-shadow: 0 14px 36px rgba(37,211,102,0.52);
        }

        /* ── Responsive — replaces Tailwind lg:/sm: classes ─────────────────── */
        .nb-topbar        { display: none; }
        .nb-desktop-nav   { display: none; align-items: center; gap: 38px; }
        .nb-hamburger     { display: flex; }
        .nb-mobile-menu   { display: block; }
        .nb-cta-header    { display: none; }

        @media (min-width: 640px) {
          .nb-topbar     { display: block; }
          .nb-cta-header { display: inline-flex; }
        }
        @media (min-width: 1024px) {
          .nb-desktop-nav { display: flex; }
          .nb-hamburger   { display: none !important; }
          .nb-mobile-menu { display: none !important; max-height: 0 !important; overflow: hidden !important; }
        }
      `}</style>

      {/* ── Top Bar ───────────────────────────────────────────────────────── */}
      <div
        className="nb-topbar"
        style={{ backgroundColor: C.navyDeep, borderBottom: "1px solid rgba(255,255,255,0.06)" }}
      >
        <div
          style={{
            maxWidth: "1280px",
            margin: "0 auto",
            padding: "7px 24px",
            display: "flex",
            alignItems: "center",
            justifyContent: "space-between",
            gap: "16px",
          }}
        >

          {/* ── Left: phone + email ── */}
          <div style={{ display: "flex", alignItems: "center", gap: "18px" }}>
            <a href="tel:+13013004172" style={{ display: "flex", alignItems: "center", gap: "6px", fontFamily: "'Montserrat',sans-serif", fontSize: "11px", fontWeight: 700, letterSpacing: "0.05em", color: C.gold, textDecoration: "none", transition: "color 0.2s" }}
              onMouseEnter={(e) => e.currentTarget.style.color = C.goldHover}
              onMouseLeave={(e) => e.currentTarget.style.color = C.gold}
            >
              <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
              </svg>
              (301) 300-4172
            </a>
            <span style={{ color: "rgba(255,255,255,0.12)", fontSize: "12px" }}>|</span>
            <a href="mailto:info@tikalempire.com" style={{ display: "flex", alignItems: "center", gap: "6px", fontFamily: "'Montserrat',sans-serif", fontSize: "11px", fontWeight: 600, letterSpacing: "0.04em", color: "rgba(255,255,255,0.5)", textDecoration: "none", transition: "color 0.2s" }}
              onMouseEnter={(e) => e.currentTarget.style.color = C.gold}
              onMouseLeave={(e) => e.currentTarget.style.color = "rgba(255,255,255,0.5)"}
            >
              <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
              </svg>
              info@tikalempire.com
            </a>
          </div>

          {/* ── Center: geo tag clickable ── */}
          <a
            href="https://maps.google.com/?q=Maryland"
            target="_blank"
            rel="noopener noreferrer"
            style={{ display: "flex", alignItems: "center", gap: "7px", fontFamily: "'Montserrat',sans-serif", fontSize: "11px", fontWeight: 600, letterSpacing: "0.09em", textTransform: "uppercase", color: "rgba(255,255,255,0.45)", textDecoration: "none", transition: "color 0.2s" }}
            onMouseEnter={(e) => e.currentTarget.style.color = C.gold}
            onMouseLeave={(e) => e.currentTarget.style.color = "rgba(255,255,255,0.45)"}
          >
            <svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
            </svg>
            Serving Maryland — 50-mile radius
          </a>

          {/* ── Right: social icons ── */}
          <div style={{ display: "flex", alignItems: "center", gap: "6px" }}>
            {/* Facebook */}
            <a href="https://facebook.com/tikalempire" target="_blank" rel="noopener noreferrer" aria-label="Facebook"
              style={{ width: "28px", height: "28px", borderRadius: "5px", display: "flex", alignItems: "center", justifyContent: "center", color: "rgba(255,255,255,0.4)", background: "rgba(255,255,255,0.05)", transition: "color 0.2s, background 0.2s" }}
              onMouseEnter={(e) => { e.currentTarget.style.color = C.gold; e.currentTarget.style.background = "rgba(201,168,76,0.1)" }}
              onMouseLeave={(e) => { e.currentTarget.style.color = "rgba(255,255,255,0.4)"; e.currentTarget.style.background = "rgba(255,255,255,0.05)" }}
            >
              <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12.07h2.54V9.845c0-2.503 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12.07h2.773l-.443 2.89h-2.33v6.988C20.343 21.128 24 16.991 24 12.073z" />
              </svg>
            </a>
            {/* Instagram */}
            <a href="https://instagram.com/tikalempire" target="_blank" rel="noopener noreferrer" aria-label="Instagram"
              style={{ width: "28px", height: "28px", borderRadius: "5px", display: "flex", alignItems: "center", justifyContent: "center", color: "rgba(255,255,255,0.4)", background: "rgba(255,255,255,0.05)", transition: "color 0.2s, background 0.2s" }}
              onMouseEnter={(e) => { e.currentTarget.style.color = C.gold; e.currentTarget.style.background = "rgba(201,168,76,0.1)" }}
              onMouseLeave={(e) => { e.currentTarget.style.color = "rgba(255,255,255,0.4)"; e.currentTarget.style.background = "rgba(255,255,255,0.05)" }}
            >
              <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
              </svg>
            </a>
            {/* Google */}
            <a href="https://g.page/r/YOUR_GOOGLE_PLACE_ID" target="_blank" rel="noopener noreferrer" aria-label="Google Reviews"
              style={{ width: "28px", height: "28px", borderRadius: "5px", display: "flex", alignItems: "center", justifyContent: "center", background: "rgba(255,255,255,0.05)", transition: "background 0.2s" }}
              onMouseEnter={(e) => e.currentTarget.style.background = "rgba(201,168,76,0.1)"}
              onMouseLeave={(e) => e.currentTarget.style.background = "rgba(255,255,255,0.05)"}
            >
              <svg viewBox="0 0 24 24" style={{ width: "14px", height: "14px" }}>
                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" />
                <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" />
              </svg>
            </a>
          </div>

        </div>
      </div>

      {/* ── Main Header ───────────────────────────────────────────────────── */}
      <header
        style={{
          position: "sticky",
          top: 0,
          zIndex: 50,
          backgroundColor: C.navy,
          transition: "box-shadow 0.3s ease",
          boxShadow: scrolled
            ? "0 4px 40px rgba(0,0,0,0.55)"
            : "0 1px 0 rgba(255,255,255,0.05)",
        }}
      >
        <div
          style={{
            maxWidth: "1280px",
            margin: "0 auto",
            padding: "0 24px",
            height: "76px",
            display: "flex",
            alignItems: "center",
            justifyContent: "space-between",
          }}
        >
          {/* Logo */}
          <a href="/" style={{ textDecoration: "none", display: "flex", alignItems: "center", flexShrink: 0 }}>
            <img
              src="/wp-content/uploads/2026/04/Tikal_imagotipo_condensado-scaled.png"
              alt="Tikal Empire — Kitchen, Bath & Flooring"
              style={{ height: "48px", width: "auto", display: "block" }}
            />
          </a>

          {/* Desktop Nav */}
          <nav
            className="nb-desktop-nav"
            style={{ alignItems: "center", gap: "38px" }}
          >
            {navLinks.map((link) =>
              link.dropdown ? (
                <div
                  key={link.label}
                  style={{ position: "relative" }}
                  onMouseEnter={openServices}
                  onMouseLeave={closeServices}
                >
                  <button
                    className="nb-link"
                    style={{
                      display: "flex",
                      alignItems: "center",
                      gap: "5px",
                      color: servicesOpen ? "#fff" : undefined,
                      padding: 0,
                    }}
                    aria-haspopup="true"
                    aria-expanded={servicesOpen}
                  >
                    {link.label}
                    <svg
                      width="10" height="10"
                      viewBox="0 0 20 20"
                      fill={C.gold}
                      style={{ transition: "transform 0.2s", transform: servicesOpen ? "rotate(180deg)" : "rotate(0deg)", flexShrink: 0 }}
                    >
                      <path fillRule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clipRule="evenodd" />
                    </svg>
                  </button>
                  <ServicesDropdown open={servicesOpen} onEnter={openServices} onLeave={closeServices} />
                </div>
              ) : (
                <a key={link.label} href={link.href} className="nb-link">{link.label}</a>
              )
            )}
          </nav>

          {/* CTA + Hamburger */}
          <div style={{ display: "flex", alignItems: "center", gap: "14px" }}>
            <a href="/contact" className="nb-cta nb-cta-header">
              Request a Free Estimate
            </a>

            {/* Hamburger — mobile only */}
            <button
              className="nb-hamburger"
              onClick={() => setMobileOpen((o) => !o)}
              aria-label={mobileOpen ? "Close menu" : "Open menu"}
              style={{
                background: "none",
                border: "none",
                cursor: "pointer",
                display: "flex",
                flexDirection: "column",
                gap: "5px",
                padding: "6px",
              }}
            >
              {[
                mobileOpen ? "translateY(7px) rotate(45deg)" : "none",
                null, // middle bar
                mobileOpen ? "translateY(-7px) rotate(-45deg)" : "none",
              ].map((transform, i) =>
                i === 1 ? (
                  <span key={i} style={{ display: "block", width: "22px", height: "2px", background: "rgba(255,255,255,0.9)", borderRadius: "2px", opacity: mobileOpen ? 0 : 1, transition: "opacity 0.2s" }} />
                ) : (
                  <span key={i} style={{ display: "block", width: "22px", height: "2px", background: "rgba(255,255,255,0.9)", borderRadius: "2px", transformOrigin: "center", transition: "transform 0.25s ease", transform: transform || "none" }} />
                )
              )}
            </button>
          </div>
        </div>

        {/* ── Mobile Menu ─────────────────────────────────────────────────── */}
        <div
          className="nb-mobile-menu"
          style={{
            backgroundColor: "#060d18",
            maxHeight: mobileOpen ? "620px" : "0",
            overflow: "hidden",
            transition: "max-height 0.35s cubic-bezier(0.4,0,0.2,1)",
            borderTop: mobileOpen ? `1px solid rgba(201,168,76,0.15)` : "none",
          }}
        >
          <div style={{ padding: "16px 24px 32px" }}>
            {navLinks.map((link) =>
              link.dropdown ? (
                <div key={link.label} style={{ borderBottom: "1px solid rgba(255,255,255,0.06)" }}>
                  <button
                    onClick={() => setMobileServicesOpen((o) => !o)}
                    style={{
                      width: "100%",
                      background: "none",
                      border: "none",
                      cursor: "pointer",
                      display: "flex",
                      alignItems: "center",
                      justifyContent: "space-between",
                      padding: "14px 0",
                      fontFamily: "'Montserrat', sans-serif",
                      fontSize: "11px",
                      fontWeight: 700,
                      letterSpacing: "0.14em",
                      textTransform: "uppercase",
                      color: "rgba(255,255,255,0.8)",
                    }}
                  >
                    {link.label}
                    <svg width="11" height="11" viewBox="0 0 20 20" fill={C.gold} style={{ transition: "transform 0.2s", transform: mobileServicesOpen ? "rotate(180deg)" : "rotate(0deg)" }}>
                      <path fillRule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clipRule="evenodd" />
                    </svg>
                  </button>
                  {mobileServicesOpen && (
                    <div style={{ paddingLeft: "16px", paddingBottom: "8px" }}>
                      {services.map((item) => (
                        <a
                          key={item.href}
                          href={item.href}
                          style={{ display: "flex", alignItems: "center", gap: "10px", padding: "10px 0", fontFamily: "'Montserrat', sans-serif", fontSize: "11px", fontWeight: 600, letterSpacing: "0.08em", textTransform: "uppercase", color: "rgba(255,255,255,0.5)", textDecoration: "none", transition: "color 0.18s" }}
                          onMouseEnter={(e) => e.currentTarget.style.color = C.gold}
                          onMouseLeave={(e) => e.currentTarget.style.color = "rgba(255,255,255,0.5)"}
                        >
                          <span style={{ width: "4px", height: "4px", borderRadius: "50%", backgroundColor: C.gold, flexShrink: 0 }} />
                          {item.label}
                        </a>
                      ))}
                    </div>
                  )}
                </div>
              ) : (
                <a
                  key={link.label}
                  href={link.href}
                  style={{ display: "block", padding: "14px 0", fontFamily: "'Montserrat', sans-serif", fontSize: "11px", fontWeight: 700, letterSpacing: "0.14em", textTransform: "uppercase", color: "rgba(255,255,255,0.8)", textDecoration: "none", borderBottom: "1px solid rgba(255,255,255,0.06)", transition: "color 0.18s" }}
                  onMouseEnter={(e) => e.currentTarget.style.color = C.gold}
                  onMouseLeave={(e) => e.currentTarget.style.color = "rgba(255,255,255,0.8)"}
                >
                  {link.label}
                </a>
              )
            )}

            {/* Mobile CTA — full width, 48px+ tap target */}
            <a href="/contact" className="nb-cta" style={{ width: "100%", marginTop: "22px" }}>
              Request a Free Estimate
            </a>

            {/* Contact info for mobile (replaces hidden top bar) */}
            <div style={{ marginTop: "20px", paddingTop: "18px", borderTop: "1px solid rgba(255,255,255,0.07)", display: "flex", flexDirection: "column", gap: "8px" }}>
              <a
                href="tel:+13013004172"
                style={{ display: "flex", alignItems: "center", gap: "8px", fontFamily: "'Montserrat', sans-serif", fontSize: "12px", fontWeight: 700, letterSpacing: "0.05em", color: C.gold, textDecoration: "none" }}
              >
                <svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                </svg>
                (301) 300-4172
              </a>
              <span style={{ fontFamily: "'Montserrat', sans-serif", fontSize: "10px", fontWeight: 600, letterSpacing: "0.1em", textTransform: "uppercase", color: "rgba(255,255,255,0.3)" }}>
                MHIC #154361 · Licensed &amp; Insured · Serving Maryland
              </span>
            </div>
          </div>
        </div>

        {/* Ticker — Navy bg · Gold text per spec */}
        <TickerBand />
      </header>

      {/* ── WhatsApp FAB — Fixed, always visible ─────────────────────────── */}
      <a
        href="https://wa.me/13013004172"
        target="_blank"
        rel="noopener noreferrer"
        className="nb-whatsapp"
        aria-label="Contact us on WhatsApp"
      >
        <svg viewBox="0 0 24 24" fill="white" style={{ width: "28px", height: "28px" }}>
          <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
        </svg>
      </a>
    </>
  )
}

export default Navbar