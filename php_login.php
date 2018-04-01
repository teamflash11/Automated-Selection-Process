<?php
session_start(); 

include ("connect.php"); 
//echo  $_POST["name"];
//echo  $_POST["password"];
$name= (isset($_POST['name']) ? $_POST['name'] : '');
$password= (isset($_POST['password']) ? $_POST['password'] : '');
$result = mysqli_query($conn,"select * from users where fname='$name' && password='$password'");
$num = mysqli_num_rows($result);
if($num == 1){
$_SESSION['username'] = $name;

header('Location: Dashboard/dashboard.html');
}else{
	

				$reason = "failed";
				header("location:login.php?reason=".$reason);

  echo "<script type='text/javascript'>alert('$message');</script>";
}

?>
