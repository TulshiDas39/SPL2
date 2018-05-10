<?php
/**
 * Created by PhpStorm.
 * User: bsse0
 * Date: 4/8/2018
 * Time: 8:01 PM
 */

class mail extends CI_Controller
{

    public function index(){
        $config = array('protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'joysarkarmloy@gmail.com',
            'smtp_pass' => 'joy1155145'
        );

        $this->load->library('email',$config);
        $this->email->set_newline("\r\n");
        $this->email->from('joysarkarmloy@gmail.com','Joy');
        $this->email->to('joysarkarmloy@gmail.com');
        $this->email->subject('Mail');
        $this->email->message('HAla ai na mail dilam');

        if($this->email->send()){
            echo 'sent successfully';
        }else{
            show_error($this->email->print_debugger());
        }
    }


}