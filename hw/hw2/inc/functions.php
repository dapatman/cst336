<?php

$deal = array("d1", "d2", "d3", "d4", "d5", "d6");

function movieReviews($array) {
    global $posters;
    
    //$randomPoster = $posters[rand(0,count($posters)-1)];
    for($i = 0; $i < sizeof($array); $i++){
   
    echo "<div class='poster'>";
    echo "<h2> $array[$i] </h2>";
    echo "<img width='100' src='img/posters/$array[$i].jpg'>";    
    echo "<br>";
    }
}

function displaydice($randomValue, $pos){
                    
//$randomValue = rand(0,3);  //Generates a random number from 0 to 3
//echo $randomValue;         //Outputs the numeric numbers for the slotmachine
            
    switch ($randomValue) {
        case 0: $side = "s1";
                break;
        case 1: $side = "s2";
                break;
        case 2: $side = "s3";
                break;
        case 3: $side = "s4";
                break;
        case 4: $side = "s5";
                break;
        case 5: $side = "s6";
                break;
    }
    
echo "<img id='reel$pos' src='img/$side.png' alt='$side' title='". ucfirst($side) . "' width='70' >";

}

function displaytotal($randomValue1, $randomValue2, $randomValue3, $randomValue4, $randomValue5, $randomValue6) {
    $totalPoints = 0;
    echo "<div id='output'>";
    
    $totalPoints = $randomValue1 +1 + $randomValue2 +1 + $randomValue3 +1 + $randomValue4 +1 + $randomValue5 +1 + $randomValue6;

    echo $totalPoints;
    echo "<br>";

    echo "</div>";
}

function play() {   //displaySymbol()
    for ($i=1; $i<6; $i++){
        ${"randomValue" . $i } = rand(0,5);
        displaydice(${"randomValue" . $i}, $i );
    }
    displaytotal($randomValue1, $randomValue2, $randomValue3, $randomValue4, $randomValue5, $randomValue6);
}

?>