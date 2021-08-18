<?php
include_once("header.php");
$username = $_SESSION['username'];
?>
<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>M<span>y Orders </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.php">Home</a><i>|</i></li>
								<li>My Orders</li>
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
					<div class="col-md-12 contact-form">
						<h3>Order Details</h3>
        					<form action="#" method="post">
        					<table class="table table-bordered">
        						<tr>
        							<th>Order Id</th>
        							<th>Items Id </th>
        							<th>Items Name </th>
        							<th>Price</th>
        								<!--<th>Actual Price</th>
        							<th>Total</th>
        							<th>Date</th>
        						    <th>Renew</th>-->
        						</tr>
        						<?php
        							$username = $_SESSION['username'];
        							
        							$resA = mysqli_query($con, "SELECT * FROM address_details where phone = '$username' order by id desc");
        							while($rowA = mysqli_fetch_array($resA))
        							{
        								$order_id = $rowA['order_id'];
        							
        							$res = mysqli_query($con, "SELECT * FROM order_details where order_id = '$order_id' order by id desc");
        							while($row = mysqli_fetch_array($res))
        							{
        								//$order_id = $row['order_id'];
        						?>
        						<tr>
        							<td><?php echo $row['order_id'];?></td>
        							<td><?php echo $row['item_id'];?></td>
        							<td><?php echo $row['item_name'];?></td>
        							<td><?php echo $row['item_price'];?></td>						
        							<!--<td><?php echo $row['month'];?></td>
        							<td><?php echo $row['sub_total'];?></td>
        							<td><?php echo $row['date'];?></td>-->
        							<!--<td><a href="product.php?item_master_id=<?php echo $row['item_id'];?>" class="btn btn-info" >Renew Plan</a></td>-->
        						</tr>	
        						<?php
        								}
        							}
        						?> 
        					</table>
        					</form>
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
