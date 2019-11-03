<?php


function register(){

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];



$conn = new mysqli("localhost", "root", "", "project");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO students_login (username, email, password) VALUES ('$username', '$email', '$password')";

$fquery = $conn->query($sql);


if ($fquery == TRUE) {

    echo "New record created successfully";
    header("Location: login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}




$conn->close();
}
?>

<!doctype html>
<html>

<head>
  <title>Registration Form</title>
<meta charset="windows-1252">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
  
<style type="text/css">
#pass{padding:10px;}
.fossil {   font-style: italic;
    font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
    text-align: center;
    color: ;
    position: absolute;
    left: 40%;
    top: 20%;
}
</style>
<script>
function showPass()
{
var pass=document.getElementById('pass');
if(document.getElementById('check').checked)
{
pass.setAttribute('type','text');
}
else{
pass.setAttribute('type','password');
}
}
</script>
</head>
<body background="air.jpg"> 
  
	
  <form class="fossil"  method="post" action="">

    <div class="header">
    <h2>Register</h2>
    </div>

  	<div class="input-group">
  	  <label>Username</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	  <input type="text" name="username" required><br><br>
  	</div>
  	<div class="input-group">
  	  <label>Email</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	  <input type="email" name="email" required><br><br>
  	</div>
  	<div class="input-group">
  	  <label>Password</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	  <input type="password" name="password" id="pass"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and 
lowercase letter, and at least 8 or more characters" required><br><br>
<input type="checkbox"id="check" onclick="showPass();"/ >Show Password<br><br>
	</div>
  	
  	<div class="input-group">
  	  <button type="submit" name="submit" value="submit">Register</button>''
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
  <?php 

    if(isset($_POST['submit']) && $_POST['submit']=="submit")
        register();
  ?>
</body>
</html>