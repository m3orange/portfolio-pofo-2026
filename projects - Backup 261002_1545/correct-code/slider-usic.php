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



  <div id="anchor-03" class="anchor-wrapper"><!--@@@@---| Anchor | ---@@@@-->
    <div class="anchor-links anchor-white"><!--anchor-white anchor-no-border-->
      <div class="row">
        <div class="col col-12 col-xxl-9 col-xl-9 col-lg-11 col-md-12 anchor-links-content">
          <h5>Personas</h5><h6></h6>
        </div>
      </div>
    </div>



        <section>
        <div class="container-fluid"> <!-- IMP - Remove any of this here: padding-right: 0px; padding-left: 0px; -->
            <div class="row">
                <div class="col-12 blog-post-content text-center text-md-center p-0"> <!-- IMP: p-0 --->

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
                            <div class="swiper-slide"><img class="cb-screens" src="<?= BASE_URL ?>projects/cx-roadmap/assets/proto-personas-01.png"></div>
                            <div class="swiper-slide"><img class="cb-screens" src="<?= BASE_URL ?>projects/cx-roadmap/assets/proto-personas-02.png"></div>
                            <div class="swiper-slide"><img class="cb-screens" src="<?= BASE_URL ?>projects/cx-roadmap/assets/proto-personas-03.png"></div>
                            <div class="swiper-slide"><img class="cb-screens" src="<?= BASE_URL ?>projects/cx-roadmap/assets/proto-personas-04.png"></div>
                            <div class="swiper-slide"><img class="cb-screens" src="<?= BASE_URL ?>projects/cx-roadmap/assets/executive-summary-01.png"></div>
                            <div class="swiper-slide"><img class="cb-screens" src="<?= BASE_URL ?>projects/cx-roadmap/assets/executive-summary-02.png"></div>
                        </div><!--swiper-wrapper-->
                        <div
                            class="swiper-pagination swiper-pagination-round swiper-pagination-white swiper-full-screen-pagination">
                        </div>
                        <div class="swiper-button-prev swiper-button-black-highlight"></div>
                        <div class="swiper-button-next swiper-button-black-highlight"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>


    <style>

        .usic .swiper-button-prev.swiper-button-black-highlight{margin: 0 0 0 -10px;}

        .usic .swiper-button-next.swiper-button-black-highlight {margin: 0 -10px 0 0;}

        /* This is what should be changed to control size of slide but leaving arrow buttons to the edges.*/
        .usic .swiper-slide {
        padding: 0 5%;
        border: 2px solid green;
        }

                @media (max-width: 450px) {
                .usic .swiper-slide {
                    padding: 0 10%;
                    border: 2px solid yellow;
                    }
                }





    </style>


    <?php include ROOT_PATH . 'includes/pagination-projects.php'; ?>

    <!-- start footer -->
    <?php include ROOT_PATH . 'includes/global-footer.php'; ?>
    
</body>

</html>