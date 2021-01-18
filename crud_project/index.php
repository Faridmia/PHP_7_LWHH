<?php require_once 'inc/functions.php';
$info = '';
$task = $_GET['task'] ?? 'report';
$error = $_GET['error'] ?? '0';

if($task == 'seed'){
    seed();

    echo "Sending is Complete";
}

if('delete' == $task){

    $id   = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);

    if($id>0){
        deleteStudent($id);
        header('location: index.php?task=report');
    }
}

$fname = '';
$lname = '';
$roll = '';
if(isset($_POST['submit'])){
    $fname = filter_input(INPUT_POST,'fname',FILTER_SANITIZE_STRING);
    $lname = filter_input(INPUT_POST,'lname',FILTER_SANITIZE_STRING);
    $roll   = filter_input(INPUT_POST,'roll',FILTER_SANITIZE_STRING);
    $id   = filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING);

    
    if($id) {

        // update the existing studnet
        $result = updateStudent($id,$fname,$lname,$roll);
        if($result){
            header('location: index.php?task=report');
        }else{
            $error = 1;
        }
    }else{

        // add new student
        if($fname != '' && $lname != '' && $roll != ''){

            $result = addStudent($fname,$lname,$roll);
    
            if($result){
                header('location: index.php?task=report');
            }else{
                $error = 1;
            }
    
            
        }
    }
   
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
<style>
    table{
        border: 1px solid gray;
        width: 400px;
        margin: 0 auto;
    }

    table tr th,table tr td{
        border:1px solid gray;
        border: 1px solid gray;
        padding: 5px 10px;
        text-align: center;
    }

    .contact-three .form-col {
        text-align: center;
        margin: 0 auto;
    }
</style>
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
        <?php require_once "inc/templates/nav.php";                      
        ?>
        <hr/>
        <?php if('1' == $error){ ?>
        <section class="contact-three">
            <div class="outer-container">
                <div class="row clearfix">
                    <div class="text-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                       <blockquote>Duplicate Roll Number</blockquote>
                    </div>
                </div>
            </div>
        </section>
        <?php } ?>
        <?php if('report' == $task){ ?>
        <section class="contact-three">
            <div class="outer-container">
                <div class="row clearfix">
                    <div class="text-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <?php generateReport();?>
                    </div>
                </div>
            </div>
        </section>
        <?php } ?>
        <?php if('add' == $task){ ?>
        <!--End Header Lower-->
     <section class="contact-three">
        <div class="outer-container">
            <div class="row clearfix">

                <div class="form-col col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="image-layer" style="background-image:url(images/background/contact-form-bg.jpg);"></div>
                    <div class="image-right"><img src="images/resource/contact-image.png" alt=""></div>
                    <div class="inner clearfix">
                        <div class="content-box">

                            <div class="contact-form default-form">
                                <form method="post" action="index.php?task=add" id="contact-form">
                                    <div class="row clearfix">
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="field-inner">
                                                <input type="text" name="fname" value="<?php echo $fname;?>" placeholder="First Name *" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="field-inner">
                                                <input type="text" name="lname" value="<?php echo $lname;?>" placeholder="Last Name *" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="field-inner">
                                                <input type="number" name="roll" value="<?php echo $roll;?>" placeholder="Your Roll *" required>
                                            </div>
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="field-inner">
                                                <button type="submit" class="theme-btn btn-style-four alternate" value="save" name="submit"><span class="btn-title">Submit Now <i class="arrow flaticon-play-button-1"></i></span></button>
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

    </section> <?php } ?>
    <?php if('edit' == $task){
        
        $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);

        $student = getStudent($id);
        ?>
        <!--End Header Lower-->
        <?php if($student) : ?>
     <section class="contact-three">
        <div class="outer-container">
            <div class="row clearfix">

                <div class="form-col col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="image-layer" style="background-image:url(images/background/contact-form-bg.jpg);"></div>
                    <div class="image-right"><img src="images/resource/contact-image.png" alt=""></div>
                    <div class="inner clearfix">
                        <div class="content-box">

                            <div class="contact-form default-form">
                                <form method="post" action="index.php?task=edit&id=<?php echo $id;?>" id="contact-form">
                                    <input type="hidden" name="id" value="<?php echo $id;?>">
                                    <div class="row clearfix">
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="field-inner">
                                                <input type="text" name="fname" value="<?php echo $student['fname'];?>" placeholder="First Name *" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="field-inner">
                                                <input type="text" name="lname" value="<?php echo $student['lname'];?>" placeholder="Last Name *" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="field-inner">
                                                <input type="number" name="roll" value="<?php echo $student['roll'];?>" placeholder="Your Roll *" required>
                                            </div>
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="field-inner">
                                                <button type="submit" class="theme-btn btn-style-four alternate" value="save" name="submit"><span class="btn-title">Update <i class="arrow flaticon-play-button-1"></i></span></button>
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

    </section>
    <?php endif;?>
     <?php } ?>
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
<script src="js/script.js"></script>

</body>
</html>