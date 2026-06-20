<?php include_once("config.php"); ?>

<!-- Replit's fixed code from 260524_0947 -->

<?php include ROOT_PATH . 'includes/header.php'; ?>


<body class="home">

    <!-- start header -->
    <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->



<section>
    <div class="container">
        <div class="row page-grid">
            <div class="item">
                <section id="resume" class="wow fadeIn">
                    <div class="container">
                        <div id="work-experience-list">
                            <!-- Jobs will be injected here -->
                        </div>
                    </div>
                </section>
            </div>
            <div class="item">

            </div>
        </div>
    </div>
</section>



    <script>
    async function loadWorkExperience() {
        const res = await fetch('/api/work-experience.php');
        const jobs = await res.json();

        const container = document.getElementById('work-experience-list');

        container.innerHTML = jobs.map(job => `
            <div class="row rsm-item-header">
                <div class="col col-12 col-xl-9 col-lg-8 col-md-12 p-0">
                    <h6>${job.company}, ${job.job_title}</h6>
                </div>
                <div class="col col-12 col-xl-3 col-lg-4 col-md-12 p-0 rsm-city-date">
                    ${job.city} <span class="divider">|</span> ${job.date_start} – ${job.date_end ?? 'Present'}
                </div>
            </div>

            <div class="row rsm-item-details">
                <div class="col col-12 col-md-10">
                    <div class="rsm-item-intro font-weight-500">
                        ${job.intro ?? ''}
                    </div>
                    ${job.bullets && job.bullets.length ? `
                    <div class="rsm-item-bullets">
                        <ul>
                            ${job.bullets.map(b => `<li>${b}</li>`).join('')}
                        </ul>
                    </div>` : ''}
                </div>
            </div>
        `).join('');
    }

    loadWorkExperience();
    </script>

</body>

</html>