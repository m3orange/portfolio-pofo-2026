<?php require_once( '../../config.php' ) ?>

<?php require_once '../../db-config.php';

$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);

// Project info
$stmt = $pdo->prepare('SELECT * FROM projects WHERE id = ?');
$stmt->execute([5]);
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


<body class="usic">

    <!-- start header -->
     <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->

    <!-- start parallax hero section -->
    <section id="block-intro-slider">

            <!-- <img src="<?= BASE_URL ?>projects/cx-roadmap/assets/usic-hero-header.png"/>    -->
         
    </section>
    <!-- end parallax hero section -->



    <!-- start product information section -->
    <?php include ROOT_PATH . 'projects/description-intro-global.php'; ?>
    <!-- end product information section -->


  <div id="anchor-01"class="anchor-wrapper"><!--@@@@---| Anchor | ---@@@@-->
    <div class="anchor-links"><!--anchor-white anchor-no-border-->
      <div class="row">
        <div class="col col-12 col-xxl-9 col-xl-9 col-lg-11 col-md-12 anchor-links-content">
          <h5>Client Workshop</h5><h6></h6>
        </div>
      </div>
    </div>

    <section class="wow fadeIn workshop-grid" style="padding: 70px 0;">
        <div class="container-fluid padding-two-lr margin-six-bottom  md-padding-30px-lr wow fadeInUp">
            <div class="row mx-0">
                <ul class="portfolio-grid work-1col hover-option2 gutter-large w-100">
                    <li class="grid-sizer"></li>
                    <li class="grid-item grid-item-double kickoff-presentation"> <!--grid-item-double-->
                        <div class="captions-image-grid">Kick Off Slide Presentation</div>
                        <a href="<?= BASE_URL ?>projects/cx-roadmap/assets/kickoff-presentation.jpg" class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray">
                                    <img src="<?= BASE_URL ?>projects/cx-roadmap/assets/kickoff-presentation.jpg" class="project-img-gallery" />
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
                </ul>
            </div>

            <div class="row mx-0">
                <ul class="portfolio-grid work-5col hover-option2 gutter-large w-100">
                    <li class="grid-sizer"></li>
                    <li class="grid-item grid-item-double"> <!--grid-item-double-->
                        <div class="captions-image-grid plus-adjust">Group Exercises</div>
                        <a href="<?= BASE_URL ?>projects/cx-roadmap/assets/workshop-grid/01.jpg" data-group="workshop-exercises-grid"
                            class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray">
                                    <img src="<?= BASE_URL ?>projects/cx-roadmap/assets/workshop-grid/01.jpg" class="project-img-gallery" />
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
                    <li class="grid-item wow"> <!--grid-item-double-->
                        <a href="<?= BASE_URL ?>projects/cx-roadmap/assets/workshop-grid/02.jpg" data-group="workshop-exercises-grid"
                            class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray">
                                    <img src="<?= BASE_URL ?>projects/cx-roadmap/assets/workshop-grid/02.jpg" class="project-img-gallery" />
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
                    <li class="grid-item wow"> <!--grid-item-double-->
                        <a href="<?= BASE_URL ?>projects/cx-roadmap/assets/workshop-grid/03.jpg" data-group="workshop-exercises-grid"
                            class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray">
                                    <img src="<?= BASE_URL ?>projects/cx-roadmap/assets/workshop-grid/03.jpg" class="project-img-gallery" />
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
                    <li class="grid-item wow"> <!--grid-item-double-->
                        <a href="<?= BASE_URL ?>projects/cx-roadmap/assets/workshop-grid/04.jpg" data-group="workshop-exercises-grid"
                            class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray">
                                    <img src="<?= BASE_URL ?>projects/cx-roadmap/assets/workshop-grid/04.jpg" class="project-img-gallery" />
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
                    <li class="grid-item wow"> <!--grid-item-double-->
                        <a href="<?= BASE_URL ?>projects/cx-roadmap/assets/workshop-grid/05.jpg" data-group="workshop-exercises-grid"
                            class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray">
                                    <img src="<?= BASE_URL ?>projects/cx-roadmap/assets/workshop-grid/05.jpg" class="project-img-gallery" />
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
                    <li class="grid-item wow"> <!--grid-item-double-->
                        <a href="<?= BASE_URL ?>projects/cx-roadmap/assets/workshop-grid/06.jpg" data-group="workshop-exercises-grid"
                            class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray">
                                    <img src="<?= BASE_URL ?>projects/cx-roadmap/assets/workshop-grid/06.jpg" class="project-img-gallery" />
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
                </ul>
            </div>


        </div>
    </section>
</div>



  <div id="anchor-02"class="anchor-wrapper"><!--@@@@---| Anchor | ---@@@@-->
    <div class="anchor-links anchor-white"><!--anchor-white anchor-no-border-->
      <div class="row">
        <div class="col col-12 col-xxl-9 col-xl-9 col-lg-11 col-md-12 anchor-links-content">
          <h5>User Journey Map</h5><h6></h6>
        </div>
      </div>
    </div>

    <!--begin - image grid - from single-project-page-01-->
    <section class="journey-map-fullwidth"">
        <div class="container-fluid padding-five-lr md-padding-30px-lr">
            <div class="row">
                <div class="col col-12 wow" data-wow-delay="0">
                    <div class="gallery-item">
                        <img src="<?= BASE_URL ?>projects/cx-roadmap/assets/usic-customer-journey-process.png"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

  <div id="anchor-03"class="anchor-wrapper"><!--@@@@---| Anchor | ---@@@@-->
    <div class="anchor-links anchor-white"><!--anchor-white anchor-no-border-->
      <div class="row">
        <div class="col col-12 col-xxl-9 col-xl-9 col-lg-11 col-md-12 anchor-links-content">
          <h5>Personas</h5><h6></h6>
        </div>
      </div>
    </div>


    <section class="personas-fullwidth-slider">
        <div class="container-fluid" style="padding-right: 0px; padding-left: 0px;">
            <div class="row">
                <div class="col-11 offset-1 blog-post-content text-center text-md-center"
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
                                    src="<?= BASE_URL ?>projects/cx-roadmap/assets/proto-personas-01.png"></div>
                            <div class="swiper-slide "><img class="cb-screens"
                                    src="<?= BASE_URL ?>projects/cx-roadmap/assets/proto-personas-02.png"></div>
                            <div class="swiper-slide "><img class="cb-screens"
                                    src="<?= BASE_URL ?>projects/cx-roadmap/assets/proto-personas-03.png"></div>
                            <div class="swiper-slide "><img class="cb-screens"
                                    src="<?= BASE_URL ?>projects/cx-roadmap/assets/proto-personas-04.png"></div>
                            <div class="swiper-slide "><img class="cb-screens"
                                    src="<?= BASE_URL ?>projects/cx-roadmap/assets/executive-summary-01.png"></div>
                            <div class="swiper-slide "><img class="cb-screens"
                                    src="<?= BASE_URL ?>projects/cx-roadmap/assets/executive-summary-02.png"></div>

                        </div>
                        <div
                            class="swiper-pagination swiper-pagination-round swiper-pagination-black swiper-full-screen-pagination">
                        </div>
                        <div class="swiper-button-prev swiper-button-black-highlight"></div>
                        <div class="swiper-button-next swiper-button-black-highlight"></div>

                    </div>
                </div>


            </div>
        </div>
    </section>

    </div>


  <div id="anchor-04"class="anchor-wrapper"><!--@@@@---| Anchor | ---@@@@-->
    <div class="anchor-links anchor-white"><!--anchor-white anchor-no-border-->
      <div class="row">
        <div class="col col-12 col-xxl-9 col-xl-9 col-lg-11 col-md-12 anchor-links-content">
          <h5>Research Readout: the Project Outcome</h5><h6></h6>
        </div>
      </div>
    </div>

    <section class="wow research-readout">
        <div class="container-fluid padding-five-lr margin-six-bottom  md-padding-30px-lr wow">
            <div class="row mx-0">
                <ul class="portfolio-grid work-1col hover-option2 gutter-large w-100">
                    <li class="grid-sizer"></li>
                    <li class="grid-item grid-item-double" style="background: transparent!important;"> <!--grid-item-double-->
                        <a href="<?= BASE_URL ?>projects/cx-roadmap/assets/research-readout.png" data-group="two-columns-zoom-animation"
                            class="lightbox-group-gallery-item">
                            <figure> <!-- This is the initial image that triggers the modal-->
                                <div class="portfolio-img"> <!--bg-extra-dark-gray was what added the black bg-->
                                    <img src="<?= BASE_URL ?>projects/cx-roadmap/assets/research-readout.png" class="project-img-gallery" />
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