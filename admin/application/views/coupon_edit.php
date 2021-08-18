<?php
include_once("header.php");
?>
<div class="pcoded-content">
    <div class="pcoded-inner-content">
		<!-- Main-body start -->
		<div class="main-body">
			<div class="page-wrapper">
				<!-- Page-header start -->			
				<div class="page-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-block">
									<h4 class="sub-title">Update Coupon</h4>
									<form method="post" action="<?php echo site_url('index.php/Home/update_coupon'); ?>" enctype="multipart/form-data">
										<div class="form-group row">
											<input type="hidden" class="form-control" name="id" value="<?php echo $result[0]['id'];?>">
											<label class="col-sm-2 col-form-label">Coupon Code</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="coupon_code" value="<?php echo $result[0]['coupon_code'];?>">
											</div>
											<label class="col-sm-2 col-form-label">Price</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="price" value="<?php echo $result[0]['price'];?>">
											</div>
										</div>
                                      	<div class="form-group row">
											<label class="col-sm-2 col-form-label">Description</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="description" value="<?php echo $result[0]['description'];?>" >
											</div>
											<label class="col-sm-2 col-form-label">Details</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="details" value="<?php echo $result[0]['details'];?>">
											</div>
										</div>
										<div class="form-group row">	
											<div class="col-sm-12">
												<input type="submit" class="btn btn-success" value="Submit">
											</div>
										</div>										
									</form>		   
								</div>
							</div>				
						</div>
					</div>
				</div>													
			</div>
		</div>                                                      
		<div id="styleSelector">

		</div>
	</div>
</div>
<?php
include_once("footer.php");
?>                                                    