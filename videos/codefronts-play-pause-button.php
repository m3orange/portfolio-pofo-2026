<!-- 
Docs:       https://codefronts.com/components/css-play-pause-buttons/accessible-wai-aria-play-pause-button-wcag-2-2/ 
Codepen:    https://codefronts.com/try/?c=css-play-pause-buttons&d=accessible-wai-aria-play-pause-button-wcag-2-2
-->

    <button class="pp-07__btn" type="button" aria-pressed="false" aria-describedby="pp-07-hint">
        <svg viewBox="0 0 24 24" width="26" height="26" aria-hidden="true" focusable="false">
            <path class="pp-07__p" d="M8.6 5.4v13.2L19 12z" fill="currentColor"/>
            <path class="pp-07__q" d="M8 5h3.1v14H8zM12.9 5H16v14h-3.1z" fill="currentColor"/>
        </svg>
        <span class="pp-07__name">Play</span>
    </button>

    <script>
        (() => {
    document.querySelectorAll('.pp-07__card').forEach((card) => {
        if (card.dataset.wired) return;
        card.dataset.wired = '1';
        const btn = card.querySelector('.pp-07__btn');
        const status = card.querySelector('.pp-07__status');
        const say = card.parentElement.querySelector('.pp-07__say-text');
        btn.addEventListener('click', () => {
        const playing = btn.getAttribute('aria-pressed') !== 'true';
        btn.setAttribute('aria-pressed', String(playing));
        status.textContent = playing ? 'Playing' : 'Paused';
        if (say) say.textContent = playing ? '\u201CPlay, toggle button, pressed\u201D' : '\u201CPlay, toggle button, not pressed\u201D';
        });
    });
    })();
    </script>

    <style>
        .pp-07, .pp-07 *, .pp-07 *::before, .pp-07 *::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    }
    .pp-07 {
    width: 100%;
    min-height: 100vh;
    min-height: 100svh;
    display: block;
    background: var(--pp-07-bg);
    --pp-07-bg: oklch(0.97 0.006 250);
    --pp-07-card: oklch(1 0 0);
    --pp-07-ink: oklch(0.24 0.02 260);
    --pp-07-mut: oklch(0.52 0.02 260);
    --pp-07-line: oklch(0.9 0.008 260);
    --pp-07-acc: oklch(0.52 0.19 268);
    font-family: 'Segoe UI',system-ui,sans-serif;
    color: var(--pp-07-ink);
    }
    .pp-07__stage {
    min-height: 100vh;
    min-height: 100svh;
    display: grid;
    place-items: center;
    align-content: center;
    gap: 22px;
    padding: clamp(20px,5vw,56px);
    }
    .pp-07__grid {
    display: flex;
    flex-wrap: wrap;
    gap: 18px;
    justify-content: center;
    align-items: stretch;
    width: min(100%,720px);
    }
    .pp-07__card, .pp-07__audit {
    flex: 1 1 280px;
    padding: 26px;
    border: 1px solid var(--pp-07-line);
    border-radius: 18px;
    background: var(--pp-07-card);
    box-shadow: 0 10px 30px oklch(0.5 0.03 265/.09);
    }
    .pp-07__eyebrow {
    font-size: 11px;
    letter-spacing: .14em;
    text-transform: uppercase;
    color: var(--pp-07-mut);
    margin-bottom: 18px;
    }
    .pp-07__btn {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    min-height: 56px;
    padding: 0 26px 0 18px;
    border: 1px solid transparent;
    border-radius: 14px;
    background: var(--pp-07-acc);
    color: oklch(0.99 0 0);
    font: inherit;
    font-size: 16px;
    font-weight: 640;
    cursor: pointer;
    transition: background .2s,transform .18s;
    }
    .pp-07__btn:hover {
    background: color-mix(in oklch,var(--pp-07-acc) 88%,black);
    }
    .pp-07__btn:active {
    transform: scale(.97);
    }
    .pp-07__btn:focus-visible {
    outline: 3px solid var(--pp-07-ink);
    outline-offset: 3px;
    }
    .pp-07__btn[aria-pressed="true"] {
    background: var(--pp-07-ink);
    }
    .pp-07__q {
    display: none;
    }
    .pp-07__btn[aria-pressed="true"] .pp-07__p {
    display: none;
    }
    .pp-07__btn[aria-pressed="true"] .pp-07__q {
    display: block;
    }
    .pp-07__hint {
    font-size: 13.5px;
    color: var(--pp-07-mut);
    margin-top: 16px;
    }
    .pp-07__status {
    display: inline-block;
    margin-top: 14px;
    padding: 5px 12px;
    border-radius: 99px;
    font-size: 12px;
    font-weight: 640;
    letter-spacing: .04em;
    background: color-mix(in oklch,var(--pp-07-acc) 12%,transparent);
    color: color-mix(in oklch,var(--pp-07-acc) 78%,black);
    }
    .pp-07__audit {
    background: oklch(0.99 0.004 260);
    }
    .pp-07__audit-h {
    font-size: 11px;
    letter-spacing: .14em;
    text-transform: uppercase;
    color: var(--pp-07-mut);
    }
    .pp-07__say {
    display: flex;
    gap: 9px;
    align-items: flex-start;
    margin: 12px 0 18px;
    padding: 12px 14px;
    border-radius: 12px;
    background: color-mix(in oklch,var(--pp-07-acc) 8%,transparent);
    font-size: 13.5px;
    line-height: 1.45;
    text-wrap: pretty;
    }
    .pp-07__say-icon {
    color: var(--pp-07-acc);
    }
    .pp-07__list {
    list-style: none;
    display: grid;
    gap: 9px;
    font-size: 12.5px;
    color: var(--pp-07-mut);
    }
    .pp-07__list li {
    display: flex;
    gap: 9px;
    align-items: baseline;
    padding-top: 9px;
    border-top: 1px solid var(--pp-07-line);
    }
    .pp-07__list b {
    font-family: ui-monospace,Menlo,Consolas,monospace;
    font-size: 11.5px;
    color: var(--pp-07-ink);
    flex: none;
    }
    .pp-07__chip {
    font-family: ui-monospace,Menlo,Consolas,monospace;
    font-size: 11.5px;
    color: var(--pp-07-mut);
    padding: 7px 14px;
    border: 1px solid var(--pp-07-line);
    border-radius: 99px;
    text-align: center;
    }
    @media (forced-colors: active) {
    .pp-07__btn {
        border-color: ButtonText;
    }
    .pp-07__btn:focus-visible {
        outline: 3px solid Highlight;
    }
    }
    @media (prefers-reduced-motion: reduce) {
    .pp-07 * {
        transition-duration: .01ms !important;
    }
    }
    </style>