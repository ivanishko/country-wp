<?php get_header(); ?>



<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div id="main-content" class="col-2-3">
			<div class="wrap-col">
				<div class="wrap-content">
					<?php the_post(); ?>
					<article>
						<div class="art-header">					
						<?php the_post_thumbnail('large') ?>
						</div>
						<div class="art-content">
							<h3 style="font-size: 37px; line-height: 1.5;"><?php the_title() ?></h3>
							<div class="info">Опубликовано:<?php the_date(); ?> в: <a href="#"><?php the_category(); ?></a></div>
							<div class="excerpt">
								<?php the_content() ?>
						</div>
					</article>
				</div>
			</div>
		</div>
		<div id="sidebar" class="col-1-3">
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>


<?php get_footer(); ?>