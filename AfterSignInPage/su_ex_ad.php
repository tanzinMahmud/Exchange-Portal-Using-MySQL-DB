<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript">

		function showHint() {
			
	
	var s_text=document.getElementById("search_text").value;
	
	var  xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {			
			var res=xmlhttp.responseText;
			var a_ex=res.split(",");
			document.getElementById("name").innerHTML="Name: "+a_ex[0]+"\n"+"Brand: "+a_ex[1]+"\n"+"Exchange with: "+a_ex[2]+"\n"+"Brand: "+a_ex[3]+"\n"+"Additional money: "+a_ex[4]+"\n"+"Area: "+a_ex[5]+"\n"+"Phone no: "+a_ex[6]+"\n"+"Description: "+a_ex[7]+"\n"+"Posted time: "+a_ex[8]+"\n"+"Posted date: "+a_ex[9];

		}
	};
 	var url="server3.php?s_t="+s_text;
	xmlhttp.open("GET", url,true);
	xmlhttp.send();
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
			border-radius: 10%;
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
				
				
				
				$s="select * from posted_ad";

				$jsn=getJSONFromDB($s);
		
				$jd=json_decode($jsn,true);?>
				<b><p align="center">All exchangeable ads: </p></b>
				<form align="center" action="">
				
						  </form><?php
				foreach($jd as $v){
					?>
					<form align="center" action=""><br>
					<img style="height:130px; width:130px" src="<?php echo $v["product_picture"]?>"><br><b>
				 
						</br>Name: 
					<?php 
						 
						  echo $v["product_name"];?></b></br>Brand: <?php
						  echo $v["product_brand"];?></br>Exchange with: <?php
						  echo $v["ex_product_name"];?></br>Brand: <?php echo $v["ex_product_brand"];?></br>

						  Want to give additional money: <?php
						  echo $v["additional_money"]." TK";?><br>

						  Area: <?php
						  echo $v["area"];?><br>

						  Contact no: <?php
						  echo $v["phone_no"];?><br>

						  Description: <?php
						  echo $v["product_description"];?><br>

						  Posted time: <?php
						  echo $v["posted_time"];?>
						  </br>Posted date: <?php
						  echo $v["posted_date"];
						  ?>
						  
						  <br>
						  
						  
						  </p><br></b>
					</form><?php

			}
		}


				else
					{
						echo "Unauthorized Login!!";
					}?>
	</body>
</html>