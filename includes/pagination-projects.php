
        <section id="pagination" class="wow animate__fadeIn border-top border-color-medium-gray no-padding">
            <div class="container p-0">
                <div class="row justify-content-between align-items-center g-0 padding-30px-lr md-padding-15px-lr">
                    <div class="w-45 text-start">
                        <div class="blog-nav-link blog-nav-link-prev text-extra-dark-gray">
                            <a href="<?= BASE_URL ?><?= $project['prev_link'] ?>">
                                <i class="ti-arrow-left blog-nav-icon"></i>View Previous
                            </a>
                        </div>
                    </div>
                    <div class="w-45 text-end">
                        <div class="blog-nav-link blog-nav-link-next text-extra-dark-gray">    
                            <a href="<?= BASE_URL ?><?= $project['next_link'] ?>">
                                <i class="ti-arrow-right blog-nav-icon"></i>View Next
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>