<section class="part">
			<div class="container">
				<div class="part__body">
					<div class="title_main">
						<p>Náš partner</p>
					</div>
					<div class="part__text">
						<p><?php the_field('text3');?></p>
						<p><?php the_field('text3');?></p>
						<p><?php the_field('text3');?></p>
					</div>
					<div class="part__download">
						<a href="<?php the_field('pdf');?>" download="">
							<img src="<?php echo get_template_directory_uri (); ?>/image/pdf.png" alt="">
						</a>
						<p>
							<a style="color:white;" href="<?php echo get_template_directory_uri (); ?>/source/cena.pdf" download="" >Produkt Grass </a> 
						</p>
						
						<a href="source/01.02.21 Cennik GRASS Autoumyvaren.pdf" download="">
							<img src="<?php echo get_template_directory_uri (); ?>/image/download.png" alt="">
						</a>					

					</div>
					<div class="part__logo">
						<img src="<?php echo get_template_directory_uri (); ?>/image/grass.png" alt="">
					</div>
				</div>
			</div>
		</section>