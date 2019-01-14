<!DOCTYPE html>
<html>
<head>
<script>
function showHint() {
			
	//document.getElementById("img_url").style.display=block;
	var s_text=document.getElementById("search_text").value;
	var s_text_l=document.getElementById("search_text").value.length;
	if(s_text_l<=0)
	{
			document.getElementById("name").innerHTML="";
			document.getElementById("brand").innerHTML="";
			document.getElementById("ex_name").innerHTML="";
			document.getElementById("ex_brand").innerHTML="";
			document.getElementById("addi_m").innerHTML="";
			document.getElementById("area").innerHTML="";
			document.getElementById("phone_no").innerHTML="";
			document.getElementById("des").innerHTML="";
			document.getElementById("time").innerHTML="";
			document.getElementById("date").innerHTML="";
			document.getElementById("img_url").src="/ProjectV1.3/AfterSignInPage/uploads/search.png";
	}
	else
	{
	//var cat=document.getElementById("category").value;
	//var loc=document.getElementById("location").value;
	var  xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {			
			var res=xmlhttp.responseText;
			
			
			var a_ex=res.split(",");
			document.getElementById("name").innerHTML="Name: "+a_ex[0];
			document.getElementById("brand").innerHTML="Brand: "+a_ex[1];
			document.getElementById("ex_name").innerHTML="Exchange with: "+a_ex[2];
			document.getElementById("ex_brand").innerHTML="Brand: "+a_ex[3];
			document.getElementById("addi_m").innerHTML="Additional money: "+a_ex[4]+"TK";
			document.getElementById("area").innerHTML="Area: "+a_ex[5];
			document.getElementById("phone_no").innerHTML="Phone no: "+a_ex[6];
			document.getElementById("des").innerHTML="Description: "+a_ex[7];
			document.getElementById("time").innerHTML="Posted time: "+a_ex[8];
			document.getElementById("date").innerHTML="Posted date: "+a_ex[9];
			document.getElementById("img_url").src="/ProjectV1.3/AfterSignInPage/"+a_ex[10];
		
			//document.getElementById("name").innerHTML=a_ex[0];
			//document.getElementById("price").innerHTML="Tk "+a_ex[1];
			//document.getElementById("all").innerHTML=a_ex[2]+", "+a_ex[3];
			//document.getElementById("img_url").src="/ProjectV1.3/AfterSignInPage/"+a_ex[4];
			//document.getElementById("time_date").innerHTML=a_ex[5]+", "+a_ex[6];
	
		}
	}
	};
 	var url="server.php?s_t="+s_text;
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
img 
		{
			border-radius: 10%;
		}
.nav2
{
	font-size:22px;
	font-family: sans-serif;
}
.nav1
{
	font-size:17px;
	font-family: sans-serif;
	color:#A0522D;
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
.search{
	font-family: sans-serif;
	height:30px;
	width: 400px;
	font-size: 18px;
}
.select{
	font-family: sans-serif;
	height:30px;
	width: 300px;
	font-size: 18px;
}
.search_category{
	font-family: sans-serif;
	font-size: 20px;
}
a{
	text-decoration: none;
}
img{
	
	height: 200px;
	width:200px;
}
</style>
</head>
<body>
<?php
if(isset($_GET["error"])){
	echo $_GET["error"];
}
?>
<div>
<ul>
  <li><a class="home" href="/ProjectV1.3/HomePage/HomePage.php">&emsp; &ensp; &ensp; &ensp; &ensp; &ensp;>> Exchangeportal&emsp; &ensp;</a></li>
  <li style="float:left"><a class="nav1" href="/ProjectV1.3/AllAddsPage/All_adds.php">All exchangeable ads &ensp; &emsp; &ensp;&emsp; &ensp; &emsp; &ensp;&emsp; &ensp; &emsp; &ensp;&emsp; &ensp; &emsp; &ensp; &emsp; &ensp;</a></li>
  <li style="float:left"><a class="nav" href="/ProjectV1.3/SignInPage/login.php">👤Log in&ensp; &ensp;</a></li>
  <li style="float:left"></br><form align="center" action="/ProjectV1.3/SignInPagAnother/login.php"" method="post"><button class="oto_button">Post your ad</button></form></li>
</ul>
</div>
</br>
</br>
</br>
</br>

<form align="center">
<input type="text" id="search_text" class="search" placeholder="What are you searching for?" onkeyup="showHint()"><br><br>
				
	<img id="img_url" src="/ProjectV1.3/AfterSignInPage/uploads/search.png">
	<p id="name"></p>
	<p id="brand"></p>
	<p id="ex_name"></p>
	<p id="ex_brand"></p>
	<p id="addi_m"></p>
	<p id="area"></p>
	<p id="phone_no"></p>
	<p id="des"></p>
	<p id="time"></p>
	<p id="date"></p>
</form>

</body>
</html>