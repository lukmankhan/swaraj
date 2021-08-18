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
									<h4 class="sub-title">Update Slider</h4>
									<form method="post" action="<?php echo site_url('index.php/Home/update_slider'); ?>" enctype="multipart/form-data">
										<div class="form-group row">
												<input type="hidden" class="form-control" name="slide_id" value="<?php echo $result[0]['slide_id'];?>">
											<label class="col-sm-2 col-form-label">Name</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="name" value="<?php echo $result[0]['name'];?>">
											</div>
											<label class="col-sm-2 col-form-label">Upload Image</label>
											<div class="col-sm-4">
												<input type="file" class="form-control" name="slider_image">
												<input type="text" class="form-control" name="old_file_up" value="<?php echo $result[0]['slider_image'];?>">
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

<script>
$(document).ready( function () {
    $('#bootstrap-data-table').DataTable();
} );
</script>            
<?php
include_once("footer.php");
?>                                                    