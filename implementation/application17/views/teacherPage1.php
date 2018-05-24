
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
    <!--<div class="dropdown">
    <button class="btn btn-circle dropdown-toggle" id="notification_button" type="button" data-toggle="dropdown">
        <span class="notification " ><span class=" glyphicon glyphicon-bell bell" data-toggle="tooltip" data-original-title="Notifications"></span></span></button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
        </ul>

    </div>-->
    <div class="dropdown1">
        <button class="btn btn-circle dropdown-toggle" id="notification_button" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <span class="notification " ><span class=" glyphicon glyphicon-bell bell" data-toggle="tooltip" data-original-title="Notifications"><span class="badge badge-light" id="notifction_count"></span></span></span></button>
        <div class="dropdown-menu" aria-labelledby="notification_button" id="menu_div">

                 <li><a style=""class="dropdown-item" href=""><small><i></i></small><br/></a></li>
            <div class="dropdown-divider"></div>

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
           Design pattern semister 5
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

<!--<script type="text/javascript">
    $(document).ready(function () {
        function load_unseen_notification(view='')
        {
                $.ajax({
                    url:"fetch.php",
                    method:"POST",
                    data:{view:view},
                    dataType:"json",
                    success:function (data) {
                        $('.dropdown-menu').html(data.notification);
                        if(data.unseen_notification>0)
                        {
                            $('#notifction_count').html(data.unseen_notification);
                        }
                    }
                })
        }
        load_unseen_notification();
        $('#assign_form').on('submit',function (event) {


            event.preventDefault();
            var form_data=$(this).serialize();
            $.ajax({
                url: "insert.php",
                method: "POST",
                data:form_data,
                success:function (data) {
                    $('#assign_form')[0].reset();
                    load_unseen_notification();

                }

            })
        });
    });
</script>-->
</body>
</html>