<?php
include_once("header.php");
?>
<div class="pcoded-content">
    <div class="pcoded-inner-content">
		<!-- Main-body start -->
		<div class="main-body">
			<div class="page-wrapper">
				<?php
					$username = $this->session->userdata('username'); 
				?>
				<div class="page-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-block">
									<h4 class="sub-title">Change Password</h4>
									<h4 style='color:green'>  <?php echo $this->session->flashdata('message');?></h4><br>
									<form name="form" action="<?php echo site_url('index.php/home/edit_change_password'); ?>" method="post">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Username</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="username" value="<?php echo $username;?>" readonly>
											</div>
											<label class="col-sm-2 col-form-label">Old Password</label>
											<div class="col-sm-4">
												<input type="password" class="form-control" id="password" name="opass">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">New Password</label>
											<div class="col-sm-4">
												<input type="password" class="form-control" name="npass" id="confirm_password">
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
<script>
	var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}
</script>
<?php
include_once("footer.php");
?>                                                    