
<!DOCTYPE html> 
<html> 
      
<head> 
    <title>Directions </title> 
        <style type = "text/css">
            body{
            background-image:url(background.jpg);
            background-repeat: no-repeat;
            background-size: 1200px 900px;
            }
            .box1{
                background-color: lightgreen;
                width: 100px;
                font-weight: bold;
            }
            .box2{
                background-color: orange;
                width: 100px;
                font-weight: bold;
                color: black;
            }
            .box3{
                background-color: lightblue;
                width: 100px;
                font-weight: bold;
                color: black;
            }
            .box4{
                background-color: lightpink;
                width: 100px;
                font-weight: bold;
                color: black;
            }
            .pic{
            display: block;
            width:  200px; 
            margin-left: 900px;
            }
        </style>
</head> 

<?php

//connection:
$conn = mysqli_connect('localhost', 'root', '');

//check-connection
if (!$conn){ //if no connection
	die("Error connecting to database: " . $conn->connect_error);
}
echo "You have connected successfully +";
 

//Creating database
$sql = "CREATE DATABASE DANAdb"; 
if ($conn->query($sql) == TRUE){
}
//$conn->close(); 

  // Check connection  of my created db
  $conn1 = new mysqli("localhost", "root", "","DANAdb");
  if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
  }
echo " You have connected to DANAdb successfully";

?>

<body>
	<br><br>

	 <form action = "main2.php" method="get"> 
        Right: <input type = "text" name="right" value = "" placeholder="type number">
<br><br>
       Forward: <input type = "text" name="forward" value = "" placeholder="type number">
<br><br>
       Left: <input type = "text" name="left" value = "" placeholder="type number">
<br><br> 
   <input type="submit" name="button1"
                class="box4" value="Delete"  /> 
        <input type="submit" name="button2"
                class="box4" value="Save" /> 
        <input type="submit" name="button3"
                class="box4" value="Start" /> 
</form>
<br><br>

</body>
</html>

<?php
$conn->close(); 

?>