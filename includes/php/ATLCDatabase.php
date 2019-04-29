<?php
$servername = "localhost";
$username = "username";
$password = "password";

$connection = new mysqli($servername, $username, $password);

if($connection->connect_error) {
  die("Connection Error: " . $connection->connect_error);
}

$sql = "CREATE DATABASE ATLCDatabase";

if($connection->query($sql) === true) {
  console.log("Database successfully created.");
} else {
  console.log("Error creating database.");
}

$sql = "CREATE TABLE Spring19 (
eventID int NOT NULL AUTO_INCREMENT,
eventName varchar(255) NOT NULL,
startDate DATE,
endDate DATE,
hoursType varchar(3) NOT NULL,
PRIMARY KEY (eventID)
)";

if($connection->query($sql) === true) {
  console.log("Table successfully created.");
} else {
  console.log("Error creating table.");
}

$sql = "CREATE TABLE Fall19 (
eventID int NOT NULL AUTO_INCREMENT,
eventName varchar(255) NOT NULL,
startDate DATE,
endDate DATE,
hoursType varchar(3) NOT NULL,
PRIMARY KEY (eventID)
)";

if($connection->query($sql) === true) {
  console.log("Table successfully created.");
} else {
  console.log("Error creating table.");
}

$connection->close();
?>