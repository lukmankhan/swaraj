<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI
class Cron extends CI_Controller {

	function __construct()
	{
    parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->helper('string');
        $this->load->library('upload');
        $this->load->model('Master_model');
        $this->load->helper('file');
	 if($this->session->userdata('username')=='')         
        {
			
        	redirect('index.php/Login','refrash');
        
        }
	}
	//----Update Rank-----
	function get_reg_id()
	{
		$ranking = $this->db->get('ranking')->result_array();
		foreach($ranking as $row)
		{
			$ref_id = $row['ref_id'];
			$pv_value = $row['amount'];
			$this->update_rank_cron($ref_id,$pv_value);
		}
	}
	function update_rank_cron($ref_id,$pv_value)
	{
		$dt = date('Y-m-d');
		//$ref_id = 'FC001';
		echo $ref_id.'Hello'.'<br>';
		echo $pv_value.'Hii'.'<br>';
		//die();
		//echo '<br>';
		$ranking = $this->db->get_where('ranking', array('ref_id' => $ref_id))->result_array();
		$binary_user_left = $this->db->get_where('binary_user', array('position' => 'left'))->result_array();
		$binary_user_right = $this->db->get_where('binary_user', array('position' => 'right'))->result_array();
		$left_count = count($binary_user_left);
		$right_count = count($binary_user_right);
		$date_start = date('Y-m-01');
		$date_end = date('Y-m-31');
		
		//$pv_value = '4000000';
		switch ($pv_value) 
		{
			case ($pv_value >= 1000 && $pv_value < 2000):
				echo "EXECUTIVE";
				echo '<br>';
				
					if($left_count >0 && $right_count >0)
					{
						echo "Hii Left & Right";
						echo '<br>';
						
						
						$this->db->select('*');
						$this->db->from("binary_comm");
						$this->db->where('date >=',$date_start);
						$this->db->where('date <=',$date_end);
						$this->db->where('rank =','EXECUTIVE');
						$query = $this->db->get('');
						$data['result']= $query->result_array();
						//print_r($data);
						echo '<br>';
						foreach($data['result'] as $row)
						{
							$amount += $row['comm_amount'];
						}
						echo $amount;
						
						if($amount < 300)
						{
							$amount_diff = 300 - $amount;
							$amount_comm = $pv_value * 0.10;
							
							$dataA['ref_id'] = $ref_id;
							$dataA['rank'] = 'EXECUTIVE';
							$dataA['date'] = $dt;
							if($amount_diff > $amount_comm)
								{
									$dataA['comm_amount'] = $amount_comm;	
								}
								else
								{
									$dataA['comm_amount'] = $amount_diff;	
								}
							$this->db->insert('binary_comm',$dataA);
						}
						$data = array(			
							'rank' =>  'EXECUTIVE',
							'executive_upg_date' =>  $dt ,
							);
						//	print_r($data);
						$this->db->where('ref_id',$ref_id);
						$this->db->update('ranking',$data);
					}						
					else
					{
						echo "No Left";
					}
				
				break;
				
			case ($pv_value >= 2000 && $pv_value < 5000):
				echo "PLATINUM EXECUTIVE";
				echo '<br>';
					if($left_count >0 && $right_count >0)
					{
						echo "Hii 1 Left & 1 Right";
						echo '<br>';
						
						$this->db->select('*');
						$this->db->from("binary_comm");
						$this->db->where('date >=',$date_start);
						$this->db->where('date <=',$date_end);
						$this->db->where('rank =','PLATINUM EXECUTIVE');
						$query = $this->db->get('');
						$data['result']= $query->result_array();
						print_r($data);
						echo '<br>';
						
						foreach($data['result'] as $row)
						{
							$amount += $row['comm_amount'];
						}
						echo $amount;
						
						if($amount < 600)
						{
							$amount_diff = 600 - $amount;
							$amount_comm = $pv_value * 0.10;
							
							$dataA['ref_id'] = $ref_id;
							$dataA['rank'] = 'PLATINUM EXECUTIVE';
							$dataA['date'] = $dt;
							if($amount_diff > $amount_comm)
								{
									$dataA['comm_amount'] = $amount_comm;	
								}
								else
								{
									$dataA['comm_amount'] = $amount_diff;	
								}
							$this->db->insert('binary_comm',$dataA);
						}
						$data = array(			
							'rank' =>  'PLATINUM EXECUTIVE',
							'p_executive_upg_date' =>  $dt ,
							);
						//	print_r($data);
						$this->db->where('ref_id',$ref_id);
						$this->db->update('ranking',$data);
					}						
					else
					{
						echo "No Left";
					}
				break;
				
			case ($pv_value >= 5000 && $pv_value < 10000):
				echo "GLOBAL EXECUTIVE";
				echo '<br>';
					if($left_count =2 && $right_count =2)
					{
						echo "Hii 2 Left & 2 Right";
						echo '<br>';
						
						$this->db->select('*');
						$this->db->from("binary_comm");
						$this->db->where('date >=',$date_start);
						$this->db->where('date <=',$date_end);
						$this->db->where('rank =','GLOBAL EXECUTIVE');
						$query = $this->db->get('');
						$data['result']= $query->result_array();
						print_r($data);
						echo '<br>';
						
						foreach($data['result'] as $row)
						{
							$amount += $row['comm_amount'];
						}
						echo $amount;
						
						if($amount < 1000)
						{
							$amount_diff = 1000 - $amount;
							$amount_comm = $pv_value/100 * 12.5;
							$dataA['ref_id'] = $ref_id;
							$dataA['rank'] = 'GLOBAL EXECUTIVE';
							$dataA['date'] = $dt;
								if($amount_diff > $amount_comm)
								{
									$dataA['comm_amount'] = $amount_comm;	
								}
								else
								{
									$dataA['comm_amount'] = $amount_diff;	
								}
							$this->db->insert('binary_comm',$dataA);
						}
						$data = array(			
							'rank' =>  'GLOBAL EXECUTIVE',
							'g_executive_upg_date' =>  $dt ,
							);
						//	print_r($data);
						$this->db->where('ref_id',$ref_id);
						$this->db->update('ranking',$data);
					}						
					else
					{
						echo "No Left";
					}
				break;
				
			case ($pv_value >= 10000 && $pv_value < 25000):
				echo "DIAMOND EXECUTIVE";
				echo '<br>';
					if($left_count =2 && $right_count =2)
					{
						echo "Hii 2 Left & 2 Right";
						echo '<br>';
						
						$this->db->select('*');
						$this->db->from("binary_comm");
						$this->db->where('date >=',$date_start);
						$this->db->where('date <=',$date_end);
						$this->db->where('rank =','DIAMOND EXECUTIVE');
						$query = $this->db->get('');
						$data['result']= $query->result_array();
						print_r($data);
						echo '<br>';
						
						foreach($data['result'] as $row)
						{
							$amount += $row['comm_amount'];
						}
						echo $amount;
						
						if($amount < 2500)
						{
							$amount_diff = 2500 - $amount;
							$amount_comm = $pv_value/100 * 12.5;
							
							$dataA['ref_id'] = $ref_id;
							$dataA['rank'] = 'DIAMOND EXECUTIVE';
							$dataA['date'] = $dt;
							if($amount_diff > $amount_comm)
								{
									$dataA['comm_amount'] = $amount_comm;	
								}
								else
								{
									$dataA['comm_amount'] = $amount_diff;	
								}
							$this->db->insert('binary_comm',$dataA);
						}
						$data = array(			
							'rank' =>  'DIAMOND EXECUTIVE',
							'd_executive_upg_date' =>  $dt ,
							);
						//	print_r($data);
						$this->db->where('ref_id',$ref_id);
						$this->db->update('ranking',$data);
					}						
					else
					{
						echo "No Left";
					}
				break;
				
			case ($pv_value >= 25000 && $pv_value < 50000):
				echo "AMBASSADOR";
				echo '<br>';
					if($left_count =2 && $right_count =2)
					{
						echo "Hii 2 Left & 2 Right";
						echo '<br>';
						
						$this->db->select('*');
						$this->db->from("binary_comm");
						$this->db->where('date >=',$date_start);
						$this->db->where('date <=',$date_end);
						$this->db->where('rank =','AMBASSADOR');
						$query = $this->db->get('');
						$data['result']= $query->result_array();
						print_r($data);
						echo '<br>';
						
						foreach($data['result'] as $row)
						{
							$amount += $row['comm_amount'];
						}
						echo $amount;
						
						if($amount < 5000)
						{
							$amount_diff = 5000 - $amount;
							$amount_comm = $pv_value/100 * 15;
							
							$dataA['ref_id'] = $ref_id;
							$dataA['rank'] = 'AMBASSADOR';
							$dataA['date'] = $dt;
							if($amount_diff > $amount_comm)
								{
									$dataA['comm_amount'] = $amount_comm;	
								}
								else
								{
									$dataA['comm_amount'] = $amount_diff;	
								}
							$this->db->insert('binary_comm',$dataA);
						}
						$data = array(			
							'rank' =>  'AMBASSADOR',
							'ambassadar_upg_date' =>  $dt ,
							);
						//	print_r($data);
						$this->db->where('ref_id',$ref_id);
						$this->db->update('ranking',$data);
					}						
					else
					{
						echo "No Left";
					}
				break;
				
			case ($pv_value >= 50000 && $pv_value < 100000):
				echo "PLATINUM AMBASSADOR";
				echo '<br>';
					if($left_count =2 && $right_count =2)
					{
						echo "Hii 2 Left & 2 Right";
						echo '<br>';
						
						$this->db->select('*');
						$this->db->from("binary_comm");
						$this->db->where('date >=',$date_start);
						$this->db->where('date <=',$date_end);
						$this->db->where('rank =','PLATINUM AMBASSADOR');
						$query = $this->db->get('');
						$data['result']= $query->result_array();
						print_r($data);
						echo '<br>';
						
						foreach($data['result'] as $row)
						{
							$amount += $row['comm_amount'];
						}
						echo $amount;
						
						if($amount < 10000)
						{
							$amount_diff = 10000 - $amount;
							$amount_comm = $pv_value/100 * 15;
							
							$dataA['ref_id'] = $ref_id;
							$dataA['rank'] = 'PLATINUM AMBASSADOR';
							$dataA['date'] = $dt;
							if($amount_diff > $amount_comm)
								{
									$dataA['comm_amount'] = $amount_comm;	
								}
								else
								{
									$dataA['comm_amount'] = $amount_diff;	
								}
							$this->db->insert('binary_comm',$dataA);
						}
						$data = array(			
							'rank' =>  'PLATINUM AMBASSADOR',
							'platinum_ambassadar_upg_date' =>  $dt ,
							);
						//	print_r($data);
						$this->db->where('ref_id',$ref_id);
						$this->db->update('ranking',$data);
					}						
					else
					{
						echo "No Left";
					}
				break;
				
			case ($pv_value >= 100000 && $pv_value < 250000):
				echo "DIAMOND AMBASSADOR";
				echo '<br>';
					if($left_count =2 && $right_count =2)
					{
						echo "Hii 2 Left & 2 Right";
						echo '<br>';
						
						$this->db->select('*');
						$this->db->from("binary_comm");
						$this->db->where('date >=',$date_start);
						$this->db->where('date <=',$date_end);
						$this->db->where('rank =','DIAMOND AMBASSADOR');
						$query = $this->db->get('');
						$data['result']= $query->result_array();
						print_r($data);
						echo '<br>';
						
						foreach($data['result'] as $row)
						{
							$amount += $row['comm_amount'];
						}
						echo $amount;
						
						if($amount < 25000)
						{
							$amount_diff = 25000 - $amount;
							$amount_comm = $pv_value/100 * 17.5;
							
							$dataA['ref_id'] = $ref_id;
							$dataA['rank'] = 'DIAMOND AMBASSADOR';
							$dataA['date'] = $dt;
							if($amount_diff > $amount_comm)
								{
									$dataA['comm_amount'] = $amount_comm;	
								}
								else
								{
									$dataA['comm_amount'] = $amount_diff;	
								}
							$this->db->insert('binary_comm',$dataA);
						}
						$data = array(			
							'rank' =>  'DIAMOND AMBASSADOR',
							'd_ambassadar_upg_date' =>  $dt ,
							);
						//	print_r($data);
						$this->db->where('ref_id',$ref_id);
						$this->db->update('ranking',$data);
					}						
					else
					{
						echo "No Left";
					}
				break;
				
			case ($pv_value >= 250000 && $pv_value < 500000):
				echo "PRESIDENTIAL AMBASSADOR";
				echo '<br>';
					if($left_count =2 && $right_count =2)
					{
						echo "Hii 2 Left & 2 Right";
						echo '<br>';
						
						$this->db->select('*');
						$this->db->from("binary_comm");
						$this->db->where('date >=',$date_start);
						$this->db->where('date <=',$date_end);
						$this->db->where('rank =','PRESIDENTIAL AMBASSADOR');
						$query = $this->db->get('');
						$data['result']= $query->result_array();
						print_r($data);
						echo '<br>';
						
						foreach($data['result'] as $row)
						{
							$amount += $row['comm_amount'];
						}
						echo $amount;
						
						if($amount < 50000)
						{
							$amount_diff = 50000 - $amount;
							$amount_comm = $pv_value/100 * 17.5;
							
							$dataA['ref_id'] = $ref_id;
							$dataA['rank'] = 'PRESIDENTIAL AMBASSADOR';
							$dataA['date'] = $dt;
							if($amount_diff > $amount_comm)
								{
									$dataA['comm_amount'] = $amount_comm;	
								}
								else
								{
									$dataA['comm_amount'] = $amount_diff;	
								}
							$this->db->insert('binary_comm',$dataA);
						}
						
						$data = array(			
							'rank' =>  'PRESIDENTIAL AMBASSADOR',
							'predential_ambassadar_upg_date' =>  $dt ,
							);
						//	print_r($data);
						$this->db->where('ref_id',$ref_id);
						$this->db->update('ranking',$data);
					}						
					else
					{
						echo "No Left";
					}
				break;
				
			case ($pv_value >= 500000 && $pv_value < 1000000):
				echo "CROWN";
				echo '<br>';
					if($left_count =2 && $right_count =2)
					{
						echo "Hii 2 Left & 2 Right";
						echo '<br>';
						$this->db->select('*');
						$this->db->from("binary_comm");
						$this->db->where('date >=',$date_start);
						$this->db->where('date <=',$date_end);
						$this->db->where('rank =','CROWN');
						$query = $this->db->get('');
						$data['result']= $query->result_array();
						print_r($data);
						echo '<br>';
						
						foreach($data['result'] as $row)
						{
							$amount += $row['comm_amount'];
						}
						echo $amount;
						
						if($amount < 100000)
						{
							$amount_diff = 100000 - $amount;
							$amount_comm = $pv_value/100 * 20;
							
							$dataA['ref_id'] = $ref_id;
							$dataA['rank'] = 'CROWN';
							$dataA['date'] = $dt;
							if($amount_diff > $amount_comm)
								{
									$dataA['comm_amount'] = $amount_comm;	
								}
								else
								{
									$dataA['comm_amount'] = $amount_diff;	
								}
							$this->db->insert('binary_comm',$dataA);
						}
						$data = array(			
							'rank' =>  'CROWN',
							'crown_upg_date' =>  $dt ,
							);
						//	print_r($data);
						$this->db->where('ref_id',$ref_id);
						$this->db->update('ranking',$data);
					}						
					else
					{
						echo "No Left";
					}
				break;	
				
			case ($pv_value >= 1000000 && $pv_value < 2000000):
				echo "LEGEND";
				echo '<br>';
					if($left_count =2 && $right_count =2)
					{
						echo "Hii 2 Left & 2 Right";
						echo '<br>';
						
						$this->db->select('*');
						$this->db->from("binary_comm");
						$this->db->where('date >=',$date_start);
						$this->db->where('date <=',$date_end);
						$this->db->where('rank =','LEGEND');
						$query = $this->db->get('');
						$data['result']= $query->result_array();
						print_r($data);
						echo '<br>';
						
						foreach($data['result'] as $row)
						{
							$amount += $row['comm_amount'];
						}
						echo $amount;
						
						if($amount < 250000)
						{
							$amount_diff = 250000 - $amount;
							$amount_comm = $pv_value/100 * 20;
							
							$dataA['ref_id'] = $ref_id;
							$dataA['rank'] = 'LEGEND';
							$dataA['date'] = $dt;
							if($amount_diff > $amount_comm)
								{
									$dataA['comm_amount'] = $amount_comm;	
								}
								else
								{
									$dataA['comm_amount'] = $amount_diff;	
								}
							$this->db->insert('binary_comm',$dataA);
						}
						$data = array(			
							'rank' =>  'LEGEND',
							'legend_upg_date' =>  $dt ,
							);
						//	print_r($data);
						$this->db->where('ref_id',$ref_id);
						$this->db->update('ranking',$data);
					}						
					else
					{
						echo "No Left";
					}
				break;
				
			case ($pv_value >= 2000000 && $pv_value < 4000000):
				echo "STAR LEGEND";
				echo '<br>';
					if($left_count =2 && $right_count =2)
					{
						echo "Hii 2 Left & 2 Right";
						echo '<br>';
						
						$this->db->select('*');
						$this->db->from("binary_comm");
						$this->db->where('date >=',$date_start);
						$this->db->where('date <=',$date_end);
						$this->db->where('rank =','STAR LEGEND');
						$query = $this->db->get('');
						$data['result']= $query->result_array();
						print_r($data);
						echo '<br>';
						
						foreach($data['result'] as $row)
						{
							$amount += $row['comm_amount'];
						}
						echo $amount;
						
						if($amount < 500000)
						{
							$amount_diff = 500000 - $amount;
							$amount_comm = $pv_value/100 * 20;
							$dataA['ref_id'] = $ref_id;
							$dataA['rank'] = 'STAR LEGEND';
							$dataA['date'] = $dt;
							if($amount_diff > $amount_comm)
								{
									$dataA['comm_amount'] = $amount_comm;	
								}
								else
								{
									$dataA['comm_amount'] = $amount_diff;	
								}
							$this->db->insert('binary_comm',$dataA);
						}
						$data = array(			
							'rank' =>  'STAR LEGEND',
							'star_legend_upg_date' =>  $dt ,
							);
						//	print_r($data);
						$this->db->where('ref_id',$ref_id);
						$this->db->update('ranking',$data);
					}						
					else
					{
						echo "No Left";
					}
				break;
				
			case ($pv_value >= 4000000):
				echo "CROWN LEGEND";
				echo '<br>';
					if($left_count =2 && $right_count =2)
					{
						echo "Hii 2 Left & 2 Right";
						echo '<br>';
						
						$this->db->select('*');
						$this->db->from("binary_comm");
						$this->db->where('date >=',$date_start);
						$this->db->where('date <=',$date_end);
						$this->db->where('rank =','CROWN LEGEND');
						$query = $this->db->get('');
						$data['result']= $query->result_array();
						print_r($data);
						echo '<br>';
						
						foreach($data['result'] as $row)
						{
							$amount += $row['comm_amount'];
						}
						echo $amount;
						
						if($amount < 1000000)
						{
							$amount_diff = 1000000 - $amount;
							$amount_comm = $pv_value/100 * 20;
							$dataA['ref_id'] = $ref_id;
							$dataA['rank'] = 'CROWN LEGEND';
							$dataA['date'] = $dt;
							if($amount_diff > $amount_comm)
								{
									$dataA['comm_amount'] = $amount_comm;	
								}
								else
								{
									$dataA['comm_amount'] = $amount_diff;	
								}
							$this->db->insert('binary_comm',$dataA);
						}
						$data = array(			
							'rank' =>  'CROWN LEGEND',
							'crown_legend_upg_date' =>  $dt ,
							);
						//	print_r($data);
						$this->db->where('ref_id',$ref_id);
						$this->db->update('ranking',$data);
					}						
					else
					{
						echo "No Left";
					}
				break;	
				
			default:
				echo "No";
				break;
		}
		
		/* if($pv_value > 1000 && $rank == 'EXECUTIVE')
		{
			$data = array(			
    			'rank' =>  'EXECUTIVE',
    			'executive_upg_date' =>  $dt ,
    			);
				print_r($data);
    		$this->db->where('ref_id',$ref_id);
    		$this->db->update('ranking',$data);
		}
		else
		{
			echo "No";
		} */
		
		//redirect("index.php/Home/register");
	}
}
?>