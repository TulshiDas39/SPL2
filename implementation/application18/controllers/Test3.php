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
        $this->load->library('zip');

    }


    /**
     * Get All Data from this meth
     *
     * @return Response
     */
    public function index()
    {
        $this->load->view('teacherPage8');
    }

   /* function rename(){
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
    }*/

  /*  function send(){

        $zip = new ZipArchive();
        $filename = "submitted.zip";

        if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
            exit("cannot open <$filename>\n");
        }

        $dir = 'includes/';

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
*/

   /* public static function deleteDir($dirPath) {
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
    }*/





}

