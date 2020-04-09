<?php
require_once( 'databaseconfig.php');

if(isset($_REQUEST['update'])){

	if(($_REQUEST['fname']=="" )||($_REQUEST['lname']=="")||($_REQUEST['mobile']=="")){
		$umsg ='<div class="alert-warning col-sm-6 ml-8" role="alert">Fill the data Properly ';

	}
	else{
		$updatefName =$_REQUEST['fname'];
		$updatelName =$_REQUEST['lname'];
		$updatemobile =$_REQUEST['mobile'];
		$currentuser = $_SESSION['username'];

		$query= "UPDATE registerationdata SET firstname = '$updatefName' ,lastname = '$updatelName' , mobilenumber = '$updatemobile' WHERE email = '$currentuser' ";
		if (mysqli_query($con,$query)){

				$_SESSION["firstname"]=$updatefName;
				$_SESSION["lastname"]=$updatelName;
				$_SESSION["mobilenumber"]=$updatemobile;
				$umsg = '<div class="alert alert-success col-sm-6 ml-8 " role="alert">Updated Successfuly </div>';
			}else
			{
				$umsg = '<div class="alert alert-danger col-sm-6 ml-8 " role="alert">Unable to Update :( </div>';
			}


	}
}

?>