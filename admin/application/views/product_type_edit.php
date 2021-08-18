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
									<h4 class="sub-title">Add Product Type</h4>
									<form method="post" action="<?php echo site_url('index.php/Home/update_product_type'); ?>" enctype="multipart/form-data">
										<div class="form-group row">
										<input type="hidden" class="form-control" name="id" value="<?php echo $result[0]['id'];?>">
											<label class="col-sm-2 col-form-label">Category</label>
											<div class="col-sm-4">
												<select  name="category_id" id="category_id" class="form-control" >
													<option value="">Select Category</option>															
													<?php
														$category_new = $this->db->get("tbl_category_master")->result_array();
														foreach($category_new as $val)
														{																
													?>	
													<!--<option value="<?php echo $val['category_id'];?>"><?php echo $val['category_master'];?></option>-->	
													<option <?php if($val['category_id'] == $result[0]['category_id']) echo 'selected="selected"';?> value="<?php echo $val['category_id'];?>"> <?php echo $val['category_master'];?> </option>
													<?php
														}
													?>								
												</select>
											</div>
											<label class="col-sm-2 col-form-label">Sub Category</label>
											<div class="col-sm-4">
												<select  name="sub_category_id" id="sub_category_id" class="form-control" >
													<option value="">Select Sub Category</option>															
													<?php
														$tbl_subcategory = $this->db->get("tbl_subcategory")->result_array();
														foreach($tbl_subcategory as $val)
														{																
													?>	
													<option <?php if($val['sub_category_id'] == $result[0]['sub_category_id']) echo 'selected="selected"';?> value="<?php echo $val['sub_category_id'];?>"> <?php echo $val['sub_category'];?> </option>
													<?php
														}
													?>								
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Product Type</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="product_type" value="<?php echo $result[0]['product_type'];?>">
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