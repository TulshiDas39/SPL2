<?php

class UserPage extends My_Controller
{
    public function index()
    {
        if(!$this->session->userdata('user_id'))
            return redirect('Login');
        $this->load->view('user/Login_view');
    }
}