<?php

Class Email extends CI_Controller
{
    function index()
    {
        $config['protocol']= 'smtp';
        $config['smtp_host']        = 'ssl://smtp.googlemail.com';
        $config['smtp_user']        = 'bsse0834@iit.du.ac.bd';
        $config['smtp_pass']        = 'joy1155145';
        $config['smtp_port']        = '465';
        $config['smtp_crypto'] = 'tls';
        $config['_smtp_auth']=TRUE;
        $config['mailtype']         = 'html';
        $config['charset']          = 'utf-8';
        $config['newline']    = "\r\n";
        $config['smtp_timeout']     = '30';
        $config['charset'] = 'iso-8859-1';
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('bsse0834@iit.du.ac.bd', 'Maloy kanti');

        $this->email->to('tulshidas37@gmail.com');
        $this->email->subject('Reset your password');

        $messages = 'Request for reset password';

        $this->email->message($messages);


        if ($this->email->send()) {
            /*echo 'Kindly check your email' . $this->input->post('Email'). 'to reset your password!';*/
            echo 'Hi!';
        } else {
            show_error($this->email->print_debugger());
        }
    }
}

