<?php
$con=mysqli_connect("localhost","my_user","my_password","project");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT password FROM students_login ORDER BY username";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%s (%s)\n",$row[0],$row[1]);
    }
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($con);
?> 