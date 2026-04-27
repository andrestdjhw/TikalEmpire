<?php
/*
 * Template Name: Bathroom Remodeling
 * Template Post Type: page
 */

get_header(); ?>

<style>
.br-fade-up { opacity:0; transform:translateY(24px); transition:opacity 0.6s ease, transform 0.6s ease; }
.br-fade-up.visible { opacity:1; transform:translateY(0); }

.br-service-item { transition:background 0.22s, border-color 0.22s, transform 0.22s; }
.br-service-item:hover { background:rgba(201,168,76,0.08) !important; border-color:rgba(201,168,76,0.4) !important; transform:translateY(-2px); }

.br-trust-item { transition:background 0.22s, border-color 0.22s, transform 0.2s; }
.br-trust-item:hover { background:rgba(201,168,76,0.1) !important; border-color:rgba(201,168,76,0.35) !important; transform:translateX(4px); }

.br-testimonial { transition:border-color 0.25s, background 0.25s; }
.br-testimonial:hover { border-color:rgba(201,168,76,0.35) !important; background:rgba(201,168,76,0.04) !important; }

/* Before/After */
.br-ba-wrap { position:relative; width:100%; padding-top:68%; border-radius:8px; overflow:hidden; cursor:ew-resize; user-select:none; box-shadow:0 8px 32px rgba(11,31,51,0.18); }
.br-ba-clip { position:absolute; inset:0; width:50%; overflow:hidden; }
.br-ba-handle { position:absolute; top:0; left:50%; width:3px; height:100%; background:#C9A84C; transform:translateX(-50%); z-index:10; pointer-events:none; }
.br-ba-knob { position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); width:44px; height:44px; border-radius:50%; background:#C9A84C; border:3px solid #fff; box-shadow:0 4px 16px rgba(0,0,0,0.3); display:flex; align-items:center; justify-content:center; }

@media (max-width:1024px) {
  .br-intro-grid   { grid-template-columns:1fr !important; }
  .br-pricing-wrap { max-width:560px !important; }
  .br-ba-grid      { grid-template-columns:repeat(2,1fr) !important; }
  .br-steps-grid   { grid-template-columns:repeat(3,1fr) !important; }
}
@media (max-width:768px) {
  .br-services-grid { grid-template-columns:repeat(2,1fr) !important; }
  .br-ba-grid       { grid-template-columns:1fr !important; }
  .br-steps-grid    { grid-template-columns:repeat(2,1fr) !important; }
  .br-cta-flex      { flex-direction:column !important; text-align:center !important; }
  .br-trust-grid    { grid-template-columns:1fr !important; }
}
@media (max-width:480px) {
  .br-services-grid { grid-template-columns:1fr !important; }
  .br-steps-grid    { grid-template-columns:1fr !important; }
}
</style>

<!-- ═══ HERO ══════════════════════════════════════════════════════════════════ -->
<section style="position:relative; min-height:90vh; display:flex; align-items:center; background-image:url('/wp-content/uploads/bathroom-hero.jpg'); background-size:cover; background-position:center; background-attachment:fixed;">
  <div style="position:absolute; inset:0; background:linear-gradient(125deg, rgba(11,31,51,0.9) 0%, rgba(11,31,51,0.65) 55%, rgba(11,31,51,0.4) 100%);"></div>
  <div style="position:relative; z-index:2; max-width:1280px; margin:0 auto; padding:80px 24px 60px; width:100%;">
    <div style="max-width:740px;">
      <div style="display:inline-flex; align-items:center; gap:12px; margin-bottom:24px;">
        <div style="width:36px; height:2px; background:#C9A84C;"></div>
        <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">Bathroom Remodeling · Maryland</span>
      </div>
      <h1 style="font-family:'Playfair Display',serif; font-size:clamp(2.2rem,6vw,4.4rem); font-weight:900; color:#fff; line-height:1.08; letter-spacing:-0.02em; margin-bottom:24px;">
        Your Bathroom,<br><span style="color:#C9A84C;">Elevated to Another Level.</span>
      </h1>
      <p style="font-family:'Inter',sans-serif; font-size:clamp(1rem,2vw,1.15rem); color:rgba(255,255,255,0.78); line-height:1.78; max-width:580px; margin-bottom:40px;">
        Precise tile work, modern fixtures, shower conversions, and complete bathroom renovations — delivered with craftsmanship and schedule certainty.
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
        <?php foreach(['MHIC #154361','Licensed & Insured','Starting at $18,000','~1 Week Completion'] as $b): ?>
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
  <div style="max-width:1280px; margin:0 auto; padding:0 24px; display:grid; grid-template-columns:3fr 2fr; gap:80px; align-items:center;" class="br-intro-grid">
    <div class="br-fade-up">
      <div style="display:flex; align-items:center; gap:12px; margin-bottom:20px;">
        <div style="width:36px; height:2px; background:#C9A84C;"></div>
        <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">Our Approach</span>
      </div>
      <h2 style="font-family:'Playfair Display',serif; font-size:clamp(1.8rem,3.5vw,2.8rem); font-weight:900; color:#0B1F33; line-height:1.15; margin-bottom:28px;">
        Personal Precision.<br>No Mess. No Delays.
      </h2>
      <div style="display:flex; flex-direction:column; gap:18px; font-family:'Inter',sans-serif; font-size:16px; color:#2C2C2C; line-height:1.82;">
        <p style="margin:0;">A bathroom renovation is one of the most personal investments you can make in your home. You use it every morning. It sets the tone for your day.</p>
        <p style="margin:0;">At Tikal Empire, we approach every bathroom with the same precision and respect. We protect your space, work clean, communicate daily, and deliver a result that looks exactly as you imagined — without the stress, the mess, or the missed deadlines.</p>
        <p style="margin:0;"><strong style="color:#0B1F33;">Most complete bathrooms are done in one week.</strong> That's not a shortcut — that's what focused, experienced specialists can accomplish.</p>
      </div>
      <!-- Stat row -->
      <div style="display:flex; gap:32px; flex-wrap:wrap; margin-top:40px; padding-top:32px; border-top:1px solid rgba(11,31,51,0.1);">
        <?php foreach([['val'=>'~1 Wk','lbl'=>'Avg. Completion'],['val'=>'$18K+','lbl'=>'Starting Investment'],['val'=>'2','lbl'=>'Specialist Team']] as $s): ?>
          <div>
            <p style="font-family:'Playfair Display',serif; font-size:1.8rem; font-weight:900; color:#C9A84C; margin:0; line-height:1;"><?php echo $s['val']; ?></p>
            <p style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:600; letter-spacing:0.12em; text-transform:uppercase; color:#2C2C2C; opacity:0.55; margin:5px 0 0;"><?php echo $s['lbl']; ?></p>
          </div>
        <?php endforeach; ?>
      </div>
      <a href="/contact" style="display:inline-flex; align-items:center; gap:8px; margin-top:36px; font-family:'Montserrat',sans-serif; font-size:12px; font-weight:700; letter-spacing:0.1em; text-transform:uppercase; color:#C9A84C; text-decoration:none; border-bottom:2px solid rgba(201,168,76,0.35); padding-bottom:4px; transition:border-color 0.2s;" onmouseover="this.style.borderColor='#C9A84C';" onmouseout="this.style.borderColor='rgba(201,168,76,0.35)';">
        Get Your Free Estimate <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>
    <div class="br-fade-up">
      <div style="border-radius:8px; overflow:hidden; aspect-ratio:3/4; background:linear-gradient(135deg,#0B1F33,#4A6F8A); position:relative;">
        <img src="/wp-content/uploads/bathroom-tile-detail.jpg" alt="Precision large-format tile installation — bathroom renovation" style="width:100%; height:100%; object-fit:cover; display:block;" onerror="this.style.display='none'"/>
        <div style="position:absolute; bottom:0; left:0; right:0; padding:16px 18px; background:linear-gradient(transparent,rgba(11,31,51,0.88));">
          <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:600; letter-spacing:0.14em; text-transform:uppercase; color:rgba(255,255,255,0.6);">Precision Tile Detail</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SERVICES INCLUDED ════════════════════════════════════════════════════ -->
<section style="background:#fff; padding:96px 0;">
  <div style="max-width:1280px; margin:0 auto; padding:0 24px;">
    <div style="text-align:center; margin-bottom:56px;" class="br-fade-up">
      <div style="display:inline-flex; align-items:center; gap:12px; margin-bottom:16px;">
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
        <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">What's Included</span>
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
      </div>
      <h2 style="font-family:'Playfair Display',serif; font-size:clamp(1.8rem,3.5vw,2.6rem); font-weight:900; color:#0B1F33; line-height:1.2; max-width:520px; margin:0 auto;">
        Everything Your Bathroom<br>Needs. One Team.
      </h2>
    </div>
    <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:16px;" class="br-services-grid">
      <?php
      $svcs = [
        ['icon'=>'M19.5 9.5c-.83 0-1.5-.67-1.5-1.5V4H6v4c0 .83-.67 1.5-1.5 1.5S3 8.83 3 9.5V20h18V9.5c0-.83-.67-1.5-1.5-1.5zM10 17H8v-2h2v2zm0-4H8v-2h2v2zm4 4h-2v-2h2v2zm0-4h-2v-2h2v2zm4 4h-2v-2h2v2zm0-4h-2v-2h2v2z','label'=>'Tile Demolition & Prep'],
        ['icon'=>'M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z','label'=>'Large Format & Mosaic Tile Installation'],
        ['icon'=>'M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 9H9V9h10v2zm-4 4H9v-2h6v2zm4-8H9V5h10v2z','label'=>'Shower Conversion & Enclosure'],
        ['icon'=>'M7 2v11h3v9l7-12h-4l4-8z','label'=>'Bathtub Installation & Surrounds'],
        ['icon'=>'M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm-9 4H9v2H7V8H5V6h6v2zm4 8c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3-8h-2v2h-2V6h4v2z','label'=>'Vanity, Sink & Faucet Installation'],
        ['icon'=>'M9 21c0 .55.45 1 1 1h4c.55 0 1-.45 1-1v-1H9v1zm3-19C8.14 2 5 5.14 5 9c0 2.38 1.19 4.47 3 5.74V17c0 .55.45 1 1 1h6c.55 0 1-.45 1-1v-2.26c1.81-1.27 3-3.36 3-5.74 0-3.86-3.14-7-7-7z','label'=>'Toilet Replacement'],
        ['icon'=>'M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z','label'=>'Mirror & Lighting Upgrades'],
        ['icon'=>'M20 18c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2H0v2h24v-2h-4zM4 6h16v10H4V6z','label'=>'Flooring — Tile & LVP'],
        ['icon'=>'M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99z','label'=>'Painting & Waterproofing'],
      ];
      foreach ($svcs as $svc): ?>
        <div class="br-service-item" style="display:flex; align-items:flex-start; gap:14px; padding:20px 18px; border-radius:8px; border:1px solid rgba(11,31,51,0.08); background:#F7F7F5;">
          <div style="width:40px; height:40px; border-radius:8px; background:rgba(201,168,76,0.1); display:flex; align-items:center; justify-content:center; flex-shrink:0;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="#C9A84C"><path d="<?php echo $svc['icon']; ?>"/></svg>
          </div>
          <span style="font-family:'Montserrat',sans-serif; font-size:12px; font-weight:700; letter-spacing:0.04em; color:#0B1F33; line-height:1.5; padding-top:9px;"><?php echo $svc['label']; ?></span>
        </div>
      <?php endforeach; ?>
    </div>
    <p style="text-align:center; margin-top:28px; font-family:'Inter',sans-serif; font-size:14px; color:#2C2C2C; opacity:0.5;">
      Have a specific vision? <a href="/contact" style="color:#C9A84C; text-decoration:none; font-weight:600; border-bottom:1px solid rgba(201,168,76,0.4);">Let's walk through it together →</a>
    </p>
  </div>
</section>

<!-- ═══ INVESTMENT RANGE ══════════════════════════════════════════════════════ -->
<section style="background:#0B1F33; padding:96px 0;">
  <div style="max-width:1280px; margin:0 auto; padding:0 24px;">
    <div style="text-align:center; margin-bottom:52px;" class="br-fade-up">
      <div style="display:inline-flex; align-items:center; gap:12px; margin-bottom:16px;">
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
        <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">Investment Range</span>
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
      </div>
      <h2 style="font-family:'Playfair Display',serif; font-size:clamp(1.8rem,3.5vw,2.6rem); font-weight:900; color:#fff; line-height:1.2;">
        Transparent Pricing<br>from Day One.
      </h2>
    </div>
    <div style="max-width:620px; margin:0 auto;" class="br-pricing-wrap">
      <div style="background:rgba(201,168,76,0.06); border:1px solid rgba(201,168,76,0.35); border-radius:10px; padding:48px 40px; position:relative; overflow:hidden; transition:box-shadow 0.25s, transform 0.25s;" onmouseover="this.style.boxShadow='0 20px 56px rgba(0,0,0,0.35)';this.style.transform='translateY(-4px)';" onmouseout="this.style.boxShadow='none';this.style.transform='none';">
        <div style="position:absolute; top:0; left:0; right:0; height:3px; background:linear-gradient(90deg,transparent,#C9A84C,transparent);"></div>
        <p style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.22em; text-transform:uppercase; color:#C9A84C; margin:0 0 12px;">Complete Bathroom Renovation</p>
        <div style="display:flex; align-items:flex-end; gap:12px; margin-bottom:8px;">
          <p style="font-family:'Playfair Display',serif; font-size:3.5rem; font-weight:900; color:#C9A84C; margin:0; line-height:1;">$18,000</p>
          <span style="font-family:'Montserrat',sans-serif; font-size:1.1rem; color:rgba(255,255,255,0.4); font-weight:500; margin-bottom:8px;">starting at</span>
        </div>
        <div style="display:flex; gap:20px; margin-bottom:36px;">
          <span style="font-family:'Montserrat',sans-serif; font-size:11px; font-weight:600; letter-spacing:0.1em; text-transform:uppercase; color:rgba(255,255,255,0.4); display:flex; align-items:center; gap:6px;">
            <span style="width:4px; height:4px; border-radius:50%; background:#C9A84C; opacity:0.7;"></span>~1 Week Completion
          </span>
          <span style="font-family:'Montserrat',sans-serif; font-size:11px; font-weight:600; letter-spacing:0.1em; text-transform:uppercase; color:rgba(255,255,255,0.4); display:flex; align-items:center; gap:6px;">
            <span style="width:4px; height:4px; border-radius:50%; background:#C9A84C; opacity:0.7;"></span>2-Person Specialist Team
          </span>
        </div>
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:12px;">
          <?php foreach(['Full tile demolition & prep','Tile installation (all formats)','Shower conversion & glass enclosure','Vanity, sink & faucet install','Toilet replacement','Mirror & lighting upgrades','Flooring — tile or LVP','Painting & waterproofing'] as $item): ?>
            <div style="display:flex; align-items:center; gap:10px; font-family:'Inter',sans-serif; font-size:14px; color:rgba(255,255,255,0.65);">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="#C9A84C" style="flex-shrink:0;"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <?php echo $item; ?>
            </div>
          <?php endforeach; ?>
        </div>
        <div style="margin-top:36px; padding-top:28px; border-top:1px solid rgba(255,255,255,0.08);">
          <p style="font-family:'Inter',sans-serif; font-size:13px; color:rgba(255,255,255,0.35); margin:0; line-height:1.65;">
            Scope, materials, and bathroom size affect final investment. Your estimate is <strong style="color:rgba(255,255,255,0.55);">free and obligation-free.</strong>
          </p>
          <a href="/contact" style="display:inline-flex; align-items:center; gap:10px; margin-top:20px; background:#C9A84C; color:#0B1F33; font-family:'Montserrat',sans-serif; font-size:12px; font-weight:800; letter-spacing:0.12em; text-transform:uppercase; text-decoration:none; padding:0 32px; height:50px; border-radius:4px; transition:background 0.2s,transform 0.15s;" onmouseover="this.style.background='#DFB95A';this.style.transform='translateY(-1px)';" onmouseout="this.style.background='#C9A84C';this.style.transform='none';">
            Get My Free Estimate
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ BEFORE / AFTER GALLERY ═══════════════════════════════════════════════ -->
<section style="background:#FDF8EC; padding:96px 0;">
  <div style="max-width:1280px; margin:0 auto; padding:0 24px;">
    <div style="text-align:center; margin-bottom:52px;" class="br-fade-up">
      <div style="display:inline-flex; align-items:center; gap:12px; margin-bottom:16px;">
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
        <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">Real Projects. Real Results.</span>
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
      </div>
      <h2 style="font-family:'Playfair Display',serif; font-size:clamp(1.8rem,3.5vw,2.6rem); font-weight:900; color:#0B1F33; line-height:1.2;">
        Bathroom Renovations<br>Across Maryland.
      </h2>
      <p style="font-family:'Inter',sans-serif; font-size:14px; color:#2C2C2C; opacity:0.5; margin-top:12px;">Drag the slider left or right to reveal each transformation.</p>
    </div>
    <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:28px;" class="br-ba-grid">
      <?php
      $projects = [
        ['label'=>'Bathroom Renovation', 'location'=>'Ellicott City, MD','before'=>'/wp-content/uploads/bathroom-ellicott-before.jpg', 'after'=>'/wp-content/uploads/bathroom-ellicott-after.jpg'],
        ['label'=>'Master Bath Remodel', 'location'=>'Potomac, MD',      'before'=>'/wp-content/uploads/bathroom-potomac-before.jpg',  'after'=>'/wp-content/uploads/bathroom-potomac-after.jpg'],
        ['label'=>'Shower Conversion',   'location'=>'Columbia, MD',     'before'=>'/wp-content/uploads/bathroom-columbia-before.jpg', 'after'=>'/wp-content/uploads/bathroom-columbia-after.jpg'],
      ];
      foreach ($projects as $idx => $p): ?>
        <div>
          <div class="br-ba-wrap" data-ba="<?php echo $idx; ?>">
            <img src="<?php echo $p['before']; ?>" alt="Before — <?php echo esc_attr($p['label']); ?>" style="position:absolute; inset:0; width:100%; height:100%; object-fit:cover;" onerror="this.parentElement.style.background='#4A6F8A'"/>
            <span style="position:absolute; top:12px; left:12px; z-index:5; font-family:'Montserrat',sans-serif; font-size:9px; font-weight:700; letter-spacing:0.15em; text-transform:uppercase; background:rgba(11,31,51,0.82); color:rgba(255,255,255,0.8); padding:4px 10px; border-radius:3px;">Before</span>
            <div class="br-ba-clip">
              <img src="<?php echo $p['after']; ?>" class="br-ba-after-img" alt="After — <?php echo esc_attr($p['label']); ?>" style="position:absolute; top:0; left:0; height:100%; object-fit:cover;" onerror="this.parentElement.parentElement.style.background='#C9A84C'"/>
            </div>
            <span style="position:absolute; top:12px; right:12px; z-index:5; font-family:'Montserrat',sans-serif; font-size:9px; font-weight:700; letter-spacing:0.15em; text-transform:uppercase; background:rgba(201,168,76,0.92); color:#0B1F33; padding:4px 10px; border-radius:3px;">After</span>
            <div class="br-ba-handle">
              <div class="br-ba-knob">
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
    <div style="text-align:center; margin-top:48px;">
      <a href="/our-work" style="display:inline-flex; align-items:center; gap:8px; font-family:'Montserrat',sans-serif; font-size:12px; font-weight:700; letter-spacing:0.1em; text-transform:uppercase; color:#0B1F33; text-decoration:none; border-bottom:2px solid #C9A84C; padding-bottom:4px; transition:color 0.2s;" onmouseover="this.style.color='#C9A84C';" onmouseout="this.style.color='#0B1F33';">
        View Our Full Portfolio <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>
  </div>
</section>

<!-- ═══ TRUST CALLOUT ════════════════════════════════════════════════════════ -->
<section style="background:#F7F7F5; padding:96px 0;">
  <div style="max-width:1280px; margin:0 auto; padding:0 24px;">
    <div style="max-width:880px; margin:0 auto;">
      <div style="text-align:center; margin-bottom:52px;" class="br-fade-up">
        <div style="display:inline-flex; align-items:center; gap:12px; margin-bottom:16px;">
          <div style="width:36px; height:1px; background:#C9A84C;"></div>
          <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">Why Homeowners Choose Us</span>
          <div style="width:36px; height:1px; background:#C9A84C;"></div>
        </div>
        <h2 style="font-family:'Playfair Display',serif; font-size:clamp(1.8rem,3.5vw,2.6rem); font-weight:900; color:#0B1F33; line-height:1.2;">
          Why Maryland Homeowners<br>Trust Us With Their Bathroom.
        </h2>
      </div>
      <div style="display:grid; grid-template-columns:1fr 1fr; gap:16px;" class="br-trust-grid">
        <?php
        $trust = [
          ['icon'=>'M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-1 14l-3-3 1.41-1.41L11 12.17l4.59-4.58L17 9l-6 6z','title'=>'MHIC #154361 — Licensed & Insured','body'=>'Your home is protected. We carry full general liability insurance and are licensed by the state of Maryland.'],
          ['icon'=>'M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14H9V8h2v8zm4 0h-2V8h2v8z','title'=>'Clean Jobsite Protocol — Daily Cleanup','body'=>'We protect every surface before we start and leave your home cleaner than we found it at the end of each workday.'],
          ['icon'=>'M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z','title'=>'Fixed Timeline — We Finish What We Start','body'=>'You receive a defined project schedule before we begin. No open-ended timelines. We commit to a completion date and hold to it.'],
          ['icon'=>'M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm-9 4H9v2H7V8H5V6h6v2zm4 8c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3-8h-2v2h-2V6h4v2z','title'=>'Locally Sourced Premium Materials','body'=>'We don\'t use imported, low-durability products. Every tile, fixture, and finish is selected for longevity and craftsmanship.'],
          ['icon'=>'M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11zm-5-8H9v2h4v-2zm2-4H9v2h6V8z','title'=>'Transparent Pricing — No Hidden Costs','body'=>'Your written estimate covers everything. No surprise charges mid-project. What we quote is what you pay.'],
          ['icon'=>'M16 11c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 3-1.34 3-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z','title'=>'2-Person Specialist Team','body'=>'Every bathroom is handled by the same focused 2-person crew start to finish — no rotating strangers in your home.'],
        ];
        foreach ($trust as $t): ?>
          <div class="br-trust-item" style="display:flex; gap:16px; padding:24px 22px; border-radius:8px; border-left:3px solid #C9A84C; background:#FDF8EC; border-top:1px solid rgba(201,168,76,0.15); border-right:1px solid rgba(201,168,76,0.15); border-bottom:1px solid rgba(201,168,76,0.15);">
            <div style="width:40px; height:40px; border-radius:8px; background:rgba(201,168,76,0.12); display:flex; align-items:center; justify-content:center; flex-shrink:0;">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="#C9A84C"><path d="<?php echo $t['icon']; ?>"/></svg>
            </div>
            <div>
              <p style="font-family:'Montserrat',sans-serif; font-size:12px; font-weight:800; letter-spacing:0.05em; color:#0B1F33; margin:0 0 8px;"><?php echo $t['title']; ?></p>
              <p style="font-family:'Inter',sans-serif; font-size:13px; color:#2C2C2C; opacity:0.68; line-height:1.65; margin:0;"><?php echo $t['body']; ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ═══ TESTIMONIAL ═══════════════════════════════════════════════════════════ -->
<section style="background:#0B1F33; padding:80px 0;">
  <div style="max-width:960px; margin:0 auto; padding:0 24px;">
    <div style="text-align:center; margin-bottom:40px;" class="br-fade-up">
      <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">What Homeowners Say</span>
    </div>
    <div style="display:grid; grid-template-columns:1fr 1fr; gap:20px;" class="br-trust-grid">
      <?php
      $testimonials = [
        ['q'=>'Our master bathroom went from a 1990s eyesore to something out of a magazine. The tile work is flawless, the frameless glass enclosure is stunning, and they finished in exactly one week as promised.','name'=>'Marcus & Diana T.','city'=>'Columbia, MD'],
        ['q'=>'I was nervous about having contractors in my home for an extended time. Their daily cleanup was unbelievable — every evening the space was spotless. The end result completely exceeded our expectations.','name'=>'Rachel F.','city'=>'Bethesda, MD'],
      ];
      foreach ($testimonials as $t): ?>
        <div class="br-testimonial" style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.08); border-radius:8px; padding:32px 28px;">
          <div style="display:flex; gap:3px; margin-bottom:18px;"><?php for($i=0;$i<5;$i++): ?><svg width="16" height="16" viewBox="0 0 20 20" fill="#C9A84C"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><?php endfor; ?></div>
          <blockquote style="font-family:'Playfair Display',serif; font-size:15px; font-style:italic; color:rgba(255,255,255,0.8); line-height:1.78; margin:0 0 20px;">"<?php echo $t['q']; ?>"</blockquote>
          <div style="display:flex; align-items:center; justify-content:space-between; padding-top:16px; border-top:1px solid rgba(255,255,255,0.07);">
            <div>
              <p style="font-family:'Montserrat',sans-serif; font-size:12px; font-weight:700; color:#fff; margin:0;"><?php echo $t['name']; ?></p>
              <p style="font-family:'Inter',sans-serif; font-size:11px; color:rgba(255,255,255,0.38); margin:3px 0 0;"><?php echo $t['city']; ?></p>
            </div>
            <span style="font-family:'Montserrat',sans-serif; font-size:9px; font-weight:700; letter-spacing:0.1em; text-transform:uppercase; background:rgba(201,168,76,0.12); color:#C9A84C; padding:4px 10px; border-radius:3px; border:1px solid rgba(201,168,76,0.2);">Bathroom Remodel</span>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ FINAL CTA BAR ════════════════════════════════════════════════════════ -->
<section style="background:#C9A84C; padding:56px 24px;">
  <div style="max-width:1280px; margin:0 auto; display:flex; align-items:center; justify-content:space-between; gap:32px; flex-wrap:wrap;" class="br-cta-flex">
    <div>
      <p style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.22em; text-transform:uppercase; color:rgba(11,31,51,0.55); margin:0 0 8px;">Ready to Start?</p>
      <h2 style="font-family:'Playfair Display',serif; font-size:clamp(1.6rem,3vw,2.4rem); font-weight:900; color:#0B1F33; line-height:1.15; margin:0 0 6px;">Ready to Elevate Your Bathroom?</h2>
      <p style="font-family:'Inter',sans-serif; font-size:14px; color:rgba(11,31,51,0.65); margin:0;">Average response: 24–48 hours. No pressure. Just clarity.</p>
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
  document.querySelectorAll('.br-ba-wrap[data-ba]').forEach(function (c) {
    var clip     = c.querySelector('.br-ba-clip')
    var afterImg = c.querySelector('.br-ba-after-img')
    var handle   = c.querySelector('.br-ba-handle')
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

  document.querySelectorAll('.br-fade-up').forEach(function (el) { io.observe(el) })
})
</script>

<?php get_footer(); ?>