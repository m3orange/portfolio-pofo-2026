<!-- <div class="loading-bar"></div> -->

<!--
Demo:         https://codyhouse.co/ds/components/app/mega-site-navigation
iFrame Only:  https://codyhouse.co/app/components/demo/demo-mega-site-navigation

Atlas Design System
Admin Platform
Musicasa
CX Roadmap
In Situ
Map Tools
IDD
-->

<style>
    .m3-tweaks{
        position: absolute!important;
        z-index: 100;
    }



    .mega-nav--desktop .mega-nav__sub-nav-wrapper, 
    .mega-nav--desktop .mega-nav__search {
    position: absolute;
    top: 80px;
    left: 0;
    width: 100%;
    background-color:#161616!important;
    box-shadow: var(--shadow-lg);
    max-height: calc(100vh - var(--mega-nav-height) - var(--mega-nav-offset-y, 0px));
    overflow: auto;


        
    }

    .mega-nav--desktop .mega-nav__control {
    position: relative;
    display: flex;
    align-items: center;
    height: 100%;
    font-size: var(--text-sm);
    color: #FFF;
    padding: 0 var(--space-md);
    text-decoration: none;
    transition: 0.2s;
}

    .mega-nav__control a,
    .js-mega-nav__item a{
         font-size: 16px!important;
        font-family: var(--ibm-sans-body-01);
        letter-spacing: 0px;
        
    }

    .mega-nav__control a:hover,
    .js-mega-nav__item a:hover{
        color: #FFF!important;
    }
</style>


<!--

<header class="bg-dark bg-opacity-90% backdrop-blur-10 position-sticky top-0 z-index-header padding-y-2xs margin-bottom-md margin-top-lg">

-->

      <!-- Begin: Mega Menu-->
      <header class="mega-nav mega-nav--desktop@md position-relative js-mega-nav mega-nav--desktop backdrop-blur-10 m3-tweaks" class=" js" data-theme="dark">

<!--
 To activate hover again, add ata-hover="on" in the header tag:

      <header class="mega-nav mega-nav--desktop@md position-relative js-mega-nav mega-nav--desktop m3-tweaks" data-hover="on" class=" js" data-theme="dark"></header>
-->
</v-no-ssr>
        <nav class="navbar bg-transparent navbar-top navbar-transparent-no-sticky full-width-pull-menu white-link no-transition">
            <div class="mega-nav__container">
            
            <!-- 👇 logo --> 
            <a class="logo" href="<?= BASE_URL ?>index.php" class="mega-nav__logo">
                <img src="<?= BASE_URL ?>images/munoz-logo-horizontal-white-06.svg" data-rjs="<?= BASE_URL ?>images/munoz-logo-horizontal-white-06.svg" alt="Michelle Muñoz">
            </a>
            
            <!-- 👇 icon buttons --mobile -->
            <div class="mega-nav__icon-btns mega-nav__icon-btns--mobile"><a href="ADD LINK" class="mega-nav__icon-btn"><svg class="icon" viewBox="0 0 24 24">
                    <title>Go to account settings</title>
                    <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10"
                    stroke-width="2">
                    <circle cx="12" cy="6" r="4"></circle>
                    <path d="M12 13a8 8 0 00-8 8h16a8 8 0 00-8-8z"></path>
                    </g>
                </svg> </a><button class="mega-nav__icon-btn mega-nav__icon-btn--search" aria-label="Toggle search"
                aria-controls="mega-nav-search"><svg class="icon" viewBox="0 0 24 24">
                    <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10"
                    stroke-width="2">
                    <path d="M4.222 4.222l15.556 15.556"></path>
                    <path d="M19.778 4.222L4.222 19.778"></path>
                    <circle cx="9.5" cy="9.5" r="6.5"></circle>
                    </g>
                </svg></button> <button class="mega-nav__icon-btn mega-nav__icon-btn--menu" aria-label="Toggle menu"
                aria-controls="mega-nav-navigation"><svg class="icon" viewBox="0 0 24 24">
                    <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10"
                    stroke-width="2">
                    <path d="M1 6h22"></path>
                    <path d="M1 12h22"></path>
                    <path d="M1 18h22"></path>
                    </g>
                </svg></button></div>
            
                
    <style>
    .mega-nav--desktop .mega-nav__sub-nav {
        max-width: 60rem;
    }
    </style>
            
            <li class="mega-nav__item js-mega-nav__item"></li>
            
            
            
            
                <div class="mega-nav__nav js-mega-nav__nav" id="mega-nav-navigation" role="navigation" aria-label="Main">
                <div class="mega-nav__nav-inner"  style="justify-content: flex-end!important;">
                
                <ul class="mega-nav__items">
                    <li class="mega-nav__label">Menu</li>

                    <li class="mega-nav__label">Other</li>

                    <!-- 👇 Single link -->
                    <li class="mega-nav__item">
                    <a href="ADD LINK" class="mega-nav__control">Technical Knowledge</a>
                    </li>

                    <!-- <li class="mega-nav__label">Other</li> -->

                    <!-- 👇 Single link -->
                    <li class="mega-nav__item">
                    <a href="ADD LINK" class="mega-nav__control">Resume</a>
                    </li>
                                
                                
                    <!-- 👇 layout 3 -> gallery -->
                    <li class="mega-nav__item js-mega-nav__item">
                    <button class="mega-nav__control js-mega-nav__control">Featured Projects 
                        <i class="mega-nav__arrow-icon" aria-hidden="true">    
                        <svg class="icon" viewBox="0 0 16 16">
                            <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square"
                            stroke-miterlimit="10" stroke-width="2">
                            <path d="M2 2l12 12"></path>
                            <path d="M14 2L2 14"></path>
                            </g>
                        </svg>
                        </i>
                    </button>

                        <div class="mega-nav__sub-nav-wrapper">
                        <div class="mega-nav__sub-nav mega-nav__sub-nav--layout-3">

                        <!-- Begins: Project Cards -->
                            <div class="mega-nav__card">
                                <a href="ADD LINK" class="block radius-md overflow-hidden">
                                <figure class="media-wrapper-4:3">
                                    <img class="width-100%" src="../mega-menu-codyhouse/fpo/fpo-01.jpg">
                                </figure>
                                </a>

                                <div class="margin-top-sm card-text">
                                <h3 class="text-base">
                                    <a href="ADD LINK" class="mega-nav__card-title">Atlas UI</a>
                                </h3>
                                <p>Donec pulvinar, quam sed mollis elementum, nisi magna faucibus odio.</p>
                                </div>
                            </div> <!-- End - mega-nav__card-->
                        <!-- Ends: Project Cards -->

                        <!-- Begins: Project Cards -->
                            <div class="mega-nav__card">
                                <a href="ADD LINK" class="block radius-md overflow-hidden">
                                <figure class="media-wrapper-4:3">
                                    <img class="width-100%" src="../mega-menu-codyhouse/fpo/fpo-02.jpg">
                                </figure>
                                </a>

                                <div class="margin-top-sm">
                                <h3 class="text-base">
                                    <a href="ADD LINK" class="mega-nav__card-title">Atlas Design System</a>
                                </h3>
                                <p>Donec pulvinar, quam sed mollis elementum, nisi magna faucibus odio.</p>
                                </div>
                            </div> <!-- End - mega-nav__card-->
                        <!-- Ends: Project Cards -->

                        <!-- Begins: Project Cards -->
                            <div class="mega-nav__card">
                                <a href="ADD LINK" class="block radius-md overflow-hidden">
                                <figure class="media-wrapper-4:3">
                                    <img class="width-100%" src="../mega-menu-codyhouse/fpo/fpo-03.jpg">
                                </figure>
                                </a>

                                <div class="margin-top-sm">
                                <h3 class="text-base">
                                    <a href="ADD LINK" class="mega-nav__card-title">Admin Platform</a>
                                </h3>
                                <p>Donec pulvinar, quam sed mollis elementum, nisi magna faucibus odio.</p>
                                </div>
                            </div> <!-- End - mega-nav__card-->
                        <!-- Ends: Project Cards -->


                        </div><!-- End: mega-nav__sub-nav mega-nav__sub-nav--layout-3-->
                        </div><!-- End: mega-nav__sub-nav-wrapper -->
                    </li>
                </ul>








                <ul class="mega-nav__items"><!-- 👇 icon buttons --desktop -->
                    <li class="mega-nav__icon-btns mega-nav__icon-btns--desktop">
                    <div class="dropdown inline-block js-dropdown">
                        <div class="mega-nav__icon-btn dropdown__wrapper inline-block"><a
                            href="https://codyhouse.co/app/components/demo/demo-mega-site-navigation--hover#0"
                            class="color-inherit flex height-100% width-100% flex-center dropdown__trigger js-dropdown__trigger"><svg
                            class="icon" viewBox="0 0 24 24">
                            <title>Go to account settings</title>
                            <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square"
                                stroke-miterlimit="10" stroke-width="2">
                                <circle cx="12" cy="6" r="4"></circle>
                                <path d="M12 13a8 8 0 00-8 8h16a8 8 0 00-8-8z"></path>
                            </g>
                            </svg></a>
                            <ul class="dropdown__menu js-dropdown__menu dropdown__menu--hide" aria-label="submenu"
                                style="width: 0px; overflow: hidden;">
                                <li><a href="ADD LINK" class="dropdown__item">Profile</a></li>
                                <li><a href="ADD LINK" class="dropdown__item">Profile</a></li>
                                <li><a href="ADD LINK" class="dropdown__item">Profile</a></li>
                            </ul>
                        </div>
                    </div>
                    

                    </li>
                    

                </ul>
                </div>
            </div>
            

            </div>
        </nav>

      </header>
      <!-- End: Mega Menu-->

<div id="pagetop"></div>

