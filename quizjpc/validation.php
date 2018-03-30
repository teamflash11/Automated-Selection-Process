<?php

session_start();
header('location:login.php');
$conn = mysqli_connect('localhost', 'root');

// Check connection
if ($conn) {
    echo "Connected successfully";
}else {
echo "Connected failed";

}

mysqli_select_db($conn,'sessionpractical');
$name = $_POST['user'];
$pass = $_POST['password'];

$q = "select * from signin where name='$name' && password='$pass'";
$result = mysqli_query($conn,$q);
$num = mysqli_num_rows($result);

if($num == 1){

$_SESSION['username'] = $name;
header('location:home.php');
}else{

 header('location:login.php');
}


?>