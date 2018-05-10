<?php
class LogIn extends CI_Controller
{

	public function index()
	{
         $this->load->helper('html','url','form');
         $this->load->library('form_validation');

		$this->load->view('user/SignIn');
	}
	public  function log_out()
    {
        $this->load->helper('form');
        /*$this->load->view('user/)*/

        $this->load->library('session');
        $this->session->unset_userdata('user_id');
        return redirect('Login');
    }

    public function reset_password()
    {
        $this->load->helper('form');
        $this->load->view('user/Reset_password');
    }
    public function email_call()
{
     redirect('Email');
}
    public function email_password()
    {
        /*$config=Array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.googlemail.com',
            'smtp_port'=>465,
            'smtp_crypto'=>'tls',
            'smtp_user'=>'bsse0834@iit.du.ac.bd',
            'smtp_pass'=>'joy1155145'


        );*/
        ini_set('max_execution_time', 300);
        $config['protocol']= 'smtp';
        $config['smtp_host']        = 'ssl://smtp.googlemail.com';
        $config['smtp_user']        = 'bsse0834@iit.du.ac.bd';
        $config['smtp_pass']        = 'joy1155145';
        $config['smtp_port']        = '587';
        $config['smtp_crypto'] = 'ssl';
        $config['_smtp_auth']=TRUE;
        $config['mailtype']         = 'html';
         $config['charset']          = 'utf-8';
        $config['newline']    = "\r\n";
         $config['smtp_timeout']     = '30';
        $config['charset'] = 'iso-8859-1';
      /*  $config['crlf']             = '\\r\
n';
        $config['newline']          = '\\r\
n';*/
        $this->load->library('email',$config);
        /*$this->email->set_newline("\r\n");*/

        /*$this->load->library('email',$config);
        $this->email->set_newline("\r\n");*/
        $this->email->from('bsse0834@iit.du.ac.bd','Maloy kanti');

        $this->email->to('tulshidas37@gmail.com');
        $this->email->subject('Reset your password');

        $messages='Request for reset password';

        $this->email->message($messages);


        if($this->email->send())
        {
            /*echo 'Kindly check your email' . $this->input->post('Email'). 'to reset your password!';*/
            echo 'Hi!';
        }

     else{
       show_error($this->email->print_debugger());
       }
    }

}