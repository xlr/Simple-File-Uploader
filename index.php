<?php include('con.php');?>
<html>
<head>
	<title>File uploader</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
</head>

<body>

<?php
if($_GET['upload'])
		{
			echo '<center><form action="upload.php" method="post" enctype="multipart/form-data">';
			echo 'Ник: <input type="text" name="nick" size="40" />&nbsp;&nbsp;<br>';
			echo 'Описание: <input type="text" name="desc" size="40" />&nbsp;&nbsp;<br>';
			echo 'Файл: <input type="file" name="FILE" size="40" />&nbsp;&nbsp;<br>';
			echo '<input type="submit" value="Пиу">';
			echo '</form></center>';
		}
	else
		{
			echo "<center><a href=\"/?upload=1\">новый файл</a></center>";

			 $result = mysql_query("SELECT `id`,`nick`,`desc` FROM `hostf` ORDER BY id DESC",$db);
			 if (mysql_num_rows($result) > 0)
	{
		echo "<center><table border=\"1\"><tr><td>id</td><td>nick</td><td colspan=\"2\">desc</td></tr>";
		while ($myrow = mysql_fetch_array($result))
				{
	      printf("\n<tr><td><a href=\"file.php?id=%s\">%s</a></td><td>%s</td><td>%s</td><td><a href=\"file.php?id=%s\">Скачать</a></td></tr>\n",
	      $myrow["id"],$myrow["id"],$myrow["nick"],$myrow["desc"],$myrow["id"]);
		};

		echo"</table></center>";
	}

		}
?>

</body>

</html>
