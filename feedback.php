<?php
include_once("header.php");
?>
<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>F<span>eedback Form </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.php">Home</a><i>|</i></li>
								<li>Feedback</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>
   <!--/contact--
    <div class="banner_bottom_agile_info">
	    <div class="container">
		  <div class="contact-grid-agile-w3s">
				<div class="col-md-4 contact-grid-agile-w3">
						<div class="contact-grid-agile-w31">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							<h4>Address</h4>
							<p>12K Street, 45 Building Road <span>California, USA.</span></p>
						</div>
					</div>
					<div class="col-md-4 contact-grid-agile-w3">
						<div class="contact-grid-agile-w32">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<h4>Call Us</h4>
							<p>+1234 758 839<span>+1273 748 730</span></p>
						</div>
					</div>
					<div class="col-md-4 contact-grid-agile-w3">
						<div class="contact-grid-agile-w33">
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
							<h4>Email</h4>
							<p><a href="mailto:info@example.com">info@example1.com</a><span><a href="mailto:info@example.com">info@example2.com</a></span></p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
	   </div>
	 </div>-->
	 
	  
   <div class="banner_bottom_agile_info">
	<div class="container">
	   <div class="agile-contact-grids">
				<div class="agile-contact-left">
					
	<?php

		if(isset($_POST['submit']))
		{
			$name = trim($_POST['name']);
			$email = trim($_POST['email']);
			$subject = trim($_POST['subject']);
			$message = trim($_POST['message']);
			$query=mysqli_query($con,"INSERT INTO feedback(name,  email, subject, message) VALUES('$name','$email','$subject','$message')");
         
		    if($query)
			{
				echo"<script>alert('Added Successfully');window.location='feedback.php';</script>"; 
			
				if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
					$statusMsg = 'Please enter your valid email.';
					$msgClass = 'errordiv';
				}else{
				
            
					// Recipient email
					$toEmail = 'lukmankhan6342@gmail.com';
					$emailSubject = 'Feedback From Customer  '.''.$name;
					$htmlContent = '<h2>Enquiry Request Submitted</h2>
                    <b>Name : </b>'.$name.'<br>
					<b>Email : </b>'.$email.'<br>
					<b>Subject : </b>'.$subject.'<br>
                    <b>Message : </b>'.$message.'<br>';
                

					// Set content-type header for sending HTML email
					$headers = "MIME-Version: 1.0" . "\r\n";
					$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

					// Additional headers
					$headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";

					// Send email
					if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
						$statusMsg = 'Your contact request has been submitted successfully !';
						$msgClass = 'succdiv';
					}else{
						$statusMsg = 'Your contact request submission failed, please try again.';
						$msgClass = 'errordiv';
					}
					//print_r($htmlContent);
				}
			}
			else
			{
				echo"<script>alert('Failed');window.location='feedback.php';</script>";
			}
			  
			 
	 
		}
?>	

					<div class="col-md-3"></div>
					<div class="col-md-6 contact-form">
						<h4 class="white-w3ls" style="color: #6a3201!important;">Feedback <span>Form</span></h4>
						<form action=" " method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="name" required="">
								<label>Name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="text" name="subject" required="">
								<label>Subject</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" name="message" required=""></textarea>
								<label>Message</label>
								<span></span>
							</div>	 
							<input type="submit" name="submit" value="SUBMIT">
						</form>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
       </div>
	</div>
 <!--//contact-->
 
<!--/grids--
<div class="coupons">
		<div class="coupons-grids text-center">
			<div class="w3layouts_mail_grid">
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>FREE SHIPPING</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-headphones" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>24/7 SUPPORT</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-shopping-bag" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>MONEY BACK GUARANTEE</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
					<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-gift" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>FREE GIFT COUPONS</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

		</div>
</div>
<!--grids-->
<!-- footer -->
<?php
include_once("footer.php");
?>   
