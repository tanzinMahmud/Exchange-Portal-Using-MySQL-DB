<!DOCTYPE html>
<html>
	<head>
		<script>
			function check()
		{
			
			
			document.getElementById("n_p_m").innerHTML="";
			document.getElementById("n_p_c_m").innerHTML="";
			var flag=true;
			
			
			
			var pass=document.getElementById("new_pass").value;
			var pass_l=document.getElementById("new_pass").value.length;
			
			var con_pass=document.getElementById("con_new_pass").value;
			
			if(pass_l<8 || pass.indexOf(".")!=-1 || pass.indexOf("*")!=-1)
			{
				document.getElementById("n_p_m").innerHTML=" Invlaid new password";
				document.getElementById("n_p_m").style.color = "red";
				flag=false;
			}
			else if(pass!=con_pass)
			{
				document.getElementById("n_p_c_m").innerHTML=" Password and confirm password must be same";
				document.getElementById("n_p_c_m").style.color = "red";
				flag=false;
			}
			return flag;
		}

</script>
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
		if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="logged"){?>
		<div>
			<ul>
			  <li><a class="home" href="AfterSignInPage.php">&emsp; &ensp; &ensp; &ensp; &ensp; &ensp;>> Exchangeportal&emsp; &ensp; &ensp; &emsp; &ensp;&emsp; &ensp; &emsp; &ensp;&emsp; &ensp; &emsp;&ensp; &emsp; &ensp;&emsp; &ensp; &emsp; &ensp;&emsp; &ensp; &emsp;</a></li>
			 
			  
			  
			  <li style="float:left"></br><form align="center" action="postAdPage.php" method="post"><button class="postad_button">Post your ad</button></form></li>
			  <li style="float:right"><a class="nav" href="LogOut.php"><b>↑</b>Log out</a></li><br>&ensp; &ensp;
			  <?php echo " Welcome, ".$_SESSION["name"];?></a></li>
			</ul>
			</div>
			</br>
			</br>
			</br>
			</br><?php
			require("db.php");
				$s="select * from customer where customer_id = ".$_SESSION["id"];
				
				$jsn=getJSONFromDB($s);
		
				$jd=json_decode($jsn,true);?>
				<b><p align="center">Settings
					<br><br>Change details:</p></b>
				<br><?php
				foreach($jd as $v){
					?>
					<form align="center" action="update.php" method="post">
						Email: <?php echo $v["email"]?><br><br>
					Name: <?php echo $v["first_name"]?><br><br>
						Change password:<br><br>
					
				
					<input type="password" id="new_pass" name="new_pass" placeholder="New password" style="width:215px; height:25px" value="" onkeyup="check()"><span id="n_p_m"></span><br><br>
					<input type="password" id="con_new_pass" name="con_new_pass" placeholder="Confirm new password" style="width:215px; height:25px" value="" onkeyup="check()"><span id="n_p_c_m"></span><br><br>
						  <button class="oto_button" onclick="return check()">Update</button></form>
						  
						  <br>
						  
						  
						  <br>
					<?php
				}
		}
		else{
			echo "Unauthorized Login!!";
		}?>
	</body>
</html>