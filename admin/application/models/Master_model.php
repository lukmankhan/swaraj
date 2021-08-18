<?php
class Master_model extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
    }
	public function check_data_password($usernm,$old_pass){
        $query=$this->db->query("SELECT *
                                 FROM users
                                 where username='$usernm' and password='$old_pass'");
        return $query->result_array();
    }
	public function check_user_exist($username){
        $query=$this->db->query("SELECT *
                                 FROM users where email='$username'");

     
        return $query->result_array();
    }
	
}