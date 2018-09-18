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
    
    $indexes = array();
    
    for ($i = 0; $i < 3; $i++){
        
        $indexes[] = $symbols[ array_rand($symbols) ]; 
    echo "<img src='../lab2/img" . $indexes[$i] . ".png'>"; //displays random item
    }
    
    echo "<hr>";
    print_r($indexes);
    
    if ($indexes[0] == $indexes[1] && $indexes[1] == $indexes[2]) {
        
        echo "Congrats!!!";
        
    }
?>

<!DOCTYPE html>'
<html>
    <head>
        <title> Arrays </title>
    </head>
    <body>
        
    </body>
</html>