<?php
/**
 * Created by PhpStorm.
 * User: joysa
 * Date: 5/25/2018
 * Time: 1:37 AM
 */

class Update_settings extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

   function update_teacher_name(){

        $firstName = $this->input->post('firstName');
        $lastName = $this->input->post('lastName');
        $this->load->model('myModel');
        $this->myModel->update_teacherName($firstName,$lastName);
       echo "<script> alert('Updated');</script>";
        $this->load->view('user/Teacher_settings');
   }

   function update_teacher_email(){
       $email = $this->input->post('email');
       $this->load->model('myModel');
       $this->myModel->update_teacherEmail($email);
       echo "<script> alert('Updated');</script>";
       $this->load->view('user/Teacher_settings');
   }

   function update_teacher_password(){
       $password = $this->input->post('password');
       $oldaPassword = $this->input->post('repeatpassword');
       $password=md5($password);
       $oldaPassword=md5($oldaPassword);
       $this->load->model('myModel');
       $value = $this->myModel->update_teacherPassword($password,$oldaPassword);
       if($value) echo "<script> alert('Updated');</script>";
       else echo "<script> alert('Invalid old password');</script>";
       $this->load->view('user/Teacher_settings');
   }

   function update_teacher_phoneNumber(){
       $password = $this->input->post('phone_number');
       $this->load->model('myModel');
       $this->myModel->update_teacherPhonenumber($password);
       echo "<script> alert('Updated');</script>";
       $this->load->view('user/Teacher_settings');

   }

   function update_group_groupName(){
       $semister = $this->input->post('course_name');
       $this->load->model('myModel');
       $this->myModel->update_groupname();
       $this->load->view('user/Teacher_settings');
   }

   function update_studentName(){
       $firstName = $this->input->post('firstName');
       $lastName = $this->input->post('lastName');
       $this->load->model('myModel');
       $this->myModel->update_studentName($firstName,$lastName);
       echo "<script> alert('Updated');</script>";
       $this->load->view('user/Student_settings');
   }

    function update_student_email(){
        $email = $this->input->post('email');
        $this->load->model('myModel');
        $value = $this->myModel->update_studentEmail($email);
        if($value) echo "<script> alert('Updated');</script>";
        else echo "<script> alert('Email exist');</script>";
        $this->load->view('user/Student_settings');
    }

    function update_student_password(){
        $password = $this->input->post('password');
        $oldPassword = $this->input->post('repeatpassword');
        $password=md5($password);
        $oldPassword=md5($oldPassword);
        $this->load->model('myModel');
        $value =  $this->myModel->update_studentPassword($password,$oldPassword);
        if($value) echo "<script> alert('Updated');</script>";
        else echo "<script> alert('Invalid old password');</script>";
        $this->load->view('user/Student_settings');
    }

    function update_student_phoneNumber(){
        $password = $this->input->post('phone_number');
        $this->load->model('myModel');
        $this->myModel->update_studentPhonenumber($password);
        echo "<script> alert('Updated');</script>";
        $this->load->view('user/Student_settings');
    }

    function update_groupName(){
        $course = $this->input->post('course_name');
        $code = $this->input->post('course_code');
        $this->load->model('myModel');
        $value = $this->myModel->update_groupName($course,$code);
        if($value) echo "<script> alert('Updated');</script>";
        else echo "<script> alert('Invalid class code');</script>";
        $this->load->view('user/teacher_settings');

    }

    function update_semisterName(){
        $semister = $this->input->post('sem_name');
        $code = $this->input->post('sem_code');
        $this->load->model('myModel');
        $value = $this->myModel->update_semisterName($semister,$code);
        if($value) echo "<script> alert('Updated');</script>";
        else echo "<script> alert('Invalid class code');</script>";
        $this->load->view('user/teacher_settings');

    }


}