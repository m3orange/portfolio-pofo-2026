<?php require_once('config.php') ?>

<?php
require_once 'db-config.php';

$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);

$stmt = $pdo->query('SELECT * FROM strengths ORDER BY sort_order ASC');
$strengths = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>


<?php include ROOT_PATH . 'includes/header.php'; ?>

<body class="home">


<?php include ROOT_PATH . 'includes/global-nav.php'; ?>


  <!-- This is opener 05--->

<section id="home-hero-opener" class="p-0 full-screen position-relative wow" style="visibility: visible;">     
  <div id="random-bg-container-03">
    <div class="video-background-container">
      <div class="video-background-content">
        <div class="container h-100">
          <div class="row h-100 m-0 p-0">
            <div class="col col-12 d-flex justify-content-center flex-column text-left text-md-start">
              <div class="home-hero-text-block-02">
                  <div class="col col-12 sm-margin-20px-bottom">
                      <div class="line-one">
                        <h1>I'm a senior product designer with a passion for <span class="serif-emphasis">human-centered design, technology and usability.</span>
                        </h1>
                      </div>
                  </div>
                  <div class="col col-12">
                    <div class="line-two">
                      <h2>I'm seeking a position in <span class="serif-emphasis">product design or UX engineering.</span></h2>
                    </div>
                  </div>
              </div>
            </div><!-- cols-->
          </div><!-- row-->
        </div>
      </div>
    </div>
  </div>


    <!-- <div class="blurred-panel-behind">
      <div class="animated-gradient-test-01"></div> 
    </div> -->


    <div class="home-grid-top">
          <div class="text-block-01">M. Architecture • MFA Design</div>
          <div class="text-block-02">hello@michellemunoz.info</div>
    </div>

    <div class="home-grid-bottom">

      <div class="container">
        <div class="col col-12 col-md-6 col-left">San Juan, Puerto Rico</div>
        <div class="col col-12 col-md-6 col-right">18º28’00 N, 066º06’51 W</div>
      </div>
    </div>
<!-- <div class="animated-gradient-test-02"></div>  -->
    
<!-- 
    <div class="home-big-m">
      <img class="word-01" src="<?= BASE_URL ?>images/munoz-logo-symbol-only.svg" />
    </div>

    <<div class="home-big-words">
      <img class="word-01" src="<?= BASE_URL ?>home/home-big-words-slab-01.svg" />
    </div>
     -->

  </section>

  <script>
          // 1. Store your image URLs in an array
        const images = [
          '<?= BASE_URL ?>home-bg-images/random-bg-img-01.jpg',
          '<?= BASE_URL ?>home-bg-images/random-bg-img-02.jpg',
          '<?= BASE_URL ?>home-bg-images/random-bg-img-03.jpg',
          '<?= BASE_URL ?>home-bg-images/random-bg-img-04.jpg',
          '<?= BASE_URL ?>home-bg-images/random-bg-img-05.jpg',
          '<?= BASE_URL ?>home-bg-images/random-bg-img-06.jpg',
          '<?= BASE_URL ?>home-bg-images/random-bg-img-07.jpg',

        ];


        // 2. Define the randomization function
        function setRandomBackground() {
        // Generate a random index based on array length
        const randomIndex = Math.floor(Math.random() * images.length);

        // Select the target element
        const container = document.getElementById('random-bg-container-03');

        // Apply the random image using CSS template literals
        container.style.backgroundImage = `url('${images[randomIndex]}')`;
        }

        // 3. Execute the function on page load
        window.onload = setRandomBackground;

    </script>



  <?php include ROOT_PATH . 'home/home-accordion-intro.php'; ?>


  <div id="anchor-03" class="anchor-wrapper">
    <section class="wow fadeIn section-with-border-top">
      <div class="container">
        <div class="row">
          <div class="col col-12 col-lg-4 section-divider-numbered-02" style="flex-direction: column;">
            <div class="big-number">02</div>
            <div class="big-section-title"><h4>Where I Shine</h4></div>
          </div>
          <div class="col col-12 col-lg-8 p-0">
            <div class="home-strong-areas-tabs tab-content">
              <div id="tab3_sec1" class="tab-pane active show ">
                <div class="col col-12 wow fadeIn" data-wow-delay="0s">
                  <div class="row">
                    


<div class="col col-12 col-xl-6 col-lg-12 last-paragraph-no-margin grid-card-area">
  <div class="topic-cards" style="display: flex; flex-direction: column;justify-content: space-between;">
    <div>
      <div class="margin-10px-bottom card-number">[01]</div>
        <!-- <i class="icon-desktop icon-extra-medium text-deep-pink margin-20px-bottom"></i> -->
         <div>
            <h6 class="font-weight-700 alt-font-2 margin-10px-bottom padding-50px-right">Projects that benefit from deep knowledge of code</h6>
            <p>I'm able to understand how technical constraints impact the design decisions we can make, and I'm able to identify possible issues early on and ask engineers very specific questions that could lead us to what our options are.</p>
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
            <h6 class="font-weight-700 alt-font-2 margin-10px-bottom">Making sense of complex information architectures</h6>
            <p>I'm good at organizing large amounts of data and designing intuitive workflows that help users get faster to insight. I rely greatly on user research to understand what's most relevant to them, on implementing familiar mental models that reduce friction, and on leveraging good practices such as progressive disclosure, sensible information hierarchy and visual cues.
</p>
         </div>
    </div>
</div>

<div class="col col-12 col-xl-6 col-lg-12 last-paragraph-no-margin grid-card-area">
    <div class="topic-cards">
      <div class="margin-10px-bottom card-number">[03]</div>
        <!-- <i class="icon-desktop icon-extra-medium text-deep-pink margin-20px-bottom"></i> -->
         <div>
            <h6 class="font-weight-700 alt-font-2 margin-10px-bottom padding-50px-right">Design systems and documentation</h6>
            <p>Detail-oriented by nature, I develop systems with a keen sense of precision, scalability and modularity: I enjoy working at this granular level. And my coding know-how means I can tell a dev to use <span class="quote-01 code-block">a &lt;v-combobox&gt;, with X props and variants, and the Y and Z icons for the prepend & append slots.</span> A shared vocabulary with engineers, fewer handoff gaps, and no need for pixel-pushing.</p>
         </div>
    </div>
</div>

<div class="col col-12 col-xl-6 col-lg-12 last-paragraph-no-margin grid-card-area"  style="height: stretch;">
  <div class="topic-cards" style="aspect-ratio: unset; height: stretch;">
      <div class="margin-10px-bottom card-number">[04]</div>
        <!-- <i class="icon-desktop icon-extra-medium text-deep-pink margin-20px-bottom"></i> -->
         <div>
            <h6 class="font-weight-700 alt-font-2 margin-10px-bottom padding-50px-right">Deep & meaningful research</h6>
            <p>I never shy away from an opportunity to dive deep into research, particularly in entirely new technologies that are outside my comfort zone. I'm usually assigned that <span class="quote-01">"complex tech research that nobody else wants to do",</span> and enjoy being able to then translate it back to our team.</p>
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

  <div id="anchor-04" class="anchor-wrapper">
   <section id="home-projects-grid-01"
  class="wow fadeIn padding-90px-top md-padding-50px-top sm-padding-30px-top section-with-border-top">
  <!-- start filter content -->
  <div class="container-fluid padding-five-lr md-padding-30px-lr">

   <div class="row"  style="row-gap:40px;">
    <div class="col col-12 col-lg-4 section-divider-numbered-02 p-0">
      <div class="big-number text-white">03</div>
      <div class="big-section-title"><h4 class="text-white">Featured Work</h4></div>
    </div>
   

    <div class="col-12 px-3 p-md-0">
     <div class="filter-content overflow-hidden">
      <ul class="portfolio-grid work-2col hover-option2 gutter-medium">
       <li class="grid-sizer"></li>
       <!-- start portfolio item -->
       <li class="grid-item wow fadeIn last-paragraph-no-margin" data-wow-delay="0.2s">
        <a href="<?= BASE_URL ?>projects/atlas-design-system/index.php">
         <figure>
          <div class="portfolio-img bg-deep-pink"><img src="<?= BASE_URL ?>projects/home-projects/home-atlas.png"
            alt="" />
          </div>
          <figcaption>
           <div class="portfolio-hover-main text-left">
            <div class="portfolio-hover-box align-bottom featured-work-thumbs">
             <div class="portfolio-hover-content position-relative last-paragraph-no-margin">
              <div class="bg-black margin-25px-bottom separator-line-horrizontal-medium-light2">
              </div>
              <span class="line-height-normal text-white-2 margin-5px-bottom d-block featured-work-title">Atlas</span>
              <p>Design System</p>
             </div>
            </div>
           </div>
          </figcaption>
         </figure>
        </a>
       </li>
       <!-- end portfolio item -->


       <!-- start portfolio item -->
       <li class="grid-item wow fadeIn last-paragraph-no-margin" data-wow-delay="0.2s">
        <a href="<?= BASE_URL ?>projects/admin/index.php">
         <figure>
          <div class="portfolio-img bg-deep-pink"><img src="<?= BASE_URL ?>projects/home-projects/home-admin.png"
            alt="" />
          </div>
          <figcaption>
           <div class="portfolio-hover-main text-left">
            <div class="portfolio-hover-box align-bottom featured-work-thumbs">
             <div class="portfolio-hover-content position-relative last-paragraph-no-margin">
              <div class="bg-black margin-25px-bottom separator-line-horrizontal-medium-light2">
              </div>
              <span class="line-height-normal text-white-2 margin-5px-bottom d-block featured-work-title">Admin
               Module</span>
              <p>Account & user management platform</p>
             </div>
            </div>
           </div>
          </figcaption>
         </figure>
        </a>
       </li>
       <!-- end portfolio item -->

       <!-- start portfolio-item item -->
       <li class="grid-item wow fadeIn last-paragraph-no-margin" data-wow-delay="0.4s">
        <a href="<?= BASE_URL ?>projects/atlas-ui/index.php">
         <figure>
          <div class="portfolio-img bg-deep-pink"><img src="<?= BASE_URL ?>projects/home-projects/home-citybox-ui.png"
            alt="" /></div>
          <figcaption>
           <div class="portfolio-hover-main text-left">
            <div class="portfolio-hover-box align-bottom featured-work-thumbs">
             <div class="portfolio-hover-content position-relative last-paragraph-no-margin">
              <div class="bg-black margin-25px-bottom separator-line-horrizontal-medium-light2">
              </div>
              <span class="line-height-normal text-white-2 margin-5px-bottom d-block featured-work-title">Atlas
               UI</span>
              <p>Geospatial imagery interface</p>
             </div>
            </div>
           </div>
          </figcaption>
         </figure>
        </a>
       </li>
       <!-- end portfolio item -->

       <!-- start portfolio-item item -->
       <li class="grid-item wow fadeIn last-paragraph-no-margin" data-wow-delay="0.4s">
        <a href="<?= BASE_URL ?>projects/space-scout/index.php">
         <figure>
          <div class="portfolio-img bg-deep-pink"><img src="<?= BASE_URL ?>projects/home-projects/home-space-scout.png"
            alt="" />
          </div>
          <figcaption>
           <div class="portfolio-hover-main text-left">
            <div class="portfolio-hover-box align-bottom featured-work-thumbs">
             <div class="portfolio-hover-content position-relative last-paragraph-no-margin">
              <div class="bg-black margin-25px-bottom separator-line-horrizontal-medium-light2">
              </div>
              <span
               class="line-height-normal text-white-2 margin-5px-bottom d-block featured-work-title">In Situ</span>
              <p>Location finder</p>
             </div>
            </div>
           </div>
          </figcaption>
         </figure>
        </a>
       </li>
       <!-- end portfolio item -->

       <!-- start portfolio-item item -->
       <li class="grid-item wow fadeIn last-paragraph-no-margin" data-wow-delay="0.4s">
        <a href="<?= BASE_URL ?>projects/musicasa/index.php">
         <figure>
          <div class="portfolio-img bg-deep-pink"><img src="<?= BASE_URL ?>projects/home-projects/home-musicasa.png"
            alt="" />
          </div>
          <figcaption>
           <div class="portfolio-hover-main text-left">
            <div class="portfolio-hover-box align-bottom featured-work-thumbs">
             <div class="portfolio-hover-content position-relative last-paragraph-no-margin">
              <div class="bg-black margin-25px-bottom separator-line-horrizontal-medium-light2">
              </div>
              <span
               class="line-height-normal text-white-2 margin-5px-bottom d-block featured-work-title">Musicasa</span>
              <p>Marketplace connecting emerging musicians with home concerts
              </p>
             </div>
            </div>
           </div>
          </figcaption>
         </figure>
        </a>
       </li>
       <!-- end portfolio item -->

       <!-- start portfolio item -->
       <li class="grid-item wow fadeIn last-paragraph-no-margin" data-wow-delay="0.6s">
        <a href="<?= BASE_URL ?>projects/map-tools/index.php">
         <figure>
          <div class="portfolio-img bg-deep-pink"><img src="<?= BASE_URL ?>projects/home-projects/home-map-tools.png"
            alt="" />
          </div>
          <figcaption>
           <div class="portfolio-hover-main text-left">
            <div class="portfolio-hover-box align-bottom featured-work-thumbs">
             <div class="portfolio-hover-content position-relative last-paragraph-no-margin">
              <div class="bg-black margin-25px-bottom separator-line-horrizontal-medium-light2">
              </div>
              <span class="line-height-normal text-white-2 margin-5px-bottom d-block featured-work-title">Map
               Tools</span>
              <p>Ideal state visualization for satellite imagery visualization
              </p>
             </div>
            </div>
           </div>
          </figcaption>
         </figure>
        </a>
       </li>
       <!-- end portfolio item -->
        
       <!-- start portfolio item -->
       <li class="grid-item wow fadeIn last-paragraph-no-margin" data-wow-delay="0.6s">
        <a href="<?= BASE_URL ?>projects/idd/index.php">
         <figure>
          <div class="portfolio-img bg-deep-pink"><img src="<?= BASE_URL ?>projects/home-projects/home-idd.png"
            alt="" /></div>
          <figcaption>
           <div class="portfolio-hover-main text-left">
            <div class="portfolio-hover-box align-bottom featured-work-thumbs">
             <div class="portfolio-hover-content position-relative last-paragraph-no-margin">
              <div class="bg-black margin-25px-bottom separator-line-horrizontal-medium-light2">
              </div>
              <span class="line-height-normal text-white-2 margin-5px-bottom d-block featured-work-title">IDD</span>
              <p>Incident management platform</p>
             </div>
            </div>
           </div>
          </figcaption>
         </figure>
        </a>
       </li>
       <!-- end portfolio item -->

      </ul>
     </div>
    </div>
   </div>
  </div>
  <!-- end filter content -->
 </section>
  </div>

  <!-- start footer -->
  <?php include_once("includes/global-footer.php"); ?>

  
</body>

</html>