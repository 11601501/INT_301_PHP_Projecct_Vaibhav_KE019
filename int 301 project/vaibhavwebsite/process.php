<?php
if(isset($_POST)){
			include 'databaseconfig.php';
			$firstname 		=$_POST['firstname'];
			$lastname 		=$_POST['lastname'];
			$email 			=$_POST['email'];
			$mobile 		=$_POST['mobile'];
			$password 		=sha1($_POST['password']);


			$query = "insert into registerationdata (firstname,lastname,email,mobilenumber,password)
			values ('$firstname ','$lastname','$email','$mobile','$password')";

			if (mysqli_query($con,$query)){
				echo "1";

			}else
			{
				echo "Not saved :( ";
			}

		//	header('location:login.php');

			
		}
		else{
			echo "No data";
		}
?>