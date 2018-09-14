<!DOCTYPE html>
<html>
    <head>
        <title> Random Colors & Numbers </title>
        <style>
            
            body {
                <?php
                    echo "background-color: rgba(".rand(0,255).",".rand(0,255).",".rand(0,255).",".(rand(1, 10)/10).");";
                ?>
            }
            
            h1 {
                <?php
                    echo "background-color: rgba(".rand(0,255).",".rand(0,255).",".rand(0,255).",".(rand(1, 10)/10).");";
                    echo "color: rgba(".rand(0,255).",".rand(0,255).",".rand(0,255).",".(rand(1, 10)/10).");";
                ?>
            }
            
        </style>
    </head>
    <body>
        
        <h1>
        My lucky number is: 
        <?php
            do {
                $num = rand(1,10);
            } while ($num == 4);
            echo $num;
        ?>
        <!-- this random number generator generates umber between 1 and 10 but excludes 4 -->
        <!-- this random number generator generates umber between 1 and 10 but excludes 4 -->
        </h1>

    </body>
</html>