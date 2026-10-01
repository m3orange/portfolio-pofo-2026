<script>
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
</script>
<script>
  (function () {
    const html = document.querySelector('html');
    const isLightOrAuto = localStorage.getItem('hs_theme') === 'light' || (localStorage.getItem('hs_theme') === 'auto' && !window.matchMedia('(prefers-color-scheme: dark)').matches);
    const isDarkOrAuto = localStorage.getItem('hs_theme') === 'dark' || (localStorage.getItem('hs_theme') === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches);

    if (isLightOrAuto && html.classList.contains('dark')) html.classList.remove('dark');
    else if (isDarkOrAuto && html.classList.contains('light')) html.classList.remove('light');
    else if (isDarkOrAuto && !html.classList.contains('dark')) html.classList.add('dark');
    else if (isLightOrAuto && !html.classList.contains('light')) html.classList.add('light');
  })();
</script>
<style type="text/css">
  #mc_embed_signup input.mce_inline_error {
    border-color: #6B0505;
  }

  #mc_embed_signup div.mce_inline_error {
    margin: 0 0 1em 0;
    padding: 5px 10px;
    background-color: #6B0505;
    font-weight: bold;
    z-index: 1;
    color: #fff;
  }
</style>
<style>
  :root .inset-x-0[x-data="adblockBanner()"],
  :root #hero a[download="Unicore.zip"],
  :root body>div[data-captcha-enable="true"]>div.cleanslate[id^="google-captcha-"]>div.captcha-box,
  :root html>#__cf_challenge_host__,
  :root html[data-scrapbook-source][data-scrapbook-create][data-scrapbook-title]>body.no-js>div.main-wrapper[role="main"]>div.main-content,
  :root html>body.body>div.container>div.content>form>table.optoutForm,
  :root html>body>div.container>form#unsubscribe-form[onsubmit="submitUnsubscribeForm(event)"],
  :root html[lang]>body:not([class]):not([id]):not([style])>div.background-container>div.container>div.captcha-box,
  :root body.wp-singular>div[id$="-overlay"]>div[id$="-container"]>div[class*="-container"]>div[id$="-checkbox-window"],
  :root html>.cfmd-shadow-host,
  :root .wp-singular>iframe[srcdoc][allowfullscreen][allow*="clipboard-write"][style*="2147483647"],
  :root html>#nc-cover:not(body),
  :root body>.cf-root,
  :root .cjs-container>#checkbox-window,
  :root .wp-singular>div[data-sm][style*="2147483647"]>iframe[style*="100%"][allow*="clipboard-write"],
  :root #ipBar+.main,
  :root #mainBtn[onclick="startVerify()"],
  :root #turnstile[onclick="handleClick()"],
  :root body>.page>.verify-row,
  :root body>.page>#mainVerifyRow,
  :root html[lang]>body.ishome>div.adult+main.main,
  :root .container a[title="AI Jerk OFF"][href][target="_blank"],
  :root body>#mdl-register.modal.anm-e.regnow,
  :root .flex a[href^="http://adpostup.com/"],
  :root #app-root~a[href][target="_blank"][style="position: fixed;top: 0;left: 0;width: 100%;height: 100%;display: block;z-index: 9999999;cursor: auto"],
  :root #wrapper~a[href][target="_blank"][style="position: fixed;top: 0;left: 0;width: 100%;height: 100%;display: block;z-index: 9999999;cursor: auto"],
  :root .header~div[style^="position:fixed;inset:0;z-index:2147483647;background:black;opacity:0.01;height:"],
  :root img[width="728"][height="90"],
  :root button.btn[data-openuri*="/4/"],
  :root #adbtm[onclick="badr();"],
  :root a[href^="https://www.polybuzz.ai/"] img.responsive-image,
  :root .kln>a[href^="https://www.polybuzz.ai/"],
  :root html[lang][style^="--main-bg-color"]>body:not([class]):not([id])>div#container[style="visibility: visible;"]>div#banner[style="opacity:0"]~main:not([class]):not([id])>div#message,
  :root #donate>a[href][style][onclick="thank_you()"][target="_blank"][rel="nofollow"],
  :root .container a[href^="https://insensitiveshoweraudible.com/"],
  :root .jwplayer~div[style="position:absolute;top:0;left:0;width: 100%;height: 100%;z-index:2147483647"],
  :root iframe.lazyloaded[data-src^="https://rcm-fe.amazon-adsystem.com/"],
  :root div[style^="position: fixed; inset: 0px; z-index: 2147483647; background: black; opacity: 0.01"],
  :root .skel-layers-fixed a[href*=".com/smartpop/"],
  :root [style^="position: fixed; inset: 0px; z-index: 2147483647; background-color: transparent; pointer-events: auto; cursor: auto; margin: 0px; padding: 0px; display: block;"],
  :root .ads-iframe:not([style="position: absolute; left: -10px; top: -10px;"]),
  :root .ad-content:not(:empty),
  :root div[style="position: fixed; display: block; width: 100%; height: 100%; inset: 0px; background-color: rgba(0, 0, 0, 0); z-index: 300000;"],
  :root #weatherad:not(:empty),
  :root #topbannerad:not(:empty),
  :root #topBannerAd:not(:empty),
  :root #ad_img:not(:empty),
  :root #adContext:not(:empty),
  :root .ad-300x250:not(.ads),
  :root [data-ad-width]:not([style$="left: -10000px !important; top: -1000px !important;"]):not(.adsbygoogle),
  :root .adunit:not(.text-ad),
  :root .adslot_1:not(.text-ad),
  :root #ads-footer:not([style^="position: absolute; left: -5000px"]),
  :root a.tdn[href^="https://landing.brazzersnetwork.com/"],
  :root #ads-1:not([style^="position: absolute; left: -5000px"]),
  :root #adframe:not(frameset):not([style^="position: absolute; left: -5000px"]),
  :root #ad_slot:not([style^="position: absolute; left: -5000px"]),
  :root #ad_big:not([style^="position: absolute; left: -5000px"]),
  :root #ad_area:not([style^="position: absolute; left: -5000px"]),
  :root #ad_300:not([style^="position: absolute; left: -5000px"]),
  :root a[dontfo=""][style$="position: absolute; z-index: 2147483647;"],
  :root [href^="https://join.enjoyx.com/track/"],
  :root a[href*=".click/?z="][href*="&n"],
  :root [href^="//taghaugh.com/"],
  :root div[class$="player-promo-col"],
  :root [href^="https://www.safestcontentgate.com/"],
  :root [href^="//cadsecs.com/"],
  :root [href^="//mellowads.com/"],
  :root .cjs-container>#verify-window,
  :root [href^="https://fireads.online/"],
  :root html[lang="vi"] .sspp-area,
  :root html[lang="tr"]>body.has-footer-ad.has-pageskin-desktop a.pageskin-desktop-wrapper,
  :root html[lang="tr"] #aa-wp .container-ads-adjustment,
  :root body>a.visible[id][href][target="_blank"],
  :root #videojs~div[style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; z-index: 2147483646;"],
  :root html>#bw-rc-host,
  :root .close-btn4[onclick="closeAd4()"],
  :root .close-btn3[onclick="closeAd3()"],
  :root .close-btn[onclick="closeAd()"],
  :root #go-to-top+div[id][class],
  :root .bb~main#container .containerAds,
  :root #midadd:not(:empty),
  :root #adzerk:not(:empty),
  :root #advert-header:not(:empty),
  :root div.card>div#cbRow.checkbox-row[onclick="startVerify()"],
  :root #tongkatlol~script[src^="/shrinke/js/"]~.main-content-box>div[style="width:100%;height:110px"],
  :root body>div[style$="z-index: 2147483647; top: 0px; left: 0px; position: fixed; display: block;"],
  :root html>body>div.container.m-p>#checkbox-window.checkbox-window,
  :root .container a[href^="https://seduced.com"][href*="ref="],
  :root #kt_player .fp-brand,
  :root a[id][href="https://toolkitspro.com"][rel^="noopener noreferrer"],
  :root #kt_player #ads_iframe,
  :root .header-container a[href^="https://candyai.gg/"],
  :root [src^="//dombnrs.com/"],
  :root #kt_player~#sp-player,
  :root a[href*="/go.php?a_aid="],
  :root [href^="https://klsdee.com/"],
  :root [href^="//producebreed.com/"],
  :root #modern-player-root~div[id^="custom-invisible-overlay-"][class^="custom-popup-overlay-"],
  :root [href="//xxxrevpushclcdu.com/app.webp"],
  :root [href^="https://adult.xyz/"],
  :root [href^="https://popcash.net/"],
  :root a[href^="http://www.poweredbyliquidfire.mobi/"],
  :root [href^="https://t.mobtyb.com/"],
  :root [data-lnguri*="vipbox"],
  :root .reklama:not(.ads),
  :root a[href^="https://syndication.exdynsrv.com/splash.php"],
  :root [href*="/afu.php"],
  :root span[id^="ezoic-pub-ad-placeholder-"],
  :root ins.adsbygoogle[data-ad-slot],
  :root ins.adsbygoogle[data-ad-client],
  :root img[src^="https://s-img.adskeeper.com/"],
  :root #download a[download="Unicore.zip"],
  :root guj-ad,
  :root body[data-clipboard-code]>.main-wrapper,
  :root gpt-ad,
  :root div#spot-holder.spot-holder[style="display: block;"],
  :root div[ow-ad-unit-wrapper],
  :root div[id^="zergnet-widget"],
  :root html[lang]>body:not([class]):not([id]):not([style])>div.container>div.recaptcha-box,
  :root div[id^="vuukle-ad-"],
  :root div[id^="taboola-stream-"],
  :root div[id^="sticky_ad_"],
  :root div[id^="st"][style^="z-index: 999999999;"],
  :root div[id^="rc-widget-"],
  :root html>body>div.content>dl>dd.dd1>div.min_sider>form#form1[action="unsubscribe.php"],
  :root div[id^="mrec-leaderboard-"],
  :root div[id^="gpt_ad_"],
  :root div[id^="ezoic-pub-ad-"],
  :root div[id^="dfp-ad-"],
  :root div[id^="crt-"][style],
  :root div[id^="adspot-"],
  :root a[onclick="openAuc();"],
  :root ps-connatix-module,
  :root div[id^="ad_position_"],
  :root [data-ad-module]:not([style$="left: -10000px !important; top: -1000px !important;"]):not(.adsbygoogle),
  :root a[id][href="https://chpadblock.com/"][rel^="noopener noreferrer"],
  :root div[id^="ad-div-"],
  :root div[id*="ScriptRoot"],
  :root div[id*="MarketGid"],
  :root #banner468:not([style^="position: absolute; left: -5000px"]),
  :root div[data-id-advertdfpconf],
  :root div[data-dfp-id],
  :root div[style="top: 0px; left: 0px; width: 1287px; height: 500px; position: fixed; z-index: 2147483647;"],
  :root hl-adsense,
  :root div[data-contentexchange-widget],
  :root div[data-alias="300x250 Ad 2"],
  :root div[data-adzone],
  :root #buy-sell-ads:not(:empty),
  :root div[data-adunit-path],
  :root div[data-adname],
  :root div[data-ad-targeting],
  :root div[data-ad-region],
  :root div[data-ad-placeholder],
  :root div[aria-label="Ads"],
  :root .google-ad:not(.testAd),
  :root display-ads,
  :root #ad_space:not([style^="position: absolute; left: -5000px"]),
  :root display-ad-component,
  :root atf-ad-slot,
  :root aside[id^="adrotate_widgets-"],
  :root div[style^="position:fixed;inset:0px;z-index:2147483647;background:black;opacity:0.01"],
  :root aside[aria-label="retailmedia.complimentarySponsored"],
  :root html[lang]>body#body>*>div.cvh.BlockClicksActivityBusy,
  :root amp-fx-flying-carpet,
  :root amp-embed[type="taboola"],
  :root html>#nochain-demo-frame:not(body),
  :root html[lang="tr"] #aa-wp .rnd-ads-adjustment,
  :root amp-connatix-player,
  :root div[id^="google_dfp_"],
  :root ad-slot,
  :root a[href^="https://www.purevpn.com/"][href*="&utm_source=aff-"],
  :root a[href^="https://www.onlineusershielder.com/"],
  :root html[lang="tr"]>body.has-footer-ad.has-pageskin-desktop a.pageskin-click-right,
  :root a[href^="https://financeads.net/tc.php?"],
  :root a[href^="https://www.mrskin.com/tour"],
  :root a[href^="https://www.infowarsstore.com/"]>img,
  :root a[href^="https://www.highperformancecpmgate.com/"],
  :root amp-ad,
  :root a[href^="https://www.highcpmrevenuenetwork.com/"],
  :root a[href^="https://www.get-express-vpn.com/offer/"],
  :root a[href^="https://lnkxt.bannerator.com/"],
  :root a[href^="https://www.geekbuying.com/dynamic-ads/"],
  :root #cmdTextDisplay~*,
  :root [href^="https://groorsoa.net/"],
  :root a[href*=".sadbaguette.com/"],
  :root a[href^="https://www.financeads.net/tc.php?"],
  :root a[href^="https://www.effectiveratecpm.com/"],
  :root [href^="https://www.herbanomic.com/"]>img,
  :root a[href^="https://www.dql2clk.com/"],
  :root [data-template-type="nativead"],
  :root a[href^="https://www.adultempire.com/"][href*="?partner_id="],
  :root a[href^="https://www.nutaku.net/signup/landing/"],
  :root a[href^="https://www.dating-finder.com/signup/?ai_d="],
  :root a[href^="https://wolf-327b.com/"],
  :root body>.content-wrapper>.cf-wrap,
  :root [data-ad-manager-id]:not([style$="left: -10000px !important; top: -1000px !important;"]):not(.adsbygoogle),
  :root a[href^="https://voluum.prom-xcams.com/"],
  :root a[href^="https://twinrdsyte.com/"],
  :root .category-ads:not(html):not(body):not(.post),
  :root a[href^="https://twinrdsrv.com/"],
  :root [href="https://snvhost.com/"],
  :root a[href^="https://trk.nfl-online-streams.club/"],
  :root a[href^="https://tracking.avapartner.com/"],
  :root a[href^="https://track.wg-aff.com"],
  :root a[href^="https://track.ultravpn.com/"],
  :root a[href^="https://track.afcpatrk.com/"],
  :root [href="https://t.me/Russia_Vs_Ukraine_War3"],
  :root a[href^="https://track.adform.net/"],
  :root a[href^="https://torguard.net/aff.php"]>img,
  :root .menu-item a[href^="https://go.rmhfrtnd.com"],
  :root [data-identity="adhesive-ad"],
  :root a[href^="https://tc.tradetracker.net/"]>img,
  :root a[href^="https://tatrck.com/"],
  :root a[href^="https://click.candyoffers.com/"],
  :root [href^="https://zstacklife.com/"] img,
  :root a[href^="https://t.aslnk.link/"],
  :root .container a[href^="https://go.mavrtracktor.com/"],
  :root a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"],
  :root a[href^="https://t.ajump1.com/"],
  :root a[href^="https://t.adating.link/"],
  :root a[href^="https://go.trackitalltheway.com/"],
  :root [href^="https://track.fiverr.com/visit/"]>img,
  :root a[href^="https://syndication.exoclick.com/"],
  :root a[href^="https://syndication.dynsrvtbg.com/"],
  :root div[data-alias="300x250 Ad 1"],
  :root a[href^="https://syndicate.contentsserved.com/"],
  :root a[href^="https://svb-analytics.trackerrr.com/"],
  :root a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"]+.ob_source,
  :root a[href^="http://www.iyalc.com/"],
  :root a[href^="https://claring-loccelkin.com/"],
  :root a[href^="https://stardomcoit.com/"],
  :root a[href^="https://track.aftrk5.com/"],
  :root a[href^="https://slkmis.com/"],
  :root a[href^="https://myclick-2.com/"],
  :root a[href^="https://sexynearme.com/"],
  :root a[href^="https://s.zlinkt.com/"],
  :root a[href^="https://s.zlinkr.com/"],
  :root bottomadblock,
  :root a[href^="https://s.zlinkd.com/"],
  :root a[href^="https://ad.doubleclick.net/"],
  :root a[href^="https://static.fleshlight.com/images/banners/"],
  :root a[href^="https://s.zlink7.com/"],
  :root a[href^="https://s.ma3ion.com/"],
  :root a[href^="https://www.privateinternetaccess.com/"]>img,
  :root a[href^="https://s.gentlefieldpattern.com/"],
  :root a[href^="https://s.eunow4u.com/"],
  :root a[href^="https://random-affiliate.atimaze.com/"],
  :root #downloadAd:not(:empty),
  :root #kt_player>div[style$="display: block;"][style*="inset: 0px;"],
  :root a[href^="https://quotationfirearmrevision.com/"],
  :root a[href^="https://pubads.g.doubleclick.net/"],
  :root a[href^="https://prf.hn/click/"][href*="/camref:"]>img,
  :root a[href^="https://www.dating-finder.com/?ai_d="],
  :root a[href^="https://serve.awmdelivery.com/"],
  :root a[href^="https://prf.hn/click/"][href*="/adref:"]>img,
  :root app-ad,
  :root [href^="https://ap.octopuspop.com/click/"]>img,
  :root a[href^="https://postback1win.com/"],
  :root html[lang]>body#body>*>div.cv-xwrapper>div.cvc>div.cv-inner,
  :root [href^="https://go.mavrtracktor.com/"],
  :root a[href^="https://a.adtng.com/"],
  :root a[href^="https://playnano.online/offerwalls/?ref="],
  :root a[href^="https://mmwebhandler.aff-online.com/"],
  :root a[href^="https://www.bet365.com/"][href*="affiliate="],
  :root a[href^="https://pb-track.com/"],
  :root a[href^="https://pb-front.com/"],
  :root a[href^="https://paid.outbrain.com/network/redir?"],
  :root a[href^="https://streamate.com/landing/click/"],
  :root div[class^="Adstyled__AdWrapper-"],
  :root a[href^="https://osfultrbriolenai.info/"],
  :root a[href^="https://upsups.click/"],
  :root .ad-placeholder:not(#detect, #detect_ad_empire, #filter_ads_by_classname, .adsbox),
  :root a[href^="https://ndt5.net/"],
  :root a[href^="https://natour.naughtyamerica.com/track/"],
  :root a.poly-title[href^="https://www.polybuzz.ai/"],
  :root a[href^="https://mediaserver.entainpartners.com/renderBanner.do?"],
  :root [data-ad-name],
  :root a[href^="https://loboclick.com/"],
  :root a[href^="https://lead1.pl/"],
  :root .cta-button[onclick="openUpdateModal()"],
  :root a[href^="https://landing.brazzersnetwork.com/"],
  :root a[href^="https://join.bannedsextapes.com/track/"],
  :root [href^="https://exi8ef83z9.com/"],
  :root a[href^="https://jaxofuna.com/"],
  :root a[href^="https://italarizege.xyz/"],
  :root .category-ad:not(html):not(body):not(.post),
  :root a[href^="https://s.happyleafmotion.com/"],
  :root a[href^="https://identicaldrench.com/"],
  :root a[href^="https://helmethomicidal.com/"],
  :root #adsquare:not([style^="position: absolute; left: -5000px"]),
  :root a[href^="https://golinks.work/"],
  :root a[href^="https://go.xxxjmp.com"],
  :root [class^="div-gpt-ad"]:not([style^="width: 1px; height: 1px; position: absolute; left: -10000px; top: -"]),
  :root a[href^="https://zirdough.net/"],
  :root [class^="tile-picker__CitrusBannerContainer-sc-"],
  :root a[href^="https://go.xxxiijmp.com"],
  :root .ad-link:not(.adsbox),
  :root a[href^="https://go.xtbaffiliates.com/"],
  :root a[href^="https://go.xlviirdr.com"],
  :root div[class$="-adlabel"],
  :root a[href^="https://go.xlviiirdr.com"],
  :root a[href^="https://go.xlivrdr.com"],
  :root a[href^="https://ismlks.com/"],
  :root [href^="https://www.mypillow.com/"]>img,
  :root a[href^="https://go.xlirdr.com"],
  :root [data-css-class="dfp-inarticle"],
  :root a[href^="https://go.tmrjmp.com"],
  :root a[href^="https://go.markets.com/visit/?bta="],
  :root a[href^="https://billing.purevpn.com/aff.php"]>img,
  :root a[href^="https://go.hpyrdr.com/"],
  :root [data-lnguri^="https://s3.amazonaws.com"],
  :root a[href^="https://lijavaxa.com/"],
  :root a[href^="https://go.goaserv.com/"],
  :root a[href^="https://go.etoro.com/"]>img,
  :root a[href^="https://go.dmzjmp.com"],
  :root a[href^="https://www.bang.com/?aff="],
  :root #mgb-container>#mgb,
  :root a[href^="https://go.admjmp.com"],
  :root a[href^="https://get.surfshark.net/aff_c?"][href*="&aff_id="]>img,
  :root a[href^="https://datewhisper.life/"],
  :root a[href^="https://click.linksynergy.com/fs-bin/"]>img,
  :root a[href^="https://get-link.xyz/"],
  :root a[href^="https://www.mrskin.com/account/"],
  :root a[id][href="https://hamrocsit.com"][rel^="noopener noreferrer"],
  :root a[href^="https://www.adskeeper.com"],
  :root #vidcloud-player>#overlay-container,
  :root a[data-redirect^="https://paid.outbrain.com/network/redir?"],
  :root [href^="https://clicks.affstrack.com/"]>img,
  :root a[href^="https://engine.phn.doublepimp.com/"],
  :root a[href^="https://dl-protect.net/"],
  :root a[href*=".foxqck.com/"],
  :root a[href^="https://ctosrd.com/"],
  :root a[href^="https://clixtrac.com/"],
  :root a[href^="https://clicks.pipaffiliates.com/"],
  :root #ad_footer:not([style^="position: absolute; left: -5000px"]),
  :root app-advertisement,
  :root a[href^="https://getmatchedlocally.com/"],
  :root a[href^="https://clickins.slixa.com/"],
  :root a[href^="https://combodef.com/"],
  :root a[href^="https://click.hoolig.app/"],
  :root a[href^="https://track.totalav.com/"],
  :root a[href^="https://ctrdwm.com/"],
  :root img[src^="https://images.purevpnaffiliates.com"],
  :root a[href^="https://porntubemate.com/"],
  :root a[href^="https://clickadilla.com/"],
  :root a[href^="https://click.dtiserv2.com/"],
  :root a[href^="https://www.adxsrve.com/"],
  :root a[href^="https://click.Ggpickaff.com/"],
  :root a[href^="https://go.awdeliverynet.com/"],
  :root a[href^="https://go.xlvirdr.com"],
  :root a[href^="https://cam4com.go2cloud.org/"],
  :root a[onclick^="window.location.replace('https://random-affiliate.atimaze.com/"],
  :root a[href^="https://bongacams2.com/track?"],
  :root a[href^="https://t.ajrkm1.com/"],
  :root #main-content a[href^="https://hub.buzzaffiliates.com/"],
  :root a[href^="https://bongacams10.com/track?"],
  :root a[href*=".g2afse.com/"],
  :root a[href^="https://bodelen.com/"],
  :root a[href^="//hoodingluster.com/"],
  :root a[href^="https://black77854.com/"],
  :root a[href^="https://rixofa.com/"],
  :root a[href^="https://best-experience-cool.com/"],
  :root [data-taboola-options],
  :root a[href^="https://believessway.com/"],
  :root a[href^="https://Click.ggpickaff.com/"],
  :root a[href^="https://banners.livepartners.com/"],
  :root a[href^="http://revolvemockerycopper.com/"],
  :root a[href^="https://awptjmp.com/"],
  :root a[href^="https://join.sexworld3d.com/track/"],
  :root a[href^="https://track.cam4tracking.com/"],
  :root a[href^="https://aweptjmp.com/"],
  :root a[href^="https://ausoafab.net/"],
  :root #tabVideo>.rmedia,
  :root a[href^="https://aj1070.online/"],
  :root a[href^="https://ads.planetwin365affiliate.com/"],
  :root a[href^="https://ads.leovegas.com/"],
  :root a[href^="https://a.medfoodhome.com/"],
  :root .nya-slot[style],
  :root a[href^="https://a.bestcontentweb.top/"],
  :root a[href^="https://adultfriendfinder.com/go/"],
  :root a[href^="https://a.bestcontentoperation.top/"],
  :root a[href^="https://a2.adform.net/"],
  :root a[href^="https://a.candyai.love/"],
  :root .banner-img>.pbl,
  :root [data-m-ad-id],
  :root a[href^="https://a-ads.com/"],
  :root [data-testid^="section-AdRowBillboard"],
  :root .ad-placeholder:not(#filter_ads_by_classname):not(#detect_ad_empire):not(#detect):not(.adsbox),
  :root broadstreet-zone-container,
  :root a[href^="https://ak.psaltauw.net/"],
  :root a[href^="https://1winpb.com/"],
  :root div[id^="optidigital-adslot"],
  :root [href^="https://wsup.ai/"],
  :root a[href^="https://123-stream.org/"],
  :root a[href^="https://in.rabbtrk.com/"],
  :root a[href^="http://www.h4trck.com/"],
  :root [href^="https://a.acebet.com/api/click?"],
  :root #video_player~div[id] div[style^="position:fixed;inset:0px;z-index:"],
  :root a[href^="http://www.friendlyduck.com/AF_"],
  :root .btn-primary[onclick="showVerification()"],
  :root a[href^="http://partners.etoro.com/"],
  :root [href="https://chaturbate.jjgirls.com/"]>img,
  :root body div#notificationPopup.notificationPopupBlock,
  :root a[href^="http://cam4com.go2cloud.org/aff_c?"],
  :root a[href^="https://ads.betfair.com/redirect.aspx?"],
  :root #leader_ad:not(:empty),
  :root amp-ad-custom,
  :root .home a[href^="https://s.zline0.com/"],
  :root a[href^="https://prf.hn/click/"][href*="/creativeref:"]>img,
  :root a[href*="&maxads="],
  :root a[href^="https://1betandgonow.com/"],
  :root a[href^="http://www.adultempire.com/unlimited/promo?"][href*="&partner_id="],
  :root [href^="http://referrer.website/"],
  :root a[href^="http://trk.globwo.online/"],
  :root a-ad,
  :root a[href^="https://offhandpump.com/"],
  :root a[href^="http://stickingrepute.com/"],
  :root #slashboxes>.deals-rail,
  :root [href^="http://mypillow.com/"]>img,
  :root a[href^="http://bongacams.com/track?"],
  :root .fp-ui>a[href][target="_blank"][style^="position: absolute; inset: 0px;"],
  :root a[href^="//startgaming.net/tienda/" i],
  :root a[href^="https://a.medfoodsafety.com/"],
  :root a[href^="//go.eabids.com/"],
  :root a[href^=" https://www.friendlyduck.com/AF_"],
  :root [data-cl-spot-id],
  :root a[href*="/jump/next.php?r="],
  :root a[href^="https://chaturbate.com/in/?"],
  :root div[style^="z-index: 999999; background-image: url(\"data:image/gif;base64,"][style$="position: absolute;"],
  :root [href^="https://affiliate.fastcomet.com/"]>img,
  :root #banner728x90:not([style^="position: absolute; left: -5000px"]),
  :root div[id^="lazyad-"],
  :root a[href^="http://com-1.pro/"],
  :root [href^="https://www.profitablegatecpm.com/"],
  :root a[href*=".cfm?domain="][href*="&fp="],
  :root #vstr~#overlay,
  :root [id^="section-ad-banner"],
  :root [id^="ad_slider"],
  :root html#html[sti][vic][lang]>body#allbody,
  :root [href^="https://www.onclickperformance.com/"],
  :root a[href^="https://www.goldenfrog.com/vyprvpn?offer_id="][href*="&aff_id="],
  :root a[href^="https://wmctjd.com/"],
  :root a[href*="//jjgirls.com/sex/Chaturbate"],
  :root [id^="ad-wrap-"],
  :root a[href^="http://sarcasmadvisor.com/"],
  :root .ad-slot:not(.adsbox):not(.adsbygoogle),
  :root [href^="https://www.restoro.com/"],
  :root [href^="https://www.targetingpartner.com/"],
  :root .close-btn2[onclick="closeAd2()"],
  :root a[href^="https://join.virtuallust3d.com/"],
  :root .section-subheader>.section-hotel-prices-header,
  :root [href^="https://www.hostg.xyz/"]>img,
  :root [href*="passtechusa.com"],
  :root a[href^="https://bngpt.com/"],
  :root a[href^="http://adultfriendfinder.com/go/"],
  :root a[href^="https://fastestvpn.com/lifetime-special-deal?a_aid="],
  :root a[href^="https://tour.mrskin.com/"],    
  :root a[href^="https://s.zlink3.com/"],
  :root a[href^="http://sneakyadministration.com/"],
  :root [href^="https://www.brighteonstore.com/products/"] img,
  :root citrus-ad-wrapper,
  :root a[href^="https://go.grinsbest.com/"],
  :root [href^="https://www.avantlink.com/click.php"] img,
  :root html.canvas>body.wp-singular+div[popover="manual"],
  :root a[href^="https://t.acam.link/"],
  :root a[href^="https://go.strpjmp.com/"],
  :root [href^="https://url.totaladblock.com/"],
  :root div[id^="ad-position-"],
  :root a[href^="https://www.toprevenuegate.com/"],
  :root a[href^="https://bc.game/"],
  :root a[href^="https://bngprm.com/"],
  :root [href^="https://shiftnetwork.infusionsoft.com/go/"]>img,
  :root a[href^="https://trk.softonixs.xyz/"],
  :root [href^="https://wct.link/click?"],
  :root [href^="//look.utndln.com/offer"],
  :root div[data-adunit],
  :root app-large-ad,
  :root [href^="https://turtlebids.irauctions.com/"] img,
  :root a[href^="https://iqbroker.com/"][href*="?aff="],
  :root .p-post-ad:not(html):not(body),
  :root #vplayer~img[id][onclick],
  :root [href^="https://rpwmct.com/"],
  :root a[href^="https://go.cmtaffiliates.com/"],
  :root [href^="https://mylead.global/stl/"]>img,
  :root [data-testid="adBanner-wrapper"],
  :root [href^="https://optimizedelite.com/"]>img,
  :root a[href^="https://go.rmishe.com/"],
  :root [href^="https://ilovemyfreedoms.com/landing-"],
  :root a[href^="https://go.xxxijmp.com"],
  :root [href^="https://istlnkcl.com/"],
  :root a[href^="https://go.nordvpn.net/aff"]>img,
  :root #tongkatlol~script[src^="/shrinke/js/"]~.main-content-box+.content-box>div[id][style^="position: fixed; display: block; width: 100%;"],
  :root .\[\&_\.gdprAdTransparencyCogWheelButton\]\:\!pjra-z-\[5\],
  :root [href^="http://clicks.totemcash.com/"],
  :root a[href^="https://ad.zanox.com/ppc/"]>img,
  :root [class~="mailpoet_form_popup_overlay"],
  :root a[href^="https://www.brazzersnetwork.com/landing/"],
  :root a[href^="https://explore-site.com/"],
  :root .AdBody:not(body),
  :root [href^="https://glersakr.com/"],
  :root a[href^="https://tm-offers.gamingadult.com/"],
  :root [href^="https://charmingdatings.life/"],
  :root [data-id^="div-gpt-ad"],
  :root a[href^="https://tracker.loropartners.com/"],
  :root [href^="https://awbbjmp.com/"],
  :root a[href^="https://go.bushheel.com/"],
  :root a[href^="https://ctjdwm.com/"],
  :root body>div.mw[role="main"]>.mc,
  :root a[href^="https://camfapr.com/landing/click/"],
  :root div[data-ad-wrapper],
  :root .gnt_em_vp_c[data-g-s="vp_dk"],
  :root [href="//sexcams.plus/"],
  :root [href^="http://www.mypillow.com/"]>img,
  :root a[href^="https://join.virtualtaboo.com/track/"],
  :root [id^="ad_sky"],
  :root [name^="google_ads_iframe"],
  :root [href^="https://go.xlrdr.com"],
  :root [href*="uselnk.com/"],
  :root a[href^="https://s.cant3am.com/"],
  :root .nav-item[href^="https://candyai.gg/"],
  :root [data-testid^="taboola-"],
  :root #teaser3[style^="width: 100%;height:0;text-align: center;display: scroll;position:fixed;"],
  :root a[href*=".adglare.net/"],
  :root a[href^="https://track.1234sd123.com/"],
  :root zeus-ad,
  :root [data-testid="prism-ad-wrapper"],
  :root [href^="https://antiagingbed.com/discount/"]>img,
  :root a[href*=".adsrv.eacdn.com/"],
  :root #teaser1[style^="width:autopx;"],
  :root [href^="https://www.cloudways.com/en/?id"],
  :root #modal[doskip][prclck],
  :root body>.main-wrapper>.main-content>.intro>#checkbox-window,
  :root [data-uri^="https://s3.amazonaws.com"],
  :root [href^="https://mypatriotsupply.com/"]>img,
  :root a[href^="https://go.hpyjmp.com"],
  :root iframe[scrolling="no"][sandbox*="allow-popups allow-modals"][style^="width: 100%; height: 100%; border: none;"],
  :root [href^="https://mystore.com/"]>img,
  :root html[lang]>body.startnew>div#sections>section#section_uname,
  :root span[data-ez-ph-id],
  :root [href^="https://track.aftrk1.com/"],
  :root html[lang]>body:not([style])>div.captchaBody,
  :root #adheader:not([style^="position: absolute; left: -5000px"]),
  :root div[id^="adngin-"],
  :root [data-rc-widget],
  :root a[href^="https://stellarcashflow.net/trck/"],
  :root [data-mobile-ad-id],
  :root [href^="https://join.playboyplus.com/track/"],
  :root html>#bw-cf-root,
  :root [href^="https://go.smljmp.com/"],
  :root a[href^="https://gamingadlt.com/?offer="],
  :root a[href^="https://go.bbrdbr.com"],
  :root a[href^="https://fc.lc/ref/"],
  :root body.user-clicked[style="cursor: auto;"]>#root>.app-container,
  :root a[href^="https://pb-imc.com/"],
  :root a[href^="https://www8.smartadserver.com/"],
  :root topadblock,
  :root a[href^="//s.zlinkd.com/"],
  :root a[href^="https://adclick.g.doubleclick.net/"],
  :root [data-freestar-ad][id],
  :root [data-dynamic-ads],
  :root [data-desktop-ad-id],
  :root [data-d-ad-id],
  :root [href^="https://track.wg-aff.com/click"],
  :root a[href^="https://go.rmhfrtnd.com"],
  :root [data-asg-ins],
  :root [data-block-type="ad"],
  :root [onclick*="content.ad/"],
  :root [href^="https://go.rdrjmp.com/"],
  :root a[href^="https://snowdayonline.xyz/"],
  :root a[href^="https://join.dreamsexworld.com/"],
  :root a[href^="http://join.brokestraightboys.com/track/"],
  :root div[id^="div-ads-"],
  :root [href^="https://rapidgator.net/article/premium/ref/"],
  :root a[href^="https://track.aftrk3.com/"],
  :root [href^="https://join3.bannedsextapes.com"],
  :root [href^="https://join.girlsoutwest.com/"],
  :root html>body.hold-transition.theme-primary.bg-img[style^="background-image"][style*="wallpaperaccess.com"][style*="background-repeat"][style*="background-size"],
  :root AMP-AD,
  :root [data-ad-cls],
  :root .ad-box:not(#ad-banner):not(:empty),
  :root body>.wrapper>.card-box>#step-1,
  :root [data-ez-name],
  :root a[style="width:100%;height:100%;z-index:10000000000000000;position:absolute;top:0;left:0;"],
  :root .ob_container .item-container-obpd,
  :root #ads_top:not(a),
  :root a[href^="https://go.mnaspm.com/"],
  :root a[href^="https://service.bv-aff-trx.com/"],
  :root .ad_slot:not(.text-ad),
  :root #st-ami+div[id][class*=" "],
  :root a[href^="https://6-partner.com/"],
  :root [class^="s2nPlayer"],
  :root a[href^="https://traffdaq.com/"],
  :root [data-testid="ad_testID"],
  :root [href^="https://ad.admitad.com/"],
  :root [href^="https://mypillow.com/"]>img,
  :root [data-testid="commercial-label-taboola"],
  :root a[href^="http://tc.tradetracker.net/"]>img,
  :root [class^="amp-ad-"],
  :root .ad_unit:not(.text-ad, .adsbox),
  :root [href="https://clickaine.com"],
  :root #playerOverlay[style="position:absolute; z-index:3"],
  :root a[href^="https://www.liquidfire.mobi/"],
  :root .grid>.container>#aside-promotion,
  :root DFP-AD,
  :root #hero+div.marquee-wrap+section#games+section#features+#download,
  :root #ads-banner:not([style^="position: absolute; left: -5000px"]),
  :root AD-SLOT,
  :root a[href^="https://www.googleadservices.com/pagead/aclk?"]>img,
  :root body>.security-container[style="opacity: 1; transform: translateY(0px);"],
  :root a[href^="https://a.bestcontentfood.top/"],
  :root #kt_player>a[target="_blank"],
  :root [href^="https://zone.gotrackier.com/"],
  :root .ad-area:not(.text-ad),
  :root a[href^="https://ab.advertiserurl.com/aff/"],
  :root #adSpecial:not(:empty),
  :root a[data-oburl^="https://paid.outbrain.com/network/redir?"],
  :root .sidebar-ad:not(.adsbygoogle),
  :root a[href^="https://s.zlinkn.com/"],
  :root a[href^="https://go.xxxvjmp.com/"],
  :root .ads_container:not(.text-ad),
  :root [class^="adDisplay-module"],
  :root a[href^="https://t.ajrkm3.com/"],
  :root in-page-message[doskip],
  :root [href^="https://aads.com/campaigns/"],
  :root a[href^="https://juicyads.in/"],
  :root #ad_728:not([style^="position: absolute; left: -5000px"]),
  :root div[id^="apn_native_ad_slot_"],
  :root .adhesion:not(body),
  :root body>div.captcha-container>div.captcha-card,
  :root ad-shield-ads,
  :root a[href^="https://hot-growngames.life/"],
  :root .ad_box:not(.text-ad),
  :root [href^="https://wap4dollar.com/ad/nonadult/serve.php"],
  :root [href="https://jdrucker.com/gold"]>img,
  :root .fp-player>div[style="position: absolute; inset: 0px; overflow: hidden; z-index: 160; background: transparent; display: block;"],
  :root .ad-wrap:not(#google_ads_iframe_checktag),
  :root a[href^="https://www.friendlyduck.com/AF_"],
  :root html[lang="tr"] #aa-wp+.fixed-footer .footer-ad-container,
  :root [href^="https://ad1.adfarm1.adition.com/"],
  :root #teaser3[style^="width:autopx;"],
  :root a[href^="https://gml-grp.com/"],
  :root a[href^="https://activate-game.com/"],
  :root .ob_dual_right>.ob_ads_header~.odb_div,
  :root a[href^="https://wittered-mainging.com/"],
  :root div[id][style^="position: fixed; inset: 0px; z-index: 2147483647; background: black"][style*="opacity: 0.01"],
  :root #teaser3[style="width: 100%;text-align: center;display: scroll;position:fixed;bottom: 0;margin: 0 auto;z-index: 103;"],
  :root html[lang="tr"]>body.has-footer-ad.has-pageskin-desktop a.pageskin-click-left,
  :root [data-revive-zoneid],
  :root a[href^="https://go.skinstrip.net"][href*="?campaignId="],
  :root figure.movie-detail-banner div[style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; z-index: 999; cursor: pointer;"],
  :root #teaser2[style^="width:autopx;"],
  :root a[href^="https://losingoldfry.com/"],
  :root #player div[style$="cursor: pointer; position: absolute; width: 100%; height: 100%; padding: 1rem; z-index: 2147483647;"],
  :root div[style="position: fixed; inset: 0px; z-index: 2147483647; pointer-events: auto;"],
  :root .scroll-fixable.rail-right>.deals-rail,
  :root div[id^="adrotate_widgets-"],
  :root .Ad-Container:not(.adsbygoogle) {
    display: none !important;
  }
</style>
<script src="preline-mega-menu/l.js" async=""></script>
<link href="https://client.relay.crisp.chat/" rel="dns-prefetch" crossorigin="">
<link href="https://client.crisp.chat/static" rel="preconnect" crossorigin="">
<script src="preline-mega-menu/client_default_242c026.js" type="module" async=""></script>
<link href="preline-mega-menu/client_default_242c026.css" type="text/css" rel="stylesheet">
</head>

<body class="dark:bg-neutral-900" style="zoom: 1;">
  <!-- ========== HEADER ========== -->
  <!-- Topbar -->
  <div class="py-1 border-b border-stone-200 dark:border-neutral-700">
    <div class="w-full mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex flex-nowrap basis-full items-center gap-x-5">
        <p class="inline-block text-xs text-stone-800 truncate dark:text-neutral-200">
          <span class="px-0.5 pe-3">
            <span class="relative">
              <span class="flex absolute top-1/2 inset-s-0 size-1.5 -translate-y-1/2">
                <span
                  class="animate-ping absolute inline-flex size-full rounded-full bg-green-400 opacity-75 dark:bg-green-600"></span>
                <span class="relative inline-flex rounded-full size-1.5 bg-green-500"></span>
              </span>
            </span>
          </span>
          <a class="font-semibold focus:outline-hidden" href="https://preline.co/docs/changelog.html">Update v5.0</a> -
          Preline MCP, AI Prompts, Animated Icons and more. <a class="underline focus:outline-hidden"
            href="https://preline.co/docs/changelog.html">Visit Changelog</a>
        </p>

        <div class="flex items-center lg:gap-x-1 ms-auto lg:order-3">
          <!-- Github -->
          <a class="py-1 px-1.5 relative inline-flex shrink-0 justify-center items-center font-medium text-xs border border-stone-200 dark:border-neutral-700 rounded-full text-stone-800 hover:bg-stone-200 focus:outline-hidden focus:bg-stone-200 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
            href="https://github.com/htmlstreamofficial/preline" target="_blank">
            <svg class="shrink-0 size-4 me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
              fill="currentColor" viewBox="0 0 16 16">
              <path
                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z">
              </path>
            </svg>
            <span id="stars" style="min-width: 36px;">6,445</span>
            <span class="sr-only">Github</span>
          </a>
          <!-- End Github -->

          <div class="flex items-center xl:gap-x-1 relative z-10">
            <div class="flex xl:gap-x-1">
              <a class="relative inline-flex shrink-0 justify-center items-center size-7 font-medium rounded-full text-stone-800 hover:bg-stone-200 focus:outline-hidden focus:bg-stone-200 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                href="https://www.figma.com/community/file/1179068859697769656" target="_blank">
                <svg class="shrink-0 size-4" width="19" height="18" viewBox="0 0 19 18" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M6.875 18C8.531 18 9.875 16.656 9.875 15V12H6.875C5.219 12 3.875 13.344 3.875 15C3.875 16.656 5.219 18 6.875 18Z"
                    fill="#0ACF83"></path>
                  <path d="M3.875 9C3.875 7.344 5.219 6 6.875 6H9.875V12H6.875C5.219 12 3.875 10.656 3.875 9Z"
                    fill="#A259FF"></path>
                  <path d="M3.875 3C3.875 1.344 5.219 0 6.875 0H9.875V6H6.875C5.219 6 3.875 4.656 3.875 3Z"
                    fill="#F24E1E"></path>
                  <path d="M9.87501 0H12.875C14.531 0 15.875 1.344 15.875 3C15.875 4.656 14.531 6 12.875 6H9.87501V0Z"
                    fill="#FF7262"></path>
                  <path
                    d="M15.875 9C15.875 10.656 14.531 12 12.875 12C11.219 12 9.87501 10.656 9.87501 9C9.87501 7.344 11.219 6 12.875 6C14.531 6 15.875 7.344 15.875 9Z"
                    fill="#1ABCFE"></path>
                </svg>
                <span class="sr-only">Figma</span>
              </a>

              <a class="relative inline-flex shrink-0 justify-center items-center size-7 font-medium rounded-full text-stone-800 hover:bg-stone-200 focus:outline-hidden focus:bg-stone-200 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                href="https://x.com/prelineUI" target="_blank">
                <svg class="shrink-0 size-3.5" width="48" height="50" viewBox="0 0 48 50" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M28.5665 20.7714L46.4356 0H42.2012L26.6855 18.0355L14.2931 0H0L18.7397 27.2728L0 49.0548H4.23464L20.6196 30.0087L33.7069 49.0548H48L28.5655 20.7714H28.5665ZM22.7666 27.5131L5.76044 3.18778H12.2646L42.2032 46.012H35.699L22.7666 27.5142V27.5131Z"
                    fill="currentColor"></path>
                </svg>
                <span class="sr-only">X (Twitter)</span>
              </a>
            </div>

            <!-- Dark Mode -->
            <button type="button"
              class="hs-dark-mode-active:hidden block hs-dark-mode font-medium text-stone-800 rounded-full hover:bg-stone-200 focus:outline-hidden focus:bg-stone-200 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
              data-hs-theme-click-value="dark">
              <span class="group inline-flex shrink-0 justify-center items-center size-7">
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
                </svg>
              </span>
            </button>
            <button type="button"
              class="hs-dark-mode-active:block hidden hs-dark-mode font-medium text-stone-800 rounded-full hover:bg-stone-200 focus:outline-hidden focus:bg-stone-200 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
              data-hs-theme-click-value="light">
              <span class="group inline-flex shrink-0 justify-center items-center size-7">
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <circle cx="12" cy="12" r="4"></circle>
                  <path d="M12 2v2"></path>
                  <path d="M12 20v2"></path>
                  <path d="m4.93 4.93 1.41 1.41"></path>
                  <path d="m17.66 17.66 1.41 1.41"></path>
                  <path d="M2 12h2"></path>
                  <path d="M20 12h2"></path>
                  <path d="m6.34 17.66-1.41 1.41"></path>
                  <path d="m19.07 4.93-1.41 1.41"></path>
                </svg>
              </span>
            </button>
            <!-- End Dark Mode -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Topbar -->

  <header
    class="flex flex-wrap lg:justify-start lg:flex-nowrap z-50 w-full py-3 sticky top-0 inset-x-0 bg-white/90 backdrop-blur supports-[backdrop-filter]:bg-white/75 dark:bg-neutral-900/90 dark:supports-[backdrop-filter]:bg-neutral-900/75">
    <nav class="flex flex-wrap basis-full items-center w-full mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Logo Wrapper -->
      <div class="flex items-center gap-x-5">
        <!-- Logo -->
        <a class="flex-none rounded-md focus:outline-hidden focus:opacity-80" href="https://preline.co/">
          <svg class="w-28 h-auto" width="116" height="32" viewBox="0 0 116 32" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M33.5696 30.2968V10.7968H37.4474V13.1789H37.6229C37.7952 12.7972 38.0445 12.4094 38.3707 12.0155C38.7031 11.6154 39.134 11.283 39.6634 11.0183C40.1989 10.7475 40.8636 10.6121 41.6577 10.6121C42.6918 10.6121 43.6458 10.8829 44.5199 11.4246C45.3939 11.9601 46.0926 12.7695 46.6158 13.8529C47.139 14.93 47.4006 16.2811 47.4006 17.9061C47.4006 19.488 47.1451 20.8237 46.6342 21.9132C46.1295 22.9966 45.4401 23.8183 44.5661 24.3784C43.6982 24.9324 42.7256 25.2094 41.6484 25.2094C40.8852 25.2094 40.2358 25.0832 39.7003 24.8308C39.1709 24.5785 38.737 24.2615 38.3984 23.8799C38.0599 23.4921 37.8014 23.1012 37.6229 22.7073H37.5028V30.2968H33.5696ZM37.4197 17.8877C37.4197 18.7309 37.5367 19.4665 37.7706 20.0943C38.0045 20.7222 38.343 21.2115 38.7862 21.5624C39.2294 21.9071 39.768 22.0794 40.402 22.0794C41.0421 22.0794 41.5838 21.904 42.027 21.5532C42.4702 21.1961 42.8056 20.7037 43.0334 20.0759C43.2673 19.4419 43.3842 18.7125 43.3842 17.8877C43.3842 17.069 43.2704 16.3488 43.0426 15.7272C42.8149 15.1055 42.4794 14.6192 42.0362 14.2683C41.593 13.9175 41.0483 13.7421 40.402 13.7421C39.7618 13.7421 39.2202 13.9113 38.777 14.2499C38.34 14.5884 38.0045 15.0685 37.7706 15.6902C37.5367 16.3119 37.4197 17.0444 37.4197 17.8877ZM49.2427 24.9786V10.7968H53.0559V13.2712H53.2037C53.4622 12.391 53.8961 11.7262 54.5055 11.2769C55.1149 10.8214 55.8166 10.5936 56.6106 10.5936C56.8076 10.5936 57.02 10.6059 57.2477 10.6306C57.4754 10.6552 57.6755 10.689 57.8478 10.7321V14.2222C57.6632 14.1668 57.4077 14.1175 57.0815 14.0745C56.7553 14.0314 56.4567 14.0098 56.1859 14.0098C55.6073 14.0098 55.0903 14.136 54.6348 14.3884C54.1854 14.6346 53.8284 14.9793 53.5638 15.4225C53.3052 15.8657 53.176 16.3765 53.176 16.9551V24.9786H49.2427ZM64.9043 25.2556C63.4455 25.2556 62.1898 24.9601 61.1373 24.3692C60.0909 23.7721 59.2845 22.9289 58.7182 21.8394C58.1519 20.7437 57.8688 19.448 57.8688 17.9523C57.8688 16.4935 58.1519 15.2132 58.7182 14.1114C59.2845 13.0096 60.0816 12.1509 61.1096 11.5354C62.1437 10.9199 63.3563 10.6121 64.7474 10.6121C65.683 10.6121 66.5539 10.7629 67.3603 11.0645C68.1728 11.36 68.8806 11.8062 69.4839 12.4033C70.0932 13.0004 70.5672 13.7513 70.9057 14.6561C71.2443 15.5548 71.4135 16.6074 71.4135 17.8138V18.8941H59.4384V16.4566H67.7111C67.7111 15.8903 67.588 15.3886 67.3418 14.9516C67.0956 14.5146 66.754 14.1729 66.317 13.9267C65.8861 13.6744 65.3844 13.5482 64.812 13.5482C64.2149 13.5482 63.6856 13.6867 63.2239 13.9637C62.7684 14.2345 62.4114 14.6007 62.1529 15.0624C61.8944 15.5179 61.762 16.0257 61.7559 16.5858V18.9033C61.7559 19.605 61.8851 20.2113 62.1437 20.7222C62.4083 21.2331 62.7807 21.627 63.2608 21.904C63.741 22.181 64.3103 22.3195 64.9689 22.3195C65.406 22.3195 65.8061 22.2579 66.1692 22.1348C66.5324 22.0117 66.8432 21.8271 67.1018 21.5808C67.3603 21.3346 67.5572 21.033 67.6927 20.676L71.3304 20.9161C71.1458 21.7901 70.7672 22.5534 70.1948 23.2058C69.6285 23.8522 68.896 24.3569 67.9974 24.7201C67.1048 25.0771 66.0738 25.2556 64.9043 25.2556ZM77.1335 6.06949V24.9786H73.2003V6.06949H77.1335ZM79.5043 24.9786V10.7968H83.4375V24.9786H79.5043ZM81.4801 8.96863C80.8954 8.96863 80.3937 8.77474 79.9752 8.38696C79.5628 7.99302 79.3566 7.52214 79.3566 6.97431C79.3566 6.43265 79.5628 5.96792 79.9752 5.58014C80.3937 5.1862 80.8954 4.98923 81.4801 4.98923C82.0649 4.98923 82.5635 5.1862 82.9759 5.58014C83.3944 5.96792 83.6037 6.43265 83.6037 6.97431C83.6037 7.52214 83.3944 7.99302 82.9759 8.38696C82.5635 8.77474 82.0649 8.96863 81.4801 8.96863ZM89.7415 16.7797V24.9786H85.8083V10.7968H89.5569V13.2989H89.723C90.037 12.4741 90.5632 11.8216 91.3019 11.3415C92.0405 10.8552 92.9361 10.6121 93.9887 10.6121C94.9735 10.6121 95.8322 10.8275 96.5647 11.2584C97.2971 11.6893 97.8665 12.3048 98.2728 13.105C98.679 13.899 98.8821 14.8469 98.8821 15.9487V24.9786H94.9489V16.6505C94.9551 15.7826 94.7335 15.1055 94.2841 14.6192C93.8348 14.1268 93.2162 13.8806 92.4283 13.8806C91.8989 13.8806 91.4311 13.9944 91.0249 14.2222C90.6248 14.4499 90.3109 14.7823 90.0831 15.2193C89.8615 15.6502 89.7477 16.1703 89.7415 16.7797ZM107.665 25.2556C106.206 25.2556 104.951 24.9601 103.898 24.3692C102.852 23.7721 102.045 22.9289 101.479 21.8394C100.913 20.7437 100.63 19.448 100.63 17.9523C100.63 16.4935 100.913 15.2132 101.479 14.1114C102.045 13.0096 102.842 12.1509 103.87 11.5354C104.905 10.9199 106.117 10.6121 107.508 10.6121C108.444 10.6121 109.315 10.7629 110.121 11.0645C110.934 11.36 111.641 11.8062 112.245 12.4033C112.854 13.0004 113.328 13.7513 113.667 14.6561C114.005 15.5548 114.174 16.6074 114.174 17.8138V18.8941H102.199V16.4566H110.472C110.472 15.8903 110.349 15.3886 110.103 14.9516C109.856 14.5146 109.515 14.1729 109.078 13.9267C108.647 13.6744 108.145 13.5482 107.573 13.5482C106.976 13.5482 106.446 13.6867 105.985 13.9637C105.529 14.2345 105.172 14.6007 104.914 15.0624C104.655 15.5179 104.523 16.0257 104.517 16.5858V18.9033C104.517 19.605 104.646 20.2113 104.905 20.7222C105.169 21.2331 105.542 21.627 106.022 21.904C106.502 22.181 107.071 22.3195 107.73 22.3195C108.167 22.3195 108.567 22.2579 108.93 22.1348C109.293 22.0117 109.604 21.8271 109.863 21.5808C110.121 21.3346 110.318 21.033 110.454 20.676L114.091 20.9161C113.907 21.7901 113.528 22.5534 112.956 23.2058C112.389 23.8522 111.657 24.3569 110.758 24.7201C109.866 25.0771 108.835 25.2556 107.665 25.2556Z"
              fill="currentColor" class="fill-blue-600 dark:fill-white"></path>
            <path
              d="M1 28.9786V15.9786C1 9.35116 6.37258 3.97858 13 3.97858C19.6274 3.97858 25 9.35116 25 15.9786C25 22.606 19.6274 27.9786 13 27.9786H12"
              class="stroke-blue-600 dark:stroke-white" stroke="currentColor" stroke-width="2"></path>
            <path
              d="M5 28.9786V16.1386C5 11.6319 8.58172 7.97858 13 7.97858C17.4183 7.97858 21 11.6319 21 16.1386C21 20.6452 17.4183 24.2986 13 24.2986H12"
              class="stroke-blue-600 dark:stroke-white" stroke="currentColor" stroke-width="2"></path>
            <circle cx="13" cy="16" r="5" fill="currentColor" class="fill-blue-600 dark:fill-white"></circle>
          </svg>
        </a>
        <!-- End Logo -->

        <!-- Search Input -->
        <div>
          <button type="button"
            class="p-1.5 sm:p-1 sm:ps-2.5 w-full xl:min-w-72 inline-flex items-center gap-x-2 text-sm rounded-full border border-stone-200 bg-white text-stone-800 hover:border-stone-300 focus:outline-hidden focus:border-stone-300 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-200 dark:hover:border-neutral-600 dark:focus:border-neutral-600"
            aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-site-search-modal"
            data-hs-overlay="#hs-site-search-modal">
            <svg class="shrink-0 size-3.5 sm:text-stone-400 dark:sm:text-neutral-500" xmlns="http://www.w3.org/2000/svg"
              width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <circle cx="11" cy="11" r="8"></circle>
              <path d="m21 21-4.3-4.3"></path>
            </svg>
            <span class="hidden sm:block">Search</span>
            <span
              class="sm:ms-auto hidden sm:flex items-center gap-x-1 py-1 px-2 bg-stone-100 text-stone-400 rounded-full dark:bg-neutral-800 dark:text-neutral-500">
              <span class="text-[11px]">⌘</span>
              <span class="text-[11px] uppercase">K</span>
            </span>
          </button>
        </div>
        <!-- End Search Input -->

      </div>
      <!-- End Logo Wrapper -->

      <div class="flex items-center lg:gap-x-1 ms-auto lg:order-3">
        <div
          class="flex items-center relative z-10 ps-1 before:hidden lg:before:block before:w-px before:h-4 before:bg-stone-300 dark:before:bg-neutral-700">
          <!-- Button Group -->
          <div class="flex justify-end items-center">
            <a type="button"
              class="py-1.5 px-3 inline-flex justify-center items-center gap-x-2 text-sm font-medium hover:text-blue-600 align-middle hover:border-stone-300 focus:outline-hidden focus:border-stone-300 dark:border-neutral-700 dark:text-neutral-300 dark:hover:border-neutral-600 dark:focus:border-neutral-600"
              href="https://preline.co/signin.html">
              <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <circle cx="12" cy="10" r="3"></circle>
                <path d="M7 20.662V19a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1.662"></path>
              </svg>
              Sign in
            </a>

            <a class="group py-1.5 ps-3 pe-2 hidden lg:inline-flex justify-center items-center gap-x-1 text-sm bg-blue-600 border border-blue-600 text-white ext-sm font-medium rounded-md shadow-2xs align-middle hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700"
              href="https://preline.co/pricing/">
              Get all access
              <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="m12 5 7 7-7 7"></path>
              </svg>
            </a>
          </div>
          <!-- End Button Group -->
        </div>

        <!-- Collapse Button -->
        <div class="ms-1 lg:hidden">
          <button type="button"
            class="hs-collapse-toggle size-9 inline-flex justify-center items-center gap-x-2 rounded-full border border-stone-200 bg-white text-stone-800 shadow-2xs hover:bg-stone-50 focus:outline-hidden focus:bg-stone-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-white/10 dark:focus:bg-white/10 open"
            id="main-navbar-collapse" aria-expanded="true" aria-controls="main-navbar" aria-label="Toggle navigation"
            data-hs-collapse="#main-navbar">
            <svg class="hs-collapse-open:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
              height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <line x1="3" x2="21" y1="6" y2="6"></line>
              <line x1="3" x2="21" y1="12" y2="12"></line>
              <line x1="3" x2="21" y1="18" y2="18"></line>
            </svg>
            <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
              height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <path d="M18 6 6 18"></path>
              <path d="m6 6 12 12"></path>
            </svg>
          </button>
        </div>
        <!-- End Collapse Button -->
      </div>

      <!-- Collapse -->
      <div id="main-navbar"
        class="hs-collapse overflow-hidden lg:overflow-visible transition-all duration-300 basis-full grow ms-auto lg:block lg:w-auto lg:basis-auto lg:order-2 open"
        aria-labelledby="main-navbar-collapse" role="region" style="">
        <div class="flex flex-col mt-5 lg:flex-row lg:items-center lg:justify-end lg:mt-0">
          <a class="inline-flex items-center gap-x-3 text-stone-800 py-2 lg:px-2 text-sm font-medium rounded-lg hover:text-blue-600 focus:outline-hidden focus:text-blue-600 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 "
            href="https://preline.co/docs/">
            <svg class="shrink-0 size-4 block lg:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
              <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
            </svg>
            Docs
          </a>
          <a class="inline-flex items-center gap-x-3 text-stone-800 py-2 lg:px-2 text-sm font-medium rounded-lg hover:text-blue-600 focus:outline-hidden focus:text-blue-600 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 text-blue-600! hover:text-blue-500 dark:text-blue-500! dark:hover:text-blue-400"
            href="https://preline.co/blocks/">
            <svg class="shrink-0 size-4 block lg:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <path d="M8.3 10a.7.7 0 0 1-.626-1.079L11.4 3a.7.7 0 0 1 1.198-.043L16.3 8.9a.7.7 0 0 1-.572 1.1Z"></path>
              <rect x="3" y="14" width="7" height="7" rx="1"></rect>
              <circle cx="17.5" cy="17.5" r="3.5"></circle>
            </svg>
            Blocks
          </a>
          <a class="inline-flex items-center gap-x-3 text-stone-800 py-2 lg:px-2 text-sm font-medium rounded-lg hover:text-blue-600 focus:outline-hidden focus:text-blue-600 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 "
            href="https://preline.co/templates/">
            <svg class="shrink-0 size-4 block lg:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect>
              <line x1="3" x2="21" y1="9" y2="9"></line>
              <line x1="9" x2="9" y1="21" y2="9"></line>
            </svg>
            Templates
          </a>
          <a class="inline-flex items-center gap-x-3 text-stone-800 py-2 lg:px-2 text-sm font-medium rounded-lg hover:text-blue-600 focus:outline-hidden focus:text-blue-600 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 "
            href="https://preline.co/plugins/">
            <svg class="shrink-0 size-4 block lg:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <rect width="7" height="7" x="14" y="3" rx="1"></rect>
              <path d="M10 21V8a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1H3">
              </path>
            </svg>
            Plugins
          </a>
          <!-- Preline AI Dropdown -->
          <div
            class="hs-dropdown [--adaptive:none] [--strategy:static] lg:[--strategy:absolute] lg:[--trigger:hover] relative">
            <button id="main-navbar-preline-ai-dropdown" type="button"
              class="hs-dropdown-toggle w-full inline-flex items-center gap-x-3 lg:gap-x-1 text-stone-800 py-2 lg:px-2 text-sm font-medium rounded-lg hover:text-blue-600 focus:outline-hidden focus:text-blue-600 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 "
              aria-haspopup="menu" aria-expanded="false" aria-label="Preline AI menu">
              <svg class="shrink-0 size-4 block lg:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path
                  d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .962 0L14.064 8.5A2 2 0 0 0 15.5 9.937l6.135 1.582a.5.5 0 0 1 0 .962L15.5 14.064a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.962 0z">
                </path>
                <path d="M20 3v4"></path>
                <path d="M22 5h-4"></path>
                <path d="M4 17v2"></path>
                <path d="M5 18H3"></path>
              </svg>
              Preline AI
              <svg class="shrink-0 size-4 ms-auto lg:ms-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="m6 9 6 6 6-6"></path>
              </svg>
            </button>

            <div
              class="hs-dropdown-menu hs-dropdown-open:opacity-100 opacity-0 relative lg:absolute lg:top-full lg:start-1/2 lg:mt-2 lg:-translate-x-1/2 w-full space-y-1 lg:w-80 z-20 py-1 lg:p-2 lg:bg-white lg:rounded-xl lg:shadow-xl transition-[opacity,margin] duration-[0.1ms] lg:duration-150 dark:lg:bg-neutral-800 hidden"
              role="menu" aria-orientation="vertical" aria-labelledby="main-navbar-preline-ai-dropdown" tabindex="-1"
              style="margin: 0px;" data-placement="bottom-end">
              <a class="group flex gap-x-3 py-2 px-2 lg:p-3 rounded-lg hover:bg-stone-100 focus:outline-hidden focus:bg-stone-100 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 "
                href="https://preline.co/mcp/">
                <svg class="mt-1 shrink-0 size-6 text-stone-800 dark:text-neutral-200"
                  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                  aria-hidden="true">
                  <style>
                    .main-navbar-mcp-unplug-upper,
                    .main-navbar-mcp-unplug-lower {
                      transform-box: view-box;
                      transition: transform 220ms cubic-bezier(.2, 1.8, .4, 1);
                      will-change: transform;
                    }

                    .main-navbar-mcp-unplug-upper path,
                    .main-navbar-mcp-unplug-lower path,
                    .main-navbar-mcp-unplug-prongs,
                    .main-navbar-mcp-unplug-vectors path {
                      fill: none;
                    }

                    .main-navbar-mcp-unplug-prongs {
                      transition: opacity 100ms ease-out;
                    }

                    .main-navbar-mcp-unplug-vectors {
                      opacity: 0;
                      transform: scale(.65);
                      transform-box: view-box;
                      transform-origin: center;
                      transition: opacity 80ms ease-out, transform 180ms cubic-bezier(.2, 1.8, .4, 1);
                    }

                    @media (hover: hover) and (pointer: fine) {
                      .group:hover .main-navbar-mcp-unplug-upper {
                        transform: translate(-8.333%, 8.333%);
                        transition-duration: 280ms;
                      }

                      .group:hover .main-navbar-mcp-unplug-lower {
                        transform: translate(8.333%, -8.333%);
                        transition-duration: 280ms;
                      }

                      .group:hover .main-navbar-mcp-unplug-prongs {
                        opacity: 0;
                        transition-delay: 30ms;
                        transition-duration: 60ms;
                      }

                      .group:hover .main-navbar-mcp-unplug-vectors {
                        opacity: 1;
                        transform: scale(1);
                        transition-delay: 130ms;
                      }
                    }

                    @media (prefers-reduced-motion: reduce) {

                      .main-navbar-mcp-unplug-upper,
                      .main-navbar-mcp-unplug-lower,
                      .main-navbar-mcp-unplug-prongs,
                      .main-navbar-mcp-unplug-vectors {
                        transition: none;
                      }

                      .group:hover .main-navbar-mcp-unplug-upper,
                      .group:hover .main-navbar-mcp-unplug-lower {
                        transform: none;
                      }

                      .group:hover .main-navbar-mcp-unplug-prongs {
                        opacity: 1;
                      }

                      .group:hover .main-navbar-mcp-unplug-vectors {
                        opacity: 0;
                      }
                    }
                  </style>

                  <g class="main-navbar-mcp-unplug-upper">
                    <path d="M19 5L22 2"></path>
                    <path
                      d="M12 6L18 12L20.3 9.7C20.5237 9.47703 20.7013 9.21209 20.8224 8.92036C20.9435 8.62864 21.0059 8.31587 21.0059 8C21.0059 7.68413 20.9435 7.37136 20.8224 7.07963C20.7013 6.78791 20.5237 6.52297 20.3 6.3L17.7 3.7C17.477 3.47626 17.2121 3.29873 16.9204 3.17759C16.6286 3.05646 16.3159 2.99411 16 2.99411C15.6841 2.99411 15.3714 3.05646 15.0796 3.17759C14.7879 3.29873 14.523 3.47626 14.3 3.7L12 6Z">
                    </path>
                  </g>
                  <g class="main-navbar-mcp-unplug-lower">
                    <path d="M2 22L5 19"></path>
                    <path
                      d="M6.3 20.3C6.52297 20.5237 6.78791 20.7013 7.07963 20.8224C7.37136 20.9435 7.68413 21.0059 8 21.0059C8.31587 21.0059 8.62864 20.9435 8.92036 20.8224C9.21209 20.7013 9.47703 20.5237 9.7 20.3L12 18L6 12L3.7 14.3C3.47626 14.523 3.29873 14.7879 3.17759 15.0796C3.05646 15.3714 2.99411 15.6841 2.99411 16C2.99411 16.3159 3.05646 16.6286 3.17759 16.9204C3.29873 17.2121 3.47626 17.477 3.7 17.7L6.3 20.3Z">
                    </path>
                    <path class="main-navbar-mcp-unplug-prongs" d="M7.5 13.5L10 11"></path>
                    <path class="main-navbar-mcp-unplug-prongs" d="M10.5 16.5L13 14"></path>
                  </g>

                  <g class="main-navbar-mcp-unplug-vectors">
                    <path d="M5 8.5L2 7.5"></path>
                    <path d="M8.25736 5.6005L7.25736 2.6005"></path>
                    <path d="M15.5533 19.0533L16.5533 22.0533"></path>
                    <path d="M18.8107 16.1538L21.8107 17.1538"></path>
                  </g>
                </svg>
                <span class="grow">
                  <span class="block text-sm font-medium text-stone-800 dark:text-neutral-200">Preline MCP</span>
                  <span class="block text-xs text-stone-500 dark:text-neutral-500">Connect agents to Preline components,
                    blocks, docs, and framework guides.</span>
                </span>
              </a>

              <a class="group flex gap-x-3 py-2 px-2 lg:p-3 rounded-lg hover:bg-stone-100 focus:outline-hidden focus:bg-stone-100 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 "
                href="https://preline.co/ai-prompt/">
                <svg class="mt-1 shrink-0 size-6 text-stone-800 dark:text-neutral-200"
                  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                  aria-hidden="true">
                  <style>
                    .main-navbar-ai-prompts-dots,
                    .main-navbar-ai-prompts-back {
                      transform-box: view-box;
                      transform-origin: 17px 19px;
                    }

                    .main-navbar-ai-prompts-dots {
                      opacity: 0;
                      transform: scale(.65);
                      transition: opacity 80ms ease-out, transform 160ms cubic-bezier(.23, 1, .32, 1);
                    }

                    .main-navbar-ai-prompts-back {
                      transition: opacity 80ms ease-out 40ms, transform 160ms cubic-bezier(.23, 1, .32, 1) 40ms;
                    }

                    .main-navbar-ai-prompts-dot {
                      transform-box: fill-box;
                      transform-origin: center;
                    }

                    @keyframes main-navbar-ai-prompts-typing {

                      0%,
                      60%,
                      100% {
                        opacity: .45;
                        transform: translateY(0) scale(.9);
                      }

                      30% {
                        opacity: 1;
                        transform: translateY(-1px) scale(1);
                      }
                    }

                    @media (hover: hover) and (pointer: fine) {
                      .group:hover .main-navbar-ai-prompts-dots {
                        opacity: 1;
                        transform: scale(1);
                        transition-delay: 35ms;
                        transition-duration: 100ms, 220ms;
                        transition-timing-function: ease-out, cubic-bezier(.2, 1.55, .4, 1);
                      }

                      .group:hover .main-navbar-ai-prompts-back {
                        opacity: 0;
                        transform: scale(.65);
                        transition-delay: 0ms;
                        transition-duration: 60ms, 120ms;
                      }

                      .group:hover .main-navbar-ai-prompts-dot {
                        animation: main-navbar-ai-prompts-typing 720ms cubic-bezier(.45, 0, .55, 1) infinite both;
                      }

                      .group:hover .main-navbar-ai-prompts-dot:nth-child(2) {
                        animation-delay: 120ms;
                      }
                    }

                    @media (prefers-reduced-motion: reduce) {

                      .main-navbar-ai-prompts-dots,
                      .main-navbar-ai-prompts-back {
                        transform: none;
                        transition: opacity 100ms ease-out;
                      }

                      .group:hover .main-navbar-ai-prompts-dots {
                        opacity: 1;
                      }

                      .group:hover .main-navbar-ai-prompts-back {
                        opacity: 0;
                      }

                      .group:hover .main-navbar-ai-prompts-dot {
                        animation: none;
                      }
                    }
                  </style>

                  <path
                    d="M16 10C16 10.5304 15.7893 11.0391 15.4142 11.4142C15.0391 11.7893 14.5304 12 14 12H6.828C6.29761 12.0001 5.78899 12.2109 5.414 12.586L3.212 14.788C3.1127 14.8873 2.9862 14.9549 2.84849 14.9823C2.71077 15.0097 2.56803 14.9956 2.43831 14.9419C2.30858 14.8881 2.1977 14.7971 2.11969 14.6804C2.04167 14.5637 2.00002 14.4264 2 14.286V4C2 3.46957 2.21071 2.96086 2.58579 2.58579C2.96086 2.21071 3.46957 2 4 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V10Z">
                  </path>

                  <g class="main-navbar-ai-prompts-dots">
                    <path class="main-navbar-ai-prompts-dot"
                      d="M14 20C14.5523 20 15 19.5523 15 19C15 18.4477 14.5523 18 14 18C13.4477 18 13 18.4477 13 19C13 19.5523 13.4477 20 14 20Z">
                    </path>
                    <path class="main-navbar-ai-prompts-dot"
                      d="M20 20C20.5523 20 21 19.5523 21 19C21 18.4477 20.5523 18 20 18C19.4477 18 19 18.4477 19 19C19 19.5523 19.4477 20 20 20Z">
                    </path>
                  </g>

                  <path class="main-navbar-ai-prompts-back"
                    d="M20 9C20.5304 9 21.0391 9.21071 21.4142 9.58579C21.7893 9.96086 22 10.4696 22 11V21.286C22 21.4264 21.9583 21.5637 21.8803 21.6804C21.8023 21.7971 21.6914 21.8881 21.5617 21.9419C21.432 21.9956 21.2892 22.0097 21.1515 21.9823C21.0138 21.9549 20.8873 21.8873 20.788 21.788L18.586 19.586C18.211 19.2109 17.7024 19.0001 17.172 19H10C9.46957 19 8.96086 18.7893 8.58579 18.4142C8.21071 18.0391 8 17.5304 8 17V16">
                  </path>
                </svg>
                <span class="grow">
                  <span class="block text-sm font-medium text-stone-800 dark:text-neutral-200">AI Prompts</span>
                  <span class="block text-xs text-stone-500 dark:text-neutral-500">Prompting guide for steering agents
                    to the right Preline UI.</span>
                </span>
              </a>

              <a class="group flex gap-x-3 py-2 px-2 lg:p-3 rounded-lg hover:bg-stone-100 focus:outline-hidden focus:bg-stone-100 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 "
                href="https://preline.co/built-with-ai/">
                <svg class="mt-1 shrink-0 size-6 text-stone-800 dark:text-neutral-200"
                  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                  aria-hidden="true">
                  <defs>
                    <!-- Ripples are cut at the screen and painted UNDER the laptop's own outline, so a
                           ring that reaches the edge stops at the bezel instead of running out across
                           the frame. Same clip as the click mark; only the id is rescoped, because the
                           navbar ships on every page and the gallery may inline the original. -->
                    <clippath id="main-navbar-built-with-ai-screen">
                      <rect x="3" y="4" width="18" height="12" rx="2" ry="2"></rect>
                    </clippath>
                  </defs>

                  <style>
                    /* The `click` mark from the animated-icons set, rescoped for the navbar. The
                         geometry and timing are the authored ones and must not be re-solved here: the
                         cursor seat, the 5.82 travel and the 3.2 ring radius are measured against the
                         screen's inside edges, so nudging any of them puts the pointer or a ripple into
                         the bezel. The only change is the trigger - the gallery loops forever, a navbar
                         icon runs while the row is hovered. */
                    .main-navbar-built-with-ai-pointer {
                      transform-box: view-box;
                    }

                    /* Hidden in the BASE style, not only in the keyframes, so the resting row shows the
                         laptop and the cursor on it and no stray dots on the glass. */
                    .main-navbar-built-with-ai-ring {
                      opacity: 0;
                    }

                    @keyframes main-navbar-built-with-ai-pointer {

                      0%,
                      4% {
                        transform: translate(0, 0);
                        animation-timing-function: cubic-bezier(.4, 0, .3, 1);
                      }

                      6% {
                        transform: translate(-.25px, -.25px);
                        animation-timing-function: cubic-bezier(.3, 0, .3, 1);
                      }

                      8%,
                      11% {
                        transform: translate(0, 0);
                        animation-timing-function: cubic-bezier(.45, 0, .3, 1);
                      }

                      29% {
                        transform: translate(5.8px, .45px);
                        animation-timing-function: cubic-bezier(.4, 0, .3, 1);
                      }

                      31% {
                        transform: translate(5.55px, .2px);
                        animation-timing-function: cubic-bezier(.3, 0, .3, 1);
                      }

                      33%,
                      36% {
                        transform: translate(5.8px, .45px);
                        animation-timing-function: cubic-bezier(.45, 0, .3, 1);
                      }

                      72%,
                      100% {
                        transform: translate(0, 0);
                      }
                    }

                    /* The ring grows by `r`, not by `scale` - scaling a circle takes its stroke with
                         it. Opacity holds flat and only then starts down, or the ripple happens at 4%
                         grey and all anyone sees is a dot. */
                    @keyframes main-navbar-built-with-ai-ring-1 {

                      0%,
                      8% {
                        r: .9px;
                        opacity: 0;
                        animation-timing-function: steps(1, end);
                      }

                      8.5% {
                        r: .9px;
                        opacity: 1;
                        animation-timing-function: cubic-bezier(.25, .55, .4, 1);
                      }

                      16% {
                        opacity: 1;
                        animation-timing-function: linear;
                      }

                      22% {
                        r: 3.2px;
                        opacity: 0;
                        animation-timing-function: steps(1, end);
                      }

                      22.5%,
                      100% {
                        r: .9px;
                        opacity: 0;
                      }
                    }

                    @keyframes main-navbar-built-with-ai-ring-2 {

                      0%,
                      33% {
                        r: .9px;
                        opacity: 0;
                        animation-timing-function: steps(1, end);
                      }

                      33.5% {
                        r: .9px;
                        opacity: 1;
                        animation-timing-function: cubic-bezier(.25, .55, .4, 1);
                      }

                      41% {
                        opacity: 1;
                        animation-timing-function: linear;
                      }

                      47% {
                        r: 3.2px;
                        opacity: 0;
                        animation-timing-function: steps(1, end);
                      }

                      47.5%,
                      100% {
                        r: .9px;
                        opacity: 0;
                      }
                    }

                    @media (hover: hover) and (pointer: fine) {
                      .group:hover .main-navbar-built-with-ai-pointer {
                        animation: main-navbar-built-with-ai-pointer 2.8s infinite;
                      }

                      .group:hover .main-navbar-built-with-ai-ring-1 {
                        animation: main-navbar-built-with-ai-ring-1 2.8s infinite;
                      }

                      .group:hover .main-navbar-built-with-ai-ring-2 {
                        animation: main-navbar-built-with-ai-ring-2 2.8s infinite;
                      }
                    }

                    /* Rests with the cursor on the screen at the first press, which is the pose it is
                         authored at, and both ripples off. */
                    @media (prefers-reduced-motion: reduce) {

                      .group:hover .main-navbar-built-with-ai-pointer,
                      .group:hover .main-navbar-built-with-ai-ring-1,
                      .group:hover .main-navbar-built-with-ai-ring-2 {
                        animation: none;
                      }
                    }
                  </style>

                  <g clip-path="url(#main-navbar-built-with-ai-screen)">
                    <circle class="main-navbar-built-with-ai-ring main-navbar-built-with-ai-ring-1" cx="6.6" cy="7.1"
                      r=".9"></circle>
                    <circle class="main-navbar-built-with-ai-ring main-navbar-built-with-ai-ring-2" cx="12.4" cy="7.55"
                      r=".9"></circle>
                  </g>

                  <rect width="18" height="12" x="3" y="4" rx="2" ry="2"></rect>
                  <path d="M2 20h20"></path>

                  <g class="main-navbar-built-with-ai-pointer">
                    <g transform="translate(5.968 6.468) scale(.29412)" stroke-width="4.335">
                      <path d="M12.586 12.586 19 19"></path>
                      <path
                        d="M3.688 3.037a.497.497 0 0 0-.651.651l6.5 15.999a.501.501 0 0 0 .947-.062l1.569-6.083a2 2 0 0 1 1.448-1.479l6.124-1.579a.5.5 0 0 0 .063-.947z">
                      </path>
                    </g>
                  </g>
                </svg>
                <span class="grow">
                  <span class="block text-sm font-medium text-stone-800 dark:text-neutral-200">Built with AI</span>
                  <span class="block text-xs text-stone-500 dark:text-neutral-500">Complete interfaces coding agents
                    assembled from Preline UI.</span>
                </span>
              </a>

              <div class="pt-2 mt-1 border-t border-stone-200 dark:border-neutral-700">
                <p
                  class="px-3 pb-1 text-[11px] font-medium uppercase tracking-wider text-stone-500 dark:text-neutral-500">
                  Docs</p>

                <a class="group flex items-center gap-x-3 py-2 px-2 lg:px-3 rounded-lg hover:bg-stone-100 focus:outline-hidden focus:bg-stone-100 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 "
                  href="https://preline.co/docs/mcp.html">
                  <span
                    class="inline-flex size-8 shrink-0 items-center justify-center rounded-lg border border-stone-200 text-stone-800 group-hover:bg-white group-focus:bg-white dark:border-neutral-600 dark:text-neutral-200 dark:group-hover:bg-neutral-800 dark:group-focus:bg-neutral-800">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M12 22v-5"></path>
                      <path d="M9 8V2"></path>
                      <path d="M15 8V2"></path>
                      <path d="M18 8v5a4 4 0 0 1-4 4h-4a4 4 0 0 1-4-4V8Z"></path>
                    </svg>
                  </span>
                  <span class="text-sm font-medium text-stone-800 dark:text-neutral-200">MCP Server</span>
                  <svg
                    class="shrink-0 size-4 ms-auto text-stone-400 group-hover:text-stone-600 group-focus:text-stone-600 dark:text-neutral-500 dark:group-hover:text-neutral-300 dark:group-focus:text-neutral-300"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    aria-hidden="true">
                    <path d="m9 18 6-6-6-6"></path>
                  </svg>
                </a>

                <a class="group flex items-center gap-x-3 py-2 px-2 lg:px-3 rounded-lg hover:bg-stone-100 focus:outline-hidden focus:bg-stone-100 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 "
                  href="https://preline.co/docs/ai-prompts.html">
                  <span
                    class="inline-flex size-8 shrink-0 items-center justify-center rounded-lg border border-stone-200 text-stone-800 group-hover:bg-white group-focus:bg-white dark:border-neutral-600 dark:text-neutral-200 dark:group-hover:bg-neutral-800 dark:group-focus:bg-neutral-800">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                      <path d="M13 8H7"></path>
                      <path d="M17 12H7"></path>
                    </svg>
                  </span>
                  <span class="text-sm font-medium text-stone-800 dark:text-neutral-200">AI Prompts</span>
                  <svg
                    class="shrink-0 size-4 ms-auto text-stone-400 group-hover:text-stone-600 group-focus:text-stone-600 dark:text-neutral-500 dark:group-hover:text-neutral-300 dark:group-focus:text-neutral-300"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    aria-hidden="true">
                    <path d="m9 18 6-6-6-6"></path>
                  </svg>
                </a>

                <a class="group flex items-center gap-x-3 py-2 px-2 lg:px-3 rounded-lg hover:bg-stone-100 focus:outline-hidden focus:bg-stone-100 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 "
                  href="https://preline.co/docs/agent-skills.html">
                  <span
                    class="inline-flex size-8 shrink-0 items-center justify-center rounded-lg border border-stone-200 text-stone-800 group-hover:bg-white group-focus:bg-white dark:border-neutral-600 dark:text-neutral-200 dark:group-hover:bg-neutral-800 dark:group-focus:bg-neutral-800">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M15 4V2"></path>
                      <path d="M15 16v-2"></path>
                      <path d="M8 9h2"></path>
                      <path d="M20 9h2"></path>
                      <path d="M17.8 11.8 19 13"></path>
                      <path d="M15 9h.01"></path>
                      <path d="M17.8 6.2 19 5"></path>
                      <path d="m3 21 9-9"></path>
                      <path d="M12.2 6.2 11 5"></path>
                    </svg>
                  </span>
                  <span class="text-sm font-medium text-stone-800 dark:text-neutral-200">Agent Skills</span>
                  <svg
                    class="shrink-0 size-4 ms-auto text-stone-400 group-hover:text-stone-600 group-focus:text-stone-600 dark:text-neutral-500 dark:group-hover:text-neutral-300 dark:group-focus:text-neutral-300"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    aria-hidden="true">
                    <path d="m9 18 6-6-6-6"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <!-- End Preline AI Dropdown -->
          <!-- Design Dropdown -->
          <div
            class="hs-dropdown [--adaptive:none] [--strategy:static] lg:[--strategy:absolute] lg:[--trigger:hover] relative">
            <button id="main-navbar-design-dropdown" type="button"
              class="hs-dropdown-toggle w-full inline-flex items-center gap-x-3 lg:gap-x-1 text-stone-800 py-2 lg:px-2 text-sm font-medium rounded-lg hover:text-blue-600 focus:outline-hidden focus:text-blue-600 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 "
              aria-haspopup="menu" aria-expanded="false" aria-label="Design menu">
              <svg class="shrink-0 size-4 block lg:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <circle cx="13.5" cy="6.5" r=".5" fill="currentColor"></circle>
                <circle cx="17.5" cy="10.5" r=".5" fill="currentColor"></circle>
                <circle cx="8.5" cy="7.5" r=".5" fill="currentColor"></circle>
                <circle cx="6.5" cy="12.5" r=".5" fill="currentColor"></circle>
                <path
                  d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.555-2.503 5.555-5.554C21.965 6.012 17.461 2 12 2z">
                </path>
              </svg>
              Design
              <svg class="shrink-0 size-4 ms-auto lg:ms-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="m6 9 6 6 6-6"></path>
              </svg>
            </button>

            <div
              class="hs-dropdown-menu hs-dropdown-open:opacity-100 opacity-0 relative lg:absolute lg:top-full lg:start-1/2 lg:mt-2 lg:-translate-x-1/2 w-full space-y-1 lg:w-80 z-20 py-1 lg:p-2 lg:bg-white lg:rounded-xl lg:shadow-xl transition-[opacity,margin] duration-[0.1ms] lg:duration-150 dark:lg:bg-neutral-800 hidden"
              role="menu" aria-orientation="vertical" aria-labelledby="main-navbar-design-dropdown" tabindex="-1"
              style="" data-placement="bottom-start">
              <a class="group flex gap-x-3 py-2 px-2 lg:p-3 rounded-lg hover:bg-stone-100 focus:outline-hidden focus:bg-stone-100 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 "
                href="https://preline.co/figma/">
                <svg class="main-navbar-design-figma mt-1 shrink-0 size-6" width="33" height="32" viewBox="0 0 33 32"
                  fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <style>
                    /* The Figma mark from the homepage get started section, scoped to the navbar.
                         The five shapes each turn about their OWN centre, so the logo scrambles in
                         place rather than orbiting as a unit. The homepage version also lifts the whole
                         mark; this one does not. */
                    .main-navbar-design-figma {
                      /* A 10.67 unit shape spun about its own centre reaches ~2.2 units past its
                           own bounds, which takes the top and bottom rows outside the 0 0 33 32
                           viewBox. */
                      overflow: visible;
                    }

                    .main-navbar-design-figma-piece {
                      transform-box: view-box;
                    }

                    .main-navbar-design-figma-piece-green {
                      transform-origin: 12px 26.67px;
                      --main-navbar-design-figma-turns: 1;
                    }

                    .main-navbar-design-figma-piece-purple {
                      transform-origin: 12px 16px;
                      --main-navbar-design-figma-turns: -1;
                    }

                    .main-navbar-design-figma-piece-red {
                      transform-origin: 12px 5.33px;
                      --main-navbar-design-figma-turns: 2;
                    }

                    .main-navbar-design-figma-piece-salmon {
                      transform-origin: 22.67px 5.33px;
                      --main-navbar-design-figma-turns: -2;
                    }

                    .main-navbar-design-figma-piece-blue {
                      transform-origin: 22.67px 16px;
                      --main-navbar-design-figma-turns: 1;
                    }

                    .main-navbar-design-figma-piece:nth-child(2) {
                      --main-navbar-design-figma-delay: .04s;
                    }

                    .main-navbar-design-figma-piece:nth-child(3) {
                      --main-navbar-design-figma-delay: .08s;
                    }

                    .main-navbar-design-figma-piece:nth-child(4) {
                      --main-navbar-design-figma-delay: .12s;
                    }

                    .main-navbar-design-figma-piece:nth-child(5) {
                      --main-navbar-design-figma-delay: .16s;
                    }

                    @keyframes main-navbar-design-figma-turn {
                      0% {
                        transform: rotate(0deg);
                        animation-timing-function: cubic-bezier(.34, 1.4, .5, 1);
                      }

                      15% {
                        transform: rotate(calc(90deg * var(--main-navbar-design-figma-turns, 1)));
                      }

                      30% {
                        transform: rotate(calc(90deg * var(--main-navbar-design-figma-turns, 1)));
                        animation-timing-function: cubic-bezier(.34, 1.4, .5, 1);
                      }

                      45% {
                        transform: rotate(calc(180deg * var(--main-navbar-design-figma-turns, 1)));
                      }

                      60% {
                        transform: rotate(calc(180deg * var(--main-navbar-design-figma-turns, 1)));
                        animation-timing-function: cubic-bezier(.34, 1.4, .5, 1);
                      }

                      75% {
                        transform: rotate(calc(270deg * var(--main-navbar-design-figma-turns, 1)));
                      }

                      88% {
                        transform: rotate(calc(270deg * var(--main-navbar-design-figma-turns, 1)));
                        animation-timing-function: cubic-bezier(.34, 1.4, .5, 1);
                      }

                      100% {
                        transform: rotate(calc(360deg * var(--main-navbar-design-figma-turns, 1)));
                      }
                    }

                    @media (hover: hover) and (pointer: fine) and (prefers-reduced-motion: no-preference) {

                      /* No lift here, unlike the homepage card - at 24px in a menu row the scale
                           reads as the row twitching rather than as the mark lifting. The turns are
                           the whole effect, so they start almost at once rather than waiting out a
                           lift that no longer happens. */
                      .group:hover .main-navbar-design-figma-piece,
                      .group:focus-visible .main-navbar-design-figma-piece {
                        animation: main-navbar-design-figma-turn 1.9s calc(.06s + var(--main-navbar-design-figma-delay, 0s)) both;
                      }
                    }
                  </style>

                  <path class="main-navbar-design-figma-piece main-navbar-design-figma-piece-green"
                    d="M12 31.9999C14.944 31.9999 17.3333 29.6106 17.3333 26.6666V21.3333H12C9.05596 21.3333 6.66663 23.7226 6.66663 26.6666C6.66663 29.6106 9.05596 31.9999 12 31.9999Z"
                    fill="#0ACF83"></path>
                  <path class="main-navbar-design-figma-piece main-navbar-design-figma-piece-purple"
                    d="M6.66663 16.0001C6.66663 13.0561 9.05596 10.6667 12 10.6667H17.3333V21.3334H12C9.05596 21.3334 6.66663 18.9441 6.66663 16.0001Z"
                    fill="#A259FF"></path>
                  <path class="main-navbar-design-figma-piece main-navbar-design-figma-piece-red"
                    d="M6.66663 5.33333C6.66663 2.38933 9.05596 0 12 0H17.3333V10.6667H12C9.05596 10.6667 6.66663 8.27733 6.66663 5.33333Z"
                    fill="#F24E1E"></path>
                  <path class="main-navbar-design-figma-piece main-navbar-design-figma-piece-salmon"
                    d="M17.3333 0H22.6666C25.6106 0 28 2.38933 28 5.33333C28 8.27733 25.6106 10.6667 22.6666 10.6667H17.3333V0Z"
                    fill="#FF7262"></path>
                  <path class="main-navbar-design-figma-piece main-navbar-design-figma-piece-blue"
                    d="M28 16.0001C28 18.9441 25.6106 21.3334 22.6666 21.3334C19.7226 21.3334 17.3333 18.9441 17.3333 16.0001C17.3333 13.0561 19.7226 10.6667 22.6666 10.6667C25.6106 10.6667 28 13.0561 28 16.0001Z"
                    fill="#1ABCFE"></path>
                </svg>
                <span class="grow">
                  <span class="block text-sm font-medium text-stone-800 dark:text-neutral-200">Figma</span>
                  <span class="block text-xs text-stone-500 dark:text-neutral-500">The Preline UI library as Figma
                    components, variables, and styles.</span>
                </span>
              </a>

              <a class="group flex gap-x-3 py-2 px-2 lg:p-3 rounded-lg hover:bg-stone-100 focus:outline-hidden focus:bg-stone-100 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 "
                href="https://preline.co/animated-icons/">
                <svg class="main-navbar-design-icons mt-1 shrink-0 size-6 text-stone-800 dark:text-neutral-200"
                  width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg"
                  aria-hidden="true">
                  <style>
                    /* The components mark from the homepage get started section, scoped to the
                         navbar. Four squares push out to their own compass point and spring back
                         past centre, then the whole icon turns once. */
                    .main-navbar-design-icons {
                      /* At rest the squares span roughly 1.5-44.6 of the 0 0 46 46 viewBox, so the
                           5.5 unit outward travel leaves it, and an svg clips to its viewport. */
                      overflow: visible;
                    }

                    .main-navbar-design-icons-square-top {
                      --main-navbar-design-icons-y: -5.5px;
                    }

                    .main-navbar-design-icons-square-bottom {
                      --main-navbar-design-icons-y: 5.5px;
                    }

                    .main-navbar-design-icons-square-start {
                      --main-navbar-design-icons-x: -5.5px;
                    }

                    .main-navbar-design-icons-square-end {
                      --main-navbar-design-icons-x: 5.5px;
                    }

                    @keyframes main-navbar-design-icons-square {
                      0% {
                        transform: translate(0, 0);
                        animation-timing-function: cubic-bezier(.22, 1, .36, 1);
                      }

                      38% {
                        transform: translate(var(--main-navbar-design-icons-x, 0px), var(--main-navbar-design-icons-y, 0px));
                        animation-timing-function: cubic-bezier(.5, 0, .75, 0);
                      }

                      72% {
                        transform: translate(0, 0);
                        animation-timing-function: ease-out;
                      }

                      85% {
                        transform: translate(calc(var(--main-navbar-design-icons-x, 0px) * -.2), calc(var(--main-navbar-design-icons-y, 0px) * -.2));
                        animation-timing-function: ease-in-out;
                      }

                      100% {
                        transform: translate(0, 0);
                      }
                    }

                    /* One full turn, so the icon finishes at the orientation it started in. A half
                         turn would snap back the moment the pointer left and the rule stopped
                         matching; 360 means the end state and the rest state are the same pose. */
                    @keyframes main-navbar-design-icons-spin {
                      from {
                        transform: rotate(0deg);
                      }

                      to {
                        transform: rotate(360deg);
                      }
                    }

                    @media (hover: hover) and (pointer: fine) and (prefers-reduced-motion: no-preference) {

                      .group:hover .main-navbar-design-icons-square,
                      .group:focus-visible .main-navbar-design-icons-square {
                        animation: main-navbar-design-icons-square .62s both;
                      }

                      /* Held back so the spin follows the squares settling, then it runs once and
                           is done - it does not sit rotated for as long as the pointer happens to
                           rest on the entry. */
                      .group:hover .main-navbar-design-icons,
                      .group:focus-visible .main-navbar-design-icons {
                        animation: main-navbar-design-icons-spin .8s cubic-bezier(.22, 1, .36, 1) .58s both;
                      }
                    }
                  </style>

                  <g class="main-navbar-design-icons-square main-navbar-design-icons-square-bottom">
                    <rect x="14.3592" y="33.9731" width="12.2615" height="12.2615" rx="3"
                      transform="rotate(-45 14.3592 33.9731)" stroke="currentColor" stroke-width="2"></rect>
                  </g>
                  <g class="main-navbar-design-icons-square main-navbar-design-icons-square-end">
                    <rect x="26.2454" y="23.0282" width="12.2615" height="12.2615" rx="3"
                      transform="rotate(-45 26.2454 23.0282)" stroke="currentColor" stroke-width="2"></rect>
                  </g>
                  <g class="main-navbar-design-icons-square main-navbar-design-icons-square-start">
                    <rect x="2.47311" y="23.0282" width="12.2615" height="12.2615" rx="3"
                      transform="rotate(-45 2.47311 23.0282)" stroke="currentColor" stroke-width="2"></rect>
                  </g>
                  <g class="main-navbar-design-icons-square main-navbar-design-icons-square-top">
                    <rect x="14.3592" y="12.0564" width="12.2615" height="12.2615" rx="3"
                      transform="rotate(-45 14.3592 12.0564)" stroke="currentColor" stroke-width="2"></rect>
                  </g>
                </svg>
                <span class="grow">
                  <span class="flex items-center gap-x-2">
                    <span class="block text-sm font-medium text-stone-800 dark:text-neutral-200">Animated Icons</span>
                    <span
                      class="py-[2px] px-[6px] rounded-full font-bold whitespace-nowrap text-[10px] text-green-600 dark:text-green-500 border border-green-600 dark:border-green-500">New</span>
                  </span>
                  <span class="block text-xs text-stone-500 dark:text-neutral-500">Icon marks that move, in plain SVG
                    and keyframes with no JavaScript.</span>
                </span>
              </a>
            </div>
          </div>
          <!-- End Design Dropdown -->
          <a class="inline-flex items-center gap-x-3 text-stone-800 py-2 lg:px-2 text-sm font-medium rounded-lg hover:text-blue-600 focus:outline-hidden focus:text-blue-600 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 "
            href="https://preline.co/pro/">
            <svg class="shrink-0 size-4 block lg:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <path
                d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z">
              </path>
              <path d="m3.3 7 8.7 5 8.7-5"></path>
              <path d="M12 22V12"></path>
            </svg>
            Pro
          </a>
          <a class="inline-flex items-center gap-x-3 text-stone-800 py-2 lg:px-2 text-sm font-medium rounded-lg hover:text-blue-600 focus:outline-hidden focus:text-blue-600 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 "
            href="https://preline.co/pricing/">
            <svg class="shrink-0 size-4 block lg:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"></circle>
              <path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"></path>
              <path d="M12 18V6"></path>
            </svg>
            Pricing
          </a>
        </div>
      </div>
      <!-- End Collapse -->
    </nav>
  </header>

  <!-- Search Modal -->
  <div id="hs-site-search-modal"
    class="hs-overlay hs-overlay-backdrop-open:bg-stone-950/10 hs-overlay-backdrop-open:backdrop-blur-xs hidden size-full fixed top-0 inset-s-0 z-80 overflow-x-hidden overflow-y-auto pointer-events-none"
    role="dialog" tabindex="-1" aria-labelledby="hs-site-search-modal-label">
    <div
      class="hs-overlay-open:opacity-100 opacity-0 lg:max-w-3xl lg:w-full m-3 lg:mx-auto min-h-[calc(100%-56px)] flex items-start pt-8 sm:pt-16">
      <div
        class="w-full flex flex-col overflow-hidden rounded-2xl border border-stone-200 bg-white shadow-xl pointer-events-auto dark:border-neutral-700 dark:bg-neutral-900">
        <div class="relative --prevent-on-load-init" data-hs-combo-box="{
            &quot;preventVisibility&quot;: true,
            &quot;preventSelection&quot;: true,
            &quot;groupingType&quot;: &quot;tabs&quot;,
            &quot;isOpenOnFocus&quot;: true,
            &quot;apiUrl&quot;: &quot;../assets/data/site-search.json&quot;,
            &quot;apiGroupField&quot;: &quot;contentType&quot;,
            &quot;outputItemTemplate&quot;: &quot;&lt;div data-hs-combo-box-output-item&gt;&lt;a class=\&quot;group flex gap-x-3 p-2 rounded-lg hover:bg-stone-100 focus:outline-hidden focus:bg-stone-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800\&quot; data-hs-combo-box-output-item-attr=&#39;[{\&quot;valueFrom\&quot;: \&quot;href\&quot;, \&quot;attr\&quot;: \&quot;href\&quot;}]&#39;&gt;&lt;span class=\&quot;mt-0.5 inline-flex size-6 shrink-0 items-center justify-center rounded-lg text-stone-500 dark:text-neutral-500\&quot; data-hs-site-search-result-icon&gt;&lt;/span&gt;&lt;span class=\&quot;min-w-0 grow\&quot;&gt;&lt;span class=\&quot;hidden\&quot; data-hs-combo-box-output-item-field=&#39;[\&quot;title\&quot;, \&quot;category\&quot;, \&quot;contentType\&quot;, \&quot;description\&quot;, \&quot;alt\&quot;, \&quot;searchText\&quot;, \&quot;href\&quot;]&#39; data-hs-combo-box-search-text&gt;&lt;/span&gt;&lt;span class=\&quot;hidden\&quot; data-hs-combo-box-output-item-field=\&quot;contentType\&quot; data-hs-site-search-result-type&gt;&lt;/span&gt;&lt;span class=\&quot;block truncate text-sm text-stone-900 dark:text-neutral-100\&quot; data-hs-combo-box-output-item-field=\&quot;title\&quot; data-hs-combo-box-value&gt;&lt;/span&gt;&lt;span class=\&quot;mt-0.5 flex items-center gap-x-1 truncate text-xs text-stone-500 dark:text-neutral-500\&quot;&gt;&lt;span class=\&quot;truncate\&quot; data-hs-combo-box-output-item-field=\&quot;contentType\&quot;&gt;&lt;/span&gt;&lt;span aria-hidden=\&quot;true\&quot;&gt;•&lt;/span&gt;&lt;span class=\&quot;truncate\&quot; data-hs-combo-box-output-item-field=\&quot;category\&quot;&gt;&lt;/span&gt;&lt;/span&gt;&lt;span class=\&quot;mt-0.5 block truncate text-xs text-stone-400 dark:text-neutral-500\&quot; data-hs-combo-box-output-item-field=\&quot;description\&quot;&gt;&lt;/span&gt;&lt;/span&gt;&lt;/a&gt;&lt;/div&gt;&quot;,
            &quot;groupingTitleTemplate&quot;: &quot;&lt;button type=\&quot;button\&quot; class=\&quot;inline-flex items-center gap-x-1.5 whitespace-nowrap rounded-full border border-stone-200 bg-white px-3 py-1.5 text-xs sm:text-sm text-stone-600 hover:bg-stone-50 focus:outline-hidden focus:bg-stone-50 dark:border-neutral-800 dark:bg-neutral-900 dark:text-neutral-400 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800 hs-combo-box-tab-active:bg-blue-600 hs-combo-box-tab-active:border-blue-600 hs-combo-box-tab-active:text-white\&quot;&gt;&lt;/button&gt;&quot;,
            &quot;tabsWrapperTemplate&quot;: &quot;&lt;div class=\&quot;mx-2 overflow-x-auto px-1 pb-3 border-b border-stone-100 whitespace-nowrap [scrollbar-width:none] [-ms-overflow-style:none] [&amp;::-webkit-scrollbar]:hidden dark:border-neutral-800\&quot;&gt;&lt;/div&gt;&quot;,
            &quot;outputEmptyTemplate&quot;: &quot;&lt;div class=\&quot;flex min-h-72 flex-col items-center justify-center px-6 py-10 text-center\&quot;&gt;&lt;div class=\&quot;mb-4 inline-flex size-12 items-center justify-center rounded-full bg-stone-100 text-stone-500 dark:bg-neutral-800 dark:text-neutral-400\&quot;&gt;&lt;svg class=\&quot;size-5\&quot; xmlns=\&quot;http://www.w3.org/2000/svg\&quot; width=\&quot;24\&quot; height=\&quot;24\&quot; viewBox=\&quot;0 0 24 24\&quot; fill=\&quot;none\&quot; stroke=\&quot;currentColor\&quot; stroke-width=\&quot;2\&quot; stroke-linecap=\&quot;round\&quot; stroke-linejoin=\&quot;round\&quot;&gt;&lt;path d=\&quot;m21 21-4.34-4.34\&quot;/&gt;&lt;circle cx=\&quot;11\&quot; cy=\&quot;11\&quot; r=\&quot;8\&quot;/&gt;&lt;/svg&gt;&lt;/div&gt;&lt;p class=\&quot;text-sm font-medium text-stone-900 dark:text-neutral-100\&quot;&gt;No matching results&lt;/p&gt;&lt;p class=\&quot;mt-1 text-sm text-stone-500 dark:text-neutral-400\&quot;&gt;Try a page type, category, or keyword.&lt;/p&gt;&lt;/div&gt;&quot;
          }">
          <div
            class="flex items-center gap-x-2 border-b border-stone-200 pe-3 sm:pe-4 ps-4 sm:ps-5 py-2.5 dark:border-neutral-700">
            <div class="relative grow">
              <label id="hs-site-search-modal-label" for="hs-site-search-modal-input" class="sr-only">Search
                Preline</label>
              <div class="absolute inset-y-0 inset-s-0 z-20 flex items-center ps-0 pointer-events-none">
                <svg class="shrink-0 size-4 text-stone-400 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path d="m21 21-4.34-4.34"></path>
                  <circle cx="11" cy="11" r="8"></circle>
                </svg>
              </div>
              <input id="hs-site-search-modal-input"
                class="block w-full border-0 bg-transparent py-1 ps-7 pe-8 text-base sm:text-sm text-stone-900 placeholder:text-stone-400 focus:border-transparent focus:ring-0 disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-100 dark:placeholder:text-neutral-500"
                type="text" role="combobox" aria-expanded="false"
                placeholder="Search docs, blocks, plugins, or templates" value="" autofocus=""
                data-hs-combo-box-input="">
              <div class="hs-tooltip [--placement:top] absolute top-1/2 inset-e-0 -translate-y-1/2 hidden"
                data-hs-site-search-clear-wrapper="">
                <button type="button"
                  class="hs-tooltip-toggle inline-flex items-center justify-center size-7 rounded-full text-stone-400 hover:bg-stone-100 focus:outline-hidden focus:bg-stone-100 dark:text-neutral-500 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                  aria-label="Clear input" data-hs-site-search-clear="">
                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" viewBox="0 0 16 16">
                    <path
                      d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z">
                    </path>
                  </svg>
                </button>
                <span
                  class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-stone-900 text-xs font-medium text-white rounded-md shadow-2xs whitespace-nowrap dark:bg-neutral-700"
                  role="tooltip">
                  Clear input
                </span>
              </div>
            </div>

            <button type="button"
              class="sm:hidden inline-flex shrink-0 items-center justify-center gap-x-1 rounded-full border border-stone-200 bg-white p-2 text-xs text-stone-600 hover:border-stone-300 hover:text-stone-800 focus:outline-hidden focus:border-stone-300 focus:text-stone-800 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:hover:border-neutral-600 dark:hover:text-neutral-200 dark:focus:border-neutral-600 dark:focus:text-neutral-200"
              data-hs-overlay="#hs-site-search-modal" aria-expanded="false">
              <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="M18 6 6 18"></path>
                <path d="m6 6 12 12"></path>
              </svg>
              <span class="sr-only">Close</span>
            </button>
          </div>

          <div id="hs-site-search-heading" class="px-3 sm:px-4 pt-3 hidden" hidden="">
            <p class="mb-3 text-xs text-stone-500 dark:text-neutral-500">Explore by page type</p>
          </div>

          <div class="mt-0!" data-hs-combo-box-output="">
            <div
              class="max-h-[50dvh] overflow-y-auto p-1 sm:p-2 [&amp;::-webkit-scrollbar]:w-2 [&amp;::-webkit-scrollbar-thumb]:rounded-none [&amp;::-webkit-scrollbar-track]:bg-stone-100 [&amp;::-webkit-scrollbar-thumb]:bg-stone-300 dark:[&amp;::-webkit-scrollbar-track]:bg-neutral-800 dark:[&amp;::-webkit-scrollbar-thumb]:bg-neutral-600"
              data-hs-combo-box-output-items-wrapper=""></div>
          </div>

          <div
            class="hidden sm:flex items-center justify-between gap-x-3 bg-stone-50 border-t border-stone-100 px-4 py-3 text-xs text-stone-500/70 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-500">
            <span class="inline-flex flex-wrap items-center gap-x-5 gap-y-1">
              <span class="inline-flex items-center gap-x-1">
                <svg class="shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="m3 16 4 4 4-4"></path>
                  <path d="M7 20V4"></path>
                  <path d="m21 8-4-4-4 4"></path>
                  <path d="M17 4v16"></path>
                </svg>
                <span>Select</span>
              </span>
              <span class="inline-flex items-center gap-x-1">
                <svg class="shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M20 4v7a4 4 0 0 1-4 4H4"></path>
                  <path d="m9 10-5 5 5 5"></path>
                </svg>
                <span>Open</span>
              </span>
              <span class="inline-flex items-center gap-x-1">
                <span class="inline-flex items-center gap-x-1">
                  <svg class="shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M15 6v12a3 3 0 1 0 3-3H6a3 3 0 1 0 3 3V6a3 3 0 1 0-3 3h12a3 3 0 1 0-3-3"></path>
                  </svg>
                  <svg class="shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M20 4v7a4 4 0 0 1-4 4H4"></path>
                    <path d="m9 10-5 5 5 5"></path>
                  </svg>
                </span>
                <span>Open in new tab</span>
              </span>
            </span>
            <span class="inline-flex items-center gap-x-1.5">
              <svg class="shrink-0 size-4.5" width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M20 13.7965C19.8624 14.2448 19.1104 15 18.0776 15C17.0445 15 15.9412 13.8535 15.9412 12.3406V11.6303C15.9412 10.0606 16.9617 9.00122 18.0776 9.00122C19.1934 9.00122 19.8353 9.59895 20 10.3428M14.0334 10.1236C13.8587 9.53127 13.0633 8.97032 12.1465 9.00122C11.2299 9.03199 10.4095 9.71429 10.4095 10.5232C10.4095 11.3321 10.9521 11.6256 12.1471 11.7498C13.342 11.874 13.992 12.5427 14.0334 13.2511C14.0747 13.9595 13.4466 15 12.1471 15C11.0083 15 10.1562 13.8766 10.1084 13.2325M8.20236 13.904C7.86181 14.6472 7.15564 14.9999 6.20651 14.9999C5.25737 14.9999 4 14.2183 4 12.2427V11.6668C4 10.3638 4.93182 9.00097 6.20651 9.00097C7.48133 9.00097 8.32927 10.2907 8.20236 11.8147H4.38203"
                  stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path>
                <rect x="0.75" y="0.75" width="22.5" height="22.5" rx="5.25" stroke="currentColor" stroke-width="1">
                </rect>
              </svg>
              <span>Close</span>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Search Modal -->

  <script>
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
  </script>

  <!-- ========== END HEADER ========== -->

  <script>
    (function () {
      if (window.HSThemeImages) {
        window.HSThemeImages.hydrate(document);
        return;
      }

      const imageSelector = 'img[data-hs-theme-image][data-hs-theme-image-src]';

      function getColorMode() {
        const html = document.documentElement;
        const savedTheme = localStorage.getItem('hs_theme');

        if (html.classList.contains('dark')) return 'dark';
        if (html.classList.contains('light')) return 'light';
        if (savedTheme === 'dark') return 'dark';
        if (savedTheme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) return 'dark';

        return 'light';
      }

      function collectImages(root) {
        if (!root) return [];

        if (root.nodeType === 1) {
          const images = root.matches(imageSelector) ? [root] : [];
          return images.concat(Array.from(root.querySelectorAll(imageSelector)));
        }

        if (root.querySelectorAll) return Array.from(root.querySelectorAll(imageSelector));

        return [];
      }

      function hydrate(root) {
        const colorMode = getColorMode();

        collectImages(root || document).forEach((image) => {
          if (image.getAttribute('data-hs-theme-image') !== colorMode) return;

          const src = image.getAttribute('data-hs-theme-image-src');
          const srcset = image.getAttribute('data-hs-theme-image-srcset');

          if (src && image.getAttribute('src') !== src) image.setAttribute('src', src);
          if (srcset && image.getAttribute('srcset') !== srcset) image.setAttribute('srcset', srcset);
        });
      }

      function scheduleHydrate() {
        window.requestAnimationFrame(() => hydrate(document));
      }

      window.HSThemeImages = {
        hydrate,
      };

      const observer = new MutationObserver((mutations) => {
        mutations.forEach((mutation) => {
          mutation.addedNodes.forEach((node) => hydrate(node));
        });
      });

      observer.observe(document.documentElement, {
        childList: true,
        subtree: true,
      });

      hydrate(document);

      document.addEventListener('DOMContentLoaded', scheduleHydrate);
      window.addEventListener('on-hs-appearance-change', scheduleHydrate);
      window.addEventListener('storage', (event) => {
        if (event.key === 'hs_theme') scheduleHydrate();
      });
    })();
  </script>

  <!-- ========== MAIN CONTENT ========== -->

  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  <footer class="bg-stone-50 border-t border-stone-200 dark:bg-neutral-950 dark:border-neutral-800">

  </footer>

  <!-- ========== END FOOTER ========== -->

  <!-- JS PLUGINS -->
  <!-- Required plugins -->
  <script src="preline-mega-menu/index.js"></script>
  <!-- Header style on scroll -->
  <script>
    (function () {
      var header = document.querySelector('#main-navbar')?.closest('header');
      if (!header || header.classList.contains('border-b')) return;

      var classes = ['border-b', 'border-stone-200', 'dark:border-neutral-700'];

      window.addEventListener('scroll', function () {
        var scrolled = window.scrollY > 0;
        classes.forEach(function (cls) {
          header.classList.toggle(cls, scrolled);
        });
      }, { passive: true });
    })();
  </script>
  <!-- Site -->
  <script src="preline-mega-menu/hs.component-appearance.js"></script>

  <script>
    (() => {
      const starsElement = document.getElementById('stars');
      if (!starsElement) return;

      const owner = 'htmlstreamofficial';
      const repo = 'preline';
      const cacheKey = 'preline-github-stars';
      const cacheTtl = 60 * 60 * 1000;

      const updateStars = (count) => {
        if (typeof count !== 'number' || Number.isNaN(count)) return;

        starsElement.textContent = count.toLocaleString();
      };

      const cachedStars = (() => {
        try {
          return JSON.parse(localStorage.getItem(cacheKey) || 'null');
        } catch (error) {
          return null;
        }
      })();

      if (
        cachedStars &&
        typeof cachedStars.count === 'number' &&
        typeof cachedStars.timestamp === 'number' &&
        Date.now() - cachedStars.timestamp < cacheTtl
      ) {
        updateStars(cachedStars.count);
        return;
      }

      const loadStars = () => {
        fetch(`https://api.github.com/repos/${owner}/${repo}`)
          .then((response) => response.json())
          .then((data) => {
            if (typeof data.stargazers_count !== 'number') return;

            updateStars(data.stargazers_count);

            try {
              localStorage.setItem(
                cacheKey,
                JSON.stringify({
                  count: data.stargazers_count,
                  timestamp: Date.now()
                })
              );
            } catch (error) { }
          })
          .catch((error) => {
            console.error('Error fetching GitHub data:', error);
          });
      };

      if ('requestIdleCallback' in window) {
        window.requestIdleCallback(loadStars, { timeout: 2000 });
        return;
      }

      window.setTimeout(loadStars, 0);
    })();
  </script>

  <!-- JS THIRD PARTY PLUGINS -->
  <!-- Crisp chat -->
  <script>
    window.$crisp = [];
    window.CRISP_WEBSITE_ID = 'd878cba9-756e-43c9-bd82-9dea7da911a2';

    (function () {
      const isLocalhost = ['localhost', '127.0.0.1', '::1'].includes(window.location.hostname);

      if (isLocalhost) return;

      let isLoaded = false;

      const loadCrisp = () => {
        if (isLoaded) return;

        isLoaded = true;

        const d = document;
        const s = d.createElement('script');
        s.src = 'https://client.crisp.chat/l.js';
        s.async = true;
        d.head.appendChild(s);
      };

      ['pointerdown', 'keydown', 'touchstart'].forEach((eventName) => {
        window.addEventListener(eventName, loadCrisp, { once: true });
      });

      if ('requestIdleCallback' in window) {
        window.requestIdleCallback(loadCrisp, { timeout: 8000 });
        return;
      }

      window.setTimeout(loadCrisp, 8000);
    })();
  </script>
  <!-- Google Analytics. Global site tag (gtag.js) -->
  <script async="" src="preline-mega-menu/js"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', 'G-B73TDMXKF5');
  </script>

  <script>
    window.defaultVariables = { "baseUrl": "https:\/\/preline.co" };
  </script>
  <script src="preline-mega-menu/app.js"></script>
  <div data-lastpass-root=""
    style="position: absolute !important; top: 0px !important; left: 0px !important; height: 0px !important; width: 0px !important; display: initial !important;">
    <template shadowrootmode="closed"></template></div>
  <div class="crisp-client" aria-live="polite" translate="no" tabindex="-1" lang="en" dir="ltr"
    style="--crisp-color-theme-100: 226, 238, 255; --crisp-color-theme-200: 102, 120, 138; --crisp-color-theme-500: 25, 112, 240; --crisp-color-theme-600: 5, 94, 225; --crisp-color-theme-700: 0, 87, 215; --crisp-color-theme-800: 0, 81, 200; --crisp-color-theme-900: 0, 74, 181; --crisp-color-theme-reverse: 255, 255, 255;">
    <div class="cc-11i2a"></div>
    <div class="cc-165wh" id="crisp-chatbox" data-hidden="false" data-force-show="false" data-color-mode="light"
      data-availability="away" data-presentation="default" data-lock-maximized="false" data-disable-full-view="false"
      data-website-logo="false" data-last-operator-face="false" data-ongoing-operator-face="false"
      data-availability-tooltip="false" data-hide-vacation="false" data-blocked="false" data-mobile-view="false"
      data-full-view="false" data-small-view="false" data-large-view="true" data-has-local-messages="false"
      data-was-availability-online="false" data-is-activity-ongoing="false" data-hide-on-away="false"
      data-hide-on-mobile="false" data-position-reverse="false">
      <div class="cc-lk42u cc-2ob4j cc-1sof5 cc-y7mhy">
        <div class="cc-13wro" data-maximized="false" data-is-failure="false" tabindex="0" role="button"
          aria-label="Open chat" data-pane-animate-entrance="false" data-pop="minimized:open"><span
            class="cc-11p4p"><!--v-if--></span><span class="cc-1gfkz" data-is-ongoing="false"><span class="cc-2gk6o"
              data-id="chat_closed"><span class="cc-1er0q cc-nch8a"
                data-partial-pending="false"><!--v-if--></span></span></span></div>
      </div>
    </div>
    <div class="cc-165wh cc-1frb5"></div>
    <div class="cc-165wh cc-84c2j"></div>
  </div>
