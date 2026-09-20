<!-- 260920_0135-->


<?php require_once('config.php') ?>

<!--?php
require_once 'db-config.php';

$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);

$stmt = $pdo->query('SELECT * FROM strengths ORDER BY sort_order ASC');
$strengths = $stmt->fetchAll(PDO::FETCH_ASSOC);

?-->


<?php include ROOT_PATH . 'includes/header.php'; ?>

<body class="home">


  <!-- This is opener 05--->
   
  <section id="home-hero-opener" class="p-0 full-screen position-relative wow color-around-svg"
    style="visibility: visible; ">
    <div class="video-background-container">
      <div class="video-background-content">
        <div class="container h-100">
          <div class="row h-100 m-0 p-0 row-for-hero-statement">
            <div class="col col-12 d-flex justify-content-center flex-column text-left text-md-start">
              <div class="hero-statement">
                <div class="col col-12 col-xxl-8 col-xl-10 col-lg-11 col-md-12 sm-margin-20px-bottom statement-wrapper">
                  <h1>I'm a senior product designer with a passion for <span class="hero-emphasis-orange">human-centered
                      design, technology and usability.</span> I'm seeking a position in <span class="hero-emphasis-orange">product design or UX engineering.</span></h1>
                </div>
              </div>
            </div>
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

     <?php include ROOT_PATH . 'projects/videos/home-anim-meshic.php'; ?>

  </section>


<!--
Add to video config;

"home-hero-anim": "https://m3orange.com/portfolio/portfolio-assets/animations/260919-meshic-poly-anim-contrast.mp4",
-->

  <style>



/*
    .statement-wrapper{
          background-color: #131313e0 !important;
          box-shadow: 0 4px 10px rgba(0, 0, 0, 0.25);
          padding: 20px;
          border-radius: 10px;
    }
*/

  .floating-card{
          z-index: 1000;  
      width: 20%;
      height: 50%;
      position: fixed;
      bottom: 5%;
      right: 5%;
      border-radius: 20px;



      /* other styles */
      background: rgb(0 0 0 / 30%);
      backdrop-filter: blur(60px);
        /* fallback for old browsers */
        -webkit-backdrop-filter: blur(60px);
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.25);
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
  }


  </style>

     <!--?php include ROOT_PATH . 'animations/ai-orb-casberry-redone.php'; ?-->

 <?php include ROOT_PATH . 'home/home-accordion-intro.php'; ?>

  <div id="anchor-03" class="anchor-wrapper">
    <section class="wow fadeIn section-with-border-top">
      <div class="container">
        <div class="row">
          <div class="col col-12 col-lg-4 section-divider-numbered-02" style="flex-direction: column;">
            <div class="big-number">02</div>
            <div class="big-section-title">
              <h4>Where I Shine</h4>
            </div>
          </div>
          <div class="col col-12 col-lg-8 p-0">
            <div class="home-strong-areas-tabs tab-content">
              <div id="tab3_sec1" class="tab-pane active show ">
                <div class="col col-12 wow fadeIn" data-wow-delay="0s">
                  <div class="row">
                    <div class="col col-12 col-xl-6 col-lg-12 last-paragraph-no-margin grid-card-area">
                      <div class="topic-cards"
                        style="display: flex; flex-direction: column;justify-content: space-between;">
                        <div>
                          <div class="margin-10px-bottom card-number">[01]</div>
                          <!-- <i class="icon-desktop icon-extra-medium text-deep-pink margin-20px-bottom"></i> -->
                          <div>
                            <h6 class="font-weight-700 alt-font-2 margin-10px-bottom padding-50px-right">Projects that
                              benefit from deep knowledge of code</h6>
                            <p>I'm able to understand how technical constraints impact the design decisions we can make,
                              and I'm able to identify possible issues early on and ask engineers very specific
                              questions that could lead us to what our options are.</p>
                          </div>
                        </div>
                        <div class="btn-view-website-area p-0 margin-20px-top">
                          <div class="btn btn-to-atlas-ds-page">
                            <a href="<?= BASE_URL ?>about.php" target="_blank">More about my technical knowledge</a>
                          </div>
                          <div class="btn-view-website"><img src="<?= BASE_URL ?>images/arrow-view-website-black.svg" />
                          </div>
                        </div>

                      </div>
                    </div>

                    <div class="col col-12 col-xl-6 col-lg-12 last-paragraph-no-margin grid-card-area">
                      <div class="topic-cards">
                        <div class="margin-10px-bottom card-number">[02]</div>
                        <!-- <i class="icon-desktop icon-extra-medium text-deep-pink margin-20px-bottom"></i> -->
                        <div>
                          <h6 class="font-weight-700 alt-font-2 margin-10px-bottom">Making sense of complex information
                            architectures</h6>
                          <p>I'm good at organizing large amounts of data and designing intuitive workflows that help
                            users get faster to insight. I rely greatly on user research to understand what's most
                            relevant to them, on implementing familiar mental models that reduce friction, and on
                            leveraging good practices such as progressive disclosure, sensible information hierarchy and
                            visual cues.
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="col col-12 col-xl-6 col-lg-12 last-paragraph-no-margin grid-card-area">
                      <div class="topic-cards">
                        <div class="margin-10px-bottom card-number">[03]</div>
                        <!-- <i class="icon-desktop icon-extra-medium text-deep-pink margin-20px-bottom"></i> -->
                        <div>
                          <h6 class="font-weight-700 alt-font-2 margin-10px-bottom padding-50px-right">Design systems
                            and documentation</h6>
                          <p>Detail-oriented by nature, I develop systems with a keen sense of precision, scalability
                            and modularity: I enjoy working at this granular level. And my coding know-how means I can
                            tell a dev to use <span class="quote-01 code-block">a &lt;v-combobox&gt;, with X props and
                              variants, and the Y and Z icons for the prepend & append slots.</span> A shared vocabulary
                            with engineers, fewer handoff gaps, and no need for pixel-pushing.</p>
                        </div>
                      </div>
                    </div>

                    <div class="col col-12 col-xl-6 col-lg-12 last-paragraph-no-margin grid-card-area"
                      style="height: stretch;">
                      <div class="topic-cards" style="aspect-ratio: unset; height: stretch;">
                        <div class="margin-10px-bottom card-number">[04]</div>
                        <!-- <i class="icon-desktop icon-extra-medium text-deep-pink margin-20px-bottom"></i> -->
                        <div>
                          <h6 class="font-weight-700 alt-font-2 margin-10px-bottom padding-50px-right">Deep & meaningful
                            research</h6>
                          <p>I never shy away from an opportunity to dive deep into research, particularly in entirely
                            new technologies that are outside my comfort zone. I'm usually assigned that <span
                              class="quote-01">"complex tech research that nobody else wants to do",</span> and enjoy
                            being able to then translate it back to our team.</p>
                          <!-- Turning messy interview data and tangled processes into insight  -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


  <?php include_once("home/home-project-grid.php"); ?>

  <!-- start footer -->
  <?php include_once("includes/global-footer.php"); ?>


</body>

</html>