
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

    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js" type="text/javascript" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <!--    <link rel="stylesheet" href = "/ci/ASM/teacherPage.css">-->



    <style>

        .newheader{
            position: fixed;
            background-color: Teal;
            height: 60px;
            left: 0px;
            top: 0px;
            width: 100%;
            z-index: 1;
            /* border: 3px solid red;*/
            /*z-index: 10000;*/

        }

        .middle{
            /*  position: absolute;*/
            /* background-image: url("/ci/ASM/world.jpg");*/
            background-size:cover;
            top: 61px;
            background: blue;
            /* left: 0px;*/
            height: 300px;
            width: 100%;
            /* border: 3px solid red;*/

        }
        .main{
            background-color: #245580;
            height:300px;
            width: 100%;
            float: left;

        }
        .left
        {
            background-color: #2cc36b;
            height: 100%;
            width: 20%;
            float: left;
        }
        .right
        {
            background-color: #5a0099;
            width: 90%;
            height: 100%;
        }

        .scroller
        {
            /* border: 3px solid red;*/
            position: absolute;
            left: 0px;
            width: 100%;

        }
        #techBtn
        {
            position: absolute;
            background: transparent;
            height: 25px;
            width: 25px;
            top: 15px;
            left: 20px;
            outline: none;

        }
        #menubar1
        {
            position: absolute;
            /* border: 3px solid red;*/
            color: white;
            top: 0px;
            left: 0px;
            font-size: 20px;
        }
        #menu-modal{
            /*border: 5px solid black;*/
            position: fixed;
            top: 0px;
            left: 0px;

            width: 25%;
            height: 100%;
            z-index: 10001;
            overflow: auto;
            overflow-y: auto;
        }
        #menu-content
        {
            /* border: 3px solid black;*/
            height: 100%;

        }
        .settings{
            padding-top: 5px;
            font-size: 15px;
            color:blue;
            padding-left: 10px;
            font-weight: 500;
            font-family: "Calibri";
            float: left;
            /* border: 1px solid black;*/
        }
        #settings-log{
            font-size: 20px;
            align-items: left;
            top: 5px;
            float: left;
        }
        .modal-header
        {
            height: 15%;
        }
        .modal-body
        {
            height: 70%;
        }
        .modal-footer
        {
            height: 15%;
        }
        .calendar
        {
            /* border: 3px solid black;*/
            position: absolute;
            top: 60px;
        }
        .link1{
            position: absolute;
            padding-top:20px ;
            padding-left: 600px;
            font-size: 15px;
            font-weight: 600;
            color: white;


        }
        .link2{
            position: absolute;
            padding-top:20px ;
            padding-left: 700px;
            font-size: 15px;
            font-weight: 600;

            color: white;
            /*background-color: #761c19;*/

        }
        .link3{
            position: absolute;
            padding-top:20px ;
            padding-left: 800px;
            font-size: 15px;
            font-weight: 600;

            color: white;
            /*background-color: #761c19;*/

        }
        #navlink
        {

            position: absolute;
            top: 10px;
            left: 500px;
        }
        #notification_button
        {
            position: absolute;
            background: transparent;
            height: 40px;
            width: 40px;
            border-radius: 50%;
            /* top: 10px;*/
            top: 0px;
            /*right: 200px;*/
            right: 60px;
            bottom: 5px;

            outline: none;
        }
        #notifction_count
        {
            position: absolute;
            color: white;
            top:-10px;
            left: 15px;
            right: 0px;
            font-size: small;
            background:red;
            /* height: 20px;*/
            align-self: center;
            width: 18px;
            border-radius: 10px;
            font-weight: 500;
            /* border: 2px solid red;*/
        }
        .notification
        {

            position: absolute;
            height: 30px;
            width: 30px;
            top: 4px;
            left: 5px;
            right:5px;
            background-color: white;
            border-radius: 50%;
            font-size: 20px;


        }
        .bell{
            /* border: 2px solid black;*/
            position: absolute;
            display: inline-block;
            /* color: #0000FF;*/
            font-size: 20px;
            top:5px;
            right: 0px;
            bottom: 0px;
            left: 0px;
        }

        .course
        {
            position: absolute;
            top: 0px;
            right: 0px;
            bottom: 0px;
            left: 0px;
            font-size: 30px;
            color:white ;

        }
        #course-menu
        {
            position: fixed;
            top: 0px;
            right: 50px;
            width: 25%;
            height: 30%;
            z-index: 10001;
            overflow: auto;
            overflow-y: auto;
        }
        #course-content
        {
            height: 100%;
        }
        #announce
        {
            position: absolute;
            top: 0px;
            left: 0px;
            font-size: 25px;

        }
        #check-post
        {
            position: fixed;
            top: 28px;
            left: 45px;
            /* border: 3px solid black;*/
            font-size: 20px;
        }
        #assignment
        {
            position: absolute;
            top: 0px;
            left: 0px;
            font-size: 25px;
        }
        .checker
        {
            position: fixed;
            top: 80px;
            left: 45px;
            /* border: 3px solid black;*/
            font-size: 20px;
        }
        .course-name
        {
            color: white;
            /* border: 3px solid red;*/
            height: 100px;
            width: 300px;
            position: absolute;
            text-align: center;
            top: 150px;
            font-size: 20px;
            font-weight: 700;
            right: 40%;
        }
        #post_Button
        {
            position: absolute;
            background: transparent;
            top: 30px;
            left:10px;
            height: 30px;
            width: 150px;
            outline: none;
            /*border: 3px solid red;*/
        }
        #assignment_Button
        {
            position: absolute;
            background: transparent;
            top: 80px;
            left: 10px;
            height: 30px;
            width: 200px;
            outline: none;
        }
        #post_modal
        {
            position: fixed;
            top: 0px;
            left: 500px;
            /*border: 3px solid red;*/

            width: 40%;
            height: 100%;
            z-index: 10001;
            overflow: auto;
            overflow-y: auto;
        }
        #post_content
        {
            height: 70%;
        }
        #assign_modal
        {
            position: fixed;
            top: 0px;
            left: 500px;
            width: 40%;
            height: 100%;
            z-index: 10001;
            overflow: auto;
            overflow-y: auto;
        }
        #assign_content
        {
            height: 80%;
            /*  border: 3px solid red;*/
        }
        #post_header
        {
            background-color: Teal;
            /* border: 2px solid red;*/
        }
        #assign_header
        {
            background-color: teal;
        }
        #cross
        {
            color: white;
            font-size: 30px;
            /* border: 2px solid red;*/
        }
        #comment
        {
            position: absolute;
            top: 20px;
            color: white;
            font-size: 25px;
        }
        .check_comment {
            position: fixed;
            top: 14px;
            left: 50px;
            /* border: 2px solid black;*/
            font-size: 20px;
        }
        #topic
        {
            position: absolute;
            top: 20px;
            -webkit-box-flex: 1;
            flex-grow: 1;
            flex-shrink: 1;
            /* height: 168px;*/
            width: 60%;
            outline: 0;
            border-width: 0 0 2px 0;
            /*  border-color: blue;*/
            background: transparent;
            border-bottom: 2px solid teal;
            z-index: 0;
            overflow-y: visible;
            overflow-x: hidden;
        }
        #share
        {
            position: absolute;
            top: 80px;
            -webkit-box-flex: 1;
            flex-grow: 1;
            flex-shrink: 1;
            /* height: 168px;*/
            width: 90%;
            outline: 0;
            border-width: 0 0 2px 0;
            /*  border-color: blue;*/
            background: transparent;
            border-bottom: 2px solid teal;
            z-index: 0;
            overflow-y: visible;
            overflow-x: hidden;


        }
        #file_button
        {

            align-items: left;
            background: transparent;
            float: left;
            height:40px;
            width:40px;
            border-radius: 50%;
            display: inline-block;
            cursor: pointer;
            outline: none;

        }
        #paper_clip
        {

            position: absolute;
            top:358px;
            left: 20px;
            font-size: 25px;
            -webkit-transform:rotate(130deg);
            -moz-transform:rotate(130deg);
            -o-transform:rotate(130deg);
            transform:rotate(135deg);
        }
        #link_button
        {

            align-items: left;
            background: transparent;
            float: left;
            height:40px;
            width:40px;
            border-radius: 50%;
            display: inline-block;
            cursor: pointer;
            outline: none;

        }
        #link
        {
            position: absolute;
            top:358px;
            left: 65px;
            font-size: 25px;
            -webkit-transform:rotate(45deg);
            -moz-transform:rotate(45deg);
            -o-transform:rotate(45deg);
            transform:rotate(45deg);
        }
        #delete_button
        {
            height:40px;
            background: transparent;
            position: absolute;
            top: 350px;
            left: 415px;
            /*border: 2px solid red;*/
            width:40px;
            border-radius: 50%;
            display: inline-block;
            cursor: pointer;
            outline: none;
        }
        #trash_button
        {
            color: black;
            float: right;
            position: absolute;
            top: 5px;
            left: 5px;
            font-size: 25px;
            outline: none;
        }
        #list
        {
            position: absolute;
            top: 20px;
            color: white;
            font-size: 25px;
        }
        .check_list
        {
            position: fixed;
            top: 20px;
            left: 50px;
            /* border: 2px solid black;*/
            font-size: 20px;
        }
        #datepicker
        {
            width: 180px;
            margin: 0px 20px 20px 20px;

        }
        #datepicker > span:hover
        {
            cursor: pointer;
        }
        #date_div
        {
            /* position: absolute;*/
            height: 30px;
            width: 300px;
            /*border: 3px solid red;*/
        }
        #date_label
        {
            position: absolute;
            top: 150px;
            /* border: 2px solid red;*/
        }
        .sub_date {
            position: absolute;

            top: 145px;
            left: 140px;
        }
        #time_label
        {
            position: absolute;
            top: 190px;
        }
        #sub_time
        {
            position: absolute;
            top: 185px;
            left: 140px;
        }
        #delete_button1
        {
            height:40px;
            background: transparent;
            position: absolute;
            top: 400px;
            left: 415px;
            /*border: 2px solid red;*/
            width:40px;
            border-radius: 50%;
            display: inline-block;
            cursor: pointer;
            outline: none;
        }
        #trash_button1
        {
            color: black;
            float: right;
            position: absolute;
            top: 5px;
            left: 5px;
            font-size: 25px;
            outline: none;
        }
        #file_button1
        {
            align-items: left;

            background: transparent;
            /*border: 3px solid red;*/

            float: left;
            height:40px;
            width:40px;
            border-radius: 50%;
            display: inline-block;
            cursor: pointer;
            outline: none;
        }
        #paper_clip1
        {
            position: absolute;
            top:400px;
            left: 20px;
            font-size: 25px;
            -webkit-transform:rotate(130deg);
            -moz-transform:rotate(130deg);
            -o-transform:rotate(130deg);
            transform:rotate(135deg);
        }
        #link_button1
        {
            align-items: left;
            background: transparent;
            float: left;
            height:40px;
            width:40px;
            border-radius: 50%;
            display: inline-block;
            cursor: pointer;
            outline: none;
        }
        #link1
        {
            position: absolute;
            top:400px;
            left: 65px;
            font-size: 25px;
            -webkit-transform:rotate(45deg);
            -moz-transform:rotate(45deg);
            -o-transform:rotate(45deg);
            transform:rotate(45deg);
        }
        #real_file
        {
            /*border:3px solid red;*/
            position: absolute;
            left: 200px;
            display: none;
        }
        #post_btn1
        {

            position: absolute;
            top: 400px;
            left: 465px;
            outline: none;

        }
        #file_text
        {
            position: absolute;
            top: 280px;
        }
        #upload_button
        {
            /*border: 3px solid red;*/
            float: left;
            outline: none;
            /*position: absolute;*/
        }
        #datetimepicker1{
            /*border: 3px solid red;*/
            position: absolute;
            top: 125px;
            left: 125px;
            width: 250px;
        }
        #datetimepicker3
        {
            position: absolute;
            top:150px;
            left: 125px;
            width: 250px;

        }
        #user_button
        {
            position:fixed;
            background: transparent;
            height: 40px;
            width: 40px;
            top:15px;
            right:130px;
            font-size: 25px;
            outline: none;
            /* border:3px solid red;*/
        }
        #user{
            position: relative;
            top: -5px;
            right: -5px;
            bottom: -5px;
            left: -8px;
        }
        .dropdown {
            position: absolute;
            top: 5px;
            right: 40px;
            height: 50px;
            width: 150px;
            background: transparent;

        }
        .dropdown1
        {
            position: absolute;
            /* border: 3px solid red;
        overflow: hidden;*/
        top: 10px;
            right: 170px;
            height: 50px;
            width: 150px;
        }
        /*#menu_div
        {
            position: absolute;
            right: 200px;
            width: 300px;
            border: 3px solid red;
        }*/
        /*#ndrop
        {
            position: absolute;
            top: 10px;
            right: 200px;
        }*/

        /*
        #real_file1
        {
            !*border:3px solid red;*!
            position: absolute;
            size: 100px;
            left: 200px;
           !* display: none;*!
        }
        */
        #file_text1
        {
            position: absolute;
            top: 230px;
        }
        #upload_post
        {
            float: left;
            outline: none;
            display: none;
            /*border: 3px solid red;*/

        }

        #real_file2
        {

            position: absolute;
            size: 100px;
            left: 200px;
            display: none;
        }
        #label_format{
            position: absolute;
            top: 235px;
        }
        #check_format
        {
            position: absolute;
            top: 230px;
            left:137px;
            width: 200px;
        }
        #user_name {
            position: relative;
            top: -10px;
        }



    </style>


</head>
<body>
<div class="newheader">
    <button class="btn success btn-lg" id = "techBtn">
        <span class="glyphicon glyphicon-menu-hamburger" id="menubar1" data-toggle="tooltip2" data-original-title="Assignment menu"></span>

    </button>
    <!--  <span class="written">Assignment Management</span>-->
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
                <li ><a href="http://localhost/SPL/index.php/gethelp" target="_blank" class="link1">Support</a></li>
                <li><a href="#" class="link2">Groups</a></li>
                <li><a href="http://localhost/SPL/index.php/about_Devloper" target="_blank" class="link3">About</a></li>
            </ul>
        </div>

    </nav>

    <div class="dropdown1">
       <!-- <button class="btn btn-circle dropdown-toggle" id="notification_button" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="notification " ><span class=" glyphicon glyphicon-bell bell" data-toggle="tooltip" data-original-title="Notifications"><span class="badge badge-light" id="notifction_count"></span></span></span></button>-->
        <div class="dropdown-menu" aria-labelledby="notification_button" id="menu_div">

            <li><a style=""class="dropdown-item" href=""><small><i></i></small><br/></a></li>
            <div class="dropdown-divider"></div>

        </div>
    </div>


    <div class="dropdown">
        <button class="btn btn-circle dropdown-toggle" type="button" data-toggle="dropdown" id="user_button"><span class="glyphicon glyphicon-user" id="user"></span> <span id="user_name"><?php echo $user_name[0]->firstName;?></span> </button>
        <ul class="dropdown-menu">
            <li><a href="http://localhost/SPL/index.php/settings">Setting</a></li>
            <li><a href="http://localhost/SPL/index.php/login/log_out">Log out</a></li>
        </ul>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="modal" data-keyboard="false" id="menuid" tabindex="-1">
                <div class="modal-dialog" id="menu-modal">
                    <div class="modal-content" id="menu-content">
                        <div class="modal-header">
                            <button  class="close" data-dismiss="modal">&times;</button>
                            <div>
                                <a href="http://localhost/SPL/index.php/student1/load_groups/<?php echo $this->session->userdata('user_id');?>">
                                    <span class="glyphicon glyphicon-home" style="font-size: 15px;">&nbsp;Classes</span><br>

                                </a>
                            </div>
                            <div>
                                <a href="http://localhost/SPL/index.php/create_calendar" target="_blank" id="date1">
                                    <span class="glyphicon glyphicon-calendar calendar" style="font-size: 15px;" >&nbsp;Calender</span>
                                </a>
                            </div>
                        </div>
                        <div class="modal-body">

                        </div>
                        <div class="modal-footer">
                            <a href="http://localhost/SPL/index.php/settings/student_settings" class="footer-content">
                                <span class="glyphicon glyphicon-cog" id="settings-log"></span>
                                <span class="settings">Settings</span>
                            </a>
                            <div style="clear: both"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="modal" data-keyboard="false" id="menuid1" tabindex="-1">
                <div class="modal-dialog" id="course-menu">
                    <div class="modal-content" id="course-content">

                        <button class="btn success btn-lg" id="post_Button">
                                 <span class="glyphicon glyphicon-comment" id="announce">
                                     <span id="check-post">Create post</span>
                                 </span>
                        </button>
                        <button class="btn success btn-lg" id="assignment_Button">
                                   <span class= "glyphicon glyphicon-list-alt" id="assignment">
                                        <span class="checker">Create assignment</span>
                                   </span>

                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <form action="Upload_post" method="post" enctype="multipart/form-data" id="post_form">
        <div class="row">
            <div class="col-xs-12">
                <!-- <button class="btn btn-primary btn-sm" >Login</button>-->
                <div class="modal" data-keyboard="false" id=CRID tabindex="-1">
                    <div class="modal-dialog" id="post_modal">
                        <div class="modal-content" id="post_content">
                            <div class="modal-header" id="post_header">
                                <button  class="close" data-dismiss="modal" id="cross">&times;</button>
                                <span class= "glyphicon glyphicon-comment" id="comment">
                                        <span class="check_comment">post</span>
                                   </span>

                            </div>
                            <div class="modal-body">

                                <textarea typeof="tesxt" placeholder="Topic" id="topic" name="topic" required></textarea>
                                <textarea type="text" placeholder= "Post description" id="share" name="share_post" required ></textarea>
                                <span id="file_text1" name="">No flie choosen yet

                                </span>
                            </div>
                            <div class="modal-footer">
                                <input type="file" id="real_file2" name="userFile2" size="20" hidden/>
                                <button class="btn success btn-lg" id="file_button" title="Attach file" disabled>
                                    <span class="glyphicon  glyphicon-paperclip" id="paper_clip"></span>

                                </button>
                                <button class="btn success btn-lg" id="link_button" title="Share link">

                                    <span class="glyphicon glyphicon-link" id="link"></span>
                                </button>
                                <input type="submit" value="upload" id="upload_post"/>
                                <button class="btn success btn-lg" id="delete_button">
                                    <span class="glyphicon glyphicon-trash" id="trash_button"></span>
                                </button>
                                <button type="submit" class="btn btn-primary" id="post_btn">Post</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="container">
    <form action="Upload" method="post" enctype="multipart/form-data" id="assign_form">
        <div class="row">
            <div class="col-xs-12">
                <div class="modal" data-keyboard="false" id=ASID tabindex="-1">
                    <div class="modal-dialog" id="assign_modal">
                        <div class="modal-content" id="assign_content">

                            <div class="modal-header" id="assign_header">
                                <button  class="close" data-dismiss="modal" id="cross">&times;</button>

                                <span class= "glyphicon glyphicon-list-alt" id="list">
                                        <span class="check_list">Assignment</span>
                                   </span>
                            </div>
                            <div class="modal-body">


                                <textarea type="text" placeholder="Title" id="topic" name="title" required></textarea>
                                <textarea type="text" placeholder= "Instructions" id="share" name="instructions" required></textarea>
                                <label id="date_label">Submission Date:</label>
                                <!-- <input  class="sub_date" type="date" name="date"  required>-->
                                <!--<div class="container">
                                    <input type="text" class="datepicker" name="date" >
                                </div>-->
                                <div class="container">
                                    <div class="row">
                                        <div class='col-sm-6'>
                                            <div class="form-group">
                                                <div class='input-group date' id='datetimepicker1'>

                                                    <input type='text' class="form-control" required name="date" />
                                                    <span class="input-group-addon">
                                                             <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <label id="time_label">Submission Time:</label>
                                <div class="container">
                                    <div class="row">
                                        <div class='col-sm-6'>
                                            <div class="form-group">
                                                <div class='input-group date' id='datetimepicker3'>
                                                    <input type='text' class="form-control" required name="time"/>
                                                    <span class="input-group-addon">
                                                         <span class="glyphicon glyphicon-time">

                                                         </span>
                                                     </span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <label id="label_format" class="">Select Format:</label>
                                <input list="formats" name="format" id="check_format" class="form-control">
                                <datalist id="formats">
                                    <option value="pdf">
                                    <option value="docx">
                                    <option value="txt">
                                    <option value="c">
                                    <option value="c++">
                                    <option value="java">
                                    <option value="js">
                                    <option value="php">
                                    <option value="html">
                                    <option value="css">
                                    <option value="xml">
                                </datalist>
                                <!-- <input type="time" id="sub_time" name="time" required>-->
                                <span id="file_text" name="userFile1">No file choosen yet</span>
                                <!--<input id="file_text" name="userFile1" value="">-->



                            </div>
                            <div class="modal-footer">

                                <input type="file" id="real_file" name="userFile" size="20" />

                                <button class="btn success btn-lg" id="file_button1" title="Attach file" disabled>
                                    <!--<input type="button" id="file_button1" title="Attach here" hidden/>-->
                                    <span class="glyphicon  glyphicon-paperclip" id="paper_clip1"></span>

                                    <!-- </button>-->
                                    <button class="btn success btn-lg" id="link_button1" title="Share link">

                                        <span class="glyphicon glyphicon-link" id="link1"></span>
                                    </button>
                                    <input type="submit" value="upload" id="upload_button" hidden/>

                                    <button class="btn success btn-lg" id="delete_button1">
                                        <span class="glyphicon glyphicon-trash" id="trash_button1"></span>
                                    </button>
                                    <button type="submit" class="btn btn-primary" id="post_btn1" name="assign">Assign</button>

                            </div>

                            <div style="clear: both"></div>

                            <!--</form>-->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="middle">
       <span class="course-name">

        Assignment Management System

       </span>
</div>
<!--<div class="main">
    <div class="left">

    </div>
    <div class="right"></div>
</div>-->
<script>
    $(document).ready(function(){
        $('#techBtn').click(function(){
            $('#menuid').modal('show');
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('#post_Button').click(function(){
            $('#menuid1').modal('hide');
            $('#CRID').modal('show');
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('#assignment_Button').click(function(){
            $('#menuid1').modal('hide');
            $('#ASID').modal('show');
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('[data-toggle="tooltip2"]').tooltip({
            placement : 'bottom'
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip({
            placement : 'bottom'
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('[data-toggle="tooltip1"]').tooltip({
            placement : 'bottom'
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('#techBtn1').click(function(){
            $('#menuid1').modal('show');
        });
    });
</script>

<script>
    $(document).ready(function(){
        $('#delete_button').click(function(){
            const  Text=document.getElementById("file_text1");
            Text.innerHTML="No file choosen yet"
            $('#CRID').modal('hide');


        });
    });
</script>
<script>
    $(document).ready(function(){
        $('#delete_button1').click(function(){
            /*$('#file_text').reset();*/
            const  Text=document.getElementById("file_text");
            Text.innerHTML="No file choosen yet"
            $('#ASID').modal('hide');


        });
    });

</script>
<script type="text/javascript">
    const  realFileBtn=document.getElementById("real_file");
    const  customBtn=document.getElementById("paper_clip1");
    const  customText=document.getElementById("file_text");
    customBtn.addEventListener("click",function () {
        realFileBtn.click();
    });
    realFileBtn.addEventListener("change",function () {
        if(realFileBtn.value)
        {
            customText.innerHTML=realFileBtn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];

            /*customText.innerHTML=realFileBtn.value;*/
        }
        else
        {
            customText.innerHTML="No file"
        }

    });
</script>
<script type="text/javascript">
    const  realFileBtn1=document.getElementById("real_file2");
    const  customBtn1=document.getElementById("paper_clip");
    const customText1=document.getElementById("file_text1");

    customBtn1.addEventListener("click",function () {
        realFileBtn1.click();
    });
    realFileBtn1.addEventListener("change",function () {
        if(realFileBtn1.value)
        {
            customText1.innerHTML=realFileBtn1.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];


        }
        else
        {
            customText1.innerHTML="No file choosen yet"
        }

    });

</script>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker({
            /* minView: 2,
             format: 'dd-mm-yyyy'*/
            format:'L'


        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker3').datetimepicker({
            format: 'LT'
        });
    });
</script>


</body>
</html>