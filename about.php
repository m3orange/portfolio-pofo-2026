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
<section id="home-hero-opener" class="p-0 full-screen position-relative wow animate__fadeIn" style="height: 1029px; visibility: visible; animation-name: fadeIn; min-height: 658px;">
            <div class="opacity-medium bg-extra-dark-gray z-index-0"></div>
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col col-12 col-xxl-8 col-xl-10 col-lg-11 col-md-11 d-flex justify-content-center flex-column text-left text-md-start"> <!--style="justify-content: space-around!important;"-->



<div class="row padding-10px-all">
<h1 class="lg-w-60 md-w-70 lg-line-height-auto sm-w-100 sm-margin-15px-bottom"> 

<span class="mf-var-01">About</span>
<h5 class="font-weight-400">
Trained in both architecture and graphic design, I have 25+ years of multidisciplinary design experience {print, brand, web}. For the past 12, I have been focused on product design and UX engineering.
</h5>
</div>


                        
                    </div><!-- cols-->
                </div><!-- row-->

            </div>
        </section>
    <!-- end parallax hero section -->


    <div id="floating-link-widget">
    <!-- <div><a href="#">Professional Experience & Education</a></div>
    <div><a href="#">Knowledge & Skills</a></div> -->
        <ul class="nav navbar-nav alt-font font-weight-700">
            <li><a href="#anchor-work" class="inner-link">Professional Experience</a></li>
            <li><a href="#anchor-education" class="inner-link">Education</a></li>
            <li><a href="#knowledge"   class="inner-link">Knowledge & Skills</a></li>
            <li><a href="#engineering" class="inner-link">UX Engineering</a></li>
            <li><a href="#engineering" class="inner-link">Personal Interests</a></li>
        </ul>

</div>



<section>
    <div class="resume-area-grid">
        <div id="anchor-work" class="item">
            <!-- start section divider -->
            <section class="section-divider-numbered">
                <div class="big-number">01</div>
                <div class="">Professional Experience</div>
            </section>
            <!-- end section divider -->
            <div id="resume" class="container">
                <!-- <div class="rsm-section-header">Professional Experience</div> -->
                <div id="work-experience-list">
                    <!-- Jobs will be injected here -->
                </div>
            </div>

        </div>


        <div id="anchor-education"class="item">
            <!-- start section divider -->
            <section class="section-divider-numbered">
                <div class="big-number">02</div>
                <div class="">Education</div>
            </section>
            <!-- end section divider -->
            <div id="education-list" class="container">
                <!-- <div class="rsm-section-header">Education</div> -->
                <?php foreach ($education as $edu): ?>
                    <div class="row rsm-item-header">
                        <span class="margin-10px-right"><h6><?= $edu['degree'] ?>,</h6></span>
                        <span class="margin-10px-right"><h6><?= $edu['institution'] ?> / <?= $edu['city'] ?></h6></span><span class="rsm-city-date">[<?= $edu['date_start'] ?>-<?= $edu['date_end'] ?>]</span>

                    </div>
                    <div class="education-details">
                        <?= $edu['details'] ?>
                    </div>

                <?php endforeach; ?>
                    
            </div><!-- education-list -->
        </div><!-- item-->

    </div><!-- container-->
</section>

    <?php include ROOT_PATH . 'about/inc-unicorn-and-skills.php'; ?>

    <?php include ROOT_PATH . 'about/inc-engineering-projects.php'; ?>


           <section class="fullwidth-slider-01">
        <!-- start section divider -->
        <section class="section-divider-light">
            <div class="container">Personal Interests</div>
        </section>
        <!-- end section divider -->
        <div class="container-fluid" style="padding-right: 0px; padding-left: 0px;">


            <div class="row">


                <div class="col-12 blog-post-content text-center text-md-center"
                    style="padding-right: 0px; padding-left: 0px;">

                    <div class="swiper-full-screen swiper-cb-fullwidth-screens swiper-container white-move"
                        data-slider-options='{ 
                    "loop": true, 
                    "slidesPerView": "1", 
                    "allowTouchMove":true, 
                    "autoplay": false, 
                    "keyboard": { "enabled": true, "onlyInViewport": true }, 
                    "navigation": { "nextEl": ".swiper-button-next", 
                    "prevEl": ".swiper-button-prev" }, 
                    "pagination": { "el": ".swiper-pagination", "clickable": true } }'>

                        <div class="swiper-wrapper">
                            <div class="swiper-slide ">
                                <img class="cb-screens" src="<?= BASE_URL ?>about/inanutshell-no-padd-01.jpg">
                            </div>
                            <div class="swiper-slide ">
                                 <img class="cb-screens" src="<?= BASE_URL ?>about/inanutshell-no-padd-02.jpg">
                            </div>
                        </div>
                        <div
                            class="swiper-pagination swiper-pagination-square swiper-pagination-white swiper-full-screen-pagination">
                        </div>
                        <div class="swiper-button-prev swiper-button-black-highlight"></div>
                        <div class="swiper-button-next swiper-button-black-highlight"></div>

                    </div>
                </div>
            </div>
        </div>
    </section>

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