<!DOCTYPE html>

    <table border="1" width="600">
    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
    <tr style="background-color:#99E999">
      <td>1</td>
      <td>The page includes the form elements as the Program Sample: checkbox, radio buttons, etc.</td>
      <td width="20" align="center">5</td>
    </tr>
    <tr style="background-color:#FFC0C0">
      <td>2</td>
      <td>Error is displayed if team gender is not submitted.</td>
      <td width="20" align="center">5</td>
    </tr> 
    <tr style="background-color:#FFC0C0">
      <td>3</td>
      <td>Error is displayed if team size is less than 1 or left blank </td>
      <td align="center">5</td>
    </tr>    
   <tr style="background-color:#FFC0C0">
      <td>4</td>
      <td>Error is displayed if team size is greater than 5 AND gender is not coed, or if size is greater than 10 AND gender is coed </td>
      <td align="center">5</td>
    </tr>
    <tr style="background-color:#FFC0C0">
      <td>5</td>
      <td>Header is displayed with info submitted (team size and gender) </td>
      <td align="center">5</td>
    </tr>    
	<tr style="background-color:#FFC0C0">
      <td>6</td>
      <td>A random NOT coed team is displayed properly when selecting Male or Female as gender </td>
      <td align="center">15</td>
    </tr> 
   	<tr style="background-color:#FFC0C0">
      <td>7</td>
      <td>If selecting "coed" as gender, there is at least one male and one female team member </td>
      <td align="center">15</td>
    </tr>  
    <tr style="background-color:#FFC0C0">
      <td>8</td>
      <td>The names are ordered alphabetically as chosen by the user (asc/desc)</td>
      <td align="center">10</td>
    </tr>
    <tr style="background-color:#FFC0C0">
      <td>9</td>
      <td>Team member's images are displayed if corresponding checkbox is checked</td>
      <td align="center">10</td>
    </tr>
    <tr style="background-color:#FFC0C0">
      <td>10</td>
      <td>Team members are displayed in a two-column table</td>
      <td align="center">15</td>
    </tr>  
    <tr style="background-color:#FFC0C0">
      <td>11</td>
      <td>A second form allows users to see the history of generated teams</td>
      <td align="center">15</td>
    </tr>  
    <tr style="background-color:#FFC0C0">
      <td>12</td>
      <td>The web page uses Bootstrap and has a nice look. </td>
      <td align="center">5</td>
    </tr>        
    <tr style="background-color:#99E999">
      <td>13</td>
      <td>This rubric is properly included AND UPDATED (BONUS)</td>
      <td width="20" align="center">2</td>
    </tr>   
     <tr>
      <td></td>
      <td>T O T A L </td>
      <td width="20" align="center"><b></b></td>
    </tr>
    <td> </td>
  </tbody></table>

<br /> <br />

<html>
    <head>
        <title> Superhero Team Generator</title>
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
      	<h1> Superhero Team Generator </h1>
        <form>
            <strong>Team Size: </strong>
            <input type="number" min"1" max= "5" name= "size of team" required>
            
            <br/>  <br/>
            <strong>Team Gender: </strong>
            <input type = "radio" name="Team Gender" value="1" id="female"><label for ="three"> <strong>Female</strong> </label>
            <input type = "radio" name="Team Gender" value="2" id="Male"><label for ="Four"> <strong>Male</strong> </label>
            <input type = "radio" name="Team Gender" value="3" id="Coed"><label for ="Five"> <strong>Coed</strong> </label>
            <br /> <br />
            <strong>Visit locations in alphabetical order</strong>
            <input type = "radio" name="Display team in alphabetical order: " value="4" id="Four"><label for ="Four"> <strong> A-Z </strong> </label>
            <input type = "radio" name="Display team in alphabetical order: " value="5" id="Five"><label for ="Five"> <strong> Z-A </strong> </label>
            <br /> <br />
            
            <input type = "radio" name="Display Images: " value="6" id="Images Displayed">
            <strong> Display Images </strong>
            <br /> <br />
            </form>
            
            <br />
            <form action="displayTeams.php">
            <input type="submit" value ="Generate Team" name="Team" >
            </form>
            <br />
            
            <br />
            <form action="displayHistory.php">
            <input type="submit" value ="Team History" name="History" >
            </form>
            <br />
            
            <br>
            <figure id="members">
                <img src="../../img/goku.png" width="200" alt="goku" />
            </figure>
            
    </body>
</html>