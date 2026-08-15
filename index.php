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
                    <?php include ROOT_PATH . 'home/home-strong-areas-cards.php'; ?>
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
  <?php include ROOT_PATH . 'home/home-project-grid.php'; ?>
  </div>

  <!-- start footer -->
  <?php include_once("includes/global-footer.php"); ?>

  
</body>

</html>