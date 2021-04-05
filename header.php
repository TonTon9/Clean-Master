<!DOCTYPE html>
<html>
<head>	
	<title>Master Clean - Umývanie Auta</title>
	<meta charset="utf-8">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri (); ?>/css/style.css">
	<meta name="viewport" content="width=device-width">
	<link rel="SHORTCUT ICON" href="<?php echo get_template_directory_uri (); ?>/logo2.ico" type="image/x-icon">
	<meta name="google-site-verification" content="YP5x2SpcJmxaDOqqwvN2rc2VvEKO76nyYt0zMOx572I" />
</head>
<body id="top">
	<div class="wrapper">
		<div class="up">
			<a href="#top"><img src="<?php echo get_template_directory_uri (); ?>/image/up.png" alt=""></a>
		</div>
		<div class="call1">
			<div class="call__pole"></div>
			<div class="call__box">
				<a href="tel:<?php the_field('Phone'); ?>">По телефону</a>
			</div>
		</div>
		<div class="img">
			<div class="img__exit"></div>
			<img class="cart_car" src="<?php the_field('cart-img'); ?>" alt="">			
		</div>
		<header class="header">
			<img class="fon1" src="<?php echo get_template_directory_uri (); ?>/image/s_bg.png" alt="">
			<img class="fon2" src="<?php echo get_template_directory_uri (); ?>/image/car_bg.png" alt="">
			<div class="container">
				<div class="header_bur">
					<span></span>
				</div>
				<div class="header__logo__bur">
					<a href="http://master-clean.sk"><img src="<?php echo get_template_directory_uri (); ?>/image/logo.png" alt=""></a>
				</div>
				<div class="header__header">
					<div class="header__body">
						<div class="header__logo">
							<a href="http://master-clean.sk"><img src="<?php echo get_template_directory_uri (); ?>/image/logo.png" alt=""></a>							
						</div>
						<div class="header__manu">
							<ul>
								<li><a href="http://master-clean.sk">O nás</a></li>
								<li><a href="http://master-clean.sk/sluzba/">Služba</a></li>
								<li><a href="http://master-clean.sk/nas-partner/">Náš partner</a></li>
							</ul>
						</div>
						<div class="header__right">
							<div class="header__right-item">
								<a href="https://www.facebook.com/masterclean.bratislava/"><img src="<?php echo get_template_directory_uri (); ?>/image/facebook.png" alt=""></a>
								
							</div>
							<div class="header__right-item">
								<a href="https://www.instagram.com/p/CLx_PF1lusa/?igshid=vlm1hwlmj82j"><img src="<?php echo get_template_directory_uri (); ?>/image/instagram.png" alt=""></a>
								
							</div>
							<div class="header__phone">
								<a href="tel:<?php the_field('Phone'); ?>">
									<p><?php the_field('Phone'); ?></p>
								</a>
							</div>
						</div>
					</div>
					
					
				</div>
				<div class="header__main">
					<div class="header__pole">
						<div class="header__title">
							<?php the_field('slogan1'); ?><br><?php the_field('slogan2'); ?><br><?php the_field('slogan3'); ?>
						</div>
						<div class="header__button__pole">
							<div class="header__button header__button_1"><p>Zavolajte nám </p> </div>
							<a href="http://master-clean.sk/uvodna-stranka/"><div class="header__button header__button_2"><p>O NÁS</p></div></a>
						</div>
					</div>
					<div class="header__kart">
						<div class="header__kart_ob header__kart_1">
							<img src="<?php echo get_template_directory_uri (); ?>/image/cart1.png" alt="">	
							<a href="http://master-clean.sk/sluzba/#cost__hand"><div class="header__kart-title">Мойка<img class="arrow" src="<?php echo get_template_directory_uri (); ?>/image/Arrow).png" alt=""></div></a> 
							
						</div>
						<div class="header__kart_ob header__kart_2">
							<img src="<?php echo get_template_directory_uri (); ?>/image/cart2.png" alt="">	
							<a href="http://master-clean.sk/sluzba/#cost__him"><div class="header__kart-title">Химчистка<img class="arrow" src="<?php echo get_template_directory_uri (); ?>/image/Arrow).png" alt=""></div></a> 
							
						</div>	
					</div>
				</div>
				<div class="header__down">
					<a href="#bottom">
						<div class="header__down_item">
							<p>Doplňujúce informácie</p>
							<img class="down" src="<?php echo get_template_directory_uri (); ?>/image/Arrow 3.png" alt="">
						</div>
					</a>
					
					
				</div>
			</div>

		</header>