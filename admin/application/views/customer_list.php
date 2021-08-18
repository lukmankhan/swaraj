<?php
include_once("header.php");
?>
<div class="pcoded-content">
	<div class="pcoded-inner-content">
		<!-- Main-body start -->
		<div class="main-body">
			<div class="page-wrapper">
				
			<!-- Page-body start -->
			<div class="page-body">
				<!-- Hover table card start -->
				<div class="card">
					<div class="card-header">
						<h5>Customer List</h5>
						
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
								  <th>Sr. No</th>
								  <th>Name</th>
								  <th>Phone</th>
								  <th>Address</th>
								  <th>Email</th>
								  <th>Action</th>
								  <!--<th>Pan Number</th>
								  <th>Adhar Number</th>-->
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
										<td><?php echo $i;?></td>
										<td><?php echo $row['name'];?></td>
										<td><?php echo $row['phone']?></td>
										<td><?php echo $row['address']?></td>
										<td><?php echo $row['email_address']?></td>
										<!--<td><?php echo $row['pan_number']?></td>
										<td><?php echo $row['adhar_number']?></td>-->
										<td>
										<?php
										if($row['active_status'] == 'N')
										{
										?>
										<a href="<?php echo base_url("index.php/Home/customer_deactive").'/'.$row['id'].'';?>" class="btn btn-danger" onclick="return confirm('Are you sure ?');">Deactive</a>
										<?php
										}else{
										?>
										<a href="<?php echo base_url("index.php/Home/customer_active").'/'.$row['id'].'';?>" class="btn btn-success" onclick="return confirm('Are you sure ?');">Active</a>
										<?php
										}
										?>
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