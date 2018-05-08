<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Test3 extends CI_Controller
{


    private $file_name;
    private $path;
    private $post_id;
    private $format;
    public function __construct()
    {
        parent:: __construct();
        $this->session->set_userdata('user_id', 5);
        $this->session->set_userdata('group_id', 6);
    }


    /**
     * Get All Data from this method.
     *
     * @return Response
     */
    public function index()
    {
        /*$this->load->view('test_view');*/
        $zip = new ZipArchive;
        if ($zip->open('files/logs.zip'))
        {
            for($i = 0; $i < $zip->numFiles; $i++)
            {
                $filename = $zip->getNameIndex($i);
                echo 'Filename: ' . $filename . '<br />';
                $file_ext = pathinfo($filename,PATHINFO_EXTENSION);
                echo $file_ext.'<br/>';
            }
        }
        else
        {
            echo 'Error reading zip-archive!';
        }
    }

    function upload_file() {
        //upload file
        /*$config['upload_path'] = 'uploads/';*/
        $config['upload_path'] = $this->path;
        /*$config['allowed_types'] = '*';*/
        $config['allowed_types'] = $this->format;
        $config['max_filename'] = '255';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = '10240'; //1 MB
        if (isset($_FILES['file']['name'])) {
            if (0 < $_FILES['file']['error']) {
                echo 'Error during file upload' . $_FILES['file']['error'];
            } else {
                if (file_exists($this->path. $_FILES['file']['name'])) {
                    echo 'File already exists : uploads/' . $_FILES['file']['name'];
                } else {
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('file')) {
                        echo $this->upload->display_errors();
                    } else {
                        /*echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];*/
                        $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
                        /*$this->file_name = $upload_data['file_name'];*/
                        $this->file_name = $_FILES['file']['name'];
                        echo 'File successfully uploaded : uploads/' . $upload_data['file_name'];
                    }
                }
            }
        } else {
            echo 'Please choose a file';
        }
    }

    function get_postId()
    {
        $this->post_id = $this->input->post('x');
        $this->path = 'files/submissions/'.$this->session->userdata('group_id').'/'.$this->post_id.'/';

        $this->load->Model('myModel');
        $this->format = $this->myModel->get("format","assignments","post_id",$this->post_id);
        echo  $this->post_id;

    }



    function upload_file1() {
        //upload file
        /* $config['upload_path'] = 'uploads/';
         $config['allowed_types'] = '*';
         $config['max_filename'] = '255';
         $config['encrypt_name'] = TRUE;
         $config['max_size'] = '10240'; *///1 MB
        if (isset($_POST['x'])) {
            /* if (0 < $_POST['file']) {
                 echo 'Error during file upload' . $_POST['file']['error'];
             } else {
                 if (file_exists('uploads/' . $_FILES['file']['name'])) {
                     echo 'File already exists : uploads/' . $_FILES['file']['name'];
                 } else {
                     $this->load->library('upload', $config);
                     if (!$this->upload->do_upload('file')) {
                         echo $this->upload->display_errors();
                     } else {
                         echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
                         $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
                         $file_name = $upload_data['file_name'];
                         echo 'File successfully uploaded : uploads/' . $upload_data['file_name'];
                     }
                 }
             }*/

            $data = $this->input->post('x');
            echo $data;
        }

        else {
            echo 'Please choose a file';
        }
    }


    function store($post_id){
        $this->load->Model('myModel');
        $this->myModel->insertIntoSubmissions($post_id,$this->path, $this->file_name);
    }

}

