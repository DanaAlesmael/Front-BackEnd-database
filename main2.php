
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
     <form action = "tr1.php" method="get"> 
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

}

function button2(){
if(!empty($_GET['right'])){
    if($_GET["right"] != "0"){
    echo $_GET["right"];
    }
    else {
    echo "Error";
    } 
    $conn = new mysqli("localhost", "root", "","DANAdb");
    $select = $conn->prepare("select * from Direc"); 
        if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
        }
        else{
          $select-> execute(); 
          $result = $select->get_result(); 

$right = $_GET['right']; 
while($row=$result ->fetch_assoc()){
  echo "$row[right]";
}
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
   $conn = new mysqli("localhost", "root", "","DANAdb");
    $select = $conn->prepare("select * from Direc"); 
        if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
        }
        else{
          $select-> execute(); 
          $result = $select->get_result(); 
        $forward = $_GET['forward']; 
      while($row=$result ->fetch_assoc()){
      echo "$row[forward]";
}
}
}


if(!empty($_GET['left'])){
   if($_GET["left"] != "0"){
    echo $_GET["left"];
}
else {
    echo "Error";
} 
 $conn = new mysqli("localhost", "root", "","DANAdb");
    $select = $conn->prepare("select * from Direc"); 
        if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
        }
        else{
          $select-> execute(); 
          $result = $select->get_result();
$left = $_GET['left']; 
 while($row=$result ->fetch_assoc()){
      echo "$row[left]";
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

</body>
</html>
