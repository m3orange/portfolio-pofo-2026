<?php include_once("config.php"); ?>

<?php include ROOT_PATH . 'includes/header.php'; ?>


<body class="home">

  <!-- start header -->
  <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
  <!-- end header -->

  

  
  <section id="home-hero-opener" class="p-0 full-screen position-relative wow" style="visibility: visible;"> 

    <div class="video-background-container">
      <div class="background-video-03 ">
        <video autoplay muted loop playsinline class="">
            <source src=<?= BASE_URL ?>testing-videos/amoeba-01.mp4" type="video/mp4">
        </video>
      </div>

      <div class="video-background-content">
        <div class="container h-100">
          <div class="row h-100 m-0 p-0">

            <div class="col col-12 col-xl-8 col-lg-9 col-md-10 d-flex justify-content-center flex-column text-left text-md-start">
              <div class="home-hero-text-block">
                  <div class="sm-margin-20px-bottom">
                  <h1>I'm a senior product designer with a passion for 
                    <span class="serif-emphasis">human-centered design and usability.</span></h1>
                  </div>
                  <div class="margin-50px-top">
                  <h4>I’m seeking a position in <span class="serif-emphasis">product design or UX engineering.</span> <!--serif-emphasis--></h4>
                  </div>

                
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


  <div id="anchor-03" class="anchor-wrapper">
    <section class="wow fadeIn section-with-border-top">
      <div class="container">
        <div class="row">
          <!-- justify-content-center-->
          <div class="col col-12 col-lg-4 section-divider-numbered-02" style="flex-direction: column;">

            <div class="big-number">02</div>
            <div class="big-section-title"><h4>Where I Shine</h4></div>

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
                                  <p><s>OCD</s> detail-oriented by nature, I develop systems with a keen sense of precision, scalability and modularity. 
                                  <h3>Add granularity here</h3>
                                  And my coding know-how means I can tell a dev to use <span class="quote-01 code-block">a &lt;v-combobox&gt;, with X props and variants, and the Y and Z icons for the prepend & append slots.</span> A shared vocabulary with engineers, fewer handoff gaps, and no need for pixel-pushing.</p>
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
  </div>

  <div id="anchor-04" class="anchor-wrapper">
  <?php include ROOT_PATH . 'home/home-project-grid.php'; ?>
  </div>

  <!-- start footer -->
  <?php include_once("includes/global-footer.php"); ?>

  
</body>

</html>