<?php

class insert extends CI_Controller
{
    public function index()
    {
       if (isset($_POST["subject"]))
       {
           $not_result=array(
               "comment_subject"=> $this->input->post("subject"),
               "comment_text"=>("comment"),
               "status"=>(1)

           );
           $this->load->model('My_Model');
           $this->My_Model->addComment($not_result);
       }
       else
       {
           echo "fail";
       }
    }
}