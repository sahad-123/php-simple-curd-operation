<?php
header('Acess-control-Allow-origin:*');
$conn=mysqli_connect("localhost","deep","0234aniket","student");

 if($conn){
     // echo "ok";
 }
  else{
  //  echo "not ok";
  }

$data=json_decode(file_get_contents("php://input"),true);
$name=$data['name'];
$age=$data['age'];
$city=$data['city'];

  echo $name.$age.$city;
  $sql="INSERT INTO student(name,age,city)VALUES('$name','$age','$city')";
  if(mysqli_query($conn,$sql))
  {
       echo "sql right";
  }
  else{
 echo "sql not right";
  }
  


?>
































