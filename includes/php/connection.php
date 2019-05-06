<?php
try {
  $db = new PDO("sqlite:" . __DIR__ . "/atlc.db");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
  consosle.log($e->getMessage());
  exit;
}

  try {
    $sql = "SELECT * FROM Spring19";
    $results = $db->query($sql);
  } catch (Exception $e) {
    alert($e->getMessage()); 
  }

echo var_dump($results->fetchAll(PDO::FETCH_ASSOC));

?>