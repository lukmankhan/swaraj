<?php
include_once("header.php");
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
									<h4 class="sub-title">Add Pincode</h4>
									<form method="post" action="<?php echo site_url('index.php/Home/add_pincode'); ?>">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Category</label>
											<div class="col-sm-4">
												<select  name="category_id" id="category_id" class="form-control" required onchange="getSubCat()">
													<option value="">Select Category</option>															
													<?php
														$category_new = $this->db->get("tbl_category_master")->result_array();
														foreach($category_new as $val)
														{																
													?>	
													<option value="<?php echo $val['category_id'];?>"><?php echo $val['category_master'];?></option>	
													<?php
														}
													?>								
												</select>
											</div>
<script>
	function getSubCat()
	{		
		var category_id = document.getElementById("category_id").value;
		//alert(category_id);
		$.ajax({				
			type: 'POST',
			url: '<?php echo base_url('index.php/Home/getSubCat');?>',						
			data: "category_id=" + category_id,	
			success: function (res)
			{	
				//alert(res);
				$('#subcategory_id').html(res);																			
			}					
		});      
	}
</script>											
											<label class="col-sm-2 col-form-label">Sub Category</label>
											<div class="col-sm-4">
												<select  name="subcategory_id" id="subcategory_id" class="form-control" required onchange="getProduct()">
													<option value="">Select Sub Category</option>															
													<?php
														$tbl_subcategory = $this->db->get("tbl_subcategory")->result_array();
														foreach($tbl_subcategory as $val)
														{																
													?>	
													<option value="<?php echo $val['sub_category_id'];?>"><?php echo $val['sub_category'];?></option>	
													<?php
														}
													?>								
												</select>
											</div>
										</div>
<script>
	function getProduct()
	{		
		var sub_category_id = document.getElementById("subcategory_id").value;
		//alert(sub_category_id);
		$.ajax({				
			type: 'POST',
			url: '<?php echo base_url('index.php/Home/getProduct');?>',						
			data: "sub_category_id=" + sub_category_id,	
			success: function (res)
			{	
				//alert(res);
				$('#item_master_id').html(res);																			
			}					
		});      
	}
</script>										
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Pincode ID</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="pincode_id" id="pincode_id" value="" readonly>
											</div>
											<label class="col-sm-2 col-form-label">Product</label>
											<div class="col-sm-4">
												<select  name="item_master_id" id="item_master_id" class="form-control">
													<option value="">Select Product</option>															
													<?php
														$create_class_new = $this->db->get("tbl_item_master")->result_array();
														foreach($create_class_new as $val)
														{																
													?>	
													<option value="<?php echo $val['item_master_id'];?>"><?php echo $val['item_name'];?></option>	
													<?php
														}
													?>								
												</select>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-12">
												<table class="table table-striped table-bordered tfont">
													<thead style=" color:#32617d;">
													  <tr>
													  <th>Sr.No.</th>
													  <th>Pincode</th>
													  <th>Action</th>
													  </tr>
													</thead>
													<tbody>
														<tr class="odd gradeX">
															<td>0<input type="hidden" name="id" id="id"><input type="hidden" name="updated" id="updated"></td>
															<td><input type="text" style="width:400px" name="pin" id="pin" class="form-control"></td>
															<td><button type="button" value="" class='btn-success' id="save_btn" accesskey="s">Save</button></td>
														</tr>
													</tbody>
												  </table>
												  <table class="table table-bordered table-hover itable">			
														<tbody id="rows">							
														
														</tbody>		
													</table>
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
<div class="pcoded-content" style="margin-top:-100px">
	<div class="pcoded-inner-content">
		<div class="main-body">
			<div class="page-wrapper">
			<div class="page-body">
				<div class="card">
					<div class="card-header">
						<h5>Pincode List</h5>
						
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
								  <th>Sr</th>
                                  <!--<th>Pincode ID</th>-->
                                  <th>Product Name</th>
                                  <th>Pincodes</th>
                                  <th>Username</th>
								  <th>Action</th>
								  </tr>
								</thead>
								<tbody>
									<?php
										$i = 0;
										foreach($record as $row)
										{
											$i++;
		                                    $tbl_item_master = $this->db->get_where('tbl_item_master',array('item_master_id' => $row['item_master_id']))->result_array();
									?>
									<tr class="odd gradeX">
										<th scope="row"><?php echo $i;?></th>
										<!--<td><?php echo $row['pincode_id'];?></td>-->		
										<td><?php echo $tbl_item_master[0]['item_name'];?></td>
										<td>
										<?php 
		                                $pincode_item = $this->db->get_where('pincode_item',array('pincode_id' => $row['pincode_id']))->result_array();
		                                foreach($pincode_item as $vals)
		                                {
										echo $vals['pin'];
										echo "<br>";
		                                }
		                                ?></td>
										<td><?php echo $row['username'];?></td>
										<td><a href="javascript:fetch_pincode(<?php echo $row['pincode_id'];?>)" id="<?php echo $row['pincode_id'];?>" class="btn btn-success">Edit</a> <a href="<?php echo base_url("index.php/Home/delete_pincode/$row[pincode_id]");?>" title="Delete" onclick="return confirm('Are you sure ?');"  class="btn btn-danger">Delete</a></td>
                                    </tr>
									<?php
										}
									?>
								</tbody>
							  </table>
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
	$(document).ready(function(){
		$("#save_btn").click(function() {
 		var pin  = document.getElementById("pin").value;
		var id            = document.getElementById("id").value;
		var updated       = document.getElementById("updated").value;
		var pincode_id    = document.getElementById("pincode_id").value;
		//alert(pincode_id);
			$.ajax({				
				type: 'POST',
				url: '<?php echo base_url('index.php/Home/add_pincode_temp');?>',						
				data: "pin=" + pin +  "&id=" + id + "&updated=" +updated + "&pincode_id=" +pincode_id,
				success: function (res)
				{		
					//alert(res);
					$('#rows').html(res);
					document.getElementById('pin').value='';			
					document.getElementById('id').value='';						
									
					document.getElementById("pin").focus(); 																										
				}					
			}); 
	
		});
	});
</script>
<script type="text/javascript">
	function delete_pincode_item(id,pincode_id)
	{    
		if(confirm('Sure To Delete This Entry ?'))
		{
			var id = id;					
			 $.ajax({				
				url: '<?php echo base_url('index.php/Home/delete_pincode_item');?>',	
				data:"id=" + id + "&pincode_id=" + pincode_id,
				type:'POST',				
				success:function(data){						
					$('#rows').html(data);
								
					}	
				});			 
		}	
	}
</script>
<script type="text/javascript">
	function edit_pincode_item(id)
	{  
		//alert('test');
		var id = id;					
		$.ajax({				
			url: '<?php echo base_url('index.php/Home/edit_pincode_item');?>',	
			data:"id="+id,
			type:'POST',				
			success:function(res){						
					
					var result = jQuery.parseJSON(res);					
					var arr = $.map(result, function (el) {								
						return el								
					});																		
					var pin = arr[0].pin;															
					var id = arr[0].id;								
					
					$('#pin').val(pin);					
					$('#id').val(id);				
							
				}	
			});		
		}
</script>
<script type="text/javascript">
	function fetch_pincode(pincode_id)
	{    			
			var pincode_id = pincode_id;					
			 $.ajax({				
				url: '<?php echo base_url('index.php/Home/fetch_pincode_item');?>',	
				data:"pincode_id="+pincode_id,
				type:'POST',				
				success:function(res){						
					
						$('#rows').html(res);				
					}	
				});	

			$.ajax({				
				url: '<?php echo base_url('index.php/Home/fetch_pincode');?>',	
				data:"pincode_id="+pincode_id,
				type:'POST',				
				success:function(res){						
					//alert(res);	
					var result = jQuery.parseJSON(res);					
					var arr = $.map(result, function (el) {								
						return el								
					});						
					
					var pincode_id = arr[0].pincode_id;																
					var item_master_id = arr[0].item_master_id;														
					var category_id = arr[0].category_id;														
					var subcategory_id = arr[0].subcategory_id;																
					
					$('#pincode_id').val(pincode_id);
					$('#item_master_id').val(item_master_id);
					$('#category_id').val(category_id);
					$('#subcategory_id').val(subcategory_id);
					document.getElementById("updated").value = 'y'; 
					}	
				});		
			
	}
</script>
<script type="text/javascript">
	function delete_pincode_temp(id)
	{    
		if(confirm('Sure To Delete This Entry ?'))
		{
			var id = id;					
			 $.ajax({				
				url: '<?php echo base_url('index.php/Home/delete_pincode_temp');?>',	
				data:"id="+id,
				type:'POST',				
				success:function(data){						
					$('#rows').html(data);
								
					}	
				});			 
		}	
	}
</script>
<script type="text/javascript">
	function edit_pincode_temp(id)
	{    
		//alert('test');
		var id = id;				
		 $.ajax({				
			url: '<?php echo base_url('index.php/Home/edit_pincode_temp');?>',	
			data:"id="+id,
			type:'POST',				
			success:function(res){						
					var result = jQuery.parseJSON(res);					
					var arr = $.map(result, function (el) {								
						return el								
					});												
					var pin = arr[0].pin;												
					var id = arr[0].id;															
				
					$('#pin').val(pin);
					$('#id').val(id);								
				}	
			});			 
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