<?php
/*
 Template Name: О нас
*/
?>
<?php
	get_header();
	
?>

<?php
	require('call.php');
?>
<section class="map">
			<div class="container">
				<div class="map__body">
					<div class="title_main">
						<p>Kde nás nájdete </p>
					</div>
					<div class="map__main">
						<div class="map__info">
							<div>
								<div class="map__title">
									<p>Sme tu </p>
									<img src="<?php echo get_template_directory_uri (); ?>/image/hend.png" alt="">
								</div>
								<div class="map__text">
									<img src="<?php echo get_template_directory_uri (); ?>/image/point.png" alt="">
									<p>Bajkalská 16098, 821 02, Bratislava</p>								
								</div>
								<div class="map__kart__body">
									<img src="<?php the_field('cart-img'); ?>" alt="">	
									<div class="map__kart-text">pozrieť foto <img class="arrow" src="<?php echo get_template_directory_uri (); ?>/image/Arrow).png" alt=""></div>
<!-- 									<?php echo get_template_directory_uri (); ?>/image/kart3.png -->
								</div>
							</div>
						</div>
						<div class="map__map">
							<div class="map__poster">
								<p>Pozrieť mapu</p>
							</div>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2661.4631452224367!2d17.142522415649793!3d48.15915437922525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c8ecd99d6a6bd%3A0x1e844b97c36e8747!2zQmFqa2Fsc2vDoSAxNjA5OCwgODIxIDAyIEJyYXRpc2xhdmEsINCh0LvQvtCy0LDQutC40Y8!5e0!3m2!1sru!2sru!4v1616425648884!5m2!1sru!2sru" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" ></iframe>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="info">
			<div class="container">
				<div class="info__body">
					<div class="title_main">
						<p>Zavolajte nám</p>
					</div>
					<div class="info_slider">
						<span></span>
						<div class="slider__item">
							<img src="<?php the_field('cart-slider1'); ?>" alt="">
						</div>
						<div class="slider__item">
							<img src="<?php the_field('cart-slider2'); ?>" alt="">
						</div>
						<div class="slider__item">
							<img src="<?php the_field('cart-slider3'); ?>" alt="">
						</div>
						<div class="slider__item">
							<img src="<?php the_field('cart-slider4'); ?>" alt="">
						</div>
						<div class="slider__item">
							<img src="<?php the_field('cart-slider5'); ?>" alt="">
						</div>
						<div class="slider__item">
							<img src="<?php the_field('cart-slider6'); ?>" alt="">
						</div>
						<div class="slider__item">
							<img src="<?php the_field('cart-slider7'); ?>" alt="">
						</div>
					</div>
					<div class="info__text">
						<p><?php the_field('slider-text1'); ?></p>
						<span></span>
						<p><?php the_field('slider-text2'); ?></p>
						<span></span>
						<p><?php the_field('slider-text3'); ?></p>
						<p><?php the_field('slider-text4'); ?></p>
						<ul>
							<li><?php the_field('slider-text4.1'); ?><img src="<?php echo get_template_directory_uri (); ?>/image/Arrow4.png" alt=""></li>
							<li><?php the_field('slider-text4.2'); ?><img src="<?php echo get_template_directory_uri (); ?>/image/Arrow4.png" alt=""></li>
							<li><?php the_field('slider-text4.3'); ?><img src="<?php echo get_template_directory_uri (); ?>/image/Arrow4.png" alt=""></li>							
						</ul>
						<span></span>
						<p><?php the_field('slider-text5'); ?>
						</p>
						<p>Napíšte alebo príďte sa presvedčiť osobne  <a style="color: #3A9A47;">MasterClean</a></p>
					</div>
					<div class="info__bottom">
						<p>Získajte všetky potrebné pre Vás služby (Ručne umytie, leštenie, čistenie interiérov, tepovanie, čistenie, keramika atď.) </p>
						<p>Viac informácií o službách <a href="http://master-clean.sk/sluzba/" style="color: #3A9A47;">nájdete tu</a></p>
					</div>
				</div>
			</div>
		</section>
<?php
	get_footer();
?>