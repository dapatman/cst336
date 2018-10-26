<?php
$zodiac = array("rat","ox","tiger","rabbit","dragon","snake","horse","goat","monkey","rooster","dog","pig");
function yearList($startYear=1500,$endYear=2000){
    global $zodiac;
    $yr_sum = 0;

    for ($i=$startYear; $i <= $endYear; $i++) {
       echo "<li>  Year  $i </li>";
        if($i==1776){
     echo "<strong> USA INDEPENDENCE!</strong>";
        }
        if($i%100==0) {
            echo "<strong> Happy New Century!</strong>";
        }
        $yr_sum += $i;
    }
    echo "<li>  Year Sum:  $yr_sum </li>";
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>

        <h1> Chinese Zodiac Tasks</h1>
        
        <ul>
          <?= yearList(1800, 1810) ?>
        </ul>
        
    </body>
</html>