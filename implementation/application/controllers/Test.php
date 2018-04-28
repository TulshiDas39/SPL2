<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Test extends CI_Controller {


    private $perPage = 0;


    /**
     * Get All Data from this method.
     *
     * @return Response
     */
    public function index()
    {
     //   $this->load->database();
       /* $this->load->model('MyModel');
        //$count = $this->db->get('posts')->num_rows();
        $this->MyModel->index();
        $classes = $this->MyModel->getClasses(5);
        //$sql = "SELECT * FROM groups ";
        //$query =  $this->db->query($sql);
        //$classes = $query->result();
        foreach ($classes as $class){
            echo $class->subject."\n";
        }*/


       $this->load->view('test_view');
		
		//$this->load->view('studentPage');
        //$pageNo = $this->input->get("page");
       /* if(!empty($pageNo)){*/


          //  $start = ceil($this->input->get("page") * $this->perPage);
           // $query = $this->db->limit($start, $this->perPage)->get("posts");
           // $data['posts'] = $query->result();
           // $result = $this->load->view('data', $data);
           // echo json_encode($result);
       

       /* }else{
            $query = $this->db->limit(5, $this->perPage)->get("posts");
            $data['posts'] = $query->result();
            $this->load->view('myPost', $data);
        }*/
    }

    function test_link(){
        echo "it is fine";
    }


}