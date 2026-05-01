<?php
/*
 * Template Name: Contact
 * Template Post Type: page
 */

get_header(); ?>

<style>
.cp-fade-up { opacity:0; transform:translateY(20px); transition:opacity 0.6s ease, transform 0.6s ease; }
.cp-fade-up.visible { opacity:1; transform:translateY(0); }

@media (max-width:640px) {
  .cp-trust-bar { flex-direction:column !important; align-items:flex-start !important; gap:12px !important; }
}
</style>

<!-- ═══ HERO — Minimal, no distractions ══════════════════════════════════════ -->
<section style="background:#d1d5db; padding:80px 0 56px; border-bottom:1px solid rgba(11,31,51,0.08);">
  <div style="max-width:1280px; margin:0 auto; padding:0 24px; text-align:center;" class="cp-fade-up">
    <div style="display:inline-flex; align-items:center; gap:12px; margin-bottom:20px;">
      <div style="width:36px; height:1px; background:#C9A84C;"></div>
      <span style="font-family:'Amino',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">Free In-Home Estimate</span>
      <div style="width:36px; height:1px; background:#C9A84C;"></div>
    </div>
    <h1 style="font-family:'AkzidenzGrotesk',sans-serif; font-size:clamp(2rem,5vw,3.6rem); font-weight:900; color:#0d1b2a; line-height:1.1; margin-bottom:18px; letter-spacing:-0.02em;">
      Let's Talk About Your Home.
    </h1>
    <p style="font-family:'Amino',sans-serif; font-size:clamp(1rem,2vw,1.1rem); color:#2f2f2f; opacity:0.6; max-width:580px; margin:0 auto; line-height:1.75;">
      Request a free in-home estimate. No pressure — just an honest conversation about what your home needs and what it will cost.
    </p>
  </div>
</section>

<!-- ═══ CONTACT FORM (React) ══════════════════════════════════════════════════ -->
<?php
// Config passed to ContactForm via data attribute — keeps React component generic
$contact_config = json_encode([
  'headline'     => "Let's Talk About",
  'headlineGold' => "Your Home.",
  'sub'          => "Request a free in-home estimate — no pressure, no obligation.\n\nWe'll review your request and reach out within 24–48 hours. This is a real conversation with our team, not an automated funnel. We want to understand your project before we recommend anything.",
  'phones'       => [
    ['label' => 'Main Line',     'number' => '(301) 300-4172', 'href' => 'tel:+13013004172'],
    ['label' => 'Secondary Line', 'number' => '(301) 213-1421', 'href' => 'tel:+13012131421'],
  ],
  'email'        => 'info@tikalempirellc.com',
  'address'      => "3103 Fallston Ave.\nBeltsville, MD 20705",
  'whatsapp'     => 'https://wa.me/13013004172',
  'googleReviews'=> 'https://g.page/r/YOUR_GOOGLE_PLACE_ID/review',
]);
?>
<div style="background:#0d1b2a;">
  <div id="contact-form-root" data-cf-config='<?php echo esc_attr($contact_config); ?>'></div>
</div>

<!-- ═══ RESPONSE PROMISE ══════════════════════════════════════════════════════ -->
<section style="background:#d1d5db; padding:40px 0; border-top:1px solid rgba(11,31,51,0.07);">
  <div style="max-width:680px; margin:0 auto; padding:0 24px; text-align:center;" class="cp-fade-up">
    <p style="font-family:'AkzidenzGrotesk',sans-serif; font-size:15px; font-style:italic; color:#2f2f2f; opacity:0.6; line-height:1.8; margin:0;">
      "We'll review your request and reach out within 24–48 hours. This is a real conversation with our team — not an automated funnel. We want to understand your project before we recommend anything."
    </p>
    <span style="display:inline-block; margin-top:14px; font-family:'Amino',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.12em; text-transform:uppercase; color:#C9A84C;">— Cristian, Founder · Tikal Empire LLC</span>
  </div>
</section>

<!-- ═══ BOTTOM TRUST BAR ══════════════════════════════════════════════════════ -->
<div style="background:#060d18; border-top:1px solid rgba(201,168,76,0.1);">
  <div style="max-width:1280px; margin:0 auto; padding:18px 24px; display:flex; align-items:center; justify-content:center; gap:24px; flex-wrap:wrap;" class="cp-trust-bar">
    <?php
    $items = [
      ['icon'=>'M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-1 14l-3-3 1.41-1.41L11 12.17l4.59-4.58L17 9l-6 6z', 'text'=>'MHIC #154361'],
      ['icon'=>'M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-1 14l-3-3 1.41-1.41L11 12.17l4.59-4.58L17 9l-6 6z', 'text'=>'Licensed & Insured'],
      ['icon'=>'M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z', 'text'=>'Serving Maryland — 50 Miles'],
      ['icon'=>'M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z', 'text'=>'★★★★★ Google Reviews'],
    ];
    foreach ($items as $idx => $item): ?>
      <?php if ($idx > 0): ?>
        <span style="color:rgba(201,168,76,0.2); font-size:16px; line-height:1;">·</span>
      <?php endif; ?>
      <div style="display:flex; align-items:center; gap:7px; white-space:nowrap;">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="#C9A84C"><path d="<?php echo $item['icon']; ?>"/></svg>
        <span style="font-family:'Amino',sans-serif; font-size:11px; font-weight:600; letter-spacing:0.07em; color:rgba(255,255,255,0.58);"><?php echo $item['text']; ?></span>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible')
        io.unobserve(entry.target)
      }
    })
  }, { threshold: 0.1 })
  document.querySelectorAll('.cp-fade-up').forEach(function (el) { io.observe(el) })
})
</script>

<?php get_footer(); ?>