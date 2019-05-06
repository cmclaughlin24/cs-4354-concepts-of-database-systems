<?php
function addEvent($name, $startDate, $endDate, $hoursType, $semester) {
  try{
    $db = new PDO("sqlite:" . __DIR__ . "/atlc.db");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(Exception $e) {
    alert($e->getMessage());
  }
  
  try {
    $sql = "INSERT INTO Spring19 VALUES (13, Spring 2019 Final Exams, 2019-05-11, 2019-05-13, REG)";
    $result = $db->exec($sql);
  } catch (Exception $e) {
    alert($e->getMessage());
    return false; 
  }
  
  return true;
}
?>