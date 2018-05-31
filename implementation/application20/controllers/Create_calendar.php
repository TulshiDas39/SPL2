<?php
/**
 * Created by PhpStorm.
 * User: joysa
 * Date: 4/28/2018
 * Time: 12:51 AM
 */

class Create_calendar extends CI_Controller
{
   public  function index()
   {
       $this->load->view('calendar');
   }
}