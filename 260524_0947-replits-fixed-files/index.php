<?php include_once("config.php"); ?>


<?php include ROOT_PATH . 'includes/header.php'; ?>


<body class="home">

    <!-- start header -->
    <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->

    <section id="home-hero-opener" class="p-0 position-relative wow animate__fadeIn" style="height: 1029px; visibility: visible; animation-name: fadeIn; height: 20vh!important;">
        <div class="opacity-medium bg-extra-dark-gray z-index-0"></div>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col col-9 d-flex justify-content-center flex-column text-left text-md-start">
                    <div>
                        <h3>Hello</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="wow fadeIn padding-90px-top md-padding-50px-top sm-padding-30px-top">

        <!-- start filter content -->
        <div class="container">
            <div class="row">
                <div class="col-12 text-center margin-100px-bottom md-margin-50px-bottom sm-margin-30px-bottom">
                    <h4 class="font-weight-400 text-extra-dark-gray margin-15px-bottom">Featured Projects</h4>
                </div>
                <div class="col-12 px-3 p-md-0">
                    <div class="filter-content overflow-hidden">
                        <ul class="portfolio-grid work-3col hover-option2 gutter-medium">
                            <li class="grid-sizer"></li>

                            <li class="grid-item wow fadeInUp last-paragraph-no-margin">
                                <!-- Gallery #1: opens 3 images of TREES -->
                                <a href="javascript:void(0);" class="project-gallery-trigger" data-collection="trees">
                                    <img src="<?= BASE_URL ?>projects-archived/01/thumb.png"/>
                                </a>
                            </li>

                            <li class="grid-item wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                                <!-- Gallery #2: opens 3 images of CARS -->
                                <a href="javascript:void(0);" class="project-gallery-trigger" data-collection="cars">
                                    <img src="<?= BASE_URL ?>projects-archived/02/thumb.png"/>
                                </a>
                            </li>

                            <li class="grid-item wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                                <!-- Gallery #3: opens 3 images of MOUNTAINS -->
                                <a href="javascript:void(0);" class="project-gallery-trigger" data-collection="mountains">
                                    <img src="<?= BASE_URL ?>projects-archived/03/thumb.png"/>
                                </a>
                            </li>

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
            trees: [
                { src: 'https://picsum.photos/seed/tree1/1600/1067', title: 'Ancient Oak' },
                { src: 'https://picsum.photos/seed/tree2/1600/1067', title: 'Birch Forest' },
                { src: 'https://picsum.photos/seed/tree3/1600/1067', title: 'Pine Canopy' }
            ],
            cars: [
                { src: 'https://picsum.photos/seed/car1/1600/1067', title: 'Vintage Roadster' },
                { src: 'https://picsum.photos/seed/car2/1600/1067', title: 'Classic Coupe' },
                { src: 'https://picsum.photos/seed/car3/1600/1067', title: 'Open Highway' }
            ],
            mountains: [
                { src: 'https://picsum.photos/seed/mtn1/1600/1067', title: 'Snow Peak' },
                { src: 'https://picsum.photos/seed/mtn2/1600/1067', title: 'Rocky Ridge' },
                { src: 'https://picsum.photos/seed/mtn3/1600/1067', title: 'Alpine Sunset' }
            ]
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
