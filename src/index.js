import React from "react"
import ReactDOM from "react-dom/client"

import Navbar      from "./scripts/Navbar"
import Footer      from "./scripts/Footer"
import ContactForm from "./scripts/ContactForm"

// ── Navbar ─────────────────────────────────────────────────────────────────────
if (document.querySelector("#navbar-root")) {
  ReactDOM.createRoot(document.querySelector("#navbar-root")).render(<Navbar />)
}

// ── Footer ─────────────────────────────────────────────────────────────────────
if (document.querySelector("#footer-root")) {
  ReactDOM.createRoot(document.querySelector("#footer-root")).render(<Footer />)
}

// ── ContactForm — full mode (Block 10 homepage, contact page) ─────────────────
// Reads data-cf-config from its own mount div only (may contain email, address, etc.)
const contactRoot = document.querySelector("#contact-form-root")
if (contactRoot) {
  let contactConfig = {}
  try { contactConfig = JSON.parse(contactRoot.dataset.cfConfig || "{}") } catch {}
  ReactDOM.createRoot(contactRoot).render(<ContactForm propConfig={contactConfig} />)
}

// ── ContactForm — compact mode (hero embed) ───────────────────────────────────
// Always compact — config hardcoded here, never reads from other mounts
const heroRoot = document.querySelector("#hero-form-root")
if (heroRoot) {
  let heroConfig = {}
  try { heroConfig = JSON.parse(heroRoot.dataset.cfConfig || "{}") } catch {}
  ReactDOM.createRoot(heroRoot).render(<ContactForm propConfig={heroConfig} />)
}