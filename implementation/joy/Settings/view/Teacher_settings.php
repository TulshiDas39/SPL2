<!DOCTYPE html>
<html>
<head>

    <title>Sign in page </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" type="text/css" href="style.css">-->
    <link rel="stylesheet" type="text/css" href="/ci/ASM/css/bootstrap.min.css">
    <script type="text/javascript" src="/ci/ASM/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js" type="text/javascript" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

    <style type="text/css">
        body{
            background-color: whitesmoke;
        }
        .header{

            background-color: teal;
            height: 60px;
            width: 100%;
            /*position: sticky;*/
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

        .main{
            position: absolute;
            left: 200px;
            right: 200px;
            /* height: 700px;*/
            height: 530px;
            width: 70%;
            top: 100px;
            /* left: 400px;*/
            z-index: 1;
            background-color: wheat;
            /*border: 1px solid black;*/
        }
        #written
        {
            position: relative;
            top: 50px;
            padding: 2px;
            font-size: 20px;
            overflow: hidden;
            font-weight: 400;
            text-align: justify;
        }
        .intro
        {
            position: relative;
            top:15px;
            left: 100px;
            font-weight: 700;
            font-size: 20px;
            color: white;
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
        .change:hover
        {
            text-decoration: none;
            color: #337ab7;

        }
        #profile_header
        {
            background-color: Teal;
        }
        #group_header
        {
            background-color: Teal;
           /* padding:35px 50px;*/
        }
        #profile_content
        {
            position: relative;
            top:50px;

        }
        #submit_button
        {
            width: 150px;
        }

        /* #post_modal
         {
             position: fixed;
             top: 0px;
             left: 500px;
             !*border: 3px solid red;*!

             width: 40%;
            !* height: 100%;*!
             z-index: 10001;
             overflow: auto;
             overflow-y: auto;
         }*/
        #post_content
        {
            height: 60%;
        }


    </style>

</head>
<body>
<div class="header">
    <button class="btn success btn-lg" id = "techBtn">
        <span class="glyphicon glyphicon-menu-hamburger" id="menubar1" data-toggle="tooltip2" data-original-title="Assignment menu"></span>

    </button>
    <span class="intro">Settings</span>

</div>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <!-- <button class="btn btn-primary btn-sm" >Login</button>-->
            <div class="modal" data-keyboard="false" id="menuid" tabindex="-1">
                <div class="modal-dialog" id="menu-modal">
                    <div class="modal-content" id="menu-content">
                        <div class="modal-header">
                            <button  class="close" data-dismiss="modal">&times;</button>
                            <div>
                                <a href="#">
                                    <span class="glyphicon glyphicon-home" style="font-size: 15px;">&nbsp;Classes</span><br>

                                </a>
                            </div>
                            <div>
                                <a href="Create_calendar" id="date1">
                                    <span class="glyphicon glyphicon-calendar calendar" style="font-size: 15px;" >&nbsp;Calender</span>
                                </a>
                            </div>
                        </div>
                        <div class="modal-body">

                        </div>
                        <div class="modal-footer">
                            <a href="#" class="footer-content">
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

<div class="main">
    <p id="written">
        <a href="#profile" style="text-decoration: none; position: relative; left: 20px;" class="change_profile"> change profile</a><br/>
        <a href="#myModal" style="text-decoration: none; position: relative; left: 20px;" class="change_group"> change Group Information</a>
    </p>
</div>
<div class="container">

    <div class="modal fade" id="profile" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" id="profile_header" style="">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <span class="" style="color: white; font-weight: 600;font-size: 15px">Change profile</span>

                </div>
                <div class="modal-body" style="padding:40px 50px;">
                    <form role="form" method="post" action="" id="profile_form">
                        <div class="form-group" data-toggle="fistnametooltip" title=" 1. This field contains only alpha-numeric characters, underscores or dashes.
2. Its Maximum length is 20 and minimum is 3." >

                            <label for="exampleInputfirstName" style="color: black">First Name:</label>
                            <input type="text" name="firstName" class="form-control" id="exampleInputfirstName" placeholder="first Name" value="<?php /*echo set_value('firstName'); */?>" />
                        </div>
                        <script>
                            $(document).ready(function(){
                                $('[data-toggle="firstnametooltip"]').tooltip();
                            });
                        </script>

                        <?php /*echo form_error('firstName'); */?>
                        <div class="form-group"data-toggle="lastnametooltip" title=" 1. This  field contains only alphabetic characters.
2. Its Maximum length is 20 and minimum is 3." >

                            <label for="exampleInputlastName" style="color: black">Last Name:</label>
                            <input type="text" name="lastName"  class="form-control" id="exampleInputlastName" placeholder="last Name" value="<?php /*echo set_value('lastName'); */?>" />
                        </div>
                        <script>
                            $(document).ready(function(){
                                $('[data-toggle="lastnametooltip"]').tooltip();
                            });
                        </script>
                        <?php /*echo form_error('lastName'); */?>
                        <div class="form-group" data-toggle="emailtoolttip" title="Enter a valid email">

                            <label for="exampleInputEmail" style="color: black">Email:</label>
                            <input type="text" name="Email"  class="form-control" id="exampleInputEmail" placeholder="email" value="<?php /*echo set_value('Email'); */?>" />
                        </div>
                        <script>
                            $(document).ready(function(){
                                $('[data-toggle="lastnametooltip"]').tooltip();
                            });
                        </script>
                        <?php /*echo form_error('Email'); */?>
                        <div class="form-group" data-toggle="passwordtooltip"  title=" 1. This field contains only alpha-numeric  characters.
2. Its Maximum length is 20 and minimum is 7." >
                            <label for="exampleInputPassword" style="color: black">Password:</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="password" value="<?php /*echo set_value('password'); */?>" />
                        </div>
                        <script>
                            $(document).ready(function(){
                                $('[data-toggle="passwordtooltip"]').tooltip();
                            });
                        </script>
                        <?php /*echo form_error('password'); */?>
                        <div class="form-group">
                            <label for="exampleInputRepassword" style="color: black">Repeat Password:</label>
                            <input type="password" name="repeatpassword" class="form-control" id="exampleInputrepeatPassword" placeholder="repeat password" value="<?php /*echo set_value('repeatpassword'); */?>" />
                        </div>
                        <?php /*echo form_error('repeatpassword'); */?>
                        <div class="form-group" data-toggle="numbertooltip" title="This  field contain only natural numbers:0, 1, 2, 3, etc.">
                            <label for="exampleInputPhoneNumber" style="color: black">Phone Number:</label>
                            <input type="text" name="phoneNumber" class="form-control" id="exampleInputPhoneNumber" placeholder="phone number" value="<?php /*echo set_value('phoneNumber'); */?>" />
                        </div>
                        <script>
                            $(document).ready(function(){
                                $('[data-toggle="numbertooltip"]').tooltip();
                            });
                        </script>
                        <?php echo form_error('phoneNumber'); ?>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block" id="submit_button"><span class="glyphicon glyphicon-off"></span> Submit</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="container">

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" id="group_header" style="">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <span class="" style="color: white; font-weight: 600;font-size: 15px">Change Group information</span>

                </div>
                <div class="modal-body" style="padding:40px 50px;">
                    <form role="form" method="post" action="">
                        <div class="form-group">
                            <label for="usrname"><span class="glyphicon glyphicon-pencil"></span> Course Name</label>
                            <input type="text" name="course_name" class="form-control" id="usrname" placeholder="Enter Course name">
                        </div>
                        <div class="form-group">
                            <label for="psw"><span class="glyphicon glyphicon-pencil"></span> Semster</label>
                            <input type="text" name="semester" class="form-control" id="psw" placeholder="Enter Semester">
                        </div>
                        <div class="form-group">
                            <label for="psw"><span class="glyphicon glyphicon-pencil"></span> Class-code</label>
                            <input type="text" name="class_code" class="form-control" id="psw" placeholder="Enter Class-code">
                        </div>
                        <div class="form-group">
                            <label for="psw"><span class="glyphicon glyphicon-pencil"></span> Password</label>
                            <input type="text" name="password" class="form-control" id="psw" placeholder="Enter password" required>
                        </div>

                        <button type="submit" class="btn btn-success btn-block" id="submit_button"><span class="glyphicon glyphicon-off"></span> Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#techBtn').click(function(){
            $('#menuid').modal('show');
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('.change_profile').click(function(){
            $('#profile').modal('show');
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('.change_group').click(function(){
            $('#myModal').modal('show');
        });
    });
</script>
</body>

</html>