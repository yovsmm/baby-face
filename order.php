<?php 
	include 'admin/server_database.php';
	$id = $_GET['id'];

	$result = mysqli_query($induction, 'SELECT * FROM `product_set` WHERE `id` = '.$id.'');
	$row = mysqli_fetch_assoc($result);
	$products_name = urldecode($row['product_name']);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="preload" as="style" href="style.css" onload="this.rel='stylesheet'">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="script.js"></script>
	<link rel="icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />	
	<title>Оформить заказ</title>
</head>
<body>
	<div class="order-wrapper">
		<div class="order-header">
			<a href="index.php"><img src="img/logo.png"></a>
		</div>
		<div class="order">
			<div class="oder_block">
				<div class="oder_block_flex">
					<div class="oder_block_center">
						<?php 
						$username = array("Юля","Александра","Тамара","Ксюша","Аня","Мира","Люда","Маша","Саша","Таня","Даша","Дарья","Мария","Марьяна","Ангелина","Оля","Катя","Лера","Лида","Злата","Соня","София","Злата","Лена","Ира","Лена","Вика","Виктория","Надя");
						$userrand = rand(0, 28);
						?>
						<form method="POST" action="mail.php">
						<h2>Информация о покупке:</h2>
							<div class="form-wrapper">
								<input type="hidden" name="price" value="<?php echo $row['product_price']?>" id="product-price">
								<input type="hidden" name="products_name" value="<?php echo $products_name?>">
								<p>Ваше имя</p>
								<input required type="text" name="name" placeholder="Пример: <?php echo $username[$userrand]?>">
								<p>Количество товара</p>
								<div class="quantity-wrapper">
									<div><span onclick="quantitycheck(0)">-</span></div>
									<div><h4 id="quantitytotal">1</h4></div>
									<div><span onclick="quantitycheck(1)">+</span></div>
								</div>
								<input required type="hidden" name="quantity" id="quantityforform" value="1">
								<p>Ваше номер телефона</p>
								<input required type="number" name="phone" placeholder="Тут должен быть ваш номер)">
								<button>Оформить заказ</button>
								<ul class="oder_block-social">
									<li><a href="https://t.me/kursykosmetologa/3"><img src="img/headersocial1.png" width="24px"></a></li>
									<li><a href="tel:+380960399988"><img src="img/headersocial2.png" width="24px"></a></li>
									<li><a href="https://www.facebook.com/babyfacecosmetology"><img src="img/headersocial3.png" width="24px"></a></li>
								</ul>
							</div>
						</form>
						<div class="oder_block_quest_info_block">
							<div>
								<h3>Контактная информация:</h3>
								<ul>
									<li><img src="img/location.png">Киев, Михаила Коцюбинского 4Б офис 13</li>
									<li><img src="img/calendar.png">с 09:00 - 20:00<span>пн-сб</li>
									<li><img src="img/headerphone.png">+38 (096) 039-99-88</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>	
			<div class="oder_info">
				<h1><?php echo $products_name?></h1>
				<img src="<?php echo $row['product_img']?>" class="oder_info_img">
				<ul>
					<li>Цена: <?php echo $row['product_price']?>грн</li>
					<li>Объём: <?php echo $row['product_volume']?>
								<?php 
									if ($row['product_type_name'] == 0) {
										echo "мл";
									}else{
										echo "грамм";
									}
								?></li>
					<li>Количество: <span id="quantitytotalorder">1</span>шт</li>
					<li>Итог: <span id="quantityorder"></span>грн</li>
				</ul>
				<p>Внимание! Вводите свою контактную информацию внимательно для того чтоб мы могли с вами связаться и уточнить ваш заказ. Обработка заказа осуществляется в кратчайшие сроки. Спасибо вам большое за понимание.</p>

			</div>
		</div>
	</div>
	<script type="text/javascript">
		window.onload = function() {
			let product = document.getElementById('product-price').value;	
			document.getElementById('quantityorder').innerHTML = i * product;
		}
	</script>
</body>
</html>