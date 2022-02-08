<?php 
	include 'admin/database.php';
?>
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

	
	<title>Baby Face</title>
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
		<div class="header-insertion">
			<div class="header-back">
				<div class="header-back-wrapper"></div>
				<img src="img/header-back.webp">
			</div>
			<img src="img/header-girl.webp" class="header-model">
			<div class="insertion-text-wrapper">
				<div>
				<h3>— Косметолог Киев</h3>
				<h1>Эстетическая и аппаратная косметология</h1>	
				<p>Сохраним вашу красоту и молодость. Используем только лицензионную продукцию. Опытные специалисты</p>
				<button onclick="sign_up(2)">Записаться на приём</button>
				</div>
			</div>
		</div>
	</header>
	<main>
		<div class="container">
				<a href="" id="services_links"></a>
			<div class="services">
				<h2>Услуги</h2>
				<div class="headline-text-wrapper">
					<p class="headline-text">Мы постарались сделать прайс, максимально простым и понятным. </p>
				</div>
				<div class="services-table">
					<?php 



					?>
					<ul class="services-ctg">
						<?php 
							$i = 1;
							$results = $db->query("SELECT * FROM `category`");
							$row = $results->fetchArray();
							$category_name = urldecode($row['category_name']);
						?>
						<li class="services-ctg-btn"><button id="btn<?php echo $i?>" onclick="openbox(<?php echo $i?>)" class="checkbtn"><?php echo $category_name;?></button></li>
						<?php	
							while ($row = $results->fetchArray()) {
							$i++;
	                        $category_name = urldecode($row['category_name']);

						?>
						<li class="services-ctg-btn"><button id="btn<?php echo $i?>" onclick="openbox(<?php echo $i?>)"><?php echo $category_name;?></button></li>
						<?php 
							}
						?>
					</ul>
					<?php 
						$i = 1;
						$category_results = $db->query("SELECT * FROM `category`");
						while ($category_row = $category_results->fetchArray()) {
							$category_name = urldecode($category_row['category_name']);
							$results = $db->query("SELECT * FROM `additional_services` WHERE category='$category_name' ORDER BY id DESC");
							if ($i > 1) {
								$checktable = "none";
							}
							else{
								$checktable = "table";
							}
							
					?>
					<table class="services-price animate__animated animate__fadeIn" id="services<?php echo $i;?>" style="display: <?php echo $checktable?>;">
						<?php 
							while ($row = $results->fetchArray()) {
								$service_name = urldecode($row['service_name']);
		                        $category = urldecode($row['category']);
						?>
						<tr>
							<td><span><?php echo $service_name?></span></td>
							<td><?php echo $row['service_time']?> хв</td>
							<td><?php echo $row['price']?> грн</td>
						</tr>
						<?php 
							}
						?>
					</table>
					<?php 
						$i++;
						}
					?>
				</div>	
					<table class="other-services-price">
						<?php 
							$results = $db->query("SELECT * FROM `basic_services` ");
							while ($row = $results->fetchArray()) {
							$service_name = urldecode($row['service_name']);
						?>
						<tr>
							<td><span><?php echo $service_name?></span></td>
							<td><?php echo $row['service_time']?> хв</td>
							<td><?php echo $row['price']?> грн</td>
						</tr>
						<?php 
							}
						?>
					</table>
			</div>
			
			<section style="background: #FBFBFB;">
				<div class="services">
					<h2>Нам доверяют пациенты</h2>
					<div class="headline-text-wrapper">
						<p class="headline-text">Курсы Косметолога после которых открыты любые двери в этой сфере.</p>
					</div>
					<a href="" id="aboutus"></a>
					
					<div class="pross">
						<div>
							<div class="pross-text-wrapper">
								<h3>1</h3>
								<h4>По окончанию курсов косметологии вы будете уметь:</h4>
								<p>Делать разные виды массажа лица;</p>
								<p>Косметологическую чистку лица;</p>
								<p>Проводить процедуры по уходу за лицом разных типов кожи;</p>
							</div>
						</div>
						<div>
							<div class="pross-text-wrapper">
								<h3>2</h3>
								<h4>Курсы косметологии состоят из теоретических и практических занятий</h4>
								<p>Наши специалисты постоянно совершенствуются в своей специальности, несмотря на богатый опыт работы.<br><a href="https://t.me/kursykosmetologa/3">Записаться в Telegram:<br>+38 (096) 039-99-88</a></p>
							</div>	
						</div>
						<div>
							<div class="pross-text-wrapper">
								<h3>3</h3>
								<h4>Наш профессионал</h4>
								<p>Наши специалисты постоянно совершенствуются в своей специальности, несмотря на богатый опыт работы.<br><a href="https://t.me/kursykosmetologa/3">Записаться в Telegram:<br>+38 (096) 039-99-88</a></p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section style="background: linear-gradient(145deg, #E9F2FD, #F8F2EF); margin: 100px 0 0 0;">
				<div class="services">
					<a href="#" id="ourcontacts"></a>
					<div class="certificate_block">
						<h2>Бесплатная консультация косметолога</h2>
						<div class="certificate_text-wrapper">
							<p>Для получения консультации, оставьте ваш номер телефона и мы вам перезвоним!.<br>Или позвоните нам сами — <a href="tel:+380960399988" style="color: #0079FF;">+38 (096) 039-99-88</a></p>
							<div class="certificate-form">
								<form method="POST" action="mail.php">
									<input required type="tel" name="phone" placeholder="Телефон">
									<button>Записаться на приём</button>
								</form>
							</div>
							<p class="personal-data">Записываясь на услугу вы даёте согласие на обработку своих персональных данных</p>
						</div>
						<img src="img/model1.webp" class="certificate_block_model">
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