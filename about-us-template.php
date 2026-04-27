<?php
/*
 * Template Name: About Us
 * Template Post Type: page
 */

get_header(); ?>

<style>
.au-fade-up { opacity:0; transform:translateY(24px); transition:opacity 0.6s ease, transform 0.6s ease; }
.au-fade-up.visible { opacity:1; transform:translateY(0); }
.au-fade-left { opacity:0; transform:translateX(-28px); transition:opacity 0.65s ease, transform 0.65s ease; }
.au-fade-left.visible { opacity:1; transform:translateX(0); }
.au-fade-right { opacity:0; transform:translateX(28px); transition:opacity 0.65s ease, transform 0.65s ease; }
.au-fade-right.visible { opacity:1; transform:translateX(0); }

.au-value-card { transition:box-shadow 0.25s, transform 0.25s, border-color 0.25s; }
.au-value-card:hover { box-shadow:0 12px 36px rgba(11,31,51,0.1); transform:translateY(-4px); border-color:rgba(201,168,76,0.4) !important; }

.au-cred-card { transition:box-shadow 0.25s, transform 0.25s, border-color 0.25s, background 0.25s; }
.au-cred-card:hover { box-shadow:0 14px 40px rgba(0,0,0,0.3); transform:translateY(-4px); border-color:rgba(201,168,76,0.45) !important; background:rgba(201,168,76,0.07) !important; }

.au-photo-stack { position:relative; }
.au-photo-overlap { position:absolute; bottom:-28px; right:-20px; width:55%; border:4px solid #F7F7F5; border-radius:8px; overflow:hidden; box-shadow:0 12px 40px rgba(0,0,0,0.25); }

@media (max-width:1024px) {
  .au-origin-grid  { grid-template-columns:1fr !important; }
  .au-team-grid    { grid-template-columns:1fr !important; }
  .au-cred-grid    { grid-template-columns:repeat(3,1fr) !important; }
  .au-photo-overlap { position:relative; bottom:auto; right:auto; width:100%; border:none; box-shadow:none; margin-top:14px; }
  .au-photo-stack  { padding-bottom:0 !important; }
}
@media (max-width:768px) {
  .au-values-grid  { grid-template-columns:1fr !important; }
  .au-cred-grid    { grid-template-columns:repeat(2,1fr) !important; }
  .au-cta-flex     { flex-direction:column !important; text-align:center !important; }
}
@media (max-width:480px) {
  .au-cred-grid    { grid-template-columns:1fr !important; }
}
</style>

<!-- ═══ HERO ══════════════════════════════════════════════════════════════════ -->
<section style="position:relative; min-height:80vh; display:flex; align-items:center; background-image:url('/wp-content/uploads/about-hero-cristian.jpg'); background-size:cover; background-position:center top;">
  <div style="position:absolute; inset:0; background:linear-gradient(105deg, rgba(11,31,51,0.92) 0%, rgba(11,31,51,0.7) 50%, rgba(11,31,51,0.38) 100%);"></div>
  <div style="position:relative; z-index:2; max-width:1280px; margin:0 auto; padding:80px 24px 60px; width:100%;">
    <div style="max-width:700px;">
      <div style="display:inline-flex; align-items:center; gap:12px; margin-bottom:24px;">
        <div style="width:36px; height:2px; background:#C9A84C;"></div>
        <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">About Tikal Empire LLC</span>
      </div>
      <h1 style="font-family:'Playfair Display',serif; font-size:clamp(2.2rem,6vw,4.4rem); font-weight:900; color:#fff; line-height:1.08; letter-spacing:-0.02em; margin-bottom:24px;">
        Built on Roots.<br><span style="color:#C9A84C;">Driven by Craftsmanship.</span>
      </h1>
      <p style="font-family:'Inter',sans-serif; font-size:clamp(1rem,2vw,1.15rem); color:rgba(255,255,255,0.75); line-height:1.78; max-width:580px; margin-bottom:0;">
        Tikal Empire LLC — Maryland's licensed home remodeling specialists, founded on the precision and enduring quality of the Maya civilization that inspired our name.
      </p>
      <!-- Quick credential row -->
      <div style="display:flex; gap:20px; flex-wrap:wrap; margin-top:40px; padding-top:32px; border-top:1px solid rgba(255,255,255,0.1);">
        <?php foreach(['MHIC #154361','Licensed & Insured','5 Specialists','Founded in Maryland'] as $b): ?>
          <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.12em; text-transform:uppercase; color:rgba(255,255,255,0.45); display:flex; align-items:center; gap:7px;">
            <span style="width:5px; height:5px; border-radius:50%; background:#C9A84C; flex-shrink:0;"></span><?php echo $b; ?>
          </span>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ═══ ORIGIN STORY ══════════════════════════════════════════════════════════ -->
<section style="background:#F7F7F5; padding:104px 0;">
  <div style="max-width:1280px; margin:0 auto; padding:0 24px; display:grid; grid-template-columns:1fr 1fr; gap:88px; align-items:center;" class="au-origin-grid">

    <!-- Copy -->
    <div class="au-fade-left">
      <div style="display:flex; align-items:center; gap:12px; margin-bottom:20px;">
        <div style="width:36px; height:2px; background:#C9A84C;"></div>
        <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">Our Origin</span>
      </div>
      <h2 style="font-family:'Playfair Display',serif; font-size:clamp(2rem,4vw,3rem); font-weight:900; color:#0B1F33; line-height:1.1; margin-bottom:32px;">
        Why Tikal?
      </h2>
      <div style="display:flex; flex-direction:column; gap:20px; font-family:'Inter',sans-serif; font-size:16px; color:#2C2C2C; line-height:1.85;">
        <p style="margin:0;">Tikal is one of the greatest cities ever built — a Maya civilization in Guatemala that constructed temples, palaces, and structures of extraordinary precision that have <strong style="color:#0B1F33;">stood for over a thousand years.</strong></p>
        <p style="margin:0;">Our founder Cristian carries those roots. And when he built this company, he built it on the same principles: precision, quality that lasts, and respect for the craft.</p>
        <p style="margin:0;">Tikal Empire didn't start as a business plan. It started with a commitment — to be the contractor that Maryland homeowners could actually trust. The one who shows up, communicates clearly, finishes what they start, and delivers a result worth being proud of.</p>
        <p style="margin:0;">Today, with MHIC license #154361, active GL insurance, and a team of five specialists, <strong style="color:#0B1F33;">that commitment is a system — not just a promise.</strong></p>
      </div>
      <!-- Quote pull -->
      <blockquote style="margin:36px 0 0; padding:24px 24px 24px 28px; border-left:4px solid #C9A84C; background:#FDF8EC; border-radius:0 8px 8px 0;">
        <p style="font-family:'Playfair Display',serif; font-size:1.15rem; font-style:italic; color:#0B1F33; line-height:1.65; margin:0 0 14px;">"The same civilization that built temples meant to outlast millennia — that's the standard we bring to every kitchen, bathroom, and floor we touch."</p>
        <cite style="font-family:'Montserrat',sans-serif; font-size:11px; font-weight:700; letter-spacing:0.1em; text-transform:uppercase; color:#C9A84C; font-style:normal;">— Cristian, Founder · Tikal Empire LLC</cite>
      </blockquote>
    </div>

    <!-- Photo stack: Tikal ruins + Cristian modern -->
    <div class="au-fade-right au-photo-stack" style="padding-bottom:56px;">
      <!-- Main photo: Tikal ruins -->
      <div style="border-radius:10px; overflow:hidden; aspect-ratio:4/5; background:linear-gradient(135deg,#0B1F33,#1a3550); position:relative;">
        <img src="/wp-content/uploads/tikal-ruins-guatemala.jpg" alt="Tikal ruins — ancient Maya city in Guatemala, inspiration for Tikal Empire" style="width:100%; height:100%; object-fit:cover; display:block;" onerror="this.style.display='none'"/>
        <div style="position:absolute; bottom:0; left:0; right:0; padding:18px 20px; background:linear-gradient(transparent,rgba(11,31,51,0.9));">
          <p style="font-family:'Montserrat',sans-serif; font-size:9px; font-weight:700; letter-spacing:0.18em; text-transform:uppercase; color:#C9A84C; margin:0 0 3px;">Tikal, Guatemala</p>
          <p style="font-family:'Inter',sans-serif; font-size:11px; color:rgba(255,255,255,0.55); margin:0;">Ancient Maya civilization — built to last millennia</p>
        </div>
      </div>
      <!-- Overlapping photo: Cristian modern -->
      <div class="au-photo-overlap">
        <img src="/wp-content/uploads/cristian-modern-project.jpg" alt="Cristian — Founder of Tikal Empire in a completed renovation space" style="width:100%; display:block; aspect-ratio:4/3; object-fit:cover;" onerror="this.style.background='#4A6F8A'"/>
        <div style="padding:12px 14px; background:#0B1F33;">
          <p style="font-family:'Montserrat',sans-serif; font-size:9px; font-weight:700; letter-spacing:0.15em; text-transform:uppercase; color:#C9A84C; margin:0 0 2px;">Cristian</p>
          <p style="font-family:'Inter',sans-serif; font-size:11px; color:rgba(255,255,255,0.5); margin:0;">Founder · Tikal Empire LLC · Maryland</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ VALUES BLOCK ══════════════════════════════════════════════════════════ -->
<section style="background:#FDF8EC; padding:96px 0;">
  <div style="max-width:1280px; margin:0 auto; padding:0 24px;">
    <div style="text-align:center; margin-bottom:56px;" class="au-fade-up">
      <div style="display:inline-flex; align-items:center; gap:12px; margin-bottom:16px;">
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
        <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">Our Values</span>
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
      </div>
      <h2 style="font-family:'Playfair Display',serif; font-size:clamp(1.8rem,3.5vw,2.6rem); font-weight:900; color:#0B1F33; line-height:1.2;">
        What Drives Everything<br>We Do.
      </h2>
    </div>
    <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:20px;" class="au-values-grid">
      <?php
      $values = [
        ['icon'=>'M16 11c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 3-1.34 3-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z',
          'title'=>'Trust','color'=>'#C9A84C',
          'body'=>"You're inviting us into your home. We earn that right every single day — through our behavior, our communication, and the results we deliver.",
          'detail'=>'We operate like guests in your home: with respect, care, and accountability.'],
        ['icon'=>'M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z',
          'title'=>'Craftsmanship','color'=>'#C9A84C',
          'body'=>'We use premium, locally sourced materials and apply the kind of attention to detail that shows in the finished result — and still shows 10 years later.',
          'detail'=>'Materials that last. Joints that hold. Grout lines that stay clean.'],
        ['icon'=>'M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67V7z',
          'title'=>'Punctuality','color'=>'#C9A84C',
          'body'=>'We arrive when we say. We finish when we promise. Your timeline is our commitment — not a guideline we adjust around our convenience.',
          'detail'=>'Every project has a defined schedule. We hold to it.'],
        ['icon'=>'M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11zm-5-8H9v2h4v-2zm2-4H9v2h6V8z',
          'title'=>'Integrity','color'=>'#C9A84C',
          'body'=>'Licensed. Insured. Transparent pricing. We operate by the rules because your investment deserves that protection — and because there are no shortcuts in our vocabulary.',
          'detail'=>'MHIC #154361 · GL Insurance active · Written estimates always.'],
        ['icon'=>'M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z',
          'title'=>'Inclusion','color'=>'#C9A84C',
          'body'=>'We serve every Maryland homeowner, regardless of background. And we actively build opportunities for people in our community — because strong communities are built one home at a time.',
          'detail'=>'Every homeowner deserves the same quality and respect.'],
        ['icon'=>'M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-1 14l-3-3 1.41-1.41L11 12.17l4.59-4.58L17 9l-6 6z',
          'title'=>'Accountability','color'=>'#C9A84C',
          'body'=>'We own every outcome — good or otherwise. If something is not right, we come back and make it right. No excuses, no disappearing acts.',
          'detail'=>"When we say 'done,' it means done right."],
      ];
      foreach ($values as $i => $v): ?>
        <div class="au-value-card au-fade-up" data-delay="<?php echo $i * 80; ?>" style="background:#fff; border-radius:10px; padding:32px 26px; border:1px solid rgba(11,31,51,0.08); display:flex; flex-direction:column; gap:16px;">
          <div style="display:flex; align-items:center; gap:14px;">
            <div style="width:48px; height:48px; border-radius:10px; background:rgba(201,168,76,0.1); display:flex; align-items:center; justify-content:center; flex-shrink:0;">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="#C9A84C"><path d="<?php echo $v['icon']; ?>"/></svg>
            </div>
            <h3 style="font-family:'Montserrat',sans-serif; font-size:13px; font-weight:800; letter-spacing:0.08em; text-transform:uppercase; color:#0B1F33; margin:0;"><?php echo $v['title']; ?></h3>
          </div>
          <p style="font-family:'Inter',sans-serif; font-size:14px; color:#2C2C2C; line-height:1.75; margin:0; opacity:0.8;"><?php echo $v['body']; ?></p>
          <p style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:600; letter-spacing:0.1em; color:#C9A84C; margin:0; padding-top:12px; border-top:1px solid rgba(11,31,51,0.07);"><?php echo $v['detail']; ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ CREDENTIALS BLOCK ═════════════════════════════════════════════════════ -->
<section style="background:#0B1F33; padding:80px 0;">
  <div style="max-width:1280px; margin:0 auto; padding:0 24px;">
    <div style="text-align:center; margin-bottom:48px;" class="au-fade-up">
      <div style="display:inline-flex; align-items:center; gap:12px; margin-bottom:16px;">
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
        <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">Credentials</span>
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
      </div>
      <h2 style="font-family:'Playfair Display',serif; font-size:clamp(1.8rem,3.5vw,2.4rem); font-weight:900; color:#fff; line-height:1.2;">
        Licensed. Insured. Accountable.
      </h2>
    </div>
    <div style="display:grid; grid-template-columns:repeat(5,1fr); gap:16px;" class="au-cred-grid">
      <?php
      $creds = [
        ['icon'=>'M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-1 14l-3-3 1.41-1.41L11 12.17l4.59-4.58L17 9l-6 6z',
          'val'=>'MHIC #154361','sub'=>'Maryland Home Improvement Commission Licensed'],
        ['icon'=>'M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5v-9l6 4.5-6 4.5z',
          'val'=>'GL Insurance','sub'=>'General Liability — Active on every project'],
        ['icon'=>'M16 11c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 3-1.34 3-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z',
          'val'=>'5 Specialists','sub'=>'Multi-trade team — kitchen, bath & flooring'],
        ['icon'=>'M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z',
          'val'=>'50-Mile Radius','sub'=>'Howard · Montgomery · Frederick · PG · Anne Arundel'],
        ['icon'=>'M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z',
          'val'=>'12–16 Projects','sub'=>'Per month — consistent capacity and delivery'],
      ];
      foreach ($creds as $i => $c): ?>
        <div class="au-cred-card au-fade-up" data-delay="<?php echo $i * 80; ?>" style="background:rgba(255,255,255,0.04); border:1px solid rgba(201,168,76,0.18); border-radius:10px; padding:28px 20px; text-align:center; display:flex; flex-direction:column; align-items:center; gap:14px;">
          <div style="width:52px; height:52px; border-radius:12px; background:rgba(201,168,76,0.1); border:1px solid rgba(201,168,76,0.2); display:flex; align-items:center; justify-content:center;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="#C9A84C"><path d="<?php echo $c['icon']; ?>"/></svg>
          </div>
          <div>
            <p style="font-family:'Playfair Display',serif; font-size:1rem; font-weight:700; color:#C9A84C; margin:0 0 6px; line-height:1.2;"><?php echo $c['val']; ?></p>
            <p style="font-family:'Inter',sans-serif; font-size:11px; color:rgba(255,255,255,0.42); margin:0; line-height:1.5;"><?php echo $c['sub']; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ TEAM BLOCK ════════════════════════════════════════════════════════════ -->
<section style="background:#fff; padding:96px 0;">
  <div style="max-width:1280px; margin:0 auto; padding:0 24px;">
    <div style="text-align:center; margin-bottom:64px;" class="au-fade-up">
      <div style="display:inline-flex; align-items:center; gap:12px; margin-bottom:16px;">
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
        <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">Our Team</span>
        <div style="width:36px; height:1px; background:#C9A84C;"></div>
      </div>
      <h2 style="font-family:'Playfair Display',serif; font-size:clamp(1.8rem,3.5vw,2.6rem); font-weight:900; color:#0B1F33; line-height:1.2;">
        The People Behind<br>Every Project.
      </h2>
    </div>

    <!-- Founder card — full featured -->
    <div style="display:grid; grid-template-columns:2fr 3fr; gap:72px; align-items:center; max-width:1000px; margin:0 auto 72px;" class="au-team-grid">
      <div class="au-fade-left">
        <div style="border-radius:10px; overflow:hidden; aspect-ratio:3/4; background:linear-gradient(135deg,#0B1F33,#4A6F8A); position:relative;">
          <img src="/wp-content/uploads/cristian-headshot.jpg" alt="Cristian — Founder & Owner of Tikal Empire LLC" style="width:100%; height:100%; object-fit:cover; object-position:top; display:block;" onerror="this.style.display='none'"/>
          <div style="position:absolute; top:16px; left:16px; background:#C9A84C; color:#0B1F33; font-family:'Montserrat',sans-serif; font-size:9px; font-weight:800; letter-spacing:0.12em; text-transform:uppercase; padding:5px 12px; border-radius:3px;">Founder & Owner</div>
        </div>
      </div>
      <div class="au-fade-right">
        <p style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.22em; text-transform:uppercase; color:#C9A84C; margin:0 0 10px;">Tikal Empire LLC</p>
        <h3 style="font-family:'Playfair Display',serif; font-size:clamp(1.8rem,3vw,2.6rem); font-weight:900; color:#0B1F33; margin:0 0 24px; line-height:1.1;">Cristian</h3>
        <div style="display:flex; flex-direction:column; gap:16px; font-family:'Inter',sans-serif; font-size:16px; color:#2C2C2C; line-height:1.82;">
          <p style="margin:0;">Cristian founded Tikal Empire with one conviction: that Maryland homeowners deserve a contractor who actually delivers what they promise. Drawing on his Guatemalan heritage and the legacy of the ancient Maya builders, he built a company around the same principles that built Tikal — precision, durability, and respect for the craft.</p>
          <p style="margin:0;">With years of hands-on remodeling experience and a team of five multi-trade specialists, Cristian manages every project personally — from the first consultation to the final walk-through. He doesn't just oversee the work. He owns the outcome.</p>
          <p style="margin:0;"><em style="color:#0B1F33; font-style:italic;">"We don't move on until you're proud of what we built together."</em></p>
        </div>
        <div style="display:flex; gap:16px; flex-wrap:wrap; margin-top:32px;">
          <a href="tel:+13013004172" style="display:inline-flex; align-items:center; gap:8px; background:#C9A84C; color:#0B1F33; font-family:'Montserrat',sans-serif; font-size:11px; font-weight:800; letter-spacing:0.1em; text-transform:uppercase; text-decoration:none; padding:0 24px; height:48px; border-radius:4px; transition:background 0.2s;" onmouseover="this.style.background='#DFB95A';" onmouseout="this.style.background='#C9A84C';">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
            Call Cristian
          </a>
          <a href="/contact" style="display:inline-flex; align-items:center; gap:8px; background:transparent; color:#0B1F33; font-family:'Montserrat',sans-serif; font-size:11px; font-weight:700; letter-spacing:0.1em; text-transform:uppercase; text-decoration:none; padding:0 24px; height:48px; border-radius:4px; border:2px solid rgba(11,31,51,0.2); transition:border-color 0.2s, color 0.2s;" onmouseover="this.style.borderColor='#C9A84C';this.style.color='#C9A84C';" onmouseout="this.style.borderColor='rgba(11,31,51,0.2)';this.style.color='#0B1F33';">
            Request an Estimate
          </a>
        </div>
      </div>
    </div>

    <!-- Team photo -->
    <div class="au-fade-up" style="border-radius:10px; overflow:hidden; position:relative; max-width:900px; margin:0 auto;">
      <div style="aspect-ratio:16/7; background:linear-gradient(135deg,#0B1F33,#4A6F8A);">
        <img src="/wp-content/uploads/tikal-team-photo.jpg" alt="Tikal Empire team — five specialists on a completed Maryland remodeling project" style="width:100%; height:100%; object-fit:cover; display:block;" onerror="this.style.display='none'"/>
      </div>
      <div style="position:absolute; bottom:0; left:0; right:0; padding:24px 28px; background:linear-gradient(transparent,rgba(11,31,51,0.88)); display:flex; align-items:flex-end; justify-content:space-between; flex-wrap:wrap; gap:12px;">
        <div>
          <p style="font-family:'Playfair Display',serif; font-size:1.1rem; font-weight:700; color:#fff; margin:0;">The Tikal Empire Team</p>
          <p style="font-family:'Inter',sans-serif; font-size:12px; color:rgba(255,255,255,0.5); margin:4px 0 0;">5 multi-trade specialists · Maryland</p>
        </div>
        <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.14em; text-transform:uppercase; color:#C9A84C; border:1px solid rgba(201,168,76,0.35); padding:6px 14px; border-radius:4px;">MHIC #154361</span>
      </div>
    </div>
  </div>
</section>

<!-- ═══ FINAL CTA BAR ════════════════════════════════════════════════════════ -->
<section style="background:#C9A84C; padding:56px 24px;">
  <div style="max-width:1280px; margin:0 auto; display:flex; align-items:center; justify-content:space-between; gap:32px; flex-wrap:wrap;" class="au-cta-flex">
    <div>
      <p style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.22em; text-transform:uppercase; color:rgba(11,31,51,0.55); margin:0 0 8px;">Work With Us</p>
      <h2 style="font-family:'Playfair Display',serif; font-size:clamp(1.6rem,3vw,2.4rem); font-weight:900; color:#0B1F33; line-height:1.15; margin:0 0 6px;">Ready to Work With a Team You Can Trust?</h2>
      <p style="font-family:'Inter',sans-serif; font-size:14px; color:rgba(11,31,51,0.65); margin:0;">Or call us directly: <strong>(301) 300-4172</strong></p>
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

<script>
document.addEventListener('DOMContentLoaded', function () {
  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        var el = entry.target
        setTimeout(function () { el.classList.add('visible') }, parseInt(el.dataset.delay || 0))
        io.unobserve(el)
      }
    })
  }, { threshold: 0.1 })

  document.querySelectorAll('.au-fade-up, .au-fade-left, .au-fade-right').forEach(function (el) { io.observe(el) })
})
</script>

<?php get_footer(); ?>