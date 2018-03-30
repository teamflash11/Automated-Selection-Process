<?php
session_start();
if(!isset($_SESSION['username']))
header('location:login.php');

$servername = "localhost";
$username = "root";
$password = "";
$database="quizzer";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

if(isset($_POST['submit'])){
if(!empty($_POST['quizcheck'])){
$count=count($_POST['quizcheck']);
echo "out of 5,you have selected ".$count." options";
$result=0;
$i=1;
$selected=$_POST['quizcheck'];
print_r($selected);
$sql1 = "SELECT * FROM questions";
$result1 = $conn->query($sql1);

    while($row1 = $result1->fetch_assoc()) {
print_r($row1['ans_id']);
$checked=$row1['ans_id']==$selected[$i];
if($checked){
$result++;
}
$i++;
}
echo "total score is ".$result;

}
}
$name=$_SESSION['username'];
$finalresult="insert into user(username,totalques,answerscorrect)values('$name','5','$result')";
$queryresult=mysqli_query($conn,$finalresult);

?>