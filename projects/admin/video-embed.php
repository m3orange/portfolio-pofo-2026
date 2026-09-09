

<section>
<div class="container">
    <div class="row">
        <div class="col col-12 col-md-8">
            <div id="video-container">This is fucking hard.</div>
            <video id="video" autoplay="autoplay" muted="muted" loop="loop" playsinline>
                <!--This is video admin (doesn't start in black).-->
                <source src="https://framerusercontent.com/assets/CwBu0bv6ntKVD1GG71zV10BPXw.mp4" type="video/mp4">
            </video>
        </div>
    </div>
</div>
</section>




<style>

#video-container {
width: 100%;
    aspect-ratio: 2 / 1.28;
    background: url(https://framerusercontent.com/assets/CwBu0bv6ntKVD1GG71zV10BPXw.mp4) no-repeat;
    /* background: url(https://framerusercontent.com/assets/CwBu0bv6ntKVD1GG71zV10BPXw.mp4) no-repeat #000000; */
    z-index: 1;
    top: 0;
    left: 0;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}


video {
position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1;
    /* width: 100% !important; */
    /* object-fit: cover; */
    width: 96% !important;
    opacity: 1;
    background-color: #000;

    }

    

</style>

