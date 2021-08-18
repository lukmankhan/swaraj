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
									<h4 class="sub-title">Customer Report</h4>
									<form method="post" action="<?php echo site_url('index.php/Home/print_customer'); ?>" target="_blank">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">From Date</label>
											<div class="col-sm-4">
												<input type="date" class="form-control" name="from_date">
											</div>
											<label class="col-sm-2 col-form-label">To Date</label>
											<div class="col-sm-4">
												<input type="date" class="form-control" name="to_date">
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
$(document).ready( function () {
    $('#bootstrap-data-table').DataTable();
} );
</script>            
<?php
include_once("footer.php");
?>                                                    