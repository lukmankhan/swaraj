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
									<h4 class="sub-title">Update Leads</h4>
									<form method="post" action="<?php echo site_url('index.php/Home/update_ba_client'); ?>" enctype="multipart/form-data">
										<input type="hidden" class="form-control" name="id" value="<?php echo $result[0]['id'];?>">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Name</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="name" value="<?php echo $result[0]['name'];?>">
											</div>
											<label class="col-sm-2 col-form-label">Phone</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="phone" value="<?php echo $result[0]['phone'];?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Email</label>
											<div class="col-sm-4">
												<input type="email" class="form-control" name="email" value="<?php echo $result[0]['email'];?>">
											</div>
											<label class="col-sm-2 col-form-label">Address</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="address" value="<?php echo $result[0]['address'];?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Category</label>
											<div class="col-sm-4">
												<select  name="category_id" id="category_id" class="form-control" onchange="getSubCat()">
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
											<script>
	function getSubCat()
	{		
		var category_id = document.getElementById("category_id").value;
		//alert(category_id);
		$.ajax({				
			type: 'POST',
			url: '<?php echo base_url('index.php/Home/getSubCat');?>',						
			data: "category_id=" + category_id,	
			success: function (res)
			{	
				//alert(res);
				$('#sub_category_id').html(res);																			
			}					
		});      
	}
</script>
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