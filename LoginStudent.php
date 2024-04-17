<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="StyleLogin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Student's Login Page</title>
</head>
<body>
  <div class="container" id="container">
    <div class="form-container log-in-container">
      <form action="LoginActStud.php" method="post">
        <h1>LOGIN</h1>

        <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>

        <span>Please input your username and password </span>
        <input type="text" name="username" placeholder="Enter Username" />
        <input type="password" name="password" placeholder="Enter Password" />
        <button type="submit">Log In</button>
      </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-right">
          <h1>GROUP TUE10 Language Learning System</h1> 
          <h2>Student's Login Form</h2>
         <h4>Haven't Sign Up yet?<a href="RegisterStudent.php"> Sign Up Now!</a> </h4>       
        </div>
      </div>
    </div>
  </div>
</body>
</html>