<?php
/*
 * Template Name: Flooring Installation
 * Template Post Type: page
 */

get_header(); ?>

<style>
.fl-fade-up { opacity:0; transform:translateY(24px); transition:opacity 0.6s ease, transform 0.6s ease; }
.fl-fade-up.visible { opacity:1; transform:translateY(0); }

/* ── Material Tabs ─────────────────────────────────────────────────────────── */
.fl-tab-btn {
  font-family:'Montserrat',sans-serif; font-size:11px; font-weight:700;
  letter-spacing:0.1em; text-transform:uppercase; cursor:pointer;
  background:none; border:none; padding:14px 20px;
  color:rgba(255,255,255,0.45); white-space:nowrap;
  border-bottom:2px solid transparent;
  transition:color 0.2s, border-color 0.2s;
}
.fl-tab-btn:hover  { color:rgba(255,255,255,0.8); }
.fl-tab-btn.active { color:#C9A84C; border-bottom-color:#C9A84C; }

.fl-tab-panel { display:none; }
.fl-tab-panel.active { display:grid; }

/* ── Why callout items ─────────────────────────────────────────────────────── */
.fl-why-item { transition:background 0.22s, border-color 0.22s, transform 0.2s; }
.fl-why-item:hover { background:rgba(201,168,76,0.1) !important; border-color:rgba(201,168,76,0.35) !important; transform:translateX(4px); }

/* ── Gallery grid ──────────────────────────────────────────────────────────── */
.fl-gallery-item { overflow:hidden; border-radius:8px; position:relative; cursor:pointer; }
.fl-gallery-item img { width:100%; height:100%; object-fit:cover; display:block; transition:transform 0.4s ease, filter 0.3s ease; }
.fl-gallery-item:hover img { transform:scale(1.05); filter:brightness(0.82); }
.fl-gallery-caption { position:absolute; bottom:0; left:0; right:0; padding:14px 16px; background:linear-gradient(transparent,rgba(11,31,51,0.88)); transform:translateY(100%); transition:transform 0.3s ease; }
.fl-gallery-item:hover .fl-gallery-caption { transform:translateY(0); }

@media (max-width:1024px) {
  .fl-intro-grid  { grid-template-columns:1fr !important; }
  .fl-tab-panel   { grid-template-columns:1fr !important; }
  .fl-why-grid    { grid-template-columns:1fr !important; }
  .fl-gallery-grid{ grid-template-columns:repeat(2,1fr) !important; }
}
@media (max-width:768px) {
  .fl-tab-bar     { overflow-x:auto; -webkit-overflow-scrolling:touch; }
  .fl-tab-btn     { padding:12px 16px; font-size:10px; }
  .fl-cta-flex    { flex-direction:column !important; text-align:center !important; }
  .fl-gallery-grid{ grid-template-columns:1fr !important; }
}
</style>

<!-- ═══ HERO ══════════════════════════════════════════════════════════════════ -->
<section style="position:relative; min-height:90vh; display:flex; align-items:center; background-image:url('/wp-content/uploads/flooring-hero.jpg'); background-size:cover; background-position:center; background-attachment:fixed;">
  <div style="position:absolute; inset:0; background:linear-gradient(120deg, rgba(11,31,51,0.88) 0%, rgba(11,31,51,0.62) 55%, rgba(11,31,51,0.38) 100%);"></div>
  <div style="position:relative; z-index:2; max-width:1280px; margin:0 auto; padding:80px 24px 60px; width:100%;">
    <div style="max-width:760px;">
      <div style="display:inline-flex; align-items:center; gap:12px; margin-bottom:24px;">
        <div style="width:36px; height:2px; background:#C9A84C;"></div>
        <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">Flooring Installation · Maryland</span>
      </div>
      <h1 style="font-family:'Playfair Display',serif; font-size:clamp(2.2rem,6vw,4.4rem); font-weight:900; color:#fff; line-height:1.08; letter-spacing:-0.02em; margin-bottom:24px;">
        Floors That Set the Tone<br><span style="color:#C9A84C;">for Every Room.</span>
      </h1>
      <p style="font-family:'Inter',sans-serif; font-size:clamp(1rem,2vw,1.15rem); color:rgba(255,255,255,0.78); line-height:1.78; max-width:600px; margin-bottom:40px;">
        Professional flooring installation across Maryland — LVP, hardwood, vinyl, tile, carpet, and laminate. Precise. Clean. Built to last.
      </p>
      <div style="display:flex; gap:14px; flex-wrap:wrap; align-items:center;">
        <a href="/contact" style="display:inline-flex; align-items:center; gap:10px; background:#C9A84C; color:#0d1b2a; font-family:'Montserrat',sans-serif; font-size:12px; font-weight:800; letter-spacing:0.12em; text-transform:uppercase; text-decoration:none; padding:0 36px; height:54px; border-radius:4px; box-shadow:0 4px 24px rgba(201,168,76,0.38); transition:background 0.2s,transform 0.15s;" onmouseover="this.style.background='#DFB95A';this.style.transform='translateY(-2px)';" onmouseout="this.style.background='#C9A84C';this.style.transform='none';">
          Request a Free Estimate
        </a>
        <a href="tel:+13013004172" style="display:inline-flex; align-items:center; gap:8px; color:rgba(255,255,255,0.75); font-family:'Montserrat',sans-serif; font-size:12px; font-weight:600; letter-spacing:0.08em; text-decoration:none; transition:color 0.2s;" onmouseover="this.style.color='#C9A84C';" onmouseout="this.style.color='rgba(255,255,255,0.75)';">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
          (301) 300-4172
        </a>
      </div>
      <!-- Trust badges -->
      <div style="display:flex; gap:20px; flex-wrap:wrap; margin-top:40px; padding-top:32px; border-top:1px solid rgba(255,255,255,0.1);">
        <?php foreach(['MHIC #154361','Licensed & Insured','6 Material Types','Free Estimate'] as $b): ?>
          <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.12em; text-transform:uppercase; color:rgba(255,255,255,0.45); display:flex; align-items:center; gap:7px;">
            <span style="width:5px; height:5px; border-radius:50%; background:#C9A84C; flex-shrink:0;"></span><?php echo $b; ?>
          </span>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ═══ INTRO — Two column ════════════════════════════════════════════════════ -->
<section style="background:#d1d5db; padding:96px 0;">
  <div style="max-width:1280px; margin:0 auto; padding:0 24px; display:grid; grid-template-columns:3fr 2fr; gap:80px; align-items:center;" class="fl-intro-grid">
    <div class="fl-fade-up">
      <div style="display:flex; align-items:center; gap:12px; margin-bottom:20px;">
        <div style="width:36px; height:2px; background:#C9A84C;"></div>
        <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">Our Approach</span>
      </div>
      <h2 style="font-family:'Playfair Display',serif; font-size:clamp(1.8rem,3.5vw,2.8rem); font-weight:900; color:#0d1b2a; line-height:1.15; margin-bottom:28px;">
        Precision First.<br>Flawless Finish.
      </h2>
      <div style="display:flex; flex-direction:column; gap:18px; font-family:'Inter',sans-serif; font-size:16px; color:#2f2f2f; line-height:1.82;">
        <p style="margin:0;">The floor is the foundation of every room's design. It's the first thing you feel when you step inside — and the last detail that either elevates or undermines everything else.</p>
        <p style="margin:0;">At Tikal Empire, we treat every floor installation as a precision project. Proper subfloor preparation. Precise cuts and transitions. Materials matched to your lifestyle, your home, and your aesthetic vision.</p>
        <p style="margin:0;">And a finished result that looks flawless — <strong style="color:#0d1b2a;">the kind you notice every time you walk in.</strong></p>
      </div>
      <div style="display:flex; gap:32px; flex-wrap:wrap; margin-top:40px; padding-top:32px; border-top:1px solid rgba(11,31,51,0.1);">
        <?php foreach([['val'=>'6','lbl'=>'Material Types'],['val'=>'MHIC','lbl'=>'Licensed Team'],['val'=>'MD','lbl'=>'50-Mile Radius']] as $s): ?>
          <div>
            <p style="font-family:'Playfair Display',serif; font-size:1.8rem; font-weight:900; color:#C9A84C; margin:0; line-height:1;"><?php echo $s['val']; ?></p>
            <p style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:600; letter-spacing:0.12em; text-transform:uppercase; color:#2f2f2f; opacity:0.55; margin:5px 0 0;"><?php echo $s['lbl']; ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="fl-fade-up">
      <div style="border-radius:8px; overflow:hidden; aspect-ratio:3/4; background:linear-gradient(135deg,#0d1b2a,#415a77); position:relative;">
        <img src="/wp-content/uploads/flooring-install-process.jpg" alt="Flooring specialist precisely aligning planks during installation" style="width:100%; height:100%; object-fit:cover; display:block;" onerror="this.style.display='none'"/>
        <div style="position:absolute; bottom:0; left:0; right:0; padding:16px 18px; background:linear-gradient(transparent,rgba(11,31,51,0.88));">
          <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:600; letter-spacing:0.14em; text-transform:uppercase; color:rgba(255,255,255,0.6);">Installation in Progress</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ MATERIAL TABS ═════════════════════════════════════════════════════════ -->
<section style="background:#0d1b2a; padding:96px 0;">
  <div style="max-width:1280px; margin:0 auto; padding:0 24px;">
    <div style="text-align:center; margin-bottom:52px;" class="fl-fade-up">
      <div style="display:inline-flex; align-items:center; gap:12px; margin-bottom:16px;">
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
        <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">Materials We Install</span>
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
      </div>
      <h2 style="font-family:'Playfair Display',serif; font-size:clamp(1.8rem,3.5vw,2.6rem); font-weight:900; color:#fff; line-height:1.2;">
        Every Material.<br>One Standard of Excellence.
      </h2>
    </div>

    <!-- Tab bar — horizontal scroll on mobile -->
    <div class="fl-tab-bar" style="display:flex; border-bottom:1px solid rgba(255,255,255,0.1); margin-bottom:48px; gap:0;">
      <?php
      $tabs = ['LVP', 'Hardwood', 'Vinyl', 'Ceramic & Tile', 'Carpet', 'Laminate'];
      foreach ($tabs as $i => $tab): ?>
        <button class="fl-tab-btn<?php echo $i === 0 ? ' active' : ''; ?>" data-tab="<?php echo $i; ?>" onclick="flSetTab(<?php echo $i; ?>)">
          <?php echo $tab; ?>
        </button>
      <?php endforeach; ?>
    </div>

    <!-- Tab panels -->
    <?php
    $materials = [
      [
        'name'    => 'LVP (Luxury Vinyl Plank)',
        'tagline' => 'Luxury and functionality in every plank.',
        'body'    => 'LVP combines the authentic look of real wood or stone with the durability and practicality of vinyl — making it the ideal choice for kitchens, bathrooms, and high-traffic areas where beauty meets real-world demands.',
        'points'  => ['100% waterproof — ideal for moisture-prone areas','Scratch & dent resistant — built for active households','Authentic wood & stone visuals — indistinguishable from the real thing','Comfortable underfoot — softer than hardwood or tile','Easy long-term maintenance'],
        'img'     => '/wp-content/uploads/flooring-lvp-room.jpg',
        'detail1' => '/wp-content/uploads/flooring-lvp-detail1.jpg',
        'detail2' => '/wp-content/uploads/flooring-lvp-detail2.jpg',
        'best'    => 'Kitchens, bathrooms, basements, living areas, high-traffic zones',
      ],
      [
        'name'    => 'Hardwood',
        'tagline' => 'Timeless warmth and natural beauty.',
        'body'    => 'Hardwood floors add character, value, and sophistication to any space. Each plank is unique — and a properly installed hardwood floor is built to last generations, aging beautifully with your home.',
        'points'  => ['Adds significant resale value to your home','Each plank is uniquely grained — no two floors alike','Can be sanded and refinished multiple times','Improves with age — gains patina and character','Premium aesthetic that never goes out of style'],
        'img'     => '/wp-content/uploads/flooring-hardwood-room.jpg',
        'detail1' => '/wp-content/uploads/flooring-hardwood-detail1.jpg',
        'detail2' => '/wp-content/uploads/flooring-hardwood-detail2.jpg',
        'best'    => 'Living rooms, dining rooms, bedrooms, hallways, offices',
      ],
      [
        'name'    => 'Vinyl',
        'tagline' => 'Durable, stylish, and versatile.',
        'body'    => 'Vinyl flooring offers excellent resistance to moisture, heavy traffic, and daily wear — with a finish that maintains its appeal for years. A smart, practical choice for families who want style without compromise.',
        'points'  => ['Highly moisture resistant','Comfortable and quiet underfoot','Wide range of colors and patterns','Extremely low maintenance','Budget-conscious without sacrificing appearance'],
        'img'     => '/wp-content/uploads/flooring-vinyl-room.jpg',
        'detail1' => '/wp-content/uploads/flooring-vinyl-detail1.jpg',
        'detail2' => '/wp-content/uploads/flooring-vinyl-detail2.jpg',
        'best'    => 'Bathrooms, laundry rooms, kitchens, mudrooms, basements',
      ],
      [
        'name'    => 'Ceramic & Tile',
        'tagline' => 'Timeless style and lasting strength.',
        'body'    => 'Tile adds character, elegance, and structural integrity to any space. From large-format stone-look slabs to intricate mosaic patterns, our tile installations are precision work — perfectly grouted, perfectly level, built to last a lifetime.',
        'points'  => ['Virtually indestructible with proper installation','Completely waterproof — ideal for wet areas','Large-format, mosaic, and patterned options','Stays cool underfoot — ideal for warm climates','Timeless material that never needs replacing'],
        'img'     => '/wp-content/uploads/flooring-tile-room.jpg',
        'detail1' => '/wp-content/uploads/flooring-tile-detail1.jpg',
        'detail2' => '/wp-content/uploads/flooring-tile-detail2.jpg',
        'best'    => 'Kitchens, bathrooms, entryways, mudrooms, patios',
      ],
      [
        'name'    => 'Carpet',
        'tagline' => 'Warmth, comfort, and elegance underfoot.',
        'body'    => 'Premium carpet installation for bedrooms, living areas, and spaces where softness and warmth define the experience. We install with precision — tight seams, flush transitions, and a finish that feels as good as it looks.',
        'points'  => ['Superior noise reduction and insulation','Soft and comfortable — ideal for bedrooms','Wide selection of textures, colors, and pile heights','Warm and inviting atmosphere','Installed with precision seaming and clean borders'],
        'img'     => '/wp-content/uploads/flooring-carpet-room.jpg',
        'detail1' => '/wp-content/uploads/flooring-carpet-detail1.jpg',
        'detail2' => '/wp-content/uploads/flooring-carpet-detail2.jpg',
        'best'    => 'Bedrooms, living rooms, family rooms, bonus rooms, home offices',
      ],
      [
        'name'    => 'Laminate',
        'tagline' => 'Beauty and durability with easy maintenance.',
        'body'    => 'Laminate flooring delivers the authentic aesthetic of hardwood or stone with practical resilience — ideal for active households that want a premium look without premium maintenance demands.',
        'points'  => ['Highly scratch and dent resistant','Easy to clean — no special products needed','Realistic wood and stone visual options','More affordable than hardwood or solid stone','Stable in varying humidity conditions'],
        'img'     => '/wp-content/uploads/flooring-laminate-room.jpg',
        'detail1' => '/wp-content/uploads/flooring-laminate-detail1.jpg',
        'detail2' => '/wp-content/uploads/flooring-laminate-detail2.jpg',
        'best'    => 'Living rooms, hallways, playrooms, offices, rental properties',
      ],
    ];
    foreach ($materials as $i => $m): ?>
      <div class="fl-tab-panel<?php echo $i === 0 ? ' active' : ''; ?>" id="fl-panel-<?php echo $i; ?>"
           style="grid-template-columns:1fr 1fr; gap:48px; align-items:start;">
        <!-- Left: copy -->
        <div>
          <p style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.22em; text-transform:uppercase; color:#C9A84C; margin:0 0 12px;"><?php echo $m['name']; ?></p>
          <h3 style="font-family:'Playfair Display',serif; font-size:clamp(1.5rem,3vw,2.2rem); font-weight:900; color:#fff; line-height:1.2; margin-bottom:20px;"><?php echo $m['tagline']; ?></h3>
          <p style="font-family:'Inter',sans-serif; font-size:15px; color:rgba(255,255,255,0.65); line-height:1.8; margin-bottom:28px;"><?php echo $m['body']; ?></p>
          <ul style="list-style:none; padding:0; margin:0 0 28px; display:flex; flex-direction:column; gap:12px;">
            <?php foreach ($m['points'] as $pt): ?>
              <li style="display:flex; align-items:flex-start; gap:12px; font-family:'Inter',sans-serif; font-size:14px; color:rgba(255,255,255,0.7); line-height:1.55;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="#C9A84C" style="flex-shrink:0; margin-top:2px;"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                <?php echo $pt; ?>
              </li>
            <?php endforeach; ?>
          </ul>
          <div style="padding:14px 18px; border-radius:6px; background:rgba(255,255,255,0.04); border-left:3px solid #C9A84C;">
            <p style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.14em; text-transform:uppercase; color:#C9A84C; margin:0 0 5px;">Best For</p>
            <p style="font-family:'Inter',sans-serif; font-size:13px; color:rgba(255,255,255,0.55); margin:0; line-height:1.55;"><?php echo $m['best']; ?></p>
          </div>
          <a href="/contact" style="display:inline-flex; align-items:center; gap:10px; margin-top:28px; background:#C9A84C; color:#0d1b2a; font-family:'Montserrat',sans-serif; font-size:11px; font-weight:800; letter-spacing:0.12em; text-transform:uppercase; text-decoration:none; padding:0 28px; height:48px; border-radius:4px; transition:background 0.2s;" onmouseover="this.style.background='#DFB95A';" onmouseout="this.style.background='#C9A84C';">
            Get a <?php echo esc_attr($m['name']); ?> Estimate
          </a>
        </div>
        <!-- Right: photos -->
        <div style="display:flex; flex-direction:column; gap:14px;">
          <div style="border-radius:8px; overflow:hidden; aspect-ratio:4/3; background:#060d18;">
            <img src="<?php echo $m['img']; ?>" alt="<?php echo esc_attr($m['name']); ?> installed in Maryland home" style="width:100%; height:100%; object-fit:cover; display:block;" onerror="this.style.display='none'"/>
          </div>
          <div style="display:grid; grid-template-columns:1fr 1fr; gap:14px;">
            <div style="border-radius:8px; overflow:hidden; aspect-ratio:1; background:#060d18;">
              <img src="<?php echo $m['detail1']; ?>" alt="<?php echo esc_attr($m['name']); ?> detail — texture and finish" style="width:100%; height:100%; object-fit:cover; display:block;" onerror="this.style.display='none'"/>
            </div>
            <div style="border-radius:8px; overflow:hidden; aspect-ratio:1; background:#060d18;">
              <img src="<?php echo $m['detail2']; ?>" alt="<?php echo esc_attr($m['name']); ?> close-up — edge and transition" style="width:100%; height:100%; object-fit:cover; display:block;" onerror="this.style.display='none'"/>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- ═══ WHY OUR INSTALLATION ══════════════════════════════════════════════════ -->
<section style="background:#d1d5db; padding:96px 0;">
  <div style="max-width:1280px; margin:0 auto; padding:0 24px;">
    <div style="text-align:center; margin-bottom:56px;" class="fl-fade-up">
      <div style="display:inline-flex; align-items:center; gap:12px; margin-bottom:16px;">
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
        <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">Why Our Installation</span>
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
      </div>
      <h2 style="font-family:'Playfair Display',serif; font-size:clamp(1.8rem,3.5vw,2.6rem); font-weight:900; color:#0d1b2a; line-height:1.2; max-width:600px; margin:0 auto;">
        The Difference Isn't the Material.<br><span style="color:#C9A84C;">It's the Installation.</span>
      </h2>
    </div>
    <div style="display:grid; grid-template-columns:1fr 1fr; gap:16px; max-width:1000px; margin:0 auto;" class="fl-why-grid">
      <?php
      $why = [
        ['icon'=>'M19.5 9.5c-.83 0-1.5-.67-1.5-1.5V4H6v4c0 .83-.67 1.5-1.5 1.5S3 8.83 3 9.5V20h18V9.5c0-.83-.67-1.5-1.5-1.5z','title'=>'Subfloor Inspection & Preparation','body'=>'Before any plank is laid, we inspect and prepare the subfloor — leveling, cleaning, and ensuring the foundation is perfect. This is what separates a floor that lasts from one that fails.'],
        ['icon'=>'M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z','title'=>'Precise Cuts, Seamless Transitions','body'=>'Every cut is measured twice. Every transition strip is flush. Every border is clean. You\'ll notice the seamlessness — and so will anyone who visits.'],
        ['icon'=>'M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm-9 4H9v2H7V8H5V6h6v2zm4 8c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3-8h-2v2h-2V6h4v2z','title'=>'Manufacturer-Matched Materials','body'=>'We source materials that match manufacturer specs for your specific installation — ensuring long-term warranty compliance and maximum durability.'],
        ['icon'=>'M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5v-9l6 4.5-6 4.5z','title'=>'Daily Cleanup — Your Home Stays Livable','body'=>'Flooring projects create dust. We contain it. Every day we clean up completely so your home remains livable throughout the installation process.'],
        ['icon'=>'M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-1 14l-3-3 1.41-1.41L11 12.17l4.59-4.58L17 9l-6 6z','title'=>'MHIC Licensed — Fully Insured','body'=>'License #154361. General liability insurance active on every job. You\'re protected from start to finish — not just with promises, but with credentials.'],
        ['icon'=>'M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z','title'=>'Defined Timeline — No Open-Ended Projects','body'=>'Every flooring project has a defined start date and a defined completion date. We show up on time, work efficiently, and finish when we said we would.'],
      ];
      foreach ($why as $w): ?>
        <div class="fl-why-item" style="display:flex; gap:16px; padding:24px 22px; border-radius:8px; border-left:3px solid #C9A84C; background:#FDF8EC; border-top:1px solid rgba(201,168,76,0.15); border-right:1px solid rgba(201,168,76,0.15); border-bottom:1px solid rgba(201,168,76,0.15);">
          <div style="width:40px; height:40px; border-radius:8px; background:rgba(201,168,76,0.12); display:flex; align-items:center; justify-content:center; flex-shrink:0;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="#C9A84C"><path d="<?php echo $w['icon']; ?>"/></svg>
          </div>
          <div>
            <p style="font-family:'Montserrat',sans-serif; font-size:12px; font-weight:800; letter-spacing:0.05em; color:#0d1b2a; margin:0 0 8px;"><?php echo $w['title']; ?></p>
            <p style="font-family:'Inter',sans-serif; font-size:13px; color:#2f2f2f; opacity:0.68; line-height:1.65; margin:0;"><?php echo $w['body']; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ GALLERY ═══════════════════════════════════════════════════════════════ -->
<section style="background:#fff; padding:96px 0;">
  <div style="max-width:1280px; margin:0 auto; padding:0 24px;">
    <div style="text-align:center; margin-bottom:52px;" class="fl-fade-up">
      <div style="display:inline-flex; align-items:center; gap:12px; margin-bottom:16px;">
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
        <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">Flooring Portfolio</span>
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
      </div>
      <h2 style="font-family:'Playfair Display',serif; font-size:clamp(1.8rem,3.5vw,2.6rem); font-weight:900; color:#0d1b2a; line-height:1.2;">
        Installed Across Maryland.
      </h2>
    </div>
    <!-- Masonry-style asymmetric grid -->
    <div style="display:grid; grid-template-columns:repeat(3,1fr); grid-template-rows:auto; gap:16px;" class="fl-gallery-grid">
      <?php
      $gallery = [
        ['img'=>'/wp-content/uploads/flooring-gallery-1.jpg','label'=>'LVP Installation','location'=>'Columbia, MD','span'=>'grid-column:1/2; grid-row:1/3; aspect-ratio:2/3;'],
        ['img'=>'/wp-content/uploads/flooring-gallery-2.jpg','label'=>'Hardwood Floor','location'=>'Bethesda, MD','span'=>'aspect-ratio:4/3;'],
        ['img'=>'/wp-content/uploads/flooring-gallery-3.jpg','label'=>'Tile Installation','location'=>'Rockville, MD','span'=>'aspect-ratio:4/3;'],
        ['img'=>'/wp-content/uploads/flooring-gallery-4.jpg','label'=>'Laminate — Living Room','location'=>'Ellicott City, MD','span'=>'aspect-ratio:4/3;'],
        ['img'=>'/wp-content/uploads/flooring-gallery-5.jpg','label'=>'Carpet — Master Bedroom','location'=>'Potomac, MD','span'=>'aspect-ratio:4/3;'],
        ['img'=>'/wp-content/uploads/flooring-gallery-6.jpg','label'=>'Vinyl — Basement','location'=>'Frederick, MD','span'=>'grid-column:3/4; grid-row:1/3; aspect-ratio:2/3;'],
      ];
      foreach ($gallery as $item): ?>
        <div class="fl-gallery-item" style="<?php echo $item['span']; ?> background:linear-gradient(135deg,#0d1b2a,#415a77);">
          <img src="<?php echo $item['img']; ?>" alt="<?php echo esc_attr($item['label']); ?> — <?php echo esc_attr($item['location']); ?>" onerror="this.style.display='none'"/>
          <div class="fl-gallery-caption">
            <p style="font-family:'Montserrat',sans-serif; font-size:12px; font-weight:700; color:#fff; margin:0;"><?php echo $item['label']; ?></p>
            <p style="font-family:'Inter',sans-serif; font-size:11px; color:#C9A84C; margin:3px 0 0;"><?php echo $item['location']; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div style="text-align:center; margin-top:44px;">
      <a href="/our-work" style="display:inline-flex; align-items:center; gap:8px; font-family:'Montserrat',sans-serif; font-size:12px; font-weight:700; letter-spacing:0.1em; text-transform:uppercase; color:#0d1b2a; text-decoration:none; border-bottom:2px solid #C9A84C; padding-bottom:4px; transition:color 0.2s;" onmouseover="this.style.color='#C9A84C';" onmouseout="this.style.color='#0d1b2a';">
        View Full Portfolio <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>
  </div>
</section>

<!-- ═══ FINAL CTA BAR ════════════════════════════════════════════════════════ -->
<section style="background:#C9A84C; padding:56px 24px;">
  <div style="max-width:1280px; margin:0 auto; display:flex; align-items:center; justify-content:space-between; gap:32px; flex-wrap:wrap;" class="fl-cta-flex">
    <div>
      <p style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.22em; text-transform:uppercase; color:rgba(11,31,51,0.55); margin:0 0 8px;">Ready to Start?</p>
      <h2 style="font-family:'Playfair Display',serif; font-size:clamp(1.6rem,3vw,2.4rem); font-weight:900; color:#0d1b2a; line-height:1.15; margin:0 0 6px;">Request a Free Flooring Estimate.</h2>
      <p style="font-family:'Inter',sans-serif; font-size:14px; color:rgba(11,31,51,0.65); margin:0;">We respond within 24–48 hours. No pressure. Just clarity.</p>
    </div>
    <div style="display:flex; gap:16px; align-items:center; flex-wrap:wrap;">
      <a href="/contact" style="display:inline-flex; align-items:center; justify-content:center; background:#0d1b2a; color:#C9A84C; font-family:'Montserrat',sans-serif; font-size:12px; font-weight:800; letter-spacing:0.12em; text-transform:uppercase; text-decoration:none; padding:0 36px; height:54px; border-radius:4px; transition:background 0.2s,transform 0.15s; white-space:nowrap;" onmouseover="this.style.background='#060d18';this.style.transform='translateY(-1px)';" onmouseout="this.style.background='#0d1b2a';this.style.transform='none';">
        Request a Free Estimate
      </a>
      <a href="tel:+13013004172" style="display:inline-flex; align-items:center; gap:8px; color:#0d1b2a; font-family:'Montserrat',sans-serif; font-size:14px; font-weight:700; text-decoration:none; opacity:0.7; transition:opacity 0.2s;" onmouseover="this.style.opacity='1';" onmouseout="this.style.opacity='0.7';">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
        (301) 300-4172
      </a>
    </div>
  </div>
</section>

<!-- ═══ JAVASCRIPT ════════════════════════════════════════════════════════════ -->
<script>
// ── Material Tabs ─────────────────────────────────────────────────────────────
function flSetTab(idx) {
  document.querySelectorAll('.fl-tab-btn').forEach(function (b, i) {
    b.classList.toggle('active', i === idx)
  })
  document.querySelectorAll('.fl-tab-panel').forEach(function (p, i) {
    p.classList.toggle('active', i === idx)
    // Trigger fade-in on panel content
    if (i === idx) {
      p.style.opacity = '0'
      p.style.transform = 'translateY(12px)'
      setTimeout(function () {
        p.style.transition = 'opacity 0.3s ease, transform 0.3s ease'
        p.style.opacity = '1'
        p.style.transform = 'translateY(0)'
      }, 10)
    }
  })
}

document.addEventListener('DOMContentLoaded', function () {
  // ── Scroll Animations ─────────────────────────────────────────────────────
  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        var el = entry.target
        setTimeout(function () { el.classList.add('visible') }, parseInt(el.dataset.delay || 0))
        io.unobserve(el)
      }
    })
  }, { threshold: 0.12 })

  document.querySelectorAll('.fl-fade-up').forEach(function (el) { io.observe(el) })

  // ── Tab panel initial transition style ────────────────────────────────────
  document.querySelectorAll('.fl-tab-panel.active').forEach(function (p) {
    p.style.transition = 'opacity 0.3s ease, transform 0.3s ease'
  })
})
</script>

<?php get_footer(); ?>