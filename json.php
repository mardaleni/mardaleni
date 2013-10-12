<?php

require ('config.php');

$sql = mysql_query("SELECT nama, latitute ,longitude from biro_trafel");

while ($row = mysql_fetch_array($sql)) 
$cabang[] = $row;

$json = json_encode($cabang);

echo $json;
?>