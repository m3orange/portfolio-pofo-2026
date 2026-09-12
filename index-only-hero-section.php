<!-- 260908_2111 - Index in current local repo that broke. -->


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
  <section id="home-hero-opener" class="p-0 full-screen position-relative wow color-around-svg"
    style="visibility: visible; ">
    <div class="video-background-container">
      <div class="video-background-content">
        <div class="container h-100">
          <div class="row h-100 m-0 p-0 row-for-hero-statement">
            <div class="col col-12 d-flex justify-content-center flex-column text-left text-md-start">
              <div class="hero-statement">
                <div class="col col-10 sm-margin-20px-bottom">

                  <h1>I'm a senior product designer with a passion for <span class="hero-emphasis-orange">human-centered
                      design, technology and usability.</span> I'm seeking a position in <span
                      class="hero-emphasis-orange">product design or UX engineering.</span></h1>
                </div>
              </div>
            </div>`
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

    <div class="home-big-m">
      <img class="word-01" src="<?= BASE_URL ?>images/munoz-logo-symbol-only-gray.svg" />
    </div>

     <?php include ROOT_PATH . 'home/home-meshic-animation-01.php'; ?>

  </section><!--home-hero-opener-->

 
  <div class="floating-card"></div>

  <div class="glass"></div>

  <style>

    .floating-card, .glass{
      z-index: 1000;  
      width: 400px;
      height: 800px;
      position: fixed;
      top: 20%
    }

      .floating-card{left: 10%;}

  .glass{right: 10%;}

  .floating-card{
      border-radius: 20px;
      /* other styles */
      background: rgba(39, 39, 39, 0.1);
      backdrop-filter: blur(60px);
      /* fallback for old browsers */
      -webkit-backdrop-filter: blur(60px);
      border: 2px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.25);
  }



      .glass {
        background: rgba(20, 25, 40, 0.85);
        border: 1px solid var(--border-default);
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-md);

        box-shadow:  0 10px 30px rgba(0, 0, 0, 0.35);
        
      }

        @supports (backdrop-filter: blur(10px)) {
          .glass {
            background: var(--bg-panel);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
          }
        }
  </style>



  <!-- start footer -->
  <?php include_once("includes/global-footer.php"); ?>


</body>

</html>