<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href = "/ci/ASM/teacherPage.css">

</head>
<body>
 <div class="scroller">
     <div class="newheader">
         <button class="btn success btn-lg" id = "techBtn" title="Assignment Menu">
             <span class="glyphicon glyphicon-menu-hamburger" id="menubar1"></span>

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
                     <li ><a href="#" class="link1">Streams</a></li>
                     <li><a href="#" class="link2">Students</a></li>
                     <li><a href="#" class="link3">About</a></li>
                 </ul>
             </div>

         </nav>
         <a href="#">
             <span class="notification " ><span class=" glyphicon glyphicon-bell bell" data-toggle="tooltip" data-original-title="Notifications"></span></span>

         </a>
         <button class="btn success btn-lg " id="techBtn1">

             <span class=" glyphicon glyphicon-plus-sign course " data-toggle="tooltip1" data-original-title="Course Releated"></span>

         </button>

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
                                     <a href="#">
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
     <div class="container">
         <div class="row">
             <div class="col-xs-12">
                 <!-- <button class="btn btn-primary btn-sm" >Login</button>-->
                 <div class="modal" data-keyboard="false" id="menuid1" tabindex="-1">
                     <div class="modal-dialog" id="course-menu">
                         <div class="modal-content" id="course-content">

                             <a href="#">
                                 <span class="glyphicon glyphicon-comment" id="announce">
                                     <span id="check-post">Create post</span>
                                 </span>
                             </a>
                             <a href="#">
                                   <span class= "glyphicon glyphicon-list-alt" id="assignment">
                                        <span class="checker">Create assignment</span>
                                   </span>

                             </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
   <div class="middle">
       <span class="course-name">
           Design pattern semister 5
       </span>
   </div>
  <div class="main">
      <div class="left">

      </div>
      <div class="right"></div>
  </div>
   </div>
  <script>
      $(document).ready(function(){
          $('#techBtn').click(function(){
              $('#menuid').modal('show');
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


</body>
</html>