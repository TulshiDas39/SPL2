<?php
/**
 * Created by PhpStorm.
 * User: joysa
 * Date: 5/25/2018
 * Time: 1:37 AM
 */

class Settings extends CI_Controller
{
   public function student_settings()
   {
       $this->load->view('user/Student_settings');
   }
    public function teacher_settings()
    {
        $this->load->view('user/Teacher_settings');
    }
}