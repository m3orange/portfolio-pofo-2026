<?php require_once( 'config.php' ) ?>


<?php include ROOT_PATH . 'includes/header.php'; ?>

<body class="about">

    <!-- start header -->
     <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->

    <!-- start parallax hero section -->
     <section id="block-intro-slider">

    </section>
    <!-- end parallax hero section -->



     <?php include ROOT_PATH . 'about/inc-unicorn-and-skills.php'; ?>

<section class="wow fadeIn">

<!-- start section divider -->
<section class="section-divider-dark">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-lg-8 col-md-6">Engineering Initiatives</div>
        </div>
    </div>
</section>
<!-- end section divider -->

    <div class="container"> 
        <div class="row row-cols-1 row-cols-lg-2 row-cols-md-2 align-items-center square-text-blocks">

            <!-- Left Block ---->
            <div class="col col-7 text-center sm-margin-35px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <video autoplay loop muted playsinline class="hero-video-cb">
                    <source src="<?= BASE_URL ?>projects/design-to-code/working-in-vuetify.mp4" type="video/mp4">  
                </video> 
                

            </div>

            <!-- Right Block ---->

            <div class="col col-5 padding-six-lr lg-padding-15px-lr text-left text-md-start resume-text" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                <h4 class="font-weight-600 header-font">We combine design, thinking and craft.</h4>
                    <p>
                    We learned that various engineering teams would be involved in the development of the same product, and that each had their own ways of implementing global theming and local styling through (local) scoped styling that would override global declarations. This was one of the causes for styling disparity and, therefore, growing design and technical debt. </p>    
                    <p>
                        I wanted to explore the possibility of implementing custom CSS classes that would solve this issue, and which would also facilitate the global propagation of updates and deprecation across the board. I therefore dove into the Vuetify code to understand how elements work, the challenges engineers may face when adding styling, and understand how feasible it would be to implement these custom classes.
                    </p>
            </div>
        </div>
    </div>

</section>

<section class="wow fadeIn">

    <div class="container"> 
        <div class="row row-cols-1 row-cols-lg-2 row-cols-md-2 align-items-center square-text-blocks">

            <!-- Left Block ---->
            <div class="col col-5 padding-six-lr lg-padding-15px-lr text-left text-md-start resume-text" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                <h4 class="font-weight-600 header-font">We combine design, thinking and craft.</h4>
                <p>
Another critical piece of the puzzle was to consolidate all of our design system's documentation into a single source of truth to be accessible by all teams.  To that end, I began to explore:

<ol>
    <li>how could us designers view a live (code) inventory of engineers' components via Backlight, </li>
    <li>how could designers potentially do some of the updating of styling, and</li> 
    <li>how could we ensure that our design system guidelines were always mirroring updated code, by leveraging tools like Storybook and Supernova</li>
</ol>


                </p>
            </div>

            <!-- Right Block ---->
            <div class="col col-7 text-center sm-margin-35px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <video autoplay loop muted playsinline class="hero-video-cb">
                    <source src="<?= BASE_URL ?>projects/design-to-code/backlight-demo.mp4" type="video/mp4">  
                </video>  
                <div class="captions">Backlight repo integrated with Storybook</div>
            </div>
        </div>
    </div>

</section>

<section class="wow fadeIn">

    <div class="container"> 
        <div class="row row-cols-1 row-cols-lg-2 row-cols-md-2 align-items-center square-text-blocks">

            <!-- Left Block ---->
            <div class="col col-7 text-center sm-margin-35px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">



                                <video autoplay loop muted playsinline class="hero-video-cb">
                    <source src="<?= BASE_URL ?>projects/design-to-code/vantor-vuetify-poc.mp4" type="video/mp4">  
                </video> 


            </div>

            <!-- Right Block ---->

            <div class="col col-5 padding-six-lr lg-padding-15px-lr text-left text-md-start resume-text" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                <h4 class="font-weight-600 header-font">We combine design, thinking and craft.</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since.</p>
            </div>
        </div>
    </div>

</section>

<section class="wow fadeIn">

    <div class="container"> 
        <div class="row row-cols-1 row-cols-lg-2 row-cols-md-2 align-items-center square-text-blocks">

            <!-- Left Block ---->
            <div class="col col-5 padding-six-lr lg-padding-15px-lr text-left text-md-start resume-text" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                <h4 class="font-weight-600 header-font">We combine design, thinking and craft.</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since.</p>
            </div>

            <!-- Right Block ---->
            <div class="col col-7 text-center sm-margin-35px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                 <video autoplay loop muted playsinline class="hero-video-cb">
                    <source src="<?= BASE_URL ?>projects/design-to-code/vantor-vuetify-poc.mp4" type="video/mp4">  
                </video> 
            </div>
        </div>
    </div>

</section>
















<section>
    <div class="container"> 
        <div class="row row-cols-1 row-cols-lg-2 row-cols-md-2 align-items-center square-text-blocks">

            <!-- Left Block ---->
            <div class="col col-7 text-center sm-margin-35px-bottom wow" style="visibility: visible; animation-name: fadeIn;">
                <li class="grid-item grid-item-double kickoff-presentation"> <!--grid-item-double-->
                    <a href="<?= BASE_URL ?>projects/design-to-code/45-days-milestone-roadmap-large.png" class="lightbox-group-gallery-item">
                        <figure>
                            <div class="portfolio-img bg-extra-dark-gray">
                                <img src="<?= BASE_URL ?>projects/design-to-code/45-days-milestone-roadmap@0.5x.png" class="project-img-gallery" />
                            </div>
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
            </div>

            <!-- Right Block ---->
            <div class="col col-5 padding-six-lr lg-padding-15px-lr text-left text-md-start resume-text" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                <h4 class="font-weight-600 header-font">We combine design, thinking and craft.</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since.</p>
            </div>
        </div>
    </div>

</section>







    <section class="fullwidth-slider-01">
        <!-- start section divider -->
            <section class="section-divider-light">
                <div class="container">Stakeholder Presentation [Partial]</div>
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
                                    src="<?= BASE_URL ?>projects/admin/admin-presentation-01.png"></div>
                            <div class="swiper-slide "><img class="cb-screens"
                                    src="<?= BASE_URL ?>projects/admin/admin-presentation-02.png"></div>
                            <div class="swiper-slide "><img class="cb-screens"
                                    src="<?= BASE_URL ?>projects/admin/admin-presentation-03.png"></div>
                            <div class="swiper-slide "><img class="cb-screens"
                                    src="<?= BASE_URL ?>projects/admin/admin-presentation-04.png"></div>
                            <div class="swiper-slide "><img class="cb-screens"
                                    src="<?= BASE_URL ?>projects/admin/admin-presentation-05.png"></div>
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



    <!-- start footer -->
    <?php include ROOT_PATH . 'includes/global-footer.php'; ?>

</body>

</html>