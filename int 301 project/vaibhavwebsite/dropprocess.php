<?php
if(isset($_POST)){
			include 'config.php';
			$id 		=$_POST['id'];
			$name 		=$_POST['name'];

			
			$query="DELETE FROM $name WHERE id = $id";
			$stmtselect = $db->prepare($query);
			$result = $stmtselect->execute();


			if ($result){
				
				echo "1";

			}

			else{
				echo "Not Deleted";
			}

	}
		else{
			echo "No data";
		}
?>