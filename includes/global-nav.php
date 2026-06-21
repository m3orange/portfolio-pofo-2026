<!-- start header --- This is hamburger-menu-half-->
<header class="m3-main-nav">
    <!-- Start navigation -->
    <nav
        class="navbar bg-transparent navbar-top navbar-transparent-no-sticky full-width-pull-menu white-link no-transition">
        <div class="container nav-header-container height-100px sm-height-70px sm-padding-15px-lr">
            <!-- Start header navigation -->

            <div class="col d-none d-md-block pl-0">
                <a class="logo" href="<?= BASE_URL ?>index.php">
                    <img src="<?= BASE_URL ?>images/m3orange-logo-white.png"
                        data-rjs="<?= BASE_URL ?>m3orange-logo-white@2x.png" alt="M3Orange">
                </a>
            </div>


            <div class="col text-right pr-0">
                <button class="navbar-toggler mobile-toggle d-inline-block" type="button" id="open-button"
                    data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="menu-wrap full-screen no-padding d-md-flex">
                    <div class="col-md-6 p-0 d-none d-md-block">
                        <div class="cover-background full-screen">
                            <div class="opacity-light bg-extra-dark-gray"></div>
                            <div class="position-absolute height-100 width-100 text-center">
                                <div class="display-table height-100 width-100">
                                    <div
                                        class="display-table-cell height-100 width-100 vertical-align-middle position-relative">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-0 bg-white full-screen text-left">
                        <div class="position-absolute height-100 width-100 overflow-auto">
                            <div class="display-table height-100 width-100">
                                <div
                                    class="display-table-cell height-100 width-100 vertical-align-top padding-fourteen-lr alt-font link-style-2 md-padding-seven-lr sm-padding-15px-lr padding-twenty-top padding-ten-bottom">
                                    <!-- start menu -->
                                    <ul class="font-weight-600 sm-no-padding-left">
                                        <li><a href="<?= BASE_URL ?>index.php" class="inner-link">Home</a></li>
                                        <li><a href="<?= BASE_URL ?>about.php" class="inner-link">About</a></li>

                                        <li class="dropdown">
                                            <a href="javascript:void(0);" data-toggle="dropdown">Featured Work</a>
                                            <!-- <span data-toggle="dropdown" class="dropdown-toggle"></span> -->
                                            <ul class="dropdown-menu font-weight-300">
                                                <li><a href="<?= BASE_URL ?>projects/citybox/index.php"
                                                        title="Atlas UI">CityBox UI</a></li>
                                                <li><a href="<?= BASE_URL ?>projects/atlas-design-system/index.php"
                                                        title="Atlas Design System">Atlas</a></li>
                                                <li><a href="<?= BASE_URL ?>projects/admin/index.php"
                                                        title="Admin Platform">Admin Platform</a></li>
                                                <li><a href="<?= BASE_URL ?>projects/musicasa/index.php"
                                                        title="Musicasa">Musicasa</a></li>
                                                <li><a href="<?= BASE_URL ?>projects/usic/index.php"
                                                        title="USIC">USIC</a></li>
                                                <li><a href="<?= BASE_URL ?>projects/map-tools/index.php"
                                                        title="Map Tools">Map Tools</a></li>
                                                <li><a href="<?= BASE_URL ?>projects/idd/index.php" title="IDD">IDD</a>
                                                </li>

                                                <li
                                                    style="padding: 20px 0; border-top: 1px solid rgba(0,0,0,0.5); margin-top: 30px;">
                                                    <a href="<?= BASE_URL ?>projects/admin/past-work.php"
                                                        title="Past Work">Earlier Work</a>
                                                </li>
                                            </ul>



                                        </li>




                                        <!-- <li><a href="<?= BASE_URL ?>about.php" class="inner-link">Earlier Work</a></li> -->

                                        <li><a href="<?= BASE_URL ?>connect.php" class="inner-link">Connect</a></li>


                                    </ul>
                                    <!-- end menu -->
                                </div>
                            </div>
                        </div>
                        <button class="close-button-menu" id="close-button"></button>
                    </div>
                </div>
            </div>
            <!-- start menu -->
        </div>
        <!-- end header navigation -->
    </nav>
    <!-- end navigation -->
</header>
<!-- end header  --- This is hamburger-menu-half-->