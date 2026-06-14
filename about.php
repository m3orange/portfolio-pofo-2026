<?php include_once("config.php"); ?>


<?php include ROOT_PATH . 'includes/header.php'; ?>

<body class="about">

    <!-- start header -->
     <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->


    <section id="block-intro-slider">
    
    </section>

    <section class="intro-info">
        <div class="container">
            <div class="row grid-lines">
                <div class="col col-12 text-left">
                    <div class="page-title font-weight-500">
                        <h3>Admin Module</h3>
                    </div>
                </div>
               <?php include ROOT_PATH . 'projects/admin/description-intro.php'; ?>

            </div>
        </div>
    </section> 



            <section class="wow animate__fadeIn bg-light-gray">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-12 text-center tab-style3 tab-about" id="animated-tab1">
                        <!-- start tab navigation -->
                        <ul class="nav nav-tabs text-medium font-weight-500 justify-content-center flex-column flex-md-row"> 
                            <li class="nav-item"><a href="#tab3_sec1" data-bs-toggle="tab" class="nav-link active">I'm a Front-End Designer</a></li>
                            <li class="nav-item"><a href="#tab3_sec2" data-bs-toggle="tab" class="nav-link">Knowledge & Skills</a></li>
                            <li class="nav-item"><a href="#tab3_sec3" data-bs-toggle="tab" class="nav-link">Software I'm Fluent In</a></li>

                        </ul>
                        <!-- end tab navigation -->
                    </div>
                </div>
                <!-- start tab content -->  
                <div class="tab-content">
                    <!-- start tab content -->
                    <div id="tab3_sec1" class="tab-pane fade in active show"> 
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 last-paragraph-no-margin">
                                <img src="about/fs-designer-lifecycle.png">
                            </div>
                            <div class="col-12 col-lg-4 last-paragraph-no-margin">
                              <p>Just like an architect must understand engineering principles like load bearing or material mechanics, I needed to have a detailed understanding of how my designs would actually be built, in order to make sure that my work was always rooted in reality. Therefore, I've trained myself extensively in front and back-end development and have become fluent in front-end styling (HTML/CSS/SCSS/JS), and have even worked in frameworks like React and Vue.</p>

                                <p>Unlike most product designers, my skillset's range tends to be wider (people tend to call us 🦄). This knowledge affords me a more comprehensive understanding of a product's lifecycle, and I'm able to participate in more moments in the process. But more importantly, it has given me enormous insight into the minutiae in how a product is designed and the specific ways in which it will be built, and how critical is for design and engineering to be in constant communication from day one. </p>
                            </div>
                        </div>
                    </div>      
                    <!-- end tab content -->
                    <!-- start tab content -->
                    <div id="tab3_sec2" class="tab-pane fade in"> 
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 last-paragraph-no-margin">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum typesetting has dummy text.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end tab content -->
                    <!-- start tab content -->
                    <div id="tab3_sec3" class="tab-pane fade in"> 
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 last-paragraph-no-margin">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum typesetting has dummy text.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                            </div>
                        </div>
                    </div>
                    <!-- end tab content -->
                    <!-- start tab content -->
                    <div id="tab3_sec4" class="tab-pane fade in"> 
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 last-paragraph-no-margin">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum typesetting has dummy text.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end tab content -->
                </div>
                <!-- end tab content -->
            </div>
        </section>


    <!--begin - image grid - from single-project-page-01-->
    <section  class="image-grid-discovery">

        <!-- start section divider -->
        <section class="section-divider-dark">
            <div class="container">Discovery</div>
        </section>
        <!-- end section divider -->


        <div class="container-fluid padding-five-lr md-padding-30px-lr">
            <div class="row margin-40px-bottom">
                <div class="col col-12 col-md-6 col-sm-6 sm-margin-10px-bottom wow fadeIn" data-wow-delay="0.2s">
                    <div class="gallery-item"><img src="<?= BASE_URL ?>projects/admin/discovery-grid-01@0.5.png"></div>
                    <!-- <div class="gallery-prject-description">Description</div> -->
                </div>
                <div class="col col-12 col-md-6 col-sm-6 sm-margin-10px-bottom wow fadeIn" data-wow-delay="0.4s">
                    <div class="gallery-item"><img src="<?= BASE_URL ?>projects/admin/discovery-grid-02@0.5.png"></div>
                </div>
            </div>
        </div>
    </section>
    <!--end - image grid - from single-project-page-01-->

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