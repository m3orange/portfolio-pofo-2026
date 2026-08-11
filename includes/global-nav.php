<!-- <div class="loading-bar"></div> -->


<!-- start header --- This is hamburger-menu-half-->

<!-- <div class="temp-nav">
    <div class="row">
        <ul>
            <li><a href="<?= BASE_URL ?>index.php" class="temp-links">Home</a></li>
            <li><a href="<?= BASE_URL ?>about.php" class="temp-links">Tech Expertise</a></li>
            <li><a href="<?= BASE_URL ?>resume.php" class="temp-links">Resume</a></li>
            <li><a class="temp-links" href="<?= BASE_URL ?>projects/atlas-ui/index.php" title="Atlas UI">Atlas UI</a></li>
            <li><a class="temp-links" href="<?= BASE_URL ?>projects/atlas-design-system/index.php" title="Atlas Design System">Design System</a><li>
            <li><a class="temp-links" href="<?= BASE_URL ?>projects/admin/index.php" title="Admin Platform">Admin</a></li>

        </ul>
                <ul>

            <li><a class="temp-links" href="<?= BASE_URL ?>projects/musicasa/index.php" title="Musicasa">Musicasa</a></li>
            <li><a class="temp-links" href="<?= BASE_URL ?>projects/cx-roadmap/index.php" title="CX Roadmap">USIC</a></li>
            <li><a class="temp-links" href="<?= BASE_URL ?>projects/space-scout/index.php" title="In Situ">In Situ</a></li>
            <li><a class="temp-links" href="<?= BASE_URL ?>projects/map-tools/index.php" title="Map Tools">Map Tools</a></li>
            <li><a class="temp-links" href="<?= BASE_URL ?>projects/idd/index.php" title="IDD">IDD</a></li>
        </ul>
    </div>
</div> -->

<style>

    .temp-links-list{
        display: flex;flex-direction: row; margin: 0px;
    }
    @media (max-width: 767px){
        .temp-links-list{
   flex-direction: column!important;
        }
        .temp-nav{ justify-content: flex-end;}
        .temp-nav ul{ background-color: rgba(0, 0, 0, 0.8);}
    }
</style>

<style>
    .temp-nav {
position: fixed;
    top: 0px;
    background-color: rgba(0, 0, 0, 1);
    width: 100%;
    z-index: 1000;
    height: 40px;
    display: flex;
    flex-direction: row;
    justify-content: center;
    padding: 20px 0;
    min-height: 80px
    }

    .temp-nav ul{
        margin: 0px!important;
    }
    .temp-links{
        color: white!important;
        font-size: 16px;
    }
    .temp-nav li{
        margin: 0 10px;
    }
</style>

<header class="m3-main-nav">

    <nav class="navbar bg-transparent navbar-top navbar-transparent-no-sticky full-width-pull-menu white-link no-transition">
        <div class="container nav-header-container" style="padding: 10px 0;"> <!--height-100px sm-height-70px p-0 -->
            <div class="col col-9 d-md-block pl-0"> <!--d-none -->
                <a class="logo" href="<?= BASE_URL ?>index.php">
                    <img src="<?= BASE_URL ?>images/munoz-logo-horizontal-white-06.svg" 
                    data-rjs="<?= BASE_URL ?>images/munoz-logo-horizontal-white-06.svg" alt="Michelle Muñoz">
                </a>
            </div>

                                    
            <!--?php include ROOT_PATH . 'includes/temp-links.php'; ?-->
            <div class="col text-right pr-0 nav-adjust" style="column-gap: 30px;">

            <!-- <div class="contact-button">
                <i class="ti-email"></i><a class="popup-with-zoom-anim wow" data-wow-delay="0.6s" href="#modal-popup2" style="visibility: visible;">Contact</a>
            </div> -->

                <button class="navbar-toggler mobile-toggle d-inline-block" type="button" id="open-button" data-toggle="collapse"
                    data-target=".navbar-collapse">
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
                                    <div class="display-table-cell height-100 width-100 vertical-align-middle position-relative">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-0 bg-white full-screen text-left">
                        <div class="position-absolute height-100 width-100 overflow-auto">
                            <div class="display-table height-100 width-100">
                                <div class="display-table-cell height-100 width-100 vertical-align-top padding-fourteen-lr alt-font link-style-2 md-padding-ten-lr sm-padding-10px-lr padding-twenty-top padding-ten-bottom nav-sidepanel-links">
                                    <!-- start menu -->
                                    <div class="row links-area">
                                        <ul class="font-weight-600 sm-no-padding-left">
                                            <li><a href="<?= BASE_URL ?>index.php" class="inner-link">Home</a></li>
                                            <li><a href="<?= BASE_URL ?>about.php" class="inner-link">Tech Expertise</a></li>
                                            <li><a href="<?= BASE_URL ?>resume.php" class="inner-link">Resume</a></li>

                                            <li class="dropdown">
                                                <a href="javascript:void(0);" data-toggle="dropdown">Featured Work</a>
                                                <!-- <span data-toggle="dropdown" class="dropdown-toggle"></span> -->

                                                    <ul class="dropdown-menu font-weight-300">
                                                        <li  style="margin-top: 20px;"><a href="<?= BASE_URL ?>projects/atlas-ui/index.php" title="Atlas UI">Atlas UI</a></li>
                                                        <li><a href="<?= BASE_URL ?>projects/atlas-design-system/index.php" title="Atlas Design System">Atlas Design System</a></li>
                                                        <li><a href="<?= BASE_URL ?>projects/admin/index.php" title="Admin Platform">Admin Platform</a></li>
                                                        <li><a href="<?= BASE_URL ?>projects/musicasa/index.php" title="Musicasa">Musicasa</a></li>
                                                        <li><a href="<?= BASE_URL ?>projects/cx-roadmap/index.php" title="CX Roadmap">CX Roadmap</a></li>
                                                        <li><a href="<?= BASE_URL ?>projects/space-scout/index.php" title="In Situ">In Situ</a></li>
                                                        <li><a href="<?= BASE_URL ?>projects/map-tools/index.php" title="Map Tools">Map Tools</a></li>
                                                        <li><a href="<?= BASE_URL ?>projects/idd/index.php" title="IDD">IDD</a></li>
                                                        <li style="padding: 20px 0; border-top: 1px solid rgba(0,0,0,0.5); margin-top: 30px;"><a href="<?= BASE_URL ?>earlier-work.php" title="Past Work">Earlier Work</a></li>
                                                    </ul>

                                            </li>

                                            <!-- <li><a href="<?= BASE_URL ?>contact.php" class="inner-link">Connect</a></li> -->
                                        </ul>
                                        <div class="bottom-section">
                                            <a href="https://www.linkedin.com/in/michellemunozdorna/" target="_blank"><img
                                                    class="social-icons-header"
                                                    src="<?= BASE_URL ?>images/logo-linkedin-black.svg"></a>
                                        </div>
                                    </div>
                                    <!-- end menu -->
                                </div><!-- nav-sidepanel-links -->
                            </div>
                        </div>
                        <button class="close-button-menu" id="close-button"></button>
                    </div>
                </div>
            </div>

            <?php include ROOT_PATH . 'includes/global-nav-hamburger-and-drawer-menu.php'; ?>
        </div>
    </nav>
</header>
<!-- end header  --- This is hamburger-menu-half-->

<div id="pagetop"></div>

