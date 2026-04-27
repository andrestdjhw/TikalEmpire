<?php
/*
 * Template Name: Kitchen Remodeling
 * Template Post Type: page
 */

get_header(); ?>

<style>
@keyframes krTicker {
  from { transform: translateX(0); }
  to   { transform: translateX(-33.333%); }
}
.kr-fade-up { opacity: 0; transform: translateY(24px); transition: opacity 0.6s ease, transform 0.6s ease; }
.kr-fade-up.visible { opacity: 1; transform: translateY(0); }

.kr-service-item { transition: background 0.22s, border-color 0.22s, transform 0.22s; }
.kr-service-item:hover { background: rgba(201,168,76,0.08) !important; border-color: rgba(201,168,76,0.4) !important; transform: translateY(-2px); }

.kr-pricing-card { transition: box-shadow 0.25s, transform 0.25s; }
.kr-pricing-card:hover { box-shadow: 0 20px 56px rgba(0,0,0,0.35); transform: translateY(-4px); }

.kr-testimonial { transition: border-color 0.25s, background 0.25s; }
.kr-testimonial:hover { border-color: rgba(201,168,76,0.35) !important; background: rgba(201,168,76,0.04) !important; }

/* Before/After slider */
.kr-ba-wrap { position:relative; width:100%; padding-top:66.666%; border-radius:8px; overflow:hidden; cursor:ew-resize; user-select:none; box-shadow:0 8px 32px rgba(11,31,51,0.18); }
.kr-ba-after-clip { position:absolute; inset:0; width:50%; overflow:hidden; }
.kr-ba-handle { position:absolute; top:0; left:50%; width:3px; height:100%; background:#C9A84C; transform:translateX(-50%); z-index:10; pointer-events:none; }
.kr-ba-knob { position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); width:44px; height:44px; border-radius:50%; background:#C9A84C; border:3px solid #fff; box-shadow:0 4px 16px rgba(0,0,0,0.3); display:flex; align-items:center; justify-content:center; }

@media (max-width:1024px) {
  .kr-intro-grid   { grid-template-columns: 1fr !important; }
  .kr-pricing-grid { grid-template-columns: 1fr !important; }
  .kr-ba-grid      { grid-template-columns: repeat(2,1fr) !important; }
}
@media (max-width:768px) {
  .kr-services-grid { grid-template-columns: repeat(2,1fr) !important; }
  .kr-steps-grid    { grid-template-columns: repeat(2,1fr) !important; }
  .kr-ba-grid       { grid-template-columns: 1fr !important; }
  .kr-cta-flex      { flex-direction: column !important; text-align: center !important; }
}
@media (max-width:480px) {
  .kr-services-grid { grid-template-columns: 1fr !important; }
  .kr-steps-grid    { grid-template-columns: 1fr !important; }
}
</style>

<!-- ═══ HERO ══════════════════════════════════════════════════════════════════ -->
<section style="position:relative; min-height:90vh; display:flex; align-items:center; background-image:url('/wp-content/uploads/kitchen-hero.jpg'); background-size:cover; background-position:center; background-attachment:fixed;">
  <div style="position:absolute; inset:0; background:linear-gradient(120deg, rgba(11,31,51,0.88) 0%, rgba(11,31,51,0.65) 55%, rgba(11,31,51,0.45) 100%);"></div>
  <div style="position:relative; z-index:2; max-width:1280px; margin:0 auto; padding:80px 24px 60px; width:100%;">
    <div style="max-width:760px;">
      <div style="display:inline-flex; align-items:center; gap:12px; margin-bottom:24px;">
        <div style="width:36px; height:2px; background:#C9A84C;"></div>
        <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">Kitchen Remodeling · Maryland</span>
      </div>
      <h1 style="font-family:'Playfair Display',serif; font-size:clamp(2.2rem,6vw,4.5rem); font-weight:900; color:#fff; line-height:1.08; letter-spacing:-0.02em; margin-bottom:24px;">
        The Kitchen You've Always Imagined.<br><span style="color:#C9A84C;">Built Exactly Right.</span>
      </h1>
      <p style="font-family:'Inter',sans-serif; font-size:clamp(1rem,2vw,1.15rem); color:rgba(255,255,255,0.78); line-height:1.75; max-width:600px; margin-bottom:40px;">
        Full kitchen transformations in Maryland — cabinets, countertops, layout, tile, and every detail in between. Licensed, structured, and delivered on schedule.
      </p>
      <div style="display:flex; gap:14px; flex-wrap:wrap; align-items:center;">
        <a href="/contact" style="display:inline-flex; align-items:center; gap:10px; background:#C9A84C; color:#0B1F33; font-family:'Montserrat',sans-serif; font-size:12px; font-weight:800; letter-spacing:0.12em; text-transform:uppercase; text-decoration:none; padding:0 36px; height:54px; border-radius:4px; box-shadow:0 4px 24px rgba(201,168,76,0.38); transition:background 0.2s,transform 0.15s;" onmouseover="this.style.background='#DFB95A';this.style.transform='translateY(-2px)';" onmouseout="this.style.background='#C9A84C';this.style.transform='none';">
          Request a Free Estimate
        </a>
        <a href="tel:+13013004172" style="display:inline-flex; align-items:center; gap:8px; color:rgba(255,255,255,0.75); font-family:'Montserrat',sans-serif; font-size:12px; font-weight:600; letter-spacing:0.08em; text-decoration:none; transition:color 0.2s;" onmouseover="this.style.color='#C9A84C';" onmouseout="this.style.color='rgba(255,255,255,0.75)';">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
          (301) 300-4172
        </a>
      </div>
      <!-- Trust badges -->
      <div style="display:flex; gap:20px; flex-wrap:wrap; margin-top:40px; padding-top:32px; border-top:1px solid rgba(255,255,255,0.1);">
        <?php foreach(['MHIC #154361','Licensed & Insured','Starting at $80,000','Free Estimate'] as $b): ?>
          <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.12em; text-transform:uppercase; color:rgba(255,255,255,0.45); display:flex; align-items:center; gap:7px;">
            <span style="width:5px; height:5px; border-radius:50%; background:#C9A84C; flex-shrink:0;"></span><?php echo $b; ?>
          </span>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ═══ INTRO — Two column ════════════════════════════════════════════════════ -->
<section style="background:#F7F7F5; padding:96px 0;">
  <div style="max-width:1280px; margin:0 auto; padding:0 24px; display:grid; grid-template-columns:3fr 2fr; gap:80px; align-items:center;" class="kr-intro-grid">
    <div class="kr-fade-up">
      <div style="display:flex; align-items:center; gap:12px; margin-bottom:20px;">
        <div style="width:36px; height:2px; background:#C9A84C;"></div>
        <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">Our Approach</span>
      </div>
      <h2 style="font-family:'Playfair Display',serif; font-size:clamp(1.8rem,3.5vw,2.8rem); font-weight:900; color:#0B1F33; line-height:1.15; margin-bottom:28px;">
        More Than Cabinets<br>and Countertops.
      </h2>
      <div style="display:flex; flex-direction:column; gap:18px; font-family:'Inter',sans-serif; font-size:16px; color:#2C2C2C; line-height:1.82;">
        <p style="margin:0;">Your kitchen is where your home begins. It's where mornings start, where family gathers, and where the character of your home is most on display.</p>
        <p style="margin:0;">At Tikal Empire, a kitchen remodel is never just about cabinets and countertops. It's about creating a space that functions perfectly for how you actually live — and looks exactly the way you imagined it.</p>
        <p style="margin:0;">With our MHIC-licensed team, locally sourced premium cabinets, and a structured process from design to final walk-through, you get a kitchen that lasts decades and makes you proud every single day.</p>
      </div>
      <!-- Inline stat row -->
      <div style="display:flex; gap:32px; flex-wrap:wrap; margin-top:40px; padding-top:32px; border-top:1px solid rgba(11,31,51,0.1);">
        <?php
        $stats = [['val'=>'MHIC','lbl'=>'Licensed Contractor'],['val'=>'$80K+','lbl'=>'Starting Investment'],['val'=>'3–6','lbl'=>'Weeks to Completion']];
        foreach ($stats as $s): ?>
          <div>
            <p style="font-family:'Playfair Display',serif; font-size:1.8rem; font-weight:900; color:#C9A84C; margin:0; line-height:1;"><?php echo $s['val']; ?></p>
            <p style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:600; letter-spacing:0.12em; text-transform:uppercase; color:#2C2C2C; opacity:0.55; margin:5px 0 0;"><?php echo $s['lbl']; ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="kr-fade-up" style="display:flex; flex-direction:column; gap:16px;">
      <div style="border-radius:8px; overflow:hidden; aspect-ratio:3/4; background:linear-gradient(135deg,#0B1F33,#4A6F8A); position:relative;">
        <img src="/wp-content/uploads/kitchen-cabinet-detail.jpg" alt="Premium kitchen cabinet hardware detail" style="width:100%; height:100%; object-fit:cover; display:block;" onerror="this.style.display='none'"/>
        <div style="position:absolute; bottom:0; left:0; right:0; padding:16px 18px; background:linear-gradient(transparent,rgba(11,31,51,0.88));">
          <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:600; letter-spacing:0.14em; text-transform:uppercase; color:rgba(255,255,255,0.6);">Craftsmanship Detail</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SERVICES INCLUDED ════════════════════════════════════════════════════ -->
<section style="background:#fff; padding:96px 0;">
  <div style="max-width:1280px; margin:0 auto; padding:0 24px;">
    <div style="text-align:center; margin-bottom:56px;" class="kr-fade-up">
      <div style="display:inline-flex; align-items:center; gap:12px; margin-bottom:16px;">
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
        <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">What's Included</span>
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
      </div>
      <h2 style="font-family:'Playfair Display',serif; font-size:clamp(1.8rem,3.5vw,2.6rem); font-weight:900; color:#0B1F33; line-height:1.2; max-width:560px; margin:0 auto;">
        We Handle Everything.<br>You Focus on the Vision.
      </h2>
    </div>
    <div style="display:grid; grid-template-columns:repeat(4,1fr); gap:16px;" class="kr-services-grid">
      <?php
      $svcs = [
        ['icon'=>'M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 3c1.93 0 3.5 1.57 3.5 3.5S13.93 13 12 13s-3.5-1.57-3.5-3.5S10.07 6 12 6zm7 13H5v-.23c0-.62.28-1.2.76-1.58C7.47 15.82 9.64 15 12 15s4.53.82 6.24 2.19c.48.38.76.97.76 1.58V19z','label'=>'Cabinet Installation & Custom Millwork'],
        ['icon'=>'M7 2v11h3v9l7-12h-4l4-8z','label'=>'Countertop Fabrication & Installation'],
        ['icon'=>'M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z','label'=>'Backsplash Tile Design & Installation'],
        ['icon'=>'M20 18c1.1 0 1.99-.9 1.99-2L22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2H0v2h24v-2h-4zM4 6h16v10H4V6z','label'=>'Flooring — LVP, Hardwood, Tile'],
        ['icon'=>'M9 21c0 .55.45 1 1 1h4c.55 0 1-.45 1-1v-1H9v1zm3-19C8.14 2 5 5.14 5 9c0 2.38 1.19 4.47 3 5.74V17c0 .55.45 1 1 1h6c.55 0 1-.45 1-1v-2.26c1.81-1.27 3-3.36 3-5.74 0-3.86-3.14-7-7-7z','label'=>'Electrical & Lighting Upgrades'],
        ['icon'=>'M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.85 7h10.29l1.08 3.11H5.77L6.85 7zM19 17H5v-5h14v5z','label'=>'Plumbing — Sink, Faucet, Disposal'],
        ['icon'=>'M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 9H9V9h10v2zm-4 4H9v-2h6v2zm4-8H9V5h10v2z','label'=>'Island Design & Installation'],
        ['icon'=>'M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5v-9l6 4.5-6 4.5z','label'=>'Painting & Finishing'],
      ];
      foreach ($svcs as $svc): ?>
        <div class="kr-service-item" style="display:flex; align-items:flex-start; gap:14px; padding:20px 18px; border-radius:8px; border:1px solid rgba(11,31,51,0.08); background:#F7F7F5;">
          <div style="width:40px; height:40px; border-radius:8px; background:rgba(201,168,76,0.1); display:flex; align-items:center; justify-content:center; flex-shrink:0;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="#C9A84C"><path d="<?php echo $svc['icon']; ?>"/></svg>
          </div>
          <span style="font-family:'Montserrat',sans-serif; font-size:12px; font-weight:700; letter-spacing:0.04em; color:#0B1F33; line-height:1.5; padding-top:9px;"><?php echo $svc['label']; ?></span>
        </div>
      <?php endforeach; ?>
    </div>
    <p style="text-align:center; margin-top:28px; font-family:'Inter',sans-serif; font-size:14px; color:#2C2C2C; opacity:0.5;">
      Not sure what your project needs? <a href="/contact" style="color:#C9A84C; text-decoration:none; font-weight:600; border-bottom:1px solid rgba(201,168,76,0.4);">Let's talk through it together →</a>
    </p>
  </div>
</section>

<!-- ═══ INVESTMENT RANGE ══════════════════════════════════════════════════════ -->
<section style="background:#0B1F33; padding:96px 0;">
  <div style="max-width:1280px; margin:0 auto; padding:0 24px;">
    <div style="text-align:center; margin-bottom:52px;" class="kr-fade-up">
      <div style="display:inline-flex; align-items:center; gap:12px; margin-bottom:16px;">
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
        <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">Investment Range</span>
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
      </div>
      <h2 style="font-family:'Playfair Display',serif; font-size:clamp(1.8rem,3.5vw,2.6rem); font-weight:900; color:#fff; line-height:1.2;">
        Transparent Pricing.<br>No Surprises.
      </h2>
    </div>
    <div style="display:grid; grid-template-columns:1fr 1fr; gap:24px; max-width:960px; margin:0 auto;" class="kr-pricing-grid">
      <!-- Tier 1 -->
      <div class="kr-pricing-card" style="background:rgba(255,255,255,0.04); border:1px solid rgba(201,168,76,0.2); border-radius:10px; padding:40px 36px; position:relative; overflow:hidden;">
        <div style="position:absolute; top:0; left:0; right:0; height:3px; background:linear-gradient(90deg,transparent,#C9A84C88,transparent);"></div>
        <p style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.22em; text-transform:uppercase; color:#C9A84C; margin:0 0 12px;">Basic Kitchen Remodel</p>
        <p style="font-family:'Playfair Display',serif; font-size:3rem; font-weight:900; color:#C9A84C; margin:0; line-height:1;">$80,000<span style="font-size:1.2rem; color:rgba(255,255,255,0.45); font-family:'Montserrat',sans-serif; font-weight:500;">+</span></p>
        <p style="font-family:'Montserrat',sans-serif; font-size:11px; font-weight:600; letter-spacing:0.1em; text-transform:uppercase; color:rgba(255,255,255,0.4); margin:10px 0 28px;">3–4 Weeks</p>
        <ul style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:12px;">
          <?php foreach(['Cabinets & hardware','Countertop installation','Tile backsplash','Paint & fixtures','Plumbing & sink swap'] as $item): ?>
            <li style="display:flex; align-items:center; gap:10px; font-family:'Inter',sans-serif; font-size:14px; color:rgba(255,255,255,0.65);">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="#C9A84C"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <?php echo $item; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <!-- Tier 2 -->
      <div class="kr-pricing-card" style="background:rgba(201,168,76,0.06); border:1px solid rgba(201,168,76,0.38); border-radius:10px; padding:40px 36px; position:relative; overflow:hidden;">
        <div style="position:absolute; top:0; left:0; right:0; height:3px; background:linear-gradient(90deg,transparent,#C9A84C,transparent);"></div>
        <div style="position:absolute; top:16px; right:20px; background:#C9A84C; color:#0B1F33; font-family:'Montserrat',sans-serif; font-size:9px; font-weight:800; letter-spacing:0.12em; text-transform:uppercase; padding:4px 10px; border-radius:3px;">Most Popular</div>
        <p style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.22em; text-transform:uppercase; color:#C9A84C; margin:0 0 12px;">Full Kitchen Transformation</p>
        <p style="font-family:'Playfair Display',serif; font-size:3rem; font-weight:900; color:#C9A84C; margin:0; line-height:1;">$150,000<span style="font-size:1.2rem; color:rgba(255,255,255,0.45); font-family:'Montserrat',sans-serif; font-weight:500;">+</span></p>
        <p style="font-family:'Montserrat',sans-serif; font-size:11px; font-weight:600; letter-spacing:0.1em; text-transform:uppercase; color:rgba(255,255,255,0.4); margin:10px 0 28px;">4–6 Weeks</p>
        <ul style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:12px;">
          <?php foreach(['Complete layout redesign','Custom millwork & cabinetry','Premium quartz, granite, or marble','Full electrical & lighting design','Plumbing reconfiguration','Island design & installation','Flooring — full room'] as $item): ?>
            <li style="display:flex; align-items:center; gap:10px; font-family:'Inter',sans-serif; font-size:14px; color:rgba(255,255,255,0.72);">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="#C9A84C"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <?php echo $item; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
    <p style="text-align:center; margin-top:28px; font-family:'Inter',sans-serif; font-size:14px; color:rgba(255,255,255,0.35); max-width:520px; margin-left:auto; margin-right:auto;">
      Final investment depends on scope, materials, and layout complexity. Your estimate is <strong style="color:rgba(255,255,255,0.55);">free and obligation-free.</strong>
    </p>
  </div>
</section>

<!-- ═══ BEFORE / AFTER GALLERY ═══════════════════════════════════════════════ -->
<section style="background:#FDF8EC; padding:96px 0;">
  <div style="max-width:1280px; margin:0 auto; padding:0 24px;">
    <div style="text-align:center; margin-bottom:52px;" class="kr-fade-up">
      <div style="display:inline-flex; align-items:center; gap:12px; margin-bottom:16px;">
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
        <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">Real Projects. Real Results.</span>
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
      </div>
      <h2 style="font-family:'Playfair Display',serif; font-size:clamp(1.8rem,3.5vw,2.6rem); font-weight:900; color:#0B1F33; line-height:1.2;">
        Kitchen Transformations<br>Across Maryland.
      </h2>
      <p style="font-family:'Inter',sans-serif; font-size:14px; color:#2C2C2C; opacity:0.5; margin-top:12px;">Drag the slider to reveal each transformation.</p>
    </div>
    <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:28px;" class="kr-ba-grid">
      <?php
      $projects = [
        ['label'=>'Kitchen Transformation','location'=>'Columbia, MD',   'before'=>'/wp-content/uploads/kitchen-columbia-before.jpg',  'after'=>'/wp-content/uploads/kitchen-columbia-after.jpg'],
        ['label'=>'Kitchen Remodel',       'location'=>'Bethesda, MD',   'before'=>'/wp-content/uploads/kitchen-bethesda-before.jpg',  'after'=>'/wp-content/uploads/kitchen-bethesda-after.jpg'],
        ['label'=>'Full Kitchen Redesign', 'location'=>'Rockville, MD',  'before'=>'/wp-content/uploads/kitchen-rockville-before.jpg', 'after'=>'/wp-content/uploads/kitchen-rockville-after.jpg'],
      ];
      foreach ($projects as $idx => $p): ?>
        <div>
          <div class="kr-ba-wrap" data-ba="<?php echo $idx; ?>">
            <img src="<?php echo $p['before']; ?>" alt="Before — <?php echo esc_attr($p['label']); ?>" style="position:absolute; inset:0; width:100%; height:100%; object-fit:cover;" onerror="this.parentElement.style.background='#4A6F8A'"/>
            <span style="position:absolute; top:12px; left:12px; z-index:5; font-family:'Montserrat',sans-serif; font-size:9px; font-weight:700; letter-spacing:0.15em; text-transform:uppercase; background:rgba(11,31,51,0.82); color:rgba(255,255,255,0.8); padding:4px 10px; border-radius:3px;">Before</span>
            <div class="kr-ba-after-clip">
              <img src="<?php echo $p['after']; ?>" class="kr-ba-after-img" alt="After — <?php echo esc_attr($p['label']); ?>" style="position:absolute; top:0; left:0; height:100%; object-fit:cover;" onerror="this.parentElement.parentElement.style.background='#C9A84C'"/>
            </div>
            <span style="position:absolute; top:12px; right:12px; z-index:5; font-family:'Montserrat',sans-serif; font-size:9px; font-weight:700; letter-spacing:0.15em; text-transform:uppercase; background:rgba(201,168,76,0.92); color:#0B1F33; padding:4px 10px; border-radius:3px;">After</span>
            <div class="kr-ba-handle">
              <div class="kr-ba-knob">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#0B1F33" stroke-width="2.5" stroke-linecap="round"><path d="M8 4l-6 8 6 8M16 4l6 8-6 8"/></svg>
              </div>
            </div>
          </div>
          <div style="margin-top:14px; padding:0 4px; display:flex; align-items:center; justify-content:space-between;">
            <div>
              <p style="font-family:'Montserrat',sans-serif; font-size:13px; font-weight:700; color:#0B1F33; margin:0;"><?php echo $p['label']; ?></p>
              <p style="font-family:'Inter',sans-serif; font-size:12px; color:#4A6F8A; margin:3px 0 0;"><?php echo $p['location']; ?></p>
            </div>
            <a href="/our-work" style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.1em; text-transform:uppercase; color:#C9A84C; text-decoration:none;">View All →</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ PROCESS ═══════════════════════════════════════════════════════════════ -->
<section style="background:#fff; padding:96px 0;">
  <div style="max-width:1280px; margin:0 auto; padding:0 24px;">
    <div style="text-align:center; margin-bottom:64px;" class="kr-fade-up">
      <div style="display:inline-flex; align-items:center; gap:12px; margin-bottom:16px;">
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
        <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">How We Work</span>
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
      </div>
      <h2 style="font-family:'Playfair Display',serif; font-size:clamp(1.8rem,3.5vw,2.6rem); font-weight:900; color:#0B1F33; line-height:1.2;">
        How Your Kitchen<br>Remodel Works.
      </h2>
    </div>
    <div style="display:grid; grid-template-columns:repeat(5,1fr); gap:8px;" class="kr-steps-grid">
      <?php
      $steps = [
        ['n'=>'01','title'=>'Free In-Home Estimate',         'body'=>'We visit your kitchen, understand your goals, and assess the scope honestly.'],
        ['n'=>'02','title'=>'Design & Material Selection',   'body'=>'Cabinets, countertops, tile, flooring — we guide every choice to match your vision.'],
        ['n'=>'03','title'=>'Structured Project Timeline',   'body'=>'You receive a written schedule. No vague dates — defined milestones, start to finish.'],
        ['n'=>'04','title'=>'Expert Installation',           'body'=>'Our team arrives on schedule, protects your home, and executes with precision.'],
        ['n'=>'05','title'=>'Final Walk-Through & Approval', 'body'=>'We don\'t close until you\'re completely satisfied with every detail.'],
      ];
      foreach ($steps as $i => $s): ?>
        <div class="kr-fade-up" style="text-align:center; padding:0 12px;" data-delay="<?php echo $i*100; ?>">
          <div style="width:72px; height:72px; border-radius:50%; background:linear-gradient(135deg,#0B1F33,#071828); border:2px solid rgba(201,168,76,0.3); display:flex; align-items:center; justify-content:center; margin:0 auto 20px; box-shadow:0 8px 24px rgba(11,31,51,0.14);">
            <span style="font-family:'Playfair Display',serif; font-size:1.4rem; font-weight:900; color:#C9A84C;"><?php echo $s['n']; ?></span>
          </div>
          <h3 style="font-family:'Montserrat',sans-serif; font-size:11px; font-weight:800; letter-spacing:0.07em; text-transform:uppercase; color:#0B1F33; margin-bottom:10px;"><?php echo $s['title']; ?></h3>
          <p style="font-family:'Inter',sans-serif; font-size:13px; color:#2C2C2C; opacity:0.65; line-height:1.7; margin:0;"><?php echo $s['body']; ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ TESTIMONIALS ══════════════════════════════════════════════════════════ -->
<section style="background:#0B1F33; padding:80px 0;">
  <div style="max-width:960px; margin:0 auto; padding:0 24px;">
    <div style="text-align:center; margin-bottom:40px;" class="kr-fade-up">
      <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">What Homeowners Say</span>
    </div>
    <div style="display:grid; grid-template-columns:1fr 1fr; gap:20px;" class="kr-pricing-grid">
      <?php
      $testimonials = [
        ['q'=>'Tikal Empire completely transformed our kitchen. They finished on time, within budget, and the craftsmanship is absolutely stunning. We cook in there every day and still can\'t believe it\'s ours.','name'=>'Jennifer M.','city'=>'Potomac, MD'],
        ['q'=>'From the first consultation to the final walk-through, every step was exactly as described. No surprises, no delays. The kitchen exceeded every expectation we had going in.','name'=>'David & Sarah K.','city'=>'Columbia, MD'],
      ];
      foreach ($testimonials as $t): ?>
        <div class="kr-testimonial" style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.08); border-radius:8px; padding:32px 28px;">
          <div style="display:flex; gap:3px; margin-bottom:18px;"><?php for($i=0;$i<5;$i++): ?><svg width="16" height="16" viewBox="0 0 20 20" fill="#C9A84C"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><?php endfor; ?></div>
          <blockquote style="font-family:'Playfair Display',serif; font-size:15px; font-style:italic; color:rgba(255,255,255,0.8); line-height:1.75; margin:0 0 20px;">"<?php echo $t['q']; ?>"</blockquote>
          <div style="display:flex; align-items:center; justify-content:space-between; padding-top:16px; border-top:1px solid rgba(255,255,255,0.07);">
            <div>
              <p style="font-family:'Montserrat',sans-serif; font-size:12px; font-weight:700; color:#fff; margin:0;"><?php echo $t['name']; ?></p>
              <p style="font-family:'Inter',sans-serif; font-size:11px; color:rgba(255,255,255,0.38); margin:3px 0 0;"><?php echo $t['city']; ?></p>
            </div>
            <span style="font-family:'Montserrat',sans-serif; font-size:9px; font-weight:700; letter-spacing:0.1em; text-transform:uppercase; background:rgba(201,168,76,0.12); color:#C9A84C; padding:4px 10px; border-radius:3px; border:1px solid rgba(201,168,76,0.2);">Kitchen Remodel</span>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ FINAL CTA BAR ════════════════════════════════════════════════════════ -->
<section style="background:#C9A84C; padding:56px 24px;">
  <div style="max-width:1280px; margin:0 auto; display:flex; align-items:center; justify-content:space-between; gap:32px; flex-wrap:wrap;" class="kr-cta-flex">
    <div>
      <p style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.22em; text-transform:uppercase; color:rgba(11,31,51,0.55); margin:0 0 8px;">Ready to Start?</p>
      <h2 style="font-family:'Playfair Display',serif; font-size:clamp(1.6rem,3vw,2.4rem); font-weight:900; color:#0B1F33; line-height:1.15; margin:0 0 6px;">Ready to Transform Your Kitchen?</h2>
      <p style="font-family:'Inter',sans-serif; font-size:14px; color:rgba(11,31,51,0.65); margin:0;">We respond within 24–48 hours. No pressure. Just clarity.</p>
    </div>
    <div style="display:flex; gap:16px; align-items:center; flex-wrap:wrap;">
      <a href="/contact" style="display:inline-flex; align-items:center; justify-content:center; background:#0B1F33; color:#C9A84C; font-family:'Montserrat',sans-serif; font-size:12px; font-weight:800; letter-spacing:0.12em; text-transform:uppercase; text-decoration:none; padding:0 36px; height:54px; border-radius:4px; transition:background 0.2s,transform 0.15s; white-space:nowrap;" onmouseover="this.style.background='#071828';this.style.transform='translateY(-1px)';" onmouseout="this.style.background='#0B1F33';this.style.transform='none';">
        Request a Free Estimate
      </a>
      <a href="tel:+13013004172" style="display:inline-flex; align-items:center; gap:8px; color:#0B1F33; font-family:'Montserrat',sans-serif; font-size:14px; font-weight:700; text-decoration:none; opacity:0.7; transition:opacity 0.2s;" onmouseover="this.style.opacity='1';" onmouseout="this.style.opacity='0.7';">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
        (301) 300-4172
      </a>
    </div>
  </div>
</section>

<!-- ═══ JAVASCRIPT ════════════════════════════════════════════════════════════ -->
<script>
document.addEventListener('DOMContentLoaded', function () {

  // ── Before/After Sliders ────────────────────────────────────────────────────
  document.querySelectorAll('[data-ba]').forEach(function (c) {
    var clip     = c.querySelector('.kr-ba-after-clip')
    var afterImg = c.querySelector('.kr-ba-after-img')
    var handle   = c.querySelector('.kr-ba-handle')
    var drag     = false

    function setPos(clientX) {
      var r   = c.getBoundingClientRect()
      var pct = Math.min(100, Math.max(0, ((clientX - r.left) / r.width) * 100))
      clip.style.width     = pct + '%'
      handle.style.left    = pct + '%'
      afterImg.style.width = r.width + 'px'
    }

    c.addEventListener('mousedown',  function (e) { drag = true; setPos(e.clientX); e.preventDefault(); })
    document.addEventListener('mouseup',   function ()  { drag = false; })
    document.addEventListener('mousemove', function (e) { if (drag) setPos(e.clientX); })
    c.addEventListener('touchstart', function (e) { drag = true; setPos(e.touches[0].clientX); }, { passive: true })
    document.addEventListener('touchend',  function ()  { drag = false; })
    document.addEventListener('touchmove', function (e) { if (drag) setPos(e.touches[0].clientX); }, { passive: true })

    var ro = new ResizeObserver(function () { afterImg.style.width = c.getBoundingClientRect().width + 'px' })
    ro.observe(c)
    afterImg.style.width = c.getBoundingClientRect().width + 'px'
  })

  // ── Scroll Animations ───────────────────────────────────────────────────────
  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        var el = entry.target
        setTimeout(function () { el.classList.add('visible') }, parseInt(el.dataset.delay || 0))
        io.unobserve(el)
      }
    })
  }, { threshold: 0.12 })

  document.querySelectorAll('.kr-fade-up').forEach(function (el) { io.observe(el) })
})
</script>

<?php get_footer(); ?>