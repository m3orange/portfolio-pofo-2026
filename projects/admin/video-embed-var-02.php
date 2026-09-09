


<section>
    <div class="container">
        <div class="row">
            <div class="col col-11">
                <div id="w3schools">
                    <video autoplay muted loop id="myVideo">
                        <source src="https://m3orange.com/portfolio/videos/musicasa-demo-260519_1336.mp4" type="video/mp4">
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
            <div class="col col-1">
                <h6>W3Schools</h6>
            </div>
        </div>
    </div>

    <style>

        #w3schools{
              background-color: #ff00c3;
        }

        #myVideo {
        position: relative;
        right: 0;
        bottom: 0;
        min-width: 100%; 
        min-height: 100%;
        z-index: 10;
        }

        .content {
position: absolute;
    bottom: -67px;
    background: rgb(255 1 195 / 74%);
    color: #f1f1f1;
    width: 95%;
    padding: 10px;
      font-size: 14px;
             z-index: 15;
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


