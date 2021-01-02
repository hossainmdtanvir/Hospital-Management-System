<?php
include('../control/logincheck.php');

if(isset($_SESSION['username'])){
header("location: pageone.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/mycss.css">
<script src="../js/myjs.js"></script>
</head>
<body>
<!--<div class="header">-->
</div>
<div class="sticky">
<div class="topnav">
  <a href="login.php">Home</a>
  <a href="pageseven.php">About US</a>
  <a href="pageeight.php">Coronavirus Safety Guide</a>
  <a href="#">Hotline:- 998774</a>
</div>
</div>
<p> <img src="getwell.jpg" width="1366" height="400"> </p>

<h2>Login</h2>

<p id="mytext"></p>

<form name="myForm" action="" onsubmit="return validateForm()" method="post">
    <input type="text" id="username" name="username" placeholder="Enter your username" >
    <input type="password" id="password" name="password" placeholder="Enter your password" >
    <!-- <input type="radio" name="colors" id="red">Red<br>
  <input type="radio" name="colors" id="blue">Blue<br> -->
    <input name="submit" type="submit" value="LOGIN">
</form>
<br>


<!-- <form action="" method="post">
<input type="text" name="username" placeholder="Enter your username" required>
    <br>
    <br>
    <input type="password" name="password" placeholder="Enter your password" required>
    <br>
    <br>
    <input type="email" name="email" placeholder="Enter your email" required>
    <br>
    <br>
    <input type="phone no" name="phone no" placeholder="Enter your phone no" required>
    <br>
    <br>
    Select gender
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <br><br>
    <input name="submit" type="submit" value="LOGIN">
</form> -->
<p> <img src="services.jpg" width="1366" height="100"> </p>

<h3> <center> We are committed to provide affordable services, without any 
compromise on the quality of service – so that you are able to remain happy. </center></h3>
<br>

<h2> <center> Imaging    </center></h2>

	<header> <center> Popular Diagnostic Centre Ltd. is an advanced Centre providing the 
    diagnostic imaging services in an elevated ambience, completed by service and report efficiency. </center></header>

    <br>
    <br>

    <h2> <center> Pathology    </center></h2>

<header> <center> Our Pathology division offers a comprehensive range of laboratory tests for diagnosis, management 
  and prevention of a wide variety of diseases. </center></header>

<?php echo $error; ?>

</body>
</html>