<?php
/*
 * Template Name: Our Work
 * Template Post Type: page
 */

get_header(); ?>

<style>
.ow-fade-up { opacity:0; transform:translateY(24px); transition:opacity 0.6s ease, transform 0.6s ease; }
.ow-fade-up.visible { opacity:1; transform:translateY(0); }

/* ── Filter tabs ──────────────────────────────────────────────────────────── */
.ow-filter-btn {
  font-family:'Amino',sans-serif; font-size:11px; font-weight:700;
  letter-spacing:0.1em; text-transform:uppercase;
  background:none; border:none; cursor:pointer;
  padding:12px 22px; color:rgba(11,31,51,0.4);
  border-bottom:2px solid transparent;
  transition:color 0.2s, border-color 0.2s;
  white-space:nowrap;
}
.ow-filter-btn:hover  { color:#0d1b2a; }
.ow-filter-btn.active { color:#C9A84C; border-bottom-color:#C9A84C; }

/* ── Project cards ────────────────────────────────────────────────────────── */
.ow-card {
  border-radius:10px; overflow:hidden;
  background:#fff; border:1px solid rgba(11,31,51,0.08);
  box-shadow:0 2px 12px rgba(11,31,51,0.06);
  transition:box-shadow 0.28s, transform 0.28s, border-color 0.28s;
}
.ow-card:hover { box-shadow:0 16px 48px rgba(11,31,51,0.14); transform:translateY(-5px); border-color:rgba(201,168,76,0.3); }
.ow-card[style*="display: none"] { display:none !important; }

/* ── Before/After slider inside card ─────────────────────────────────────── */
.ow-ba { position:relative; width:100%; padding-top:66%; overflow:hidden; cursor:ew-resize; user-select:none; background:#0d1b2a; }
.ow-ba-clip { position:absolute; inset:0; width:50%; overflow:hidden; }
.ow-ba-handle { position:absolute; top:0; left:50%; width:3px; height:100%; background:#C9A84C; transform:translateX(-50%); z-index:10; pointer-events:none; }
.ow-ba-knob { position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); width:40px; height:40px; border-radius:50%; background:#C9A84C; border:3px solid #fff; box-shadow:0 4px 16px rgba(0,0,0,0.3); display:flex; align-items:center; justify-content:center; }
.ow-ba-label { position:absolute; z-index:5; top:10px; font-family:'Amino',sans-serif; font-size:9px; font-weight:700; letter-spacing:0.15em; text-transform:uppercase; padding:4px 9px; border-radius:3px; }

/* ── Grid layout ──────────────────────────────────────────────────────────── */
.ow-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:24px; }

/* ── Filter transition ────────────────────────────────────────────────────── */
.ow-card { transition:box-shadow 0.28s, transform 0.28s, border-color 0.28s, opacity 0.3s; }
.ow-card.hiding { opacity:0; transform:translateY(8px); pointer-events:none; }

@media (max-width:1024px) { .ow-grid { grid-template-columns:repeat(2,1fr) !important; } }
@media (max-width:640px)  {
  .ow-grid { grid-template-columns:1fr !important; }
  .ow-filter-bar { overflow-x:auto; -webkit-overflow-scrolling:touch; }
  .ow-cta-flex { flex-direction:column !important; text-align:center !important; }
}
</style>

<!-- ═══ HERO ══════════════════════════════════════════════════════════════════ -->
<section style="position:relative; min-height:72vh; display:flex; align-items:center; background-image:url('/wp-content/uploads/portfolio-hero.jpg'); background-size:cover; background-position:center; background-attachment:fixed;">
  <div style="position:absolute; inset:0; background:linear-gradient(120deg,rgba(11,31,51,0.9) 0%,rgba(11,31,51,0.62) 55%,rgba(11,31,51,0.38) 100%);"></div>
  <div style="position:relative; z-index:2; max-width:1280px; margin:0 auto; padding:80px 24px 60px; width:100%;">
    <div style="max-width:680px;">
      <div style="display:inline-flex; align-items:center; gap:12px; margin-bottom:24px;">
        <div style="width:36px; height:2px; background:#C9A84C;"></div>
        <span style="font-family:'Amino',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.25em; text-transform:uppercase; color:#C9A84C;">Portfolio · Maryland</span>
      </div>
      <h1 style="font-family:'AkzidenzGrotesk',sans-serif; font-size:clamp(2.2rem,6vw,4.4rem); font-weight:900; color:#fff; line-height:1.08; letter-spacing:-0.02em; margin-bottom:24px;">
        Real Projects.<br><span style="color:#C9A84C;">Real Results.</span>
      </h1>
      <p style="font-family:'Amino',sans-serif; font-size:clamp(1rem,2vw,1.15rem); color:rgba(255,255,255,0.75); line-height:1.78; max-width:560px;">
        Every transformation tells a story of clean execution, attention to detail, and a Maryland homeowner who felt certain from start to finish.
      </p>
      <!-- Stats row -->
      <div style="display:flex; gap:32px; flex-wrap:wrap; margin-top:44px; padding-top:32px; border-top:1px solid rgba(255,255,255,0.1);">
        <?php foreach([['v'=>'6+','l'=>'Projects at Launch'],['v'=>'3','l'=>'Service Types'],['v'=>'MD','l'=>'50-Mile Radius']] as $s): ?>
          <div>
            <p style="font-family:'AkzidenzGrotesk',sans-serif; font-size:2rem; font-weight:900; color:#C9A84C; margin:0; line-height:1;"><?php echo $s['v']; ?></p>
            <p style="font-family:'Amino',sans-serif; font-size:10px; font-weight:600; letter-spacing:0.14em; text-transform:uppercase; color:rgba(255,255,255,0.4); margin:5px 0 0;"><?php echo $s['l']; ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ═══ FILTER + GRID ═════════════════════════════════════════════════════════ -->
<section style="background:#d1d5db; padding:80px 0 96px;">
  <div style="max-width:1280px; margin:0 auto; padding:0 24px;">

    <!-- Filter bar -->
    <div style="display:flex; align-items:center; justify-content:center; border-bottom:1px solid rgba(11,31,51,0.1); margin-bottom:56px; gap:0; flex-wrap:nowrap;" class="ow-filter-bar ow-fade-up">
      <?php
      $filters = [
        ['key'=>'all',       'label'=>'All Projects'],
        ['key'=>'kitchen',   'label'=>'Kitchen Remodeling'],
        ['key'=>'bathroom',  'label'=>'Bathroom Remodeling'],
        ['key'=>'flooring',  'label'=>'Flooring Installation'],
      ];
      foreach ($filters as $i => $f): ?>
        <button class="ow-filter-btn<?php echo $i === 0 ? ' active' : ''; ?>"
                data-filter="<?php echo $f['key']; ?>"
                onclick="owFilter('<?php echo $f['key']; ?>', this)">
          <?php echo $f['label']; ?>
        </button>
      <?php endforeach; ?>
    </div>

    <!-- Counter -->
    <p id="ow-count" style="font-family:'Amino',sans-serif; font-size:11px; font-weight:600; letter-spacing:0.1em; text-transform:uppercase; color:rgba(11,31,51,0.35); margin-bottom:32px; text-align:center;"></p>

    <!-- Project grid -->
    <div class="ow-grid" id="ow-grid">
      <?php
      $projects = [
        [
          'cat'    => 'kitchen',
          'badge'  => 'Kitchen Remodel',
          'loc'    => 'Columbia, MD',
          'note'   => 'Full kitchen transformation — dark shaker cabinets, quartz waterfall island, under-cabinet lighting, and LVP flooring throughout.',
          'before' => '/wp-content/uploads/ow-kitchen-columbia-before.jpg',
          'after'  => '/wp-content/uploads/ow-kitchen-columbia-after.jpg',
          'delay'  => 0,
        ],
        [
          'cat'    => 'bathroom',
          'badge'  => 'Bathroom Renovation',
          'loc'    => 'Potomac, MD',
          'note'   => 'Master bathroom gut renovation — large-format tile, frameless glass shower, floating double vanity, and matte black fixtures.',
          'before' => '/wp-content/uploads/ow-bathroom-potomac-before.jpg',
          'after'  => '/wp-content/uploads/ow-bathroom-potomac-after.jpg',
          'delay'  => 80,
        ],
        [
          'cat'    => 'flooring',
          'badge'  => 'LVP Installation',
          'loc'    => 'Ellicott City, MD',
          'note'   => 'Full first-floor LVP installation — seamless room-to-room transitions, flush thresholds, and flawless plank alignment.',
          'before' => '/wp-content/uploads/ow-flooring-ellicott-before.jpg',
          'after'  => '/wp-content/uploads/ow-flooring-ellicott-after.jpg',
          'delay'  => 160,
        ],
        [
          'cat'    => 'kitchen',
          'badge'  => 'Kitchen Transformation',
          'loc'    => 'Bethesda, MD',
          'note'   => 'White shaker kitchen with new layout — peninsula addition, subway tile backsplash, quartz countertops, and all-new appliance configuration.',
          'before' => '/wp-content/uploads/ow-kitchen-bethesda-before.jpg',
          'after'  => '/wp-content/uploads/ow-kitchen-bethesda-after.jpg',
          'delay'  => 0,
        ],
        [
          'cat'    => 'bathroom',
          'badge'  => 'Shower Conversion',
          'loc'    => 'Rockville, MD',
          'note'   => 'Tub-to-shower conversion — custom tile niche, frameless glass door, heated floor, and a complete vanity and mirror upgrade.',
          'before' => '/wp-content/uploads/ow-bathroom-rockville-before.jpg',
          'after'  => '/wp-content/uploads/ow-bathroom-rockville-after.jpg',
          'delay'  => 80,
        ],
        [
          'cat'    => 'flooring',
          'badge'  => 'Hardwood Installation',
          'loc'    => 'Frederick, MD',
          'note'   => 'Site-finished hardwood installation in a 2,200 sq ft home — including stair nosings, transitions, and a natural oil finish.',
          'before' => '/wp-content/uploads/ow-flooring-frederick-before.jpg',
          'after'  => '/wp-content/uploads/ow-flooring-frederick-after.jpg',
          'delay'  => 160,
        ],
        [
          'cat'    => 'kitchen',
          'badge'  => 'Full Kitchen Redesign',
          'loc'    => 'Germantown, MD',
          'note'   => 'Complete layout reconfiguration — wall removed, custom island added, two-tone cabinetry, and a complete electrical and lighting overhaul.',
          'before' => '/wp-content/uploads/ow-kitchen-germantown-before.jpg',
          'after'  => '/wp-content/uploads/ow-kitchen-germantown-after.jpg',
          'delay'  => 0,
        ],
        [
          'cat'    => 'bathroom',
          'badge'  => 'Guest Bath Renovation',
          'loc'    => 'Laurel, MD',
          'note'   => 'Guest bathroom — full tile replacement, new vanity and vessel sink, backlit mirror, and updated lighting and plumbing fixtures.',
          'before' => '/wp-content/uploads/ow-bathroom-laurel-before.jpg',
          'after'  => '/wp-content/uploads/ow-bathroom-laurel-after.jpg',
          'delay'  => 80,
        ],
        [
          'cat'    => 'flooring',
          'badge'  => 'Tile Installation',
          'loc'    => 'Gaithersburg, MD',
          'note'   => 'Large-format porcelain tile installation across the kitchen and main floor — 24×24 slabs, minimal grout lines, and a seamless stone look.',
          'before' => '/wp-content/uploads/ow-flooring-gaithersburg-before.jpg',
          'after'  => '/wp-content/uploads/ow-flooring-gaithersburg-after.jpg',
          'delay'  => 160,
        ],
      ];

      foreach ($projects as $idx => $p):
        $badge_colors = [
          'kitchen'  => ['bg'=>'rgba(201,168,76,0.12)','color'=>'#C9A84C','border'=>'rgba(201,168,76,0.25)'],
          'bathroom' => ['bg'=>'rgba(74,111,138,0.12)', 'color'=>'#415a77','border'=>'rgba(74,111,138,0.25)'],
          'flooring' => ['bg'=>'rgba(11,31,51,0.08)',   'color'=>'#0d1b2a','border'=>'rgba(11,31,51,0.15)'],
        ];
        $bc = $badge_colors[$p['cat']];
      ?>
        <div class="ow-card ow-fade-up" data-cat="<?php echo $p['cat']; ?>" data-delay="<?php echo $p['delay']; ?>">
          <!-- Before/After slider -->
          <div class="ow-ba" data-idx="<?php echo $idx; ?>">
            <!-- Before layer -->
            <img src="<?php echo $p['before']; ?>"
                 alt="Before — <?php echo esc_attr($p['badge']); ?> · <?php echo esc_attr($p['loc']); ?>"
                 style="position:absolute; inset:0; width:100%; height:100%; object-fit:cover;"
                 onerror="this.parentElement.style.background='linear-gradient(135deg,#415a77,#0d1b2a)'"/>
            <span class="ow-ba-label" style="left:10px; background:rgba(11,31,51,0.82); color:rgba(255,255,255,0.8);">Before</span>

            <!-- After clip -->
            <div class="ow-ba-clip">
              <img src="<?php echo $p['after']; ?>"
                   class="ow-ba-after"
                   alt="After — <?php echo esc_attr($p['badge']); ?> · <?php echo esc_attr($p['loc']); ?>"
                   style="position:absolute; top:0; left:0; height:100%; object-fit:cover;"
                   onerror="this.parentElement.parentElement.style.background='linear-gradient(135deg,#C9A84C88,#0d1b2a)'"/>
            </div>
            <span class="ow-ba-label" style="right:10px; background:rgba(201,168,76,0.92); color:#0d1b2a;">After</span>

            <!-- Gold handle -->
            <div class="ow-ba-handle">
              <div class="ow-ba-knob">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#0d1b2a" stroke-width="2.5" stroke-linecap="round"><path d="M8 4l-6 8 6 8M16 4l6 8-6 8"/></svg>
              </div>
            </div>
          </div>

          <!-- Card body -->
          <div style="padding:22px 22px 24px;">
            <div style="display:flex; align-items:center; justify-content:space-between; gap:10px; margin-bottom:12px;">
              <span style="font-family:'Amino',sans-serif; font-size:9px; font-weight:800; letter-spacing:0.12em; text-transform:uppercase; background:<?php echo $bc['bg']; ?>; color:<?php echo $bc['color']; ?>; border:1px solid <?php echo $bc['border']; ?>; padding:4px 10px; border-radius:3px;">
                <?php echo $p['badge']; ?>
              </span>
              <span style="font-family:'Amino',sans-serif; font-size:12px; color:#415a77; display:flex; align-items:center; gap:5px; white-space:nowrap;">
                <svg width="11" height="11" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                <?php echo $p['loc']; ?>
              </span>
            </div>
            <p style="font-family:'Amino',sans-serif; font-size:13px; color:#2f2f2f; line-height:1.68; margin:0 0 16px; opacity:0.75;"><?php echo $p['note']; ?></p>
            <a href="/contact" style="display:inline-flex; align-items:center; gap:6px; font-family:'Amino',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.1em; text-transform:uppercase; color:#C9A84C; text-decoration:none; transition:gap 0.2s;" onmouseover="this.style.gap='10px';" onmouseout="this.style.gap='6px';">
              Get a Similar Estimate <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Empty state (hidden by default) -->
    <div id="ow-empty" style="display:none; text-align:center; padding:72px 0;">
      <p style="font-family:'AkzidenzGrotesk',sans-serif; font-size:1.5rem; color:#0d1b2a; opacity:0.35; margin:0;">More projects coming soon.</p>
    </div>

  </div>
</section>

<!-- ═══ BOTTOM CTA ════════════════════════════════════════════════════════════ -->
<section style="background:#C9A84C; padding:56px 24px;">
  <div style="max-width:1280px; margin:0 auto; display:flex; align-items:center; justify-content:space-between; gap:32px; flex-wrap:wrap;" class="ow-cta-flex">
    <div>
      <p style="font-family:'Amino',sans-serif; font-size:10px; font-weight:700; letter-spacing:0.22em; text-transform:uppercase; color:rgba(11,31,51,0.55); margin:0 0 8px;">Like What You See?</p>
      <h2 style="font-family:'AkzidenzGrotesk',sans-serif; font-size:clamp(1.6rem,3vw,2.4rem); font-weight:900; color:#0d1b2a; line-height:1.15; margin:0 0 6px;">Request a Free Estimate for Your Home.</h2>
      <p style="font-family:'Amino',sans-serif; font-size:14px; color:rgba(11,31,51,0.65); margin:0;">We respond within 24–48 hours. No pressure. Just clarity.</p>
    </div>
    <div style="display:flex; gap:16px; align-items:center; flex-wrap:wrap;">
      <a href="/contact" style="display:inline-flex; align-items:center; justify-content:center; background:#0d1b2a; color:#C9A84C; font-family:'Amino',sans-serif; font-size:12px; font-weight:800; letter-spacing:0.12em; text-transform:uppercase; text-decoration:none; padding:0 36px; height:54px; border-radius:4px; transition:background 0.2s,transform 0.15s; white-space:nowrap;" onmouseover="this.style.background='#060d18';this.style.transform='translateY(-1px)';" onmouseout="this.style.background='#0d1b2a';this.style.transform='none';">
        Request a Free Estimate
      </a>
      <a href="tel:+13013004172" style="display:inline-flex; align-items:center; gap:8px; color:#0d1b2a; font-family:'Amino',sans-serif; font-size:14px; font-weight:700; text-decoration:none; opacity:0.7; transition:opacity 0.2s;" onmouseover="this.style.opacity='1';" onmouseout="this.style.opacity='0.7';">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
        (301) 300-4172
      </a>
    </div>
  </div>
</section>

<!-- ═══ JAVASCRIPT ════════════════════════════════════════════════════════════ -->
<script>
document.addEventListener('DOMContentLoaded', function () {

  // ── Scroll animations ──────────────────────────────────────────────────────
  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        var el = entry.target
        setTimeout(function () { el.classList.add('visible') }, parseInt(el.dataset.delay || 0))
        io.unobserve(el)
      }
    })
  }, { threshold: 0.08 })
  document.querySelectorAll('.ow-fade-up').forEach(function (el) { io.observe(el) })

  // ── Before / After sliders ─────────────────────────────────────────────────
  function initSlider(c) {
    var clip     = c.querySelector('.ow-ba-clip')
    var afterImg = c.querySelector('.ow-ba-after')
    var handle   = c.querySelector('.ow-ba-handle')
    var drag     = false

    function setPos(clientX) {
      var r   = c.getBoundingClientRect()
      var pct = Math.min(100, Math.max(0, ((clientX - r.left) / r.width) * 100))
      clip.style.width     = pct + '%'
      handle.style.left    = pct + '%'
      afterImg.style.width = r.width + 'px'
    }

    c.addEventListener('mousedown',  function (e) { drag = true; setPos(e.clientX); e.preventDefault(); })
    document.addEventListener('mouseup',   function ()  { drag = false })
    document.addEventListener('mousemove', function (e) { if (drag) setPos(e.clientX) })
    c.addEventListener('touchstart', function (e) { drag = true; setPos(e.touches[0].clientX) }, { passive: true })
    document.addEventListener('touchend',  function ()  { drag = false })
    document.addEventListener('touchmove', function (e) { if (drag) setPos(e.touches[0].clientX) }, { passive: true })

    var ro = new ResizeObserver(function () {
      if (afterImg) afterImg.style.width = c.getBoundingClientRect().width + 'px'
    })
    ro.observe(c)
    if (afterImg) afterImg.style.width = c.getBoundingClientRect().width + 'px'
  }

  document.querySelectorAll('.ow-ba').forEach(initSlider)

  // ── Count display ──────────────────────────────────────────────────────────
  var countEl = document.getElementById('ow-count')
  function updateCount() {
    var visible = document.querySelectorAll('.ow-card:not([style*="display: none"])').length
    countEl.textContent = visible + ' project' + (visible !== 1 ? 's' : '')
  }
  updateCount()
})

// ── Filter ─────────────────────────────────────────────────────────────────────
function owFilter(cat, btn) {
  // Update button states
  document.querySelectorAll('.ow-filter-btn').forEach(function (b) { b.classList.remove('active') })
  btn.classList.add('active')

  var cards   = document.querySelectorAll('.ow-card')
  var empty   = document.getElementById('ow-empty')
  var count   = document.getElementById('ow-count')
  var visible = 0

  cards.forEach(function (card) {
    var match = cat === 'all' || card.dataset.cat === cat
    if (match) {
      card.style.display = ''
      // Small stagger re-entrance
      card.style.opacity = '0'
      card.style.transform = 'translateY(12px)'
      setTimeout(function () {
        card.style.transition = 'opacity 0.35s ease, transform 0.35s ease, box-shadow 0.28s, border-color 0.28s'
        card.style.opacity    = '1'
        card.style.transform  = 'translateY(0)'
      }, 30 + visible * 60)
      visible++
    } else {
      card.style.display = 'none'
    }
  })

  empty.style.display = visible === 0 ? 'block' : 'none'
  count.textContent   = visible + ' project' + (visible !== 1 ? 's' : '')
}
</script>

<?php get_footer(); ?>