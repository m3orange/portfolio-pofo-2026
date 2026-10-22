
<div class="row-for-mobile-cards row">





    <div class="mega-nav__card">
        <a href="<?= BASE_URL ?>projects/atlas-ui/index.php" class="block overflow-hidden"> 
            <figure class="image-wrapper"><img class="width-100%" src="<?= BASE_URL ?>mega-menu-codyhouse/card-thumbs/mega-menu-card-thumbs-01.jpg"></figure>
        </a>
        <div class="margin-top-sm card-info">
            <div class="card-title"><a class="mega-nav__card-title" href="<?= BASE_URL ?>projects/atlas-ui/index.php" title="Atlas UI">Atlas UI</a></div>
        </div>
    </div> 



    <div class="mega-nav__card">
        <a href="<?= BASE_URL ?>projects/atlas-design-system/index.php" class="block overflow-hidden"> 
            <figure class="image-wrapper"><img class="width-100%" src="<?= BASE_URL ?>mega-menu-codyhouse/card-thumbs/mega-menu-card-thumbs-02.jpg"></figure>
        </a>
        <div class="margin-top-sm card-info">
            <div class="card-title"><a class="mega-nav__card-title" href="<?= BASE_URL ?>projects/atlas-design-system/index.php" title="Atlas Design System">Atlas Design System</a></div>  
        </div>
    </div> 

    <div class="mega-nav__card">
        <a href="<?= BASE_URL ?>projects/admin/index.php" class="block overflow-hidden"> 
            <figure class="image-wrapper"><img class="width-100%" src="<?= BASE_URL ?>mega-menu-codyhouse/card-thumbs/mega-menu-card-thumbs-03.jpg"></figure>
        </a>
        <div class="margin-top-sm card-info">
            <div class="card-title"><a class="mega-nav__card-title" href="<?= BASE_URL ?>projects/admin/index.php" title="Admin Platform">Admin Platform</a></div>
        </div>
    </div> 


    <div class="mega-nav__card">
        <a href="<?= BASE_URL ?>projects/musicasa/index.php" class="block overflow-hidden"> 
            <figure class="image-wrapper"><img class="width-100%" src="<?= BASE_URL ?>mega-menu-codyhouse/card-thumbs/mega-menu-card-thumbs-04.jpg"></figure>
        </a>
        <div class="margin-top-sm card-info">
            <div class="card-title"><a class="mega-nav__card-title" href="<?= BASE_URL ?>projects/musicasa/index.php" title="Musicasa">Musicasa</a></div>  
        </div>
    </div> 


    <div class="mega-nav__card">
        <a href="<?= BASE_URL ?>projects/map-tools/index.php" class="block overflow-hidden card-thumb"> 
            <figure class="image-wrapper"><img class="width-100%" src="<?= BASE_URL ?>mega-menu-codyhouse/card-thumbs/mega-menu-card-thumbs-07.jpg"></figure>
        </a>
        <div class="margin-top-sm card-info">
            <div class="card-title"><a class="mega-nav__card-title" href="<?= BASE_URL ?>projects/map-tools/index.php" title="Map Tools">Map Tools</a></div>
        </div>
    </div> 


    <div class="mega-nav__card">
        <a href="<?= BASE_URL ?>projects/idd/index.php" class="block overflow-hidden card-thumb"> 
            <figure class="image-wrapper"><img class="width-100%" src="<?= BASE_URL ?>mega-menu-codyhouse/card-thumbs/mega-menu-card-thumbs-08.jpg"></figure>
        </a>
        <div class="margin-top-sm card-info">
            <div class="card-title"><a class="mega-nav__card-title" href="<?= BASE_URL ?>projects/idd/index.php" title="IDD">IDD</a></div>
        </div>
    </div> 


</div>


<style>
  .row-for-mobile-cards {
    column-gap: 24px;
    row-gap: 24px;
    display: flex !important;
    flex-direction: row !important;
    justify-content: center;
    flex-wrap: wrap;
}

    .mega-nav__card{
     width: 13%;
    }

    .mega-nav--desktop .mega-nav__sub-nav, .mega-nav--desktop .mega-nav__search-inner {
    margin: 0;
    padding: 40px 15%;
    /* max-width: 90%; */
    /* padding: 0 10%; */
}

.mega-nav--desktop .mega-nav__item--expanded .mega-nav__sub-nav-wrapper {
    /* display: block; */
}

.mega-nav--desktop .mega-nav__sub-nav-wrapper, .mega-nav--desktop .mega-nav__search {
    position: absolute;
    top: 80px;
    right: 0;
    max-height: calc(100vh - var(--mega-nav-height) - var(--mega-nav-offset-y, 0px));
    /* overflow: hidden !important; */
    border-top: 1px solid #424242;
    background-color: #131313f0 !important;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.25);
    /* display: flex;  This was causing the dropdown area to be open by default. */
    flex-direction: row;
    justify-content: center;
}

.mega-nav--desktop .mega-nav__sub-nav, .mega-nav--desktop .mega-nav__search-inner {
    margin: 0 auto;
    padding: 20px 20px 40px 20px;
    max-width: 90%;
}


</style>