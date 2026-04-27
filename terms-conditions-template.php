<?php
/*
 * Template Name: Terms & Conditions
 * Template Post Type: page
 */

get_header(); ?>

<style>
.tc-fade-up { opacity:0; transform:translateY(20px); transition:opacity 0.55s ease, transform 0.55s ease; }
.tc-fade-up.visible { opacity:1; transform:translateY(0); }
.tc-section-link { color:#C9A84C; text-decoration:none; border-bottom:1px solid rgba(201,168,76,0.35); transition:border-color 0.2s; }
.tc-section-link:hover { border-color:#C9A84C; }
.tc-toc-link { display:block; font-family:'Inter',sans-serif; font-size:14px; color:rgba(11,31,51,0.6); text-decoration:none; padding:7px 0; border-bottom:1px solid rgba(11,31,51,0.06); transition:color 0.2s, padding-left 0.2s; }
.tc-toc-link:hover { color:#C9A84C; padding-left:6px; }
.tc-toc-link:last-child { border-bottom:none; }
</style>

<!-- ── Hero ──────────────────────────────────────────────────────────────────── -->
<section style="background:#0B1F33; padding:72px 0 56px;">
  <div style="max-width:860px; margin:0 auto; padding:0 24px;">
    <div style="display:inline-flex; align-items:center; gap:12px; margin-bottom:16px;">
      <div style="width:36px; height:2px; background:#C9A84C;"></div>
      <span style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">Legal</span>
    </div>
    <h1 style="font-family:'Playfair Display',serif; font-size:clamp(2rem,5vw,3.2rem); font-weight:900; color:#fff; line-height:1.1; margin-bottom:16px;">
      Terms &amp; Conditions
    </h1>
    <p style="font-family:'Inter',sans-serif; font-size:14px; color:rgba(255,255,255,0.38); margin:0;">
      Last updated: <?php echo date('F j, Y'); ?> &nbsp;·&nbsp; Tikal Empire LLC &nbsp;·&nbsp; MHIC #154361
    </p>
  </div>
</section>

<!-- ── Content ────────────────────────────────────────────────────────────────── -->
<section style="background:#F7F7F5; padding:72px 0 96px;">
  <div style="max-width:860px; margin:0 auto; padding:0 24px; display:grid; grid-template-columns:1fr 240px; gap:56px; align-items:start;" class="tc-layout">

    <!-- Main content -->
    <div>

      <!-- Intro -->
      <div style="background:#fff; border-radius:10px; padding:36px 40px; border:1px solid rgba(11,31,51,0.08); margin-bottom:32px;" class="tc-fade-up">
        <p style="font-family:'Inter',sans-serif; font-size:15px; color:#2C2C2C; line-height:1.82; margin:0;">
          These Terms &amp; Conditions ("Terms") govern your use of the Tikal Empire LLC website and the services we provide. By accessing our website or engaging our services, you agree to be bound by these Terms. Please read them carefully. If you do not agree, please do not use our website or services.
        </p>
      </div>

      <?php
      $sections = [
        [
          'id'    => 'company-info',
          'title' => '1. Company Information',
          'body'  => '
            <p>Tikal Empire LLC is a licensed home improvement contractor registered in the state of Maryland.</p>
            <ul>
              <li><strong>Company name:</strong> Tikal Empire LLC</li>
              <li><strong>MHIC License:</strong> #154361</li>
              <li><strong>Address:</strong> 3103 Fallston Ave., Beltsville, MD 20705</li>
              <li><strong>Phone:</strong> <a href="tel:+13013004172" class="tc-section-link">(301) 300-4172</a></li>
              <li><strong>Email:</strong> <a href="mailto:info@tikalempirellc.com" class="tc-section-link">info@tikalempirellc.com</a></li>
            </ul>
          ',
        ],
        [
          'id'    => 'website-use',
          'title' => '2. Use of This Website',
          'body'  => '
            <p>You may use this website for lawful purposes only. You agree not to:</p>
            <ul>
              <li>Use the site in any way that violates applicable laws or regulations</li>
              <li>Transmit spam, malware, or any harmful or disruptive code</li>
              <li>Attempt to gain unauthorized access to any part of the website or its infrastructure</li>
              <li>Reproduce, distribute, or exploit any content from this site without prior written permission</li>
              <li>Use automated tools to scrape or harvest data from this website</li>
            </ul>
            <p>We reserve the right to suspend or terminate access to the website for any user who violates these Terms.</p>
          ',
        ],
        [
          'id'    => 'estimates-quotes',
          'title' => '3. Estimates & Quotes',
          'body'  => '
            <p>Free in-home estimates are provided at no cost and with no obligation. Estimates are based on information gathered during the consultation and are subject to change if the scope of work is modified.</p>
            <ul>
              <li>Estimates are valid for <strong>30 days</strong> from the date of issuance unless otherwise stated</li>
              <li>A signed written contract is required before any work begins</li>
              <li>Changes to scope after contract signing may result in change order pricing</li>
              <li>Tikal Empire LLC is not responsible for estimates based on incomplete or inaccurate information provided by the client</li>
            </ul>
          ',
        ],
        [
          'id'    => 'service-contracts',
          'title' => '4. Service Contracts & Agreements',
          'body'  => '
            <p>All home improvement services are governed by a separate written contract signed by both parties. That contract supersedes any verbal agreements and defines:</p>
            <ul>
              <li>Project scope and specifications</li>
              <li>Payment schedule and total cost</li>
              <li>Project timeline and completion date</li>
              <li>Change order procedures</li>
              <li>Warranty terms</li>
            </ul>
            <p>Clients have the right to cancel a contract within <strong>3 business days</strong> of signing under Maryland law (Right of Rescission for home improvement contracts).</p>
          ',
        ],
        [
          'id'    => 'payment',
          'title' => '5. Payment Terms',
          'body'  => '
            <p>Payment terms are specified in the signed project contract. General payment policies include:</p>
            <ul>
              <li>A deposit is typically required before project commencement</li>
              <li>Progress payments may be required at defined milestones</li>
              <li>Final payment is due upon project completion and client approval</li>
              <li>Late payments may incur additional fees as outlined in the contract</li>
            </ul>
            <p>Tikal Empire LLC does not accept payment in full upfront. Any contractor requesting 100% payment before starting work is a red flag — and not our practice.</p>
          ',
        ],
        [
          'id'    => 'licensing-insurance',
          'title' => '6. Licensing & Insurance',
          'body'  => '
            <p>Tikal Empire LLC holds an active Maryland Home Improvement Commission (MHIC) license #154361 and maintains general liability insurance on all active projects. Proof of insurance is available upon request.</p>
            <p>Our licensing covers home improvement work in Maryland including kitchen remodeling, bathroom renovation, and flooring installation.</p>
          ',
        ],
        [
          'id'    => 'warranties',
          'title' => '7. Warranties & Workmanship',
          'body'  => '
            <p>Tikal Empire LLC stands behind the quality of our work. Specific warranty terms are outlined in each project contract. Generally:</p>
            <ul>
              <li>We warrant our workmanship against defects for a period specified in the project contract</li>
              <li>Material warranties are subject to manufacturer terms and conditions</li>
              <li>Warranty claims must be submitted in writing within the warranty period</li>
              <li>Warranties do not cover damage caused by misuse, neglect, or unauthorized modifications</li>
            </ul>
          ',
        ],
        [
          'id'    => 'limitation-liability',
          'title' => '8. Limitation of Liability',
          'body'  => '
            <p>To the maximum extent permitted by applicable law, Tikal Empire LLC shall not be liable for any indirect, incidental, special, or consequential damages arising from:</p>
            <ul>
              <li>Your use of or inability to use this website</li>
              <li>Any delays beyond our reasonable control (e.g., material shortages, weather, permit delays)</li>
              <li>Pre-existing conditions in your property not disclosed or discoverable prior to project commencement</li>
            </ul>
            <p>Our total liability for any claim related to a project shall not exceed the total amount paid by the client for that specific project.</p>
          ',
        ],
        [
          'id'    => 'intellectual-property',
          'title' => '9. Intellectual Property',
          'body'  => '
            <p>All content on this website — including text, images, logos, design, and code — is the property of Tikal Empire LLC and is protected by applicable copyright and intellectual property laws.</p>
            <p>You may not copy, reproduce, modify, or distribute any content from this website without our prior written consent. Project photos may be used by Tikal Empire LLC for marketing purposes unless the client requests otherwise in writing.</p>
          ',
        ],
        [
          'id'    => 'third-party-links',
          'title' => '10. Third-Party Links',
          'body'  => '
            <p>Our website may contain links to third-party websites (e.g., Google Reviews, supplier sites). These links are provided for your convenience only. We have no control over the content of those sites and accept no responsibility for them or for any loss or damage that may arise from your use of them.</p>
          ',
        ],
        [
          'id'    => 'dispute-resolution',
          'title' => '11. Dispute Resolution',
          'body'  => '
            <p>In the event of a dispute related to our services, we encourage you to contact us first to resolve the matter directly. If a resolution cannot be reached, disputes may be referred to:</p>
            <ul>
              <li>The Maryland Home Improvement Commission (MHIC), which has jurisdiction over licensed contractors</li>
              <li>Mediation or arbitration as specified in the project contract</li>
            </ul>
            <p>These Terms shall be governed by the laws of the State of Maryland.</p>
          ',
        ],
        [
          'id'    => 'changes-terms',
          'title' => '12. Changes to These Terms',
          'body'  => '
            <p>We reserve the right to update these Terms at any time. Changes will be posted on this page with a revised "Last updated" date. Continued use of our website after changes are posted constitutes your acceptance of the updated Terms.</p>
          ',
        ],
        [
          'id'    => 'contact-legal',
          'title' => '13. Contact Us',
          'body'  => '
            <p>For questions about these Terms & Conditions, please contact us:</p>
            <ul>
              <li><strong>Tikal Empire LLC</strong></li>
              <li>3103 Fallston Ave., Beltsville, MD 20705</li>
              <li><a href="tel:+13013004172" class="tc-section-link">(301) 300-4172</a></li>
              <li><a href="mailto:info@tikalempirellc.com" class="tc-section-link">info@tikalempirellc.com</a></li>
              <li>MHIC License #154361</li>
            </ul>
          ',
        ],
      ];

      foreach ($sections as $i => $s): ?>
        <div id="<?php echo $s['id']; ?>" style="background:#fff; border-radius:10px; padding:36px 40px; border:1px solid rgba(11,31,51,0.08); margin-bottom:16px; scroll-margin-top:100px;" class="tc-fade-up" data-delay="<?php echo min($i * 60, 300); ?>">
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
    <div style="position:sticky; top:100px;" class="tc-sidebar">
      <div style="background:#fff; border-radius:10px; padding:24px; border:1px solid rgba(11,31,51,0.08); margin-bottom:16px;">
        <p style="font-family:'Montserrat',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.18em; text-transform:uppercase; color:#C9A84C; margin:0 0 16px;">
          Contents
        </p>
        <?php foreach ($sections as $s): ?>
          <a href="#<?php echo $s['id']; ?>" class="tc-toc-link"><?php echo $s['title']; ?></a>
        <?php endforeach; ?>
      </div>
      <!-- MHIC badge -->
      <div style="background:#0B1F33; border-radius:10px; padding:24px; border:1px solid rgba(201,168,76,0.15);">
        <div style="display:flex; align-items:center; gap:10px; margin-bottom:12px;">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="#C9A84C"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-1 14l-3-3 1.41-1.41L11 12.17l4.59-4.58L17 9l-6 6z"/></svg>
          <p style="font-family:'Montserrat',sans-serif; font-size:11px; font-weight:800; letter-spacing:0.08em; text-transform:uppercase; color:#C9A84C; margin:0;">MHIC #154361</p>
        </div>
        <p style="font-family:'Inter',sans-serif; font-size:12px; color:rgba(255,255,255,0.45); line-height:1.6; margin:0 0 16px;">Licensed & Insured in Maryland. General Liability Insurance active.</p>
        <a href="/contact" style="display:block; text-align:center; background:#C9A84C; color:#0B1F33; font-family:'Montserrat',sans-serif; font-size:11px; font-weight:800; letter-spacing:0.1em; text-transform:uppercase; text-decoration:none; padding:11px 0; border-radius:4px; transition:background 0.2s;" onmouseover="this.style.background='#DFB95A';" onmouseout="this.style.background='#C9A84C';">
          Request an Estimate
        </a>
      </div>
    </div>

  </div>
</section>

<style>
@media (max-width:900px) {
  .tc-layout { grid-template-columns: 1fr !important; }
  .tc-sidebar { position:static !important; }
}
.tc-layout ul { padding-left:20px; margin:12px 0; display:flex; flex-direction:column; gap:7px; }
.tc-layout li { color:#2C2C2C; }
.tc-layout p  { margin:0 0 14px; }
.tc-layout p:last-child { margin-bottom:0; }
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
  document.querySelectorAll('.tc-fade-up').forEach(function (el) { io.observe(el) })
})
</script>

<?php get_footer(); ?>