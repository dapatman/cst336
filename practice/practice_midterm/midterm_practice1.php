
<!DOCTYPE html>
<html>
    <head>
        <title> Winter Vacation Planner</title>
        <style>
        	main, #output {
        		text-align:center;
        		width:800px;
        		border-radius:20px;
        		margin: 0 auto;
        	}
        	main {
        		 background-color: lightgreen;
        	}
        </style>
    </head>
    <body>
      <main>
      	<h1> Vacation Planner! </h1>
        <form>
            <strong>Select Month: </strong>
            <select>
                <option value="Select"> Select </option>
                <option value="November"> November </option>
                <option value="December"> December </option>
                <option value="January"> January </option>
                <option value="Febuary"> Febuary </option>
            </select>
            
            <?php
        
            ?>
            
            <br/>  <br/>
            <strong>Number of Locations</strong>
            <input type = "radio" name="Number of locations" value="3" id="Three"><label for ="three"> Three</label>
            <input type = "radio" name="Number of locations" value="4" id="Four"><label for ="Four"> Four </label>
            <input type = "radio" name="Number of locations" value="5" id="Five"><label for ="Five"> Five </label>
            <br /> <br />
            <strong>Visit locations in alphabetical order</strong>
            <input type = "radio" name="Number of locations" value="4" id="Four"><label for ="Four"> <strong> A-Z </strong> </label>
            <input type = "radio" name="Number of locations" value="5" id="Five"><label for ="Five"> <strong> Z-A </strong> </label>
            <br /> <br />
            <strong>Select Country: </strong>
            <select>
                <option value="Select"> Select </option>
                <option value="USA"> USA </option>
                <option value="Mexico"> Mexico </option>
                <option value="France"> France </option>
            </select>
        </form>
        <br />
        <form action="displayItinerary.php">
        	   <input type="submit" value ="Create Itinerary" name="passwordHistory" >
        </form>
        <br />
        </main>
         <br /><br />
        <div id="output">
                   </div>
        <?php

            ?>
    </body>
</html>