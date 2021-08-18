<?php
include_once("header.php");

?>
<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>Blog<span>  </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.php">Home</a><i>|</i></li>
								<li>Blogs</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div> 

  <!-- banner-bootom-w3-agileits -->
	<div class="banner-bootom-w3-agileits">
	<div class="container">
         <!-- mens -->
		<div class="col-md-1 products-left">
			<!--<div class="filter-price">
				
					<img src="images/sofa1.jpg" class="img-responsive" alt="">
			</div>-->
			
			
			<div class="clearfix"></div>
		</div>
		
		<div class="col-md-10 products-right">
		    <?php
		    	$res = mysqli_query($con, "select * from blog order by id DESC");
				while($row = mysqli_fetch_array($res))
				{
			?>
			<h5><?php echo $row['title'];?></h5>
			<div class="sort-grid">
				<div class="sorting">
					<h6>by <?php echo $row['name'];?> | <?php echo $row['date'];?> </h6>
					<div class="clearfix"></div>
				</div>
				<div class="sorting">
					<h6><?php echo $row['date'];?></h6>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="men-wear-top">
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<img class="img-responsive" src="admin/uploads/<?php echo $row['slider_image'];?>" alt=" "/>
						</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="men-wear-bottom">
				<div class="col-sm-12 men-wear-right">
					<p><?php echo $row['des'];?></p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
			<?php
			}
			?>
		</div>
		
		<div class="col-md-1 products-left">
			<!--<div class="filter-price">
			
					<img src="images/sofa1.jpg" class="img-responsive" alt="">
			</div>-->
			
			
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
		
		
	</div>
</div>	
<!-- //mens -->

<!-- footer -->
<?php
include_once("footer.php");
?>   
