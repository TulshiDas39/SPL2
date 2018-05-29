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
        .identity
        {
            font-size: 15px;
            color: black;
            position: relative;
            top: 5px;
            left: 5px;
            font-weight: 700;
        }


        .collapsible {
              background-color: white;
              color: black;
              cursor: pointer;
              padding: 18px;
              width: 100%;
              border: none;
              text-align: left;
              outline: none;
              font-size: 15px;
              border: 1px solid  wheat;
          }

        .content {
            padding: 0 18px;
            /*max-height: 0;*/
            overflow: hidden;
            display: none;
            transition: max-height 0.2s ease-out;
            background-color:#777;
        }
        .collapsible1 {
            background-color: white;
            color: black;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            border: 1px solid  wheat;
        }

        .content1{
            padding: 0 18px;
            /*max-height: 0;*/
            overflow: hidden;
            display: none;
            transition: max-height 0.2s ease-out;
            background-color:#777;
        }
        .collapsible2 {
            background-color: white;
            color: black;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            border: 1px solid  wheat;
        }

        .content2{
            padding: 0 18px;
            /*max-height: 0;*/
            overflow: hidden;
            display: none;
            transition: max-height 0.2s ease-out;
            background-color:#777;
        }
        .collapsible3{
            background-color: white;
            color: black;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            border: 1px solid  wheat;
        }

        .content3{
            padding: 0 18px;
            /*max-height: 0;*/
            overflow: hidden;
            display: none;
            transition: max-height 0.2s ease-out;
            background-color:#777;
        }
        .form-control
        {
            width: 400px;
        }
        .pencil
        {
            font-size: 10px;
            position: relative;
            top: 5px;
            right: 5px;

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
    <!--<p id="written">
        <a href="#" style="text-decoration: none; position: relative; left: 20px;" class="change"> change profile</a>
    </p>-->
    <h3 style="font-weight: 700; position: relative; left: 10px;">General profile Settings:</h3>
    <hr>
    <button class="collapsible" id="change_color">
        Name <span style="float: right;" id="hide_edit">Edit</span>
        <span class="glyphicon glyphicon-pencil pencil" id="hide_icon" style="float: right"></span>
    </button>
    <div class="content" id="Mydiv">
        <br/>
        <?php echo form_open('')?>
        <div class="form-group" style="width: 250px" data-toggle="firstnametooltip" title=" 1. This field contains only alpha-numeric characters, underscores or dashes.
2. Its Maximum length is 20 and minimum is 3.">


        <label for="exampleInputfirstName" style="color: black"><span class="glyphicon glyphicon-pencil"></span>First Name:</label>
        <input style="width: 250px" type="text" name="firstName" class="form-control" id="exampleInputfirstName" placeholder="first Name" value="" />

        </div>

        <div class="form-group" style="width: 250px" data-toggle="lastnametooltip" title=" 1. This  field contains only alphabetic characters.
2. Its Maximum length is 20 and minimum is 3." >
            <label for="exampleInputlastName" style="color: black"><span class="glyphicon glyphicon-pencil"></span>Last Name:</label>
            <input style="width: 250px" type="text" name="lastName"  class="form-control" id="exampleInputlastName" placeholder="last Name" value="" />
        </div>
        <div>
        <button type="submit" class="btn btn-primary">
            Save changes
        </button>
            <button type="button" class="btn btn-default" data-dismiss="modal" id="cancelBtn">
                <span class="glyphicon glyphicon-remove"></span> Cancel
            </button>
        </div>
        <?php echo  form_close() ?>
        <br/>
    </div>
        <button class="collapsible1" id="change_color1" >
            Email <span style="float: right;" id="hide_edit1">Edit</span>
            <span class="glyphicon glyphicon-pencil pencil" id="hide_icon1" style="float: right"></span>
        </button>
        <div class="content1" id="Mydiv1" style="width: 400px" data-toggle="emailtooltip" title="Enter a valid email">
            <?php echo form_open('')?>
            <div class="form-group" data-toggle="emailtooltip" title="Enter a valid email.">

                <label for="exampleInputfirstEmail" style="color: black"><span class="glyphicon glyphicon-pencil"></span>Email:</label>
                <input type="text" name="email" class="form-control" id="exampleInputfirstEmail" placeholder="Enter email" value="" />

            </div>

            <div>
                <button type="submit" class="btn btn-primary">
                    Save changes
                </button>
                <button type="button" class="btn btn-default" data-dismiss="modal" id="cancelBtn1">
                    <span class="glyphicon glyphicon-remove"></span> Cancel
                </button>
            </div>
            <?php echo  form_close() ?>
            <br/>
        </div>
    <button class="collapsible2" id="change_color2">
        Password <span style="float: right;" id="hide_edit2">Edit</span>
        <span class="glyphicon glyphicon-pencil pencil" id="hide_icon2" style="float: right"></span>
    </button>
    <div class="content2" id="Mydiv2">
        <?php echo form_open('') ?>
        <div class="form-group" data-toggle="passwordtooltip" style="width: 400px" title=" 1. This field contains only alpha-numeric  characters.
2. Its Maximum length is 20 and minimum is 7." >
            <label for="exampleInputPassword" style="color: black"><span class="glyphicon glyphicon-pencil"></span>Password:</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="password" value="<?php /*echo set_value('password'); */?>" />
        </div>

        <?php /*echo form_error('password'); */?>
        <div class="form-group">
            <label for="exampleInputOldpassword" style="color: black"><span class="glyphicon glyphicon-pencil"></span>Old Password:</label>
            <input type="password" name="repeatpassword" class="form-control" id="exampleInputOldPassword" placeholder="old password" value="<?php /*echo set_value('repeatpassword'); */?>" />
        </div>

        <?php /*echo form_error('repeatpassword'); */?>
        <div>
            <button type="submit" class="btn btn-primary">
                Save changes
            </button>
            <button type="button" class="btn btn-default" data-dismiss="modal" id="cancelBtn2">
                <span class="glyphicon glyphicon-remove"></span> Cancel
            </button>
        </div>
        <?php echo form_close() ?>
        <br/>
    </div>
    <button class="collapsible3" id="change_color3">
        Phone Number <span style="float: right;" id="hide_edit3">Edit</span>
        <span class="glyphicon glyphicon-pencil pencil" id="hide_icon3" style="float: right"></span>
    </button>
    <div class="content3" id="Mydiv3">
        <?php echo form_open('') ?>
        <div class="form-group" data-toggle="numbertooltip" style="width: 400px" title="This  field contain only natural numbers:0, 1, 2, 3, etc." >
            <label for="exampleInputPassword" style="color: black"><span class="glyphicon glyphicon-pencil"></span>Phone Number:</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="phone number" value="<?php /*echo set_value('password'); */?>" />
        </div>
        <div>
            <button type="submit" class="btn btn-primary">
                Save changes
            </button>
            <button type="button" class="btn btn-default" data-dismiss="modal" id="cancelBtn3">
                <span class="glyphicon glyphicon-remove"></span> Cancel
            </button>
        </div>
        <?php echo form_close() ?>
        <br/>
    </div>
    <script>
        $(document).ready(function(){
            $('[data-toggle="firstnametooltip"]').tooltip();
        });
    </script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="lastnametooltip"]').tooltip();
        });
    </script>
        <script>
            $(document).ready(function(){
                $('[data-toggle="emailtooltip"]').tooltip();
            });
        </script>
        <script>
            $(document).ready(function(){
             $('[data-toggle="passwordtooltip"]').tooltip();
            });
            </script>
        <script>
            $(document).ready(function(){
                $('[data-toggle="numbertooltip"]').tooltip();
             });
        </script>
    <hr>

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
        $('#written a').click(function(){
            $('#profile').modal('show');
        });
    });
</script>

<script>
    $(document).ready(function(){
        $("#cancelBtn").click(function(){
            $(".content").collapse('hide');
            document.getElementById("hide_edit").style.display = "block";
            document.getElementById("hide_icon").style.display = "block";
            document.getElementById("change_color").style.display="block";
        });
    });

</script>
<script>
    $('.collapsible').click(function(){

        $('.content').collapse('show');
        document.getElementById("hide_edit").style.display = "none";
        document.getElementById("hide_icon").style.display = "none";
        document.getElementById("change_color").style.display="none";

    });


</script>
<script>
    $(document).ready(function(){
        $("#cancelBtn1").click(function(){
            $(".content1").collapse('hide');
            document.getElementById("hide_edit1").style.display = "block";
            document.getElementById("hide_icon1").style.display = "block";
            document.getElementById("change_color1").style.display="block";
        });
    });

</script>
<script>
    $('.collapsible1').click(function(){

        $('.content1').collapse('show');

        document.getElementById("hide_edit1").style.display = "none";
        document.getElementById("hide_icon1").style.display = "none";
        document.getElementById("change_color1").style.display="none";




    });


</script>
<script>
    $(document).ready(function(){
        $("#cancelBtn2").click(function(){
            $(".content2").collapse('hide');
            document.getElementById("hide_edit2").style.display = "block";
            document.getElementById("hide_icon2").style.display = "block";
            document.getElementById("change_color2").style.display="block";
        });
    });

</script>
<script>
    $('.collapsible2').click(function(){

        $('.content2').collapse('show');

        document.getElementById("hide_edit2").style.display = "none";
        document.getElementById("hide_icon2").style.display = "none";
        document.getElementById("change_color2").style.display="none";







    });


</script>
<script>
    $(document).ready(function(){
        $("#cancelBtn3").click(function(){
            $(".content3").collapse('hide');
            document.getElementById("hide_edit3").style.display = "block";
            document.getElementById("hide_icon3").style.display = "block";
            document.getElementById("change_color3").style.display="block";
        });
    });

</script>
<script>
    $('.collapsible3').click(function(){

        $('.content3').collapse('show');

        document.getElementById("hide_edit3").style.display = "none";
        document.getElementById("hide_icon3").style.display = "none";
        document.getElementById("change_color3").style.display="none";

       

    });


</script>

</body>

</html>