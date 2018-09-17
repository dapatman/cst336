<?php

function displayArray($my_symbols){
    global $symbols;

    echo "<hr>";
    print_r($my_symbols);
    
    for($i = 0; $i < count($symbols); $i ++) {
        echo $symbol[$i] . " , ";
    }

}

    displayArray();
    
    shuffle($symbols);
    displayArray();
    
    echo "<hr>";
    
    echo "Random item: " . $symbols[ rand(0, count($symbols) - 1)]; //displays random item
    
    echo "Random item: " . $symbols[ array_rand($symbols) ]; //displays random item
    
    echo "<img src='../lab2/ " . $symbols[ array_rand($symbols) ] . ".png'>"; //displays random item
?>

<!DOCTYPE html>'
<html>
    <head>
        <title> Arrays </title>
    </head>
    <body>
        
    </body>
</html>