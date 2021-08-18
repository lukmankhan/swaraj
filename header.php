<?php
session_start();
//ini_set('error_reporting', 0);
//ini_set('display_errors', 0);
include_once('connect.php');
if(isset($_POST['login']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		//$user_type = 'customer';
		$query = mysqli_query($con, "SELECT * FROM tbl_admin WHERE username = '$username' AND password ='$password'");
		if(mysqli_num_rows($query)>0)
		{
			$u = mysqli_fetch_array($query);
			$_SESSION['username'] = $username;
			$_SESSION['email_address'] = $u['email_address'];
			
			
			//$_SESSION['email'] = 'shaikh@gmail.com';
			//$_SESSION['city'] = 'Parbhani';
			echo "<script>alert('Login Successfull');window.location='index.php';</script>";
		}	
		else
		{
			echo "<script>alert('Login Failed');window.location='index.php';</script>";
		}	
	}
$email_address = $_SESSION['email_address'];
 $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
<title>Furniture</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//tags -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>

<script language="Javascript" type="text/javascript">
 
              function onlyAlphabets(e, t) 
              {
                try {
                  if (window.event) {
                    var charCode = window.event.keyCode;
                  }
                  else if (e) {
                    var charCode = e.which;
                  }
                  else { return true; }
                  if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123 && charCode!=46))
                    return true;
                  else
                    return false;
                }
                catch (err) {
                  alert(err.Description);
                }
              }
          
 
          function onlyNos(e, t)
          {
            try {
              if (window.event) {
                var charCode = window.event.keyCode;
              }
              else if (e) {
                var charCode = e.which;
              }
              else { return true; }
              if (charCode > 31 && (charCode < 48 || charCode > 57)) 
              {
                return false;
              }
              return true;
            }
            catch (err) {
              alert(err.Description);
            }
          }
 
    </script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script type="text/javascript">
  $(document).ready(function(){
    $("#mobile").change(function(){
      var mobile = $(this).val();
      $.ajax({ 
        type: "POST", 
        url: "fetch_mobile.php", 
        data: "mobile="+mobile, 
        success: function(result){ 
		//alert(result);
			$('#mobile').focus();
			$("#phn_error").html(result); 
        }
      });

    });
  });
  
</script>	
</head>
<body>
<!-- header -->
<!--<div class="header" id="home">
	<div class="container">
		<ul>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@swarajfurniture.com">info@swarajfurniture.com</a></li>
			<li><i class="fa fa-phone" aria-hidden="true"></i>+91 9822 12 1100 / 9405 88 0100</li>
			<li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a></li>
		    <li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li>
			
			<!--<li> <a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a></li>
		    <li> <a href="#"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li>--
			
			
		</ul>
	</div>
</div>-->
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
	
			<div class="col-md-2 logo_agile">
				<h1><a href="index.php"><img src="images/logo.png" alt="" style="height:90px;width:100px;"></a></h1>
			</div>
			<!--<div class="col-md-1 logo_agile"></div>-->
			<div class="col-md-1 logo_agile">
				<h1><center><a href="isocertificate.pdf" download=""><img src="images/iso_logo.png" alt="" style="height:70px;width:80px;"><p style="font-size:10px;">ISO 9001:2015 <br>Certified Company</p></a></center></h1>
			</div>
			<div class="col-md-1 logo_agile"></div>
			<!-- header-bot -->
		
		<div class="col-md-6 header-middle">
			<form action="#" method="post">
					<input type="search" name="search" placeholder="Search here..." required="">
					<input type="submit" value=" ">
				<div class="clearfix"></div>
			</form>
		</div>
		
		
		
		<div class="col-md-2 agileits-social top_content">
						<ul class="social-nav model-3d-0 footer-social w3_agile_social">
						                                   
															<li class="share">
																<a href="wishlist.php" class="facebook">
																  <div class="front" style="background:#fb7e13 !important;"><i style="font-size: 20px;margin-top: 4px;" class="fa fa-heart-o" aria-hidden="true"></i></div>
																  <div class="back" style="background:#fb7e13 !important;"><i style="font-size: 20px;margin-top: 4px;" class="fa fa-heart-o" aria-hidden="true"></i></div>
																 </a>
																 <br>Wishlist
															</li>
															
															<li class="share"> <a href="cart.php" class="facebook">
																  <div class="front" style="background:#fb7e13 !important;"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size: 20px;margin-top: 4px;"></i></div>
																  <div class="back" style="background:#fb7e13 !important;"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size: 20px;margin-top: 4px;"></i></div></a>
																  <br>
																  Cart
															</li>
															<!--<li class="share"> Cart</li>-->
														
														</ul>



		</div>
		<!-- header-bot -->
		
		<!--<div class="col-md-2 ">
				
				<div class="row ">
					<div class="col-md-6 ">
					<div class="clearfix">&nbsp;</div>
						<div class="wthreecartaits wthreecartaits2 cart cart box_1" style="padding:0px;"> 
								<a href="cart.php"><button class="w3view-cart"  value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button></a>
								
						</div>
						<h6>Cart</h6>
					</div>
					<div class="col-md-6 ">
						<div class="clearfix">&nbsp;</div>
						<div class="wthreecartaits wthreecartaits2 cart cart box_1" style="padding:0px;"> 
								<a href="#"><button class="w3view-cart"  value=""><i class="fa fa-heart-o" aria-hidden="true"></i></button></a>
								
						</div>
						<h6>Wishlist</h6>
						
					</div>
					
				</div>
		</div>-->
		
		<!--<div class="col-md-4 agileits-social top_content">
						<ul class="social-nav model-3d-0 footer-social w3_agile_social">
						                                   <li class="share"></li>
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>



		</div>-->
			<div class="clearfix"></div>
	</div>
</div>
<style>      

.catcss {
font-weight:650;
text-align:center;
color: #fb7e13 !important;
}

.catimg {
	padding:10px;
	box-shadow: none !important;
}
</style>      
	  
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				
				<ul class="nav navbar-nav menu__list">
				<?php
					if (!isset($_SESSION['username']))
					{
						$unmae = $_SESSION['username'];
				?>  
					<li><a class="menu__link" href="index.php">Home</a></li>
					<li class=" menu__item"><a class="menu__link" href="about.php">About Us</a></li>
					<li class=" menu__item"><a class="menu__link" href="infrastructure.php">Infrastructure</a></li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<!--<div class="col-sm-4 multi-gd-img1 multi-gd-text ">
										<a href="mens.html"><img src="images/top2.jpg" alt=" "/></a>
									</div>-->
								
									<?php
									//echo "hhh";
									$res1 = mysqli_query($con, "select * from tbl_category_master ");
									while($row1 = mysqli_fetch_array($res1))
									{
									?>
									<div class="col-sm-3 multi-gd-img">
										<!--<a href="mens.html"><img src="images/top2.jpg" class="catimg" alt=" "/></a>-->
										<ul class="multi-column-dropdown">
											<li><a href="#" class="catcss"><?php echo $row1['category_master'];?></a></li>
											<!--<li><a href="#"><img src="admin/<?php echo $row1['icon'];?>" class="catimg"  alt=" "/></a></li>
											<li><a href="#" class="catcss"></a></li>-->
											<?php
											//echo "hhh";
											$res2 = mysqli_query($con, "select * from tbl_subcategory where category_id = $row1[category_id]");
											while($row2 = mysqli_fetch_array($res2))
											{
											?>
											
											<li><a href="subcategory.php?subcategory_id=<?php echo $row2['sub_category_id'];?>"  ><?php echo $row2['sub_category'];?></a></li>
											<!--<li><a href="office_furniture.php?category_id=<?php echo "Office Furniture";?>"  >Table</a></li>-->
											<?php } ?>
											
										</ul>
									</div>
									<?php } ?>
									
									<!--<div class="col-sm-3 multi-gd-img">
										<!--<a href="mens.html"><img src="images/top2.jpg" class="catimg" alt=" "/></a>--
										<ul class="multi-column-dropdown">
											<li><a href="#" class="catcss">Office Furniture</a></li>
											<li><a href="office_furniture.php?category_id=<?php echo "Office Furniture";?>"  >Sofa</a></li>
											<li><a href="office_furniture.php?category_id=<?php echo "Office Furniture";?>"  >Table</a></li>
											
											
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
									
										<ul class="multi-column-dropdown">
											<li><a href="#" class="catcss">Home Furniture</a></li>
											<li><a href="office_furniture.php?category_id=<?php echo "Office Furniture";?>"  >Sofa</a></li>
											<li><a href="office_furniture.php?category_id=<?php echo "Office Furniture";?>"  >Table</a></li>
											
											<li><a href="subcategory.php">Sofa</a></li>
											
											
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
									
										<ul class="multi-column-dropdown">
											<li><a href="#" class="catcss">Hotel Furniture</a></li>
											
										
											<li><a href="#" class="catcss"></a></li>
											<li><a href="office_furniture.php?category_id=<?php echo "Office Furniture";?>"  >Sofa</a></li>
											<li><a href="office_furniture.php?category_id=<?php echo "Office Furniture";?>"  >Table</a></li>
											
											<li><a href="subcategory.php">Beauty</a></li>
											
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
									
										<ul class="multi-column-dropdown">
											<li><a href="#" class="catcss">Educational Furniture</a></li>
											
											<li><a href="mens.html"><img src="images/top2.jpg" class="catimg"  alt=" "/></a></li>
											<li><a href="#" class="catcss"></a></li>
											<li><a href="office_furniture.php?category_id=<?php echo "Office Furniture";?>"  >Sofa</a></li>
											<li><a href="office_furniture.php?category_id=<?php echo "Office Furniture";?>"  >Table</a></li>
											
											<li><a href="subcategory.php">Beauty</a></li>
											
										</ul>
									</div>-->
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					
					<!--<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Product <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-12 multi-gd-img">
										<ul class="multi-column-dropdown">
										
											<li><a href="office_furniture.php?category_id=<?php echo "Office Furniture";?>">Office Furniture</a></li>
											<li><a href="subcategory.php?category_id=<?php echo 'Home Furniture';?>">Home Furniture</a></li>
											<li><a href="subcategory.php?category_id=<?php echo 'Hotel Furniture';?>">Hotel Furniture </a></li>
											<li><a href="subcategory.php?category_id=<?php echo 'Educational Furniture';?>">Educational Furniture</a></li>
											
										</ul>
									</div>
									<!--<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="mens.html"><img src="images/top2.jpg" alt=" "/></a>
									</div>--
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>-->
					<li class=" menu__item"><a class="menu__link" href="blog.php">Blog</a></li>
					<li class="menu__item dropdown">
					   <a class="menu__link" href="career.php">Career</a>
								
					</li>
					<li class=" menu__item"><a class="menu__link" href="contact.php">Contact</a></li>
					<li class=" menu__item"><a class="menu__link" href="feedback.php">Feedback</a></li>
					<li class=" menu__item"><a class="menu__link" href="#" data-toggle="modal" data-target="#myModal2">Sign Up</a></li>
					<li class=" menu__item"><a class="menu__link" href="#" data-toggle="modal" data-target="#myModal">Sign In</a></li>
				<?php
					}else{
				?>
					<li><a class="menu__link" href="index.php">Home</a></li>
					<li class=" menu__item"><a class="menu__link" href="about.php">About Us</a></li>
					<li class=" menu__item"><a class="menu__link" href="infrastructure.php">Infrastructure</a></li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<!--<div class="col-sm-4 multi-gd-img1 multi-gd-text ">
										<a href="mens.html"><img src="images/top2.jpg" alt=" "/></a>
									</div>-->
									<?php
									//echo "hhh";
									$res1 = mysqli_query($con, "select * from tbl_category_master ");
									while($row1 = mysqli_fetch_array($res1))
									{
									?>
									<div class="col-sm-3 multi-gd-img">
										<!--<a href="mens.html"><img src="images/top2.jpg" class="catimg" alt=" "/></a>-->
										<ul class="multi-column-dropdown">
											<li><a href="#" class="catcss"><?php echo $row1['category_master'];?></a></li>
											<!--<li><a href="#"><img src="admin/<?php echo $row1['icon'];?>" class="catimg"  alt=" "/></a></li>
											<li><a href="#" class="catcss"></a></li>-->
											<?php
											//echo "hhh";
											$res2 = mysqli_query($con, "select * from tbl_subcategory where category_id = $row1[category_id]");
											while($row2 = mysqli_fetch_array($res2))
											{
											?>
											
											<li><a href="subcategory.php?subcategory_id=<?php echo $row2['sub_category_id'];?>"  ><?php echo $row2['sub_category'];?></a></li>
											<!--<li><a href="office_furniture.php?category_id=<?php echo "Office Furniture";?>"  >Table</a></li>-->
											<?php } ?>
											
										</ul>
									</div>
									<?php } ?>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class=" menu__item"><a class="menu__link" href="blog.php">Blog</a></li>
					<li class="menu__item dropdown">
					   <a class="menu__link" href="career.php">Career</a>
								
					</li>
					<li class=" menu__item"><a class="menu__link" href="contact.php">Contact</a></li>
					<li class=" menu__item"><a class="menu__link" href="feedback.php">Feedback</a></li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-user" aria-hidden="true"></i>
						<?php 
						$unmae = $_SESSION['username'];
						//$query = mysqli_query($con, "SELECT * FROM tbl_admin WHERE username = '$unmae'");
						$res = mysqli_query($con, "SELECT * FROM customer WHERE username = '$unmae'");
						$row = mysqli_fetch_array($res);
						echo $row['name'];
						?> 
						<span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-12 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="profile.php">My Profile</a></li>
											<li><a href="order_history.php">Order History</a></li>
											<li><a href="logout.php">Logout </a></li>
											
										</ul>
									</div>
									<!--<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="mens.html"><img src="images/top2.jpg" alt=" "/></a>
									</div>-->
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
				<?php
					}
				?>				
				</ul>
				</div>
			  </div>
			</nav>	
		</div>
		<div class="top_nav_right" style="float: none;">
			<div class="wthreecartaits wthreecartaits2 cart cart box_1"> 
					<a href="cart.php"><button class="w3view-cart"  value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button></a>
					
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->
<!-- Modal1 -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
						<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="username" required="">
								<label>Mobile</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="password" name="password" required=""> 
								<label>Password</label>
								<span></span>
							</div> 
							<input type="submit" name="login" value="Sign In">
						</form>
						 <!-- <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>-->
														<div class="clearfix"></div>
														<p><a href="#" data-toggle="modal" data-target="#myModal2" > Don't have an account?</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/abc.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal1 -->
<!-- Modal2 -->
<?php
if(isset($_POST['signup']))
	{
		$name = trim($_POST['name']);
		$email_address = trim($_POST['email_address']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		//$type = trim($_POST['type']);
		$date = date("Y-m-d");
		
		$queryABV =mysqli_query($con,"select * from tbl_admin where username = '$username'");
		if(mysqli_num_rows($queryABV) == 0)
		{	
			$query=mysqli_query($con, "INSERT INTO tbl_admin(name, email_address, username, password) VALUES('$name','$email_address','$username','$password')");	
			$queryABC=mysqli_query($con, "INSERT INTO customer(name, email_address, username, password, date) VALUES('$name','$email_address','$username','$password','$date')");	
			
			if($query)
			{
				echo"<script>alert('Customer added Successfully');window.location='index.php';</script>";
				
				/* $emailA = 'support@softhubtechno.com';
				if(filter_var($emailA, FILTER_VALIDATE_EMAIL) === false){
					$statusMsg = 'Please enter your valid email.';
					$msgClass = 'errordiv';
				}else{
					// Recipient email
				  $toEmail = $email_address;
					$emailSubject = 'Customer Account Created Successfully '.''.$name;
					$htmlContent = '<h2>Your Login Details</h2>
						<b>Login Id : </b>'.$username.'<br>
						<b>Password : </b>'.$password.'<br>';
					   

					// Set content-type header for sending HTML email
					$headers = "MIME-Version: 1.0" . "\r\n";
					$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

					// Additional headers
					$headers .= 'From: '.$name.'<'.$emailA.'>'. "\r\n";

					// Send email
					if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
						$statusMsg = 'Your contact request has been submitted successfully !';
						$msgClass = 'succdiv';
					}else{
						$statusMsg = 'Your contact request submission failed, please try again.';
						$msgClass = 'errordiv';
					}
					//print_r($htmlContent);
				} */
			}
			else
			{
				echo"<script>alert('Failed');window.location='index.php';</script>";
			}
		}
		else
		{
			echo"<script>alert('Mobile Number Already Exists');window.location='index.php';</script>";
		}
	}

?>
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
						 <form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="name" required="">
								<label>Name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="email_address" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="text" name="username" id="mobile" required class="form-control" maxlength="10" onkeypress="return onlyNos(event,this);" > 
								<label>Mobile</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="password" name="password" required=""> 
								<label>Password</label>
								<span></span>
							</div> 
							<!--<div class="styled-input">
								<input type="password" name="Confirm Password" required=""> 
								<label>Confirm Password</label>
								<span></span>
							</div>-->
							<input type="submit" name="signup" value="Sign Up">
						</form>
						  <!--<ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>-->
														<div class="clearfix"></div>
														<!--<p><a href="#">By clicking register, I agree to your terms</a></p>-->

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
						<div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div>
							<img src="images/signup.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal2 -->