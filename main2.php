
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

<body>

 <h1 style="color:black;"> 
        Controlling Directions:
    </h1> 
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

<?php 

// Check connection  of my created db
  $conn = new mysqli("localhost", "root", "","DANAdb");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

 if(isset($_GET['button1'])) {
 button1();
}
else if (isset($_GET['button2'])){
 button2();
}
else if (isset($_GET['button3'])) {
 button3();
}
function button1(){
    echo "Delete all data";
    $right = $_GET['right']; 
$forward = $_GET['forward']; 
$left = $_GET['left']; 
$conn = new mysqli("localhost", "root", "","DANAdb");
        if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
        }

if(!empty($_GET['right'])){
    if($_GET["right"] != "0"){
    echo $_GET["right"];
    }
    else {
    echo "Error";
    } 
$res = "UPDATE Direc SET right = NULL WHERE Direc='$right'";
$result=mysql_query($res);

}

}
if(!empty($_GET['forward'])){
      if($_GET["forward"] != "0"){
        echo $_GET["forward"];
      }
       else {
        echo "Error";
      }
$res = "UPDATE Direc SET forward = NULL WHERE Direc='$forward'";
$result=mysql_query($res);
}

if(!empty($_GET['left'])){
   if($_GET["left"] != "0"){
    echo $_GET["left"];
}
else {
    echo "Error";
} 
$res = "UPDATE Direc SET left = NULL WHERE Direc='$left'";
$result=mysql_query($res);
}

function button2(){
$right = $_GET['right']; 
$forward = $_GET['forward']; 
$left = $_GET['left']; 
$conn = new mysqli("localhost", "root", "","DANAdb");
        if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
        }

if(!empty($_GET['right'])){
    if($_GET["right"] != "0"){
    echo $_GET["right"];
    }
    else {
    echo "Error";
    } 
$query = "INSERT INTO Direc(right, forward, left) VALUES('$right',' 0 ','0')"; 
$run = mysqli_query($conn, $query) or die(mysqli_error($conn));
if ($run){
    echo "Sent";
}
else { echo "not sent"; 
}
}

}
if(!empty($_GET['forward'])){
      if($_GET["forward"] != "0"){
        echo $_GET["forward"];
      }
       else {
        echo "Error";
      }
   
$query = "INSERT INTO Direc(right, forward, left) VALUES('0', '$forward' , '0')"; 
$run = mysqli_query($conn, $query) or die(mysqli_error($conn));
if ($run){
    echo "Sent";
}
else { echo "not sent"; 
}
}

if(!empty($_GET['left'])){
   if($_GET["left"] != "0"){
    echo $_GET["left"];
}
else {
    echo "Error";
} 
   
$query = "INSERT INTO Direc(right, forward, left) VALUES('0', '0', $left')"; 
$run = mysqli_query($conn, $query) or die(mysqli_error($conn));
if ($run){
    echo "Sent";
}
else { 
  echo "not sent"; 
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

</body>
</html>
