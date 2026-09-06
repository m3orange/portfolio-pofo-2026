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
            <div class="row margin-100px-bottom">
                <div class="col col-12 col-lg-8 offset-lg-2 wow">
                    <div class="gallery-item">
    `                    <div style="padding:71.071% 0 0 0;position:relative;width:100%;">
                            <iframe style="position:absolute;top:0;left:0;width:100%;height:100%;" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture; web-share" allowfullscreen frameborder="0" referrerpolicy="strict-origin-when-cross-origin" src="https://livid.com/embed/0wuUwTJd5UGi?autoplay=1&loop=1&muted=1" title="map-tools-demo-light">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row margin-100px-bottom">
                <div class="col col-12 col-lg-8 offset-lg-2 wow">
                    <div class="gallery-item">
                        <div style="padding:71.071% 0 0 0;position:relative;width:100%;">
                            <iframe style="position:absolute;top:0;left:0;width:100%;height:100%;"  src="https://www.youtube.com/embed/G5EvbNWh1-k?si=mZdJbnTysIc9tYxm?autoplay=1&loop=1&playsinline=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>

<style>
    .player-controls-top,
    .watch-on-youtube-button-wrapper{
        visibility: hidden!important;
    }
</style>


            <div class="row margin-100px-bottom">
                <div class="col col-12 col-lg-8 offset-lg-2 wow">
                    <div class="gallery-item">

                    <style>
                        .vimeo-wrapper{
                            background-color: #000000;
                        }
                    </style>
      
<div style="padding:71.07% 0 0 0;position:relative;" class="margin-100px-bottom">
    <iframe class="vimeo-wrapper" src="https://player.vimeo.com/video/1211997195?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;autoplay=1&amp;muted=1&amp;loop=1&amp;unmute_button=0" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share" referrerpolicy="strict-origin-when-cross-origin" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Map Tools Demo">
    </iframe>
</div>
<script src="https://player.vimeo.com/api/player.js"></script>

<!-- Do not use any of these two below

background=1
<div style="padding:71.07% 0 0 0;position:relative;" class="margin-100px-bottom">
    <iframe src="https://player.vimeo.com/video/1211997195?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;autoplay=1&amp;muted=1&amp;loop=1&amp;unmute_button=0&amp;background=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share" referrerpolicy="strict-origin-when-cross-origin" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Map Tools Demo">
    </iframe>
</div>
controls=0
<div style="padding:71.07% 0 0 0;position:relative;" class="margin-100px-bottom">
    <iframe src="https://player.vimeo.com/video/1211997195?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;autoplay=1&amp;muted=1&amp;loop=1&amp;unmute_button=0&amp;controls=0" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share" referrerpolicy="strict-origin-when-cross-origin" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Map Tools Demo">
    </iframe>
</div>
--->
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