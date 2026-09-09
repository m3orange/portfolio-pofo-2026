<!-- <div class="loading-bar"></div> -->

<!--
Demo:         https://codyhouse.co/ds/components/app/mega-site-navigation
iFrame Only:  https://codyhouse.co/app/components/demo/demo-mega-site-navigation
-->

      <!-- Begin: Mega Menu-->
      <header class="mega-nav mega-nav--desktop@md position-relative js-mega-nav mega-nav--desktop backdrop-blur-10 m3-tweaks" class=" js" data-theme="dark">

        <!--
        To activate hover again, add ata-hover="on" in the header tag: <header class="mega-nav mega-nav--desktop@md position-relative js-mega-nav mega-nav--desktop m3-tweaks" data-hover="on" class=" js" data-theme="dark"></header>
        -->

        <nav class="navbar bg-transparent navbar-top navbar-transparent-no-sticky full-width-pull-menu white-link no-transition">
            <div class="mega-nav__container">
            
                <!-- 👇 logo --> 
                <a class="logo" href="<?= BASE_URL ?>index.php" class="mega-nav__logo">
                    <img src="<?= BASE_URL ?>images/munoz-logo-horizontal-white-06.svg" data-rjs="<?= BASE_URL ?>images/munoz-logo-horizontal-white-06.svg" alt="Michelle Muñoz">
                </a>
                
                <!-- 👇 icon buttons --mobile -->
                <div class="mega-nav__icon-btns mega-nav__icon-btns--mobile">
                    <a href="ADD LINK" class="mega-nav__icon-btn">
                    <svg class="icon" viewBox="0 0 24 24">
                        <title>Go to account settings</title>
                        <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10"
                        stroke-width="2">
                        <circle cx="12" cy="6" r="4"></circle>
                        <path d="M12 13a8 8 0 00-8 8h16a8 8 0 00-8-8z"></path>
                        </g>
                    </svg> </a>
                    <button class="mega-nav__icon-btn mega-nav__icon-btn--search" aria-label="Toggle search"
                    aria-controls="mega-nav-search"><svg class="icon" viewBox="0 0 24 24">
                        <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10"
                        stroke-width="2">
                        <path d="M4.222 4.222l15.556 15.556"></path>
                        <path d="M19.778 4.222L4.222 19.778"></path>
                        <circle cx="9.5" cy="9.5" r="6.5"></circle>
                        </g>
                    </svg></button> 
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
                
                <!-- This is the hamburger in mobile -->   
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
    <?php include ROOT_PATH . 'includes/global-nav-menu-card.php'; ?>
    <?php include ROOT_PATH . 'includes/global-nav-menu-card.php'; ?>
    <?php include ROOT_PATH . 'includes/global-nav-menu-card.php'; ?>
    <?php include ROOT_PATH . 'includes/global-nav-menu-card.php'; ?>
</div><!-- End: mega-nav__sub-nav mega-nav__sub-nav--layout-3-->
<div class="mega-nav__sub-nav mega-nav__sub-nav--layout-3">
    <?php include ROOT_PATH . 'includes/global-nav-menu-card-original.php'; ?>
    <?php include ROOT_PATH . 'includes/global-nav-menu-card-original.php'; ?>
    <?php include ROOT_PATH . 'includes/global-nav-menu-card-original.php'; ?>
</div><!-- End: mega-nav__sub-nav mega-nav__sub-nav--layout-3-->


                                </div><!-- End: mega-nav__sub-nav-wrapper -->
                            </li>
                        </ul>



                    </div><!--mega-nav__nav-inner-->
                </div><!--mega-nav__nav js-mega-nav__nav-->
            

            </div><!--mega-nav__container-->
        </nav>

      </header>
      <!-- End: Mega Menu-->

<div id="pagetop"></div>



<style>



    .mega-nav__card .image-wrapper{
        border-radius: 0px!important;
        background-color: blue;
    }

.image-wrapper{
    aspect-ratio: 1/.5;
    background-color: #ff000057;
    border-radius: 0px;
}

.image-wrapper img{
    width: 200%;
}

.card-info{
font-size: 16px!important;
font-weight: 500!important;
line-height: 1.3em!important;

}

.card-title{
margin: 0 0 6px 0;

}

.card-title a{
font-weight: 600!important;
font-size: 115%!important;
}
/* 
.media-wrapper-4\:3 {
  padding-bottom: 55%;
} */

  .mega-nav__sub-nav-wrapper{
    padding-left: 50%;
  }

  .mega-nav--desktop .mega-nav__sub-nav--layout-3 {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: var(--space-sm);

}

.mega-nav--desktop .mega-nav__sub-nav {
    /* max-width: var(--mega-nav-content-max-width); */
    max-width: 100%;
}


</style>
