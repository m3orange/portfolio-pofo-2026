<div class="col text-right pr-0 nav-adjust" style="column-gap: 30px;">

                    <div class="contact-button">
                        <i class="ti-email"></i>
                    <a class="popup-with-zoom-anim wow" data-wow-delay="0.6s" href="#modal-popup2" style="visibility: visible;">Contact</a>
                    </div>

    <button class="navbar-toggler mobile-toggle d-inline-block" type="button" id="open-button" data-toggle="collapse"
        data-target=".navbar-collapse">
        <span></span>
        <span></span>
        <span></span>
    </button>
    <div class="menu-wrap full-screen no-padding d-md-flex">
        <div class="col-md-6 p-0 d-none d-md-block">
            <div class="cover-background full-screen">
                <div class="opacity-light bg-extra-dark-gray"></div>
                <div class="position-absolute height-100 width-100 text-center">
                    <div class="display-table height-100 width-100">
                        <div class="display-table-cell height-100 width-100 vertical-align-middle position-relative">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 p-0 bg-white full-screen text-left">
            <div class="position-absolute height-100 width-100 overflow-auto">
                <div class="display-table height-100 width-100">
                    <div class="display-table-cell height-100 width-100 vertical-align-top padding-fourteen-lr alt-font link-style-2 md-padding-ten-lr sm-padding-10px-lr padding-twenty-top padding-ten-bottom nav-sidepanel-links">
                        <!-- start menu -->
                        <div class="row links-area">
                            <ul class="font-weight-600 sm-no-padding-left">
                                <li><a href="<?= BASE_URL ?>index.php" class="inner-link">Home</a></li>
                                <li><a href="<?= BASE_URL ?>about.php" class="inner-link">Tech Expertise</a></li>
                                <li><a href="<?= BASE_URL ?>resume.php" class="inner-link">Resume</a></li>

                                <li class="dropdown">
                                    <a href="javascript:void(0);" data-toggle="dropdown">Featured Work</a>
                                    <!-- <span data-toggle="dropdown" class="dropdown-toggle"></span> -->

                                        <ul class="dropdown-menu font-weight-300">
                                            <li  style="margin-top: 20px;"><a href="<?= BASE_URL ?>projects/atlas-ui/index.php" title="Atlas UI">Atlas UI</a></li>
                                            <li><a href="<?= BASE_URL ?>projects/atlas-design-system/index.php" title="Atlas Design System">Atlas Design System</a></li>
                                            <li><a href="<?= BASE_URL ?>projects/admin/index.php" title="Admin Platform">Admin Platform</a></li>
                                            <li><a href="<?= BASE_URL ?>projects/musicasa/index.php" title="Musicasa">Musicasa</a></li>
                                            <li><a href="<?= BASE_URL ?>projects/cx-roadmap/index.php" title="CX Roadmap">CX Roadmap</a></li>
                                            <li><a href="<?= BASE_URL ?>projects/space-scout/index.php" title="In Situ">In Situ</a></li>
                                            <li><a href="<?= BASE_URL ?>projects/map-tools/index.php" title="Map Tools">Map Tools</a></li>
                                            <li><a href="<?= BASE_URL ?>projects/idd/index.php" title="IDD">IDD</a></li>
                                            <li style="padding: 20px 0; border-top: 1px solid rgba(0,0,0,0.5); margin-top: 30px;"><a href="<?= BASE_URL ?>earlier-work.php" title="Past Work">Earlier Work</a></li>
                                        </ul>

                                </li>

                                <!-- <li><a href="<?= BASE_URL ?>contact.php" class="inner-link">Connect</a></li> -->
                            </ul>
                            <div class="bottom-section">
                                <a href="https://www.linkedin.com/in/michellemunozdorna/" target="_blank"><img
                                        class="social-icons-header"
                                        src="<?= BASE_URL ?>images/logo-linkedin-black.svg"></a>
                            </div>
                        </div>
                        <!-- end menu -->
                    </div><!-- nav-sidepanel-links -->
                </div>
            </div>
            <button class="close-button-menu" id="close-button"></button>
        </div>
    </div>
</div>

                        <!-- start modal pop-up -->
                        <div id="modal-popup2" class="col-11 col-xxl-3 col-xl-4 col-lg-6 col-md-7 col-sm-9 zoom-anim-dialog mx-auto bg-white text-center modal-popup-main padding-50px-all mfp-hide">
                            <span class="text-extra-dark-gray text-uppercase alt-font text-extra-large font-weight-600 margin-15px-bottom d-block">Let's Connect</span>
                            <!-- <p class="margin-four">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p> -->

                            <div>
                                    <div class="form-results d-none"></div>
                                    <input type="text" name="name" id="name" placeholder="Name*" class="input-bg required">
                                    <input type="email" name="email" id="email" placeholder="E-mail*" class="input-bg required">
                                    <input type="text" name="subject" id="subject" placeholder="Subject" class="input-bg">
                                    <textarea name="comment" id="comment" placeholder="Your Message" class="input-bg"></textarea>
                                    <button id="contact-us-button" type="submit" class="btn btn-small border-radius-4 btn-black submit">send message</button>
                                </div>
                        </div>
                        <!-- end modal pop-up -->