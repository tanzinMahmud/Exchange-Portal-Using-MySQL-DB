<?php
	session_start();
	$_SESSION["flag"]="";
	
	$conn = mysqli_connect("localhost", "root","","exchange_portal");
	
	if (isset($_REQUEST['submitsignin'])){
		
		$email=$_REQUEST['userNameOrEmail'];
		$password = md5($_REQUEST['pass']);

			
		$sql="select * from customer where email='$email' and password='$password'";
			//$query=mysqli_query($conn, $sql);
			
			$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
			$rows = mysqli_num_rows($result);
			
			$row_data = mysqli_fetch_assoc($result);
			if($rows==1){
				$_SESSION["flag"]="logged";
				$_SESSION["name"]=$row_data["first_name"];
				$_SESSION["id"]=$row_data["customer_id"];

				
				header("Location:/ProjectV1.3/AfterSignInPage/AfterSignInPage.php");
			}
			
			else if($sql="select * from admin where email='$email' and password='$password'"){
			//$query=mysqli_query($conn, $sql);
			
			$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
			$rows = mysqli_num_rows($result);
			
			$row_data = mysqli_fetch_assoc($result);
			if($rows==1){
				$_SESSION["admin_flag"]="logged";
				$_SESSION["admin_name"]=$row_data["first_name"];
				$_SESSION["admin_id"]=$row_data["admin_id"];

				
				header("Location:/ProjectV1.3/Admin/after_sign_in_page.php");
			}
			else{
			echo "I can't recognize you";
			header("Location:/ProjectV1.3/SignInPage/login.php?error=Incorrect Username or Password!!");
		    }
		}
	
}
	
?>