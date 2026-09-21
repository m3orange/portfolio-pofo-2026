

<section>
    <div class="container">
        <div class="row musicasa-hero-video">
            <div class="col col-12 col-lg-8 offset-lg-2">
                <div id="video-container"></div>
                <video autoplay="autoplay" muted="muted" loop="loop" playsinline>
                        <source src="https://m3orange.com/portfolio/portfolio-assets/videos/musicasa-demo-260519_1336.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</section>  

<style>

        .musicasa-hero-video  #video-container{
        width: 100%;
        height: 100%;
            /*  aspect-ratio: 2/1.2; Needs a height. Otherwise it's collapsed. */
        background-color: transparent;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 10;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-image: url("https://m3orange.com/portfolio/portfolio-assets/videos/musicasa-demo-260519_1336.mp4");



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

    }


    .musicasa-hero-video video{
        width: 100%;

    }



</style>