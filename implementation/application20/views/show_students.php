



<!--<link type="text/css" href="/assets/assets/data4.css">-->
<style>

    .btn:hover
    {
        background-color:#ff00ff;
    }

    .submission_item{
        height: 50px;
        width: 100%;
        background: #6c757d;
        color: white;
    }

</style>


<?php


        foreach($students as $student){ ?>



        <div class="submission_item" style="padding-left: 1%;padding-right: 1%">

            <div style="float: left; height: 100%; width: 100%;display: table;text-align: center;font-size: large">
              <p style="vertical-align: middle;display: table-cell">  <?php echo $student->firstName." ".$student->lastName ?></p>
            </div>
        </div>



    <div>
        <p>    </p>
    </div>
    <?php  } ?>

