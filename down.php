<?php
include('con.php');
	if($_GET['id'])
		{
			if(isset($_GET['id']))
			{$file = $_GET['id'];}
	if (!preg_match("|^[\d]+$|", $file))
	{
		exit ("Хацкир!!!1");
	}
$result = mysql_query("SELECT * FROM `hostf` where id = '$file' ORDER BY id DESC",$db);

$myrow = mysql_fetch_array($result);
$new_count = $myrow["count"] + 1;

		 $ins=mysql_query("UPDATE `hostf` SET `count` = '$new_count' WHERE `id` ='$file'",$db);



$files=$myrow["file"];

$filenames=$myrow["file"];

$additional_info=$myrow["desc"];

$url="/home/data/www/yoursite.com/files/"; //path to 'files' folder
$s=$_SERVER['SERVER_NAME'];
$n=$_SERVER['SCRIPT_NAME'];

$referer="http://yoursite.com/down.php";
$thisfile= "http://$s$n";

if ($referer!=$thisfile)
{
	echo "<center><big>Homepage: <a href=\"$referer\">$referer</a></big><br><hr><br><br></center>";
}
else {
	$i=$QUERY_STRING;
	$total=$url . $files;
	Header ( "Content-Type: application/octet-stream");
	Header ( "Content-Length: ".filesize($total));
	Header( "Content-Disposition: attachment; filename=$filenames");
	readfile($total);
     }
    }
?>
