
<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <style>
        	main, #output {
        		text-align:center;
        		width:800px;
        		border-radius:20px;
        		margin: 0 auto;
        	}
        	main {
        		 background-color: lightpink;
        	}
        </style>
    </head>
    <body>
      <main>
      	<h1> Custom Password Generator </h1>
        <form>
            How many passwords? <input = "number" name="numPasswords" size="2"> (No more than 8)

            <?php
                if ($_GET["numPasswords"] > 8)
                {
                    echo "<h1>can't be higher than 8!</h1>";
                }
            ?>
            
            <br/>  <br/>
            <strong>Password Length</strong>
            <br />
            <input type = "radio" name="length" value="6" id="six"><label for ="six"> 6 characters</label>
            <input type = "radio" name="length" value="8" id="eight"><label for ="eight"> 8 characters</label>
            <input type = "radio" name="length" value="10" id="ten"><label for ="ten"> 10 characters</label>
            <br /> <br />
            <input type="checkbox" name="includeDigits"/> Include digits (up to 3 digits will be part of the password)
               <br /> <br />      
            <input type="submit" value ="Create Passwords!" name="submitForm" ><br><br>
            <br />       
        </form>
        
        <form action="displayPasswordHistory.php">
        	   <input type="submit" value ="Display Password History" name="passwordHistory" >
        </form>
        <br />
        </main>
         <br /><br />
        <div id="output">
                   </div>
        <?php
            function generatePasswords()
            {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randstring = '';
        for ($i = 0; $i < 10; $i++) {
            $randstring = $characters[rand(0, strlen($characters))];
            }
            return $randstring;
            RandomString();
            echo $randstring;
            }
            ?>
    </body>
</html>