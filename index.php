<html>
	<head>
		<meta charset ="UTF-8"><link rel = "stylesheet" href = "index.css">
		<TITLE> Отели </title>
	</head>
	<body class="background">
<?php
	
	$hotels = [
		'Новосибирск' => [
			[
				'title' => 'Hilton Double Tree',
				'description' => ' Гостиница Doubletree by Hilton Novosibirsk располагается в самом центре города Новосибирска, в нескольких минутах ходьбы от главной достопримечательности города - Новосибирского Государственного Академического Театра Оперы и Балеты; до аэропорта Толмачево - 30 мин. езды на авто. ',
				'photos' => [
					'http://static.ngs.ru/cache/turizm/images/921242d31e580e87255f05f33ac431a3_1024_768.jpg',
					'http://static.ngs.ru/cache/turizm/images/356ac2e251d8f43ce06ea5c2b5f45732_1024_768.jpg'
				],
				'services' => ['санузел', 'утюг', 'фен', 'мини-бар', 'ТВ', 'сейф', 'чайная станция', 'радио', 'телефон']
			],
			[
				'title' => 'Borviha Hotel&Spa',
				'description' => 'Номерной фонд представлен 79 современными и комфортными номерами. В двух корпусах предлагаются одно- и двухместные номера категории «Стандарт» и «Люкс». Все номера оборудованы итальянской мебелью, есть мини-бар, телефон, телевизор, сейф, ванная комната с душевой кабинкой, банные принадлежности, фен. ',
				'photos' => [
					'http://static.ngs.ru/cache/turizm/images/65bca273b8e4b45ece55ba8a8157cf9e_1024_768.jpg'
				],
				'services' => ['ресторан европейской кухни', '2 лобби-бара', 'Немецкий пивной ресторан', 'Боулинг', 'Тренажерный зал', 'Русский и американский бильярд', 'Конференц-залы', 'Хаммам', 'Финская сауна', 'Сауны с комнатами отдыха', 'Крытый бассейн с гейзерами, водопадами и массажными противотоками', 'Охраняемая автостоянка', 'Открытый летний бассейн с подогревом (5 дорожек по 25 м, шезлонги, бар)', 'Каток, лыжня, прокат лыж, коньков (зимой)', 'Теннисный корт, прокат спортинвентаря, велосипедов, роликов, скейтов (летом)', 'Площадки для барбекю', 'Детская площадка и игровая комната', 'SPA-центр']
			]
		],
		'Шерегеш' => [
			[
				'title' => 'Спортотель',
				'photos' => [
					'http://static.ngs.ru/cache/turizm/images/7ff26f1c8276df8d1b54871e38575583_1024_768.jpg'
				]
			],
			[
				'title' => 'Айс',
				'photos' => [
					'http://static.ngs.ru/cache/turizm/images/f66814253df7f195977e4b64461a9328_1024_768.png'
				]
			]
		]
	];
?>
<?php
	foreach ($hotels as $hotel_class=> $hotel) {
		if (isset ($hotel_class)){
			echo "<div class='hotel-class'> Местоположение: ". htmlspecialchars($hotel_class)."</div>";
		}
		foreach ($hotel as $class => $hotel){
			echo "<div class='item-item'>";
			if (isset ($hotel ['title'])){
				echo "<div class='hotel-title'> Название отеля: ".htmlspecialchars($hotel['title'])."</div>";
			}						
			if (isset($hotel['services'])) {
				echo "<div class='hotel-services'> Сервис: ".htmlspecialchars(implode($hotel['services'],', '))."</div>";
				}
			if (isset($hotel['description'])) {
				echo "<div class='hotel-description'> Краткое описание отеля: ".htmlspecialchars($hotel['description'])."</div>";
			}
			foreach ($hotel['photos'] as $photos){
				if (isset($photos)) {
					echo "<div class='hotel-photos'> <img src='".htmlspecialchars($photos)." '></div>";
				}
			}
			echo "</div>";
		}
	}			
?>
	</body>
</html>