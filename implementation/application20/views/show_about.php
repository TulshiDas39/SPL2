



<!--<link type="text/css" href="/assets/assets/data4.css">-->
<style>

    .btn:hover
    {
        background-color:#ff00ff;
    }

    .submission_item{
        height: 50px;
        width: 100%;
        /*background: #6c757d;*/
        color: black;
    }

</style>

        <div class="submission_item" style="padding-left: 1%;padding-right: 1%">

            <div style="float: left; height: 100%; width: 100%;display: table;text-align: center;font-size: large">
                <p style="vertical-align: middle;display: table-cell"> Instructor: <?php echo $firstName." ".$lastName ?></p>
            </div>
        </div>

        <div>
            <p>    </p>
        </div>


        <div class="submission_item" style="padding-left: 1%;padding-right: 1%">

            <div style="float: left; height: 100%; width: 100%;display: table;text-align: center;font-size: large">
              <p style="vertical-align: middle;display: table-cell">Course Name:  <?php echo $group[0]->subject ?></p>
            </div>
        </div>

            <div>
                <p>    </p>
            </div>


            <div class="submission_item" style="padding-left: 1%;padding-right: 1%">

                <div style="float: left; height: 100%; width: 100%;display: table;text-align: center;font-size: large">
                    <p style="vertical-align: middle;display: table-cell">Section:  <?php echo $group[0]->section ?></p>
                </div>
            </div>

            <div>
                <p>    </p>
            </div>

            <div>
                <p>    </p>
            </div>

            <div class="submission_item" style="padding-left: 1%;padding-right: 1%">

                <div style="float: left; height: 100%; width: 100%;display: table;text-align: center;font-size: large">
                    <p style="vertical-align: middle;display: table-cell">Year:  <?php echo $group[0]->year?></p>
                </div>
            </div>


            <div>
                <p>    </p>
            </div>

            <div class="submission_item" style="padding-left: 1%;padding-right: 1%">

                <div style="float: left; height: 100%; width: 100%;display: table;text-align: center;font-size: large">
                    <p style="vertical-align: middle;display: table-cell">Class Code:  <?php echo $group[0]->code?></p>
                </div>
            </div>


    <div>
        <p>    </p>
    </div>


