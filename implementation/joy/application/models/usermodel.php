<?php
/**
* 
*/
class UserModel extends CI_Model
{

    public function getUsers()
    {
        $this->load->database();
        $q = $this->db->query("SELECT * from user");
        return $q->result_array();
        //$result=$q->result();
        //echo "<pre>";
        //print_r($result);
        //print_r($q);
        /*return[
            ['Name'=>'joy sarker','Age'=>'25','Address'=>'jagannath Hall','CGPA'=>3.59],
            ['Name'=>'saishab saha','Age'=>'20','Address'=>'Dhanmondi','CGPA'=>3.61],
            ['Name'=>'Tulshi','Age'=>'22','Address'=>'jigatola','CGPA'=>3.32],
        ];*/
        //$this->test();
    }

    public function email_password_reset_validation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|xss_clean');

        if ($this->form_validation->run()) {
            /*echo 1;*/
            $reset_key = md5(uniqid());
            $this->load->model('User');
            if ($this->User->update_reset_key($reset_key)) {
                $config = Array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'ssl://smtp.googlemail.com',
                    'smtp_port' => 465,
                    'smtp_user' => 'bsse0834@iit.du.ac.bd',
                    'smtp_pass' => 'joy1155145'


                );

                $this->load->library('email', $config);
                $this->email->set_newline("\r\n");
                /*$this->email->initialize($config);*/
                $this->email->from('bsse0834@iit.du.ac.bd', 'Maloy kanti');
                /* $this->email->to($this->input->post('Email'));*/
                $this->email->to('joysarkarmloy@gmail.com');
                $this->email->subject('Reset your password');

                $message = 'Request for reset password';
                /* $message.="<a href=' ".base_url() . "reset_password/" .$reset_key ."'>Click here to reset password</a>";*/
                $this->email->message($message);
                if ($this->email->send()) {
                    echo 'Kindly check your email' . $this->input->post('Email') . 'to reset your password!';
                }
            } else {
                show_error($this->email->print_debugger());
            }
        } else {
            $this->load->view('user/Reset_password');
        }
    }
}