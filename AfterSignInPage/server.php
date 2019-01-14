<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript">

		function yesnoCheck()
		{
		    if (document.getElementById("yes").checked) 
		    {
		        document.getElementById("ifYes").style.visibility = 'visible';
		    }
		    else 
		    {
		        document.getElementById("ifYes").style.visibility = 'hidden';
		    }
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
			border:1px solid #00bfff;
			color:white;
			padding:none;
			text-align:center;
			text-decoration:none;
			display:inline-block;
			font-size:16px;
			border-radius:5px;
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
			</br></br></br>
			<?php
			require("db.php");
				if(isset($_REQUEST["old_product"]) && $_REQUEST["old_product"]!="")
				{

					if($_REQUEST["old_product"]=="tshirt")
					{
						$e_price=100;
					}
					else if($_REQUEST["old_product"]=="mobile phone")
					{
						$e_price=3000;
					}
					date_default_timezone_set('Asia/Dhaka'); 
					$time = date('H:i:s');
					$date = date('d-m-Y');
						$s="insert into old_product(customer_id, name, estimated_price, time,date) values('".$_SESSION["id"]."','".$_REQUEST['old_product']."','".$e_price."','".$time."','".$date."')";
						if(updateSQL($s))
						{?>
							<form align="center" action="AfterSignInPage.php">
							<P style="color:green">Your confirmation is accepted, we will review and contact with you soon. Now go to<b> Dashboard</b></p>
							<button class="oto_button">Dashboard</button>
							</form>
						<?php
						}
						else
						{?>
							<p>Something error</p><?php
						}
				}
				else
				{?>
					<p align="center" style="color:red"> Please select a product</p> <?php

				}
			}
				else
					{
						echo "Unauthorized Login!!";
					}?>
	</body>
</html>