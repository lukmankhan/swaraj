<?php
include_once("header.php");
?>
<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>Office Furniture</span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.php">Home</a><i>|</i></li>
								<li>Office Furniture</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>
<!-- /new_arrivals --> 
	<div class="new_arrivals_agile_w3ls_info"> 
		<div class="container">
		   <!-- <h3 class="wthree_text_info">Our<span>Pr</span></h3>		-->
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li>Sofa </li>
							<li>Particle</li>
							<li>Solid Wood</li>
							
						</ul>
					<div class="resp-tabs-container">
					<!--/tab_one-->
						<div class="tab1">
							<?php
						    	$res = mysqli_query($con, "select * from tbl_item_master where category_id=1 order by item_name ASC");
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
						    	$res = mysqli_query($con, "select * from tbl_item_master where category_id=1 order by item_name ASC");
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
						    	$res = mysqli_query($con, "select * from tbl_item_master where category_id=1 order by item_name ASC");
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
include_once("footer.php");
?>   