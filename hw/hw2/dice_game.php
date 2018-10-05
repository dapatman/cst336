<?php

include 'inc/functions.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Roll the dice! </title>
    </head>
    
    <body>
        <main>
            
        <div id="main">
            
            <?php
                play();  
                movieReviews($array);
            ?>
            
            <form>
                <input type="submit" value="mix dice!"/>
            </form>
        
        </div>
        

        </main>
    </body>
    <footer>

    </footer>
</html>
