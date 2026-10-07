<?php require_once( '../config.php' ) ?>

<?php require_once '../db-config.php';

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



<!--  @@@@@@@  --------------------- | Anchor | --------------------- @@@@@@@  -->
  <div id="anchor-01"class="anchor-wrapper"><!--@@@@---| Anchor | ---@@@@-->
    <div class="anchor-links">
      <div class="row">
        <div class="col col-12 col-xxl-9 col-xl-9 col-lg-11 col-md-12 anchor-links-content">
          <h5>Specs for Handoff</h5>
        </div>
      </div>
    </div>

    <section>
      <div class="container-fluid padding-two-lr md-padding-30px-lr">
          <div class="row mx-0">
            <div class="col-12">
                Original
                <video autoplay loop muted playsinline class="hero-video-cb">
                    <source src="<?= BASE_URL ?>projects/map-tools/assets/map-tools-demo-light.mp4" type="video/mp4">  
                </video>   
            </div>
            <div class="col-12">
                Added: id
                <video id="video01" autoplay loop muted playsinline class="hero-video-cb">
                    <source src="<?= BASE_URL ?>projects/map-tools/assets/map-tools-demo-light.mp4" type="video/mp4">  
                </video>   
            </div>
            <div class="col-12">
               Added: Controls
                <video autoplay loop muted playsinline controls class="hero-video-cb">
                    <source src="<?= BASE_URL ?>projects/map-tools/assets/map-tools-demo-light.mp4" type="video/mp4">  
                </video>   
            </div>
            <div class="col-12">
                Add: Poster
                <video autoplay loop muted playsinline controls class="hero-video-cb" poster="thumbnail.jpg">
                    <source src="<?= BASE_URL ?>projects/map-tools/assets/map-tools-demo-light.mp4" type="video/mp4">  
                </video>   
            </div>

   <div class="col-12">
– Fix: Always bundle autoplay explicitly with the muted and playsinline attributes:
– Added CSS z-index
– Added absolute link to video

<video autoplay muted playsinline width="100%" poster="thumbnail.jpg">
    <source src="https://michellemunoz.info/projects/map-tools/assets/map-tools-demo-light.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>

</div>

<style>
    video {
    position: relative;
    z-index: 10; /* Forces the video to the front */
}
</style>

          </div>



      </div>
    </section>
  </div>



    <?php include ROOT_PATH . 'includes/pagination-projects.php'; ?>

    <!-- start footer -->
    <?php include ROOT_PATH . 'includes/global-footer.php'; ?>

</body>

</html>