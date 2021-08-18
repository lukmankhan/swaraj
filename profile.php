<?php
include_once("header.php");
$username = $_SESSION['username'];
if(isset($_GET['update']))
{
	$id = $_GET['id'];
	$name = $_GET['name'];
	$email_address = $_GET['email_address'];
	$phone = $_GET['phone'];
	$pan_number = $_GET['pan_number'];
	$adhar_number = $_GET['adhar_number'];
	$address = $_GET['address'];
	$username = $_GET['username'];
	$password = $_GET['password'];
	
	$query = mysqli_query($con,"UPDATE customer set name='$name', email_address='$email_address',phone='$phone', pan_number='$pan_number', adhar_number='$adhar_number', address='$address', username='$username', password='$password' where id='$id'");
	
	$queryAS = mysqli_query($con,"UPDATE tbl_admin set  password='$password' where username='$username'");
	
	if($query)
	{
		echo "<script>alert('Profile Updated Successfully');window.location='profile.php';</script>";
	}
	else
	{
		echo "<script>alert('Update Failed');window.location='profile.php';</script>";
	}
}
?>
<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>M<span>y Profile </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.php">Home</a><i>|</i></li>
								<li>My Profile</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>
	  
   <div class="banner_bottom_agile_info">
	<div class="container">
	   <div class="agile-contact-grids">
				<div class="agile-contact-left">
					<div class="col-md-6 contact-form">
						<h4 class="white-w3ls" style="color: #6a3201!important;">My <span>Profile</span></h4>
						<?php
							$res = mysqli_query($con, "SELECT * FROM customer where username = '$username'");
							while($row = mysqli_fetch_array($res))
							{
						?>
						<form action=" " method="GET">
							<div class="styled-input agile-styled-input-top">
								<input type="hidden" name="id" value="<?php echo $row['id'];?>">
								<input type="text" name="name" value="<?php echo $row['name'];?>" required="">
								<label>Name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email"  name="email_address" value="<?php echo $row['email_address'];?>" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="text" name="phone" value="<?php echo $row['phone'];?>" >
								<label>Alternate Mobile</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" name="pan_number" value="<?php echo $row['pan_number'];?>">
								<label>Pan Number</label>
								<span></span>
							</div>	 
							<div class="styled-input">
								<input type="text" name="adhar_number" value="<?php echo $row['adhar_number'];?>">
								<label>Adhar Number</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" name="address" value="<?php echo $row['address'];?>">
								<label>Address</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" name="password" value="<?php echo $row['password'];?>">
								<label>Password</label>
								<span></span>
							</div>
							
								<input type="hidden" name="username" value="<?php echo $row['username'];?>" readonly>
								<!--<input type="hidden" name="password" value="<?php echo $row['password'];?>" readonly>-->
							<!--<div class="styled-input">
								<input type="hidden" name="username" value="<?php echo $row['username'];?>" readonly>
								<label>Username</label>
								<span></span>
							</div>-->
							<input type="submit" name="update" value="SUBMIT">
						</form>
						<?php
						}
						?>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
       </div>
	</div>
 <!--//contact-->
  
 
<?php
include_once("footer.php");
?>   
