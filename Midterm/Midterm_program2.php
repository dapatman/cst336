  
  <table border="1" width="600">
    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
    <tr style="background-color:#FFC0C0">
      <td>1</td>
      <td>The report shows all quotes from Albert Einstein in descending order</td>
      <td width="20" align="center">10</td>
    </tr>  
    <tr style="background-color:#FFC0C0">
      <td>2</td>
      <td>The report shows all quotes that have the words  "life" in it.</td>
      <td width="20" align="center">10</td>
    </tr>  
    <tr style="background-color:#FFC0C0">
      <td>3</td>
      <td>The report all quotes in alphabetical order</td>
      <td width="20" align="center">10</td>
    </tr>     
    <tr style="background-color:#FFC0C0">
      <td>4</td>
      <td>The report shows the most liked quote in the database.</td>
      <td width="20" align="center">10</td>
    </tr>
    <tr style="background-color:#FFC0C0">
      <td>5</td>
      <td>Show a random quote from the database</td>
      <td width="20" align="center">10</td>
    </tr>    
    
    <tr style="background-color:#99E999">
      <td>6</td>
      <td>This rubric is properly included AND UPDATED (BONUS)</td>
      <td width="20" align="center">2</td>
     </tr>     
     <tr>
      <td></td>
      <td>T O T A L </td>
      <td width="20" align="center"><b></b></td>
    </tr> 
  </tbody></table>    

<?php
$host    = "localhost";
$user    = "root";
$pass    = "";
$db_name = "Midterm";

//create connection
$connection = mysqli_connect($host, $user, $pass, $db_name);

//test if connection failed
if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}

//get results from database
$result = mysqli_query($connection,"SELECT * FROM products");
$all_property = array();  //declare an array for saving the property

//showing property
echo '<table class="data-table">
        <tr class="data-heading">';  //initialize table tag
while ($property = mysqli_fetch_field($result)) {
    echo '<td>' . $property->name . '</td>';  //get field name for header
    array_push($all_property, $property->name);  //save those to array
}
echo '</tr>'; 

//showing all data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    foreach ($all_property as $item) {
        echo '<td>' . $row[$item] . '</td>'; //get items using property value
    }
    
    echo '</tr>';
}
echo "</table>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}

?>