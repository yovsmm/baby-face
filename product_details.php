<?php 
	include 'admin/server_database.php';
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
			    <li><a href="index.php">Главная</a></li>
				<li><a href="index.php#ourcontacts">Контакты</a></li>
				<li><a href="index.php#services_links">Услуги</a></li>
				<li><a href="beuty-shop.php">МАгазин</a></li>
				<li><a href="index.php#aboutus">Обучение</a></li>
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
					<a href="index.php"><img src="img/logo.png"></a>
				</div>
				<ul class="header-social">
					<li><a href="https://t.me/kursykosmetologa/3"><img src="img/headersocial1.png" width="24px"></a></li>
					<li><a href="tel:+380960399988"><img src="img/headersocial2.png" width="24px"></a></li>
					<li><a href="https://www.facebook.com/babyfacecosmetology"><img src="img/headersocial3.png" width="24px"></a></li>
				</ul>
				<ul class="header-navigation">
				    <li><a href="index.php">Главная</a></li>
					<li><a href="index.php#aboutus">Обучение</a></li>
					<li><a href="beuty-shop.php">Магазин</a></li>
					<li><a href="index.php#services_links">Услуги</a></li>
					<li><a href="index.php#ourcontacts">Контакты</a></li>
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
	</header>
	<main>
		<div class="product_details_wrapper">
			<?php 
			$id = $_GET['id'];
			$result = mysqli_query($induction, 'SELECT * FROM `product_set` WHERE `id` = '.$id.'');
			$row = mysqli_fetch_assoc($result);
			$product_name = urldecode($row['product_name']);
			$product_brand = urldecode($row['product_brand_name']);
			$product_needs = urldecode($row['product_needs']);
			$product_categoty = urldecode($row['product_categoty']);
			$product_skin_type = urldecode($row['product_skin_type']);
			$product_text = urldecode($row['product_text']);
			?>
			<div class="product_details_grid">
				<div class="product_details_img_wrapper">
					<div class="product_details_block">
						<img src="<?php echo $row['product_img']?>">
					</div>
				</div>

				<div class="product_details_info">
					<div class="product_details_block">
						<h1><?php echo $product_name?></h1>
						<ul>
							<li>Объем: 
								<?php echo $row['product_volume']?>
								<?php 
									if ($row['product_type_name'] == 0) {
										echo "мл";
									}else{
										echo "грамм";
									}
								?>
							</li>
							<li>Тип кожи: <?php echo $product_skin_type?></li>
							<li>Название бренда: <?php echo $product_brand?></li>
							<li>Для чего подходит: <?php echo $product_needs?></li>
							<li>Категория: <?php echo $product_categoty?></li>
						</ul>
						<h2>Цена за 1шт: <span><?php echo $row['product_price']?>грн</span></h2>
						<div>
							<a href="order.php?id=<?php echo $row['id']?>">Заказать</a>
						</div>	
					</div>
				</div>
			</div>
			<div class="product_details_description">
				<div class="product_details_description_text">
					<h1>Описание</h1>
				</div>
				<h2><?php echo $product_name?></h2>
				<p><?php echo $product_text?></p>
				<p>Объём: 
								<?php echo $row['product_volume']?>
								<?php 
									if ($row['product_type_name'] == 0) {
										echo "мл";
									}else{
										echo "грамм";
									}
								?>			
				</p>
				<h2>С этим продуктом также рекомендуется</h2>
				<div class="with_this_product_we_recommend">
					<div class="also_we_recommend_wrapper">
						<?php
							for ($i=0; $i < 3; $i++) { 
								$recomend_result = mysqli_query($induction, 'Select * From product_set Order By rand() Limit 3');
								$recomend_row = mysqli_fetch_assoc($recomend_result);
								$recomend_product_skin_type = urldecode($recomend_row['product_skin_type']);
								$recomend_product_text = urldecode($recomend_row['product_text']);

						?>
						<div class="product-wrapper">
							<img src="<?php echo $recomend_row['product_img']?>">
							<h3><?php echo $product_name?></h3>
							<h4>Объём: <?php echo $recomend_row['product_volume']?>
								<?php 
									if ($recomend_row['product_type_name'] == 0) {
										echo "мл";
									}else{
										echo "грамм";
									}
								?>
							</h4>
							<h4>Тип кожи: <span><?php echo $recomend_product_skin_type?></span></h4>
							<p><?php echo $recomend_product_text?></p>
							<p class="shop-product-price"><?php echo $recomend_row['product_price']?>грн</p>
							<a href="product_details.php?id=<?php echo $recomend_row['id']?>">Подробнее</a>
						</div>
						<?php 
							}
						?>
					</div>
				</div>
			</div>
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