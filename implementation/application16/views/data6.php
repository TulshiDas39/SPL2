

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



        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            overflow: auto;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown a:hover {background-color: #ddd}

        .show {display:block;}

    </style>



<?php $i=0;$assignment=0; $is_submitted=0;

     foreach($posts as $post){ ?>

    <div class="mydiv" id="div<?php echo $post->post_id?>">
        <div class="upper" style="padding-left: 1%;padding-right: 1%">

            <div style="float: left; height: 100%; width: 50%">
                <?php echo $post->firstName." ".$post->lastName." hare krishna"?><br>
                <?php $date = date_create($post->date); echo date_format($date,"d-M-Y  g:i:s A ");
               ?>
            </div>

            <div  style="float: left; height: 100%; width:50%; font-size: large;padding-top: 1%; text-align: right; vertical-align: middle; color: #9fcdff">

                 <span id="t<?php echo $post->post_id;?>">  <?php if($post->type =="1"){?>   <?php echo "assignment"; }?> </span> <!--<button id="o<?php /*echo $post->post_id*/?>" class="glyphicon glyphicon-option-vertical  dropbtn" style="background: none;border: none"  onclick="myFunction(this.id)" ></button>--><?php /*} */?>
                 <?php if($post->type =="0"){ echo "Announcement"; }?>
                <div class ="dropdown">
                 <button id="o<?php echo $post->post_id?>" class=" btn glyphicon glyphicon-option-vertical " onclick="myFunction(this.id)" style="background: none;outline:none; border: none"></button><?php  ?>

                <div class="dropdown-content"  id ="o<?php echo $post->post_id?>d">
                  <a href="#" onclick="edit_post(<?php echo $post->post_id?>)">Edit</a>
                  <a href="#" onclick="delete_post(<?php echo $post->post_id?>)">Delete</a>
                    <?php if($post->type =="1"){?>
                  <a href="#"  >Update Due</a>
                  <a href="#">Check Plagiarism</a>
                    <?php }?>

                </div>

               </div>
            </div>

         </div>

        <hr style="margin-top:5px;">
        <?php if($post->type =='1'){ ?>
         <p style="font-size: small"> &nbsp;&nbsp;Due: <?php $date = date_create($due[$assignment][0]->due); echo date_format($date,"d-M,Y  g:i:s A "); ?> </p>
        <?php } ?>
        <h3 style="padding-left: 45%"><a href=""><?php  echo $post->title ?></a></h3>
        <p style="padding-left: 1%;padding-right: 1%"><?php echo $post->description ?></p>
        <hr style="margin-top:5px;">
        <?php if ($post->type =='1'){ ?>
        <div id = "s<?php echo $post->post_id?>" style="display:none;"></div>
       <div class="text-right">

            <button id = "<?php echo $post->post_id; ?>" class="btn btn-success btn-block" onclick="toggle_submissions(this.id)"><?php echo "view submissions" ?></button>
        </div>
        <?php $assignment++; }?>

    </div>
    <div id="par<?php echo $post->post_id?>">
        <p >   <br ><br> </p>
    </div>
<?php $i++; } ?>
