	<option value="">Select Product </option>
<?php
	foreach($result as $val)
	{																
?>	
	<option value="<?php echo $val['item_master_id'];?>"><?php echo $val['item_name'];?></option>	
<?php
}
?>