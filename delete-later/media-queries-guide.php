

<div class="media-queries-guide"></div>
    <div class="text-box"></div>


<style>


.media-queries-guide{
    background-color: #FF7700;

    width: 100%;
    height: 10px;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 10000;
}

.text-box::before{
    background-color: #FF7700;


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








/* .col-xl-* | Extra Large / Large Desktops. */
@media (min-width: 1200px) {


    .text-box::before{
        content:    '.col-xl  |  1200px and larger | Large Desktops';
    }
    .text-box::before,
    .media-queries-guide{   
    background-color: #FF7700;
    }

}

/* col-lg-* | Large. */
@media (min-width: 992px) and (max-width: 1199px) {
    .text-box::before{
        content:    '.col-lg  |  992 to 1199 | Laptops (?)';
    }
    .text-box::before,
    .media-queries-guide{   
    background-color: #d305d3;
    }


}

/* col-md-* |  Medium / Tablets. */
@media (min-width: 768px) and (max-width: 991px) {

    .text-box::before{
    content:    '.col-lg |  768 to 991 | Tablets';
    }
    .text-box::before,
    .media-queries-guide{   
    background-color: #2596ca;
    }

}


/*  Small */
@media (max-width: 767px) {
    .text-box::before{
    content:    '.col-sm  |  576 to 767 | Phones';
    }
    .media-queries-guide,
    .text-box::before{   
    background-color: #479a09;
    }
}


/*




Extra Large (≥1200px): .col-xl-*
Large (≥992px): .col-lg-*
Medium (≥768px): .col-md-*
Small (≥576px): .col-sm-*
Extra Small (<576px): .col-*



*/



</style>