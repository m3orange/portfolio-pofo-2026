

<section id="block-intro-slider" class="admin-hero">
    <div class="container">
        <div class="row video-embeds-all admin-hero-video">
            <div class="col col-12 col-lg-8 offset-lg-2">
                <div class="all-video-items">
                    <div id="video-container"></div>
                    <video id="video01" autoplay="autoplay" muted="muted" loop="loop" playsinline>
                            <source src="https://m3orange.com/portfolio/portfolio-assets/videos/admin-demo-loop.mp4" type="video/mp4">
                    </video>
                    <div class="control-area">
                        <button id="playPauseBtn01"><img src="<?= BASE_URL ?>images/video-controls/video-btn-pause.png"/></button>
                        <div class="view-larger-link">
                            <a href="" id="admin-demo-vimeo" target="_blank"> View in Vimeo <img src="<?= BASE_URL ?>images/arrow-view-website-black.svg" />
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>  

<style>


.video-embeds-all .control-area{ display: none;}

.all-video-items{ z-index: 100; }

        .admin-hero-video  #video-container{
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
        background-image: url("https://m3orange.com/portfolio/portfolio-assets/videos/admin-demo-loop.mp4");



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


    .admin-hero-video video{
        width: 100%;

    }



</style>

<script>
var video = document.getElementById("video01");
var btn = document.getElementById("playPauseBtn01");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>