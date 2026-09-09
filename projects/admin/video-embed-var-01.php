



<section>
    <div class="container">
        <div class="row">
            <div class="col col-8 offset-2">
                <div id="video-container-01" class="admin-01">
                    <video id="video-01" autoplay="autoplay" muted="muted" loop="loop" playsinline>
                        <source src="https://m3orange.com/portfolio/videos/citybox-screens-in-laptop.mp4" type="video/mp4">
                    </video>
                </div>
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


    .label-guides-02{
            color: #0b6bd7
    }
    


#video-container-01,
#video-container-02,
#w3schools {
    width: 100%;
    aspect-ratio: 2 / 1.28;
    z-index: 1;
    top: 0;
    left: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 0;
    margin: 0;
}

#video-container-01{
    border: 1px solid red;
    background: url('https://m3orange.com/portfolio/videos/citybox-screens-in-laptop.mp4') center / cover no-repeat;
    background: url(https://m3orange.com/portfolio/videos/citybox-screens-in-laptop.mp4) center / cover no-repeat;

}


#video-container-02 {
border: 1px solid purple;
background: url(https://m3orange.com/portfolio/videos/citybox-screens-in-laptop.mp4) ;
background-repeat: no-repeat;
object-fit: cover!important;
overflow: hidden!important;
}

#video-01,
#video-02{
position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1;
    opacity: 1;

    }


#video-01   {min-width: 100% !important;}

#video-02   {width: 100% !important; height: 100%!important;}



</style>

