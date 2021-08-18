<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->library('Form_validation');
    }
    
    function index()
    {      
        $this->load->view("login");
    }
    
	function checkUser()
	{     
		$username = $this->input->post('username');          
		//$user_type= $this->input->post('user_type');
		$password = $this->input->post('password');
		
		$result = $this->db->query("select * from tbl_admin where username='$username' and password='$password'")->result_array();
		if($result != NULL){
		$name = $result[0]['name'];
		//die();
		$this->load->model("login_model");
		$data['cust_flag']=$this->login_model->checkUser($username, $password, $name);
	   
		//print_r($data)
		if($data['cust_flag']=='true')
		{ 
			if($name == 'Admin')
			{
				redirect("index.php/home/home","refresh");
			}
			if($name == 'emp')
			{
				redirect("index.php/home/home","refresh");
			}
			if($name == 'vendor')
			{
				redirect("index.php/home/home","refresh");
			}
			if($name == 'Bussiness Associate')
			{
				redirect("index.php/home/home","refresh");
			}
		}
		
   /* else
   {
		
	  echo "hii".$user_type;
   
   }  */
		}
		else{
		/* $msg = '<div class="error"><div class="alert alert-danger" id ="msg">Please Check User Name Or Password</div>';
		$this->session->set_flashdata('msg',$msg);
		$this->load->view("login");  */
		echo "<script>alert('Check Username Or Password');window.location='http://rentswale.com/admin/index.php/Login';</script>";
		}
			
    }
    
    function logout()
    {
        $set_session= array( 
                'username'=>'',
                'user_type'=>'',
            );
        redirect('index.php/home','refresh');
    }
    
}
