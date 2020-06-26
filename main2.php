

<!DOCTYPE html> 
<html> 
      
<head> 
    <meta charset="utf-8">
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
        Controlling Directions
    </h1> 
 
    
    <form action = "input.php" method="get"> 
        Right: <input type = "text" name="Right" value = "" placeholder="type number">
<br><br>
       Forward: <input type = "text" name="Forward" value = "" placeholder="type number">
<br><br>
       Left: <input type = "text" name="Left" value = "" placeholder="type number">
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

if($_GET["Right"] != "0"){
    echo $_GET["Right"];
}
else {
    echo "Error";
}
if($_GET["Forward"] != "0"){
    echo $_GET["Forward"];
}
else {
    echo "Error";
}
if($_GET["Left"] != "0"){
    echo $_GET["Left"];
}
else {
    echo "Error";
}
}

function button3(){
if($_GET["Right"] > "0"){
  echo  "<img src = 'Rarrow.jpg' class ='pic' / >";
}
else if($_GET["Forward"] > "0"){
  echo  "<img src = 'farraw.jpg' class ='pic' / >";
}
else if($_GET["Left"] > "0"){
  echo  "<img src = 'larraw.jpg' class ='pic' / >";
}
}
?>

</body>
</html> 