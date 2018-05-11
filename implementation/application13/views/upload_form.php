<html>
<head>
    <title>Upload Form</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>


</head>
<body>



<?php echo $error;?>

<?php echo form_open_multipart('upload/do_upload');?>


<input type="file" name="userfile" size="20"  />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>