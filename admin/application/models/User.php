<?php
Class User extends CI_Model
{
 function login($username, $password, $user_type)
 {
   $this -> db -> select('id, username, password, user_type');
   $this -> db -> from('users');
   $this -> db -> where('username', $username);
   $this -> db -> where('user_type', $user_type);
   $this -> db -> where('password', $password);
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
?>