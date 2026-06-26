<?php include_once("config.php"); ?>

<!-- Replit's fixed code from 260524_0947 -->


<?php include ROOT_PATH . 'includes/header.php'; ?>


<body class="earlier-work">

    <!-- start header -->
    <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->

    <!-- start parallax hero section -->
    <section id="home-hero-opener" class="p-0 position-relative h-70 wow animate__fadeIn" style="visibility: visible; "> <!--min-height: 658px;-->
        <div class="opacity-medium bg-black z-index-0"></div>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col col-12 col-xxl-8 col-xl-10 col-lg-11 col-md-11 d-flex justify-content-center flex-column text-left text-md-start"> <!--style="justify-content: space-around!important;"-->
                    <div class="row padding-30px-all">
                        <h2 class="lg-w-60 md-w-70 lg-line-height-auto sm-w-100 sm-margin-15px-bottom"> 
                        <span class="mf-var-01">Earlier Work</span>
                        </h2>
                    </div>
                </div><!-- cols-->
            </div><!-- row-->
        </div>
    </section>
    <!-- end parallax hero section -->


    <!-- start portfolio section --- portfolio-full-width-masonry-overlay ----->
    <section id="home-projects-grid-01" class="wow fadeIn padding-90px-top md-padding-50px-top sm-padding-30px-top">
        <!-- start filter content -->
        <div class="container-fluid padding-five-lr md-padding-30px-lr">
            
            <div class="row">
                <!-- <div class="col-12 text-center margin-50px-bottom md-margin-50px-bottom sm-margin-30px-bottom">
                    <h4 class=" text-extra-dark-gray margin-15px-bottom alt-text font-weight-600">Earlier Work</h4>
                </div> -->
                <div class="col-12 px-3 p-md-0">
                    <div class="filter-content overflow-hidden">
                        <ul class="portfolio-grid work-3col hover-option2 gutter-medium">
                            <li class="grid-sizer"></li>
                            <!-- start portfolio item -->
                            <li class="grid-item wow fadeIn last-paragraph-no-margin grid-item-double" data-wow-delay="0.2s">
                                <a href="javascript:void(0);" class="project-gallery-trigger" data-collection="c4pr">
                                    <figure>
                                        <div class="portfolio-img bg-deep-pink"><img src="<?= BASE_URL ?>projects-archived/c4pr/thumb.jpg" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-left">
                                                <div class="portfolio-hover-box align-bottom featured-work-thumbs">
                                                    <div class="portfolio-hover-content position-relative last-paragraph-no-margin">
                                                        <div class="bg-black margin-25px-bottom separator-line-horrizontal-medium-light2"></div>
                                                        <span class="line-height-normal text-white-2 margin-5px-bottom d-block featured-work-title">Code for PuertoRico</span>
                                                        <p>Design system for the Puerto Rico chapter of Code for America</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->

                            <!-- start portfolio-item item -->
                            <li class="grid-item wow fadeIn last-paragraph-no-margin" data-wow-delay="0.4s">
                                <a href="javascript:void(0);" class="project-gallery-trigger" data-collection="puracepa">
                                    <figure>
                                        <div class="portfolio-img bg-deep-pink"><img src="<?= BASE_URL ?>projects-archived/puracepa/thumb.jpg" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-left">
                                                <div class="portfolio-hover-box align-bottom featured-work-thumbs">
                                                    <div class="portfolio-hover-content position-relative last-paragraph-no-margin">
                                                        <div class="bg-black margin-25px-bottom separator-line-horrizontal-medium-light2"></div>
                                                        <span class="line-height-normal text-white-2 margin-5px-bottom d-block featured-work-title">Pura Cepa</span><p>Branding & spatial graphics for a cannabis dispensary</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                                
                            <!-- start portfolio-item item -->
                            <li class="grid-item wow fadeIn last-paragraph-no-margin" data-wow-delay="0.4s">
                                <a href="javascript:void(0);" class="project-gallery-trigger" data-collection="koru">
                                    <figure>
                                        <div class="portfolio-img bg-deep-pink"><img src="<?= BASE_URL ?>projects-archived/koru/thumb.jpg" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-left">
                                                <div class="portfolio-hover-box align-bottom featured-work-thumbs">
                                                    <div class="portfolio-hover-content position-relative last-paragraph-no-margin">
                                                        <div class="bg-black margin-25px-bottom separator-line-horrizontal-medium-light2"></div>
                                                        <span class="line-height-normal text-white-2 margin-5px-bottom d-block featured-work-title">Koru Jewelers</span><p>Marketplace connecting emerging musicians with home concerts</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->

                            <!-- start portfolio-item item -->
                            <li class="grid-item wow fadeIn last-paragraph-no-margin" data-wow-delay="0.4s">
                                <a href="javascript:void(0);" class="project-gallery-trigger" data-collection="v2abrochure">
                                    <figure>
                                        <div class="portfolio-img bg-deep-pink"><img src="<?= BASE_URL ?>projects-archived/v2a-brochure/thumb.jpg" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-left">
                                                <div class="portfolio-hover-box align-bottom featured-work-thumbs">
                                                    <div class="portfolio-hover-content position-relative last-paragraph-no-margin">
                                                        <div class="bg-black margin-25px-bottom separator-line-horrizontal-medium-light2"></div>
                                                        <span class="line-height-normal text-white-2 margin-5px-bottom d-block featured-work-title">V2A Branding Pieces</span><p>Brochure and presentation graphics for a consulting firm</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->

                            <!-- start portfolio-item item -->
                            <li class="grid-item wow fadeIn last-paragraph-no-margin" data-wow-delay="0.4s">
                                 <a href="javascript:void(0);" class="project-gallery-trigger" data-collection="ted">
                                    <figure>
                                        <div class="portfolio-img bg-deep-pink"><img src="<?= BASE_URL ?>projects-archived/ted/thumb.jpg" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-left">
                                                <div class="portfolio-hover-box align-bottom featured-work-thumbs">
                                                    <div class="portfolio-hover-content position-relative last-paragraph-no-margin">
                                                        <div class="bg-black margin-25px-bottom separator-line-horrizontal-medium-light2"></div>
                                                        <span class="line-height-normal text-white-2 margin-5px-bottom d-block featured-work-title">The Event District</span><p>Branding & online store for an event rental company</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->       

                            <!-- start portfolio-item item -->
                            <li class="grid-item wow fadeIn last-paragraph-no-margin" data-wow-delay="0.4s">
                                 <a href="javascript:void(0);" class="project-gallery-trigger" data-collection="akcsos">
                                    <figure>
                                        <div class="portfolio-img bg-deep-pink"><img src="<?= BASE_URL ?>projects-archived/akc-sos/thumb.jpg" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-left">
                                                <div class="portfolio-hover-box align-bottom featured-work-thumbs">
                                                    <div class="portfolio-hover-content position-relative last-paragraph-no-margin">
                                                        <div class="bg-black margin-25px-bottom separator-line-horrizontal-medium-light2"></div>
                                                        <span class="line-height-normal text-white-2 margin-5px-bottom d-block featured-work-title">Akcelita.com</span><p>Website for a software company</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
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

    <!-- start footer -->
    <?php include_once("includes/global-footer.php"); ?>

    <!-- Project galleries — runs after jQuery and Magnific Popup are loaded by the footer -->
    <script type="text/javascript">
    (function($) {
        var collections = {
            c4pr: [
                { src: '<?= BASE_URL ?>projects-archived/c4pr/01.jpg', },
                { src: '<?= BASE_URL ?>projects-archived/c4pr/02.jpg', },
                { src: '<?= BASE_URL ?>projects-archived/c4pr/03.jpg', },
                { src: '<?= BASE_URL ?>projects-archived/c4pr/04.jpg', }
            ],          
            puracepa: [
                { src: '<?= BASE_URL ?>projects-archived/puracepa/01.jpg', },
                { src: '<?= BASE_URL ?>projects-archived/puracepa/02.jpg', },
                { src: '<?= BASE_URL ?>projects-archived/puracepa/03.jpg', },
                { src: '<?= BASE_URL ?>projects-archived/puracepa/04.jpg', },
                { src: '<?= BASE_URL ?>projects-archived/puracepa/05.jpg', }
            ],
            akcsos: [
                { src: '<?= BASE_URL ?>projects-archived/akc-sos/01.jpg', },
                { src: '<?= BASE_URL ?>projects-archived/akc-sos/02.jpg', },
                { src: '<?= BASE_URL ?>projects-archived/akc-sos/03.jpg', }
            ],

            koru: [
                { src: '<?= BASE_URL ?>projects-archived/koru/01.png', },
                { src: '<?= BASE_URL ?>projects-archived/koru/02.png', },
            ],

            v2abrochure: [
                { src: '<?= BASE_URL ?>projects-archived/v2a-brochure/01.jpg', },
                { src: '<?= BASE_URL ?>projects-archived/v2a-brochure/02.jpg', },
                { src: '<?= BASE_URL ?>projects-archived/v2a-brochure/03.jpg', },
                { src: '<?= BASE_URL ?>projects-archived/v2a-brochure/04.jpg', }
            ],

            ted: [
                { src: '<?= BASE_URL ?>projects-archived/ted/01.png', },
                { src: '<?= BASE_URL ?>projects-archived/ted/02.png', },
                { src: '<?= BASE_URL ?>projects-archived/ted/03.png', },
                { src: '<?= BASE_URL ?>projects-archived/ted/04.png', }
            ],


            // pmmexh: [
            //     { src: '<?= BASE_URL ?>projects-archived/pmmexh/01.jpg', },
            //     { src: '<?= BASE_URL ?>projects-archived/pmmexh/02.jpg', },
            //     { src: '<?= BASE_URL ?>projects-archived/pmmexh/03.jpg', },
            //     { src: '<?= BASE_URL ?>projects-archived/pmmexh/04.jpg', }
            // ],
        };

        $(document).ready(function() {
            $('.project-gallery-trigger').on('click', function() {
                var key = $(this).data('collection');
                var items = $.map(collections[key], function(img) {
                    return { src: img.src, title: img.title, type: 'image' };
                });
                $.magnificPopup.open({
                    items: items,
                    type: 'image',
                    gallery: { enabled: true },
                    image: {
                        titleSrc: function(item) {
                            return item.data.title;
                        }
                    }
                });
            });
        });
    })(jQuery);
    </script>

</body>

</html>
