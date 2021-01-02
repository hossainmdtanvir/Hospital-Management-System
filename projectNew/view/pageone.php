<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<body>
<p> <img src="banner.jpg" width="1366" height="268"> </p>
<h3> User:-  <?php echo $_SESSION["username"];?></h3>

<br/>
    <h2>    
        <script>
            alert("Please accept our terms and services");
        </script>
    </h2>

    <h2><a href="pagesix.php"> View My Profile</a></h2>

    <h2>
        <script>
            document.write("Please Navigate Through The Services");
        </script>
    </h2>

<div>
    <ul>
    <li> <h2><a href="pagetwo.php"> Find a Doctor</a></h2> </li>
    <li> <h2><a href="pagethree.php"> Patient Details</a></h2> </li>
    <li> <h2><a href="pagefour.php"> Nurse Information</a></h2> </li>
    <li> <h2><a href="pagefive.php"> Consultant</a>  [admin]</h2> </li>
    </ul>
</div>

<br/>
 <h4><a href="../control/logout.php">logout</a></h4>

</body>
</html>

<?php


?>   


