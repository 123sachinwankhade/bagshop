<?php
$con=mysqli_connect("localhost","my_user","my_password","passsword");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT password,email FROM Persons ORDER BY username";
$result=mysqli_query($con,$sql);

// Numeric array
$row=mysqli_fetch_array($result,MYSQLI_NUM);
printf ("%s (%s)\n",$row[0],$row[1]);

// Associative array
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
printf ("%s (%s)\n",$row["password"],$row["email"]);

// Free result set
mysqli_free_result($result);

mysqli_close($con);
?> 