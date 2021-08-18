<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
   $this->load->model('Master_model'); 
 }

 function index()
 {
   //This method will have the credentials validation

   $this->load->library('form_validation');
   $this->form_validation->set_rules('username', 'Username', 'trim|required');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
    // $data['view_data_branch']= $this->Master_model->view_data_branch();
     $this->load->view('login', $data, FALSE);
   }
   else
   {
     //Go to private area
     redirect('index.php/home', 'refresh');
   }

 }

 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');
   $user_type = $this->input->post('user_type');

   //query the database
   $result = $this->user->login($username, $password, $user_type);

   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->id,
         'user_type' => $row->user_type,
         'username' => $row->username,
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
 
 public function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('index.php/login', 'refresh');
 }
 
}
?>