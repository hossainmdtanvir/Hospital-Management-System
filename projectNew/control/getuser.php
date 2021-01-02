<?php
include('db.php');

$user = $_POST['username'];

if($user!="")
{

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->GetUserByUsername($conobj,"doctor",$user );



if ($userQuery->num_rows > 0) {
  echo "<table><tr><th>Name</th><th>Email</th><th></th><th>Gender</th><th></th><th>Address</th><th></th><th>Profession</th></tr>";
  // output data of each row
  while($row = $userQuery->fetch_assoc()) {
    echo "<tr><td>".$row["username"]."</td><td>".$row["email"]."</td><td></td><td>".$row["gender"]."</td><td></td><td>".$row["address"]."</td><td></td><td>".$row["profession"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
}