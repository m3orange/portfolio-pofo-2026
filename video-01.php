<!-- 260908_2111 - Index in current local repo that broke. -->


<?php require_once('config.php') ?>

<!--?php
require_once 'db-config.php';

$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);

$stmt = $pdo->query('SELECT * FROM strengths ORDER BY sort_order ASC');
$strengths = $stmt->fetchAll(PDO::FETCH_ASSOC);

?-->


<?php include ROOT_PATH . 'includes/header.php'; ?>

<body class="home">

  <?php include ROOT_PATH . 'includes/global-nav.php'; ?>





<style>

video{ max-width: 100%;}

.home-hero-animation {max-width: 800px;}

    #video-container-02{
    width: 100%;
    height: fit-content;
    overflow: hidden;
    background-color: transparent;
    aspect-ratio: 2 / 1.55;
    position: absolute;
    bottom: 20%;
    right: 10%;
    z-index: 10000;
    }

    #bg-video-02 {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 10001;
    opacity: 1;
    min-width: 100% !important;
    object-fit: cover;
}

  .home-hero-bg{
    /* background-image: url(home-bg-images/random-bg-img-02.jpg); */
    /* background: url(home-bg-images/first-batch/random-bg-img-02.jpg) center / cover no-repeat; */
    background: url(animations/meshic-30fps-100frames.gif) center / cover no-repeat;
    opacity: 0.3;
    background-repeat: no-repeat;
    position: absolute;
    top: 8%;
    right: -20%;
    /* border: 1px solid yellow; */
    width: 100%;
    height: 100%;
    z-index: 10000;
  }


</style>


   
  <section id="home-hero-opener" class="p-0 full-screen position-relative wow color-around-svg"
    style="visibility: visible; ">
    <div class="video-background-container">
      <div class="video-background-content">
        <div class="container h-100">

        <div id="video-container-02" class="home-hero-animation">
    <video id="bg-video-02" autoplay="autoplay" muted="muted" loop="loop" playsinline poster="">
        <!-- ADD THE MATCHING ID HERE and leave src empty -->
        <source id="home-hero-anim" src="https://m3orange.com/portfolio/portfolio-assets/animations/260919-meshic-poly-anim-contrast.mp4" type="video/mp4" class="mp4-here" >
    </video>
</div>
        </div>
      </div>
    </div>

    <!--?php include ROOT_PATH . 'home/vectors/animated-geometry.php'; ?-->

    <div class="home-grid-top">
      <div class="text-block-01">M. Architecture • MFA Design</div>
      <div class="text-block-02">hello@michellemunoz.info</div>
    </div>

    <div class="home-grid-bottom">
      <div class="container">
        <div class="col col-12 col-md-6 col-left">San Juan, Puerto Rico</div>
        <div class="col col-12 col-md-6 col-right">18º28'00 N, 066º06'51 W</div>
      </div>
    </div>



  </section>



      <section style="background-color: #3e3e3e;">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-lg-8 offset-lg-2">
                    <div id="video-container-01" class="admin-01">
                        <video id="bg-video" autoplay="autoplay" muted="muted" loop="loop" playsinline 
                        poster="admin-demo-poster">

                            <!-- ADD THE MATCHING ID HERE and leave src empty -->
                            <source id="" src="https://m3orange.com/portfolio/portfolio-assets/videos/admin-demo-loop.mp4" type="video/mp4" class="mp4-here" >
                        </video>
                    </div>
                    <div class="control-area area-overlay">
                        <button id="play-pause-btn"><img src="<?= BASE_URL ?>images/video-controls/video-btn-pause.png"/></button>
                        <div class="view-larger-link">
                            <a href="" id="admin-demo-vimeo" target="_blank"> View in Vimeo <img src="<?= BASE_URL ?>images/arrow-view-website-black.svg" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  



            <script>
            const video = document.getElementById('bg-video');
            const button = document.getElementById('play-pause-btn');

            button.addEventListener('click', controlVideo)

            function controlVideo() {
                if (video.paused) {
                video.play();
                button.innerHTML = '<img src="<?= BASE_URL ?>images/video-controls/video-btn-pause.png"/>';
                } else {
                video.pause();
                button.innerHTML = '<img src="<?= BASE_URL ?>images/video-controls/video-btn-play.png"/>';
                }
            }
        </script>


  <!-- start footer -->
  <?php include_once("includes/global-footer.php"); ?>


</body>

</html>