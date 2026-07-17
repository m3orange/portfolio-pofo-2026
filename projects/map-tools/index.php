<?php require_once( '../../config.php' ) ?>

<?php require_once '../../db-config.php';

$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);

// Project info
$stmt = $pdo->prepare('SELECT * FROM projects WHERE id = ?');
$stmt->execute([6]);
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


<body class="map-tools">

    <!-- start header -->
     <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->


    <!-- start parallax hero section -->
     <section id="block-intro-slider">

    </section>
    <!-- end parallax hero section -->


    <!-- start product information section -->
    <?php include ROOT_PATH . 'projects/description-intro-global.php'; ?>
    <!-- end product information section -->

<!--  @@@@@@@  --------------------- | Anchor | --------------------- @@@@@@@  -->
<div id="anchor-01" class="anchor-links"></div>

    <!--begin - image grid - from single-project-page-01-->
    <section class="diagrams">
        <div class="container padding-five-lr md-padding-30px-lr">
                        <div class="row">
                <div class="col col-12 col-lg-7 offset-lg-1 wow fadeIn" data-wow-delay="0s">
                    <div class="gallery-item">
                        <img src="<?= BASE_URL ?>projects/map-tools/assets/map-tools-diagram-title.png"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-12 col-lg-10 offset-lg-1 wow fadeIn" data-wow-delay="0.2s">
                    <div class="gallery-item">
                        <img src="<?= BASE_URL ?>projects/map-tools/assets/map-tools-diagram-01.png"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-12 col-lg-8 offset-lg-4 wow fadeIn" data-wow-delay="0.4s">
                    <div class="gallery-item">
                        <img src="<?= BASE_URL ?>projects/map-tools/assets/map-tools-diagram-02.png"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-12 col-lg-9 offset-lg-1 wow fadeIn" data-wow-delay="0.6s">
                    <div class="gallery-item">
                        <img src="<?= BASE_URL ?>projects/map-tools/assets/map-tools-diagram-03.png"/>
                    </div>
                </div>
            </div>
<!--  @@@@@@@  --------------------- | Anchor | --------------------- @@@@@@@  -->
<div id="anchor-02" class="anchor-links padding-50px-bottom"></div>

            <div class="row">
                <div class="col col-12 col-lg-8 offset-lg-2 wow fadeIn" data-wow-delay="0.6s">
                    <div class="gallery-item">
                        <video autoplay loop muted playsinline class="hero-video-cb">
                            <source src="<?= BASE_URL ?>projects/map-tools/assets/map-tools-demo-light.mp4" type="video/mp4">  
                        </video>                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end - image grid - from single-project-page-01-->

<!--  @@@@@@@  --------------------- | Anchor | --------------------- @@@@@@@  -->
<div id="anchor-03" class="anchor-links"></div>

    <!-- start product information section -->
    <section class="fullwidth-map-tools-animation">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-md-10 offset-md-1">

                    <video autoplay loop muted playsinline class="hero-video-cb">
                        <source src="<?= BASE_URL ?>projects/map-tools/assets/both-demos-with-fading.mp4" type="video/mp4">  
                    </video>    
                </div>  
            </div>
        </div>
    </section>
    <!-- end product information section -->

    <?php include ROOT_PATH . 'includes/pagination-projects.php'; ?>

    <!-- start footer -->
    <?php include ROOT_PATH . 'includes/global-footer.php'; ?>

</body>

</html>