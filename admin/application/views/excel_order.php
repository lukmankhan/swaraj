<?php
// We change the headers of the page so that the browser will know what sort of file is dealing with. Also, we will tell the browser it has to treat the file as an attachment which cannot be cached.

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=OrderExport.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<table border='1'>

	<tr>
		<th>Sr</th>
		<th>Order Id</th>
		<th>Name</th>
		<th>Mobile No</th>
	    <th>Email</th>
	    <th>Address</th>
	    <th>Item Name</th>
	    <th>Price</th>
	    <th>Subtotal</th>
	    <th>Date</th>
	</tr>
  <?php
               $i=0;
                foreach ($enquiry_list as $key => $data) 
                { 
                  $i++;	
					$order_details = $this->db->get_where('order_details',array('order_id' => $data['order_id']))->result_array();
                ?>
              	<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $data['order_id'];?></td>			
					<td><?php echo $data['name'];?></td>			
					<td><?php echo $data['phone'];?></td>
					<td><?php echo $data['email_address'];?></td>
					<td><?php echo $data['address'];?></td>
					<td>
					<?php 
					foreach($order_details as $row)
					{
					echo $row['item_name'];
					echo '<br>';
					}
					?>
					</td>
					<td>
					<?php 
					foreach($order_details as $row)
					{
					echo $row['item_price'];
					echo '<br>';
					}
					?>
					</td>
					<td>
					<?php 
					foreach($order_details as $row)
					{
					$Tot += $row['sub_total'];
					echo $row['sub_total'];
					echo '<br>';
					}
					?>
					</td>
					<td><?php echo $data['date'];?></td>
				</tr>
				<?php               
                }
                ?>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>Total</td>
					<td><?php echo $Tot;?></td>
					<td></td>
				</tr>
</table>