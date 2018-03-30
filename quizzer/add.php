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
			<h2>Add a Question</h2>
			<form method="post" action="add.php">
			<p>
				<label>Question no</label>
				<input type="number" name="question_number"/>
			</p>
			<p>
				<label>Question text</label>
				<input type="text" name="question_text"/>
			</p>
			<p>
				<label>choice 1: </label>
				<input type="text" name="choice1"/>
			</p>
			<p>
				<label>choice 2: </label>
				<input type="text" name="choice2"/>
			</p>
			<p>
				<label>choice 3: </label>
				<input type="text" name="choice3"/>
			</p>
			<p>
				<label>choice 4: </label>
				<input type="text" name="choice4"/>
			</p>
			<p>
				<label>correct choice: </label>
				<input type="number" name="correct_choice"/>
			</p>
			<p>
			<input type="submit" name="submit" value="submit">
			</p>
			</form>
		</div>
	</main>
</body>
</html>