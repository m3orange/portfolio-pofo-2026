<?php include_once("config.php"); ?>

<!-- Replit's fixed code from 260524_0947 -->


<?php include ROOT_PATH . 'includes/header.php'; ?>


<body class="home">

    <!-- start header -->
    <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->

    <section id="home-hero-opener" class="p-0 full-screen position-relative wow animate__fadeIn"
        style="height: 100vh; visibility: visible; animation-name: fadeIn;">
        <div class="opacity-medium bg-extra-dark-gray z-index-0"></div>
        <div class="container h-100">
            <div class="row h-100">
                <div
                    class="col col-12 col-xxl-8 col-xl-10 col-lg-11 col-md-11 d-flex flex-column text-left text-md-start justify-content-center">
                    <!--style="justify-content: space-evenly;"-->



                    <div class="row padding-10px-all">
                        <h1 class="lg-w-60 md-w-70 lg-line-height-auto sm-w-100 sm-margin-15px-bottom">
                            I'm a senior
                            <span class="mf-var-02">product designer</span> with a
                            <span class="mf-var-01">passion for human-centered design</span> and
                            <span class="mf-var-03">usability.</span>
                        </h1>
                        <h5 class="font-weight-400">
                            Trained in both architecture and graphic design, I have 25+ years of multidisciplinary
                            design experience {print, brand, web}. For the past 12, I have been focused on UX/UI.
                            <!-- <sup>1</sup> -->
                        </h5>

                    </div>


                    <div class="row no-grid-border">
                        <div class="col col-12 col-xl-12 col-lg-8 no-grid-border seeking-a-position">

                                        <div class="starburst-area"> <!--padding-10px-lr  padding-20px-top padding-20px-bottom-->
                <img src="<?= BASE_URL ?>images/starburst-100x100.svg" alt="Eames Starburst"/>
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



        <!-- <div class="starburst-area">

            <div class="starburst">
            <img src="<?= BASE_URL ?>images/starburst-100x100.svg" alt="Eames Starburst"/>
            </div> 
        </div> -->


    </section>



    <section id="home-projects-grid-02" class="wow fadeIn magnific-home-gallery">

        <!-- start filter content -->
        <div class="container-fluid padding-five-lr md-padding-30px-lr">
            <div class="row">
                <div class="col-12 text-center margin-50px-bottom md-margin-50px-bottom sm-margin-30px-bottom">
                    <h4 class=" text-extra-dark-gray margin-15px-bottom alt-text font-weight-600"
                        style="color: #FFF!important;">Archived Work</h4>
                </div>
                <div class="col-12 px-3 p-md-0">
                    <div class="filter-content overflow-hidden">
                        <ul class="portfolio-grid work-3col hover-option2 gutter-medium">
                            <li class="grid-sizer"></li>

                            <li class="grid-item wow last-paragraph-no-margin" data-wow-delay="0s">
                                <a href="javascript:void(0);" class="project-gallery-trigger" data-collection="c4pr">
                                    <img src="<?= BASE_URL ?>projects-archived/c4pr/thumb.jpg" />
                                </a>
                            </li>

                            <li class="grid-item wow last-paragraph-no-margin" data-wow-delay="0s">
                                <a href="javascript:void(0);" class="project-gallery-trigger"
                                    data-collection="puracepa">
                                    <img src="<?= BASE_URL ?>projects-archived/puracepa/thumb.jpg" />
                                </a>
                            </li>


                            <li class="grid-item wow last-paragraph-no-margin" data-wow-delay="0s">
                                <a href="javascript:void(0);" class="project-gallery-trigger"
                                    data-collection="v2abrochure">
                                    <img src="<?= BASE_URL ?>projects-archived/v2a-brochure/thumb.jpg" />
                                </a>
                            </li>

                            <li class="grid-item wow last-paragraph-no-margin" data-wow-delay="0s">
                                <a href="javascript:void(0);" class="project-gallery-trigger" data-collection="koru">
                                    <img src="<?= BASE_URL ?>projects-archived/koru/thumb.jpg" />
                                </a>
                            </li>

                            <li class="grid-item wow last-paragraph-no-margin" data-wow-delay="0s">
                                <a href="javascript:void(0);" class="project-gallery-trigger" data-collection="akcsos">
                                    <img src="<?= BASE_URL ?>projects-archived/akc-sos/thumb.jpg" />
                                </a>
                            </li>


                            <li class="grid-item wow last-paragraph-no-margin" data-wow-delay="0s">
                                <a href="javascript:void(0);" class="project-gallery-trigger" data-collection="ted">
                                    <img src="<?= BASE_URL ?>projects-archived/ted/thumb.jpg" />
                                </a>
                            </li>

                            <!-- <li class="grid-item wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                                <a href="javascript:void(0);" class="project-gallery-trigger" data-collection="pmmexh">
                                    <img src="<?= BASE_URL ?>projects-archived/pmmexh/thumb.jpg"/>
                                </a>
                            </li> -->

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end filter content -->
    </section>



    <!-- start footer -->
    <?php include_once("includes/global-footer.php"); ?>

    <!-- Project galleries — runs after jQuery and Magnific Popup are loaded by the footer -->
    <script type="text/javascript">
        (function ($) {
            var collections = {
                c4pr: [
                    { src: '<?= BASE_URL ?>projects-archived/c4pr/01.jpg', },
                    { src: '<?= BASE_URL ?>projects-archived/c4pr/02.jpg', },
                    { src: '<?= BASE_URL ?>projects-archived/c4pr/03.jpg', },
                    { src: '<?= BASE_URL ?>projects-archived/c4pr/04.jpg', }
                ],
                puracepa: [
                    { src: '<?= BASE_URL ?>projects-archived/puracepa/01.jpg', },
                    { src: '<?= BASE_URL ?>projects-archived/puracepa/02.jpg', },
                    { src: '<?= BASE_URL ?>projects-archived/puracepa/03.jpg', },
                    { src: '<?= BASE_URL ?>projects-archived/puracepa/04.jpg', }
                ],
                akcsos: [
                    { src: '<?= BASE_URL ?>projects-archived/akc-sos/01.jpg', },
                    { src: '<?= BASE_URL ?>projects-archived/akc-sos/02.jpg', },
                    { src: '<?= BASE_URL ?>projects-archived/akc-sos/03.jpg', }
                ],

                koru: [
                    { src: '<?= BASE_URL ?>projects-archived/koru/01.png', },
                    { src: '<?= BASE_URL ?>projects-archived/koru/02.png', },
                ],

                v2abrochure: [
                    { src: '<?= BASE_URL ?>projects-archived/v2a-brochure/01.jpg', },
                    { src: '<?= BASE_URL ?>projects-archived/v2a-brochure/02.jpg', },
                    { src: '<?= BASE_URL ?>projects-archived/v2a-brochure/03.jpg', },
                    { src: '<?= BASE_URL ?>projects-archived/v2a-brochure/04.jpg', }
                ],

                ted: [
                    { src: '<?= BASE_URL ?>projects-archived/ted/01.png', },
                    { src: '<?= BASE_URL ?>projects-archived/ted/02.png', },
                    { src: '<?= BASE_URL ?>projects-archived/ted/03.png', },
                    { src: '<?= BASE_URL ?>projects-archived/ted/04.png', }
                ],


                // pmmexh: [
                //     { src: '<?= BASE_URL ?>projects-archived/pmmexh/01.jpg', },
                //     { src: '<?= BASE_URL ?>projects-archived/pmmexh/02.jpg', },
                //     { src: '<?= BASE_URL ?>projects-archived/pmmexh/03.jpg', },
                //     { src: '<?= BASE_URL ?>projects-archived/pmmexh/04.jpg', }
                // ],
            };

            $(document).ready(function () {
                $('.project-gallery-trigger').on('click', function () {
                    var key = $(this).data('collection');
                    var items = $.map(collections[key], function (img) {
                        return { src: img.src, title: img.title, type: 'image' };
                    });
                    $.magnificPopup.open({
                        items: items,
                        type: 'image',
                        gallery: { enabled: true },
                        image: {
                            titleSrc: function (item) {
                                return item.data.title;
                            }
                        }
                    });
                });
            });
        })(jQuery);
    </script>

</body>

</html>