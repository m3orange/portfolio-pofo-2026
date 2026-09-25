
<div class="media-queries-object">
    <div class="media-queries-guide"></div>
    <div class="text-box"></div>
</div>


<style>
.media-queries-guide{
    width: 100%;
    height: 10px;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 10000;
}

.text-box::before{
    color: #FFF;
    font-size: 14px;
    font-weight: 600;
    position: fixed;
    z-index: 100001;
    /* top: 16px; */
    top:0px;
    left: 0px;
    width: fit-content;
    padding: 6px 20px;

}
/*

260921_1450 - Final Media Queries 

Cheatsheet - https://getbootstrap.com/docs/5.1/layout/breakpoints/

SASS Breakpoints:
$grid-breakpoints: (
  xs: 0,
  sm: 576px,
  md: 768px,
  lg: 992px,
  xl: 1200px,
  xxl: 1400px
);

*/


/* .col-xxl-* | Extra Extra Large / Large Desktops. */
@media (min-width: 1400px) {
    .text-box::before{content: 'Extra Extra Large | .col-xxl  |  1400px and beyond | Large Desktops';}
    .text-box::before, .media-queries-guide{background-color: #FF0000;}
}

/* .col-xl-* | Extra Large / Large Desktops. */
@media (min-width: 1200px) and (max-width: 1399px) {
    .text-box::before{content: 'Extra Large | .col-xl  |  1200px to 1399px | Large Desktops';}
    .text-box::before, .media-queries-guide{background-color: #2596ca;}
}

/* col-lg-* | Large. */
@media (min-width: 992px) and (max-width: 1199px) {
    .text-box::before{content: 'Large | .col-lg  |  992px to 1199px | Laptops (?)';}
    .text-box::before, .media-queries-guide{background-color: #FF7700;}
}

/* col-md-* |  Medium / Tablets. */
@media (min-width: 768px) and (max-width: 991px) {
    .text-box::before{content: 'Medium | .col-md |  768px to 991px | Tablets';}
    .text-box::before, .media-queries-guide{background-color: #7e1fd4;}
}

/* col-sm-* |  XSmall and Small */
@media (max-width: 767px) {
    .text-box::before{content: 'Small | .col-sm  |  576px to 767px | Phones';}
    .text-box::before, .media-queries-guide{background-color: #479a09;}
}




/* ----------- 
Specifically for tablets
This is iPad Pro 10.5" 
Source: https://css-tricks.com/snippets/css/media-queries-for-standard-devices/

iPad Horizontal - is Blue
Vertical is Orange

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
    .text-box::before{content: 'iPad Horizontal | Extra Large | .col-xl';}
    .text-box::before, .media-queries-guide {border: 2px solid white;}
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
        .text-box::before{content: 'iPad Vertical | Large | .col-lg';}
        .text-box::before, .media-queries-guide {border: 2px solid white;}
}



</style>