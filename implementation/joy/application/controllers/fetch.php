<?php
 if(isset($_POST["view"]))
 {
     $query= $this->db
         ->order_by('comment_id','desc')
         ->LIMIT(5)
         ->get('comment');
     $output='';
     if($query->num_rows()>0)
     {
          foreach ($query->result_array() as $q)
          {
              $output='
              <li>
              <a href="#">
                 <strong>$q["comment_subject"]</strong><br/>
                 <small><em>$q["comment_text"]</em></small>
                 
               </a>
               </li>
              ';
               
          }
     }
     else
     {
         $output='
         <li><a href="#">No Notification found</a></li>
         ';
     }
     $query1= $this->db
         ->where('status',1)
         ->get('comment');
     $count=$query1->num_rows();
     $data=array(
         'notification'=>$output,
         'unseen_notification'=>$count
     );
     echo json_encode($data);

 }
 
?>