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

<div id="anchor-00" class="anchor-wrapper">
    <section id="resume-01" class="wow fadeIn section-with-border-top">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-lg-4 section-divider-numbered-02" style="flex-direction: column; justify-content: flex-start;">
                    <div class="row" style="flex-direction: column;">
                        <div class="big-number">01</div>
                        <div class="big-section-title"><h4>Quick Facts</h4></div>
                    </div>
                </div>

                <div class="col col-12 col-lg-8 col-md-12 column-for-bars p-0">
                    <div class="acc-07" aria-label="Underline reveal editorial accordion demo">
                    <div class="acc-07__wrap">


                        <details class="acc-07__item soft-skills"><!--open-->
                            <summary class="acc-07__q">
                                <span class="start-arrow"><img src="<?= BASE_URL ?>images/resume-facts-opener-arrow.png"></span>
                            I'm passionate about problem solving. What drives me: I'm 100% convinced that EVERYTHING can be designed better.</summary>
                            <div class="acc-07__a">
                                <ul>
                                    <li>Take me into any bathroom and I'll give you a full teardown of what's wrong with it. I can't switch off the "why was it built this way, and why isn't it actually solving the problem?" reflex.</li>
                                    <li>Deeply empathetic to users, and genuinely frustrated when design fails them for no good reason. Whether it's a poorly placed handicapped ramp, a hard to read airport sign that makes someone miss a flight, an onboarding flow that loses anyone who isn't fluent in tech, design can always do better by them and that gap is the thing I can't leave alone.</li>
                                </ul>
                            </div>
                        </details>


                        <details class="acc-07__item soft-skills"><!--open-->
                            <summary class="acc-07__q">
                                <span class="start-arrow"><img src="<?= BASE_URL ?>images/resume-facts-opener-arrow.png"></span>
                                I do my best work, and enjoy the design process the most, when working in teams.</summary>
                            <div class="acc-07__a">
                                <ul>
                                    <li>The best ideas rarely arrive fully formed from one brain. I do my sharpest thinking bouncing off PMs, engineers, and other designers.</li>
                                    <li>I'm a firm believer in leaving egos at the door and structuring a project's team based on the superpowers that each member brings to the table who is best at each of the tasks. The goal is to always set the team for success.</li>
                                </ul>
                            </div>
                        </details>


                        <details class="acc-07__item soft-skills"><!--open-->
                            <summary class="acc-07__q">
                                <span class="start-arrow"><img src="<?= BASE_URL ?>images/resume-facts-opener-arrow.png"></span>
                                 I'm equal parts confident in what I know and can do as a designer, and ok with raising my hand when I don't have sufficient knowledge and need support.</summary>
                            <div class="acc-07__a">
                                <ul>
                                    <li>"I don't know yet, but I know how to find out" is a complete sentence. Knowing where my expertise ends is part of the expertise.</li>
                                </ul>
                            </div>
                        </details>


                        <details class="acc-07__item soft-skills"><!--open-->
                            <summary class="acc-07__q">
                                <span class="start-arrow"><img src="<?= BASE_URL ?>images/resume-facts-opener-arrow.png"></span>
                                I welcome criticism: I survived 5 years of architectural school.</summary>
                            <div class="acc-07__a">
                                <ul>
                                    <li>Public crits at 2am build a thick skin and a good ear — I've learned to hear the note under the noise and separate my ego from the work.</li>
                                    <li>I admit that sometimes I can get stuck with a particular approach and I recognize that I need fresh eyes to help me validate whether that's the right path, or help me understand whether I've missing something in my analysis.</li>
                                </ul>
                            </div>
                        </details>

                        <details class="acc-07__item soft-skills"><!--open-->
                            <summary class="acc-07__q"><span class="start-arrow"><img src="<?= BASE_URL ?>images/resume-facts-opener-arrow.png"></span>
                            I'm fluent in English and Spanish and have basic understanding of French Portuguese.</summary>
                        </details>

                        <details class="acc-07__item soft-skills"><!--open-->
                            <summary class="acc-07__q">
                                <span class="start-arrow"><img src="<?= BASE_URL ?>images/resume-facts-opener-arrow.png"></span>
                                Eternally curious + always learning: love collecting skills.</summary>
                            <div class="acc-07__a">
                                <ul>
                                    <li>Motion, prototyping, a little code, a lot of "how does this actually work?" — my toolkit keeps growing because I can't help poking at things.</li>
                                    <li>New tool, new discipline, new rabbit hole: I treat each one as a souvenir, not a chore.</li>
                                </ul>
                            </div>
                        </details>
                        <details class="acc-07__item soft-skills"><!--open-->
                            <summary class="acc-07__q">
                                <span class="start-arrow"><img src="<?= BASE_URL ?>images/resume-facts-opener-arrow.png"></span>
                                I'm not afraid to speak my mind and I'm proactive in recommending different approaches. </summary>
                            <div class="acc-07__a">
                                <ul>
                                    <li>I'll champion an idea hard and drop it just as fast when someone makes a better case. The goal is the right answer, not my answer.</li>
                                    <li>Design is best done in environments with constant brainstorming and discussions that welcome challenging ideas and design decisions.</li>
                                </ul>
                            </div>
                        </details>
                        <details class="acc-07__item soft-skills"><!--open-->
                            <summary class="acc-07__q">
                                <span class="start-arrow"><img src="<?= BASE_URL ?>images/resume-facts-opener-arrow.png"></span>
                                I'm good at creating engaging presentations. </summary>
                            <div class="acc-07__a">
                                <ul>
                                    <li>I'm particularly good at hunting down for fun metaphors that turn technicalm, boring concepts into easy-to-digest insight.</li>
                                    <li>Give me a dense system diagram and I'll find the one analogy that makes the whole room nod at once.</li>
                                </ul>
                            </div>
                        </details>
                        <details class="acc-07__item soft-skills"><!--open-->
                            <summary class="acc-07__q">
                                <span class="start-arrow"><img src="<?= BASE_URL ?>images/resume-facts-opener-arrow.png"></span>
                                As detailed-oriented as any purist Swiss designer. That said, once "form has followed function", I believe in adding an extra level of fun.</summary>
                            <div class="acc-07__a">
                                <ul>
                                    <li>Grids, spacing, and type hierarchy are non-negotiable: I guarantee I'll notice the 2px nobody else did.</li>
                                    <li>Once the fundamentals are locked, I earn the right to add the delight: the micro-interaction or small surprise that makes people smile.</li>
                                </ul>
                            </div>
                        </details>
                        <details class="acc-07__item soft-skills"><!--open-->
                            <summary class="acc-07__q">
                                <span class="start-arrow"><img src="<?= BASE_URL ?>images/resume-facts-opener-arrow.png"></span>
                                Adapt fast to new technologies and good at moving among different mediums.</summary>
                            <div class="acc-07__a">
                                <ul>
                                    <li>Web, mobile, print, prototype, whiteboard — I switch mediums without losing the thread.</li>
                                    <li>I tend to be fast at mastering new software, which helps the medium not become an obstacle to the proces.</li>
                                </ul>
                            </div>
                        </details>

                    </div>
                    </div> 
                </div>

            </div><!--row-->
        </div>
    </section>
</div>

<style>




</style>

<div id="anchor-01" class="anchor-wrapper">
    <section id="resume-01" class="wow fadeIn section-with-border-top">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-lg-4 section-divider-numbered-02"
                    style="flex-direction: column; justify-content: flex-start;">
                    <div class="row" style="flex-direction: column;">
                        <div class="big-number">02</div>
                        <div class="big-section-title"><h4>Education</h4></div>
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
                             <div class="oops-missed-this-one">
                            <h5 style="margin-bottom: 0px;">Education</h5>
                             </div>                                
                        
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
</div>

<div id="anchor-02" class="anchor-wrapper">
    <section id="resume-02" class="wow fadeIn section-with-border-top">
        <div class="container">
            <div class="row m-0">
                <div class="col col-12 col-lg-4 section-divider-numbered-02"
                    style="flex-direction: column; justify-content: flex-start;">
                    <div class="row" style="flex-direction: column;">
                        <div class="big-number">03</div>
                        <div class="big-section-title">
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
</div>

<div id="anchor-03" class="anchor-wrapper"></div>
    <section id="resume-03" class="wow fadeIn section-with-border-top">
        <div class="container">
            <div class="row m-0">
                <div class="col col-12 col-lg-4 section-divider-numbered-02"
                    style="flex-direction: column; justify-content: flex-start;">
                    <div class="row" style="flex-direction: column;">
                        <div class="big-number">04</div>
                        <div class="big-section-title">
                            <h4>Additional</h4>
                        </div>

                    </div>
                </div>

                <div class="col col-12 col-lg-4">
                        <div id="training-list">
                        <div class="row rsm-item-header">
                            <h5 style="margin-bottom: 0px;">Exhibitions</h5>
                        </div>

                        <div class="education-details row">
                            <div class="col col-12 col-xl-12 col-lg-6 col-md-12">
                                <div class="row rsm-item-header" style="margin-top: 0px!important;">
                                    <div class="col col-12 p-0" style="line-height: 1.7em;">
                                    <h6 style="width: fit-content;">"The Missing Link Gallery at Das Hypothetische"</h6> NYC, October 1999
                                    </div>
                                </div>
                                <div class="row rsm-item-details">
                                    <div class="col col-12">
                                        <div class="rsm-item-bullets">
                                        Collective exhibition by the MFADesign Program at the School of Visual Arts' Westside Gallery, NYC. Exhibited "iNterventiOn" (4'x5', wooden light boxes and shelving, with collected and found objects).
                                        </div>
                                    </div>
                                </div>

                                <div class="row rsm-item-header" style="margin-top: 0px!important;">
                                    <div class="col col-12 p-0" style="display: flex; flex-direction: row;">
                                    <h6 style="width: fit-content;">"Architects in Botello"</h6>  <span class="divider" style="margin: 0 5px;">|</span>  San Juan, August 1997
                                    </div>
                                </div>
                                <div class="row rsm-item-details">
                                    <div class="col col-12">
                                        <div class="rsm-item-bullets">
                                        Part of thirteen architects invited to exhibit artwork in the Galería Botello, in San Juan, Puerto Rico. Exhibited "Espiral" (Spiral), a series of eight digital collages. (5"x7", printed on vellum).
                                        </div>
                                    </div>
                                </div>
                            </div><!--col-->
                        </div>


                    </div><!--#training-list container-->
                </div>

                                <div class="col col-12 col-lg-4">
                        <div id="training-list">
                        <div class="row rsm-item-header">
                            <h5 style="margin-bottom: 0px;">Organizations</h5>
                        </div>
                        <div class="education-details row">
                            <div class="col col-12 col-xl-12 col-lg-6 col-md-12">
                                <div>
                                    <div class="margin-10px-bottom">
                                        <ul style="line-height: 1.5em;">
                                            <li>Code for Puerto Rico (2021)</li>
                                            <li>Founding member of the Young Collectors Group, Museum of Art of Puerto Rico (2005-06).</li>
                                            <li>Collectors VIP Programme in the ARCO Art Fair in Madrid since 2001.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!--col-->

                        </div><!--education-details row-->
                    </div><!--#training-list container-->
                </div>

            </div><!--row-->
        </div>
    </section>
</div>

<div id="anchor-04" class="anchor-wrapper">
    <section id="resume-04" class="wow fadeIn section-with-border-top">
        <div class="container">
            <div class="row m-0">

                <div class="col col-12 col-lg-4 section-divider-numbered-02"
                    style="flex-direction: column; justify-content: flex-start;">
                    <div class="row" style="flex-direction: column;">
                        <div class="big-number">05</div>
                        <div class="big-section-title">
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
</div>

<div id="anchor-05" class="anchor-wrapper">
    <section id="resume-05" class="wow fadeIn section-with-border-top">
        <div class="container">
            <div class="row m-0">

                <div class="col col-12 col-lg-3 section-divider-numbered-02"
                    style="flex-direction: column; justify-content: flex-start;">
                    <div class="row" style="flex-direction: column;">
                        <div class="big-number">06</div>
                        <div class="big-section-title">
                            <div class="col col-12 col-lg-11 col-md-12"><h4>Design Inspiration</h4></div>
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
</div>


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