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
<?php
		session_start();
		if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="logged"){?>
<div>
<ul>
  <li><a class="home" href="/ProjectV1.3/AfterSignInPage/AfterSignInPage.php">&emsp; &ensp; &ensp; &ensp; &ensp; &ensp;>> Exchangeportal&emsp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;</a></li>
  <li style="float:right"><a class="nav" href="/ProjectV1.3/AfterSignInPage/LogOut.php"><b>↑</b>Log out</a></li>
  <li style="float:right"><a class="nav" href="">user_name</a></li>
</ul>
</div>
</br>
</br>
</br>
</br>
</br>
<?php
$myfile = fopen("PostAdInfo.txt", "r") or die("Unable to open file!");
$auth=array();
while($c=fgets($myfile)){
	$a=explode(" - ",$c);
	$auth[$a[0]]=trim($a[1]);
}
foreach($auth as $k=>$v)
{
	?>"<p align="center"><?php echo $k;?>&ensp; &ensp; &ensp;<?php echo $v;?></p><?php
}
fclose($myfile);
?>
<?php
		}
		else{
			echo "Unauthorized Login!!";
		}?>
</body>
</html>