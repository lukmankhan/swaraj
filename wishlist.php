<?php
include_once("header.php");

if(isset($_POST['submit']))
	{
		$order_id = trim($_POST['order_id']);
		$order_idnew = trim($_POST['order_idnew']);
		$name = trim($_POST['name']);
		//$type = trim($_POST['type']);
		$email_address = trim($_POST['email_address']);
		$phone = trim($_POST['phone']);
		//$password = trim($_POST['password']);
		//$address = trim($_POST['address']);
		$item_id = trim($_POST['item_id']);
		//$category_id = trim($_POST['category_id']);
		$item_name = trim($_POST['item_name']);
		$item_quantity = trim($_POST['item_quantity']);
		$item_price = trim($_POST['item_price']);
		//$month = trim($_POST['month']);
		//$coupon_code = trim($_POST['coupon_code']);
		$sub_total = trim($_POST['sub_total']);
		//echo "<pre>";
		//print_r($_POST);
		$item_id = count($_POST['item_id']);
		$date = date('Y-m-d');
			//$query_usr =mysqli_query($con, "INSERT INTO tbl_admin(name, username, password, email_address, type, address) VALUES('$name','$phone','$password','$email_address','$type', '$address')");
			
			$queryA=mysqli_query($con, "INSERT INTO address_details(order_id, name, email_address, phone,  date) VALUES('$order_idnew', '$name', '$email_address', '$phone', '$date')");
			
			$query="INSERT INTO order_details(order_id, item_id, item_name, item_quantity, item_price, sub_total) VALUES";
			
			for($i=0;$i<$item_id;$i++)
			{
				$query.="('".$_POST['order_id'][$i]."','".$_POST['item_id'][$i]."','".$_POST['item_name'][$i]."','".$_POST['item_quantity'][$i]."','".$_POST['item_price'][$i]."','".$_POST['sub_total'][$i]."'),";
			}
			$finalquery = rtrim($query,',');
			//echo $finalquery;
			$insertdata = mysqli_query($con,$finalquery);
			if(!empty($insertdata))
			{
				//echo "data submitted";
				echo"<script>alert('Order Placed Successfully');window.location='index.php';</script>";
				unset($_SESSION["shopping_cart"]);
			}
		
	}

?>
<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>About <span>Us </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.php">Home</a><i>|</i></li>
								<li>About</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>
<!-- /banner_bottom_agile_info -->
<form action="#" method="post">
    <div class="banner_bottom_agile_info">
	    <div class="container">
			<div class="agile_ab_w3ls_info">
				<div class="col-md-12 ab_pic_w3ls_text_info">
					<?php
					//print_r($_SESSION["shopping_cart"]);
						if(!empty($_SESSION["shopping_cart"]))
						{
					?>
					<div class="table-responsive cart_info">
						<table class="table table-condensed">
							<thead>
								<tr class="cart_menu" style="background: #fb7e13 !important;color: white !important;">
									<td class="image" style="color: white !important;">Item</td>
									<td class="description" style="color: white !important;"></td>
									<td class="price" style="color: white !important;">Price</td>
									<td class="quantity" style="color: white !important;">Quantity</td>
									<td class="total" style="color: white !important;">Total</td>
									<td></td>
								</tr>
							</thead>
							<tbody>
								<?php
									$total=0;
									foreach($_SESSION["shopping_cart"] as $keys => $values)
									{
									//$total++;
									$item_master_id = $values['item_id'];
									$resBC = mysqli_query($con, "SELECT * FROM tbl_item_master  where item_master_id = '$item_master_id'");
									$rowBC = mysqli_fetch_array($resBC);
								?>
								<tr>
									<td class="cart_product">
										<a href=""><img src="admin/uploads/item/<?php echo $rowBC['item_img'];?>" style="height:100px;width:100px;" alt=""></a>
									</td>
									<td class="cart_description">
										<h4><a href=""><?php echo $values['item_name'];?></a></h4>
									</td>
									<td class="cart_price">
										<p>Rs.<?php echo $values['item_price'];?></p>
									</td>
									<td class="cart_quantity">
										<p><?php echo $values['item_quantity'];?></p>
										
									</td>
									<td class="cart_total">
										<p class="cart_total_price">Rs.<?php echo $values['item_price']*$values['item_quantity'];?></p>
									</td>
									<td class="cart_delete">
										<a class="cart_quantity_delete" href="single.php?action=delete&item_master_id=<?php echo $values['item_id'];?>&category_id=<?php echo $values['category_id'];?>"><i class="fa fa-times"></i></a>
									</td>
								</tr>
								<?php
									$max_id = mysqli_query($con, "SELECT * FROM address_details ORDER BY id DESC LIMIT 1");
									$rowABC = mysqli_fetch_array($max_id);
									$ordernn = $rowABC['id'];
									$order_id = 'ORDER000'.($ordernn + 1);
								?>
								
								<input type="hidden" name="order_id[]" required value="<?php echo $order_id;?>">
								<input type="hidden" name="item_id[]" value="<?php echo $values['item_id'];?>">
								<input type="hidden" name="item_name[]" value="<?php echo $values['item_name'];?>">
								<input type="hidden" name="item_quantity[]" value="<?php echo $values['item_quantity'];?>">
								<input type="hidden" name="item_price[]" value="<?php echo $values['item_price'];?>">
								<input type="hidden" name="sub_total[]" value="<?php echo $values['item_price']*$values['item_quantity'];;?>">
								<?php
										$total += $values['item_price']*$values['item_quantity'];
										}
								?>
								<tr>
									<td class="cart_product">
									</td>
									<td class="cart_description">
									</td>
									<td class="cart_price">
									</td>
									<td class="cart_quantity">
									<p><b>Total</b></p>
									</td>
									<td class="cart_total">
										<p class="cart_total_price"><b>Rs.<?php echo $total;?></b></p>
									</td>
									<td class="cart_delete">
									</td>
								</tr>	
							</tbody>
						</table>
						
								<div class="text-right">	<a href="cart.php"  class="btn btn-info mb-2">Add To Cart</a><div>
						<!--<?php
										if (!isset($_SESSION['username']))
										{
											//$unmae = $_SESSION['username'];
									?>
									<div class="text-right"><a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-info">Checkout</a></div>
									<?php
										}else{
										$unmae = $_SESSION['username'];	
										$tbl_admin = mysqli_query($con, "SELECT * FROM tbl_admin where username = '$unmae'");
										$rowABCX = mysqli_fetch_array($tbl_admin);	
										
										$max_id = mysqli_query($con, "SELECT * FROM address_details ORDER BY id DESC LIMIT 1");
										$rowABC = mysqli_fetch_array($max_id);
										$ordernn = $rowABC['id'];
										$order_id = 'ORDER000'.($ordernn + 1);
									?>
									<input type="hidden" name="order_idnew" required value="<?php echo $order_id;?>">
									<input type="hidden" name="name" value="<?php echo $rowABCX['name'];?>">
									<input type="hidden" name="email_address" value="<?php echo $rowABCX['email_address'];?>">
									<input type="hidden" name="phone" value="<?php echo $rowABCX['username'];?>">
									<input type="hidden" name="address" value="<?php echo $rowABCX['address'];?>">
									<div class="text-right"><input type="submit" name="submit" value="Order Place"  class="btn btn-primary"></div>
							<?php
								}
							?>-->
					</div>
					<?php
						}else{
					?>
						<tr>
							<td><img src="images/cart.png" alt="" style="height:300px;margin-left: 385px;" />
							<h3 style="text-align:center;">Missing Wishlist?</h3>
							</td>
						</tr>	
						<?php
							}
						?>
				</div>
				<div class="clearfix"></div>
			</div> 
		 </div> 
    </div>
	</form>
	
<?php
include_once("footer.php");
?>   