<?php
// session_start();
// require("prn_style.php");

//require("../connect/connect.php");
 //$fr_date=$_GET[fromdt];
 //$to_date=$_GET[todt];

?>
<title>Customer Reports</title>
<?php

$title="Quotation Reports";
//$cname="BHARTI SHARE MARKET";
//$addr="Head. Off :Bhosale Shinde Arcade, JM Road, Deccan, Pune-411004"."<br>"."Email : bhartisharemarket@gmail.com"."<br>"."Tel.: (+91) 7057101010  ";
$page=1;                   

        
 rheader($title,$cname,$addr,$page,$loan_type);

  $i=0;
  
 
?>
<table width='90%' height='16%' align='center' border=1 cellpadding=3>
       <tr>  <td class=bn1 colspan=2 style="width:30%">
      <center> <img width=85 height=85 style="" src="<?php echo base_url();?>/assets/images/slogo.png"></center> </td>
          <td colspan=4 align='left' class=bn1 style="width:35%">
          <!--<p style="margin-left:20px;"><b>Report Run Date :&nbsp;</b><?php echo date('Y-m-d');?></p>-->
           <p style="margin-left:20px;"><b>Report Run Date :&nbsp;</b><?php echo date("d-m-Y", strtotime(date('Y-m-d')));?></p>
			<p style="margin-left:20px;"><b>Report Type  :&nbsp;</b> Customer Report</p>
			
         </td>
		 <td colspan=4 align='left' class=bn1 style="width:35%">
          <p style="margin-left:20px;"><b>Report Period :&nbsp;</b> <?php 
		 // print_r($from_date);
				echo $newDate = date("d-m-Y", strtotime($from_date));
		  ?>&nbsp;To&nbsp;<?php //print_r($to_date);
				echo $newDate = date("d-m-Y", strtotime($to_date));
		  ?> </p>
			<p style="margin-left:20px;"><b>Total Count  :&nbsp;</b><?php print count($enquiry_list);?></p>
			
         </td>
       </tr>
	   
</table>
<table width='90%' align='center' border=1 cellpadding=3>
  <thead>
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
  </thead>
  <tbody>
  
				<?php
				 $i=0;
					foreach ($enquiry_list as $key => $value)
					{
						$i++;
						$designation = $this->db->get_where('designation',array('id' => $value['designation_name']))->result_array();
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
		
  </tbody>
</table>
<br>
<center><div id="but"><input type="button" class="button" onclick="window.print();window.close()" value="Print">
<a href="<?php echo site_url('index.php/Home/excel_customer/'.$from_date.'/'.$to_date.''); ?>"> <input type="button" class="button" style='width: 200px;' value="Export To Excel"> </a>
</div>

</center>

<?php


function rheader($title,$cname,$addr,$page,$loan_type)
{
          ?>
			<h3 align=center>Customer Reports</h3>
        <table width=100% align=center>  
          
       
		
          <?php
		  
          $sr=0;
          $pqty=0; 

}

?>
