<!DOCTYPE html>
<html>
<head>
	<script src="library.js"></script>
<script>
$(document).ready(function(){
    $("#sec").hover(function(){
        $(this).css("color", "red")
            .slideUp(1000)
            .slideDown(2000);
    });
});
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
.oto_button:hover{
	background-color: #FF8C00;
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
	font-size:17px;
	font-family: sans-serif;
}
.nav2
{
	font-size:22px;
	font-family: sans-serif;
}
.nav:hover
{
	color:#A0522D;
}
.nav2:hover
{
	color:#A0522D;
}
div
{
	position: fixed;
	width: 100%;
}
</style>
</head>
<body>
<?php
session_start();
$_SESSION["c"]="not_login";
if(isset($_GET["error"])){
	echo $_GET["error"];
}
?>
<div>
<ul>
  <li><a class="home" href="HomePage.php">&emsp; &ensp; &ensp; &ensp; &ensp; &ensp;>> Exchangeportal&emsp; &ensp;</a></li>
  <li style="float:left"><a class="nav" href="/ProjectV1.3/AllAddsPage/All_adds.php">All exchangeable ads &ensp; &emsp; &ensp;&emsp; &ensp; &emsp; &ensp;&emsp; &ensp; &emsp; &ensp;&emsp; &ensp; &emsp; &ensp; &emsp; &ensp;</a></li>

  <li style="float:left"><a class="nav" href="/ProjectV1.3/SignInPage/login.php">👤Log in&ensp; &ensp;</a></li>
  <li style="float:left"></br><form align="center" action="/ProjectV1.3/SignInPageAnother/login.php" method="post"><button class="oto_button">Post your ad</button></form></li>
</ul>
</div>
</br>
</br>
</br>
</br>
</br>
<br>
<br>
<br>
<section align="center" id="sec">
<h1>WELCOME</h1><h2>To</h2><h3>Exchangeportal- 
The online exchange platform</h3>
<hr align="center" width="28%">
</section>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</body>
</html>