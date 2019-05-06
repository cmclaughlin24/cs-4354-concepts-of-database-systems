<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8"/>
  
  <title>CS 4354: Concepts of Database Systems</title>
  
  <link rel="stylesheet" href="/css/navigation-bar.css">
  <link rel="stylesheet" href="/includes/foundation-grid/css/foundation.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  
  <style>
    body {
      background-image: url("/images/abstract-background.jpg"); 
    }
  </style>
  
  <script>
    function showHours(hours) {
      if(hours == "spe") {
        document.getElementById("hours").innerHTML = "Start Time: <input type=\"time\" name=\"startTime\">End Time: <input type=\"time\" name=\"startTime\">";
      }
      else {
        document.getElementById("hours").innerHTML = "";
      }
    }
  </script>
  
</head>

  <body>
    <script src="/includes/js/navigation-bar.js"></script>
    
    <h3>Schedule Event</h3>
    <form action="/includes/php/form-handler.php" method="post">
        Event Name: <input type="text" name="eventName" required>
        Start Date: <input type="date" name="startDate" required>
        End Date: <input type="date" name="endDate" required>
        Hours: <select id="hoursType" name="hoursType" onchange="showHours(this.value)">
          <option value="" disabled selected>Select Hours</option>    
          <option value="reg">Regular</option>
          <option value="abr">Abbreviated</option>
          <option value="cld">Closed</option>
          <option value="spe">Special</option>
        </select>
      <div id="hours"></div>
        Semester: <select name="semester" required>
          <option value="Spring19">Spring 2019</option>
          <option value="Fall19">Fall 2019</option>
        </select>
        <input type="submit">
    </form>
    
  </body>

</html>