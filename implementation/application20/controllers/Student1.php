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

                if($submission_date['count']<=0){
                    $type[$j] = "NOT DONE";
                    $button_text[$j] = "Submit";

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
        return $data1;
    }


    function load_groups($user_id){
        $this->load->model('MyModel');
        $user_id = $this->session->userdata('user_id');
        $user_name=$this->MyModel->get('firstName','user','user_id',$user_id);
        $name['user_name']=$user_name;
        $this->load->view('view_groups',$name);
        $data = $this->MyModel->getClasses($user_id);


        $this->load->view('view_classes',$data);
    }

    function enter_group($group_id){

        $this->session->set_userdata('group_id',$group_id);
        $pageNo = $this->input->get("page");
        $user_id = $this->session->userdata('user_id');
        $this->load->model('MyModel');
        $user_name=$this->MyModel->get('firstName','user','user_id',$user_id);
        if(!empty($pageNo)){
            $data = $this->MyModel->getAssignments($group_id, $user_id,$pageNo,5);
            if(!$data){
                echo false;
                return ;
            }
            $data1 = $this->get_button_text($data);
            $data['button'] = $data1['button'];
            $data['type'] = $data1['type'];
            $data['due'] = $data1['due'];
            $result = $this->load->view('data4', $data);
            echo json_encode($result);
        }

        else{

            $group_info = $this->MyModel->get("*","groups","group_id",$group_id);
            $group_name = $group_info[0]->subject;
            $data = $this->MyModel->getAssignments($group_id,$user_id,0,5);
            $data1 = $this->get_button_text($data);
            $data['button'] = $data1['button'];
            $data['type'] = $data1['type'];
            $data['due'] = $data1['due'];
            $data['group_name'] =  $group_name;
            $data['group_id'] = $group_id;
            $data['groupInfo'] = $group_info;
            $data['user_name']=$user_name;
            $this->load->view('myPost1', $data);
        }

    }

    function join_group()
    {

        $code = $this->input->post('code');

        $this->load->model('myModel');

            $value = $this->myModel->match_code($code);

            if($value){
                 $group_id = $this->myModel->addToGroup($code);
                 echo "http://localhost/SPL/index.php/Student1/enter_group/".$group_id;
            }
            else{
                echo false;
            }
    }




}