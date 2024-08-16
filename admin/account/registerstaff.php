<?php
//get_headers();
//require_once("addnextof-kin.php");
//include 'head.php'; 
$host = "localhost";
$user = "root";
$password = "";
$database = "pig_farming";
$conn = mysqli_connect($host, $user, $password, $database);

if(isset($_POST["submitBtn"])&& $_POST["submitBtn"]=!""){
  $firstname = $_POST['firstname'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $email = $_POST['email'];
$lastname = $_POST['lastname'];
  $marital = $_POST['marital'];
  $state = $_POST['state'];
  $LGa = $_POST['lga'];
  $bank_type = $_POST['type'];
  $ACCname = $_POST['accname'];
  $ACCno = $_POST['accno'];
  $bank = $_POST['bank'];
  $DOB = $_POST['DOB'];
  $civil= $_POST['service'];
  $date = $_POST['date'];
  $grade = $_POST['grade'];
  
  
  $db_insert = mysqli_query($conn, "INSERT INTO teacher(firstname,lastname, address,email,phone,marital_status,state,lga,bank_type,account_no,account_name,bank,DOB,civil_no,date_appointment,grade_level ) VALUE ('$firstname','$lastname','$address','$email','$phone','$marital','$state','$LGa','$bank_type','$ACCno','$ACCname','$bank','$DOB','$civil','$date','$grade')");
  if($db_insert){
    
      
    echo json_encode(array("status" => true, "message" => "Record added successfully."));
   header("location: index.php");
  }else{
     echo json_encode(array("status" => false, "message" => "Data insertion failed."));
       
  }
}
mysqli_close($conn);
?>
