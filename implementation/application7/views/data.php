
<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            background: #9fcdff;
        }
        .mydiv{
            background: white;
            margin-left: 10%;
            margin-right:10% ;
        }
    </style>
</head>
<body>
<?php foreach($posts as $post){ ?>
<div class="mydiv">
	<h3><a href=""><?php echo $post->title ?></a></h3>
	<p><?php echo $post->description ?></p>
	<div class="text-right">
		<button class="btn btn-success">Read More</button>
	</div>
	<hr style="margin-top:5px;">
</div>
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