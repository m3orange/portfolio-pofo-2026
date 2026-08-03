<!-- Admin rules -->
 
    <section class="intro-info" style="padding: 100px 0;">
        <div class="container">
            <div class="row grid-lines">
                <div class="col col-12 text-left">
                    <div class="page-title font-weight-500">
                    <h3><?= $project['title'] ?></h3>
                    </div>
                </div>
                <div class="col col-12 col-xl-9 col-lg-8 line-height-28 last-paragraph-no-margin wow fadeIn">
                    <div class="project-info-item-row">
                        <div class="pi-title">Role:</div>
                        <div class="pi-details"><?= $project['role'] ?></div>
                    </div>
                    <div class="project-info-item-row">
                        <div class="pi-title">Tasks:</div>
                        <div class="pi-details"><?= $project['tasks'] ?></div>
                    </div>
                </div>
                <div class="col col-12 col-xl-3 col-lg-4 line-height-26 wow fadeIn">
                    <div class="project-info-item-row">
                        <div class="pi-title">Client:</div>
                        <div class="pi-details"><?= $project['client'] ?></div>
                    </div>
                    <div class="project-info-item-row">
                        <div class="pi-title">Year:</div>
                        <div class="pi-details"><?= $project['year'] ?></div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col col-12 col-xl-9 col-lg-8 line-height-28 last-paragraph-no-margin wow">
                    <div class="description-paragraph"><?= $project['description'] ?> </div>  


                    <div class="project-labels-area">
                        <?php foreach ($tags as $tag): ?>
                            <span class="pi-tags"><?php echo htmlspecialchars($tag); ?></span>
                        <?php endforeach; ?>
                    </div> 
                <?php include ROOT_PATH . 'includes/projects-confidentiality-note.php'; ?> 
                </div>
            </div>
     
        </div>
    </section>

<!--     
    <div class="anchor-widget">
        <ul>
            <li><a href="#anchor-01">1</a></li>
            <li><a href="#anchor-02">2</a></li>
            <li><a href="#anchor-03">3</a></li>
            <li><a href="#anchor-04">4</a></li>
            <li><a href="#anchor-05">5</a></li>
        </ul>  
    </div>  -->
   


