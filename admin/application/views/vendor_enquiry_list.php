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
						<h5>Vendor Enquiry List</h5>
						
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
								  <th>Date</th>
								  <th>Name</th>
								  <th>Phone</th>
								   <th>Email</th>
								  <th>Address</th>
								  <th>City</th>
								  <th>Adhar Card</th>
								  <th>Shop Act</th>
								  <th>Pan Card</th>
								  
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
										<td><?php echo $row['dt'];?></td>
										<td><?php echo $row['name'];?></td>
										<td><?php echo $row['contact'];?></td>
										<td><?php echo $row['email'];?></td>	
										<td><?php echo $row['address'];?></td>												
										<td><?php echo $row['city'];?></td>	
										<td>
										<!--<img border=0 src="http://rentswale.com/<?php echo $row['adhar_card']; ?>" height="80px" width="130px" style="box-shadow: 5px 5px 5px 5px;" download>-->
										<iframe src="http://rentswale.com/<?php echo $row['adhar_card']; ?>"></iframe><br>
										<a href="http://rentswale.com/<?php echo $row['adhar_card']; ?>" class="btn btn-info" download>Download</a>
										</td>
										<td>
										<!--<img border=0 src="http://rentswale.com/<?php echo $row['shop_act']; ?>" height="80px" width="130px" style="box-shadow: 5px 5px 5px 5px;" download>-->
										<iframe src="http://rentswale.com/<?php echo $row['shop_act']; ?>"></iframe><br>
										<a href="http://rentswale.com/<?php echo $row['shop_act']; ?>" class="btn btn-info" download>Download</a>
										</td>
										<td>
										<!--<img border=0 src="http://rentswale.com/<?php echo $row['pan_card']; ?>" height="80px" width="130px" style="box-shadow: 5px 5px 5px 5px;" download>-->
										<iframe src="http://rentswale.com/<?php echo $row['pan_card']; ?>"></iframe><br>
										<a href="http://rentswale.com/<?php echo $row['pan_card']; ?>" class="btn btn-info" download>Download</a>
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