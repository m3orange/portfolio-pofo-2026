
<!-- start header --- This is hamburger-menu-half-->
<header class="m3-main-nav">
    <!-- Start navigation -->
    <nav class="navbar bg-transparent navbar-top navbar-transparent-no-sticky full-width-pull-menu white-link no-transition">
        <div class="container nav-header-container height-100px sm-height-70px p-0">
            <!-- Start header navigation -->

            <div class="col col-12 col-md-2 d-md-block pl-0"> <!--d-none -->
                <a class="logo" href="<?= BASE_URL ?>index.php">
                    <img src="<?= BASE_URL ?>images/munoz-logo-horizontal-white-04.svg" data-rjs="<?= BASE_URL ?>m3orange-logo-white@2x.png" alt="Michelle Muñoz">
                </a>
            </div>


            <div class="col col-10 col-md-10 text-right pr-0 nav-adjust temp-horizontal-nav">
                <ul class="font-weight-600 ">
                    <li><a href="<?= BASE_URL ?>about.php" class="inner-link">About</a></li>
                    <li><a href="<?= BASE_URL ?>resume.php" class="inner-link">Resume</a></li>
                    <div class="nav-divider"></div>
                    <li><a href="<?= BASE_URL ?>projects/atlas-ui/index.php" title="Atlas UI">CityBox</a></li>
                    <li><a href="<?= BASE_URL ?>projects/atlas-design-system/index.php" title="Atlas Design System">Design System</a></li>
                    <li><a href="<?= BASE_URL ?>projects/admin/index.php" title="Admin Platform">Admin Platform</a></li>
                    <li><a href="<?= BASE_URL ?>projects/musicasa/index.php" title="Musicasa">Musicasa</a></li>
                    <li><a href="<?= BASE_URL ?>projects/cx-roadmap/index.php" title="CX Roadmap">CX Roadmap</a></li>
                    <li><a href="<?= BASE_URL ?>projects/space-scout/index.php" title="In Situ">Space Scout</a></li>
                    <li><a href="<?= BASE_URL ?>projects/map-tools/index.php" title="Map Tools">Map Tools</a></li>
                    <li><a href="<?= BASE_URL ?>projects/idd/index.php" title="IDD">IDD</a></li>
                </ul>
            </div>


            <!--?php include ROOT_PATH . 'includes/global-nav-hamburger-and-drawer-menu.php'; ?-->
        </div>
        <!-- end header navigation -->
    </nav>
    <!-- end navigation -->
</header>
<!-- end header  --- This is hamburger-menu-half-->


<style>
    .temp-horizontal-nav ul{
        display: flex;
        flex-direction: row;
        margin: 0px!important;

            display: flex;
    flex-direction: row;
    margin: 0px !important;
    align-items: center;
}


.nav-divider{
    width: 3px;
    height: 100%;
    margin: 0 20px;
    background-color: rgba(255,255,255,0.7);
}

        .temp-horizontal-nav li,
        .temp-horizontal-nav ul{
                  list-style-type: none!important;  
                      /* height: fit-content; */
        }

    .m3-main-nav a{
        color: #FFF!important;
        padding: 6px 8px!important;
        font-size: 16px;
    }


</style>