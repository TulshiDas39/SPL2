<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href = "http://localhost/SPL/assets/reset_password.css">
</head>
<body>
<div class="header">
    <div class="about">

        <!--<a href="#" data-toggle="tooltip" title="About" id="About"><span class="glyphicon glyphicon-info-sign"></span></a>
        <a href="#" data-toggle="tooltip1" title="Quick Help" id="help"><span class="glyphicon glyphicon-question-sign"></span></a>-->


    </div>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip({placement:"bottom"});
        });
    </script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip1"]').tooltip({placement:"bottom"});
        });
    </script>
</div>
   <div class="container">
       <div class="row">
           <div class="col-md-4"></div>
           <div class="col-md-4">
                <div class="box">
                    <span style="color: red;">
                    <?php
                     echo validation_errors();
                    ?>
                    </span>
                    <?php echo form_open('login/updatePassword')?>
                        <div class="form-group inner-addon left-addon"  data-toggle="passwordtooltip"  title=" 1. This field contains only alpha-numeric  characters.
                    2. Its Maximum length is 20 and minimum is 7.">

                            <label for="exampleInputEmail1" style="color: FireBrick">New Password:</label>
                            <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="password"required>
                            <input type="hidden" name = "email" value="<?php echo $email;?>">

                        </div>
                        <div class="form-group">
                            <button type="submit" name="submitButton" class="btn btn-success btn-block">Submit</button>
                        </div>
                    </form>
                </div>
           </div>

       </div>
   </div>
<script>
    $(document).ready(function(){
        $('[data-toggle="passwordtooltip"]').tooltip();
    });
</script>
</body>
</html>
