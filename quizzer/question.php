<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
	//set question no
	$number = (int) $_GET['n'];
	

	//toatal question
		$query = "Select * from `questions`";
		//get result
		$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
		$total = $results->num_rows;	
	
	//get question
	$query = "select * from `questions` where question_number = $number";
	//get result
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	
	$question = $result->fetch_assoc();
	
	//get choice
	$query = "select * from `choices` where question_number = $number";
	//get result
	$choices = $mysqli->query($query) or die($mysqli->error.__LINE__);
	
	
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
			<div class="current">Question <?php echo $question['question_number']; ?> of <?php echo $total; ?></div>
			<p class="question">
				<?php echo $question['text']; ?>
				<p>
				<form method="post" action="process.php">
				<ul class="choices">
				<?php while($row = $choices->fetch_assoc()): ?>
				<li><input name="choice" type="radio" value="<?php echo $row['id']; ?>"/><?php echo $row['text']; ?></li>
				<?php endwhile; ?>
				
				</ul>
				<input type="submit" value="submit">
				<input type="hidden" name="number" value="<?php echo $number; ?>" />
				</form>
		</div>
	</main>
</body>
</html>