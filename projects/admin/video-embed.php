



<section>
    <div class="container">
        <div class="row">
            <div class="col col-8">
                <div id="video-container-01" class="admin-01">
                    <video id="video-01" autoplay="autoplay" muted="muted" loop="loop" playsinline>
                        <source src="https://framerusercontent.com/assets/CwBu0bv6ntKVD1GG71zV10BPXw.mp4" type="video/mp4">
                    </video>
                </div>
                <!--Do not add controls parameter. They're added, but autoplay is overriden and user would need to click.-->
            </div>
            <div class="col col-4">
            <h6>That dude</h6>
            <div class="label-guides-02">[red].video-container</div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col col-8">
                <div id="video-container-02" class="admin-01">
                    <video id="video-02" autoplay="autoplay" muted="muted" loop="loop" playsinline>
                        <source src="https://framerusercontent.com/assets/CwBu0bv6ntKVD1GG71zV10BPXw.mp4" type="video/mp4">
                    </video>
                </div>
                <!--Do not add controls parameter. They're added, but autoplay is overriden and user would need to click.-->
            </div>
            <div class="col col-4">
                <h6>M3 Tweaks</h6>
                <div class="label-guides-02">Added: display as cover</div>
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
    background: url('https://framerusercontent.com/assets/CwBu0bv6ntKVD1GG71zV10BPXw.mp4') center / cover no-repeat;
    background: url(https://framerusercontent.com/assets/CwBu0bv6ntKVD1GG71zV10BPXw.mp4) center / cover no-repeat;

}


#video-container-02 {
border: 1px solid purple;
background: url(https://framerusercontent.com/assets/CwBu0bv6ntKVD1GG71zV10BPXw.mp4) ;
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




<section>
    <div class="container">
        <div class="row">
            <div class="col col-8">
                <div id="w3schools">
                    <video autoplay muted loop id="myVideo">
                        <source src="https://framerusercontent.com/assets/CwBu0bv6ntKVD1GG71zV10BPXw.mp4" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>

                    <div class="content">

                    <p>Lorem ipsum</p>
                    <button id="myBtn" onclick="myFunction()">Pause</button>
                    </div>

                    <script>
                    var video = document.getElementById("myVideo");
                    var btn = document.getElementById("myBtn");

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
                </div>

            </div>
            <div class="col col-4">
                <h6>W3Schools</h6>
            </div>
        </div>
    </div>

    <style>

        #myVideo {
        /* position: relative;
        right: 0;
        bottom: 0; */
        min-width: 100%; 
        min-height: 100%;
        }

        .content {
       position: absolute;
    bottom: 0;
    background: rgba(0, 0, 0, 0.8);
    color: #f1f1f1;
    width: 100%;
    padding: 10px;
      font-size: 14px;
        }

        #myBtn {
        font-size: 14px;
            padding: 5px;
            border: none;
            background: #ffffff47;
            color: #fff;
            cursor: pointer;
        }

        #myBtn:hover {
        background: #ddd;
        color: black;
        }

    </style>



</section>


