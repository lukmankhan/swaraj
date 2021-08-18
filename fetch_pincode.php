<?php
	include_once('connect.php');
	$pincode = $_POST['pincode'];
 	$pincode_item =mysqli_query($con,"select * from pincode_item where pin = '$pincode'");
 	
	if(mysqli_num_rows($pincode_item) == 0)
	{
		echo "Item cannot be delivered to pincode ".$pincode.".";
	}
	else
	{
		
	}
	
?>