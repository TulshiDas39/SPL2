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

<?php  $this->load->view('teacherPage6'); ?>

<input type="file" id="file" name="file" style="display: none" onchange="document.getElementById('choice').click();" />
<input id = "post_id" value="" style="display: none"/>


<div class="container">



    <?php $this->load->view('myModel'); ?>
    <div class="col-md-12" id="post-data">

        <?php
        $this->load->view('data6', $posts);
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




    var dropbtn ;
    function myFunction(id) {

        dropbtn = id;
       var listId = id+'d';
       document.getElementById(listId).classList.toggle("show");
    }

    function delete_post(id){
        alert(id);
        var child = document.getElementById("div"+id);
        child.parentNode.removeChild(child);
        child = document.getElementById("par"+id);
        child.parentNode.removeChild(child);



        var form_data = new FormData();
        form_data.append('post_id', id);

        $.ajax({

            url: 'http://localhost/SPL/index.php/ajaxupload/delete_post', // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                alert(response+'from store');
                update_status(response);
                $('#file').value = "";
            },
            error: function (response) {
                /*alert('error happened in store');*/
                alert(response);

            }
        });


    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('#'+dropbtn)) {

            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }


</script>


<script>

    function toggle_submissions(post_id) {
        var x = document.getElementById("s"+post_id);
        if (x.style.display === "none") {
            show_submissions(post_id);
            x.style.display = "block";
            document.getElementById(post_id).innerText = "hide submissions";
           /* x.style.display = "block";*/
        } else {
            x.style.display = "none";
            document.getElementById(post_id).innerText = "submissions";
        }
    }

function show_submissions(post_id) {

    var form_data = new FormData();
    form_data.append('post_id', post_id);

    $.ajax({

        url: 'http://localhost/SPL/index.php/ajaxupload/load_submissions', // point to server-side controller method
        dataType: 'text', // what to expect back from the server
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function (response) {
            if(!response){
                alert('no submission found');
            }
            else{
                /*$("#s"+post_id).append(response);*/
                $("#s"+post_id).empty();
                $("#s"+post_id).append(response);
            }
        },
        error: function (response) {
            alert('erron in submissions');
            /* $('#msg').html(response);*/ // display error response from the server
        }
    });




}

</script>





<script>
    var edit_postId = '-1';
    var edit_postType = '-1';

    function edit_post(post_id,type) {
        alert(post_id);
        alert(type);
        edit_postId = post_id;
        edit_postType = type;
        /*alert('type ='+type);*/
        if(type == '0'){
            alert($('#title'+edit_postId).text());
            $('#topic').val($('#title'+edit_postId).text());
            $('#share').val($('#description'+edit_postId).text());
            $('#post_Button').click();
        }
        else if(type =='1'){
            alert($('#title'+edit_postId).text());
            $('#topic1').val($('#title'+edit_postId).text());
            $('#share1').val($('#description'+edit_postId).text());
            var due = $('#due'+edit_postId).text();
            var array = due.split(" ");
           /* var date = array[1];*/
            var date = array[2];
            var time = array[4];
            var daylight = array[5];
            /*date = moment("Nov/21/2015", "mmm/DD/YYYY").format("MM/DD/YYYY");alert(newDate);*/
            date = moment(date, "DD/MMM/YYYY").format("MM/DD/YYYY");
            time = moment(time+" "+daylight, "hh:mm:ss A").format("hh:mm A");
           /* alert(date);
            alert(time);*/
            var formates = $('#format'+edit_postId).text();
            set_formateToEdit(formates);
            $('#submission_date').val(date);
            $('#submission_time').val(time);
            $('#assignment_Button').click();


        }

    }
    
    function post(attachment) {
        alert(attachment);
        $('#CRID').modal('hide');
        var form_data = new FormData();
        var topic = document.getElementById("topic").value;
        var description = document.getElementById("share").value;
        alert(topic);
        alert(description);
        form_data.append('topic', topic);
        form_data.append('description', description);
        form_data.append('attachment',attachment);
        form_data.append('edit_postId',edit_postId);
        /*form_data.append('path',path);*/

        $.ajax({

            url: 'http://localhost/SPL/index.php/ajaxupload/store_post', // point to server-side controller method
            dataType: 'text',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (data) {
                alert('OK');
                if(edit_postId != '-1') $('#div'+edit_postId).remove();
                $("#post-data").prepend(data);
                $('#topic').val('');
                $('#share').val('');
                /*$('#file_text1').val('No file chosen yet');*/
                $('#file_text1').text('No file chosen yet');
                /*if()*/
                if(edit_postId != '-1'){
                    $('#edited'+edit_postId).css({"display":"inline-block"});

                    $('html, body').animate({
                        scrollTop: ($('#div'+edit_postId).offset().top)
                    },500);
                    edit_postId = -1 ;
                    edit_postType = -1 ;
                }
                else {
                    $('html, body').animate({
                        scrollTop: ($('#post-data').first().offset().top)
                    },500);
                }



            },
            error: function (response) {
                alert(response);
                $('#topic').val('');
                $('#share').val('');
                $('#file_text1').val('No file chosen yet');
                edit_postId = -1 ;
                edit_postType = -1 ;
            }
        });

    }
    
    
    function store_attachment(type) {
        if(type == 0){
            if( document.getElementById("share").value == ""){
                alert('Description field must be filled');
                return ;
            }
        }
        else if(type == 1){
            if( document.getElementById("share1").value == ""){
                alert('Description field must be filled');
                return;
            }

        }

        var file_data;
        if(type == 0) file_data = $('#real_file2').prop('files')[0];
        else file_data = $('#real_file').prop('files')[0];
        var form_data = new FormData();

        form_data.append('attachment', file_data);

        $.ajax({

            url: 'http://localhost/SPL/index.php/ajaxupload/store_attachment', // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                var fnames = response.split("|").length;
                if(response.split("|").length !=2){
                    alert(response);
                    if(response == ""){
                        alert("0");
                        response = '0';
                       /* $('#real_file2').value = "";*/
                        if(type == 0){
                            $('#real_file2').val('');
                            post(response);
                        }
                        else {
                            $('#real_file').val('');
                            post_assignment(response);
                        }
                    }
                }
                else{
                    alert(response);
                    $('#real_file2').val('');
                    $('#real_file').val('');
                    if(type == 0) post(response);
                    else post_assignment(response);

                }
            },
            error: function (response) {
                 // display error response from the server
            }
        });

    }


    function post_assignment(attachment) {

        alert('has come');
        $('#ASID').modal('hide');
        var form_data = new FormData();
        var topic = document.getElementById("topic1").value;
        var description = document.getElementById("share1").value;
        var date = document.getElementById("submission_date").value;
        /*var date = $("#datetimepicker1").data("datetimepicker").getDate();*/
        var time = document.getElementById("submission_time").value;
        var format = get_format();
        alert(date);
        alert(time);
        alert(topic);
        alert(description);
        form_data.append('topic', topic);
        form_data.append('description', description);
        form_data.append('attachment',attachment);
        form_data.append('due_date',date);
        form_data.append('due_time',time);
        /*alert(format);*/
        form_data.append('format',format);
        form_data.append('edit_postId',edit_postId);


        $.ajax({

            url: 'http://localhost/SPL/index.php/ajaxupload/store_assignment', // point to server-side controller method
            dataType: 'text',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (data) {
                /*alert(data);*/
                alert('OK');
                if(edit_postId != '-1') $('#div'+edit_postId).remove();
                $("#post-data").prepend(data);
                $('#topic1').val('');
                $('#share1').val('');
                $('#submission_date').val('');
                $('#submission_time').val('');
                $('#selected_formates').empty();

                $('#file_text').text('No file chosen yet');
               /* $('#file_text1').empty();*/


                if(edit_postId != '-1'){
                    $('#edited'+edit_postId).css({"display":"inline-block"});
                    $('html, body').animate({
                        scrollTop: ($('#div'+edit_postId).offset().top)
                    },500);
                    edit_postId = -1 ;
                    edit_postType = -1 ;
                }
                else {
                    $('html, body').animate({
                        scrollTop: ($('#post-data').first().offset().top)
                    },500);
                }
            },
            error: function (response) {

                alert('error has occured');
                alert(response+"error");
                $('#topic1').val('');
                $('#share1').val('');
                $('#submission_date').val('');
                $('#submission_time').val('');
                $('#selected_formates').empty();
                $('#file_text').text('No file chosen yet');
                /*$('#file_text1').val('No file chosen yet');*/
            }
        });

    }


</script>


<script>


    $(function(){
        $('#check_format').change(function(){
            var select_format = $('#check_format').val();
            if(exist(select_format) != '-1') return;
            alert(select_format);

            var lis = document.createElement('div');
            lis.classList="item";
            lis.setAttribute("style", "background:#8ba8af;border-radius:10px;");
            lis.setAttribute("onclick", "this.remove(this)");
            var t = document.createTextNode(select_format);
            lis.appendChild(t);
            var icon = document.createElement('span');
            icon.classList = "glyphicon glyphicon-remove";
            lis.appendChild(icon);

            document.getElementById("selected_formates").appendChild(lis);
            alert('ok');
            $('#check_format').val('');

        });
    });


    function exist(select_format) {
        var strings = [];
        var all="";

        $('.item').each(function(){
            strings.push( $(this).text() );
            all +=$(this).text();
        });

        /*  alert(all);*/
        return $.inArray(select_format, strings);
    }

    function get_format() {

        var all="";
        var num = $('#selected_formates .item').length;
        if(num == '0') return '0';

        $('.item').each(function(){
            all +=$(this).text()+"|";
        });

        /*  alert(all);*/
        return all;
    }

    function set_formateToEdit(text) {
        /*alert(text);*/
        var arr = text.split(":");
        var format = arr[1];
        var format1 = format.split(",");
        var i,select_format;
        for(i=0;i<format1.length;i++){
            select_format = format1[i];


            if(exist(select_format) != '-1') return;
            alert(select_format);

            var lis = document.createElement('div');
            lis.classList="item";
            lis.setAttribute("style", "background:#8ba8af;border-radius:10px;");
            lis.setAttribute("onclick", "this.remove(this)");
            var t = document.createTextNode(select_format);
            lis.appendChild(t);
            var icon = document.createElement('span');
            icon.classList = "glyphicon glyphicon-remove";
            lis.appendChild(icon);
            document.getElementById("selected_formates").appendChild(lis);

        }

    }

</script>


<script>



</script>



</body>
</html>