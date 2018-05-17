<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of ajaxupload
 *
 * @author https://roytuts.com
 */
class AjaxUpload extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->session->set_userdata('user_id', 5);
        $this->session->set_userdata('group_id', 6);
    }

   /* function index() {
        $this->load->view('file_upload_ajax', NULL);
    }*/

    function upload_file()
    {

        //upload file
        /*$config['upload_path'] = 'uploads/';*/
        $config['upload_path'] = 'files/submissions/';
        /*$config['upload_path'] = 'files/submissions/';*/
        /* $config['upload_path'] = $this->path;*/
        $config['allowed_types'] = 'zip';
        $config['max_filename'] = '255';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = '10240'; //1 MB

        if (isset($_FILES['file']['name'])) {
            if (0 < $_FILES['file']['error']) {
                echo 'Error during file upload' . $_FILES['file']['error'];
            } else {

                if (file_exists('uploads/' . $_FILES['file']['name'])) {
                    echo 'File already exists : uploads/' . $_FILES['file']['name'];
                } else {
                        $this->load->library('upload', $config);
                        if (!$this->upload->do_upload('file')) {
                           /* echo $this->upload->display_errors();*/
                            echo 'Please upload zip file';
                        } else {
                            $upload_data = $this->upload->data();
                            /*$file_name = $_FILES['file']['name'];*/
                            $file_name = $upload_data['file_name'];
                           /* $result = $this->check_format('files/temp/'.$file_name);*/
                           /* if(!$result[0]){
                                echo $result[1];
                            }*/
                            echo 'files/submissions/'.$file_name.'|'.$_FILES['file']['name'];

                           /* echo 'File successfully uploaded : files/submissions/' . $upload_data['file_name'];*/
                            /*$this->path = 'files/submissions/' . $upload_data['file_name'];*/
                            /* echo 'File successfully uploaded :'.$this->path;*/
                        }

                  }
            }
        }
    }
    function get_postId(){

        $this->post_id = $this->input->post('post_id');
        /*$this->session->set_userdata('post_id',)*/
        /*$this->path = 'files/submissions/'.$this->session->userdata('group_id').'/'.$this->post_id.'/';*/
        $this->path = 'files/submissions/';
        echo $this->post_id .$this->path;
    }

    function check_format(){
       /* echo "<script>alert('into format check');</script>";*/
        $this->load->model('myModel');
       /* $this->myModel->get("format","assignments",)*/
        $post_id = $this->input->post('post_id');
        $zip_file = $this->input->post('file_name');
        /*echo $file_name;*/

        $format = $this->myModel->get("format","assignments","post_id",$post_id);
        $formats = explode("|",$format[0]->format);

        $result = array();
        $zip = new ZipArchive;

            if($zip->open($zip_file))
            {
                if($zip->numFiles< sizeof($formats)){
                    $zip->close();
                    $this->load->helper("file");
                    unlink($zip_file);
                    echo "all files are not uploaded";
                    return ;
                }
                for($i = 0; $i < $zip->numFiles; $i++)
                {
                    $filename = $zip->getNameIndex($i);
                   /* echo 'Filename: ' . $filename . '<br />';*/
                    $file_ext = pathinfo($filename,PATHINFO_EXTENSION);
                    if (!in_array($file_ext, $formats)) {
                        $zip->close();
                        $this->load->helper("file");
                        unlink($zip_file);
                        echo $file_ext.' not allowed';
                        return;

                    }
                }

                $zip->close();
                echo "OK";

            }
            else
            {
                echo 'Error reading zip-archive!';
            }

        }



    function store(){
        $post_id = $this->input->post('post_id');
        $path = $this->input->post('path');
        $file_name = $this->input->post('file_name');
        $this->load->Model('myModel');
        $status = $this->myModel->insertIntoSubmissions($post_id,$path,$file_name);


        echo $status;
    }

    function load_submissions(){

        $post_id = $this->input->post('post_id');

        $this->load->Model('myModel');
        /*$data['submissions'] = $this->myModel->get("*","submissions","post_id",$post_id);*/
        $data1= $this->myModel->get_submissionInfo($post_id);
        $data['submissions'] = $data1['submissions'];
        $data['due'] = $data1['due'];

        $result = $this->load->view('submissions',$data);
        echo json_encode($result);

    }

    function store_post(){
        $topic = $this->input->post('topic');
        $description = $this->input->post('description');
        $attachment = $this->input->post('attachment');
        /*$file = $this->input->post('file');*/
        $this->load->Model('myModel');
        $user_id = 1;
        $group_id =6;
        /*$file = '0';*/
        $type =0;
        $this->myModel->insert_post($group_id,$topic,$description,$attachment,$user_id,$type);
        /*$data['group_id'] = $group_id;
        $data['topic'] = $topic;
        $data['description'] = $description;
        $data['file']= $file;
        $data['use_id']=$user_id;
        $data['type']=$type;
        $firstName = $this->myModel->get("firstName","user","user_id",1);
        $lastName = $this->myModel->get("lastName","user","user_id",1);
        $data['firstName'] = $firstName;
        $data['lastName'] = $lastName;
        $data['due'] = '';
        $data['date'] = NOW();
        $post_id = $this->myModel->get_newPostId();
        $result = $this->load->view('view_newPost',$data);*/
        /*echo json_encode($result);*/
        $this->get_newPost($user_id);


    }


    function get_newPost($user_id){


        /*$user_id = 5;*/
        // $this->load_groups($id);

        $this->load->model('MyModel');
        //  $this->enter_group(6);
        /*$this->session->set_userdata('user_id', $user_id);
        $this->session->set_userdata('group_id', 6);*/
        $group_id = 6;
        /*$pageNo = 0;*/

    /*    if(!empty($pageNo)){*/
            /*  echo "<script type='text/javascript'>alert('submitted successfully!')</script>";*/
            /* echo "<script type='text/javascript'>alert(page)</script>";*/
        $data = $this->MyModel->getAssignments($group_id, $this->session->userdata('user_id'),0,1);
        $data1 = $this->get_button_text($data);
        $data['button'] = $data1['button'];
        $data['type'] = $data1['type'];
        $data['due'] = $data1['due'];
        $result = $this->load->view('data6', $data);
        echo json_encode($result);
    /*    }*/




    }



    function get_button_text($data){

        $data1=array();
        $type=array();
        $button_text=array();
        $due = array();
        $icon_color = array();
        $j=0;
        for($i=0;$i<sizeof($data['posts']);$i++){
            if($data['posts'][$i]->type =='1')  {

                $submission_date = $this->MyModel->getSubmissionDate($data['posts'][$i]->post_id, $this->session->userdata('user_id'));
                $due[$j] =  $this->MyModel->get("due","assignments","post_id",$data['posts'][$i]->post_id);

                if($submission_date['count']<=0){
                    $type[$j] = "NOT DONE";
                    /*$button_text[$j] = "Submit";*/
                    $button_text[$j] = "Submit";
                    /*$icon_color[$j]="red";*/

                }

                else{

                    $button_text[$j] = "Resubmit";
                    if($submission_date['date'][0]->date_time <= $due[$j][0]->due){
                        $type[$j] = "DONE";
                        /*$icon_color[$j]="green";*/
                        /* echo "<script type='text/javascript'>alert('hello');</script>";*/
                    }
                    else if ($submission_date['date'][0]->date_time > $due[$j][0]->due){
                        $type[$j] = "LATE DONE";
                        /* $icon_color[$j]="red";*/
                    }
                }
                $j++;
            }
        }
        $data1['button']=$button_text;
        $data1['type']= $type;
        $data1['due']= $due;
        /*  $data1['icon_color']= $icon_color;*/


        return $data1;
    }


    function store_attachment(){


        $config['upload_path'] = 'files/posts/';
        $config['allowed_types'] = '*';
        $config['max_filename'] = '255';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = '10240'; //1 MB

        if (isset($_FILES['attachment']['name'])) {
            if (0 < $_FILES['attachment']['error']) {
                echo 'Error during file upload' . $_FILES['attachment']['error'];
            } else {

                if (file_exists('uploads/' . $_FILES['attachment']['name'])) {
                    echo 'File already exists : uploads/' . $_FILES['attachment']['name'];
                } else {
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('attachment')) {
                        /* echo $this->upload->display_errors();*/
                        echo 'Error when store attachment';
                    } else {
                        $upload_data = $this->upload->data();
                        /*$file_name = $_FILES['attachment']['name'];*/
                        $file_name = $upload_data['file_name'];

                        echo 'files/posts/'.$file_name.'|'.$_FILES['attachment']['name'];

                        /* echo 'File successfully uploaded : files/submissions/' . $upload_data['file_name'];*/
                        /*$this->path = 'files/submissions/' . $upload_data['file_name'];*/
                        /* echo 'File successfully uploaded :'.$this->path;*/
                    }

                }
            }
        }



    }


}