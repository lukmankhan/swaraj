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
									<h4 class="sub-title">Update Category</h4>
									<form method="post" action="<?php echo site_url('index.php/Home/update_category'); ?>" enctype="multipart/form-data">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Name</label>
											<div class="col-sm-4">
												<input type="hidden" class="form-control" name="category_id" value="<?php echo $result[0]['category_id'];?>">
												<input type="text" class="form-control" name="category_master" value="<?php echo $result[0]['category_master'];?>">
											</div>
											<!--<label class="col-sm-2 col-form-label">Upload Image</label>
											<div class="col-sm-4">
												<input type="file" class="form-control" name="icon">
												<input type="hidden" class="form-control" name="old_file_up" value="<?php echo $result[0]['icon'];?>">
											</div>-->
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