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
    <section id="block-intro-slider">
        <img src="<?= BASE_URL ?>projects/musicasa/musicasa-fullwidth-02.png"/>    
    </section>
    <!-- end parallax hero section -->


    <!-- start product information section -->
    <section class="intro-info">
        <div class="container">
            <div class="row grid-lines">
                <div class="col col-12 text-left">
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
                        <ul class="portfolio-grid work-3col hover-option4 gutter-medium">
                            <li class="grid-sizer"></li>
                            <li class="grid-item web branding design wow fadeIn" data-wow-delay="0.4s">
                                <div class="portfolio-img">
                                    <!-- <div class="card-description">Name of the Project</div> -->
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

        <!-- start fullwidth slider - from blog-standard-full-width-->
    <section class="fullwidth-musicasa-demo">
        <!-- start section divider -->
        <section class="section-divider-light">
            <div class="container">Concert Ticket Purchasing Workflow</div>
        </section>
        <!-- end section divider -->
        <div class="container">
            <div class="row">
                <div class="col col-12 video-area">
                    <video autoplay loop muted playsinline>
                        <source src="<?= BASE_URL ?>projects/musicasa/260519_1336-musicasa-demo-1000x622.mp4" type="video/mp4">  
                    </video>
                </div>
            </div>
        </div>
    </section>

    <!-- end fullwidth slider - from blog-standard-full-width-->









<section class="wow animate__fadeIn pt-0" style="visibility: visible; animation-name: fadeInUP;" data-delay="0.5s">
            <div class="container-fluid padding-three-lr padding-eight-tb md-padding-30px-lr sm-padding-15px-lr">
                <div class="row">
                    <div class="col-12 margin-35px-tb md-no-margin-top md-margin-30px-bottom workflows-fullwidth">
                        <img src="<?= BASE_URL ?>projects/musicasa/workflow-01.png" class="w-100" data-no-retina="">
                    </div>
                    <div class="col-12 margin-35px-tb md-no-margin-top md-margin-30px-bottom workflows-fullwidth">
                        <img src="<?= BASE_URL ?>projects/musicasa/workflow-02.png" class="w-100" data-no-retina="">
                    </div>
                    <div class="col-12 margin-35px-tb md-no-margin-top md-margin-30px-bottom workflows-fullwidth" style="background-color: #303030 !important;">
                        <img src="<?= BASE_URL ?>projects/musicasa/musicasa-all-screens-25pc.png" class="w-100" data-no-retina="">
                    </div>
                </div>
            </div>
        </section>




    <!-- start footer -->
    <?php include ROOT_PATH . 'includes/global-footer.php'; ?>

</body>

</html>