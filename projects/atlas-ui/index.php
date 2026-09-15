<?php require_once( '../../config.php' ) ?>

<?php require_once '../../db-config.php';

$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);

// Project info
$stmt = $pdo->prepare('SELECT * FROM projects WHERE id = ?');
$stmt->execute([1]);
$project = $stmt->fetch(PDO::FETCH_ASSOC);

// Tags (decoded from the LONGTEXT JSON cell)
$tags = json_decode($project['tags'], true);
if (!is_array($tags)) {
    $tags = []; // fallback if the cell is empty or malformed
}

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


<body class="citybox">

    <!-- start header -->
     <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->

    <section id="block-intro-slider" class="p-0">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-lg-10 offset-lg-1">
                    <div id="video-container-01" class="admin-01">
                        <video id="bg-video" autoplay="autoplay" muted="muted" loop="loop" playsinline 
                        poster="citybox-laptop-poster">

                            <!-- ADD THE MATCHING ID HERE and leave src empty -->
                            <source id="citybox-laptop" src="" type="video/mp4" class="mp4-here" >
                        </video>
                    </div>
                    <div class="control-area area-overlay">
                        <button id="play-pause-btn"><img src="<?= BASE_URL ?>images/video-controls/video-btn-pause.png"/></button>
                        <div class="control-divider"></div>
                        <div class="view-larger-link">
                            <a href="" id="citybox-laptop-vimeo" target="_blank"> View in Vimeo <img src="<?= BASE_URL ?>images/arrow-view-website-black.svg" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  

 
    <!-- start product information section -->

    <?php include ROOT_PATH . 'projects/description-intro-global.php'; ?>
    
    <!-- end product information section -->
    
    <!-- <?php include ROOT_PATH . 'projects/bootstrap-modal.php'; ?> -->
    


  <div id="anchor-01"class="anchor-wrapper"><!--@@@@---| Anchor | ---@@@@-->
    <div class="anchor-links">
      <div class="row">
        <div class="col col-12 col-xxl-9 col-xl-9 col-lg-11 col-md-12 anchor-links-content">
          <h5>Discovery & Group Workshop</h5><h6></h6>
        </div>
      </div>
    </div>

    <section  class="image-grid-discovery">
        <div class="container-fluid padding-five-lr md-padding-30px-lr">
            <div class="row margin-40px-bottom">
                <div class="col col-12 col-lg-4 col-md-6 col-sm-12 sm-margin-10px-bottom wow fadeInUp" data-wow-delay="0.2s">
                    <div class="gallery-item"><img src="<?= BASE_URL ?>projects/atlas-ui/assets/discovery-grid-01.png"></div>
                </div>
                <div class="col col-12 col-lg-4 col-md-6 col-sm-12 sm-margin-10px-bottom wow fadeInUp" data-wow-delay="0.4s">
                    <div class="gallery-item"><img src="<?= BASE_URL ?>projects/atlas-ui/assets/discovery-grid-02.png"></div>
                </div>
                <div class="col col-12 col-lg-4 col-md-6 col-sm-12 sm-margin-10px-bottom wow fadeInUp" data-wow-delay="0.6s">
                    <div class="gallery-item"><img src="<?= BASE_URL ?>projects/atlas-ui/assets/discovery-grid-03.png"></div>
                </div>
            </div>
        </div>
    </section>
  </div>



  <div id="anchor-02"class="anchor-wrapper"><!--@@@@---| Anchor | ---@@@@-->
    <div class="anchor-links anchor-white">
      <div class="row">
        <div class="col col-12 col-xxl-9 col-xl-9 col-lg-11 anchor-links-content d-flex" style="align-items: center;">
          <h5>Design System</h5>
            <div class="btn-view-website-area">
                <div class="btn btn-to-atlas-ds-page">
                    <a href="<?= BASE_URL ?>projects/atlas-design-system/index.php" target="_blank" >View Design System</a>
                </div>
            </div>
            <div class="btn-view-website"><img src="<?= BASE_URL ?>images/arrow-view-website-white.svg"/></div>
        </div>
        </div>
    </div>


    <section>
        <div class="container-fluid padding-five-lr md-padding-30px-lr">
            <div class="row">
                <div class="col col-12 wow fadeIn" data-wow-delay="0.4s">
                    <div class="gallery-item">
                        <img src="<?= BASE_URL ?>projects/atlas-design-system/assets/atlas-design-system-fullwidth.png"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>


    <div id="anchor-03"class="anchor-wrapper"><!--@@@@---| Anchor | ---@@@@-->
    <div class="anchor-links anchor-white">
      <div class="row">
        <div class="col col-12 col-xxl-9 col-xl-9 col-lg-11 col-md-12 anchor-links-content">
          <h5>Final Design</h5><h6></h6>
        </div>
      </div>
    </div>

    <!------------------------- CITYBOX UI ----------------------------->
    
    <section class="wow fadeIn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 blog-post-content text-center text-md-center">

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
                        </div><!--swiper-wrapper-->

                            <div class="swiper-pagination swiper-pagination-round swiper-pagination-white swiper-full-screen-pagination"></div>
                            <div class="swiper-button-prev swiper-button-black-highlight"></div>
                            <div class="swiper-button-next swiper-button-black-highlight"></div>
                    </div>

                    <!-- If .swiper-slide disaligned again, adjust lateral padding in .citybox .swiper-slide -->
                </div>
            </div><!--row-->
        </div><!--container-->
    </section>

  </div>


  <div id="anchor-04"class="anchor-wrapper"><!--@@@@---| Anchor | ---@@@@-->
    <div class="anchor-links anchor-white">
      <div class="row">
        <div class="col col-12 col-xxl-9 col-xl-9 col-lg-11 col-md-12 anchor-links-content">
          <h5>Specs for Handoff</h5><h6></h6>
        </div>
      </div>
    </div>

    <section class="wow fadeIn">
        <div class="container-fluid padding-five-lr md-padding-30px-lr">
            <div class="row mx-0">
                <ul class="portfolio-grid work-3col hover-option2 gutter-large w-100">
                    <li class="grid-sizer"></li>

                    <li class="grid-item grid-item-double  wow fadeInUp"> <!--grid-item-double-->
                        <a href="<?= BASE_URL ?>projects/atlas-ui/assets/cb-specs-01.png" data-group="two-columns-zoom-animation"
                            class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray"><img src="<?= BASE_URL ?>projects/atlas-ui/assets/cb-specs-01.png" class="project-img-gallery" /></div>
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

                    <li class="grid-item wow fadeInUp"> <!--grid-item-double-->
                        <a href="<?= BASE_URL ?>projects/atlas-ui/assets/cb-specs-02.png" data-group="two-columns-zoom-animation"
                            class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray"><img
                                        src="<?= BASE_URL ?>projects/atlas-ui/assets/cb-specs-02.png" class="project-img-gallery" /></div>
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
                    <li class="grid-item wow fadeInUp"> <!--grid-item-double-->
                        <a href="<?= BASE_URL ?>projects/atlas-ui/assets/cb-specs-03.png" data-group="two-columns-zoom-animation"
                            class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray"><img
                                        src="<?= BASE_URL ?>projects/atlas-ui/assets/cb-specs-03.png" class="project-img-gallery" /></div>
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
                    <li class="grid-item wow fadeInUp"> <!--grid-item-double-->
                        <a href="<?= BASE_URL ?>projects/atlas-ui/assets/cb-specs-04.png" data-group="two-columns-zoom-animation"
                            class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray"><img
                                        src="<?= BASE_URL ?>projects/atlas-ui/assets/cb-specs-04.png" class="project-img-gallery" /></div>
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
                </ul>
            </div>
        </div>
    </section>

  </div>


    <?php include ROOT_PATH . 'includes/pagination-projects.php'; ?>

    <!-- start footer -->
    <?php include ROOT_PATH . 'includes/global-footer.php'; ?>
    
</body>

</html>