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
        $this->load->library('zip');

    }


    function upload_file()
    {

        $config['upload_path'] = 'files/submissions/';
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
                            echo 'Please upload zip file';
                        } else {
                            $upload_data = $this->upload->data();
                            $file_name = $upload_data['file_name'];
                            echo 'files/submissions/'.$file_name.'|'.$_FILES['file']['name'];
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

        $post_id = $this->input->post('post_id');
        $zip_file = $this->input->post('file_name');
        $this->load->model('myModel');

        $format = $this->myModel->get("format","assignments","post_id",$post_id);
        if($format[0]->format !='0'){

            $formats = explode("|",$format[0]->format);
            unset($formats[sizeof($formats)-1]);

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
                elseif ($zip->numFiles> sizeof($formats)){
                    $zip->close();
                    $this->load->helper("file");
                    unlink($zip_file);
                    echo "You uploaded more files than the needed";
                    return ;
                }
                for($i = 0; $i < $zip->numFiles; $i++)
                {
                    $filename = $zip->getNameIndex($i);
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
        else echo "OK";


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
        $data1= $this->myModel->get_submissionInfo($post_id);
        $data['submissions'] = $data1['submissions'];
        $data['due'] = $data1['due'];
        $data['post_id'] = $post_id;

        $result = $this->load->view('submissions',$data);
        echo json_encode($result);

    }

    function load_classmates(){

        $group_id = $this->input->post('group_id');

        $this->load->Model('myModel');
        $data['students'] = $this->myModel->getStudentInfo($group_id);

        $result = $this->load->view('show_students',$data);
        echo json_encode($result);
    }

    function get_about(){
        $group_id = $this->input->post('group_id');

        $this->load->Model('myModel');
        $data = $this->myModel->getGroupInfo($group_id);

        $result = $this->load->view('show_about',$data);
        echo json_encode($result);
    }


    function store_post(){
        $topic = $this->input->post('topic');
        $description = $this->input->post('description');
        $attachment = $this->input->post('attachment');
        $edit_postId = $this->input->post('edit_postId');



        $post_id = "" ;
        $this->load->Model('myModel');
        if($edit_postId != '-1'){
            $this->myModel->edit_post_table($topic,$description,$attachment,$edit_postId);
            $post_id = $edit_postId;
        }
        else{


            $user_id = $this->session->userdata('user_id');
            $group_id =$this->session->userdata('group_id');
             $type =0;

           $post_id = $this->myModel->insert_post($group_id,$topic,$description,$attachment,$user_id,$type);

        }


        $this->get_newPost($post_id);
    }

    /**
     * @param $topic
     * @param $description
     * @param $attachment
     * @param $edit_postId
     */

    function get_newPost($post_id){
        /*$user_id = 5;*/
        $this->load->model('MyModel');
        /*$group_id = 6;*/
        $group_id = $this->session->userdata('group_id');
        $user_id = $this->session->userdata('user_id');

        /*$data = $this->MyModel->getAssignments($group_id, $this->session->userdata('user_id'),0,1);*/
        $data = $this->MyModel->get_insertedPost($post_id, $group_id,$user_id);
        $data1 = $this->get_button_text($data);
        $data['button'] = $data1['button'];
        $data['type'] = $data1['type'];
        $data['due'] = $data1['due'];
        $result = $this->load->view('data6', $data);
        /*$result = $this->load->view('view_newPost', $data);*/
        echo json_encode($result);

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
                $due[$j] =  $this->MyModel->get("*","assignments","post_id",$data['posts'][$i]->post_id);

                if($submission_date['count']<=0){
                    $type[$j] = "NOT DONE";
                    $button_text[$j] = "Submit";

                }

                else{

                    $button_text[$j] = "Resubmit";
                    if($submission_date['date'][0]->date_time <= $due[$j][0]->due){
                        $type[$j] = "DONE";
                    }
                    else if ($submission_date['date'][0]->date_time > $due[$j][0]->due){
                        $type[$j] = "LATE DONE";
                    }
                }
                $j++;
            }
        }
        $data1['button']=$button_text;
        $data1['type']= $type;
        $data1['due']= $due;



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
                     }

                }
            }
        }



    }

    function store_assignment(){
        $title = $this->input->post('topic');
        $description = $this->input->post('description');
        $attachment = $this->input->post('attachment');
        $due_date = $this->input->post('due_date');
        $due_time = $this->input->post('due_time');
        $format = $this->input->post('format');
        $edit_postId = $this->input->post('edit_postId');

        $this->load->Model('myModel');

        $post_id = "";
        if($edit_postId != '-1'){
            $due = DateTime::createFromFormat('m/d/Y g:i A', $due_date." ".$due_time)->format('Y-m-d H:i:s');
            $this->edit_assignmentInfo($edit_postId,$format,$due);
            $this->myModel->edit_post_table($title,$description,$attachment,$edit_postId);
            $post_id = $edit_postId;
        }
        else{
            $this->load->Model('myModel');
            $user_id = $this->session->userdata('user_id');
            $group_id = $this->session->userdata('group_id');
            $type =1;
            $post_id = $this->myModel->insert_post($group_id,$title,$description,$attachment,$user_id,$type);
            $due = DateTime::createFromFormat('m/d/Y g:i A', $due_date." ".$due_time)->format('Y-m-d H:i:s');
            $this->myModel->store_assignmentInfo($post_id,$format,$due);
        }
        $this->get_newPost($post_id);

    }

    function edit_assignmentInfo($post_id,$format,$due){

        $this->load->Model('myModel');

        $data['due'] = $due;
        $data['format'] = $format;
        $this->db->where('post_id', $post_id);
        $this->db->update('assignments', $data);
    }

    function delete_post(){
        $id = $this->input->post('post_id');
        echo $id;
        $this->load->Model('myModel');
        $this->myModel->delete_post($id);
        echo "deleted";

    }

  function download_submissions(){
      $post_id = $this->input->post('post_id');
      $not_late = $this->input->post('not_late');
      $this->load->Model('myModel');

      $files= array();
      if($not_late == 1) $files = $this->myModel->get_submittedFiles($post_id);
      else $files = $this->myModel->get_lateSubmittedFiles($post_id);

      $destination = 'submitted.zip';
      if(file_exists('submitted.zip'))unlink('submitted.zip');

      if (is_dir('submitted')) {
          $this->deleteDir('submitted');
      }

      mkdir('submitted');

      for($i=0;$i<sizeof($files);$i++){
          $newfile = 'submitted/'.$files[$i]->file_name;

          if (!copy($files[$i]->path, $newfile)) {
              echo "failed to copy";
          }
      }

      $this->zip->read_dir("submitted");
      $this->zip->archive($destination);
      $this->send();
  }


    function send(){

        $zip = new ZipArchive();
        $filename = "submitted.zip";

        if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
            exit("cannot open <$filename>\n");
        }

        $dir = 'includes/';

        if (is_dir($dir)){

            if ($dh = opendir($dir)){
                while (($file = readdir($dh)) !== false){

                    if (is_file($dir.$file)) {
                        if($file != '' && $file != '.' && $file != '..'){
                            $zip->addFile($dir.$file);
                        }
                    }

                }
                closedir($dh);
            }
        }

        $zip->close();

        echo base_url().$filename;

    }


    public static function deleteDir($dirPath) {
        if (! is_dir($dirPath)) {
            throw new InvalidArgumentException("$dirPath must be a directory");
        }
        if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
            $dirPath .= '/';
        }
        $files = glob($dirPath . '*', GLOB_MARK);
        foreach ($files as $file) {
            if (is_dir($file)) {
                self::deleteDir($file);
            } else {
                unlink($file);
            }
        }
        rmdir($dirPath);
    }

    function check_plagiarism(){
        $post_id = $this->input->post('post_id');

        $files= array();

        $this->load->Model('myModel');
        $temp = $this->myModel->get_submissionInfo($post_id);
        $files = $temp['submissions'];

        if (is_dir('plagiarism_folder')) {
            $this->deleteDir('plagiarism_folder');
        }

        mkdir('plagiarism_folder');


        if (is_dir('plagiarism_folder/unzip')) {
            $this->deleteDir('plagiarism_folder/unzip');
        }

        mkdir('plagiarism_folder/unzip');

        for($i=0;$i<sizeof($files);$i++){
            $f_name = explode($files[$i]->file_name,'.');
            $newfile = 'plagiarism_folder/'."(".$files[$i]->firstName."_".$files[$i]->lastName.")".$files[$i]->file_name;

            if (!copy($files[$i]->path, $newfile)) {
                echo "failed to copy";
            }
            else{
                $this->zipTest('('.$files[$i]->firstName."_".$files[$i]->lastName.')',$newfile);
            }
        }

        $this->sendToMoss();
    }

    function sendToMoss(){
         $formats = array('c','C','cpp','java','pl','vb','py','cs','hs','lisp','html','css','php','js','ML','scm','f','pas');
        $dir    = 'plagiarism_folder/unzip';
        $files1 = scandir($dir);
        $str = "";
        $file_ext = "";
        $file_names = "";
        foreach ($files1 as $file){
            $file_ext = pathinfo($file,PATHINFO_EXTENSION);
            if (in_array($file_ext, $formats)) {
                $file_names .= " plagiarism_folder/unzip/".$file;
            }
        }
        $arr1 = array();
        $command = "perl  moss.pl -l java ".$file_names;
        exec($command,$arr1,$int1);
        echo $arr1[sizeof($arr1)-1];
        $this->deleteDir('plagiarism_folder');

    }

    function zipTest($prefext,$zip_file){
            $zip = new ZipArchive;

            if($zip->open($zip_file))
            {
                for($i = 0; $i < $zip->numFiles; $i++)
                {
                    $filename = $zip->getNameIndex($i);
                    $zip->renameName($filename,$prefext.$filename);
                }
                $zip->close();
                $this->extract_file($zip_file);

            }
            else {
                echo 'Error reading zip-archive!';
            }
    }

    function extract_file($zip_file){

        $zip = new ZipArchive;

        if($zip->open($zip_file))
        {
            $zip->extractTo('plagiarism_folder/unzip');
            $zip->close();

        }
        else {
            echo 'Error reading zip-archive!';
        }

    }


}