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
									<h4 class="sub-title">Withdrawal Amount</h4>
									<form method="post" action="<?php echo site_url('index.php/Home/add_wallet'); ?>" enctype="multipart/form-data">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Wallet Amount</label>
											<div class="col-sm-4">
												<input type="hidden" class="form-control" name="id" value="<?php echo $result[0]['id'];?>">
												<input type="hidden" class="form-control" name="phone" value="<?php echo $result[0]['phone'];?>">
												<input type="text"  class="form-control" name="amount" value="<?php echo $result[0]['amount'];?>" id="amount" readonly>
											</div>
											<label class="col-sm-2 col-form-label">Withdrawal Amount</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" onblur='checkpoqty(this.value)' name="with_amount" id="with_amount">
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
	function checkpoqty()
	{
		var amount = document.getElementById("amount").value;
		var with_amount=document.getElementById('with_amount').value;
		//alert(with_amount);

		var a = Number(with_amount);
		var b = Number(amount);
		
		if(a > b)
		{
			alert("sorry You Can't Tranfer Balence Greater Than Available Balence");
			return false;
		}	
		else if(a == 0 )
		{
		  alert("sorry You Can't Tranfer Balence Zero");
			return false;  
		}
	}
</script>
<script>
$(document).ready( function () {
    $('#bootstrap-data-table').DataTable();
} );
</script>            
<?php
include_once("footer.php");
?>                                                    