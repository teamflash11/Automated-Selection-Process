<?php
include "connect.php";
//$name=$_POST['name'];
//$password=$_POST['password'];
$name= (isset($_POST['name']) ? $_POST['name'] : '');
$password= (isset($_POST['password']) ? $_POST['password'] : '');

echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $password;
echo "<br>";
$sql = "INSERT INTO login (username, password)
VALUES ('$name', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>
