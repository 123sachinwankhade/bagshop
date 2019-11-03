<?php


function register(){

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$description = $_POST['description'];
$email = $_POST['ename'];
$contact = $_POST['cname'];
$choice = $_POST['radio'];

$conn = new mysqli("localhost", "root", "", "project");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO feed (fname, lname, description, email, contact, choice) VALUES ('$fname', '$lname', '$description', '$email', $contact, '$choice')";



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?> 


<!DOCTYPE html>
<html>
<head>
<title>fform</title>
    <script language="javascript">
        function feedb(){
        if(!isNaN((document.f1.fname.value)))
            {
                alert("fill details");
            }
             if(!isNaN((document.f1.lname.value)))
            {
                alert("we will call you with in 24 hrs");
            }
        }
    </script>

    <style type="text/css">
.fossil {   font-style: italic;
    font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
    text-align: center;
    color: black;
    position: absolute;
    left: 40%;
    top: 20%;
}

</style>

</head>
    <body background="lo.jpg">
        
        <form class="fossil" name="f1" method="post">
            First Name:&nbsp;
            <input type="text" name="fname" required>*<br><br>
            Last Name:&nbsp;
            <input type="text" name="lname" required>*<br><br>
            Description:&nbsp;
            <Textarea rows="5" name="description" cols="30" placeholder="Enter your description here..." ></Textarea>*<br><br>
            Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="ename" required>*<br><br>
            Contact:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="cname" maxlength="10" required>*<br><br>
            Choice:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Product<input type="radio" value="P" name="radio" required>&nbsp;&nbsp;&nbsp;
            Staff<input type="radio" value="S" name="radio" required><br><br>
            <input type="submit" name="submit" value="submit" onclick="feedb()">&nbsp;&nbsp;&nbsp;
            <input type="reset" value="Reset" name="rbutton">
            <h3><a href="index.php" style="text-decoration: none">Back to Home</a></h3>
        </form>

         
<?php 

    if(isset($_POST['submit']) && $_POST['submit']=="submit")
        register();
        
?>

    </body>
</html>