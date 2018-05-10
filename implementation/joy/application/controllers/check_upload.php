<?php

class check_upload extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $this->load->view('upload_form', array('error' => ' ' ));
    }

    public function do_upload()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';



        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
           /* $error = array('error' => $this->upload->display_errors());*/

            /*$this->load->view('user/check', $error1);*/
          /*  echo $error1;*/
         echo ($this->upload->display_errors());
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('user/upload_success', $data);
        }
    }
}
?>