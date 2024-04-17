<?php include('./header.php'); ?>

<!-- assessmentP.php -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Assessment Result</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}

		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
			background-color: #ffffff;
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
		}

		h1 {
			text-align: center;
			color: #333333;
		}

		.question {
			margin-bottom: 20px;
			padding-bottom: 10px;
			border-bottom: 1px solid #cccccc;
		}

		.question p {
			margin: 0;
			color: #666666;
		}

		.user-answer {
			color: #008000;
		}

		.correct-answer {
			color: #ff0000;
		}

		.marks {
			margin-top: 20px;
			text-align: center;
			font-size: 24px;
			color: #333333;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Assessment Result</h1>

		<?php
		session_start();
		include('database.php');

		$totalQuestions = $_SESSION['totalQuestions'];
		$marks = 0;

		for ($questionNo = 1; $questionNo <= $totalQuestions; $questionNo++) {
			$ASSID = $_POST['ASSID'];
			$questionID = $_POST['questionID' . $questionNo];
			$userAnswer = $_POST['choice' . $questionNo];
			$correctAnswer = $_POST['correctAnswer' . $questionNo];

			if ($userAnswer == $correctAnswer) {
				$marks++;
			}

			// Save the user's answer in the database or perform any other necessary actions

			// Optional: You can also display the correct answer for each question
			$sql = "SELECT answer FROM question WHERE questionID = $questionID";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
			$correctAnswer = $row['answer'];

			echo '<div class="question">';
			echo "<p>Question " . $questionNo . ":</p>";
			echo "<p>Your answer: <span class='user-answer'>" . $userAnswer . "</span></p>";
			echo "<p>Correct answer: <span class='correct-answer'>" . $correctAnswer . "</span></p>";
			echo '</div>';
		}

		echo '<div class="marks">';
		echo "Total Marks: " . $marks . "/" . $totalQuestions;
		echo '</div>';

		// Optionally, you can save the marks in the database or perform any other necessary actions
		$sql1 = "INSERT INTO assesmenttaken (VISITORID, ASSID, MARKS, ASSDATE) VALUES ('111', '$ASSID', '$marks', NOW())";
		$result1 = mysqli_query($conn, $sql1);
		?>
	</div>
</body>
</html>