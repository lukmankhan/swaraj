<?php
include_once("header.php");
$item_master_id = $_GET['item_master_id'];
?>   
<?php
if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"] , "item_id");
		if(!in_array($_GET["item_master_id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'      			=>   $_GET["item_master_id"],
				'category_id'      		=>   $_GET["category_id"],
				'item_name'      		=>   $_POST["hidden_name"],
				'item_price'      		=>   $_POST["hidden_price"],
				'item_quantity'      	=>   $_POST["quantity"],
				'item_image'      		=>   $_POST["hidden_image"],
				/* 'month'      			=>   $_POST["month"],
				'deposite'      		=>   $_POST["deposite"],
				'delivery_charge'      	=>   $_POST["delivery_charge"],
				'from_date'      		=>   $_POST["from_date"],
				'to_date_new'      			=>   $_POST["to_date_new"], */
				);
			//print_r($item_array);
			//die();
			$_SESSION["shopping_cart"][$count] = $item_array;
 		}
		else
		{
			echo '<script>alert("Item already Added")</script>';
			echo '<script>windows.location="single.php"</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'      			=>   $_GET["item_master_id"],
			'item_name'      		=>   $_POST["hidden_name"],
			'item_price'      		=>   $_POST["hidden_price"],
			'item_quantity'      	=>   $_POST["quantity"],
			/* 'month'      			=>   $_POST["month"],
			'deposite'      		=>   $_POST["deposite"],
			'delivery_charge'      	=>   $_POST["delivery_charge"],
			'from_date'      		=>   $_POST["from_date"],
			'to_date_new'      			=>   $_POST["to_date_new"], */
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $vals)
		{
			if($vals["item_id"] == $_GET["item_master_id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>windows.location="single.php"</script>';
			}
		}
	}
}
?>
<!--/single_page-->
       <!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>Product <span>Details </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.html">Home</a><i>|</i></li>
								<li>Product Details</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>
 <?php
	$res = mysqli_query($con, "SELECT * FROM tbl_item_master  where item_master_id = '$item_master_id'");
	$row = mysqli_fetch_array($res);
?>
  <!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
	<div class="container">
	    <form action="single.php?action=add&item_master_id=<?php echo $row['item_master_id'];?>&category_id=<?php echo $row['category_id'];?>" method="post"> 
		 <div class="col-md-4 single-right-left ">
			<div class="grid images_3_of_2">
				<div class="flexslider">
					
					<ul class="slides">
						<li data-thumb="admin/uploads/item/<?php echo $row['item_img'];?>">
							<div class="thumb-image"> <img src="admin/uploads/item/<?php echo $row['item_img'];?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb="admin/uploads/item/<?php echo $row['item_img'];?>">
							<div class="thumb-image"> <img src="admin/uploads/item/<?php echo $row['item_img'];?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>	
						<li data-thumb="admin/uploads/item/<?php echo $row['item_img'];?>">
							<div class="thumb-image"> <img src="admin/uploads/item/<?php echo $row['item_img'];?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>	
			</div>
		</div>
		<div class="col-md-8 single-right-left simpleCart_shelfItem">
					<h3><?php echo $row['item_name'];?></h3>
					<p><span class="item_price">Rs.<?php echo $row['price'];?></span> <del>Rs.  <?php echo $row['price_month'];?></del></p>
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
					<div class="description">
						<h5><?php echo $row['description'];?></h5>
						<!-- <form action="#" method="post">
						<input type="text" value="Enter pincode" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter pincode';}" required="">
						<input type="submit" value="Check">
						</form>-->
					</div>
					<div class="color-quality">
						<div class="color-quality-right">
							<h5>Quality :</h5>
							<select id="country1" name="quantity" onchange="change_country(this.value)" class="frm-field required sect">
								<option value="1">1 Qty</option>
								<option value="2">2 Qty</option> 
								<option value="3">3 Qty</option>					
								<option value="4">4 Qty</option>								
								<option value="5">5 Qty</option>								
							</select>
						</div>
					</div>
					<div class="occasional">
						<div class="color-quality-right">
							<h5>Delivery :</h5>
							<!--<input type="hidden" name="item_id" required id="item_id" value="<?php echo $item_master_id;?>">-->
							<input type="text" name="pincode" required id="pincode" maxlength="6" placeholder="Pincode"> <a  class="btn btn-link">Apply</a>
							<p id="phn_error" style="color:red;"></p>
						</div>
					</div>
<script type="text/javascript">
  $(document).ready(function(){
    $("#pincode").change(function(){
      var pincode = $(this).val();
      //alert(pincode);
      $.ajax({ 
        type: "POST", 
        url: "fetch_pincode.php", 
        data: "pincode="+pincode, 
        success: function(result){ 
		//alert(result);
		//	$('#pincode').focus();
			$("#phn_error").html(result); 
        }
      });

    });
  });
</script>					
					<div class="occasional">
						<h5>Color :</h5>
						<div class="colr ert">
							<label class="radio"><input type="radio" name="radio" checked=""><i></i>Black</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="radio"><i></i>Blue </label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="radio"><i></i>Grey</label>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">								
							<fieldset>
								<input type="hidden" name="hidden_name" value="<?php echo $row['item_name'];?>">
								<input type="hidden" name="hidden_price" value="<?php echo $row['price'];?>">
								<input type="hidden"  name="hidden_image" value="<?php echo $row['item_img'];?>" />
								<input type="submit" name="add_to_cart" value="Add to cart" class="button">
							</fieldset>
					    </div>
																			
					</div>
					<!--<ul class="social-nav model-3d-0 footer-social w3_agile_social single_page_w3ls">
						                                   <li class="share">Share On : </li>
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
		</form>
									
	 			<div class="clearfix"> </div>
				<!-- /new_arrivals --> 
	<div class="responsive_tabs_agileits"> 
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li>Description</li>
							<li>Reviews</li>
							<li>Information</li>
						</ul>
					<div class="resp-tabs-container">
					<!--/tab_one-->
					   <div class="tab1">

							<div class="single_page_agile_its_w3ls">
							  <h6>Lorem ipsum dolor sit amet</h6>
							   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
							   <p class="w3ls_para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
							</div>
						</div>
						<!--//tab_one-->
						<div class="tab2">
							
							<div class="single_page_agile_its_w3ls">
								<div class="bootstrap-tab-text-grids">
									<div class="bootstrap-tab-text-grid">
										<div class="bootstrap-tab-text-grid-left">
											<img src="images/t1.jpg" alt=" " class="img-responsive">
										</div>
										<div class="bootstrap-tab-text-grid-right">
											<ul>
												<li><a href="#">Admin</a></li>
												<li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a></li>
											</ul>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget.Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis 
												suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem 
												vel eum iure reprehenderit.</p>
										</div>
										<div class="clearfix"> </div>
						             </div>
									 <div class="add-review">
										<h4>add a review</h4>
										<form action="#" method="post">
												<input type="text" name="Name" required="Name">
												<input type="email" name="Email" required="Email"> 
												<textarea name="Message" required=""></textarea>
											<input type="submit" value="SEND">
										</form>
									</div>
								 </div>
								 
							 </div>
						 </div>
						   <div class="tab3">

							<div class="single_page_agile_its_w3ls">
							  <h6>Big Wing Sneakers (Navy)</h6>
							   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
							   <p class="w3ls_para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
				</div>	
			</div>
			
	<!-- //new_arrivals --> 
	  	<!--/slider_owl-->
	
			<!--
			<div class="w3_agile_latest_arrivals">
			<h3 class="wthree_text_info">Featured <span>Arrivals</span></h3>	
					  <div class="col-md-3 product-men single">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="images/w2.jpg" alt="" class="pro-image-front">
										<img src="images/w2.jpg" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">Sleeveless Solid Blue Top</a></h4>
										<div class="info-product-price">
											<span class="item_price">$140.99</span>
											<del>$189.71</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="business" value=" ">
																	<input type="hidden" name="item_name" value="Sleeveless Solid Blue Top">
																	<input type="hidden" name="amount" value="30.99">
																	<input type="hidden" name="discount_amount" value="1.00">
																	<input type="hidden" name="currency_code" value="USD">
																	<input type="hidden" name="return" value=" ">
																	<input type="hidden" name="cancel_return" value=" ">
																	<input type="submit" name="submit" value="Add to cart" class="button">
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
                       <div class="col-md-3 product-men single">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="images/w4.jpg" alt="" class="pro-image-front">
										<img src="images/w4.jpg" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">Black Basic Shorts</a></h4>
										<div class="info-product-price">
											<span class="item_price">$120.99</span>
											<del>$189.71</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="business" value=" ">
																	<input type="hidden" name="item_name" value="Black Basic Shorts">
																	<input type="hidden" name="amount" value="30.99">
																	<input type="hidden" name="discount_amount" value="1.00">
																	<input type="hidden" name="currency_code" value="USD">
																	<input type="hidden" name="return" value=" ">
																	<input type="hidden" name="cancel_return" value=" ">
																	<input type="submit" name="submit" value="Add to cart" class="button">
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
						 <div class="col-md-3 product-men single">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="images/s6.jpg" alt="" class="pro-image-front">
										<img src="images/s6.jpg" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">Aero Canvas Loafers  </a></h4>
										<div class="info-product-price">
											<span class="item_price">$120.99</span>
											<del>$199.71</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="business" value=" ">
																	<input type="hidden" name="item_name" value="Aero Canvas Loafers">
																	<input type="hidden" name="amount" value="30.99">
																	<input type="hidden" name="discount_amount" value="1.00">
																	<input type="hidden" name="currency_code" value="USD">
																	<input type="hidden" name="return" value=" ">
																	<input type="hidden" name="cancel_return" value=" ">
																	<input type="submit" name="submit" value="Add to cart" class="button">
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
						</div>
					   <div class="col-md-3 product-men single">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="images/w7.jpg" alt="" class="pro-image-front">
										<img src="images/w7.jpg" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">Ankle Length Socks</a></h4>
										<div class="info-product-price">
											<span class="item_price">$100.99</span>
											<del>$159.71</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="business" value=" ">
																	<input type="hidden" name="item_name" value="Ankle Length Socks">
																	<input type="hidden" name="amount" value="30.99">
																	<input type="hidden" name="discount_amount" value="1.00">
																	<input type="hidden" name="currency_code" value="USD">
																	<input type="hidden" name="return" value=" ">
																	<input type="hidden" name="cancel_return" value=" ">
																	<input type="submit" name="submit" value="Add to cart" class="button">
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
							<div class="clearfix"> </div>
					
		         </div>-->
				 
	        </div>
 </div>
<!--//single_page-->
<?php
include_once("footer.php");
?>   