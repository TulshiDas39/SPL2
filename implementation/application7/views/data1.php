
<!DOCTYPE html>

<html>
<head>
    <style type="text/css">
        .posts{
            background: black;
            height: 10em;
            width: 100%;
        }

    </style>

</head>


<body>
<?php foreach($classes as $class){ ?>
<div  <!--class="posts"-->>
	<h3><a href=""><?php echo $class->subject ?></a></h3>
	<!--<p><?php echo $post->description ?></p>
	<div class="text-right">
		<button class="btn btn-success">Read More</button>
	</div>
	<hr style="margin-top:5px;"> -->
</div>
<br>
<?php } ?>


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

</body>

</html>