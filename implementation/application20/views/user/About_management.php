<!DOCTYPE html>
<html>
<head>

    <title>Sign in page </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" type="text/css" href="style.css">-->
    <link rel="stylesheet" type="text/css" href="/ci/ASM/css/bootstrap.min.css">
    <script type="text/javascript" src="/ci/ASM/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <style type="text/css">
        body{
            background-color: whitesmoke;
        }
        .header{

            background-color: teal;
            height: 150px;
            width: 100%;
            /*position: sticky;*/
        }
        .help_center
        {

            font-size: 20px;
            font-family: "Courier New", Courier, monospace;
            color: white;
            position: relative;
            top: 60px;


        }
        .help_center:hover
        {
            text-decoration: none;
            color: white;
        }
        .assign_groups
        {
            font-size: 20px;
            font-family: "Courier New", Courier, monospace;
            color: white;
            position: relative;
            top: 60px;
            left: 650px;
        }
        .assign_groups:hover
        {
            text-decoration: none;
            color: white;
        }

        .main{
            position: absolute;
            left: 200px;
            right: 200px;
           /* height: 700px;*/
            height: 530px;
            width: 70%;
            top: 100px;
            /* left: 400px;*/
            z-index: 1;
            background-color: wheat;
            /*border: 1px solid black;*/
        }
        #written
        {
            position: relative;
            top: 50px;
            padding: 2px;
            font-size: 20px;
            overflow: hidden;
            font-weight: 400;
            text-align: justify;
        }

    </style>

</head>
<body>
<div class="header">

    <a class="help_center" href="Gethelp" style="text-decoration: none" target="_self">Assignment management Help center</a>
    <a class="assign_groups" href="#" style="text-decoration: none" target="_self">Assignment Groups</a>

</div>

<div class="main">
    <h1 style="text-align: center">About Assignment Management</h1>
    <p id="written">Assignment management System is mainly created to submit class assignment  in online.
        It helps a teacher to crate an assignment using specific format and deadline.
        Students can submit their assignment on a specific assignment.A teacher or students
        can also post announcement on their group.Teacher can also
        check plagiarism of submitting assignment.This website is very helpful for Assignment
        evaluation.
    </p>
</div>



</body>

</html>