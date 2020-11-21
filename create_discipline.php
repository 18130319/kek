<?php

require_once 'connect.php';

$name_discipline = $_POST['name_discipline'];
$name_teacher = $_POST['name_teacher'];




mysqli_query($connect, "INSERT INTO `discipline` (`discipline_id`, `name_discipline`, `name_teacher`) VALUES (NULL, '$name_discipline', '$name_teacher')");


//header('location:index2.php');
?>
<a href="index2.php">Назад</a>