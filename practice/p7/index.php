

<!DOCTYPE html>

<?php

function displayCategories() { 
    global $dbConn;
    
    $sql = "SELECT DISTINCT category FROM p1_quotes ORDER BY category";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //print_r($records);
    //echo "<hr>";
    //echo $records[2] . "<br>";
    //echo $records[1]['catDescription'] . "<br>";
    
    foreach ($records as $record) {
        if ($_GET['category'] == $record['category'])
        {
            echo "<option value='".$record['category']."' selected>" . $record['category'] . "</option>";
        }
        else 
        {
        echo "<option value='".$record['category']."'>" . $record['category'] . "</option>";
        }
    }
}

include 'dbConnection.php';
$dbConn = startConnection("c9");

function displaySearchResults(){
    global $dbConn;
    
    
    echo "<h3>Quotes Found: </h3>";
    
    $namedParameters = array();
    
    $sql = "SELECT * FROM p1_quotes WHERE 1";
    
    if (!empty($_GET['keyword'])) {
        $sql .= " AND quote LIKE :quote";
        $namedParameters[":quote"] = "%" . $_GET['keyword'] . "%";
    }
    
    if (!empty($_GET['category'])) {
        $sql .= " AND category = :categoryId";
        $namedParameters[":categoryId"] = $_GET['category'];
    }
    
    if (isset($_GET['orderBy'])) {
        if ($_GET['orderBy'] == "az") {
            $sql .= " ORDER BY quote ASC";
        } else {
            
            $sql .= " ORDER BY quote DESC";
        }
    }
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute($namedParameters);
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($records as $record) {
        
            
    echo '"' . $record["quote"]. '" -' . $record["author"] . '<br />';
        
    }
    
}



?>

<html>
    <head>
        <title> Quote Finder </title>
         <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <style>
            body {
                text-align: center;
                font-size: 2em;
            }
            #quotes{
                width:600px;
                margin:0 auto;
                text-align: left;
            }
        </style>
    </head>
    <body>

      <div class="jumbotron">
            <h1> Famous Quote Finder </h1>
            <h2> Garred Murphy and Patrick Breckinridge</h2>
      </div>
      
      <form>
         Enter Quote Keyword <input type="text" name="keyword" 
         
         <?php
         echo 'value="'. $_GET["keyword"]. '"';
         ?>
         /><br><br>
         Category:
                 <select name="category">
                     <option value=""> Select One </option>
                     <?= DisplayCategories() ?>
                        
                    </select><br><br>
          Order  <br>
              <input type="radio" name="orderBy" value="az"
                <?php if ($_GET['orderBy'] == "az") {
                echo "checked";
                } ?>
                /> A-Z <br>
              <input type="radio" name="orderBy" value="za"
                <?php if ($_GET['orderBy'] == "za") {
                echo "checked";
                } ?>
                /> Z-A <br>
            <br>
            
            <input type="submit" value="Display Quotes!"/>

      </form>
      
      
      <hr>
      
      <div id="quotes">
          
          <?= DisplaySearchResults() ?>
      </div>
      
    </body>
</html>