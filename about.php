<?php require_once('config.php') ?>

<?php include ROOT_PATH . 'includes/header.php'; ?>

<body class="about">

    <!-- start header -->
    <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->

    <!-- start parallax hero section -->
    <section id="home-hero-opener" class="p-0 position-relative wow animate__fadeIn" style="visibility: visible; "> <!--min-height: 658px;-->
        <div class="opacity-medium bg-black z-index-0"></div>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col col-12 col-xxl-8 col-xl-10 col-lg-11 col-md-11 d-flex justify-content-center flex-column text-left text-md-start"> <!--style="justify-content: space-around!important;"-->
                    <div class="row">
                        <h1 class="lg-w-60 md-w-70 lg-line-height-auto sm-w-100 sm-margin-15px-bottom">About</h1>
                    </div>
                </div><!-- cols-->
            </div><!-- row-->
        </div>
    </section>
    <!-- end parallax hero section -->

 <section id="unicorn" class="wow fadeIn section-with-border-top">
  <div class="container">
   <div class="row">


    <div class="col col-12 col-lg-4 section-divider-numbered-02 p-0" style="flex-direction: column; justify-content: space-between!important;">
        <div class="row" style="flex-direction: column;">
            <div class="big-number">01</div>
            <div class="big-section-title margin-50px-bottom">I'm a full-stack designer: I'm fluent in code.</div>
        </div>
            <img src="<?= BASE_URL ?>about/brad-frost-tweet-03.png" style="max-width: 90%;">
    </div>

    <div class="col col-12 col-lg-8">
     <div class="home-strong-areas-tabs tab-content">
      <div id="tab3_sec1" class="tab-pane active show ">
       <div class="col col-12 wow fadeIn" data-wow-delay="0s">
        <div class="unicorn-intro">
            Just like an architect needs to understand engineering principles in load bearing or material mechanics, I needed to understand exactly how my designs would be built, and make sure that my work was rooted in reality. I trained myself extensively in hands-on front-end programming.

            
        </div>
        <div class="full-stack-lifecycle-diagram">
            <img src="<?= BASE_URL ?>about/fs-designer-lifecycle.png">
        </div>
        <div class="row">
            <div class="col col-12 col-lg-6">
                As a result, my skillset range is wider than the average designer (I'm often called a 🦄), and have a more comprehensive insight into what goes on in the development process. More importantly, I'm able to have deeper conversations with engineers without too much getting lost in translation.
            </div>
            <div class="col col-12 col-lg-6">
                Whether it's about asking the right questions about constraints, or trying to negotiate new options that work for everyone, I'm often able to get better outcomes in what design is trying to achieve.
            </div>
        </div>
       </div>
      </div>

     </div>
    
    </div>
   
    </div><!--row-->
  </div>
 </section>


  <section id="toolset" class="wow fadeIn section-with-border-top">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-lg-3 section-divider-numbered-02 p-0" style="flex-direction: column; justify-content: space-between;">
                <div class="row" style="flex-direction: column; column-gap: 20px;">
                    <div class="big-number">02</div>
                    <div class="big-section-title margin-50px-bottom">My Toolkit</div>
                </div>
            </div>

        <div class="col col-12 col-lg-9" style="display: flex;">
            <?php include ROOT_PATH . 'about/knowledge-skills-column.php'; ?>
        </div>

        </div>
    </div>
 </section>

 <div class="ux-eng-bg-color">

  <section id="ux-eng" class="wow fadeIn section-with-border-top">
    <div class="container">
        <div class="row">
            <div class="col col-12 section-divider-numbered-02 p-0" style="flex-direction: column; justify-content: space-between;">
                <div class="row" style="flex-direction: column; column-gap: 20px;">
                    <div class="big-number text-white">03</div>
                    <div class="big-section-title margin-50px-bottom text-white">UX Engineering Initiatives</div>
                </div>
            </div>
        </div>
    </div>
 </section>


    <?php include ROOT_PATH . 'about/inc-engineering-projects.php'; ?>
</div>

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