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
</style>
</head>
<body>
<div>
<ul>
  <li><a class="home" href="/ProjectV1.3/HomePage/HomePage.php">&emsp; &ensp; &ensp; &ensp; &ensp; &ensp;>> Exchangeportal&emsp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;</a></li>
  <li style="float:right"><a class="nav" href="/ProjectV1.3/AboutPage/AboutPage.php">✐About</a></li>
</ul>
</div>
</br>
</br>
</br>
</br>
</br>
<?php
	$file=fopen('SignUpInfo.txt','a') or die("Unable to open file!");
	if(strlen($_POST['email'])>0 && strpos($_POST['email'],"@")==true && strpos($_POST['email'],".com")==true &&
		strpos($_POST['email'],".com")>strpos($_POST['email'],"@") && strpos($_POST['email'],".")>1)
	{
		fwrite($file,$_POST['email']);
	}
	else
	{
		?><p align="center">Invalid email!</p><?php
	}
	if(strlen($_POST['pass'])>5 && strlen($_POST['pass'])<17 &&
		strpos($_POST['pass'],"-")==false && strpos($_POST['pass'],"*")==false && strpos($_POST['pass'],"?")==false &&
		strpos($_POST['pass'],".")==false && $_POST['pass']==$_POST['conPass'])
	{
		fwrite($file," - ".md5($_POST['pass']));
		fwrite($file," - ".md5($_POST['conPass']));
	}
	else
	{
		?><p align="center">Password must be between 6-16 characters, there should have no special character in password,
			password and confirm password must be same!</p><?php
	}
	if(strlen($_POST['fName'])>0)
	{
		fwrite($file," - ".ucfirst($_POST['fName']));
	}
	else
	{
		?><p align="center">First name field can not be empty!</p><?php	
	}
	if(strlen($_POST['lName'])>0)
	{
		fwrite($file," ".ucfirst($_POST['lName']));
	}
	else
	{
		?><p align="center">Last name field can not be empty!</p><?php
	}
	if(is_numeric($_POST['phoneNo'])==true && strlen($_POST['phoneNo'])==11 && (substr($_POST['phoneNo'],0,3)=="017" ||
		substr($_POST['phoneNo'],0,3)=="016" || substr($_POST['phoneNo'],0,3)=="018" || substr($_POST['phoneNo'],0,3)=="019" ||
			substr($_POST['phoneNo'],0,3)=="015"))
			{
				fwrite($file," - ".$_POST['phoneNo']);
			}
	else
	{
		?><p align="center">Invalid Phone no.!</p><?php
	}
	if($_POST['area']=="Select an area")
	{
		?><p align="center">Please select an area!</p><?php
	}
	else
	{
		fwrite($file," - ".$_POST['area']);
	}
	fwrite($file," - ".$_POST['city']);
	fwrite($file," - ".$_POST['country']);
	if(strlen($_POST['file'])>0 && (substr($_POST['file'],-4)==".jpg" || substr($_POST['file'],-5)==".jpeg" || substr($_POST['file'],-4)==".png"))
	{
		fwrite($file," - ".$_POST['file']);
	}
	else
	{
		?><p align="center">Please upload a valid image!</p><?php
	}
	fwrite($file,"\r\n");
	fclose($file);
?>
<form align="center" action="ShowData.php">
<button class="oto_button">Show data</button>
</form>
<!--<div align="center" style="color:green">
CONGRATULATIONS!</br>You have created your account Succesfully!
</br>
<h4>Now, You can login</h4>
</div>
</br>
</br>
</br>
</br>
</br>
<form align="center" action="/ProjectV1.3/SignInPage/SignInPage.php">
<button class="oto_button">Log in</button>
</form>-->
</body>
</html>