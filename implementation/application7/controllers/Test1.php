<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Test1 extends CI_Controller {


    private $perPage = 0;


    /**
     * Get All Data from this method.
     *
     * @return Response
     */
    public function index()
    {
        $this->load->database();
        $this->load->model('MyModel');
        $data = $this->MyModel->get("lastName","user","user_id",2);
        echo $data[0]->lastName;

    }

    function show_post($group_id){
        $this->load->database();
        $this->load->model('MyModel');
        //  $data = $this->MyModel->getClasses($group_id);

        // $count = $this->db->get('posts')->num_rows();
        $this->load->view('studentPage');
        $pageNo = $this->input->get("page");
        echo "againagainagainagainagainagainagain";
        $start = ceil($this->input->get("page") * $this->perPage);
        //
        echo $start;
        // $query = $this->db->limit($start, $this->perPage)->get("assignment");
        //$data['posts'] = $query->result();

        $data = $this->MyModel->getAssignments($group_id,$start);
        $result = $this->load->view('data2', $data);
        echo json_encode($result);

    }

    function test_link(){
        echo "it is fine";
    }


}