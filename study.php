<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="preload" as="style" href="style.css" onload="this.rel='stylesheet'">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="script.js"></script>
	<link rel="icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

	
	<title>Курсы обучения - Baby Face</title>
</head>
<body>
	<div id="mobile-modal-menu" class="animate__animated animate__fadeIn" style="display: none">
		<div class="menu-close-btn-wrapper">
			<p>Меню</p>
			<button class="close-btn" onclick="openmenu()"></button>
		</div>
		<div class="mobile-nav">
			<ul >
			    <li><a href="/">Главная</a></li>
				<li><a href="#ourcontacts">Контакты</a></li>
				<li><a href="#services_links">Услуги</a></li>
				<li><a href="beuty-shop.php?all=all_products">Магазин</a></li>
				<li><a href="study.php">Обучение</a></li>
			</ul>
			<ul >
				<li><a href="tel:+380960399988">+38 (096) 039-99-88</a></li>
				<li><a href="https://www.facebook.com/babyfacecosmetology">Facebook</a></li>
				<li><a href="https://t.me/kursykosmetologa/3">Telegram</a></li>
			</ul>
			<ul>
				<li style="padding-right: 15px;"><img src="img/location.png">Местоположение: Киев, Михаила Коцюбинского 4Б офис 13</li>
				<li><img src="img/calendar.png">Работаем с 09:00 - 20:00<span>пн-сб</span></li>
				<li id="button-menu-call"><button onclick="sign_up(1)">Заказать звонок</button></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="header-nav-block">
			<div class="header-nav-block-leftside">
				<div class="header-logo">
					<img src="img/logo.png">
				</div>
				<ul class="header-social">
					<li><a href="https://t.me/kursykosmetologa/3"><img src="img/headersocial1.png" width="24px"></a></li>
					<li><a href="tel:+380960399988"><img src="img/headersocial2.png" width="24px"></a></li>
					<li><a href="https://www.facebook.com/babyfacecosmetology"><img src="img/headersocial3.png" width="24px"></a></li>
				</ul>
				<ul class="header-navigation">
				    <li><a href="/">Главная</a></li>
					<li><a href="study.php">Обучение</a></li>
					<li><a href="beuty-shop.php?all=all_products">Магазин</a></li>
					<li><a href="#services_links">Услуги</a></li>
					<li><a href="#ourcontacts">Контакты</a></li>
				</ul>
			</div>
			<div class="header-nav-block-rightside">
				<div class="header-location">
					<img src="img/location.png">
					<p>Киев,<br> Михаила Коцюбинского 4Б<br>офис 13</p>
				</div>
				<div class="header-worktime">
					<img src="img/calendar.png">
					<p>с 09:00 - 20:00<span>пн-сб</span></p>
				</div>
				<div class="header-phone">
					<!--<img src="img/headerphone.png">
					<a href="tel:+380660521375">+7900 333 10 40</a>-->
					<button onclick="sign_up(1)">Заказать звонок</button>
				</div>
				<button onclick="openmenu()" class="header-mobile-menu"></button>
			</div>
		</div>
	<main>
	
			<section style="background: #FBFBFB;">
				<div class="services">
					<center><h2>Курсы обучения:</h2></center>
					
					<a href="" id="aboutus"></a>
					
					<div class="pross">
						<div>
							<div class="pross-text-wrapper">
								<h3>1</h3><br><img src='/img/kurs1.png'width="250">
								<h4>Курс по плетению волос (косичек)</h4>
								<p>Мы разработали максимально эффективные методики,с их помощью за 2 дня вы получаете востребованную профессию, позволяющую вам начать своё дело и плести все популярные и актуальные виды причёсок.<br>
				                   <a href="/kurs_pleteniya.php"><h1>Подробнее</h1></a></p>
							</div>
						</div>
						<div>
							<div class="pross-text-wrapper">
								<h3>2</h3>
								<h4>Курсы косметологии</h4>
								<p>Курсы состоят из теоретических и практических занятий.<br><a href="https://t.me/kursykosmetologa/3">Записаться в Telegram:<br>+38 (096) 039-99-88</a></p>
							</div>	
						</div>
						<div>
							<div class="pross-text-wrapper">
								<h3>3</h3>
								<h4>Курсы Фотографа</h4>
								<p>Фото-видео сьемка работы косметолога.<br><a href="https://t.me/kursykosmetologa/3">Записаться в Telegram:<br>+38 (096) 039-99-88</a></p>
							</div>
						</div>
					</div>
				
			</section>
			
		</div>
	</main>
	<footer>
		<div>
			<ul>
				<li><a href="https://t.me/kursykosmetologa/3"><img src="img/headersocial1.png"></a></li>
				<li><a href="tel:+380960399988"><img src="img/headersocial2.png"></a></li>
				<li><a href="https://www.facebook.com/babyfacecosmetology"><img src="img/headersocial3.png"></a></li>
			</ul>
		</div>
		<div>
			<p>Все права защищены © 2021</p>
		</div>
		<div>
			<img src="img/logo.png">
		</div>
	</footer>
</body>
</html>