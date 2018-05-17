<!DOCTYPE html>
<html>
<head>
    <title>Codeigniter infinite scroll pagination</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


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

<input type="file" id="file" name="file" style="display: none" onchange="document.getElementById('choice').click();" />
<input id = "post_id" value="" style="display: none"/>

<div class="container">
    <?php $this->load->view('myModel'); ?>
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

<script type="text/javascript">
/*
    $(document).ready(function (e) {
        $('#file').change(function(){
            /!*alert('afer change');*!/
            $('#choice').click();
        });
    });
*/

    var post_id;
    function upload(x){
        post_id = x;
        var browse = document.getElementById('file');
        browse.click();
    }

    $('#file').on('click touchstart' , function(){
        $(this).val('');
    });

    $(document).ready(function (e) {
        $('#confirm').on('click', function () {
          /*  alert(post_id);*/
            /*send_postId();*/
            var file_data = $('#file').prop('files')[0];
            var form_data = new FormData();

            form_data.append('file', file_data);
           /* form_data.append('post_id', post_id);*/
       /*     alert('hello');*/
            $.ajax({

                url: 'http://localhost/SPL/index.php/ajaxupload/upload_file', // point to server-side controller method
                dataType: 'text', // what to expect back from the server
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function (response) {
                    if(response == 'Please upload zip file'){
                        alert(response);
                    }
                    else{
                        alert(response);
                        $('#file').value = "";
                        send_postId(response);
                    }
                    
                },
                error: function (response) {
                    $('#msg').html('error ssds:'+response); // display error response from the server
                }
            });

        });

        $('#close').on('click', function (){
            $('#file').value = "";
        });
    });

    function send_postId(file_name) {
        var fnames = file_name.split("|");
        var path = fnames[0];
        var regular_name = fnames[1];
       /* alert('in send_postId '+path);
        alert('regular name '+regular_name);*/


        var form_data = new FormData();
        form_data.append('post_id', post_id);
        form_data.append('file_name', path);

        $.ajax({

            url: 'http://localhost/SPL/index.php/ajaxupload/check_format', // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                if (response == 'OK') {
                    store(regular_name,path);
                }
                else alert(response);

               /* $('#msg').html(response); */// display success response from the server
                $('#file').value = "";

            },
            error: function (response) {
                $('#msg').html(response); // display error response from the server
            }
        });

    }

    function store(file_name, path) {

        var form_data = new FormData();
        form_data.append('post_id', post_id);
        form_data.append('file_name', file_name);
        form_data.append('path',path);

        $.ajax({

            url: 'http://localhost/SPL/index.php/ajaxupload/store', // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                alert(response+'from store');
                update_status(response);
                /* $('#msg').html(response); */// display success response from the server
                $('#file').value = "";
            },
            error: function (response) {
                alert('error happened in store');
               /* $('#msg').html(response);*/ // display error response from the server
            }
        });

    }

    function update_status($status) {
        document.getElementById('t'+post_id).innerHTML = $status;
    }

</script>


</body>
</html>