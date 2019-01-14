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
  <li><a class="home" href="Home.php">&emsp; &ensp; &ensp; &ensp; &ensp; &ensp;>> Exchangeportal ADMIN Panel</a></li>
  
</div>
</ul>
</br>
</br>
</br>
</br>
<h3 style="color:red" align="center">ADMIN Log in</h3>
<table align="center" style="border:none; border-radius:30px">
<tr>
<td align="center">
<form action="CheckAuthentication.php" method="post" name="submitsigninform">
<h4 style="">
<input placeholder="Username/ Email" type="text" name="userNameOrEmail" value="" style="width:250px; height:40px"></br></br>
<input placeholder="Password" type="password" name="pass" value="" style="width:250px; height:40px"></br></br>
<button class="oto_button">Log in</button>
</form>
</td>
</tr>
</table>
</body>
</html>