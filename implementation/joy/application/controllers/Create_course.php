<?php

class Create_course extends CI_Controller
{
    public function index()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('course_name','Course Name','required');
        $this->form_validation->set_rules('semester','Semester','required');
        $this->form_validation->set_rules('class_code','Class code','required');


        if($this->form_validation->run()!=true)
        {


        }
        else{
            $this->load->model('My_model');
            $data= array(
                "course_name"  => $this->input->post("course_name"),
                "semester"     => $this->input->post("semester"),
                "class_code"   =>$this->input->post("class_code"),
                "user_id"        => $this->session->userdata('user_id')
            );
           /* $this->My_model->addCourse($data);*/
            $this->load->view('user/UserView');



        }

    }
}