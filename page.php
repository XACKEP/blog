<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<style type="text/css">
	.header{
		text-align: center;
		font-size: 50px;

}
body{
	font-family: Arial;
	margin: 0;
	background-image: url('banana.gif');
	background-size: 10px;
	color: black; 
}
.img{
	height: 80px;
}
.a{
	text-decoration: none;
	border-radius: 5px;
	border: 2px solid yellow;
	background-color: green;
	color: white;
}
</style>



	<?php 
	$database = [
		['title' => 'Ребаланс танков в WoT',
		'short' => 'Всем привет! Сегодня я расскажу о ребалансе в мире танков.',
		'long' => 'В WoT изменяют баланс блаблаблаблабла',
		],
		[
			'title' => '5 Лучших танков для фарма',
			'short' => 'Я сделал подборку лучших танков для фарма',
			'long' => 'Я сыграл 50 боев на каждом преме 8 уровня...',


		],
		[
			'title' => '1xBet Надёжный букмекер',
			'short_text' => 'Вчера я выиграл 10000 рублей на 1xBet Не выходя из дома!',
			'long_text' => 'Высокие коэффициенты, большие выигрыши и быстрые выплату ждет тебя на 1xBet!',


		]
	];
 ?>

<?php
 $index = $_GET['index'];
?>
<?php 
echo $database[$index]['title']
?>
<h3><?php echo $database[$index]['title'] ?></h3>
<p><?php echo $database[$index]['long'] ?></p>
<?php 
echo '<img src="banana.gif" class="img">'
?>
</body>
</html>