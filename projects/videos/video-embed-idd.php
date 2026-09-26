<section id="block-intro-slider" class="idd-hero">
    <div class="container">
        <div class="row video-embeds-all idd-hero-video">
            <div class="col col-12 col-lg-8 offset-lg-2">
                <div class="all-video-items">
                    <div id="video-container">
                        <div class="control-area">
                            <button id="playPauseBtn01"><img src="<?= BASE_URL ?>images/video-controls/video-btn-pause.png"/></button>
                            <div class="view-larger-link-white">
                                <a href="" id="idd-demo-loop-vimeo" target="_blank"> View in Vimeo</a>
                            </div>
                        </div>
                    </div>
                    <video id="video01" autoplay="autoplay" muted="muted" loop="loop" playsinline>
                            <source src="https://m3orange.com/portfolio/portfolio-assets/videos/idd-demo-loop.mp4" type="video/mp4">
                    </video>
                </div>

            </div>
        </div>
    </div>
</section>  

<style>




.all-video-items{ z-index: 100; }

        .idd-hero-video  #video-container{
        width: 100%;
        height: 100%;
            /*  aspect-ratio: 2/1.2; Needs a height. Otherwise it's collapsed. */
        background-color: transparent;
        position: absolute;
        top: 0;
        left: 0;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-image: url("https://m3orange.com/portfolio/portfolio-assets/videos/idd-demo-loop.mp4");

    }

        video{
        /* position: absolute; */
            position: relative;
        top: 0;
        left: 0;
        /* width: 100%;
        height: 100%; It was stretching almost to viewport's edges. */ 
        max-width: 100%;
        height: auto;
        object-fit: cover;

    }


</style>

