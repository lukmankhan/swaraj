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
									<h4 class="sub-title">Update Dealer</h4>
									<form method="post" action="<?php echo site_url('index.php/Home/update_vendor'); ?>" enctype="multipart/form-data">
										<input type="hidden" class="form-control" name="id" value="<?php echo $result[0]['id'];?>">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Name</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="name" value="<?php echo $result[0]['name'];?>" required>
											</div>
											<label class="col-sm-2 col-form-label">Company Name</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="company_name" value="<?php echo $result[0]['company_name'];?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Phone</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="phone" value="<?php echo $result[0]['phone'];?>" required>
											</div>
											<label class="col-sm-2 col-form-label">Email</label>
											<div class="col-sm-4">
												<input type="email" class="form-control" name="email" value="<?php echo $result[0]['email'];?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Username</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="username" value="<?php echo $result[0]['username'];?>" required readonly>
											</div>
											<label class="col-sm-2 col-form-label">Password</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="password" value="<?php echo $result[0]['password'];?>" required readonly>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">city</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="city" value="<?php echo $result[0]['city'];?>">
											</div>
											<label class="col-sm-2 col-form-label">Address</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="address" value="<?php echo $result[0]['address'];?>">
											</div>
										</div>
										<div class="form-group row">	
											<!--<label class="col-sm-2 col-form-label">Category</label>
											<div class="col-sm-4">
												<select  name="category_master" class="form-control" id="category_master">
													<option value="">--Select--</option>	
													<?php
														$create_class_new = $this->db->get("tbl_category_master")->result_array();
														foreach($create_class_new as $val)
														{																
													?>	
														<option <?php if($val['category_id'] == $result[0]['category_master']) echo 'selected="selected"';?> value="<?php echo $val['category_id'];?>"> <?php echo $val['category_master'];?> </option>
								
													<?php
														}
													?>					
												</select>
											</div>-->
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