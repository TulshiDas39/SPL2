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
        $this->load->database();
        $this->load->view('login_view2');

    }

}

