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
		if(isset($_SESSION["admin_flag"]) && $_SESSION["admin_flag"]=="logged"){?>
		<div>
			<ul>
			  <li><a class="home" href="">&emsp; &ensp; &ensp; &ensp; &ensp; &ensp;>> Exchangeportal ADMIN Panel</a></li>
			 
			  
			  
			  
			  <li style="float:right"><a class="nav" href="LogOut.php"><b>↑</b>Log out</a></li><br>
			</ul>
			</div>
			</br>
			</br>
			</br>
			</br>
			<div align="center">
				<h3>Welcome ADMIN,
				<?php echo $_SESSION["admin_name"];?>
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
			<a href="myads.php"><img src="ad.png" height="50" width="80" align="center"></a></br>
			<form action="myads.php">
			<button class="oto_button">All posted ads</button>
			</form>
			</th>
			<th>
			<a href="sell_to_us.php"><img src="sell.png" height="50" width="80" align="center"></a></br>
			<form action="sell_to_us.php">
			<button class="oto_button">All sell to us order</button>
			</form>
			</th>
			</tr>
			<tr>
			<th>
				<br><br>
			<a href="all_cus.php"><img src="cus.png" height="50" width="80" align="center"></a></br>
			<form action="all_cus.php">
			<button class="oto_button">All customers</button>
			</form>
			</th>
					
					
			<th>
				<br><br>
			<a href="setting.php"><img src="set.png" height="50" width="80" align="center"></a></br>
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