<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js" type="text/javascript" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href = "/ci/ASM/teacherPage.css">

</head>
<body>
<div class="newheader">
   <button class="btn success btn-lg" id = "techBtn">
        <span class="glyphicon glyphicon-menu-hamburger" id="menubar1" data-toggle="tooltip2" data-original-title="Assignment menu"></span>
      <!-- <span class="glyphicon glyphicon-menu-hamburger"></span>-->
    </button>

    <nav class="navbar nabvar-default" id="navlink">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-target=".navbar-collapse " data-toggle="collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav nav-pills " id="">
                <li ><a href="#" class="link1">Streams</a></li>
                <li><a href="#" class="link2">Students</a></li>
                <li><a href="#" class="link3">About</a></li>
            </ul>
        </div>
    </nav>
    <div class="dropdown1">
        <button class="btn btn-circle dropdown-toggle" id="notification_button" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <span class="notification " ><span class=" glyphicon glyphicon-bell bell" data-toggle="tooltip" data-original-title="Notifications">
                         <?php
                         $query= $this->db
                             ->where('status',1)
                             ->order_by('date','desc')
                             ->get('notification');
                         if($query->num_rows()>0) {
                             ?>
                             <span class="badge badge-light" id="notifction_count"><?php echo $query->num_rows()?></span>
                             <?php
                         }
                         ?>
               </span></span></button>
        <div class="dropdown-menu" aria-labelledby="notification_button" id="menu_div">

            <?php
            $query= $this->db
                ->order_by('date','desc')
                ->get('notification');
            if($query->num_rows()>0) {
                foreach ($query->result_array() as $q) {
                    ?>

                    <li><a style="
                        <?php
                        if($q['status']==1)
                        {
                            echo "font-weight:bold";
                        }
                        ?>

                                "class="dropdown-item" href="<?php echo base_url() ?>View/relate?id=<?php echo $q['notification_id']; ?>">
                            <small><i><?php echo date('F j,Y, g:i a',strtotime($q['date']))?></i></small><br/>
                            <?php echo $q['name']." post an ".$q['message']."." ?>
                        </a></li>
                    <div class="dropdown-divider"></div>
                    <?php
                }
            } else
            {
                echo "No Notifications";
            }
            ?>

        </div>
    </div>
    <button class="btn success btn-lg " id="techBtn1">

        <span class=" glyphicon glyphicon-plus-sign course " data-toggle="tooltip1" data-original-title="Create"></span>

    </button>
    <div class="dropdown">
        <button class="btn btn-circle dropdown-toggle" type="button" data-toggle="dropdown" id="user_button"><span class="glyphicon glyphicon-user" id="user"></span> </button>
        <!--<span class="caret"></span></button>-->
        <ul class="dropdown-menu">
            <li><a href="#">Setting</a></li>
            <li><a href="Login/log_out">Log out</a></li>
        </ul>
    </div>
</div>
</body>
</html>