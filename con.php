<?php

$dbh='localhost'; //db host
$dbn='your'; //db name
$dbu='your'; //db user
$dbp='your'; //db pass

$db = mysql_connect("$dbh","$dbu","$dbp") or die("Could not connect: " . mysql_error());
mysql_select_db("$dbn", $db) or die(mysql_error());
?>
