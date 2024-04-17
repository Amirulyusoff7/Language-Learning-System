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
	<title>Mandarin Assessment</title>
	<link rel="stylesheet" type="text/css" href="./css/question.css">
</head>
<body>
	<h1>Mandarin Assessment <span class="red">Hard</span> Level</h1>
    <form method='POST' action='assessmentP.php'>
	<?php 
	$questionNo = 1;
	$sql = "SELECT q.questionID, q.question, q.choice1, q.choice2, q.choice3, q.choice4, q.ASSID, i.IMAGENAME, a.PATHFILE
	FROM question q
	LEFT JOIN IMAGE i ON i.IMAGEID = q.IMAGEID
	LEFT JOIN AUDIO a ON a.AUDIOID = q.AUDIOID
	WHERE q.ASSID = 9";
	$result = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_assoc($result)) {
		$questionID = $row['questionID'];
		$question = $row['question'];
		$choice1 = $row['choice1'];
		$choice2 = $row['choice2'];
		$choice3 = $row['choice3'];
		$choice4 = $row['choice4'];
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
		echo "<br>
		
		<input type='radio' name='choice" . $questionNo . "' value='". $row['choice1'] ."' id='choice1'>
		<label for='choice1'>".$row['choice1']."</label><br>
		
		<input type='radio' name='choice" . $questionNo . "' value='". $row['choice2'] ."' id='choice2'>
		<label for='choice2'>".$row['choice2']."</label><br>
		
		<input type='radio' name='choice" . $questionNo . "' value='". $row['choice3'] ."' id='choice3'>
		<label for='choice3'>".$row['choice3']."</label><br>

		<input type='radio' name='choice" . $questionNo . "' value='". $row['choice4'] ."' id='choice4'>
		<label for='choice4'>".$row['choice4']."</label><br>

		<br><br><br>";

		$questionNo++;
	}
	$_SESSION['totalQuestions'] = $questionNo - 1;
	?>

	<input type='submit' value='Submit'>
</form>
