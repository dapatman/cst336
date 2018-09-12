<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
    </head>
    
    <body>
        
        <?php
        
            function displaysymbol($random_value){
                    
                    
            $random_value = rand(0,5);  //Generates a random number from 0 to 2
            // echo $random_value;
            
            switch ($random_value) {
                
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
            
            echo "<img src=\"img/$symbol.png\" alt='$symbol' title='".ucfirst($symbol)."'/>";
            
            }//displaySymbol()
            
            $random_value1 = rand(0,2);
            displaySymbol($random_value1);
            $random_value2 = rand(0,2);
            displaySymbol($random_value2);
            $random_value3 = rand(0,2);
            displaySymbol($random_value3);
            
            
        ?>

    </body>
</html>