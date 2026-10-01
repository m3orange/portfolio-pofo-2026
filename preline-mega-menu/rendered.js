function generateVariables(theme = "dashboard", brand = "blue") {
      const styleId = "#hs-brand-variables";
      let style = null;

      if (!document.querySelector(styleId)) {
        const head = document.querySelector("head");
        style = document.createElement("style");
        style.id = "hs-brand-variables";

        head.append(style);
      } else {
        style = document.querySelector(styleId);
      }

      style.textContent = `
          :root[data-theme="theme-${theme}"],
          [data-theme="theme-${theme}"] {
            --primary-50:       var(--color-${brand}-50);
            --primary-100:      var(--color-${brand}-100);
            --primary-200:      var(--color-${brand}-200);
            --primary-300:      var(--color-${brand}-300);
            --primary-400:      var(--color-${brand}-400);
            --primary-500:      var(--color-${brand}-500);
            --primary-600:      var(--color-${brand}-600);
            --primary-700:      var(--color-${brand}-700);
            --primary-800:      var(--color-${brand}-800);
            --primary-900:      var(--color-${brand}-900);
            --primary-950:      var(--color-${brand}-950);
          }
        `;
    }

    (function () {
      const unavailableColorThemes = window.HS_UNAVAILABLE_COLOR_THEMES;
      const pathname = window.location.pathname;
      let reducedThemes = [];
      let defaultTheme = "default";
      let defaultBrand = "blue";
      let defaultFont = "sans";

      const themesDefaults = {
        "default": "blue",
        "harvest": "amber",
        "retro": "fuchsia",
        "ocean": "cyan",
        "autumn": "yellow",
        "moon": "gray",
        "bubblegum": "pink",
        "cashmere": "preline-mauve",
        "olive": "preline-avocado",
      };

      for (const [key_i, value_i] of Object.entries(unavailableColorThemes)) {
        const { theme, excludes } = value_i;

        if (pathname.includes(key_i)) {
          defaultTheme = theme;

          if (Array.isArray(excludes)) {
            reducedThemes = excludes;
            break;
          } else {
            const result = [];

            if (excludes['*']) result.push(...excludes['*']);

            for (const [key_j, value_j] of Object.entries(excludes)) {
              if (key_j !== '*' && pathname.includes(key_j)) result.push(...value_j);
            }

            reducedThemes = result;
            break;
          }
        }
      }

      const colorTheme = localStorage.getItem('hs-clipboard-theme');
      const font = localStorage.getItem('hs-clipboard-font');
      const brand = localStorage.getItem('hs-clipboard-brand');
      const html = document.querySelector('html');
      const accessibleFilePathPatterns = [
        "/templates/",
        "/templates/websites/digital-agency/",
        "/templates/ai/ai-chat-interface/",
        "/templates/dashboards/analytics-dashboard/",
        "/templates/productivity/calendar-app/",
        "/templates/support/helpdesk/",
        "/templates/dashboards/cms-admin/",
        "/templates/ecommerce/coffee-shop/",
        "/templates/dashboards/crm-dashboard/",
        "/templates/dashboards/admin-dashboard/",
        "/templates/ecommerce/admin/",
        "/templates/collaboration/canvas-workspace/",
        "/templates/support/shared-inbox/",
        "/templates/payments/payments-dashboard/",
        "/templates/websites/personal-portfolio/",
        "/templates/productivity/project-management/",
        "/templates/ecommerce/storefront/",
        "/templates/ecommerce/marketplace/",
        "/templates/iot/smart-home-dashboard/",
        "/templates/websites/saas-startup/",
        "/templates/communication/video-call/",
        "/templates/productivity/work-management/",
      ];
      const currentUrl = window.location.href;
      const isIncludedUrl = accessibleFilePathPatterns.some((pattern) => currentUrl.includes(pattern));

      if (isIncludedUrl) {
        (function () {
          const currentTheme = colorTheme && !reducedThemes.includes(colorTheme) ? colorTheme : defaultTheme;
          const currentBrand = brand || themesDefaults[currentTheme];

          // console.log("Current Theme:", currentTheme);
          // console.log("Current Brand:", brand, themesDefaults[currentTheme]);

          html.setAttribute('data-theme', `theme-${currentTheme}`);
          html.setAttribute('data-brand', currentBrand);

          generateVariables(currentTheme, currentBrand)
        })();

        (function () {
          const currentFont = font ?? defaultFont;

          html.setAttribute('data-font', currentFont);
        })();
      }
    })();


        (function () {
      const html = document.querySelector('html');
      const isLightOrAuto = localStorage.getItem('hs_theme') === 'light' || (localStorage.getItem('hs_theme') === 'auto' && !window.matchMedia('(prefers-color-scheme: dark)').matches);
      const isDarkOrAuto = localStorage.getItem('hs_theme') === 'dark' || (localStorage.getItem('hs_theme') === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches);

      if (isLightOrAuto && html.classList.contains('dark')) html.classList.remove('dark');
      else if (isDarkOrAuto && html.classList.contains('light')) html.classList.remove('light');
      else if (isDarkOrAuto && !html.classList.contains('dark')) html.classList.add('dark');
      else if (isLightOrAuto && !html.classList.contains('light')) html.classList.add('light');
    })();



  window.addEventListener('load', () => {
      const visiblePageTypes = ['All', 'Docs', 'Blocks', 'Plugins', 'Templates'];
      const hiddenPageTypes = ['Examples'];
      const contentTypeIcons = {
        Docs: '<svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 7v14"></path><path d="M3 18h6a3 3 0 0 1 3 3V7a3 3 0 0 0-3-3H3z"></path><path d="M21 18h-6a3 3 0 0 0-3 3V7a3 3 0 0 1 3-3h6z"></path></svg>',
        Blocks: '<svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M8.3 10a.7.7 0 0 1-.626-1.079L11.4 3a.7.7 0 0 1 1.198-.043L16.3 8.9a.7.7 0 0 1-.572 1.1Z"></path><rect x="3" y="14" width="7" height="7" rx="1"></rect><circle cx="17.5" cy="17.5" r="3.5"></circle></svg>',
        Examples: '<svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M8.3 10a.7.7 0 0 1-.626-1.079L11.4 3a.7.7 0 0 1 1.198-.043L16.3 8.9a.7.7 0 0 1-.572 1.1Z"></path><rect x="3" y="14" width="7" height="7" rx="1"></rect><circle cx="17.5" cy="17.5" r="3.5"></circle></svg>',
        Plugins: '<svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect width="7" height="7" x="14" y="3" rx="1"></rect><path d="M10 21V8a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1H3"></path></svg>',
        Templates: '<svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"></rect><line x1="3" x2="21" y1="9" y2="9"></line><line x1="9" x2="9" y1="21" y2="9"></line></svg>'
      };
      const comboBoxSelector = '#hs-site-search-modal [data-hs-combo-box]';
      const comboBoxRoot = document.querySelector(comboBoxSelector);
      const comboBoxInput = document.querySelector('#hs-site-search-modal [data-hs-combo-box-input]');
      let isSearchInitialized = false;

      const getSearchCombobox = () => {
        if (!window.HSComboBox) return null;

        return window.HSComboBox.getInstance(comboBoxSelector, true);
      };

      const ensureSearchInitialized = () => {
        if (isSearchInitialized) return getSearchCombobox();
        if (!comboBoxRoot || !window.HSComboBox) return null;

        comboBoxRoot.classList.remove('--prevent-on-load-init');
        window.HSComboBox.autoInit();
        isSearchInitialized = Boolean(getSearchCombobox());

        return getSearchCombobox();
      };

      const activateSearch = () => {
        const combobox = ensureSearchInitialized();

        requestAnimationFrame(() => {
          const instance = combobox || getSearchCombobox();
          if (!instance) return;

          instance.element.setCurrent();
          comboBoxInput?.focus();
          instance.element.inputFocus();

          decorateCategoryTabs();
          decorateResultIcons();
          updatePageTypeVisibility();
          updateExploreHeadingVisibility();
          updateClearButtonVisibility();
        });
      };

      const decorateCategoryTabs = () => {
        document
          .querySelectorAll('#hs-site-search-modal [data-hs-combo-box] button')
          .forEach((button) => {
            const label = button.textContent.trim();
            const isHiddenPageType = hiddenPageTypes.includes(label);
            const isPageTypeButton = visiblePageTypes.includes(label);

            if (isHiddenPageType) {
              button.classList.add('hidden');
              button.hidden = true;
              button.style.display = 'none';
              return;
            }

            if (!isPageTypeButton) return;

            button.dataset.pageType = label;
            if (button.dataset.categoryIconReady === 'true') return;

            const icon = contentTypeIcons[label];
            if (!icon) return;

            button.innerHTML = `${icon}<span>${label}</span>`;
            button.dataset.categoryIconReady = 'true';
          });
      };

      const decorateResultIcons = () => {
        document
          .querySelectorAll('#hs-site-search-modal [data-hs-combo-box-output-item]')
          .forEach((item) => {
            const iconWrapper = item.querySelector('[data-hs-site-search-result-icon]');
            const typeField = item.querySelector('[data-hs-site-search-result-type]');
            const label = typeField ? typeField.textContent.trim() : '';
            const icon = contentTypeIcons[label];

            if (!iconWrapper || !icon || iconWrapper.dataset.iconType === label) return;

            iconWrapper.innerHTML = icon;
            iconWrapper.dataset.iconType = label;
          });
      };

      const resetSearchInput = () => {
        const input = document.querySelector('#hs-site-search-modal [data-hs-combo-box-input]');
        if (!input) return;

        resetResultsScroll();
        input.value = '';
        input.dispatchEvent(new Event('input', { bubbles: true }));
      };

      const updateClearButtonVisibility = () => {
        const clearButtonWrapper = document.querySelector('#hs-site-search-modal [data-hs-site-search-clear-wrapper]');
        if (!clearButtonWrapper || !comboBoxInput) return;

        const hasValue = comboBoxInput.value.trim().length > 0;
        clearButtonWrapper.classList.toggle('hidden', !hasValue);
        clearButtonWrapper.classList.toggle('inline-block', hasValue);
      };

      const resetResultsScroll = () => {
        const itemsWrapper = document.querySelector(
          '#hs-site-search-modal [data-hs-combo-box-output-items-wrapper]'
        );
        if (!itemsWrapper) return;

        itemsWrapper.scrollTop = 0;
      };

      const getVisibleResultItems = () => {
        return Array.from(
          document.querySelectorAll('#hs-site-search-modal [data-hs-combo-box-output-item]')
        ).filter((item) => {
          const style = window.getComputedStyle(item);
          return style.display !== 'none' && style.visibility !== 'hidden';
        });
      };

      const getCurrentResultLink = () => {
        const highlightedItem = document.querySelector(
          '#hs-site-search-modal [data-hs-combo-box-output-item].hs-combo-box-output-item-highlighted'
        );
        const activeItem = document.activeElement?.closest?.(
          '#hs-site-search-modal [data-hs-combo-box-output-item]'
        );
        const fallbackItem = getVisibleResultItems()[0];
        const targetItem = highlightedItem || activeItem || fallbackItem;

        return targetItem ? targetItem.querySelector('a[href]') : null;
      };

      const openCurrentResult = ({ newTab = false } = {}) => {
        const link = getCurrentResultLink();
        if (!link) return false;

        const href = link.getAttribute('href');
        if (!href) return false;

        if (newTab) {
          window.open(href, '_blank', 'noopener');
        } else {
          window.location.assign(href);
        }

        return true;
      };

      const updateExploreHeadingVisibility = () => {
        const heading = document.querySelector('#hs-site-search-heading');
        const buttons = getPageTypeButtons();
        const hasVisiblePageTypes = buttons.some((button) => !button.hidden);

        if (!heading) return;

        heading.classList.toggle('hidden', !hasVisiblePageTypes);
        heading.hidden = !hasVisiblePageTypes;
      };

      const getPageTypeButtons = () => {
        return Array.from(
          document.querySelectorAll('#hs-site-search-modal [data-hs-combo-box] button')
        ).filter((button) => {
          const label = button.dataset.pageType || button.textContent.trim();
          return visiblePageTypes.includes(label);
        });
      };

      const getPageTypeSection = () => {
        const [firstButton] = getPageTypeButtons();
        if (!firstButton) return null;

        return (
          firstButton.closest('.border-b') ||
          firstButton.parentElement?.parentElement ||
          firstButton.parentElement ||
          null
        );
      };

      const getVisibleResultGroups = () => {
        return new Set(
          getVisibleResultItems()
            .map((item) => {
              const typeField = item.querySelector('[data-hs-site-search-result-type]');
              return typeField ? typeField.textContent.trim() : '';
            })
            .filter((label) => visiblePageTypes.includes(label) && label !== 'All')
        );
      };

      const updatePageTypeVisibility = () => {
        const buttons = getPageTypeButtons();
        const matchingGroups = getVisibleResultGroups();
        const hasMatches = matchingGroups.size > 0;
        const tabsWrapper = buttons[0] ? buttons[0].parentElement : null;
        const tabsSection = getPageTypeSection();

        buttons.forEach((button) => {
          const label = button.dataset.pageType || button.textContent.trim();
          const shouldShow =
            hasMatches && (label === 'All' || matchingGroups.has(label));

          button.classList.toggle('hidden', !shouldShow);
          button.hidden = !shouldShow;
          button.style.display = shouldShow ? '' : 'none';
        });

        if (tabsWrapper) {
          tabsWrapper.classList.toggle('hidden', !hasMatches);
          tabsWrapper.hidden = !hasMatches;
          tabsWrapper.style.display = hasMatches ? '' : 'none';
        }

        if (tabsSection) {
          tabsSection.classList.toggle('hidden', !hasMatches);
          tabsSection.hidden = !hasMatches;
          tabsSection.style.display = hasMatches ? '' : 'none';
        }

        if (!hasMatches) {
          updateExploreHeadingVisibility();
          return;
        }

        const visibleResultsCount = Array.from(
          getVisibleResultItems()
        ).length;

        if (visibleResultsCount === 0) {
          const fallbackButton =
            buttons.find((button) => !button.hidden && (button.dataset.pageType || button.textContent.trim()) === 'All') ||
            buttons.find((button) => !button.hidden);

          if (fallbackButton) {
            fallbackButton.click();
          }
        }

        updateExploreHeadingVisibility();
      };

      if (comboBoxRoot) {
        const observer = new MutationObserver(() => {
          decorateCategoryTabs();
          decorateResultIcons();
          updatePageTypeVisibility();
          updateExploreHeadingVisibility();
        });

        observer.observe(comboBoxRoot, {
          childList: true,
          subtree: true
        });
      }

      if (comboBoxInput) {
        comboBoxInput.addEventListener('keydown', (evt) => {
          if (!['ArrowLeft', 'ArrowRight', 'Home', 'End'].includes(evt.key)) return;

          evt.stopPropagation();
        });

        comboBoxInput.addEventListener('input', () => {
          requestAnimationFrame(() => {
            resetResultsScroll();
            decorateResultIcons();
            updatePageTypeVisibility();
            updateExploreHeadingVisibility();
            updateClearButtonVisibility();
          });
        });

        comboBoxInput.addEventListener('keydown', (evt) => {
          if (evt.key !== 'Enter') return;

          const didOpen = openCurrentResult({ newTab: evt.metaKey });
          if (!didOpen) return;

          evt.preventDefault();
          evt.stopPropagation();
        });
      }

      document
        .querySelectorAll('#hs-site-search-modal [data-hs-site-search-clear]')
        .forEach((button) => {
          button.addEventListener('click', () => {
            resetSearchInput();
            updatePageTypeVisibility();
            updateExploreHeadingVisibility();
            updateClearButtonVisibility();
            comboBoxInput?.focus();
          });
        });

      requestAnimationFrame(() => {
        decorateCategoryTabs();
        decorateResultIcons();
        updatePageTypeVisibility();
        updateExploreHeadingVisibility();
        updateClearButtonVisibility();
      });

      document
        .querySelectorAll('[aria-controls="hs-site-search-modal"]')
        .forEach((button) => {
          button.addEventListener('click', () => {
            activateSearch();
          });
        });

      document
        .querySelectorAll('#hs-site-search-modal [data-hs-overlay="#hs-site-search-modal"]')
        .forEach((button) => {
          button.addEventListener('click', () => {
            resetSearchInput();
            updatePageTypeVisibility();
            updateExploreHeadingVisibility();
            updateClearButtonVisibility();
          });
        });

      document.addEventListener('keydown', (evt) => {
        const isMetaKShortcut =
          evt.metaKey &&
          !evt.ctrlKey &&
          !evt.altKey &&
          (evt.code === 'KeyK' || evt.key === 'k' || evt.key === 'K');

        if (!isMetaKShortcut) return;

        activateSearch();

        const overlay = HSOverlay.getInstance('#hs-site-search-modal', true);
        const combobox = getSearchCombobox();

        if (!overlay || !combobox) return;
        if (overlay.element && overlay.element.el.classList.contains('open')) return;

        evt.preventDefault();
        overlay.element.open();
        activateSearch();
      }, true);
    });


    
