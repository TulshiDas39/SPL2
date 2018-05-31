<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Teacher extends CI_Controller {


    private $perPage = 0;
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');

    }

    /**
     * Get All Data from this method.
     *
     * @return Response
     */
    public function index()
    {
       /* $this->load_groups();*/

    }





    function show_assignments(){

        $user_id = 5;
        // $this->load_groups($id);

        $this->load->model('MyModel');
        //  $this->enter_group(6);
        $this->session->set_userdata('user_id', $user_id);
        $this->session->set_userdata('group_id', 6);
        $group_id = 6;
        $pageNo = $this->input->get("page");

        if(!empty($pageNo)){
            /*  echo "<script type='text/javascript'>alert('submitted successfully!')</script>";*/
            /* echo "<script type='text/javascript'>alert(page)</script>";*/
            $data = $this->MyModel->getAssignments($group_id, $this->session->userdata('user_id'),$pageNo);
            $data1 = $this->get_button_text($data);
            $data['button'] = $data1['button'];
            $data['type'] = $data1['type'];
            $data['due'] = $data1['due'];

            /* $data['icon_color']= $data1['icon_color'];*/
            $result = $this->load->view('data4', $data);
            echo json_encode($result);
        }

        else{

            $this->load->view('studentPage');
            $data = $this->MyModel->getAssignments($group_id,$this->session->userdata('user_id'),0);
            $data1 = $this->get_button_text($data);
            $data['button'] = $data1['button'];
            $data['type'] = $data1['type'];
            $data['due'] = $data1['due'];
            /* $data['icon_color']= $data1['icon_color'];*/
            $this->load->view('myPost1', $data);

        }


    }


    /**
     * @param $data
     * @return array
     */
    function get_button_text($data){

        $data1=array();
        $type=array();
        $button_text=array();
        $due = array();
        $icon_color = array();
        $format = array();
        $j=0;
        for($i=0;$i<sizeof($data['posts']);$i++){
            if($data['posts'][$i]->type =='1')  {

               /* $format[$j] = $data['assignments'][$j]->format;*/

                $submission_date = $this->MyModel->getSubmissionDate($data['posts'][$i]->post_id, $this->session->userdata('user_id'));
                $due[$j] =  $this->MyModel->get("*","assignments","post_id",$data['posts'][$i]->post_id);

                if($submission_date['count']<=0){
                    $type[$j] = "NOT DONE";
                    /*$button_text[$j] = "Submit";*/
                    $button_text[$j] = "Submit";
                    /*$icon_color[$j]="red";*/

                }

                else{

                    $button_text[$j] = "Resubmit";
                    if($submission_date['date'][0]->date_time <= $due[$j][0]->due){
                        $type[$j] = "DONE";

                    }
                    else if ($submission_date['date'][0]->date_time > $due[$j][0]->due){
                        $type[$j] = "LATE DONE";

                    }
                }
                $j++;
            }
        }
        $data1['button'] = $button_text;
        $data1['type'] = $type;
        $data1['due'] = $due;



        return $data1;
    }







    function load_groups($user_id){
        $this->load->model('MyModel');
        $user_id = $this->session->userdata('user_id');
        $user_name=$this->MyModel->get('firstName','user','user_id',$user_id);
        $name['user_name']=$user_name;
        $this->load->view('header3',$name);
        //$data['groups'] = $this->MyModel->getClasses($user_id);
        $data['groups'] = $this->MyModel->get_classes_of_teacher($user_id);
        $data['user_name']=$user_name;
        $this->load->view('view_classes1',$data);
    }

    function enter_group($group_id){

        $this->load->model('MyModel');
        $this->session->set_userdata('group_id', $group_id);
        $pageNo = $this->input->get("page");
        $user_id = $this->session->userdata('user_id');/*$this->session->userdata('user_id');*/
        $user_name=$this->MyModel->get('firstName','user','user_id',$user_id);
        if(!empty($pageNo)){

            $data = $this->MyModel->getAssignments($group_id,$user_id ,$pageNo,5);
            if(!$data){
                echo false;
                return ;
            }
            $data1 = $this->get_button_text($data);
            $data['button'] = $data1['button'];
            $data['type'] = $data1['type'];
            $data['due'] = $data1['due'];

            $result = $this->load->view('data6', $data);
            echo json_encode($result);
        }

        else{
            $data = $this->MyModel->getAssignments($group_id,$this->session->userdata('user_id'),0,5);
            if(!$data){
                echo false;
                return ;
            }
            $group_info = $this->MyModel->get("*","groups","group_id",$group_id);
            $group_name = $group_info[0]->subject;
            $data1 = $this->get_button_text($data);
            $data['button'] = $data1['button'];
            $data['type'] = $data1['type'];
            $data['due'] = $data1['due'];
            $data['group_name'] =  $group_name;
            $data['group_id'] = $group_id;
            $data['groupInfo'] = $group_info;
            $data['user_name']=$user_name;
            $this->load->view('myPost2', $data);

        }

    }


    function create_group(){
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('course_name','Course Name','required');
        $this->form_validation->set_rules('semister','Semister','required');

        if($this->form_validation->run()!=true)
        {
            /*$this->load->view('user/register');*/
            $this->load->view('login_view2');
        }

        else{
            $this->load->model('myModel');
            /*$this->session->set_userdata('user_id',12);*/
            $course_name = $this->input->post("course_name");
            $semister = $this->input->post("semister");
            $group_id = $this->myModel->addGroup($course_name,$semister);
            $this->enter_group($group_id);


        }

    }


}