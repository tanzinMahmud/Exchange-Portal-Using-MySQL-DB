<?php
	session_start();
?>

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
		function check()
		{
			document.getElementById("n_m").innerHTML="";
			document.getElementById("b_m").innerHTML="";
			document.getElementById("des_m").innerHTML="";
			document.getElementById("ex_n_m").innerHTML="";
			document.getElementById("ex_b_m").innerHTML="";
			document.getElementById("m_m").innerHTML="";
			document.getElementById("cat_m").innerHTML="";
			document.getElementById("p_m").innerHTML="";
			document.getElementById("des_m").innerHTML="";
			document.getElementById("ex_n_m").innerHTML="";
			document.getElementById("ex_b_m").innerHTML="";
			document.getElementById("ex_cat_m").innerHTML="";
			document.getElementById("m_m").innerHTML="";
			document.getElementById("a_m").innerHTML="";
			document.getElementById("phone_m").innerHTML="";
			var flag=true;
			var name=document.getElementById("name").value;
			var name_l=document.getElementById("name").value.length;
			var brand=document.getElementById("brand").value;
			var brand_l=document.getElementById("brand").value.length;
			var cat=document.getElementById("cat").value;
			var fileInput=document.getElementById("picture");
			var filePath=fileInput.value;
			
			var des_l=document.getElementById("d").value.length;
			var ex_n=document.getElementById("ex_n").value;
			var ex_n_l=document.getElementById("ex_n").value.length;
			var ex_b=document.getElementById("ex_b").value;
			var ex_b_l=document.getElementById("ex_b").value.length;
			var ex_cat=document.getElementById("ex_cat").value;
			var a_m=document.getElementById("ifYes").value;
			var a_m_l=document.getElementById("ifYes").value.length;
			var area=document.getElementById("area").value;
			var phone_no=document.getElementById("p").value;
			var phone_no_l=document.getElementById("p").value.length;
			
			if(name_l<5)
			{
				document.getElementById("n_m").innerHTML=" Invlaid product name";
				//document.getElementById("n_m").innerHTML.style.color='#d00';
				flag=false;
			}
			else if(brand_l<5)
			{
				document.getElementById("b_m").innerHTML=" Invlaid brand name";
				flag=false;
			}
			else if(cat=="Select a category")
			{
				document.getElementById("cat_m").innerHTML=" Please select a category";
				flag=false;
			}
			else if(filePath.slice(-4)!=".jpg" && filePath.slice(-4)!=".JPG" && filePath.slice(-4)!=".png" && filePath.slice(-4)!=".PNG" && filePath.slice(-5)!=".jpeg" && filePath.slice(-5)!=".JPEG")
			{
				document.getElementById("p_m").innerHTML=" Upload a valid file";	
				flag=false;
			}
			else if(des_l<10)
			{
				document.getElementById("des_m").innerHTML=" Invalid description";
				flag=false;
			}
			else if(ex_n_l<5)
			{
				document.getElementById("ex_n_m").innerHTML=" Invalid product name";
				flag=false;
			}
			else if(ex_b_l<5)
			{
				document.getElementById("ex_b_m").innerHTML=" Invalid product brand";
				flag=false;
			}
			else if(ex_cat=="Select a category")
			{
				document.getElementById("ex_cat_m").innerHTML=" Please select a category";
				flag=false;
			}
			else if(isNaN(a_m)==true)
			{
				document.getElementById("m_m").innerHTML=" Invalid money";
				flag=false;
			}
			else if(area=="Select area")
			{
				document.getElementById("a_m").innerHTML=" Please select area";
				flag=false;
			}
			else if(phone_no_l!=11 || phone_no.slice(0,3)!="016" && phone_no.slice(0,3)!="017" && phone_no.slice(0,3)!="015" && phone_no.slice(0,3)!="018" && phone_no.slice(0,3)!="019")
			{
				document.getElementById("phone_m").innerHTML=" Invalid phone no";
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
			<h3 style="color:#00bfff" align="center">Ad Details</h3>
			<b><p align="center">Your product:</p></b>
			<table align="center" style="border:none">
			<form action="after_post.php" enctype="multipart/form-data" method="post">
			<tr>
			<td align="center">
			<input placeholder="Product name" type="text" name="prodName" id="name" style="width:215px; height:25px" onkeyup="check()"><span id="n_m"></span></br></br>
			<input placeholder="Product brand" type="text" name="prodBrand" id="brand" style="width:215px; height:25px" onkeyup="check()"><span id="b_m"></span></br></br>
			Category:
			<select name="category" id="cat" onclick="check()">
			<option value="Select a category">Select a category</option>
			<option value="Electronics">Electronics</option>
			<option value="Fashion">Fashion</option>
			</select><span id="cat_m"></span><br><br>
			Upload product picture</br></br>
			<input type="file" name="file" accept="image/*" id="picture" onclick="check()"><span id="p_m"></span></br><br>
			
			<textarea placeholder="Product description" rows="10" cols="50" name="description" id="d" onkeyup="check()"></textarea><span id="des_m"></span></br><br>
			<b><p align="center">Want to exchange product:</p></b>
			<input placeholder="Product name" type="text" name="exName" value="" style="width:215px; height:25px" id="ex_n" onkeyup="check()"><span id="ex_n_m"></span></br></br>
			<input placeholder="Product brand" type="text" name="exBrand" value="" style="width:215px; height:25px" id="ex_b" onkeyup="check()"><span id="ex_b_m"></span></br></br>
			Category:
			<select name="exCategory" id="ex_cat" onclick="check()">
			<option value="Select a category">Select a category</option>
			<option value="Electronics">Electronics</option>
			<option value="Fashion">Fashion</option>
			</select><span id="ex_cat_m"></span><br><br>
			 Want to give additional money?<br>
			 <input type="radio" name="money" id="yes" onclick="yesnoCheck()" value="yes" checked> Yes<br>
  			 <input type="radio" name="money" id="no" onclick="yesnoCheck()" value="no"> No<br>
  			 <input placeholder="Amount" type="text" name="additionalAmount" id="ifYes" id="a_mo" style="width:215px; height:25px" onkeyup="check()"><span id="m_m"></span></br><br>
  			<b>Your location:</b><br><br>
  			Area:
			<select name="area" id="area" onclick="check()">
			<option value="Select area">Select area</option>
			<option value="Mirpur">Mirpur</option>
			<option value="Uttara">Uttara</option>
			</select>
			City:
			<select name="city">
			<option value="Dhaka">Dhaka</option>
			</select>
			Country:
			<select name="country">
			<option value="Bangladesh">Bangladesh</option>
			</select><span id="a_m"></span><br><br>
			<input placeholder="Phone no" type="text" name="phone_no" id="p" style="width:215px; height:25px" onkeyup="check()"><span id="phone_m"></span></br><br>
			<button class="oto_button" onclick="return check()">Post ad</button>
			</td>
			</tr>
			</form>
			</table>
					<?php
					}
					else{
						echo "Unauthorized Login!!";
					}?>
				</body>
</html>