<?php
require_once 'connect.php';
$discipline_id =$_GET['discipline_id'];

$discipline = mysqli_query($connect, "SELECT * FROM `discipline` WHERE `discipline_id` = '$discipline_id' ");


$discipline= mysqli_fetch_assoc($discipline);
 print_r($discipline);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	
</head>
<body>

<h1>Изменение данных о предмете</h1>

<form action="update_discipline2.php" method="post">

<input type="hidden" name="discipline_id" value="<?= $discipline['discipline_id']?>">

	<p>Название</p>
<input type="text" name="name_discipline" value="<?= $discipline['name_discipline']?>">


	<p>Имя преподавателя</p>
<input type="text" name="name_teacher" value="<?= $discipline['name_teacher']?>" >
	
<input type="submit" value="Изменить" >
</form>





</body>
</html>