<?php
/* ============================================================
   popover helper
   ------------------------------------------------------------
   popover($id, $triggerText, $contentHtml)
       -> echoes the inline <span> trigger where you call it,
          and quietly registers the content under $id.

   popover_templates()
       -> echoes all registered <template> blocks. Call it once,
          just before </body>.

   Reusing the same $id for several triggers is fine — the
   template is only emitted once (they all share it).
   ============================================================ */

$__popovers = [];

function popover(string $id, string $triggerText, string $contentHtml): void {
    global $__popovers;
    // Keyed by id => one template per id, even if used by many triggers.
    $__popovers[$id] = $contentHtml;

    $safeId = htmlspecialchars($id, ENT_QUOTES);
    // NOTE: $triggerText is emitted as-is so you can use entities/markup.
    // If it ever comes from user input, wrap it in htmlspecialchars().
    echo '<span class="hint" data-pop="' . $safeId . '">' . $triggerText . '</span>';
}

function popover_templates(): void {
    global $__popovers;
    foreach ($__popovers as $id => $html) {
        $safeId = htmlspecialchars($id, ENT_QUOTES);
        echo "\n<template id=\"$safeId\">$html</template>";
    }
}

/* --- Optional: define reusable content up top so your prose stays clean --- */
$C = [
    'frontend' =>
        '<img src="https://placehold.co/280x110/d1600a/fff?text=ninja+coder" alt="">'
      . '<p>...but people tend to call us <strong>ninjas</strong> 🥷.</p>'
      . '<a href="https://example.com/code" target="_blank" rel="noopener">Learn more &rarr;</a>',

    'process'  =>
        '<a href="https://example.com/process" target="_blank" rel="noopener">Read the case study &rarr;</a>',

    'desk'     =>
        '<img src="https://placehold.co/280x160/333/fff?text=my+desk" alt="My desk">',
];
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Popovers via PHP helper</title>
<style>
  body { max-width: 720px; margin: 4rem auto; padding: 0 1rem;
         font: 1.1rem/1.7 Georgia, serif; color: #222; }
  .hint { color:#d1600a; font-weight:600; text-decoration:underline dotted;
          text-underline-offset:3px; cursor:help; }
  .pop { position:absolute; z-index:1000; max-width:300px; background:#fff;
         border:1px solid #ddd; border-radius:10px; box-shadow:0 8px 24px rgba(0,0,0,.15);
         padding:12px 14px; font:.95rem/1.5 system-ui,sans-serif; color:#333;
         opacity:0; transform:translateY(4px);
         transition:opacity .12s ease, transform .12s ease; pointer-events:none; }
  .pop.show { opacity:1; transform:translateY(0); pointer-events:auto; }
  .pop img { display:block; max-width:100%; border-radius:6px; }
  .pop img + p, .pop p + a { margin-top:.5rem; }
  .pop p { margin:0; } .pop a { color:#d1600a; }
  .pop::before, .pop::after { content:""; position:absolute; left:var(--caret-x,24px);
         transform:translateX(-50%); width:0; height:0; border:9px solid transparent; }
  .pop--below::before { top:-9px; border-top:0; border-bottom-color:#ddd; }
  .pop--below::after  { top:-8px; border-top:0; border-bottom-color:#fff; }
  .pop--above::before { bottom:-9px; border-bottom:0; border-top-color:#ddd; }
  .pop--above::after  { bottom:-8px; border-bottom:0; border-top-color:#fff; }
</style>
</head>
<body>

  <h1>End-to-end UX process</h1>

  <p>
    I thrive at the intersection of design and engineering &mdash; having
    extensive hands-on coding experience
    (<?php popover('p-frontend', "I&rsquo;m a front-end designer", $C['frontend']); ?>),
    I excel at identifying risks early.
  </p>

  <p>
    See my
    <?php popover('p-process', 'full process', $C['process']); ?>
    for how I bridge the two teams.
  </p>

  <p>
    My workspace usually looks
    <?php popover('p-desk', 'something like this', $C['desk']); ?>.
  </p>

  <p>
    And here's that front-end note again
    (<?php popover('p-frontend', 'same popover, reused', $C['frontend']); ?>) &mdash;
    note the template is only emitted once even though two triggers use it.
  </p>

  <!-- All registered templates get dumped here, once. -->
  <?php popover_templates(); ?>

<script>
(function () {
  const OFFSET = 10, DELAY = 180, MARGIN = 8;

  document.querySelectorAll('.hint[data-pop]').forEach(trigger => {
    const tpl = document.getElementById(trigger.dataset.pop);
    if (!tpl) return;

    const pop = document.createElement('div');
    pop.className = 'pop';
    pop.innerHTML = tpl.innerHTML;
    document.body.appendChild(pop);

    let hideTimer;

    function position() {
      const r = trigger.getBoundingClientRect();
      const pw = pop.offsetWidth, ph = pop.offsetHeight;
      const vw = document.documentElement.clientWidth;
      const vh = document.documentElement.clientHeight;

      const spaceBelow = vh - r.bottom, spaceAbove = r.top;
      const placeAbove = spaceBelow < ph + OFFSET + MARGIN && spaceAbove > spaceBelow;

      const top = placeAbove
        ? r.top + window.scrollY - ph - OFFSET
        : r.bottom + window.scrollY + OFFSET;

      pop.classList.toggle('pop--above', placeAbove);
      pop.classList.toggle('pop--below', !placeAbove);

      const idealLeft = r.left + window.scrollX;
      const maxLeft = window.scrollX + vw - pw - MARGIN;
      const left = Math.max(window.scrollX + MARGIN, Math.min(idealLeft, maxLeft));
      pop.style.top = top + 'px';
      pop.style.left = left + 'px';

      const triggerCenter = r.left + window.scrollX + r.width / 2;
      let caretX = triggerCenter - left;
      caretX = Math.max(16, Math.min(caretX, pw - 16));
      pop.style.setProperty('--caret-x', caretX + 'px');
    }

    const show = () => { clearTimeout(hideTimer); position(); pop.classList.add('show'); };
    const hideSoon = () => { hideTimer = setTimeout(() => pop.classList.remove('show'), DELAY); };

    trigger.addEventListener('mouseenter', show);
    trigger.addEventListener('mouseleave', hideSoon);
    pop.addEventListener('mouseenter', () => clearTimeout(hideTimer));
    pop.addEventListener('mouseleave', hideSoon);

    trigger.tabIndex = 0;
    trigger.addEventListener('focus', show);
    trigger.addEventListener('blur', hideSoon);
    trigger.addEventListener('click', e => {
      e.preventDefault();
      pop.classList.contains('show') ? pop.classList.remove('show') : show();
    });

    window.addEventListener('scroll', () => { if (pop.classList.contains('show')) position(); }, { passive: true });
    window.addEventListener('resize', () => { if (pop.classList.contains('show')) position(); });
  });
})();
</script>
</body>
</html>
