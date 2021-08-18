<?php
class login_model extends CI_Model 
{   
    function checkUser($username, $password, $name)
    {
		if($name == 'Admin')
		{
			$this->db->select('*');
			$this->db->where('username',$username);
			$this->db->where ('password',$password);
			//$this->db->where ('user_type',$user_type);
			$this->db->from('tbl_admin');
			$res=$this->db->get();
		}
		if($name == 'emp')
		{
			$this->db->select('*');
			$this->db->where('username',$username);
			$this->db->where ('password',$password);
			//$this->db->where ('user_type','Owner');
			$this->db->from('tbl_admin');
			$res=$this->db->get();
		}
		if($name == 'vendor')
		{
			//echo "hii";
			$this->db->select('*');
			$this->db->where('username',$username);
			$this->db->where ('password',$password);
			$this->db->from('tbl_admin');
			$res=$this->db->get();
		}
		if($name == 'Bussiness Associate')
		{
			$this->db->select('*');
			$this->db->where('username',$username);
			$this->db->where ('password',$password);
			$this->db->from('tbl_admin');
			$res=$this->db->get();
		}
       $row=$res->result_array();
       foreach ($row as $key)
       {
            $username = $key['username'];
            $password = $key['password'];
            $name = $key['name'];
       }
       // echo $res->num_rows();die;
        if($res->num_rows()==1)
        {  
        
            $set_session= array( 
                'username' => $username,
                'user_type' => $user_type,
                'name' => $name,
            );

            $this->session->set_userdata($set_session);            
          return "true";
        }    
            
        else 
        {
          return "error"; 
            
        }
        
    }
}
