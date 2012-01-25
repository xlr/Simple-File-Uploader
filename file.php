<?php
include('con.php');
	if (isset($_GET['id']))	{$file = $_GET['id']; }
	if (!preg_match("|^[\d]+$|", $file)){exit ("Хацкир!!!1");}
		 $result = mysql_query("SELECT * FROM `hostf` where id = '$file'",$db);
	if (mysql_num_rows($result) > 0)
	{
		$my = mysql_fetch_array($result);
		$nick1=$my["nick"];$desc1=$my["desc"];$sk=$my["count"];
		echo "
		<table align=\"center\" border=\"1\" width=\"30%\">
		    <tr>
		        <td>
			<p align=\"left\">Загрузил: $nick1</p>
			<p align=\"left\">Описание: $desc1</p>
			<center><a href=\"down.php?id=$file\">Скачать</a><br>
			<font size=\"-1\">Загрузили: $sk раз</font></center>
		        </td>
		    </tr>
		</table>
		";
	}
		else
	{
		echo "Увы, такого файла нет!";
	}

?>
