<?php
require_once 'connect.php';

$users_id = $_POST['users_id'];
$user_name=$_POST['user_name'];
$user_faculty=$_POST['user_faculty'];
$user_group=$_POST['user_group'];
$user_gradebook=$_POST['user_gradebook'];
$user_number=$_POST['user_number'];


echo $users_id."<br>";
echo $user_name."<br>";
echo $user_faculty."<br>";
echo $user_group."<br>";
echo $user_gradebook."<br>";
echo $user_number."<br>";


//mysqli_query($connect,"UPDATE `fridge` SET `fridge_id` = '$fridge_id', `mark` = '$mark', `model` = '$model', `type_defrosting` = '$type_defrosting', `volume` = '$volume', `guarantee` = '$guarantee' WHERE `fridge`.`fridge_id` = '$fridge_id' " );

mysqli_query($connect,"UPDATE `users` SET `users_id` = '$users_id', `user_name` = '$user_name', `user_faculty` = '$user_faculty', `user_group` = '$user_group', `user_gradebook` = '$user_gradebook', `user_number` = '$user_number' WHERE `users`.`users_id` = '$users_id' " );





?>
<!DOCTYPE html>
<html>
<head>
	<title>Изменение</title>
</head>
<body>
<a href="index2.php">Назад</a>

</body>
</html>


