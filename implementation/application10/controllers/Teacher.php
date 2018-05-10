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
        $j=0;
        for($i=0;$i<sizeof($data['posts']);$i++){
            if($data['posts'][$i]->type =='1')  {


                $submission_date = $this->MyModel->getSubmissionDate($data['posts'][$i]->post_id, $this->session->userdata('user_id'));
                $due[$j] =  $this->MyModel->get("due","assignments","post_id",$data['posts'][$i]->post_id);

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
                        /*$icon_color[$j]="green";*/
                       /* echo "<script type='text/javascript'>alert('hello');</script>";*/
                    }
                    else if ($submission_date['date'][0]->date_time > $due[$j][0]->due){
                        $type[$j] = "LATE DONE";
                       /* $icon_color[$j]="red";*/
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
        $this->load->view('teacherPage');
        //$data['groups'] = $this->MyModel->getClasses($user_id);
        $data['groups'] = $this->MyModel->get_classes_of_teacher($user_id);
        $this->load->view('view_classes1',$data);
    }

    function enter_group($group_id){
        /*echo $user_id." ".$group_id;
        $this->load->view('studentPage');
        echo "entered";*/





        /*echo "<script>alert('') </script>";*/
       /* $user_id = 5;*/
        // $this->load_groups($id);
        $user_id = 5;
        $this->load->model('MyModel');
        //  $this->enter_group(6);
        $this->session->set_userdata('user_id', $user_id);
        $this->session->set_userdata('group_id', $group_id);
        /*$group_id = 6;*/
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






        /* $pageNo = $this->input->get("page");
         if(!empty($pageNo)){
             echo "<script> alert(page);</script>";
             $data = $this->MyModel->getAssignments($group_id,$pageNo);
             $result = $this->load->view('data4', $data);
             echo json_encode($result);

         }

         else{
             $this->load->view('studentPage');
             $data['posts'] = $this->MyModel->getAssignments($group_id,0);
             $this->load->view('myPost1', $data);

         }*/
    }


}