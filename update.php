<?php
require_once 'connect.php';
$users_id=$_GET['users_id'];
$product = mysqli_query($connect, "SELECT * FROM `users` WHERE `users_id` = '$users_id'");

$product= mysqli_fetch_assoc($product);
 print_r($product);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	
</head>
<body>

<h1>Изменение данных о студенте </h1>

<form action="update2.php" method="post">

<input type="hidden" name="users_id" value="<?= $product['users_id']?>">


	<p>Имя студента</p>
<input type="text" name="user_name" value="<?= $product['user_name']?>">
	
	<p>Факультет</p>
<input type="text" name="user_faculty" value="<?= $product['user_faculty']?>" >
	
	<p>Группа</p>
<input type="text" name="user_group" value="<?= $product['user_group']?>">

	
	<p>Зачетная книжка</p>
<input type="number" name="user_gradebook" value="<?= $product['user_gradebook']?>" >
	
	<p>номер телефона</p>
<input type="number" name="user_number" value="<?= $product['user_number']?>" >

<input type="submit" value="Изменить" >

</form>





</body>
</html>