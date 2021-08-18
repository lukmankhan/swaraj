<?php
// We change the headers of the page so that the browser will know what sort of file is dealing with. Also, we will tell the browser it has to treat the file as an attachment which cannot be cached.

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=BAClientExport.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<table border='1'>

	<tr>
		<th>Sr</th>
		<th>Name</th>
		<th>Mobile No</th>
	    <th>Email</th>
	    <th>Address</th>
	    <th>Category</th>
	    <th>BA Name</th>
	    <th>Date</th>
	</tr>
  <?php
               $i=0;
                foreach ($enquiry_list as $key => $data) 
                { 
                  $i++;	
					$tbl_category_master = $this->db->get_where('tbl_category_master',array('category_id' => $data['category_id']))->result_array();
                ?>
              	<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $data['name'];?></td>			
					<td><?php echo $data['phone'];?></td>
					<td><?php echo $data['email'];?></td>
					<td><?php echo $data['address'];?></td>
					<td><?php echo $tbl_category_master[0]['category_master'];?></td>
					<td><?php echo $data['username'];?></td>
					<td><?php echo $data['date'];?></td>
				</tr>
				<?php               
                }
                ?>
</table>