<!DOCTYPE html>
<html lang="en">

<head>
    <title>Softhub Technologies PVT LTD </title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4. The starter version of Gradient Able is completely free for personal project." />
    <meta name="keywords"
    content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="codedthemes">
    <!-- Favicon icon -->
    <link rel="icon" href="<?php echo site_url('assets/images/favicon.ico');?>" type="image/x-icon">
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/bootstrap/css/bootstrap.min.css');?>">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/icon/themify-icons/themify-icons.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/icon/font-awesome/css/font-awesome.min.css');?>">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/icon/icofont/css/icofont.css');?>">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/style.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/jquery.mCustomScrollbar.css');?>">
</head>

<body class="fix-menu">
        <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body mr-auto ml-auto">
                        <form class="md-float-material" action="<?php echo site_url('index.php/Login/checkUser');?>" method="post">
                            <!--<div class="text-center">
                                <img src="assets/images/logo.png" alt="logo.png">
                            </div>-->
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-left txt-primary">Sign In</h3>
                                    </div>
                                </div>
                                <hr/>
                                <div class="input-group">
                                    <input type="text" name="username" class="form-control" placeholder="Your Email Address">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                    <span class="md-line"></span>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-sm-7 col-xs-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Remember me</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-xs-12 forgot-phone text-right">
                                        <a href="<?php echo site_url('index.php/forgot_password/');?>" class="text-right f-w-600 text-inverse"> Forgot Your Password?</a>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
										<input type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" value="Sign In">
                                        <!--<a href="<?php echo site_url('index.php/home/home');?>"><button type="button" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign in</button></a>-->
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    
    <!-- Required Jquery -->
<script type="text/javascript" src="<?php echo site_url('assets/js/jquery/jquery.min.js');?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/jquery-ui/jquery-ui.min.js');?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/popper.js/popper.min.js');?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/bootstrap/js/bootstrap.min.js');?>"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="<?php echo site_url('assets/js/jquery-slimscroll/jquery.slimscroll.js');?>"></script>
<!-- modernizr js -->
<script type="text/javascript" src="<?php echo site_url('assets/js/modernizr/modernizr.js');?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/modernizr/css-scrollbars.js');?>"></script>

<!-- Custom js -->
<script type="text/javascript" src="<?php echo site_url('assets/js/script.js');?>"></script>
    <script type="text/javascript" src="<?php echo site_url('assets/js/common-pages.js');?>"></script>
</body>

</html>
