<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/ci/ASM/css/bootstrap-datetimepicker.css">
    <link rel="stylesheet" href="/ci/ASM/css/bootstrap-datetimepicker.min.css">
    <script src="/ci/ASM/js/jquery.datetimepicker.full.js"></script>
    <script src="/ci/ASM/js/bootstrap-datetimepicker.js"></script>-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css" rel="stylesheet"/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js" type="text/javascript" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

    <link rel="stylesheet" href = "/ci/ASM/teacherPage.css">
    <style>
        #datetimepicker1{
            width: 300px;
            border: 3px solid red;
        }
    </style>
    <!--<style>
        #datepicker > span:hover
        {
            cursor: pointer;
        }
    </style>-->
   <!-- <script>
        $(function () {
            $("#datepicker").datepicker({
                autoclose:true,
                todayHighlight:true,
                format:'dd/mm/yyyy'
            }).datepicker('update',new Date() );

        });
    </script>
-->

</head>
<body>
 <!--<div id="datepicker" class="input-group date" data-date-format="dd/mm/yyyy">
   <input type="text" name="date">
     <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
 </div>-->
 <!--<div class="container">
     <div class="row">
         <div class='col-sm-6'>
             <div class="form-group">
                 <div class='input-group date' id='datetimepicker1'>
                     <input type='text' class="form-control" />
                     <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                 </div>
             </div>
         </div>

     </div>
 </div>
 <script type="text/javascript">
     $(function () {
         $('#datetimepicker1').datetimepicker({
             format:'hh:mm'
         });
     });
 </script>-->
 <!--<div class="container">
     <div class="row">
         <div class='col-sm-6'>
             <div class="form-group">
                 <div class='input-group date' id='datetimepicker3'>
                     <input type='text' class="form-control" />
                     <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                 </div>
             </div>
         </div>
         <script type="text/javascript">
             $(function () {
                 $('#datetimepicker3').datetimepicker({

                     format: 'hh:mm'

                 });
             });
         </script>
     </div>
 </div>-->
 <div class="container">
     <div class="row">
         <div class='col-sm-6'>
             <div class="form-group">
                 <div class='input-group date' id='datetimepicker3'>
                     <input type='text' class="form-control" />
                     <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                 </div>
             </div>
         </div>

     </div>
 </div>
 <script type="text/javascript">
     $(function () {
         $('#datetimepicker3').datetimepicker({
             format: 'LT'
         });
     });
 </script>
</body>
</html>