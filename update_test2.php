<?php

require_once 'connect.php';
//$connect = mysqli_connect('localhost','root','root','lab4');

$test_id = $_POST['test_id'];
$date_delivery=$_POST['date_delivery'];


if($_POST['discipline_id']){
    $discipline_id  = htmlentities(mysqli_real_escape_string($connect, $_POST['discipline_id']));
}
else{ echo("Введены некорректные данные");}


if($_POST['users_id']){
    $users_id  = htmlentities(mysqli_real_escape_string($connect, $_POST['users_id']));
}
else{ echo("Введены некорректные данные");}



echo "id ".$test_id ."<br>";
echo "discipline_id ".$discipline_id."<br>";
echo "users_id ".$users_id."<br>";
echo $date_delivery."<br>";



mysqli_query($connect,"UPDATE `test` SET `test_id` = '$test_id', `date_delivery` = '$date_delivery', `discipline_id` = '$discipline_id', `users_id` = '$users_id' WHERE `test`.`test_id` = '$test_id' " );




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


