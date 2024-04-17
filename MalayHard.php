<?php include('./header.php'); ?>

<!-- engassessment.php -->
<!DOCTYPE html>
<html>
<head>
	<?php 
	session_start();
	include('database.php'); 
	?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Malay Assessment</title>
	<link rel="stylesheet" type="text/css" href="./css/question.css">
</head>
<body>
	<h1>Malay Assessment <span class="red">Hard</span> Level</h1>
    <form method='POST' action='assessmentP.php'>
	<?php 
	$questionNo = 1;
	$sql = "SELECT q.questionID, q.question, q.choice1, q.choice2, q.choice3, q.choice4, q.ASSID, i.IMAGENAME, a.PATHFILE
	FROM question q
	LEFT JOIN IMAGE i ON i.IMAGEID = q.IMAGEID
	LEFT JOIN AUDIO a ON a.AUDIOID = q.AUDIOID
	WHERE q.ASSID = 6";
	$result = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_assoc($result)) {
		$questionID = $row['questionID'];
		$question = $row['question'];
		$choices = array($row['choice1'], $row['choice2'], $row['choice3'], $row['choice4']);
		shuffle($choices); // Shuffle the choices array
		$image = $row['IMAGENAME'];
		$audiopathfile = $row['PATHFILE'];

		echo   "<strong> Question ".$questionNo.": </strong>" ;
		echo "<input type='hidden' name='questionID" . $questionNo . "' value='".$questionID."'>";

		$sql1 = "SELECT answer FROM question WHERE questionID = $questionID";
		$result_answer = mysqli_query($conn, $sql1);
		$row_answer = mysqli_fetch_assoc($result_answer);
		$correctAnswer = $row_answer['answer'];

		echo "<input type='hidden' name='correctAnswer" . $questionNo . "' value='" . $correctAnswer . "'>";

		echo '<input type="hidden" name="ASSID" value = "'. $row["ASSID"] .'">';
		echo "<br>";

		if (!empty($image)) {
			echo "<img src='".$row['IMAGENAME']."' alt='Image'>";
			echo "<br><br>";
		}

		if (!empty($audiopathfile)) {
			echo "
			<audio controls>
				<source src='".$row['PATHFILE']."' type='audio/mp3'>
			</audio>
			<br><br>";
		}

		echo $row['question'];
		echo "<br>";
		
		foreach ($choices as $index => $choice) {
			$choiceId = 'choice' . ($index + 1);
			echo "<input type='radio' name='choice" . $questionNo . "' value='". $choice ."' id='". $choiceId ."'>";
			echo "<label for='". $choiceId ."'>".$choice."</label><br>";
		}

		echo "<br><br><br>";

		$questionNo++;
	}
	$_SESSION['totalQuestions'] = $questionNo - 1;
	?>

	<input type='submit' value='Submit'>
</form>
