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
						<h5>Lead List</h5>
						
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
									  <th>Order Id</th>
									  <th>Action</th>
								  </tr>
								</thead>
								<tbody>
									<?php
										$i = 0;
										foreach($result as $row)
										{
											$i++;
											$username = $this->session->userdata('username');
											$vendor = $this->db->get_where('vendor',array('username' => $username))->result_array();
											$vendor_id = $vendor[0]['id'];	
									?>
									<tr class="odd gradeX">
										<td><?php echo $i;?></td>
										<td><?php echo $row['name'];?></td>
										<td><?php echo $row['phone'];?></td>
										<td><?php echo $row['address']?></td>
										<td><?php echo $order_id_new = $row['order_id']?></td>
										<?php
										$address_details = $this->db->get_where('address_details',array('order_id' => $order_id_new))->result_array();
										$lead_status = $address_details[0]['lead_status'];
										if($lead_status == "Y")
										{
										?>
										<td><a href="#" class="btn btn-primary">Already Accepted</a></td>
										<?php
										}else{
										?>
											<?php
											if($row['lead_status'] == 'N')
											{
											?>
											<td><a href="<?php echo base_url("index.php/Home/accept_lead").'/'.$row['id'].'/'.$row['order_id'].'/'.$vendor_id.'';?>" class="btn btn-success" onclick="return confirm('Are you sure ?');">Accept</a></td>
											<?php
											}else{
											?>
											<td><a href="#" class="btn btn-primary">Already Accepted Lead</a></td>
											<?php
											}
											?>
										<?php
										}
										?>
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