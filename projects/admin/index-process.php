<?php require_once( '../../config.php' ) ?>

<?php require_once '../../db-config.php';

$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);

// Project info
$stmt = $pdo->prepare('SELECT * FROM projects WHERE id = ?');
$stmt->execute([3]);
$project = $stmt->fetch(PDO::FETCH_ASSOC);

// Assets by type
function getAssets($pdo, $project_id, $type) {
    $stmt = $pdo->prepare('SELECT * FROM project_assets WHERE project_id = ? AND display_type = ? ORDER BY sort_order ASC');
    $stmt->execute([$project_id, $type]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$hero     = getAssets($pdo, 3, 'hero');
$grid     = getAssets($pdo, 3, 'grid');
$single   = getAssets($pdo, 3, 'single');
$lightbox = getAssets($pdo, 3, 'lightbox');
$slideshow = getAssets($pdo, 3, 'slideshow');
?>

<?php include ROOT_PATH . 'includes/header.php'; ?>


<body class="admin">

    <!-- start header -->
     <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->

    <!-- start parallax hero section -->
     <section id="block-intro-slider">
        <video autoplay loop muted playsinline class="hero-video-admin">
            <source src="<?= BASE_URL ?>projects/admin/assets/admin-demo-loop.mp4" type="video/mp4">              
        </video>  
    </section>
    <!-- end parallax hero section -->

    <!-- start product information section -->
    <?php include ROOT_PATH . 'projects/description-intro-global.php'; ?>
    <!-- end product information section -->


<style>


.admin #anchor-06.anchor-wrapper {
    background-color: #282828;
}


</style>


<!-- start slider section from home-classic-business.html-->

<div id="anchor-06"class="anchor-wrapper"><!--@@@@---| Anchor | ---@@@@-->
    <div class="anchor-links anchor-white">
    <div class="row">
    <div class="col col-12 col-xxl-9 col-xl-9 col-lg-11 col-md-12 anchor-links-content">
        <h5>Final Design</h5>
        <h6></h6>
    </div>
    </div>
    </div>

    <section class="p-0 main-slider h-100 position-relative overflow-visible mobile-height wow">
    <div class="swiper-full-screen swiper-container h-100 w-100 white-move">
    <div class="swiper-wrapper">
        <!-- start slider item -->
        <div class="swiper-slide cover-background" style="background-image:url('http://placehold.it/1920x1080');">
            <div class="container position-relative full-screen">
                <div class="slider-typography text-center">
                    <div class="slider-text-middle-main">
                        <div class="slider-text-middle">
                            <div class="alt-font text-white-2 font-weight-700 title-large margin-two-bottom width-60 mx-auto lg-width-80 md-margin-four-bottom sm-width-90 sm-margin-15px-bottom sm-letter-spacing-0">A digital marketing</div>
                            <h6 class="text-white-2 opacity6 padding-ten-lr font-weight-300 margin-four-bottom md-margin-four-bottom sm-margin-20px-bottom">We are delivering beautiful digital products</h6>
                            <div><a href="https://1.envato.market/g7jrr" target="_blank" class="btn btn-deep-pink btn-rounded btn-medium no-margin-lr">Purchase Pofo</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end slider item -->
        <!-- start slider item -->
        <div class="swiper-slide cover-background" style="background-image:url('http://placehold.it/1920x1080');">
            <div class="container position-relative full-screen">
                <div class="slider-typography text-center">
                    <div class="slider-text-middle-main">
                        <div class="slider-text-middle">
                            <div class="alt-font text-white-2 font-weight-700 title-large margin-two-bottom width-60 mx-auto lg-width-80 md-margin-four-bottom sm-width-90 sm-margin-15px-bottom sm-letter-spacing-0">We create the trend</div>
                            <h6 class="text-white-2 opacity6 padding-ten-lr font-weight-300 margin-four-bottom md-margin-four-bottom sm-margin-20px-bottom">We are delivering beautiful digital products</h6>
                            <div><a href="https://1.envato.market/g7jrr" target="_blank" class="btn btn-deep-pink btn-rounded btn-medium no-margin-lr">Purchase Pofo</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end slider item -->
        <!-- start slider item -->
        <div class="swiper-slide cover-background" style="background-image:url('http://placehold.it/1920x1080');">
            <div class="container position-relative full-screen">
                <div class="slider-typography text-center">
                    <div class="slider-text-middle-main">
                        <div class="slider-text-middle">
                            <div class="alt-font text-white-2 font-weight-700 title-large margin-two-bottom width-60 mx-auto lg-width-80 md-margin-four-bottom sm-width-90 sm-margin-15px-bottom sm-letter-spacing-0">A beautiful experiences</div>
                            <h6 class="text-white-2 opacity6 padding-ten-lr font-weight-300 margin-four-bottom md-margin-four-bottom sm-margin-20px-bottom">We are delivering beautiful digital products</h6>
                            <div><a href="https://1.envato.market/g7jrr" target="_blank" class="btn btn-deep-pink btn-rounded btn-medium no-margin-lr">Purchase Pofo</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end slider item -->
    </div>              
    <div class="swiper-pagination swiper-pagination-round swiper-pagination-white swiper-full-screen-pagination d-none"></div>
    <div class="swiper-button-next slider-small-arrow-white"><i class="fas fa-angle-right pull-right"></i></div>
    <div class="swiper-button-prev slider-small-arrow-white"><i class="fas fa-angle-left pull-right"></i></div>
    <!-- end slider pagination -->
    </div>
    <!-- scroll down arrow -->
    <div class="scroll-down-section text-center"><a href="#about" class="inner-link text-uppercase text-small text-white-2 text-white-2-hover opacity5 margin-10px-bottom display-inline-block">scroll down</a><div class="separator-line-verticle-large bg-deep-pink m-auto"></div></div>
    <!-- start slider pagination -->
    </section>
</div>
<!-- end slider section from home-classic-business.html-->



  <div id="anchor-04"class="anchor-wrapper"><!--@@@@---| Anchor | ---@@@@-->
    <div class="anchor-links anchor-white">
      <div class="row">
        <div class="col col-12 col-xxl-9 col-xl-9 col-lg-11 col-md-12 anchor-links-content">
          <h5>Final Design</h5>
          <h6></h6>
        </div>
      </div>
    </div>

    <section class="wow fadeIn">
        <div class="container-fluid padding-five-lr md-padding-30px-lr">
            <div class="row mx-0">
                <ul class="portfolio-grid work-3col hover-option2 gutter-large w-100">
                    <li class="grid-sizer"></li>

                    <li class="grid-item grid-item-double wow fadeInUp" data-wow-delay="0s"> <!--grid-item-double-->
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
  </div>

  <div id="anchor-05"class="anchor-wrapper"><!--@@@@---| Anchor | ---@@@@-->
    <div class="anchor-links anchor-white">
      <div class="row mx-0">
        <div class="col col-12 col-xxl-9 col-xl-9 col-lg-11 col-md-12 anchor-links-content">
          <h5>Presentation for Stakeholders</h5><h6>[Partial]</h6>
        </div>
      </div>
    </div>

    <section>
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
                            class="swiper-pagination swiper-pagination-round swiper-pagination-white swiper-full-screen-pagination">
                        </div>
                        <div class="swiper-button-prev swiper-button-black-highlight"></div>
                        <div class="swiper-button-next swiper-button-black-highlight"></div>
                    </div>
                </div>
            </div><!--row-->
        </div><!--container-->
    </section>

  </div>


    <?php include ROOT_PATH . 'includes/pagination-projects.php'; ?>

    <!-- start footer -->
    <?php include ROOT_PATH . 'includes/global-footer.php'; ?>

       <script>
    const video = document.querySelector('#video01');

        video.play().then(function () {
        // autoplay was successful!
        }).catch(function (error) {
        // do something if you want to handle or track this error
        });
   </script>


</body>

</html>