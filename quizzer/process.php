<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
	//check score
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
	}
	

	
	if($_POST){
		$number = $_POST['number'];
		$selected_choice = $_POST['choice'];
		$next = $number+1;
		
		//toatal question
		$query = "Select * from `questions`";
		//get result
		$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
		$total = $results->num_rows;
		
		//get correct choice
		
		$query = "Select * from `choices` where question_number = $number AND is_correct = 1";
		//get result
		$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
		//get row
		$row = $result->fetch_assoc();
		
		//get correct choice
		$correct_choice = $row['id'];
		
		if($correct_choice == $selected_choice){
			$_SESSION['score']++;
		}
		
		if($number == $total){
			header("Location: final.php");
			
			exit();
		}else{
			header("Location: question.php?n=".$next);
		}
	}	
	
?>