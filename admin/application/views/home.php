<?php
include_once("header.php");
?>
<div class="pcoded-content">
	<div class="pcoded-inner-content">
		<div class="main-body">
			<div class="page-wrapper">
				<div class="page-body">
					<?php
					$name = $this->session->userdata('name');
					if($name == "Bussiness Associate")
					{
						$username = $this->session->userdata('username');
						$bussiness_associate = $this->db->get_where('bussiness_associate',array('username' => $username))->result_array();
						$phone = $bussiness_associate[0]['username'];
						$wallet = $this->db->get_where('wallet',array('phone' => $phone))->result_array();
					?>
					<div class="row">
						<div class="col-md-6 col-xl-3">
							<div class="card bg-c-pink order-card">
								<div class="card-block">
									<h6 class="m-b-20">My Wallet</h6>
									<h2 class="text-right"><i class="ti-wallet f-left"></i><span>Rs.<?php echo $wallet[0]['amount'];?></span></h2>
									<a href="<?php echo base_url("index.php/Home/wallet").'/'.$wallet[0]['id'].'';?>" style="color:white;"><p class="m-b-0">Withdraw<span class="f-right"></span></p></a>
								</div>
							</div>
						</div>
					</div>
					<?php
					}if($name == "Admin"){
						$address_details = $this->db->get_where('address_details',array('lead_status' => 'N'))->result_array();
						$address_details_new = $this->db->get_where('leads',array('lead_status' => 'Y'))->result_array();
						
						$date = date('Y-m-d');
						
						$address_details_today = $this->db->get_where('address_details',array('lead_status' => 'N','date' => $date))->result_array();
						$address_details_new_today = $this->db->get_where('leads',array('lead_status' => 'Y','date' => $date))->result_array();
					?>
					<div class="row">
						<div class="col-md-6 col-xl-3">
							<div class="card bg-c-blue order-card">
								<div class="card-block">
									<h6 class="m-b-20">Orders Received</h6>
									<h2 class="text-right"><i class="ti-shopping-cart f-left"></i><span><?php echo count($address_details);?></span></h2>
									<p class="m-b-0">Completed Orders<span class="f-right"><?php echo count($address_details_new);?></span></p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-xl-3">
							<div class="card bg-c-green order-card">
								<div class="card-block">
									<h6 class="m-b-20">Todays Orders Received</h6>
									<h2 class="text-right"><i class="ti-tag f-left"></i><span><?php echo count($address_details_today);?></span></h2>
									<p class="m-b-0">Completed Orders<span class="f-right"><?php echo count($address_details_new_today);?></span></p>
								</div>
							</div>
						</div>
						<?php
						$from_date = date('Y-m-01');
						$to_date = date('Y-m-31');
						
						$order_details_month = $this->db->query("SELECT * FROM order_details where date>='$from_date' and date<='$to_date'")->result_array();
						$order_details = $this->db->get('order_details')->result_array();
						foreach($order_details as $row)
						{
							$sub_total += $row['sub_total'];
						}
						foreach($order_details_month as $rowA)
						{
							$sub_total_month += $rowA['sub_total'];
						}
						?>
						<div class="col-md-6 col-xl-3">
							<div class="card bg-c-yellow order-card">
								<div class="card-block">
									<h6 class="m-b-20">Revenue</h6>
									<h2 class="text-right"><i class="ti-reload f-left"></i><span>Rs.<?php echo $sub_total;?></span></h2>
									<p class="m-b-0">This Month<span class="f-right">Rs.<?php echo $sub_total_month;?></span></p>
								</div>
							</div>
						</div>
						<?php
						$emp = $this->db->get_where('emp')->result_array();
						$bussiness_associate = $this->db->get_where('bussiness_associate')->result_array();
						$emp_month = $this->db->query("SELECT * FROM emp where date>='$from_date' and date<='$to_date'")->result_array();
						$bussiness_associate_month = $this->db->query("SELECT * FROM bussiness_associate where date>='$from_date' and date<='$to_date'")->result_array();
						?>
						<!--<div class="col-md-6 col-xl-3">
							<div class="card bg-c-pink order-card">
								<div class="card-block">
									<h6 class="m-b-20">Total Employee</h6>
									<h2 class="text-right"><i class="ti-wallet f-left"></i><span><?php echo count($emp);?></span></h2>
									<p class="m-b-0">This Month<span class="f-right"><?php echo count($emp_month);?></span></p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-xl-3">
							<div class="card bg-c-pink order-card">
								<div class="card-block">
									<h6 class="m-b-20">Total BA</h6>
									<h2 class="text-right"><i class="ti-wallet f-left"></i><span><?php echo count($bussiness_associate);?></span></h2>
									<p class="m-b-0">This Month<span class="f-right"><?php echo count($bussiness_associate_month);?></span></p>
								</div>
							</div>
						</div>-->
						<?php
						$vendor = $this->db->get_where('vendor')->result_array();
						$vendor_enquiry = $this->db->get_where('vendor_enquiry')->result_array();
						$vendor_month = $this->db->query("SELECT * FROM vendor where date>='$from_date' and date<='$to_date'")->result_array();
						$vendor_enquiry_month = $this->db->query("SELECT * FROM vendor_enquiry where dt>='$from_date' and dt<='$to_date'")->result_array();
						?>
						<div class="col-md-6 col-xl-3">
							<div class="card bg-c-pink order-card">
								<div class="card-block">
									<h6 class="m-b-20">Total Dealer</h6>
									<h2 class="text-right"><i class="ti-reload f-left"></i><span><?php echo count($vendor);?></span></h2>
									<p class="m-b-0">This Month<span class="f-right"><?php echo count($vendor_month);?></span></p>
								</div>
							</div>
						</div>
						<!--<div class="col-md-6 col-xl-3">
							<div class="card bg-c-blue order-card">
								<div class="card-block">
									<h6 class="m-b-20">Total Vendor Enquiry</h6>
									<h2 class="text-right"><i class="ti-reload f-left"></i><span><?php echo count($vendor);?></span></h2>
									<p class="m-b-0">This Month<span class="f-right"><?php echo count($vendor_month);?></span></p>
								</div>
							</div>
						</div>-->
						<?php
						$ba_client = $this->db->get_where('ba_client')->result_array();
						$ba_client_month = $this->db->query("SELECT * FROM ba_client where date>='$from_date' and date<='$to_date'")->result_array();
						?>
						<!--<div class="col-md-6 col-xl-3">
							<div class="card bg-c-green order-card">
								<div class="card-block">
									<h6 class="m-b-20">Total BA Client</h6>
									<h2 class="text-right"><i class="ti-shopping-cart f-left"></i><span><?php echo count($ba_client);?></span></h2>
									<p class="m-b-0">This Month<span class="f-right"><?php echo count($ba_client_month);?></span></p>
								</div>
							</div>
						</div>
						<?php 
						$feedback_tbl = $this->db->get_where('feedback_tbl')->result_array();
						$career_tbl = $this->db->get_where('career_tbl')->result_array();
						?>
						<div class="col-md-6 col-xl-3">
                          	<a href="<?php echo base_url("index.php/Home/feedback_list");?>" >
							<div class="card bg-c-blue order-card">
								<div class="card-block">
									<h6 class="m-b-20">Feedback List</h6>
									<h2 class="text-right"><i class="ti-user f-left"></i><span><?php echo count($feedback_tbl);?></span></h2>
								</div>
							</div>
                          </a>
						</div>-->
						<div class="col-md-6 col-xl-3">
                          <a href="<?php echo base_url("index.php/Home/career_list");?>" >
							<div class="card bg-c-green order-card">
								<div class="card-block">
									<h6 class="m-b-20">Career List</h6>
									<h2 class="text-right"><i class="ti-list f-left"></i><span><?php echo count($career_tbl);?></span></h2>
								</div>
							</div>
                          </a>
						</div>
					</div> 
					<?php
					}if($name == "emp"){
					
						$from_date = date('Y-m-01');
						$to_date = date('Y-m-31');
						
						$vendoremp = $this->db->get_where('vendor')->result_array();
						$vendor_month_emp = $this->db->query("SELECT * FROM vendor where date>='$from_date' and date<='$to_date'")->result_array();
					?>
					<div class="row">
						<div class="col-md-6 col-xl-3">
							<div class="card bg-c-yellow order-card">
								<div class="card-block">
									<h6 class="m-b-20">Total Vendor</h6>
									<h2 class="text-right"><i class="ti-reload f-left"></i><span><?php echo count($vendoremp);?></span></h2>
									<p class="m-b-0">This Month<span class="f-right"><?php echo count($vendor_month_emp);?></span></p>
								</div>
							</div>
						</div>
					</div>
					<?php
					}if($name == "vendor"){
						$from_date = date('Y-m-01');
						$to_date = date('Y-m-31');
						$username = $this->session->userdata('username');
						$vendor_table = $this->db->get_where('vendor',array('username' => $username))->result_array();
						$vendor_id = $vendor_table[0]['id'];
						$leads = $this->db->get_where('leads',array('lead_status' => 'N','vendor_name' => $vendor_id))->result_array();
						$leads_month = $this->db->query("SELECT * FROM leads where lead_status = 'N' and vendor_name = $vendor_id and date>='$from_date' and date<='$to_date'")->result_array();
						
						$leads_acc = $this->db->get_where('leads',array('lead_status' => 'Y','vendor_name' => $vendor_id))->result_array();
						$leads_month_acc = $this->db->query("SELECT * FROM leads where lead_status = 'Y' and vendor_name = $vendor_id and date>='$from_date' and date<='$to_date'")->result_array();
					?>
					<div class="row">
						<div class="col-md-6 col-xl-3">
							<div class="card bg-c-yellow order-card">
								<div class="card-block">
									<h6 class="m-b-20">Total Leads</h6>
									<h2 class="text-right"><i class="ti-reload f-left"></i><span><?php echo count($leads);?></span></h2>
									<p class="m-b-0">This Month<span class="f-right"><?php echo count($leads_month);?></span></p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-xl-3">
							<div class="card bg-c-blue order-card">
								<div class="card-block">
									<h6 class="m-b-20">Total Accepted Leads</h6>
									<h2 class="text-right"><i class="ti-reload f-left"></i><span><?php echo count($leads_acc);?></span></h2>
									<p class="m-b-0">This Month<span class="f-right"><?php echo count($leads_month_acc);?></span></p>
								</div>
							</div>
						</div>
					</div>
					<?php
					}
					?>
				</div>   
			</div>
		</div>
	</div>
</div>
<?php
include_once("footer.php");
?>                
