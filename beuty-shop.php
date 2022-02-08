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

				<li><a href="beuty-shop.php?all=all_products">Магазин</a></li>

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

					<li><a href="beuty-shop.php?all=all_products">Магазин</a></li>

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
		<div class="shop-container">

			<div class="shop-wrapper">

				<div class="shop-menu-wrapper">

					<div class="shop-menu">
<center><h2 class="search-text">Категории:</h2></center>
						<button onclick="openshopmenu(0)" class="shop-menu-button"><p>Бренды<img src="img/down-arrow.png" class="shop-btn-img"></p></button>

						<div class="shop-brands shop-pos">

							<?php 

								$result = mysqli_query($induction, 'SELECT * FROM `brands` ORDER BY id DESC'); 

								while($row = $emp = mysqli_fetch_assoc($result)){

									$brands_name = urldecode($row['brands_name']);

									$brands_text = urldecode($row['brands_text']);

							?>

							<a href="beuty-shop.php?brands=<?php echo $row['brands_name']?>">

								<p class="shop-menu-name-brand"><?php echo $brands_name?></p>

								<p class="shop-menu-brand-text"><?php echo substr($brands_text,0,150);?></p>

							</a>

							<?php 

								}

							?>

						</div>



						<button onclick="openshopmenu(1)" class="shop-menu-button"><p>По потребностям<img src="img/down-arrow.png" class="shop-btn-img"></p></button>

						<div class="shop-brands shop-pos">

							<?php 

								$result = mysqli_query($induction, 'SELECT * FROM `needs` ORDER BY id DESC'); 

								while($row = $emp = mysqli_fetch_assoc($result)){

									$needs_name = urldecode($row['needs_name']);
									
                                    $needs_text = urldecode($row['needs_text']);

							?>

							<a href="beuty-shop.php?needs=<?php echo $row['needs_name']?>">

								<p class="shop-menu-name-brand"><?php echo $needs_name?></p>
								
                                <p class="shop-menu-brand-text"><?php echo substr($needs_text,0,150);?></p>
							</a>

							<?php 

								}

							?>

						</div>



						<button onclick="openshopmenu(2)" class="shop-menu-button"><p>По типу кожи<img src="img/down-arrow.png" class="shop-btn-img"></p></button>

						<div class="shop-brands shop-pos">

							<?php 

								$result = mysqli_query($induction, 'SELECT * FROM `skin_type` ORDER BY id DESC'); 

								while($row = $emp = mysqli_fetch_assoc($result)){

									$skin_type_name = urldecode($row['skin_type_name']);

									$skin_type_text = urldecode($row['skin_type_text']);

							?>

							<a href="beuty-shop.php?skin_type=<?php echo $row['skin_type_name']?>">

								<p class="shop-menu-name-brand"><?php echo $skin_type_name?></p>

								<p class="shop-menu-brand-text"><?php echo substr($skin_type_text,0,150);?></p>

							</a>

							<?php 

								}

							?>		

						</div>



						<button onclick="openshopmenu(3)" class="shop-menu-button"><p>По категории<img src="img/down-arrow.png" class="shop-btn-img"></p></button>

						<div class="shop-brands shop-pos">

							<?php 

								$result = mysqli_query($induction, 'SELECT * FROM `by_category` ORDER BY id DESC'); 

								while($row = $emp = mysqli_fetch_assoc($result)){

									$category_name = urldecode($row['category_name']);

									$category_text = urldecode($row['category_text']);

							?>

							<a href="beuty-shop.php?category=<?php echo $row['category_name']?>">

								<p class="shop-menu-name-brand"><?php echo $category_name?></p>

								<p class="shop-menu-brand-text"><?php echo substr($category_text,0,150);?></p>

							</a>

							<?php 

								}

							?>																																										

						</div>

					</div>

				</div>
				
                
				<div class="shop-products">
<h2 class="search-text">Фильтр товаров:</h2>
					<?php 

					$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

					?>

					<a href="beuty-shop.php?all=all_products"><h1 class="shop-products-name">Все товары</h1></a>

					<a href="<?php echo $url?>&product_price=low&page=1"><h1 class="shop-products-name">По возрастанию цены</h1></a>

					<a href="<?php echo $url?>&product_price=hight&page=1"><h1 class="shop-products-name">По убыванию цены</h1></a>

					<div class="mobile-menu-links">

						<ul>

							<li><a href="beuty-shop.php?all=all_products"><h1 >Все товары</h1></a></li>

							<li><a href="<?php echo $url?>&product_price=low&page=1"><h1 >По возрастанию цены</h1></a></li>

							<li><a href="<?php echo $url?>&product_price=hight&page=1"><h1 >По убыванию цены</h1></a></li>

						</ul>

					</div>

					<?php 

							include_once("admin/server_database.php");

		                	$showRecordPerPage = 20;

		                	if(isset($_GET['page']) && !empty($_GET['page'])){

		                        $currentPage = $_GET['page'];

		                	}else{

		                		$currentPage = 1;

		                	}

		                	

		                	$startFrom = ($currentPage * $showRecordPerPage) - $showRecordPerPage;

		                	

		                	$totalEmpSQL = "SELECT * FROM product_set ORDER BY id DESC";

		                	

		                	$allEmpResult = mysqli_query($induction, $totalEmpSQL);

		                	

		                	$totalEmployee = mysqli_num_rows($allEmpResult);

		                	

		                	$lastPage = ceil($totalEmployee/$showRecordPerPage);

		                	

		                	$firstPage = 1;

		                	

		                	$nextPage = $currentPage + 1;

		                	

		                	$previousPage = $currentPage - 1;

		                	//сортировка по брендам

		                	if ($_GET['brands'] != "") {

		                		$search_query = $_GET['brands'];
		                		$search_query = urlencode($search_query);
		                		if ($_GET['product_price'] == "low") {

		                			$empSQL = "SELECT * FROM `product_set` WHERE `product_brand_name` = '$search_query' ORDER BY product_price ASC LIMIT $startFrom, $showRecordPerPage";

		                		}

		                		if ($_GET['product_price'] == "hight") {

		                			$empSQL = "SELECT * FROM `product_set` WHERE `product_brand_name` = '$search_query' ORDER BY product_price DESC LIMIT $startFrom, $showRecordPerPage";

		                		}

		                		if($_GET['product_price'] == ""){

		                			$empSQL = "SELECT * FROM `product_set` WHERE `product_brand_name` = '$search_query' ORDER BY id DESC LIMIT $startFrom, $showRecordPerPage";

		                		}

		                		

		                		$search_query_text = urldecode($search_query);

		                		$search_text ="бренду: ".$search_query_text;

		                	}

		                	if ($_GET['needs'] != "") {

		                		$search_query = $_GET['needs'];
		                		$search_query = urlencode($search_query);
		                		if ($_GET['product_price'] == "low") {

		                			$empSQL = "SELECT * FROM `product_set` WHERE `product_needs` = '$search_query' ORDER BY product_price ASC LIMIT $startFrom, $showRecordPerPage";

		                		}

		                		if ($_GET['product_price'] == "hight") {

		                			$empSQL = "SELECT * FROM `product_set` WHERE `product_needs` = '$search_query' ORDER BY product_price DESC LIMIT $startFrom, $showRecordPerPage";

		                		}

		                		if ($_GET['product_price'] == "") {

		                			$empSQL = "SELECT * FROM `product_set` WHERE `product_needs` = '$search_query' ORDER BY id DESC LIMIT $startFrom, $showRecordPerPage";

		                		}

		                		$search_query_text = urldecode($search_query);

		                		$search_text ="потребностям: ".$search_query_text;

		                	}

		                	if ($_GET['skin_type'] != "") {

		                		$search_query = $_GET['skin_type'];
		                		$search_query = urlencode($search_query);
		                		if ($_GET['product_price'] == "low") {

		                			$empSQL = "SELECT * FROM `product_set` WHERE `product_skin_type` = '$search_query' ORDER BY product_price ASC LIMIT $startFrom, $showRecordPerPage";

		                		}

		                		if ($_GET['product_price'] == "hight") {

		                			$empSQL = "SELECT * FROM `product_set` WHERE `product_skin_type` = '$search_query' ORDER BY product_price DESC LIMIT $startFrom, $showRecordPerPage";

		                		}

		                		if ($_GET['product_price'] == "") {

		                			$empSQL = "SELECT * FROM `product_set` WHERE `product_skin_type` = '$search_query' ORDER BY id DESC LIMIT $startFrom, $showRecordPerPage";

		                		}

		                		$search_query_text = urldecode($search_query);

		                		$search_text ="типу кожи: ".$search_query_text;

		                	}

		                	if ($_GET['category'] != "") {

		                		$search_query = $_GET['category'];
		                		$search_query = urlencode($search_query);
		                		if ($_GET['product_price'] == "low") {

		                			$empSQL = "SELECT * FROM `product_set` WHERE `product_categoty` = '$search_query' ORDER BY product_price ASC LIMIT $startFrom, $showRecordPerPage";

		                		}

		                		if ($_GET['product_price'] == "hight") {

		                			$empSQL = "SELECT * FROM `product_set` WHERE `product_categoty` = '$search_query' ORDER BY product_price DESC LIMIT $startFrom, $showRecordPerPage";

		                		}

		                		if ($_GET['product_price'] == "") {

		                			$empSQL = "SELECT * FROM `product_set` WHERE `product_categoty` = '$search_query' ORDER BY id DESC LIMIT $startFrom, $showRecordPerPage";

		                		}

		                		$search_query_text = urldecode($search_query);

		                		$search_text ="категории: ".$search_query_text;

		                	}

		                	//выводит все товары

		                	if ($_GET['all'] != "") {

		                		if ($_GET['product_price'] == "low") {

		                			$empSQL = "SELECT * FROM `product_set` ORDER BY product_price ASC LIMIT $startFrom, $showRecordPerPage";

		                		}

		                		if ($_GET['product_price'] == "hight") {

		                			$empSQL = "SELECT * FROM `product_set` ORDER BY product_price DESC LIMIT $startFrom, $showRecordPerPage";

		                		}

		                		if ($_GET['product_price'] == "") {

		                			$empSQL = "SELECT * FROM `product_set` ORDER BY id DESC LIMIT $startFrom, $showRecordPerPage";

		                		}

		                		$search_text ="всем категориям.";

		                	}

		                	

		                	



					?>

					<h2 class="search-text">Поиск по <?php echo $search_text?></h2>

					<p class="shop-products-text">Подбор любых косметических средств должны осуществлять специалисты. Только тогда, уход принесет вашей коже ожидаемый результат. Мы с радостью и бесплатно подберем средства для тестирования, а также всегда будем помогать вам с подбором домашнего ухода в любой день, в любой ситуации.</p>

					<div class="shop-products-container">

						<?php

		                	$empResult = mysqli_query($induction, $empSQL);

		                	while($row = $emp = mysqli_fetch_assoc($empResult)){

		                		$product_name = urldecode($row['product_name']);

		                		$product_skin_type = urldecode($row['product_skin_type']);

		                		$product_text = urldecode($row['product_text']);

						?>

						<div class="product-wrapper">
							<style type="text/css">
									.product-wrapper a{
										position: absolute;
										width: 92%;
										padding: 15px 4%;
										display: block;
										bottom: 0;
									}
									.product-info-wrapper-details{
										padding-bottom: 70px;
										position: relative;
										width: 100%;
										display: block;
									}
									
								</style>
							<img src="<?php echo $row['product_img']?>">
							<div class="product-info-wrapper-details">
								<h3><?php echo $product_name?></h3>

								<h4>Объём: <?php echo $row['product_volume']?>

									<?php 

										if ($row['product_type_name'] == 0) {

											echo "мл";

										}else{

											echo "грамм";

										}

									?>

								</h4>

								<h4>Тип кожи: <span><?php echo $product_skin_type?></span></h4>

								<p><?php echo $product_text?></p>

								<p class="shop-product-price"><?php echo $row['product_price']?>грн</p>
								
							</div>	
							<a href="product_details.php?id=<?php echo $row['id']?>">Подробнее</a>

						</div>

						<?php 

							}

						?>

					</div>

						<?php 

							$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

							$getadress = explode("?", $url);

									

							//$getadress[1] = strtok($getadress[1], '&');

							$getadress[1] = substr($getadress[1], 0, -7);

						?>

						 <ul class="pagination">

                	  <?php if($currentPage != $firstPage) { ?>

                		<li class="page-item">

                		    <a class="pagination_btn" href="beuty-shop.php?<?php echo $getadress[1]?>&page=<?php echo $firstPage ?>" tabindex="-1" aria-label="Previous"><div class="pagination-link-block"><p><img src="img/pagination-arrow-left.png"></p></div></a>

                		</li>

                		<?php } ?>

                		<?php if($currentPage >= 2) { ?>

                		<?php if($previousPage != 1) { ?><li><a href="beuty-shop.php?<?php echo $getadress[1]?>&page=<?php echo $previousPage-1 ?>"><div class="pagination-link-block"><p><?php echo $previousPage-1 ?></p></div></a></li><?php } ?>

                			<li><a class="page-link" href="beuty-shop.php?<?php echo $getadress[1]?>&page=<?php echo $previousPage ?>"><div class="pagination-link-block"><p><?php echo $previousPage ?></p></div></a></li>

                		<?php } ?>

                		    <li><a class="page-focus" href="beuty-shop.php?<?php echo $getadress[1]?>&page=<?php echo $currentPage ?>"><div class="pagination-link-block"><p><?php echo $currentPage ?></p></div></a></li>

                		<?php if($currentPage != $lastPage) { ?>

                			<li><a class="page-link" href="beuty-shop.php?<?php echo $getadress[1]?>&page=<?php echo $nextPage ?>"><div class="pagination-link-block"><p><?php echo $nextPage ?></p></div></a></li>

                			<?php if($currentPage < ($lastPage - 1)) { ?><li><a class="page-link" href="beuty-shop.php?<?php echo $getadress[1]?>&page=<?php echo $nextPage+1 ?>"><div class="pagination-link-block"><p><?php echo $nextPage+1 ?></p></div></a></li><?php } ?>

                			<li class="page-item">

                			    <a class="pagination_btn" href="beuty-shop.php?<?php echo $getadress[1]?>&page=<?php echo $lastPage ?>" aria-label="Next"><div class="pagination-link-block"><p><img src="img/pagination-arrow-right.png"></p></div></a>    

                			</li>

                		<?php } ?>

                	  </ul>

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

	<script type="text/javascript">

		let check_block = "NULL";

		function openshopmenu(id) {

			let elemCount  = document.getElementsByClassName("shop-pos")[id].childElementCount;

			let ctg_quantity = document.getElementsByClassName('shop-pos').length;

			let shop_height = document.getElementsByClassName('shop-pos')[id].clientHeight;



			if (shop_height <= 0) {

				shop_height = elemCount * 110;	

				if (check_block != "NULL" && check_block != id) {

					document.getElementsByClassName('shop-pos')[check_block].animate([

					  // keyframes

					  { height: shop_height+"px" },

					  { height: '0px' }

					], {

					  // timing options

					  duration: 400,

					  iterations: 1,

					  fill: 'forwards'

					})	

					document.getElementsByClassName('shop-btn-img')[check_block].animate([

					  // keyframes

					  { transform: 'scale(1, -1)' },

					  { transform: 'scale(1, 1)' }

					], {

					  // timing options

					  duration: 200,

					  iterations: 1,

					  fill: 'forwards'

					})	

					check_block = id;

				}else{

					check_block = id;

				}

				document.getElementsByClassName('shop-pos')[id].animate([

				  // keyframes

				  { height: '0px' },

				  { height: shop_height+"px" }

				], {

				  // timing options

				  duration: 400,

				  iterations: 1,

				  fill: 'forwards'

				})	

				document.getElementsByClassName('shop-btn-img')[id].animate([

				  // keyframes

				  { transform: 'scale(1, 1)' },

				  { transform: 'scale(1, -1)' }

				], {

				  // timing options

				  duration: 400,

				  iterations: 1,

				  fill: 'forwards'

				})	



			}else{	

				document.getElementsByClassName('shop-pos')[id].animate([

				  // keyframes

				  { height: shop_height+"px" },

				  { height: '0px' }

				], {

				  // timing options

				  duration: 200,

				  iterations: 1,

				  fill: 'forwards'

				})	

				document.getElementsByClassName('shop-btn-img')[id].animate([

				  // keyframes

				  { transform: 'scale(1, -1)' },

				  { transform: 'scale(1, 1)' }

				], {

				  // timing options

				  duration: 200,

				  iterations: 1,

				  fill: 'forwards'

				})	

			}



				

			

			

		}

	</script>

</body>

</html>