    <section id="block-intro-slider" class="p-0">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-lg-8 offset-lg-2">
                    <div id="video-container-01" class="admin-01">
                        <video id="bg-video" autoplay="autoplay" muted="muted" loop="loop" playsinline 
                        poster="idd-demo-loop-poster">

                            <!-- ADD THE MATCHING ID HERE and leave src empty -->
                            <source id="idd-demo-loop" src="" type="video/mp4" class="mp4-here" >
                        </video>
                    </div>
                    <div class="control-area area-overlay">
                        <button id="play-pause-btn"><img src="<?= BASE_URL ?>images/video-controls/video-btn-pause.png"/></button>
                        <div class="view-larger-link">
                            <a href="" id="idd-demo-loop-vimeo" target="_blank"> View in Vimeo <img src="<?= BASE_URL ?>images/arrow-view-website-black.svg" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  

<style>
    #video-container-01 {
    position: relative;
    width: 100%;
    height: fit-content;
    overflow: hidden;
    background-color: #111111;
    aspect-ratio: 2 / 1.5;
}
    #block-intro-slider{
    padding-bottom: 40px !important;
    }

</style>