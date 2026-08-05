<?php require_once('config.php') ?>

<?php
require_once 'db-config.php';

$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);

$stmt = $pdo->query('SELECT * FROM education ORDER BY sort_order ASC');
$education = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>



<?php include ROOT_PATH . 'includes/header.php'; ?>

<body class="resume">
    <!-- start header -->
    <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->




    <section id="home-hero-opener" class="position-relative p-0 wow" style="visibility: visible; ">
        <!-- <div class="opacity-medium bg-black z-index-0"></div> -->
        <div class="container h-100">
            <div class="row h-100 m-0 p-0 tweaks-resume">
                <div class="col col-12 col-lg-7 col-md-12 d-flex justify-content-center flex-column text-left text-md-start">
                    <div class="home-hero-text-block">
                        <div class="big-intro-text">
                            <h1 class="lg-w-60 md-w-70 lg-line-height-auto sm-w-100 sm-margin-15px-bottom">Résumé</h1>
                        </div><!--big-intro-text-->
                    </div>
                </div><!-- cols-->
                <!-- <div class="col col-12 col-lg-5 col-md-12 p-0 m-0 profile-pic-area"><img src="<?= BASE_URL ?>images/profile-pics/mmunoz-profile-bw-alpha.png"></div> -->
            </div><!-- row-->
        </div>

        <div class="profile-pic-area-position">
            <div class="profile-pic z-index-10 ">
                <img src="<?= BASE_URL ?>images/profile-pics/mmunoz-profile-bw-alpha-flipped.png">
            </div>

            <div class="color-backdrop z-index-0"></div>
        </div>

    </section>








    <section id="resume-01" class="wow fadeIn section-with-border-top">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-lg-4 section-divider-numbered-02"
                    style="flex-direction: column; justify-content: flex-start;">
                    <div class="row m-0" style="flex-direction: column;">
                        <div class="big-number">01</div>
                        <div class="big-section-title margin-50px-bottom"><h4>Education</h4></div>
                    </div>
                        <div class="row">
                            <div class="col col-12 col-md-8" style="padding-left: 5px; padding-right: 5px;">
                                <div class="button-area-various">
                                    <div class="btn-view-website-area">
                                        <a href="<?= BASE_URL ?>about.php#toolset" target="_blank">Skills & Software
                                            Fluency</a>
                                        <!-- <div class="dark-version btn btn-to-atlas-ds-page"></div> -->
                                        <div class="btn-view-website">
                                            <img src="<?= BASE_URL ?>images/arrow-view-website-black.svg">
                                        </div>
                                    </div>
                                    <div class="btn-view-website-area">
                                        <a href="<?= BASE_URL ?>about.php#unicorn" target="_blank">View UX Engineering
                                            Knowledge</a>
                                        <!-- <div class="dark-version btn btn-to-atlas-ds-page"></div> -->
                                        <div class="btn-view-website">
                                            <img src="http://localhost:8000/images/arrow-view-website-black.svg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--row-->

                </div>

                <div class="col col-12 col-lg-8">
                             
                                <h5 style="margin-bottom: 0px;">Education</h5>
                        
                    <div id="education-list">
                        <?php foreach ($education as $edu): ?>
                            <div class="row rsm-item-header">
                                <span class="margin-10px-right">
                                    <h6><?= $edu['degree'] ?>,</h6></span>
                                    <span class="margin-10px-right"><h6><?= $edu['institution'] ?> / <?= $edu['city'] ?></h6></span>
                                    <span class="rsm-city-date">[<?= $edu['date_start'] ?>-<?= $edu['date_end'] ?>]</span>

                            </div>
                            <div class="education-details">
                                <?= $edu['details'] ?>
                            </div>

                        <?php endforeach; ?>

                    </div><!-- education-list -->

                    <div id="training-list">
                        <div class="row rsm-item-header">

                                <h5 style="margin-bottom: 0px;">Ongoing Training & Certificates</h5>


                        </div>
                        <div class="education-details row">
                            <div class="col col-12 col-xl-12 col-lg-6 col-md-12">
                                <div class="font-weight-500 margin-10px-bottom">
                                    <p>IDEO, Nielsen Norman, Interaction Design Foundation [Ongoing].<br>Recent courses:
                                    </p>
                                </div>
                                <div>
                                    <div class="margin-10px-bottom">
                                        <ul style="line-height: 1.5em;">
                                            <li>GIS, Mapping, and Spatial Analysis Certificate [U. of Toronto]</li>
                                            <li>10 Usability Heuristics from Theory to Practice [NN/g]</li>
                                            <li>AI x Design Thinking Workshop Series [IDEO]</li>
                                            <li>Prototyping with AI [IDEO]</li>
                                            <li>Accessible and Inclusive Design Patterns [IxDF]</li>
                                        </ul>
                                    </div>

                                </div>
                            </div><!--col-->

                            <div class="col col-12 col-xl-12 col-lg-6 col-md-12">
                                <div class="font-weight-500 margin-10px-bottom">Techstars Music Accelerator Program
                                </div>
                                <div class="font-weight-500 margin-10px-bottom">Foundations in Human Centered Design,
                                    SeriouslyCreative</div>
                                <div class="font-weight-500 margin-10px-bottom">VML Digital Training and Activation
                                    Program, VML Kansas City</div>
                            </div><!--col-->
                        </div><!--education-details row-->
                    </div><!--#training-list container-->
                </div>

            </div><!--row-->
        </div>
    </section>


    <section id="resume-02" class="wow fadeIn section-with-border-top">
        <div class="container">
            <div class="row m-0">
                <div class="col col-12 col-lg-4 section-divider-numbered-02"
                    style="flex-direction: column; justify-content: flex-start;">
                    <div class="row m-0" style="flex-direction: column;">
                        <div class="big-number">02</div>
                        <div class="big-section-title margin-50px-bottom">
                            <h4>Professional Experience</h4>
                        </div>

                    </div>
                </div>

                <div class="col col-12 col-lg-8">
                    <div id="work-experience-list">
                        <!-- Jobs will be injected here -->
                    </div>

                </div>

            </div><!--row-->
        </div>
    </section>

    <section id="resume-0e" class="wow fadeIn section-with-border-top">
        <div class="container">
            <div class="row m-0">

                <div class="col col-12 col-lg-4 section-divider-numbered-02"
                    style="flex-direction: column; justify-content: flex-start;">
                    <div class="row m-0" style="flex-direction: column;">
                        <div class="big-number">03</div>
                        <div class="big-section-title margin-50px-bottom">
                            <div class="col col-12 col-lg-11 col-md-12"><h4>Brands & Companies I Have Worked With</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col col-12 col-lg-8">
                    <img src="<?= BASE_URL ?>images/banrds-and-companies.png">
                </div>

            </div><!--row-->
        </div>
    </section>


    <section id="resume-04" class="wow fadeIn section-with-border-top">
        <div class="container">
            <div class="row m-0">

                <div class="col col-12 col-lg-3 section-divider-numbered-02 p-0"
                    style="flex-direction: column; justify-content: flex-start;">
                    <div class="row" style="flex-direction: column;">
                        <div class="big-number">04</div>
                        <div class="big-section-title margin-50px-bottom">
                            <h4>Design Inspiration</h4>
                        </div>
                    </div>
                </div>

                <div class="col col-12 col-lg-9">
                    <div class="container-fluid" style="padding-right: 0px; padding-left: 0px;">
                        <div class="row" style="justify-content: flex-end;">
                            <div class="btn-swipe-sides"><img src="<?= BASE_URL ?>images/swipe-btn-black.svg"></div>
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
                                            <img class="cb-screens"
                                                src="<?= BASE_URL ?>about/inanutshell-no-padd-01.jpg">
                                        </div>
                                        <div class="swiper-slide ">
                                            <img class="cb-screens"
                                                src="<?= BASE_URL ?>about/inanutshell-no-padd-02.jpg">
                                        </div>
                                    </div>
                                    <div
                                        class="swiper-pagination swiper-pagination-round swiper-pagination-black swiper-full-screen-pagination">
                                    </div>
                                    <div class="swiper-button-prev swiper-button-black-highlight"></div>
                                    <div class="swiper-button-next swiper-button-black-highlight"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!--row-->
        </div>
    </section>



    <script>
        async function loadWorkExperience() {
            const res = await fetch('/api/work-experience.php');
            const jobs = await res.json();

            const container = document.getElementById('work-experience-list');

            container.innerHTML = jobs.map(job => `
            <div class="row rsm-item-header">
                <div class="col col-12 col-xl-7 col-lg-12 col-md-7 col-md-12 p-0">
                    <h6>${job.company}, ${job.job_title}</h6>
                </div>
                <div class="col col-12 col-xl-5 col-lg-12 col-md-5 p-0 rsm-city-date">
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