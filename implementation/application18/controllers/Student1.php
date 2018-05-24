<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Student1 extends CI_Controller {


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
        /*$user_id = 5;

        $this->load->model('MyModel');
        $this->session->set_userdata('user_id', $user_id);
        $this->session->set_userdata('group_id', 6);
        $group_id = 6;
        $pageNo = $this->input->get("page");

        if(!empty($pageNo)){
            $data = $this->MyModel->getAssignments($group_id, $this->session->userdata('user_id'),$pageNo);
            $data1 = $this->get_button_text($data);
            $data['button'] = $data1['button'];
            $data['type'] = $data1['type'];
            $data['due'] = $data1['due'];
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
            $this->load->view('myPost1', $data);

        }*/

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
        $j=0;
        for($i=0;$i<sizeof($data['posts']);$i++){
            if($data['posts'][$i]->type =='1')  {

                $submission_date = $this->MyModel->getSubmissionDate($data['posts'][$i]->post_id, $this->session->userdata('user_id'));
                $due[$j] =  $this->MyModel->get("*","assignments","post_id",$data['posts'][$i]->post_id);
                echo $due[$j][0]->due." ";

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
        $data1['button']=$button_text;
        $data1['type']= $type;
        $data1['due']= $due;
      /*  $data1['icon_color']= $icon_color;*/
        return $data1;
    }

    function load_groups($user_id){
        $this->load->model('MyModel');
        $this->load->view('studentPage1');
        //$data['groups'] = $this->MyModel->getClasses($user_id);
        $data = $this->MyModel->getClasses($user_id);
        $this->load->view('view_classes',$data);
    }

    function enter_group($group_id){

        $user_id = 5;

        $this->load->model('MyModel');
        $this->session->set_userdata('user_id', $user_id);
        $this->session->set_userdata('group_id', $group_id);
        $pageNo = $this->input->get("page");

        if(!empty($pageNo)){
            $data = $this->MyModel->getAssignments($group_id, $this->session->userdata('user_id'),$pageNo,5);
            $data1 = $this->get_button_text($data);
            $data['button'] = $data1['button'];
            $data['type'] = $data1['type'];
            $data['due'] = $data1['due'];
            $result = $this->load->view('data4', $data);
            echo json_encode($result);
        }

        else{

            /*$this->load->view('studentPage');*/
            $group_info = $this->MyModel->get("subject","groups","group_id",$group_id);
            $group_name = $group_info[0]->subject;
            $data = $this->MyModel->getAssignments($group_id,$this->session->userdata('user_id'),0,5);
            $data1 = $this->get_button_text($data);
            $data['button'] = $data1['button'];
            $data['type'] = $data1['type'];
            $data['due'] = $data1['due'];
            $data['group_name'] =  $group_name;
            $data['group_id'] = $group_id;
            $this->load->view('myPost1', $data);

        }

    }


}