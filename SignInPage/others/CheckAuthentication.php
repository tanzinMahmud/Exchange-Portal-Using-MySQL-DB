<?php
function load_array()
{
	require("db.php");
	global $auth;
	global $pass;
	$s="select * from customer where email='".$_REQUEST["userNameOrEmail"]."'";
	$jsn=getJSONFromDB($s);
	$auth=json_decode($jsn,true);
}
load_array();
session_start();
$_SESSION["flag"]="";
$p=$_REQUEST['pass'];
foreach($auth as $v)
{
	if($v["password"]==md5($p))
	{
		$pass=$v["password"];
		$name=$v["first_name"];
		$id=$v["customer_id"];
		$balance=$v["balance"];
	}
}
	if($pass==md5($p))
	{
		$_SESSION["flag"]="logged";
		$_SESSION["name"]=$name;
		$_SESSION["id"]=$id;
		$_SESSION["balance"]=$balance;
		header("Location:/ProjectV1.3/AfterSignInPage/AfterSignInPage.php");
	}
	else
	{
		echo "I can't recognize you";
		header("Location:/ProjectV1.3/SignInPageAnother/SignInPage.php?error=Incorrect Username or Password!!");
	}
?>