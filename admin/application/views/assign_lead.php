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
									<h4 class="sub-title">Assign Lead</h4>
									<form method="post" action="<?php echo site_url('index.php/Home/add_assign_lead'); ?>" enctype="multipart/form-data">
										<div class="form-group row">
											<!--<input type="hidden" class="form-control" name="id" value="<?php echo $result[0]['id'];?>">-->
											<!--<label class="col-sm-2 col-form-label">Name</label>-->
											
											<?php
											/* $order_id = $result[0]['order_id'];
											$order_details= $this->db->get_where('order_details',array('order_id' => $order_id))->result_array();
											$item_id = $order_details[0]['item_id'];
											
											$tbl_item_master= $this->db->get_where('tbl_item_master',array('item_master_id' => $item_id))->result_array();
											
											$category_id = $tbl_item_master[0]['category_id']; */
											
											$vendor= $this->db->get('vendor')->result_array();
											foreach($vendor as $rowA)
											{
											?>
											<div class="col-sm-3">
												<input type="checkbox" class="checked" name="vendor_name[]" value="<?php echo $rowA['id']?>"> &nbsp;<?php echo $rowA['name']?>
												<input type="hidden" name="email[]" value="<?php echo $rowA['email']?>">
											</div>
											<?php
											foreach($result as $row)
											{
												$customer= $this->db->get_where('customer',array('username' => $row['phone']))->result_array();
											?>
											<input name="assignid[]" type="hidden" value="<?php echo $row['id']?>">
											<input name="date[]" type="hidden" value="<?php echo date('Y-m-d');?>">
											<input name="name[]" type="hidden" value="<?php echo $row['name']?>">
											<input name="phone[]" type="hidden" value="<?php echo $row['phone']?>">
											<input name="address[]" type="hidden" value="<?php echo $customer[0]['address']?>">
											<input name="order_id[]" type="hidden" value="<?php echo $row['order_id']?>">
											
											<?php
											}
											}
											?>
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
<?php
include_once("footer.php");
?>                                                    