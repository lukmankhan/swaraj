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
									<form method="post" action="<?php echo site_url('index.php/Home/add_item'); ?>" enctype="multipart/form-data">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Category</label>
											<div class="col-sm-4">
												<select  name="category_id" id="category_id" class="form-control" required onchange="getSubCat()">
													<option value="">Select Category</option>															
													<?php
														$category_new = $this->db->get("tbl_category_master")->result_array();
														foreach($category_new as $val)
														{																
													?>	
													<option value="<?php echo $val['category_id'];?>"><?php echo $val['category_master'];?></option>	
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
												<select  name="sub_category_id" id="sub_category_id" class="form-control" required onchange="getProduct_Type()">
													<option value="">Select Sub Category</option>															
																					
												</select>
											</div>
										</div>
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
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Product Type</label>
											<div class="col-sm-4">
												<select  name="product_type" id="product_type" class="form-control" >
													<option value="">Select Product Type</option>															
																					
												</select>
											</div>
											<!--<label class="col-sm-2 col-form-label">Pincode</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="pincode" >
											</div>-->
											<label class="col-sm-2 col-form-label">Name</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="item_name" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Price</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="price" required>
											</div>
											<label class="col-sm-2 col-form-label">One Month Price </label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="price_month">
											</div>
										</div>
										<!--<div class="form-group row">
											<label class="col-sm-2 col-form-label">Three Month Price </label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="price_three">
											</div>
											<label class="col-sm-2 col-form-label">Six Month Price</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="price_six">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Nine Month Price</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="price_nine">
											</div>
											<label class="col-sm-2 col-form-label">Twel Month Price</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="price_twel">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Deposite</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="deposite" >
											</div>
											<label class="col-sm-2 col-form-label">Delivery Charge</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="delivery_charge" >
											</div>
										</div>-->
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Description</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="description" >
											</div>
											<label class="col-sm-2 col-form-label">Upload Image One(size 500*500px)</label>
											<div class="col-sm-4">
												<input type="file" class="form-control" name="item_img" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Upload Image Two(size 500*500px)</label>
											<div class="col-sm-4">
												<input type="file" class="form-control" name="item_img_one">
											</div>
											<label class="col-sm-2 col-form-label">Upload Image Three(size 500*500px)</label>
											<div class="col-sm-4">
												<input type="file" class="form-control" name="item_img_two">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Upload Image Four(size 500*500px)</label>
											<div class="col-sm-4">
												<input type="file" class="form-control" name="item_img_three">
											</div>
										</div>
                                      
                                      <!--new-->
										<!--<div class="form-group row">
											<label class="col-sm-2 col-form-label">Heading Name</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="heading" >
											</div>
											<label class="col-sm-2 col-form-label">Product Specifications/Terms</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="term_specification" >
											</div>
										</div>-->
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

<div class="pcoded-content">
	<div class="pcoded-inner-content">
		<!-- Main-body start -->
		<div class="main-body">
			<div class="page-wrapper">
				
			<!-- Page-body start -->
			<div class="page-body" style="margin-top:-100px;">
				<!-- Hover table card start -->
				<div class="card">
					<div class="card-header">
						<h5>Image List</h5>
						
						<div class="card-header-right">
							<ul class="list-unstyled card-option">
								<li><i class="fa fa-chevron-left"></i></li>
								<li><i class="fa fa-window-maximize full-card"></i></li>
								<li><i class="fa fa-minus minimize-card"></i></li>
								<li><i class="fa fa-refresh reload-card"></i></li>
								<li><i class="fa fa-times close-card"></i></li>
							</ul>
						</div>

					</div>
					<div class="card-block table-border-style">
						<div class="table-responsive">
							   <table id="bootstrap-data-table" class="table table-striped table-bordered tfont">
								<thead style=" color:#32617d;">
								  <tr>
								  <th>Sr</th>
								  <th>Status</th>
                                  <th>Name</th>
                                  <th>Price</th>
                                  <th>File</th>
								  <th>Action</th>
								  </tr>
								</thead>
								<tbody>
									<?php
										$i = 0;
										foreach($result as $row)
										{
											$i++;
									?>
									<tr class="odd gradeX">
										<th scope="row"><?php echo $i;?></th>
										<td>
										<?php 
										if($row['status'] == 'N')
										{
										?>
										<a href="<?php echo base_url("index.php/Home/status_active").'/'.$row['item_master_id'].'';?>" onclick="return confirm('Are you sure ?');" class="btn btn-info">Active</a>
										<?php
										}else{
										?>
										<a href="<?php echo base_url("index.php/Home/status_deactive").'/'.$row['item_master_id'].'';?>" onclick="return confirm('Are you sure ?');" class="btn btn-primary">Deactive</a>
										<?php
										}
										?>
										</td>
										<td><?php echo $row['item_name'];?></td>
										<td><?php echo $row['price'];?></td>
										<td><?php //echo $row['file_up'];?>
										<img border=0 src="http://rentswale.com/admin/uploads/item/<?php echo $row['item_img']; ?>" height="80px" width="130px" style="box-shadow: 5px 5px 5px 5px;" download>
										</td>		
										<td><a href="<?php echo base_url("index.php/Home/item_edit").'/'.$row['item_master_id'].'';?>" class="btn btn-success">Edit</a>
										<a href="<?php echo base_url("index.php/Home/delete_item").'/'.$row['item_master_id'].'';?>" class="btn btn-danger" onclick="return confirm('Are you sure ?');">Delete</a>
										</td>
                                    </tr>
									<?php
										}
									?>
								</tbody>
							  </table>
							</div>
					</div>
				</div>
				<!-- Hover table card end -->
				
			</div>
			<!-- Page-body end -->
		</div>
	</div>
	<!-- Main-body end -->

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