<?php require_once( '../../config.php' ) ?>


<?php include ROOT_PATH . 'includes/header.php'; ?>

<!-- <include src="includes/linked-files.html"></include> -->

<!-- <script>document.addEventListener("DOMContentLoaded", function () {
            let e = document.getElementsByTagName("include"); for (var t = 0; t < e.length; t++) { let a = e[t]; n(e[t].attributes.src.value, function (e) { a.insertAdjacentHTML("afterend", e), a.remove() }) } function n(e, t) { fetch(e).then(e => e.text()).then(e => t(e)) }
        });
    </script> -->


<body class="idd">

    <!-- start header -->
     <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->

    <!-- start parallax hero section -->`
     <section id="block-intro-slider" class="p-0">
        <video autoplay loop muted playsinline class="hero-video-admin">
            <source src="<?= BASE_URL ?>projects/admin/admin-demo-loop.mp4" type="video/mp4">  
        </video>    
    </section>
    <!-- end parallax hero section -->


    <!-- start product information section -->
    <section class="intro-info">
        <div class="container">
            <div class="row grid-lines">
                <div class="col col-12 text-left">
                    <div class="page-title font-weight-500">
                        <h3>IDD</h3>
                    </div>
                </div>
               <?php include ROOT_PATH . 'projects/admin/description-intro.php'; ?>

            </div>
        </div>
    </section>
    <!-- end product information section -->


    <!--begin - image grid - from single-project-page-01-->
    <section  class="image-grid-discovery">

        <!-- start section divider -->
        <section class="section-divider-dark">
            <div class="container">Discovery</div>
        </section>
        <!-- end section divider -->


        <div class="container-fluid padding-five-lr md-padding-30px-lr">
            <div class="row margin-40px-bottom">
                <div class="col col-12 col-lg-5 sm-margin-10px-bottom wow fadeIn" data-wow-delay="0.2s">
                    <div class="gallery-item"><img src="<?= BASE_URL ?>projects/idd/idd-journey-02.png"></div>
                </div> 
                <div class="col col-12 col-lg-7 sm-margin-10px-bottom wow fadeIn" data-wow-delay="0.2s">
                    <div class="gallery-item"><img src="<?= BASE_URL ?>projects/idd/idd-journey-01.png"></div>
                </div>
            </div>
        </div>
    </section>
    <!--end - image grid - from single-project-page-01-->




        <!-- start section divider -->
        <section class="section-divider-dark">
            <div class="container">Discovery</div>
        </section>
        <!-- end section divider -->

    <section class="fullwidth-idd-demo">
        <div class="container">
            <div class="row">
                <div class="col col-12 video-area">
                    <video autoplay loop muted playsinline>
                        <source src="<?= BASE_URL ?>projects/idd/idd-demo-loop.mp4" type="video/mp4">  
                    </video>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="fullwidth-idd-demo">
        <div class="container">
            <div class="row">
                <div class="col col-12 video-area">
                    <video autoplay loop muted playsinline>
                        <source src="<?= BASE_URL ?>projects/idd/idd-demo-loop.mp4" type="video/mp4">  
                    </video>
                </div>
            </div>
        </div>
    </section> -->


    

    <!-- start footer -->
    <?php include ROOT_PATH . 'includes/global-footer.php'; ?>

</body>

</html>