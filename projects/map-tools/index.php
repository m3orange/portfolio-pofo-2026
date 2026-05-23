<?php require_once( '../../config.php' ) ?>


<?php include ROOT_PATH . 'includes/header.php'; ?>

<!-- <include src="includes/linked-files.html"></include> -->

<!-- <script>document.addEventListener("DOMContentLoaded", function () {
            let e = document.getElementsByTagName("include"); for (var t = 0; t < e.length; t++) { let a = e[t]; n(e[t].attributes.src.value, function (e) { a.insertAdjacentHTML("afterend", e), a.remove() }) } function n(e, t) { fetch(e).then(e => e.text()).then(e => t(e)) }
        });
    </script> -->


<body class="map-tools">

    <!-- start header -->
     <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->


    <!-- start parallax hero section -->
     <section id="block-intro-slider">
        <video autoplay loop muted playsinline class="hero-video-admin">
            <source src="<?= BASE_URL ?>projects/admin/admin-demo-loop.mp4" type="video/mp4">  
        </video>    
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
                <div class="col col-12 text-left">

                       <video autoplay loop muted playsinline class="hero-video-cb">
            <source src="<?= BASE_URL ?>projects/map-tools/map-tools-demo.mp4" type="video/mp4">  
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