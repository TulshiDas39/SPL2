<!DOCTYPE html>
<html>
<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <style>
      /* #gl{
            font-size: 10px;
            color: red;
        }*/
        #selected_formates{
           width: 6850px;
        }

        #wrapper{
            height: 45px;
            width: 282px;
            overflow-x:scroll;
            /*overflow-y:hidden;*/
        }
        .item{
         /*   width:60px;
            padding:10px;
         */   float:left;
        }

    </style>


</head>
<body>

<?php
$arr1 = array();
$int1 = array();
/*exec("dir",$arr1,$int1);*/
$command = "perl  moss.pl -l java auctioneer1/Auctioneer.java auctioneer1/Bidder.java";
$output = exec($command,$arr1,$int1);
print_r($arr1[5]);
?>
</body>
</html>













<!--
<a href="file:///files/posts/0ee8d175a95527aabb8e077a51bd8d41.jpg">open</a>

<label id="label_format" class="">Select Format:</label>

<input list="formats" name="format" id="check_format" class="form-control">
<datalist id="formats">
    <option value="pdf">
    <option value="docx">
    <option value="txt">
    <option value="c">
    <option value="c++">
    <option value="java">
    <option value="js">
    <option value="php">
    <option value="html">
    <option value="css">
    <option value="xml">
</datalist>
-->


<!--<div id ="wrapper">
<div style="cursor: pointer" id = "selected_formates" >-->
<!--<div class="item" onclick="this.remove(this)" style="background:#8ba8af;border-radius: 5px">click me<span  class="glyphicon glyphicon-remove"></span> </div>-->
<!--<div class="item" onclick="this.remove(this)" style="background: teal;border-radius: 10px">click me<span  class="glyphicon glyphicon-remove"></span> </div>
<div class="item" onclick="this.remove(this)" style="background: teal;border-radius: 10px">click me<span  class="glyphicon glyphicon-remove"></span> </div>
<div class="item" onclick="this.remove(this)" style="background: teal;border-radius: 10px">click me<span  class="glyphicon glyphicon-remove"></span> </div>
<div class="item" onclick="this.remove(this)" style="background: teal;border-radius: 10px">click me<span  class="glyphicon glyphicon-remove"></span> </div>
<div class="item" onclick="this.remove(this)" style="background: teal;border-radius: 10px">click me<span  class="glyphicon glyphicon-remove"></span> </div>
-->
<!--</div>
</div>
<br>
<br>
--><!--
Your name is <input type="text" value="SAM askdfaksdjfhak jhalksdjfhkjfhaklj hd" size="10" style="border:none;background: teal" />

<ul>
    <li onclick="this.parentNode.removeChild(this);" style="background: teal" >
        <input type="hidden" name="ingredients[]" value="Cheese" /><span  class="glyphicon glyphicon-asterisk"></span>
        Cheese
    </li>
    <li onclick="this.parentNode.removeChild(this);" style="background: teal" >
        <input type="hidden" name="ingredients[]" value="Ham" /><span class="glyphicon glyphicon-asterisk"></span>
        Ham
    </li>
    <li onclick="this.parentNode.removeChild(this);" style="background: teal" >
        <input type="hidden" name="ingredients[]" value="Mushrooms" class="glyphicon glyphicon-asterisk"/>
        Mushrooms
    </li>
</ul>
<select onchange="selectIngredient(this);">
    <option value="Cheese">Cheese</option>
    <option value="Olives">Olives</option>
    <option value="Pepperoni">Pepperoni</option>
</select>
-->
<!--
<script>
function selectIngredient(select)
{
var option = select.options[select.selectedIndex];
var ul = select.parentNode.getElementsByTagName('ul')[0];

var choices = ul.getElementsByTagName('input');
for (var i = 0; i < choices.length; i++)
if (choices[i].value == option.value)
return;

var li = document.createElement('li');
var input = document.createElement('input');
var text = document.createTextNode(option.firstChild.data);

input.type = 'hidden';
input.name = 'ingredients[]';
input.value = option.value;

li.appendChild(input);
li.appendChild(text);
li.setAttribute('onclick', 'this.parentNode.removeChild(this);');

ul.appendChild(li);
}

</script>-->
<!--<script>

    $(function(){
        $('#check_format').change(function(){
            var select_format = $('#check_format').val();
            if(exist(select_format) != '-1') return;
            alert(select_format);

            var lis = document.createElement('div');
            lis.classList="item";
            lis.setAttribute("style", "background:#8ba8af;border-radius:10px;");
            lis.setAttribute("onclick", "this.remove(this)");
            var t = document.createTextNode(select_format);
            lis.appendChild(t);
            var icon = document.createElement('span');
            icon.classList = "glyphicon glyphicon-remove";
            lis.appendChild(icon);

            document.getElementById("selected_formates").appendChild(lis);
            alert('ok');
            $('#check_format').val('');

        });
    });


    function exist(select_format) {
        var strings = [];
        var all="";
        alert($('#selected_formates .item').length);

        $('.item').each(function(){
            strings.push( $(this).text() );
            all +=$(this).text();
        });

=        return $.inArray(select_format, strings);
    }
</script>
-->