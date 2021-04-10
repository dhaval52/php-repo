<?php
include 'conn.php';

if(isset($_POST['btn']))
{
	
	$name = $_POST['name'];	
	$email = $_POST['email'];
	$gender = $_POST['radio'];
	$education = $_POST['check'];
	$fname = $_FILES['name'] ['name'];
	$tmpname = $_FILES['name'] ['tmp_name'];
	$filename = "student/".$fname;
	move_uploaded_file($tmpname, $filename);

	$collage = $_POST['select'];

	$sql =  "INSERT INTO word(name,email,gender,education,file,collage) VALUES ('$name','$email','$gender','$education','$filename','$collage')";
	
	echo $sql;



	$query = mysqli_query($conn,$sql)or die("query unsuccess");


}
?>


<html>
<body>
	<h2>Insert Form</h2>
	<form action="" method="post" enctype="multipart/form_data">
		Name: <input type="text" name="name"><br><br>

		Email: <input type="text" name="email"><br><br>


		Gender:
		Male<input type="radio" name="radio">
		Female<input type="radio" name="radio"><br><br>

		Education: 
			BCA<input type="checkbox" name="check">
			MCA<input type="checkbox" name="check">
			OTHER<input type="checkbox" name="check"><br><br>
	



		File: <input type="file" name="name"><br><br>

		Collage: <select name="select">
				<option>Other</option>
				<option>SV patel Collage</option>
				<option>Baraphivala Collage</option>
				<option>DDB & KNG Collage</option>
			</select><br><br>

			<input type="submit" name="btn">
	</form>
</body>
</html>