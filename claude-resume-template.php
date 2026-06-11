<?php include_once("config.php"); ?>

<!-- Replit's fixed code from 260524_0947 -->

<?php include ROOT_PATH . 'includes/header.php'; ?>


<body class="home">

    <!-- start header -->
    <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->

    <section id="home-hero-opener" class="p-0 full-screen position-relative wow animate__fadeIn" style="height: 1029px; visibility: visible; animation-name: fadeIn;">
        <div class="opacity-medium bg-extra-dark-gray z-index-0"></div>
        <div class="container h-100">
            <div class="row h-100">
                <div
                    class="col col-12 col-xxl-8 col-xl-10 col-lg-11 col-md-11 d-flex justify-content-center flex-column text-left text-md-start">
                    <div>
                        <h1 class="lg-w-60 md-w-70 lg-line-height-auto sm-w-100 sm-margin-15px-bottom"> I'm a senior
                            product designer with a passion for human-centered design and usability.</h1>
                        <h3>I'm trained in both architecture and graphic design, and have over 20 years of experience
                            working in UX/UI.</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section id="resume" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h5 class="serif-font">Where Airtable data should be displayed</h5>

                    <div class="notes-for-claude">
                        <div>Job Listing - Format I want to accomplish</div>
                        <div><img src="claude-guides/data-final-format.png"></div>
                    </div>

                    <div class="notes-for-claude">
                        <div>Airtable records (blue) vs. hard-coded data [black]</div>
                        <div><img src="claude-guides/airtable-records-in-blue.png"></div>
                    </div>

                </div>


                <div class="col-4">
                    <h5 class="serif-font">Reserved for other type of content</h5>
                </div>
            </div>
        </div>
    </section>

    <style>
        .notes-for-claude {
            padding: 20px;
            background-color: #85cde166;
            border: 1px solid #d4eaff6b;
            margin-bottom: 80px;
            font-family: var(--ibm-mono-01), sans-serif !important;
            font-weight: 500;
        }

        .notes-for-claude img {
            margin-top: 40px;
        }
    </style>




    <!-- start footer -->
    <?php include_once("includes/global-footer.php"); ?>


</body>

</html>