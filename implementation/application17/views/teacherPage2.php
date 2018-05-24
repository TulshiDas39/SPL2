<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
-->

  <!--  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->

    <style type="text/css">



	.newheader{
        position: fixed;
        /* display: none;*/
        background-color: Teal;
        height: 60px;
        left: 0px;
        top: 0px;
        width: 100%;
        z-index: 1;
        /*z-index: 10000;*/

}

.middle{
    /*  position: absolute;*/
  /*  background-image: url("ASM3/world.jpg"); */
 /*   background-size:cover;*/
    top: 61px;
    /* left: 0px;*/
    height: 300px;
    width: 100%;
	background: blue;
    clear:both;
    z-index: 1;
    /* border: 3px solid red;*/
	
	/*background: #007bff;
	height: 20em;
	width: 100%;*/
/*	background-image :url("assignments.jpg"); */
	background-size: 100% 100%;
	display: table;


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
.notification
{

    position: absolute;
    height: 25px;
    width: 25px;
    top: 20px;
    right: 100px;
    background-color: white;
    border-radius: 50%;
    font-size: 15px;


}
.bell{
    /* border: 2px solid black;*/
    position: relative;
    display: inline-block;
    font-size: 15px;
    top:4px;
    right: 2px;
    bottom: 3px;
    left: 4px;
}
#techBtn1
{
    background: transparent;
    position: absolute;
    height: 50px;
    width: 60px;
    top:5px;
    right: 300px;
    font-size: 0.6em;
}
.course
{
    position: absolute;
    top: 13px;
    right: 5px;
    bottom: 0px;
    left: 0px;
    font-size: 25px;
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

    top: 30px;
    left: 10px;
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
    top: 80px;
    left: 10px;
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
	text-align: center;
	vertical-align: middle;
	display: table-cell;
	font-family: "Helvetica Neue ","Times New Roman","Century Gothic" ;
	font-size: 3em;
}



	
	</style>

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

                             <a href="#CRID">
                                 <span class="glyphicon glyphicon-comment" id="announce">
                                     <span id="check-post">Create post</span>
                                 </span>
                             </a>
                             <a href="">
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
	 
      <div class="container">
         <div class="row">
             <div class="col-xs-12">
                 <!-- <button class="btn btn-primary btn-sm" >Login</button>-->
                 <div class="modal" data-keyboard="false" id=CRID tabindex="-1">
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
   <div class="middle">
       <p class="course-name">
           Design pattern semister 5
       </p>
   </div>
   <div>
       <br><br>

   </div>
   
   
   
   <!--
   
<div class="ajax-load text-center" style="display:none">
    <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More post</p>
</div>


<script type="text/javascript">
    var page = 1;
    $(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() >= $(document).height()) {
            page++;
            loadMoreData(page);
        }
    });


    function loadMoreData(page){
        $.ajax(
            {
                url: '?page=' + page,
                type: "get",
                beforeSend: function()
                {
                    $('.ajax-load').show();
                }
            })
            .done(function(data)
            {
                if(data == " "){
                    $('.ajax-load').html("No more records found");
                    return;
                }
                $('.ajax-load').hide();
                $("#post-data").append(data);
            })
            .fail(function(jqXHR, ajaxOptions, thrownError)
            {
                alert('server not responding...');
            });
    }
</script>
   -->
   
   
   
   
   
   <!--
  <div class="main">
      <div class="left">

      </div>
      <div class="right"></div>
  </div>
   </div>
   -->
   
  <script>
      $(document).ready(function(){
          $('#techBtn').click(function(){
              $('#menuid').modal('show');
          });
      });
  </script>
 <script>
     $("#course-content a").click(function(e){
         e.preventDefault();
         $("#menuid1").hide();
         $('#CRID').modal('show');
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