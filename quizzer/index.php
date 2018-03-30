<?php include 'database.php'; ?>
<?php
 //get total question
 $query = "select * from questions";
 //get results
 $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
 $total = $results->num_rows;
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
		<h2>Test Your PHP Knowledge</h2>
		<p>This is mcq test for practice</p>
		<ul>
			<li><strong>No. of questions: </strong><?php echo $total; ?></li>
			<li><strong>Type: </strong>mcq</li>
		</ul>
		<a href="question.php?n=1" class="start">Start quiz</a>
		</div>
	</main>
</body>
</html>