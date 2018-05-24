<?php
/**
 * Created by PhpStorm.
 * User: joysa
 * Date: 5/24/2018
 * Time: 11:52 AM
 */

class Gethelp extends CI_Controller
{

    public function index()
    {
        $this->load->view('user/help');
    }
    public function callAbout()
    {
        $this->load->view('user/About_management');
    }
    public function callWork()
    {
        $this->load->view('user/About_management_work');
    }
    public function callGroup()
    {
        $this->load->view('user/About_management_Group');
    }
    public function callSubmission()
    {
        $this->load->view('user/About_management_submission');
    }
    public function callPost()
    {
        $this->load->view('user/About_management_post');
    }
    public function callCreate_group()
    {
        $this->load->view('user/About_management_createGroup');
    }
    public function callCreate_assignment()
    {
        $this->load->view('user/About_management_assignment');
    }
    public function callCheck_plagiarism()
    {
        $this->load->view('user/About_management_Plagiarism');
    }
    public function callFeatures()
    {
        $this->load->view('user/About_management_features');
    }

}