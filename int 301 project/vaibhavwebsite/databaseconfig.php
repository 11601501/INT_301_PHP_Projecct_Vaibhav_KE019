<?php 
$con =mysqli_connect('localhost','root');
	if($con){
		//echo "Connection successfull";
	}
	else{
		echo "No connection";
	}
	mysqli_select_db($con,'tranquiluserdata');

	?>