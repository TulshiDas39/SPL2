<?php
/**
 * Created by PhpStorm.
 * User: joysa
 * Date: 4/1/2018
 * Time: 9:00 PM
 */

class Register extends CI_Controller
{
    public function index(){
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->view('register');
    }

}