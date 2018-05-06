<html>


<head>
    <title>Image Upload Example from Scratch</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
</head>


<body>


    <?php echo form_open_multipart('ajax-image-upload/post');?>
    <input type="file" name="image" size="20" />
    <input type="submit" class="upload-image" value="upload" />
    </form>


    <div class="preview" style="display: none;">
       <img src="/uploads/bibInpadma.jpg">

    </div>


</body>


<script type="text/javascript">
    $("body").on("click",".upload-image",function(e){
        $(this).parents("form").ajaxForm(options);
    });


    var options = {
        complete: function(response)
        {
           /* if($.isEmptyObject(response.responseJSON.success)){
                alert('Image Upload Successfully.');
                $(".preview").css("display","block");
                $(".preview").find("img").attr("src","/uploads/"+response.responseJSON.success);
            }else{
                alert('Image Upload Error.');
            }*/

            if($.isEmptyObject(response.responseJSON.success)){
                alert('Image Upload Error.');
               /* alert('Image Upload Successfully.');
                $(".preview").css("display","block");
                $(".preview").find("img").attr("src","/uploads/"+response.responseJSON.success);*/
            }
            else{
                /*alert('Image Upload Error.');*/

                /*alert('Image Upload Successfully.');*/
                alert(response.responseJSON.success);
                $(".preview").css("display","block");
                $(".preview").find("img").attr("src","<?php echo base_url()?>uploads/"+response.responseJSON.success);
            }
        }
   };


</script>


</html>