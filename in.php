
<?php
include 'conn.php';

if(isset($_POST['btn']))
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];

	$sql = "INSERT INTO mouse (firstname, lastname, email)
VALUES ('$fname', '$lname', '$email')";

	mysqli_query($conn,$sql);


}
?>

<html>
<body>
		<h2>Insert Form</h2>
	<form action="" method="post">
		Firstname: <input type="text" name="fname"><br><br>

		Lastname: <input type="text" name="lname"><br><br>

		Email: <input type="text" name="email"><br><br>

		<input type="submit" name="btn">
	</form>
</body>
</html>