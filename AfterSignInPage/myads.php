<!DOCTYPE html>
<html>
	<head>
		<script>
			function check()
			{
				flag=true;
				var s=document.getElementById("sl").value;
				var s_l=document.getElementById("sl").value.length;
				if(s_l<1 || isNaN(s)==true)
				{
					alert("Invalid serial no");
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
				$s="select * from posted_ad where customer_id = ".$_SESSION["id"];

				$jsn=getJSONFromDB($s);
		
				$jd=json_decode($jsn,true);?>
				<b><p align="center">Your all ads:</p></b>
				<form align="center" action="show_my_ad.php" method="post">
				<input type="text" name="se_no" placeholder="Enter serial no to delete your ad" id="sl" style="width:215px; height:25px"><br><br>
						  <button class="oto_button" onclick="return check()">Delete</button></form><br><?php
				foreach($jd as $v){
					?>
					<form align="center" action=""><br>
					<img style="height:130px; width:130px"src="<?php echo $v["product_picture"]?>"><br>
					<b>Serial no: 

					<?php 
						  echo $v["product_id"];?></b></br>Name: <?php
						  echo $v["product_name"];?></b></br>Brand: <?php
						  echo $v["product_brand"];?></br>Want to exchange with: <?php
						  echo $v["ex_product_name"];?></br>Posted time: <?php
						  echo $v["posted_time"];?></br>Posted date: <?php
						  echo $v["posted_date"];
						  ?>
						  
						  <br>
						  
						  
						  <br>
					</form>
					<?php
				}
		}
		else{
			echo "Unauthorized Login!!";
		}?>
	</body>
</html>