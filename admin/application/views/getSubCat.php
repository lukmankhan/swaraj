	<option value="">Select Sub Category</option>
<?php
	foreach($result as $val)
	{																
?>	
	<option value="<?php echo $val['sub_category_id'];?>"><?php echo $val['sub_category'];?></option>	
<?php
}
?>