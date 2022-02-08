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

	
	<title>Курс косоплетения в Киеве - Baby Face</title>
</head>
<body>
	<div id="make_an_appointment" class="animate__animated animate__fadeIn" style="display: none">
		<div class="menu-close-btn-wrapper">
			<p>Заявка</p>
			<button class="close-btn" onclick="sign_up()"></button>
		</div>
		<div class="appointment-wrapper">
			<form method="POST" action="mail.php">
				<input required type="text" name="name" placeholder="Ваше имя">
				<input required type="tel" name="phone" placeholder="+380..">
				<div id="date-wrapper">
					<p>Желаемая дата:</p>
					<input type="date" name="date">
				</div>
				<button>Отправить</button>
			</form>
		</div>
	</div>
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
			<section style="background: linear-gradient(145deg, #E9F2FD, #F8F2EF); margin: 100px 0 0 0;">
				<div class="services">
					<a href="#" id="ourcontacts"></a>
					<div class="certificate_block">
						<h2>Курс по плетению волос (косичек)</h2>
						<div class="certificate_text-wrapper">
							<p>Полная стоимость участия  включает в себя все необходимые инструменты и материалы.
Цена двухдневного мастер-класса с отработкой техники составит <b>12 000 грн</b>, бронь по предоплате <b>2000 грн</b>.
Общая продолжительность курса 12 часов.
 Обратите внимание, что если вы отменяете бронь менее, чем за 10 дней, то предоплата не возвращается! Мы можем перенести её на другой курс.

Количество участников мастер-класса ограничено.</p>
							<div class="certificate-form">
								<form method="POST" action="mail.php">
									<input required type="tel" name="phone" placeholder="Телефон">
									<button>Записаться на курс</button>
								</form>
							</div>
							<p class="personal-data">Записываясь на услугу вы даёте согласие на обработку своих персональных данных</p>
						</div>
						<img src="img/lk1.png" class="certificate_block_model">
					</div>
				</div>
			</section>	
		</div>
		<section style="background: #FBFBFB;">
				<div class="services">
					<center><h2>Галерея наших работ</h2></center>
					</div>
					<a href="" id="aboutus"></a>
					
				<div class="services-table">
					<div class="сosmetics-wrapper">
						<div class="product-nav">
							<button onclick="products(0)" id="left-btn">
								<img src="img/left-arrow.png">
							</button>
						</div>
						<div id="product-wrapper" class="productanim animate__animated ">
						
					
						</div>	
						<div class="product-nav">
							<button onclick="products(1)" id="right-btn">
								<img src="img/right-arrow.png">
							</button>
						</div>	
					</div>
				</div>	
				
			</div>
			
			</section>
				<section style="background: #FBFBFB;">
				
						
			
			
			<div class="product_details_description">
				<div class="product_details_description_text">
					<center><h1>Описание курса</h1></center>
				</div>
				<center><h2>Мастер Інна Бояджи</h2>
				<p> Мы разработали уникальные, максимально эффективные методики, лежащие в основе нашей обучающей программы. С их помощью за 2 дня вы получаете востребованную профессию, позволяющую вам начать своё дело и плести все наиболее популярные и актуальные виды причёсок. Вы сэкономите время и силы, научившись с самого начала плести профессионально и качественно.

По окончании обучения вы получаете именной сертификат.

ТЕМЫ ЗАНЯТИЙ:

Обзор рабочих инструментов, материалов и подготовка рабочей зоны;

Деление волос, смешка цветов и гофрирование;

Основы трихологии в брейдинге: безопасность плетения;

Плетение классических афрокосичек без и с перекрытием;

Виды безопасных дред, жгуты и другие виды плетения;

Вплетение косичек зи-зи;

Изготовление и вплетение СЕ и ДЕ кос;

Распределение косичек, деление на базы

 Методы приплетение афрокудрей и афролоконов;

Колористика: подбор цвета и работа с оттенками;

Уход за косичками и их безопасное 
расплетение.

Отработка техник на качественной болванке при участии в двухдневном курсе


Полная стоимость участия  включает в себя все необходимые инструменты и материалы.
общая цена двухдневного мастер-класса с отработкой техники составит 12 000 грн, бронь по предоплате 2000 грн
Общая продолжительность курса 12 часов
 Обратите внимание, что если вы отменяете бронь менее, чем за 10 дней, то предоплата не возвращается! Мы можем перенести её на другой курс.

Количество участников мастер-класса ограничено.</p></center>
	 
				</section>
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
			<p>Все права защищены © 2022</p>
		</div>
		<div>
			<img src="img/logo.png">
		</div>
	</footer>
</body>
</html>