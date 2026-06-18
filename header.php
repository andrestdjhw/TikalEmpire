<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

<?php
// ─────────────────────────────────────────────────────────────────────────────
//  NAVBAR — adaptado de src/scripts/Navbar.js (React) a PHP/HTML nativo
// ─────────────────────────────────────────────────────────────────────────────
$services = [
  ['label' => 'Kitchen Remodeling',    'href' => '/kitchen-remodeling'],
  ['label' => 'Bathroom Remodeling',   'href' => '/bathroom-remodeling'],
  ['label' => 'Flooring Installation', 'href' => '/flooring-installation'],
];
$nav_links = [
  ['label' => 'Home',     'href' => '/'],
  ['label' => 'Services', 'href' => '#', 'dropdown' => true],
  ['label' => 'Our Work', 'href' => '/our-work'],
  ['label' => 'About Us', 'href' => '/about-us'],
  ['label' => 'Contact',  'href' => '/contact'],
];
$ticker_items = [
  'MHIC #154361', 'Licensed &amp; Insured', 'Howard County', 'Montgomery County',
  'Frederick County', 'Kitchen · Bath · Flooring', 'Schedule Discipline',
  'Your home, transformed with certainty.',
];
$ticker_segment = implode('   ·   ', $ticker_items);
?>

<style>
  @keyframes navTicker { from { transform: translateX(0); } to { transform: translateX(-33.333%); } }

  .nb-link { position:relative; font-family:'Montserrat',sans-serif; font-size:11px; font-weight:700; letter-spacing:0.12em; text-transform:uppercase; color:rgba(255,255,255,0.75); text-decoration:none; padding-bottom:3px; transition:color 0.2s; background:none; border:none; cursor:pointer; }
  .nb-link::after { content:''; position:absolute; bottom:-3px; left:0; width:0; height:2px; background:#C9A84C; transition:width 0.25s ease; border-radius:1px; }
  .nb-link:hover { color:#fff; }
  .nb-link:hover::after { width:100%; }

  .nb-cta { display:inline-flex; align-items:center; justify-content:center; background:#C9A84C; color:#0d1b2a; font-family:'Montserrat',sans-serif; font-size:11px; font-weight:800; letter-spacing:0.13em; text-transform:uppercase; text-decoration:none; padding:0 22px; height:46px; min-height:48px; border-radius:4px; white-space:nowrap; border:none; cursor:pointer; transition:background 0.2s, transform 0.15s, box-shadow 0.2s; box-shadow:0 2px 14px rgba(201,168,76,0.28); }
  .nb-cta:hover { background:#DFB95A; transform:translateY(-1px); box-shadow:0 6px 22px rgba(201,168,76,0.38); color:#0d1b2a; text-decoration:none; }

  .nb-whatsapp { position:fixed; bottom:24px; right:24px; z-index:9999; width:56px; height:56px; border-radius:50%; background:#25D366; display:flex; align-items:center; justify-content:center; box-shadow:0 8px 28px rgba(37,211,102,0.38); transition:transform 0.22s ease, box-shadow 0.22s ease; text-decoration:none; }
  .nb-whatsapp:hover { transform:scale(1.1) translateY(-2px); box-shadow:0 14px 36px rgba(37,211,102,0.52); }

  /* Header — sombra al hacer scroll */
  .nb-header { position:sticky; top:0; z-index:50; background:#0d1b2a; transition:box-shadow 0.3s ease; box-shadow:0 1px 0 rgba(255,255,255,0.05); }
  .nb-header.scrolled { box-shadow:0 4px 40px rgba(0,0,0,0.55); }

  /* Dropdown de servicios (escritorio) */
  .nb-services { position:relative; }
  .nb-services-dropdown { position:absolute; top:calc(100% + 14px); left:50%; width:228px; background:#0d1b2a; border:1px solid rgba(201,168,76,0.28); border-radius:6px; box-shadow:0 20px 52px rgba(0,0,0,0.5); overflow:hidden; z-index:100; opacity:0; pointer-events:none; transform:translateX(-50%) translateY(-8px); transition:opacity 0.22s ease, transform 0.22s ease; }
  .nb-services.open .nb-services-dropdown { opacity:1; pointer-events:auto; transform:translateX(-50%) translateY(0); }
  .nb-services.open .nb-chevron { transform:rotate(180deg); }
  .nb-chevron { transition:transform 0.2s; flex-shrink:0; }

  /* Hamburguesa */
  .nb-hamburger { background:none; border:none; cursor:pointer; flex-direction:column; gap:5px; padding:6px; }
  .nb-hamburger .bar { display:block; width:22px; height:2px; background:rgba(255,255,255,0.9); border-radius:2px; transform-origin:center; transition:transform 0.25s ease, opacity 0.2s; }
  .nb-hamburger.open .bar-1 { transform:translateY(7px) rotate(45deg); }
  .nb-hamburger.open .bar-2 { opacity:0; }
  .nb-hamburger.open .bar-3 { transform:translateY(-7px) rotate(-45deg); }

  /* Menú móvil */
  .nb-mobile-menu { background:#060d18; max-height:0; overflow:hidden; transition:max-height 0.35s cubic-bezier(0.4,0,0.2,1); }
  .nb-mobile-menu.open { max-height:620px; border-top:1px solid rgba(201,168,76,0.15); }
  .nb-mobile-services-panel { display:none; padding-left:16px; padding-bottom:8px; }
  .nb-mobile-services.open .nb-mobile-services-panel { display:block; }
  .nb-mobile-services.open .nb-chevron { transform:rotate(180deg); }

  /* Responsive — reemplaza las clases lg:/sm: de Tailwind */
  .nb-topbar { display:none; }
  .nb-desktop-nav { display:none; align-items:center; gap:38px; }
  .nb-hamburger { display:flex; }
  .nb-cta-header { display:none; }

  @media (min-width:640px) {
    .nb-topbar { display:block; }
    .nb-cta-header { display:inline-flex; }
  }
  @media (min-width:1024px) {
    .nb-desktop-nav { display:flex; }
    .nb-hamburger { display:none !important; }
    .nb-mobile-menu { display:none !important; max-height:0 !important; overflow:hidden !important; }
  }
</style>

<!-- ── Top bar ─────────────────────────────────────────────────────────────── -->
<div class="nb-topbar" style="background:#060d18; border-bottom:1px solid rgba(255,255,255,0.06);">
  <div style="max-width:1280px; margin:0 auto; padding:7px 24px; display:flex; align-items:center; justify-content:space-between; gap:16px;">

    <!-- Izquierda: teléfono + email -->
    <div style="display:flex; align-items:center; gap:18px;">
      <a href="tel:+13013004172" style="display:flex; align-items:center; gap:6px; font-family:'Amino',sans-serif; font-size:11px; font-weight:700; letter-spacing:0.05em; color:#C9A84C; text-decoration:none; transition:color 0.2s;" onmouseover="this.style.color='#DFB95A';" onmouseout="this.style.color='#C9A84C';">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
        (301) 300-4172
      </a>
      <span style="color:rgba(255,255,255,0.12); font-size:12px;">|</span>
      <a href="mailto:info@tikalempire.com" style="display:flex; align-items:center; gap:6px; font-family:'Amino',sans-serif; font-size:11px; font-weight:600; letter-spacing:0.04em; color:rgba(255,255,255,0.5); text-decoration:none; transition:color 0.2s;" onmouseover="this.style.color='#C9A84C';" onmouseout="this.style.color='rgba(255,255,255,0.5)';">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
        info@tikalempire.com
      </a>
    </div>

    <!-- Centro: geo tag -->
    <a href="https://maps.google.com/?q=Maryland" target="_blank" rel="noopener noreferrer" style="display:flex; align-items:center; gap:7px; font-family:'Amino',sans-serif; font-size:11px; font-weight:600; letter-spacing:0.09em; text-transform:uppercase; color:rgba(255,255,255,0.45); text-decoration:none; transition:color 0.2s;" onmouseover="this.style.color='#C9A84C';" onmouseout="this.style.color='rgba(255,255,255,0.45)';">
      <svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
      Serving Maryland — 50-mile radius
    </a>

    <!-- Derecha: redes sociales -->
    <div style="display:flex; align-items:center; gap:6px;">
      <a href="https://facebook.com/tikalempire" target="_blank" rel="noopener noreferrer" aria-label="Facebook" style="width:28px; height:28px; border-radius:5px; display:flex; align-items:center; justify-content:center; color:rgba(255,255,255,0.4); background:rgba(255,255,255,0.05); transition:color 0.2s, background 0.2s;" onmouseover="this.style.color='#C9A84C';this.style.background='rgba(201,168,76,0.1)';" onmouseout="this.style.color='rgba(255,255,255,0.4)';this.style.background='rgba(255,255,255,0.05)';">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12.07h2.54V9.845c0-2.503 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12.07h2.773l-.443 2.89h-2.33v6.988C20.343 21.128 24 16.991 24 12.073z"/></svg>
      </a>
      <a href="https://instagram.com/tikalempire" target="_blank" rel="noopener noreferrer" aria-label="Instagram" style="width:28px; height:28px; border-radius:5px; display:flex; align-items:center; justify-content:center; color:rgba(255,255,255,0.4); background:rgba(255,255,255,0.05); transition:color 0.2s, background 0.2s;" onmouseover="this.style.color='#C9A84C';this.style.background='rgba(201,168,76,0.1)';" onmouseout="this.style.color='rgba(255,255,255,0.4)';this.style.background='rgba(255,255,255,0.05)';">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
      </a>
      <a href="https://g.page/r/YOUR_GOOGLE_PLACE_ID" target="_blank" rel="noopener noreferrer" aria-label="Google Reviews" style="width:28px; height:28px; border-radius:5px; display:flex; align-items:center; justify-content:center; background:rgba(255,255,255,0.05); transition:background 0.2s;" onmouseover="this.style.background='rgba(201,168,76,0.1)';" onmouseout="this.style.background='rgba(255,255,255,0.05)';">
        <svg viewBox="0 0 24 24" style="width:14px; height:14px;"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
      </a>
    </div>

  </div>
</div>

<!-- ── Header principal ────────────────────────────────────────────────────── -->
<header class="nb-header">
  <div style="max-width:1280px; margin:0 auto; padding:0 24px; height:76px; display:flex; align-items:center; justify-content:space-between;">

    <!-- Logo -->
    <a href="/" style="text-decoration:none; display:flex; align-items:center; flex-shrink:0;">
      <img src="/wp-content/uploads/2026/04/Tikal_imagotipo_condensado-scaled.png" alt="Tikal Empire — Kitchen, Bath &amp; Flooring" style="height:48px; width:auto; display:block;"/>
    </a>

    <!-- Nav escritorio -->
    <nav class="nb-desktop-nav">
      <?php foreach ($nav_links as $link): ?>
        <?php if (!empty($link['dropdown'])): ?>
          <div class="nb-services">
            <button class="nb-link" style="display:flex; align-items:center; gap:5px; padding:0;" aria-haspopup="true">
              <?php echo $link['label']; ?>
              <svg class="nb-chevron" width="10" height="10" viewBox="0 0 20 20" fill="#C9A84C"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
            </button>
            <div class="nb-services-dropdown">
              <div style="height:2px; background:linear-gradient(90deg, transparent, #C9A84C, transparent);"></div>
              <?php foreach ($services as $i => $item): ?>
                <a href="<?php echo $item['href']; ?>" style="display:flex; align-items:center; gap:12px; padding:13px 20px; font-family:'Montserrat',sans-serif; font-size:11px; font-weight:600; letter-spacing:0.08em; text-transform:uppercase; color:rgba(255,255,255,0.7); text-decoration:none; <?php echo $i < count($services) - 1 ? 'border-bottom:1px solid rgba(255,255,255,0.06);' : ''; ?> transition:color 0.18s, background 0.18s, padding-left 0.18s;" onmouseover="this.style.color='#C9A84C';this.style.background='rgba(201,168,76,0.08)';this.style.paddingLeft='24px';" onmouseout="this.style.color='rgba(255,255,255,0.7)';this.style.background='transparent';this.style.paddingLeft='20px';">
                  <span style="width:5px; height:5px; border-radius:50%; background:#C9A84C; flex-shrink:0; opacity:0.75;"></span>
                  <?php echo $item['label']; ?>
                </a>
              <?php endforeach; ?>
            </div>
          </div>
        <?php else: ?>
          <a href="<?php echo $link['href']; ?>" class="nb-link"><?php echo $link['label']; ?></a>
        <?php endif; ?>
      <?php endforeach; ?>
    </nav>

    <!-- CTA + Hamburguesa -->
    <div style="display:flex; align-items:center; gap:14px;">
      <a href="/contact" class="nb-cta nb-cta-header">Request a Free Estimate</a>
      <button class="nb-hamburger" aria-label="Toggle menu" aria-expanded="false">
        <span class="bar bar-1"></span>
        <span class="bar bar-2"></span>
        <span class="bar bar-3"></span>
      </button>
    </div>

  </div>

  <!-- Menú móvil -->
  <div class="nb-mobile-menu">
    <div style="padding:16px 24px 32px;">
      <?php foreach ($nav_links as $link): ?>
        <?php if (!empty($link['dropdown'])): ?>
          <div class="nb-mobile-services" style="border-bottom:1px solid rgba(255,255,255,0.06);">
            <button class="nb-mobile-services-toggle" style="width:100%; background:none; border:none; cursor:pointer; display:flex; align-items:center; justify-content:space-between; padding:14px 0; font-family:'Montserrat',sans-serif; font-size:11px; font-weight:700; letter-spacing:0.14em; text-transform:uppercase; color:rgba(255,255,255,0.8);">
              <?php echo $link['label']; ?>
              <svg class="nb-chevron" width="11" height="11" viewBox="0 0 20 20" fill="#C9A84C"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
            </button>
            <div class="nb-mobile-services-panel">
              <?php foreach ($services as $item): ?>
                <a href="<?php echo $item['href']; ?>" style="display:flex; align-items:center; gap:10px; padding:10px 0; font-family:'Montserrat',sans-serif; font-size:11px; font-weight:600; letter-spacing:0.08em; text-transform:uppercase; color:rgba(255,255,255,0.5); text-decoration:none; transition:color 0.18s;" onmouseover="this.style.color='#C9A84C';" onmouseout="this.style.color='rgba(255,255,255,0.5)';">
                  <span style="width:4px; height:4px; border-radius:50%; background:#C9A84C; flex-shrink:0;"></span>
                  <?php echo $item['label']; ?>
                </a>
              <?php endforeach; ?>
            </div>
          </div>
        <?php else: ?>
          <a href="<?php echo $link['href']; ?>" style="display:block; padding:14px 0; font-family:'Montserrat',sans-serif; font-size:11px; font-weight:700; letter-spacing:0.14em; text-transform:uppercase; color:rgba(255,255,255,0.8); text-decoration:none; border-bottom:1px solid rgba(255,255,255,0.06); transition:color 0.18s;" onmouseover="this.style.color='#C9A84C';" onmouseout="this.style.color='rgba(255,255,255,0.8)';">
            <?php echo $link['label']; ?>
          </a>
        <?php endif; ?>
      <?php endforeach; ?>

      <a href="/contact" class="nb-cta" style="width:100%; margin-top:22px;">Request a Free Estimate</a>

      <div style="margin-top:20px; padding-top:18px; border-top:1px solid rgba(255,255,255,0.07); display:flex; flex-direction:column; gap:8px;">
        <a href="tel:+13013004172" style="display:flex; align-items:center; gap:8px; font-family:'Montserrat',sans-serif; font-size:12px; font-weight:700; letter-spacing:0.05em; color:#C9A84C; text-decoration:none;">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
          (301) 300-4172
        </a>
        <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:600; letter-spacing:0.1em; text-transform:uppercase; color:rgba(255,255,255,0.3);">
          MHIC #154361 · Licensed &amp; Insured · Serving Maryland
        </span>
      </div>
    </div>
  </div>

  <!-- Ticker -->
  <div style="background:#060d18; border-top:1px solid rgba(201,168,76,0.12); overflow:hidden; padding:7px 0;">
    <div style="display:flex; animation:navTicker 40s linear infinite; will-change:transform;">
      <?php for ($i = 0; $i < 3; $i++): ?>
        <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.2em; text-transform:uppercase; color:#C9A84C; padding-right:7rem; flex-shrink:0; white-space:nowrap;"><?php echo $ticker_segment; ?></span>
      <?php endfor; ?>
    </div>
  </div>
</header>

<!-- WhatsApp FAB — fijo, siempre visible -->
<a href="https://wa.me/13013004172" target="_blank" rel="noopener noreferrer" class="nb-whatsapp" aria-label="Contact us on WhatsApp">
  <svg viewBox="0 0 24 24" fill="white" style="width:28px; height:28px;"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>

<script>
(function () {
  // Sombra del header al hacer scroll
  var header = document.querySelector('.nb-header')
  function onScroll() { if (header) header.classList.toggle('scrolled', window.scrollY > 10) }
  window.addEventListener('scroll', onScroll)
  onScroll()

  // Dropdown de servicios en escritorio (hover con retardo de cierre)
  var services = document.querySelector('.nb-services')
  if (services) {
    var closeTimer = null
    services.addEventListener('mouseenter', function () { clearTimeout(closeTimer); services.classList.add('open') })
    services.addEventListener('mouseleave', function () { closeTimer = setTimeout(function () { services.classList.remove('open') }, 120) })
  }

  // Menú móvil
  var hamburger = document.querySelector('.nb-hamburger')
  var mobileMenu = document.querySelector('.nb-mobile-menu')
  function setMobile(open) {
    if (!hamburger || !mobileMenu) return
    hamburger.classList.toggle('open', open)
    mobileMenu.classList.toggle('open', open)
    hamburger.setAttribute('aria-expanded', open ? 'true' : 'false')
    document.body.style.overflow = open ? 'hidden' : ''
  }
  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', function () {
      setMobile(!mobileMenu.classList.contains('open'))
    })
  }

  // Acordeón de servicios en móvil
  var mobileServices = document.querySelector('.nb-mobile-services')
  var mobileServicesToggle = document.querySelector('.nb-mobile-services-toggle')
  if (mobileServicesToggle && mobileServices) {
    mobileServicesToggle.addEventListener('click', function () {
      mobileServices.classList.toggle('open')
    })
  }

  // Cerrar el menú móvil al pasar a escritorio
  window.addEventListener('resize', function () {
    if (window.innerWidth >= 1024) setMobile(false)
  })
})()
</script>