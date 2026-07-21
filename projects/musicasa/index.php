<?php require_once( '../../config.php' ) ?>

<?php require_once '../../db-config.php';

$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);

// Project info
$stmt = $pdo->prepare('SELECT * FROM projects WHERE id = ?');
$stmt->execute([4]);
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

<body class="musicasa">

    <!-- start header -->
     <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->

    <!-- start parallax hero section -->
    <section id="block-intro-slider">
        <img src="<?= BASE_URL ?>projects/musicasa/assets/musicasa-fullwidth-02.png"/>    
    </section>
    <!-- end parallax hero section -->


    <!-- start product information section -->
    <?php include ROOT_PATH . 'projects/description-intro-global.php'; ?>
    <!-- end product information section -->


  <div id="anchor-01"class="anchor-wrapper"><!--@@@@---| Anchor | ---@@@@-->
    <div class="anchor-links">
      <div class="row">
        <div class="col col-12 col-xxl-9 col-xl-9 col-lg-11 col-md-12 anchor-links-content">
          <h5>Various</h5><h6></h6>
        </div>
      </div>
    </div>

    <section  class="image-grid-discovery">
        <div class="container-fluid">
            <div class="row mx-0">
                <div class="col-12 px-3 p-md-0">
                    <div class="filter-content overflow-hidden">
                        <ul class="portfolio-grid work-3col hover-option4 gutter-medium">
                            <li class="grid-sizer"></li>
                            <li class="grid-item web branding design wow fadeIn" data-wow-delay="0.4s">
                                <div class="portfolio-img">
                                    <!-- <div class="card-description">Name of the Project</div> -->
                                    <img src="<?= BASE_URL ?>projects/musicasa/assets/grid-process-01.png">
                                </div>
                                <div class="captions-image-grid">
                                    Flowcharts and Prototypes</div>   
                            </li>
                            <li class="grid-item web branding design wow fadeIn" data-wow-delay="0.4s">
                                <div class="portfolio-img">
                                    <img src="<?= BASE_URL ?>projects/musicasa/assets/grid-process-03.png">
                                </div>
                                <div class="captions-image-grid">Integration of Email Templates with Sengrid</div>
                            </li>
                            
                            <li class="grid-item web branding design wow fadeIn" data-wow-delay="0.4s">
                                <div class="portfolio-img">
                                    <img src="<?= BASE_URL ?>projects/musicasa/assets/grid-process-04.png">
                                </div>
                                 <div class="captions-image-grid">Live testing component behavior </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>  



  <div id="anchor-02"class="anchor-wrapper"><!--@@@@---| Anchor | ---@@@@-->
    <div class="anchor-links anchor-white"><!--anchor-white anchor-no-border-->
      <div class="row">
        <div class="col col-12 col-xxl-9 col-xl-9 col-lg-11 col-md-12 anchor-links-content">
          <h5>Prototype</h5><h6></h6>
        </div>
      </div>
    </div>

    <section class="fullwidth-musicasa-demo">
        <div class="container">
            <div class="row">
                <div class="col col-12 video-area">
                    <video autoplay loop muted playsinline>
                        <source src="<?= BASE_URL ?>projects/musicasa/assets/260519_1336-musicasa-demo-1000x622.mp4" type="video/mp4">  
                    </video>
                </div>
            </div>
        </div>
    </section>
    <section class="fullwidth-musicasa-demo">
        <div class="container">
            <div class="row">
                <div class="col col-12 video-area">
                    New
                    <video autoplay muted playsinline loop controls poster="video-player-placeholder.png">
                    <source src="<?= BASE_URL ?>projects/musicasa/assets/260519_1336-musicasa-demo-1000x622.mp4" type="video/mp4">  
                    Your browser does not support the video tag.
                    </video>
                </div>
                                <div class="col col-12 video-area">
                    Controls after poster file name
                    <video autoplay muted playsinline loop poster="video-player-placeholder.png" controls>
                    <source src="<?= BASE_URL ?>projects/musicasa/assets/260519_1336-musicasa-demo-1000x622.mp4" type="video/mp4">  
                    Your browser does not support the video tag.
                    </video>
                </div>
<div class="col col-12 video-area">
Previous
    <video autoplay loop muted playsinline>
        <source src="<?= BASE_URL ?>projects/musicasa/assets/260519_1336-musicasa-demo-1000x622.mp4" type="video/mp4">  
        Your browser does not support the video tag.
    </video>
</div>
            </div>
        </div>
    </section>

</div>



  <div id="anchor-03"class="anchor-wrapper"><!--@@@@---| Anchor | ---@@@@-->
    <div class="anchor-links">
      <div class="row">
        <div class="col col-12 col-xxl-9 col-xl-9 col-lg-11 col-md-12 anchor-links-content">
          <h5>User Registration Flows</h5><h6></h6>
        </div>
      </div>
    </div>

    <section class="wow animate__fadeIn pt-0" style="visibility: visible; animation-name: fadeInUP;" data-delay="0.5s">
        <div class="container-fluid padding-three-lr md-padding-30px-lr sm-padding-15px-lr">
            <div class="row">
                <div class="col col-12 padding-eight-tb"><img src="<?= BASE_URL ?>projects/musicasa/assets/workflow-01.png" class="w-100"></div>
            </div>
            <div class="row">
                <div class="col col-12"><img src="<?= BASE_URL ?>projects/musicasa/assets/workflow-02.png" class="w-100"></div>
            </div>
            
        </div>
    </section>

    </div>


    
  <div id="anchor-04"class="anchor-wrapper"><!--@@@@---| Anchor | ---@@@@-->
    <div class="anchor-links anchor-white">
      <div class="row">
        <div class="col col-12 col-xxl-9 col-xl-9 col-lg-11 col-md-12 anchor-links-content">
          <h5>Screen Inventory</h5><h6></h6>
        </div>
      </div>
    </div>

    <section class="wow animate__fadeIn" style="visibility: visible; animation-name: fadeInUP;" data-delay="0.5s">
        <div class="container-fluid padding-three-lr md-padding-30px-lr sm-padding-15px-lr" style="padding-top: 0px; padding-bottom: 0px;">
            <div class="row">
                <div class="col-12 margin-35px-tb md-no-margin-top md-margin-30px-bottom" style="background-color: #303030 !important;">
                    <img src="<?= BASE_URL ?>projects/musicasa/assets/musicasa-all-screens-25pc.png" class="w-100" data-no-retina="">
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


                    