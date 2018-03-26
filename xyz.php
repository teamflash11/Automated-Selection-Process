<?php
include ("connect.php"); 
// define variables and set to empty values
$fname = $lname = $contact = $gender = $email = $psw = $psw1 = "";
$fname= (isset($_POST['fname']) ? $_POST['fname'] : '');
$lname= (isset($_POST['lname']) ? $_POST['lname'] : '');
$gender= (isset($_POST['gender']) ? $_POST['gender'] : '');
$email= (isset($_POST['email']) ? $_POST['email'] : '');
$confirmp= (isset($_POST['confirmp']) ? $_POST['confirmp'] : '');
$password= (isset($_POST['password']) ? $_POST['password'] : '');


 //insert into tabel//
 
   $sql = "INSERT INTO users (fname,lname,gender,email,password,confirmp)
    VALUES ('$fname','$lname','$gender','$email','$password','$confirmp')";

  if ($conn->query($sql) === TRUE) 
   {
    echo "<script> alert('You Have Been Successfully Registered')</script>";
	
   }
   else 
   {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
mysqli_close($conn);

?>
