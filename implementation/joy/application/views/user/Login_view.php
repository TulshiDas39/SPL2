<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <!-- <link rel="stylesheet" href = "<?php /*echo base_url()*/?>application/views/style.css">-->

    <style>
        .header{
            background: green;
            height: 3em;
            width: 100%;
        }
        .content{
            background: #007bff;
            height: 400px;
            width: 100%;
            background-image :url("assignments.jpg");
            background-size: 100% 100%;
            /*background-repeat:round ;*/
            display: table;
        }
        #welcomeText{
            text-align: center;
            vertical-align: middle;
            display: table-cell;
            font-family: "Helvetica Neue ","Times New Roman","Century Gothic" ;
            font-size: 3em;
        }
        .rHeader{
            height: 100%;
            font-family: "Times New Roman";
            font-size: 3em;
            /*background: #1b1e21;*/
        }

        .lHeader{
            float: left;
            height: 100%;
            width: 60%;
            display: table;
            /*background: #4e4a4a;*/
        }
        #techBtn{
            background: transparent;
            vertical-align: top;
            font-family: "Times New Roman";
            font-size: 0.5em;
        }

        #learnBtn{
            background: transparent;
            vertical-align: top;
            font-family: "Times New Roman";
            font-size: 0.5em;
        }
        #tFooter{
            font-family: "Century Gothic";
            font-weight: bold;
            font-size: 1.5em;
            text-align: center;
        }
        .lHeader p{
            height: 100%;
            margin: 10px;
            display: inline-block;
            vertical-align: middle;
            font-family:"Times New Roman";
            font-size: 2em;
            font-style: italic;
            font-weight: bold;
            font-size: medium;
        }
        .btn-circle .btn-xl {
            width: 70px;
            height: 70px;
            padding: 10px 16px;
            border-radius: 35px;
            font-size: 24px;
            line-height: 1.33;
        }
        .btn-circle {
            width: 30px;
            height: 30px;
            padding: 6px 0px;
            border-radius: 15px;
            text-align: center;
            font-size: 12px;
            line-height: 1.42857;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        .dropdown-content a:hover {
            background-color: #ddd;
        }
        #myDropdown{
            font-family: "Times New Roman";
            font-size: medium;
            background: #8ba8af;
        }
        .show {
            display: block;
        }
        #helpAndSupport{
            text-decoration: none;
            font-family: "Times New Roman";
            font-size: small;
            text-align: center;
        }
        #helpAndSupport a{
        }
    </style>
</head>
<body>

<div class = "header">
    <div class = "lHeader"><p>Assignment Management System</p></div>
    <div class = "rHeader"style="display: flex;
  align-items: center;
  justify-content: center;">
        <button class="btn success " id = "techBtn">Teach &nbsp;&nbsp;&nbsp;|</button>
        <button class="btn success mybtn" id = "learnBtn">Learn &nbsp;&nbsp;&nbsp;</button>
        <div class="dropdown" style="background: transparent">
            <button id = "userbtn" class="btn btn-circle user-button" style="position:relative;background: transparent;outline: none"><span class="glyphicon glyphicon-user"></span> </button>
            <div class="dropdown-content" id="myDropdown">
                <a href="#">Setting</a>
                <a href="Login/log_out">Log out</a>
            </div>
        </div>

    </div>
    <div class = "content"> <p id = "welcomeText">Welcome to Assignment Management System</p> </div><br><br>

    <p id = "tFooter">You can create a group as a Instructor, you can join group as a student also</p><br>
    <div id ="helpAndSupport"><a href="#">support</a> <span>&emsp;&emsp;&emsp;&emsp;</span> <a href="#">about</a> </div>


    <!-- for teach -->
    <div class="container">

        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" style="padding:35px 50px;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4><span class="glyphicon glyphicon-cog"></span> Course Info</h4>
                    </div>
                    <div class="modal-body" style="padding:40px 50px;">
                        <form role="form" method="post" action="Create_course">
                            <div class="form-group">
                                <label for="usrname"><span class="glyphicon glyphicon-pencil"></span> Course Name</label>
                                <input type="text" name="course_name" class="form-control" id="usrname" placeholder="Enter Course name" required>
                            </div>
                            <div class="form-group">
                                <label for="psw"><span class="glyphicon glyphicon-pencil"></span> Semster</label>
                                <input type="text" name="semester" class="form-control" id="psw" placeholder="Enter Semester" required>
                            </div>
                            <div class="form-group">
                                <label for="psw"><span class="glyphicon glyphicon-pencil"></span> Class-code</label>
                                <input type="text" name="class_code" class="form-control" id="psw" placeholder="Enter Class-code" required>
                            </div>

                            <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- for learn option -->
    <div class="container">

        <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" style="padding:35px 50px;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4><span class="glyphicon glyphicon-cog"></span> Join group</h4>
                    </div>
                    <div class="modal-body" style="padding:40px 50px;">
                        <form role="form">
                            <div class="form-group">
                                <label for="usrname"><span class="glyphicon glyphicon-pencil"></span> Group code</label>
                                <input type="text" name="group_code" class="form-control" id="usrname" placeholder="Enter group code" required>
                            </div>

                            <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Submit</button>
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
            $("#techBtn").click(function(){
                $("#myModal").modal();
            });
        });
        $(document).ready(function(){
            $("#learnBtn").click(function(){
                $("#myModal1").modal();
            });
        });
        /* this section is for dropdown list */
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        // function myFunction() {
        /*document.getElementById("myDropdown").classList.toggle("show");*/
        $(document).ready(function(){
            $('#userbtn').click(function(){
                $('#myDropdown').toggle('show');
            });
            $(document).click(function (e) {
                e.stopPropagation();
                var container = $("#userbtn");
                //check if the clicked area is dropDown or not
                if (container.has(e.target).length === 0) {
                    $('#myDropdown').hide();
                }
            })
            /*    $(document).ready(function(){
                    $(window).click(function(e){
                       if(($(event.target).attr('id') !== "userbtn")  ) {
                           $('#myDropdown').hide();
                       }*/
            /*
                         else if($(event.target).attr('class') !== "glyphicon-user") {
                              $('#myDropdown').hide();
                          }
                      });*/
        });
        // }
        /* $(document).ready(function(){
             $(window).click(function(e){
                 if(!e.target.match('#userbtn')){
                     var $myDropdown = $('#myDropdown');
                     if($myDropdown.classList.contains('show')){
                         $myDropdown.classList.remove('show');
                     }
                 }
             });
         });*/
        /*  $(document).ready(function() {
              $("body").click(function (e) {
                  if (e.target.id == "myDropdown") {
                      $('div#myDropdown').hide();
                  }
              });
          }*/
        // Close the dropdown if the user clicks outside of it
    </script>
    <script>
        /* window.onclick = function(e) {
             if (!e.target.matches('.user-button')) {
                 var myDropdown = document.getElementById("myDropdown");
                 if (myDropdown.classList.contains('show')) {
                     myDropdown.classList.remove('show');
                 }
             }
         }
   */
    </script>

</body>
</html>




