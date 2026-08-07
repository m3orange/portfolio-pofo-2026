

<div id="pagetop"></div>


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
    /* background-color: rgba(255,255,255,0.3);
        background-color: rgba(0,0,0,0.3); */
        background-color: rgb(8 53 68 / 76%);
    position: absolute;
    height: 100%;
    width: 60%;
    top: 0;
    left: 0;
    backdrop-filter: blur(10px);
}

.background-video-03{
    position: absolute;
    bottom: 10%;
    right: 10%;
    z-index: 0;
    opacity: 1;
}

.background-video-03 video{width: 100%!important;}

.video-background-content{
      z-index: 10;
    text-align: center;
    color: #ffffff;
    width: 60%;

}

</style>


<section id="home-hero-opener" class="p-0 full-screen position-relative wow" style="visibility: visible;">     


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

        <div class="filter-layer-above"></div>
      <div class="background-video-03 ">
        <video autoplay muted loop playsinline class="">
            <source src="<?= BASE_URL ?>testing-videos/amoeba-01.mp4" type="video/mp4">
        </video>
      </div>

        <div class="blurred-panel-behind"></div>

<div class="home-grid-top">
      <div class="text-block-01">M. Architecture • MFA Design</div>
      <div class="text-block-02">hello@michellemunoz.info</div>
</div>



<div class="home-grid-bottom d-flex-centering" style="border:none!important;">

  <div class="container">
    <div class="row d-flex d-flex-centering" style="justify-content: space-between;">
    <div class="col col-6">San Juan, Puerto Rico</div>
    <div class="col col-6 text-align-right">18º28’00 N, 066º06’51 W</div>
    </div>
  </div>

</div>

<div class="home-big-words">
<img class="word-01" src="<?= BASE_URL ?>home/home-big-words-slab-01.svg" />
<!-- <img class="word-02" src="<?= BASE_URL ?>home/home-big-words-02.svg" /> -->
</div>
  </section>
