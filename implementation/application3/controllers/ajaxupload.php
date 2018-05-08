<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of ajaxupload
 *
 * @author https://roytuts.com
 */
class AjaxUpload extends CI_Controller {

    private $file_name;
    private $path;
    private $post_id;
    private $format;

    function __construct() {
        parent::__construct();

    }

   /* function index() {
        $this->load->view('file_upload_ajax', NULL);
    }*/

    function upload_file() {

        //upload file
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = '*';
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
                        echo $this->upload->display_errors();
                    } else {
                        $upload_data = $this->upload->data();
                        $this->file_name = $_FILES['file']['name'];
                        echo 'File successfully uploaded : uploads/' . $upload_data['file_name'];
                    }
                }
            }
        } /*else {
            echo 'Please choose a file';
        }*/
    }

    function get_postId(){
        $post_id = $this->input->post('post_id');
        echo $post_id;
    }

    function store($post_id,$path,$file_name){
        $this->load->Model('myModel');
        $this->myModel->insertIntoSubmissions($this->session->userdata('user_id'),$this->session->userdata($post_id,$path,$file_name));
    }

}