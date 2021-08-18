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

<body>
	  <!--<div class="fixed-button">
		<a href="https://codedthemes.com/item/gradient-able-admin-template" target="_blank" class="btn btn-md btn-primary">
			<i class="fa fa-shopping-cart" aria-hidden="true"></i> Upgrade To Pro
		</a>
	  </div>-->
       <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
               <div class="navbar-wrapper">
                   <div class="navbar-logo">
                       <a class="mobile-menu" id="mobile-collapse" href="#!">
                           <i class="ti-menu"></i>
                       </a>
                       <div class="mobile-search">
                           <div class="header-search">
                               <div class="main-search morphsearch-search">
                                   <div class="input-group">
                                       <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                       <input type="text" class="form-control" placeholder="Enter Keyword">
                                       <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <a href="<?php echo site_url('index.php/home/home');?>">
                           <img class="img-fluid" src="http://rentswale.com/images/logo.jpgeee" alt="Theme-Logo" />
                       </a>
                       <a class="mobile-options">
                           <i class="ti-more"></i>
                       </a>
                   </div>

                   <div class="navbar-container container-fluid">
                       <ul class="nav-left">
                           <li>
                               <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                           </li>
                           <li class="header-search">
                               <div class="main-search morphsearch-search">
                                   <div class="input-group">
                                       <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                       <input type="text" class="form-control">
                                       <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                   </div>
                               </div>
                           </li>
                           <li>
                               <a href="#!" onclick="javascript:toggleFullScreen()">
                                   <i class="ti-fullscreen"></i>
                               </a>
                           </li>
                       </ul>
                       <ul class="nav-right">
                           
                           
                           <li class="user-profile header-notification">
                               <a href="#!">
                                   <!--<img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">-->
                                   <span><?php echo $username = $this->session->userdata('username');?></span>
                                   <i class="ti-angle-down"></i>
                               </a>
                               <ul class="show-notification profile-notification">
                                   <!--<li>
                                       <a href="#!">
                                           <i class="ti-settings"></i> Settings
                                       </a>
                                   </li>
                                   <li>
                                       <a href="user-profile.html">
                                           <i class="ti-user"></i> Profile
                                       </a>
                                   </li>
                                   
                                   <li>
                                       <a href="auth-lock-screen.html">
                                           <i class="ti-lock"></i> Lock Screen
                                       </a>
                                   </li>-->
                                   <li>
                                       <a href="<?php echo site_url('index.php/VerifyLogin/logout');?>">
                                       <i class="ti-layout-sidebar-left"></i> Logout
                                   </a>
                                   </li>
                               </ul>
                           </li>
                       </ul>
                   </div>
               </div>
           </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
				<?php
				$name = $this->session->userdata('name');
				if($name == "Admin")
				{
				?>
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Layout</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="<?php echo site_url('index.php/home/home');?>">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
								<li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Master</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
										<li>
											<a href="<?php echo site_url('index.php/home/slider');?>">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext" data-i18n="nav.form-components.main">Add Project</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li>
											<a href="<?php echo site_url('index.php/home/blog');?>">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext" data-i18n="nav.form-components.main">Add Blog</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<!--<li>
											<a href="<?php echo site_url('index.php/home/category');?>">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext" data-i18n="nav.form-components.main">Add Category</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>-->
										<li>
											<a href="<?php echo site_url('index.php/home/subcategory');?>">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext" data-i18n="nav.form-components.main">Add Sub Category</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li>
											<a href="<?php echo site_url('index.php/home/product_type');?>">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext" data-i18n="nav.form-components.main">Add Product Type</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li>
											<a href="<?php echo site_url('index.php/home/item');?>">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext" data-i18n="nav.form-components.main">Add Product</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
                                        <!--<li>
											<a href="<?php echo site_url('index.php/home/designation');?>">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext" data-i18n="nav.form-components.main">Add Designation</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>-->
                                        <li>
											<a href="<?php echo site_url('index.php/home/position');?>">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext" data-i18n="nav.form-components.main">Add Position</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<!--<li>
											<a href="<?php echo site_url('index.php/home/coupon');?>">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext" data-i18n="nav.form-components.main">Add Coupon</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>-->
										<li>
											<a href="<?php echo site_url('index.php/home/vendor');?>">
												<span class="pcoded-micon"><i class="ti-layers"></i><b>R</b></span>
												<span class="pcoded-mtext" data-i18n="nav.form-components.main">Add Dealer</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li>
											<a href="<?php echo site_url('index.php/home/pincode');?>">
												<span class="pcoded-micon"><i class="ti-layers"></i><b>R</b></span>
												<span class="pcoded-mtext" data-i18n="nav.form-components.main">Add Pincode</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<!--<li>
											<a href="<?php echo site_url('index.php/home/emp');?>">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext" data-i18n="nav.form-components.main">Add Employee</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>-->
										
                                    </ul>
                                </li>
								
								<!--<li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Bussiness Associate</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li>
											<a href="<?php echo site_url('index.php/home/bussiness_associate');?>">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext" data-i18n="nav.form-components.main">Add BA</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li>
											<a href="<?php echo site_url('index.php/home/ba_client_list');?>">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext" data-i18n="nav.form-components.main">Lead List</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li>
											<a href="<?php echo site_url('index.php/home/wallet_list');?>">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext" data-i18n="nav.form-components.main">Wallet List</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li>
											<a href="<?php echo site_url('index.php/home/withdrawal_req_list');?>">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext" data-i18n="nav.form-components.main">Withdrawal Request List</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li>
											<a href="<?php echo site_url('index.php/home/withdrawal_app_list');?>">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext" data-i18n="nav.form-components.main">Withdrawal Approved List</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
                                    </ul>
                                </li>-->
								<li>
                                    <a href="<?php echo site_url('index.php/home/customer_list');?>">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>R</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Customer List</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('index.php/home/order_list');?>">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>R</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Order List</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('index.php/home/accepted_order_list');?>">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>R</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Accepted Order List</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('index.php/home/career_list');?>">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>R</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Career List</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('index.php/home/feedback_list');?>">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>R</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Feedback List</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
								<!--<li>
                                    <a href="<?php echo site_url('index.php/home/vendor_enquiry_list');?>">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>R</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Vendor Enquiry List</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('index.php/home/subcategory');?>">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>R</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Post Free List List</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>-->
								<li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Reports</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <!--<li>
											<a href="<?php echo site_url('index.php/home/repo_emp');?>">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext" data-i18n="nav.form-components.main">Employee</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>-->
										<li>
											<a href="<?php echo site_url('index.php/home/repo_vendor');?>">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext" data-i18n="nav.form-components.main">Dealer</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<!--<li>
											<a href="<?php echo site_url('index.php/home/repo_bussiness_associate');?>">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext" data-i18n="nav.form-components.main">Bussiness Associate</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>-->
										<li>
											<a href="<?php echo site_url('index.php/home/repo_order');?>">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext" data-i18n="nav.form-components.main">Orders</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<!--<li>
											<a href="<?php echo site_url('index.php/home/repo_vendor_enquiry');?>">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext" data-i18n="nav.form-components.main">Vendor Enquiry</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li>
											<a href="<?php echo site_url('index.php/home/repo_ba_client');?>">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext" data-i18n="nav.form-components.main">BA Client</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li>
											<a href="<?php echo site_url('index.php/home/repo_withdrawal');?>">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext" data-i18n="nav.form-components.main">Withdrawal </span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>-->
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
					<?php
					}
					if($name == "emp")
					{
					?>
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Layout</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="<?php echo site_url('index.php/home/home');?>">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('index.php/home/vendor');?>">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>R</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Add Vendor</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('index.php/home/vendor_list');?>">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>R</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main"> Vendor List</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
					<?php
					}
					if($name == "vendor")
					{
					?>
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Layout</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="<?php echo site_url('index.php/home/home');?>">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('index.php/home/lead_list');?>">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>R</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Lead List</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('index.php/home/accepted_lead_list');?>">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>R</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Order Dispatch</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('index.php/home/complete_order_list');?>">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>R</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Order Complete</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
					<?php
					}
					if($name == "Bussiness Associate")
					{
					?>
					<nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="<?php echo site_url('index.php/home/home');?>">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('index.php/home/ba_client');?>">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>R</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Add Lead</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('index.php/home/withdrawal_app_list_user');?>">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>R</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Withdrawal Approved List</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
					<?php
					}
					?>