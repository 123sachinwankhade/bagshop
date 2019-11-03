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

$sql = "INSERT INTO feedback (fname, lname, description, email, contact, choice) VALUES ('$fname', '$lname', '$description', '$email', $contact, '$choice')";



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
                alert("Payment Successful");
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
    <body background="p1.jpg">
        
        <form class="fossil" name="f1" method="post">
	<center><h1>Payment</h1></center>
            <b>First Name</b>:&nbsp;
            <input type="text" name="fname" required>*<br><br>
            <b>Contact No</b>:&nbsp;
            <input type="text" name="lname" maxlength="10"required>*<br><br><br>
            <b>Address</b>:&nbsp;
            <Textarea rows="5" name="description" cols="30" placeholder="Enter your Address here..." ></Textarea>*<br><br>
            <b>Card no</b>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" maxlength="16"name="ename" required>*<br><br>
            <b>CVV</b>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="cname" maxlength="3" required>*<br><br>
            <b>Choice</b>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <b>Debit</b><input type="radio" value="D" name="radio" required>&nbsp;&nbsp;&nbsp;
            <b>Credit</b><input type="radio" value="C" name="radio" required><br><br>
		<label for="expmonth"><b>Exp Month</b></label>
            <b>Months</b>:<select name="expmonth" size="1" id="Expmonth">
			<option>January</option>
			<option>Februray</option>
			<option>March</option>
			<option>April</option>
			<option>May</option>
			<option>June</option>
			<option>July</option>
			<option>August</option>
			<option>September</option>
			<option>October</option>
			<option>November</option>
			<option>December</option>
			</select>
			<br><br><br>
			
           <div class="row">
              <div class="col-50">
                <label for="expyear"><b>Exp Year</b></label>
                <input type="text" id="expyear" name="expyear" required name=expyear maxlength="4">
              </div><br>
		<b>Amount</b>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="cname"required>
<br><br>
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