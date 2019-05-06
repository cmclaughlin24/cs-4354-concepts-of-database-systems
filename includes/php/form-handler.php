<?php
  include 'schedule-handler.php';

  function alert($msge) {
    echo "<script type='text/javascript'>alert('$msge');</script>";
  }

 function page_redirect($location) {
   echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
   exit; 
 }
 
 if(strtotime($_POST["startDate"]) < strtotime($_POST["endDate"])) {
   $add = addEvent($_POST["eventName"], $_POST["startDate"], $_POST["endDate"], $_POST["hoursType"],$_POST["semester"]);
   if($add === true) {
      alert("Submission Successful");
      page_redirect("../../index.php");
   }
   alert("Submission Failed");
   page_redirect("../../form.php");
 } else {
      alert("Submission Failed - Invalid Dates");
      page_redirect("../../form.php");
 }
 
?>