
MySQL-Powered!

<?php require_once( '../../config.php' ) ?>

<?php
require_once '../../db-config.php';

$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);

// Project info
$stmt = $pdo->prepare('SELECT * FROM projects WHERE id = ?');
$stmt->execute([1]);
$project = $stmt->fetch(PDO::FETCH_ASSOC);

// Assets by type
function getAssets($pdo, $project_id, $type) {
    $stmt = $pdo->prepare('SELECT * FROM project_assets WHERE project_id = ? AND display_type = ? ORDER BY sort_order ASC');
    $stmt->execute([$project_id, $type]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$hero     = getAssets($pdo, 1, 'hero');
$grid     = getAssets($pdo, 1, 'grid');
$single   = getAssets($pdo, 1, 'single');
$lightbox = getAssets($pdo, 1, 'lightbox');
$slideshow = getAssets($pdo, 1, 'slideshow');
?>


<?php include ROOT_PATH . 'includes/header.php'; ?>

<body class="admin">

    <!-- start header -->
     <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->

    <!-- start parallax hero section -->
     <section id="block-intro-slider">
        <video autoplay loop muted playsinline class="hero-video-admin">
            <source src="<?= BASE_URL ?><?= $hero[0]['file_path'] ?>" type="video/mp4">  
        </video>    
    </section>
    <!-- end parallax hero section -->


    <!-- start product information section -->
    <section class="intro-info">
        <div class="container">
            <div class="row grid-lines">
                <div class="col col-12 text-left">
                    <div class="page-title font-weight-500">
                        <h3><?= $project['title'] ?></h3>
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
                <?php foreach ($grid as $img): ?>
                <div class="col col-12 col-lg-4 col-md-6 col-sm-6 sm-margin-10px-bottom wow fadeIn">
                    <div class="gallery-item"><img src="<?= BASE_URL ?><?= $img['file_path'] ?>"></div>
                </div>
                <?php endforeach; ?>            
            </div>
        </div>
    </section>
    <!--end - image grid - from single-project-page-01-->


    <section>


        <div class="container-fluid padding-four-lr md-padding-30px-lr">
            <div class="row">
                <div class="col col-12">
                    <div class="image-grid-discovery-fullwidth"><img src="<?= BASE_URL ?><?= $single[0]['file_path'] ?>"></div>
                </div>
            </div>
        </div>
    </section>    

    <!--begin - image grid - from single-project-page-01-->
    <section class="admin-journey-fullwidth">
        <div class="container-fluid padding-five-lr md-padding-30px-lr">
            <div class="row">
                <div class="col col-12" data-wow-delay="0.4s">
                    <!-- 
                    <div class="link-to-project-page">
                        <a href="/projects/citybox">View the Atlas Design System in detail </a>
                        <div><img src="images/swiper-button-alpha-45px-next.png"/></div>
                    </div>
                     -->
                    <div class="gallery-item"><img src="<?= BASE_URL ?><?= $single[1]['file_path'] ?>"></div>
                </div>
            </div>

        </div>
    </section>
    <!--end - image grid - from single-project-page-01-->



    <section class="wow fadeIn">
        <!-- start section divider -->
        <section class="section-divider-dark">
            <div class="container">
                <div class="row">
                    <div class="col col-12 col-lg-8 col-md-6">Final Designs</div>
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

                    <li class="grid-item grid-item-double  wow fadeInUp" data-wow-delay="0s"> <!--grid-item-double-->
                        <a href="<?= BASE_URL ?>projects/admin/assets/admin-screens-01.png" data-group="two-columns-zoom-animation" class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray"><img src="<?= BASE_URL ?>projects/admin/assets/admin-screens-01.png" class="project-img-gallery" /></div>
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

                    <!-- Remaining items looped -->
                    <?php foreach (array_slice($lightbox, 1) as $img): ?>
                    <li class="grid-item wow fadeInUp">
                        <a href="<?= BASE_URL ?><?= $img['file_path'] ?>" data-group="two-columns-zoom-animation" class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray">
                                    <img src="<?= BASE_URL ?><?= $img['file_path'] ?>" class="project-img-gallery" />
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
                    <?php endforeach; ?>


                </ul>
            </div>
        </div>
    </section>
    <!-- end gallery section -->


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
                            <?php foreach ($slideshow as $img): ?>
                                <div class="swiper-slide">
                                    <img class="cb-screens" src="<?= BASE_URL ?><?= $img['file_path'] ?>">
                                </div>
                            <?php endforeach; ?>
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