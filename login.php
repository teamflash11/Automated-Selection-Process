<!DOCTYPE HTML>  
<html>
<head>
<link href="css/style.css" rel="stylesheet">
</head>
<body align="center"> <h2> LOGIN </h2>
 <div class="login-page">
  <div class="form">
    
    <form class="login-form" action="php_login.php" method="POST">
     
      <input type="text"  placeholder="Username" name="name" id="username" maxlength="20" autofocus required>
                                
      
<input  placeholder="Password" name="password"id="password" maxlength="20" type="password" value="" required>
      <button>login</button>
       
       <?php if(isset($_GET['reason']) && $_GET['reason']="failed") { echo "<p>Username/Password donot match. Try again</p>" ;} ?>
      <p class="message">Not registered? <a href="register.html">Create an account</a></p>
    </form>
  </div>
</div>


</body>
</html>



 