<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="./css/header.css">
</head>
<body>

<header>
    <a href="HomePage.php" class="logo">
        <div class="logo1">
            <img src="./img/logo.png" width="70" height="70" alt="logo" class="logo-img">
        </div>
    </a>

    <div class="header-buttons">
        <button class="home-button" onclick="goToHomePage()">Home</button>
        <button class="lesson-button" onclick="goToLessonPage()">Lesson</button>
        <button class="feedback-button" onclick="goToRatingPage()">Rating</button>
        <button class="logout-button" onclick="Logout()">Logout</button>
    </div>
</header>

<script>
    function goToHomePage() {
        window.location.href = "HomePage.php"; // Replace "home.php" with the actual URL of your home page
    }

    function goToLessonPage() {
        window.location.href = "HomePage.php"; // Replace "lesson.php" with the actual URL of your lesson page
    }
    function goToRatingPage() {
        window.location.href = "feedback.php"; // Replace "lesson.php" with the actual URL of your lesson page
    }
    function Logout() {
        window.location.href = "Logout.php"; // Replace "lesson.php" with the actual URL of your lesson page
    }

</script>

<br>
</body>
</html>
