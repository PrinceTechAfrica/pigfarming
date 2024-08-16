<?php
include 'head.php'; 
$host = "localhost";
$user = "root";
$password = "";
$database = "pig_farming";
$conn = mysqli_connect($host, $user, $password, $database);

if(isset($_POST["submitBtn"])&& $_POST["submitBtn"]=!""){
  $number = $_POST['number'];
  $male = $_POST['male'];
  $female = $_POST['female'];
  //$session= $_POST['session'];
$class = $_POST['class'];
 // $password = $_POST['password'];
  
  
  $db_insert = mysqli_query($conn, "INSERT INTO stock(pig_variety,quantity,price,quantity_feed) VALUE ('$number','$class','$male','$female')");
  if($db_insert){
      echo json_encode(array("status" => true, "message" => "you have added a new stock."));
  }else{
     echo json_encode(array("status" => false, "message" => "Data insertion failed."));
       
  }
}
?>
