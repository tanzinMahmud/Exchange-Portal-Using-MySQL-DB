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
		}
		.oto_button:hover{
			background-color:green;
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
			 Dashboard</li>
			</ul>
			</div>
			</br>
			</br>
			</br>
			</br>
			<div align="center">
				<h3>Welcome, 
				<?php echo $_SESSION["name"];?>
			</h3>
			</div>
			</br>

			<br>
			</br>
			</br>
			</br>
			</br>
			<table align="center" style="border:none">
			<tr>
			<th>
			<a href="OldToNew.php"><img src="oto_icon.png" height="50" width="80" align="center"></a></br>
			<form action="OldToNew.php">
			<button class="oto_button">Sell old to us</button>
			</form>
			</th>
			<th>
			<a href="su_ex_ad.php"><img src="otn_icon.jpg" height="50" width="80" align="center"></a></br>
			<form action="su_ex_ad.php">
			<button class="oto_button">All exchangeable ads</button>
			</form>
			</th>
			</tr>
			<tr>
			<th>
				<br><br>
			<a href="myads.php"><img src="my_ad.png" height="50" width="80" align="center"></a></br>
			<form action="myads.php">
			<button class="oto_button">My ads</button>
			</form>
			</th>
					
					
			<th>
				<br><br>
			<a href="setting.php"><img src="st.png" height="50" width="80" align="center"></a></br>
			<form action="setting.php">
			<button class="oto_button">Settings</button>
			</form>
			</th>
		</tr>
			</table>
		<?php
		}
		else{
			echo "Unauthorized Login!!";
		}?>
	</body>
</html>