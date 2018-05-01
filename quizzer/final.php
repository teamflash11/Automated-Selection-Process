<?php session_start(); 
include ("database.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>PHP Quizzer</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
	<header>
		<div class="container">
			<h1>PHP Quizzer</h1>
		</div>
	</header>
	<main>
		<div class="container">
		<h2></h2>
		<p>Congtrats! you have completed the test</p>
		<p>Final score: <?php echo $_SESSION['score']; ?></p>
		
		<?php
		$score=$_SESSION['score'];
		$name=$_SESSION['username'];
		$sql="insert into scores(username,cans) values('$name','$score')";
		$result=mysqli_query($mysqli,$sql);
		
		
		
		unset($_SESSION['score']);
		?>
		<a href="question.php?n=1" class="start">Take again</a>
		<a href="../startbootstrap-sb-admin-gh-pages/index.html" class="start">Home</a>
		
		<div>
	</main>
</body>
</html>