
<!DOCTYPE html>
<html>
<head>
<title> </title>

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

 <br><h1 class="text-center text-success"> Welcome to take Quiz/Test</h1> <br>
   <div class="row">
     <div class="col-lg-6">
     <div class="card">
    <h2 class="text-center card-header">  Login Form <h2>
    <form action="validation.php" method="post">
    <div class="form-group">
    <label>Username</label>
    <input type="text" name="user" class="form-control"/>
    </div>


     <div class="form-group">
    <label>Password</label>
    <input type="Password" name="password" class="form-control"/>
    </div>

    <button type="submit"class="btn btn-primary">Login </button>
    </form>
    </div>
</div>
     <div class="col-lg-6">
     <div class="card">
    <h2 class="text-center card-header">  SignIn Form <h2>
    <form action="registration.php" method="post">
    <div class="form-group">
    <label>Username</label>
    <input type="text" name="user" class="form-control"/>
    </div>


     <div class="form-group">
    <label>Password</label>
    <input type="Password" name="password" class="form-control"/>
    </div>

    <button type="submit" class="btn btn-primary">SignIn </button>
    </form>
    </div>

</div>

</div>


</div>



</body>
</html>

