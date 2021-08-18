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
									<form method="post" action="<?php echo site_url('index.php/Home/add_product_type'); ?>" enctype="multipart/form-data">
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
												<select  name="sub_category_id" id="sub_category_id" class="form-control" required>
													<option value="">Select Sub Category</option>															
																					
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Product Type</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="product_type" >
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
						<h5>Product Type List</h5>
						
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
                                  <th>Category</th>
                                  <th>Sub Category</th>
                                  <th>Product Type</th>
								  <th>Action</th>
								  </tr>
								</thead>
								<tbody>
									<?php
										$i = 0;
										foreach($result as $row)
										{
											$i++;
											$category = $this->db->get_where("tbl_category_master",array('category_id'=>$row['category_id']))->result_array();
											$tbl_subcategory = $this->db->get_where("tbl_subcategory",array('sub_category_id'=>$row['sub_category_id']))->result_array();
									?>
									<tr class="odd gradeX">
										<th scope="row"><?php echo $i;?></th>
										<td><?php echo $category[0]['category_master'];?></td>
										<td><?php echo $tbl_subcategory[0]['sub_category'];?></td>
										<td><?php echo $row['product_type'];?></td>		
										<td><a href="<?php echo base_url("index.php/Home/product_type_edit").'/'.$row['id'].'';?>" class="btn btn-success">Edit</a>
										<a href="<?php echo base_url("index.php/Home/delete_product_type").'/'.$row['id'].'';?>" class="btn btn-danger" onclick="return confirm('Are you sure ?');">Delete</a>
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