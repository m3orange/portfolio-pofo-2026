<!-- <div class="loading-bar"></div> -->

<!--
Demo:         https://codyhouse.co/ds/components/app/mega-site-navigation
iFrame Only:  https://codyhouse.co/app/components/demo/demo-mega-site-navigation
-->




<?php include ROOT_PATH . 'delete-later/media-queries-guide.php'; ?>

      <!-- Begin: Mega Menu-->
      <header class="mega-nav mega-nav--desktop@md position-relative js-mega-nav mega-nav--desktop backdrop-blur-10 m3-tweaks" class="js" data-theme="dark">

        <!--
        To activate hover again, add data-hover="on" in the header tag: 
        <header class="mega-nav mega-nav--desktop@md position-relative js-mega-nav mega-nav--desktop m3-tweaks" data-hover="on" class="js" data-theme="dark"></header>
        -->

        <nav class="navbar bg-transparent navbar-top navbar-transparent-no-sticky full-width-pull-menu white-link no-transition">
            <div class="mega-nav__container">
            
                <!-- 👇 logo --> 
                <a class="logo" href="<?= BASE_URL ?>index.php" class="mega-nav__logo">
                    <img src="<?= BASE_URL ?>images/munoz-logo-horizontal-white-06.svg" data-rjs="<?= BASE_URL ?>images/munoz-logo-horizontal-white-06.svg" alt="Michelle Muñoz">
                </a>
                
                <!-- 👇  Hamburger in mobile -->
                <div class="mega-nav__icon-btns mega-nav__icon-btns--mobile">
                    <button class="mega-nav__icon-btn mega-nav__icon-btn--menu" aria-label="Toggle menu"
                    aria-controls="mega-nav-navigation"><svg class="icon" viewBox="0 0 24 24">
                        <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10"
                        stroke-width="2">
                        <path d="M1 6h22"></path>
                        <path d="M1 12h22"></path>
                        <path d="M1 18h22"></path>
                        </g>
                    </svg></button>
                </div><!--mega-nav__icon-btns mega-nav__icon-btns--mobile-->
                        
            
                <div class="mega-nav__nav js-mega-nav__nav" id="mega-nav-navigation" role="navigation" aria-label="Main">
                    <div class="mega-nav__nav-inner"  style="justify-content: flex-end!important;">
                        <ul class="mega-nav__items">


                            <!-- 👇 Single links -->
                            <li class="mega-nav__item"><a href="<?= BASE_URL ?>about.php" class="mega-nav__control" title="Technical Knowledge">Technical Knowledge</a></li>
                            <li class="mega-nav__item"><a href="<?= BASE_URL ?>resume.php" class="mega-nav__control" title="Resumé">Resumé</a></li>
         
                                        
                            <!-- 👇 Mega Menu: Button-->
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
                                <!-- Mega Menu: Dropdown -->
                                <div class="mega-nav__sub-nav-wrapper">
                                    <div class="aligning-to-right">
                                        <div class="mega-nav__sub-nav mega-nav__sub-nav--layout-3">
                                            <?php include ROOT_PATH . 'includes/global-nav-menu-card.php'; ?>
                                        </div>
                                    </div>
                                </div><!-- End: mega-nav__sub-nav-wrapper -->
                            </li><!--mega-nav__item js-mega-nav__item-->

                        </ul>
                    </div><!--mega-nav__nav-inner-->
                </div><!--mega-nav__nav js-mega-nav__nav-->
            

            </div><!--mega-nav__container-->
        </nav>

      </header>
      <!-- End: Mega Menu-->

        <!--?php include ROOT_PATH . 'includes/temp-handy-links.php'; ?-->

    <div id="pagetop"></div>


