<?php
// We change the headers of the page so that the browser will know what sort of file is dealing with. Also, we will tell the browser it has to treat the file as an attachment which cannot be cached.

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=VendorExport.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<table border='1'>

	<tr>
		<th>Sr</th>
		<th>Name</th>
		<th>Company Name</th>
		<th>Mobile No</th>
	    <th>Username</th>
	    <th>Email</th>
	    <th>Password</th>
      <th>City</th>
	    <th>Address</th>
	    <th>Price</th>
	    <th>Commission</th>
	    <th>Employee Name</th>
	    <th>Date</th>
	</tr>
  <?php
               $i=0;
                foreach ($enquiry_list as $key => $data) 
                { 
                  $i++;	
					$designation = $this->db->get_where('designation',array('id' => $data['designation_name']))->result_array();
                ?>
              	<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $data['name'];?></td>			
					<td><?php echo $data['company_name'];?></td>			
					<td><?php echo $data['phone'];?></td>
					<td><?php echo $data['username'];?></td>
					<td><?php echo $data['password'];?></td>
					<td><?php echo $data['email'];?></td>
					<td><?php echo $data['city'];?></td>
					<td><?php echo $data['address'];?></td>
					<td><?php echo $data['price'];?></td>
					<td><?php echo $data['commission'];?></td>
					<td><?php echo $data['added_by'];?></td>
					<td><?php echo $data['date'];?></td>
				</tr>
				<?php               
                }
                ?>
</table>