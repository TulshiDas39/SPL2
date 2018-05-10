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
     * Get All Data from this meth
     *
     * @return Response
     */
    public function index()
    {
        $this->load->model('MyModel');
    /*  $data =  $this->db->order_by("")->get("assignment");*/
        $this->db->from("groups");
        $this->db->order_by("year", "desc");
        $query = $this->db->get();
        $result = $query->result();
        echo $result[0]->user_id;
    }





}

