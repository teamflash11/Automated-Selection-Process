<?php
session_start();
if(!isset($_SESSION['username']))
header('location:login.php');


$conn= mysqli_connect('localhost','root');
mysqli_select_db($conn,'quizdatabase');
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
<br> <h1 class="text-center text-primary"> Aptitude </h1> <br>

<br> <h2 class="text-center text-success"> Welcome <?php echo $_SESSION['username']; ?> </h2><br>
<div class="col-lg-8 m-auto d-block">
<div class="card">

<h3 class="text-center card-header"> Welcome <?php echo $_SESSION['username']; ?> , you have to select one out of 4 options! </h3> <br>

<form method="post" action="check.php">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="quizzer";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
for($i=1;$i<6;$i++)
{
$sql1 = "SELECT * FROM questions where qid=$i";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {

?>
 <div class="card">
  <h4 class="card-header"> <?php echo  $row1['questions'] ?>  </h4>
<?php
$sql = "SELECT * FROM answers where ans_id=$i";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

    ?>
<div class="card-body">
  <input type="radio" name="quizcheck[<?php echo  $row['ans_id']; ?>]" id="" value="<?php echo  $row['aid']; ?>"><?php echo  $row['answers']; ?>

 </div>

   <?php
  }
} else {
    echo "0 results";
}
}
}
}
$conn->close();
 ?>


</div>
<input type="submit" name="submit" value="submit" class="btn btn-success m-auto d-block">
</form>

 <a href="logout.php"  class="btn btn-primary m-auto d-block" > LOGOUT</a>

 </div>
</div>

 </body>
 </html>