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
                echo $formats[1];

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
        $this->myModel->insertIntoSubmissions($post_id,$path,$file_name);
        echo "ok stored ";
    }

}