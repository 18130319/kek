<?php

require_once 'connect.php';

$discipline_id = $_POST['discipline_id'];
$name_discipline = $_POST['name_discipline'];
$name_teacher=$_POST['name_teacher'];

echo $discipline_id."<br>";
echo $name_discipline."<br>";
echo $name_teacher."<br>";

mysqli_query($connect,"UPDATE `discipline` SET `discipline_id` = '$discipline_id', `name_discipline` = '$name_discipline', `name_teacher` = '$name_teacher' WHERE `discipline`.`discipline_id` = '$discipline_id' " );





?>
<!DOCTYPE html>
<html>
<head>
	<title>Изменение</title>
</head>
<body>
<a href="index2.php">На главную</a>

</body>
</html>


