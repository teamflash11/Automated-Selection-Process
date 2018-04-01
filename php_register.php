<?php
include ("connect.php"); 
// define variables and set to empty values
$fname = $lname = $contact = $gender = $email = $psw = $psw1 = "";
$fname= (isset($_POST['fname']) ? $_POST['fname'] : '');
$lname= (isset($_POST['lname']) ? $_POST['lname'] : '');
$gender= (isset($_POST['gender']) ? $_POST['gender'] : '');
$email= (isset($_POST['email']) ? $_POST['email'] : '');
$confirmp= (isset($_POST['confirmp']) ? $_POST['cpassword'] : '');
$password= (isset($_POST['password']) ? $_POST['password'] : '');

$q = "select * from users where fname='$fname' && password='$password'";
$result = mysqli_query($conn,$q);
$num = mysqli_num_rows($result);

if($num == 1){
echo "duplicate data";
}else{

 $qy = "INSERT INTO users (fname,lname,gender,email,password,confirmp)
    VALUES ('$fname','$lname','$gender','$email','$password','$confirmp')";
  if ($conn->query($qy) === TRUE) 
   {
    echo "<script> alert('You Have Been Successfully Registered')</script>";
	
   }
   else 
   {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
mysqli_close($conn);
header('Location: template/index.html');
exit;
?>
