<!DOCTYPE html>
<html>
<head>

	<title>Sign in page </title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--<link rel="stylesheet" type="text/css" href="style.css">-->
	<link rel="stylesheet" type="text/css" href="/ci/ASM/css/bootstrap.min.css">
	<script type="text/javascript" src="/ci/ASM/js/bootstrap.min.js"></script>
	
    <style type="text/css">
    	body{

            height: 500px;
            width: 100%;
            position: ;
           /* top: 50px;*/
			background-image: url('/ci/ASM/assignment.jpg');
            background-size: cover;
            background-position:center;
			font-family: sans-serif;
		}
		.loginBox{
			background-color:Darkcyan;
			height: 500px;
			width: 420px;
			margin:400px 50px 50px 260px;
			position: absolute;
			transform: translate(-50%,-50%);
			box-sizing: border-box;
		}
		.header{
           /* margin: 0px;
            padding: 0px;*/
            position: fixed;
			background-color:Teal;
			height: 60px;
			width:100%;


		}
		.userPic{
			height: 100px;
			width: 100px;
            margin-top: -50px;
           margin-left: 150px;


		}
		.formDecorator{
			padding: 0px 60px;

		}
		#para{
			margin: 0;
			padding: 40px 0px 20px;
			text-align: center;
			color:white;
		}
        .about{
            /*  margin-top: 20px;
             margin-right: 250px;*/
            margin-left: 1000px;
            margin-right:100px;
            height: 50px;
            /* background-color: red;*/

        }
        #About{

            position: absolute;
            top: 15px;
            /*left: 920px;*/
            color: black;
            font-size: 30px;
            font-weight: 700;

        }
        #help{
            position: absolute;
            top: 15px;
            left: 1080px;
            color: black;
            font-size: 30px;
            font-weight: 700;
        }
		.inner-addon { 
    position: relative; 
}
.inner-addon .glyphicon {
  position: absolute;
  padding: 10px;
  pointer-events: none;
}
.left-addon .glyphicon  { left:  0px;top: 23px;}
.left-addon input  { padding-left:  30px; }
    </style>

</head>
<body>
	<div class="header">
        <div class="about">

            <a href="#" data-toggle="tooltip" title="About" id="About"><span class="glyphicon glyphicon-info-sign"></span></a>
            <a href="#" data-toggle="tooltip1" title="Quick Help" id="help"><span class="glyphicon glyphicon-question-sign"></span></a>


        </div>
        <script>
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
        <script>
            $(document).ready(function(){
                $('[data-toggle="tooltip1"]').tooltip();
            });
        </script>
    </div>
	   
	   <div class="container">

           <!--<div class="header">
               <div class="about">

                   <a href="#" data-toggle="tooltip" title="About" id="About"><span class="glyphicon glyphicon-info-sign"></span></a>
                   <a href="#" data-toggle="tooltip1" title="Quick Help" id="help"><span class="glyphicon glyphicon-question-sign"></span></a>


               </div>
               <script>
                   $(document).ready(function(){
                       $('[data-toggle="tooltip"]').tooltip();
                   });
               </script>
               <script>
                   $(document).ready(function(){
                       $('[data-toggle="tooltip1"]').tooltip();
                   });
               </script>
           </div>-->
	   	  <div class="row">

	   	  	<div class="col-md-4"></div>
	   	  	<div class="col-md-4">
	   	  		<div class="loginBox" >
	                <img src="/ci/ASM/user.png" class="userPic img-responsive">

                    <h2 id="para" >Sign in Here</h2>
                    <p id="error"></p>
	                <form class="formDecorator" method="post" action="UserLogin">
                        <?php if($error = $this->session->flashdata('log_infail') ): ?>
                        <div>
                            <?php echo $error; ?>
                        </div>
                        <?php endif;?>
                    <div class="form-group inner-addon left-addon">
                    	
    					<label for="exampleInputEmail1" style="color: FireBrick">Email address</label>
    					<i class="glyphicon glyphicon-user"></i>
    					<input type="text" name="Email" class="form-control" id="exampleInputEmail1" placeholder="Email">

 					 </div>
                        <?php echo form_error('Email'); ?>
  					<div class="form-group  inner-addon left-addon">
   						 <label for="exampleInputPassword1" style="color: FireBrick">Password</label>
   						 <i class="glyphicon glyphicon-lock"></i>
    					<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  					</div>
                        <?php echo form_error('password'); ?>
  					<div class="checkbox">
    					<label style="color: FireBrick">
     					 <input type="checkbox" name="chekerBox"><b>Remember me</b>
    					</label>
  					</div>
  					<div class="form-group">
  					<button type="submit" name="submitButton" class="btn btn-success btn-block">Sign In</button>
  				   </div>
  					<div class="form-group">
  					<a href="Login/reset_password" style="color: Maroon" >Forgot password?</a>
  				   </div>
  				   <div class="form-group">
  					  Do not have account? <a href="Register" style="color: Maroon;font-size: 15px;" ><b> Sign up</b></a>
  				   </div>
				</form>

	   	  	      </div>
              </div>
	   	  	<div class="col-md-4"></div>
	   	  </div>
	   </div>
</body>
</html>