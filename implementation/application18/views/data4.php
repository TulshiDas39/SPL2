

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
            <span id="t<?php echo $post->post_id;?>">  <?php if($post->type =="1"){?>   <?php echo $type[$assignment]; ?> </span> <span  class="glyphicon glyphicon-file "></span><?php } ?>
              <?php if($post->type =="0") echo "Announcement"; ?>

          </div>


        </div>
        <hr style="margin-top:5px;">
        <?php if($post->edited == 1) {?> <p id="edited<?php echo $post->post_id;?>" style="display:inline-block;background: #8ba8af;color: white;padding-left: 1%;">Edited</p><?php }?>
        <?php if($post->type =='1'){ ?>
         <p style="font-size: small"> &nbsp;&nbsp;Due: <?php $date = date_create($post->date); echo date_format($date,"d-M,Y  g:i:s A "); ?> </p>
        <?php } ?>
        <h3 style="padding-left: 1%;text-align: center;"><a href=""><?php  echo $post->title ?></a></h3>
        <p style="padding-left: 1%;padding-right: 1%;text-align: justify;"><?php echo $post->description ?></p>
        <?php if($post->type == '1' && $due[$assignment][0]->format!= '0'){
            $formats = explode('|', $due[$assignment][0]->format);
            $myformat = $formats[0];
            for($inx = 1; $inx<sizeof($formats)-1; $inx++){
                $myformat .= ",".$formats[$inx];
            }
            ?>  <p id = "format<?php echo $post->post_id?>" style="padding-left: 1%;background: teal;color: white;display: inline-block;padding-left: 1%;">Submission Format:<?php echo $myformat;?></p>
        <?php }?>
        <?php if($post->file != '0'){ $file_name = explode('|', $post->file); ?> <a href="<?php echo base_url().$file_name[0]?>" target="_blank" download="<?php echo $file_name[1];?>"> <p id = "attachment<?php echo $post->post_id?>" style="padding-left: 1%;text-align: center;background: #0c5460;color: white;display:block;padding-left: 1%;"><?php echo $file_name[1];?></p></a> <?php }?>

        <hr style="margin-top:5px;">
        <?php if ($post->type =='1'){ ?>

       <div class="text-right">
            <button id = "<?php echo $post->post_id; ?>" class="btn btn-success" onclick=" upload(this.id)"><?php echo $button[$assignment] ?></button>
        </div>
        <?php $assignment++; }?>

    </div>
    <div>
        <p>   <br><br> </p>
    </div>
<?php $i++; } ?>
