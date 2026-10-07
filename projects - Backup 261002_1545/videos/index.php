<?php require_once( '../../config.php' ) ?>

<?php include ROOT_PATH . 'includes/header.php'; ?>


<body class="map-tools">

    <!-- start header -->
     <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->



<style>
.video-container{
border:1px solid gray;
    background-color: #000;

}
</style>

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
                        <source src="<?= BASE_URL ?>projects/map-tools/assets/map-tools-demo-dark.mp4" type="video/mp4">  
                    </video>    
                </div>  
            </div>

            <div class="row">
                <div class="col col-10 col-sm-8 offset-sm-2">
                        <div style="padding:71.07% 0 0 0;position:relative;">
                            <iframe class="vimeo-iframe" src="https://player.vimeo.com/video/1211997195?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;autoplay=1&amp;muted=1&amp;loop=1&amp;unmute_button=0" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share" referrerpolicy="strict-origin-when-cross-origin" title="Map Tools Demo">
                            </iframe>
                        </div>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                </div>  
            </div>




        </div>
    </section>
</div>

<script src="https://player.vimeo.com/api/player.js"></script>

    <?php include ROOT_PATH . 'includes/pagination-projects.php'; ?>

    <!-- start footer -->
    <?php include ROOT_PATH . 'includes/global-footer.php'; ?>


</body>

</html>