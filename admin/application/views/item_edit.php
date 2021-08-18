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
									<h4 class="sub-title">Add Item</h4>
									<form method="post" action="<?php echo site_url('index.php/Home/update_item'); ?>" enctype="multipart/form-data">
										<div class="form-group row">
										<input type="hidden" class="form-control" name="item_master_id" value="<?php echo $result[0]['item_master_id'];?>">
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
												<select  name="sub_category_id" id="sub_category_id" class="form-control" onchange="getProduct_Type()">
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
										
<script>
	function getProduct_Type()
	{		
		var sub_category_id = document.getElementById("sub_category_id").value;
		//alert(sub_category_id);
		$.ajax({				
			type: 'POST',
			url: '<?php echo base_url('index.php/Home/getProduct_Type');?>',						
			data: "sub_category_id=" + sub_category_id,	
			success: function (res)
			{	
				//alert(res);
				$('#product_type').html(res);																			
			}					
		});      
	}
</script>											
											<select  name="product_type" id="product_type" class="form-control" >
													<option value="">Select Product Type</option>															
													<?php
														$product_type = $this->db->get("product_type")->result_array();
														foreach($product_type as $val)
														{																
													?>	
													<option <?php if($val['id'] == $result[0]['product_type']) echo 'selected="selected"';?> value="<?php echo $val['id'];?>"> <?php echo $val['product_type'];?> </option>
													<?php
														}
													?>								
												</select>
											<label class="col-sm-2 col-form-label">Name</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="item_name" value="<?php echo $result[0]['item_name'];?>">
											</div>
										</div>
										<div class="form-group row">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Price</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="price" value="<?php echo $result[0]['price'];?>">
											</div>
											<label class="col-sm-2 col-form-label">Duplicate Price </label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="price_month" value="<?php echo $result[0]['price_month'];?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Three Month Price </label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="price_three" value="<?php echo $result[0]['price_three'];?>">
											</div>
											<label class="col-sm-2 col-form-label">Six Month Price</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="price_six" value="<?php echo $result[0]['price_six'];?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Nine Month Price</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="price_nine" value="<?php echo $result[0]['price_nine'];?>">
											</div>
											<label class="col-sm-2 col-form-label">Twel Month Price</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="price_twel" value="<?php echo $result[0]['price_twel'];?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Deposite</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="deposite" value="<?php echo $result[0]['deposite'];?>">
											</div>
											<label class="col-sm-2 col-form-label">Delivery Charge</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="delivery_charge" value="<?php echo $result[0]['delivery_charge'];?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Description</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="description" value="<?php echo $result[0]['description'];?>">
											</div>
											<label class="col-sm-2 col-form-label">Upload Image One</label>
											<div class="col-sm-4">
												<input type="file" class="form-control" name="item_img">
												<input type="hidden" class="form-control" name="old_file_up" value="<?php echo $result[0]['item_img'];?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Upload Image Two</label>
											<div class="col-sm-4">
												<input type="file" class="form-control" name="item_img_one">
												<input type="hidden" class="form-control" name="old_file_up_one" value="<?php echo $result[0]['item_img_one'];?>">
											</div>
											<label class="col-sm-2 col-form-label">Upload Image Three</label>
											<div class="col-sm-4">
												<input type="file" class="form-control" name="item_img_two">
												<input type="hidden" class="form-control" name="old_file_up_two" value="<?php echo $result[0]['item_img_two'];?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Upload Image Four</label>
											<div class="col-sm-4">
												<input type="file" class="form-control" name="item_img_three">
												<input type="hidden" class="form-control" name="old_file_up_three" value="<?php echo $result[0]['item_img_three'];?>">
											</div>
										</div>
                                      
                                      <!--new-->
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Heading Name</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="heading" value="<?php echo $result[0]['heading'];?>">
											</div>
											<label class="col-sm-2 col-form-label">Product Specifications/Terms</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="term_specification" value="<?php echo $result[0]['term_specification'];?>">
											</div>
										</div>
										<!--new-->
                                      
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