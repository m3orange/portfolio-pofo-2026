    <section>
        <div class="container">
            <div class="row" style="justify-content: center;">
                <div class="col col-12 col-lg-8">
                    <div id="video-container-01" class="admin-01">
                        <video id="bg-video" autoplay="autoplay" muted="muted" loop="loop" playsinline 
                        poster="map-tools-demo-light-poster">

                            <!-- ADD THE MATCHING ID HERE and leave src empty -->
                            <source id="map-tools-demo-light" src="" type="video/mp4" class="mp4-here" >
                        </video>
                    </div>
                    <div class="control-area area-overlay"><!-- area-overlay-->
                        <button id="play-pause-btn"><img src="<?= BASE_URL ?>images/video-controls/video-btn-pause.png"/></button>
                        <div class="view-larger-link">
                            <a href="" id="map-tools-demo-light-vimeo" target="_blank"> View in Vimeo <img src="<?= BASE_URL ?>images/arrow-view-website-black.svg" />
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
    background-color: transparent;
    aspect-ratio: 2 / 1.45;
}

.control-area.area-overlay {
    position: absolute;
    bottom: -58px!important;
    right: 20px!important;
}
    </style>

