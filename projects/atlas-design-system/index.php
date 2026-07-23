<?php require_once( '../../config.php' ) ?>

<?php require_once '../../db-config.php';

$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);

// Project info
$stmt = $pdo->prepare('SELECT * FROM projects WHERE id = ?');
$stmt->execute([2]);
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

<body class="atlas">

    <!-- start header -->
     <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->

    <!-- start parallax hero section -->
    <section id="block-intro-slider">
        <img src="<?= BASE_URL ?>projects/atlas-design-system/assets/atlas-hero-opener-alpha.png"/>    
    </section>
    <!-- end parallax hero section -->


    <!-- start product information section -->
    <?php include ROOT_PATH . 'projects/description-intro-global.php'; ?>
    <!-- end product information section -->





<!--  @@@@@@@  --------------------- | Anchor | --------------------- @@@@@@@  -->
  <div id="anchor-01"class="anchor-wrapper"><!--@@@@---| Anchor | ---@@@@-->
    <div class="anchor-links">
      <div class="row">
        <div class="col col-12 col-xxl-9 col-xl-9 col-lg-11 col-md-12 anchor-links-content">
          <h5>Iconography</h5>
        </div>
      </div>
    </div>

    <section>
      <div class="container-fluid padding-two-lr md-padding-30px-lr">
          <div class="row mx-0">
            <div class="col-md-12 px-3 p-md-0">
                <div class="filter-content overflow-hidden">
                    <ul class="portfolio-grid work-3col hover-option4 gutter-medium">
                      <li class="grid-sizer"></li>
                      <li class="grid-item web branding design wow fadeIn"><!--grid-item-double-->
                          <div class="portfolio-img">
                              <img src="<?= BASE_URL ?>projects/atlas-design-system/assets/atlas-intro-grid-01.png">
                          </div>
                      </li>
                      <li class="grid-item web branding design wow fadeIn"><!--grid-item-double-->
                          <div class="portfolio-img">
                              <img src="<?= BASE_URL ?>projects/atlas-design-system/assets/atlas-intro-grid-02.png">
                          </div>
                      </li>
                      <li class="grid-item web branding design wow fadeIn"><!--grid-item-double-->
                          <div class="portfolio-img">
                              <img src="<?= BASE_URL ?>projects/atlas-design-system/assets/atlas-intro-grid-03.png">
                          </div>
                      </li>
                    </ul>
                </div>
            </div>
          </div>
      </div>
    </section>
  </div>


  <div id="anchor-02"class="anchor-wrapper"><!--@@@@---| Anchor | ---@@@@-->
    <div class="anchor-links">
      <div class="row">
        <div class="col col-12 col-xxl-9 col-xl-9 col-lg-11 anchor-links-content d-flex" style="align-items: center;">
          <h5>Design Documentation</h5>
            <div class="btn-view-website-area" style="border-left: 1px solid #000000CC!important;">
                <div class="btn btn-to-atlas-ds-page">
                    <a href="<?= BASE_URL ?>projects/atlas-ui/index.php" target="_blank" style="color: #000000!important;">View UI Design</a>
                </div>
            </div>
            <div class="btn-view-website"><img src="<?= BASE_URL ?>images/arrow-view-website-black.svg"/></div>
        </div>
      </div>
    </div>
    <section>
        <div class="container-fluid padding-two-lr md-padding-30px-lr">
            <div class="row mx-0">
                <div class="col col-12 wow fadeIn" data-wow-delay="0.4s">
                <div class="gallery-item">
                <img src="<?= BASE_URL ?><?= $single[0]['file_path'] ?>">
                </div>
                </div>
            </div>
        </div>
    </section>
    </div>

  

  <div id="anchor-03"class="anchor-wrapper"><!--@@@@---| Anchor | ---@@@@-->
    <div class="anchor-links anchor-white" style="margin-bottom: 0px;">
      <div class="row">
        <div class="col col-12 col-xxl-9 col-xl-9 col-lg-11 col-md-12 anchor-links-content">
          <h5>Prototype for the Design Documentation Repo</h5>
          <h6 class="anchor-emphasis">
              We used these mid-fi wireframes in our discussions with Product and Engineering teams, with the goal of visualizing the kind of information and formatting that each team needed to access in a <span class="anchor-emphasis">live repo as single-source-of-truth.</span> We wanted users to have autonomous, asynchronous access to all the information they need to continue working, and structured in an intuitive and scalable way.
          </h6>
        </div>
      </div>
    </div>

    <section>
      <div class="container">
        <div class="row" style="text-align: center !important;">
            <div class="col col-12 col-lg-10 offset-lg-1">
            <img src="<?= BASE_URL ?>projects/atlas-design-system/assets/atlas-ds-microsite-walkthrough-1300px.gif"/>
            </div>
        </div>
        </div>
    </section>

  </div>  


<!--  @@@@@@@  --------------------- | Anchor | --------------------- @@@@@@@  -->
  <div id="anchor-04"class="anchor-wrapper"><!--@@@@---| Anchor | ---@@@@-->
    <div class="anchor-links anchor-white">
      <div class="row">
        <div class="col col-12 col-xxl-9 col-xl-9 col-lg-11 col-md-12 anchor-links-content">
          <h5>Specs for Handoff</h5>
        </div>
      </div>
    </div>

    <section id="handoff-specs" class="wow fadeIn">
        <div class="container-fluid padding-two-lr md-padding-30px-lr">
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