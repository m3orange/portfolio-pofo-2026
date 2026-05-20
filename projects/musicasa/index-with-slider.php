<?php require_once( '../../config.php' ) ?>


<?php include ROOT_PATH . 'includes/header.php'; ?>

<!-- <include src="includes/linked-files.html"></include> -->

<!-- <script>document.addEventListener("DOMContentLoaded", function () {
            let e = document.getElementsByTagName("include"); for (var t = 0; t < e.length; t++) { let a = e[t]; n(e[t].attributes.src.value, function (e) { a.insertAdjacentHTML("afterend", e), a.remove() }) } function n(e, t) { fetch(e).then(e => e.text()).then(e => t(e)) }
        });
    </script> -->


<body class="musicasa">

    <!-- start header -->
     <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->

    <!-- start parallax hero section -->
    <section id="block-intro-slider" class="wow p-0 " >
        <video autoplay loop muted playsinline class="hero-video-cb">
            <source src="<?= BASE_URL ?>projects/citybox/citybox-screens-in-laptop.mp4" type="video/mp4">  
        </video>
    </section>
    <!-- end parallax hero section -->


    <!-- start product information section -->
    <section class="intro-info">
        <div class="container">
            <div class="row grid-lines">
                <div class="col col-12 text-left">
                    <div class="page-title font-weight-500">
                        <h3>Atlas UI</h3>
                    </div>
                </div>
               <?php include ROOT_PATH . 'projects/citybox/description-intro.php'; ?>

            </div>
        </div>
    </section>
    <!-- end product information section -->






        <!-- start product slider section - from single-project-page-02.html-->
        <section class="carousel p-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="swiper-blog white-move">
                            <div class="swiper-wrapper">
                                <!-- start slider item -->
                                <div class="swiper-slide width-50 md-width-80 sm-width-100">
                                    <img src="<?= BASE_URL ?>projects/musicasa/process-carousel-01.png" class="width-100"/>
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide width-50 md-width-80 sm-width-100">
                                    <img src="<?= BASE_URL ?>projects/musicasa/process-carousel-02.png" class="width-100"/>
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide width-50 md-width-80 sm-width-100">
                                    <img src="<?= BASE_URL ?>projects/musicasa/process-carousel-03.png" class="width-100"/>
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide width-50 md-width-80 sm-width-100">
                                    <img src="<?= BASE_URL ?>projects/musicasa/process-carousel-04.png" class="width-100"/>
                                </div>
                                <!-- end slider item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end product slider section - from single-project-page-02.html-->



<section class="wow animate__fadeIn pt-0" style="visibility: visible; animation-name: fadeInUP;" data-delay="0.5s">
            <div class="container-fluid padding-three-lr padding-eight-tb md-padding-30px-lr sm-padding-15px-lr">
                <div class="row">
                    <div class="col-12 margin-35px-tb md-no-margin-top md-margin-30px-bottom workflows-fullwidth">
                        <img src="<?= BASE_URL ?>projects/musicasa/workflow-01.png" class="w-100" data-no-retina="">
                    </div>
                    <div class="col-12 margin-35px-tb md-no-margin-top md-margin-30px-bottom workflows-fullwidth">
                        <img src="<?= BASE_URL ?>projects/musicasa/workflow-02.png" class="w-100" data-no-retina="">
                    </div>
                </div>
            </div>
        </section>


    <section class="wow fadeIn">
        <!-- start section divider -->
        <section class="section-divider-dark">
            <div class="container">
                <div class="row">
                    <div class="col col-12 col-lg-8 col-md-6">Specs for Handoff</div>
                    <div class="col col-12 col-lg-4 col-md-6 sm-margin-20px-top" style="text-align: left; font-size: 80%;">
                        Click to view larger versions
                </div>
                </div>
            </div>
        </section>
        <!-- end section divider -->


        <div class="container">

        <!-- <?php include_once("description-project-01.php"); ?> -->

            <div class="row mx-0">
                <ul class="portfolio-grid work-3col hover-option2 gutter-large w-100">
                    <li class="grid-sizer"></li>

                    <li class="grid-item grid-item-double  wow fadeInUp"> <!--grid-item-double-->
                        <a href="<?= BASE_URL ?>projects/citybox/cb-specs-01.png" data-group="two-columns-zoom-animation"
                            class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray"><img src="<?= BASE_URL ?>projects/citybox/cb-specs-01.png" class="project-img-gallery" /></div>
                                <figcaption>
                                    <div class="portfolio-hover-main text-center">
                                        <div class="portfolio-hover-box vertical-align-middle">
                                            <div class="portfolio-hover-content position-relative">
                                                <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </li>

                    <li class="grid-item wow fadeInUp"> <!--grid-item-double-->
                        <a href="<?= BASE_URL ?>projects/citybox/cb-specs-02.png" data-group="two-columns-zoom-animation"
                            class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray"><img
                                        src="<?= BASE_URL ?>projects/citybox/cb-specs-02.png" class="project-img-gallery" /></div>
                                <figcaption>
                                    <div class="portfolio-hover-main text-center">
                                        <div class="portfolio-hover-box vertical-align-middle">
                                            <div class="portfolio-hover-content position-relative">
                                                <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="grid-item wow fadeInUp"> <!--grid-item-double-->
                        <a href="<?= BASE_URL ?>projects/citybox/cb-specs-03.png" data-group="two-columns-zoom-animation"
                            class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray"><img
                                        src="<?= BASE_URL ?>projects/citybox/cb-specs-03.png" class="project-img-gallery" /></div>
                                <figcaption>
                                    <div class="portfolio-hover-main text-center">
                                        <div class="portfolio-hover-box vertical-align-middle">
                                            <div class="portfolio-hover-content position-relative">
                                                <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="grid-item wow fadeInUp"> <!--grid-item-double-->
                        <a href="<?= BASE_URL ?>projects/citybox/cb-specs-04.png" data-group="two-columns-zoom-animation"
                            class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray"><img
                                        src="<?= BASE_URL ?>projects/citybox/cb-specs-04.png" class="project-img-gallery" /></div>
                                <figcaption>
                                    <div class="portfolio-hover-main text-center">
                                        <div class="portfolio-hover-box vertical-align-middle">
                                            <div class="portfolio-hover-content position-relative">
                                                <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </li>



                </ul>
            </div>
        </div>
    </section>





    <!-- start footer -->
    <?php include ROOT_PATH . 'includes/global-footer.php'; ?>

</body>

</html>