
<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            background: #9fcdff;
        }
        .mydiv{
            background: white;
            margin-left: 20%;
            margin-right:20% ;
            padding-left: 1%;
            padding-right: 1%;
        }
        .upper{
         /*   height: 20%;*/
            width: 100%;
            background: #6c757d;
            color: white;
        }
    </style>
</head>
<body>
<?php $i=0; foreach($assignments as $assignment){?>

    <div class="mydiv">
        <div class="upper"><?php echo $firstName[$i][0]->firstName." hare krishna"?><br>

        </div>
        <hr>
        <h3><a href=""><?php echo $assignment->title ?></a></h3>
        <p><?php echo $assignment->description ?></p>
        <div class="text-right">
            <button class="btn btn-success">Read More</button>
        </div>
        <hr style="margin-top:5px;">
    </div>
<?php $i++; } ?>


<!--<div class="ajax-load text-center" style="display:none">
    <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More post</p>
</div>-->


<!--
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
</body>

</html>