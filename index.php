<?php require_once('config.php') ?>

<?php
require_once 'db-config.php';

$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);

$stmt = $pdo->query('SELECT * FROM strengths ORDER BY sort_order ASC');
$strengths = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>


<?php include ROOT_PATH . 'includes/header.php'; ?>

<body class="home">

    <!-- start header -->
    <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->

<div id="pagetop"></div>
  <!-- end header -->

  <?php include ROOT_PATH . 'home/home-hero-opener-05.php'; ?>

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