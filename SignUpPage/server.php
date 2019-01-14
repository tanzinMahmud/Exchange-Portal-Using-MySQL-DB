<?php
require("db.php");
$sq="select * from posted_ad where product_name = '".$_REQUEST["s_t"]."'";
	$a=getDataFromDB($sq);
	foreach($a as $v){
		echo "<p>";
		echo $v["email"];
		echo "</p>";
	}
?>