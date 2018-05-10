<?php
$query= $this->db
    ->where('notification_id',$id)
    ->get('notification');
  if($query->num_rows()>0)
    {
        foreach ($query->result_array() as $q)
        {
            echo q['name']."  post an ".q['message'];
        }
    }
?>