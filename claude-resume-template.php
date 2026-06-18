<?php include_once("config.php"); ?>

<!-- Replit's fixed code from 260524_0947 -->

<?php include ROOT_PATH . 'includes/header.php'; ?>


<body class="home">

    <!-- start header -->
    <?php include ROOT_PATH . 'includes/global-nav.php'; ?>
    <!-- end header -->




<section id="resume" class="wow fadeIn">
    <div class="container">
        <div id="work-experience-list">
            <!-- Jobs will be injected here -->
        </div>
    </div>
</section>

    <script>
    async function loadWorkExperience() {
        const res = await fetch('/api/work-experience.php');
        const jobs = await res.json();

        const container = document.getElementById('work-experience-list');

        container.innerHTML = jobs.map(job => `
            <div class="row grid-lines listing-header">
                <div class="col col-12 col-md-8">
                    <h5>${job.company}, ${job.job_title}</h5>
                </div>
                <div class="col col-12 col-md-4">
                    ${job.city}, ${job.date_start} – ${job.date_end ?? 'Present'}
                </div>
            </div>

            <div class="row grid-lines rsm-item-header">
                <div class="col col-12 col-md-12">
                    <div class="rsm-item-intro">
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