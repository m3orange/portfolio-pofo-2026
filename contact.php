<?php include_once("config.php"); ?>

<!-- Replit's fixed code from 260524_0947 -->


<?php include ROOT_PATH . 'includes/header.php'; ?>


<body class="earlier-work">

    <!-- start header -->
    <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->

    <!-- start parallax hero section -->
    <section id="home-hero-opener" class="p-0 position-relative h-70 wow animate__fadeIn" style="visibility: visible; "> <!--min-height: 658px;-->
        <div class="opacity-medium bg-black z-index-0"></div>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col col-12 col-xxl-8 col-xl-10 col-lg-11 col-md-11 d-flex justify-content-center flex-column text-left text-md-start"> <!--style="justify-content: space-around!important;"-->
                    <div class="row padding-30px-all">
                        <h2 class="lg-w-60 md-w-70 lg-line-height-auto sm-w-100 sm-margin-15px-bottom"> 
                        <span class="mf-var-01">Let's Connect</span>
                        </h2>
                    </div>
                </div><!-- cols-->
            </div><!-- row-->
        </div>
    </section>
    <!-- end parallax hero section -->





    <section>
        <div class="container">
            <div class="row">
                <div class="col col-12 col-lg-8 offset-lg-2">
                <form id="myForm" action="https://formspree.io/f/xvzjkdqj" method="POST">
                    <div class="row">
                    <div class="col col-12 col-md-6">
                      <div class="fs-field">
                        <label class="fs-label" for="name">Name</label>
                        <input class="fs-input" id="name" name="name" />
                      </div>
                    </div>
                    <div class="col col-12 col-md-6">
                      <div class="fs-field">
                        <label class="fs-label" for="lastName">Last Name</label>
                        <input class="fs-input" id="lastName" name="lastName" />
                      </div>
                    </div>
                    </div>
                    <div class="fs-field">
                      <label class="fs-label" for="email">Email</label>
                      <input class="fs-input" id="email" name="email" required />
                    </div>
                    <div class="fs-field">
                      <label class="fs-label" for="message">Message</label>
                      <textarea class="fs-textarea" id="message" name="message"></textarea>
                      <p class="fs-description">We usually respond within 1-2 business days.</p>
                    </div>
                    <div class="fs-button-group">
                      <button class="g-recaptcha" data-sitekey="6LfYezYtAAAAAOCsBhPv9xc7dAkXOjhF_WZ1BXBh" data-callback='onSubmit' data-action='submit'>Send</button>
                    </div>
                </form>
              </div>
            </div>
        </div>
    </section>

    <!-- start footer -->
    <?php include_once("includes/global-footer.php"); ?>



</body>

</html>

<!-- 
      <div id="my-form"></div>
          <script src="https://www.staticforms.dev/scripts/staticforms.js" defer></script>
          <script>
          document.addEventListener('DOMContentLoaded', function () {
              StaticForms.render(
              document.getElementById('my-form'),
              'sf_be052b3ef5f22c913e981918'
              );
          });
          </script> -->

          