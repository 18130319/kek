<?php


require_once 'connect.php';

$date_delivery = $_POST['date_delivery'];


if($_POST['users_id']){
    $users_id  = htmlentities(mysqli_real_escape_string($connect, $_POST['users_id']));
}
else{ echo("Введены некорректные данные");}


if($_POST['discipline_id']){
    $discipline_id  = htmlentities(mysqli_real_escape_string($connect, $_POST['discipline_id']));
}
else{ echo("Введены некорректные данные");}


mysqli_query($connect, "INSERT INTO `test` (`test_id`, `date_delivery`, `discipline_id`, `users_id`) VALUES (NULL, '$date_delivery', '$discipline_id', '$users_id')");



//header('location:index2.php');
?>
<a href="index2.php">Назад</a>