<!DOCTYPE html>

<html>
<head>
    <style type="text/css">
        .posts{
            background: #6c757d;
            height: 10em;
            /*width: 80%;*/
            margin-left: 10%;
            margin-right: 10%;
        }
        .classes{
            text-align: center;
            text-decoration: none;
            color: white;
        }


    </style>

</head>


<body >
<?php foreach($groups as $index=> $group ){ ?>
    <div  class="posts">
    <!--<h2 align="center"><a href="" class = "classes"><?php /*echo $group->subject */?></a></h2>-->
    <!--<h2 align="center"> <?php /*echo anchor('localhost/SPL/index.php/Student1/enter_group/'.$group->group_id, $group->subject, array('class' => 'classes', 'id' => '')); */?> </h2>-->
    <h2 align="center" > <a href="http://localhost/SPL/index.php/Student1/enter_group/<?php echo $group->group_id?>" class="classes"><?php echo $group->subject?></a> </h2>
        <h3 class="classes"><?php echo $groups[$index]->section ?></h3>
        <?php foreach ($instructors as $instructor){
            if ($instructor->user_id == $groups[$index]->user_id){ ?>
                <h4 class="classes"><?php echo $instructor->firstName."  ".$instructor->lastName ?> </h4>
             <?php break;
            }
         } ?>
	<!--<hr style="margin-top:5px;">-->
    </div>
    <br>
<?php } ?>
</body>
</html>