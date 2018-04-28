<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyModel extends CI_Model {

var $title   = '';
var $content = '';
var $date    = '';

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

