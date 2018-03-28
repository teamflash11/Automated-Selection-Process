<?php
include ("connect.php"); 
//echo  $_POST["name"];
//echo  $_POST["password"];
$name= (isset($_POST['name']) ? $_POST['name'] : '');
$password= (isset($_POST['password']) ? $_POST['password'] : '');
$result = mysqli_query($conn,"insert into login (username,password) values('$name','$password')");
echo $name." added successfully with password as ".$password;
header('Location: Dashboard/dashboard.html');
exit;

?>
