<?php

class MyUploader extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }


    public function upload()
    {
        if (isset($_FILES['upload']['name'])) {
            // total files //
            $count = count($_FILES['upload']['name']);
            // all uploads //
            $uploads = $_FILES['upload'];

            for ($i = 0; $i < $count; $i++) {
                if ($uploads['error'][$i] == 0) {
                    move_uploaded_file($uploads['tmp_name'][$i], 'uploads/' . $uploads['name'][$i]);
                    echo $uploads['name'][$i] . "\n";
                }
            }
        }
    }

}
?>