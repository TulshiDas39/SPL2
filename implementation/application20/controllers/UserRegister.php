<?php

class UserRegister extends CI_Controller
{
    public function index()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstName','First Name','required|alpha_dash|max_length[20]|min_length[3]');
        $this->form_validation->set_rules('lastName','Last Name','required|alpha|max_length[20]|min_length[3]');
        $this->form_validation->set_rules('Email','Email','required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password','password','required|alpha_numeric|min_length[7]|max_length[20]');
        $this->form_validation->set_rules('repeatpassword','Re-Password','required|matches[password]');
        $this->form_validation->set_rules('phoneNumber','Phone Number','required|is_natural');
        if($this->form_validation->run()!=true)
        {
            /*$this->load->view('user/register');*/
            $this->load->view('register');
        }

        else{
            $this->load->model('myModel');
            /*$data= array(
                "fName"   =>$this->input->post("firstName"),
                "lName"   =>$this->input->post("lastName"),
                "email"   =>$this->input->post("Email"),
                "password"   =>$this->input->post("password"),
                "phoneNumber"   =>$this->input->post("phoneNumber")

            );*/
             $password= md5($this->input->post("password"));
            $data= array(
                "firstName"   =>$this->input->post("firstName"),
                "lastName"   =>$this->input->post("lastName"),
                "email"   =>$this->input->post("Email"),
                "password"   =>$password,
                "phone_number"   =>$this->input->post("phoneNumber")

            );

            /*$this->My_model->addUser($data);*/
            $user_id = $this->myModel->addUser($data);
            /*$q= $this->db
                ->where('email',$this->input->post("Email"))
                ->get('users');
            $login_id=$q->row()->user_id;*/
            $this->load->library('session');
            /*$this->session->set_userdata('user_id',$login_id);*/
            $this->session->set_userdata('user_id',$user_id);
            $this->load->view('welcome_view');

        }

    }
}
