<?php include_once("config.php"); ?>

<!-- Replit's fixed code from 260524_0947 -->

<?php include ROOT_PATH . 'includes/header.php'; ?>


<body class="home">

    <!-- start header -->
    <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->



    <section id="resume" class="wow fadeIn">
        <div class="container">

            <!-- One experience listing ---- Begin -------->

            <div class="row grid-lines listing-header">
                <div class="col col-12 col-md-8">
                    <h5>[company]</h5>
                </div>
                <div class="col col-12 col-md-4">
                    [city], [date_start] - [date_end]
                </div>
            </div>

            <div class="row grid-lines rsm-item-header">
                <div class="col col-12 col-md-12">
                    <div class="rsm-item-intro">
                    [intro]
                    </div>
                    <div class="rsm-item-bullets">
                        <ul>
                        [bullets]
                        </ul>
                    </div>
                </div>
            </div>

            <!-- One experience listing ---- End -------->


        </div>
    </section>




</body>

</html>