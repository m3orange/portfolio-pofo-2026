<?php include_once("config.php"); ?>

<?php include ROOT_PATH . 'includes/header.php'; ?>
           
<body class="home">

<header class="m3-main-nav">
    <nav class="navbar bg-transparent navbar-top navbar-transparent-no-sticky full-width-pull-menu white-link no-transition">
        <div class="container nav-header-container" style="padding: 10px 0;"> <!--height-100px sm-height-70px p-0 -->
            <div class="col col-12 col-md-2 d-md-block pl-0"> <!--d-none -->
                <a class="logo" href="<?= BASE_URL ?>index.php">
                    <img src="<?= BASE_URL ?>images/munoz-logo-horizontal-white-06.svg" 
                    data-rjs="<?= BASE_URL ?>images/munoz-logo-horizontal-white-06.svg" alt="Michelle Muñoz">
                </a>
            </div>                  
                <!--?php include ROOT_PATH . 'includes/temp-links.php'; ?-->
            <?php include ROOT_PATH . 'includes/global-nav-hamburger-and-drawer-menu.php'; ?>
        </div>
    </nav>
</header>


<div id="pagetop"></div>


<style>
  .home #home-hero-opener {
    overflow: hidden !important;
    background-color: #020a13 !important;
}
</style>


  <section id="home-hero-opener" class="p-0 full-screen position-relative wow" style="visibility: visible;"> 
    <!-- <div class="opacity-medium bg-extra-dark-gray z-index-0"></div> -->
    
    <div class="video-background-container">
      <div class="background-video-03 ">
        <video autoplay muted loop playsinline class="">
            <source src="<?= BASE_URL ?>testing-videos/amoeba-01.mp4" type="video/mp4">
        </video>
      </div>


    <div class="video-background-content">
      <div class="container h-100">
        <div class="row h-100 m-0 p-0">
          <div class="col col-12 col-md-11 d-flex justify-content-center flex-column text-left text-md-start">
            <div class="home-hero-text-block-02">
                <div class="sm-margin-20px-bottom">
                  <h1>I'm a senior product designer with a passion for human-centered design, technology and usability.</h1>
                </div>
                <div class="margin-50px-top col-12 col-md-9"><h2>I’m seeking a position in product design or UX engineering.</h2></div>
            </div>
          </div><!-- cols-->
        </div><!-- row-->
      </div>
    </div>
  </div>

<div class="home-grid-top">
      <div class="text-block-01">M. Architecture • MFA Design</div>
      <div class="text-block-02">hello@michellemunoz.info</div>
</div>



<div class="home-grid-bottom d-flex-centering">

  <div class="container">
    <div class="row d-flex d-flex-centering" style="justify-content: space-between;">
    <div class="col col-6">San Juan, Puerto Rico</div>
    <div class="col col-6 text-align-right">18º28’00 N, 066º06’51 W</div>
    </div>
  </div>

</div>

<div class="home-big-words">
<img class="word-01" src="<?= BASE_URL ?>home/home-big-words-slab-01.svg" />
<!-- <img class="word-02" src="<?= BASE_URL ?>home/home-big-words-02.svg" /> -->
</div>
  </section>


  <?php include ROOT_PATH . 'home/home-accordion-intro.php'; ?>



<!-- start footer --> 
<footer class="footer-strip-dark bg-extra-dark-gray" style="padding: 80px 0 0 0;">
    <div class="container">
        <div class="row" style="align-items: flex-start;">
            <!-- start logo -->
            <div class="col col-12 col-md-4 text-left text-lg-start sm-margin-20px-bottom footer-copyright">
                <a href="index.html">
                    <img class="footer-logo" src="<?= BASE_URL ?>images/munoz-logo-horizontal-white-04.svg" data-at2x="<?= BASE_URL ?>images/munoz-logo-horizontal-white-04.svg" alt="M3Orange Design">
                </a>
            </div> 
            <!-- end logo -->
            <!-- start copyright -->
            <div class="col col-12 col-md-8 text-left text-medium footer-copyright">
                <p>
                &copy;<?=date("Y")?>, Michelle M. Mu&ntilde;oz-Dorna and Pixelmedia Inc. All Rights Reserved. No part of this content may be used or reproduced, in part or as a whole, without the express written consent of the author.
                </p>
            </div>
            <!-- end copyright -->

        </div>
    </div>





</footer>   

<div class="center-align">
      <div id="clipped-block" class="container-fluid footer-clipped-words">
        <div class="row text-area">
          <div class="col col-12">
            <div class="footer-clipped-words"><div class="my-name">michelle muñoz</div></div>
          </div>
        </div>
      </div>

</div>
<!-- end footer -->

<style>

  .my-name{
    height: 100px;
  }

  .center-align{
        display: flex;
    justify-content: center;
  }
 .footer-clipped-words{
    padding: 102px 0 0 0;
    background-color: #1c1c1c;
    font-style: italic;
    font-size: 200px;
    /* height: 300px; */
    overflow: hidden;
    display: flex;
    flex-direction: row;
    height: 140px;
    align-items: flex-end;
    letter-spacing: -10px;
    color: rgba(255, 255, 255, 0.1);
    justify-content: flex-start;
    font-family: var(--ibm-serif);
    min-width: 113%;
    /* margin-bottom: 80px; */
 }

 .text-area{

 min-width: 100%;

 }

 #clipped-block{
min-width: 250%; */
    margin: 0px;
    /* padding: 44px 0 0 0;*/
 }
</style>

            <!-- end footer -->
    <!-- start scroll to top -->
    <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
    <!-- end scroll to top  -->
    <!-- javascript libraries -->
    <script type="text/javascript" src="<?= BASE_URL ?>js/jquery.js"></script>
    <script type="text/javascript" src="<?= BASE_URL ?>js/modernizr.js"></script>
    <script type="text/javascript" src="<?= BASE_URL ?>js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="<?= BASE_URL ?>js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?= BASE_URL ?>js/skrollr.min.js"></script>
    <script type="text/javascript" src="<?= BASE_URL ?>js/smooth-scroll.js"></script>
    <script type="text/javascript" src="<?= BASE_URL ?>js/jquery.appear.js"></script>
    <!-- menu navigation -->
    <script type="text/javascript" src="<?= BASE_URL ?>js/bootsnav.js"></script>
    <script type="text/javascript" src="<?= BASE_URL ?>js/jquery.nav.js"></script>
    <!-- animation -->
    <script type="text/javascript" src="<?= BASE_URL ?>js/wow.min.js"></script>
    <!-- page scroll -->
    <script type="text/javascript" src="<?= BASE_URL ?>js/page-scroll.js"></script>
    <!-- swiper carousel -->
    <script type="text/javascript" src="<?= BASE_URL ?>js/swiper.min.js"></script>
    <!-- counter -->
    <script type="text/javascript" src="<?= BASE_URL ?>js/jquery.count-to.js"></script>
    <!-- parallax -->
    <script type="text/javascript" src="<?= BASE_URL ?>js/jquery.stellar.js"></script>
    <!-- magnific popup -->
    <script type="text/javascript" src="<?= BASE_URL ?>js/jquery.magnific-popup.min.js"></script>
    <!-- portfolio with shorting tab -->
    <script type="text/javascript" src="<?= BASE_URL ?>js/isotope.pkgd.min.js"></script>
    <!-- images loaded -->
    <script type="text/javascript" src="<?= BASE_URL ?>js/imagesloaded.pkgd.min.js"></script>
    <!-- pull menu -->
    <script type="text/javascript" src="<?= BASE_URL ?>js/classie.js"></script>
    <script type="text/javascript" src="<?= BASE_URL ?>js/hamburger-menu.js"></script>
    <!-- counter  -->
    <script type="text/javascript" src="<?= BASE_URL ?>js/counter.js"></script>
    <!-- fit video  -->
    <script type="text/javascript" src="<?= BASE_URL ?>js/jquery.fitvids.js"></script>
    <!-- skill bars  -->
    <script type="text/javascript" src="<?= BASE_URL ?>js/skill.bars.jquery.js"></script>
    <!-- justified gallery  -->
    <script type="text/javascript" src="<?= BASE_URL ?>js/justified-gallery.min.js"></script>
    <!--pie chart-->
    <script type="text/javascript" src="<?= BASE_URL ?>js/jquery.easypiechart.min.js"></script>
    <!-- retina -->
    <script type="text/javascript" src="<?= BASE_URL ?>js/retina.min.js"></script>
    <!-- revolution -->
    <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
    <!--<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>-->
    <!-- setting -->

    

        <script type="text/javascript" src="<?= BASE_URL ?>js/main.js"></script>


        <!-- <script>
        window.Userback = window.Userback || {};
        Userback.access_token = "A-UXvuAoDuLdEYYIFOBCZig4DV2";
        // identify your logged-in users (optional)
        Userback.user_data = {
        id: "123456", // example data
        info: {
        name: "someone", // example data
        email: "someone@example.com" // example data
        }
        };
        (function(d) {
        var s = d.createElement('script');s.async = true;s.src = 'https://static.userback.io/widget/v1.js';(d.head || d.body).appendChild(s);
        })(document);
        </script> -->







  
</body>

</html>