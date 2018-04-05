
<!DOCTYPE HTML>  
<html>
<head>
<link href="css/style.css" rel="stylesheet">
</head>
<body align="center"> <h2> </h2>
<!--<div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="abc1.php" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="name" id="username" maxlength="20" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password"id="password" maxlength="20" type="password" value="" required>
                                </div><br>
                                <!-- Change this to a button or input when using this as a form 
                                
                                <input type="submit" class="btn btn-success btn-lg btn-block" href="Dashboard/dashboard.html" name="submit" value="Submit"> 
								</fieldset>
							
                        </form><br>
						<?php //if(isset($_GET['reason']) && $_GET['reason']="failed") { echo "<p>Username/Password donot match. Try again</p>" ;} ?>
						<div>
                                 <label style="float:right;"><a href="register.html" >New? Register Here!</style></label>
                                </div>
                                
                    </div>
                </div> -->
                <div class="login-page">
  <div class="form">
    
    <form class="login-form" action="php_login.php" method="POST">
     
      <input type="text"  placeholder="Username" name="name" id="username" maxlength="20" autofocus required>
                                
      
<input  placeholder="Password" name="password"id="password" maxlength="20" type="password" value="" required>
      <button >login</button>
       
       <?php if(isset($_GET['reason']) && $_GET['reason']="failed") { echo "<p>Username/Password donot match. Try again</p>" ;} ?>
      <p class="message">Not registered? <a href="register.html">Create an account</a></p>
    </form>
  </div>
</div>


</body>
</html>



 