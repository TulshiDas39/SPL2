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
                    <?php
                     echo validation_errors();
                    ?>
                    <form method="post" class="myform" action="http://localhost/SPL/index.php/login/email_password">
                        <?php if($error = $this->session->flashdata('wrong_email') ): ?>
                            <div>
                                <p style="color: red"> <?php echo $error; ?> </p>
                            </div>
                        <?php endif;?>
                        <div class="form-group inner-addon left-addon">

                            <label for="exampleInputEmail1" style="color: FireBrick">Email address:</label>
                            <input type="text" name="Email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>

                        </div>
                        <div class="form-group">
                            <button type="submit" name="submitButton" class="btn btn-success btn-block">Submit</button>
                        </div>
                    </form>
                </div>
           </div>

       </div>
   </div>
</body>
</html>
