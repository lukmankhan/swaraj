<?php
include_once("header.php");

$subcategory_id = $_GET['subcategory_id'];
$ress = mysqli_query($con, "select * from tbl_subcategory where sub_category_id = '$subcategory_id'");
    							$rows = mysqli_fetch_array($ress);
//echo $rows['sub_category'];
 $category_id = $rows['category_id'];
?>
<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3><?php echo $rows['sub_category']; ?> <span>  </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.php">Home</a><i>|</i></li>
								<li><?php echo $rows['sub_category']; ?></li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>

<?php if($category_id ==2) { 
echo $category_id;  ?>
 
 <!-- /new_arrivals --> 
	<div class="new_arrivals_agile_w3ls_info"> 
		<div class="container">
		    <!--<h3 class="wthree_text_info">Our<span>Products</span></h3>	-->	
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li> Product type 1</li>
							<li> Product type 2</li>
							<li> Product type 3</li>
							<li> Product type 4</li>
							<li> Product type 5</li>
							<li> Product type 6</li>
						</ul>
					<div class="resp-tabs-container">
					<!--/tab_one-->
						<div class="tab1">
							<?php
						    	$res = mysqli_query($con, "select * from tbl_item_master where sub_category_id= $subcategory_id and product_type_id=1 order by item_name ASC");
    							while($row = mysqli_fetch_array($res))
    							{
							?>
							<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="admin/uploads/item/<?php echo $row['item_img'];?>" alt="" class="pro-image-front">
										<img src="admin/uploads/item/<?php echo $row['item_img'];?>" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.php?item_master_id=<?php echo $row['item_master_id'];?>" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
									</div>
									<div class="item-info-product ">
										<h4><a href="single.php?item_master_id=<?php echo $row['item_master_id'];?>"><?php echo $row['item_name'];?></a></h4>
										<div class="info-product-price">
											<span class="item_price"> Rs.<?php  echo $row['price'];?></span>
											<del> Rs.<?php  echo $row['price'];?></del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
												<fieldset>
													<a href="single.php?item_master_id=<?php echo $row['item_master_id'];?>" style="color:white;" name="submit" value="Quick View" class="button" />Quick View</a>
												</fieldset>
										</div>							
									</div>
								</div>
							</div>
							<?php
							}
							?>
							<div class="clearfix"></div>
						</div>
						<!--//tab_one-->
						<!--/tab_two-->
						<div class="tab2">
							<?php
						    $res = mysqli_query($con, "select * from tbl_item_master where sub_category_id= $subcategory_id and product_type_id = 2 order by item_name ASC");
    						
    							while($row = mysqli_fetch_array($res))
    							{
							?>
							 <div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="admin/uploads/item/<?php echo $row['item_img'];?>" alt="" class="pro-image-front">
										<img src="admin/uploads/item/<?php echo $row['item_img'];?>" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.php?item_master_id=<?php echo $row['item_master_id'];?>" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.php?item_master_id=<?php echo $row['item_master_id'];?>"><?php echo $row['item_name'];?></a></h4>
										<div class="info-product-price">
											<span class="item_price"> Rs.<?php  echo $row['price'];?></span>
											<del> Rs.<?php  echo $row['price'];?></del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
												<fieldset>
													<a href="single.php?item_master_id=<?php echo $row['item_master_id'];?>" style="color:white;" name="submit" value="Quick View" class="button" />Quick View</a>
												</fieldset>
										</div>			
									</div>
								</div>
							</div>
							<?php
							}
							?>
							<div class="clearfix"></div>
						</div>
						<!--/tab_three-->
						<div class="tab3">
							<?php
						    	  $res = mysqli_query($con, "select * from tbl_item_master where sub_category_id= $subcategory_id and product_type_id = 3 order by item_name ASC");
    						
    							while($row = mysqli_fetch_array($res))
    							{
							?>
							 <div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="admin/uploads/item/<?php echo $row['item_img'];?>" alt="" class="pro-image-front">
										<img src="admin/uploads/item/<?php echo $row['item_img'];?>" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.php?item_master_id=<?php echo $row['item_master_id'];?>" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.php?item_master_id=<?php echo $row['item_master_id'];?>"><?php echo $row['item_name'];?></a></h4>
										<div class="info-product-price">
											<span class="item_price"> Rs.<?php  echo $row['price'];?></span>
											<del> Rs.<?php  echo $row['price'];?></del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
												<fieldset>
													<a href="single.php?item_master_id=<?php echo $row['item_master_id'];?>" style="color:white;" name="submit" value="Quick View" class="button" />Quick View</a>
												</fieldset>
										</div>			
									</div>
								</div>
							</div>
							<?php
							}
							?>
							<div class="clearfix"></div>
						</div>
						<!--/tab_four-->
						<div class="tab4">
							<?php
						    	  $res = mysqli_query($con, "select * from tbl_item_master where sub_category_id= $subcategory_id and product_type_id = 4 order by item_name ASC");
    						
    							while($row = mysqli_fetch_array($res))
    							{
							?>
							 <div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="admin/uploads/item/<?php echo $row['item_img'];?>" alt="" class="pro-image-front">
										<img src="admin/uploads/item/<?php echo $row['item_img'];?>" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.php?item_master_id=<?php echo $row['item_master_id'];?>" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.php?item_master_id=<?php echo $row['item_master_id'];?>"><?php echo $row['item_name'];?></a></h4>
										<div class="info-product-price">
											<span class="item_price"> Rs.<?php  echo $row['price'];?></span>
											<del> Rs.<?php  echo $row['price'];?></del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
												<fieldset>
													<a href="single.php?item_master_id=<?php echo $row['item_master_id'];?>" style="color:white;" name="submit" value="Quick View" class="button" />Quick View</a>
												</fieldset>
										</div>			
									</div>
								</div>
							</div>
							<?php
							}
							?>
							<div class="clearfix"></div>
						</div>
						
						<div class="tab5">
							<?php
						    	  $res = mysqli_query($con, "select * from tbl_item_master where sub_category_id= $subcategory_id and product_type_id = 5 order by item_name ASC");
    						
    							while($row = mysqli_fetch_array($res))
    							{
							?>
							 <div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="admin/uploads/item/<?php echo $row['item_img'];?>" alt="" class="pro-image-front">
										<img src="admin/uploads/item/<?php echo $row['item_img'];?>" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.php?item_master_id=<?php echo $row['item_master_id'];?>" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.php?item_master_id=<?php echo $row['item_master_id'];?>"><?php echo $row['item_name'];?></a></h4>
										<div class="info-product-price">
											<span class="item_price"> Rs.<?php  echo $row['price'];?></span>
											<del> Rs.<?php  echo $row['price'];?></del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
												<fieldset>
													<a href="single.php?item_master_id=<?php echo $row['item_master_id'];?>" style="color:white;" name="submit" value="Quick View" class="button" />Quick View</a>
												</fieldset>
										</div>			
									</div>
								</div>
							</div>
							<?php
							}
							?>
							<div class="clearfix"></div>
						</div>
						
							<div class="clearfix"></div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	<!-- //new_arrivals --> 
	
	
 
 <?php 
} else {
?>

  <!-- banner-bootom-w3-agileits -->
	<div class="banner-bootom-w3-agileits">
	<div class="container">
         <!-- mens -->
		
		<div class="clearfix"></div>
		
		<div class="single-pro">
		<?php
						    	$res = mysqli_query($con, "select * from tbl_item_master where sub_category_id = '$subcategory_id'");
    							while($row = mysqli_fetch_array($res))
    							{
    							    echo "Hello";
							?>
							<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="admin/uploads/item/<?php echo $row['item_img'];?>" alt="" class="pro-image-front">
										<img src="admin/uploads/item/<?php echo $row['item_img'];?>" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.php?item_master_id=<?php echo $row['item_master_id'];?>" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
									</div>
									<div class="item-info-product ">
										<h4><a href="single.php?item_master_id=<?php echo $row['item_master_id'];?>"><?php echo $row['item_name'];?></a></h4>
										<div class="info-product-price">
											<span class="item_price"> Rs.<?php  echo $row['price'];?></span>
											<del> Rs.<?php  echo $row['price'];?></del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
												<fieldset>
													<a href="single.php?item_master_id=<?php echo $row['item_master_id'];?>" style="color:white;" name="submit" value="Quick View" class="button" />Quick View</a>
												</fieldset>
										</div>							
									</div>
								</div>
							</div>
								<?php } ?>
							<div class="clearfix"></div>
		</div>
	</div>
</div>	
<!-- //mens -->
<?php } ?>


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
