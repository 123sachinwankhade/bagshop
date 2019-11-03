<html>
<head>
<title> search</title>
</head>
<body>
<h1>search for data</h1>



<div class="container">
<form action="" method="POST">
<input type="text" name="username" placeholder="enter name">
<input type="submit"name="search" value="username">
</form>
<table>
<tr>
<th>username</th>
<th>email</th>
<th>password</th>
</tr>
<br>
<?php
//$username = $_POST['username'];
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"project");
if(isset($_POST['search']))
{
$username=$_POST['username'];
$query="SELECT * FROM 'students_login' where username='$username'";
$query_run=mysqli_query($connection,$query);
while($row=mysqli_fetch_array($query_run,MYSQLI_BOTH))
{
?>

<tr>
<td><?php echo $row['username']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['password']; ?></td>
</tr>

<?php
}
}
?>
</table>
</div>
</center>
</body>
</html>
