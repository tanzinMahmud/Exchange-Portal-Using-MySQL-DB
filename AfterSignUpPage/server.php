<!DOCTYPE html>
<html>
<head>
<style>
body
{
	background:rgb(235, 235, 235);
	margin: 0px;
}
.oto_button{
	background-color:#00bfff;
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
.postad_button{
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
.b_color{
	background-color:#00bfff;
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
	font-size:16px;
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
.nav:hover
{
	color:#A0522D;
}
.nav2:hover
{
	color:#A0522D;
}
.postad_button:hover{
	background-color: #FF8C00;
}
.nav1
{
	font-size:17px;
	font-family: sans-serif;
	color:#A0522D;
}
</style>
</head>
<body>
<div>
<ul>
  <li><a class="home" href="HomePage.php">&emsp; &ensp; &ensp; &ensp; &ensp; &ensp;>> Exchangeportal&emsp; &ensp;</a></li>
  <li style="float:left"><a class="nav" href="/ProjectV1.3/AllAddsPage/All_adds.php">All exchangeable ads &ensp; &emsp; &ensp;&emsp; &ensp; &emsp; &ensp;&emsp; &ensp; &emsp; &ensp;&emsp; &ensp; &emsp; &ensp; &emsp; &ensp;</a></li>
 
  <li style="float:left"><a class="nav1" href="/ProjectV1.3/SignInPage/login.php">👤Log in&ensp; &ensp;</a></li>
  <li style="float:left"></br><form align="center" action="/ProjectV1.3/SignInPageAnother/login.php" method="post"><button class="postad_button">Post your ad</button></form></li>
</ul>
</div>
</br></br></br><br><br><br><br>
<table align="center" style="border:none">
<form action="/ProjectV1.3/SignInPage/login.php" method="post" enctype="multipart/form-data" name="s_form">
<tr>
<td align="center">
<?php
require("db.php");
//$address=$_REQUEST['area'].", ".$_REQUEST['city'].", ".$_REQUEST['country'];
//$s=$_FILES['file']['tmp_name'];
//$n=$_FILES['file']['name'];
if(isset($_REQUEST['name']) && isset($_REQUEST['email']) && isset($_REQUEST['pass']) && isset($_REQUEST['conPass']) && strlen($_REQUEST["name"])>2 && strlen($_REQUEST["email"])>9 && strlen($_REQUEST["pass"])>7 && strpos($_REQUEST["email"],"@")==true && strpos($_REQUEST["email"],".com")==true && strpos($_REQUEST["email"],"@")<strpos($_REQUEST["email"],".com") && strpos($_REQUEST["pass"],"*")==false && strpos($_REQUEST["pass"],".")==false && $_REQUEST["pass"]==$_REQUEST["conPass"] &&substr($_REQUEST["email"], -4)==".com")
{
	$e=array();
	$sq="select * from customer where email = '".$_REQUEST["email"]."'";
	$data=getDataFromDB($sq);
	foreach ($data as $v) {
		if($v["email"]==$_REQUEST["email"])
		{
			$e=$v;
		}
	}
		if(isset($e["email"]) && $e["email"]==$_REQUEST["email"])
		{?>
			<P style="color:red">This email is already registered, you can <b>log in</b> with this email</p>
			<button class="oto_button">Log in</button><?php
		}
		else
		{
			$s="insert into customer(first_name, last_name, email, password, forgot_pass_code, phone_number, verification_code, balance, address, profile_picture) values('".$_REQUEST['name']."',null,'".$_REQUEST['email']."','".md5($_REQUEST['pass'])."',null,null,null,'0',null,null)";
			if(updateSQL($s))
			{?>
				<P style="color:green">Sign Up Successful, Now you can <b>Log in</b></p>
				<button class="oto_button">Log in</button><?php
			}
			else
			{?>
				<p>Something error</p><?php
			}
		}
	}
	else
	{?>
		<P style="color:red">Invalid name or email or password, try again!</p><?php
	}
?>
</td>
</tr>
</form>
</table>
</body>
</html>