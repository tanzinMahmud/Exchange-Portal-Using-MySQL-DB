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
.oto_button_2{
	background-color:orange;
	border:1px solid orange;
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
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #00bfff;
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
<?php
session_start();
if(isset($_GET["error"])){
	echo $_GET["error"];
}
?>
<div>
<ul>
  <li><a class="home" href="/ProjectV1.3/HomePage/HomePage.php">&emsp; &ensp; &ensp; &ensp; &ensp; &ensp;>> Exchangeportal&emsp; &ensp;</a></li>
  <li style="float:left"><a class="nav" href="/ProjectV1.3/AllAddsPage/All_adds.php">All exchangeable ads &ensp; &emsp; &ensp;&emsp; &ensp; &emsp; &ensp;&emsp; &ensp; &emsp; &ensp;&emsp; &ensp; &emsp; &ensp; &emsp; &ensp;</a></li>

  <li style="float:left"><a class="nav1" href="/ProjectV1.3/SignInPageAnother/SignInPage.php">👤Log in&ensp; &ensp;</a></li>
  <li style="float:left"></br><form align="center" action="/ProjectV1.3/SignInPage/SignInPage.php" method="post"><button class="postad_button">Post your ad</button></form></li>
</div>
</ul>
</br>
</br>
</br>
</br>
<h3 style="color:#00bfff" align="center">Log in</h3>
<table align="center" style="border:none; border-radius:30px">
<tr>
<td align="center">
<form action="CheckAuthentication.php" method="post">
<h4 style="">
<input placeholder="Username/ Email" type="text" name="userNameOrEmail" value="" style="width:215px; height:25px"></br></br>
<input placeholder="Password" type="password" name="pass" value="" style="width:215px; height:25px"></br></br>
<button class="oto_button">Log in</button>
<hr>
</h4>

</form>
<form action="/ProjectV1.3/SignUpPage/SignUpPage.php">
<p>Don't have account?</p>
<h4 style="color:#00bfff">
<button class="oto_button_2">Sign up</button>
</h4>
</form>
</td>
</tr>
</table>
</body>
</html>