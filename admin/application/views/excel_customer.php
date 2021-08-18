<?php
// We change the headers of the page so that the browser will know what sort of file is dealing with. Also, we will tell the browser it has to treat the file as an attachment which cannot be cached.

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=CustomerExport.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<table border='1'>

	<tr>
		<th style='background-color:#d8d3d3;' >Sr</th>
      <th style='background-color:#d8d3d3;' >Name</th>
      <th style='background-color:#d8d3d3;' >Email</th>
      <th style='background-color:#d8d3d3;' >Username</th>
      <th style='background-color:#d8d3d3;' >Password</th>
      <th style='background-color:#d8d3d3;' >Mobile No</th>
      <th style='background-color:#d8d3d3;' >Address</th>
      <th style='background-color:#d8d3d3;' >Pan No</th>
      <th style='background-color:#d8d3d3;' >Adhar No</th>
      <th style='background-color:#d8d3d3;' >Date</th>
	</tr>
  <?php
               $i=0;
                foreach ($enquiry_list as $key => $value) 
                { 
                  $i++;	
					//$designation = $this->db->get_where('designation',array('id' => $data['designation_name']))->result_array();
                ?>
              	<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $value['name'];?></td>			
					<td><?php echo $value['email_address'];?></td>
					<td><?php echo $value['username'];?></td>
					<td><?php echo $value['password'];?></td>
					<td><?php echo $value['phone'];?></td>
					<td><?php echo $value['address'];?></td>
					<td><?php echo $value['pan_number'];?></td>
					<td><?php echo $value['adhar_number'];?></td>
					<td><?php echo $value['date'];?></td>
				</tr>
				<?php               
                }
                ?>
</table>