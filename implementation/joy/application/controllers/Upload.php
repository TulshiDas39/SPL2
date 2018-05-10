<?php

class Upload extends CI_Controller
{

    function index()
    {

        $this->load->helper(array('form', 'url'));
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';


        $this->load->library('upload', $config);


        if ( ! $this->upload->do_upload('userFile'))
        {
            echo ($this->upload->display_errors());
           /*$upload_error = $this->upload->display_errors();
           $this->load->view('user/teacherPage',compact($upload_error));*/
        }
        else
        {
           /* $data = array('upload_data' => $this->upload->data());*/
           $data=$this->upload->data();
            $image_path = base_url("uploads/".$data['raw_name']. $data['file_ext']);
            $result=array(
                "title" => $this->input->post("title"),
                "instruction"=> $this->input->post("instructions"),
                "file_path"=>($image_path),
                "sub_date"=>$this->input->post("date"),
                "sub_time"=> $this->input->post("time"),
                "user_id"=> $this->session->userdata('user_id')

            );

           /* echo "<pre>";
            print_r($result);*/
            $this->load->model('CheckUserinput');
            $user_name=$this->CheckUserinput->createName($this->session->userdata('user_id'));
            $this->load->helper('date');
            /*$date_string="%Y %m %d  %h:%i %a";
            $time=time();*/
            /*$date_time = new DateTime('now', new DateTimezone('Asia/Dhaka'));*/
            date_default_timezone_set('Asia/Dhaka');
            $date_time=date("Y-m-d h:i A");
            $not_result=array(
              "name"=> ($user_name),
                "message"=>("assignment"),
                "status"=>(1),
                "date"=>($date_time)
            );
            echo "<pre>";
            print_r($not_result);
            $this->load->model('My_Model');
            $this->My_Model->addNotification($not_result);

           /* echo "<pre>";
           echo  $image_path;exit;*/
           /* print_r($data);exit;*/

           /* $this->load->view('user/upload_success', $data);*/
        }
    }


}