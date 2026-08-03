<?php require_once( '../../config.php' ) ?>

<?php require_once '../../db-config.php';

$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);

// Project info
$stmt = $pdo->prepare('SELECT * FROM projects WHERE id = ?');
$stmt->execute([8]);
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

$hero     = getAssets($pdo, 8, 'hero');
$sequence01 = getAssets($pdo, 8, 'sequence01');
$sequence02 = getAssets($pdo, 8, 'sequence02');
$single01 = getAssets($pdo, 8, 'single01');
$single02 = getAssets($pdo, 8, 'single02');
$parallax01 = getAssets($pdo, 8, 'parallax01');

?>

<?php include ROOT_PATH . 'includes/header.php'; ?>


<body class="space-scout">

    <!-- start header -->
     <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->

    <section id="block-intro-slider">
        <video autoplay loop muted playsinline class="hero-video-admin">
            <source src="<?= BASE_URL ?>projects/space-scout/assets/sscout-cities-sequence.mp4" type="video/mp4">              
        </video>    
    </section>

    <!-- start product information section -->
    <?php include ROOT_PATH . 'projects/description-intro-global.php'; ?>
    <!-- end product information section -->

  <div id="anchor-01"class="anchor-wrapper"><!--@@@@---| Anchor | ---@@@@-->
    <div class="anchor-links anchor-white"><!--anchor-white anchor-no-border-->
      <div class="row">
        <div class="col col-12 col-xxl-9 col-xl-9 col-lg-11 col-md-12 anchor-links-content">
          <h5>Hi-Fi Prototype</h5><h6></h6>
        </div>
      </div>
    </div>

    <section id="discovery-fullwidth">
        <div class="container-fluid padding-five-lr md-padding-30px-lr">
            <div class="row">
                <div class="col col-12 col-md-10 offset-md-1" style="justify-items: center;" data-wow-delay="0.4s">
                    <video autoplay loop muted playsinline>
                        <source src="<?= BASE_URL ?>projects/space-scout/assets/space-scout-walkthrough.mp4" type="video/mp4">  
                    </video>
                </div>
            </div>

        </div>
    </section>
  </div>



  <div id="anchor-02"class="anchor-wrapper"><!--@@@@---| Anchor | ---@@@@-->
    <div class="anchor-links anchor-white"><!--anchor-white anchor-no-border-->
      <div class="row">
        <div class="col col-12 col-xxl-9 col-xl-9 col-lg-11 col-md-12 anchor-links-content">
          <h5>Ideation & Scope Definition</h5><h6></h6>
        </div>
      </div>
    </div>

    <section id="discovery-fullwidth">
        <div class="container-fluid padding-five-lr md-padding-30px-lr">
            <div class="row">
                <div class="col col-12" data-wow-delay="0.4s">
                    <div class="gallery-item"><img src="<?= BASE_URL ?>projects/space-scout/assets/sscout-discovery-for-parallax.png"></div>
                </div>
            </div>

        </div>
    </section>
  </div>


  <div id="anchor-03"class="anchor-wrapper"><!--@@@@---| Anchor | ---@@@@-->
    <div class="anchor-links anchor-white"><!--anchor-white anchor-no-border-->
      <div class="row">
        <div class="col col-12 col-xxl-9 col-xl-9 col-lg-11 col-md-12 anchor-links-content">
          <h5>Workshop Brainstorming</h5><h6></h6>
        </div>
      </div>
    </div>

    <section id="discovery-sequence" class="wow">
        <div class="container">
            <div class="row mx-0">
                <ul class="portfolio-grid work-1col hover-option2 gutter-large w-100">
                    <li class="grid-sizer"></li>

                    <li class="grid-item wow fadeInUp" data-wow-delay="0s"> 
                        <a href="<?= BASE_URL ?>projects/space-scout/assets/sscout-discovery-01.png" data-group="two-columns-zoom-animation" class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray">
                                    <img src="<?= BASE_URL ?>projects/space-scout/assets/sscout-discovery-01.png" class="project-img-gallery" />
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center"><div class="portfolio-hover-box vertical-align-middle">
                                            <div class="portfolio-hover-content position-relative"><i class="ti-zoom-in text-white-2 fa-2x"></i></div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </li>

                    <li class="grid-item wow fadeInUp" data-wow-delay="0.2s"> 
                        <a href="<?= BASE_URL ?>projects/space-scout/assets/sscout-discovery-02.png" data-group="two-columns-zoom-animation" class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray">
                                    <img src="<?= BASE_URL ?>projects/space-scout/assets/sscout-discovery-02.png" class="project-img-gallery" />
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center"><div class="portfolio-hover-box vertical-align-middle">
                                            <div class="portfolio-hover-content position-relative"><i class="ti-zoom-in text-white-2 fa-2x"></i></div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </li>

                    <li class="grid-item wow fadeInUp" data-wow-delay="0.4s"> 
                        <a href="<?= BASE_URL ?>projects/space-scout/assets/sscout-discovery-03.png" data-group="two-columns-zoom-animation" class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray">
                                    <img src="<?= BASE_URL ?>projects/space-scout/assets/sscout-discovery-03.png" class="project-img-gallery" />
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center"><div class="portfolio-hover-box vertical-align-middle">
                                            <div class="portfolio-hover-content position-relative"><i class="ti-zoom-in text-white-2 fa-2x"></i></div>
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


  <div id="anchor-04"class="anchor-wrapper"><!--@@@@---| Anchor | ---@@@@-->
    <div class="anchor-links anchor-white"><!--anchor-white anchor-no-border-->
      <div class="row">
        <div class="col col-12 col-xxl-9 col-xl-9 col-lg-11 col-md-12 anchor-links-content">
          <h5>Design System</h5><h6></h6>
        </div>
      </div>
    </div>

    <section id="image-grid" class="wow fadeIn">
        <div class="container">
            <div class="row mx-0">
                <ul class="portfolio-grid work-2col hover-option2 gutter-large w-100">
                    <li class="grid-sizer"></li>
                    <li class="grid-item grid-item-double wow" data-wow-delay="0s"> 
                        <a href="<?= BASE_URL ?>projects/space-scout/assets/sscout-dsystem-03.png" data-group="two-columns-zoom-animation" class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray">
                                <img src="<?= BASE_URL ?>projects/space-scout/assets/sscout-dsystem-03.png" class="project-img-gallery" />    

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
                    <li class="grid-item wow" data-wow-delay="0s"> <!--grid-item-double-->
                        <a href="<?= BASE_URL ?>projects/space-scout/assets/sscout-dsystem-01.png" data-group="two-columns-zoom-animation" class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray">
                                <img src="<?= BASE_URL ?>projects/space-scout/assets/sscout-dsystem-01.png" class="project-img-gallery" />    

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


                    <li class="grid-item wow" data-wow-delay="0s">
                        <a href="<?= BASE_URL ?>projects/space-scout/assets/sscout-dsystem-02.png" data-group="two-columns-zoom-animation" class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray">
                                <img src="<?= BASE_URL ?>projects/space-scout/assets/sscout-dsystem-02.png" class="project-img-gallery" />    

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

