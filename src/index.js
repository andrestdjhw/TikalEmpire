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

// ── Contact Form ───────────────────────────────────────────────────────────────
if (document.querySelector("#contact-form-root")) {
  ReactDOM.createRoot(document.querySelector("#contact-form-root")).render(<ContactForm />)
}