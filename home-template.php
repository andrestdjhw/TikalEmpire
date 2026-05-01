<?php
/*
 * Template Name: Homepage
 * Template Post Type: page
 */

get_header();

// ─────────────────────────────────────────────────────────────────────────────
//  🖼  BACKGROUND IMAGES — update paths to match your WordPress Media uploads.
//  Leave a value as '' (empty string) to use the solid colour fallback instead.
// ─────────────────────────────────────────────────────────────────────────────
$bg = [
  'hero'         => '/wp-content/uploads/2026/04/KitchenRemodelingHero-scaled.jpg',   // Block 1 — Hero
  'services'     => '/wp-content/uploads/2026/04/Estampados-01-scaled.png',   // Block 4 — What We Do
  'process'      => '/wp-content/uploads/2026/04/Estampados-02-scaled.png',   // Block 6 — How We Work
  'testimonials' => '/wp-content/uploads/2026/04/Estampados-01-scaled.png',   // Block 8 — Reviews / Testimonials
  'contact'      => '/wp-content/uploads/2026/04/Estampados-01-scaled.png',   // Block 10 — Contact Form
];

// Overlay opacity per section (0.0 = transparent, 1.0 = full solid colour).
// Increase if text becomes hard to read against the photo.
$overlay = [
  'hero'         => 0.72,
  'services'     => 0.88,
  'process'      => 0.92,
  'testimonials' => 0.88,
  'contact'      => 0.85,
];

/**
 * Returns inline CSS for a section background.
 * If $path is empty, returns the plain solid colour.
 * If $path is set, adds the image behind a semi-transparent colour overlay.
 */
function hp_section_style( $path, $bg_color, $overlay_opacity, $position = 'center' ) {
  $base = "background:{$bg_color};";
  if ( empty( $path ) ) return $base;
  return "position:relative; background:{$bg_color};"; // overlay handled by child div
}

/**
 * Outputs the overlay div that sits between the bg image and the content.
 * Call this immediately after opening the <section> tag when a bg image is set.
 */
function hp_bg_overlay( $path, $bg_color, $overlay_opacity, $position = 'center' ) {
  if ( empty( $path ) ) return;
  echo "<div style=\"position:absolute; inset:0; z-index:0;
    background-image:url('{$path}');
    background-size:cover; background-position:{$position}; background-attachment:scroll;
    background-color:{$bg_color};\"></div>";
  echo "<div style=\"position:absolute; inset:0; z-index:1; background:{$bg_color}; opacity:{$overlay_opacity};\"></div>";
}
?>

<style>
@keyframes hpTicker {
  from { transform: translateX(0); }
  to   { transform: translateX(-33.333%); }
}
@keyframes hpBounce {
  0%, 100% { transform: translateX(-50%) translateY(0); }
  50%       { transform: translateX(-50%) translateY(7px); }
}
.hp-service-card { transition: box-shadow 0.3s ease; }
.hp-card-gold-border { opacity: 0; transition: opacity 0.3s; }
.hp-service-card:hover .hp-card-gold-border { opacity: 1; }
.hp-explore-link { opacity: 0; transform: translateY(8px); transition: opacity 0.3s, transform 0.3s; }
.hp-service-card:hover .hp-explore-link { opacity: 1; transform: translateY(0); }
.hp-service-card img { transition: transform 0.4s ease, filter 0.3s ease; }
.hp-service-card:hover img { transform: scale(1.05); filter: brightness(0.82); }
.hp-pillar { transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease; }
.hp-pillar:hover { transform: translateY(-5px); box-shadow: 0 16px 40px rgba(11,31,51,0.12); border-color: rgba(201,168,76,0.4) !important; }
.hp-area-card { transition: transform 0.25s ease, border-color 0.25s ease, box-shadow 0.25s ease; }
.hp-area-card:hover { transform: translateY(-4px); border-color: rgba(201,168,76,0.4) !important; box-shadow: 0 12px 32px rgba(11,31,51,0.2); }
.hp-testimonial-card { transition: border-color 0.3s, background 0.3s; }
.hp-testimonial-card:hover { border-color: rgba(201,168,76,0.35) !important; background: rgba(201,168,76,0.04) !important; }
.hp-fade-up { opacity: 0; transform: translateY(24px); transition: opacity 0.6s ease, transform 0.6s ease; }
.hp-fade-up.visible { opacity: 1; transform: translateY(0); }
input::placeholder, textarea::placeholder { color: rgba(255,255,255,0.28) !important; }
input:focus, textarea:focus, select:focus { outline: none; border-color: #C9A84C !important; }

@media (max-width: 1024px) {
  .hp-services-grid    { grid-template-columns: repeat(2,1fr) !important; }
  .hp-pillars-grid     { grid-template-columns: repeat(2,1fr) !important; }
  .hp-steps-grid       { grid-template-columns: repeat(2,1fr) !important; }
  .hp-areas-grid       { grid-template-columns: repeat(3,1fr) !important; }
  .hp-cta-grid         { grid-template-columns: 1fr !important; gap: 48px !important; }
  .hp-who-grid         { grid-template-columns: 1fr !important; gap: 40px !important; }
}
@media (max-width: 768px) {
  .hp-services-grid    { grid-template-columns: 1fr !important; }
  .hp-pillars-grid     { grid-template-columns: 1fr !important; }
  .hp-steps-grid       { grid-template-columns: 1fr !important; }
  .hp-ba-grid          { grid-template-columns: 1fr !important; }
  .hp-testimonials-grid { grid-template-columns: 1fr !important; }
  .hp-areas-grid       { grid-template-columns: repeat(2,1fr) !important; }
}
@media (max-width: 480px) {
  .hp-areas-grid       { grid-template-columns: 1fr !important; }
}
</style>

<!-- ═══ BLOCK 1 — HERO ═══════════════════════════════════════════════════════ -->
<section style="position:relative; min-height:100vh; display:flex; align-items:center; <?php if(!empty($bg['hero'])): ?>background-image:url('<?php echo esc_url($bg['hero']); ?>'); background-size:cover; background-position:center; background-attachment:fixed;<?php else: ?>background:#0d1b2a;<?php endif; ?>">

  <!-- Overlay -->
  <div style="position:absolute; inset:0; background:linear-gradient(135deg, rgba(13,27,42,<?php echo $overlay['hero']; ?>) 0%, rgba(13,27,42,<?php echo round($overlay['hero'] * 0.73, 2); ?>) 60%, rgba(13,27,42,<?php echo round($overlay['hero'] * 0.55, 2); ?>) 100%); z-index:1;"></div>

  <!-- Two-column grid: headline left · form right -->
  <div style="position:relative; z-index:2; width:100%; max-width:1280px; margin:0 auto; padding:100px 24px 80px; display:grid; grid-template-columns:1fr 1fr; gap:64px; align-items:center;" class="hp-hero-grid">

    <!-- ── Left: headline + sub + CTAs + trust ── -->
    <div>
      <div style="display:inline-flex; align-items:center; gap:12px; margin-bottom:24px;">
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
        <span style="font-family:'Amino',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">Maryland's Trusted Remodeling Team</span>
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
      </div>

      <h1 style="font-family:'AkzidenzGrotesk',sans-serif; font-size:clamp(2rem,4.5vw,4rem); font-weight:900; color:#fff; line-height:1.08; letter-spacing:-0.02em; margin-bottom:22px;">
        When We Transform Your Home,<br><span style="color:#C9A84C;">the Stress Disappears.</span>
      </h1>

      <p style="font-family:'Amino',sans-serif; font-size:clamp(0.95rem,1.8vw,1.1rem); color:rgba(255,255,255,0.75); line-height:1.78; max-width:500px; margin-bottom:36px;">
        Maryland homeowners trust Tikal Empire for kitchen remodeling, bathroom renovations, and flooring installation that delivers exactly what was promised — on time, on budget, and built to last.
      </p>

      <!-- CTAs -->
      <div style="display:flex; gap:14px; flex-wrap:wrap; margin-bottom:40px;">
        <a href="/our-work" style="display:inline-flex; align-items:center; justify-content:center; background:transparent; color:#fff; font-family:'Amino',sans-serif; font-size:11px; font-weight:700; letter-spacing:0.12em; text-transform:uppercase; text-decoration:none; padding:0 28px; height:52px; border-radius:4px; border:2px solid rgba(255,255,255,0.45); transition:border-color 0.2s, color 0.2s;" onmouseover="this.style.borderColor='#C9A84C'; this.style.color='#C9A84C';" onmouseout="this.style.borderColor='rgba(255,255,255,0.45)'; this.style.color='#fff';">
          See Our Work
        </a>
        <a href="/about-us" style="display:inline-flex; align-items:center; gap:8px; font-family:'Amino',sans-serif; font-size:11px; font-weight:600; letter-spacing:0.1em; text-transform:uppercase; color:rgba(255,255,255,0.55); text-decoration:none; padding:0 12px; height:52px; transition:color 0.2s;" onmouseover="this.style.color='#C9A84C';" onmouseout="this.style.color='rgba(255,255,255,0.55)';">
          Learn Our Story
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
      </div>

      <!-- Trust badges -->
      <div style="display:flex; gap:20px; flex-wrap:wrap; padding-top:28px; border-top:1px solid rgba(255,255,255,0.1);">
        <?php foreach([
          ['icon'=>'M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-1 14l-3-3 1.41-1.41L11 12.17l4.59-4.58L17 9l-6 6z', 'text'=>'MHIC #154361'],
          ['icon'=>'M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z', 'text'=>'(301) 300-4172'],
          ['icon'=>'M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z', 'text'=>'Serving Maryland · 50 Miles'],
          ['icon'=>'M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z', 'text'=>'★★★★★ Google Reviews'],
        ] as $b): ?>
          <span style="display:flex; align-items:center; gap:7px; font-family:'Amino',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.1em; text-transform:uppercase; color:rgba(255,255,255,0.4);">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="#C9A84C"><path d="<?php echo $b['icon']; ?>"/></svg>
            <?php echo $b['text']; ?>
          </span>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ── Right: ContactForm in compact mode ── -->
    <?php
    $hero_form_config = json_encode([
      'mode'         => 'compact',
      'headline'     => '',
      'headlineGold' => '',
    ]);
    ?>
    <div>
      <div id="hero-form-root" data-cf-config='<?php echo esc_attr($hero_form_config); ?>'></div>
    </div>

  </div>

  <!-- Scroll indicator -->
  <!-- <div style="position:absolute; bottom:28px; left:50%; transform:translateX(-50%); z-index:2; display:flex; flex-direction:column; align-items:center; gap:6px; animation:hpBounce 2.2s ease-in-out infinite;">
    <span style="font-family:'Montserrat',sans-serif; font-size:9px; font-weight:600; letter-spacing:0.22em; text-transform:uppercase; color:rgba(255,255,255,0.3);">Scroll</span>
    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="rgba(201,168,76,0.5)" stroke-width="2" stroke-linecap="round"><path d="M12 5v14M5 12l7 7 7-7"/></svg>
  </div> -->

</section>

<!-- Hero responsive: stack on mobile/tablet -->
<style>
  @media (max-width: 960px) {
    .hp-hero-grid { grid-template-columns: 1fr !important; gap: 40px !important; }
  }
</style>

<!-- ─── TRUST BAR ─────────────────────────────────────────────────────────── -->
<div style="background:#060d18; border-bottom:1px solid rgba(201,168,76,0.1);">
  <div style="max-width:1280px; margin:0 auto; padding:18px 24px; display:flex; align-items:center; justify-content:center; gap:28px; flex-wrap:wrap;">
    <?php
    $trust_items = [
      ['path'=>'M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-1 14l-3-3 1.41-1.41L11 12.17l4.59-4.58L17 9l-6 6z','text'=>'MHIC #154361'],
      ['path'=>'M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-1 14l-3-3 1.41-1.41L11 12.17l4.59-4.58L17 9l-6 6z','text'=>'Licensed &amp; Insured'],
      ['path'=>'M16 11c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 3-1.34 3-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z','text'=>'5 Specialist Team'],
      ['path'=>'M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z','text'=>'12–16 Projects / Month'],
      ['path'=>'M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z','text'=>'Serving Maryland — 50 Mile Radius'],
    ];
    foreach ($trust_items as $idx => $item) : ?>
      <?php if ($idx > 0) : ?><span style="color:rgba(201,168,76,0.25); font-size:18px;">·</span><?php endif; ?>
      <div style="display:flex; align-items:center; gap:8px; white-space:nowrap;">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="#C9A84C"><path d="<?php echo $item['path']; ?>"/></svg>
        <span style="font-family:'Amino',sans-serif; font-size:11px; font-weight:600; letter-spacing:0.07em; color:rgba(255,255,255,0.68);"><?php echo $item['text']; ?></span>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<!-- ═══ BLOCK 2 — TICKER ═════════════════════════════════════════════════════ -->
<div style="background:#0d1b2a; overflow:hidden; padding:9px 0; border-bottom:1px solid rgba(201,168,76,0.1);">
  <div style="display:flex; animation:hpTicker 48s linear infinite;">
    <?php
    $t = 'Your home, transformed with certainty.   ·   MHIC Licensed #154361   ·   Kitchen Remodeling   ·   Bathroom Remodeling   ·   Flooring Installation   ·   Howard County   ·   Montgomery County   ·   Frederick County   ·   Schedule Discipline   ·   Craftsmanship You Can See   ·   Licensed &amp; Insured   ·   ';
    for ($i=0;$i<3;$i++): ?>
      <span style="font-family:'Amino',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.2em; text-transform:uppercase; color:#C9A84C; padding-right:6rem; flex-shrink:0; white-space:nowrap;"><?php echo $t; ?></span>
    <?php endfor; ?>
  </div>
</div>

<!-- ═══ BLOCK 3 — WHO WE ARE ════════════════════════════════════════════════ -->
<section style="background:#d1d5db; padding:96px 0;">
  <div style="max-width:1280px; margin:0 auto; padding:0 24px; display:grid; grid-template-columns:3fr 2fr; gap:80px; align-items:center;" class="hp-who-grid">
    <div class="hp-fade-up">
      <div style="display:flex; align-items:center; gap:12px; margin-bottom:20px;">
        <div style="width:36px; height:2px; background:#C9A84C;"></div>
        <span style="font-family:'Amino',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">Who We Are</span>
      </div>
      <h2 style="font-family:'AkzidenzGrotesk',sans-serif; font-size:clamp(2rem,4vw,3.2rem); font-weight:900; color:#0d1b2a; line-height:1.1; margin-bottom:28px;">
        One Team.<br>Every Detail.<br>Zero Surprises.
      </h2>
      <div style="display:flex; flex-direction:column; gap:18px; font-family:'Amino',sans-serif; font-size:16px; color:#2f2f2f; line-height:1.8;">
        <p style="margin:0;">Tikal Empire LLC is a licensed home improvement contractor <strong style="color:#0d1b2a;">(MHIC #154361)</strong> serving Maryland homeowners across Howard, Montgomery, Frederick, Prince George's, and Anne Arundel counties.</p>
        <p style="margin:0;">We specialize in kitchen remodeling, bathroom renovations, and flooring installation — and we exist to do one thing: <em>transform your home with the certainty you deserve.</em></p>
        <p style="margin:0;">That means showing up when we say. Finishing when we promise. Treating your home with the same respect we'd want for our own. And delivering results that make you say — yes, that's exactly what I imagined.</p>
      </div>
      <a href="/about-us" style="display:inline-flex; align-items:center; gap:8px; margin-top:36px; font-family:'Amino',sans-serif; font-size:12px; font-weight:700; letter-spacing:0.1em; text-transform:uppercase; color:#C9A84C; text-decoration:none; border-bottom:2px solid rgba(201,168,76,0.35); padding-bottom:4px; transition:border-color 0.2s;" onmouseover="this.style.borderColor='#C9A84C'" onmouseout="this.style.borderColor='rgba(201,168,76,0.35)'">
        Learn Our Story <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>
    <div style="display:flex; flex-direction:column; gap:16px;" class="hp-fade-up">
      <div style="border-radius:8px; overflow:hidden; aspect-ratio:4/3; position:relative; background:linear-gradient(135deg,#0d1b2a,#415a77);">
        <img src="/wp-content/uploads/2026/05/Site-scaled.jpeg" alt="Tikal Empire team on a clean, organized jobsite" style="width:100%; height:100%; object-fit:cover; display:block;" onerror="this.style.display='none'"/>
        <div style="position:absolute; bottom:0; left:0; right:0; padding:14px 16px; background:linear-gradient(transparent,rgba(11,31,51,0.85));"><span style="font-family:'Amino',sans-serif; font-size:10px; font-weight:600; letter-spacing:0.12em; text-transform:uppercase; color:rgba(255,255,255,0.65);">Our Team</span></div>
      </div>
      <div style="border-radius:8px; overflow:hidden; aspect-ratio:4/3; position:relative; background:linear-gradient(135deg,#162338,#0d1b2a);">
        <img src="/wp-content/uploads/2026/05/08-scaled.png" alt="Precision kitchen detail — cabinet hardware and countertop edge" style="width:100%; height:100%; object-fit:cover; display:block;" onerror="this.style.display='none'"/>
        <div style="position:absolute; bottom:0; left:0; right:0; padding:14px 16px; background:linear-gradient(transparent,rgba(11,31,51,0.85));"><span style="font-family:'Amino',sans-serif; font-size:10px; font-weight:600; letter-spacing:0.12em; text-transform:uppercase; color:rgba(255,255,255,0.65);">Craftsmanship Detail</span></div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ BLOCK 4 — SERVICES ═══════════════════════════════════════════════════ -->
<section style="<?php echo hp_section_style($bg['services'], '#0d1b2a', $overlay['services']); ?> padding:96px 0;">
  <?php hp_bg_overlay($bg['services'], '#0d1b2a', $overlay['services']); ?>
  <div style="position:relative; z-index:2; max-width:1280px; margin:0 auto; padding:0 24px;">
    <div style="text-align:center; margin-bottom:64px;" class="hp-fade-up">
      <div style="display:inline-flex; align-items:center; gap:12px; margin-bottom:16px;">
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
        <span style="font-family:'Amino',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">What We Do</span>
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
      </div>
      <h2 style="font-family:'AkzidenzGrotesk',sans-serif; font-size:clamp(1.8rem,4vw,2.8rem); font-weight:900; color:#fff; line-height:1.2; max-width:620px; margin:0 auto;">
        Everything Your Home Needs.<br><span style="color:#C9A84C;">One Team</span> You Can Trust.
      </h2>
    </div>
    <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:24px;" class="hp-services-grid">
      <?php
      $services = [
        ['title'=>'Kitchen Remodeling','desc'=>'Full kitchen transformations — layout, cabinets, countertops, tile, electrical & plumbing coordination.','price'=>'Starting at $80,000','cta'=>'Explore Kitchen Remodeling','href'=>'/kitchen-remodeling','img'=>'/wp-content/uploads/2026/04/KitchenRemodelingHero-scaled.jpg','alt'=>'Completed kitchen remodel'],
        ['title'=>'Bathroom Remodeling','desc'=>'Complete bathroom renovations — tile, shower conversions, vanities, fixtures, and modern upgrades built to last.','price'=>'Starting at $18,000','cta'=>'Explore Bathroom Remodeling','href'=>'/bathroom-remodeling','img'=>'/wp-content/uploads/2026/04/BathroomRemodelingHero-scaled.jpg','alt'=>'Completed bathroom renovation'],
        ['title'=>'Flooring Installation','desc'=>'Hardwood, LVP, vinyl, ceramic, carpet, and laminate — installed with precision for a flawless, lasting finish.','price'=>null,'cta'=>'Request an Estimate','href'=>'/flooring-installation','img'=>'/wp-content/uploads/2026/04/FlooringInstallationHero-scaled.jpg','alt'=>'LVP flooring installation'],
      ];
      foreach ($services as $s) : ?>
        <div class="hp-service-card" style="position:relative; border-radius:8px; overflow:hidden; background:#060d18; border:1px solid rgba(255,255,255,0.07);">
          <div class="hp-card-gold-border" style="position:absolute; inset:0; border:2px solid #C9A84C; border-radius:8px; z-index:3; pointer-events:none;"></div>
          <div style="height:240px; overflow:hidden; position:relative;">
            <img src="<?php echo $s['img']; ?>" alt="<?php echo esc_attr($s['alt']); ?>" style="width:100%; height:100%; object-fit:cover; display:block;" onerror="this.parentElement.style.background='linear-gradient(135deg,#0d1b2a,#415a77)'; this.style.display='none';"/>
            <div style="position:absolute; inset:0; background:linear-gradient(transparent 40%,rgba(7,24,40,0.92) 100%);"></div>
          </div>
          <div style="padding:28px 24px 28px;">
            <h3 style="font-family:'AkzidenzGrotesk',sans-serif; font-size:1.3rem; font-weight:700; color:#fff; margin-bottom:10px;"><?php echo $s['title']; ?></h3>
            <p style="font-family:'Amino',sans-serif; font-size:14px; color:rgba(255,255,255,0.55); line-height:1.7; margin-bottom:14px;"><?php echo $s['desc']; ?></p>
            <?php if ($s['price']) : ?>
              <p style="font-family:'Amino',sans-serif; font-size:12px; font-weight:700; letter-spacing:0.06em; color:#C9A84C; margin-bottom:20px;"><?php echo $s['price']; ?></p>
            <?php else: ?><div style="margin-bottom:20px;"></div><?php endif; ?>
            <a href="<?php echo $s['href']; ?>" class="hp-explore-link" style="display:inline-flex; align-items:center; gap:8px; font-family:'Amino',sans-serif; font-size:11px; font-weight:700; letter-spacing:0.1em; text-transform:uppercase; color:#C9A84C; text-decoration:none;">
              <?php echo $s['cta']; ?> <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ BLOCK 5 — WHY TIKAL EMPIRE ════════════════════════════════════════ -->
<section style="background:#d1d5db; padding:96px 0;">
  <div style="max-width:1280px; margin:0 auto; padding:0 24px;">
    <div style="text-align:center; margin-bottom:64px;" class="hp-fade-up">
      <div style="display:inline-flex; align-items:center; gap:12px; margin-bottom:16px;">
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
        <span style="font-family:'Amino',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">Why Homeowners Choose Us</span>
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
      </div>
      <h2 style="font-family:'AkzidenzGrotesk',sans-serif; font-size:clamp(1.8rem,4vw,2.8rem); font-weight:900; color:#0d1b2a; line-height:1.2; max-width:720px; margin:0 auto;">
        In an Industry Full of Broken Promises,<br>We Deliver <span style="color:#C9A84C;">Certainty.</span>
      </h2>
    </div>
    <div style="display:grid; grid-template-columns:repeat(4,1fr); gap:20px;" class="hp-pillars-grid">
      <?php
      $pillars = [
        ['d'=>'M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-1 14l-3-3 1.41-1.41L11 12.17l4.59-4.58L17 9l-6 6z','title'=>'Clean Site Protocol','body'=>'We protect every surface before we start — floors, furniture, fixtures. When we leave each day, your home is cleaner than when we arrived.'],
        ['d'=>'M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z','title'=>'Schedule Discipline','body'=>'We arrive when we say. We finish when we promise. Every project has a defined timeline — and we hold to it without excuses.'],
        ['d'=>'M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z','title'=>'Craftsmanship You Can See','body'=>'We use locally sourced premium cabinets and high-quality materials built for longevity — not the imported, low-durability products found with budget contractors.'],
        ['d'=>'M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11zm-5-8H9v2h4v-2zm2-4H9v2h6V8z','title'=>'MHIC Licensed & Insured','body'=>'License #154361. General Liability Insurance active. This eliminates over 60% of informal competitors. Your home and investment are fully protected.'],
      ];
      foreach ($pillars as $p) : ?>
        <div class="hp-pillar" style="background:#fff; border-radius:8px; padding:32px 24px; border:1px solid rgba(11,31,51,0.08);">
          <div style="width:52px; height:52px; border-radius:10px; background:rgba(201,168,76,0.1); display:flex; align-items:center; justify-content:center; margin-bottom:20px; flex-shrink:0;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="#C9A84C"><path d="<?php echo $p['d']; ?>"/></svg>
          </div>
          <h3 style="font-family:'Amino',sans-serif; font-size:12px; font-weight:800; letter-spacing:0.07em; text-transform:uppercase; color:#0d1b2a; margin-bottom:12px;"><?php echo $p['title']; ?></h3>
          <p style="font-family:'Amino',sans-serif; font-size:14px; color:#2f2f2f; line-height:1.75; margin:0; opacity:0.78;"><?php echo $p['body']; ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ BLOCK 6 — PROCESS ════════════════════════════════════════════════════ -->
<section style="<?php echo hp_section_style($bg['process'], '#ffffff', $overlay['process']); ?> padding:96px 0;">
  <?php hp_bg_overlay($bg['process'], '#FFFFFF', $overlay['process']); ?>
  <div style="position:relative; z-index:2; max-width:1280px; margin:0 auto; padding:0 24px;">
    <div style="text-align:center; margin-bottom:72px;" class="hp-fade-up">
      <div style="display:inline-flex; align-items:center; gap:12px; margin-bottom:16px;">
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
        <span style="font-family:'Amino',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">How We Work</span>
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
      </div>
      <h2 style="font-family:'AkzidenzGrotesk',sans-serif; font-size:clamp(1.8rem,4vw,2.8rem); font-weight:900; color:#0d1b2a; line-height:1.2; max-width:620px; margin:0 auto;">
        A Clear Process.<br>No Guesswork. No Surprises.
      </h2>
    </div>
    <div style="display:grid; grid-template-columns:repeat(4,1fr); gap:8px; position:relative;" class="hp-steps-grid">
      <div style="position:absolute; top:44px; left:12.5%; right:12.5%; height:1px; background:linear-gradient(90deg,#C9A84C44,#415a7744,#C9A84C44); z-index:0;" class="hidden lg:block"></div>
      <?php
      $steps = [
        ['n'=>'01','title'=>'Free In-Home Consultation','body'=>'We visit your property, listen to your goals, and honestly assess the scope. No pressure. No obligation. Just a clear conversation about what your home needs and what it will cost.'],
        ['n'=>'02','title'=>'Detailed Written Estimate','body'=>'You receive a clear, written proposal with defined scope, timeline, and pricing. No vague numbers. No hidden costs. You know exactly what you\'re getting before we touch a surface.'],
        ['n'=>'03','title'=>'Expert Execution','body'=>'Our team arrives on schedule, protects your home, and delivers premium craftsmanship — with daily cleanup and progress updates so you always know what\'s happening.'],
        ['n'=>'04','title'=>'Final Walk-Through & Approval','body'=>'We don\'t consider a project complete until you do. Every job ends with a full walk-through, your complete approval, and the confidence that you made the right call.'],
      ];
      foreach ($steps as $i => $step) : ?>
        <div class="hp-fade-up" style="padding:0 20px; text-align:center; position:relative; z-index:1;" data-delay="<?php echo $i*120; ?>">
          <div style="width:88px; height:88px; border-radius:50%; background:linear-gradient(135deg,#0d1b2a,#060d18); border:2px solid rgba(201,168,76,0.3); display:flex; align-items:center; justify-content:center; margin:0 auto 28px; box-shadow:0 8px 24px rgba(11,31,51,0.14);">
            <span style="font-family:'AkzidenzGrotesk',sans-serif; font-size:1.7rem; font-weight:900; color:#C9A84C;"><?php echo $step['n']; ?></span>
          </div>
          <h3 style="font-family:'Amino',sans-serif; font-size:12px; font-weight:800; letter-spacing:0.07em; text-transform:uppercase; color:#0d1b2a; margin-bottom:14px;"><?php echo $step['title']; ?></h3>
          <p style="font-family:'Amino',sans-serif; font-size:14px; color:#2f2f2f; line-height:1.75; opacity:0.72; margin:0;"><?php echo $step['body']; ?></p>
        </div>
      <?php endforeach; ?>
    </div>
    <div style="text-align:center; margin-top:56px;">
      <a href="/contact" style="display:inline-flex; align-items:center; gap:10px; background:#C9A84C; color:#0d1b2a; font-family:'Amino',sans-serif; font-size:12px; font-weight:800; letter-spacing:0.12em; text-transform:uppercase; text-decoration:none; padding:0 40px; height:52px; border-radius:4px; box-shadow:0 4px 20px rgba(201,168,76,0.28); transition:background 0.2s,transform 0.15s;" onmouseover="this.style.background='#DFB95A';this.style.transform='translateY(-1px)';" onmouseout="this.style.background='#C9A84C';this.style.transform='none';">
        Start With a Free Consultation <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>
  </div>
</section>

<!-- ═══ BLOCK 7 — BEFORE / AFTER GALLERY ════════════════════════════════════ -->
<section style="background:#FDF8EC; padding:96px 0;">
  <div style="max-width:1280px; margin:0 auto; padding:0 24px;">
    <div style="text-align:center; margin-bottom:56px;" class="hp-fade-up">
      <div style="display:inline-flex; align-items:center; gap:12px; margin-bottom:16px;">
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
        <span style="font-family:'Amino',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">Real Projects. Real Results.</span>
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
      </div>
      <h2 style="font-family:'AkzidenzGrotesk',sans-serif; font-size:clamp(1.8rem,4vw,2.8rem); font-weight:900; color:#0d1b2a; line-height:1.2;">See the Transformation.</h2>
      <p style="font-family:'Amino',sans-serif; font-size:15px; color:#2f2f2f; opacity:0.55; margin-top:12px;">Drag the slider left or right to reveal each transformation.</p>
    </div>
    <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:24px;" class="hp-ba-grid">
      <?php
      $projects = [
        ['label'=>'Kitchen Remodel','location'=>'Ellicott City, MD','before'=>'/wp-content/uploads/2026/05/renovation-vision-unfinished-to-finished-kitchen-2026-03-17-01-40-30-utc-1-scaled-e1777648349374.jpg','after'=>'/wp-content/uploads/2026/05/renovation-vision-unfinished-to-finished-kitchen-2026-03-17-01-40-30-utc-scaled-e1777648289861.jpg'],
        ['label'=>'Bathroom Renovation','location'=>'Rockville, MD','before'=>'/wp-content/uploads/2026/05/renovation-vision-unfinished-to-finished-kitchen-2026-03-17-01-40-30-utc-1-scaled-e1777648349374.jpg','after'=>'/wp-content/uploads/2026/05/renovation-vision-unfinished-to-finished-kitchen-2026-03-17-01-40-30-utc-scaled-e1777648289861.jpg'],
        ['label'=>'Flooring Installation','location'=>'Columbia, MD','before'=>'/wp-content/uploads/2026/05/renovation-vision-unfinished-to-finished-kitchen-2026-03-17-01-40-30-utc-1-scaled-e1777648349374.jpg','after'=>'/wp-content/uploads/2026/05/renovation-vision-unfinished-to-finished-kitchen-2026-03-17-01-40-30-utc-scaled-e1777648289861.jpg'],
      ];
      foreach ($projects as $idx => $proj) : ?>
        <div>
          <div class="ba-container" data-idx="<?php echo $idx; ?>" style="position:relative; width:100%; padding-top:66.666%; border-radius:8px; overflow:hidden; cursor:ew-resize; user-select:none; box-shadow:0 8px 32px rgba(11,31,51,0.15);">
            <img src="<?php echo $proj['before']; ?>" alt="Before — <?php echo esc_attr($proj['label']); ?>" style="position:absolute; inset:0; width:100%; height:100%; object-fit:cover;" onerror="this.onerror=null; this.style.display='none'; this.parentElement.style.background='#415a77';" />
            <span style="position:absolute; top:12px; left:12px; z-index:5; font-family:'Amino',sans-serif; font-size:9px; font-weight:700; letter-spacing:0.15em; text-transform:uppercase; background:rgba(11,31,51,0.82); color:rgba(255,255,255,0.8); padding:4px 10px; border-radius:3px;">Before</span>
            <div class="ba-clip" style="position:absolute; inset:0; width:50%; overflow:hidden;">
              <img src="<?php echo $proj['after']; ?>" class="ba-after-img" alt="After — <?php echo esc_attr($proj['label']); ?>" style="position:absolute; top:0; left:0; height:100%; object-fit:cover;" onerror="this.onerror=null; this.style.display='none'; this.parentElement.style.background='#415a77';" />
            </div>
            <span style="position:absolute; top:12px; right:12px; z-index:5; font-family:'Amino',sans-serif; font-size:9px; font-weight:700; letter-spacing:0.15em; text-transform:uppercase; background:rgba(201,168,76,0.92); color:#0d1b2a; padding:4px 10px; border-radius:3px;">After</span>
            <div class="ba-handle" style="position:absolute; top:0; left:50%; width:3px; height:100%; background:#C9A84C; transform:translateX(-50%); z-index:10; pointer-events:none;">
              <div style="position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); width:44px; height:44px; border-radius:50%; background:#C9A84C; border:3px solid #fff; box-shadow:0 4px 16px rgba(0,0,0,0.3); display:flex; align-items:center; justify-content:center;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#0d1b2a" stroke-width="2.5" stroke-linecap="round"><path d="M8 4l-6 8 6 8M16 4l6 8-6 8"/></svg>
              </div>
            </div>
          </div>
          <div style="margin-top:14px; display:flex; align-items:center; justify-content:space-between; padding:0 4px;">
            <div>
              <p style="font-family:'Amino',sans-serif; font-size:13px; font-weight:700; color:#0d1b2a; margin:0;"><?php echo $proj['label']; ?></p>
              <p style="font-family:'Amino',sans-serif; font-size:12px; color:#415a77; margin:3px 0 0;"><?php echo $proj['location']; ?></p>
            </div>
            <a href="/our-work" style="font-family:'Amino',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.1em; text-transform:uppercase; color:#C9A84C; text-decoration:none;">View →</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div style="text-align:center; margin-top:52px;">
      <a href="/our-work" style="display:inline-flex; align-items:center; gap:8px; font-family:'Amino',sans-serif; font-size:12px; font-weight:700; letter-spacing:0.1em; text-transform:uppercase; color:#0d1b2a; text-decoration:none; border-bottom:2px solid #C9A84C; padding-bottom:4px; transition:color 0.2s;" onmouseover="this.style.color='#C9A84C'" onmouseout="this.style.color='#0d1b2a'">
        View Our Full Portfolio <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>
  </div>
</section>

<!-- ═══ BLOCK 8 — TESTIMONIALS ══════════════════════════════════════════════ -->
<section style="<?php echo hp_section_style($bg['testimonials'], '#0d1b2a', $overlay['testimonials']); ?> padding:96px 0;">
  

  <?php echo do_shortcode('[trustindex no-registration=google]'); ?>
</section>

<!-- ═══ BLOCK 9 — SERVICE AREAS ════════════════════════════════════════════ -->
<section style="background:#d1d5db; padding:96px 0;">
  <div style="max-width:1280px; margin:0 auto; padding:0 24px;">
    <div style="text-align:center; margin-bottom:56px;" class="hp-fade-up">
      <div style="display:inline-flex; align-items:center; gap:12px; margin-bottom:16px;">
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
        <span style="font-family:'Amino',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">Service Areas</span>
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
      </div>
      <h2 style="font-family:'AkzidenzGrotesk',sans-serif; font-size:clamp(1.8rem,4vw,2.8rem); font-weight:900; color:#0d1b2a; line-height:1.2;">
        Serving Maryland's Most<br><span style="color:#C9A84C;">Valued Communities.</span>
      </h2>
    </div>
    <div style="display:grid; grid-template-columns:repeat(5,1fr); gap:16px;" class="hp-areas-grid">
      <?php
      $areas = [
        ['county'=>'Howard County','cities'=>['Columbia','Ellicott City','Laurel','Jessup']],
        ['county'=>'Montgomery County','cities'=>['Rockville','Gaithersburg','Potomac','Bethesda']],
        ['county'=>'Frederick County','cities'=>['Frederick','Germantown','Clarksburg','Damascus']],
        ['county'=>"Prince George's County",'cities'=>['Bowie','Greenbelt','Hyattsville','Largo']],
        ['county'=>'Anne Arundel County','cities'=>['Annapolis','Pasadena','Severn','Glen Burnie']],
      ];
      foreach ($areas as $area) : ?>
        <div class="hp-area-card" style="background:#0d1b2a; border-radius:8px; padding:28px 20px; border:1px solid rgba(201,168,76,0.12);">
          <div style="width:32px; height:32px; border-radius:6px; background:rgba(201,168,76,0.1); display:flex; align-items:center; justify-content:center; margin-bottom:14px;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="#C9A84C"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
          </div>
          <!-- H3 for SEO — per spec county names must render as H3 text -->
          <h3 style="font-family:'Amino',sans-serif; font-size:11px; font-weight:800; letter-spacing:0.09em; text-transform:uppercase; color:#C9A84C; margin-bottom:12px;"><?php echo $area['county']; ?></h3>
          <ul style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:7px;">
            <?php foreach ($area['cities'] as $city) : ?>
              <li style="font-family:'Amino',sans-serif; font-size:13px; color:rgba(255,255,255,0.5);"><?php echo $city; ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endforeach; ?>
    </div>
    <p style="text-align:center; margin-top:32px; font-family:'Amino',sans-serif; font-size:14px; color:#2f2f2f; opacity:0.55;">
      Don't see your area? <a href="/contact" style="color:#C9A84C; text-decoration:none; font-weight:600; border-bottom:1px solid rgba(201,168,76,0.35);">Contact us</a> — we serve a 50-mile radius and may still be able to help.
    </p>
  </div>
</section>

<!-- ═══ BLOCK 10 — CONTACT FORM (React Component) ══════════════════════════ -->
<section style="<?php echo hp_section_style($bg['contact'], '#0d1b2a', $overlay['contact']); ?> position:relative;">
  <?php hp_bg_overlay($bg['contact'], '#0d1b2a', $overlay['contact']); ?>
  <div style="position:relative; z-index:2;">
    <div id="contact-form-root"></div>
  </div>
</section>


<!-- ═══ JAVASCRIPT — Before/After Slider + Scroll Animations ═════════════════ -->
<script>
document.addEventListener('DOMContentLoaded', function () {

  // ── Before / After Sliders ─────────────────────────────────────────────
  document.querySelectorAll('.ba-container').forEach(function (c) {
    var clip   = c.querySelector('.ba-clip')
    var afterImg = c.querySelector('.ba-after-img')
    var handle = c.querySelector('.ba-handle')
    var drag   = false

    function setPos(clientX) {
      var r   = c.getBoundingClientRect()
      var pct = Math.min(100, Math.max(0, ((clientX - r.left) / r.width) * 100))
      clip.style.width       = pct + '%'
      handle.style.left      = pct + '%'
      afterImg.style.width   = r.width + 'px'
    }

    c.addEventListener('mousedown',  function (e) { drag = true; setPos(e.clientX); e.preventDefault(); })
    document.addEventListener('mouseup',    function ()  { drag = false; })
    document.addEventListener('mousemove',  function (e) { if (drag) setPos(e.clientX); })
    c.addEventListener('touchstart', function (e) { drag = true; setPos(e.touches[0].clientX); }, { passive: true })
    document.addEventListener('touchend',   function ()  { drag = false; })
    document.addEventListener('touchmove',  function (e) { if (drag) setPos(e.touches[0].clientX); }, { passive: true })

    // Init width
    var ro = new ResizeObserver(function () {
      afterImg.style.width = c.getBoundingClientRect().width + 'px'
    })
    ro.observe(c)
    afterImg.style.width = c.getBoundingClientRect().width + 'px'
  })

  // ── Scroll Animations ──────────────────────────────────────────────────
  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        var el    = entry.target
        var delay = parseInt(el.dataset.delay || 0)
        setTimeout(function () { el.classList.add('visible') }, delay)
        io.unobserve(el)
      }
    })
  }, { threshold: 0.12 })

  document.querySelectorAll('.hp-fade-up').forEach(function (el) { io.observe(el) })

  // ── Form feedback ──────────────────────────────────────────────────────
  var form   = document.getElementById('hp-estimate-form')
  var submit = document.getElementById('hp-submit')
  if (form && submit) {
    form.addEventListener('submit', function () {
      submit.textContent = 'Sending...'
      submit.disabled    = true
      submit.style.opacity = '0.65'
    })
  }

})
</script>

<?php get_footer(); ?>