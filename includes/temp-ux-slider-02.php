    
    <!-- Originally CityBox UI slider working well --->
    
    <section class="wow fadeIn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 blog-post-content text-center text-md-center">

                    <div class="swiper-full-screen swiper-cb-fullwidth-screens swiper-container white-move"
                        data-slider-options='{ 
                            "loop": true, 
                            "slidesPerView": "1", 
                            "allowTouchMove":true, 
                            "autoplay": false, 
                            "keyboard": { "enabled": true, "onlyInViewport": true }, 
                            "navigation": { "nextEl": ".swiper-button-next", 
                            "prevEl": ".swiper-button-prev" }, 
                            "pagination": { "el": ".swiper-pagination", "clickable": true } }'>
                        
                        <div class="swiper-wrapper">

                            <div class="swiper-slide"><img class="cb-screens" src="<?= BASE_URL ?>projects/atlas-ui/assets/cb-screens-no-browser-01.jpg"></div>
                            <div class="swiper-slide"><img class="cb-screens" src="<?= BASE_URL ?>projects/atlas-ui/assets/cb-screens-no-browser-02.jpg"></div>
                            <div class="swiper-slide"><img class="cb-screens" src="<?= BASE_URL ?>projects/atlas-ui/assets/cb-screens-no-browser-03.jpg"></div>

                        </div><!--swiper-wrapper-->

                            <div class="swiper-pagination swiper-pagination-round swiper-pagination-white swiper-full-screen-pagination"></div>
                            <div class="swiper-button-prev swiper-button-black-highlight"></div>
                            <div class="swiper-button-next swiper-button-black-highlight"></div>
                    </div>

                    <!-- If .swiper-slide disaligned again, adjust lateral padding in .citybox .swiper-slide -->
                </div>
            </div><!--row-->
        </div><!--container-->
    </section>