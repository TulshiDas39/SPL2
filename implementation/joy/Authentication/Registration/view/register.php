<!DOCTYPE html>
<html>
<head>
    <title>Register to the system</title>
    <link rel="stylesheet" type="text/css" href="/ci/ASM/css/bootstrap.min.css">
    <script type="text/javascript" src="/ci/ASM/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style type="text/css">
        body{
            background-image: url('/ci/ASM/new.png');
            background-size: 780px 100%;
            font-family: sans-serif;
        }
        #form{
            /*position: absolute;
            top: 300px;*/
            /*position: fixed;*/
            /*top: 20px;*/
          /*  border: 3px solid red;*/
            background-color: Darkcyan;
            min-height: 600px;
        }
        .header{
            /*position:fixed;*/
            background-color: Teal;
            color: white;
            height: 60px;
            width:100%;

        }
        .intro{
            position: relative;
            top:0px;
            left: 50px;
            font-size: 40px;
            font-family: "Agency FB",Courier,Monospace;
            font-weight: 700;
            color: #5f391b;
        }
        .registration{
           /* position: absolute;
            top: 300px;*/
          /*  border: 3px solid red;*/
            font-size: 55px;
            color: brown;
            font-family: Agency FB;
            font-weight: 700;
            border-bottom-style: ridge;

        }
        .formDecorator{
            padding: 30px 80px 30px 60px;
        }

        .about{
            /*  margin-top: 20px;
             margin-right: 250px;*/
             margin-left: 1000px;
             margin-right:100px;
             height: 50px;
            /* background-color: red;*/

         }

        #para{

            position: absolute;
            top: 15px;
            /*left: 920px;*/
            color: black;
            font-size: 30px;
            font-weight: 700;

        }
        #help{
            position: absolute;
            top: 15px;
            left: 1080px;
            color: black;
            font-size: 30px;
            font-weight: 700;
        }

    </style>
</head>
<body>
<div class="header">

    <div class="intro">Assignment Management System</div>
   <div class="about">

       <a href="#" data-toggle="tooltip" title="About" id="para"><span class="glyphicon glyphicon-info-sign"></span></a>
       <a href="#" data-toggle="tooltip1" title="Quick Help" id="help"><span class="glyphicon glyphicon-question-sign"></span></a>


   </div>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip1"]').tooltip();
        });
    </script>


</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-7" id="form">
            <center class="registration"><b>Registration Form</b></center>
           <!--<form class="formDecorator" method="post" action="Register/userRegister">-->

              <form method="post" action="UserRegister" class="formDecorator" id="myform">

                <div class="form-group" data-toggle="fistnametooltip" title=" 1. This field contains only alpha-numeric characters, underscores or dashes.
2. Its Maximum length is 20 and minimum is 3." >

                    <label for="exampleInputfirstName" style="color: black">First Name:</label>
                    <input type="text" name="firstName" class="form-control" id="exampleInputfirstName" placeholder="first Name" value="<?php echo set_value('firstName'); ?>" />
                </div>
            <script>
            $(document).ready(function(){
                $('[data-toggle="firstnametooltip"]').tooltip();
               });
            </script>

                  <?php echo form_error('firstName'); ?>
                <div class="form-group"data-toggle="lastnametooltip" title=" 1. This  field contains only alphabetic characters.
2. Its Maximum length is 20 and minimum is 3." >

                    <label for="exampleInputlastName" style="color: black">Last Name:</label>
                    <input type="text" name="lastName"  class="form-control" id="exampleInputlastName" placeholder="last Name" value="<?php echo set_value('lastName'); ?>" />
                </div>
                  <script>
                      $(document).ready(function(){
                          $('[data-toggle="lastnametooltip"]').tooltip();
                      });
                  </script>
                  <?php echo form_error('lastName'); ?>
                <div class="form-group" data-toggle="emailtoolttip" title="Enter a valid email">

                    <label for="exampleInputEmail" style="color: black">Email:</label>
                    <input type="text" name="Email"  class="form-control" id="exampleInputEmail" placeholder="email" value="<?php echo set_value('Email'); ?>" />
                </div>
                  <script>
                  $(document).ready(function(){
                  $('[data-toggle="lastnametooltip"]').tooltip();
                  });
                  </script>
                  <?php echo form_error('Email'); ?>
                <div class="form-group" data-toggle="passwordtooltip"  title=" 1. This field contains only alpha-numeric  characters.
2. Its Maximum length is 20 and minimum is 7." >
                    <label for="exampleInputPassword" style="color: black">Password:</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="password" value="<?php echo set_value('password'); ?>" />
                </div>
                  <script>
                      $(document).ready(function(){
                          $('[data-toggle="passwordtooltip"]').tooltip();
                      });
                  </script>
                  <?php echo form_error('password'); ?>
                <div class="form-group">
                    <label for="exampleInputRepassword" style="color: black">Repeat Password:</label>
                    <input type="password" name="repeatpassword" class="form-control" id="exampleInputrepeatPassword" placeholder="repeat password" value="<?php echo set_value('repeatpassword'); ?>" />
                </div>
                  <?php echo form_error('repeatpassword'); ?>
                <div class="form-group" data-toggle="numbertooltip" title="This  field contain only natural numbers:0, 1, 2, 3, etc.">
                    <label for="exampleInputPhoneNumber" style="color: black">Phone Number:</label>
                    <input type="text" name="phoneNumber" class="form-control" id="exampleInputPhoneNumber" placeholder="phone number" value="<?php echo set_value('phoneNumber'); ?>" />
                </div>
                  <script>
                      $(document).ready(function(){
                          $('[data-toggle="numbertooltip"]').tooltip();
                      });
                  </script>
                  <?php echo form_error('phoneNumber'); ?>
                <div class="form-group">
                    <input type="submit" class="btn btn-success btn-block" value="submit" name="submit">
                </div>
            </form>


        </div>
    </div>
</div>
</body>
</html>