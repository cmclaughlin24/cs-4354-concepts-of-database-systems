<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "ATLCDatabase";

function displaySchedule($semester) {
  $table ="";
  
  $connection = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbname']);

  $table .= "<table><tr><th>Event</th><th>ATLC Hours</th><th>Effective Dates</th></tr>";
  
  if ($connection->connect_error) {
    $table .= "<tr><td><i>Error</i></td><td><i>Error</i></td><td><i>Error</i></td></tr>";
  }
  else {
    $sql = "SELECT * FROM " . $semester;
    $result = $connection->query($sql);
    
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
         $table .= "<tr><td>" . $row["eventName"]. "</td><td>" . $row["hoursType"] . "</td><td>" . $row["startDate"]. " - " . $row["endDate"]. "</td></tr>";
      }
    }  
  }
  
  $table .= "</table>";
  
  echo $table;
  $connection->close();
}

if ($_POST['dropdownValue']){
    //call the function or execute the code
    displaySchedule($_POST['dropdownValue']);
}

?>