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

<!DOCTYPE html>
<html>
<style>
body {font-family: Arial;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<body>
<form action="register.php" onclick="window.location.href='index.html'" stylestyle="border:1px solid #ccc" method="POST">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

	 <label><b>First Name</b></label>
    <input type="text" placeholder="Enter first name" name="fname" >
	<label><b>Last Name</b></label>
    <input type="text" placeholder="Enter last name" name="lname">
  	<label><b>Contact</b></label>
    <input type="text" placeholder="Enter contact" name="contact" required>
	<label><b>Gender</b></label><br>
    <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
     <br><br> 
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw">
    <label><b>Confirm Password</b></label>
    <input type="password" placeholder="confirm Password" name="psw1">
    <label>
      <input type="checkbox" checked="checked" style="margin-bottom:15px"> Remember me
    </label>
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
 <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>

<button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>