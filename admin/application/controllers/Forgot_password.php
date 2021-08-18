<?php
class Forgot_password extends CI_Controller {
	
	//=============Forgot Password========
	public function index()
	{
		 $this->load->view('forgot_password');
	}
	//=====Forgot Password===========
	public function submit_data_forgot_pass()
      {
		$username = $this->input->post('username');
   		$data['check_user_exist']= $this->Master_model->check_user_exist($username);
   		$email_id=$data['check_user_exist'][0]['username'];
   		$id=rand(10,99);
   		$branch_id=rand(1001,9999);
   		if($data['check_user_exist'][0]['username']=="")
   		{
	
   		$this->session->set_flashdata('error_message', 'SORRY..!! You are not registered user..');
        redirect('index.php/login/index');

   		}
   		else
   		{
			$new_psss="SHT@".$id."BR".$branch_id."00#";
			//$email_id="vinsun001@gmail.com";
			$this->load->library('email'); 
			$config['mailtype'] = 'html'; // or html
			$config['validation'] = TRUE; // bool whether to validate email or not  
			$this->email->initialize($config);
			$this->email->from('lukman@softhubtechno.com');
			$this->email->to($email_id);
			$this->email->subject('Change Password Request');
			$this->email->message('Dear Sir your New password id is '.$new_psss);
			$this->email->send();

        $data = array('password'    => $new_psss);
        $this->db->where('email', $username);
        $this->db->update('users', $data);
        $this->session->set_flashdata('success_message','New password sent on your registered Email id..');
        redirect('index.php/Login/index');
   		}
   	
      }
}

?>