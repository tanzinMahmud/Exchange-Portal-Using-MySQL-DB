<?php
print_r($GLOBALS);
//echo $_COOKIE["pass"];
echo "<br>";
if(isset($_COOKIE["message"]))
{
	echo $_COOKIE["message"];
}
?>