<!-- 260922_0127 -->
   
  <section id="home-hero-opener" class="p-0 position-relative wow color-around-svg"
    style="visibility: visible; ">
        <div id="hero-statement-wrapper" class="container-fluid h-100">
          <div class="row h-100 m-0 p-0">
            <div class="col col-12 col-xxl-9 col-xl-11 col-lg-12 d-flex justify-content-center flex-column text-left text-md-start">
              <div class="hero-statement">
                <div class="col col-12 col-xxl-8 col-xl-11 col-lg-12 sm-margin-20px-bottom statement-wrapper">
                  <h1>I'm a senior product designer with a passion for <span class="hero-emphasis-orange">human-centered
                      design, technology and usability.</span> I'm seeking a position in <span class="hero-emphasis-orange">design engineering.</span></h1>
                </div>
              </div>
              <!-- <div class="blurred-panel"></div> -->
          </div>
        </div>

    <div class="home-grid-top">
      <div class="text-block-01">M. Architecture • MFA Design</div>
      <div class="text-block-02">hello@michellemunoz.info</div>
    </div>

    <div class="home-grid-bottom">
      <div class="container">
        <div class="col col-12 col-md-6 col-left">San Juan, Puerto Rico</div>
        <div class="col col-12 col-md-6 col-right">18º28'00 N, 066º06'51 W</div>
      </div>
    </div>

    <div class="homepage-hero-video">
        <div id="video-container"></div>
        <video autoplay="autoplay" muted="muted" loop="loop" playsinline>
            <source src="https://m3orange.com/portfolio/portfolio-assets/animations/meshic-poly-anim-square-260921.mp4" type="video/mp4">
        </video>
    </div>

  </section>


<style>

  .blurred-panel{ 
background-color: rgb(255 255 255 / 39%);
    filter: blur(3px);
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    backdrop-filter: blur(3px);
}
  
#home-hero-opener{background-color: #000000f5;}

.hero-statement{ z-index: 20;}

#hero-statement-wrapper.container-fluid { /* border: 1px dashed rgb(255 196 0); */max-width: 90%; z-index: 1000;}

#hero-statement-wrapper.container-fluid .col{padding: 0px;}

.homepage-hero-video { 
  position: absolute; 
  top: 2%; 
  right: 0%; 
  z-index: 1;
}

.homepage-hero-video #video-container{
  width: 100%;
  height: 100%;
  background-color: transparent;
  position: relative;
  top: 0;
  left: 0;
  z-index: 10;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-image: url("https://m3orange.com/portfolio/portfolio-assets/animations/meshic-poly-anim-square-260921.mp4");
}

.homepage-hero-video video{
  /* position: absolute; */
    position: relative;
  top: 0;
  left: 0;
  z-index: 5;
  /* width: 100%;
  height: 100%; It was stretching almost to viewport's edges. */ 
  /* width: 1200px; */
  height: auto;
  object-fit: cover;

}


.hero-statement h1{font-size: 70px; line-height: 1.4em;}
#home-hero-opener{    height: 100vh!important;}



/* #FF0000 | RED | Extra Extra Large | .col-xxl | 1400px and beyond | Large Desktops */
@media (min-width: 1400px) {
    .hero-statement h1{
      font-size: 70px; 
      line-height: 1.4em;

      /* Guides - delete */
      border-left: 2px solid #FF0000;
      padding-left: 6px!important;
    }

    #home-hero-opener{
      height: 100vh!important;
    }
}

/* #2596CA | BLUE | Extra Large | .col-xl  | 1200px to 1399px | Large Desktops */
@media (min-width: 1200px) and (max-width: 1399px) {
    .hero-statement h1{
        font-size: 58px; 
      line-height: 1.4em;

    /* Guides - delete */
      border-left: 2px solid #2596CA;
      padding-left: 6px!important;
    }

    #home-hero-opener{
      height: 80vh!important;
    }
    .homepage-hero-video video{
      max-width: 800px;
    }
    
    .homepage-hero-video { 
      top: 16%;
      left: 38%;
    }

}

/* #FF7700 | ORANGE | Large | .col-lg  | 992px to 1199px | Laptops (?) */
@media (min-width: 992px) and (max-width: 1199px) {
    .hero-statement h1{
        font-size: 58px; 
        line-height: 1.4em;

        /* Guides - delete */
        border-left: 2px solid #FF7700;
        padding-left: 6px!important;
    }
      #home-hero-opener{
        height: 80vh!important;
      }

      .homepage-hero-video { 
        bottom: 76%;
        left: 25%;
      }
}

/* ##7E1FD4 | PURPLE | Medium | .col-md | 768px to 991px | Tablets */
@media (min-width: 768px) and (max-width: 991px) {
      .hero-statement h1{
        font-size: 46px; 
        line-height: 1.4em;

      /* Guides - delete */
        border-left: 2px solid #7E1FD4;  
        padding-left: 6px!important;
      }

      #home-hero-opener{
        height: 80vh!important;
      }
      .homepage-hero-video { 
        bottom: 75%;
        left: 27%;
      }

}


/* #479A09 | GREEN | Extra Small (no infix – <576px) and Small (.col-sm - 576px up to 767px ) */
@media (max-width: 767px) {

      .hero-statement h1{
          font-size: 34px; 
          line-height: 1.4em;

      /* Guides - delete */
        border-left: 2px solid #479A09;  
        padding-left: 6px!important;
      }

      #home-hero-opener{
        height: 100vh!important;
      }

      .homepage-hero-video { 
        top: 28%;
        right: -13%;
      }

     .homepage-hero-video video{
      max-width: 1000px;
    }
}

/* ----------- 
Specifically for tablets
This is iPad Pro 10.5" 
Source: https://css-tricks.com/snippets/css/media-queries-for-standard-devices/
----------- */

/* Portrait and Landscape */
@media only screen 
  and (min-device-width: 834px) 
  and (max-device-width: 1112px)
  and (-webkit-min-device-pixel-ratio: 2) {

}

/* Landscape */
/* Declare the same value for min- and max-width to avoid colliding with desktops */
/* Source: https://medium.com/connect-the-dots/css-media-queries-for-ipad-pro-8cad10e17106*/
@media only screen 
  and (min-device-width: 1112px) 
  and (max-device-width: 1112px) 
  and (orientation: landscape) 
  and (-webkit-min-device-pixel-ratio: 2) {
    .hero-statement h1{color: rgba(255,255,255,0.5); font-size: 57px;}
}

/* Portrait */
/* Declare the same value for min- and max-width to avoid colliding with desktops */
/* Source: https://medium.com/connect-the-dots/css-media-queries-for-ipad-pro-8cad10e17106*/
@media only screen 
  and (min-device-width: 834px) 
  and (max-device-width: 834px) 
  and (orientation: portrait) 
  and (-webkit-min-device-pixel-ratio: 2) {
        .hero-statement h1{color: rgba(255,255,255,0.2); font-size: 50px;}

}





    /* #FF0000 | RED | Extra Extra Large | .col-xxl | 1400px and beyond | Large Desktops */
    @media (min-width: 1400px) {
    }

    /* #2596ca | BLUE | Extra Large | .col-xl  | 1200px to 1399px | Large Desktops */
    @media (min-width: 1200px) and (max-width: 1399px) {
    }

    /* #FF7700 | ORANGE | Large | .col-lg  | 992px to 1199px | Laptops (?) */
    @media (min-width: 992px) and (max-width: 1199px) {
    }

    /* #7e1fd4 | PURPLE | Medium | .col-md | 768px to 991px | Tablets */
    @media (min-width: 768px) and (max-width: 991px) {
    }

    /* #479a09 | GREEN | Extra Small (no infix – <576px) and Small (.col-sm - 576px up to 767px ) */
    @media (max-width: 767px) {
    }





</style>



