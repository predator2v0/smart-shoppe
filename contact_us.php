<?php
	$username = "root";
	$password = "";
	$server = "localhost";
	$db = "shoppe";

	$con = mysqli_connect($server,$username,$password,$db);
	if($con){
		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$comments = $_POST['comments'];

			$insert_query = "insert into contact_us(name,email,comments) values('$name','$email','$comments')";
			$res = mysqli_query($con,$insert_query);

			if ($res) {
			?>
				<script>alert("your request submitted successully");</script>
			<?php
			}
			else {
			?>
				<script>alert("request submission failed"); </script>
			<?php
			}
			}
		}
	else {
		echo "not connected";
	}
?>
