<?php require_once('config.php') ?>

<?php include ROOT_PATH . 'includes/header.php'; ?>

<body class="about">

    <!-- start header -->
    <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->

 <section id="home-hero-opener" class="p-0 position-relative wow color-around-svg">

        <div class="container h-100 hero-statement">
          <div class="row h-100"> <!-- m-0 p-0-->

                <div class="col col-12 col-md-7 d-flex flex-column"> <!--text-left text-md-start justify-content-center -->
                    <div class="breadcrumb">Technical Knowledge</div>
                    <h1><span class="hero-emphasis-orange">I'm fluent in code.</span></h1>
                </div>
                <div class="col col-12 col-md-5 d-flex flex-column"> <!--text-left text-md-start justify-content-center -->
                      <img src="<?= BASE_URL ?>about/brad-frost-tweet-03.png" style="max-width: 90%;">
                </div>

          </div>
        </div>

  </section>

  <style>

    h1{ color: white;}


.about .video-background-container {
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
    display: flex;
    /* align-items: flex-end; */
    /* justify-content: center; */
}

.about .hero-statement .row{
    display: flex !important;
    flex-direction: row !important;
    padding: 80px 0 0 0;
}

.about .hero-statement .col{
    border: 1px solid rgba(255,255,255,0.2);
}

.about #home-hero-opener{
    background-repeat: no-repeat !important;
}
.breadcrumb{
    font-size: 14px;
    text-transform: uppercase;
    color: rgba(255,255,255,0.7);
    padding: 0px;
    margin: 0 0 40px 0;
}

/*

.row-for-hero-statement{border: 1px solid yellow;}
#home-hero-opener .container{border: 1px solid green;}

*/

  </style>

 <section id="unicorn" class="wow fadeIn section-with-border-top">
  <div class="container">
   <div class="row">


    <div class="col col-12 col-lg-4 section-divider-numbered-02" style="flex-direction: column; justify-content: space-between!important;">
        <div class="row" style="flex-direction: column;">
            <div class="big-number">01</div>
            <div class="big-section-title"><h4>I'm a full-stack designer.</h4></div>
        </div>
            <!-- <img src="<?= BASE_URL ?>about/brad-frost-tweet-03.png" style="max-width: 90%;"> -->
    </div>

    <div class="col col-12 col-lg-8">
     <div class="home-strong-areas-tabs tab-content">
      <div id="tab3_sec1" class="tab-pane active show">
       <div class="col col-12 p-0 wow fadeIn" data-wow-delay="0s">
        <div class="unicorn-intro">
            Just like an architect needs to understand engineering principles in load bearing or material mechanics, I needed to understand exactly how my designs would be built, and make sure that my work was rooted in reality. I trained myself extensively in hands-on front-end programming.
        </div>
        <div class="full-stack-lifecycle-diagram">
            <img src="<?= BASE_URL ?>about/fs-designer-lifecycle-rev.png">
        </div>
        <div class="row">
            <div class="col col-12 col-lg-8" style="padding-top:10px;">
                <p style="margin-bottom: 15px; font-size: 20px;">As a result, my skillset range is wider than the average designer (I'm often called a 🦄), and have a more comprehensive insight into what goes on in the development process. More importantly, I'm able to have deeper conversations with engineers without too much getting lost in translation.</p>
                <p style="margin-bottom: 15px; font-size: 20px;">Whether it's about asking the right questions about constraints, or trying to negotiate new options that work for everyone, I'm often able to get better outcomes in what our design team is trying to achieve.</p>
            </div>
            <div class="col col-12 col-lg-4">
                <div class="i-built-this-website">
                    <p>I coded this website myself. I used an existing template and built over it using the this stack: PHP, CSS, Javascript, Bootstrap, SQL with PHPMyAdmin & Strapi</p>
                </div>
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
                <div class="row p-0" style="flex-direction: column; column-gap: 20px; margin-left: 0px; margin-right: 0px;">
                    <div class="big-number">02</div>
                    <div class="big-section-title">
                        <h4>My Toolkit</h4>
                        <!-- <h6>Add Statemment - Nam metus dolor, facilisis nec commodo vitae, dignissim placerat sapien. Aliquam ac bibendum turpis. Donec vel pharetra tellus, facilisis egestas dolor. Fusce bibendum felis ut tempor blandit. Sed sagittis venenatis dui id semper. Suspendisse nec blandit lorem. Nam a lacus pretium, lacinia nunc non, dignissim ligula.</h6> -->
                    </div>

                    <!-- <img src="<?= BASE_URL ?>about/uxe-venn-diagram.png"> -->
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
                <div class="row" style="flex-direction: column; column-gap: 20px; margin-left: 0px; margin-right: 0px;">
                    <div class="big-number text-white">03</div>
                    <div class="big-section-title text-white">
                        <h4 class="text-white">Engineering Explorations</h4></div>
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