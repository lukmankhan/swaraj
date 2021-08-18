	<option value="">Select Product Type</option>
<?php
	foreach($result as $val)
	{																
?>	
	<option value="<?php echo $val['id'];?>"><?php echo $val['product_type'];?></option>	
<?php
}
?>