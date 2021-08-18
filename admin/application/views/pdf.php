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
									<h4 class="sub-title">Add Images</h4>
									<form method="post" action="<?php echo site_url('index.php/Home/add_pdf'); ?>" enctype="multipart/form-data">
										<!--<div class="form-group row">
											<label class="col-sm-2 col-form-label">Name</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="name">
											</div>
											<label class="col-sm-2 col-form-label">Description</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="des">
											</div>
										</div>-->
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Upload File</label>
											<div class="col-sm-4">
												<input type="file" class="form-control" name="file_up">
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
                                  <!--<th>Name</th>
                                  <th>Description</th>-->
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
										<!--<td><?php echo $row['name'];?></td>
										<td><?php echo $row['des'];?></td>-->
										<td><?php //echo $row['file_up'];?>
										<img border=0 src="http://sarathiengineers.com/admin/uploads/payslip/<?php echo $row['file_up']; ?>" height="80px" width="130px" style="box-shadow: 5px 5px 5px 5px;" download>
										</td>		
										<td><a href="<?php echo base_url("index.php/Home/edit_pdf").'/'.$row['id'].'';?>" class="btn btn-success">Edit</a>
										<a href="<?php echo base_url("index.php/Home/delete_pdf").'/'.$row['id'].'';?>" class="btn btn-danger" onclick="return confirm('Are you sure ?');">Delete</a>
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