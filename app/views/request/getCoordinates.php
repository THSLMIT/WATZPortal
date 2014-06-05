<?php
mysql_connect("watzdb.thslmit.com", "watz", "fuck@lzheimer5");
mysql_select_db("watz");

$sessionID = $data['sessionID'];


$newest = mysql_fetch_array(mysql_query("SELECT MAX(id) FROM Coordinates WHERE sessionID = '$sessionID'"));

$new = $newest[0];

if($query = mysql_query("SELECT * FROM `Coordinates` WHERE `id` = '$new'")){
	$array = mysql_fetch_array($query);
	echo $array['latitude'] . "," . $array['longitude'];
}else{	
	echo "failure";
}
 
 
