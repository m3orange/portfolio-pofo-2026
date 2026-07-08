<?php include_once("config.php"); ?>

<!-- Replit's fixed code from 260524_0947 -->


<?php include ROOT_PATH . 'includes/header.php'; ?>


<body class="home">

 <!-- start header -->
 <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
 <!-- end header -->

 <section id="home-hero-opener" class="p-0 full-screen position-relative wow animate__fadeIn"
  style="height: 1029px; visibility: visible; animation-name: fadeIn;">
  <div class="opacity-medium bg-extra-dark-gray z-index-0"></div>
  <div class="container h-100">
   <div class="row h-100">
    <div
     class="col col-12 col-xxl-8 col-xl-10 col-lg-11 col-md-11 d-flex justify-content-center flex-column text-left text-md-start">
     <!--style="justify-content: space-around!important;"-->
     <div class="row padding-30px-all">
      <h1 class="lg-w-60 md-w-70 lg-line-height-auto sm-w-100 sm-margin-15px-bottom">
       I'm a
        <span class="mf-var-02">senior product designer</span> with a
        <span class="mf-var-01">passion for human-centered design</span> and
        <span class="mf-var-03">usability.</span>
      </h1>
     </div>
     <div class="row no-grid-border">
      <div class="col col-md-12 col-lg-8 no-grid-border seeking-a-position">

       <div class="starburst-area">
        <!--padding-10px-lr  padding-20px-top padding-20px-bottom-->
        <img src="<?= BASE_URL ?>images/starburst-100x100.svg" alt="Eames Starburst" />
       </div>
       <h4 class="lg-w-60 md-w-70 lg-line-height-auto sm-w-100" style="margin: 0px!important">
        I’m seeking a position in
        <span class="mf-var-01">product design</span> or
        <span class="mf-var-01">UX engineering.</span>

       </h4>

      </div>

     </div>


    </div><!-- cols-->
   </div><!-- row-->

  </div>
 </section>



 <!-- start accordions style 01 section -->
 <section class="wow fadeIn section-with-border-top">
  <div class="container">
   <div class="row">
    <div class="col col-12 col-lg-8 offset-lg-4">
     <div class="big-section-title-opener">
      Trained in both architecture and graphic design, I have 25+ years of multidisciplinary design experience {print, brand, web}. For the past 12, I have been focused on product design and UX engineering.
     </div>
    </div>
   </div>
  </div>
 </section>


 <section class="wow fadeIn section-with-border-top">
  <div class="container">
   <div class="row">
    <!-- justify-content-center-->
    <div class="col col-12 col-lg-4 section-divider-numbered-02 p-0">

     <div class="big-number">01</div>
     <div class="big-section-title">In a Nutshell...</div>

    </div>
    <div class="col-12 col-lg-8">
     <!-- start accordion -->
     <div class="panel-group accordion-style1" id="accordion-design">
      <!-- start accordion item -->
      <div class="panel">
       <div class="panel-heading">
        <a data-toggle="collapse" href="#design1" class="collapsed" aria-expanded="false">
         <div class="panel-title">
          <h5>My favorite challenges involve turning complex data and workflows into intuitive experiences, always maintaining a relentless focus on real user needs and design heuristics. </h5>
          <span class="float-right"><i class="ti-angle-down"></i></span>
         </div>
        </a>
       </div>
       <div id="design1" class="panel-collapse collapse" aria-expanded="true" role="tablist">
        <!-- Add data-parent="#accordion-design" to have one panel open at a time-->
        <div class="panel-body">
         <h6>
          <ul>
          <li>I have been recently focusing in the development of enterprise-level SaaS platforms: creating seamless experiences across different channels and user types; managing design systems and documentation that leads to adoption and tech debt reduction; devising strategies that ensure scalable and future-proof environments capable of handling growing business demands and technical requirements.
          </li>
          </ul>
         </h6>

        </div>

       </div>
      </div>
      <!-- end accordion item -->
      <!-- start accordion item -->
      <div class="panel">
       <div class="panel-heading">
        <a data-toggle="collapse" href="#design2" class="collapsed" aria-expanded="false">
         <div class="panel-title">
          <h5>I am experienced in the end-to-end UX process.</h5>
          <span class="float-right"><i class="ti-angle-down"></i></span>

         </div>
        </a>
       </div>
       <div id="design2" class="panel-collapse collapse" aria-expanded="false" role="tablist">
        <div class="panel-body">
         <h6>
          <ul>
           <li> Some of the key moments where I'm involved: leading interviews and
            design thinking workshops with cross-functional stakeholders; using
            AI-assisted research and synthesis to drive discovery into ideation;
            prototyping ideas to test their viability with business and engineering,
            among others.</li>

           <li>I think like a detective: I gather insight on business needs, technical
            constraints and users' needs and challenges, and I help teams connect
            the dots that lead to cross-functional alignment into <span class="inline-emphasis-01">defining
             what to
             build, and making sure
             we're building it right.</span></li>
          </ul>
         </h6>
        </div>
       </div>
      </div>
      <!-- end accordion item -->
      <!-- start accordion item -->
      <div class="panel">
       <div class="panel-heading">
        <a data-toggle="collapse" href="#design3" class="collapsed" aria-expanded="false">
         <div class="panel-title">
          <h5>I thrive at the intersection of design and engineering; I'm always wearing
           my front-end designer hat.</h5>
          <span class="float-right"><i class="ti-angle-down"></i></span>
         </div>
        </a>
       </div>
       <div id="design3" class="panel-collapse collapse" aria-expanded="false" role="tablist">
        <div class="panel-body">
         <h6>
          <ul>
           <li>
            Having extensive hands-on coding experience (I'm a front-end designer
            🦄), I excel at identifying risks early. I can act as a translator
            between design and engineering, and help everyone understand each
            other's concerns and challenges without anything getting lost in [tech]
            translation.

           </li>
           <li>
            I’m a fierce advocate of delivering design information –from layouts, to
            specs and PRDs– as close as possible to code, and to the specifics
            frameworks being used. The goal is to reach fidelity and parity faster,
            mitigate tech and design debt, and to reduce feedback loops that cause
            delays and friction.
           </li>
           <li style="font-size: 80%!important; list-style: none;" class="italic-ibm">
            <i>
             p.s. I believe in <strong>&lt;!--handshakes, not handoffs.--&gt;
             </strong> Design and engineering's collaboration should start at the
             beginning of the project, not when Jira tickets are created. It
             should be a constant, symbiotic relationship, where standups and
             critical touchpoints can ensure that challenges are tackled early
             on.
            </i>

           </li>
          </ul>
         </h6>


        </div>
       </div>
      </div>
      <!-- end accordion item -->
     </div>
     <!-- end accordion -->

    </div>
   </div>
  </div>
 </section>
 <!-- end accordions style 01 section -->

 <section class="wow fadeIn section-with-border-top">
  <div class="container">
   <div class="row">
    <!-- justify-content-center-->
    <div class="col col-12 col-lg-4 section-divider-numbered-02 p-0">

     <div class="big-number">02</div>
     <div class="big-section-title">In a Nutshell...</div>


     <div class="row justify-content-center home-strong-areas-tabs">
      <div class="col col-12 col-xl-11 col-sm-11 p-0 text-left tab-style3" id="animated-tab1">
        <!-- start tab navigation -->
        <ul class="nav nav-tabs text-small font-weight-600 justify-content-left flex-column flex-md-row">
            <li class="nav-item"><a href="#tab3_sec1" data-toggle="tab" class="nav-link active">Where I Excel At</a></li>
            <li class="nav-item"><a href="#tab3_sec2" data-toggle="tab" class="nav-link">How I Work to Get There</a></li>
        </ul>
        <!-- end tab navigation -->
      </div>
     </div>


    </div>
    <div class="col col-12 col-lg-8">




     <!-- start tab content -->
     <div class="home-strong-areas-tabs tab-content">


      <!-- start tab content -->
      <div id="tab3_sec1" class="tab-pane fade in active show ">
       <div class="col col-12 wow fadeIn" data-wow-delay="0s">






                <div class="row">


<?php include ROOT_PATH . 'home/home-strong-areas-cards.php'; ?>
<?php include ROOT_PATH . 'home/home-strong-areas-cards.php'; ?>
<?php include ROOT_PATH . 'home/home-strong-areas-cards-02.php'; ?>
<?php include ROOT_PATH . 'home/home-strong-areas-cards-02.php'; ?>

                </div>
<style>
  .card-grid {
  display: grid;
    grid-template-rows: 300px 300px;
   grid-template-columns: 300px 300px;

  gap: 20px;
  padding: 20px;
}

</style>


       </div>
      </div>
      <!-- end tab content -->
      <!-- start tab content -->
      <div id="tab3_sec2" class="tab-pane show ">
       <div class="row justify-content-center resume-text">
        <div class="col-12 last-paragraph-no-margin">

         <h6>Areas of Knowledge</h6>

         <h6 class="category">Areas in which I have experience</h6>
         <div class="category"><?php include ROOT_PATH . 'about/inc-skills-arrow.php'; ?>Online</div>
         <ul>
            <li>Web and mobile app development, responsive design</li>
            <li>Accessibility, web standards, SEO optimization</li>
            <li>Ad banner and Google keyword campaigns</li>
            <li>Shopping platforms and payment gateways</li>
            <li>CRM platforms & Content Management Systems</li>
            <li>Social media and email marketing campaigns</li>
            <li>Single page apps (SPAs) and frameworks such as Vue/Vuetify, React, ShadCDN, etc.</li>
         </ul>


        </div>
       </div>
      </div>
      <!-- end tab content -->


     </div>
     <!-- end tab content -->




    </div>
   </div>
  </div>
 </section>

 <!-- start portfolio section --- portfolio-full-width-masonry-overlay ----->
 <?php include ROOT_PATH . 'includes/home-project-grid.php'; ?>
 <!-- end portfolio section --- portfolio-full-width-masonry-overlay ----->


 <!-- start footer -->
 <?php include_once("includes/global-footer.php"); ?>



</body>

</html>