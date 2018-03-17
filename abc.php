<?php
// Create connection
$conn = mysqli_connect('localhost', 'root',"");
//mysql_select_db("loginasp");
// Check connection
if (!$conn) {
    echo "Connection failed: ";
}
echo "Connected successfully";
$name=$_POST['name'];
$password=$_POST['password'];

?>
