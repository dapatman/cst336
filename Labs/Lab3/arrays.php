<?php

function displayArray($symbols){
    echo "<hr>";
    print_r($symbols);
    
}

    $symbols = array("seven");
    print_r($symbols); //display array content
    
    array_push($symbols, "orange", "grape"); //adds elements to the array
    print_r($symbols); //display array content
    
    $symbols[] = "cherry";  //adds element to the end of the array
    print_r($symbols);
    displayArray($symbols);
    
?>

<!DOCTYPE html>'
<html>
    <head>
        <title> Arrays </title>
    </head>
</html>