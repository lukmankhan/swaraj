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
									<h4 class="sub-title">Add Dealer</h4>
									<form method="post" action="<?php echo site_url('index.php/Home/add_vendor'); ?>" enctype="multipart/form-data">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Name</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="name" required>
											</div>
											<label class="col-sm-2 col-form-label">Company Name</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="company_name">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Phone</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="phone" required>
											</div>
											<label class="col-sm-2 col-form-label">Email</label>
											<div class="col-sm-4">
												<input type="email" class="form-control" name="email">
											</div>
										</div>
										<!--<div class="form-group row">
											<label class="col-sm-2 col-form-label">Price</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="price">
											</div>
											<label class="col-sm-2 col-form-label">Commission</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="commission">
											</div>
										</div>-->
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Username</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="username" required id="username" onblur="checkmo_unq()">
													<P id="chmo_unq" style="color:red"></P>
											</div>
											<label class="col-sm-2 col-form-label">Password</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="password" required>
											</div>
										</div>
<script>
	function checkmo_unq()
		{		
			var username = document.getElementById("username").value;
		//alert(username);
			$.ajax({				
				type: 'POST',
				url: '<?php echo base_url('index.php/home/checkmo_unq');?>',						
				data: "username=" + username,	
				success: function (res)
				{		
				//alert(res);
					$('#chmo_unq').html(res);																											
				}					
			});      
		}
</script>										
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">city</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="city" required>
											</div>
											<label class="col-sm-2 col-form-label">Address</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="address" required>
											</div>
										</div>
										<!--<div class="form-group row">
											<label class="col-sm-2 col-form-label">Category </label>
											<div class="col-sm-4">
												<select  name="category_master" id="category_master" class="form-control" onchange="getSubCatChck()">
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
											<label class="col-sm-2 col-form-label">Sub Category </label>
												<div class="col-sm-4" id="sub_category_id">
												</div>
										</div>-->
<script>
	function getSubCatChck()
	{		
		var category_master = document.getElementById("category_master").value;
		//alert(category_id);
		$.ajax({				
			type: 'POST',
			url: '<?php echo base_url('index.php/Home/getSubCatChck');?>',						
			data: "category_master=" + category_master,	
			success: function (res)
			{	
				//alert(res);
				$('#sub_category_id').html(res);																			
			}					
		});      
	}
</script>										
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
						<h5>Dealer List</h5>
						
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
                                  <th>Company Name</th>
                                  <th>Name</th>
                                  <th>Phone</th>
                                  <th>Email</th>
                                  <th>Username</th>
                                  <th>Password</th>
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
										<td><?php echo $row['company_name'];?></td>
										<td><?php echo $row['name'];?></td>
										<td><?php echo $row['phone'];?></td>
										<td><?php echo $row['email'];?></td>
										<td><?php echo $row['username'];?></td>
										<td><?php echo $row['password'];?></td>
										<td><a href="<?php echo base_url("index.php/Home/vendor_edit").'/'.$row['id'].'';?>" class="btn btn-success">Edit</a>
										<a href="<?php echo base_url("index.php/Home/delete_vendor").'/'.$row['id'].'';?>" class="btn btn-danger" onclick="return confirm('Are you sure ?');">Delete</a>
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