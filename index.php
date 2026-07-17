<?php include_once("config.php"); ?>

<?php include ROOT_PATH . 'includes/header.php'; ?>


<body class="home">

  <!-- start header -->
  <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
  <!-- end header -->

  <?php include ROOT_PATH . 'home/home-hero-opener.php'; ?>

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
                <li class="nav-item"><a href="#tab3_sec1" data-toggle="tab" class="nav-link active">Where I Shine</a>
                </li>
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