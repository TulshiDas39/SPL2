<!DOCTYPE html>
<html>
<head>

    <title>Sign in page </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
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
    <h1 style="text-align: center">How Assignment Management works</h1>
    <h3 id="written">
       How Content shared in an Assignment group:<br/><br/>
        <p style="font-size: 16px; text-align: justify ">Instructor can attach materials—documents, links, images—to the assignment.
            All activity is online using a computer or a mobile device.</p>
        <p style="font-size: 16px; text-align: justify "> Students sign in to Assignemnt management, see their upcoming work, and complete it online. When  a student submit it,
            the instructor can see immediately in the assignment submission section.</p>
    </h3><br/>
    <h3 id="written1">
        The Flow of Asignment:
        <br/><br>
        <ol class="check">
        <li>First the instructor create an assignment and post it to its group and set a sue date.
            If the teacher attach a content s/he can remove it or change it before assign the post
            to students.The instructor can view the progress of the assignment.</li><br/>
           <li>Every student can view the assignment and submit their assignment on due date.If the
            instructor set formats for submitting the assignment the students can submit only when
               students cover all the formats to submit assignment.</li><br/>
            <li>Students can cancel their submission and can resubmit the assignment again.They can see whether they
                Submitted their assignment late or in time.
            </li><br/>
            <li>
                Instructor can check plagiarism corresponding to each assignment. Then s/he evaluate
                on their working assignments.
            </li><br/>

        </ol>
    </h3>

</div>



</body>

</html>