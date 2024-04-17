<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="StyleRegister.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Account's Signup Page</title>
</head>
<body>
  <div class="container" id="container">
    <div class="form-container log-in-container">
      <form action="RegisterActStud.php" method="post">
        <h1>SIGN UP</h1>

        <span>Please input all information needed. </span>
        <input type="text" name="sid" placeholder="Student's IC" />
        <input type="text" name="name" placeholder="Student's Name" />
        <input type="email" name="email" placeholder="example@gmail.com" />
        <input type="text" name="username" placeholder="Account's Username" />
        <input type="password" name="password" placeholder="Account's Password" />
        <button type="submit">Sign Up</button>
      </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
  <h2>GROUP TUE07 Language Learning System</h2> 
          <h3>Create Account Form</h3>
         <h4>Already Registered?<a href="LoginStudent.php"> Login Here</a> </h4>    
        </div>
      </div>
    </div>
  </div>
</body>
</html>