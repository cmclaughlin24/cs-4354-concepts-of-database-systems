<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "ATLCDatabase";

function addEvent($name, $startDate, $endDate, $hoursType, $semester) {
  $created;
 
  $connection = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbname']);
  
  if($connection->connect_error) {
    $created = "CONNECTION ERROR: " . $connection->connect_error;
  } else {
    $sql = "INSERT INTO " . $semester . " (eventName, startDate, endDate, hoursType) VALUES (" . $name . ", " . $startDate . ", " . $endDate . ", " . $hoursType . ")";
  
    if($connection->query($sql) === true) {
      $created = true; 
    }
  }
  
  $connection->close();
  return $created;
}
?>