<meta charset="utf-8">
<style type="text/css">
	.header{
		text-align: center;
		font-size: 50px;

}
body{
	font-family: Arial;
	margin: 0;
}
.img{
	height: 50px;
}
.a{
	text-decoration: none;
	border-radius: 5px;
	border: 2px solid yellow;
	background-color: green;
	color: white;
}
.mrg{
	text-align: center;
}
.img1{
	height: 50px;
	margin-left: 42%
}
</style>



<?php 
	$database = [
		['title' => 'Ребаланс танков в WoT',
		'short_text' => 'Всем привет! Сегодня я расскажу о ребалансе в мире танков.',
		'long_text' => 'В WoT изменяют баланс блаблаблаблабла',
		],
		[
			'title' => '5 Лучших танков для фарма',
			'short_text' => 'Я сделал подборку лучших танков для фарма',
			'long_text' => 'Я сыграл 50 боев на каждом преме 8 уровня...',


		],
		[
			'title' => '1xBet Надёжный букмекер',
			'short_text' => 'Вчера я выиграл 10000 рублей на 1xBet Не выходя из дома!',
			'long_text' => 'Высокие коэффициенты, большие выигрыши и быстрые выплату ждет тебя на 1xBet!',


		]
	];
	//echo $database[0]['title'];
	
?>
<h1 class="header">БЛОГ</h1>

<?php for ($i = 0; $i < count($database[0]); $i++){
echo '<h3 class="mrg">' . $database[$i]['title'] . '</h3>';
		echo '<p class="mrg">' . $database[$i]['short_text'] . '</p>';
		echo '<img src="banana.gif" class="img1">';
		echo '<a class="a" href="page.php?index='. $i . '">Читать дальше</a>';
		
		echo '<img src="banana.gif" class="img">';
		echo '<span><---eto moi straжi </span>';
		echo '<hr>';
	}
?>
<img src="banana.gif" class="smert">
<p>Не нажимай на банан если хочешь жить</p>
<script type="text/javascript">
	var btn = document.querySelector('.smert');
	var body = document.querySelector('body')
	btn.onclick = function(){
		body.style.display = 'none';
		body.style.background = 'blue';
	}
</script>