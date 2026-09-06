<?php require_once( '../../config.php' ) ?>

<?php require_once '../../db-config.php';

$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);

// Project info
$stmt = $pdo->prepare('SELECT * FROM projects WHERE id = ?');
$stmt->execute([6]);
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


<body class="map-tools">

    <!-- start header -->
     <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->


    <!-- start parallax hero section -->
     <section id="block-intro-slider">
    <!-- Image is set as bg image in CSS-->
    </section>
    <!-- end parallax hero section -->


    <!-- start product information section -->
    <?php include ROOT_PATH . 'projects/description-intro-global.php'; ?>
    <!-- end product information section -->

  <div id="anchor-01"class="anchor-wrapper"><!--@@@@---| Anchor | ---@@@@-->
    <div class="anchor-links anchor-white"><!--anchor-white anchor-no-border-->
      <div class="row">
        <div class="col col-12 col-xxl-9 col-xl-9 col-lg-11 col-md-12 anchor-links-content">
          <h5>Discovery: Diagrams</h5><h6></h6>
        </div>
      </div>
    </div>

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
        </div>
    </section>
</div>

  <div id="anchor-02"class="anchor-wrapper"><!--@@@@---| Anchor | ---@@@@-->
    <div class="anchor-links anchor-white"><!--anchor-white anchor-no-border-->
      <div class="row">
        <div class="col col-12 col-xxl-9 col-xl-9 col-lg-11 col-md-12 anchor-links-content">
          <h5>Mid-Fi Prototyping</h5><h6></h6>
        </div>
      </div>
    </div>

    <section class="diagrams">
        <div class="container padding-five-lr md-padding-30px-lr">
            <div class="row">
                <div class="col col-12 col-lg-8 offset-lg-2 wow">
                    <div class="gallery-item">
                        <div style="padding:71.07% 0 0 0;position:relative;">
                            <iframe src="https://player.vimeo.com/video/1211997195?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;autoplay=1&amp;muted=1&amp;loop=1&amp;unmute_button=0" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share" referrerpolicy="strict-origin-when-cross-origin" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Map Tools Demo">
                            </iframe>
                        </div>
                        <script src="https://player.vimeo.com/api/player.js"></script>
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
          <h5>Hi-Fi Prototyping</h5><h6></h6>
        </div>
      </div>
    </div>

    <section class="fullwidth-map-tools-animation">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-md-9 offset-md-2">
                    <video autoplay loop muted playsinline class="hero-video-cb" poster="assets/both-demos-with-fading.png">
                        <source src="<?= BASE_URL ?>projects/map-tools/assets/both-demos-with-fading.mp4" type="video/mp4">  
                    </video>    
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