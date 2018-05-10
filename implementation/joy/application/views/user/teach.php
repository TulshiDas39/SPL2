<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--<link rel="stylesheet" href = "/ci/ASM/teacherStyle.css">-->
    <style>
        #newheader {
             position: fixed;
            background-color: Indigo;
            left: 0px;
            height: 60px;
           /* width: 1348px;*/
            width: 100%;


        }
        .written{
            color: white;
            position: absolute;
           /* border: 3px solid black;*/

            top: 5px;
            left: 90px;

            font-size: 25px;
            font-weight: 700;
            text-align: center;
            height: 40px;
            font-family: "Times New Roman";
        }
        .modal-content
        {
            /* border: 3px solid black;*/
            height: 100%;
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
        .link1{
            color: white;
            font-size: 15px;
            font-weight: 600;
        }
        .link2{
            color: white;
            font-size: 15px;
            font-weight: 600;
        }
        .link3{
            color: white;
            font-size: 15px;
            font-weight: 600;
        }
        #course-sign
        {
            color: white;
            font-size: 25px;
            font-weight: 600;
        }
        .notification
        {

            /*position: absolute;
            height: 25px;
            width: 25px;
            top: 20px;
            right: 100px;*/
            background-color: white;
            border-radius: 50%;
            font-size: 20px;


        }
        .middle{
            background-image: url("/ci/ASM/world.jpg");
            background-size:cover;
            height: 300px;
            width: 100%;

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



       /*  #navlink
         {
             position: absolute;
             top: 10px;
             right: 400px;
             left: 500px;

         }*/
        /*.link1{
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
            !*background-color: #761c19;*!

        }
        .link3{
            position: absolute;
            padding-top:20px ;
            padding-left: 800px;
            font-size: 15px;
            font-weight: 600;

            color: white;
            !*background-color: #761c19;*!

        }*/
        #techBtn{
            background: transparent;
            vertical-align: top;
            /*font-family: "Times New Roman";*/
            font-size: 0.5em;
        }
        #menubar1
        {

            top: 5px;
            color: white;
            font-size: 20px;

        }
        .modal-dialog{
            /*border: 5px solid black;*/
            position: fixed;
            top: 0px;
            left: 0px;
            width: 25%;
            height: 100%;

            overflow: auto;
            overflow-y: auto;
        }
        .modal-content
        {
            /* border: 3px solid black;*/
            height: 100%;
        }
    </style>


</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-xs-12" id="newheader">
            <button class="btn success btn-lg" id = "techBtn" title="Assignment Menu">
                <span class="glyphicon glyphicon-menu-hamburger" id="menubar1"></span>

            </button>
            <div class="written">
                <span>Assignment Management</span>
            </div>
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="newheader">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-target="#navbar-collapse-main " data-toggle="collapse">

                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>

                        </button>
                    </div>
                    <div class=" collapse navbar-collapse " id="navbar-collapse-main">
                        <ul class="nav nav-pills navbar-right" id="navlink">
                            <li ><a href="#" class="link1">Streams</a></li>
                            <li><a href="#" class="link2">Students</a></li>
                            <li><a href="#" class="link3">About</a></li>
                            <li><a href="#"><span class=" glyphicon glyphicon-plus-sign course " id="course-sign" data-toggle="tooltip1" data-original-title=""></span></a></li>
                            <li><a href="#"><span class="notification " ><span class=" glyphicon glyphicon-bell bell" data-toggle="tooltip" data-original-title="Notifications"></span></span></a></li>
                        </ul>
                    </div>
                    <div class="header" id="myheader">
                        <button class="navbar-toggle" id = "techBtn" title="Assignment Menu">
                            <span class="glyphicon glyphicon-menu-hamburger" id="menubar1"></span>
                        </button>
                    </div>

                </div>

            </nav>

        </div>
    </div>
</div>
<div class="middle">
</div>
<div class="main">
    <div class="left">

    </div>
    <div class="right"></div>
</div>
   <!--<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="newheader">
       <div class="container-fluid">
           <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-target="#navbar-collapse-main " data-toggle="collapse">

                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>

               </button>
           </div>
           <div class=" collapse navbar-collapse " id="navbar-collapse-main">
               <ul class="nav nav-pills navbar-right" id="navlink">
                   <li ><a href="#" class="link1">Streams</a></li>
                   <li><a href="#" class="link2">Students</a></li>
                   <li><a href="#" class="link3">About</a></li>
                   <li><a href="#"><span class=" glyphicon glyphicon-plus-sign course " data-toggle="tooltip1" data-original-title=""></span></a></li>
                   <li><a href="#"><span class="notification " ><span class=" glyphicon glyphicon-bell bell" data-toggle="tooltip" data-original-title="Notifications"></span></span></a></li>
               </ul>
           </div>
           <div class="header" id="myheader">
                <button class="navbar-toggle" id = "techBtn" title="Assignment Menu">
                   <span class="glyphicon glyphicon-menu-hamburger" id="menubar1"></span>
                </button>
           </div>

       </div>

   </nav>-->
   <div class="container">
       <div class="row">
           <div class="col-xs-12">
               <!-- <button class="btn btn-primary btn-sm" >Login</button>-->
               <div class="modal" data-keyboard="false" id="menuid" tabindex="-1">
                   <div class="modal-dialog">
                       <div class="modal-content">
                           <div class="modal-header">
                               <button  class="close" data-dismiss="modal">&times;</button>
                               <div>
                                   <a href="#">
                                       <span class="glyphicon glyphicon-home">&nbsp;Classes</span><br>

                                   </a>
                               </div>
                               <div>
                                   <a href="#">
                                       <span class="glyphicon glyphicon-calendar calendar" >&nbsp;Calender</span>
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
   <script>
       $(document).ready(function(){
           $('#techBtn').click(function(){
               $('#menuid').modal('show');
           });
       });
   </script>
</body>
</html>