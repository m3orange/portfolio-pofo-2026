<section id="block-intro-slider" class="p-0">
    <div class="container">
        <div class="row atlas-ui-hero-video">
            <div class="col col-12 col-lg-8 offset-lg-2">
                <div id="video-container"></div>
                <video autoplay="autoplay" muted="muted" loop="loop" playsinline>
                        <source src="https://m3orange.com/portfolio/portfolio-assets/videos/citybox-ui-jitter-blue-bg.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</section>  


<style>


    .atlas-ui-hero-video #video-container{
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
    background-image: url("https://m3orange.com/portfolio/portfolio-assets/videos/citybox-ui-jitter-blue-bg.mp4");

    /*  Still testing these, or they are guides

    z-index: 101!important;
    border: 1px solid #59bbd6;

        */
}

video{
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

    /*  Still testing these, or they are guides
            z-index: 100!important;
        */


}


.atlas-ui-hero-video video{
    width: 100%;

}

</style>

