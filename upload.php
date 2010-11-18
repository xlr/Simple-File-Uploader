<?php
include('con.php');

$url = "files";

if($_FILES['FILE']['name']){

	if(is_uploaded_file($_FILES['FILE']['tmp_name'])) {

		if($_FILES['FILE']['size'] != 0 AND $_FILES['FILE']['size']<=102400000000) {

			if(move_uploaded_file($_FILES['FILE']['tmp_name'], $url."/".basename($_FILES['FILE']['name']))) {

				    $nick=$_POST['nick'];
				    $desc=$_POST['desc'];

				    $file=$_FILES['FILE']['name'];

				    $sql = "INSERT INTO hostf (`nick`, `desc`, `file`) VALUES ('$nick', '$desc','$file')";
					$result = mysql_query($sql)or die(mysql_error());
					//$max=mysql_query("SELECT max(id) FROM `hostf`",$db);
					$max=mysql_insert_id();
					header("Location: file.php?id=$max");
			                                                                                               }
			else { echo 'ошибка при перемещении '.$url;}
                                                                              }
        else {echo 'шибко большой размер';}
                                                        }
    else { echo'ошибка при загрузке';}
                             }
else { echo 'какой файл то?';}
?>
