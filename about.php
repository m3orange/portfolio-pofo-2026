<?php require_once('config.php') ?>


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

    <?php include ROOT_PATH . 'about/inc-education-listings.php'; ?>

    <section id="resume" class="wow fadeIn">
        <div class="container">
            <div id="work-experience-list">
                <!-- Jobs will be injected here -->
            </div>
        </div>
    </section>

    <?php include ROOT_PATH . 'about/inc-unicorn-and-skills.php'; ?>

    <?php include ROOT_PATH . 'about/inc-engineering-projects.php'; ?>



    <section class="fullwidth-slider-01">
        <!-- start section divider -->
        <section class="section-divider-light">
            <div class="container">Stakeholder Presentation [Partial]</div>
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
                            <div class="swiper-slide "><img class="cb-screens"
                                    src="<?= BASE_URL ?>projects/admin/admin-presentation-01.png"></div>
                            <div class="swiper-slide "><img class="cb-screens"
                                    src="<?= BASE_URL ?>projects/admin/admin-presentation-02.png"></div>
                            <div class="swiper-slide "><img class="cb-screens"
                                    src="<?= BASE_URL ?>projects/admin/admin-presentation-03.png"></div>
                            <div class="swiper-slide "><img class="cb-screens"
                                    src="<?= BASE_URL ?>projects/admin/admin-presentation-04.png"></div>
                            <div class="swiper-slide "><img class="cb-screens"
                                    src="<?= BASE_URL ?>projects/admin/admin-presentation-05.png"></div>
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

    <script>
        async function loadWorkExperience() {
            const res = await fetch('/api/work-experience.php');
            const jobs = await res.json();

            const container = document.getElementById('work-experience-list');

            container.innerHTML = jobs.map(job => `
            <div class="row rsm-item-header">
                <div class="col col-12 col-xl-8 col-lg-12 p-0">
                    <h6>${job.company}, ${job.job_title}</h6>
                </div>
                <div class="col col-12 col-xl-4 col-lg-12 p-0 rsm-city-date">
                    ${job.city} <span class="divider">|</span> ${job.date_start} – ${job.date_end ?? 'Present'}
                </div>
            </div>

            <div class="row rsm-item-details">
                <div class="col col-12 col-xl-9 col-md-12">
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