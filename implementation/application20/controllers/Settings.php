<?php
/**
 * Created by PhpStorm.
 * User: joysa
 * Date: 5/25/2018
 * Time: 1:37 AM
 */

class Settings extends CI_Controller
{
    function index(){
        $this->load->model('myModel');
        $user_id = $this->session->userdata('user_id');
        $type = $this->myModel->get('type','user','user_id',$user_id);
        if($type == 'i'){
            $this->teacher_settings();
        }
        else{
            $this->student_settings();
        }

    }
   public function student_settings()
   {
       $this->load->view('user/Student_settings');
   }
    public function teacher_settings()
    {
        $this->load->view('user/Teacher_settings');
    }

}