<?php
class Blog extends CI_Controller
{
	public function index()
	{
		$this->load->Model('authenticate');
		$data =$this->authenticate->getData();
		print_r($data);
       $this->load->view('blog_index');

	}
	public function add()
	{
		echo "Welcome to my page";
	}
}