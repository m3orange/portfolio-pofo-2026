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

<section>
    <div class="container">
        <div class="row">
        <div class="col-12 col-md-6 offset-md-3">
        <mux-player
        id="video01"
        loop
        muted
        autoplay
        stream-type="on-demand"
        playback-id="EcHgOK9coz5K4rjSwOkoE7Y7O01201YMIC200RI6lNxnhs"
        metadata-video-title="Test on demand"
        metadata-viewer-user-id="user-id-007"
        ></mux-player>
        </div>
        </div>
    </div>
</section>



   <script>
    const video = document.querySelector('#video01');

        video.play().then(function () {
        // autoplay was successful!
        }).catch(function (error) {
        // do something if you want to handle or track this error
        });
   </script>

  <div id="anchor-01"class="anchor-wrapper"><!--@@@@---| Anchor | ---@@@@-->
    <div class="anchor-links">
      <div class="row">
        <div class="col col-12 col-xxl-9 col-xl-9 col-lg-11 col-md-12 anchor-links-content">
          <h5>Discovery</h5><h6></h6>
        </div>
      </div>
    </div>

    <section class="image-grid-discovery">
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
  </div>

  <div id="anchor-02"class="anchor-wrapper"><!--@@@@---| Anchor | ---@@@@-->
    <div class="anchor-links anchor-white">
      <div class="row">
        <div class="col col-12 col-xxl-9 col-xl-9 col-lg-11 col-md-12 anchor-links-content">
          <h5>Prototyping</h5>
          <h6></h6>
        </div>
      </div>
    </div>

    <section class="admin-wireframes">
        <div class="container-fluid padding-five-lr md-padding-30px-lr">
            <div class="row mx-0">
                <div class="col col-12">
                    <div><img src="<?= BASE_URL ?><?= $single[0]['file_path'] ?>"></div>
                </div>
            </div>
        </div>
    </section> 

  </div>
 
  <div id="anchor-03"class="anchor-wrapper"><!--@@@@---| Anchor | ---@@@@-->

    <div class="anchor-links anchor-white">
      <div class="row">
        <div class="col col-12 col-xxl-9 col-xl-9 col-lg-11 col-md-12 anchor-links-content">
          <h5>User Journey</h5><h6></h6>
        </div>
      </div>
    </div>

    <section class="admin-journey-fullwidth">
        <div class="container-fluid padding-five-lr md-padding-30px-lr">
            <div class="row">
                <div class="col col-12" data-wow-delay="0.4s">
                    <div class="gallery-item"><img src="<?= BASE_URL ?><?= $single[1]['file_path'] ?>"></div>
                </div>
            </div>
        </div>
    </section>

  </div>

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
                            class="swiper-pagination swiper-pagination-square swiper-pagination-white swiper-full-screen-pagination">
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

</body>

</html>