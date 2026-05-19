<?php require_once( '../../config.php' ) ?>


<?php include ROOT_PATH . 'includes/header.php'; ?>

<body class="musicasa">

    <!-- start header -->
     <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->

    <!-- start parallax hero section -->
    <section id="block-intro-slider">
        <img src="<?= BASE_URL ?>projects/musicasa/musicasa-fullwidth-02.png"/>    
    </section>

    <!-- end parallax hero section -->


    <!-- start product information section -->
    <section class="intro-info">
        <div class="container">
            <div class="row grid-lines">
                <div class="col col-12 text-left ">
                    <div class="page-title font-weight-500">
                        <h3>Musicasa</h3>
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
            <div class="container">Research & Discovery</div>
        </section>
        <!-- end section divider -->

        <div class="container">

        <div class="row mx-0">
                <div class="col-12 px-3 p-md-0">
                    <div class="filter-content overflow-hidden">
                        <ul class="portfolio-grid work-4col hover-option4 gutter-medium">
                            <li class="grid-sizer"></li>
                            <li class="grid-item web branding design wow fadeIn" data-wow-delay="0.4s">
                                <div class="portfolio-img">
                                    <img src="<?= BASE_URL ?>projects/musicasa/grid-process-01.png">
                                </div>
                            </li>
                            <li class="grid-item web branding design wow fadeIn" data-wow-delay="0.4s">
                                <div class="portfolio-img">
                                    <img src="<?= BASE_URL ?>projects/musicasa/grid-process-02.png">
                                </div>
                            </li>

                            <li class="grid-item web branding design wow fadeIn" data-wow-delay="0.4s">
                                <div class="portfolio-img">
                                    <img src="<?= BASE_URL ?>projects/musicasa/grid-process-03.png">
                                </div>
                            </li>
                            <li class="grid-item web branding design wow fadeIn" data-wow-delay="0.4s">
                                <div class="portfolio-img">
                                    <img src="<?= BASE_URL ?>projects/musicasa/grid-process-04.png">
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>



    </section>
    <!--end - image grid - from single-project-page-01-->

    <!--begin - image grid - from single-project-page-01-->
    <section>


<section class="workflows-area-02 p-0">
<div class="container">
    <div class="row">

    <!-- start product gallery item -->
    <div class="col col-12 col-xl-12 mx-auto text-center workflows-fullwidth-container wow animate__fadeInUp padding-one-lr margin-70px-bottom sm-margin-30px-bottom"  style="visibility: visible; animation-name: fadeInUp;" >
    <img src="<?= BASE_URL ?>projects/musicasa/workflow-01.png" class="w-100" data-no-retina="" />
    </div>
    <!-- end product gallery item -->

    <!-- start product gallery item -->
    <div class="col col-12 col-xl-12 mx-auto text-center workflows-fullwidth-container wow animate__fadeInUp padding-one-lr" 
    style="visibility: visible; animation-name: fadeInUp;">
    <img src="<?= BASE_URL ?>projects/musicasa/workflow-02.png" class="w-100" data-no-retina="" />
    </div>
    <!-- end product gallery item -->
    
    </div>
</div>
</section>



<section class="workflows-area-02">
    <div class="container">
        <div class="row">
            <div class="col col-12">
                <img src="<?= BASE_URL ?>projects/musicasa/musicasa-all-screens-25pc.png"/>
            </div>
        </div>
    </div>
</section> 


    <!-- start footer -->
    <?php include ROOT_PATH . 'includes/global-footer.php'; ?>

</body>

</html>