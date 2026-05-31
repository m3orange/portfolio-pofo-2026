<?php require_once( '../../config.php' ) ?>


<?php include ROOT_PATH . 'includes/header.php'; ?>


<body class="map-tools">

    <!-- start header -->
     <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->


    <!-- start parallax hero section -->
     <section id="block-intro-slider">
        <!-- <div class="map-tools-detail">
        <img src="<?= BASE_URL ?>projects/map-tools/project-page-detail-02.png"/>

        </div> -->
    </section>
    <!-- end parallax hero section -->





    <!--begin - image grid - from single-project-page-01-->
    <section class="diagrams">
        <div class="container padding-five-lr md-padding-30px-lr">
                        <div class="row">
                <div class="col col-12 col-lg-7 offset-lg-1 wow fadeIn" data-wow-delay="0s">
                    <div class="gallery-item">
                        <img src="<?= BASE_URL ?>projects/map-tools/map-tools-diagram-title.png"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-12 col-lg-8 offset-lg-1 wow fadeIn" data-wow-delay="0.2s">
                    <div class="gallery-item">
                        <img src="<?= BASE_URL ?>projects/map-tools/map-tools-diagram-01.png"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-12 col-lg-8 offset-lg-4 wow fadeIn" data-wow-delay="0.4s">
                    <div class="gallery-item">
                        <img src="<?= BASE_URL ?>projects/map-tools/map-tools-diagram-02.png"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-12 col-lg-9 offset-lg-1 wow fadeIn" data-wow-delay="0.6s">
                    <div class="gallery-item">
                        <img src="<?= BASE_URL ?>projects/map-tools/map-tools-diagram-03.png"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end - image grid - from single-project-page-01-->

    <!-- start product information section -->
    <section class="fullwidth-map-tools-animation">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-md-8 offset-md-2 ">

                       <video autoplay loop muted playsinline class="hero-video-cb">
            <source src="<?= BASE_URL ?>projects/map-tools/map-tools-demo-dark.mp4" type="video/mp4">  
        </video>    
                </div>  
            </div>
        </div>
    </section>
    <!-- end product information section -->



    <!-- start footer -->
    <?php include ROOT_PATH . 'includes/global-footer.php'; ?>

</body>

</html>