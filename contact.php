<?php
include_once("header.php");
?>
<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>C<span>ontact Us </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.php">Home</a><i>|</i></li>
								<li>Contact</li>
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
					<div class="col-md-6 address-grid">
						<h4>Contact <span>Information</span></h4>
							<div class="mail-agileits-w3layouts">
								<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Phone Number </p><span>+91 9822774370 / 8956899515</span>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="mail-agileits-w3layouts">
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Mail </p><a href="mailto:info@swarajfurniture.com">info@swarajfurniture.com</a><br>
								<a href="mailto:ppc@swarajfurniture.com">ppc@swarajfurniture.com</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="mail-agileits-w3layouts">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Address </p><span>Plot No. G-21, MIDC, Baramati, <br> District -Pune - 413102.</span>
								</div>
								<div class="clearfix"> </div>
							</div>
							
							<!--<ul class="social-nav model-3d-0 footer-social w3_agile_social two contact">
							                              <li class="share">SHARE ON : </li>
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
					</div>
	<?php

		if(isset($_POST['submit']))
		{
			$name = trim($_POST['name']);
			$email = trim($_POST['email']);
			$subject = trim($_POST['subject']);
			$message = trim($_POST['message']);
			/*$query=mysqli_query($con,"INSERT INTO career(name,  email, contact, pincode ,Position, message) VALUES('$name','$email','$contact','$pincode','$Position','$message')");*/
         
			if($query)
			{
				echo"<script>alert('Enquiry Submitted Successfully');window.location='contact.php';</script>"; 
			 
			
				if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
					$statusMsg = 'Please enter your valid email.';
					$msgClass = 'errordiv';
				}else{
				
            
					// Recipient email
					$toEmail = 'lukmankhan6342@gmail.com';
					$emailSubject = 'Enquiry From Customer  '.''.$name;
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
				echo"<script>alert('Failed');window.location='contact.php';</script>";
			}
			 
	 
		}
?>	

					<div class="col-md-6 contact-form">
						<h4 class="white-w3ls" style="color: #6a3201!important;">Contact <span>Form</span></h4>
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
  <div class="contact-w3-agile1 map" data-aos="flip-right">
			
		   <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783" class="map" style="border:0" allowfullscreen=""></iframe>-->
		   
		    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15161.528077325293!2d74.6131552010498!3d18.19236040519634!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9990aa99b75c7aee!2sSwaraj+Furniture+%26+Electronics!5e0!3m2!1sen!2sin!4v1562851127485!5m2!1sen!2sin" width="100%" height="368" frameborder="0" style="border:0" allowfullscreen></iframe>
          
	   </div>
 
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