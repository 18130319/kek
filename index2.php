<?php
require_once 'connect.php';
?>
<html>
<head> 
	<meta charset="UTF-8">
	<title>Гареев</title> 
</head>

<style>
	th, td{
		padding: 10px;

	}
	th{
		background:#D2691E; 
		color: black;
	}
	td{
		background: #DAA520;
	}
	body{background: #F5DEB3;
	}
	.kek{position:absolute; left: 1000px;}
</style>

<body>
<img src="ы.png" alt="Я" class="kek">
<table>
	<tr>
		<th>ID</th>
		<th>Имя</th>
		<th>Факультет</th>
		<th>Группа</th>
		<th>Зачетная книжка</th>
		<th>Номер телефона</th>
	</tr>


<?php 

$products= mysqli_query($connect,"SELECT * FROM `users`");
$products = mysqli_fetch_all($products);
foreach ($products as $product) {
?>
<tr>
	<td><?= $product[0]?></td>
	<td><?= $product[1]?></td>
	<td><?= $product[2]?></td>
	<td><?= $product[3]?></td>
	<td><?= $product[4]?></td>
	<td><?= $product[5]?></td>
	<td><a href="update.php?users_id=<?= $product[0] ?>">Изменить</a></td>

	<td><a href="delete.php?users_id=<?= $product[0] ?>">Удалить</a></td>

</tr>
<?php

}
?>

</table>

<a href="add_user.html">Добавить студента</a>





<h3>Предметы  </h3>
<table>
	<tr>
		<th>ID_предмета</th>
		<th>Название</th>
		<th>ФИО преподавателя</th>
	</tr>


<?php 

$disciplines= mysqli_query($connect,"SELECT * FROM `discipline`");
$disciplines = mysqli_fetch_all($disciplines);
foreach ($disciplines as $discipline) {
?>
<tr>
	<td><?= $discipline[0]?></td>
	<td><?= $discipline[1]?></td>
	<td><?= $discipline[2]?></td>
	<td><a href="update_discipline.php?discipline_id=<?= $discipline[0] ?>">Изменить</a></td>

	<td><a href="delete_discipline.php?discipline_id=<?= $discipline[0] ?>">Удалить</a></td>

</tr>
<?php

}
?>

</table>
<a href="add_discipline.html">Добавить Предмет </a>


<h3>Зачет</h3>
<table>
	<tr>
		<th>ID</th>
		<th>Дата сдачи </th>
		<th>id_дисциплины</th>
		<th>id_студента</th>

	</tr>


<?php 

$tests= mysqli_query($connect,"SELECT * FROM `test`");
$tests = mysqli_fetch_all($tests);
foreach ($tests as $test) {


?>
<tr>
	<td><?= $test[0]?></td>
	<td><?= $test[1]?></td>
	<td><?= $test[2]?></td>
<td><?= $test[3]?></td>

	<td><a href="update_test.php?test_id=<?= $test[0] ?>">Изменить</a></td>

	<td><a href="delete_test.php?test_id=<?= $test[0] ?>">Удалить</a></td>

</tr>
<?php

}
?>

</table>
<a href="add_test.php">Добавить Зачет </a>
<p></p>


</body>
 </html>
<? 
echo("<p><a href='gen_pdf.php'>Показать PDF </a>"); 
echo("<p><a href='gen_xls.php'>Показать xls </a>"); 
?>