<!-- Admin rules -->
 
    <section class="intro-info" style="padding: 100px 0 50px 0;">
        <div class="container">
            <div class="row grid-lines">
                <div class="col col-12 text-left">
                    <div class="page-title font-weight-500">
                    <h3><?= $project['title'] ?></h3>
                    </div>
                </div>
                <div class="col col-12 col-lg-7 col-md-12 line-height-28 last-paragraph-no-margin md-margin-50px-bottom sm-margin-30px-bottom wow fadeIn">
                    <!-- <h6><?= $project['description'] ?> </h6> -->
                    
                    <!-- <div class="project-labels-area"><span><?= $project['tags'] ?></span></div> -->

                    <?php include ROOT_PATH . 'includes/projects-confidentiality-note.php'; ?> 
                </div>
                <div class="col col-12 col-lg-5 col-md-12 line-height-26 wow fadeIn">
                    <div class="project-info-item-row">
                        <div class="pi-title">Client:</div><div class="pi-details"><?= $project['client'] ?></div>
                    </div>
                    <div class="project-info-item-row">
                        <div class="pi-title">Year:</div><div class="pi-details"><?= $project['year'] ?></div>
                    </div>
                    <div class="project-info-item-row">
                        <div class="pi-title">Role:</div><div class="pi-details"><?= $project['role'] ?></div>
                    </div>
                    <div class="project-info-item-row">
                        <div class="pi-title">Tasks:</div><div class="pi-details"><?= $project['tasks'] ?></div>
                    </div>
                </div>
            </div>
     
        </div>
    </section>


