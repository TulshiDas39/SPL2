<?php
class Upload_post extends  CI_Controller
{
    public function  index()
    {

        $this->load->helper(array('form', 'url'));
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';


        $this->load->library('upload', $config);


        if ( ! $this->upload->do_upload('userFile2'))
        {
            echo ($this->upload->display_errors());

        }
        else
        {
            $data=$this->upload->data();
            $image_path = base_url("uploads/".$data['raw_name']. $data['file_ext']);
            $result=array(
                "topic" => $this->input->post("topic"),
                "post_status"=> $this->input->post("share_post"),
                "user_id"=> $this->session->userdata('user_id'),
                "file_path"=>($image_path),

            );

             echo "<pre>";
             print_r($result);
           /* $this->load->model('CheckUserinput');
            $user_name=$this->CheckUserinput->createName($this->session->userdata('user_id'));
            $this->load->helper('date');
            date_default_timezone_set('Asia/Dhaka');
            $date_time=date("Y-m-d h:i A");
            $not_result=array(
                "name"=> ($user_name),
                "message"=>("post"),
                "status"=>(1),
                "date"=>($date_time)
            );
            echo "<pre>";
            print_r($not_result);
            $this->load->model('My_Model');
            $this->My_Model->addNotification($not_result);*/


        }
    }

}