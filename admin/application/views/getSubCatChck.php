
<?php
	foreach($result as $val)
	{																
?>
<input type="checkbox" class="checked" name="sub_category_id[]" id="sub_category_id" value="<?php echo $val['sub_category_id'];?>"> &nbsp;<?php echo $val['sub_category'];?><br>
<?php
	}
?>