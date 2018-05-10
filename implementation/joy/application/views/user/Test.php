<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
           <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="drop-down"><span class="label label-pill label-danger count">Notification</span></a>
               <ul class="dropdown-menu">

               </ul>
           </li>
        </ul>
    </div>
</nav>
<br/>
<form method="post" id="comment_form">

    <div class="form-group">
        <label>Enter subject</label>
        <input type="text" name="subject" id="subject" class="form-control"/>

    </div>
    <div class="form-group">
        <label>Enter comment</label>
        <textarea name="comment" id="comment" class="form-control" rows="5"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" name="posst" id="post" value="Post" class="btn btn-info">
    </div>
</form>
<script type="text/javascript">
    $(document).ready(function () {
        function load_unseen_notification(view ='')
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
        $('#comment_form').on('submit',function (event) {
            event.preventDefault();
            var form_data=$(this).serialize();
            $.ajax({
                url: "insert.php",
                method: "POST",
                data:form_data,
                success:function (data) {
                    $('#comment_form')[0].reset();
                    load_unseen_notification();

                }

            })
        });
    });
</script>

</body>
</html>
