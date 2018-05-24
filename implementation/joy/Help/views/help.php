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
            position: relative;
            height: 400px;
            width: 100%;
            top: 1px;
           /* left: 400px;*/
            z-index: 1;
            background-color: ghostwhite;
            /*border: 1px solid black;*/
        }
        .collapsible {
            background-color: white;
            color: black;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            border: 1px solid  wheat;
        }

        .active, .collapsible:hover {
            background-color: wheat;
        }

        .collapsible:after {
            content: '\002B';
            color: #4285f4;
            font-weight: bold;
            float: right;
            margin-left: 5px;
        }

        .active:after {
            content: "\2212";
            color: #4285f4;
        }

        .content {
            padding: 0 18px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
            background-color:#777;
        }
        .input_xs
        {
            color: white;
           /* color: DarkslateGray;*/
           /* font-family: "Courier New", Courier, monospace;*/
            font-size: 15px;
           /* font-weight: 700;*/


        }
        .input_xs:hover
        {
            color: white;
        }

    </style>

</head>
<body>
<div class="header">
  <!-- <div class="label">aaa-->
       <a class="help_center" href="Gethelp" style="text-decoration: none" target="_self">Assignment management Help center</a>
       <a class="assign_groups" href="#" style="text-decoration: none" target="_self">Assignment Groups</a>

   <!--</div>-->
</div>

<div class="main">
    <button class="collapsible">Overview</button>

    <div class="content">
            <li style="list-style-type:none"><a href="Gethelp/callAbout" target="_self" class="input_xs" style="text-decoration: none ">About Assignment Management </a></li>
            <li  style="list-style-type:none"><a href="Gethelp/callWork"  target="_self" class="input_xs" style="text-decoration: none">How Assignment Management works</a></li>
        <li  style="list-style-type:none"><a href="Gethelp/callFeatures"  target="_self" class="input_xs" style="text-decoration: none">Features of Assignment Management</a></li>
    </div>
    <button class="collapsible">Students</button>
    <div class="content">
        <li style="list-style-type:none"><a href="Gethelp/callGroup" target="_self" class="input_xs" style="text-decoration: none">How to join a group</a></li>
        <li  style="list-style-type:none"><a href="Gethelp/callPost"  target="_self" class="input_xs" style="text-decoration: none">How to submit assignment</a></li>
        <li  style="list-style-type:none"><a href="Gethelp/call"  target="_self" class="input_xs" style="text-decoration: none">How to create post</a></li>
    </div>

    <button class="collapsible">Instructor</button>
    <div class="content">
        <li style="list-style-type:none"><a href="Gethelp/callCreate_group" target="_self" class="input_xs" style="text-decoration: none">How to create a group</a></li>
        <li  style="list-style-type:none"><a href="Gethelp/callCreate_assignment"  target="_self" class="input_xs" style="text-decoration: none">How to create assignment</a></li>
        <li  style="list-style-type:none"><a href="Gethelp/callPost"  target="_self" class="input_xs" style="text-decoration: none">How to create post</a></li>
        <li style="list-style-type:none"><a href="Gethelp/callCheck_p" target="_self" class="input_xs" style="text-decoration: none">How to check plagiarism</a></li>

    </div>
</div>



</body>
<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight){
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    }
</script>
</html>