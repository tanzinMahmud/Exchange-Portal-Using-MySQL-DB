<!DOCTYPE html>
<html>
	<head>
		<style>
		body
		{
			background:rgb(235, 235, 235);
			margin: 0px;
		}
		.b_color{
			background-color:#00bfff;
		}
		.oto_button{
			background-color:#00bfff;
			border:none;
			color:white;
			padding:none;
			text-align:center;
			text-decoration:none;
			display:inline-block;
			font-size:16px;
			margin:none;
			cursor:pointer;
			height:30px;
			width:150px;
		}
		
		.oto_button_3{
			background-color: orange;
			border:1px solid #00bfff;
			border-radius:5px;
			color:white;
			padding:none;
			text-align:center;
			text-decoration:none;
			display:inline-block;
			font-size:16px;
			margin:none;
			cursor:pointer;
		}
		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #00bfff;
		}
		li {
			float: left;
			border-right:none;
		}

		li:last-child {
			border-right: none;
		}

		li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		li a:hover:not(.active) {
			background-color: #00bfff;
		}
		.nav
		{
			font-size:17px;
			font-family: sans-serif;
		}
		.nav2
		{
			font-size:22px;
			font-family: sans-serif;
		}
		.home {
			background-color: #00bfff;
			font-family: cursive;
			font-size:22px;
		}
		div
		{
			position: fixed;
			width: 100%;
		}
		img 
		{
			border-radius: 50%;
		}
		.postad_button
		{
			background-color: orange;
			border:1px solid #00bfff;
			border-radius:5px;
			color:white;
			padding:none;
			text-align:center;
			text-decoration:none;
			display:inline-block;
			font-size:16px;
			margin:none;
			cursor:pointer;
			height:30px;
			width:150px;
		}
		.nav:hover
{
	color:#A0522D;
}
.nav2:hover
{
	color:#A0522D;
}
		.postad_button:hover
		{
			background-color: #FF8C00;
		}
		a {
text-decoration: none;
}
		</style>
	</head>
	<body>
		<?php
		session_start();
		if(isset($_SESSION["admin_flag"]) && $_SESSION["admin_flag"]=="logged"){?>
		<div>
			<ul>
			  <li><a class="home" href="AfterSignInPage.php">&emsp; &ensp; &ensp; &ensp; &ensp; &ensp;>> Exchangeportal ADMIN Panel&emsp; &ensp; &ensp; &emsp; &ensp;&emsp;</a></li>
			 
			  
			  
			  
			  <li style="float:right"><a class="nav" href="LogOut.php"><b>↑</b>Log out</a></li><br>&ensp; &ensp;
			  <?php echo " Welcome ADMIN, ".$_SESSION["admin_name"];?></a></li>
			</ul>
			</div>
			</br>
			</br>
			</br>
			</br><?php
				require("db.php");
				if(isset($_REQUEST["new_pass"]) && isset($_REQUEST["con_new_pass"]) && strlen($_REQUEST["new_pass"])>7 &&strpos($_REQUEST["new_pass"],"*")==false && strpos($_REQUEST["new_pass"],".")==false && $_REQUEST["new_pass"]==$_REQUEST["con_new_pass"]){

					$password = md5($_REQUEST["new_pass"]);
					$id=$_SESSION["admin_id"];
					
					$sq="UPDATE admin SET password = '$password' WHERE admin_id = '$id'";
					
					$a=updateSQL($sq);
					
					
			
					?>

					<p align="center">Update successful. Go to Admin Panel</p><br>
					<form align="center" action="after_sign_in_page.php" method="post">

					<button class="oto_button" onclick="return check()">ADMIN Panel</button>
					</form><?php
		}
		else{
		echo "Invalid input";
	}

	}
		else{
			echo "Unauthorized Login!!";
		}?>
	</body>
</html>