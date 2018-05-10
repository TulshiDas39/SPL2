<!DOCTYPE html>
<html>
<head>
	<title>User accounts</title>
</head>
<body>
	<?php
	 foreach ($users as $user): 
	?>
    <table>
    	<tr>
    		<td><?=$user['Name']?></td>
    		<td><?=$user['Age']?></td>
    	    <td><?=$user['Address']?></td>
    	    <td><?=$user['CGPA']?></td>
    	</tr>
    <?php endforeach;?>
    </table>
</body>
</html>