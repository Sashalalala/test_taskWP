<?php
get_header(); ?>

	<section class="main-content page-width">
	
	<div class="page-description">
		<?php
		
		while ( have_posts() ) : the_post();
			
		the_content();

		endwhile;

		?>
	</div>
		<div class="image-part">
			


			<div class="image-info-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/image1.png" alt="" class="info-image">
				<div class="image-slogan">
					<div class="slogan-header">
						Lorem ipsum dolor sit amet, consecte&shy;tur adipiscing elit, sed do eiusmod tempor incididunt ut
					</div>
					<div class="slogan-text">
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est labo&shy;rum.						
					</div>
				</div>
			</div>
			<div class="image-info-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/image2.png" alt="" class="info-image">
				<div class="image-slogan">
					<div class="slogan-header">
						Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium
					</div>
					<div class="slogan-text">
						Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos 						
					</div>
				</div>
			</div>
			<div class="image-info-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/image3.png" alt="" class="info-image">
				<div class="image-slogan">
					<div class="slogan-header">
						But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system
					</div>
					<div class="slogan-text">
						But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?
					</div>
				</div>
			</div>
			<div class="image-info-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/image4.png" alt="" class="info-image">
				<div class="image-slogan">
					<div class="slogan-header">
						At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum 
					</div>
					<div class="slogan-text">
						Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat 						
					</div>
				</div>
			</div>
			<div class="image-info-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/image5.png" alt="" class="info-image">
				<div class="image-slogan">
					<div class="slogan-header">
						On the other hand, we denounce with righteous indignation and dislike men who are so beguiled
					</div>
					<div class="slogan-text">
						These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled				
					</div>
				</div>
			</div>

		</div>

		<div class="bottom-description">
			<div class="desc-text">
				Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.
			</div>
			<div class="button default-button">
				Default button
			</div>
		</div>
	</section>

<?php get_footer(); ?>