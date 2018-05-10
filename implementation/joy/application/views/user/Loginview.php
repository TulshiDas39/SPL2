<html>
<head>
    <title>User Home page</title>
</head>
<body>
<h1  align="center"> Login successfully</h1>
 <?php $email_id=$this->session->userdata('user_id'); ?>
<h2 align="center"> <?php print_r($email_id)?> </h2>
</body>
</html>