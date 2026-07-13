<?php include_once("config.php"); ?>

<!-- Replit's fixed code from 260524_0947 -->


<?php include ROOT_PATH . 'includes/header.php'; ?>


<body class="home">

 <!-- start header -->
 <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
 <!-- end header -->

 <section id="home-hero-opener" class="p-0 full-screen position-relative wow animate__fadeIn"
  style="height: 1029px; visibility: visible; animation-name: fadeIn;">
  <div class="opacity-medium bg-extra-dark-gray z-index-0"></div>
  <div class="container h-100">
   <div class="row h-100">
    <div
     class="col col-12 col-xxl-8 col-xl-10 col-lg-11 col-md-11 d-flex justify-content-center flex-column text-left text-md-start">
     <!--style="justify-content: space-around!important;"-->
     <div class="row padding-30px-all">
      <h1 class="lg-w-60 md-w-70 lg-line-height-auto sm-w-100 sm-margin-15px-bottom">
       I'm a
        <span class="mf-var-02">senior product designer</span> with a
        <span class="mf-var-01">passion for human-centered design</span> and
        <span class="mf-var-03">usability.</span>
      </h1>
     </div>
     <div class="row no-grid-border">
      <div class="col col-md-12 col-lg-8 no-grid-border seeking-a-position">

       <div class="starburst-area">
        <!--padding-10px-lr  padding-20px-top padding-20px-bottom-->
        <img src="<?= BASE_URL ?>images/starburst-100x100.svg" alt="Eames Starburst" />
       </div>
       <h4 class="lg-w-60 md-w-70 lg-line-height-auto sm-w-100" style="margin: 0px!important">
        I’m seeking a position in
        <span class="mf-var-01">product design</span> or
        <span class="mf-var-01">UX engineering.</span>

       </h4>

      </div>

     </div>


    </div><!-- cols-->
   </div><!-- row-->

  </div>
 </section>




 <?php include ROOT_PATH . 'home/home-accordion-intro.php'; ?>

 <section class="wow fadeIn section-with-border-top">
  <div class="container">
   <div class="row">
    <!-- justify-content-center-->
    <div class="col col-12 col-lg-4 section-divider-numbered-02" style="flex-direction: column;">

     <div class="big-number">02</div>
     <div class="big-section-title">Work & Process</div>


     <div class="row justify-content-center home-strong-areas-tabs">
      <div class="col col-12 col-xl-11 col-sm-11 p-0 text-left tab-style3" id="animated-tab1">
        <!-- start tab navigation -->
        <ul class="nav nav-tabs text-small font-weight-600 justify-content-left flex-column flex-md-row">
            <li class="nav-item"><a href="#tab3_sec1" data-toggle="tab" class="nav-link active">Where I Excel At</a></li>
            <li class="nav-item"><a href="#tab3_sec2" data-toggle="tab" class="nav-link">How I Get There</a></li>
        </ul>
        <!-- end tab navigation -->
      </div>
     </div>


    </div>
    <div class="col col-12 col-lg-8 p-0">

     <!-- start tab content -->
     <div class="home-strong-areas-tabs tab-content">
      <!-- start tab content -->
      <div id="tab3_sec1" class="tab-pane active show ">
       <div class="col col-12 wow fadeIn" data-wow-delay="0s">
          <div class="row">
          <?php include ROOT_PATH . 'home/home-strong-areas-cards.php'; ?>


 


    

    

                </div>



       </div>
      </div>
      <!-- end tab content -->
      <!-- start tab content -->
      <div id="tab3_sec2" class="tab-pane show">
       <div class="row justify-content-center resume-text">
        <div class="col-12 last-paragraph-no-margin">

<?php include ROOT_PATH . 'home/home-strong-areas-rows.php'; ?>


        </div>
       </div>
      </div>
      <!-- end tab content -->


     </div>
     <!-- end tab content -->




    </div>
   </div>
  </div>
 </section>

 <!-- start portfolio section --- portfolio-full-width-masonry-overlay ----->
 <?php include ROOT_PATH . 'home/home-project-grid.php'; ?>
 <!-- end portfolio section --- portfolio-full-width-masonry-overlay ----->


 <!-- start footer -->
 <?php include_once("includes/global-footer.php"); ?>



</body>

</html>