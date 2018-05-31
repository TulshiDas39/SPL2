<?php

class UserLogin extends CI_Controller
{
    public function index()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('Email','Email','required|valid_email|trim');

        $this->form_validation->set_rules('password','password','required');
        $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");

        if($this->form_validation->run()!=true)
        {

            $this->load->view('SignIn');
        }
        else{
            $email=$this->input->post('Email');
            $password=$this->input->post('password');
            $password=md5($password);
            /*$this->load->model('CheckUserinput');*/
            $this->load->model('myModel');
            /*$login_id=$this->CheckUserinput->validate_login($email,$password);*/
            $userInfo = $this->myModel->validate_login($email,$password);

            if($userInfo)
            {
                $this->load->library('session');
                $this->session->set_userdata('user_id',$userInfo[0]->user_id);
                if($userInfo[0]->type == 's') redirect('http://localhost/SPL/index.php/student1/load_groups/'.$userInfo[0]->user_id);
                elseif ($userInfo[0]->type == 'i')redirect('http://localhost/SPL/index.php/teacher/load_groups/'.$userInfo[0]->user_id);
                else $this->load->view('welcome_view');

            }
            else{
                $this->session->set_flashdata('log_infail','Invaild email or password');
                $this->load->view('SignIn');
            }
        }


    }
}