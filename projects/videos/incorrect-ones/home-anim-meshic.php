
<div id="video-container-01" class="home-hero-animation">
    <video id="bg-video" autoplay="autoplay" muted="muted" loop="loop" playsinline poster="">
        <!-- ADD THE MATCHING ID HERE and leave src empty -->
        <source id="home-hero-anim" src="" type="video/mp4" class="mp4-here" >
    </video>
</div>

<style>

video{ max-width: 100%;}

.home-hero-animation {max-width: 800px;}

    #video-container-01{
    width: 100%;
    height: fit-content;
    overflow: hidden;
    background-color: transparent;
    aspect-ratio: 2 / 1.55;
    position: absolute;
    bottom: 20%;
    right: 10%;
    }

    #bg-video {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 0;
    opacity: 1;
    min-width: 100% !important;
    object-fit: cover;
}

</style>

