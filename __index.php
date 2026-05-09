<?php include_once("includes/header.php"); ?>

<!-- <include src="includes/linked-files.html"></include> -->

<!-- <script>document.addEventListener("DOMContentLoaded", function () {
            let e = document.getElementsByTagName("include"); for (var t = 0; t < e.length; t++) { let a = e[t]; n(e[t].attributes.src.value, function (e) { a.insertAdjacentHTML("afterend", e), a.remove() }) } function n(e, t) { fetch(e).then(e => e.text()).then(e => t(e)) }
        });
    </script> -->



<body class="citybox">

    <!-- start header -->
    <?php include_once("includes/global-nav.php"); ?>
    <!-- end header -->

    <!-- start parallax hero section -->
    <?php include_once("projects/citybox/intro-slider.php"); ?>
    <!-- end parallax hero section -->


    <!-- start product information section -->
    <section id="block-01">
        <div class="container">
            <div class="row grid-lines">
                <div class="col col-12 text-left margin-40px-bottom md-margin-50px-bottom sm-margin-30px-bottom">
                    <h3 class="text-extra-dark-gray margin-15px-bottom">
                        <div class="page-title">Atlas UI</div></h3>
                </div>
                <div
                    class="col col-12 col-lg-6 line-height-28 last-paragraph-no-margin md-margin-50px-bottom sm-margin-30px-bottom wow fadeIn">
                    <h6>Lorem Ipsum is simply dummy text of the printing
                        and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                        1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                        book. It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                        sheets containing Lorem Ipsum passages.
                    </h6>
                    <div>Modifications have been made to preserve confidentiality.</div>
                </div>
                <div class="col col-12 col-lg-4 offset-lg-2 line-height-26 wow fadeIn">
                    <ul class="list-style-6 margin-twelve-left alt-font">
                        <li class="margin-5px-bottom weight-600 ">
                            <label class="width-30 d-inline-block weight-800">Client:</label>Jason RRRRRichardson
                        </li>
                        <li class="margin-5px-bottom"><label class="width-30 d-inline-block">Industry:</label>Adventure
                            / Travel</li>
                        <li class="margin-5px-bottom"><label class="width-30 d-inline-block">Services:</label>Design,
                            Art Direction, Website</li>
                        <li class="margin-5px-bottom"><label class="width-30 d-inline-block">Date:</label>January 16th,
                            2017</li>
                        <li class="margin-5px-bottom"><label class="width-30 d-inline-block">Website:</label><a
                                href="https://themeforest.net/item/pofo-creative-agency-corporate-and-portfolio-multipurpose-template/20645944?ref=themezaa"
                                target="_blank">www.mammutadventure.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end product information section -->


    <!-- <section class="section-divider-light">
        <div class="container"><h6>Design System</h6></div>
    </section> -->

    <!--begin - image grid - from single-project-page-01-->
    <section id="block-02">
        <div class="container-fluid padding-five-lr md-padding-30px-lr">
            <div class="row margin-10px-bottom">
                <div class="col col-4 col-lg-4 col-md-12 col-sm-12 sm-margin-30px-bottom wow fadeInUp" data-wow-delay="0.4s">
                    <div class="gallery-item"><img src="projects/citybox/cb-discovery-grid-squares-01.png"></div>
                </div>
                <div class="col col-4 col-lg-4 col-md-12 col-sm-12 sm-margin-30px-bottom wow fadeInUp" data-wow-delay="0.6s">
                    <div class="gallery-item"><img src="projects/citybox/cb-discovery-grid-squares-02.png"></div>
                </div>
                <div class="col col-4 col-lg-4 col-md-12 col-sm-12 sm-margin-30px-bottom wow fadeInUp" data-wow-delay="0.8s">
                    <div class="gallery-item"><img src="projects/citybox/cb-discovery-grid-squares-03.png"></div>
                </div>
            </div>

            <div class="row">
                <div class="col col-12 wow fadeIn" data-wow-delay="1.1s">
                    <div class="gallery-item"><img src="projects/citybox/cb-discovery-grid-squares-04-fullwidth.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end - image grid - from single-project-page-01-->







    <!-- start fullwidth slider - from blog-standard-full-width-->
    <section id="block-03">
                        <section class="section-divider-light">
        <div class="container">
            <h6>Design System</h6>
        </div>
    </section>
        <div class="container-fluid"  style="padding-right: 0px; padding-left: 0px;">


            <div class="row">


                <div class="col-12 blog-post-content text-center text-md-center" style="padding-right: 0px; padding-left: 0px;">

                    <div class="swiper-full-screen swiper-cb-fullwidth-screens swiper-container white-move" 
                    data-slider-options='{ 
                    "loop": true, 
                    "slidesPerView": "1", 
                    "allowTouchMove":true, 
                    "autoplay": false, 
                    "keyboard": { "enabled": true, "onlyInViewport": true }, 
                    "navigation": { "nextEl": ".swiper-button-next", 
                    "prevEl": ".swiper-button-prev" }, 
                    "pagination": { "el": ".swiper-pagination", "clickable": true } }'
                    >


                        <div class="swiper-wrapper">    
                            <div class="swiper-slide "><img class="cb-screens" src="projects/citybox/cb-screens-browser-01.png"></div>
                            <div class="swiper-slide "><img class="cb-screens" src="projects/citybox/cb-screens-browser-02.png"></div>
                            <div class="swiper-slide "><img class="cb-screens" src="projects/citybox/cb-screens-browser-03.png"></div>
                            <div class="swiper-slide "><img class="cb-screens" src="projects/citybox/cb-screens-browser-04.png"></div>
                            <div class="swiper-slide "><img class="cb-screens" src="projects/citybox/cb-screens-browser-05.png"></div>
                            <div class="swiper-slide "><img class="cb-screens" src="projects/citybox/cb-screens-browser-06   .png"></div>

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

    <section id="block-04" class="section-divider-dark">
        <div class="container">
            <h6>Design Specs</h6>
        </div>
    </section>


    <section class="wow fadeIn">
        <div class="container">
            <div class="row margin-eight-bottom md-margin-50px-bottom sm-margin-20px-bottom">
                <div class="col-12 col-lg-6 last-paragraph-no-margin md-margin-30px-bottom wow fadeInUp">
                    <h5 class=" text-extra-dark-gray">Holistic brand redesign focusing product design,
                        interface design, studio photograph style, icon design, editorial design, web design & motion
                        design.</h5>
                    <p class=" text-medium text-medium-gray">- Paul Randddddd / Creative Director</p>
                </div>
                <div class="col-12 col-lg-5 offset-lg-1 wow fadeInUp" data-wow-delay="0.2s">
                    <p>Koordinaten bilden die Grundlage für Einsatz des Produktes ausgerichtete Corporate Design. Reale
                        Daten wie zum Beispiel Wetterdaten, Geografische Flächen und Höhenmeter, werden in das Design in
                        mit einbezogen. Die neu gestaltete Marke zeichnet sich sowohl durch userorientierte Einsatz. die
                        in Grundlage für das Einsatz von des Produktes ausgerichtete Corporate Voin Design. in Reale
                        Daten wie zum Beispiel Wetterdaten, Geog rafische Koordi naten und Höhenmeter, werden in das
                        Design mit einbezogen. </p>
                </div>
            </div>


            <div class="row mx-0">
                <ul class="portfolio-grid work-3col hover-option2 gutter-large w-100">
                    <li class="grid-sizer"></li>
                    <li class="grid-item grid-item-double  wow fadeInUp"> <!--grid-item-double-->
                        <a href="projects/citybox/cb-specs-01.png" data-group="two-columns-zoom-animation"
                            class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray"><img
                                        src="projects/citybox/cb-specs-01.png" class="project-img-gallery" /></div>
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
                        <a href="projects/citybox/cb-specs-02.png" data-group="two-columns-zoom-animation"
                            class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray"><img
                                        src="projects/citybox/cb-specs-02.png" class="project-img-gallery" /></div>
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
                        <a href="projects/citybox/cb-specs-03.png" data-group="two-columns-zoom-animation"
                            class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray"><img
                                        src="projects/citybox/cb-specs-03.png" class="project-img-gallery" /></div>
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
                        <a href="projects/citybox/cb-specs-04.png" data-group="two-columns-zoom-animation"
                            class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray"><img
                                        src="projects/citybox/cb-specs-04.png" class="project-img-gallery" /></div>
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
    <!-- end gallery section -->




    <!-- start footer -->
    <?php include_once("includes/global-footer.php"); ?>


</body>

</html>