<html>
<head>
<title>
</title>
<style>
body{
backgroung-color:grey;
}
table,th,td{
border: 2px solid black;
width:1100px;
background-color:lightgreen;
}
.btn{
width:10%;
height:5%
font-size:22px;
padding:0px;
</style>
</head>
<body>
<center>
<h1>searrch data</h1>
<h2>retrive data</h2>
<div class="container">
<form action="" method="POST">
<input type="text" name="id" placeholder="enter"/>
<input type="submit" name="search" class="btn" value="search">
</form>
<tr>
<th> username</th>
<th> password</th>
<th> email</th>
</tr> <br>
<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'project');
if(isset($_POST['search']))
{
$username=$_POST['username'];
$query="SELECT * FROM 'students_login' where username='$username'";
$query_run=mysqli_query($connection,$query);
while($row = mysqli_fetch_array($query_run))
{
?>
<tr>
<td><?php echo $row['username']; ?></td>
<td><?php echo $row['password']; ?></td>
<td><?php echo $row['email']; ?></td>
</tr>
<?php
}
}
?>
</table>
</center>
</div>
</body>
</html>