<?php
class My_Model extends CI_Model
{


    public function addUser($data)
    {
        $this->load->database();
       $this->db->insert("users",$data);
    }

    public function addCourse($data)
    {
        $this->load->database();
        $this->db->insert("course",$data);
    }
    public function addNotification($not_result)
    {
        $this->load->database();
        $this->db->insert("notification",$not_result);
    }
    public function addComment($not_result)
    {
        $this->load->database();
        $this->db->insert("comment",$not_result);
    }
    public function addAssignment($result)
    {
        $this->load->database();
        $this->db->insert("assignment",$result);
    }
}