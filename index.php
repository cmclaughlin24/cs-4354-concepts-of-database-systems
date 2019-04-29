<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8"/>
  
  <title>CS 4354: Concepts of Database Systems</title>
  
  <link rel="stylesheet" href="/css/navigation-bar.css">
  <link rel="stylesheet" href="/includes/foundation-grid/css/foundation.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <?php include '/includes/php/ATLCDatabase.php';?>
  
  <script>
            $(document).ready(function(){
            $('#myDropDown').change(function(){
                //Selected value
                var inputValue = $(this).val();

                //Ajax for calling php function
                $.post('/includes/php/schedule-view.php', { dropdownValue: inputValue }, function(data){
                    document.getElementById("ATLCSchedule").innerHTML=data;
                    //do after submission operation in DOM
                });
            });
        });
  </script>
  
  <style>
    body {
      background-image: url("/images/abstract-background.jpg"); 
    }
  </style>
  
</head>

  <body>
    <script src="/includes/js/navigation-bar.js"></script>
    <form>
      <select id="myDropDown">
        <option value="" disabled selected>Select Semester</option>
        <option value="Spring19">Spring 2019</option>
        <option value="Fall19">Fall 2019</option>
      </select>
    </form>
    
    <div id="ATLCSchedule"></div>

  </body>

</html>