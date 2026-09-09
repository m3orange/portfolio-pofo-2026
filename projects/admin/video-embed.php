

<section>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-md-8">
                <div id="video-container" class="admin-01">
                    <div class="label-guides-01">[red].video-container</div>
                </div>
                
                    <video id="video" autoplay="autoplay" muted="muted" loop="loop" playsinline>
                        <source src="https://framerusercontent.com/assets/CwBu0bv6ntKVD1GG71zV10BPXw.mp4" type="video/mp4">
                    </video>
                    <!--Do not add controls parameter. They're added, but autoplay is overriden and user would need to click.-->
            </div>
        </div>
    </div>
</section>




<style>

    .label-guides-01,
    .label-guides-02{
    position: absolute;
    top: -26px;
    left: 20px;
    font-size: 14px;
    /* text-transform: uppercase; */
    font-weight: 500;
}


    .label-guides-01{
        color: #e10000;
    }
    


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
    align-items: center;
    justify-content: center;
    background-color: #ff00002e;
    border: 2px solid #ff0000;
    padding: 0;
    margin: 0;
}


video {
position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1;
    min-width: 100% !important;
    opacity: .2;
    border: 1px solid #00ff27;
    }

    .admin .adding-background-color{
        background-color: #000;
    }

    

</style>

