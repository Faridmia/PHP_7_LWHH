<?php require_once 'inc/functions.php';
$info = '';
$task = $_GET['task'] ?? 'report';

if('seed' == $task){
    seed(DB_NAME);

    echo "Sending is Complete";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Pruners - Gardening and Landscaping HTML Template | Contact Us</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- Responsive File -->
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive Settings -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"><div class="icon"></div></div>

    <!-- Main Header -->
    <header class="main-header inner-header">
        <div class="header-lower">
            <div class="auto-container">
                <div class="inner clearfix">
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                         <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current"><a href="index.php">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <div class="more-links clearfix">
                        <div class="cart-btn"><a href="shopping-cart.html"><span class="flaticon-shopping-bag-2"></span><sub>0</sub></a></div>
                        <div class="quote-btn"><a href="contact.html">Get Free Quote <i class="arrow flaticon-play-button-1"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once "templates/nav.php";
       999                             
        ?>
        <hr/>
        <?php 
            if($info != ''){
                echo "<p>{$info}</p>";
            }
        ?>
        <!--End Header Lower-->
    <!-- <section class="contact-three">
        <div class="outer-container">
            <div class="row clearfix">
               -Text Col
                <div class="text-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner clearfix">
                        <div class="top-icon"><span class="flaticon-internet"></span></div>
                        <div class="content-box">
                            <div class="sec-title">
                                <div class="title-icon"><span class="icon"><img src="images/icons/leaf-two.png" alt="" title=""></span></div>
                                <div class="subtitle">Get In Touch</div>
                                <h2>Here to Help You</h2>
                            </div>

                            <div class="address">
                                <h5>Main Office</h5>
                                <div class="text">PO Box 515381 Lander, Garden Street LA 90029 USA.</div>
                                <div class="link">
                                    <a href="#" class="theme-btn"><span class="btn-title">Find On Map <i class="arrow flaticon-play-button-1"></i></span></a>
                                </div>
                            </div>

                            <div class="info">
                                <div class="row clearfix">
                                   --Block-
                                    <div class="info-block col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <div class="icon"><span class="flaticon-message-1"></span></div>
                                            <h6>Phone & Email</h6>
                                            <ul>
                                                <li><a href="#">(+5) 678 90 12 345</a></li>
                                                <li><a href="#">service@landerteam.com</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                   --Block-
                                    <div class="info-block col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <div class="icon"><span class="flaticon-clock"></span></div>
                                            <h6>Working Hours</h6>
                                            <ul>
                                                <li>Mon-Friday: 09am to 07pm</li>
                                                <li>Sat: 10.00am to 04pm</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div> 

               -Text Col
                <div class="form-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="image-layer" style="background-image:url(images/background/contact-form-bg.jpg);"></div>
                    <div class="image-right"><img src="images/resource/contact-image.png" alt=""></div>
                    <div class="inner clearfix">
                        <div class="content-box">
                            <div class="sec-title">
                                <div class="title-icon"><span class="icon"><img src="images/icons/leaf-two.png" alt="" title=""></span></div>
                                <div class="subtitle">Drop a Line</div>
                                <h2>Send Message Us</h2>
                            </div>

                            <div class="contact-form default-form">
                                <form method="post" action="sendemail.php" id="contact-form">
                                    <div class="row clearfix">
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="field-inner">
                                                <input type="text" name="username" value="" placeholder="Your Name *" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="field-inner">
                                                <input type="email" name="email" value="" placeholder="Email Address*" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <div class="field-inner">
                                                <input type="text" name="phone" value="" placeholder="Phone" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <div class="field-inner">
                                                <select class="custom-select-box" name="subject">
                                                    <option>Subject</option>
                                                    <option>Spring Cleanup</option>
                                                    <option>Plants Planting</option>
                                                    <option>Water Fountain</option>
                                                    <option>Hard Scaping</option>
                                                    <option>Garden Care</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="field-inner">
                                                <textarea name="message" placeholder="Your Message ..." required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="field-inner">
                                                <button type="submit" class="theme-btn btn-style-four alternate"><span class="btn-title">Submit Now <i class="arrow flaticon-play-button-1"></i></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section> -->
    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="inner clearfix">
                    <div class="copyright">Copyright &copy; 2020 All Rights Reserved by <a href="#"></a></div>
                    <div class="bottom-links">
                        <ul class="clearfix">
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </footer>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-arrows"></span></div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/validate.js"></script>
<script src="js/scrollbar.js"></script>
<script src="js/appear.js"></script>
<script src="js/wow.js"></script>
<script src="js/custom-script.js"></script>

</body>
</html>