<?php include_once("config.php"); ?>


<?php include ROOT_PATH . 'includes/header.php'; ?>


<body class="home">

    <!-- start header -->
    <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->

  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: 'Segoe UI', system-ui, sans-serif;
      background: #0f0f0f;
      color: #e5e5e5;
      min-height: 100vh;
    }

    .gallery-page {
      max-width: 1400px;
      margin: 0 auto;
      padding: 3rem 2rem 5rem;
    }

    /* Header */
    .gallery-header {
      text-align: center;
      margin-bottom: 3.5rem;
    }

    .gallery-header h1 {
      font-size: clamp(2rem, 5vw, 3.5rem);
      font-weight: 700;
      letter-spacing: -0.03em;
      color: #ffffff;
    }

    .gallery-header p {
      margin-top: 0.75rem;
      font-size: 1rem;
      color: #888;
    }

    /* Section */
    .gallery-section {
      max-width: 480px;
      margin: 0 auto;
    }

    .section-title {
      font-size: 0.75rem;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.12em;
      color: #666;
      padding-bottom: 0.75rem;
      border-bottom: 1px solid #222;
      margin-bottom: 1rem;
    }

    /* 2-column thumbnail grid */
    .gallery-thumbs {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 6px;
    }

    /* Each thumbnail is a button */
    .thumb-btn {
      display: block;
      background: none;
      border: none;
      padding: 0;
      cursor: pointer;
      width: 100%;
    }

    .thumb-wrap {
      position: relative;
      overflow: hidden;
      aspect-ratio: 3/2;
      background: #1a1a1a;
      border-radius: 4px;
    }

    .thumb-wrap img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .thumb-overlay {
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0);
      display: flex;
      align-items: flex-end;
      justify-content: space-between;
      padding: 0.6rem 0.7rem;
      transition: background 0.3s ease, opacity 0.3s ease;
      opacity: 0;
    }

    .thumb-label {
      font-size: 0.72rem;
      font-weight: 600;
      color: #fff;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      text-shadow: 0 1px 4px rgba(0,0,0,0.8);
      line-height: 1.3;
    }

    .thumb-count {
      font-size: 0.65rem;
      color: rgba(255,255,255,0.7);
      background: rgba(0,0,0,0.4);
      border-radius: 3px;
      padding: 2px 5px;
      flex-shrink: 0;
      margin-left: 0.5rem;
      align-self: flex-start;
      letter-spacing: 0.04em;
    }

    .thumb-btn:hover .thumb-wrap img { transform: scale(1.06); }
    .thumb-btn:hover .thumb-overlay  { background: rgba(0,0,0,0.5); opacity: 1; }

    /* Magnific Popup overrides */
    .mfp-bg { background: #000; opacity: 0.94; }
    .mfp-image-holder .mfp-content { max-width: 90vw; }

    .mfp-title {
      font-family: inherit;
      font-size: 0.85rem;
      font-weight: 500;
      color: rgba(255,255,255,0.75);
      letter-spacing: 0.04em;
      text-align: left;
      padding-top: 0.5rem;
    }

    .mfp-counter {
      font-family: inherit;
      font-size: 0.75rem;
      color: rgba(255,255,255,0.4);
      top: 0.5rem;
      right: 0;
    }

    .mfp-close {
      font-size: 2rem;
      font-weight: 300;
      color: rgba(255,255,255,0.7) !important;
      opacity: 1 !important;
      transition: color 0.2s;
    }

    .mfp-close:hover { color: #fff !important; }

    button.mfp-arrow { opacity: 0.7; transition: opacity 0.2s; }
    button.mfp-arrow:hover { opacity: 1; }
    .mfp-arrow-left::after  { border-right-color: #fff; }
    .mfp-arrow-right::after { border-left-color: #fff; }

    .mfp-figure { animation: mfpFadeIn 0.22s ease-out; }

    @keyframes mfpFadeIn {
      from { opacity: 0; transform: scale(0.97); }
      to   { opacity: 1; transform: scale(1); }
    }
  </style>


<section>
    <div class="container">
        <div class="row">
            <div class="col col-4">
                <button class="thumb-btn" data-collection="trees">
                    <div class="thumb-wrap">
                    <img src="https://picsum.photos/seed/tree-cover/600/400" alt="Trees" loading="lazy" />
                    <div class="thumb-overlay">
                        <span class="thumb-label">Trees</span>
                        <span class="thumb-count">3 photos</span>
                    </div>
                    </div>
                </button>
            </div>
            <div class="col col-4">
    <button class="thumb-btn" data-collection="cars">
        <div class="thumb-wrap">
          <img src="https://picsum.photos/seed/car-cover/600/400" alt="Cars" loading="lazy" />
          <div class="thumb-overlay">
            <span class="thumb-label">Cars</span>
            <span class="thumb-count">3 photos</span>
          </div>
        </div>
      </button>
            </div>
            <div class="col col-4">  
    <button class="thumb-btn" data-collection="mountains">
        <div class="thumb-wrap">
          <img src="https://picsum.photos/seed/mtn-cover/600/400" alt="Mountains" loading="lazy" />
          <div class="thumb-overlay">
            <span class="thumb-label">Mountains</span>
            <span class="thumb-count">3 photos</span>
          </div>
        </div>
      </button>
            </div>
        </div>
    </div>
</section>


                <!-- start portfolio section --- portfolio-full-width-masonry-overlay ----->
        <section class="wow fadeIn padding-90px-top md-padding-50px-top sm-padding-30px-top">

            <!-- start filter content -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center margin-100px-bottom md-margin-50px-bottom sm-margin-30px-bottom">
                        <h4 class="font-weight-400 text-extra-dark-gray margin-15px-bottom">Featured Projects</h4>
                    </div>
                    <div class="col-12 px-3 p-md-0">
                        <div class="filter-content overflow-hidden">
                            <ul class="portfolio-grid work-3col hover-option2 gutter-medium">
                                <li class="grid-sizer"></li>
                                <!-- start portfolio-item item -->
                                <li class="grid-item wow fadeInUp last-paragraph-no-margin">
      <button class="thumb-btn" data-collection="trees">
        <div class="thumb-wrap">
          <img src="https://picsum.photos/seed/tree-cover/600/400" alt="Trees" loading="lazy" />
          <div class="thumb-overlay">
            <span class="thumb-label">Trees</span>
            <span class="thumb-count">3 photos</span>
          </div>
        </div>
      </button>
                                </li>
                                <!-- end portfolio item -->
                                <!-- start portfolio item -->
                                <li class="grid-item wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">

                                
    <button class="thumb-btn" data-collection="cars">
        <div class="thumb-wrap">
          <img src="https://picsum.photos/seed/car-cover/600/400" alt="Cars" loading="lazy" />
          <div class="thumb-overlay">
            <span class="thumb-label">Cars</span>
            <span class="thumb-count">3 photos</span>
          </div>
        </div>
      </button>


                                </li>
                                <!-- end portfolio item -->
                                <!-- start portfolio item -->
                                <li class="grid-item wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">

                                
    <button class="thumb-btn" data-collection="mountains">
        <div class="thumb-wrap">
          <img src="https://picsum.photos/seed/mtn-cover/600/400" alt="Mountains" loading="lazy" />
          <div class="thumb-overlay">
            <span class="thumb-label">Mountains</span>
            <span class="thumb-count">3 photos</span>
          </div>
        </div>
      </button>
                                </li>
                                <!-- end portfolio item -->


                              
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end filter content -->
        </section>
        <!-- end portfolio section --- portfolio-full-width-masonry-overlay ----->


        <!-- Start - Added by Replit for Magnific Popup -->

        <script>
  var collections = {
    trees: [
      { src: 'https://picsum.photos/seed/tree1/1600/1067', title: 'Ancient Oak' },
      { src: 'https://picsum.photos/seed/tree2/1600/1067', title: 'Birch Forest' },
      { src: 'https://picsum.photos/seed/tree3/1600/1067', title: 'Pine Canopy' }
    ],
    cars: [
      { src: 'https://picsum.photos/seed/car1/1600/1067', title: 'Vintage Roadster' },
      { src: 'https://picsum.photos/seed/car2/1600/1067', title: 'Classic Coupe' },
      { src: 'https://picsum.photos/seed/car3/1600/1067', title: 'Open Highway' }
    ],
    mountains: [
      { src: 'https://picsum.photos/seed/mtn1/1600/1067', title: 'Snow Peak' },
      { src: 'https://picsum.photos/seed/mtn2/1600/1067', title: 'Rocky Ridge' },
      { src: 'https://picsum.photos/seed/mtn3/1600/1067', title: 'Alpine Sunset' }
    ],
    waterfalls: [
      { src: 'https://picsum.photos/seed/wfall1/1600/1067', title: 'Hidden Falls' },
      { src: 'https://picsum.photos/seed/wfall2/1600/1067', title: 'Cascade' },
      { src: 'https://picsum.photos/seed/wfall3/1600/1067', title: 'Jungle Drop' }
    ],
    flowers: [
      { src: 'https://picsum.photos/seed/flwr1/1600/1067', title: 'Wild Poppies' },
      { src: 'https://picsum.photos/seed/flwr2/1600/1067', title: 'Lavender Field' },
      { src: 'https://picsum.photos/seed/flwr3/1600/1067', title: 'Bloom Close-up' }
    ],
    birds: [
      { src: 'https://picsum.photos/seed/bird1/1600/1067', title: 'In Flight' },
      { src: 'https://picsum.photos/seed/bird2/1600/1067', title: 'Perched' },
      { src: 'https://picsum.photos/seed/bird3/1600/1067', title: 'Flock at Dusk' }
    ]
  };

  $(document).ready(function () {
    $('.thumb-btn').on('click', function () {
      var key = $(this).attr('data-collection');
      var items = collections[key].map(function (img) {
        return { src: img.src, title: img.title, type: 'image' };
      });

      $.magnificPopup.open({
        items: items,
        type: 'image',
        gallery: { enabled: true },
        image: {
          titleSrc: function (item) {
            return item.data.title;
          }
        },
        callbacks: {
          buildControls: function () {
            this.contentContainer.append(this.arrowLeft.add(this.arrowRight));
          }
        }
      });
    });
  });
</script>

<!-- End - Added by Replit for Magnific Popup -->


    <!-- start footer -->
    <?php include_once("includes/global-footer.php"); ?>


</body>

</html>