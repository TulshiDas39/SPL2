<style>


</style>


<?php $i=0; foreach($assignments as $assignment){?>

    <div class="mydiv">
        <div class="upper"><?php echo $firstName[$i][0]->firstName." hare krishna"?><br>

        </div>
        <hr>
        <h3><a href=""><?php echo $assignment->title ?></a></h3>
        <p><?php echo $assignment->description ?></p>
        <div class="text-right">
            <button class="btn btn-success">Read More</button>
        </div>
        <hr style="margin-top:5px;">
    <?php $i++; } ?>
    </div>