<!-- feedback.php -->
<!DOCTYPE html>
<?php include('./header.php'); ?>
<html>
<head>
<!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
  body{
    background-color: #DCDCDC;
  }
.frm{
background-color: #FFFAF0;
height: 500%;
width:40%;
margin-left: 400px;
margin-top: 150px;
border-radius: 10px;
padding: 50px;
  }
.checked {
  color: orange;
}
.fa {
  font-size: 32px; /* adjust the font size to change star size */
}
textarea[type="text"] {
 width:100%;
 height: 200px;
  box-sizing: border-box;
  border: 2px solid black; /* add a border to the element */
  padding: 8px; /* add some padding to the element */
  vertical-align: top; /* align the text input to the top */
 font-family: "Times New Roman", serif;
 font-size: 20px;
}

button{
    margin-top: 50px;
    margin-left:100px;
    width: 20%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
</style>
</head>
<body>
  <form class= "frm" action= "feedbackP.php" method="post" onsubmit="return checkRating()">
    <input type="hidden" name="rating" id="rating">
<h2>Star Rating</h2>
<span class="fa fa-star" onclick="setRating(1)"></span>
<span class="fa fa-star" onclick="setRating(2)"></span>
<span class="fa fa-star" onclick="setRating(3)"></span>
<span class="fa fa-star" onclick="setRating(4)"></span>
<span class="fa fa-star" onclick="setRating(5)"></span>
</input>
<br>
<br>
<label>Write your comment here.</label>
<br>
<textarea type="text" id="description" name="description"></textarea>
<br>
<button>submit</button>
</form>
<script>
  let ratingSelected = false;

    function setRating(rating) {
      ratingSelected = true;

  // Reset all stars to default state
  var stars = document.getElementsByClassName("fa fa-star");
  for (var i = 0; i < stars.length; i++) {
    stars[i].classList.remove("checked");
  }

  // Set the selected stars to checked state
  for (var i = 0; i < rating; i++) {
    stars[i].classList.add("checked");
  }
 // Set the rating value in a hidden input field
      document.getElementById("rating").value = rating;
    }


 function checkRating() {
  if (!ratingSelected) {
    alert("Please select a rating");
    return false; // prevent form submission
  }

  return true; // allow form submission
}
</script>
</body>
</html>