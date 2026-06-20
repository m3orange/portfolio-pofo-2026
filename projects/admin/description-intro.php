
            <div class="row grid-lines">
                <div class="col col-12 text-left">
                    <div class="page-title font-weight-500">
                        <h3><?= $project['title'] ?></h3>
                    </div>
                </div>
                    <div class="col col-12 col-lg-7 col-md-12 line-height-28 last-paragraph-no-margin md-margin-50px-bottom sm-margin-30px-bottom wow fadeIn">
                    <h6><?= $project['description'] ?> </h6>
                    <?php include ROOT_PATH . 'includes/projects-confidentiality-note.php'; ?> 
                </div>
                <div class="col col-12 col-lg-5 col-md-12 line-height-26 wow fadeIn">
                    <ul class="list-style-6 margin-twelve-left project-details-table">
                        <li class="margin-5px-bottom weight-600 "><label class="width-20 d-inline-block font-weight-500">Client:</label><?= $project['client'] ?></li>
                        <li class="margin-5px-bottom"><label class="width-20 d-inline-block font-weight-500">Year:</label><?= $project['year'] ?></li>
                        <li class="margin-5px-bottom"><label class="width-20 d-inline-block font-weight-500">Role:</label><?= $project['role'] ?></li>
                        <li class="margin-5px-bottom"><label class="width-20 d-inline-block font-weight-500">Tasks:</label><?= $project['tasks'] ?></li>
                    </ul>
                </div>

            </div>

