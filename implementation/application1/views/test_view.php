
<!DOCTYPE html>
<html>

<body>

<?php

    for($i=0;$i<sizeof($my);$i++){
        for($j=0;$j<sizeof($my[$i]);$j++){
            echo $my[$i][$j];
        }
    }
?>

</body>


</html>