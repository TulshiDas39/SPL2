<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>AJAX File upload using Codeigniter, jQuery</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <script type="text/javascript">
        var x = '5';
        $(document).ready(function (e) {

            $('#upload').on('click', function () {
                alert('has come');
                var file_data = $('#file').prop('files')[0];

                send_postId();
                var form_data = new FormData();
                form_data.append('file', file_data);
                /* form_data.append('x',x);*/
                $.ajax({
                    url: 'http://localhost/ASM3/index.php/test3/upload_file', // point to server-side controller method
                    dataType: 'text', // what to expect back from the server
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    type: 'post',
                    success: function (response) {
                        alert(response);
                        $('#msg').html(response); // display success response from the server
                    },
                    error: function (response) {
                        $('#msg').html(response); // display error response from the server
                    }
                });
            });
        });

        function send_postId() {
            alert('has come');
            var form_data = new FormData();
            /*form_data.append('file', file_data);*/
            form_data.append('x',x);
            $.ajax({
                url: 'http://localhost/ASM3/index.php/test3/get_postId, // point to server-side controller method
                dataType: 'text', // what to expect back from the server
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function (response) {
                    alert(response);
                    $('#msg').html(response); // display success response from the server
                },
                error: function (response) {
                    $('#msg').html(response); // display error response from the server
                }
            });
        }
    </script>

</head>
<body>
<p id="msg"></p>
<input type="file" id="file" name="file" />
<button id="upload">Upload</button>




</body>
</html>