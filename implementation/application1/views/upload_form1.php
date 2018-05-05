<html>
<head>
    <title>Upload Form</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>


</head>
<body>

<?php echo $error;?>

<?php echo form_open_multipart('upload/do_upload');?>



<?php
    $this->load->view('fie_button');

?>
<input type="file" id="selectedFile" name="userfile" style="display: none;" />


<br /><br />

<input type="submit" value="upload" />



</form>

</body>
</html>