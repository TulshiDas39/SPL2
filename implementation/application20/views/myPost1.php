<!DOCTYPE html>
<html>
<head>
    <title>Assignment Management System</title>
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

<div>  </div>

<div> <?php  $this->load->view('header2',$group_name); ?> </div>
<input type="file" id="file" name="file" style="display: none" onchange="document.getElementById('choice').click();" />
<input id = "post_id" value="" style="display: none"/>

<div class="container" id = "all_students" style="display: none">
    <div class="col-md-12" id="all_classmates">

    </div>

</div>

<div class="container" id = "about_group" style="display: none">
    <div class="col-md-12" id="all_abouts">

    </div>

</div>


<div id = "all_posts" style="display: block" class="container">
    <?php $this->load->view('myModel'); ?>
    <div class="col-md-12" id="post-data">

    <?php
        $this->load->view('data4', $posts);
    ?>

  </div>

<!--  <div class="col-md-1"></div>-->

</div>

<div class="ajax-load text-center" style="display:none;background: transparent">
    <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More post</p>
</div>
<script type="text/javascript">
    var page = 0;
    var isLoad = true;
    $(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() >= $(document).height()) {
            page = page + 5;
           if(isLoad) loadMoreData(page);
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
                    isLoad = false;
                    return;
                }
                $('.ajax-load').hide();
                $("#post-data").append(data);
            })
            .fail(function(jqXHR, ajaxOptions, thrownError)
            {
                alert('server not responding...');
                $('.ajax-load').hide();
            });
    }
</script>

<script type="text/javascript">

    var post_id;
    function upload(x){
        post_id = x;
        var browse = document.getElementById('file');
        browse.click();
    }

    $('#file').on('click touchstart' , function(){
        $(this).val('');
    });

   /* $(document).ready(function (e) {
        $('#confirm').on('click', function () {

            alert('has come');
            var file_data = $('#file').prop('files')[0];
            var form_data = new FormData();

            form_data.append('file', file_data);

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
*/

    function send_submittedfile(){
        var file_data = $('#file').prop('files')[0];
        var form_data = new FormData();

        form_data.append('file', file_data);

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
                    $('#file').value = "";
                    send_postId(response);
                }

            },
            error: function (response) {
                $('#msg').html('error ssds:'+response); // display error response from the server
            }
        });

        $('#close').on('click', function (){
            $('#file').value = "";
        });


    }

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
                /*$('#file').val('');*/

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
                update_status(response);
                /* $('#msg').html(response); */// display success response from the server
                $('#file').val('');
            },
            error: function (response) {
                alert('error happened in store');
               /* $('#msg').html(response);*/ // display error response from the server
            }
        });

    }

    function update_status($status) {
        document.getElementById('t'+post_id).innerHTML = $status;
        document.getElementById(post_id).innerText = 'Resubmit';
    }

</script>

<script>
    function show_classmates(group_id) {
        var form_data = new FormData();
        form_data.append('group_id', group_id);



        $.ajax({

            url: 'http://localhost/SPL/index.php/ajaxupload/load_classmates', // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                /*$('#all_posts').css('display','none');
                $('#all_abouts').empty();
                $('#about_group').css('display','none');*/
                hide_about();
                hide_posts();

                $('#all_classmates').append(response);
                $('#all_students').css('display','block');
            },
            error: function (response) {
                alert('Can not load classmates');
            }
        });

    }


    function show_allPosts() {

        /*$('#all_classmates').empty();
        $('#all_abouts').empty();
        $('#about_group').css('display','none');
        $('#all_students').css('display','none');*/
        hide_classmates();
        hide_about();
        $('#all_posts').css('display','block');

    }


    function show_about(group_id) {
        var form_data = new FormData();
        form_data.append('group_id', group_id);

        $.ajax({

            url: 'http://localhost/SPL/index.php/ajaxupload/get_about', // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                hide_classmates();
                hide_posts();
                $('#all_abouts').append(response);
                $('#about_group').css('display','block');
            },
            error: function (response) {
               alert('Can not load response');
            }
        });

    }

    function hide_classmates() {
        $('#all_classmates').empty();
        $('#all_students').css('display','none');
    }
    function hide_posts() {
        $('#all_posts').css('display','none');
    }
    function hide_about() {
        $('#all_abouts').empty();
        $('#about_group').css('display','none');
    }

</script>



</body>
</html>