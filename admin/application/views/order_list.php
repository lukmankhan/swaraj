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
						<h5>Order List</h5>
						
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
								  <th>Category</th>
								  <th>Product</th>
								  <th>Assign Order</th>
								  <th>Delete</th>
								  </tr>
								</thead>
								<tbody>
									<?php
										$i = 0;
										foreach($result as $row)
										{
											$i++;
											$order_details = $this->db->get_where('order_details',array('order_id' => $row['order_id']))->result_array();
									?>
									<tr class="odd gradeX">
										<th scope="row"><?php echo $i;?></th>
										<td><?php echo $row['name'];?></td>
										<td><?php echo $row['phone'];?></td>		
										<td><?php echo $row['address'];?></td>		
										<td><?php echo $row['order_id'];?></td>		
										<td>
										<?php 
										foreach($order_details as $rowAA)
										{
											$item_id = $rowAA['item_id'];
											$tbl_item_master = $this->db->get_where('tbl_item_master',array('item_master_id' => $item_id))->result_array();
											$category_id = $tbl_item_master[0]['category_id'];
											$tbl_category_master = $this->db->get_where('tbl_category_master',array('category_id' => $category_id))->result_array();
											echo $tbl_category_master[0]['category_master'];
											echo '<br>';
										}
										?>
										</td>
										<td>
										<?php 
										foreach($order_details as $rowAA)
										{
										echo $rowAA['item_name'];
										echo '<br>';
										}
										?>
										</td>
										<td><?php echo $row['phone'];?></td>		
										<td><a href="<?php echo base_url("index.php/Home/assign_lead").'/'.$row['id'].'';?>" class="btn btn-success">Assign</a>
										<a href="<?php echo base_url("index.php/Home/delete_order").'/'.$row['id'].'';?>" class="btn btn-danger" onclick="return confirm('Are you sure ?');">Delete</a>
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