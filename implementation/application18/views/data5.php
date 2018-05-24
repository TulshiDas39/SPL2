

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

<?php $i=0;$assignment=0; $is_submitted=0;

     foreach($posts as $post){ ?>

    <div class="mydiv">
        <div class="upper" style="padding-left: 1%;padding-right: 1%">

            <div style="float: left; height: 100%; width: 50%">
                <?php echo $post->firstName." ".$post->lastName." hare krishna"?><br>
                <?php $date = date_create($post->date); echo date_format($date,"d-M-Y  g:i:s A ");
               ?>
           </div>

          <div style="float: left; height: 100%; width:50%; font-size: large;padding-top: 1%; text-align: right; vertical-align: middle; color: #9fcdff">
            <span id="t<?php echo $post->post_id;?>">  <?php if($post->type =="1"){?>   <?php echo "assignment"; ?> </span> <button id="o<?php echo $post->post_id?>" class="glyphicon glyphicon-option-vertical " style="background: none;border: none"></button><?php } ?>
              <?php if($post->type =="0"){ echo "Announcement"; ?><button id="o<?php echo $post->post_id?>" class="glyphicon glyphicon-option-vertical " style="background: none;border: none"></button><?php } ?>
<!--
              <div class="dropdown-content myDropdown"  id ="drop<?php /*echo $post->id*/?>">
                  <a href="#">Setting</a>
                  <a href="#">Log out</a>
              </div>-->
          </div>


        </div>
        <hr style="margin-top:5px;">
        <?php if($post->type =='1'){ ?>
         <p style="font-size: small"> &nbsp;&nbsp;Due: <?php $date = date_create($post->date); echo date_format($date,"d-M,Y  g:i:s A "); ?> </p>
        <?php } ?>
        <h3 style="padding-left: 45%"><a href=""><?php  echo $post->title ?></a></h3>
        <p style="padding-left: 1%;padding-right: 1%"><?php echo $post->description ?></p>
        <hr style="margin-top:5px;">
        <?php if ($post->type =='1'){ ?>

       <div class="text-right">
            <button id = "<?php echo $post->post_id; ?>" class="btn btn-success" onclick=" upload(this.id)"><?php echo "submissions" ?></button>
        </div>
        <?php $assignment++; }?>

    </div>
    <div>
        <p>   <br><br> </p>
    </div>
<?php $i++; } ?>
