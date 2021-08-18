<?php
class Register extends CI_Controller {

	
	//=========Add Registation with refferral id========
	function register_ref()
	{
		$data['ref_one'] = $this->uri->segment(3);
		$data['position'] = $this->uri->segment(4);
		$data['result']= $this->db->get('country')->result_array();
		$this->load->view('register_ref',$data);
	}
	function add_register_ref()
	{
		$ref_one = $this->input->post('ref_one');
		$max_id = $this->db->select('id')->order_by('id','desc')->limit(1)->get('register_tbl')->row('id'); 
		$my_referral_code = 'FC00'.($max_id + 1);
		$link="http://localhost/crup/index.php/Register/register_ref/".$my_referral_code;
		
		$register_tbl = $this->db->get_where('register_tbl', array('my_referral_code' => $ref_one))->result_array();
		
		$ref_two = $register_tbl[0]['ref_one'];
		$ref_three = $register_tbl[0]['ref_two'];
		$ref_four = $register_tbl[0]['ref_three'];
		$ref_five = $register_tbl[0]['ref_four'];
		
		$data['cust_name'] =  $this->input->post('cust_name');
		$data['mobile'] =  $this->input->post('mobile');
		$data['email'] =  $this->input->post('email');
		$data['username'] =  $this->input->post('username');
		$data['password'] =  $this->input->post('password');
		$data['pan_card'] =  $this->input->post('pan_card');
		$data['country'] =  $this->input->post('country');
		$data['country_code'] =  $this->input->post('country_code');
		$data['my_referral_code'] =  $my_referral_code;
		$data['ref_one'] =  $ref_one;
		$data['ref_two'] =  $ref_two;
		$data['ref_three'] =  $ref_three;
		$data['ref_four'] =  $ref_four;
		$data['ref_five'] =  $ref_five;
		$data['link'] =  $link;
		$data['date'] =  date('Y-m-d');
		print_r($data);
		$insert_id = $this->db->insert('register_tbl',$data);
		
		$data1['user_id'] =  $ref_one;
		$data1['refferal_id'] =  $my_referral_code;
		$data1['position'] =  $this->input->post('position');
		$insert_id = $this->db->insert('binary_user',$data1);
		redirect("index.php/Register/register_ref");
	}
}
?>