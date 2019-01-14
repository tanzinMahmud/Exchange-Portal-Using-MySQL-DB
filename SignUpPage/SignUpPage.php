<!DOCTYPE html>
<html>
<head>
	<script>
		function check()
		{
			document.getElementById("n_m").innerHTML="";
			document.getElementById("e_m").innerHTML="";
			document.getElementById("p_m").innerHTML="";
			document.getElementById("c_p_m").innerHTML="";
			var flag=true;
			var name=document.getElementById("name").value;
			var name_l=document.getElementById("name").value.length;
			var email=document.getElementById("email").value;
			var email_l=document.getElementById("email").value.length;
			var pass=document.getElementById("pass").value;
			var pass_l=document.getElementById("pass").value.length;
			var c_pass=document.getElementById("conPass").value;
			var c_pass_l=document.getElementById("conPass").value.length;
			if(name_l<3)
			{
				document.getElementById("n_m").innerHTML=" Invlaid name";
				document.getElementById("n_m").style.color = "red";
				flag=false;
			}
			else if(email_l<10 || email.indexOf("@")==-1 || email.indexOf(".com")==-1 || email.indexOf("@") > email.indexOf(".com") || email.slice(-4)!=".com")
			{
				document.getElementById("e_m").innerHTML=" Invlaid email";
				document.getElementById("e_m").style.color = "red";
				flag=false;
			}
			else if(pass_l<8 || pass.indexOf(".")!=-1 || pass.indexOf("*")!=-1)
			{
				document.getElementById("p_m").innerHTML=" Invlaid password";
				document.getElementById("p_m").style.color = "red";
				flag=false;
			}
			else if(pass!=c_pass)
			{
				document.getElementById("c_p_m").innerHTML=" Password and confirm password must be same";
				document.getElementById("c_p_m").style.color = "red";
				flag=false;
			}
			return flag;
		}
	</script>
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
.signup_button{
	background-color:white;
	border:1px solid #00bfff;
	border-radius:5px;
	color:black;
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
</style>
</head>
<body>
<div>
<ul>
  <li><a class="home" href="/ProjectV1.3/HomePage/HomePage.php">&emsp; &ensp; &ensp; &ensp; &ensp; &ensp;>> Exchangeportal&emsp; &ensp;</a></li>
  <li style="float:left"><a class="nav" href="/ProjectV1.3/AllAddsPage/All_adds.php">All exchangeable ads &ensp; &emsp; &ensp;&emsp; &ensp; &emsp; &ensp;&emsp; &ensp; &emsp; &ensp;&emsp; &ensp; &emsp; &ensp; &emsp; &ensp;</a></li>

  <li style="float:left"><a class="nav" href="/ProjectV1.3/SignInPage/login.php">👤Log in&ensp; &ensp;</a></li>
  <li style="float:left"></br><form align="center" action="/ProjectV1.3/SignInPageAnother/login.php" method="post"><button class="postad_button">Post your ad</button></form></li>
</ul>
</div>
</br></br></br><br><br>
<h3 style="color:#00bfff" align="center">Sign up</h3>
<table align="center" style="border:none; border-radius:30px">
<form action="/ProjectV1.3/AfterSignUpPage/server.php" method="post" enctype="multipart/form-data" name="s_form">
<tr>
<td align="center">
<input placeholder="Name: atleast 3 cahracters" type="text" name="name" id="name" style="width:215px; height:25px" onkeyup="check()"><span id="n_m"></span></br></br>
<input placeholder="Email: abc@example.com" type="text" name="email" id="email" style="width:215px; height:25px" onkeyup="check()"><span id="e_m"></span></br></br>
<input placeholder="Password: min 8 char & no '.' or '*'" type="password" name="pass" id="pass" style="width:215px; height:25px" onkeyup="check()"><span id="p_m"></span></br></br>
<input placeholder="Confirm Password: as password" type="password" name="conPass" id="conPass" style="width:215px; height:25px" onkeyup="check()"><span id="c_p_m"></span></br></br>
<button class="oto_button" onclick="return check()">Sign up</button>
<hr>
</form>
<p>Already have an account?</p>
<form action="/ProjectV1.3/SignInPage/SignInPage.php">
<button class="signup_button">Log in</button>
</form>
</td>
</tr>
</table>
</body>
</html>