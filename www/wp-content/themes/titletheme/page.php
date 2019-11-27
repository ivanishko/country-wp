<?php get_header();?>
<div class="wrap-container zerogrid">
	<h1><?php the_title(); ?></h1>
	<div id="main-content" class="col-2-3">
			<div class="wrap-col">
				<div class="wrap-content">
					<?php the_post(); ?>
					<?php the_content(); ?>
				</div>
			</div>

	</div>	
	<div id="sidebar" class="col-1-3">
		<?php get_sidebar();?>
	</div>
</div>
<?php get_footer();?>