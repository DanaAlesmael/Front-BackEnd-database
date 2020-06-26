<?php


  // Check connection  of my created db
  $conn1 = new mysqli("localhost", "root", "","DANAdb");
  if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
  }




 if(array_key_exists('button1', $_GET)) {
 button1();
}
else if (array_key_exists('button2', $_GET)) {
 button2();
}
else if (array_key_exists('button3', $_GET)) {
 button3();
}
function button1(){
    echo "Delete all data";
}

function button2(){

if(!empty($_GET['right'])){
$right = $_GET['right']; 
if($_GET["right"] != "0"){
    echo $_GET["right"];
}
else {
  echo "Error";
}
$query = "INSERT INTO Direc(right) VALUES('$right')"; 
$run = mysqli_query($conn1, $query) or die(mysqli_error());
if ($run){
    echo "Sent";
}
else { echo "not sent"; 
}
}

if(!empty($_GET['forward'])){
$forward = $_GET['forward']; 
  if($_GET["forward"] != "0"){
    echo $_GET["forward"];
}
else {
    echo "Error";
}
$query = "INSERT INTO Direc(forward) VALUES('$forward')"; 
$run = mysqli_query($conn1, $query) or die(mysqli_error());
if ($run){
    echo "Sent";
}
else { echo "not sent"; 
}
}

if(!empty($_GET['left'])){
$left = $_GET['left']; 
if($_GET["left"] != "0"){
    echo $_GET["left"];
}
else {
    echo "Error";
}
$query = "INSERT INTO Direc(left) VALUES('$left')"; 
$run = mysqli_query($conn1, $query) or die(mysqli_error());
if ($run){
    echo "Sent";
}
else { echo "not sent"; 
}
}
}

function button3(){
if($_GET["right"] > "0"){
  echo  "<img src = 'Rarrow.jpg' class ='pic' / >";
}
else if($_GET["forward"] > "0"){
  echo  "<img src = 'farraw.jpg' class ='pic' / >";
}
else if($_GET["left"] > "0"){
  echo  "<img src = 'larraw.jpg' class ='pic' / >";
}
}

?>


<!DOCTYPE html> 
<html> 
      
<head> 
    <meta charset="utf-8">
    <title>Directions </title>     
</head> 
<body> 
    <h1 style="color:black;"> 
        Controlling Directions
    </h1> 
    }
  </script>
<br><br> 
</body>
</html> 