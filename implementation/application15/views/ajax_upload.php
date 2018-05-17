<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Ajax UP Bar</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://malsup.github.com/jquery.form.js"></script>
    <script type="text/javascript">
        $(document).ready( function() {
            $('form').submit( function() {
                var bar = $('.bar');
                var percent = $('.percent');
                var status = $('#status');
                $(this).ajaxForm({
                    beforeSend: function() {
                        status.html();
                        var percentVal = '0%';
                        bar.width(percentVal)
                        percent.html(percentVal);
                    },
                    uploadProgress: function(event, position, total, percentComplete) {
                        var percentVal = percentComplete + '%';
                        bar.width(percentVal)
                        percent.html(percentVal);
                    },
                    complete: function(xhr) {
                        status.html(xhr.responseText);
                    }
                });
            });
        });
    </script>
</head>

<body>

<form method="post" action="<?php echo base_url('myUploader/upload/'); ?>" enctype="multipart/form-data">
    <label for="upload">Select : </label>
    <input type="file" name="upload[]" id="upload" multiple="multiple" />
    <input type="submit" name="fsubmit" id="fsubmit" value="Upload" />
</form>

<div class="progress">
    <div class="bar"></div >
    <div class="percent">0%</div >
</div>

<div id="status"></div>

</body>
</html>
<style>
    body { padding: 30px }
    form { display: block; margin: 20px auto; background: #eee; border-radius: 10px; padding: 15px }

    .progress { position:relative; width:400px; border: 1px solid #ddd; padding: 1px; border-radius: 3px; }
    .bar { background-color: #B4F5B4; width:0%; height:20px; border-radius: 3px; }
    .percent { position:absolute; display:inline-block; top:3px; left:48%; }
</style>