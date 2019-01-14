<?php
    
	
	session_start();
	$_SESSION["flag"]="";
	
	$conn = mysqli_connect("localhost", "root","","exchange_portal");
	
	

		
		$email=$_REQUEST['userNameOrEmail'];
		$password = md5($_REQUEST['pass']);

			
			if($sql="select * from admin where email='$email' and password='$password'"){
			//$query=mysqli_query($conn, $sql);
			
			$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
			$rows = mysqli_num_rows($result);
			
			$row_data = mysqli_fetch_assoc($result);
			if($rows==1){

				$_SESSION["admin_flag"]="logged";
				$_SESSION["admin_name"]=$row_data["first_name"];
				$_SESSION["admin_id"]=$row_data["admin_id"];
				
				header("Location:after_sign_in_page.php");
			}
			else{
			echo "I can't recognize you";
			header("Location:Home.php?error=Incorrect Username or Password!!");
		    }
	
	}
		
?>