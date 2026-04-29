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
if (document.querySelector("#contact-form-root")) {
  ReactDOM.createRoot(document.querySelector("#contact-form-root")).render(<ContactForm />)
}

// ── ContactForm — compact mode (hero embed) ───────────────────────────────────
if (document.querySelector("#hero-form-root")) {
  ReactDOM.createRoot(document.querySelector("#hero-form-root")).render(<ContactForm />)
}