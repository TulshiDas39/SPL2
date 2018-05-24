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
            /*height: 530px;*/
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
            /*left: 10px;*/
            padding: 2px;
            font-size: 20px;
            font-weight: 400;
            text-align: justify;
        }
        .check{
            font-size: 16px;
            text-align: justify
            line-height:1.6;
        }

    </style>

</head>
<body>
<div class="header">

    <a class="help_center" href="Gethelp" style="text-decoration: none" target="_self">Assignment management Help center</a>
    <a class="assign_groups" href="#" style="text-decoration: none" target="_self">Assignment Groups</a>

</div>

<div class="main">
    <h1 style="text-align: center">Features of Assignment Management</h1>
    <br/><br>
    <h3>&nbsp;&nbsp;For Students:</h3>
    <ol class="check">
        <li>
           Students can join multiple groups using group code.</li><br>
        <li>
            Students can view post.
        </li><br/>
        <li>
           Students can submit assignment and view assignment submission time.
        </li><br/>
        <li>
           Students can delete his submission and resubmit it.
        </li><br>
        <li>
            Students can view their classmates on the group
        </li><br>
        <li>
            Students can create post on the group.
        </li><br/>

    </ol>
    <h3>&nbsp;&nbsp;For Instructor:</h3>
    <ol class="check">
        <li>
            Students can create multiple groups.</li><br>
        <li>
            Instructor can create assignment or post
        </li><br/>
        <li>
           Instructor can see progress of assignment submission
        </li><br/>
        <li>
           Instructor can check plagiarism on each assignment.
        </li><br>
        <li>
           Instructors can view all the students in his/her group.
        </li><br>
        <li>
            Instructor can delete or edit the post or assignment.
        </li><br/>

    </ol>
</div>

</body>

</html>