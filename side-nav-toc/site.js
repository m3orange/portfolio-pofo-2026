/* ==========================================================================
   Curtis Floth — site behaviour
   Header state, nav dropdown, mobile panel, scroll reveals, stat counters,
   reading progress, case-study TOC. No dependencies.
   Every motion path checks prefers-reduced-motion and degrades to final state.
   ========================================================================== */

(function () {
  "use strict";

  var reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  /* --- Header: transparent over the hero, solid after 40px --------------- */

  var header = document.querySelector("[data-header]");
  var lastState = null;
  var syncHeader = function () {};

  if (header) {
    var overHero = header.hasAttribute("data-over-hero");

    syncHeader = function () {
      var state = window.scrollY > 40 || !overHero ? "scrolled" : "top";
      if (state !== lastState) {
        header.setAttribute("data-state", state);
        lastState = state;
      }
    };

    syncHeader();
    window.addEventListener("scroll", syncHeader, { passive: true });
  }

  // The mobile panel sits under the header. Over the hero the header is
  // transparent with light text, which would be invisible against the panel,
  // so pin it to its solid treatment for as long as the panel is open.
  var forceHeaderSolid = function (on) {
    if (!header) return;
    if (on) {
      header.setAttribute("data-state", "scrolled");
      lastState = "scrolled";
    } else {
      lastState = null;
      syncHeader();
    }
  };

  /* --- Desktop dropdown -------------------------------------------------- */

  var dropdownItems = document.querySelectorAll("[data-dropdown]");

  Array.prototype.forEach.call(dropdownItems, function (item) {
    var trigger = item.querySelector("[aria-expanded]");
    var closeTimer = null;

    if (!trigger) return;

    var open = function () {
      window.clearTimeout(closeTimer);
      item.setAttribute("data-open", "true");
      trigger.setAttribute("aria-expanded", "true");
    };

    var close = function () {
      item.removeAttribute("data-open");
      trigger.setAttribute("aria-expanded", "false");
    };

    var closeSoon = function () {
      closeTimer = window.setTimeout(close, 140);
    };

    item.addEventListener("mouseenter", open);
    item.addEventListener("mouseleave", closeSoon);

    trigger.addEventListener("click", function (event) {
      event.preventDefault();
      if (trigger.getAttribute("aria-expanded") === "true") {
        close();
      } else {
        open();
      }
    });

    // Keyboard: the panel stays open while focus is inside it.
    item.addEventListener("focusin", open);
    item.addEventListener("focusout", function (event) {
      if (!item.contains(event.relatedTarget)) close();
    });

    item.addEventListener("keydown", function (event) {
      if (event.key === "Escape" && item.hasAttribute("data-open")) {
        close();
        trigger.focus();
      }
    });
  });

  document.addEventListener("click", function (event) {
    Array.prototype.forEach.call(dropdownItems, function (item) {
      if (!item.contains(event.target) && item.hasAttribute("data-open")) {
        item.removeAttribute("data-open");
        var trigger = item.querySelector("[aria-expanded]");
        if (trigger) trigger.setAttribute("aria-expanded", "false");
      }
    });
  });

  /* --- Mobile panel ------------------------------------------------------ */

  var navToggle = document.querySelector("[data-nav-toggle]");
  var mobileNav = document.querySelector("[data-mobile-nav]");

  if (navToggle && mobileNav) {
    /* The panel covers the viewport, but covering something visually does not
       take it out of the tab order: without this, tabbing past the last menu
       item moved focus onto links behind the panel, where the focus ring is
       invisible. inert removes them from both the tab order and the
       accessibility tree. The header is excluded because the close button
       lives there, and the panel itself because that is what stays reachable. */
    var inerted = [];

    var setBackgroundInert = function (isOpen) {
      if (isOpen) {
        inerted = [].filter.call(document.body.children, function (el) {
          return el !== mobileNav && !el.contains(mobileNav) &&
                 el !== header && !el.contains(header);
        });
        inerted.forEach(function (el) { el.inert = true; });
      } else {
        inerted.forEach(function (el) { el.inert = false; });
        inerted = [];
      }
    };

    var setMobileNav = function (isOpen) {
      navToggle.setAttribute("aria-expanded", String(isOpen));
      mobileNav.setAttribute("data-open", String(isOpen));
      document.documentElement.style.overflow = isOpen ? "hidden" : "";
      navToggle.setAttribute("aria-label", isOpen ? "Close menu" : "Open menu");
      forceHeaderSolid(isOpen);
      setBackgroundInert(isOpen);
    };

    navToggle.addEventListener("click", function () {
      setMobileNav(navToggle.getAttribute("aria-expanded") !== "true");
    });

    mobileNav.addEventListener("click", function (event) {
      if (event.target.closest("a")) setMobileNav(false);
    });

    document.addEventListener("keydown", function (event) {
      if (event.key === "Escape" && navToggle.getAttribute("aria-expanded") === "true") {
        setMobileNav(false);
        navToggle.focus();
      }
    });

    // Leaving mobile width with the panel open would trap scroll.
    window.matchMedia("(min-width: 1024px)").addEventListener("change", function (event) {
      if (event.matches) setMobileNav(false);
    });
  }

  /* --- Scroll reveal ----------------------------------------------------- */

  var revealTargets = document.querySelectorAll("[data-reveal]");

  if (reduceMotion || !("IntersectionObserver" in window)) {
    Array.prototype.forEach.call(revealTargets, function (el) {
      el.classList.add("is-revealed");
    });
  } else {
    // Stagger siblings that share a [data-reveal-group] parent.
    Array.prototype.forEach.call(document.querySelectorAll("[data-reveal-group]"), function (group) {
      var children = group.querySelectorAll(":scope > [data-reveal]");
      Array.prototype.forEach.call(children, function (child, index) {
        child.style.setProperty("--reveal-delay", Math.min(index * 70, 420) + "ms");
      });
    });

    var revealObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) return;
          entry.target.classList.add("is-revealed");
          revealObserver.unobserve(entry.target);
        });
      },
      { rootMargin: "0px 0px -12% 0px", threshold: 0.08 }
    );

    Array.prototype.forEach.call(revealTargets, function (el) {
      revealObserver.observe(el);
    });
  }

  /* --- Stat counters ----------------------------------------------------- */

  var formatCount = function (value, decimals, group) {
    var fixed = value.toFixed(decimals);
    if (!group) return fixed;
    var parts = fixed.split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return parts.join(".");
  };

  var runCounter = function (el) {
    var target = parseFloat(el.getAttribute("data-count"));
    if (isNaN(target)) return;

    var decimals = parseInt(el.getAttribute("data-decimals") || "0", 10);
    var group = el.hasAttribute("data-group");
    var prefix = el.getAttribute("data-prefix") || "";
    var suffix = el.getAttribute("data-suffix") || "";
    var duration = 1400;
    var start = null;

    var step = function (timestamp) {
      if (start === null) start = timestamp;
      var progress = Math.min((timestamp - start) / duration, 1);
      // easeOutExpo — fast out of the gate, settles rather than stops
      var eased = progress === 1 ? 1 : 1 - Math.pow(2, -10 * progress);
      el.textContent = prefix + formatCount(target * eased, decimals, group) + suffix;
      if (progress < 1) window.requestAnimationFrame(step);
    };

    window.requestAnimationFrame(step);
  };

  var counters = document.querySelectorAll("[data-count]");

  var settleCounter = function (el) {
    el.textContent =
      (el.getAttribute("data-prefix") || "") +
      formatCount(
        parseFloat(el.getAttribute("data-count")),
        parseInt(el.getAttribute("data-decimals") || "0", 10),
        el.hasAttribute("data-group")
      ) +
      (el.getAttribute("data-suffix") || "");
  };

  if (reduceMotion || !("IntersectionObserver" in window)) {
    Array.prototype.forEach.call(counters, settleCounter);
  } else {
    var counterObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) return;
          runCounter(entry.target);
          counterObserver.unobserve(entry.target);
        });
      },
      { threshold: 0.5 }
    );

    Array.prototype.forEach.call(counters, function (el) {
      settleCounter(el); // correct value before it scrolls into view
      counterObserver.observe(el);
    });
  }

  /* --- Reading progress (case study) ------------------------------------- */

  var progress = document.querySelector("[data-progress]");

  if (progress && !reduceMotion) {
    var ticking = false;

    var updateProgress = function () {
      var scrollable = document.documentElement.scrollHeight - window.innerHeight;
      var ratio = scrollable > 0 ? window.scrollY / scrollable : 0;
      progress.style.transform = "scaleX(" + Math.min(Math.max(ratio, 0), 1) + ")";
      ticking = false;
    };

    window.addEventListener(
      "scroll",
      function () {
        if (!ticking) {
          window.requestAnimationFrame(updateProgress);
          ticking = true;
        }
      },
      { passive: true }
    );

    updateProgress();
  }

  /* --- Case-study TOC highlighting ---------------------------------------
     The list is generated from the body's <h2>s, so nothing here assumes how
     many entries there are or what they are called — it reads whatever links
     the aside holds and resolves each one.

     Position-based rather than an IntersectionObserver on the headings. A
     heading is a thin element, so an observer band only fires while one is
     crossing it: nothing is highlighted on load or after a deep link, a fast
     scroll can skip a heading past the band entirely, and two headings inside
     the band at once resolve in entry order rather than document order. Asking
     "which heading did I last scroll past" has none of those states. */

  var tocLinks = document.querySelectorAll("[data-toc] a");

  if (tocLinks.length) {
    var headings = [];

    Array.prototype.forEach.call(tocLinks, function (link) {
      var href = link.getAttribute("href");
      if (!href || href.charAt(0) !== "#") return;
      /* getElementById, not querySelector: a slug is derived from heading text
         and may start with a digit ("#2024-rebuild"), which is not a valid CSS
         identifier — querySelector would throw and take the rest of this file
         down with it. */
      var heading = document.getElementById(href.slice(1));
      if (heading) headings.push({ link: link, heading: heading });
    });

    if (headings.length) {
      var tocTicking = false;
      var activationLine = 0;

      /* Match the headings' scroll-margin-top, so an entry becomes current at
         exactly the point clicking it would scroll its heading to. Measured
         rather than hard-coded, and re-measured on resize because the header
         height it derives from changes at breakpoints. */
      var measureToc = function () {
        activationLine =
          parseFloat(window.getComputedStyle(headings[0].heading).scrollMarginTop) || 0;
      };

      var syncToc = function () {
        tocTicking = false;
        var active = headings[0].link; // before the first heading, it leads
        for (var i = 0; i < headings.length; i++) {
          if (headings[i].heading.getBoundingClientRect().top - activationLine > 1) break;
          active = headings[i].link;
        }
        Array.prototype.forEach.call(tocLinks, function (link) {
          if (link === active) {
            link.setAttribute("aria-current", "true");
          } else {
            link.removeAttribute("aria-current");
          }
        });
      };

      window.addEventListener(
        "scroll",
        function () {
          if (!tocTicking) {
            window.requestAnimationFrame(syncToc);
            tocTicking = true;
          }
        },
        { passive: true }
      );

      window.addEventListener(
        "resize",
        function () {
          measureToc();
          syncToc();
        },
        { passive: true }
      );

      measureToc();
      syncToc();
    }
  }

  /* --- Zoomable figures --------------------------------------------------
     Every figure in the case-study body opens in the lightbox. Add
     class="no-zoom" to a figure to opt it out. The trigger is a real <button>
     wrapping the image, so it is keyboard-reachable and announces itself,
     rather than a click handler bolted onto a div.

     Outside the article body nothing is zoomable by default — a figure there
     opts in with data-zoom, which is what the home page's featured work strip
     carries. Opt-in rather than "every figure on the site" so a decorative
     figure added later does not silently become a dialog trigger. */

  var figures = [].filter.call(
    document.querySelectorAll(".prose figure, figure[data-zoom]"),
    function (fig) {
      return !fig.classList.contains("no-zoom") && fig.querySelector("img");
    }
  );

  if (figures.length) {
    var ICONS = {
      minus: "M40 128h176",
      plus: "M40 128h176M128 40v176",
      reset: "M96 48H48v48M160 208h48v-48M208 96V48h-48M48 160v48h48",
      close: "M200 56 56 200M200 200 56 56"
    };

    var svg = function (path) {
      return (
        '<svg width="20" height="20" viewBox="0 0 256 256" fill="none" aria-hidden="true">' +
        '<path d="' + path + '" stroke="currentColor" stroke-width="20" ' +
        'stroke-linecap="round" stroke-linejoin="round"/></svg>'
      );
    };

    // One lightbox for the page, built here so no page needs the markup.
    var box = document.createElement("div");
    box.className = "lightbox";
    box.setAttribute("data-open", "false");
    box.setAttribute("role", "dialog");
    box.setAttribute("aria-modal", "true");
    box.setAttribute("aria-label", "Image viewer");
    box.innerHTML =
      '<div class="lightbox__bar">' +
        '<button class="lightbox__btn" type="button" data-lb="out" aria-label="Zoom out">' + svg(ICONS.minus) + "</button>" +
        '<button class="lightbox__btn" type="button" data-lb="in" aria-label="Zoom in">' + svg(ICONS.plus) + "</button>" +
        '<button class="lightbox__btn" type="button" data-lb="reset" aria-label="Reset zoom">' + svg(ICONS.reset) + "</button>" +
        '<button class="lightbox__btn" type="button" data-lb="close" aria-label="Close image viewer">' + svg(ICONS.close) + "</button>" +
      "</div>" +
      '<div class="lightbox__stage" data-lb="stage"><img class="lightbox__img" alt="" data-lb="img"></div>' +
      '<p class="lightbox__caption" data-lb="caption"></p>';
    document.body.appendChild(box);

    var stage = box.querySelector('[data-lb="stage"]');
    var image = box.querySelector('[data-lb="img"]');
    var caption = box.querySelector('[data-lb="caption"]');
    var btnIn = box.querySelector('[data-lb="in"]');
    var btnOut = box.querySelector('[data-lb="out"]');

    var MIN = 1;
    var MAX = 6;
    var scale = 1;
    var tx = 0;
    var ty = 0;
    var lastFocus = null;
    var pointers = {};
    var pinchStart = 0;
    var scaleStart = 1;
    var dragging = false;
    var dragX = 0;
    var dragY = 0;

    // Keep the image inside the stage: once it is smaller than the frame on an
    // axis there is nothing to pan, so the offset is pinned to zero.
    var clamp = function () {
      var s = stage.getBoundingClientRect();
      var w = image.offsetWidth * scale;
      var h = image.offsetHeight * scale;
      var maxX = Math.max(0, (w - s.width) / 2);
      var maxY = Math.max(0, (h - s.height) / 2);
      tx = Math.min(maxX, Math.max(-maxX, tx));
      ty = Math.min(maxY, Math.max(-maxY, ty));
    };

    var apply = function () {
      clamp();
      image.style.transform = "translate(" + tx + "px," + ty + "px) scale(" + scale + ")";
      image.setAttribute("data-zoomed", scale > 1 ? "true" : "false");

      /* Disabling the button that currently holds focus drops focus to <body>,
         which is outside the dialog — the next Tab then walks into the page
         behind it. MIN < MAX, so the two limits are never reached at once and
         the counterpart button is always available to receive focus. Both are
         cleared first so that counterpart is focusable at the moment we hand
         focus over, then the real state is applied. */
      var limitIn = scale >= MAX;
      var limitOut = scale <= MIN;
      btnIn.disabled = false;
      btnOut.disabled = false;
      if (limitIn && document.activeElement === btnIn) btnOut.focus();
      else if (limitOut && document.activeElement === btnOut) btnIn.focus();
      btnIn.disabled = limitIn;
      btnOut.disabled = limitOut;
    };

    // Zoom about a point so whatever is under the cursor stays under it.
    var zoomAt = function (next, cx, cy) {
      next = Math.min(MAX, Math.max(MIN, next));
      if (next === scale) return;
      var s = stage.getBoundingClientRect();
      var ox = (cx === undefined ? s.left + s.width / 2 : cx) - (s.left + s.width / 2);
      var oy = (cy === undefined ? s.top + s.height / 2 : cy) - (s.top + s.height / 2);
      var k = next / scale;
      tx = ox - (ox - tx) * k;
      ty = oy - (oy - ty) * k;
      scale = next;
      apply();
    };

    var reset = function () {
      scale = 1;
      tx = 0;
      ty = 0;
      apply();
    };

    var open = function (fig) {
      var img = fig.querySelector("img");
      var cap = fig.querySelector("figcaption");
      lastFocus = document.activeElement;
      image.src = img.currentSrc || img.src;
      image.alt = img.alt || "";
      caption.textContent = cap ? cap.textContent.trim() : "";
      caption.hidden = !cap;
      reset();
      box.setAttribute("data-open", "true");
      document.documentElement.style.overflow = "hidden";
      // Reading a layout property flushes pending styles, so visibility is
      // already applied and the button is focusable. Done synchronously rather
      // than in requestAnimationFrame, which never fires while a tab is
      // backgrounded — that would leave the dialog open but unfocused.
      void box.offsetHeight;
      box.querySelector('[data-lb="close"]').focus();
    };

    var close = function () {
      box.setAttribute("data-open", "false");
      document.documentElement.style.overflow = "";
      if (lastFocus && lastFocus.focus) lastFocus.focus();
      lastFocus = null;
    };

    var isOpen = function () {
      return box.getAttribute("data-open") === "true";
    };

    // Wrap each image in a button — the click target and the focus stop.
    figures.forEach(function (fig) {
      var img = fig.querySelector("img");
      var trigger = document.createElement("button");
      trigger.type = "button";
      trigger.className = "figure__zoom";
      var cap = fig.querySelector("figcaption");
      trigger.setAttribute(
        "aria-label",
        "View larger: " + (img.alt || (cap ? cap.textContent.trim() : "image"))
      );
      img.parentNode.insertBefore(trigger, img);
      trigger.appendChild(img);
      trigger.addEventListener("click", function () {
        open(fig);
      });
    });

    box.addEventListener("click", function (e) {
      var action = e.target.closest ? e.target.closest("[data-lb]") : null;
      var name = action && action.getAttribute("data-lb");
      if (name === "close") close();
      else if (name === "in") zoomAt(scale * 1.4);
      else if (name === "out") zoomAt(scale / 1.4);
      else if (name === "reset") reset();
      else if (e.target === box) close();     // scrim
    });

    stage.addEventListener("dblclick", function (e) {
      if (scale > 1) reset();
      else zoomAt(2.5, e.clientX, e.clientY);
    });

    stage.addEventListener(
      "wheel",
      function (e) {
        if (!isOpen()) return;
        e.preventDefault();
        zoomAt(scale * (e.deltaY < 0 ? 1.12 : 1 / 1.12), e.clientX, e.clientY);
      },
      { passive: false }
    );

    stage.addEventListener("pointerdown", function (e) {
      pointers[e.pointerId] = { x: e.clientX, y: e.clientY };
      var ids = Object.keys(pointers);
      if (ids.length === 2) {
        var a = pointers[ids[0]];
        var b = pointers[ids[1]];
        pinchStart = Math.hypot(a.x - b.x, a.y - b.y);
        scaleStart = scale;
      } else if (scale > 1) {
        dragging = true;
        dragX = e.clientX - tx;
        dragY = e.clientY - ty;
        box.setAttribute("data-panning", "true");
      }
      stage.setPointerCapture(e.pointerId);
    });

    stage.addEventListener("pointermove", function (e) {
      if (!pointers[e.pointerId]) return;
      pointers[e.pointerId] = { x: e.clientX, y: e.clientY };
      var ids = Object.keys(pointers);

      if (ids.length === 2 && pinchStart) {
        var a = pointers[ids[0]];
        var b = pointers[ids[1]];
        var dist = Math.hypot(a.x - b.x, a.y - b.y);
        zoomAt(scaleStart * (dist / pinchStart), (a.x + b.x) / 2, (a.y + b.y) / 2);
      } else if (dragging) {
        tx = e.clientX - dragX;
        ty = e.clientY - dragY;
        apply();
      }
    });

    var endPointer = function (e) {
      delete pointers[e.pointerId];
      if (Object.keys(pointers).length < 2) pinchStart = 0;
      if (!Object.keys(pointers).length) {
        dragging = false;
        box.removeAttribute("data-panning");
      }
    };
    stage.addEventListener("pointerup", endPointer);
    stage.addEventListener("pointercancel", endPointer);

    document.addEventListener("keydown", function (e) {
      if (!isOpen()) return;
      if (e.key === "Escape") { close(); return; }
      if (e.key === "+" || e.key === "=") { zoomAt(scale * 1.4); return; }
      if (e.key === "-" || e.key === "_") { zoomAt(scale / 1.4); return; }
      if (e.key === "0") { reset(); return; }

      var step = 60;
      if (e.key === "ArrowLeft")  { tx += step; apply(); e.preventDefault(); }
      if (e.key === "ArrowRight") { tx -= step; apply(); e.preventDefault(); }
      if (e.key === "ArrowUp")    { ty += step; apply(); e.preventDefault(); }
      if (e.key === "ArrowDown")  { ty -= step; apply(); e.preventDefault(); }

      // Keep focus inside the dialog while it is open.
      if (e.key === "Tab") {
        var stops = box.querySelectorAll("button:not(:disabled)");
        if (!stops.length) return;
        var first = stops[0];
        var last = stops[stops.length - 1];
        /* Wrapping only at the two ends assumes focus is already inside. If it
           is not — anything that disables or removes the focused control drops
           it to <body> — pull it back rather than letting Tab leave the modal. */
        if (!box.contains(document.activeElement)) { first.focus(); e.preventDefault(); return; }
        if (e.shiftKey && document.activeElement === first) { last.focus(); e.preventDefault(); }
        else if (!e.shiftKey && document.activeElement === last) { first.focus(); e.preventDefault(); }
      }
    });

    window.addEventListener("resize", function () {
      if (isOpen()) apply();
    });
  }
})();
