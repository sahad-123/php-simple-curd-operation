<?php

header('Acess-control-Allow-origin:*');
$data=json_decode(file_get_contents("php://input"),true);
$id=$data['id'];
$conn=mysqli_connect("localhost","deep","0234aniket","student");

 if($conn){
     // echo "ok";
 }
  else{
  //  echo "not ok";
  }

$sql="SELECT * FROM Student WHERE id=$id";
if(mysqli_query($conn,$sql))
{
     // echo "sql right";
      $result=mysqli_query($conn,$sql);

    $response=array();
    while($row=mysqli_fetch_all($result,MYSQLI_ASSOC)){
        $response[]=$row;
    
    
  
}
echo json_encode($response);


 
 

}
else {
      die("sql query failed");
}



?>