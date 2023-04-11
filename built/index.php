<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<!-- Name site title -->
	<title>Заправка и установка газгольдеров</title>
	<!-- Meta tag -->
	<meta name="author" content="">
	<meta name="description" lang="ru" content="">
	<meta name="keywords" lang="ru" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Load CSS Compiled-->
	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="libs/normalize/normalize.css">
	<link rel="stylesheet" href="libs/rangeslider/ion.rangeSlider.css">
	<link rel="stylesheet" href="css/fonts.min.css">
	<link rel="stylesheet" href="css/header.min.css">
	<link rel="stylesheet" href="css/main.min.css">
</head>

<body>

	<div id="preloader-page"><span class="svg-animate"></span></div>

	<header class="header" id="header">
		<div class="container">

			<?php include 'navigation-top.php'; ?>

			<div class="header-main">
				<div class="header-main-advantages">
					<h1 class="header-main-title header-main__title">Заправка и установка<br>газгольдеров</h1>
					<p class="header-main-subtitle header-main__subtitle">Мы лучшие потому что:</p>
					<div class="header-main-advantages__items">
						<div class="header-main-advantages__item">
							<img class="header-main-advantages__img" src="img/icons/icon-img1.svg" alt="Icon">
							<span class="header-main-advantages__text">Собственный,<br>современный парк<br>машин</span>
						</div>
						<div class="header-main-advantages__item">
							<img class="header-main-advantages__img" src="img/icons/icon-img2.svg" alt="Icon">
							<span class="header-main-advantages__text">Надежное европейское<br>оборудование</span>
						</div>
						<div class="header-main-advantages__item">
							<img class="header-main-advantages__img" src="img/icons/icon-img3.svg" alt="Icon">
							<span class="header-main-advantages__text">Длина заправочных<br>рукавов 50м</span>
						</div>
						<div class="header-main-advantages__item">
							<img class="header-main-advantages__img" src="img/icons/icon-img4.svg" alt="Icon">
							<span class="header-main-advantages__text">Сертифицированные<br>водители по системе<br>ДОПОГ</span>
						</div>
					</div>
				</div>
				<div class="header-main-calculator">
					<div class="header-main-calculator__content">
						<p class="header-main-calculator__title">Калькулятор</p>
						<div class="header-main-calculator__payment">
							<div class="header-main-calculator__indicators">
								<p class="header-main-calculator__value">Объём ёмкости
									<input id="input-range1" type="text" value="" name="my_range" class="js-range-slider1 header-main-calculator__input-range">
								</p>
								<p class="header-main-calculator__value">Объём заправки
									<input id="input-range2" type="text" value="" name="my_range" class="js-range-slider2 header-main-calculator__input-range">
								</p>
								<div class="header-main-calculator__inputs">
									<div class="header-main-calculator__inputs-number">
										<p class="header-main-calculator__value">Объём ёмкости
										</p>
										<input id="input-number1" type="number"	value="" placeholder="500" min="0" max="800" class="header-main-calculator__input-number">
									</div>
									<div class="header-main-calculator__inputs-text">
										<p class="header-main-calculator__value">Объём заправки
										</p>
										<input id="input-number2" type="number"	value="" placeholder="85" min="0" max="100" class="header-main-calculator__input-number">
									</div>
								</div>
								<div class="header-main-calculator__buttons">
									<p class="header-main-calculator__value">Удаленность от КАД</p>
									<div class="header-main-calculator__buttons-choice">
										<button id="up-to-100km" class="header-main-calculator__button header-main-calculator__button--checked">до 100 км</button>
										<button id="over-100km" class="header-main-calculator__button">свыше 100 км</button>
									</div>
								</div>
							</div>
							<div class="header-main-calculator__result">
								<p class="header-main-calculator__value">Стоимость</p>
								<div id="calculator-circle" class="calculator-circle">
									<div class="calculator-circle__values">
										<div class="calculator-circle__values-block">
											<p class="calculator-circle__value">0</p> РУБ.
										</div>
										<p class="calculator-circle__ratio"><span class="calculator-circle__price-liter">23</span> руб/литр</p>
									</div>
									<div class="calculator-circle__shadow">
									</div>
								</div>
							</div>
						</div>
						<img src="img/background/bg-shadow.svg" alt="Block-shadow">
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="navigation-main-block">
		<div class="container">
			<nav>
				<ul class="navigation-main">
					<li class="navigation-main__item">
						<a href="#" class="navigation-main__link navigation-main__link--active">Калькулятор</a>
					</li>
					<li class="navigation-main__item">
						<a href="#" class="navigation-main__link">Установка газогельдеров</a>
					</li>
					<li class="navigation-main__item">
						<a href="#" class="navigation-main__link">Котлы</a>
					</li>
					<li class="navigation-main__item">
						<a href="#" class="navigation-main__link">Доставка и заправка</a>
					</li>
					<li class="navigation-main__item">
						<a href="#" class="navigation-main__link">О компании</a>
					</li>
					<li>
						<a href="#" class="navigation-main__animation">
							<span class="navigation-main__animation--down navigation-main__animation--down-one">
								<img src="img/icons/arrow-animation.png" alt="Arrow animation">
							</span>
							<span class="navigation-main__animation--down navigation-main__animation--down-two">
								<img src="img/icons/arrow-animation.png" alt="Arrow animation">
							</span>
							<span class="navigation-main__animation--down navigation-main__animation--down-three">
								<img src="img/icons/arrow-animation.png" alt="Arrow animation">
							</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>

	<main>

		<section class="gas-delivery">
			<div class="container">
				<h1 class="main-title gas-delivery__main-title">Доставка газа любого объема</h1>
				<div class="gas-delivery__info">
					<div class="gas-delivery__content">
						<p class="gas-delivery__description">
							Мы предоставляем услуги заправки газгольдеров сжиженным углеводородным газом, известным как пропан-бутан. После согласования удобного для клиента времени осуществляется доставка газовой смеси. Углеводородный газ заправляется в газгольдер и доставляется высококвалифицированными специалистами, оснащенными всеми необходимыми приборами для контроля, измерения и слива газа, с соблюдением всех норм безопасности. Мы ценим наших клиентов и заботимся о качественной заправке и своевременной доставке газа в любую точку Санкт-Петербурга и Ленинградской области.
							<strong class="gas-delivery__description--strong">Производим заправку газгольдеров и минигазгольдеров - привезём газ от любого объёма.
							</strong>
						</p>
						<a href="#" class="button button--lg gas-delivery__button">Заказать заправку газа</a>
					</div>
					<img class="gas-delivery__icon-image" src="img/icons/gas-delivery-icon.svg" alt="Delivery icon">
				</div>
			</div>
			<img class="gas-delivery__bg-image" src="img/background/bg-img2.svg" alt="Bg image">
		</section>

		<section class="fueling-stages">
			<div class="container">
				<h1 class="main-title fueling-stages__main-title">Этапы заправки:</h1>
				<div class="fueling-stages__block">
					<div class="fueling-stages__content">
						<img class="fueling-stages__image" src="img/icons/fueling-stages-img.svg" alt="Fueling stages img">
						<div class="fueling-stages__item fueling-stages__one">
							<span class="fueling-stages__number">01</span>
							<p class="fueling-stages__text">Вы звоните нам</p>
						</div>
						<div class="fueling-stages__item fueling-stages__two">
							<span class="fueling-stages__number">02</span>
							<p class="fueling-stages__text">Мы обсуждаем детали</p>
						</div>
						<div class="fueling-stages__item fueling-stages__three">
						<span class="fueling-stages__number">03</span>
							<p class="fueling-stages__text">Наши логисты
							<span class="fueling-stages__text--small">продумывают лучший маршрут</span>
							</p>
						</div>
						<div class="fueling-stages__item fueling-stages__four">
							<span class="fueling-stages__number">04</span>
							<p class="fueling-stages__text">Наши специалисты
							<span class="fueling-stages__text--small">наши специалисты привозят<br>газ в назначенное время</span>
							</p>
						</div>
						<div class="fueling-stages__item fueling-stages__five">
							<span class="fueling-stages__number">05</span>
							<p class="fueling-stages__text">Вы оплачиваете
							<span class="fueling-stages__text--small">карта, наличка</span>
							</p>
						</div>
						<div class="fueling-stages__item fueling-stages__six">
							<span class="fueling-stages__number">06</span>
							<p class="fueling-stages__text">Мы ждём<br>вас снова</p>
						</div>
					</div>
					<a href="#" class="button button--lg fueling-stages__button">Заказать заправку газа</a>
				</div>
			</div>
		</section>


	</main>

	<footer class="footer" id="footer">
		<div class="container">
			
		</div>
	</footer>

	<!-- Load Scripts Start -->
	<script src="libs/jquery/jquery-3.3.1.min.js"></script>
	<script src="libs/rangeslider/ion.rangeSlider.min.js"></script>
	<script src="libs/circles/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
	<!-- Load Scripts End -->

</body>
</html>
