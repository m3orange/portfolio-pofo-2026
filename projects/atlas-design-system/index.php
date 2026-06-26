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


    <!--begin - image grid - from single-project-page-01-->
    <section  class="image-grid-discovery">

        <!-- start section divider -->
        <section class="section-divider-dark">
            <div class="container">Discovery & Prototyping</div>
        </section>
        <!-- end section divider -->

        <div class="container">

            <div class="row mx-0">
                    <div class="col-md-12 px-3 p-md-0">
                        <div class="filter-content overflow-hidden">
                            <ul class="portfolio-grid work-4col hover-option4 gutter-medium">
                                <li class="grid-sizer"></li>


                                <li class="grid-item web branding design wow fadeIn grid-item-double">
                                    <div class="portfolio-img bg-extra-dark-gray">
                                        <img src="<?= BASE_URL ?>projects/atlas-design-system/assets/atlas-intro-grid-01.png">
                                    </div>
                                </li>

                                <li class="grid-item web branding design wow fadeIn" data-wow-delay="0.4s">
                                    <div class="portfolio-img bg-extra-dark-gray">
                                        <img src="<?= BASE_URL ?>projects/atlas-design-system/assets/atlas-intro-grid-02.png">
                                    </div>
                                </li>
                                <li class="grid-item web branding design wow fadeIn" data-wow-delay="0.4s">
                                    <div class="portfolio-img bg-extra-dark-gray">
                                        <img src="<?= BASE_URL ?>projects/atlas-design-system/assets/atlas-intro-grid-03.png">
                                    </div>
                                </li>

                                <li class="grid-item web branding design wow fadeIn" data-wow-delay="0.4s">
                                    <div class="portfolio-img bg-extra-dark-gray">
                                        <img src="<?= BASE_URL ?>projects/atlas-design-system/assets/atlas-intro-grid-04.png">
                                    </div>
                                </li>

                                
                            </ul>
                        </div>
                    </div>
            </div>
        </div>

    </section>
    <!--end - image grid - from single-project-page-01-->


    <!--begin - image grid - from single-project-page-01-->
    <section>

        <!-- start section divider -->
        <section class="section-divider-dark">
            <div class="container">Core Elements & Patterns</div>
        </section>
        <!-- end section-->



        <div class="container-fluid padding-five-lr md-padding-30px-lr">
            <div class="row">
                <div class="col col-12 wow fadeIn" data-wow-delay="0.4s">
                    <!-- 
                    <div class="link-to-project-page">
                        <a href="/projects/citybox">View the Atlas Design System in detail </a>
                        <div><img src="images/swiper-button-alpha-45px-next.png"/></div>
                    </div>
                     -->
                    <div class="gallery-item">
                        <img src="<?= BASE_URL ?><?= $single[0]['file_path'] ?>">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--end - image grid - from single-project-page-01-->






    <!-- start fullwidth slider - from blog-standard-full-width-->
    <section class="fullwidth-atlas-microsite-animation">
        <!-- start section divider -->
        <section class="section-divider-light">
            <div class="container">Repository</div>
        </section>
        <!-- end section divider -->
        <div class="container">
            <div class="row">
                <div class="col col-12">
                <img src="<?= BASE_URL ?>projects/atlas-design-system/assets/atlas-ds-microsite-walkthrough-1300px.gif"/>
                </div>
            </div>
        </div>
    </section>

    <!-- end fullwidth slider - from blog-standard-full-width-->



    <section class="wow fadeIn">
        <!-- start section divider -->
        <section class="section-divider-dark">
            <div class="container">
                <div class="row">
                    <div class="col col-12 col-lg-8 col-md-6">Specs for Handoff</div>
                    <div class="col col-12 col-lg-4 col-md-6 sm-margin-20px-top" style="text-align: left; font-size: 80%;">
                        Click to view larger versions
                </div>
                </div>
            </div>
        </section>
        <!-- end section divider -->


        <div class="container">

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
    <!-- end gallery section -->




    <!-- start footer -->
    <?php include ROOT_PATH . 'includes/global-footer.php'; ?>

</body>

</html>