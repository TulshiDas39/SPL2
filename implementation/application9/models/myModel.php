<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyModel extends CI_Model {

var $title   = '';
var $content = '';
var $date    = '';

private   $perPage = 0;

function __construct()
{
// Call the Model constructor
    parent::__construct();
    $this->load->database();

}

    /**
     *
     */
    function index(){
        echo "it works";
    }

    /**
     * @param $user_id
     * @param $row_count
     * @param $ofset
     * @return
     */
    function getClasses($user_id){


        $sql = "SELECT * FROM  groups  where group_id in (SELECT group_id FROM  student_group where user_id ='".$user_id."') ";
//      $sql = "SELECT grops.*,user.user_name FROM  groups  where group_id in (SELECT group_id FROM  student_group where user_id ='".$user_id."') inner join user on groups ";
           $query =  $this->db->query($sql);
        $data['groups'] =  $query->result();
        $sql2 = "SELECT firstName,lastName,user_id from user where user_id in(SELECT  user_id from groups where group_id in (SELECT group_id FROM  student_group where user_id ='".$user_id."'))";
        $query2 = $this->db->query($sql2);
        $data['instructors'] = $query2->result();

        return $data;
    }

    function getAssignments($group_id,$user_id,$start){

        $sql = "SELECT posts.* ,user.firstName, user.lastName FROM posts,user  WHERE (posts.user_id = user.user_id AND group_id = '".$group_id."') 
        ORDER BY date DESC  LIMIT 5 OFFSET ".$start." ";
       /* $sql1 = "SELECT posts.post_id, assignments.due  FROM posts,assignments  WHERE (posts.post_id = assignments.post_id)
                                        ORDER BY posts.date DESC  LIMIT 5 OFFSET ".$start." ";*/
        $sql2 = "SELECT posts.post_id, assignments.due,submissions.date_time  FROM posts,assignments,submissions  
                      WHERE (posts.post_id = assignments.post_id AND posts.group_id = '".$group_id."' AND 
                      submissions.post_id = posts.post_id AND submissions.user_id='".$user_id."') ORDER BY posts.date DESC  LIMIT 5 OFFSET ".$start." ";
        $query = $this->db->query($sql);
        $data['posts'] = $query->result();
        $query = $this->db->query($sql2);
        $data['assignments'] = $query->result();
      /*  echo "<script  type='text/javascript'> alert($start);</script>"; */
        return $data;

    }

    function getSubmissionDate($post_id,$user_id){
       $sql = "select date_time from submissions where post_id = '".$post_id."' AND user_id = '".$user_id."' ORDER BY date_time DESC  ";
       $query =  $this->db->query($sql);
       /*$data['submission_date'] = $query->result();*/
        $data['date'] = $query->result();
        $data['count'] = $query->num_rows();
       return $data;
    }

    function insertIntoSubmissions($post_id,$path,$file_name){

        $user_id = $this->session->userdata('user_id');
        $this->db->set('user_id', $user_id);
        $this->db->set('post_id', $post_id);
        $this->db->set('path', $path);
        $this->db->set('file_name', $file_name);
        $this->db->insert('submissions');
        /*$date = date();
        $due = $this->get("due","assignments","post_id",$post_id);
        if($date<= $due){
            return "DONE";
        }
        else{
            return "LATE DONE";
        }*/

        /*$due = $this->get("due","assignments","post_id",$post_id);*/

       $sql = "SELECT IF(assignments.due < NOW(),TRUE,FALSE) as isExpired FROM assignments where assignments.post_id = '".$post_id."' ";
       $query = $this->db->query($sql);
       $result = $query->result();
       $status = $result[0]->isExpired;
       if($status){
           return "LATE DONE";
       }
       return "DONE";

    }

    function get($target,$table,$key,$keyVal)
    {
        $sql = "select ".$target." from ".$table." where ".$key." = ".$keyVal." ";
        $query = $this->db->query($sql);
        $data = $query->result();



        return $data;
    }

    /*function get_last_ten_entries()
    {
    $query = $this->db->get('entries', 10);
    return $query->result();
    }

    function insert_entry()
    {
    $this->title   = $_POST['title']; // please read the below note
    $this->content = $_POST['content'];
    $this->date    = time();

    $this->db->insert('entries', $this);
    }

    function update_entry()
    {
    $this->title   = $_POST['title'];
    $this->content = $_POST['content'];
    $this->date    = time();

    $this->db->update('entries', $this, array('id' => $_POST['id']));
    }*/

}

