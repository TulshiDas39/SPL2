<?php

class View extends CI_Controller
{
    public function relate()
    {
        /*$id=$q['notification_id'];*/
        $id=$_GET['id'];
        /*$this->load->view('user/UserView',$id);*/
        $qury=$this->db
            ->where('notification_id',$id)
            ->get('notification');
        if($qury->num_rows()>0)
        {
            if($qury->row()->status==1)
            {
                $updateData=array("status"=>0);
                $this->db->where("notification_id",$id);
                $this->db->update("notification",$updateData);
            }
        }
        $query= $this->db
            ->where('notification_id',$id)
            ->get('notification');
        if($query->num_rows()>0)
        {
            foreach ($query->result_array() as $q)
            {
                echo $q['name']."  post an ".$q['message'];
            }
        }
    }
}