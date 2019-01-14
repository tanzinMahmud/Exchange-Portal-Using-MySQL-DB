<!DOCTYPE html>
<html>
<head>
<style>
body
{
	margin: 0px;
}
.b_color{
	background-color:#00bfff;
}
.oto_button{
	background-color: #00bfff;
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
	width:215px;
	height:25px
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
    padding: 16px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #00bfff;
}

.home {
    background-color: #00bfff;
	font-family: cursive;
	font-size:22px;
}
.nav
{
	font-size:16px;
	font-family: sans-serif;
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
</style>
</head>
<body>
<?php
		session_start();
		if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="logged"){?>
<div>
<ul>
  <li><a class="home" href="/ProjectV1.3/AfterSignInPage/AfterSignInPage.php">&emsp; &ensp; &ensp; &ensp; &ensp; &ensp;>> Exchangeportal&emsp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;</a></li>
  <li style="float:right"><a class="nav" href="/ProjectV1.3/AfterSignInPage/LogOut.php"><b>↑</b>Log out</a></li>
  <li style="float:right"><a class="nav" href="/ProjectV1.3/UpdateProfile/UpdateProfile.php"><img style="width:27px" src="/ProjectV1.3/AfterSignUpPage/<?php echo $_SESSION["pic"];?>"><?php echo " ".$_SESSION["name"]; echo " | Balance: ".$_SESSION["balance"]."TK";?></a></li>

</ul>
</div>
</br>
</br>
</br>
</br>
</br>
<?php
	$file=fopen('PostAdInfo.txt','a') or die("Unable to open file!");
	if(strlen($_POST['prodName'])>1)
	{
		fwrite($file,ucfirst($_POST['prodName']));
	}
	else
	{
		?><p align="center">Product name field can not be empty!</p><?php	
	}
	if(is_numeric($_POST['prodPrice'])==true && strlen($_POST['prodPrice'])>2)
	{
		fwrite($file," - ".$_POST['prodPrice']."Tk");
	}
	else
	{
		?><p align="center">Invalid price!</p><?php
	}
	if(strlen($_POST['description'])>0)
	{
		fwrite($file," - ".$_POST['description']);
	}
	else
	{
		?><p align="center">Description field can not be empty!</p><?php	
	}
	if(strlen($_POST['file'])>0 && (substr($_POST['file'],-4)==".jpg" || substr($_POST['file'],-5)==".jpeg" || substr($_POST['file'],-4)==".png"))
	{
		fwrite($file," - ".$_POST['file']);
	}
	else
	{
		?><p align="center">Please upload a valid image!</p><?php
	}
	if($_POST['category']=="Select a category")
	{
		?><p align="center">Please select a category!</p><?php
	}
	else
	{
		fwrite($file," - ".$_POST['category']);
	}
	fwrite($file,"\r\n");
	fclose($file);?>
	<form align="center" action="ShowData.php">
		<button class="oto_button">Show data</button>
		</form>
<!--<div align="center" style="color:green">
CONGRATULATIONS!</br>You have posted your ad Succesfully!
</div>
</br>
</br>
</br>
</br>
</br>-->
<?php
		}
		else{
			echo "Unauthorized Login!!";
		}?>
</body>
</html>