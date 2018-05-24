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

            $this->load->view('user/SignIn');
        }
        else{
            $email=$this->input->post('Email');
            $password=$this->input->post('password');
            $this->load->model('CheckUserinput');
            $login_id=$this->CheckUserinput->validate_login($email,$password);
           if($login_id)
           {
               $this->load->library('session');
               $this->session->set_userdata('user_id',$login_id);

              /*$this->load->view('user/UserHomePage');*/
             return redirect('UserPage');


           }
           else{
                $this->session->set_flashdata('log_infail','Invaild email or password');
               $this->load->view('user/SignIn');
           }
        }


    }
}