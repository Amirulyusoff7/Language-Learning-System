<!-- feedbackP.php -->
<?php

session_start();
include('database.php');

$VISITORID =$_SESSION['VISITORID'];
$rating =$_POST['rating'];
$description=$_POST['description'];

$sql = "INSERT INTO feedback (VISITORID, RATING, FEEDDATE, description) VALUES ('$VISITORID', '$rating', NOW(), '$description')";
$result = mysqli_query($conn,$sql);
echo "<script type=text/javascript>
alert('Thank You For Your Feedback');
location='HomePage.php';
</script>"

?>