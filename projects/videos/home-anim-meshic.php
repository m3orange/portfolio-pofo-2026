<section id="block-intro-slider" class="p-0">
    <div class="container">
        <div class="row home-hero-video">
            <div class="col col-12 col-lg-8 offset-lg-2">
                <div id="video-container"></div>
                <video autoplay="autoplay" muted="muted" loop="loop" playsinline>
                    <source src="https://m3orange.com/portfolio/portfolio-assets/animations/260919-meshic-poly-anim-contrast.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</section>  


<style>
    .home #video-container{
    width: 100%;
    height: 100%;
    background-color: transparent;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 10;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-image: url("https://m3orange.com/portfolio/portfolio-assets/animations/260919-meshic-poly-anim-contrast.mp4");
}

.home-hero-video video{
    /* position: absolute; */
        position: relative;
    top: 0;
    left: 0;
    z-index: 5;
    /* width: 100%;
    height: 100%; It was stretching almost to viewport's edges. */ 
    max-width: 100%;
    height: auto;
    object-fit: cover;
}


</style>

