<?php
require("db.php");

$sq="select * from posted_ad where product_name like '".$_REQUEST["s_t"]."%'";
	$a=getDataFromDB($sq);
	foreach($a as $v){
		
		echo $v["product_name"].",".$v["product_brand"].",".$v["ex_product_name"].",".$v["ex_product_brand"].",".$v["additional_money"].",".$v["area"].",".$v["phone_no"].",".$v["product_description"].",".$v["posted_time"].",".$v["posted_date"].",".$v["product_picture"];
		//echo $v["name"]." from ".$v["dept"];
		
	}
	//echo "Hello : ".$_REQUEST["uname"];
?>