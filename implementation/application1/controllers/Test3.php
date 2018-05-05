<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Test3 extends CI_Controller
{


    private $perPage = 0;


    /**
     * Get All Data from this method.
     *
     * @return Response
     */
    public function index()
    {
        $this->load->model('MyModel');
        $group_id=6;
        $pageNo=0;
        $data = $this->MyModel->getAssignments($group_id, $this->session->userdata('user_id'),$pageNo);
    }

    function take($data1){
        $data1['c']=3;
    }
}

