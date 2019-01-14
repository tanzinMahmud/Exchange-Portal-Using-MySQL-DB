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
			if(isset($_REQUEST["additional_money"])==false)
			{
			if(isset($_REQUEST['prodName']) && isset($_REQUEST['phone_no']) && isset($_REQUEST['prodBrand']) && isset($_REQUEST['category']) && isset($_FILES['file']) && isset($_REQUEST['description']) &&
			isset($_REQUEST['exName']) && isset($_REQUEST['exBrand']) && isset($_REQUEST['exCategory']) &&
			isset($_REQUEST['area']) && isset($_REQUEST['city']) && isset($_REQUEST['country']) && strlen($_REQUEST["prodName"])>4 && strlen($_REQUEST["prodBrand"])>4 &&
			$_REQUEST["category"]!="Select a category" && (substr($_FILES["file"]["name"], -4)==".jpg" || substr($_FILES["file"]["name"], -4)==".JPG" || substr($_FILES["file"]["name"], -4)==".PNG" || substr($_FILES["file"]["name"], -4)==".png" || substr($_FILES["file"]["name"], -5)==".jpeg" || substr($_FILES["file"]["name"], -5)==".JPEG") && 
			strlen($_REQUEST['description'])>10 && strlen($_REQUEST["exName"])>4 && strlen($_REQUEST["phone_no"])==11 && (substr($_REQUEST["phone_no"],0, 3)=="016" || substr($_REQUEST["phone_no"],0, 3)=="017" || substr($_REQUEST["phone_no"],0, 3)=="015" || substr($_REQUEST["phone_no"],0, 3)=="018" || substr($_REQUEST["phone_no"],0, 3)=="019") && strlen($_REQUEST["exBrand"])>4 && $_REQUEST["exCategory"]!="Select a category" && $_REQUEST["area"]!="Select area")
			{


				$s=$_FILES['file']['tmp_name'];
				$n=$_FILES['file']['name'];

				//$ar=explode("/",$_FILES['file']['type']);
				//echo ($ar[0]);
				//else if(file_exists("uploads/".$n)){
					//echo "Filename exists : ".$n;
					move_uploaded_file($s,"uploads/".$n);
					$location=$_REQUEST["city"].", ".$_REQUEST["country"];
					date_default_timezone_set('Asia/Dhaka'); 
					$time = date('H:i:s');
					$date = date('d-m-Y');
						$s="insert into posted_ad(customer_id, product_name, product_brand, product_category, product_description, product_picture, ex_product_name, ex_product_brand, ex_product_category, additional_money, area, location, phone_no, posted_time, posted_date)
						values('".$_SESSION["id"]."','".$_REQUEST['prodName']."','".$_REQUEST['prodBrand']."','".$_REQUEST['category']."','".$_REQUEST['description']."','uploads/".$n."','".$_REQUEST['exName']."','".$_REQUEST['exBrand']."','".$_REQUEST['exCategory']."','".$_REQUEST['additionalAmount']."','".$_REQUEST['area']."','".$location."','".$_REQUEST['phone_no']."','".$time."','".$date."')";
						if(updateSQL($s))
						{?>
							<form align="center" action="AfterSignInPage.php">
							<P style="color:green">You have successfully posted your ad, Now go to<b> Dashboard</b></p>
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
					<P align="center" style="color:red">Provided information is invalid, try again!</p><?php
				}
		}
		else
		{

			if(isset($_REQUEST['prodName']) && isset($_REQUEST['phone_no']) && isset($_REQUEST['prodBrand']) && isset($_REQUEST['category']) && isset($_FILES['file']) && isset($_REQUEST['description']) &&
			isset($_REQUEST['exName']) && isset($_REQUEST['exBrand']) && isset($_REQUEST['exCategory']) &&
			isset($_REQUEST['area']) && isset($_REQUEST['city']) && isset($_REQUEST['country']) && strlen($_REQUEST["prodName"])>4 && strlen($_REQUEST["prodBrand"])>4 &&
			$_REQUEST["category"]!="Select a category" && (substr($_FILES["file"]["name"], -4)==".jpg" || substr($_FILES["file"]["name"], -4)==".JPG" || substr($_FILES["file"]["name"], -4)==".PNG" || substr($_FILES["file"]["name"], -4)==".png" || substr($_FILES["file"]["name"], -5)==".jpeg" || substr($_FILES["file"]["name"], -5)==".JPEG") && 
			strlen($_REQUEST['description'])>10 && strlen($_REQUEST["exName"])>4 && strlen($_REQUEST["phone_no"])==11 && (substr($_REQUEST["phone_no"],0, 3)=="016" || substr($_REQUEST["phone_no"],0, 3)=="017" || substr($_REQUEST["phone_no"],0, 3)=="015" || substr($_REQUEST["phone_no"],0, 3)=="018" || substr($_REQUEST["phone_no"],0, 3)=="019") && strlen($_REQUEST["exBrand"])>4 && $_REQUEST["exCategory"]!="Select a category" && $_REQUEST["area"]!="Select area" && is_numeric($_REQUEST["additional_money"]))
			{


				$s=$_FILES['file']['tmp_name'];
				$n=$_FILES['file']['name'];

				//$ar=explode("/",$_FILES['file']['type']);
				//echo ($ar[0]);
				//else if(file_exists("uploads/".$n)){
					//echo "Filename exists : ".$n;
					move_uploaded_file($s,"uploads/".$n);
					$location=$_REQUEST["city"].", ".$_REQUEST["country"];
					date_default_timezone_set('Asia/Dhaka'); 
					$time = date('H:i:s');
					$date = date('d-m-Y');
						$s="insert into posted_ad(customer_id, product_name, product_brand, product_category, product_description, product_picture, ex_product_name, ex_product_brand, ex_product_category, additional_money, area, location, phone_no, posted_time, posted_date)
						values('".$_SESSION["id"]."','".$_REQUEST['prodName']."','".$_REQUEST['prodBrand']."','".$_REQUEST['category']."','".$_REQUEST['description']."','uploads/".$n."','".$_REQUEST['exName']."','".$_REQUEST['exBrand']."','".$_REQUEST['exCategory']."','".$_REQUEST['additionalAmount']."','".$_REQUEST['area']."','".$location."','".$_REQUEST['phone_no']."','".$time."','".$date."')";
						if(updateSQL($s))
						{?>
							<form align="center" action="AfterSignInPage.php">
							<P style="color:green">You have successfully posted your ad, Now go to<b> Dashboard</b></p>
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
					<P align="center" style="color:red">Provided information is invalid, try again!</p><?php
				}
			}

		}
				else
					{
						echo "Unauthorized Login!!";
					}?>
	</body>
</html>