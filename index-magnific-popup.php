    
<?php require_once( 'config.php' ) ?>

<!doctype html>
<html class="no-js" lang="en">
<head>

    
    <!-- title -->
    <title>M3Orange | Michelle Muñoz | UX/UI Designer</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />

    <meta name="description" content=" ">
    <meta name="keywords" content="">

    <link rel="shortcut icon" href="<?= BASE_URL ?>images/favicon.png">
    <link rel="apple-touch-icon" href="<?= BASE_URL ?>images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= BASE_URL ?>images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= BASE_URL ?>images/apple-touch-icon-114x114.png">



    <link rel="stylesheet" href="magnific-popup/magnific-popup.css">

    <!--[if IE]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->

<link rel="stylesheet" href="<?= BASE_URL ?>_style-overwrites.css" />

</head>


<body class="home">

    <!-- start header -->
    <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->




        <section id="home-text-intro" class="wow fadeIn">
            <div class="container">
                <div class="row"> <!-- justify-content-center-->





<div class="gallery">
    <a href="gal/800x500-03.png">Open image 1 (gallery #2)</a>
    <a href="gal/800x500-04.png">Open image 2 (gallery #2)</a>
    <a href="gal/800x500-05.png">Open image 2 (gallery #2)</a>
</div>


                </div>
            </div>
        </section>

<script>
    $('.gallery').each(function() { // the containers for all your galleries
    $(this).magnificPopup({
        delegate: 'a', // the selector for gallery item
        type: 'image',
        gallery: {
          enabled:true
        }
    });
});
</script>

<!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- Magnific Popup core JS file -->
<script src="magnific-popup/jquery.magnific-popup.js"></script>
   <script src="magnific-popup/jquery.magnific-popup.min.js"></script> 
        <script type="text/javascript" src="<?= BASE_URL ?>js/main.js"></script>






</body>

</html>