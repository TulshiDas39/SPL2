<!DOCTYPE html>
<html>


<head>
   <!--<link type="text/css" href="/assets/assets/data4.css">-->
    <style>
        .mydiv{
           /* border:1px solid #6c757d;*/
            background: white;
            margin-left: 15%;
            margin-right:15% ;

            text-align: justify;
        }
        .upper{
            height: 50px;
            width: 100%;
            background: #6c757d;
            color: white;
        }

    </style>

</head>
<body>
<?php $i=0; foreach($posts as $post){?>

    <div class="mydiv">
        <div class="upper" style="padding-left: 1%;padding-right: 1%">

            <?php echo $post->firstName." ".$post->lastName." hare krishna"?>
            <span style="padding-left: 67%;color: #9fcdff "><?php if($post->type =='0') echo "Announcement"; else echo "Assignment";?></span><br>
            <?php $date = date_create($post->date); echo date_format($date,"d-M-Y  g:i:s A ");
               ?>
            <br>
        </div>
        <hr style="margin-top:5px;">

        <h3 style="padding-left: 45%"><a href=""><?php echo $post->title ?></a></h3>
        <p style="padding-left: 1%;padding-right: 1%"><?php echo $post->description ?></p>
       <!-- <div class="text-right">
            <button class="btn btn-success">Read More</button>
        </div>-->
    </div>
    <div>
        <p>   <br><br> </p>
    </div>
<?php $i++; } ?>
</body>

</html>
