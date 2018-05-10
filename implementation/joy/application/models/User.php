<?php

class User extends CI_Model
{

    function update_reset_key($reset_key)
    {
        $this->load->database();
        $email=$this->input->post('Email');
        $this->db->where('email',$email);
        $data=array('reset_password_key'=>$reset_key);
        $this->db->update('users',$data);
        if($this->db->affected_rows()>0)
        {
            return true;
        }
        else{
            return false;
        }


    }
}