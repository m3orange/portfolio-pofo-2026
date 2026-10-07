<!-- 260922_0127 -->

<?php require_once('config.php') ?>


<?php include ROOT_PATH . 'includes/header.php'; ?>

<body class="home">



       <?php include ROOT_PATH . 'includes/global-nav.php'; ?>

    <?php include ROOT_PATH . 'home/home-hero-opener-with-video.php'; ?>


    <?php include ROOT_PATH . 'home/home-accordion-intro.php'; ?>

  <div id="anchor-03" class="anchor-wrapper">
    <section class="wow fadeIn section-with-border-top">
      <div class="container">
        <div class="row">
          <div class="col col-12 col-xl-4 col-lg-12 section-divider-numbered-02" style="flex-direction: column;">
            <div class="big-number">02</div>
            <div class="big-section-title">
              <h4>Where I Shine</h4>
            </div>
          </div>
          <div class="col col-12 col-xl-8 col-lg-12 p-0">
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


  <style>
    html {
    scroll-behavior: smooth;
    }

    /* Turn off smooth scrolling if user prefers reduced motion */
    @media (prefers-reduced-motion: reduce) {
      html {
        scroll-behavior: auto;
      }
    }

section.ux-phases-section { 
  overflow: visible; 
  overflow-x: clip; 
  background-color: #222;

}  

.ux-phases-section section{
  padding: 0px!important;
}

    /* A: simplest 
section.curtis-imported-block { overflow: visible; }
*/

/* B: keeps horizontal clipping, still allows sticky 
section.curtis-imported-block { overflow: visible; overflow-x: clip; }  
*/

.ux-phases-section .cs-toc { 
  /* top: 128px;  */
  top: 60px;
/* background-color:rgba(255,255,255,0.5); 
  border-radius: 8px;  */
  padding: 20px 20px 20px 120px;
  /* box-shadow: 0px 0px 10px rgba(0,0,0,0.2); */
}

.each-ux-phase-container{
  background-color: rgba(255,255,255,0.05);
  /* border: 1px solid rgba(255,255,255,0.6); */
  margin-bottom: 100px;
  padding: 20px 40px;

}

.each-ux-phase-container .swiper-slide{
  display: flex;
  justify-content: center;
  padding: 2% 5%;
}

/* .each-ux-phase-container .swiper-slide img{
  max-width: 90%;
} */

.each-ux-phase-container h5{
      margin: 0 !important;
    color: #FFF;
    font-weight: 400 !important;
    line-height: 1.25em !important;
    font-family: var(--alt-text-2) !important;
    padding: 2px 0;
    line-height: 1.3em;

}

.ux-phase-title-area{
 /* background-color: rgba(255,255,255,0.05); */
    margin-bottom: 20px;
    padding: 12px 0 0 10px;

}

.cs-toc__list {
    
    gap: 4px;
}

.cs-toc__list a {
    display: block;
    padding: 8px 0 8px 16px;
    border-left: 2px solid rgba(255,255,255,0.3);
    font-size: 16px;
    color: rgba(255,255,255,0.85);
    text-decoration: none;
    /* transition: color var(--dur-fast) var(--ease-out), border-color var(--dur-fast) var(--ease-out); */
 transition: color 160ms cubic-bezier(0.16, 1, 0.3, 1), border-color 160ms cubic-bezier(0.16, 1, 0.3, 1);
}



.cs-toc__list a:hover,
.cs-toc__list a:active{ color: #FFF!important;}

.cs-toc__list a:hover, .cs-toc__list a[aria-current="true"] {
    color: rgba(255,255,255,1);
    border-left-color: #FFFFFF;
}

  </style>


   <section class="ux-phases-section wow fadeIn">
          <!-- <div class="progress" data-progress="" aria-hidden="true" style="transform: scaleX(0);"></div> -->
        <div class="container-fluid">

<div class="container">
        <div class="row">
            <div class="col col-12 section-divider-numbered-02 p-0" style="flex-direction: column; justify-content: space-between;">
                <div class="row" style="flex-direction: column; column-gap: 20px; margin-left: 0px; margin-right: 0px;">
                    <div class="big-number text-white">03</div>
                    <div class="big-section-title text-white">
                        <h4 class="text-white">Add title and some intro</h4></div>
                </div>
            </div>
        </div>
    </div>


          <div class="row">
            <div class="col col-12 col-lg-3">
              <aside class="cs-toc curtis-toc" data-toc="" aria-label="On this page">
                <!-- <p class="cs-toc__title">On this page</p> -->
                <ul class="cs-toc__list">
                  <li><a href="#area-01" aria-current="true">Research & Discovery</a></li>
                  <li><a href="#area-02">Ideation & Definition</a></li>
                  <li><a href="#area-03">Analysis & Synthesis</a></li>
                  <li><a href="#area-04">Prototyping & Testing</a></li>
                  <li><a href="#area-05">Final Design & Handoff</a></li>
                </ul>
              </aside>
            </div>

            <div class="col col-12 col-lg-9">



<div class="each-ux-phase-container" id="area-01">
  <div class="ux-phase-title-area"><h5>Research & Discovery</h5></div>
  <?php include ROOT_PATH . 'includes/temp-ux-slider.php'; ?>
</div>
                        
<div class="each-ux-phase-container" id="area-02">
  <div class="ux-phase-title-area"><h5>Ideation & Definition</h5></div>
  <?php include ROOT_PATH . 'includes/temp-ux-slider-02.php'; ?>
</div>


<div class="each-ux-phase-container" id="area-03">
  <div class="ux-phase-title-area"><h5>Analysis & Synthesis</h5></div>
  <?php include ROOT_PATH . 'includes/temp-ux-slider.php'; ?>
</div>
                        
<div class="each-ux-phase-container" id="area-04">
  <div class="ux-phase-title-area"><h5>Prototyping & Testing</h5></div>
    <?php include ROOT_PATH . 'includes/temp-ux-slider-02.php'; ?>
</div>                     

<div class="each-ux-phase-container" id="area-05">
  <div class="ux-phase-title-area"><h5>Final Design & Handoff</h5></div>
<?php include ROOT_PATH . 'includes/temp-ux-slider.php'; ?>
</div> 

            </div>
            
          </div>
        </div>
      </section>




  <?php include_once("home/home-project-grid.php"); ?>



  <!-- start footer -->
  <?php include_once("includes/global-footer.php"); ?>


</body>

</html>