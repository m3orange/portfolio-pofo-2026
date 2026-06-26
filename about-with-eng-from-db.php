<?php require_once('config.php') ?>

<?php
require_once 'db-config.php';

$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);

$stmt = $pdo->query('SELECT * FROM engineering_initiatives ORDER BY sort_order ASC');
$engineering_initiatives = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>



<?php include ROOT_PATH . 'includes/header.php'; ?>

<body class="about">
    <?php include ROOT_PATH . 'about/inc-floating-widget-top.php'; ?>
    <!-- start header -->
    <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->

  





    <section id="engineering" class="wow no-padding-top eng-section">

        <!-- start section divider -->
        <section class="section-divider-numbered no-margin-top">
            <div class="big-number" style="color: rgba(255,255,255,0.5);">Ø4</div>
            <div class="text-white">Engineering Initiatives</div>
        </section>
        <!-- end section divider -->

        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-md-2 align-items-center square-text-blocks">

                <!-- Left Block ---->
                <div class="col col-12 col-xl-7 col-lg-6 text-center sm-margin-35px-bottom wow animate__fadeIn"
                    style="visibility: visible; animation-name: fadeIn;">
                    <video autoplay loop muted playsinline class="hero-video-cb">
                        <source src="<?= BASE_URL ?>projects/design-to-code/working-in-vuetify.mp4" type="video/mp4">
                    </video>


                </div>

                <!-- Right Block ---->

                <div class="col col-12 col-xl-5 col-lg-6 padding-six-lr lg-padding-15px-lr text-left text-md-start resume-text"
                    data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                    <h5 class="font-weight-600 header-font text-white"><?= $engineering_initiatives['title'] ?>.</h5>
                        <p><?= $engineering_initiatives['short_description'] ?></p>
                </div>
            </div>
        </div>

    </section>









    <script>
        async function loadWorkExperience() {
            const res = await fetch('/api/work-experience.php');
            const jobs = await res.json();

            const container = document.getElementById('work-experience-list');

            container.innerHTML = jobs.map(job => `
            <div class="row rsm-item-header">
                <div class="col col-12 col-lg-7 col-md-12 p-0">
                    <h6>${job.company}, ${job.job_title}</h6>
                </div>
                <div class="col col-12 col-lg-5 col-md-12 p-0 rsm-city-date">
                    ${job.city} <span class="divider">|</span> ${job.date_start} – ${job.date_end ?? 'Present'}
                </div>
            </div>

            <div class="row rsm-item-details">
                <div class="col col-12">
                    <div class="rsm-item-intro font-weight-500">
                        ${job.intro ?? ''}
                    </div>
                    ${job.bullets && job.bullets.length ? `
                    <div class="rsm-item-bullets">
                        <ul>
                            ${job.bullets.map(b => `<li>${b}</li>`).join('')}
                        </ul>
                    </div>` : ''}
                </div>
            </div>
        `).join('');
        }

        loadWorkExperience();
    </script>

    <!-- start footer -->
    <?php include ROOT_PATH . 'includes/global-footer.php'; ?>

</body>

</html>