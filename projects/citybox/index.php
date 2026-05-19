<?php require_once( '../../config.php' ) ?>


<?php include ROOT_PATH . 'includes/header.php'; ?>

<!-- <include src="includes/linked-files.html"></include> -->

<!-- <script>document.addEventListener("DOMContentLoaded", function () {
            let e = document.getElementsByTagName("include"); for (var t = 0; t < e.length; t++) { let a = e[t]; n(e[t].attributes.src.value, function (e) { a.insertAdjacentHTML("afterend", e), a.remove() }) } function n(e, t) { fetch(e).then(e => e.text()).then(e => t(e)) }
        });
    </script> -->


<body class="citybox">

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


    <!--begin - image grid - from single-project-page-01-->
    <section  class="image-grid-discovery">

        <!-- start section divider -->
        <section class="section-divider-dark">
            <div class="container">Discovery & Prototyping</div>
        </section>
        <!-- end section divider -->


        <div class="container-fluid padding-five-lr md-padding-30px-lr">
            <div class="row margin-40px-bottom">
                <div class="col col-12 col-lg-4 col-md-6 col-sm-12 sm-margin-10px-bottom wow fadeInUp" data-wow-delay="0.2s">
                    <div class="gallery-item"><img src="<?= BASE_URL ?>projects/citybox/discovery-grid-01.png"></div>
                    <!-- <div class="gallery-prject-description">Description</div> -->
                </div>
                <div class="col col-12 col-lg-4 col-md-6 col-sm-12 sm-margin-10px-bottom wow fadeInUp"
                    data-wow-delay="0.4s">
                    <div class="gallery-item"><img src="<?= BASE_URL ?>projects/citybox/discovery-grid-02.png"></div>
                </div>
                <div class="col col-12 col-lg-4 col-md-6 col-sm-12 sm-margin-10px-bottom wow fadeInUp"
                    data-wow-delay="0.6s">
                    <div class="gallery-item"><img src="<?= BASE_URL ?>projects/citybox/discovery-grid-03.png"></div>
                </div>
               
            </div>
        </div>
    </section>
    <!--end - image grid - from single-project-page-01-->


    <!--begin - image grid - from single-project-page-01-->
    <section>

        <!-- start section divider -->
        <section class="section-divider-dark">
            <div class="container">
                <div class="row btn-to-full-project">
                    <div class="col col-12 col-lg-8 col-md-6 ">Design System</div>
                    <div class="col col-12 col-lg-4 col-md-6" style="text-align: right;">
                        <a class="btn btn-large btn-transparent-black d-table d-lg-inline-block md-no-margin-left md-no-margin-right md-margin-20px-top"  style="text-decoration: none;"
                        href="<?= BASE_URL ?>projects/atlas-design-system/index.php" >
                            View the design system in detail</a>
                    </div>
                </div>
                

            </div>
        </section>
        <!-- end section divider -->


        <div class="container-fluid padding-five-lr md-padding-30px-lr">
            <div class="row">
                <div class="col col-12 wow fadeIn" data-wow-delay="0.4s">
                    <!-- 
                    <div class="link-to-project-page">
                        <a href="/projects/citybox">View the Atlas Design System in detail </a>
                        <div><img src="images/swiper-button-alpha-45px-next.png"/></div>
                    </div>
                     -->
                    <div class="gallery-item">
                        <img src="<?= BASE_URL ?>projects/atlas-design-system/atlas-design-system-fullwidth.png"/>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--end - image grid - from single-project-page-01-->




    <!-- start fullwidth slider - from blog-standard-full-width-->
    <section class="fullwidth-slider-01">
        <!-- start section divider -->
        <section class="section-divider-light">
            <div class="container">Final Design</div>
        </section>
        <!-- end section divider -->
        <div class="container-fluid" style="padding-right: 0px; padding-left: 0px;">


            <div class="row">


                <div class="col-12 blog-post-content text-center text-md-center"
                    style="padding-right: 0px; padding-left: 0px;">

                    <div class="swiper-full-screen swiper-cb-fullwidth-screens swiper-container white-move"
                        data-slider-options='{ 
                    "loop": true, 
                    "slidesPerView": "1", 
                    "allowTouchMove":true, 
                    "autoplay": false, 
                    "keyboard": { "enabled": true, "onlyInViewport": true }, 
                    "navigation": { "nextEl": ".swiper-button-next", 
                    "prevEl": ".swiper-button-prev" }, 
                    "pagination": { "el": ".swiper-pagination", "clickable": true } }'>


                        <div class="swiper-wrapper">
                            <div class="swiper-slide "><img class="cb-screens"
                                    src="<?= BASE_URL ?>projects/citybox/cb-screens-browser-01.png"></div>
                            <div class="swiper-slide "><img class="cb-screens"
                                    src="<?= BASE_URL ?>projects/citybox/cb-screens-browser-02.png"></div>
                            <div class="swiper-slide "><img class="cb-screens"
                                    src="<?= BASE_URL ?>projects/citybox/cb-screens-browser-03.png"></div>
                            <div class="swiper-slide "><img class="cb-screens"
                                    src="<?= BASE_URL ?>projects/citybox/cb-screens-browser-04.png"></div>
                            <div class="swiper-slide "><img class="cb-screens"
                                    src="<?= BASE_URL ?>projects/citybox/cb-screens-browser-05.png"></div>
                            <div class="swiper-slide "><img class="cb-screens"
                                    src="<?= BASE_URL ?>projects/citybox/cb-screens-browser-06.png"></div>

                        </div>
                        <div
                            class="swiper-pagination swiper-pagination-square swiper-pagination-white swiper-full-screen-pagination">
                        </div>
                        <div class="swiper-button-prev swiper-button-black-highlight"></div>
                        <div class="swiper-button-next swiper-button-black-highlight"></div>

                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- end fullwidth slider - from blog-standard-full-width-->



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