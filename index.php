<?php include_once("config.php"); ?>

<?php include ROOT_PATH . 'includes/header.php'; ?>


<body class="home">

  <!-- start header -->
  <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
  <!-- end header -->

  <?php include ROOT_PATH . 'home/home-hero-opener-04.php'; ?>

  <?php include ROOT_PATH . 'home/home-accordion-intro.php'; ?>

  <section class="wow fadeIn section-with-border-top">
    <div class="container">
      <div class="row">
        <!-- justify-content-center-->
        <div class="col col-12 col-lg-4 section-divider-numbered-02" style="flex-direction: column;">

          <div class="big-number">02</div>
          <div class="big-section-title"><h4>Where I Shine</h4></div>

          <!-- <div class="row justify-content-center home-strong-areas-tabs">
            <div class="col col-12 col-xl-11 col-sm-11 text-left tab-style3 p-0" id="animated-tab1">
              <ul class="nav nav-tabs text-small font-weight-600 justify-content-left flex-column flex-md-row">
                <li class="nav-item"><a href="#tab3_sec1" data-toggle="tab" class="nav-link active">Where I Shine</a></li>
                <li class="nav-item"><a href="#tab3_sec2" data-toggle="tab" class="nav-link">How I Get There</a></li>
              </ul>
            </div>
          </div> -->


        </div>
        <div class="col col-12 col-lg-8 p-0">

          <!-- start tab content -->
          <div class="home-strong-areas-tabs tab-content">
            <!-- start tab content -->
            <div id="tab3_sec1" class="tab-pane active show ">
              <div class="col col-12 wow fadeIn" data-wow-delay="0s">
                <div class="row">
                  <!--?php include ROOT_PATH . 'home/home-strong-areas-cards.php'; ?-->

                    <div class="col col-12 col-xl-6 col-lg-12 last-paragraph-no-margin grid-card-area">
                      <div class="topic-cards" style="display: flex; flex-direction: column;justify-content: space-between;">
                        <div>
                          <div class="margin-10px-bottom card-number">[01]</div>
                            <!-- <i class="icon-desktop icon-extra-medium text-deep-pink margin-20px-bottom"></i> -->
                            <div>
                                <h6 class="alt-font-2 margin-10px-bottom padding-50px-right">Projects that benefit from deep knowledge of code</h6>
                                <p>I’m able to understand how technical constraints impact the design decisions we can make, and I’m able to identify possible issues early on, and to ask engineers very specific questions that could lead us to what our options are.</p>
                            </div>
                        </div>
                          <div class="btn-view-website-area p-0">
                            <div class="btn btn-to-atlas-ds-page"><a href="<?= BASE_URL ?>about.php" target="_blank" >More about my technical knowledge</a></div>
                            <div class="btn-view-website"><img src="<?= BASE_URL ?>images/arrow-view-website-black.svg"/></div>
                          </div>

                        </div>
                    </div>

                    <div class="col col-12 col-xl-6 col-lg-12 last-paragraph-no-margin grid-card-area">
                      <div class="topic-cards">
                          <div class="margin-10px-bottom card-number">[02]</div>
                            <!-- <i class="icon-desktop icon-extra-medium text-deep-pink margin-20px-bottom"></i> -->
                            <div>
                                <h6 class="alt-font-2 margin-10px-bottom">Making sense of complex information architectures</h6>
                                <p>I’m good at organizing large amounts of data and designing intuitive workflows that help users get faster to insight. I rely greatly on doing user research to understand what's relevant to them, on implementing mental models that are familiar and reduce friction, and on leveraging good practices such as progressive disclosure and sensible information hierarchies with visual cues.
                    </p>
                            </div>
                        </div>
                    </div>

                    <div class="col col-12 col-xl-6 col-lg-12 last-paragraph-no-margin grid-card-area">
                        <div class="topic-cards">
                          <div class="margin-10px-bottom card-number">[03]</div>
                            <!-- <i class="icon-desktop icon-extra-medium text-deep-pink margin-20px-bottom"></i> -->
                            <div>
                                <h6 class="alt-font-2 margin-10px-bottom padding-50px-right">Design systems and documentation</h6>
                                <p><s>OCD</s> detail-oriented by nature, I develop systems with a keen sense of precision, scalability and modularity. And my coding know-how means I can tell a dev to use <span class="quote-01 code-block">a &lt;v-combobox&gt;, with X props and variants, and the Y and Z icons for the prepend & append slots.</span> A shared vocabulary with engineers, fewer handoff gaps, and no need for pixel-pushing.</p>
                                <h6>I'm usually guided by IBM's Carbon and Google's Material systems.</h6>
                                <h6>Similarity between design systems and modular architecture</h6>
                                <h6>Mention patterns in addition to components</h6>
                                <h6>No pixel-pushing.</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col col-12 col-xl-6 col-lg-12 last-paragraph-no-margin grid-card-area"  style="height: stretch;">
                      <div class="topic-cards" style="aspect-ratio: unset; height: stretch;">
                          <div class="margin-10px-bottom card-number">[04]</div>
                            <!-- <i class="icon-desktop icon-extra-medium text-deep-pink margin-20px-bottom"></i> -->
                            <div>
                                <h6 class="alt-font-2 margin-10px-bottom padding-50px-right">Deep & meaningful research</h6>
                                <p>I never shy away from an opportunity to dive deep into research, particularly in entirely new technologies outside my comfort zone. I’m usually assigned that <span class="quote-01">"complex tech research that nobody else wants to do",</span> and enjoy being able to then translate it back to our team.</p>
                                  <!-- Turning messy interview data and tangled processes into insight  -->
                            </div>
                        </div> 
                    </div>

                </div>
              </div>
            </div>
            <!-- end tab content -->



          <!-- <!-?php include ROOT_PATH . 'home/home-strong-areas-rows.php'; --?> -->


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