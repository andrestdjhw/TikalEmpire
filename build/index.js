/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/scripts/ContactForm.js"
/*!************************************!*\
  !*** ./src/scripts/ContactForm.js ***!
  \************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


// ─────────────────────────────────────────────────────────────────────────────
//  ⚙️  CONFIGURATION — fill these in before deploying
// ─────────────────────────────────────────────────────────────────────────────

const EMAILJS_SERVICE_ID = "YOUR_SERVICE_ID";
const EMAILJS_TEMPLATE_ID = "YOUR_TEMPLATE_ID";
const EMAILJS_PUBLIC_KEY = "YOUR_PUBLIC_KEY";
const RECAPTCHA_SITE_KEY = "YOUR_SITE_KEY";

// ─────────────────────────────────────────────────────────────────────────────
//  Brand tokens
// ─────────────────────────────────────────────────────────────────────────────
const C = {
  navy: "#0d1b2a",
  gold: "#C9A84C",
  goldHov: "#DFB95A",
  steel: "#415a77",
  midGray: "#6b7280",
  lightGray: "#d1d5db"
};

// ─────────────────────────────────────────────────────────────────────────────
//  Default contact info (homepage / full mode variant)
// ─────────────────────────────────────────────────────────────────────────────
const DEFAULT_INFO = {
  headline: "Your Home Deserves Certainty.",
  headlineGold: "Let's Build It Together.",
  sub: "Whether you're planning a kitchen transformation, a bathroom renovation, or new flooring — Tikal Empire delivers the result you imagined, on time and without surprises.\n\nRequest your free in-home estimate today. No pressure. Just clarity.",
  phones: [{
    label: "Call Us Directly",
    number: "(301) 300-4172",
    href: "tel:+13013004172"
  }],
  email: null,
  address: null,
  whatsapp: "https://wa.me/13013004172",
  googleReviews: null
};

// ─────────────────────────────────────────────────────────────────────────────
//  Shared input base style
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
  WebkitAppearance: "none"
};

// ─────────────────────────────────────────────────────────────────────────────
//  Primitives
// ─────────────────────────────────────────────────────────────────────────────
function FieldLabel({
  children
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
    style: {
      display: "block",
      fontFamily: "'Montserrat', sans-serif",
      fontSize: "10px",
      fontWeight: 700,
      letterSpacing: "0.12em",
      textTransform: "uppercase",
      color: "rgba(255,255,255,0.45)",
      marginBottom: "6px"
    },
    children: children
  });
}
function FieldWrap({
  label,
  error,
  children
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(FieldLabel, {
      children: label
    }), children, error && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
      style: {
        display: "block",
        fontFamily: "'Inter', sans-serif",
        fontSize: "11px",
        color: "#ff6b6b",
        marginTop: "5px"
      },
      children: error
    })]
  });
}

// ─────────────────────────────────────────────────────────────────────────────
//  Icons
// ─────────────────────────────────────────────────────────────────────────────
const ICONS = {
  phone: color => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
    width: "17",
    height: "17",
    viewBox: "0 0 24 24",
    fill: color,
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"
    })
  }),
  email: color => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
    width: "17",
    height: "17",
    viewBox: "0 0 24 24",
    fill: color,
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"
    })
  }),
  pin: color => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
    width: "17",
    height: "17",
    viewBox: "0 0 24 24",
    fill: color,
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"
    })
  }),
  shield: color => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
    width: "20",
    height: "20",
    viewBox: "0 0 24 24",
    fill: color,
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-1 14l-3-3 1.41-1.41L11 12.17l4.59-4.58L17 9l-6 6z"
    })
  }),
  check: color => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
    width: "28",
    height: "28",
    viewBox: "0 0 24 24",
    fill: color,
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"
    })
  }),
  whatsapp: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
    viewBox: "0 0 24 24",
    fill: "#25D366",
    style: {
      width: "17px",
      height: "17px"
    },
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"
    })
  }),
  google: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
    viewBox: "0 0 24 24",
    style: {
      width: "18px",
      height: "18px",
      flexShrink: 0
    },
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      fill: "#4285F4",
      d: "M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      fill: "#34A853",
      d: "M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      fill: "#FBBC05",
      d: "M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      fill: "#EA4335",
      d: "M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"
    })]
  })
};

// ─────────────────────────────────────────────────────────────────────────────
//  IconBox
// ─────────────────────────────────────────────────────────────────────────────
function IconBox({
  bg,
  border,
  children
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
    style: {
      width: "42px",
      height: "42px",
      borderRadius: "8px",
      background: bg,
      border: `1px solid ${border}`,
      display: "flex",
      alignItems: "center",
      justifyContent: "center",
      flexShrink: 0
    },
    children: children
  });
}

// ─────────────────────────────────────────────────────────────────────────────
//  ContactInfo — left panel (full mode only)
// ─────────────────────────────────────────────────────────────────────────────
function ContactInfo({
  info
}) {
  const paragraphs = info.sub.split("\n\n");
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      style: {
        display: "inline-flex",
        alignItems: "center",
        gap: "12px",
        marginBottom: "20px"
      },
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        style: {
          width: "36px",
          height: "1px",
          background: C.gold
        }
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        style: {
          fontFamily: "'Montserrat', sans-serif",
          fontSize: "10px",
          fontWeight: 700,
          letterSpacing: "0.25em",
          textTransform: "uppercase",
          color: C.gold
        },
        children: "Ready to Start?"
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("h2", {
      style: {
        fontFamily: "'Playfair Display', serif",
        fontSize: "clamp(1.8rem,3.5vw,3rem)",
        fontWeight: 900,
        color: "#fff",
        lineHeight: 1.12,
        marginBottom: "20px"
      },
      children: [info.headline, " ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        style: {
          color: C.gold
        },
        children: info.headlineGold
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      style: {
        marginBottom: "32px"
      },
      children: paragraphs.map((para, i) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
        style: {
          fontFamily: "'Inter', sans-serif",
          fontSize: "15px",
          color: "rgba(255,255,255,0.58)",
          lineHeight: 1.8,
          margin: i < paragraphs.length - 1 ? "0 0 14px" : 0
        },
        children: para
      }, i))
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      style: {
        display: "flex",
        flexDirection: "column",
        gap: "16px",
        marginBottom: "28px"
      },
      children: [info.phones.map(ph => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
        href: ph.href,
        style: {
          display: "flex",
          alignItems: "center",
          gap: "14px",
          textDecoration: "none"
        },
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconBox, {
          bg: "rgba(201,168,76,0.1)",
          border: "rgba(201,168,76,0.2)",
          children: ICONS.phone(C.gold)
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
            style: {
              fontFamily: "'Amino',sans-serif",
              fontSize: "10px",
              fontWeight: 600,
              letterSpacing: "0.1em",
              textTransform: "uppercase",
              color: "rgba(255,255,255,0.32)",
              margin: 0
            },
            children: ph.label
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
            style: {
              fontFamily: "'Amino',sans-serif",
              fontSize: "17px",
              fontWeight: 700,
              color: "#fff",
              margin: "3px 0 0"
            },
            children: ph.number
          })]
        })]
      }, ph.href)), info.email && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
        href: `mailto:${info.email}`,
        style: {
          display: "flex",
          alignItems: "center",
          gap: "14px",
          textDecoration: "none"
        },
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconBox, {
          bg: "rgba(74,111,138,0.12)",
          border: "rgba(74,111,138,0.2)",
          children: ICONS.email(C.steel)
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
            style: {
              fontFamily: "'Amino',sans-serif",
              fontSize: "10px",
              fontWeight: 600,
              letterSpacing: "0.1em",
              textTransform: "uppercase",
              color: "rgba(255,255,255,0.32)",
              margin: 0
            },
            children: "Email"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
            style: {
              fontFamily: "'Amino',sans-serif",
              fontSize: "14px",
              fontWeight: 600,
              color: "rgba(255,255,255,0.75)",
              margin: "3px 0 0"
            },
            children: info.email
          })]
        })]
      }), info.address && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        style: {
          display: "flex",
          alignItems: "flex-start",
          gap: "14px"
        },
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconBox, {
          bg: "rgba(74,111,138,0.12)",
          border: "rgba(74,111,138,0.2)",
          children: ICONS.pin(C.steel)
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
            style: {
              fontFamily: "'Amino',sans-serif",
              fontSize: "10px",
              fontWeight: 600,
              letterSpacing: "0.1em",
              textTransform: "uppercase",
              color: "rgba(255,255,255,0.32)",
              margin: 0
            },
            children: "Address"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
            style: {
              fontFamily: "'Amino',sans-serif",
              fontSize: "14px",
              fontWeight: 500,
              color: "rgba(255,255,255,0.65)",
              margin: "3px 0 0",
              lineHeight: 1.5
            },
            children: info.address.split("\n").map((line, i, arr) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)((react__WEBPACK_IMPORTED_MODULE_0___default().Fragment), {
              children: [line, i < arr.length - 1 && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("br", {})]
            }, i))
          })]
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
        href: info.whatsapp || "https://wa.me/13013004172",
        target: "_blank",
        rel: "noopener noreferrer",
        style: {
          display: "flex",
          alignItems: "center",
          gap: "14px",
          textDecoration: "none"
        },
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconBox, {
          bg: "rgba(37,211,102,0.1)",
          border: "rgba(37,211,102,0.2)",
          children: ICONS.whatsapp
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
            style: {
              fontFamily: "'Amino',sans-serif",
              fontSize: "10px",
              fontWeight: 600,
              letterSpacing: "0.1em",
              textTransform: "uppercase",
              color: "rgba(255,255,255,0.32)",
              margin: 0
            },
            children: "WhatsApp"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
            style: {
              fontFamily: "'Amino',sans-serif",
              fontSize: "15px",
              fontWeight: 700,
              color: "#fff",
              margin: "3px 0 0"
            },
            children: "Message Us"
          })]
        })]
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      style: {
        display: "inline-flex",
        alignItems: "center",
        gap: "12px",
        padding: "12px 18px",
        borderRadius: "6px",
        border: "1px solid rgba(201,168,76,0.25)",
        background: "rgba(201,168,76,0.05)"
      },
      children: [ICONS.shield(C.gold), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
          style: {
            fontFamily: "'Amino',sans-serif",
            fontSize: "11px",
            fontWeight: 800,
            letterSpacing: "0.08em",
            textTransform: "uppercase",
            color: C.gold,
            margin: 0
          },
          children: "MHIC #154361 \u2014 Licensed & Insured"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
          style: {
            fontFamily: "'Amino',sans-serif",
            fontSize: "11px",
            color: "rgba(255,255,255,0.32)",
            margin: "4px 0 0"
          },
          children: "We respond within 24\u201348 hours. No pressure. Just clarity."
        })]
      })]
    }), info.googleReviews && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
      href: info.googleReviews,
      target: "_blank",
      rel: "noopener noreferrer",
      style: {
        display: "inline-flex",
        alignItems: "center",
        gap: "10px",
        padding: "10px 16px",
        borderRadius: "6px",
        marginTop: "10px",
        border: "1px solid rgba(255,255,255,0.1)",
        background: "rgba(255,255,255,0.04)",
        textDecoration: "none",
        transition: "border-color 0.2s, background 0.2s"
      },
      onMouseEnter: e => {
        e.currentTarget.style.borderColor = "rgba(201,168,76,0.4)";
        e.currentTarget.style.background = "rgba(201,168,76,0.06)";
      },
      onMouseLeave: e => {
        e.currentTarget.style.borderColor = "rgba(255,255,255,0.1)";
        e.currentTarget.style.background = "rgba(255,255,255,0.04)";
      },
      children: [ICONS.google, /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        style: {
          fontFamily: "'Amino',sans-serif",
          fontSize: "11px",
          fontWeight: 600,
          letterSpacing: "0.06em",
          color: "rgba(255,255,255,0.55)"
        },
        children: "See Our Google Reviews \u2605\u2605\u2605\u2605\u2605"
      })]
    })]
  });
}

// ─────────────────────────────────────────────────────────────────────────────
//  useScript
// ─────────────────────────────────────────────────────────────────────────────
function useScript(src) {
  const [ready, setReady] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    if (!src) return;
    if (document.querySelector(`script[src="${src}"]`)) {
      setReady(true);
      return;
    }
    const s = document.createElement("script");
    s.src = src;
    s.async = true;
    s.onload = () => setReady(true);
    s.onerror = () => console.warn("[ContactForm] Script failed:", src);
    document.head.appendChild(s);
  }, [src]);
  return ready;
}

// ─────────────────────────────────────────────────────────────────────────────
//  Status enum
// ─────────────────────────────────────────────────────────────────────────────
const STATUS = {
  IDLE: "idle",
  SENDING: "sending",
  SUCCESS: "success",
  ERROR: "error"
};

// ─────────────────────────────────────────────────────────────────────────────
//  ContactForm — main component
//
//  Modes:
//    full    (default) — two-column section: ContactInfo left + form card right
//    compact           — glass card only, used in hero embed (#hero-form-root)
//
//  Config via data-cf-config JSON attribute on the mount div.
// ─────────────────────────────────────────────────────────────────────────────
function ContactForm({
  propConfig = {}
}) {
  // ── Config comes as a prop from index.js ────────────────────────────────────
  // Each mount passes its own data-cf-config so instances don't bleed into each other
  const config = propConfig;
  const info = {
    ...DEFAULT_INFO,
    ...config
  };
  const isCompact = config.mode === "compact";

  // ── Form state ──────────────────────────────────────────────────────────────
  const [fields, setFields] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)({
    full_name: "",
    phone: "",
    email: "",
    service: "",
    city_zip: "",
    message: ""
  });
  const [errors, setErrors] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)({});
  const [status, setStatus] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(STATUS.IDLE);

  // ── reCAPTCHA refs ──────────────────────────────────────────────────────────
  const captchaContainerRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);
  const widgetIdRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);
  const captchaTokenRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)("");

  // ── Load SDKs ───────────────────────────────────────────────────────────────
  const emailjsReady = useScript("https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js");
  const recaptchaReady = useScript("https://www.google.com/recaptcha/api.js?render=explicit");
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    if (emailjsReady && window.emailjs) {
      window.emailjs.init({
        publicKey: EMAILJS_PUBLIC_KEY
      });
    }
  }, [emailjsReady]);
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    if (!recaptchaReady) return;
    const poll = setInterval(() => {
      if (window.grecaptcha && typeof window.grecaptcha.render === "function" && captchaContainerRef.current && widgetIdRef.current === null) {
        widgetIdRef.current = window.grecaptcha.render(captchaContainerRef.current, {
          sitekey: RECAPTCHA_SITE_KEY,
          theme: "dark",
          size: "normal",
          callback: token => {
            captchaTokenRef.current = token;
            setErrors(p => ({
              ...p,
              captcha: ""
            }));
          },
          "expired-callback": () => {
            captchaTokenRef.current = "";
          },
          "error-callback": () => {
            captchaTokenRef.current = "";
          }
        });
        clearInterval(poll);
      }
    }, 150);
    return () => clearInterval(poll);
  }, [recaptchaReady]);

  // ── Helpers ─────────────────────────────────────────────────────────────────
  function update(e) {
    const {
      name,
      value
    } = e.target;
    setFields(p => ({
      ...p,
      [name]: value
    }));
    if (errors[name]) setErrors(p => ({
      ...p,
      [name]: ""
    }));
  }
  function fieldStyle(name) {
    return {
      ...INPUT_BASE,
      borderColor: errors[name] ? "#ff6b6b" : "rgba(255,255,255,0.12)"
    };
  }
  function onFocus(e) {
    e.currentTarget.style.borderColor = C.gold;
  }
  function onBlur(e) {
    e.currentTarget.style.borderColor = errors[e.currentTarget.name] ? "#ff6b6b" : "rgba(255,255,255,0.12)";
  }

  // ── Validation ──────────────────────────────────────────────────────────────
  function validate() {
    const e = {};
    if (!fields.full_name.trim()) e.full_name = "Please enter your name.";
    if (!fields.phone.trim()) e.phone = "Please enter your phone number.";
    if (!fields.email.trim()) {
      e.email = "Please enter your email address.";
    } else if (!/\S+@\S+\.\S+/.test(fields.email)) {
      e.email = "Please enter a valid email address.";
    }
    if (!fields.city_zip.trim()) e.city_zip = "Please enter your city or ZIP code.";
    if (!captchaTokenRef.current) e.captcha = "Please confirm you're not a robot.";
    return e;
  }

  // ── Submit ──────────────────────────────────────────────────────────────────
  async function handleSubmit(e) {
    e.preventDefault();
    const errs = validate();
    if (Object.keys(errs).length > 0) {
      setErrors(errs);
      return;
    }
    setStatus(STATUS.SENDING);
    try {
      if (!window.emailjs) throw new Error("EmailJS not initialized");
      await window.emailjs.send(EMAILJS_SERVICE_ID, EMAILJS_TEMPLATE_ID, {
        from_name: fields.full_name,
        from_phone: fields.phone,
        from_email: fields.email,
        service_needed: fields.service || "Not specified",
        city_zip: fields.city_zip,
        message: fields.message || "No additional details.",
        captcha_token: captchaTokenRef.current,
        reply_to: fields.email
      });
      setStatus(STATUS.SUCCESS);
      setFields({
        full_name: "",
        phone: "",
        email: "",
        service: "",
        city_zip: "",
        message: ""
      });
      captchaTokenRef.current = "";
      if (widgetIdRef.current !== null && window.grecaptcha) window.grecaptcha.reset(widgetIdRef.current);
    } catch (err) {
      console.error("[ContactForm]", err);
      setStatus(STATUS.ERROR);
      captchaTokenRef.current = "";
      if (widgetIdRef.current !== null && window.grecaptcha) window.grecaptcha.reset(widgetIdRef.current);
    }
  }
  function resetForm() {
    setStatus(STATUS.IDLE);
    setErrors({});
    captchaTokenRef.current = "";
  }

  // ─────────────────────────────────────────────────────────────────────────────
  //  Shared sub-components — used in both modes
  // ─────────────────────────────────────────────────────────────────────────────

  // Success screen
  const SuccessScreen = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    className: "cf-success",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      className: "cf-success-icon",
      children: ICONS.check(C.gold)
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h3", {
      style: {
        fontFamily: "'AkzidenzGrotesk',sans-serif",
        fontSize: "1.5rem",
        fontWeight: 700,
        color: "#fff",
        margin: 0
      },
      children: "We Got Your Request!"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
      style: {
        fontFamily: "'Amino',sans-serif",
        fontSize: "14px",
        color: "rgba(255,255,255,0.5)",
        lineHeight: 1.75,
        maxWidth: "320px",
        margin: 0
      },
      children: "We'll reach out within 24\u201348 hours to schedule your free in-home estimate. No pressure \u2014 just clarity."
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
      href: "tel:+13013004172",
      style: {
        fontFamily: "'Amino',sans-serif",
        fontSize: "11px",
        fontWeight: 700,
        letterSpacing: "0.1em",
        textTransform: "uppercase",
        color: C.gold,
        textDecoration: "none",
        borderBottom: "1px solid rgba(201,168,76,0.35)",
        paddingBottom: "2px"
      },
      children: "Or call us now: (301) 300-4172"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
      onClick: resetForm,
      style: {
        background: "none",
        border: "1px solid rgba(255,255,255,0.15)",
        borderRadius: "4px",
        padding: "8px 20px",
        cursor: "pointer",
        fontFamily: "'Amino',sans-serif",
        fontSize: "10px",
        fontWeight: 700,
        letterSpacing: "0.1em",
        textTransform: "uppercase",
        color: "rgba(255,255,255,0.4)",
        transition: "border-color 0.2s, color 0.2s"
      },
      onMouseEnter: e => {
        e.currentTarget.style.borderColor = C.gold;
        e.currentTarget.style.color = C.gold;
      },
      onMouseLeave: e => {
        e.currentTarget.style.borderColor = "rgba(255,255,255,0.15)";
        e.currentTarget.style.color = "rgba(255,255,255,0.4)";
      },
      children: "Submit another request"
    })]
  });

  // Form fields
  const FormFields = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("form", {
    onSubmit: handleSubmit,
    noValidate: true,
    style: {
      display: "flex",
      flexDirection: "column",
      gap: "14px"
    },
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(FieldWrap, {
      label: "Full Name *",
      error: errors.full_name,
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
        type: "text",
        name: "full_name",
        placeholder: "Your full name",
        value: fields.full_name,
        onChange: update,
        onFocus: onFocus,
        onBlur: onBlur,
        style: fieldStyle("full_name")
      })
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      className: "cf-row-2",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(FieldWrap, {
        label: "Phone Number *",
        error: errors.phone,
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
          type: "tel",
          name: "phone",
          placeholder: "(301) 000-0000",
          value: fields.phone,
          onChange: update,
          onFocus: onFocus,
          onBlur: onBlur,
          style: fieldStyle("phone")
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(FieldWrap, {
        label: "Email Address *",
        error: errors.email,
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
          type: "email",
          name: "email",
          placeholder: "you@email.com",
          value: fields.email,
          onChange: update,
          onFocus: onFocus,
          onBlur: onBlur,
          style: fieldStyle("email")
        })
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      className: "cf-row-2",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(FieldWrap, {
        label: "Service Needed",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("select", {
          name: "service",
          value: fields.service,
          onChange: update,
          onFocus: onFocus,
          onBlur: onBlur,
          style: {
            ...fieldStyle("service"),
            cursor: "pointer"
          },
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("option", {
            value: "",
            children: "Select service..."
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("option", {
            value: "Kitchen Remodeling",
            children: "Kitchen Remodeling"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("option", {
            value: "Bathroom Remodeling",
            children: "Bathroom Remodeling"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("option", {
            value: "Flooring Installation",
            children: "Flooring Installation"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("option", {
            value: "Multiple Services",
            children: "Multiple Services"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("option", {
            value: "Not Sure",
            children: "Not Sure"
          })]
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(FieldWrap, {
        label: "City or ZIP Code *",
        error: errors.city_zip,
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
          type: "text",
          name: "city_zip",
          placeholder: "Columbia, 21044",
          value: fields.city_zip,
          onChange: update,
          onFocus: onFocus,
          onBlur: onBlur,
          style: fieldStyle("city_zip")
        })
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(FieldWrap, {
      label: "Tell Us About Your Project",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("textarea", {
        name: "message",
        placeholder: "Describe your project \u2014 scope, timeline, specific ideas...",
        value: fields.message,
        onChange: update,
        onFocus: onFocus,
        onBlur: onBlur,
        rows: isCompact ? 3 : 4,
        style: {
          ...fieldStyle("message"),
          resize: "vertical",
          minHeight: isCompact ? "80px" : "100px"
        }
      })
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      className: "cf-captcha-wrap",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        ref: captchaContainerRef
      }), errors.captcha && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        className: "cf-captcha-error",
        children: errors.captcha
      })]
    }), status === STATUS.ERROR && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      style: {
        padding: "12px 16px",
        borderRadius: "6px",
        background: "rgba(255,107,107,0.1)",
        border: "1px solid rgba(255,107,107,0.25)"
      },
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("p", {
        style: {
          fontFamily: "'Amino',sans-serif",
          fontSize: "13px",
          color: "#ff6b6b",
          margin: 0,
          lineHeight: 1.5
        },
        children: ["Something went wrong. Please call us at", " ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
          href: "tel:+13013004172",
          style: {
            color: C.gold
          },
          children: "(301) 300-4172"
        }), "."]
      })
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
      type: "submit",
      className: "cf-submit",
      disabled: status === STATUS.SENDING,
      children: status === STATUS.SENDING ? "Sending…" : "Request Free Estimate"
    })]
  });

  // ─────────────────────────────────────────────────────────────────────────────
  //  Render
  // ─────────────────────────────────────────────────────────────────────────────
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("style", {
      children: `
        


        /* ── Full mode ─────────────────────────────────────────────── */
        .cf-section {
          background: transparent;
          padding: 96px 0;
          position: relative;
          overflow: hidden;
        }
        .cf-section::before {
          content: ''; position: absolute; top: -80px; right: -80px;
          width: 360px; height: 360px; border-radius: 50%;
          background: rgba(201,168,76,0.04); pointer-events: none;
        }
        .cf-section::after {
          content: ''; position: absolute; bottom: -100px; left: -100px;
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
        .cf-row-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
        .cf-submit {
          width: 100%; background: ${C.gold}; color: ${C.navy};
          font-family: 'Montserrat', sans-serif; font-size: 12px; font-weight: 800;
          letter-spacing: 0.13em; text-transform: uppercase;
          border: none; border-radius: 4px; padding: 16px; cursor: pointer;
          box-shadow: 0 4px 20px rgba(201,168,76,0.28);
          transition: background 0.2s, transform 0.15s, opacity 0.2s;
        }
        .cf-submit:hover:not(:disabled) { background: ${C.goldHov}; transform: translateY(-1px); }
        .cf-submit:disabled { opacity: 0.6; cursor: not-allowed; }
        .cf-captcha-wrap { display: flex; flex-direction: column; gap: 6px; }
        .cf-captcha-error { font-family: 'Inter', sans-serif; font-size: 11px; color: #ff6b6b; }
        .cf-success {
          display: flex; flex-direction: column;
          align-items: center; justify-content: center;
          text-align: center; gap: 16px; padding: 48px 0;
        }
        .cf-success-icon {
          width: 64px; height: 64px; border-radius: 50%;
          background: rgba(201,168,76,0.12); border: 2px solid rgba(201,168,76,0.3);
          display: flex; align-items: center; justify-content: center;
          animation: cfPop 0.4s cubic-bezier(0.175,0.885,0.32,1.275);
        }
        @keyframes cfPop {
          from { transform: scale(0.5); opacity: 0; }
          to   { transform: scale(1);   opacity: 1; }
        }
        .cf-card input::placeholder,
        .cf-card textarea::placeholder,
        .cf-compact-card input::placeholder,
        .cf-compact-card textarea::placeholder { color: rgba(255,255,255,0.28); }
        .cf-card select option,
        .cf-compact-card select option { background: ${C.navy}; color: #fff; }

        @media (max-width: 1024px) {
          .cf-inner { grid-template-columns: 1fr !important; gap: 48px !important; }
        }
        @media (max-width: 640px) {
          .cf-row-2 { grid-template-columns: 1fr !important; }
          .cf-card  { padding: 28px 20px !important; }
        }

        /* ── Compact mode — hero embed ─────────────────────────────── */
        .cf-compact-card {
          background: rgba(13,27,42,0.78);
          backdrop-filter: blur(14px);
          -webkit-backdrop-filter: blur(14px);
          border: 1px solid rgba(201,168,76,0.22);
          border-radius: 12px;
          padding: 32px 28px;
          max-width: 560px;
          width: 100%;
        }
        @media (max-width: 640px) {
          .cf-compact-card { padding: 24px 18px !important; }
          .cf-compact-card .cf-row-2 { grid-template-columns: 1fr !important; }
        }
      `
    }), isCompact && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      className: "cf-compact-card",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
        style: {
          fontFamily: "'Amino',sans-serif",
          fontSize: "10px",
          fontWeight: 700,
          letterSpacing: "0.2em",
          textTransform: "uppercase",
          color: C.gold,
          margin: "0 0 8px"
        },
        children: "Free In-Home Estimate"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h2", {
        style: {
          fontFamily: "'AkzidenzGrotesk',sans-serif",
          fontSize: "1.4rem",
          fontWeight: 700,
          color: "#fff",
          margin: "0 0 6px",
          lineHeight: 1.2
        },
        children: "Get Your Free Estimate"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
        style: {
          fontFamily: "'Amino',sans-serif",
          fontSize: "12px",
          color: "rgba(255,255,255,0.38)",
          margin: "0 0 22px",
          lineHeight: 1.55
        },
        children: "No pressure. We respond within 24\u201348 hours."
      }), status === STATUS.SUCCESS ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(SuccessScreen, {}) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(FormFields, {})]
    }), !isCompact && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("section", {
      className: "cf-section",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "cf-inner",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(ContactInfo, {
          info: info
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "cf-card",
          children: status === STATUS.SUCCESS ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(SuccessScreen, {}) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h3", {
              style: {
                fontFamily: "'AkzidenzGrotesk',sans-serif",
                fontSize: "1.5rem",
                fontWeight: 700,
                color: "#fff",
                marginBottom: "6px"
              },
              children: "Request Your Free Estimate"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
              style: {
                fontFamily: "'Amino',sans-serif",
                fontSize: "13px",
                color: "rgba(255,255,255,0.4)",
                marginBottom: "28px",
                lineHeight: 1.6
              },
              children: "We respond within 24\u201348 hours. No pressure. Just clarity."
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(FormFields, {})]
          })
        })]
      })
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (ContactForm);

/***/ },

/***/ "./src/scripts/Footer.js"
/*!*******************************!*\
  !*** ./src/scripts/Footer.js ***!
  \*******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


// ─── Brand Tokens (same as Navbar) ────────────────────────────────────────────

const C = {
  navy: "#0d1b2a",
  navyDeep: "#060d18",
  gold: "#C9A84C",
  goldHover: "#DFB95A",
  carbon: "#2f2f2f",
  steel: "#415a77",
  midGray: "#6b7280",
  lightGray: "#d1d5db"
};

// ─── Data ─────────────────────────────────────────────────────────────────────
const serviceLinks = [{
  label: "Kitchen Remodeling",
  href: "/kitchen-remodeling"
}, {
  label: "Bathroom Remodeling",
  href: "/bathroom-remodeling"
}, {
  label: "Flooring Installation",
  href: "/flooring-installation"
}];
const pageLinks = [{
  label: "Home",
  href: "/"
}, {
  label: "Our Work",
  href: "/our-work"
}, {
  label: "About Us",
  href: "/about-us"
}, {
  label: "Contact",
  href: "/contact"
}, {
  label: "Privacy Policy",
  href: "/privacy-policy"
}];
const serviceAreas = ["Howard County", "Montgomery County", "Frederick County", "Prince George's County", "Baltimore County", "Anne Arundel County"];
const socialLinks = [{
  label: "Facebook",
  href: "https://facebook.com",
  icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
    viewBox: "0 0 24 24",
    fill: "currentColor",
    style: {
      width: "18px",
      height: "18px"
    },
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12.07h2.54V9.845c0-2.503 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12.07h2.773l-.443 2.89h-2.33v6.988C20.343 21.128 24 16.991 24 12.073z"
    })
  })
}, {
  label: "Instagram",
  href: "https://instagram.com",
  icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
    viewBox: "0 0 24 24",
    fill: "currentColor",
    style: {
      width: "18px",
      height: "18px"
    },
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"
    })
  })
}, {
  label: "Houzz",
  href: "https://houzz.com",
  icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
    viewBox: "0 0 24 24",
    fill: "currentColor",
    style: {
      width: "18px",
      height: "18px"
    },
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M 12 1 L 3 6.5 L 3 12 L 9 12 L 9 23 L 15 23 L 15 15 L 21 15 L 21 6.5 Z"
    })
  })
}, {
  label: "YouTube",
  href: "https://youtube.com",
  icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
    viewBox: "0 0 24 24",
    fill: "currentColor",
    style: {
      width: "18px",
      height: "18px"
    },
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M23.495 6.205a3.007 3.007 0 00-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 00.527 6.205a31.247 31.247 0 00-.522 5.805 31.247 31.247 0 00.522 5.783 3.007 3.007 0 002.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 002.088-2.088 31.247 31.247 0 00.5-5.783 31.247 31.247 0 00-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"
    })
  })
}];

// ─── Reusable Footer Heading ───────────────────────────────────────────────────
function FooterHeading({
  children
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    style: {
      marginBottom: "20px"
    },
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
      style: {
        fontFamily: "'Montserrat', sans-serif",
        fontSize: "10px",
        fontWeight: 700,
        letterSpacing: "0.22em",
        textTransform: "uppercase",
        color: C.gold
      },
      children: children
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      style: {
        width: "28px",
        height: "2px",
        background: C.gold,
        marginTop: "8px",
        opacity: 0.6
      }
    })]
  });
}

// ─── Footer Link ───────────────────────────────────────────────────────────────
function FooterLink({
  href,
  children,
  external
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
    href: href,
    target: external ? "_blank" : undefined,
    rel: external ? "noopener noreferrer" : undefined,
    style: {
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
      paddingBottom: "10px"
    },
    onMouseEnter: e => {
      e.currentTarget.style.color = C.gold;
      e.currentTarget.style.gap = "12px";
    },
    onMouseLeave: e => {
      e.currentTarget.style.color = "rgba(255,255,255,0.5)";
      e.currentTarget.style.gap = "8px";
    },
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
      style: {
        width: "4px",
        height: "4px",
        borderRadius: "50%",
        backgroundColor: C.gold,
        flexShrink: 0,
        opacity: 0.6
      }
    }), children]
  });
}

// ─── Google Reviews Badge ──────────────────────────────────────────────────────
function GoogleReviewsBadge() {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
    href: "https://g.page/r/YOUR_GOOGLE_PLACE_ID/review",
    target: "_blank",
    rel: "noopener noreferrer",
    style: {
      display: "inline-flex",
      alignItems: "center",
      gap: "10px",
      padding: "10px 16px",
      borderRadius: "6px",
      border: `1px solid rgba(255,255,255,0.1)`,
      background: "rgba(255,255,255,0.04)",
      textDecoration: "none",
      transition: "border-color 0.2s, background 0.2s"
    },
    onMouseEnter: e => {
      e.currentTarget.style.borderColor = `rgba(201,168,76,0.4)`;
      e.currentTarget.style.background = "rgba(201,168,76,0.06)";
    },
    onMouseLeave: e => {
      e.currentTarget.style.borderColor = "rgba(255,255,255,0.1)";
      e.currentTarget.style.background = "rgba(255,255,255,0.04)";
    },
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
      viewBox: "0 0 24 24",
      style: {
        width: "20px",
        height: "20px",
        flexShrink: 0
      },
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
        fill: "#4285F4",
        d: "M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
        fill: "#34A853",
        d: "M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
        fill: "#FBBC05",
        d: "M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
        fill: "#EA4335",
        d: "M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      style: {
        display: "flex",
        flexDirection: "column",
        gap: "2px"
      },
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        style: {
          display: "flex",
          gap: "2px"
        },
        children: [1, 2, 3, 4, 5].map(s => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
          viewBox: "0 0 20 20",
          fill: "#FBBC05",
          style: {
            width: "11px",
            height: "11px"
          },
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
            d: "M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
          })
        }, s))
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        style: {
          fontFamily: "'Montserrat', sans-serif",
          fontSize: "10px",
          fontWeight: 600,
          letterSpacing: "0.06em",
          color: "rgba(255,255,255,0.55)"
        },
        children: "See our Google Reviews"
      })]
    })]
  });
}

// ─── License Badge ─────────────────────────────────────────────────────────────
function LicenseBadge() {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    style: {
      display: "inline-flex",
      alignItems: "center",
      gap: "10px",
      padding: "10px 16px",
      borderRadius: "6px",
      border: `1px solid rgba(201,168,76,0.3)`,
      background: "rgba(201,168,76,0.05)"
    },
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
      viewBox: "0 0 24 24",
      fill: C.gold,
      style: {
        width: "20px",
        height: "20px",
        flexShrink: 0
      },
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
        d: "M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-1 14l-3-3 1.41-1.41L11 12.17l4.59-4.58L17 9l-6 6z"
      })
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      style: {
        display: "flex",
        flexDirection: "column",
        gap: "2px"
      },
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        style: {
          fontFamily: "'Montserrat', sans-serif",
          fontSize: "11px",
          fontWeight: 800,
          letterSpacing: "0.1em",
          textTransform: "uppercase",
          color: C.gold
        },
        children: "MHIC #154361"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        style: {
          fontFamily: "'Montserrat', sans-serif",
          fontSize: "10px",
          fontWeight: 500,
          letterSpacing: "0.06em",
          color: "rgba(255,255,255,0.45)"
        },
        children: "Licensed & Insured \xB7 Maryland"
      })]
    })]
  });
}

// ─── Footer Component ──────────────────────────────────────────────────────────
function Footer() {
  const currentYear = new Date().getFullYear();
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("style", {
      children: `
        
      `
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("footer", {
      style: {
        backgroundColor: C.navy
      },
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        style: {
          height: "2px",
          background: `linear-gradient(90deg, transparent 0%, ${C.gold} 30%, ${C.gold} 70%, transparent 100%)`
        }
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        style: {
          maxWidth: "1280px",
          margin: "0 auto",
          padding: "64px 24px 48px",
          display: "grid",
          gridTemplateColumns: "repeat(auto-fit, minmax(200px, 1fr))",
          gap: "48px"
        },
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          style: {
            gridColumn: "span 1"
          },
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "/",
            style: {
              display: "inline-block",
              textDecoration: "none",
              marginBottom: "16px"
            },
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("img", {
              src: "/wp-content/uploads/2026/04/Tikal_imagotipo_condensado-scaled.png",
              alt: "Tikal Empire \u2014 Kitchen, Bath & Flooring",
              style: {
                height: "52px",
                width: "auto",
                display: "block"
              }
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
            style: {
              fontFamily: "'Inter', sans-serif",
              fontSize: "13px",
              fontWeight: 400,
              lineHeight: 1.7,
              color: "rgba(255,255,255,0.42)",
              marginTop: "16px",
              marginBottom: "24px",
              maxWidth: "240px"
            },
            children: "Premium interior remodeling for Maryland homeowners \u2014 delivered with schedule discipline and craftsmanship you can see."
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            style: {
              display: "flex",
              flexDirection: "column",
              gap: "10px"
            },
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(LicenseBadge, {}), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(GoogleReviewsBadge, {})]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            style: {
              display: "flex",
              gap: "10px",
              marginTop: "24px"
            },
            children: socialLinks.map(s => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
              href: s.href,
              target: "_blank",
              rel: "noopener noreferrer",
              "aria-label": s.label,
              style: {
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
                transition: "color 0.2s, background 0.2s, border-color 0.2s, transform 0.15s"
              },
              onMouseEnter: e => {
                e.currentTarget.style.color = C.gold;
                e.currentTarget.style.background = "rgba(201,168,76,0.1)";
                e.currentTarget.style.borderColor = `rgba(201,168,76,0.35)`;
                e.currentTarget.style.transform = "translateY(-2px)";
              },
              onMouseLeave: e => {
                e.currentTarget.style.color = "rgba(255,255,255,0.45)";
                e.currentTarget.style.background = "rgba(255,255,255,0.06)";
                e.currentTarget.style.borderColor = "rgba(255,255,255,0.08)";
                e.currentTarget.style.transform = "none";
              },
              children: s.icon
            }, s.label))
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(FooterHeading, {
            children: "Services"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("nav", {
            children: serviceLinks.map(link => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(FooterLink, {
              href: link.href,
              children: link.label
            }, link.href))
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            style: {
              marginTop: "20px"
            },
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(FooterHeading, {
              children: "Pages"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("nav", {
              children: pageLinks.map(link => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(FooterLink, {
                href: link.href,
                children: link.label
              }, link.href))
            })]
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(FooterHeading, {
            children: "Service Areas"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
            style: {
              fontFamily: "'Inter', sans-serif",
              fontSize: "12px",
              color: "rgba(255,255,255,0.38)",
              marginBottom: "14px",
              letterSpacing: "0.02em"
            },
            children: "Serving a 50-mile radius across Maryland:"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            style: {
              display: "flex",
              flexDirection: "column",
              gap: "0"
            },
            children: serviceAreas.map(area => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("span", {
              style: {
                display: "flex",
                alignItems: "center",
                gap: "8px",
                fontFamily: "'Montserrat', sans-serif",
                fontSize: "12px",
                fontWeight: 500,
                letterSpacing: "0.04em",
                color: "rgba(255,255,255,0.5)",
                paddingBottom: "10px"
              },
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                style: {
                  width: "4px",
                  height: "4px",
                  borderRadius: "50%",
                  backgroundColor: C.steel,
                  flexShrink: 0
                }
              }), area]
            }, area))
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            style: {
              marginTop: "8px",
              padding: "10px 14px",
              borderRadius: "6px",
              background: "rgba(74,111,138,0.12)",
              border: `1px solid rgba(74,111,138,0.2)`,
              display: "flex",
              alignItems: "flex-start",
              gap: "8px"
            },
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
              viewBox: "0 0 24 24",
              fill: C.steel,
              style: {
                width: "14px",
                height: "14px",
                flexShrink: 0,
                marginTop: "1px"
              },
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                d: "M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"
              })
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
              style: {
                fontFamily: "'Inter', sans-serif",
                fontSize: "11px",
                color: "rgba(255,255,255,0.32)",
                lineHeight: 1.5
              },
              children: "Based in the Duluth, GA area. Traveling throughout Maryland for interior projects."
            })]
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(FooterHeading, {
            children: "Contact Us"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            style: {
              display: "flex",
              flexDirection: "column",
              gap: "18px"
            },
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
              href: "tel:+13013004172",
              style: {
                display: "flex",
                alignItems: "center",
                gap: "12px",
                textDecoration: "none",
                transition: "opacity 0.2s"
              },
              onMouseEnter: e => e.currentTarget.style.opacity = "0.8",
              onMouseLeave: e => e.currentTarget.style.opacity = "1",
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                style: {
                  width: "36px",
                  height: "36px",
                  borderRadius: "6px",
                  background: `rgba(201,168,76,0.1)`,
                  border: `1px solid rgba(201,168,76,0.2)`,
                  display: "flex",
                  alignItems: "center",
                  justifyContent: "center",
                  flexShrink: 0
                },
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                  viewBox: "0 0 24 24",
                  fill: C.gold,
                  style: {
                    width: "16px",
                    height: "16px"
                  },
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                    d: "M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"
                  })
                })
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                  style: {
                    fontFamily: "'Montserrat', sans-serif",
                    fontSize: "10px",
                    fontWeight: 600,
                    letterSpacing: "0.1em",
                    textTransform: "uppercase",
                    color: "rgba(255,255,255,0.35)",
                    margin: 0
                  },
                  children: "Phone"
                }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                  style: {
                    fontFamily: "'Montserrat', sans-serif",
                    fontSize: "14px",
                    fontWeight: 700,
                    color: "#fff",
                    margin: 0,
                    marginTop: "2px"
                  },
                  children: "(301) 300-4172"
                })]
              })]
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
              href: "https://wa.me/13013004172",
              target: "_blank",
              rel: "noopener noreferrer",
              style: {
                display: "flex",
                alignItems: "center",
                gap: "12px",
                textDecoration: "none",
                transition: "opacity 0.2s"
              },
              onMouseEnter: e => e.currentTarget.style.opacity = "0.8",
              onMouseLeave: e => e.currentTarget.style.opacity = "1",
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                style: {
                  width: "36px",
                  height: "36px",
                  borderRadius: "6px",
                  background: "rgba(37,211,102,0.1)",
                  border: "1px solid rgba(37,211,102,0.2)",
                  display: "flex",
                  alignItems: "center",
                  justifyContent: "center",
                  flexShrink: 0
                },
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                  viewBox: "0 0 24 24",
                  fill: "#25D366",
                  style: {
                    width: "17px",
                    height: "17px"
                  },
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                    d: "M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"
                  })
                })
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                  style: {
                    fontFamily: "'Montserrat', sans-serif",
                    fontSize: "10px",
                    fontWeight: 600,
                    letterSpacing: "0.1em",
                    textTransform: "uppercase",
                    color: "rgba(255,255,255,0.35)",
                    margin: 0
                  },
                  children: "WhatsApp"
                }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                  style: {
                    fontFamily: "'Montserrat', sans-serif",
                    fontSize: "14px",
                    fontWeight: 700,
                    color: "#fff",
                    margin: 0,
                    marginTop: "2px"
                  },
                  children: "Message Us"
                })]
              })]
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
              href: "mailto:info@tikalempire.com",
              style: {
                display: "flex",
                alignItems: "center",
                gap: "12px",
                textDecoration: "none",
                transition: "opacity 0.2s"
              },
              onMouseEnter: e => e.currentTarget.style.opacity = "0.8",
              onMouseLeave: e => e.currentTarget.style.opacity = "1",
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                style: {
                  width: "36px",
                  height: "36px",
                  borderRadius: "6px",
                  background: "rgba(74,111,138,0.12)",
                  border: "1px solid rgba(74,111,138,0.2)",
                  display: "flex",
                  alignItems: "center",
                  justifyContent: "center",
                  flexShrink: 0
                },
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                  viewBox: "0 0 24 24",
                  fill: C.steel,
                  style: {
                    width: "16px",
                    height: "16px"
                  },
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                    d: "M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"
                  })
                })
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                  style: {
                    fontFamily: "'Montserrat', sans-serif",
                    fontSize: "10px",
                    fontWeight: 600,
                    letterSpacing: "0.1em",
                    textTransform: "uppercase",
                    color: "rgba(255,255,255,0.35)",
                    margin: 0
                  },
                  children: "Email"
                }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                  style: {
                    fontFamily: "'Montserrat', sans-serif",
                    fontSize: "13px",
                    fontWeight: 600,
                    color: "rgba(255,255,255,0.7)",
                    margin: 0,
                    marginTop: "2px"
                  },
                  children: "info@tikalempire.com"
                })]
              })]
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "/contact",
            style: {
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
              boxShadow: `0 2px 14px rgba(201,168,76,0.25)`
            },
            onMouseEnter: e => {
              e.currentTarget.style.background = C.goldHover;
              e.currentTarget.style.transform = "translateY(-1px)";
            },
            onMouseLeave: e => {
              e.currentTarget.style.background = C.gold;
              e.currentTarget.style.transform = "none";
            },
            children: "Request a Free Estimate"
          })]
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        style: {
          borderTop: "1px solid rgba(255,255,255,0.07)"
        },
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          style: {
            maxWidth: "1280px",
            margin: "0 auto",
            padding: "20px 24px",
            display: "flex",
            alignItems: "center",
            justifyContent: "space-between",
            flexWrap: "wrap",
            gap: "12px"
          },
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("p", {
            style: {
              fontFamily: "'Inter', sans-serif",
              fontSize: "11px",
              color: "rgba(255,255,255,0.25)",
              margin: 0
            },
            children: ["\xA9 ", currentYear, " Your Company Name. All rights reserved."]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            style: {
              display: "flex",
              alignItems: "center",
              gap: "20px",
              flexWrap: "wrap"
            },
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
              href: "/privacy-policy",
              style: {
                fontFamily: "'Montserrat', sans-serif",
                fontSize: "10px",
                fontWeight: 600,
                letterSpacing: "0.08em",
                textTransform: "uppercase",
                color: "rgba(255,255,255,0.25)",
                textDecoration: "none",
                transition: "color 0.2s"
              },
              onMouseEnter: e => e.currentTarget.style.color = C.gold,
              onMouseLeave: e => e.currentTarget.style.color = "rgba(255,255,255,0.25)",
              children: "Privacy Policy"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
              style: {
                color: "rgba(255,255,255,0.12)",
                fontSize: "10px"
              },
              children: "|"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
              style: {
                fontFamily: "'Montserrat', sans-serif",
                fontSize: "10px",
                fontWeight: 600,
                letterSpacing: "0.08em",
                textTransform: "uppercase",
                color: "rgba(255,255,255,0.25)"
              },
              children: "MHIC #154361"
            })]
          })]
        })
      })]
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Footer);

/***/ },

/***/ "./src/scripts/Navbar.js"
/*!*******************************!*\
  !*** ./src/scripts/Navbar.js ***!
  \*******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


// ─── Brand Tokens ──────────────────────────────────────────────────────────────

const C = {
  navy: "#0d1b2a",
  // Deep Navy — primary bg, navbar, footer
  gold: "#C9A84C",
  // Refined Gold — CTAs, accents, ticker
  goldHover: "#DFB95A",
  // Gold brightened on hover
  navyDeep: "#060d18",
  // Deeper navy for top bar
  carbon: "#2f2f2f",
  // Body text
  steel: "#415a77",
  // Steel Blue — secondary elements
  midGray: "#6b7280",
  // Mid Gray — subtle text, dividers
  lightGray: "#d1d5db" // Light Gray — section backgrounds
};

// ─── Static Data ───────────────────────────────────────────────────────────────
const services = [{
  label: "Kitchen Remodeling",
  href: "/kitchen-remodeling"
}, {
  label: "Bathroom Remodeling",
  href: "/bathroom-remodeling"
}, {
  label: "Flooring Installation",
  href: "/flooring-installation"
}];
const navLinks = [{
  label: "Home",
  href: "/"
}, {
  label: "Services",
  href: "#",
  dropdown: services
}, {
  label: "Our Work",
  href: "/our-work"
}, {
  label: "About Us",
  href: "/about-us"
}, {
  label: "Contact",
  href: "/contact"
}];
const tickerItems = ["MHIC #154361", "Licensed & Insured", "Howard County", "Montgomery County", "Frederick County", "Kitchen · Bath · Flooring", "Schedule Discipline", "Your home, transformed with certainty."];

// ─── Ticker ────────────────────────────────────────────────────────────────────
// Spec: Navy background · Gold text · Full-width marquee
function TickerBand() {
  const segment = tickerItems.join("   ·   ");
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
    style: {
      backgroundColor: C.navyDeep,
      borderTop: `1px solid rgba(201,168,76,0.12)`,
      overflow: "hidden",
      padding: "7px 0"
    },
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      style: {
        display: "flex",
        animation: "navTicker 40s linear infinite",
        willChange: "transform"
      },
      children: [0, 1, 2].map(i => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        style: {
          fontFamily: "'Montserrat', sans-serif",
          fontSize: "10px",
          fontWeight: 700,
          letterSpacing: "0.2em",
          textTransform: "uppercase",
          color: C.gold,
          paddingRight: "7rem",
          flexShrink: 0,
          whiteSpace: "nowrap"
        },
        children: segment
      }, i))
    })
  });
}

// ─── Services Dropdown ─────────────────────────────────────────────────────────
function ServicesDropdown({
  open,
  onEnter,
  onLeave
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    onMouseEnter: onEnter,
    onMouseLeave: onLeave,
    style: {
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
      transform: open ? "translateX(-50%) translateY(0)" : "translateX(-50%) translateY(-8px)",
      transition: "opacity 0.22s ease, transform 0.22s ease"
    },
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      style: {
        height: "2px",
        background: `linear-gradient(90deg, transparent, ${C.gold}, transparent)`
      }
    }), services.map((item, i) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
      href: item.href,
      className: "nb-dropdown-item",
      style: {
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
        transition: "color 0.18s, background 0.18s, padding-left 0.18s"
      },
      onMouseEnter: e => {
        e.currentTarget.style.color = C.gold;
        e.currentTarget.style.background = "rgba(201,168,76,0.08)";
        e.currentTarget.style.paddingLeft = "24px";
      },
      onMouseLeave: e => {
        e.currentTarget.style.color = "rgba(255,255,255,0.7)";
        e.currentTarget.style.background = "transparent";
        e.currentTarget.style.paddingLeft = "20px";
      },
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        style: {
          width: "5px",
          height: "5px",
          borderRadius: "50%",
          backgroundColor: C.gold,
          flexShrink: 0,
          opacity: 0.75
        }
      }), item.label]
    }, item.href))]
  });
}

// ─── Navbar ────────────────────────────────────────────────────────────────────
function Navbar() {
  const [mobileOpen, setMobileOpen] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [servicesOpen, setServicesOpen] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [mobileServicesOpen, setMobileServicesOpen] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [scrolled, setScrolled] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const closeTimer = react__WEBPACK_IMPORTED_MODULE_0___default().useRef(null);
  const openServices = () => {
    clearTimeout(closeTimer.current);
    setServicesOpen(true);
  };
  const closeServices = () => {
    closeTimer.current = setTimeout(() => setServicesOpen(false), 120);
  };
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    const onScroll = () => setScrolled(window.scrollY > 10);
    window.addEventListener("scroll", onScroll);
    return () => window.removeEventListener("scroll", onScroll);
  }, []);
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    const onResize = () => {
      if (window.innerWidth >= 1024) setMobileOpen(false);
    };
    window.addEventListener("resize", onResize);
    return () => window.removeEventListener("resize", onResize);
  }, []);

  // Lock body scroll when mobile menu is open
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    document.body.style.overflow = mobileOpen ? "hidden" : "";
    return () => {
      document.body.style.overflow = "";
    };
  }, [mobileOpen]);
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("style", {
      children: `

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
      `
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      className: "nb-topbar",
      style: {
        backgroundColor: C.navyDeep,
        borderBottom: "1px solid rgba(255,255,255,0.06)"
      },
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        style: {
          maxWidth: "1280px",
          margin: "0 auto",
          padding: "7px 24px",
          display: "flex",
          alignItems: "center",
          justifyContent: "space-between",
          gap: "16px"
        },
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          style: {
            display: "flex",
            alignItems: "center",
            gap: "18px"
          },
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
            href: "tel:+13013004172",
            style: {
              display: "flex",
              alignItems: "center",
              gap: "6px",
              fontFamily: "'Amino',sans-serif",
              fontSize: "11px",
              fontWeight: 700,
              letterSpacing: "0.05em",
              color: C.gold,
              textDecoration: "none",
              transition: "color 0.2s"
            },
            onMouseEnter: e => e.currentTarget.style.color = C.goldHover,
            onMouseLeave: e => e.currentTarget.style.color = C.gold,
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
              width: "12",
              height: "12",
              viewBox: "0 0 24 24",
              fill: "currentColor",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                d: "M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"
              })
            }), "(301) 300-4172"]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
            style: {
              color: "rgba(255,255,255,0.12)",
              fontSize: "12px"
            },
            children: "|"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
            href: "mailto:info@tikalempire.com",
            style: {
              display: "flex",
              alignItems: "center",
              gap: "6px",
              fontFamily: "'Amino',sans-serif",
              fontSize: "11px",
              fontWeight: 600,
              letterSpacing: "0.04em",
              color: "rgba(255,255,255,0.5)",
              textDecoration: "none",
              transition: "color 0.2s"
            },
            onMouseEnter: e => e.currentTarget.style.color = C.gold,
            onMouseLeave: e => e.currentTarget.style.color = "rgba(255,255,255,0.5)",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
              width: "12",
              height: "12",
              viewBox: "0 0 24 24",
              fill: "currentColor",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                d: "M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"
              })
            }), "info@tikalempire.com"]
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
          href: "https://maps.google.com/?q=Maryland",
          target: "_blank",
          rel: "noopener noreferrer",
          style: {
            display: "flex",
            alignItems: "center",
            gap: "7px",
            fontFamily: "'Amino',sans-serif",
            fontSize: "11px",
            fontWeight: 600,
            letterSpacing: "0.09em",
            textTransform: "uppercase",
            color: "rgba(255,255,255,0.45)",
            textDecoration: "none",
            transition: "color 0.2s"
          },
          onMouseEnter: e => e.currentTarget.style.color = C.gold,
          onMouseLeave: e => e.currentTarget.style.color = "rgba(255,255,255,0.45)",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
            width: "13",
            height: "13",
            viewBox: "0 0 24 24",
            fill: "currentColor",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
              d: "M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"
            })
          }), "Serving Maryland \u2014 50-mile radius"]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          style: {
            display: "flex",
            alignItems: "center",
            gap: "6px"
          },
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "https://facebook.com/tikalempire",
            target: "_blank",
            rel: "noopener noreferrer",
            "aria-label": "Facebook",
            style: {
              width: "28px",
              height: "28px",
              borderRadius: "5px",
              display: "flex",
              alignItems: "center",
              justifyContent: "center",
              color: "rgba(255,255,255,0.4)",
              background: "rgba(255,255,255,0.05)",
              transition: "color 0.2s, background 0.2s"
            },
            onMouseEnter: e => {
              e.currentTarget.style.color = C.gold;
              e.currentTarget.style.background = "rgba(201,168,76,0.1)";
            },
            onMouseLeave: e => {
              e.currentTarget.style.color = "rgba(255,255,255,0.4)";
              e.currentTarget.style.background = "rgba(255,255,255,0.05)";
            },
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
              width: "14",
              height: "14",
              viewBox: "0 0 24 24",
              fill: "currentColor",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                d: "M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12.07h2.54V9.845c0-2.503 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12.07h2.773l-.443 2.89h-2.33v6.988C20.343 21.128 24 16.991 24 12.073z"
              })
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "https://instagram.com/tikalempire",
            target: "_blank",
            rel: "noopener noreferrer",
            "aria-label": "Instagram",
            style: {
              width: "28px",
              height: "28px",
              borderRadius: "5px",
              display: "flex",
              alignItems: "center",
              justifyContent: "center",
              color: "rgba(255,255,255,0.4)",
              background: "rgba(255,255,255,0.05)",
              transition: "color 0.2s, background 0.2s"
            },
            onMouseEnter: e => {
              e.currentTarget.style.color = C.gold;
              e.currentTarget.style.background = "rgba(201,168,76,0.1)";
            },
            onMouseLeave: e => {
              e.currentTarget.style.color = "rgba(255,255,255,0.4)";
              e.currentTarget.style.background = "rgba(255,255,255,0.05)";
            },
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
              width: "14",
              height: "14",
              viewBox: "0 0 24 24",
              fill: "currentColor",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                d: "M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"
              })
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "https://g.page/r/YOUR_GOOGLE_PLACE_ID",
            target: "_blank",
            rel: "noopener noreferrer",
            "aria-label": "Google Reviews",
            style: {
              width: "28px",
              height: "28px",
              borderRadius: "5px",
              display: "flex",
              alignItems: "center",
              justifyContent: "center",
              background: "rgba(255,255,255,0.05)",
              transition: "background 0.2s"
            },
            onMouseEnter: e => e.currentTarget.style.background = "rgba(201,168,76,0.1)",
            onMouseLeave: e => e.currentTarget.style.background = "rgba(255,255,255,0.05)",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
              viewBox: "0 0 24 24",
              style: {
                width: "14px",
                height: "14px"
              },
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                fill: "#4285F4",
                d: "M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                fill: "#34A853",
                d: "M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                fill: "#FBBC05",
                d: "M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                fill: "#EA4335",
                d: "M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"
              })]
            })
          })]
        })]
      })
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("header", {
      style: {
        position: "sticky",
        top: 0,
        zIndex: 50,
        backgroundColor: C.navy,
        transition: "box-shadow 0.3s ease",
        boxShadow: scrolled ? "0 4px 40px rgba(0,0,0,0.55)" : "0 1px 0 rgba(255,255,255,0.05)"
      },
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        style: {
          maxWidth: "1280px",
          margin: "0 auto",
          padding: "0 24px",
          height: "76px",
          display: "flex",
          alignItems: "center",
          justifyContent: "space-between"
        },
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
          href: "/",
          style: {
            textDecoration: "none",
            display: "flex",
            alignItems: "center",
            flexShrink: 0
          },
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("img", {
            src: "/wp-content/uploads/2026/04/Tikal_imagotipo_condensado-scaled.png",
            alt: "Tikal Empire \u2014 Kitchen, Bath & Flooring",
            style: {
              height: "48px",
              width: "auto",
              display: "block"
            }
          })
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("nav", {
          className: "nb-desktop-nav",
          style: {
            alignItems: "center",
            gap: "38px"
          },
          children: navLinks.map(link => link.dropdown ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            style: {
              position: "relative"
            },
            onMouseEnter: openServices,
            onMouseLeave: closeServices,
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
              className: "nb-link",
              style: {
                display: "flex",
                alignItems: "center",
                gap: "5px",
                color: servicesOpen ? "#fff" : undefined,
                padding: 0
              },
              "aria-haspopup": "true",
              "aria-expanded": servicesOpen,
              children: [link.label, /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                width: "10",
                height: "10",
                viewBox: "0 0 20 20",
                fill: C.gold,
                style: {
                  transition: "transform 0.2s",
                  transform: servicesOpen ? "rotate(180deg)" : "rotate(0deg)",
                  flexShrink: 0
                },
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                  fillRule: "evenodd",
                  d: "M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z",
                  clipRule: "evenodd"
                })
              })]
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(ServicesDropdown, {
              open: servicesOpen,
              onEnter: openServices,
              onLeave: closeServices
            })]
          }, link.label) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: link.href,
            className: "nb-link",
            children: link.label
          }, link.label))
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          style: {
            display: "flex",
            alignItems: "center",
            gap: "14px"
          },
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "/contact",
            className: "nb-cta nb-cta-header",
            children: "Request a Free Estimate"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
            className: "nb-hamburger",
            onClick: () => setMobileOpen(o => !o),
            "aria-label": mobileOpen ? "Close menu" : "Open menu",
            style: {
              background: "none",
              border: "none",
              cursor: "pointer",
              display: "flex",
              flexDirection: "column",
              gap: "5px",
              padding: "6px"
            },
            children: [mobileOpen ? "translateY(7px) rotate(45deg)" : "none", null,
            // middle bar
            mobileOpen ? "translateY(-7px) rotate(-45deg)" : "none"].map((transform, i) => i === 1 ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
              style: {
                display: "block",
                width: "22px",
                height: "2px",
                background: "rgba(255,255,255,0.9)",
                borderRadius: "2px",
                opacity: mobileOpen ? 0 : 1,
                transition: "opacity 0.2s"
              }
            }, i) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
              style: {
                display: "block",
                width: "22px",
                height: "2px",
                background: "rgba(255,255,255,0.9)",
                borderRadius: "2px",
                transformOrigin: "center",
                transition: "transform 0.25s ease",
                transform: transform || "none"
              }
            }, i))
          })]
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: "nb-mobile-menu",
        style: {
          backgroundColor: "#060d18",
          maxHeight: mobileOpen ? "620px" : "0",
          overflow: "hidden",
          transition: "max-height 0.35s cubic-bezier(0.4,0,0.2,1)",
          borderTop: mobileOpen ? `1px solid rgba(201,168,76,0.15)` : "none"
        },
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          style: {
            padding: "16px 24px 32px"
          },
          children: [navLinks.map(link => link.dropdown ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            style: {
              borderBottom: "1px solid rgba(255,255,255,0.06)"
            },
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
              onClick: () => setMobileServicesOpen(o => !o),
              style: {
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
                color: "rgba(255,255,255,0.8)"
              },
              children: [link.label, /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                width: "11",
                height: "11",
                viewBox: "0 0 20 20",
                fill: C.gold,
                style: {
                  transition: "transform 0.2s",
                  transform: mobileServicesOpen ? "rotate(180deg)" : "rotate(0deg)"
                },
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                  fillRule: "evenodd",
                  d: "M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z",
                  clipRule: "evenodd"
                })
              })]
            }), mobileServicesOpen && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              style: {
                paddingLeft: "16px",
                paddingBottom: "8px"
              },
              children: services.map(item => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                href: item.href,
                style: {
                  display: "flex",
                  alignItems: "center",
                  gap: "10px",
                  padding: "10px 0",
                  fontFamily: "'Montserrat', sans-serif",
                  fontSize: "11px",
                  fontWeight: 600,
                  letterSpacing: "0.08em",
                  textTransform: "uppercase",
                  color: "rgba(255,255,255,0.5)",
                  textDecoration: "none",
                  transition: "color 0.18s"
                },
                onMouseEnter: e => e.currentTarget.style.color = C.gold,
                onMouseLeave: e => e.currentTarget.style.color = "rgba(255,255,255,0.5)",
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                  style: {
                    width: "4px",
                    height: "4px",
                    borderRadius: "50%",
                    backgroundColor: C.gold,
                    flexShrink: 0
                  }
                }), item.label]
              }, item.href))
            })]
          }, link.label) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: link.href,
            style: {
              display: "block",
              padding: "14px 0",
              fontFamily: "'Montserrat', sans-serif",
              fontSize: "11px",
              fontWeight: 700,
              letterSpacing: "0.14em",
              textTransform: "uppercase",
              color: "rgba(255,255,255,0.8)",
              textDecoration: "none",
              borderBottom: "1px solid rgba(255,255,255,0.06)",
              transition: "color 0.18s"
            },
            onMouseEnter: e => e.currentTarget.style.color = C.gold,
            onMouseLeave: e => e.currentTarget.style.color = "rgba(255,255,255,0.8)",
            children: link.label
          }, link.label)), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "/contact",
            className: "nb-cta",
            style: {
              width: "100%",
              marginTop: "22px"
            },
            children: "Request a Free Estimate"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            style: {
              marginTop: "20px",
              paddingTop: "18px",
              borderTop: "1px solid rgba(255,255,255,0.07)",
              display: "flex",
              flexDirection: "column",
              gap: "8px"
            },
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
              href: "tel:+13013004172",
              style: {
                display: "flex",
                alignItems: "center",
                gap: "8px",
                fontFamily: "'Montserrat', sans-serif",
                fontSize: "12px",
                fontWeight: 700,
                letterSpacing: "0.05em",
                color: C.gold,
                textDecoration: "none"
              },
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                width: "13",
                height: "13",
                viewBox: "0 0 24 24",
                fill: "currentColor",
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                  d: "M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"
                })
              }), "(301) 300-4172"]
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
              style: {
                fontFamily: "'Montserrat', sans-serif",
                fontSize: "10px",
                fontWeight: 600,
                letterSpacing: "0.1em",
                textTransform: "uppercase",
                color: "rgba(255,255,255,0.3)"
              },
              children: "MHIC #154361 \xB7 Licensed & Insured \xB7 Serving Maryland"
            })]
          })]
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(TickerBand, {})]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
      href: "https://wa.me/13013004172",
      target: "_blank",
      rel: "noopener noreferrer",
      className: "nb-whatsapp",
      "aria-label": "Contact us on WhatsApp",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
        viewBox: "0 0 24 24",
        fill: "white",
        style: {
          width: "28px",
          height: "28px"
        },
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
          d: "M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"
        })
      })
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Navbar);

/***/ },

/***/ "./node_modules/react-dom/client.js"
/*!******************************************!*\
  !*** ./node_modules/react-dom/client.js ***!
  \******************************************/
(__unused_webpack_module, exports, __webpack_require__) {



var m = __webpack_require__(/*! react-dom */ "react-dom");
if (false) // removed by dead control flow
{} else {
  var i = m.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED;
  exports.createRoot = function(c, o) {
    i.usingClientEntryPoint = true;
    try {
      return m.createRoot(c, o);
    } finally {
      i.usingClientEntryPoint = false;
    }
  };
  exports.hydrateRoot = function(c, h, o) {
    i.usingClientEntryPoint = true;
    try {
      return m.hydrateRoot(c, h, o);
    } finally {
      i.usingClientEntryPoint = false;
    }
  };
}


/***/ },

/***/ "react"
/*!************************!*\
  !*** external "React" ***!
  \************************/
(module) {

module.exports = window["React"];

/***/ },

/***/ "react-dom"
/*!***************************!*\
  !*** external "ReactDOM" ***!
  \***************************/
(module) {

module.exports = window["ReactDOM"];

/***/ },

/***/ "react/jsx-runtime"
/*!**********************************!*\
  !*** external "ReactJSXRuntime" ***!
  \**********************************/
(module) {

module.exports = window["ReactJSXRuntime"];

/***/ }

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		if (!(moduleId in __webpack_modules__)) {
/******/ 			delete __webpack_module_cache__[moduleId];
/******/ 			var e = new Error("Cannot find module '" + moduleId + "'");
/******/ 			e.code = 'MODULE_NOT_FOUND';
/******/ 			throw e;
/******/ 		}
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry needs to be wrapped in an IIFE because it needs to be isolated against other modules in the chunk.
(() => {
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react-dom/client */ "./node_modules/react-dom/client.js");
/* harmony import */ var _scripts_Navbar__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./scripts/Navbar */ "./src/scripts/Navbar.js");
/* harmony import */ var _scripts_Footer__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./scripts/Footer */ "./src/scripts/Footer.js");
/* harmony import */ var _scripts_ContactForm__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./scripts/ContactForm */ "./src/scripts/ContactForm.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5__);






// ── Navbar ─────────────────────────────────────────────────────────────────────

if (document.querySelector("#navbar-root")) {
  react_dom_client__WEBPACK_IMPORTED_MODULE_1__.createRoot(document.querySelector("#navbar-root")).render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5__.jsx)(_scripts_Navbar__WEBPACK_IMPORTED_MODULE_2__["default"], {}));
}

// ── Footer ─────────────────────────────────────────────────────────────────────
if (document.querySelector("#footer-root")) {
  react_dom_client__WEBPACK_IMPORTED_MODULE_1__.createRoot(document.querySelector("#footer-root")).render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5__.jsx)(_scripts_Footer__WEBPACK_IMPORTED_MODULE_3__["default"], {}));
}

// ── ContactForm — full mode (Block 10 homepage, contact page) ─────────────────
// Reads data-cf-config from its own mount div only (may contain email, address, etc.)
const contactRoot = document.querySelector("#contact-form-root");
if (contactRoot) {
  let contactConfig = {};
  try {
    contactConfig = JSON.parse(contactRoot.dataset.cfConfig || "{}");
  } catch {}
  react_dom_client__WEBPACK_IMPORTED_MODULE_1__.createRoot(contactRoot).render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5__.jsx)(_scripts_ContactForm__WEBPACK_IMPORTED_MODULE_4__["default"], {
    propConfig: contactConfig
  }));
}

// ── ContactForm — compact mode (hero embed) ───────────────────────────────────
// Always compact — config hardcoded here, never reads from other mounts
const heroRoot = document.querySelector("#hero-form-root");
if (heroRoot) {
  let heroConfig = {};
  try {
    heroConfig = JSON.parse(heroRoot.dataset.cfConfig || "{}");
  } catch {}
  react_dom_client__WEBPACK_IMPORTED_MODULE_1__.createRoot(heroRoot).render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5__.jsx)(_scripts_ContactForm__WEBPACK_IMPORTED_MODULE_4__["default"], {
    propConfig: heroConfig
  }));
}
})();

/******/ })()
;
//# sourceMappingURL=index.js.map