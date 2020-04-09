<?php
session_start();
require_once('config.php');
;

$username = $_POST['username'];
$password = sha1($_POST['password']);


$sql = "SELECT * FROM registerationdata WHERE email = ? AND password = ? LIMIT 1";
$stmtselect = $db->prepare($sql);
$result = $stmtselect->execute([$username,$password]);
//$result = mysqli_query($con, $sql);


if($result){
			// if (mysqli_num_rows($result) > 0) {
   //          while($row = mysqli_fetch_assoc($result)) {
   //             echo "Name: " . $row["name"]. "<br>";
   //          }

			$user = $stmtselect->fetch(PDO::FETCH_ASSOC);
			if($stmtselect->rowCount()>0){
				$_SESSION['userlogin'] =$user;
				$_SESSION['username']=$username;
				$_SESSION['user_type']='user';
				require_once( 'databaseconfig.php');
				$query="SELECT * FROM registerationdata";
				$result=mysqli_query($con, $query);
				$row=mysqli_fetch_assoc($result);
				$_SESSION['firstname']=$row['firstname'];
				$_SESSION['lastname']=$row['lastname'];
				$_SESSION['email']=$row['email'];
				$_SESSION['mobilenumber']=$row['mobilenumber'];
				
				echo '1';
				}

			

					
			else{			

							$password =$_POST['password'];
							$sql = "SELECT * FROM admin WHERE email = ? AND password = ? LIMIT 1";
							$stmtselect = $db->prepare($sql);
							$result = $stmtselect->execute([$username,$password]);
							if($result){
										$user = $stmtselect->fetch(PDO::FETCH_ASSOC);
										if($stmtselect->rowCount()>0)
										{
											$_SESSION['userlogin'] =$user;
											$_SESSION['username']=$username;
											$_SESSION['user_type']='admin';
											echo '2';
										}
										else{
												echo "User not found";
											}

										}
							else{
									echo 'there were error while connecting  Admin Database';
								}
				}
		}
else{
	echo 'there were error while connecting User_Database';
}
?>