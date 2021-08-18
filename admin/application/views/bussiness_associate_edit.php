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
									<h4 class="sub-title">Update Bussiness Associate</h4>
									<form method="post" action="<?php echo site_url('index.php/Home/update_bussiness_associate'); ?>" enctype="multipart/form-data">
										<input type="hidden" class="form-control" name="id" value="<?php echo $result[0]['id'];?>">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Name</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" required name="name" value="<?php echo $result[0]['name'];?>">
											</div>
											<label class="col-sm-2 col-form-label">Phone</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" required name="phone" value="<?php echo $result[0]['phone'];?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Username</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="username" required value="<?php echo $result[0]['username'];?>" readonly>
											</div>
											<label class="col-sm-2 col-form-label">Password</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="password" required value="<?php echo $result[0]['password'];?>" readonly>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Email</label>
											<div class="col-sm-4">
												<input type="email" class="form-control"  name="email" value="<?php echo $result[0]['email'];?>">
											</div>
											<label class="col-sm-2 col-form-label">Address</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="address" value="<?php echo $result[0]['address'];?>">
											</div>
											<!--<label class="col-sm-2 col-form-label">Designation</label>
											<div class="col-sm-4">
												<select  name="designation_name" class="form-control" id="designation_name">
													<option value="">--Select--</option>	
													<?php
														$create_class_new = $this->db->get("designation")->result_array();
														foreach($create_class_new as $val)
														{																
													?>	
														<option <?php if($val['id'] == $result[0]['designation_name']) echo 'selected="selected"';?> value="<?php echo $val['id'];?>"> <?php echo $val['designation_name'];?> </option>
								
													<?php
														}
													?>					
												</select>
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