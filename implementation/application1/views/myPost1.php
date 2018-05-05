<!DOCTYPE html>
<html>
<head>
    <title>Codeigniter infinite scroll pagination</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <style type="text/css">
        .ajax-load{
            background: #e1e1e1;
            padding: 10px 0px;
            width: 100%;
        }

        body{
            background: #9fcdff;
        }


    </style>


</head>
<body>

<div class="container">
   <!-- <div class="col-md-1"></div>-->

    <div class="col-md-12" id="post-data">

    <?php
        $this->load->view('data4', $posts);
    ?>

  </div>

<!--  <div class="col-md-1"></div>-->

</div>

<div class="ajax-load text-center" style="display:none">
    <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More post</p>
</div>
<script type="text/javascript">
    var page = 0;
    $(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() >= $(document).height()) {
            page = page + 5;
            /*alert(page);*/
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
                if(!data){
                   /* $('.ajax-load').html("");*/
                    $('.ajax-load').hide();
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