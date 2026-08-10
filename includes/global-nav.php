
<!-- start header --- This is hamburger-menu-half-->


<div class="temp-nav">
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
</div>

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
            <div class="col col-12 col-md-2 d-md-block pl-0"> <!--d-none -->
                <a class="logo" href="<?= BASE_URL ?>index.php">
                    <img src="<?= BASE_URL ?>images/munoz-logo-horizontal-white-06.svg" 
                    data-rjs="<?= BASE_URL ?>images/munoz-logo-horizontal-white-06.svg" alt="Michelle Muñoz">
                </a>
            </div>

                                    
                <!--?php include ROOT_PATH . 'includes/temp-links.php'; ?-->

            <?php include ROOT_PATH . 'includes/global-nav-hamburger-and-drawer-menu.php'; ?>
        </div>
    </nav>
</header>
<!-- end header  --- This is hamburger-menu-half-->

<div id="pagetop"></div>

