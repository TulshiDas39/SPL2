<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mark extends CI_Controller {

    public function index()
    {
        echo "has come";
    }

    function show($post_id){
        $this->load->Model('myModel');
        $data1= $this->myModel->get_submissionInfo($post_id);
        $data['submissions'] = $data1['submissions'];
        $data['due'] = $data1['due'];
        $data['post_id'] = $post_id;
        $this->load->view('view_marks',$data);
    }

    function save(){
       $group_id = $this->session->userdata('group_id');
       $post_id = $this->input->post('post_id');
       $this->load->Model('myModel');
       $students= $this->myModel->getStudentInfo($group_id);
       foreach ($students as $student){
            $user_id = $student->user_id;
            $mark = $this->input->post($user_id);
            echo $mark." ";
            if($mark != -1) $this->myModel->update_mark($post_id,$user_id,$mark);
       }

       echo "OK";

    }

    function showToStudent($post_id){
        $this->load->Model('myModel');
        $data1= $this->myModel->get_submissionInfo($post_id);
        $data['submissions'] = $data1['submissions'];
        $data['due'] = $data1['due'];
        $data['post_id'] = $post_id;

        $this->load->view('view_marksTo_student',$data);
    }


    function publish($post_id){
        $this->load->Model('myModel');
        $this->myModel->update_publish($post_id);
    }


}
?>