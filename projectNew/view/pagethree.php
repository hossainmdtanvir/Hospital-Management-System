<?php
include('../control/db.php');
session_start(); 

if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE html>
<html>
<body>
<p> <img src="banner.jpg" width="1366" height="268"> </p>
<h2> Patient Information </h2>

<h3>User:- <?php echo $_SESSION["username"];?></h3>
<br/>

<?php
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowAll($conobj,"patient");

if ($userQuery->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>Email</th><th></th><th>Gender</th><th></th><th>Address</th><th></th></tr>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      echo "<tr><td>".$row["username"]."</td><td>".$row["email"]."</td><td></td><td>".$row["gender"]."</td><td></td><td>".$row["address"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }



?>

<br/>
<br/>



<h3><a href="../control/logout.php">logout</a><h3>

</body>
</html>