<?php
function displaySchedule($semester) {
  
  try {
    $db = new PDO("sqlite:" . __DIR__ . "/atlc.db");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (Exception $e) {
    alert($e->getMessage());
  }
  
  $table ="";

  $table .= "<table><tr><th>Event</th><th>ATLC Hours</th><th>Effective Dates</th></tr>";

  try {
    $sql = "SELECT * FROM " . $semester;
    $results = $db->query($sql);
  } catch (Exception $e) {
    alert($e->getMessage()); 
  }

  foreach(($results->fetchAll(PDO::FETCH_ASSOC)) as $event) {
    $table .= "<tr><td>" . $event['eventName'] . "</td><td>" . $event['hoursType'] . "</td><td>" . $event['startDate'] . " to " . $event['endDate'] . "</td></tr>";
  }
  
  $table .= "</table>";
  echo $table;
}

if ($_POST['dropdownValue']){
    //call the function or execute the code
    displaySchedule($_POST['dropdownValue']);
}

?>