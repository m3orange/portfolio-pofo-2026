<?php include_once("config.php"); ?>

<!-- Replit's fixed code from 260524_0947 -->


<?php include ROOT_PATH . 'includes/header.php'; ?>


<body class="home">

    <!-- start header -->
    <?php include ROOT_PATH . 'includes/global-nav-half-panel.php'; ?>
    <!-- end header -->

    <section id="home-hero-opener" class="p-0 full-screen position-relative wow animate__fadeIn" style="height: 1029px; visibility: visible; animation-name: fadeIn;">
            <div class="opacity-medium bg-extra-dark-gray z-index-0"></div>
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col col-12 col-xxl-8 col-xl-10 col-lg-11 col-md-11 d-flex justify-content-center flex-column text-left text-md-start">
                        <div>
                        <h1 class="lg-w-60 md-w-70 lg-line-height-auto sm-w-100 sm-margin-15px-bottom"> I'm a senior product designer with a passion for human-centered design and usability.</h1>
                        <h3>I'm trained in both architecture and graphic design, and have over 20 years of experience working in UX/UI.</h3>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    <!-- start accordions style 01 section -->
    <section id="home-text-intro" class="wow fadeIn">
        <div class="container">
            <div class="row"> <!-- justify-content-center-->
                <div class="col-12 col-lg-8">
                    <!-- start accordion -->
                    <div class="panel-group accordion-style1" id="accordion-design">
                        <!-- start accordion item -->
                        <div class="panel">
                            <div class="panel-heading">
                                <a data-toggle="collapse" href="#design1" class="collapsed" aria-expanded="false">
                                    <div class="panel-title">
                                        <h5> My favorite challenges involve turning complex information and workflows into intuitive experiences, always maintaining a relentless focus on real user needs. </h5>
                                        <span class="float-right"><i class="ti-angle-down"></i></span>
                                    </div>
                                </a>
                            </div>
                            <div id="design1" class="panel-collapse collapse" aria-expanded="true" role="tablist" >
                            <!-- Add data-parent="#accordion-design" to have one panel open at a time-->
                                <div class="panel-body">
                                <h6>
                                    <ul>
                                        <li>I have been recently focusing in developing SaaS platforms: creating seamless experiences across different channels and user types; managing design systems and documentation that leads to adoption and tech debt reduction; devising strategies that ensure scalable and future-proof environments capable of handling growing business demands and technical requirements.
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
                                            <li> I’m involved in: leading interviews and design thinking workshops with stakeholders; using AI-assisted research and synthesis to help drive discovery into ideation; prototyping ideas and testing their viability with business and engineering; shipping designs as close to code as possible, among others.</li>

                                            <li>I think like a detective: I gather insight on business needs, competitive models, technical constraints, and user needs and challenges, and I help teams connect the dots into cross-functional alignment on what we need to build and making sure we're building it right.</li>

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
                                        <h5>I thrive at the intersection of design and engineering. I'm always wearing a full-stack designer hat.</h5>
                                        <span class="float-right"><i class="ti-angle-down"></i></span>
                                    </div>
                                </a>
                            </div>
                            <div id="design3" class="panel-collapse collapse"  aria-expanded="false" role="tablist">
                                <div class="panel-body">
                                <h6>
                                    <ul>
                                        <li>
                                            Having extensive hands-on coding experience, I excel at identifying risks early. I can act as a translator between design and engineering, and help everyone understand each other's concerns and challenges without anything getting lost in [tech] translation.

                                        </li>
                                        <li>
                                            I’m a fierce advocate of delivering design information –from layouts, to specs and PRDs– as close as possible to code and the frameworks being used, to reach fidelity and parity faster and to reduce feedback loops that cause delays and friction.
                                        </li>
                                        <li style="font-size: 80%!important;">
                                            p.s. I believe in handshakes, not handoffs. Design and engineering's collaboration should start at the beginning of the project, not when Jira tickets are created. It should be a constant, symbiotic relationship, where standups and critical touchpoints can ensure that challenges are tackled early on.
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
                <div class="col-12 col-lg-4 padding-20px-tb">

                    <ul>
                        <li>1996, M. Arch / Tulane University, New Orleans</li>
                        <li>1998, M.S. Visual Comm. / Pratt Institute, NYC</li>
                        <li>2000, MFA Design / School of Visual Arts (SVA), NYC</li>
                    </ul>

                    <a class="btn btn-large btn-transparent-black lg-margin-15px-bottom d-table d-lg-inline-block md-margin-lr-auto w-100 margin-20px-tb" 
                    href="#">View Resumé</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end accordions style 01 section -->

    <!-- start portfolio section --- portfolio-full-width-masonry-overlay ----->
    <section id="home-projects-grid-01" class="wow fadeIn padding-90px-top md-padding-50px-top sm-padding-30px-top">
        <!-- start filter content -->
        <div class="container-fluid padding-five-lr md-padding-30px-lr">
            
            <!-- <div class="row numbered-dividers">
                <div class="col col-3 col-md-1">
                    <div class="sideway-number">01</div>
                </div>
                <div class="col col-7 col-md-11 text-left section-name">
                    <h4 class="font-weight-500 text-extra-dark-gray margin-15px-bottom">Featured Projects</h4>
                </div>
            </div> -->
            
            <div class="row">
                <div class="col-12 text-center margin-50px-bottom md-margin-50px-bottom sm-margin-30px-bottom">
                    <h4 class=" text-extra-dark-gray margin-15px-bottom alt-text font-weight-600">Featured Work</h4>
                </div>
                <div class="col-12 px-3 p-md-0">
                    <div class="filter-content overflow-hidden">
                        <ul class="portfolio-grid work-2col hover-option2 gutter-medium">
                            <li class="grid-sizer"></li>
                            <!-- start portfolio item -->
                            <li class="grid-item wow fadeIn last-paragraph-no-margin" data-wow-delay="0.2s">
                                <a href="<?= BASE_URL ?>projects/atlas-design-system/index.php">
                                    <figure>
                                        <div class="portfolio-img bg-deep-pink"><img src="<?= BASE_URL ?>projects/home-projects/home-atlas.png" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-left">
                                                <div class="portfolio-hover-box align-bottom">
                                                    <div class="portfolio-hover-content position-relative last-paragraph-no-margin">
                                                        <div class="bg-black margin-25px-bottom separator-line-horrizontal-medium-light2"></div>
                                                        <span class="line-height-normal alt-font text-white-2 margin-one-half-bottom d-block font-weight-600">Tailoring Interior</span>
                                                        <p class="text-white-2 text-uppercase text-extra-small">Branding and Brochure</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->


                            <!-- start portfolio item -->
                            <li class="grid-item wow fadeIn last-paragraph-no-margin" data-wow-delay="0.2s">
                                <a href="<?= BASE_URL ?>projects/admin/index.php">
                                    <figure>
                                        <div class="portfolio-img bg-deep-pink"><img src="<?= BASE_URL ?>projects/home-projects/home-admin.png" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-left">
                                                <div class="portfolio-hover-box align-bottom">
                                                    <div class="portfolio-hover-content position-relative last-paragraph-no-margin">
                                                        <div class="bg-black margin-25px-bottom separator-line-horrizontal-medium-light2"></div>
                                                        <span class="line-height-normal alt-font text-white-2 margin-one-half-bottom d-block font-weight-600">Designblast Inc</span>
                                                        <p class="text-white-2 text-uppercase text-extra-small">Web and Photography</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->

                            <!-- start portfolio-item item -->
                            <li class="grid-item wow fadeIn last-paragraph-no-margin" data-wow-delay="0.4s">
                                <a href="<?= BASE_URL ?>projects/citybox/index.php">
                                    <figure>
                                        <div class="portfolio-img bg-deep-pink"><img src="<?= BASE_URL ?>projects/home-projects/home-citybox-ui.png" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-left">
                                                <div class="portfolio-hover-box align-bottom">
                                                    <div class="portfolio-hover-content position-relative last-paragraph-no-margin">
                                                        <div class="bg-black margin-25px-bottom separator-line-horrizontal-medium-light2"></div>
                                                        <span class="line-height-normal alt-font text-white-2 margin-one-half-bottom d-block font-weight-600">Herbal Beauty Salon</span>
                                                        <p class="text-white-2 text-uppercase text-extra-small">Branding and Brochure</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->

                            
                            <!-- start portfolio-item item -->
                            <li class="grid-item wow fadeIn last-paragraph-no-margin" data-wow-delay="0.4s">
                                <a href="<?= BASE_URL ?>projects/musicasa/index.php">
                                    <figure>
                                        <div class="portfolio-img bg-deep-pink"><img src="<?= BASE_URL ?>projects/home-projects/home-musicasa.png" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-left">
                                                <div class="portfolio-hover-box align-bottom">
                                                    <div class="portfolio-hover-content position-relative last-paragraph-no-margin">
                                                        <div class="bg-black margin-25px-bottom separator-line-horrizontal-medium-light2"></div>
                                                        <span class="line-height-normal alt-font text-white-2 margin-one-half-bottom d-block font-weight-600">Herbal Beauty Salon</span>
                                                        <p class="text-white-2 text-uppercase text-extra-small">Branding and Brochure</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item wow fadeIn last-paragraph-no-margin" data-wow-delay="0.6s">
                                <a href="<?= BASE_URL ?>projects/idd/index.php">
                                    <figure>
                                        <div class="portfolio-img bg-deep-pink"><img src="<?= BASE_URL ?>projects/home-projects/home-idd.png" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-left">
                                                <div class="portfolio-hover-box align-bottom">
                                                    <div class="portfolio-hover-content position-relative last-paragraph-no-margin">
                                                        <div class="bg-black margin-25px-bottom separator-line-horrizontal-medium-light2"></div>
                                                        <span class="line-height-normal alt-font text-white-2 margin-one-half-bottom d-block font-weight-600">Tailoring Interior</span>
                                                        <p class="text-white-2 text-uppercase text-extra-small">Branding and Brochure</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item wow fadeIn last-paragraph-no-margin" data-wow-delay="0.6s">
                                <a href="<?= BASE_URL ?>projects/map-tools/index.php">
                                    <figure>
                                        <div class="portfolio-img bg-deep-pink"><img src="<?= BASE_URL ?>projects/home-projects/home-map-tools.png" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-left">
                                                <div class="portfolio-hover-box align-bottom">
                                                    <div class="portfolio-hover-content position-relative last-paragraph-no-margin">
                                                        <div class="bg-black margin-25px-bottom separator-line-horrizontal-medium-light2"></div>
                                                        <span class="line-height-normal alt-font text-white-2 margin-one-half-bottom d-block font-weight-600">Designblast Inc</span>
                                                        <p class="text-white-2 text-uppercase text-extra-small">Web and Photography</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->                                 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end filter content -->
    </section>
    <!-- end portfolio section --- portfolio-full-width-masonry-overlay ----->



    <section id="home-projects-grid-02" class="wow fadeIn magnific-home-gallery">

        <!-- start filter content -->
        <div class="container-fluid padding-five-lr md-padding-30px-lr">
            <div class="row">
                <div class="col-12 text-center margin-50px-bottom md-margin-50px-bottom sm-margin-30px-bottom">
                    <h4 class=" text-extra-dark-gray margin-15px-bottom alt-text font-weight-600" style="color: #FFF!important;">Archived Work</h4>
                </div>
                <div class="col-12 px-3 p-md-0">
                    <div class="filter-content overflow-hidden">
                        <ul class="portfolio-grid work-3col hover-option2 gutter-medium">
                            <li class="grid-sizer"></li>

                            <li class="grid-item wow last-paragraph-no-margin" data-wow-delay="0s">
                                <a href="javascript:void(0);" class="project-gallery-trigger" data-collection="c4pr">
                                    <img src="<?= BASE_URL ?>projects-archived/c4pr/thumb.jpg"/>
                                </a>
                            </li>

                            <li class="grid-item wow last-paragraph-no-margin" data-wow-delay="0s">
                                <a href="javascript:void(0);" class="project-gallery-trigger" data-collection="puracepa">
                                    <img src="<?= BASE_URL ?>projects-archived/puracepa/thumb.jpg"/>
                                </a>
                            </li>


                            <li class="grid-item wow last-paragraph-no-margin" data-wow-delay="0s">
                                <a href="javascript:void(0);" class="project-gallery-trigger" data-collection="v2abrochure">
                                    <img src="<?= BASE_URL ?>projects-archived/v2a-brochure/thumb.jpg"/>
                                </a>
                            </li>

                            <li class="grid-item wow last-paragraph-no-margin" data-wow-delay="0s">
                                <a href="javascript:void(0);" class="project-gallery-trigger" data-collection="koru">
                                    <img src="<?= BASE_URL ?>projects-archived/koru/thumb.jpg"/>
                                </a>
                            </li>

                            <li class="grid-item wow last-paragraph-no-margin" data-wow-delay="0s">
                                <a href="javascript:void(0);" class="project-gallery-trigger" data-collection="akcsos">
                                    <img src="<?= BASE_URL ?>projects-archived/akc-sos/thumb.jpg"/>
                                </a>
                            </li>


                            <li class="grid-item wow last-paragraph-no-margin" data-wow-delay="0s">
                                <a href="javascript:void(0);" class="project-gallery-trigger" data-collection="ted">
                                    <img src="<?= BASE_URL ?>projects-archived/ted/thumb.jpg"/>
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
    (function($) {
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

        $(document).ready(function() {
            $('.project-gallery-trigger').on('click', function() {
                var key = $(this).data('collection');
                var items = $.map(collections[key], function(img) {
                    return { src: img.src, title: img.title, type: 'image' };
                });
                $.magnificPopup.open({
                    items: items,
                    type: 'image',
                    gallery: { enabled: true },
                    image: {
                        titleSrc: function(item) {
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
