<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

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
	//----Login home for users-----
	function index()
    {      
        $this->load->view("login");
    }
	
	public function home()
	{
		$this->load->view('home');
	}
	//-------Change Password-------
	 public function change_password()
	 {
		 $this->load->view('change_password');
	 }
	public function edit_change_password()
    {
    	$usernm = $this->session->userdata('username');
        $pass=$this->input->post('npass');
		$old_pass=$this->input->post('opass');
        $data_chk_pass['check_data_password']= $this->Master_model->check_data_password($usernm,$old_pass);
        if(!$data_chk_pass['check_data_password'])
        {
           $this->session->set_flashdata('message', 'Old password is Incoorect.. Password is not updated');
           redirect('index.php/Home/change_password');
        }
		else
        {
        $this->db->set('password',$pass);
        $this->db->where('username', $usernm);
        $this->db->update('users');
        $this->session->set_flashdata('message', 'Password updated Successfully..');
        redirect('index.php/Home/change_password');
       }    
    }
	//=======================ADD Coupon===========================
	function coupon()
	{
		$this->db->order_by("id", "desc");
		$data['result']= $this->db->get('coupon')->result_array();
		$this->load->view('coupon',$data);
	}
	function add_coupon()
	{
		$data['coupon_code'] =  $this->input->post('coupon_code');
		$data['price'] =  $this->input->post('price');
		$data['description'] =  $this->input->post('description');
		$data['details'] =  $this->input->post('details');
		$insert_id = $this->db->insert('coupon',$data);
		redirect("index.php/Home/coupon");
	}
	public function coupon_edit($id)
	{
		$this->db->from('coupon');
		$this->db->where('id',$id);
		$query = $this->db->get();
		$data1['result'] = $query->result_array();
		$this->load->view('coupon_edit',$data1);
	}
	public function update_coupon()
	{
		$data = array(			
			'coupon_code' =>  $this->input->post('coupon_code'),						
			'price' =>  $this->input->post('price'),						
			'description' =>  $this->input->post('description'),						
			'details' =>  $this->input->post('details'),						
			 );
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('coupon', $data);
		redirect("index.php/Home/coupon") ;
	}
	public function delete_coupon($id)
    {
		$this->db->where('id',$id);
		$this->db->delete('coupon');
		redirect("index.php/Home/coupon");               
    }
	//=======================ADD designation===========================
	function designation()
	{
		$this->db->order_by("id", "desc");
		$data['result']= $this->db->get('designation')->result_array();
		$this->load->view('designation',$data);
	}
	function add_designation()
	{
		$data['designation_name'] =  $this->input->post('designation_name');
		$insert_id = $this->db->insert('designation',$data);
		redirect("index.php/Home/designation");
	}
	public function designation_edit($id)
	{
		$this->db->from('designation');
		$this->db->where('id',$id);
		$query = $this->db->get();
		$data1['result'] = $query->result_array();
		$this->load->view('designation_edit',$data1);
	}
	public function update_designation()
	{
		$data = array(			
			'designation_name' =>  $this->input->post('designation_name'),						
			 );
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('designation', $data);
		redirect("index.php/Home/designation") ;
	}
	public function delete_designation($id)
    {
		$this->db->where('id',$id);
		$this->db->delete('designation');
		redirect("index.php/Home/designation");               
    }
	//=======================ADD Position===========================
	function position()
	{
		$this->db->order_by("id", "desc");
		$data['result']= $this->db->get('position')->result_array();
		$this->load->view('position',$data);
	}
	function add_position()
	{
		$data['position_name'] =  $this->input->post('position_name');
		$insert_id = $this->db->insert('position',$data);
		redirect("index.php/Home/position");
	}
	public function position_edit($id)
	{
		$this->db->from('position');
		$this->db->where('id',$id);
		$query = $this->db->get();
		$data1['result'] = $query->result_array();
		$this->load->view('position_edit',$data1);
	}
	public function update_position()
	{
		$data['position_name'] =  $this->input->post('position_name');
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('position', $data);
		redirect("index.php/Home/position") ;
	}
	public function delete_position($id)
    {
		$this->db->where('id',$id);
		$this->db->delete('position');
		redirect("index.php/Home/position");               
    }
    
	//=======================ADD city===========================
	function city()
	{
		$this->db->order_by("id", "desc");
		$data['result']= $this->db->get('city')->result_array();
		$this->load->view('city',$data);
	}
	function add_city()
	{
		$data['name'] =  $this->input->post('name');
		$insert_id = $this->db->insert('city',$data);
		redirect("index.php/Home/city");
	}
	public function city_edit($id)
	{
		$this->db->from('city');
		$this->db->where('id',$id);
		$query = $this->db->get();
		$data1['result'] = $query->result_array();
		$this->load->view('city_edit',$data1);
	}
	public function update_city()
	{
		$data = array(			
			'name' =>  $this->input->post('name'),						
			 );
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('city', $data);
		redirect("index.php/Home/city") ;
	}
	public function delete_city($id)
    {
		$this->db->where('id',$id);
		$this->db->delete('city');
		redirect("index.php/Home/city");               
    }
	//=======================ADD Client===========================
	function ba_client()
	{
		$this->db->order_by("id", "desc");
		$data['result']= $this->db->get('ba_client')->result_array();
		$this->load->view('ba_client',$data);
	}
	function add_ba_client()
	{
		$username = $this->session->userdata('username');
		$data['name'] =  $this->input->post('name');
		$data['phone'] =  $this->input->post('phone');
		$data['email'] =  $this->input->post('email');
		$data['username'] =  $username;
		$data['address'] =  $this->input->post('address');
		$data['category_id'] =  $this->input->post('category_id');
		$data['sub_category_id'] =  $this->input->post('sub_category_id');
		$data['date'] =  date('Y-m-d');
		$insert_id = $this->db->insert('ba_client',$data);
		
		redirect("index.php/Home/ba_client");
	}
	public function ba_client_edit($id)
	{
		$this->db->from('ba_client');
		$this->db->where('id',$id);
		$query = $this->db->get();
		$data1['result'] = $query->result_array();
		$this->load->view('ba_client_edit',$data1);
	}
	public function update_ba_client()
	{
		$data['name'] =  $this->input->post('name');
		$data['phone'] =  $this->input->post('phone');
		$data['email'] =  $this->input->post('email');
		$data['address'] =  $this->input->post('address');
		$data['category_id'] =  $this->input->post('category_id');
		$data['sub_category_id'] =  $this->input->post('sub_category_id');
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('ba_client', $data);
		redirect("index.php/Home/ba_client");
	}
	public function delete_ba_client($id)
    {
		$this->db->where('id',$id);
		$this->db->delete('ba_client');
		redirect("index.php/Home/ba_client");               
    }
	//===========================BA CLint List===================================================================
	function ba_client_list()
	{
		$this->db->order_by("id", "desc");
		$data['result']= $this->db->get('ba_client')->result_array();
		$this->load->view('ba_client_list',$data);
	}
	//=======================ADD emp===========================
	function emp()
	{
		$this->db->order_by("id", "desc");
		$data['result']= $this->db->get('emp')->result_array();
		$this->load->view('emp',$data);
	}
	function add_emp()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data['name'] =  $this->input->post('name');
		$data['phone'] =  $this->input->post('phone');
		$data['email'] =  $this->input->post('email');
		$data['username'] =  $this->input->post('username');
		$data['password'] =  $this->input->post('password');
		$data['address'] =  $this->input->post('address');
		$data['designation_name'] =  $this->input->post('designation_name');
		$data['date'] =  date('Y-m-d');
		$insert_id = $this->db->insert('emp',$data);
		
		$dataA['name'] =  'emp';
		$dataA['username'] =  $this->input->post('username');
		$dataA['password'] =  $this->input->post('password');
		$dataA['email_address'] =  $this->input->post('email');
		//====================================================================Mail Code================================================
			$this->load->library('email');
			$config = array(
			'mailtype' => "html",
			);
			$this->email->initialize($config);
			$this->email->from('rentswale@yahoo.com', 'Employee Registration'); 
			$this->email->to($data['email']);
			$this->email->subject('Register Successfully');
			$this->email->message(
			str_replace("{contents}",
			$this->email_text_inprocess,
			$this->email_emp($username,$password))
			);
			if($this->email->send())
			{
			//	$this->load->view('mail_msg');
			}
		//===============================================================END===================================================================
		
		$insert_id = $this->db->insert('tbl_admin',$dataA);
		
		redirect("index.php/Home/emp");
	}
	public function email_emp($username,$password)
	{
		$_template = '';
		$_template .='<!DOCTYPE html PUBLIC "-//W3C DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
		$_template .='<html xmlns="http://www.w3.org/1999/xhtml">';
		$_template .='<head>';
		$_template .='<meta http-equiv="Content-Type"
		content="text/html; charset=utf-8"/>';
		$_template .='<title>Codeignitor Emal Send</title>';
		$_template .='<style type="text/css">';
		$_template .='body {margin:0;padding:0;min-height:100%!important;}';
		$_template .='.content{width:100%;max-width:600px;}';
		$_template .='</style>';
		$_template .='</head>';
		$_template .='<body yahoo bgcolor="#ffffff">';
		$_template .='<table width="100%" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">';
			$_template .='<tr>';
				$_template .='<td>';
					$_template .='<table class="content" align="center" border="0" cellpadding="0" cellspacing="0">';
						$_template .='<tr>';
							$_template .='<td>';
								$_template .='<table width="600" border="0" cellpadding="0" cellspacing="0">';
									$_template .='<tr>';
										$_template .='<td>';
											$_template .='<table class="content" align="center" border="0" cellpadding="10" cellspacing="10">';
												
												
												$_template .='<tr>';
													$_template .='<td>';
														$_template .='<img src="" alt=" Logo">';
													$_template .='</td>';
												$_template .='</tr>';
												 
												$_template .='<tr>';
													$_template .='<td>';
														$_template .='<p color="#000000"><h1>Login Details</h1><br>
														
														<p><b>Username : '.$username.'</b></p>
														<p><b>Password : '.$password.'</b></p>
														</p>';
													$_template .='</td>';
												$_template .='</tr>';
												
											$_template .='</table>';
										$_template .='</td>';
									$_template .='</tr>';
								$_template .='</table>';
							$_template .='</td>';
						$_template .='</tr>';
					$_template .='</table>';
				$_template .='</td>';
			$_template .='</tr>';
		$_template .='</table>';
	$_template .='</body>';
$_template .='</html>';
return $_template;
}
	public function emp_edit($id)
	{
		$this->db->from('emp');
		$this->db->where('id',$id);
		$query = $this->db->get();
		$data1['result'] = $query->result_array();
		$this->load->view('emp_edit',$data1);
	}
	public function update_emp()
	{
		$data['name'] =  $this->input->post('name');
		$data['phone'] =  $this->input->post('phone');
		$data['email'] =  $this->input->post('email');
		$data['username'] =  $this->input->post('username');
		$data['password'] =  $this->input->post('password');
		$data['address'] =  $this->input->post('address');
		$data['designation_name'] =  $this->input->post('designation_name');
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('emp', $data);
		redirect("index.php/Home/emp");
	}
	public function delete_emp($id)
    {
		$this->db->where('id',$id);
		$this->db->delete('emp');
		redirect("index.php/Home/emp");               
    }
	//============================Validation============================
	public function checkmo()
	 {
		$username = $this->input->post('username');
		$result = $this->db->query("select * from tbl_admin where username = '$username'")->result_array();
		$phone_new = $result[0]['username'];
		if($username == $phone_new)
		{
		echo "Already Taken";
		}
	 }
	//=======================ADD bussiness_associate===========================
	function bussiness_associate()
	{
		$this->db->order_by("id", "desc");
		$data['result']= $this->db->get('bussiness_associate')->result_array();
		$this->load->view('bussiness_associate',$data);
	}
	function add_bussiness_associate()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data['name'] =  $this->input->post('name');
		$data['phone'] =  $this->input->post('phone');
		$data['email'] =  $this->input->post('email');
		$data['username'] =  $this->input->post('username');
		$data['password'] =  $this->input->post('password');
		$data['address'] =  $this->input->post('address');
		$data['designation_name'] =  $this->input->post('designation_name');
		$data['date'] =  date('Y-m-d');
		//====================================================================Mail Code================================================
			$this->load->library('email');
			$config = array(
			'mailtype' => "html",
			);
			$this->email->initialize($config);
			$this->email->from('rentswale@yahoo.com', 'Bussiness Associate Registration'); 
			$this->email->to($data['email']);
			$this->email->subject('Register Successfully');
			$this->email->message(
			str_replace("{contents}",
			$this->email_text_inprocess,
			$this->email_bussiness_associate($username,$password))
			);
			if($this->email->send())
			{
			//	$this->load->view('mail_msg');
			}
		//===============================================================END===================================================================
		
		$insert_id = $this->db->insert('bussiness_associate',$data);
		
		$dataA['name'] =  'Bussiness Associate';
		$dataA['username'] =  $this->input->post('username');
		$dataA['password'] =  $this->input->post('password');
		$dataA['email_address'] =  $this->input->post('email');
		$insert_id = $this->db->insert('tbl_admin',$dataA);
		
		redirect("index.php/Home/bussiness_associate");
	}
	public function email_bussiness_associate($username,$password)
	{
		$_template = '';
		$_template .='<!DOCTYPE html PUBLIC "-//W3C DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
		$_template .='<html xmlns="http://www.w3.org/1999/xhtml">';
		$_template .='<head>';
		$_template .='<meta http-equiv="Content-Type"
		content="text/html; charset=utf-8"/>';
		$_template .='<title>Codeignitor Emal Send</title>';
		$_template .='<style type="text/css">';
		$_template .='body {margin:0;padding:0;min-height:100%!important;}';
		$_template .='.content{width:100%;max-width:600px;}';
		$_template .='</style>';
		$_template .='</head>';
		$_template .='<body yahoo bgcolor="#ffffff">';
		$_template .='<table width="100%" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">';
			$_template .='<tr>';
				$_template .='<td>';
					$_template .='<table class="content" align="center" border="0" cellpadding="0" cellspacing="0">';
						$_template .='<tr>';
							$_template .='<td>';
								$_template .='<table width="600" border="0" cellpadding="0" cellspacing="0">';
									$_template .='<tr>';
										$_template .='<td>';
											$_template .='<table class="content" align="center" border="0" cellpadding="10" cellspacing="10">';
												
												
												$_template .='<tr>';
													$_template .='<td>';
														$_template .='<img src="" alt=" Logo">';
													$_template .='</td>';
												$_template .='</tr>';
												 
												$_template .='<tr>';
													$_template .='<td>';
														$_template .='<p color="#000000"><h1>Login Details</h1><br>
														
														<p><b>Username : '.$username.'</b></p>
														<p><b>Password : '.$password.'</b></p>
														</p>';
													$_template .='</td>';
												$_template .='</tr>';
												
											$_template .='</table>';
										$_template .='</td>';
									$_template .='</tr>';
								$_template .='</table>';
							$_template .='</td>';
						$_template .='</tr>';
					$_template .='</table>';
				$_template .='</td>';
			$_template .='</tr>';
		$_template .='</table>';
	$_template .='</body>';
$_template .='</html>';
return $_template;
}
	public function bussiness_associate_edit($id)
	{
		$this->db->from('bussiness_associate');
		$this->db->where('id',$id);
		$query = $this->db->get();
		$data1['result'] = $query->result_array();
		$this->load->view('bussiness_associate_edit',$data1);
	}
	public function update_bussiness_associate()
	{
		$data['name'] =  $this->input->post('name');
		$data['phone'] =  $this->input->post('phone');
		$data['email'] =  $this->input->post('email');
		$data['username'] =  $this->input->post('username');
		$data['password'] =  $this->input->post('password');
		$data['address'] =  $this->input->post('address');
		$data['designation_name'] =  $this->input->post('designation_name');
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('bussiness_associate', $data);
		redirect("index.php/Home/bussiness_associate");
	}
	public function delete_bussiness_associate($id)
    {
		$this->db->where('id',$id);
		$this->db->delete('bussiness_associate');
		redirect("index.php/Home/bussiness_associate");               
    }
	//=======================ADD Vendor===========================
	function vendor()
	{
		$username = $this->session->userdata('username');
		$this->db->order_by("id", "desc");
		$data['result']= $this->db->get('vendor')->result_array();
		$this->load->view('vendor',$data);
	}
	public function checkmo_unq()
	{
		$username = $this->input->post('username');
		$result = $this->db->query("select * from vendor where username='$username'")->result_array();
		$phone_new = $result[0]['username'];
		if($result != NULL)
		{
			if($username == $phone_new)
			{
			echo "Username Already Exists";
			}
			/* else{
				echo "Your Mobile Number is Unique";
			} */
		}
	}
	function add_vendor()
	{
		$username = $this->session->userdata('username');
		$usernameA = $this->input->post('username');
		$result = $this->db->query("select * from vendor where username='$usernameA'")->result_array();
		$phone_new = $result[0]['username'];
		//die();
		$password = $this->input->post('password');
		$sub_category_id = $this->input->post('sub_category_id');
		if($usernameA == $phone_new)
		{
			//echo "Username Already Exists";
			echo "<script>alert('Username Already Exists');window.location='http://localhost/swaraj/admin/index.php/Home/vendor';</script>";
			//redirect("index.php/Home/vendor");
		}
		else
		{
			$data['name'] =  $this->input->post('name');
			$data['company_name'] =  $this->input->post('company_name');
			$data['phone'] =  $this->input->post('phone');
			$data['email'] =  $this->input->post('email');
			//$data['price'] =  $this->input->post('price');
			//$data['commission'] =  $this->input->post('commission');
			$data['username'] =  $this->input->post('username');
			$data['password'] =  $this->input->post('password');
			$data['city'] =  $this->input->post('city');
			$data['address'] =  $this->input->post('address');
			$data['added_by'] =  $username;
			$data['date'] =  date('Y-m-d');
			
			//$data['category_master'] =  $this->input->post('category_master');
			//$data['sub_category_id'] =  explode(",", $this->input->post('sub_category_id'));
			//$data['sub_category_id'] =  json_encode(implode(",", $sub_category_id));
			//====================================================================Mail Code================================================
				$this->load->library('email');
				$config = array(
				'mailtype' => "html",
				);
				$this->email->initialize($config);
				$this->email->from('rentswale@yahoo.com', 'Vendor Registration'); 
				$this->email->to($data['email']);
				$this->email->subject('Register Successfully');
				$this->email->message(
				str_replace("{contents}",
				$this->email_text_inprocess,
				$this->email_vendor($usernameA,$password))
				);
				if($this->email->send())
				{
				//	$this->load->view('mail_msg');
				}
			//===============================================================END===================================================================
			$insert_id = $this->db->insert('vendor',$data);
			//print_r($data);
			$dataA['name'] =  'vendor';
			$dataA['username'] =  $this->input->post('username');
			$dataA['password'] =  $this->input->post('password');
			$dataA['email_address'] =  $this->input->post('email');
			
			$insert_id = $this->db->insert('tbl_admin',$dataA);
			
			redirect("index.php/Home/vendor");
		}
	
	}
	public function email_vendor($usernameA,$password)
	{
		$_template = '';
		$_template .='<!DOCTYPE html PUBLIC "-//W3C DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
		$_template .='<html xmlns="http://www.w3.org/1999/xhtml">';
		$_template .='<head>';
		$_template .='<meta http-equiv="Content-Type"
		content="text/html; charset=utf-8"/>';
		$_template .='<title>Codeignitor Emal Send</title>';
		$_template .='<style type="text/css">';
		$_template .='body {margin:0;padding:0;min-height:100%!important;}';
		$_template .='.content{width:100%;max-width:600px;}';
		$_template .='</style>';
		$_template .='</head>';
		$_template .='<body yahoo bgcolor="#ffffff">';
		$_template .='<table width="100%" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">';
			$_template .='<tr>';
				$_template .='<td>';
					$_template .='<table class="content" align="center" border="0" cellpadding="0" cellspacing="0">';
						$_template .='<tr>';
							$_template .='<td>';
								$_template .='<table width="600" border="0" cellpadding="0" cellspacing="0">';
									$_template .='<tr>';
										$_template .='<td>';
											$_template .='<table class="content" align="center" border="0" cellpadding="10" cellspacing="10">';
												
												
												$_template .='<tr>';
													$_template .='<td>';
														$_template .='<img src="" alt=" Logo">';
													$_template .='</td>';
												$_template .='</tr>';
												 
												$_template .='<tr>';
													$_template .='<td>';
														$_template .='<p color="#000000"><h1>Login Details</h1><br>
														
														<p><b>Username : '.$usernameA.'</b></p>
														<p><b>Password : '.$password.'</b></p>
														</p>';
													$_template .='</td>';
												$_template .='</tr>';
												
											$_template .='</table>';
										$_template .='</td>';
									$_template .='</tr>';
								$_template .='</table>';
							$_template .='</td>';
						$_template .='</tr>';
					$_template .='</table>';
				$_template .='</td>';
			$_template .='</tr>';
		$_template .='</table>';
	$_template .='</body>';
$_template .='</html>';
return $_template;
}
	public function vendor_edit($id)
	{
		$this->db->from('vendor');
		$this->db->where('id',$id);
		$query = $this->db->get();
		$data1['result'] = $query->result_array();
		$this->load->view('vendor_edit',$data1);
	}
	public function update_vendor()
	{
		$data['name'] =  $this->input->post('name');
		$data['company_name'] =  $this->input->post('company_name');
		$data['phone'] =  $this->input->post('phone');
		$data['email'] =  $this->input->post('email');
		//$data['price'] =  $this->input->post('price');
		//$data['commission'] =  $this->input->post('commission');
		$data['username'] =  $this->input->post('username');
		$data['password'] =  $this->input->post('password');
		$data['city'] =  $this->input->post('city');
		$data['address'] =  $this->input->post('address');
		//$data['category_master'] =  $this->input->post('category_master');
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('vendor', $data);
		redirect("index.php/Home/vendor");
	}
	public function delete_vendor($id)
    {
		$this->db->where('id',$id);
		$this->db->delete('vendor');
		redirect("index.php/Home/vendor");               
    }
	//===============Add blog===========
	function blog()
	{
		$this->db->order_by("id", "desc");
		$data['result']= $this->db->get('blog')->result_array();
		$this->load->view('blog',$data);
	}
	function add_blog()
	 {
		if($_FILES['slider_image']['name']!="")
		{
			$config['upload_path']		= 'uploads/';
			$config['allowed_types']	= 'jpg|png|gif|jpeg|pdf|doc';
			$config['max_size']			=  20000;

			//print_r($config);
			
			$update_data="";
			$this->upload->initialize($config);
					
			if(!$this->upload->do_upload('slider_image'))
			{
				$error=array('error' => $this->upload->display_errors());
				print_r($error);
			}
			else
			{
				$get_image_data=array('upload_image'	=> $this->upload->data());
				$update_data=$get_image_data['upload_image']['file_name'];
			}	
		}
		$data['slider_image'] =  $update_data;
		$data['name'] =  $this->input->post('name');
		$data['title'] =  $this->input->post('title');
		$data['date'] =  $this->input->post('date');
		$data['des'] =  $this->input->post('des');
		$insert_id = $this->db->insert('blog',$data);
		redirect("index.php/Home/blog");
	}
	public function blog_edit($id)
	{
		$this->db->from('blog');
		$this->db->where('id',$id);
		$query = $this->db->get();
		$data1['result'] = $query->result_array();
		$this->load->view('blog_edit',$data1);
	}
	public function update_blog()
	{
		if($_FILES['slider_image']['name']!="")
		{
			$config['upload_path']		= 'uploads/';
			$config['allowed_types']	= 'jpg|png|gif|jpeg|pdf|doc';
			$config['max_size']			=  20000;
			$update_data="";
			$this->upload->initialize($config);
					
			if(!$this->upload->do_upload('slider_image'))
			{
				$error=array('error' => $this->upload->display_errors());
				print_r($error);
			}
			else
			{
				$get_image_data=array('upload_image'	=> $this->upload->data());
				$update_data=$get_image_data['upload_image']['file_name'];
			}	
		}
		else
		{
			$get_old_image=array('file_name'	=>$this->input->post('old_file_up'));
			$update_data=$get_old_image['file_name'];
		}
		$data['slider_image'] =  $update_data;
		$data['name'] =  $this->input->post('name');
		$data['title'] =  $this->input->post('title');
		$data['date'] =  $this->input->post('date');
		$data['des'] =  $this->input->post('des');
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('blog', $data);
		redirect("index.php/Home/blog") ;
	}
	public function delete_blog($id)
    {
		$this->db->where('id',$id);
		$this->db->delete('blog');
		redirect("index.php/Home/blog");               
    }
	//===============Add slider===========
	function slider()
	{
		$this->db->order_by("slide_id", "desc");
		$data['result']= $this->db->get('tbl_slider')->result_array();
		$this->load->view('slider',$data);
	}
	function add_slider()
	 {
		if($_FILES['slider_image']['name']!="")
		{
			$config['upload_path']		= 'uploads/silder/';
			$config['allowed_types']	= 'jpg|png|gif|jpeg|pdf|doc';
			$config['max_size']			=  20000;

			//print_r($config);
			
			$update_data="";
			$this->upload->initialize($config);
					
			if(!$this->upload->do_upload('slider_image'))
			{
				$error=array('error' => $this->upload->display_errors());
				print_r($error);
			}
			else
			{
				$get_image_data=array('upload_image'	=> $this->upload->data());
				$update_data=$get_image_data['upload_image']['file_name'];
			}	
		}$data['slider_image'] =  $update_data;
		$data['name'] =  $this->input->post('name');
		$insert_id = $this->db->insert('tbl_slider',$data);
		redirect("index.php/Home/slider");
	}
	public function slider_edit($slide_id)
	{
		$this->db->from('tbl_slider');
		$this->db->where('slide_id',$slide_id);
		$query = $this->db->get();
		$data1['result'] = $query->result_array();
		$this->load->view('slider_edit',$data1);
	}
	public function update_slider()
	{
		if($_FILES['slider_image']['name']!="")
		{
			$config['upload_path']		= 'uploads/silder/';
			$config['allowed_types']	= 'jpg|png|gif|jpeg|pdf|doc';
			$config['max_size']			=  20000;
			$update_data="";
			$this->upload->initialize($config);
					
			if(!$this->upload->do_upload('slider_image'))
			{
				$error=array('error' => $this->upload->display_errors());
				print_r($error);
			}
			else
			{
				$get_image_data=array('upload_image'	=> $this->upload->data());
				$update_data=$get_image_data['upload_image']['file_name'];
			}	
		}
		else
		{
			$get_old_image=array('file_name'	=>$this->input->post('old_file_up'));
			$update_data=$get_old_image['file_name'];
		}
		$data['slider_image'] =  $update_data;
		$data['name'] =  $this->input->post('name');
		$this->db->where('slide_id',$this->input->post('slide_id'));
		$this->db->update('tbl_slider', $data);
		redirect("index.php/Home/slider") ;
	}
	public function delete_slider($slide_id)
    {
		$this->db->where('slide_id',$slide_id);
		$this->db->delete('tbl_slider');
		redirect("index.php/Home/slider");               
    }
	//=======================ADD category===========================
	function category()
	{
		$this->db->order_by("category_id", "desc");
		$data['result']= $this->db->get('tbl_category_master')->result_array();
		$this->load->view('category',$data);
	}
	function add_category()
	{
		if($_FILES['icon']['name']!="")
		{
			$config['upload_path']		= 'uploads/icon/';
			$config['allowed_types']	= 'jpg|png|gif|jpeg|pdf|doc';
			$config['max_size']			=  20000;

			$update_data="";
			$this->upload->initialize($config);
					
			if(!$this->upload->do_upload('icon'))
			{
				$error=array('error' => $this->upload->display_errors());
				print_r($error);
			}
			else
			{
				$get_image_data=array('upload_image'	=> $this->upload->data());
				$update_data=$get_image_data['upload_image']['file_name'];
			}	
		}
		//$data['icon'] =  $update_data;
		$data['category_master'] =  $this->input->post('category_master');
		$insert_id = $this->db->insert('tbl_category_master',$data);
		redirect("index.php/Home/category");
	}
	public function category_edit($category_id)
	{
		$this->db->from('tbl_category_master');
		$this->db->where('category_id',$category_id);
		$query = $this->db->get();
		$data1['result'] = $query->result_array();
		$this->load->view('category_edit',$data1);
	}
	public function update_category()
	{
		if($_FILES['icon']['name']!="")
		{
			$config['upload_path']		= 'uploads/icon/';
			$config['allowed_types']	= 'jpg|png|gif|jpeg|pdf|doc';
			$config['max_size']			=  20000;
			$update_data="";
			$this->upload->initialize($config);
					
			if(!$this->upload->do_upload('icon'))
			{
				$error=array('error' => $this->upload->display_errors());
				print_r($error);
			}
			else
			{
				$get_image_data=array('upload_image'	=> $this->upload->data());
				$update_data=$get_image_data['upload_image']['file_name'];
			}	
		}
		else
		{
			$get_old_image=array('file_name'	=>$this->input->post('old_file_up'));
			$update_data=$get_old_image['file_name'];
		}
		$data = array(			
			'category_master' =>  $this->input->post('category_master'),				
			//'icon' =>  $update_data,				
			 );
		$this->db->where('category_id',$this->input->post('category_id'));
		$this->db->update('tbl_category_master', $data);
		redirect("index.php/Home/category") ;
	}
	public function delete_category($category_id)
    {
		$this->db->where('category_id',$category_id);
		$this->db->delete('tbl_category_master');
		redirect("index.php/Home/category");               
    }
	//=======================ADD subcategory===========================
	function subcategory()
	{
		$this->db->order_by("sub_category_id", "desc");
		$data['result']= $this->db->get('tbl_subcategory')->result_array();
		//print_r($data);
		$this->load->view('subcategory',$data);
	}
	function add_subcategory()
	{
		$data['category_id'] =  $this->input->post('category_id');
		$data['sub_category'] =  $this->input->post('sub_category');
		//print_r($data);
		$insert_id = $this->db->insert('tbl_subcategory',$data);
		redirect("index.php/Home/subcategory");
	}
	public function subcategory_edit($sub_category_id)
	{
		$this->db->from('tbl_subcategory');
		$this->db->where('sub_category_id',$sub_category_id);
		$query = $this->db->get();
		$data1['result'] = $query->result_array();
		$this->load->view('subcategory_edit',$data1);
	}
	public function update_subcategory()
	{
		$data = array(			
			'category_id' =>  $this->input->post('category_id'),				
			'sub_category' =>  $this->input->post('sub_category'),					
			 );
		$this->db->where('sub_category_id',$this->input->post('sub_category_id'));
		$this->db->update('tbl_subcategory', $data);
		redirect("index.php/Home/subcategory") ;
	}
	public function delete_subcategory($sub_category_id)
    {
		$this->db->where('sub_category_id',$sub_category_id);
		$this->db->delete('tbl_subcategory');
		redirect("index.php/Home/subcategory");               
    }
	//=======================ADD product_type===========================
	function product_type()
	{
		$this->db->order_by("id", "desc");
		$data['result']= $this->db->get('product_type')->result_array();
		//print_r($data);
		$this->load->view('product_type',$data);
	}
	function add_product_type()
	{
		$data['category_id'] =  $this->input->post('category_id');
		$data['sub_category_id'] =  $this->input->post('sub_category_id');
		$data['product_type'] =  $this->input->post('product_type');
		//print_r($data);
		$insert_id = $this->db->insert('product_type',$data);
		redirect("index.php/Home/product_type");
	}
	public function product_type_edit($id)
	{
		$this->db->from('product_type');
		$this->db->where('id',$id);
		$query = $this->db->get();
		$data1['result'] = $query->result_array();
		$this->load->view('product_type_edit',$data1);
	}
	public function update_product_type()
	{
		$data['category_id'] =  $this->input->post('category_id');
		$data['sub_category_id'] =  $this->input->post('sub_category_id');
		$data['product_type'] =  $this->input->post('product_type');
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('product_type', $data);
		redirect("index.php/Home/product_type") ;
	}
	public function delete_product_type($sub_category_id)
    {
		$this->db->where('id',$id);
		$this->db->delete('product_type');
		redirect("index.php/Home/product_type");               
    }
	//===============Add Product===========
	function item()
	{
		$this->db->order_by("item_master_id", "desc");
		$data['result']= $this->db->get('tbl_item_master')->result_array();
		$this->load->view('item',$data);
	}
	public function status_active($item_master_id)
	{
		$data = array(			
			'status' =>  'Y',					
			 );
		$this->db->where('item_master_id',$item_master_id);
		$this->db->update('tbl_item_master', $data);
		redirect("index.php/Home/item") ;
	}
	public function status_deactive($item_master_id)
	{
		$data = array(			
			'status' =>  'N',					
			 );
		$this->db->where('item_master_id',$item_master_id);
		$this->db->update('tbl_item_master', $data);
		redirect("index.php/Home/item") ;
	}
	public function getSubCat()
	{
		$category_id = $this->input->post('category_id');
		$data['result'] = $this->db->get_where("tbl_subcategory", array('category_id' => $category_id))->result_array(); 
		$this->load->view('getSubCat',$data);
	}
	public function getProduct_Type()
	{
		$sub_category_id = $this->input->post('sub_category_id');
		$data['result'] = $this->db->get_where("product_type", array('sub_category_id' => $sub_category_id))->result_array(); 
		$this->load->view('getProduct_Type',$data);
	}
	public function getProduct()
	{
		$sub_category_id = $this->input->post('sub_category_id');
		$data['result'] = $this->db->get_where("tbl_item_master", array('sub_category_id' => $sub_category_id))->result_array(); 
		$this->load->view('getProduct',$data);
	}
	public function getSubCatChck()
	{
		$category_master = $this->input->post('category_master');
		$data['result'] = $this->db->get_where("tbl_subcategory", array('category_id' => $category_master))->result_array(); 
		//print_r($data['result']);
		$this->load->view('getSubCatChck',$data);
	}
	function add_item()
	 {
		if($_FILES['item_img']['name']!="")
		{
			$config['upload_path']		= 'uploads/item/';
			$config['allowed_types']	= 'jpg|png|gif|jpeg|pdf|doc';
			$config['max_size']			=  20000;

			//print_r($config);
			
			$update_data="";
			$this->upload->initialize($config);
					
			if(!$this->upload->do_upload('item_img'))
			{
				$error=array('error' => $this->upload->display_errors());
				print_r($error);
			}
			else
			{
				$get_image_data=array('upload_image'	=> $this->upload->data());
				$update_data=$get_image_data['upload_image']['file_name'];
			}	
		}
		if($_FILES['item_img_one']['name']!="")
		{
			$config['upload_path']		= 'uploads/item/';
			$config['allowed_types']	= 'jpg|png|gif|jpeg|pdf|doc';
			$config['max_size']			=  20000;

			//print_r($config);
			
			$update_data1="";
			$this->upload->initialize($config);
					
			if(!$this->upload->do_upload('item_img_one'))
			{
				$error=array('error' => $this->upload->display_errors());
				print_r($error);
			}
			else
			{
				$get_image_data=array('upload_image'	=> $this->upload->data());
				$update_data1=$get_image_data['upload_image']['file_name'];
			}	
		}
		if($_FILES['item_img_two']['name']!="")
		{
			$config['upload_path']		= 'uploads/item/';
			$config['allowed_types']	= 'jpg|png|gif|jpeg|pdf|doc';
			$config['max_size']			=  20000;

			//print_r($config);
			
			$update_data2="";
			$this->upload->initialize($config);
					
			if(!$this->upload->do_upload('item_img_two'))
			{
				$error=array('error' => $this->upload->display_errors());
				print_r($error);
			}
			else
			{
				$get_image_data=array('upload_image'	=> $this->upload->data());
				$update_data2=$get_image_data['upload_image']['file_name'];
			}	
		}
		if($_FILES['item_img_three']['name']!="")
		{
			$config['upload_path']		= 'uploads/item/';
			$config['allowed_types']	= 'jpg|png|gif|jpeg|pdf|doc';
			$config['max_size']			=  20000;

			//print_r($config);
			
			$update_data3="";
			$this->upload->initialize($config);
					
			if(!$this->upload->do_upload('item_img_three'))
			{
				$error=array('error' => $this->upload->display_errors());
				print_r($error);
			}
			else
			{
				$get_image_data=array('upload_image'	=> $this->upload->data());
				$update_data3=$get_image_data['upload_image']['file_name'];
			}	
		}
		$data['category_id'] =  $this->input->post('category_id');
		$data['sub_category_id'] =  $this->input->post('sub_category_id');
		//$data['city_name'] =  $this->input->post('city_name');
		$data['product_type'] =  $this->input->post('product_type');
		$data['item_name'] =  $this->input->post('item_name');
		$data['price'] =  $this->input->post('price');
		$data['price_month'] =  $this->input->post('price_month');
		$data['price_three'] =  $this->input->post('price_three');
		$data['price_six'] =  $this->input->post('price_six');
		$data['price_nine'] =  $this->input->post('price_nine');
		$data['price_twel'] =  $this->input->post('price_twel');
		$data['deposite'] =  $this->input->post('deposite');
		$data['delivery_charge'] =  $this->input->post('delivery_charge');
		$data['description'] =  $this->input->post('description');
		$data['item_img'] =  $update_data;
		$data['item_img_one'] =  $update_data1;
		$data['item_img_two'] =  $update_data2;
		$data['item_img_three'] =  $update_data3;
      
      $data['heading'] =  $this->input->post('heading');
		$data['term_specification'] =  $this->input->post('term_specification');
		//print_r($data);
		$insert_id = $this->db->insert('tbl_item_master',$data);
		redirect("index.php/Home/item");
	}
	public function item_edit($item_master_id)
	{
		$this->db->from('tbl_item_master');
		$this->db->where('item_master_id',$item_master_id);
		$query = $this->db->get();
		$data1['result'] = $query->result_array();
		$this->load->view('item_edit',$data1);
	}
	public function update_item()
	{
		if($_FILES['item_img']['name']!="")
		{
			$config['upload_path']		= 'uploads/item/';
			$config['allowed_types']	= 'jpg|png|gif|jpeg|pdf|doc';
			$config['max_size']			=  20000;
			$update_data="";
			$this->upload->initialize($config);
					
			if(!$this->upload->do_upload('item_img'))
			{
				$error=array('error' => $this->upload->display_errors());
				print_r($error);
			}
			else
			{
				$get_image_data=array('upload_image'	=> $this->upload->data());
				$update_data=$get_image_data['upload_image']['file_name'];
			}	
		}
		else
		{
			$get_old_image=array('file_name'	=>$this->input->post('old_file_up'));
			$update_data=$get_old_image['file_name'];
		}
		if($_FILES['item_img_one']['name']!="")
		{
			$config['upload_path']		= 'uploads/item/';
			$config['allowed_types']	= 'jpg|png|gif|jpeg|pdf|doc';
			$config['max_size']			=  20000;
			$update_data1="";
			$this->upload->initialize($config);
					
			if(!$this->upload->do_upload('item_img_one'))
			{
				$error=array('error' => $this->upload->display_errors());
				print_r($error);
			}
			else
			{
				$get_image_data=array('upload_image'	=> $this->upload->data());
				$update_data1=$get_image_data['upload_image']['file_name'];
			}	
		}
		else
		{
			$get_old_image=array('file_name'	=>$this->input->post('old_file_up_one'));
			$update_data1=$get_old_image['file_name'];
		}
		if($_FILES['item_img_two']['name']!="")
		{
			$config['upload_path']		= 'uploads/item/';
			$config['allowed_types']	= 'jpg|png|gif|jpeg|pdf|doc';
			$config['max_size']			=  20000;
			$update_data2="";
			$this->upload->initialize($config);
					
			if(!$this->upload->do_upload('item_img_two'))
			{
				$error=array('error' => $this->upload->display_errors());
				print_r($error);
			}
			else
			{
				$get_image_data=array('upload_image'	=> $this->upload->data());
				$update_data2=$get_image_data['upload_image']['file_name'];
			}	
		}
		else
		{
			$get_old_image=array('file_name'	=>$this->input->post('old_file_up_two'));
			$update_data2=$get_old_image['file_name'];
		}
		if($_FILES['item_img_three']['name']!="")
		{
			$config['upload_path']		= 'uploads/item/';
			$config['allowed_types']	= 'jpg|png|gif|jpeg|pdf|doc';
			$config['max_size']			=  20000;
			$update_data3="";
			$this->upload->initialize($config);
					
			if(!$this->upload->do_upload('item_img_three'))
			{
				$error=array('error' => $this->upload->display_errors());
				print_r($error);
			}
			else
			{
				$get_image_data=array('upload_image'	=> $this->upload->data());
				$update_data3=$get_image_data['upload_image']['file_name'];
			}	
		}
		else
		{
			$get_old_image=array('file_name'	=>$this->input->post('old_file_up_three'));
			$update_data3=$get_old_image['file_name'];
		}
		$data['category_id'] =  $this->input->post('category_id');
		$data['sub_category_id'] =  $this->input->post('sub_category_id');
		//$data['city_name'] =  $this->input->post('city_name');
		$data['product_type'] =  $this->input->post('product_type');
		$data['item_name'] =  $this->input->post('item_name');
		$data['price'] =  $this->input->post('price');
		$data['price_month'] =  $this->input->post('price_month');
		$data['price_three'] =  $this->input->post('price_three');
		$data['price_six'] =  $this->input->post('price_six');
		$data['price_nine'] =  $this->input->post('price_nine');
		$data['price_twel'] =  $this->input->post('price_twel');
		$data['deposite'] =  $this->input->post('deposite');
		$data['delivery_charge'] =  $this->input->post('delivery_charge');
		$data['description'] =  $this->input->post('description');
		$data['item_img'] =  $update_data;
		$data['item_img_one'] =  $update_data1;
		$data['item_img_two'] =  $update_data2;
		$data['item_img_three'] =  $update_data3;
      
      $data['heading'] =  $this->input->post('heading');
		$data['term_specification'] =  $this->input->post('term_specification');
		$this->db->where('item_master_id',$this->input->post('item_master_id'));
		$this->db->update('tbl_item_master', $data);
		redirect("index.php/Home/item") ;
	}
	public function delete_item($item_master_id)
    {
		$this->db->where('item_master_id',$item_master_id);
		$this->db->delete('tbl_item_master');
		redirect("index.php/Home/item");               
    }
    
    //website vendor enquiry list
	function vendor_enquiry_list()
	{
		$this->db->order_by("id", "desc");
		$data['result']= $this->db->get('vendor_enquiry')->result_array();
		$this->load->view('vendor_enquiry_list',$data);
	}
    
	//===============Add Order List===========
	function order_list()
	{
		$this->db->order_by("id", "desc");
		$data['result']= $this->db->get_where('address_details',array('lead_status' => 'N'))->result_array();
		$this->load->view('order_list',$data);
	}
	function delete_order($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('address_details');
		redirect("index.php/Home/order_list"); 
	}
	function accepted_order_list()
	{
		$this->db->order_by("id", "desc");
		$data['result']= $this->db->get_where('leads',array('lead_status' => 'Y'))->result_array();
		$this->load->view('accepted_order_list',$data);
	}
	function assign_lead($id)
	{
		$data['result']= $this->db->get_where('address_details',array('id' => $id))->result_array();
		$this->load->view('assign_lead',$data);
	}
	function add_assign_lead()
	{
		$vendor_name =  $this->input->post('vendor_name');
		$data1['name'] =  $this->input->post('name');
		$data1['phone'] =  $this->input->post('phone');
		$data1['address'] =  $this->input->post('address');
		$data1['order_id'] =  $this->input->post('order_id');
		$data1['assignid'] =  $this->input->post('assignid');
		$data1['date'] =  $this->input->post('date');
		$data1['vendor_name'] =  $this->input->post('vendor_name');
		$data1['email'] =  $this->input->post('email');
		for($i=0; $i<count($vendor_name); $i++)
		{
			$data['vendor_name'] =  $data1['vendor_name'][$i];
			$data['email'] =  $data1['email'][$i];
			$data['name'] =  $data1['name'][$i];
			$data['phone'] =  $data1['phone'][$i];
			$data['address'] =  $data1['address'][$i];
			$data['order_id'] =  $data1['order_id'][$i];
			$data['assignid'] =  $data1['assignid'][$i];
			$data['date'] =  $data1['date'][$i];
			//print_r($data);
			
		//====================================================================Mail Code================================================
			$this->load->library('email');
			$config = array(
			'mailtype' => "html",
			);
			$this->email->initialize($config);
			$this->email->from('rentswale@yahoo.com', 'Leads'); 
			$this->email->to($data['email']);
			$this->email->subject('You have leads');
			$this->email->message(
			str_replace("{contents}",
			$this->email_text_inprocess,
			$this->email_partnerapp())
			);
			if($this->email->send())
			{
			//	$this->load->view('mail_msg');
			}
		//===============================================================END===================================================================
		$insert_id = $this->db->insert("leads",$data);
		}
		redirect("index.php/Home/order_list");
	}
	public function email_partnerapp()
	{
		$_template = '';
		$_template .='<!DOCTYPE html PUBLIC "-//W3C DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
		$_template .='<html xmlns="http://www.w3.org/1999/xhtml">';
		$_template .='<head>';
		$_template .='<meta http-equiv="Content-Type"
		content="text/html; charset=utf-8"/>';
		$_template .='<title>Codeignitor Emal Send</title>';
		$_template .='<style type="text/css">';
		$_template .='body {margin:0;padding:0;min-height:100%!important;}';
		$_template .='.content{width:100%;max-width:600px;}';
		$_template .='</style>';
		$_template .='</head>';
		$_template .='<body yahoo bgcolor="#ffffff">';
		$_template .='<table width="100%" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">';
			$_template .='<tr>';
				$_template .='<td>';
					$_template .='<table class="content" align="center" border="0" cellpadding="0" cellspacing="0">';
						$_template .='<tr>';
							$_template .='<td>';
								$_template .='<table width="600" border="0" cellpadding="0" cellspacing="0">';
									$_template .='<tr>';
										$_template .='<td>';
											$_template .='<table class="content" align="center" border="0" cellpadding="10" cellspacing="10">';
												
												
												$_template .='<tr>';
													$_template .='<td>';
														$_template .='<img src="" alt=" Logo">';
													$_template .='</td>';
												$_template .='</tr>';
												 
												$_template .='<tr>';
													$_template .='<td>';
														$_template .='<p color="#000000"><h1>You have one lead</h1><br>
														
														
														</p>';
													$_template .='</td>';
												$_template .='</tr>';
												
											$_template .='</table>';
										$_template .='</td>';
									$_template .='</tr>';
								$_template .='</table>';
							$_template .='</td>';
						$_template .='</tr>';
					$_template .='</table>';
				$_template .='</td>';
			$_template .='</tr>';
		$_template .='</table>';
	$_template .='</body>';
$_template .='</html>';
return $_template;
}
	public function email_text_inprocess()
	{
		return '<h1> HEllo</h1>
				<p>THis is first line</p>
				<p>THis is Second line</p>';
	}
	function accept_lead($id,$order_id,$vendor_id)
	{
		$leads = $this->db->get_where('leads',array('id' => $id))->result_array();
		$phone = $leads[0]['phone'];
		
		$ba_client = $this->db->get_where('ba_client',array('phone' => $phone))->result_array();
		$ba_username = $ba_client[0]['username'];
		
		$order_details = $this->db->get_where('order_details',array('order_id' => $order_id))->result_array();
		$sub_total = $order_details[0]['sub_total'];
		
		$data = array(
		'lead_status' =>  'Y',					
		'accepted_vendor' =>  $vendor_id,					
			 );
		$this->db->where('id',$id);
		$this->db->update('leads', $data);
		
		$dataA = array(
		'lead_status' =>  'Y',								
			 );
		$this->db->where('order_id',$order_id);
		$this->db->update('address_details', $dataA);
		$com_amt = $sub_total * 2/100;
		
		$dataB['commission_from'] =  $phone;
		$dataB['commission_to'] =  $ba_username;
		$dataB['commission_amount'] =  $sub_total * 2/100;
		$dataB['date'] =  date('Y-m-d');
		//print_r($dataB);
		$insert_id = $this->db->insert('commission',$dataB);
		
		$wallet = $this->db->get_where('wallet',array('phone' => $ba_username))->result_array();
		$wallet_phone = $wallet[0]['phone'];
		$wallet_amount = $wallet[0]['amount'];
		if($wallet_phone == $ba_username)
		{
			$dataC = array(
			'amount' =>  $wallet_amount + $com_amt,								
			 );
			$this->db->where('phone',$wallet_phone);
			$this->db->update('wallet', $dataC);
		}
		else
		{
			$dataD['phone'] =  $ba_username;
			$dataD['amount'] =  $com_amt;
			//print_r($dataD);
			$insert_id = $this->db->insert('wallet',$dataD);
		}
		
		redirect("index.php/Home/lead_list");
	}
	function lead_list()
	{
		$username = $this->session->userdata('username');
		$vendor = $this->db->get_where('vendor',array('username' => $username))->result_array();
		$vendor_id = $vendor[0]['id'];
		$data['result']= $this->db->get_where('leads',array('lead_status' => 'N','vendor_name' => $vendor_id))->result_array();
		$this->load->view('lead_list',$data);
	}
	function accepted_lead_list()
	{
		$username = $this->session->userdata('username');
		$vendor = $this->db->get_where('vendor',array('username' => $username))->result_array();
		$vendor_id = $vendor[0]['id'];
		$data['result']= $this->db->get_where('leads',array('lead_status' => 'Y','vendor_name' => $vendor_id,'order_complete' =>  'N'))->result_array();
		$this->load->view('accepted_lead_list',$data);
	}
	function complete_order($id)
	{
		$data = array(
		'order_complete' =>  'Y',							
			 );
		$this->db->where('id',$id);
		$this->db->update('leads', $data);
		
		redirect("index.php/Home/accepted_lead_list");
	}
	function complete_order_list()
	{
		$username = $this->session->userdata('username');
		$vendor = $this->db->get_where('vendor',array('username' => $username))->result_array();
		$vendor_id = $vendor[0]['id'];
		$data['result']= $this->db->get_where('leads',array('lead_status' => 'Y','vendor_name' => $vendor_id,'order_complete' =>  'Y'))->result_array();
		$this->load->view('complete_order_list',$data);
	}
	//==========================================================Customer=================================================
	function customer_list()
	{
		//$this->db->group_by('phone');
		$this->db->order_by("id", "desc");
		$data['result']= $this->db->get('customer')->result_array();
		$this->load->view('customer_list',$data);
	}
	function customer_deactive($id)
	{
		$data = array(
		'active_status' =>  'Y',							
			 );
		$this->db->where('id',$id);
		$this->db->update('customer', $data);
		redirect("index.php/Home/customer_list");
	}
	function customer_active($id)
	{
		$data = array(
		'active_status' =>  'N',							
			 );
		$this->db->where('id',$id);
		$this->db->update('customer', $data);
		redirect("index.php/Home/customer_list");
	}
	//==========================================================Customer=================================================
	function vendor_list()
	{
		$username = $this->session->userdata('username');
		$this->db->order_by("id", "desc");
		$data['result']= $this->db->get_where('vendor',array('added_by' => $username))->result_array();
		$this->load->view('vendor_list',$data);
	}
	function vendor_deactive($id)
	{
		$data = array(
		'active_status' =>  'Y',							
			 );
		$this->db->where('id',$id);
		$this->db->update('vendor', $data);
		redirect("index.php/Home/vendor_list");
	}
	function vendor_active($id)
	{
		$data = array(
		'active_status' =>  'N',							
			 );
		$this->db->where('id',$id);
		$this->db->update('vendor', $data);
		redirect("index.php/Home/vendor_list");
	}
	//====================================================Wallet======================================================================================
	function wallet_list()
	{
		$data['result']= $this->db->get('wallet')->result_array();
		$this->load->view('wallet_list',$data);
	}
	function wallet($id)
	{
		$data['result']= $this->db->get_where('wallet',array('id' => $id))->result_array();
		$this->load->view('wallet',$data);
	}
	function add_wallet()
	{
		$id =  $this->input->post('id');
		$phone =  $this->input->post('phone');
		$with_amount =  $this->input->post('with_amount');
		
		$wallet = $this->db->get_where('wallet',array('phone' => $phone))->result_array();
		$amount = $wallet[0]['amount'];
		
		$data = array(
		'amount' =>  $amount - $with_amount,							
			 );
		$this->db->where('id',$id);
		$this->db->update('wallet', $data);
		
		$dataA['phone'] =  $phone;
		$dataA['pre_amount'] =  $amount;
		$dataA['with_amount'] =  $with_amount;
		$dataA['remain_amt'] =  $amount - $with_amount;
		$dataA['date'] =  date('Y-m-d');
		//print_r($dataA);
		$insert_id = $this->db->insert('wallet_history',$dataA);
		
		redirect("index.php/Home/home");
	}
	function withdrawal_list()
	{
		$username = $this->session->userdata('username');
		$emp = $this->db->get_where('emp',array('username' => $username))->result_array();
		$phone = $emp[0]['phone'];
		
		$this->db->order_by("id", "desc");
		$data['result']= $this->db->get_where('wallet_history',array('phone' => $phone))->result_array();
		$this->load->view('withdrawal_list',$data);
	}
	function withdrawal_req_list()
	{
		$this->db->order_by("id", "desc");
		$data['result']= $this->db->get_where('wallet_history',array('status' => 'N'))->result_array();
		$this->load->view('withdrawal_req_list',$data);
	}
	function approve_with($id)
	{
		$data = array(
		'status' =>  'Y',							
			 );
		$this->db->where('id',$id);
		$this->db->update('wallet_history', $data);
		
		redirect("index.php/Home/withdrawal_req_list");
	}
	function withdrawal_app_list()
	{
		$this->db->order_by("id", "desc");
		$data['result']= $this->db->get_where('wallet_history',array('status' => 'Y'))->result_array();
		$this->load->view('withdrawal_app_list',$data);
	}
	function withdrawal_app_list_user()
	{
		$username = $this->session->userdata('username');
		$this->db->order_by("id", "desc");
		$data['result']= $this->db->get_where('wallet_history',array('status' => 'Y','phone' => $username))->result_array();
		$this->load->view('withdrawal_app_list_user',$data);
	}
	//==========================================================================Reports===================================================================
	//===========================================EMp======================================================================
	public function repo_emp()
	{
		$this->load->view('repo_emp');
	}
	public function print_emp()
	{	
		$from_date = $this->input->post('from_date');
		$to_date = $this->input->post('to_date');
		
		$this->db->select('*');
		$this->db->from('emp');
		$this->db->where('date >=',$from_date);
		$this->db->where('date <=',$to_date);
		$query = $this->db->get();
		$data['enquiry_list']= $query->result_array();
		$data['from_date'] = $from_date;
		$data['to_date'] = $to_date;
 		$this->load->view("print_emp",$data);		
	}
	public function excel_emp($from_date,$to_date)
	{
		$this->db->select('*');
		$this->db->from("emp");
		$this->db->where('date >=',$from_date);
		$this->db->where('date <=',$to_date);
		$query = $this->db->get();
		$data['enquiry_list']= $query->result_array();
		$data['from_date'] = $from_date;
		$data['to_date'] = $to_date;
		//print_r($data['enquiry_list']);
		$this->load->view("excel_emp",$data);
	}
	//===========================================Withdrawal======================================================================
	public function repo_withdrawal()
	{
		$this->load->view('repo_withdrawal');
	}
	public function print_withdrawal()
	{	
		$from_date = $this->input->post('from_date');
		$to_date = $this->input->post('to_date');
		$status = $this->input->post('status');
		if($status == '')
		{
			$this->db->select('*');
			$this->db->from('wallet_history');
			$this->db->where('date >=',$from_date);
			$this->db->where('date <=',$to_date);
			$query = $this->db->get();
			$data['enquiry_list']= $query->result_array();
			$data['status'] = $status;
			$data['from_date'] = $from_date;
			$data['to_date'] = $to_date;
			$this->load->view("print_withdrawal",$data);
		}
		else
		{
			$this->db->select('*');
			$this->db->from('wallet_history');
			$this->db->where('date >=',$from_date);
			$this->db->where('date <=',$to_date);
			$this->db->where('status =',$status);
			$query = $this->db->get();
			$data['enquiry_list']= $query->result_array();
			$data['from_date'] = $from_date;
			$data['to_date'] = $to_date;
			$data['status'] = $status;
			$this->load->view("print_withdrawal",$data);
		}			
	}
	public function excel_withdrawal($from_date,$to_date,$status)
	{
		if($status == '')
		{
			$this->db->select('*');
			$this->db->from("wallet_history");
			$this->db->where('date >=',$from_date);
			$this->db->where('date <=',$to_date);
			$query = $this->db->get();
			$data['enquiry_list']= $query->result_array();
			$data['from_date'] = $from_date;
			$data['to_date'] = $to_date;
			//print_r($data['enquiry_list']);
			$this->load->view("excel_withdrawal",$data);
			}
		else
		{
			$this->db->select('*');
			$this->db->from('wallet_history');
			$this->db->where('date >=',$from_date);
			$this->db->where('date <=',$to_date);
			$this->db->where('status =',$status);
			$query = $this->db->get();
			$data['enquiry_list']= $query->result_array();
			$data['from_date'] = $from_date;
			$data['to_date'] = $to_date;
			$this->load->view("excel_withdrawal",$data);
		}
	}
	//====================================================================Vendor=========================================================
	public function repo_vendor()
	{
		$this->load->view('repo_vendor');
	}
	public function print_vendor()
	{	
		$from_date = $this->input->post('from_date');
		$to_date = $this->input->post('to_date');
		
		$this->db->select('*');
		$this->db->from('vendor');
		$this->db->where('date >=',$from_date);
		$this->db->where('date <=',$to_date);
		$query = $this->db->get();
		$data['enquiry_list']= $query->result_array();
		$data['from_date'] = $from_date;
		$data['to_date'] = $to_date;
 		$this->load->view("print_vendor",$data);		
	}
	public function excel_vendor($from_date,$to_date)
	{
		$this->db->select('*');
		$this->db->from("vendor");
		$this->db->where('date >=',$from_date);
		$this->db->where('date <=',$to_date);
		$query = $this->db->get();
		$data['enquiry_list']= $query->result_array();
		$data['from_date'] = $from_date;
		$data['to_date'] = $to_date;
		//print_r($data['enquiry_list']);
		$this->load->view("excel_vendor",$data);
	}
	//====================================================================Customer=========================================================
	public function repo_customer()
	{
		$this->load->view('repo_customer');
	}
	public function print_customer()
	{	
		$from_date = $this->input->post('from_date');
		$to_date = $this->input->post('to_date');
		
		$this->db->select('*');
		$this->db->from('customer');
		$this->db->where('date >=',$from_date);
		$this->db->where('date <=',$to_date);
		$query = $this->db->get();
		$data['enquiry_list']= $query->result_array();
		$data['from_date'] = $from_date;
		$data['to_date'] = $to_date;
 		$this->load->view("print_customer",$data);		
	}
	public function excel_customer($from_date,$to_date)
	{
		$this->db->select('*');
		$this->db->from("customer");
		$this->db->where('date >=',$from_date);
		$this->db->where('date <=',$to_date);
		$query = $this->db->get();
		$data['enquiry_list']= $query->result_array();
		$data['from_date'] = $from_date;
		$data['to_date'] = $to_date;
		//print_r($data['enquiry_list']);
		$this->load->view("excel_customer",$data);
	}
	//====================================================================Bussiness Associate=========================================================
	public function repo_bussiness_associate()
	{
		$this->load->view('repo_bussiness_associate');
	}
	public function print_bussiness_associate()
	{	
		$from_date = $this->input->post('from_date');
		$to_date = $this->input->post('to_date');
		
		$this->db->select('*');
		$this->db->from('bussiness_associate');
		$this->db->where('date >=',$from_date);
		$this->db->where('date <=',$to_date);
		$query = $this->db->get();
		$data['enquiry_list']= $query->result_array();
		$data['from_date'] = $from_date;
		$data['to_date'] = $to_date;
 		$this->load->view("print_bussiness_associate",$data);		
	}
	public function excel_bussiness_associate($from_date,$to_date)
	{
		$this->db->select('*');
		$this->db->from("bussiness_associate");
		$this->db->where('date >=',$from_date);
		$this->db->where('date <=',$to_date);
		$query = $this->db->get();
		$data['enquiry_list']= $query->result_array();
		$data['from_date'] = $from_date;
		$data['to_date'] = $to_date;
		//print_r($data['enquiry_list']);
		$this->load->view("excel_bussiness_associate",$data);
	}
	//===========================================Order Repo======================================================================
	public function repo_order()
	{
		$this->load->view('repo_order');
	}
	public function print_order()
	{	
		$from_date = $this->input->post('from_date');
		$to_date = $this->input->post('to_date');
		
		$this->db->select('*');
		$this->db->from('address_details');
		$this->db->where('date >=',$from_date);
		$this->db->where('date <=',$to_date);
		$this->db->where('lead_status =','N');
		$query = $this->db->get();
		$data['enquiry_list']= $query->result_array();
		$data['from_date'] = $from_date;
		$data['to_date'] = $to_date;
 		$this->load->view("print_order",$data);		
	}
	public function excel_order($from_date,$to_date)
	{
		$this->db->select('*');
		$this->db->from("address_details");
		$this->db->where('date >=',$from_date);
		$this->db->where('date <=',$to_date);
		$this->db->where('lead_status =','N');
		$query = $this->db->get();
		$data['enquiry_list']= $query->result_array();
		$data['from_date'] = $from_date;
		$data['to_date'] = $to_date;
		//print_r($data['enquiry_list']);
		$this->load->view("excel_order",$data);
	}
	public function print_acc_order()
	{	
		$from_date = $this->input->post('from_date');
		$to_date = $this->input->post('to_date');
		
		$this->db->select('*');
		$this->db->from('leads');
		$this->db->where('date >=',$from_date);
		$this->db->where('date <=',$to_date);
		$this->db->where('lead_status =','Y');
		$query = $this->db->get();
		$data['enquiry_list']= $query->result_array();
		$data['from_date'] = $from_date;
		$data['to_date'] = $to_date;
 		$this->load->view("print_acc_order",$data);		
	}
	public function excel_acc_order($from_date,$to_date)
	{
		$this->db->select('*');
		$this->db->from("leads");
		$this->db->where('date >=',$from_date);
		$this->db->where('date <=',$to_date);
		$this->db->where('lead_status =','Y');
		$query = $this->db->get();
		$data['enquiry_list']= $query->result_array();
		$data['from_date'] = $from_date;
		$data['to_date'] = $to_date;
		//print_r($data['enquiry_list']);
		$this->load->view("excel_acc_order",$data);
	}
	//===========================================vendor_enquiry======================================================================
	public function repo_vendor_enquiry()
	{
		$this->load->view('repo_vendor_enquiry');
	}
	public function print_vendor_enquiry()
	{	
		$from_date = $this->input->post('from_date');
		$to_date = $this->input->post('to_date');
		
		$this->db->select('*');
		$this->db->from('vendor_enquiry');
		$this->db->where('date >=',$from_date);
		$this->db->where('date <=',$to_date);
		$query = $this->db->get();
		$data['enquiry_list']= $query->result_array();
		$data['from_date'] = $from_date;
		$data['to_date'] = $to_date;
 		$this->load->view("print_vendor_enquiry",$data);		
	}
	public function excel_vendor_enquiry($from_date,$to_date)
	{
		$this->db->select('*');
		$this->db->from("vendor_enquiry");
		$this->db->where('date >=',$from_date);
		$this->db->where('date <=',$to_date);
		$query = $this->db->get();
		$data['enquiry_list']= $query->result_array();
		$data['from_date'] = $from_date;
		$data['to_date'] = $to_date;
		//print_r($data['enquiry_list']);
		$this->load->view("excel_vendor_enquiry",$data);
	}
	//===========================================ba_client======================================================================
	public function repo_ba_client()
	{
		$this->load->view('repo_ba_client');
	}
	public function print_ba_client()
	{	
		$from_date = $this->input->post('from_date');
		$to_date = $this->input->post('to_date');
		$username = $this->input->post('username');
		if($username == '')
		{
			$this->db->select('*');
			$this->db->from('ba_client');
			$this->db->where('date >=',$from_date);
			$this->db->where('date <=',$to_date);
			$query = $this->db->get();
			$data['enquiry_list']= $query->result_array();
			$data['from_date'] = $from_date;
			$data['to_date'] = $to_date;
			$this->load->view("print_ba_client",$data);	
		}
		else
		{
			$this->db->select('*');
			$this->db->from('ba_client');
			$this->db->where('date >=',$from_date);
			$this->db->where('date <=',$to_date);
			$this->db->where('username =',$username);
			$query = $this->db->get();
			$data['enquiry_list']= $query->result_array();
			$data['from_date'] = $from_date;
			$data['to_date'] = $to_date;
			$this->load->view("print_ba_client",$data);
		}
	}
	public function excel_ba_client($from_date,$to_date)
	{
		$this->db->select('*');
		$this->db->from("ba_client");
		$this->db->where('date >=',$from_date);
		$this->db->where('date <=',$to_date);
		$query = $this->db->get();
		$data['enquiry_list']= $query->result_array();
		$data['from_date'] = $from_date;
		$data['to_date'] = $to_date;
		//print_r($data['enquiry_list']);
		$this->load->view("excel_ba_client",$data);
	}
	//===============Add PDF===========
	function pdf()
	{
		$data['result']= $this->db->get('pdf')->result_array();
		$this->load->view('pdf',$data);
	}
	function add_pdf()
	 {
		if($_FILES['file_up']['name']!="")
		{
			$config['upload_path']		= 'uploads/';
			$config['allowed_types']	= 'jpg|png|gif|jpeg|pdf|doc';
			$config['max_size']			=  20000;

			//print_r($config);
			
			$update_data="";
			$this->upload->initialize($config);
					
			if(!$this->upload->do_upload('file_up'))
			{
				$error=array('error' => $this->upload->display_errors());
				print_r($error);
			}
			else
			{
				$get_image_data=array('upload_image'	=> $this->upload->data());
				$update_data=$get_image_data['upload_image']['file_name'];
			}	
		}
		//$data['name'] =  $this->input->post('name');
		//$data['des'] =  $this->input->post('des');
		$data['file_up'] =  $update_data;
		//print_r($data);
		$insert_id = $this->db->insert('pdf',$data);
		redirect("index.php/Home/pdf");
	}
	public function edit_pdf($id)
	{
		$this->db->from('pdf');
		$this->db->where('id',$id);
		$query = $this->db->get();
		$data1['edit_pdf'] = $query->result_array();
		$this->load->view('edit_pdf',$data1);
	}
	public function update_pdf()
	{
		if($_FILES['file_up']['name']!="")
		{
			$config['upload_path']		= 'uploads/';
			$config['allowed_types']	= 'jpg|png|gif|jpeg|pdf|doc';
			$config['max_size']			=  20000;
			$update_data="";
			$this->upload->initialize($config);
					
			if(!$this->upload->do_upload('file_up'))
			{
				$error=array('error' => $this->upload->display_errors());
				print_r($error);
			}
			else
			{
				$get_image_data=array('upload_image'	=> $this->upload->data());
				$update_data=$get_image_data['upload_image']['file_name'];
			}	
		}
		else
		{
			$get_old_image=array('file_name'	=>$this->input->post('old_file_up'));
			$update_data=$get_old_image['file_name'];
		}
		 $data = array(					
			//'name' =>  $this->input->post('name'),			
			//'des' =>  $this->input->post('des'),			
			'file_up' =>  $update_data );
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('pdf', $data);
		redirect("index.php/Home/pdf") ;
	}
	public function delete_pdf($id)
    {
		$this->db->where('id',$id);
		$this->db->delete('pdf');
		redirect("index.php/Home/pdf");               
    }
//   	function feedback_list()
// 	{
// 		//$this->db->group_by('phone');
// 		//$this->db->order_by("id", "desc");
// 		$data['result']= $this->db->get('feedback_tbl')->result_array();
// 		$this->load->view('feedback_list',$data);
// 	}
	
	function career_list()
	{
		//$this->db->group_by('phone');
		//$this->db->order_by("id", "desc");
		$data['result']= $this->db->get('career')->result_array();
		$this->load->view('career_list',$data);
	}
	function feedback_list()
	{
		$this->db->order_by("id", "desc");
		$data['result']= $this->db->get('feedback')->result_array();
		$this->load->view('feedback_list',$data);
	}
	//===============Add pincode===========
	function pincode()
	{
		//$prefix = $this->session->userdata('prefix');
		$pincode = 'pincode';
		$pincode_item = 'pincode_item';
		$pincode_temp = 'pincode_temp';
		
		$this->db->select('*'); 
		$this->db->from("$pincode");
		$this->db->order_by('id','desc');
		$data['record'] = $this->db->get()->result_array();
		$this->load->view('pincode',$data);
	}
	public function add_pincode_temp()
	{
		$username = $this->session->userdata('username');
	//	$prefix = $this->session->userdata('prefix');
		$pincode = 'pincode';
		$pincode_item = 'pincode_item';
		$pincode_temp = 'pincode_temp';
		
		$id = $this->input->post('id');
		
		$data['pin'] = $this->input->post('pin');
		$updated = $this->input->post('updated');			
		$data['username'] = $username;	
		//echo "Hello";
		if($updated == 'y')
		{
			//echo "Hii";
			$data['dt'] = date('Y-m-d');	
			$data['pincode_id'] = $this->input->post('pincode_id');
			if($id <> "")
			{
				$this->db->where('id',$id);
				$this->db->update("$pincode_item",$data);
			}
			else
			{	
				$this->db->insert("$pincode_item",$data);
			}
			$data['record'] = $this->db->get_where("$pincode_item", array('pincode_id' => $data['pincode_id']))->result_array();
			$this->load->view('pincode_display_edit', $data);
		}	
		else
		{
			if($id <> "")
			{
				$this->db->where('id',$id);
				$this->db->update("$pincode_temp",$data);
			}
			else
			{
				//print_r($data);
				$this->db->insert("$pincode_temp",$data);
			}
			$data['record'] = $this->db->get_where("$pincode_temp", array('username' => $username))->result_array();
			$this->load->view('pincode_display', $data);
		} 	
	}
	public function edit_pincode_temp()
	{
		$username = $this->session->userdata('username');
		//$prefix = $this->session->userdata('prefix');
		$pincode = 'pincode';
		$pincode_item = 'pincode_item';
		$pincode_temp = 'pincode_temp';
		
		$id = $this->input->post('id');
		
		$result = $this->db->get_where("$pincode_temp", array('id' => $id))->result_array();
		echo json_encode($result);		               
	}
	public function delete_pincode_temp()
	{
		$username = $this->session->userdata('username');
		//$prefix = $this->session->userdata('prefix');
		$table_name = 'pincode_temp';
		
		$id = $this->input->post('id');
		$this->db->where('id',$id);
		$this->db->delete("$table_name");   

		$data['record'] = $this->db->get_where("$table_name", array('username' => $username))->result_array();
		$this->load->view('pincode_display', $data);	               
	}
	public function add_pincode()
	{
		$username = $this->session->userdata('username');
		$prefix = $this->session->userdata('prefix');
		$pincode = 'pincode';
		$pincode_item = 'pincode_item';
		$pincode_temp = 'pincode_temp';
		
		$id = $this->db->select('id')->order_by('id','desc')->limit(1)->get("$pincode")->row('id');
		$pincode_id = $id +1;
		
		$data['pincode_id'] = $pincode_id;
		$data['item_master_id'] = $this->input->post('item_master_id');
		$data['category_id'] = $this->input->post('category_id');
		$data['subcategory_id'] = $this->input->post('subcategory_id');
		$data['username'] = $username;	
		$data['date'] = date('Y-m-d');			
	
		$finish = $this->input->post('finish');
		if($finish == 'Update')
		{
			$data['pincode_id'] = $this->input->post('pincode_id');
			$this->db->where('pincode_id',$data['pincode_id']);
			$this->db->update("$pincode",$data);
		}
		else
		{
			//print_r($data);
			$this->db->insert("$pincode",$data);				
			
			$pin = $this->input->post('pin');
			
			$data2['pin'] = $this->input->post('pin');			
			
			for($i=0; $i<count($pin); $i++)
			{
				$data1['pin'] = $data2['pin'][$i];
				$data1['username'] = $username;	
				$data1['dt'] = date('Y-m-d');
				
				$data1['pincode_id'] = $pincode_id;
				//print_r($data1);
				$this->db->insert("$pincode_item",$data1);
			}			
			$this->db->where('username',$username);
			$this->db->delete("$pincode_temp");
		}	
		redirect('index.php/Home/pincode','refresh');
	}
	public function delete_pincode()
	{
		$username = $this->session->userdata('username');
	//	$prefix = $this->session->userdata('prefix');
		$pincode = 'pincode';
		$pincode_item = 'pincode_item';
		$pincode_temp = 'pincode_temp';
		
		$pincode_id = $this->uri->segment(3);
		$this->db->where('pincode_id',$pincode_id);
		$this->db->delete("$pincode"); 

		$this->db->where('pincode_id',$pincode_id);	
		$this->db->delete("$pincode_item");   

		redirect('index.php/Home/pincode','refresh');	               
	}
	public function fetch_pincode_item()
	{
		$username = $this->session->userdata('username');
		$prefix = $this->session->userdata('prefix');
		$pincode = 'pincode';
		$pincode_item = 'pincode_item';
		$pincode_temp = 'pincode_temp';
		
		$pincode_id = $this->input->post('pincode_id');	
		$data['record'] = $this->db->get_where("$pincode_item", array('pincode_id' => $pincode_id))->result_array();
		//print_r($data);
		$this->load->view('pincode_display_edit', $data);	
	} 
	public function fetch_pincode()
	{
		$username = $this->session->userdata('username');
		//$prefix = $this->session->userdata('prefix');
		$pincode = 'pincode';
		
		$pincode_id = $this->input->post('pincode_id');	
		$result = $this->db->get_where("$pincode", array('pincode_id' => $pincode_id))->result_array();
		echo json_encode($result);	
	}
	public function edit_pincode_item()
	{
		$username = $this->session->userdata('username');
		//$prefix = $this->session->userdata('prefix');
		$pincode_item = 'pincode_item';
		
		$id = $this->input->post('id');
		
		$result = $this->db->get_where("$pincode_item", array('id' => $id))->result_array();
		echo json_encode($result);		               
	}
	public function delete_pincode_item()
	{
		$username = $this->session->userdata('username');
		//$prefix = $this->session->userdata('prefix');
		$pincode = 'pincode';
		$pincode_item = 'pincode_item';
		$pincode_temp = 'pincode_temp';
		
		$id = $this->input->post('id');
		$pincode_id = $this->input->post('pincode_id');
		$this->db->where('id',$id);
		$this->db->delete("$pincode_item");   

		$data['record'] = $this->db->get_where("$pincode_item", array('pincode_id' => $pincode_id))->result_array();
		$this->load->view('pincode_display', $data);	               
	}
	
  
}
?>