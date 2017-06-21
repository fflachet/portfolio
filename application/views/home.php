<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title>Portfolio François Flachet</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/line-icons.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/nivo-lightbox.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/menu_sideslide.css">
        <link rel="stylesheet" href="assets/css/main.css">    
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="assets/css/projects.css">

    </head>
    <body>
        <div class="menu-wrap">
            <nav class="menu navbar">
                <div class="icon-list navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#video-area">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#bio">Bio</a>
                        </li>  
                        <li class="nav-item">
                            <a class="nav-link" href="#skills">Competences</a>
                        </li>                            
                        <li class="nav-item">
                            <a class="nav-link" href="#project">Projets</a>
                        </li>            
                        <li class="nav-item">
                            <a class="nav-link" href="#parcours">Parcours</a>
                        </li>     
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li> 
                    </ul>
                </div>
            </nav> 
            <button class="close-button" id="close-button"><i class="lnr lnr-cross"></i></button>
        </div>      
        <!-- Header Section Start -->

        <header id="video-area" data-stellar-background-ratio="0.5">    
            <div id="block" data-vide-bg="video/video"></div>
            <div class="fixed-top">
                <div class="container">
                    <div class="logo-menu">
                        <a href="#" class="logo"><span class="lnr lnr-diamond"></span> FFLACHET</a>
                        <button class="menu-button" id="open-button"><i class="lnr lnr-menu"></i></button>    
                    </div>           
                </div>
            </div>
            <div class="overlay overlay-2"></div>      
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-10">
                        <div class="contents text-center">
                            <?php
                            foreach ($about as $ab) {
                                ?>    
                                <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s"><?php echo $ab['first_name'] . ' ' . $ab['last_name']; ?></h1>
                                <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms"><?php echo $ab['job']; ?></p>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div> 
            </div>      
        </header>
        <!-- Header Section End --> 


        <!-- Bio Section Start -->
        <section id="bio" class="section">
            <div class="container">
                <div class="section-header">          
                    <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s"><span>A propos de moi</span></h2>
                    <hr class="lines wow zoomIn" data-wow-delay="0.3s">
                    <?php
                    foreach ($about as $ab) {
                        ?>  
                        <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">
                            <?php echo $ab["description"]; ?>
                        </p>
                        <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">
                            <?php echo $ab["birthday"]; ?>
                        </p>
                        <img src="<?php echo $ab["img"]; ?>" class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">


                        <?php
                    }
                    ?>
                </div>
                <div class="row">

                </div>
            </div>
        </section>
        <!-- Bio Section End -->

        <!-- Skills Section Start -->
        <section id="skills" class="section" data-stellar-background-ratio="0.2">
            <div class="container">
                <div class="section-header">          
                    <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s"><span>Compétences</span></h2>
                    <hr class="lines wow zoomIn" data-wow-delay="0.3s">
                    <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy <br> nibh euismod tincidunt ut laoreet dolore magna.</p>
                </div>
                <div class="row">

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="content-left text-right wow fadeInLeft animated" data-wow-offset="10">
                            <?php
                            foreach ($skills as $sk) {
                                if ($sk['id_skills'] % 2 != 0) {

                                    echo '<div class="box-item left">
                                        <span class="icon">
                                            <i class="lnr lnr-rocket"></i>
                                        </span>
                                        <div class="text">
                                            <h4> ' . $sk['name'] . '</h4>
                                    <p>' . $sk['rating'] . '</p>
                                </div>
                            </div>';
                                }
                            }
                            ?>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="show-box wow fadeInDown animated" data-wow-offset="10">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="content-right text-left wow fadeInRight animated" data-wow-offset="10">
                            <?php
                            foreach ($skills as $sk) {
                                if ($sk['id_skills'] % 2 == 0) {

                                    echo '<div class="box-item right">
                                        <span class="icon">
                                            <i class="lnr lnr-rocket"></i>
                                        </span>
                                        <div class="text">
                                            <h4> ' . $sk['name'] . '</h4>
                                    <p>' . $sk['rating'] . '</p>
                                </div>
                            </div>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Skills Section End -->

        <!-- Projects Section -->
        <section id="project" class="section">
            <!-- Container Starts -->
            <div class="container">
                <div class="section-header">          
                    <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s"> <span>Projets</span></h2>
                    <hr class="lines wow zoomIn" data-wow-delay="0.3s">
                    <p class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy <br> nibh euismod tincidunt ut laoreet dolore magna.</p>
                </div>
                <div class="row">          
                    <div class="col-md-12">
                        <!-- Portfolio Controller/Buttons -->
                        <div class="controls text-center wow fadeInUp" data-wow-delay=".6s">
                            <a class="control btn btn-common" data-filter='all'>
                                ALL
                            </a>
                            <a class="control btn btn-common" data-filter='.android'>
                                ANDROID
                            </a>
                            <a class="control btn btn-common" data-filter='.webapp'>
                                WEB APP
                            </a>
                            <a class="control btn btn-common" data-filter='.website'>
                                WEBSITE
                            </a>
                        </div>
                        <!-- Portfolio Controller/Buttons Ends-->          

                        <!-- Recent Projects -->
                        <div id="portfolio" class="row wow fadeInUp" data-wow-delay="0.8s">
                            <?php
                            foreach ($projects as $pr) {

                                echo '<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix ' . $pr['category'] . '">
                                            <div class="portfolio-item">
                                                <div class="shot-item">
                                                    <a class="overlay lightbox" data-popup-open="popup-' . $pr['name'] . '" href="#">

                                                        <img src="assets/img/projects/' . $pr['name'] . '.jpg" alt="" />
                                                        <i class="lnr item-icon"> ' . $pr['name'] . '</i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>';
                            }
                            ?>
                        </div>
                        <?php
                        foreach ($projects as $pr) {
                            echo '<div class="popup" data-popup="popup-' . $pr['name'] . '">
                                <div class="popup-inner">
                                    <h2>Projet ' . $pr['name'] . '</h2>
                                    <img class="imgProject" src="assets/img/projects/' . $pr['name'] . '.jpg" alt="" />
                                    <p>' . $pr['description'] . '</p>    
                                    <a href="' . $pr['url_github'] . '">Lien Github </a>';
                            if ($pr['url_project'] != NULL) {
                                echo '<a href="' . $pr['url_project'] . '">Site de ' . $pr['name'] . '</a>';
                            }
                            foreach ($projectSkills as $pSkill) {
                                if ($pSkill['projectN'] == $pr['name']) {
                                    echo '<p>' . $pSkill['skillN'] . '</p>';
                                }
                            }
                            foreach ($projectKnows as $pKnow) {
                                if ($pKnow['projectN'] == $pr['name']) {
                                    echo '<p>' . $pKnow['knowledgeN'] . '</p>';
                                }
                            }
                            echo '<a class="popup-close" data-popup-close="popup-' . $pr['name'] . '" href="#">x</a>
                                </div>
                            </div>';
                        }
                            ?>
                        <!--<a class="overlay lightbox btn" data-popup-open="popup-' . $pr['name'] . '">-->
                    </div>
                </div>
            </div>
            <!-- Container Ends -->
        </section>
        <!-- Projects Section Ends --> 

        <!-- Start Parcours Section -->
        <div id="parcours" class="section pricing-section">
            <div class="container">
                <div class="section-header">          
                    <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s"><span>Parcours</span></h2>
                    <hr class="lines wow zoomIn" data-wow-delay="0.3s">
                    <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy <br> nibh euismod tincidunt ut laoreet dolore magna.</p>
                </div>
            </div>
        </div>
        <!-- End Parcours Section -->

        <!-- Contact Section Start -->
        <section id="contact" class="section">
            <div class="container">
                <div class="row justify-content-md-center">          
                    <div class="col-md-9 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">            
                        <div class="contact-block">
                            <div class="section-header">          
                                <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Contactez <span>Moi</span></h2>
                                <hr class="lines wow zoomIn" data-wow-delay="0.3s">
                            </div>
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>                                 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                        </div> 
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group"> 
                                            <textarea class="form-control" placeholder="Your Message" rows="11" data-error="Write your message" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="submit-button text-center">
                                            <button class="btn btn-common" id="submit" type="submit">Send Message</button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                            <div class="clearfix"></div> 
                                        </div>
                                    </div>
                                </div>            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section End -->

        <!-- Footer Section Start -->
        <footer>          
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="social-icons wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">
                            <ul>
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li class="dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="site-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0.3s">
                            <p>All copyrights reserved &copy; 2017 - Designed & Developed by FF </p>
                        </div>  
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End --> 

        <!-- Go To Top Link -->
        <a href="#" class="back-to-top">
            <i class="lnr lnr-arrow-up"></i>
        </a>

        <div id="loader">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>    

        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="assets/js/jquery-min.js"></script>
        <script src="assets/js/tether.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/classie.js"></script>
        <script src="assets/js/mixitup.min.js"></script>
        <script src="assets/js/nivo-lightbox.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>    
        <script src="assets/js/jquery.stellar.min.js"></script>    
        <script src="assets/js/jquery.nav.js"></script>    
        <script src="assets/js/smooth-scroll.js"></script>    
        <script src="assets/js/smooth-on-scroll.js"></script>    
        <script src="assets/js/wow.js"></script>    
        <script src="assets/js/menu.js"></script>
        <script src="assets/js/jquery.vide.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>    
        <script src="assets/js/jquery.magnific-popup.min.js"></script>    
        <script src="assets/js/waypoints.min.js"></script>    
        <script src="assets/js/form-validator.min.js"></script>
        <script src="assets/js/contact-form-script.js"></script>     
        <script src="assets/js/main.js"></script>
        <script src="assets/js/projects.js"></script>

    </body>
</html>