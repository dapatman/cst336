<?php

function displaysymbol($randomValue, $pos){
                    
$randomValue = rand(0,5);  //Generates a random number from 0 to 5
// echo $randomValue;
            
    switch ($randomValue) {
        case 0: $symbol = "bar";
                break;
        case 1: $symbol = "orange";
                break;
        case 2: $symbol = "cherry";
                break;
        case 3: $symbol = "grapes";
                break;
        case 4: $symbol = "lemon";
                break;      
        case 5: $symbol = "seven";
                break;                            
    }
            
echo "<img id='reel$pos' src='img/$symbol.png' alt='$symbol' title='".ucfirst($symbol)."'/>";

}

function displayPoints($randomValue1, $randomValue2, $randomValue3) {
    
    echo "<div id='output'>";
    if ($randomValue1 == $randomValue2 && $randomValue2 == $randomValue3) {
        switch ($randomValue1) {
            case 0: $totalPoints = 1000;
                echo "<h1>Jackot!</h1>";
                    break;
            case 1: $totalPoints = 500;
                    break;
            case 2: $totalPoints = 250;
                    break;
        }
        
        echo "<h2>You won $totalPoints points!</h2>";
    } else {
        echo "<h3> Try Again! </h3>";
    }
    echo "</div>";
}

function play() {   //displaySymbol()
    for ($i=1; $i<4; $i++){
        ${"randomValue" . $i } = rand(0,2);
        displaySymbol(${"randomValue" . $i}, $i );
    }
    displayPoints($randomValue1, $randomValue2, $randomValue3);
}

?>