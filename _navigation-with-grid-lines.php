<?php require_once( 'config.php' ) ?>


<?php include ROOT_PATH . 'includes/header.php'; ?>

<!-- <include src="includes/linked-files.html"></include> -->

<!-- <script>document.addEventListener("DOMContentLoaded", function () {
            let e = document.getElementsByTagName("include"); for (var t = 0; t < e.length; t++) { let a = e[t]; n(e[t].attributes.src.value, function (e) { a.insertAdjacentHTML("afterend", e), a.remove() }) } function n(e, t) { fetch(e).then(e => e.text()).then(e => t(e)) }
        });
    </script> -->


<body class="admin">

    <!-- start header -->
        <!-- <header>

<div class="container">
                 <div class="row">
            <nav class="navbar navbar-default bootsnav navbar-fixed-top header-light background-transparent white-link navbar-expand-lg">
                <div class="container nav-header-container">

                    <div class="col col-8">
                        <a href="<?= BASE_URL ?>index.php" title="M3Orange.com" class="logo">
                            <img src="<?= BASE_URL ?>images/m3orange-logo-orange.png" data-rjs="<?= BASE_URL ?>images/m3orange-logo-orange@2x.png" class="logo-dark" alt="M3Orange.com">
                            <img src="<?= BASE_URL ?>images/m3orange-logo-white.png" data-rjs="<?= BASE_URL ?>images/m3orange-logo-white@2x.png" class="logo-light default" alt="M3Orange.com">
                        </a>
                    </div>

                    <div class="col col-4">

                        <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse-toggle-1">
                            <ul id="accordion" class="nav navbar-nav no-margin alt-font text-normal" data-in="fadeIn" data-out="fadeOut">
                                <li><a href="<?= BASE_URL ?>_navigation-with-grid-lines.php" title="Home">Grid</a></li>


                            </ul>
                        </div>
                    </div>
                    <div class="col-auto pr-lg-0">
                        <div class="heder-menu-button d-none d-lg-inline-block">
                            <button class="navbar-toggle mobile-toggle right-menu-button" type="button" id="showRightPush">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>
             </div>

             <div class="row bottom-row">
                <div class="col col-8">Hello</div>
                <div class="col col-4">Bye</div>
             </div>
</div>


        </header> -->


    <div class="container-fluid grid-columns">
        <div class="row row-grid-top">
            <div class="col col-8">
                                        <a href="<?= BASE_URL ?>index.php" title="M3Orange.com" class="logo">
                            <img src="<?= BASE_URL ?>images/m3orange-logo-orange.png" data-rjs="<?= BASE_URL ?>images/m3orange-logo-orange@2x.png" class="logo-dark" alt="M3Orange.com">
                            <img src="<?= BASE_URL ?>images/m3orange-logo-white.png" data-rjs="<?= BASE_URL ?>images/m3orange-logo-white@2x.png" class="logo-light default" alt="M3Orange.com">
                        </a>

            </div>
            <div class="col col-3">Lorem Ipsum has been the industry's standard dummy</div>
            <div class="col col-1">Hello</div>

        </div>
        <div class="row row-grid-bottom">
            <!--grid-template-columns: 3fr auto 1fr; - vantor site-->
            <div class="col col-8">Hello</div>
            <div class="col col-4">
  
                            <ul id="accordion" class="nav navbar-nav no-margin alt-font text-normal" data-in="fadeIn" data-out="fadeOut">
                                <li><a href="<?= BASE_URL ?>_navigation-with-grid-lines.php" title="Home">Grid</a></li>
                                <li><a href="<?= BASE_URL ?>_navigation-with-grid-lines.php" title="Home">Grid</a></li>
                                                                <li><a href="<?= BASE_URL ?>_navigation-with-grid-lines.php" title="Home">Grid</a></li>
                                                                                                <li><a href="<?= BASE_URL ?>_navigation-with-grid-lines.php" title="Home">Grid</a></li>

                            </ul>
                    
            </div>
        </div>
    </div>



    <section class="wow fadeIn">



        <div class="container">

        <!-- <?php include_once("description-project-01.php"); ?> -->

            <div class="row mx-0">
                <ul class="portfolio-grid work-3col hover-option2 gutter-large w-100">
                    <li class="grid-sizer"></li>

                    <li class="grid-item grid-item-double  wow fadeInUp" data-wow-delay="0s"> <!--grid-item-double-->
                        <a href="<?= BASE_URL ?>projects/admin/admin-screens-02.png" data-group="two-columns-zoom-animation" class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray"><img src="<?= BASE_URL ?>projects/admin/admin-screens-02.png" class="project-img-gallery" /></div>
                                <figcaption>
                                    <div class="portfolio-hover-main text-center">
                                        <div class="portfolio-hover-box vertical-align-middle">
                                            <div class="portfolio-hover-content position-relative">
                                                <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </li>

                    <li class="grid-item wow fadeInUp" data-wow-delay="0.5s">
                        <a href="<?= BASE_URL ?>projects/admin/admin-screens-01.png" data-group="two-columns-zoom-animation" class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray"><img
                                        src="<?= BASE_URL ?>projects/admin/admin-screens-01.png" class="project-img-gallery" /></div>
                                <figcaption>
                                    <div class="portfolio-hover-main text-center">
                                        <div class="portfolio-hover-box vertical-align-middle">
                                            <div class="portfolio-hover-content position-relative">
                                                <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="grid-item wow fadeInUp" data-wow-delay="0.6s">
                        <a href="<?= BASE_URL ?>projects/admin/admin-screens-03.png" data-group="two-columns-zoom-animation" class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray"><img
                                        src="<?= BASE_URL ?>projects/admin/admin-screens-03.png" class="project-img-gallery" /></div>
                                <figcaption>
                                    <div class="portfolio-hover-main text-center">
                                        <div class="portfolio-hover-box vertical-align-middle">
                                            <div class="portfolio-hover-content position-relative">
                                                <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="grid-item wow fadeInUp" data-wow-delay="0.6s">
                        <a href="<?= BASE_URL ?>projects/admin/admin-screens-04.png" data-group="two-columns-zoom-animation" class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray"><img
                                        src="<?= BASE_URL ?>projects/admin/admin-screens-04.png" class="project-img-gallery" /></div>
                                <figcaption>
                                    <div class="portfolio-hover-main text-center">
                                        <div class="portfolio-hover-box vertical-align-middle">
                                            <div class="portfolio-hover-content position-relative">
                                                <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="grid-item wow fadeInUp" data-wow-delay="0.6s">
                        <a href="<?= BASE_URL ?>projects/admin/admin-screens-05.png" data-group="two-columns-zoom-animation" class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray"><img
                                        src="<?= BASE_URL ?>projects/admin/admin-screens-05.png" class="project-img-gallery" /></div>
                                <figcaption>
                                    <div class="portfolio-hover-main text-center">
                                        <div class="portfolio-hover-box vertical-align-middle">
                                            <div class="portfolio-hover-content position-relative">
                                                <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
    </section>
    <!-- end gallery section -->




    <!-- start footer -->
    <?php include ROOT_PATH . 'includes/global-footer.php'; ?>

</body>

</html>