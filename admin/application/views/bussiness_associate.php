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
									<h4 class="sub-title">Add Bussiness Associate</h4>
									<form method="post" action="<?php echo site_url('index.php/Home/add_bussiness_associate'); ?>" enctype="multipart/form-data">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Name</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" required name="name">
											</div>
											<label class="col-sm-2 col-form-label">Phone</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" required name="phone" id="mobile">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Username</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" required name="username" onblur="checkmo()" id="username">
												<P id="chmo" style="color:red"></P>
											</div>
											<label class="col-sm-2 col-form-label">Password</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" required name="password">
											</div>
										</div>

<script>
function checkmo()
	{		
		var username = document.getElementById("username").value;
		//alert(username);
		$.ajax({				
			type: 'POST',
			url: '<?php echo base_url('index.php/home/checkmo');?>',						
			data: "username=" + username,	
			success: function (res)
			{		
			//alert(res);
				$('#chmo').html(res);																											
			}					
		});      
	}
</script>																
														
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Email</label>
											<div class="col-sm-4">
												<input type="email" class="form-control" name="email">
											</div>
											<!--<label class="col-sm-2 col-form-label">Designation</label>
											<div class="col-sm-4">
												<select  name="designation_name" id="designation_name" class="form-control">
													<option value="">Select Designation</option>															
													<?php
														$create_class_new = $this->db->get("designation")->result_array();
														foreach($create_class_new as $val)
														{																
													?>	
													<option value="<?php echo $val['id'];?>"><?php echo $val['designation_name'];?></option>	
													<?php
														}
													?>								
												</select>
											</div>-->
											<label class="col-sm-2 col-form-label">Address</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="address">
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
						<h5>Bussiness Associate List</h5>
						
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
										<td><?php echo $row['name'];?></td>
										<td><?php echo $row['phone'];?></td>
										<td><?php echo $row['email'];?></td>
										<td><?php echo $row['username'];?></td>
										<td><?php echo $row['password'];?></td>
										<td><a href="<?php echo base_url("index.php/Home/bussiness_associate_edit").'/'.$row['id'].'';?>" class="btn btn-success">Edit</a>
										<a href="<?php echo base_url("index.php/Home/delete_bussiness_associate").'/'.$row['id'].'';?>" class="btn btn-danger" onclick="return confirm('Are you sure ?');">Delete</a>
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