


<section>
    <div class="container">
        <div class="row">
            <div class="col col-8 offset-2">
                <div id="w3schools">
                    <video autoplay muted loop id="myVideo">
                        <source src="https://framerusercontent.com/assets/CwBu0bv6ntKVD1GG71zV10BPXw.mp4" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>

                    <div class="content">
                    <!-- <p>Lorem ipsum</p> -->
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
        </div>
    </div>



    <style>

        #w3schools{
              /* background-color: #ff00c3; */
              overflow: hidden;
              /* Does not work if child is position: absolute or fixed */
        }

        #myVideo {
        position: relative;
        right: 0;
        bottom: 0;
        min-width: 100%; 
        min-height: 100%;
        z-index: 10;

        border: 3px solid purple;
        }

        .content {
position: relative;
    bottom: 0;
    background: #000000b8;
    color: #f1f1f1;
    width: 100%;
    padding: 10px;
    font-size: 14px;
    z-index: 15;
    /* position: absolute; */

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


