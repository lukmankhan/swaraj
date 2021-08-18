<?php
// We change the headers of the page so that the browser will know what sort of file is dealing with. Also, we will tell the browser it has to treat the file as an attachment which cannot be cached.

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=WithdrawalExport.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<table border='1'>

	<tr>
		 <th>Sr. No</th>
		  <th>Name</th>
		  <th>Phone</th>
		  <th>Privious Amount</th>
		  <th>Withdrawal Amount</th>
		  <th>Balance</th>
		  <th>Date</th>
	</tr>
  <?php
               $i=0;
                foreach ($enquiry_list as $key => $row) 
                { 
                  $i++;	
					$bussiness_associate = $this->db->get_where('bussiness_associate',array('username' => $row['phone']))->result_array();
                ?>
              	<tr>
					<th scope="row"><?php echo $i;?></th>
					<td><?php echo $bussiness_associate[0]['name'];?></td>
					<td><?php echo $row['phone'];?></td>
					<td><?php echo $row['pre_amount'];?></td>
					<td><?php echo $row['with_amount'];?></td>
					<td><?php echo $row['remain_amt'];?></td>
					<td><?php echo $row['date'];?></td>
				</tr>
				<?php               
                }
                ?>
</table>