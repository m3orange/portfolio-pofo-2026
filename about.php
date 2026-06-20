<?php require_once('config.php') ?>

<?php
require_once 'db-config.php';

$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);

$stmt = $pdo->query('SELECT * FROM education ORDER BY sort_order ASC');
$education = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>




<?php include ROOT_PATH . 'includes/header.php'; ?>

<body class="about">

    <!-- start header -->
    <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->

    <!-- start parallax hero section -->

    <!-- end parallax hero section -->


    <!-- <div class="floating-link-widget">
    <ul>
        <li>Link 1</li>
        <li>Link 2</li>
    </ul>
</div> -->



<section>
    <div class="container resume-area-grid">
        <div class="item">
                <section id="resume" class="wow fadeIn">
                    <div class="container">
                        <div id="work-experience-list">
                            <!-- Jobs will be injected here -->
                        </div>
                    </div>
                </section>
        </div>

        <div class="item">

        <!-- <section id="resume-2" class="wow fadeIn">
                <div class="container">
                    <div id="education-list">
                    </div>
                </div>
            </section> -->

             <section id="resume-2" class="wow fadeIn">
                <div class="container">
                    <div id="education-list">

<?php foreach ($education as $edu): ?>
    <div class="rsm-item-header">
        <div class="margin-10px-right"><h6><?= $edu['degree'] ?></h6></div>
        <div class="margin-10px-right"><h6><?= $edu['institution'] ?> / <?= $edu['city'] ?></h6></div>
        <div>[<?= $edu['date_start'] ?>-<?= $edu['date_end'] ?>]</div>

    </div>
    <div class="education-details">
        <?= $edu['details'] ?>
    </div>

<?php endforeach; ?>
                            

                        </div><!-- education-list -->
                    </div>
                </div>
            </section>






        </div>
    </div>
</section>












    <?php include ROOT_PATH . 'about/inc-unicorn-and-skills.php'; ?>

    <?php include ROOT_PATH . 'about/inc-engineering-projects.php'; ?>



    <!-- <script>
        async function loadEducation() {
            const res = await fetch('/api/education.php');
            const entries = await res.json();

            const container = document.getElementById('education-list');

            container.innerHTML = entries.map(e => `
                <div class="row rsm-item-header">
                    <div class="col col-12 p-0">
                        <h6>${e.degree}, ${e.field_of_study} / ${e.institution}, ${e.city} / ${e.date_start}–${e.date_end ?? 'Present'}</h6>
                        ${e.details ? `<div class="education-details">${e.details}</div>` : ''}
                    </div>
                </div>
            `).join('');
        }

        loadEducation();
    </script> -->



    <script>
        async function loadWorkExperience() {
            const res = await fetch('/api/work-experience.php');
            const jobs = await res.json();

            const container = document.getElementById('work-experience-list');

            container.innerHTML = jobs.map(job => `
            <div class="row rsm-item-header">
                <div class="col col-12 col-xl-8 col-lg-9 col-md-12 p-0">
                    <h6>${job.company}, ${job.job_title}</h6>
                </div>
                <div class="col col-12 col-xl-4 col-lg-6 col-md-12 p-0 rsm-city-date">
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