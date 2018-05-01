<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Test extends CI_Controller {


    private $perPage = 0;


    /**
     * Get All Data from this method.
     *
     * @return Response
     */
    public function index()
    {
       $this->load->database();
        $this->load->model('MyModel');
        $this->load->view('teacherPage');

        /* //$count = $this->db->get('posts')->num_rows();
         $this->MyModel->index();
         $classes = $this->MyModel->getClasses(5);
         //$sql = "SELECT * FROM groups ";
         //$query =  $this->db->query($sql);
         //$classes = $query->result();
         foreach ($classes as $class){
             echo $class->subject."\n";
         }*/

        //  $this->load->view('test_view');
		
		//$this->load->view('studentPage');
     /*   $pageNo = $this->input->get("page");
        if(!empty($pageNo)){


           // $start = ceil($this->input->get("page") * $this->perPage);
            $query = $this->db->limit(5, $pageNo)->order_by('date','desc')->get("assignment");
            $data['assignments'] = $query->result();
            $firstNames = array();
            $lastNames = array();
            for ($i=0;$i<sizeof($data['assignments']);$i++){
                $firstNames[$i] = $this->MyModel->get("firstName","user","user_id",$data['assignments'][$i]->user_id);
                $lastNames[$i] = $this->MyModel->get("lastName","user","user_id",$data['assignments'][$i]->user_id);
                echo $firstNames[$i][0]->firstName;
            }
            $data['firstName'] = $firstNames;
            $data['lastName'] = $lastNames;

           //  $this->view(echo sizeof($data););
            echo "has come has come";
            $result = $this->load->view('data3', $data);
            echo json_encode($result);


        }*/
     /*  else{
           $this->load->view('studentPage');
            $query = $this->db->limit(5, 0)->order_by('date','desc')->get("assignment");
            $query = $this->db->limit(5, 0)->get("posts");
            $data['assignments'] = $query->result();


            $firstNames = array();
            $lastNames = array();
            for ($i=0;$i<sizeof($data['assignments']);$i++){
                $firstNames[$i] = $this->MyModel->get("firstName","user","user_id",$data['assignments'][$i]->user_id);
                $lastNames[$i] = $this->MyModel->get("lastName","user","user_id",$data['assignments'][$i]->user_id);
                echo $firstNames[$i][0]->firstName;
            }
            $data['firstName'] = $firstNames;
            $data['lastName'] = $lastNames;

            $this->load->view('myPost', $data);
        }*/


      // $group_id = 6;
       //echo "againagainagainagainagainagainagain";

       //$this->show_post($group_id);

    }

    function show_post($group_id){
        $this->load->database();
        $this->load->model('MyModel');
      //  $data = $this->MyModel->getClasses($group_id);

        // $count = $this->db->get('posts')->num_rows();
        $this->load->view('studentPage');
        $pageNo = $this->input->get("page");
        echo "againagainagainagainagainagainagain";
        $start = ceil($this->input->get("page") * $this->perPage);
        //
        echo $start;
       // $query = $this->db->limit($start, $this->perPage)->get("assignment");
        //$data['posts'] = $query->result();

        $data = $this->MyModel->getAssignments($group_id,$start);
        $result = $this->load->view('data2', $data);
        echo json_encode($result);

    }

    function test_link(){
        echo "it is fine";
    }


}