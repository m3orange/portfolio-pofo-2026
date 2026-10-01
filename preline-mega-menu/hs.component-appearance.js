function getCookieAccordingToSection() {
  return localStorage.getItem("hs_theme");
}

function toggleThemeClass(theme, el) {
  if (theme === "dark") el.classList.add("dark");
  else el.classList.remove("dark");
}

function toggleThemeStyle(theme, target, el, btnIcons, colorTheme) {
  if (colorTheme) target.dataset.theme = `theme-${colorTheme}`;

  if (theme === "dark") {
    // if (colorTheme) target.dataset.theme = `theme-${colorTheme}`;
    target.classList.add("dark");
    if (btnIcons[0]) btnIcons[0].classList.remove("hidden");
    if (btnIcons[1]) btnIcons[1].classList.add("hidden");
    el.classList.add("opacity-50", "pointer-events-none");
  } else {
    // if (colorTheme) delete target.dataset.theme;
    target.classList.remove("dark");
    if (btnIcons[0]) btnIcons[0].classList.add("hidden");
    if (btnIcons[1]) btnIcons[1].classList.remove("hidden");
    el.classList.remove("opacity-50", "pointer-events-none");
  }
}

function resolveThemeValue(theme) {
  if (theme === "auto") {
    return window.matchMedia("(prefers-color-scheme: dark)").matches
      ? "dark"
      : "default";
  }

  return theme;
}

function normalizeMultipleThemeValue(theme) {
  if (theme === "light") return "default";
  return theme;
}

function getMultipleThemeSelectedValue(el) {
  const valueButtons = el.querySelectorAll("[data-hs-component-dark-mode-value]");

  for (const button of valueButtons) {
    const isRadio = button.tagName.toLowerCase() === "input" && button.type === "radio";
    const stateTarget = isRadio
      ? button.closest("[data-hs-component-dark-mode-option]") || button.parentElement
      : button;

    if (
      (isRadio && button.checked) ||
      (stateTarget && stateTarget.getAttribute("aria-pressed") === "true")
    ) {
      return button.getAttribute("data-hs-component-dark-mode-value");
    }
  }

  return null;
}

function getStoredMultipleThemeValue(el) {
  return el.getAttribute("data-hs-component-dark-mode-last-value");
}

function setStoredMultipleThemeValue(el, theme) {
  const normalizedTheme = normalizeMultipleThemeValue(theme);

  if (!normalizedTheme) return;

  el.setAttribute("data-hs-component-dark-mode-last-value", normalizedTheme);
}

function setMultipleThemeState(el, selectedTheme) {
  const isGlobalDark = getCookieAccordingToSection() === "dark";
  const explicitTheme = normalizeMultipleThemeValue(selectedTheme);
  const currentTheme = normalizeMultipleThemeValue(getMultipleThemeSelectedValue(el));
  const storedTheme = normalizeMultipleThemeValue(getStoredMultipleThemeValue(el));
  const theme = isGlobalDark
    ? (currentTheme || storedTheme || explicitTheme || "default")
    : (explicitTheme || storedTheme || currentTheme || "default");
  const valueButtons = el.querySelectorAll("[data-hs-component-dark-mode-value]");

  setStoredMultipleThemeValue(el, theme);

  valueButtons.forEach((button) => {
    const value = button.getAttribute("data-hs-component-dark-mode-value");
    const isActive = value === theme;
    const isRadio = button.tagName.toLowerCase() === "input" && button.type === "radio";
    const stateTarget = isRadio
      ? button.closest("[data-hs-component-dark-mode-option]") || button.parentElement
      : button;

    if (isRadio) {
      button.checked = isActive;
      button.disabled = isGlobalDark;
    }
    if (stateTarget) {
      stateTarget.classList.toggle("opacity-50", isGlobalDark || isActive);
      stateTarget.classList.toggle("pointer-events-none", isGlobalDark || isActive);
      stateTarget.setAttribute("aria-pressed", isActive ? "true" : "false");
      stateTarget.setAttribute("aria-disabled", isGlobalDark ? "true" : "false");
    }
  });

  return theme;
}

function applyThemeToTarget(theme, target, colorTheme) {
  if (!target) return;

  if (colorTheme) target.dataset.theme = `theme-${colorTheme}`;

  if (theme === "dark") target.classList.add("dark");
  else target.classList.remove("dark");
}

function applyThemeToIframe(theme, iframe) {
  if (!iframe) return;

  iframe.dataset.hsAppearanceTheme = theme || "";

  const apply = () => {
    try {
      const iDocument = iframe.contentWindow?.document;

      if (!iDocument) return;

      toggleThemeClass(
        resolveThemeValue(iframe.dataset.hsAppearanceTheme),
        iDocument.documentElement
      );
    } catch (e) {}
  };

  apply();

  if (iframe.dataset.hsAppearanceLoadBound === "true") return;

  iframe.dataset.hsAppearanceLoadBound = "true";
  iframe.addEventListener("load", apply);
}

function applyColorThemeToIframe(colorTheme, iframe) {
  if (!iframe) return;

  iframe.dataset.hsColorTheme = colorTheme || "";

  const apply = () => {
    try {
      const iDocument = iframe.contentWindow?.document;

      const currentColorTheme =
        localStorage.getItem("hs-clipboard-theme") || iframe.dataset.hsColorTheme;

      if (!iDocument || !currentColorTheme) return;

      iframe.dataset.hsColorTheme = currentColorTheme;

      iDocument.documentElement.setAttribute(
        "data-theme",
        `theme-${currentColorTheme}`
      );
    } catch (e) {}
  };

  apply();

  if (iframe.dataset.hsColorThemeLoadBound === "true") return;

  iframe.dataset.hsColorThemeLoadBound = "true";
  iframe.addEventListener("load", apply);
}

function syncIframeTheme(theme, target) {
  if (!target || !target.querySelector("iframe")) return;

  applyThemeToIframe(theme, target.querySelector("iframe"));
}

function dispatchTargetAppearanceChange(target) {
  if (!target) return;

  if (target.querySelector("iframe")) {
    const iframe = target.querySelector("iframe");

    try {
      iframe.contentWindow.dispatchEvent(
        new CustomEvent("on-hs-appearance-change", {
          detail: target.classList.contains("dark") ? "dark" : "light",
        })
      );
    } catch (e) {
      console.warn("Could not dispatch event to iframe:", e);
    }
  }

  target.dispatchEvent(
    new CustomEvent("on-hs-appearance-change", {
      detail: target.classList.contains("dark") ? "dark" : "light",
    })
  );
}

function getTarget(el) {
  const _attr = el.getAttribute("data-hs-component-dark-mode");
  let attr;

  try {
    attr = JSON.parse(_attr);
  } catch (err) {
    attr = _attr;
  };

  const _target = typeof attr === "object" ? attr.target : attr;
  const target = _target
    ? document.querySelector(_target)
    : null;

  return {
    target,
    id: typeof attr === "object" ? attr.target : attr,
    isMultiple: typeof attr === "object" ? attr.isMultiple : false,
  };
}

function setTheme(evt) {
  const themeToggles = document.querySelectorAll(
    "[data-hs-component-dark-mode]"
  );

  themeToggles.forEach((el) => {
    const { target, id, isMultiple } = getTarget(el);
    const colorThemeSelector = document.querySelector(`[data-hs-component-color-theme="${id}"]`);
    let colorTheme = null;
    if (colorThemeSelector) colorTheme = colorThemeSelector.value;

    if (target) {
      if (isMultiple) {
        const selectedTheme = setMultipleThemeState(el);
        const appliedTheme = getCookieAccordingToSection() === "dark"
          ? "dark"
          : resolveThemeValue(selectedTheme);

        applyThemeToTarget(appliedTheme, target, colorTheme);
        syncIframeTheme(appliedTheme, target);

        return;
      }

      const btnIcons = el.querySelectorAll("[data-svg]");

      toggleThemeStyle(evt.detail, target, el, btnIcons, colorTheme);
      syncIframeTheme(evt.detail, target);
    } else if (el.tagName.toLowerCase() === "iframe") {
      toggleThemeClass(evt.detail, el.contentWindow.document.documentElement);
    } else {
      return false;
    }
  });
}

function setThemeForUnmanagedIframes(evt) {
  const managedTargets = new Set();

  document.querySelectorAll("[data-hs-component-dark-mode]").forEach((el) => {
    const { target } = getTarget(el);

    if (target) managedTargets.add(target);
  });

  document.querySelectorAll(".hs-iframe").forEach((el) => {
    const tabpanel = el.closest('[role="tabpanel"]');

    if (!tabpanel || managedTargets.has(tabpanel)) return;

    const iframe = el.tagName?.toLowerCase() === "iframe" ? el : el.querySelector("iframe");
    applyThemeToIframe(evt.detail, iframe);
  });
}

function initColorThemeForIframes() {
  const colorTheme = localStorage.getItem('hs-clipboard-theme') || 'default';

  document.querySelectorAll('[data-hs-component-color-theme]').forEach((selectEl) => {
    const targetSelector = selectEl.dataset.hsComponentColorTheme;
    if (!targetSelector) return;

    const container = document.querySelector(targetSelector);
    if (!container) return;

    const iframe = container.querySelector('iframe');
    if (!iframe) return;

    applyColorThemeToIframe(colorTheme, iframe);
  });
}

window.addEventListener("load", () => {
  const evt = { detail: getCookieAccordingToSection() };

  setTheme(evt);
  setThemeForUnmanagedIframes(evt);
  initColorThemeForIframes();
});

document.addEventListener("change", (evt) => {
  const multipleToggleValue = evt.target.closest('input[type="radio"][data-hs-component-dark-mode-value]');

  if (!multipleToggleValue) return;

  const multipleToggle = multipleToggleValue.closest("[data-hs-component-dark-mode]");

  if (!multipleToggle) return;

  const { target, id, isMultiple } = getTarget(multipleToggle);

  if (!isMultiple) return;

  const colorThemeSelector = document.querySelector(`[data-hs-component-color-theme="${id}"]`);
  let colorTheme = null;
  if (colorThemeSelector) colorTheme = colorThemeSelector.value;

  if (!target || getCookieAccordingToSection() === "dark") return;

  const selectedTheme = multipleToggleValue.getAttribute("data-hs-component-dark-mode-value");
  const resolvedTheme = resolveThemeValue(selectedTheme);

  applyThemeToTarget(resolvedTheme, target, colorTheme);
  setMultipleThemeState(multipleToggle, selectedTheme);
  syncIframeTheme(resolvedTheme, target);
  dispatchTargetAppearanceChange(target);
});

document.addEventListener("click", (evt) => {
  const multipleToggleValue = evt.target.closest(
    '[data-hs-component-dark-mode-value]:not(input[type="radio"])'
  );

  if (multipleToggleValue) {
    const multipleToggle = multipleToggleValue.closest("[data-hs-component-dark-mode]");

    if (!multipleToggle) return;

    const { target, id, isMultiple } = getTarget(multipleToggle);

    if (isMultiple) {
      const colorThemeSelector = document.querySelector(`[data-hs-component-color-theme="${id}"]`);
      let colorTheme = null;
      if (colorThemeSelector) colorTheme = colorThemeSelector.value;

      if (!target || getCookieAccordingToSection() === "dark") return;

      const selectedTheme = multipleToggleValue.getAttribute("data-hs-component-dark-mode-value");
      const resolvedTheme = resolveThemeValue(selectedTheme);

      applyThemeToTarget(resolvedTheme, target, colorTheme);
      setMultipleThemeState(multipleToggle, selectedTheme);
      syncIframeTheme(resolvedTheme, target);
      dispatchTargetAppearanceChange(target);

      return;
    }
  }

  const toggle = evt.target.closest("[data-hs-component-dark-mode]");

  if (!toggle) return;

  const { target, id, isMultiple } = getTarget(toggle);

  if (isMultiple) return;

  const colorThemeSelector = document.querySelector(`[data-hs-component-color-theme="${id}"]`);
  let colorTheme = null;
  if (colorThemeSelector) colorTheme = colorThemeSelector.value;

  if (!target || getCookieAccordingToSection() === "dark") return;

  const btnIcons = toggle.querySelectorAll("[data-svg]");

  btnIcons.forEach((icon) => icon.classList.toggle("hidden"));

  // Toggle "dark" class
  target.classList.toggle("dark");

  // Toggle "data-theme"
  // if (colorTheme && target.classList.contains('dark')) target.dataset.theme = `theme-${colorTheme}`;
  // else delete target.dataset.theme;

  target.dataset.theme = `theme-${colorTheme}`;

  if (target.querySelector("iframe")) {
    const iframe = target.querySelector("iframe");
    const html = iframe.contentWindow.document.documentElement;

    html.classList.toggle("dark");
  }

  dispatchTargetAppearanceChange(target);
});

window.addEventListener("on-hs-appearance-change", (evt) => {
  setTheme(evt);
  setThemeForUnmanagedIframes(evt);

  const themeToggles = document.querySelectorAll(
    "[data-hs-component-dark-mode]"
  );

  themeToggles.forEach((el) => {
    const { target } = getTarget(el);

    if (target) {
      if (target.querySelector("iframe")) {
        const iframe = target.querySelector("iframe");

        try {
          iframe.contentWindow.dispatchEvent(
            new CustomEvent("on-hs-appearance-change", {
              detail: target.classList.contains("dark") ? "dark" : "light",
            })
          );
        } catch (e) {
          console.warn("Could not dispatch event to iframe:", e);
        }
      }
    } else if (el.tagName.toLowerCase() === "iframe") {
      try {
        el.contentWindow.dispatchEvent(
          new CustomEvent("on-hs-appearance-change", {
            detail: evt.detail,
          })
        );
      } catch (e) {
        console.warn("Could not dispatch event to iframe:", e);
      }
    }
  });
});

window.addEventListener("on-hs-color-theme-change", (evt) => {
  const elements = document.querySelectorAll("[data-hs-component-dark-mode]");

  elements.forEach((el) => {
    const { target, id } = getTarget(el);
    const colorThemeSelector = document.querySelector(`[data-hs-component-color-theme="${id}"]`);
    let colorTheme = null;
    if (colorThemeSelector) colorTheme = colorThemeSelector.value;

    if (el.tagName.toLowerCase() === "iframe") {
      try {
        el.contentWindow.dispatchEvent(
          new CustomEvent("on-hs-color-theme-change", {
            detail: evt.detail,
          })
        );
      } catch (e) {
        console.warn("Could not dispatch event to iframe:", e);
      }
    } else if (target) {
      const currentTarget = target;

      // if (colorTheme && target.classList.contains('dark')) target.dataset.theme = `theme-${colorTheme}`;
      // else delete target.dataset.theme;

      currentTarget.dataset.theme = `theme-${colorTheme}`;

      if (currentTarget) {
        const iframes = currentTarget.querySelectorAll("iframe");

        iframes.forEach((iframe) => {
          try {
            iframe.contentWindow.dispatchEvent(
              new CustomEvent("on-hs-color-theme-change", {
                detail: evt.detail,
              })
            );
          } catch (e) {
            console.warn("Could not dispatch event to iframe:", e);
          }
        });
      }
    }
  });
});
