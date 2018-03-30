<?php session_start(); ?>
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
		<h2>u r done</h2>
		<p>congtrats! you have completed the test</p>
		<p>Final score: <?php echo $_SESSION['score']; ?></p>
		<?php
		unset($_SESSION['score']);
		?>
		<a href="question.php?n=1" class="start">Take again</a>
		<a href="index.php" class="start">Home</a>
		
		<div>
	</main>
</body>
</html>