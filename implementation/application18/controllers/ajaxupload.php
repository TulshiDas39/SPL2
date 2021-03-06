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
       /* $this->session->set_userdata('user_id', 5);
        $this->session->set_userdata('group_id', 6);*/
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

       /* $this->myModel->get("format","assignments",)*/
        $post_id = $this->input->post('post_id');
        $zip_file = $this->input->post('file_name');
        /*echo $file_name;*/
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

        /*$data1= $this->myModel->get_submissionInfo($post_id);*/
        /*$data['submissions'] = $data1['submissions'];
        $data['due'] = $data1['due'];
        $data['post_id'] = $post_id;

        $result = $this->load->view('submissions',$data);*/
        $data['students'] = $this->myModel->getStudentInfo($group_id);

        $result = $this->load->view('show_students',$data);
        echo json_encode($result);
     /*   echo "OK";*/
    }

    /**
     *
     */
   /* function get_submissions(){
        $post_id = $this->input->post('post_id');
        $this->load->Model('myModel');
        $data1= $this->myModel->get_submissionInfo($post_id);
        $data['submissions'] = $data1['submissions'];
        $data['due'] = $data1['due'];

        $result = $this->load->view('submissions',$data);
        echo json_encode($result);


    }*/

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
            $this->load->Model('myModel');
            $user_id = 1;
            $group_id =6;
            $type =0;
            $post_id = $this->myModel->insert_post($group_id,$topic,$description,$attachment,$user_id,$type);
        }

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
        $this->get_newPost($post_id);
    }

    /**
     * @param $topic
     * @param $description
     * @param $attachment
     * @param $edit_postId
     */
    /*function edit_post_table($topic, $description, $attachment, $edit_postId){
        $this->load->Model('myModel');
        $data['title'] = $topic;

        $dt = new DateTime();
        $now = $dt->format('Y-m-d H:i:s');
        $data['date'] = $now ;
        $data['description'] = $description;
        $data['edited'] = 1;
        if($attachment != '0') $data['file'] = $attachment;
        $this->db->where('post_id', $edit_postId);
        $this->db->update('posts', $data);
         $sql = "";
         $sql =" UPDATE posts
            SET title = '".$topic."', date = NOW(), description = '".$description."'
            WHERE post_id = ".$edit_postId." ";
         if($attachment != 0) {
             $sql =" UPDATE posts
            SET title = '".$topic."', date = NOW(), description = '".$description."',file = '".$attachment."'
            WHERE post_id = '".$edit_postId."' ";
         }
         $query = $this->db->query($sql);
         $query->result();
    }
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
                $due[$j] =  $this->MyModel->get("*","assignments","post_id",$data['posts'][$i]->post_id);

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

    function store_assignment(){
        $title = $this->input->post('topic');
        $description = $this->input->post('description');
        $attachment = $this->input->post('attachment');
        $due_date = $this->input->post('due_date');
        $due_time = $this->input->post('due_time');
        $format = $this->input->post('format');
        $edit_postId = $this->input->post('edit_postId');

        $this->load->Model('myModel');
        /*$user_id = 1;
        $group_id =6;
        $type =1;*/

        $post_id = "";
        if($edit_postId != '-1'){
            $due = DateTime::createFromFormat('m/d/Y g:i A', $due_date." ".$due_time)->format('Y-m-d H:i:s');
            $this->edit_assignmentInfo($edit_postId,$format,$due);
            $this->myModel->edit_post_table($title,$description,$attachment,$edit_postId);
            $post_id = $edit_postId;
        }
        else{
            $this->load->Model('myModel');
            $user_id = 1;
            $group_id =6;
            $type =1;
            $post_id = $this->myModel->insert_post($group_id,$title,$description,$attachment,$user_id,$type);
            $due = DateTime::createFromFormat('m/d/Y g:i A', $due_date." ".$due_time)->format('Y-m-d H:i:s');
            $this->myModel->store_assignmentInfo($post_id,$format,$due);
        }

        /*$post_id = $this->myModel->insert_post($group_id,$title,$description,$attachment,$user_id,$type);*/
        /*$due = DateTime::createFromFormat('m/d/Y g:i A', $due_date." ".$due_time)->format('Y-m-d g:i:s');*/
        /*$this->myModel->store_assignmentInfo($post_id,$format,$due);*/
        $this->get_newPost($post_id);

    }

    function edit_assignmentInfo($post_id,$format,$due){

        $this->load->Model('myModel');
        /*$appointment = array('data' => 1);*/
        /*$now = date('Y-m-d H:i:s');*/
        /*$dt = new DateTime();*/
        /*$now = $dt->format('Y-m-d H:i:s');*/
        /*$data['date'] = $now ;*/
        /*$data['edited'] = 1;*/
        /*if($attachment != '0') $data['file'] = $attachment;*/

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
      /*$files = array('files/posts/0ee8d175a95527aabb8e077a51bd8d41.jpg', 'files/posts/2a3b114d60fee17b44d2d3ee60038258.php', 'files/posts/43baf0a0c698978fd5dc37adfa6d3cae.pdf');*/
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

// Create zip
        if (is_dir($dir)){

            if ($dh = opendir($dir)){
                while (($file = readdir($dh)) !== false){

                    // If file
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

        /*echo "folder";*/

        for($i=0;$i<sizeof($files);$i++){
            $f_name = explode($files[$i]->file_name,'.');
            $newfile = 'plagiarism_folder/'."(".$files[$i]->firstName."_".$files[$i]->lastName.")".$files[$i]->file_name;

            if (!copy($files[$i]->path, $newfile)) {
                echo "failed to copy";
            }
            else{
               /*$this->rename_andUnzip('plagiarism_folder',$files[$i]->file_name,$zip);*/
                /*$this->unzip_file($newfile,'plagiarism_folder/unzip/');*/
                $this->zipTest('('.$files[$i]->firstName."_".$files[$i]->lastName.')',$newfile);
            }
        }

        $this->sendToMoss();

        /*$this->rename_andUnzip('plagiarism_folder',$files[0]->file_name);*/

        /*echo "copied";*/

      /*  $this->zip->read_dir("submitted");
        $this->zip->archive($destination);
        $this->send();*/

    }

    function sendToMoss(){
         $formats = array('c','C','cpp','java','pl','vb','py','cs','hs','lisp','html','css','php','js','ML','scm','f','pas');
        $dir    = 'plagiarism_folder/unzip';
        $files1 = scandir($dir);
        $str = "";
        $file_ext = "";
        $file_names = "";
        foreach ($files1 as $file){
            /*$str .= $file;*/
            $file_ext = pathinfo($file,PATHINFO_EXTENSION);
            if (in_array($file_ext, $formats)) {


                /*$string = preg_replace('/\s+/', '', $file);*/
                /*$string = str_replace(' ', '', $file);*/
                $file_names .= " plagiarism_folder/unzip/".$file;
                /*exec("dir",$arr1,$int1);*/


            }
        }
        $arr1 = array();
       /* $command = "perl  moss.pl -l java auctioneer1/Auctioneer.java auctioneer1/Bidder.java";*/
        $command = "perl  moss.pl -l java ".$file_names;
        /*$command = "perl moss.pl ol java plagiarism_folder/unzip/"*/
        /*echo $command;*/
        exec($command,$arr1,$int1);


        echo $arr1[sizeof($arr1)-1];
       /* $this->deleteDir('plagiarism_folder');*/
        /*print_r($files1);*/

    }


    function unzip_file($source,$destination){
        /*$this->load->library('unzip');*/

/*Optional: Only take out these files, anything else is ignored*/
        /*$this->unzip->allow(array('css', 'js', 'html', 'java','php','c','cpp','C','py','pas','ML','cs','f','hs','scm','pp','vb','txt','pl'));*/

        /*C, C++, Java, C#, Python, Visual Basic, Javascript, FORTRAN, ML, Haskell, Lisp, Scheme, Pascal, Modula2, Ada,
         Perl, TCL, Matlab, VHDL, Verilog, Spice, MIPS assembly, a8086 assembly, a8086 assembly, HCL2.*/


   /*Give it one parameter and it will extract to the same folder*/
        /*$this->unzip->extract('uploads/my_archive.zip');*/

       /* or specify a destination directory*/
        /*$this->unzip->extract('uploads/my_archive.zip', '/path/to/directory/');*/
       /* $this->unzip->extract($source, $destination);*/

    }

    /**
     * @param $sourceFolder
     * @param $file
     */
    function rename_andUnzip($sourceFolder, $file){
      /*  $this->load->library('zip'); */
      /*  $zip = new ZipArchive;*/
        /*$res = $zip->open($sourceFolder.'/'.$file);*/
       /* for ($i = 0; $i < $zip->numFiles; $i++) {*/
           /* $filename = $zip->getNameIndex($i);*/
            /*$newname;
            $arr=explode('.',$file );
            if(substr_count($arr[0],"_")==2) {
                $underscorearr = explode('',$arr[0]);
                $newname= $underscorearr[1].'_'.$underscorearr[2];
            }
            else {
                $newname=$arr[0];
            }
            $nameindex=$i+1;
            $newname.='.00'.$nameindex;*/
            /*$zip->renameName($filename,'(tahlil)'.$filename);*/
      /*  }*/

/*
        $zip->close();*/
        /*$zip1 = new ZipArchive;
        $res1 = $zip1->open($sourceFolder.'/'.$file);
        if($res1){
            $success=$zip1->extractTo($sourceFolder);
        }
        $zip1->close();*/

    }

    function zipTest($prefext,$zip_file){
        /*$format = $this->myModel->get("format","assignments","post_id",$post_id);*/
        /*if($format[0]->format !='0'){*/

            /*$formats = explode("|",$format[0]->format);*/

            /*$result = array();*/
            $zip = new ZipArchive;

            if($zip->open($zip_file))
            {
               /* if($zip->numFiles< sizeof($formats)){
                    $zip->close();
                    $this->load->helper("file");
                    unlink($zip_file);
                    echo "all files are not uploaded";
                    return ;
                }*/
                for($i = 0; $i < $zip->numFiles; $i++)
                {
                    $filename = $zip->getNameIndex($i);
                    /* echo 'Filename: ' . $filename . '<br />';*/
                    $zip->renameName($filename,$prefext.$filename);
                    /*$success=*/
                    /*$zip->extractTo('plagiarism_folder');*/

                   /* $file_ext = pathinfo($filename,PATHINFO_EXTENSION);
                    if (!in_array($file_ext, $formats)) {
                        $zip->close();
                        $this->load->helper("file");
                        unlink($zip_file);
                        echo $file_ext.' not allowed';
                        return;

                    }*/
                }
                $zip->close();
                $this->extract_file($zip_file);


               /* echo "OK";*/

            }
            else {
                echo 'Error reading zip-archive!';
            }


        /*}*/
    }

    function extract_file($zip_file){


        /*$format = $this->myModel->get("format","assignments","post_id",$post_id);*/
        /*if($format[0]->format !='0'){*/

        /*$formats = explode("|",$format[0]->format);*/

        /*$result = array();*/
        $zip = new ZipArchive;

        if($zip->open($zip_file))
        {
            /* if($zip->numFiles< sizeof($formats)){
                 $zip->close();
                 $this->load->helper("file");
                 unlink($zip_file);
                 echo "all files are not uploaded";
                 return ;
             }*/
           /* for($i = 0; $i < $zip->numFiles; $i++)*/
         /*   {*/
               /* $filename = $zip->getNameIndex($i);*/
                /* echo 'Filename: ' . $filename . '<br />';*/
                /*$zip->renameName($filename,$prefext.$filename);*/
                /*$success=*/$zip->extractTo('plagiarism_folder/unzip');
                /* $file_ext = pathinfo($filename,PATHINFO_EXTENSION);
                 if (!in_array($file_ext, $formats)) {
                     $zip->close();
                     $this->load->helper("file");
                     unlink($zip_file);
                     echo $file_ext.' not allowed';
                     return;

                 }*/
          /*  }*/

            $zip->close();
          /*  echo "OK";*/

        }
        else {
            echo 'Error reading zip-archive!';
        }


        /*}*/

    }


}