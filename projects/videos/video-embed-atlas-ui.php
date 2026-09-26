<section id="block-intro-slider" class="p-0">
    <div class="container">
        <div class="row video-embeds-all atlas-ui-hero-video">
            <div class="col col-12 col-lg-8 offset-lg-2">
                <div class="all-video-items">
                    <div id="video-container">
                        <div class="control-area">
                            <button id="playPauseBtn01"><img src="<?= BASE_URL ?>images/video-controls/video-btn-pause.png"/></button>
                            <div class="view-larger-link-white">
                                <a href="" id="atlas-ui-vimeo" target="_blank">View in Vimeo</a>
                            </div>
                        </div>
                    </div>
                    <video autoplay="autoplay" muted="muted" loop="loop" playsinline>
                            <source src="https://m3orange.com/portfolio/portfolio-assets/videos/atlas-ui-animation.mp4" type="video/mp4">
                    </video>
                </div>


            </div>
        </div>
    </div>
</section>  


<style>
    .atlas-ui-hero-video #video-container{
    background-image: url("https://m3orange.com/portfolio/portfolio-assets/videos/atlas-ui-animation.mp4");
}
.atlas-ui-hero-video video{
    width: 100%;
}
</style>

