<?php

class CheckUserinput extends CI_Model
{
   public function validate_login($email, $password)
   {

    $q= $this->db
                ->where('email',$email)
                ->where('password',$password)
                ->get('users');

     if($q->num_rows())
     {
         return $q->row()->user_id;
     }
     else
         return false;
   }
   public function createName($userid)
   {
       $q= $this->db
           ->where('user_id',$userid)
           ->get('users');
       if($q->num_rows())
       {
           return $q->row()->fname.$q->row()->lname;
       }
       else
           return false;
   }







}