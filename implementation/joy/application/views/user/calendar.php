<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href = "/ci/ASM/calendarpage.css">
    <script>
        $(document).ready(function(){
           var calendar = $('#calendar').fullCalendar({
               editable:true,
               header: {
                   left: 'prev,next today',
                   center: 'title',
                   right: 'month,agendaWeek,agendaDay'
               },
           });

        });
    </script>

</head>
<body>
<div class="newheader">
    <button class="btn success btn-lg" id = "techBtn" title="Assignment Menu">
        <span class="glyphicon glyphicon-menu-hamburger" id="menubar1"></span>

    </button>
    <button class="btn success btn-lg" id="notification_button" title="Notifications">
        <span class="notification " ><span class=" glyphicon glyphicon-bell bell" data-toggle="tooltip" data-original-title="Notifications"></span></span>

    </button>
    <button class="btn success btn-lg" id="calendar_button" title="Today">
    <span class="glyphicon glyphicon-calendar" id="icon_calendar"></span>
    </button>


</div>

 <div class="container">
     <div id="calendar" class="middle">

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
<script>
    $(document).ready(function(){
        $('#techBtn').click(function(){
            $('.container').modal('hide');
            $('#menuid').modal('show');
        });
    });
</script>

</body>
</html>