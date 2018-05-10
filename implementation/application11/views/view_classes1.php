<!DOCTYPE html>

<html>
<head>
    <style type="text/css">
        .posts{
            background: #6c757d;
            height: 10em;
            width: 100%;
        }
        .classes{
            text-align: center;
            text-decoration: none;
            color: white;
        }

    </style>

</head>


<body>
<?php foreach($groups as $index=> $group ){ ?>
    <div  class="posts">
    <!--<h2 align="center"><a href="" class = "classes"><?php /*echo $group->subject */?></a></h2>-->
       <h2 align="center"> <?php echo anchor('Student1/enter_group/'.$group->group_id,$group->subject, array('class' => 'classes', 'id' => '')); ?> </h2>
    <h3 class="classes"><?php echo $groups[$index]->section ?></h3>

                <h4 class="classes"><?php echo $groups[$index]->year ?> </h4>

	<div class="text-right">
		<button class="btn btn-success">Read More</button>
	</div>
	<hr style="margin-top:5px;">
    </div>
    <br>
<?php } ?>
</body>
</html>