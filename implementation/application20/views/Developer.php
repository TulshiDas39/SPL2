<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        body{
            color: whitesmoke;
        }
        .header{
            /* margin: 0px;
             padding: 0px;*/
            z-index: 1;
            position: fixed;
            background-color:Teal;
            height: 60px;
            width:100%;


        }
        .about{

            position: relative;
            top: 10px;
            left: 100px;
            height: 50px;
            font-size: 30px;
            font-family: "Agency FB";
            font-weight: 700;
            color: #5f391b;
        }
        .container{

            position: relative;
            background-color: wheat;
            top: 61px;
            margin-left: 300px;
            margin-right: 300px;
            width: 60%;
           /* height: 300px;*/

        }
        img{
           border-radius: 50%;

        }
        .myimage
        {
            position: relative;
            margin-left:300px;
            margin-right: 300px;
        }
        .biodata
        {
            color: black;
            font-size: 20px;
            font-family: "Agency FB";
            font-weight: 600;
            position: relative;
            top: 10px;
            left: 270px;
        }
    </style>
</head>
<body>
<div class="header">
    <div class="about">
      Developers of Assignment management System

    </div>

</div>
<div class="container">
    <img src="http://localhost/SPL/assets/tulshi.png" height="150" width="150" class="myimage">
    <div class="biodata">
        <label>Name: Tulshi Chandra Das</label><br>
        <label>University: University of Dhaka</label><br>
        <label>Institution: Institute of Information Technology(IIT)</label><br>
        <label>Email:tulshidash37@gmail.com</label><br>

    </div><br/><hr>
    <img src="http://localhost/SPL/assets/maloy.jpg" height="150" width="150" class="myimage">
    <div class="biodata">
        <label>Name: Maloy Kanti Sarker</label><br>
        <label>University: University of Dhaka</label><br>
        <label>Institution: Institute of Information Technology(IIT)</label><br>
        <label>Email:joysarkarmloy@gmail.com</label><br>

    </div><br/><hr>
</div>
</body>
</html>
