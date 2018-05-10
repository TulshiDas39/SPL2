<?php

class UserRegister extends CI_Controller
{
    public function index()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstName','First Name','required|alpha_dash|max_length[20]|min_length[3]');
        $this->form_validation->set_rules('lastName','Last Name','required|alpha|max_length[20]|min_length[3]');
        $this->form_validation->set_rules('Email','Email','required|valid_email');
        $this->form_validation->set_rules('password','password','required|alpha_numeric|min_length[7]|max_length[20]');
        $this->form_validation->set_rules('repeatpassword','Re-Password','required|matches[password]');
        $this->form_validation->set_rules('phoneNumber','Phone Number','required|is_natural');
        if($this->form_validation->run()!=true)
        {


            $this->load->view('user/register');
        }

        else{
            $this->load->model('My_model');
            $data= array(
                "fName"   =>$this->input->post("firstName"),
                "lName"   =>$this->input->post("lastName"),
                "email"   =>$this->input->post("Email"),
                "password"   =>$this->input->post("password"),
                "phoneNumber"   =>$this->input->post("phoneNumber")

            );
            $this->My_model->addUser($data);
            $q= $this->db
                ->where('email',$this->input->post("Email"))
                ->get('users');
            $login_id=$q->row()->user_id;
            $this->load->library('session');
            $this->session->set_userdata('user_id',$login_id);
            $this->load->view('user/Login_view');

        }

    }
}
