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
						<h5>Withdrawal Approved List</h5>
						
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
								  <th>Privious Amount</th>
								  <th>Withdrawal Amount</th>
								  <th>Balance</th>
								  <th>Date</th>
								  </tr>
								</thead>
								<tbody>
									<?php
										$i = 0;
										foreach($result as $row)
										{
											$i++;
											$bussiness_associate = $this->db->get_where('bussiness_associate',array('username' => $row['phone']))->result_array();
											//$order_details = $this->db->get_where('order_details',array('order_id' => $row['order_id']))->result_array();
											/* $username = $this->session->userdata('username');
											$emp = $this->db->get_where('emp',array('username' => $username))->result_array();
											$phone = $emp[0]['phone']; */
									?>
									<tr class="odd gradeX">
										<th scope="row"><?php echo $i;?></th>
										<td><?php echo $bussiness_associate[0]['name'];?></td>
										<td><?php echo $row['phone'];?></td>
										<td><?php echo $row['pre_amount'];?></td>
										<td><?php echo $row['with_amount'];?></td>
										<td><?php echo $row['remain_amt'];?></td>
										<td><?php echo $row['date'];?></td>
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