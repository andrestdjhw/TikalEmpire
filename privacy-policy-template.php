<?php
/*
 * Template Name: Privacy Policy
 * Template Post Type: page
 */

get_header(); ?>

<style>
.pp-fade-up { opacity:0; transform:translateY(20px); transition:opacity 0.55s ease, transform 0.55s ease; }
.pp-fade-up.visible { opacity:1; transform:translateY(0); }
.pp-section-link { color:#C9A84C; text-decoration:none; border-bottom:1px solid rgba(201,168,76,0.35); transition:border-color 0.2s; }
.pp-section-link:hover { border-color:#C9A84C; }
.pp-toc-link { display:block; font-family:'Inter',sans-serif; font-size:14px; color:rgba(11,31,51,0.6); text-decoration:none; padding:7px 0; border-bottom:1px solid rgba(11,31,51,0.06); transition:color 0.2s, padding-left 0.2s; }
.pp-toc-link:hover { color:#C9A84C; padding-left:6px; }
.pp-toc-link:last-child { border-bottom:none; }
</style>

<!-- ── Hero ──────────────────────────────────────────────────────────────────── -->
<section style="background:#0B1F33; padding:72px 0 56px;">
  <div style="max-width:860px; margin:0 auto; padding:0 24px;">
    <div style="display:inline-flex; align-items:center; gap:12px; margin-bottom:16px;">
      <div style="width:36px; height:2px; background:#C9A84C;"></div>
      <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">Legal</span>
    </div>
    <h1 style="font-family:'Playfair Display',serif; font-size:clamp(2rem,5vw,3.2rem); font-weight:900; color:#fff; line-height:1.1; margin-bottom:16px;">
      Privacy Policy
    </h1>
    <p style="font-family:'Inter',sans-serif; font-size:14px; color:rgba(255,255,255,0.38); margin:0;">
      Last updated: <?php echo date('F j, Y'); ?> &nbsp;·&nbsp; Tikal Empire LLC &nbsp;·&nbsp; MHIC #154361
    </p>
  </div>
</section>

<!-- ── Content ────────────────────────────────────────────────────────────────── -->
<section style="background:#F7F7F5; padding:72px 0 96px;">
  <div style="max-width:860px; margin:0 auto; padding:0 24px; display:grid; grid-template-columns:1fr 240px; gap:56px; align-items:start;" class="pp-layout">

    <!-- Main content -->
    <div>

      <!-- Intro -->
      <div style="background:#fff; border-radius:10px; padding:36px 40px; border:1px solid rgba(11,31,51,0.08); margin-bottom:32px;" class="pp-fade-up">
        <p style="font-family:'Inter',sans-serif; font-size:15px; color:#2C2C2C; line-height:1.82; margin:0;">
          Tikal Empire LLC ("we," "our," or "us") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, and safeguard information when you visit our website or contact us about our home remodeling services — kitchen remodeling, bathroom renovation, and flooring installation in Maryland.
        </p>
      </div>

      <?php
      $sections = [
        [
          'id'    => 'information-we-collect',
          'title' => '1. Information We Collect',
          'body'  => '
            <p>When you submit a request for a free estimate or contact us, we may collect:</p>
            <ul>
              <li><strong>Personal identifiers</strong> — full name, phone number, email address</li>
              <li><strong>Property information</strong> — city, ZIP code, project description</li>
              <li><strong>Communication records</strong> — messages you send through our contact form or by phone</li>
              <li><strong>Usage data</strong> — pages visited, time on site, browser type (collected automatically via cookies)</li>
            </ul>
            <p>We do not collect payment information directly. Any transactions are handled through secure third-party processors.</p>
          ',
        ],
        [
          'id'    => 'how-we-use',
          'title' => '2. How We Use Your Information',
          'body'  => '
            <p>We use the information you provide to:</p>
            <ul>
              <li>Respond to your estimate requests and schedule in-home consultations</li>
              <li>Communicate about your project — scope, timeline, and pricing</li>
              <li>Improve our website and service offerings</li>
              <li>Send occasional service updates or promotions (you may opt out at any time)</li>
              <li>Comply with legal obligations</li>
            </ul>
            <p>We will never sell, rent, or trade your personal information to third parties for marketing purposes.</p>
          ',
        ],
        [
          'id'    => 'cookies',
          'title' => '3. Cookies & Tracking',
          'body'  => '
            <p>Our website uses cookies and similar technologies to improve your browsing experience. These include:</p>
            <ul>
              <li><strong>Essential cookies</strong> — required for the site to function properly</li>
              <li><strong>Analytics cookies</strong> — help us understand how visitors use our site (e.g., Google Analytics)</li>
              <li><strong>reCAPTCHA</strong> — used on our contact form to prevent spam, governed by <a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer" class="pp-section-link">Google\'s Privacy Policy</a></li>
            </ul>
            <p>You can control cookies through your browser settings. Disabling certain cookies may affect site functionality.</p>
          ',
        ],
        [
          'id'    => 'third-parties',
          'title' => '4. Third-Party Services',
          'body'  => '
            <p>We use trusted third-party services to operate our website and deliver our services. These may include:</p>
            <ul>
              <li><strong>EmailJS</strong> — for processing contact form submissions</li>
              <li><strong>Google reCAPTCHA v2</strong> — for spam protection on our forms</li>
              <li><strong>Google Analytics</strong> — for anonymous website traffic analysis</li>
              <li><strong>WordPress</strong> — our website platform</li>
            </ul>
            <p>Each third-party service has its own privacy policy governing how they handle data. We encourage you to review their policies.</p>
          ',
        ],
        [
          'id'    => 'data-retention',
          'title' => '5. Data Retention',
          'body'  => '
            <p>We retain your personal information only for as long as necessary to fulfill the purposes outlined in this policy, or as required by law. Estimate request data is retained for up to 3 years for business record purposes. You may request deletion of your data at any time by contacting us directly.</p>
          ',
        ],
        [
          'id'    => 'your-rights',
          'title' => '6. Your Rights',
          'body'  => '
            <p>You have the right to:</p>
            <ul>
              <li>Request access to the personal information we hold about you</li>
              <li>Request correction of inaccurate information</li>
              <li>Request deletion of your personal information</li>
              <li>Opt out of marketing communications at any time</li>
              <li>File a complaint with the relevant data protection authority</li>
            </ul>
            <p>To exercise any of these rights, contact us at <a href="mailto:info@tikalempirellc.com" class="pp-section-link">info@tikalempirellc.com</a> or call <a href="tel:+13013004172" class="pp-section-link">(301) 300-4172</a>.</p>
          ',
        ],
        [
          'id'    => 'security',
          'title' => '7. Data Security',
          'body'  => '
            <p>We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure, and we cannot guarantee absolute security.</p>
          ',
        ],
        [
          'id'    => 'children',
          'title' => '8. Children\'s Privacy',
          'body'  => '
            <p>Our website and services are not directed to children under the age of 13. We do not knowingly collect personal information from children. If you believe a child has provided us with personal information, please contact us immediately.</p>
          ',
        ],
        [
          'id'    => 'changes',
          'title' => '9. Changes to This Policy',
          'body'  => '
            <p>We may update this Privacy Policy from time to time. When we do, we will revise the "Last updated" date at the top of this page. We encourage you to review this policy periodically. Continued use of our website after changes constitutes your acceptance of the updated policy.</p>
          ',
        ],
        [
          'id'    => 'contact',
          'title' => '10. Contact Us',
          'body'  => '
            <p>If you have questions or concerns about this Privacy Policy, please contact us:</p>
            <ul>
              <li><strong>Tikal Empire LLC</strong></li>
              <li>3103 Fallston Ave., Beltsville, MD 20705</li>
              <li><a href="tel:+13013004172" class="pp-section-link">(301) 300-4172</a></li>
              <li><a href="mailto:info@tikalempirellc.com" class="pp-section-link">info@tikalempirellc.com</a></li>
              <li>MHIC License #154361</li>
            </ul>
          ',
        ],
      ];

      foreach ($sections as $i => $s): ?>
        <div id="<?php echo $s['id']; ?>" style="background:#fff; border-radius:10px; padding:36px 40px; border:1px solid rgba(11,31,51,0.08); margin-bottom:16px; scroll-margin-top:100px;" class="pp-fade-up" data-delay="<?php echo min($i * 60, 300); ?>">
          <h2 style="font-family:'Playfair Display',serif; font-size:1.4rem; font-weight:700; color:#0B1F33; margin:0 0 18px; padding-bottom:14px; border-bottom:2px solid rgba(201,168,76,0.2);">
            <?php echo $s['title']; ?>
          </h2>
          <div style="font-family:'Inter',sans-serif; font-size:15px; color:#2C2C2C; line-height:1.82;">
            <?php echo $s['body']; ?>
          </div>
        </div>
      <?php endforeach; ?>

    </div><!-- /main -->

    <!-- Sidebar: TOC + contact card -->
    <div style="position:sticky; top:100px;" class="pp-sidebar">
      <!-- Table of contents -->
      <div style="background:#fff; border-radius:10px; padding:24px 24px; border:1px solid rgba(11,31,51,0.08); margin-bottom:16px;">
        <p style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.18em; text-transform:uppercase; color:#C9A84C; margin:0 0 16px;">
          Contents
        </p>
        <?php foreach ($sections as $s): ?>
          <a href="#<?php echo $s['id']; ?>" class="pp-toc-link"><?php echo $s['title']; ?></a>
        <?php endforeach; ?>
      </div>
      <!-- Contact card -->
      <div style="background:#0B1F33; border-radius:10px; padding:24px; border:1px solid rgba(201,168,76,0.15);">
        <p style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.15em; text-transform:uppercase; color:#C9A84C; margin:0 0 10px;">Questions?</p>
        <p style="font-family:'Inter',sans-serif; font-size:13px; color:rgba(255,255,255,0.55); line-height:1.6; margin:0 0 16px;">We're happy to explain how we handle your data.</p>
        <a href="mailto:info@tikalempirellc.com" style="display:block; text-align:center; background:#C9A84C; color:#0B1F33; font-family:'Montserrat',sans-serif; font-size:11px; font-weight:800; letter-spacing:0.1em; text-transform:uppercase; text-decoration:none; padding:11px 0; border-radius:4px; transition:background 0.2s;" onmouseover="this.style.background='#DFB95A';" onmouseout="this.style.background='#C9A84C';">
          Email Us
        </a>
      </div>
    </div><!-- /sidebar -->

  </div>
</section>

<style>
@media (max-width:900px) {
  .pp-layout { grid-template-columns: 1fr !important; }
  .pp-sidebar { position:static !important; }
}
.pp-layout ul { padding-left:20px; margin:12px 0; display:flex; flex-direction:column; gap:7px; }
.pp-layout li { color:#2C2C2C; }
.pp-layout p  { margin:0 0 14px; }
.pp-layout p:last-child { margin-bottom:0; }
</style>

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
  }, { threshold: 0.08 })
  document.querySelectorAll('.pp-fade-up').forEach(function (el) { io.observe(el) })
})
</script>

<?php get_footer(); ?>