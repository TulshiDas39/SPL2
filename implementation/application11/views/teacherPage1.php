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
                     <li ><a href="#" class="link1">Streams</a></li>
                     <li><a href="#" class="link2">Students</a></li>
                     <li><a href="#" class="link3">About</a></li>
                 </ul>
             </div>

         </nav>
         <button class="btn success btn-lg" id="notification_button" >
             <span class="notification " ><span class=" glyphicon glyphicon-bell bell" data-toggle="tooltip" data-original-title="Notifications"></span></span>

         </button>
         <button class="btn success btn-lg " id="techBtn1">

             <span class=" glyphicon glyphicon-plus-sign course " data-toggle="tooltip1" data-original-title="Create"></span>

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
     <div class="container">
         <div class="row">
             <div class="col-xs-12">
                 <!-- <button class="btn btn-primary btn-sm" >Login</button>-->
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

                                 <textarea typeof="tesxt" placeholder="Share topic" id="topic" name="topic"></textarea>
                                 <textarea type="text" placeholder= "Share post" id="share" name="share_post" ></textarea>

                             </div>
                             <div class="modal-footer">
                                <button class="btn success btn-lg" id="file_button" title="Attach file">
                                    <span class="glyphicon  glyphicon-paperclip" id="paper_clip"></span>

                                </button>
                                 <button class="btn success btn-lg" id="link_button" title="Share link">

                                     <span class="glyphicon glyphicon-link" id="link"></span>
                                 </button>
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
     </div>
     <div class="container">
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
                                 <textarea typeof="tesxt" placeholder="Title" id="topic" name="title"></textarea>
                                 <textarea type="text" placeholder= "Instructions" id="share" name="instructions"></textarea>
                                 <!--<input class="datetimepicker"v type="text" name="date">-->
                                 <!--<div id="datepicker" class="input-group date" data-date-format="yyyy-mm-dd">
                                     <input type="text" name="">
                                     <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>

                                 </div>-->
                                 <!--<div class="input-append date form_datetime">
                                     <input size="16" type="text" value="" >
                                     <span class="add-on"><i class="icon-th"></i></span>
                                 </div>-->
                                    <label id="date_label">Submission Date:</label>
                                    <input  class="sub_date" type="date" name="date">

                                 <label id="time_label">Submission Time:</label>
                                 <input type="time" id="sub_time" name="time">
                             </div>
                             <div class="modal-footer">
                                 <button class="btn success btn-lg" id="file_button1" title="Attach file">
                                     <span class="glyphicon  glyphicon-paperclip" id="paper_clip1"></span>

                                 </button>
                                 <button class="btn success btn-lg" id="link_button1" title="Share link">

                                     <span class="glyphicon glyphicon-link" id="link1"></span>
                                 </button>
                                 <button class="btn success btn-lg" id="delete_button1">
                                     <span class="glyphicon glyphicon-trash" id="trash_button1"></span>
                                 </button>
                                 <button type="submit" class="btn btn-primary" id="post_btn" name="assign" >Assign</button>
                                 <div style="clear: both"></div>
                             </div>
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
             $('#CRID').modal('hide');

         });
     });
 </script>
 <script>
     $(document).ready(function(){
         $('#delete_button1').click(function(){
             $('#ASID').modal('hide');

         });
     });
 </script>
</body>
</html>