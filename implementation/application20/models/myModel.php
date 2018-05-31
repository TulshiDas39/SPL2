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
    $this->load->library('session');

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


        $sql = "SELECT * FROM  groups  where groups.group_id in (SELECT student_group.group_id FROM  student_group where student_group.user_id =".$user_id.") ";
//      $sql = "SELECT grops.*,user.user_name FROM  groups  where group_id in (SELECT group_id FROM  student_group where user_id ='".$user_id."') inner join user on groups ";
           $query =  $this->db->query($sql);
        $data['groups'] =  $query->result();
        $sql2 = "SELECT user.firstName,user.lastName,user.user_id from user where user.user_id in(SELECT  groups.user_id from groups where groups.group_id in (SELECT student_group.group_id FROM  student_group where student_group.user_id ='".$user_id."'))";
        $query2 = $this->db->query($sql2);
        $data['instructors'] = $query2->result();

        return $data;
    }

    function getAssignments($group_id,$user_id,$start,$limit){

       /* $sql = "SELECT posts.* ,user.firstName, user.lastName FROM posts,user  WHERE (posts.user_id = user.user_id AND posts.group_id = '".$group_id."')
        ORDER BY date DESC  LIMIT ".$limit." OFFSET ".$start." ";*/
        $sql = "SELECT posts.* ,user.firstName, user.lastName FROM posts,user  WHERE (posts.user_id = user.user_id AND posts.group_id = ".$group_id.") 
        ORDER BY date DESC  LIMIT ".$limit." OFFSET ".$start;


       /* $sql2 = "SELECT posts.post_id, assignments.*,submissions.date_time  FROM posts,assignments,submissions
                      WHERE (posts.post_id = assignments.post_id AND posts.group_id = '".$group_id."' AND 
                      submissions.post_id = posts.post_id AND submissions.user_id='".$user_id."') ORDER BY posts.date DESC  LIMIT ".$limit." OFFSET ".$start." ";*/

        $sql2 = "SELECT posts.post_id, assignments.*,submissions.date_time  FROM posts,assignments,submissions  
                      WHERE (posts.post_id = assignments.post_id AND posts.group_id = ".$group_id." AND 
                      submissions.post_id = posts.post_id AND submissions.user_id= ".$user_id.") ORDER BY posts.date DESC  LIMIT ".$limit." OFFSET ".$start;



        $query = $this->db->query($sql);
        /*if(!$query->num_rows()) return false;*/
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

    function get_submissionInfo($post_id){
        $sql = "select submissions.*, user.firstName, user.lastName from submissions,user where submissions.post_id = '".$post_id."' and submissions.user_id = user.user_id order by submissions.date_time asc";
        $query = $this->db->query($sql);
        /*$result =  $query->num_rows();*/

       /* $result = $this->db->get('table_name')->num_rows();*/
        $result['submissions'] = $query->result();
        $sql1 = "select due, mark_published from assignments where post_id = '".$post_id."'";

        $query1 = $this->db->query($sql1);
        $result['due'] = $query1->result();
        return $result;
    }


    function get_classes_of_teacher($user_id){
        $sql = "select * from groups where user_id= ".$user_id."  order by year desc ";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }



    function insert_post($group_id,$topic,$description,$file,$user_id,$type){


        /*$this->db->where('',$filed1);
        $this->db->where('filed2',$filed2);
        $result = $this->db->get('table_name')->num_rows();*/

        $this->db->set('group_id', $group_id);
        $this->db->set('title', $topic);
        $this->db->set('description', $description);
        $this->db->set('file', $file);
        $this->db->set('user_id',$user_id);
        $this->db->set('type',$type);
        $this->db->insert('posts');
        $post_id = $this->db->insert_id();
        return $post_id;

    }

   function get_newPostId(){
       $this->db->select_max('post_id');
       $this->db->from('acl_menu');
       $query = $this->db->get();
       $r=$query->result();
   }

   function store_assignmentInfo($post_id,$format,$due){
       $this->db->set('post_id', $post_id);
       $this->db->set('format', $format);
       $this->db->set('due', $due);
       $this->db->insert('assignments');
   }

   function get_insertedPost($post_id ,$group_id,$user_id){


       $sql = "SELECT posts.* ,user.firstName, user.lastName FROM posts,user  WHERE (posts.post_id = ".$post_id." AND posts.user_id = user.user_id AND group_id = '".$group_id."') 
        ORDER BY date DESC  LIMIT 1 OFFSET 0 ";

       $sql2 = "SELECT posts.post_id, assignments.due,submissions.date_time  FROM posts,assignments,submissions  
                      WHERE (posts.post_id = ".$post_id." AND posts.post_id = assignments.post_id AND posts.group_id = '".$group_id."' AND 
                      submissions.post_id = posts.post_id AND submissions.user_id='".$user_id."') ORDER BY posts.date DESC  LIMIT 1 OFFSET 0 ";
       $query = $this->db->query($sql);
       $data['posts'] = $query->result();
       $query = $this->db->query($sql2);
       $data['assignments'] = $query->result();
       return $data;

   }

   function delete_post($id){
        $sql = "select type from posts where post_id = ".$id." ";
        $query = $this->db->query($sql);
        $result = $query->result();
        if($result[0]->type == '1'){
            $this -> db -> where('post_id', $id);
            $this -> db -> delete('assignments');

        }
       $this -> db -> where('post_id', $id);
       $this -> db -> delete('posts');
   }

    function edit_post_table($topic, $description, $attachment, $edit_postId){
        $data['title'] = $topic;
        $dt = new DateTime();
        $now = $dt->format('Y-m-d H:i:s');
        $data['date'] = $now ;
        $data['description'] = $description;
        $data['edited'] = 1;
        if($attachment != '0') $data['file'] = $attachment;
        $this->db->where('post_id', $edit_postId);
        $this->db->update('posts', $data);
    }

    function update_mark($post_id,$user_id,$mark){
        $data['mark'] = $mark;
        $this->db->where('post_id', $post_id);
        $this->db->where('user_id',$user_id);
        $this->db->update('submissions',$data);
    }

    function get_submittedFiles($post_id){
        $this->db->select('due');
        $this->db->where('post_id',$post_id);
        $query = $this->db->get('assignments');
        $result = $query->result();

        /*$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);*/
        $array = array('post_id' => $post_id, 'date_time<' => $result[0]->due);

        $this->db->select('path,file_name');
        $this->db->where($array);
        $query = $this->db->get('submissions');
        $result = $query->result();
        return $result;

    }

    function get_lateSubmittedFiles($post_id){
        $this->db->select('due');
        $this->db->where('post_id',$post_id);
        $query = $this->db->get('assignments');
        $result = $query->result();

        /*$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);*/
        $array = array('post_id' => $post_id, 'date_time>' => $result[0]->due);

        $this->db->select('path,file_name');
        $this->db->where($array);
        $query = $this->db->get('submissions');
        $result = $query->result();
        return $result;
    }

    function get_allSubmittedFiles($post_id){
        $this->db->select('due');
        $this->db->where('post_id',$post_id);
        $query = $this->db->get('assignments');
        $result = $query->result();

        /*$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);*/
        $array = array('post_id' => $post_id);

        $this->db->select('path,file_name');
        $this->db->where($array);
        $query = $this->db->get('submissions');
        $result = $query->result();
        return $result;
    }

    function getStudentInfo($group_id){

        $sql = "select user.firstName,user.lastName, student_group.user_id from user,student_group where student_group.group_id = '".$group_id."' and user.user_id = student_group.user_id ";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;

    }


    function addUser($data){
        $this->db->insert('user',$data);
        $user_id = $this->db->insert_id();
        return $user_id;
    }

    function addGroup($course_name,$semister){
        $date = date("Y");
        $code = $this->randomString(6);
        while ($this->match_code($code)){
            $code = $this->randomString(6);
        }
        $user_id = $this->session->userdata('user_id');

        $data= array(
            "subject"   => $course_name,
            "section"   => $semister,
            "user_id"   => $user_id,
            "year"   => $date,
            "code" => $code
        );
        $this->db->insert('groups',$data);
        $group_id = $this->db->insert_id();

        $this->db->set('type','i');
        $this->db->where('user_id', $user_id);
        $this->db->update('user');

        return $group_id;
    }

    function addToGroup($code){
        $this->db->select('group_id');
        $this->db->where('code', $code);
        $this->db->from('groups');
        $query = $this->db->get();
        $result = $query->result();
        $group_id = $result[0]->group_id;
        $user_id = $this->session->userdata('user_id');
        $this->db->set('user_id',$user_id);
        $this->db->set('group_id',$group_id);
        $this->db->insert('student_group');

        $this->db->set('type','s');
        $this->db->where('user_id', $user_id);
        $this->db->update('user');
        return $group_id;
    }

    function update_publish($post_id){

        $this->db->set('mark_published',1);
        $this->db->where('post_id', $post_id);
        $this->db->update('assignments');
    }

    function update_teacherName($firstName,$lastName){
        $user_id = $this->session->userdata('user_id');
        $this->db->set('firstName',$firstName);
        $this->db->set('lastName',$lastName);
        $this->db->where('user_id', $user_id);
        $this->db->update('user');
        return $user_id;
    }

    function update_teacherEmail($email){
        $user_id = $this->session->userdata('user_id');

        $this->db->where('email',$email);
        $query = $this->db->get('user');
        $row = $query->num_rows();
        if ($row <= 0){
            $this->db->set('email',$email);
            $this->db->where('user_id', $user_id);
            $this->db->update('user');
            return true;
        }
        else{
            return false;
        }
    }

   function update_teacherPassword($password,$oldPassword){
       $user_id = $this->session->userdata('user_id');

       $this->db->where('password',$oldPassword);
       $this->db->where('user_id',$user_id);
       $query = $this->db->get('user');
       $row = $query->num_rows();
       if ($row > 0){
           $this->db->set('password',$password);
           $this->db->where('user_id', $user_id);
           $this->db->update('user');
           return true;
       }
       else{
           return false;
       }

   }

   function update_teacherPhonenumber($phone_number){
       $user_id = $this->session->userdata('user_id');
       $this->db->set('phone_number',$phone_number);
       $this->db->where('user_id', $user_id);
       $this->db->update('user');
   }

   function update_studentName($firstName,$lastName){
       $user_id = $this->session->userdata('user_id');
       $this->db->set('firstName',$firstName);
       $this->db->set('lastName',$lastName);
       $this->db->where('user_id', $user_id);
       $this->db->update('user');
   }

   function update_studentEmail($email){
       $user_id = $this->session->userdata('user_id');

       $this->db->where('email',$email);
       $query = $this->db->get('user');
       $row = $query->num_rows();
       if ($row <= 0){
           $this->db->set('email',$email);
           $this->db->where('user_id', $user_id);
           $this->db->update('user');
           return true;
       }
       else{
           return false;
       }

   }

   function update_studentPassword($password,$oldPassword){
       $user_id = $this->session->userdata('user_id');

       $this->db->where('password',$oldPassword);
       $this->db->where('user_id',$user_id);
       $query = $this->db->get('user');
       $row = $query->num_rows();
       if ($row > 0){
           $this->db->set('password',$password);
           $this->db->where('user_id', $user_id);
           $this->db->update('user');
           return true;
       }
       else{
           return false;
       }

   }


   function update_studentPhonenumber($phone_number){
       $user_id = $this->session->userdata('user_id');
       $this->db->set('phone_number',$phone_number);
       $this->db->where('user_id', $user_id);
       $this->db->update('user');
   }

   function update_groupName($course,$code){
       $user_id = $this->session->userdata('user_id');

       $this->db->where('code',$code);
       $this->db->where('user_id',$user_id);
       $query = $this->db->get('groups');
       $row = $query->num_rows();
       if ($row > 0){
           $this->db->set('subject',$course);
           $this->db->where('user_id', $user_id);
           $this->db->update('groups');
           return true;
       }
       else{
           return false;
       }
   }

   function update_semisterName($semister,$code){
       $user_id = $this->session->userdata('user_id');

       $this->db->where('code',$code);
       $this->db->where('user_id',$user_id);
       $query = $this->db->get('groups');
       $row = $query->num_rows();
       if ($row > 0){
           $this->db->set('section',$semister);
           $this->db->where('user_id', $user_id);
           $this->db->update('groups');
           return true;
       }
       else{
           return false;
       }
   }



    function randomString($length){
        return bin2hex(openssl_random_pseudo_bytes($length));
    }

    function match_code($code){

       $this->db->where('code',$code);
        $query = $this->db->get('groups');
        $row = $query->num_rows();
        if ($row > 0){
            return true;
        }
        else{
            return false;
        }
    }

    function validate_login($email,$password){
        $this->db->where('email',$email);
        $query = $this->db->get('user');
        $row = $query->num_rows();
        if ($row > 0){
           $value =  $this->check_password($email,$password);
           return $value;
        }
        else{
            return false;
        }
    }

    function check_password($email,$password){
        $this->db->select('type,password,user_id');
        $this->db->where('email', $email);
        $this->db->from('user');
        $query = $this->db->get();
        $result = $query->result();
        $password1 = $result[0]->password;
        if($password == $password1) return $result;
        else return false;
    }


    public function validate_email($email)
    {
        $q= $this->db
            ->where('email',$email)
            ->get('user');

        if($q->num_rows())
        {
            return true;
        }
        else
            return false;
    }


   function getStudentProfile($user_id){
       /* $this->db->select('*');
       $this->db->from('user');
        $this->db->where('user_id',$user_id);
       $query = $this->db->get();
       $result = $query->result();*/
      /* $this->db->where('user_id',$user_id);
        $result = $this->db->get('user');*/
        /*$result = $query->result();*/

       /*$this->db->select('*');
       $this->db->from('magazzino');
       $this->db->where('quantita>', 'alerts');
       $query = $this->db->get();*/


       /*$sql = "select * from user where user_id = ".$user_id;
       $query = $this->db->query($sql);
       $result = $query->result();*/

       /*$this->db->select('*');
       $this->db->where('user_id', $user_id);
       $this->db->from('user');
       $query = $this->db->get();
       $result = $query->result();

       return $result;*/

   }

   function getGroupInfo($group_id) {
       $this->db->select('*');
       $this->db->where('group_id', $group_id);
       $this->db->from('groups');
       $query = $this->db->get();
       $result = $query->result();

       $this->db->select('firstName,lastName');
       $this->db->where('user_id', $result[0]->user_id);
       $this->db->from('user');
       $query = $this->db->get();
       $result1 = $query->result();
       $data['group']= $result;
       $data['firstName'] = $result1[0]->firstName;
       $data['lastName'] = $result1[0]->lastName;

       return $data;
   }



}

