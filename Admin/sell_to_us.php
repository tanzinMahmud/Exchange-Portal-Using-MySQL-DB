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
		if(isset($_SESSION["admin_flag"]) && $_SESSION["admin_flag"]=="logged"){?>
		<div>
			<ul>
			  <li><a class="home" href="after_sign_in_page.php">&emsp; &ensp; &ensp; &ensp; &ensp; &ensp;>> Exchangeportal ADMIN Panel&emsp; &ensp; &ensp; &emsp; &ensp;&emsp;</a></li>
			 
			  
			  
			 
			  <li style="float:right"><a class="nav" href="LogOut.php"><b>↑</b>Log out</a></li><br>&ensp; &ensp;
			  <?php echo " Welcome ADMIN, ".$_SESSION["admin_name"];?></a></li>
			</ul>
			</div>
			</br>
			</br>
			</br>
			</br><?php
			require("db.php");
				$s="select * from old_product";

				$jsn=getJSONFromDB($s);
		
				$jd=json_decode($jsn,true);?>
				<b><p align="center">All sell to us order:</p></b>
				<form align="center" action="after_delete.php" method="post">
				<input type="text" name="se_no" placeholder="Enter serial no to delete confirmation" id="sl" style="width:230px; height:25px"><br><br>
						  <button class="oto_button" onclick="return check()">Delete</button></form><br><?php
				foreach($jd as $v){
					?>
					<form align="center" action=""><br>
					
					<b>Order no: 

					<?php 
						  echo $v["product_id"];?></b></br>Name: <?php
						  echo $v["name"];?></b></br>Estimated price: <?php
						  echo $v["estimated_price"];?></br>Time: <?php
						  echo $v["time"];?></br>Date: <?php
						  echo $v["date"];?></br>Ordered by: <?php
						  echo $v["customer_id"];
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