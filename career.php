<?php
include_once("header.php");
?>
<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>C<span>areer</span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.php">Home</a><i>|</i></li>
								<li>Career</li>
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
						<h4>SWARAJ FURNITURE  <span>CAREER</span></h4>
							<div class="mail-agileits-w3layouts">
								<!--<i class="fa fa-volume-control-phone" aria-hidden="true"></i>-->
								<div class="contact-right" style="padding-left: 0em !important;">
									<!--<p>Phone Number </p>--><span>Swaraj Furniture is largest manufacturers of commercial furniture products to the corporate, hospitals, Government, Architectural and design markets. We have capacity and resources to efficiently manufacture products to any size and quantity, and with quick respons
</span>
								
									<img src="images/about.PNG" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							
					</div>
					
					<?php

		if(isset($_POST['submit']))
		{
			$name = trim($_POST['name']);
			$mobile = trim($_POST['mobile']);
			$email = trim($_POST['email']);
			$position = trim($_POST['position']);
			$address = trim($_POST['address']);
		   
				if(isset($_FILES['image'])){
					$errors= array();
					  $file_name = $_FILES['image']['name'];
					  $file_size =$_FILES['image']['size'];
					  $file_tmp =$_FILES['image']['tmp_name'];
					  $file_type=$_FILES['image']['type'];
					  $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
					  
						$extensions= array("jpeg","jpg","png");
      
					  if(in_array($file_ext,$extensions)=== false){
						 $errors[]="extension not allowed, please choose a JPEG or PNG file.";
					  }
					  
					  if($file_size > 2097152){
						 $errors[]='File size must be excately 2 MB';
					  }
					  
				  if(empty($errors)==true){
					 move_uploaded_file($file_tmp,"images/".$file_name);
					 echo "Success";
				  }else{
						 print_r($errors);
					  }
				   }
			$query=mysqli_query($con,"INSERT INTO career(name,  email, mobile, position, address, image) VALUES('$name','$email','$mobile','$position','$address','$file_name')");
         
			if($query)
			{
				echo"<script>alert('Added Successfully');window.location='index.php';</script>";
				 
			
				/* if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
					$statusMsg = 'Please enter your valid email.';
					$msgClass = 'errordiv';
				}else{
				
            
					// Recipient email
					$toEmail = 'priyathore74@gmail.com';
					$emailSubject = 'Career From Customer  '.''.$name;
					$htmlContent = '<h2>Enquiry Request Submitted</h2>
                    <b>Name : </b>'.$name.'<br>
					<b>Mobile : </b>'.$mobile.'<br>
					<b>Email : </b>'.$email.'<br>
					<b>Position : </b>'.$position.'<br>
                    <b>Address : </b>'.$address.'<br>
					<b>File : </b>'.$cv.'<br>';
                

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
				} */
		}
			else
			{
				echo"<script>alert('Failed');window.location='index.php';</script>";
			}	 
	 
		}
?>	

					<div class="col-md-6 contact-form">
						<h4 class="white-w3ls" style="color: #6a3201!important;">CAREER <span>Form</span></h4>
						<form action=" " method="post" enctype="multipart/form-data">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="name" required="">
								<label>Name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" name="mobile" required=""> 
								<label>Mobile No</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="email" name="email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="text" name="position" required="">
								<label>Position</label>
								<span></span>
							</div>
							
							<div class="styled-input">
								<textarea name="address" required=""></textarea>
								<label>Address</label>
								<span></span>
							</div>	
							<div class="styled-input">
								
								<label style=" margin-top: -27px;">Upload CV</label>
								<span></span>
								<input type="file" name="image" required="">
							</div>
							<input type="submit" name="submit" value="SEND">
						</form>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
       </div>
	</div>
 <!--//contact-->
 
<!-- footer -->
<?php
include_once("footer.php");
?>   
