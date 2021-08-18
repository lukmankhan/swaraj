
<?php
	

	$Total = 0;
	$i = 0;
	foreach($record as $val)
	{		
		$i++;
?>	

<tr>
	
	<td width="3%"><?php echo $i;?></td>
	
	<td width="8%"><input type="hidden" name="pin[]" value="<?php echo $val['pin'];?>"><?php echo $val['pin'];?></td>		
		
	<td width="5%">
		<a href="javascript:edit_pincode_temp(<?php echo $val['id'];?>)" id="<?php echo $val['id'];?>" class="bt btn-link">Edit</a> &nbsp;&nbsp;&nbsp;
		<a href="javascript:delete_pincode_temp(<?php echo $val['id'];?>)" id="<?php echo $val['id'];?>" class="bt btn-link">Delete</a> 
	</td>
</tr>

<?php
	}
?>
												
	<td><b></b></td>													
	<td><b></b></td>												
	<td>
		<input type="submit" class="btn btn-info btn-sm" size=3  value='Finish'>
	</td>
</tr>