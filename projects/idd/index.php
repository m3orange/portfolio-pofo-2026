<?php require_once( '../../config.php' ) ?>

<?php require_once '../../db-config.php';

$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);

// Project info
$stmt = $pdo->prepare('SELECT * FROM projects WHERE id = ?');
$stmt->execute([7]);
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


<body class="idd">

    <!-- start header -->
     <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->

    <!-- start parallax hero section -->
    <section class="fullwidth-idd-demo">
        <video autoplay loop muted playsinline>
            <source src="<?= BASE_URL ?>projects/idd/assets/idd-demo-loop.mp4" type="video/mp4">  
        </video>  
    </section>


    <!-- end parallax hero section -->


    <!-- start product information section -->
    <?php include ROOT_PATH . 'projects/description-intro-global.php'; ?>
    <!-- end product information section -->


  <div id="anchor-01"class="anchor-wrapper"><!--@@@@---| Anchor | ---@@@@-->
    <div class="anchor-links anchor-white"><!--anchor-white anchor-no-border-->
      <div class="row">
        <div class="col col-12 col-xxl-9 col-xl-9 col-lg-11 col-md-12 anchor-links-content">
          <h5>Hi-Fi Prototyping</h5><h6></h6>
        </div>
      </div>
    </div>

    <section  class="image-grid-discovery">
        <div class="container-fluid padding-five-lr md-padding-30px-lr">
            <div class="row margin-40px-bottom">
                <div class="col col-12 col-lg-5 sm-margin-10px-bottom wow fadeIn" data-wow-delay="0.2s">
                    <div class="gallery-item"><img src="<?= BASE_URL ?>projects/idd/assets/idd-journey-02.png"></div>
                </div> 
                <div class="col col-12 col-lg-7 sm-margin-10px-bottom wow fadeIn" data-wow-delay="0.2s">
                    <div class="gallery-item"><img src="<?= BASE_URL ?>projects/idd/assets/idd-journey-01.png"></div>
                </div>
            </div>
        </div>
    </section>
</div>



  <div id="anchor-02"class="anchor-wrapper"><!--@@@@---| Anchor | ---@@@@-->
    <div class="anchor-links anchor-white"><!--anchor-white anchor-no-border-->
      <div class="row">
        <div class="col col-12 col-xxl-9 col-xl-9 col-lg-11 col-md-12 anchor-links-content">
          <h5>Hi-Fi Prototyping</h5><h6></h6>
        </div>
      </div>
    </div>

    <section class="all-screens-fullwidth">
        <div class="container-fluid padding-five-lr md-padding-30px-lr">
            <div class="row">
                <div class="col col-12" data-wow-delay="0.4s">
                    <div class="gallery-item">
                        <img src="<?= BASE_URL ?>projects/idd/assets/idd-all-screens.png"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>

    <?php include ROOT_PATH . 'includes/pagination-projects.php'; ?>

    <!-- start footer -->
    <?php include ROOT_PATH . 'includes/global-footer.php'; ?>

</body>

</html>