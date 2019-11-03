<?php


function registration(){
$username = $_POST['username'];
$password = $_POST['password'];

$conn = new mysqli("localhost", "root", "", "project");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    $rs = $conn->query("select count(username) from students_login where username='$username' and password='$password'");
    $row = $rs->fetch_row();
    $n = $row[0];
    $rs->free();
    $conn->close();

    if($n > 0){
      //echo "Accessed";
      header("Location: feedbackform.php");
    }else{
      echo "<b>Authentication failed!</b>";
    }
 }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration </title>
 
    <style>
      
      #mainHeading{
        color:#340926;
        padding-top:28px;
        letter-spacing:4px;
        font-family:Montserrat, sans-serif;
        font-weight:bolder;
      }
      #loginMain{
        color:#340926;
        letter-spacing:15px;
        font-weight:bolder;
        font-size:20;
        margin-top:50px;
      }
      #loginButton{
        background-color:#340926;
        color:white;
        border:none;
        width:100px;
        margin-top:15px;
      }
      #loginButton:hover{
        color:#CBE432;
      }
      input[type="email"], input[type="password"]{
        border:none;
                background:#f1f1f1;
                padding:15px;
      }
      #signUp{
        color:#AE0D7A;
      }

.fossil {   font-style: italic;
    font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
    text-align: center;
    color: black;
    position: absolute;
    left: 40%;
    top: 20%;
}
      #footerID{
        background-color:#340926;
        padding-bottom:5px;
        color:white;
        opacity:0.9;
      }
    </style>
  </head>
<body background="log.jpg">
  
	 
  <form class="fossil" method="post" >
  	
    <div class="header">
    <h2>Login</h2>
    </div>

  	<div class="input-group">
  		<label>Username</label>&nbsp;
  		<input type="text" name="username" required ><br><br>
  	</div>
  	<div class="input-group">
  		<label>Password</label>&nbsp;&nbsp;
  		<input type="password" name="password" required><br><br>
  	</div>
  	<div class="input-group">
  		<button type="submit" name="submit" value="submit">Login</button>
  	</div>
  	<p>
  		Forgot Password? <a href="register.php">Sign up</a>
  	</p>
     <h3><a href="index.php" style="text-decoration: none">Back to Home</a></h3>
  </form>

  <?php 

    if(isset($_POST['submit']) && $_POST['submit']=="submit")
        registration();
  ?>

</body>
</html>