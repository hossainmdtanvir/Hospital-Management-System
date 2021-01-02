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
<h2> Find a Doctor </h2>

<h3>User:- <?php echo $_SESSION["username"];?></h3>
<br/>

<?php
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowAll($conobj,"doctor");

if ($userQuery->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>Email</th><th></th><th>Gender</th><th></th><th>Address</th><th></th><th>Profession</th></tr>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      echo "<tr><td>".$row["username"]."</td><td>".$row["email"]."</td><td></td><td>".$row["gender"]."</td><td></td><td>".$row["address"]."</td><td></td><td>".$row["profession"]."</td></tr>";
    }
  } else {
    echo "0 results";
  }



?>
<br/>
<br/>




<h3><a href="../control/logout.php">logout</a></h3>

<script>
  function showmyuser() {
    var username=  document.getElementById("username").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
  
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("mytext").innerHTML = this.responseText;
      }
    else
    {
       document.getElementById("mytext").innerHTML = this.status;
    }
    };
    xhttp.open("POST", "/projectNew/control/getuser.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("username="+username);
  
  
  }
  </script>
  </head>
  
  
  
  <label>find detail of user</label>
  
    <input type="text" id="username" onkeyup="showmyuser()" >
    
  
  <p id="mytext"></p>




</body>
</html>