<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class LogIn extends CI_Controller
{

    public function index()
    {
        $this->load->helper('html', 'url', 'form');
        $this->load->library('form_validation');

        $this->load->view('SignIn');
    }

    public function log_out()
    {
        $this->load->helper('form');

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
        $this->load->database();
        /*echo "<script> alert('if');</script>";*/

        /*ini_set('max_execution_time', 300);
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

        $this->load->library('email',$config);

        $this->email->from('bsse0834@iit.du.ac.bd','Maloy kanti');

        $this->email->to('tulshidas37@gmail.com');
        $this->email->subject('Reset your password');

        $messages='Request for reset password';

        $this->email->message($messages);


        if($this->email->send())
        {

            echo 'Hi!';
        }

     else{
       show_error($this->email->print_debugger());
       }
    }*/

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('Email', 'Email', 'required|valid_email');
        $this->form_validation->set_error_delimiters("<p class='text-danger'>", "</p>");
        if ($this->form_validation->run() != true) {


            $this->load->view('user/Reset_password');
        } else {
            $email = $this->input->post('Email');
            $this->load->model('myModel');
            $login_id = $this->myModel->validate_email($email);
            if (!$login_id) {
                $this->session->set_flashdata('wrong_email','Wrong email id.');
                $this->load->view('user/Reset_password');
            } else {
                require './vendor/autoload.php';
                $mail = new PHPMailer(true);
                $mail->SMTPDebug = 1;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'ssl://smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'bsse0834@iit.du.ac.bd';                 // SMTP username
                $mail->Password = 'joy1155145';                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 465;                                    // TCP port to connect to
                $receiver = $this->input->post('Email');
                //Recipients
                $mail->setFrom('bsse0834@iit.du.ac.bd', 'Mailer');
                $mail->addAddress($receiver, 'User');     // Add a recipient
                $data1 = array();
                $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
                $pass = ''; //remember to declare $pass as an array
                $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
                for ($i = 0; $i < 8; $i++) {
                    $n = rand(0, $alphaLength);
                    $pass .= $alphabet[$n];
                }
                $data['code'] = $pass;
                $this->session->set_userdata($data);
                $user_data = array(
                    'pass' => $pass,
                    'email' => $receiver
                );

                $data1['code'] = $pass;
                $data1['email'] = $receiver;
                $data1['time'] = time();
                $this->db->select('*');
                $this->db->where('email',$receiver);
                $q = $this->db->get('forgottemp');

                if ($q->num_rows() > 0) {
                    $this->db->where('email', $receiver);
                    $this->db->update('forgottemp', $data1);
                } else {
                    $this->db->set('email', $receiver);
                    $this->db->insert('forgottemp', $data1);
                }


                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Here is the subject';
                /*$mail->Body = base_url() . '/index.php/login/verify/' . $receiver . '/' . $pass;*/
                $mail->Body =   'http://localhost/SPL/index.php/login/verify/' . $receiver . '/' . $pass;
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                $mail->send();
                redirect('login');

            }
        }
    }
     public function verify(){
        $email = $this->uri->segment(3);
        $pass = $this->uri->segment(4);
        $this->load->database();
        $this->db->select('*');
        $this->db->from('forgottemp');
        $this->db->where('email', $email);
        //$pass1 = $this->db->get();

        $query = $this->db->get();
        $ret = $query->row();
        $pass1 =  $ret->code;
        $email1 = $ret->email;
        $time1 = $ret->time;

         $data = array(
            'email' =>  $email1
        );


        if((strcmp($pass, $pass1 == 0)&& (time()-$time1)<3600)){
            $this->load->view('user/newPassword',$data);
           

        }
        else echo "Invalid";




//            $this->db->select('temp');
//            $this->db->where('email', $email);
//            $query = $this->db->get('users');
//            $arr =  $query->result_array();
//            $code1 = $arr[0]['temp'];

            //echo $code." ".$pass." ".$this->input->post('password1')." ".$email ;

        }

    
    public function updatePassword()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('password', 'password', 'alpha_numeric|min_length[7]|max_length[20]');


        if ($this->form_validation->run() != true) {
            $email = $this->input->post('email');
            $data1['email']=$email;
            $this->load->view('user/newpassword',$data1);
        } else {
            $this->load->database();
            $pass = $this->input->post('password');
            $pass=md5($pass);
            $email = $this->input->post('email');
            $data = array(
                'email' => $email,
                'password' => $pass
            );
            //echo $pass." ".$email;
            $this->db->where('email', $email);
            $this->db->update('user', $data);
            redirect('login');
        }

    }
    
    
    
    
    
}