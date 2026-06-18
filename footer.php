<?php
// ─────────────────────────────────────────────────────────────────────────────
//  FOOTER — adaptado de src/scripts/Footer.js (React) a PHP/HTML nativo
// ─────────────────────────────────────────────────────────────────────────────
$footer_service_links = [
  ['label' => 'Kitchen Remodeling',    'href' => '/kitchen-remodeling'],
  ['label' => 'Bathroom Remodeling',   'href' => '/bathroom-remodeling'],
  ['label' => 'Flooring Installation', 'href' => '/flooring-installation'],
];
$footer_page_links = [
  ['label' => 'Home',           'href' => '/'],
  ['label' => 'Our Work',       'href' => '/our-work'],
  ['label' => 'About Us',       'href' => '/about-us'],
  ['label' => 'Contact',        'href' => '/contact'],
  ['label' => 'Privacy Policy', 'href' => '/privacy-policy'],
];
$footer_service_areas = [
  'Howard County', 'Montgomery County', 'Frederick County',
  "Prince George's County", 'Baltimore County', 'Anne Arundel County',
];
?>

<footer style="background:#0d1b2a;">

  <!-- Divisor superior — gradiente dorado -->
  <div style="height:2px; background:linear-gradient(90deg, transparent 0%, #C9A84C 30%, #C9A84C 70%, transparent 100%);"></div>

  <!-- Cuerpo principal -->
  <div style="max-width:1280px; margin:0 auto; padding:64px 24px 48px; display:grid; grid-template-columns:repeat(auto-fit, minmax(200px, 1fr)); gap:48px;">

    <!-- ── Col 1: Logo + tagline + badges + redes ──────────────────────────── -->
    <div style="grid-column:span 1;">
      <a href="/" style="display:inline-block; text-decoration:none; margin-bottom:16px;">
        <img src="/wp-content/uploads/2026/04/Tikal_imagotipo_condensado-scaled.png" alt="Tikal Empire — Kitchen, Bath &amp; Flooring" style="height:52px; width:auto; display:block;"/>
      </a>

      <p style="font-family:'Inter',sans-serif; font-size:13px; font-weight:400; line-height:1.7; color:rgba(255,255,255,0.42); margin-top:16px; margin-bottom:24px; max-width:240px;">
        Premium interior remodeling for Maryland homeowners — delivered with schedule discipline and craftsmanship you can see.
      </p>

      <!-- Badges -->
      <div style="display:flex; flex-direction:column; gap:10px;">
        <!-- License badge -->
        <div style="display:inline-flex; align-items:center; gap:10px; padding:10px 16px; border-radius:6px; border:1px solid rgba(201,168,76,0.3); background:rgba(201,168,76,0.05);">
          <svg viewBox="0 0 24 24" fill="#C9A84C" style="width:20px; height:20px; flex-shrink:0;"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-1 14l-3-3 1.41-1.41L11 12.17l4.59-4.58L17 9l-6 6z"/></svg>
          <div style="display:flex; flex-direction:column; gap:2px;">
            <span style="font-family:'Montserrat',sans-serif; font-size:11px; font-weight:800; letter-spacing:0.1em; text-transform:uppercase; color:#C9A84C;">MHIC #154361</span>
            <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:500; letter-spacing:0.06em; color:rgba(255,255,255,0.45);">Licensed &amp; Insured · Maryland</span>
          </div>
        </div>
        <!-- Google reviews badge -->
        <a href="https://g.page/r/YOUR_GOOGLE_PLACE_ID/review" target="_blank" rel="noopener noreferrer" style="display:inline-flex; align-items:center; gap:10px; padding:10px 16px; border-radius:6px; border:1px solid rgba(255,255,255,0.1); background:rgba(255,255,255,0.04); text-decoration:none; transition:border-color 0.2s, background 0.2s;" onmouseover="this.style.borderColor='rgba(201,168,76,0.4)';this.style.background='rgba(201,168,76,0.06)';" onmouseout="this.style.borderColor='rgba(255,255,255,0.1)';this.style.background='rgba(255,255,255,0.04)';">
          <svg viewBox="0 0 24 24" style="width:20px; height:20px; flex-shrink:0;"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
          <div style="display:flex; flex-direction:column; gap:2px;">
            <div style="display:flex; gap:2px;">
              <?php for ($s = 0; $s < 5; $s++): ?><svg viewBox="0 0 20 20" fill="#FBBC05" style="width:11px; height:11px;"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><?php endfor; ?>
            </div>
            <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:600; letter-spacing:0.06em; color:rgba(255,255,255,0.55);">See our Google Reviews</span>
          </div>
        </a>
      </div>

      <!-- Redes sociales -->
      <div style="display:flex; gap:10px; margin-top:24px;">
        <!-- Facebook -->
        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" aria-label="Facebook" style="width:36px; height:36px; border-radius:6px; display:flex; align-items:center; justify-content:center; color:rgba(255,255,255,0.45); background:rgba(255,255,255,0.06); border:1px solid rgba(255,255,255,0.08); text-decoration:none; transition:color 0.2s, background 0.2s, border-color 0.2s, transform 0.15s;" onmouseover="this.style.color='#C9A84C';this.style.background='rgba(201,168,76,0.1)';this.style.borderColor='rgba(201,168,76,0.35)';this.style.transform='translateY(-2px)';" onmouseout="this.style.color='rgba(255,255,255,0.45)';this.style.background='rgba(255,255,255,0.06)';this.style.borderColor='rgba(255,255,255,0.08)';this.style.transform='none';">
          <svg viewBox="0 0 24 24" fill="currentColor" style="width:18px; height:18px;"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12.07h2.54V9.845c0-2.503 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12.07h2.773l-.443 2.89h-2.33v6.988C20.343 21.128 24 16.991 24 12.073z"/></svg>
        </a>
        <!-- Instagram -->
        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" aria-label="Instagram" style="width:36px; height:36px; border-radius:6px; display:flex; align-items:center; justify-content:center; color:rgba(255,255,255,0.45); background:rgba(255,255,255,0.06); border:1px solid rgba(255,255,255,0.08); text-decoration:none; transition:color 0.2s, background 0.2s, border-color 0.2s, transform 0.15s;" onmouseover="this.style.color='#C9A84C';this.style.background='rgba(201,168,76,0.1)';this.style.borderColor='rgba(201,168,76,0.35)';this.style.transform='translateY(-2px)';" onmouseout="this.style.color='rgba(255,255,255,0.45)';this.style.background='rgba(255,255,255,0.06)';this.style.borderColor='rgba(255,255,255,0.08)';this.style.transform='none';">
          <svg viewBox="0 0 24 24" fill="currentColor" style="width:18px; height:18px;"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
        </a>
        <!-- Houzz -->
        <a href="https://houzz.com" target="_blank" rel="noopener noreferrer" aria-label="Houzz" style="width:36px; height:36px; border-radius:6px; display:flex; align-items:center; justify-content:center; color:rgba(255,255,255,0.45); background:rgba(255,255,255,0.06); border:1px solid rgba(255,255,255,0.08); text-decoration:none; transition:color 0.2s, background 0.2s, border-color 0.2s, transform 0.15s;" onmouseover="this.style.color='#C9A84C';this.style.background='rgba(201,168,76,0.1)';this.style.borderColor='rgba(201,168,76,0.35)';this.style.transform='translateY(-2px)';" onmouseout="this.style.color='rgba(255,255,255,0.45)';this.style.background='rgba(255,255,255,0.06)';this.style.borderColor='rgba(255,255,255,0.08)';this.style.transform='none';">
          <svg viewBox="0 0 24 24" fill="currentColor" style="width:18px; height:18px;"><path d="M 12 1 L 3 6.5 L 3 12 L 9 12 L 9 23 L 15 23 L 15 15 L 21 15 L 21 6.5 Z"/></svg>
        </a>
        <!-- YouTube -->
        <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" aria-label="YouTube" style="width:36px; height:36px; border-radius:6px; display:flex; align-items:center; justify-content:center; color:rgba(255,255,255,0.45); background:rgba(255,255,255,0.06); border:1px solid rgba(255,255,255,0.08); text-decoration:none; transition:color 0.2s, background 0.2s, border-color 0.2s, transform 0.15s;" onmouseover="this.style.color='#C9A84C';this.style.background='rgba(201,168,76,0.1)';this.style.borderColor='rgba(201,168,76,0.35)';this.style.transform='translateY(-2px)';" onmouseout="this.style.color='rgba(255,255,255,0.45)';this.style.background='rgba(255,255,255,0.06)';this.style.borderColor='rgba(255,255,255,0.08)';this.style.transform='none';">
          <svg viewBox="0 0 24 24" fill="currentColor" style="width:18px; height:18px;"><path d="M23.495 6.205a3.007 3.007 0 00-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 00.527 6.205a31.247 31.247 0 00-.522 5.805 31.247 31.247 0 00.522 5.783 3.007 3.007 0 002.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 002.088-2.088 31.247 31.247 0 00.5-5.783 31.247 31.247 0 00-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"/></svg>
        </a>
      </div>
    </div>

    <!-- ── Col 2: Services + Pages ─────────────────────────────────────────── -->
    <div>
      <div style="margin-bottom:20px;">
        <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.22em; text-transform:uppercase; color:#C9A84C;">Services</span>
        <div style="width:28px; height:2px; background:#C9A84C; margin-top:8px; opacity:0.6;"></div>
      </div>
      <nav>
        <?php foreach ($footer_service_links as $l): ?>
          <a href="<?php echo $l['href']; ?>" style="display:flex; align-items:center; gap:8px; font-family:'Montserrat',sans-serif; font-size:12px; font-weight:500; letter-spacing:0.04em; color:rgba(255,255,255,0.5); text-decoration:none; transition:color 0.2s, gap 0.2s; padding-bottom:10px;" onmouseover="this.style.color='#C9A84C';this.style.gap='12px';" onmouseout="this.style.color='rgba(255,255,255,0.5)';this.style.gap='8px';">
            <span style="width:4px; height:4px; border-radius:50%; background:#C9A84C; flex-shrink:0; opacity:0.6;"></span>
            <?php echo $l['label']; ?>
          </a>
        <?php endforeach; ?>
      </nav>

      <div style="margin-top:20px;">
        <div style="margin-bottom:20px;">
          <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.22em; text-transform:uppercase; color:#C9A84C;">Pages</span>
          <div style="width:28px; height:2px; background:#C9A84C; margin-top:8px; opacity:0.6;"></div>
        </div>
        <nav>
          <?php foreach ($footer_page_links as $l): ?>
            <a href="<?php echo $l['href']; ?>" style="display:flex; align-items:center; gap:8px; font-family:'Montserrat',sans-serif; font-size:12px; font-weight:500; letter-spacing:0.04em; color:rgba(255,255,255,0.5); text-decoration:none; transition:color 0.2s, gap 0.2s; padding-bottom:10px;" onmouseover="this.style.color='#C9A84C';this.style.gap='12px';" onmouseout="this.style.color='rgba(255,255,255,0.5)';this.style.gap='8px';">
              <span style="width:4px; height:4px; border-radius:50%; background:#C9A84C; flex-shrink:0; opacity:0.6;"></span>
              <?php echo $l['label']; ?>
            </a>
          <?php endforeach; ?>
        </nav>
      </div>
    </div>

    <!-- ── Col 3: Service Areas ────────────────────────────────────────────── -->
    <div>
      <div style="margin-bottom:20px;">
        <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.22em; text-transform:uppercase; color:#C9A84C;">Service Areas</span>
        <div style="width:28px; height:2px; background:#C9A84C; margin-top:8px; opacity:0.6;"></div>
      </div>
      <p style="font-family:'Inter',sans-serif; font-size:12px; color:rgba(255,255,255,0.38); margin-bottom:14px; letter-spacing:0.02em;">Serving a 50-mile radius across Maryland:</p>
      <div style="display:flex; flex-direction:column; gap:0;">
        <?php foreach ($footer_service_areas as $area): ?>
          <span style="display:flex; align-items:center; gap:8px; font-family:'Montserrat',sans-serif; font-size:12px; font-weight:500; letter-spacing:0.04em; color:rgba(255,255,255,0.5); padding-bottom:10px;">
            <span style="width:4px; height:4px; border-radius:50%; background:#415a77; flex-shrink:0;"></span>
            <?php echo $area; ?>
          </span>
        <?php endforeach; ?>
      </div>
      <div style="margin-top:8px; padding:10px 14px; border-radius:6px; background:rgba(74,111,138,0.12); border:1px solid rgba(74,111,138,0.2); display:flex; align-items:flex-start; gap:8px;">
        <svg viewBox="0 0 24 24" fill="#415a77" style="width:14px; height:14px; flex-shrink:0; margin-top:1px;"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
        <span style="font-family:'Inter',sans-serif; font-size:11px; color:rgba(255,255,255,0.32); line-height:1.5;">Based in the Duluth, GA area. Traveling throughout Maryland for interior projects.</span>
      </div>
    </div>

    <!-- ── Col 4: Contact ──────────────────────────────────────────────────── -->
    <div>
      <div style="margin-bottom:20px;">
        <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.22em; text-transform:uppercase; color:#C9A84C;">Contact Us</span>
        <div style="width:28px; height:2px; background:#C9A84C; margin-top:8px; opacity:0.6;"></div>
      </div>

      <div style="display:flex; flex-direction:column; gap:18px;">
        <!-- Teléfono -->
        <a href="tel:+13013004172" style="display:flex; align-items:center; gap:12px; text-decoration:none; transition:opacity 0.2s;" onmouseover="this.style.opacity='0.8';" onmouseout="this.style.opacity='1';">
          <div style="width:36px; height:36px; border-radius:6px; background:rgba(201,168,76,0.1); border:1px solid rgba(201,168,76,0.2); display:flex; align-items:center; justify-content:center; flex-shrink:0;">
            <svg viewBox="0 0 24 24" fill="#C9A84C" style="width:16px; height:16px;"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
          </div>
          <div>
            <p style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:600; letter-spacing:0.1em; text-transform:uppercase; color:rgba(255,255,255,0.35); margin:0;">Phone</p>
            <p style="font-family:'Montserrat',sans-serif; font-size:14px; font-weight:700; color:#fff; margin:2px 0 0;">(301) 300-4172</p>
          </div>
        </a>
        <!-- WhatsApp -->
        <a href="https://wa.me/13013004172" target="_blank" rel="noopener noreferrer" style="display:flex; align-items:center; gap:12px; text-decoration:none; transition:opacity 0.2s;" onmouseover="this.style.opacity='0.8';" onmouseout="this.style.opacity='1';">
          <div style="width:36px; height:36px; border-radius:6px; background:rgba(37,211,102,0.1); border:1px solid rgba(37,211,102,0.2); display:flex; align-items:center; justify-content:center; flex-shrink:0;">
            <svg viewBox="0 0 24 24" fill="#25D366" style="width:17px; height:17px;"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
          </div>
          <div>
            <p style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:600; letter-spacing:0.1em; text-transform:uppercase; color:rgba(255,255,255,0.35); margin:0;">WhatsApp</p>
            <p style="font-family:'Montserrat',sans-serif; font-size:14px; font-weight:700; color:#fff; margin:2px 0 0;">Message Us</p>
          </div>
        </a>
        <!-- Email -->
        <a href="mailto:info@tikalempire.com" style="display:flex; align-items:center; gap:12px; text-decoration:none; transition:opacity 0.2s;" onmouseover="this.style.opacity='0.8';" onmouseout="this.style.opacity='1';">
          <div style="width:36px; height:36px; border-radius:6px; background:rgba(74,111,138,0.12); border:1px solid rgba(74,111,138,0.2); display:flex; align-items:center; justify-content:center; flex-shrink:0;">
            <svg viewBox="0 0 24 24" fill="#415a77" style="width:16px; height:16px;"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
          </div>
          <div>
            <p style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:600; letter-spacing:0.1em; text-transform:uppercase; color:rgba(255,255,255,0.35); margin:0;">Email</p>
            <p style="font-family:'Montserrat',sans-serif; font-size:13px; font-weight:600; color:rgba(255,255,255,0.7); margin:2px 0 0;">info@tikalempire.com</p>
          </div>
        </a>
      </div>

      <!-- CTA -->
      <a href="/contact" style="display:inline-flex; align-items:center; justify-content:center; width:100%; margin-top:28px; padding:14px 0; background:#C9A84C; color:#0d1b2a; font-family:'Montserrat',sans-serif; font-size:11px; font-weight:800; letter-spacing:0.13em; text-transform:uppercase; text-decoration:none; border-radius:4px; transition:background 0.2s, transform 0.15s; box-shadow:0 2px 14px rgba(201,168,76,0.25);" onmouseover="this.style.background='#DFB95A';this.style.transform='translateY(-1px)';" onmouseout="this.style.background='#C9A84C';this.style.transform='none';">
        Request a Free Estimate
      </a>
    </div>

  </div>

  <!-- Barra inferior -->
  <div style="border-top:1px solid rgba(255,255,255,0.07);">
    <div style="max-width:1280px; margin:0 auto; padding:20px 24px; display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:12px;">
      <p style="font-family:'Inter',sans-serif; font-size:11px; color:rgba(255,255,255,0.25); margin:0;">© <?php echo date('Y'); ?> Your Company Name. All rights reserved.</p>
      <div style="display:flex; align-items:center; gap:20px; flex-wrap:wrap;">
        <a href="/privacy-policy" style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:600; letter-spacing:0.08em; text-transform:uppercase; color:rgba(255,255,255,0.25); text-decoration:none; transition:color 0.2s;" onmouseover="this.style.color='#C9A84C';" onmouseout="this.style.color='rgba(255,255,255,0.25)';">Privacy Policy</a>
        <span style="color:rgba(255,255,255,0.12); font-size:10px;">|</span>
        <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:600; letter-spacing:0.08em; text-transform:uppercase; color:rgba(255,255,255,0.25);">MHIC #154361</span>
      </div>
    </div>
  </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>