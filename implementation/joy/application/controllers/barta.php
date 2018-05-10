<?php
/**
 * Created by PhpStorm.
 * User: joysa
 * Date: 4/28/2018
 * Time: 12:11 AM
 */

class barta extends CI_Controller
{
    public function index() {
        $this->load->library('email');

        $config['protocol']    = 'smtp';
        $config['smtp_host']    = 'ssl://smtp.googlemail.com';
        $config['smtp_port']    = '587';
        $config['smtp_timeout'] = '7';
        $config['smtp_user']    = 'joysarkarmloy@gmail.com';
        $config['smtp_pass']    = 'joy1155145';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'text'; // or html
        $config['validation'] = FALSE;

        $this->email->initialize($config);
        $this->email->from('joysarkarmloy@gmail.com','Gateway Restaurent Contact');
        $this->email->to('joysarkarmloy@gmail.com');
        $this->email->subject('Gateway Restaurent Contact Enquiry');

        $this->email->message('jkfjd jfkdj');
        $send = $this->email->send();
        if($send) {
            echo json_encode("send");
        } else {
            $error = $this->email->print_debugger(array('headers'));
          //  echo json_encode($error);
        }

    }
}