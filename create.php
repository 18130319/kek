<?php

require_once 'connect.php';


$user_name = $_POST['user_name'];
$user_faculty = $_POST['user_faculty'];
$user_group= $_POST['user_group'];
$user_gradebook = $_POST['user_gradebook'];

$user_number = $_POST['user_number'];


mysqli_query($connect, "INSERT INTO `users` (`users_id`, `user_name`, `user_faculty`, `user_group`, `user_gradebook`, `user_number`) VALUES (NULL, '$user_name', '$user_faculty', '$user_group', '$user_gradebook', '$user_number')
");

//header('location:index2.php');
?>
<a href="index2.php">Назад</a>