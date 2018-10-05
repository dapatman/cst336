<?php

include 'inc/charts.php';
$posters = array("ready_player_one","rampage","paddington_2","hereditary","alpha","black_panther","christopher_robin","coco","dunkirk","first_man");

function movieReviews($array) {
    global $posters;
    
    //$randomPoster = $posters[rand(0,count($posters)-1)];
    for($i = 0; $i < sizeof($array); $i++){
   
    echo "<div class='poster'>";
    echo "<h2> $array[$i] </h2>";
    echo "<img width='100' src='img/posters/$array[$i].jpg'>";    
    echo "<br>";

    
    //NOTE: $totalReviews must be a random number between 100 and 300
    $totalReviews = rand(100,300); 
    
    //NOTE: $ratings is an array of 1-star, 2-star, 3-star, and 4-star rating percentages
    //      The sum of rating percentages MUST be 100
    $max = 100;
    $num1 = rand(0,$max);
    $max = $max - $num1;
    $num2 = rand(0,$max);
    $max = $max - $num2;
    $num3 = rand(0,$max);
    $max = $max - $num3;
    $num4 = $max;
    
    $ratings = array($num1,$num2,$num3,$num4);
    
    //NOTE: displayRatings() displays the ratings bar chart and
    //      returns the overall average rating
    $overallRating = displayRatings($totalReviews,$ratings);
    
    //NOTE: The number of stars should be the rounded value of $overallRating
    echo "<br><img src='img/star.png' width='25'>";
    echo "<img src='img/star.png' width='25'>";
    
    echo "<br>Total reviews: $totalReviews";
    echo "</div>";
    }
}    

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Movie Reviews </title>
        <style type="text/css">
            body {
                text-align:center;
            }
            #main {
                
                display:flex;
                justify-content: center;
            }
            .poster {
                padding: 0 10px;
            }
        </style>
    </head>
    <body>
       
       <h1> Movie Reviews </h1>
        <div id="main">
           <?php
           
           $array = array();
           
            for($i = 0; $i < 4; $i ++){
                array_push($array , $posters[rand(0,count($posters)-1)]);
            }
            sort($array);
           
             //NOTE: Add for loop to display 4 movie reviews
            (movieReviews($array));
           ?>
       </div>
       <br/>
       <hr>
       <h1>Based on ratings you should watch:</h1>
       
    </body>
</html>