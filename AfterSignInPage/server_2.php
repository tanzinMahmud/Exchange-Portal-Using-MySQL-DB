<?php
require("db.php");
if(isset($_REQUEST["se_no"]) && strlen($_REQUEST["se_no"])>0 && is_numeric($_REQUEST["se_no"])){
	$sq="delete from posted_ad where product_id = ".$_REQUEST["se_no"];
	$a=updateSQL($sq);
	echo $a;
}