

<div id="pagetop"></div>




<section id="home-hero-opener" class="p-0 full-screen position-relative wow" style="visibility: visible; background-color: #0b0119 !important;">     


  <div class="video-background-container">
    <div class="video-background-content">
      <div class="container h-100">
        <div class="row h-100 m-0 p-0">
          <div class="col col-12 col-md-11 d-flex justify-content-center flex-column text-left text-md-start">
            <div class="home-hero-text-block-02">
                <div class="sm-margin-20px-bottom">
                  <h1>I'm a senior product designer with a passion for human-centered design, technology and usability.</h1>
                </div>
                <div class="margin-50px-top col-12 col-md-9"><h2>I’m seeking a position in product design or UX engineering.</h2></div>
            </div>
          </div><!-- cols-->
        </div><!-- row-->
      </div>
    </div>
  </div>


  <!--
    <div class="filter-layer-above"></div>

   <div class="background-video-03 ">
      <video autoplay muted loop playsinline class="">
          <source src="<?= BASE_URL ?>testing-videos/amoeba-02-1200pxx1200px.mp4" type="video/mp4">
      </video>
    </div> 
    
    -->

    <div class="background-video-03 ">
      <video autoplay muted loop playsinline class="">
          <source src="<?= BASE_URL ?>testing-videos/concentricus-01.mp4" type="video/mp4">
      </video>
    </div>

      <div class="blurred-panel-behind">
        <div class="animated-gradient-test-01"></div>
      </div>


  <div class="home-grid-top">
        <div class="text-block-01">M. Architecture • MFA Design</div>
        <div class="text-block-02">hello@michellemunoz.info</div>
  </div>

    <div class="home-grid-bottom d-flex-centering">

      <div class="container">
        <div class="row d-flex d-flex-centering" style="justify-content: space-between;">
        <div class="col col-6">San Juan, Puerto Rico</div>
        <div class="col col-6 text-align-right">18º28’00 N, 066º06’51 W</div>
        </div>
      </div>

    </div>

    <div class="home-big-m">
      <img class="word-01" src="<?= BASE_URL ?>images/munoz-logo-symbol-only.svg" />
    </div>

    <!-- <div class="home-big-words">
      <img class="word-01" src="<?= BASE_URL ?>home/home-big-words-slab-01.svg" />
    </div> -->

  </section>


  <style>
  .home #home-hero-opener {
    overflow: hidden !important;
    background-color: #020a13 !important;
}

.filter-layer-above{
    z-index: 1;
    background-color: #126c7f;
    position: absolute;
    height: 100%;
    width: 100%;
    opacity: 0.3;
    top: 0;
    left: 0;

}

.blurred-panel-behind{
    z-index: 5;
    /* background-color: rgb(8 53 68 / 76%); */
    position: absolute;
    height: 100%;
    width: 70%;
    top: 0;
    left: 0;
    backdrop-filter: blur(5px);
    overflow: hidden;
}

.background-video-03{
    position: absolute;
    bottom: 12%;
    right: 8%;
    z-index: 0;
    opacity: 1;
}

.home-big-m{
      position: absolute;
    left: 4%;
    bottom: -4%;
    width: 30%;
    opacity: 0.2;
    text-align: right;
    z-index: 10;
}

.background-video-03 video{width: 100%!important;}

.video-background-content{
      z-index: 10;
    text-align: center;
    color: #ffffff;
    width: 70%;

}




.animated-gradient-test-01 {
  width: 70vw;
  height: 100%;
  z-index: 5;
  opacity: 0.6;

background: 
  radial-gradient(100% 100% at var(--4-x-position) var(--4-y-position), #3cc2dd 0%, transparent),
  radial-gradient(100% 100% at var(--5-x-position) var(--5-y-position), #00FAA7 0%, transparent),
  #1b253b;
animation-name: main; 
animation-iteration-count: infinite; 
animation-duration: 10s; 
transition-timing-function: ease-in;}

@property --4-x-position { syntax: '<percentage>'; inherits: false; initial-value: 20%; }
@property --4-y-position { syntax: '<percentage>'; inherits: false; initial-value: 80%; }
@property --5-x-position { syntax: '<percentage>'; inherits: false; initial-value: 80%; }
@property --5-y-position { syntax: '<percentage>'; inherits: false; initial-value: 20%; }


:root {

--4-x-position: 20%

--4-y-position: 80%

--5-x-position: 80%

--5-y-position: 20%

}


@keyframes main { 25% {--4-x-position: 15%;--4-y-position: 15%;--5-x-position: 85%;--5-y-position: 80%;}50% {--4-x-position: 80%;--4-y-position: 15%;--5-x-position: 15%;--5-y-position: 85%;} }

  </style>



          
    