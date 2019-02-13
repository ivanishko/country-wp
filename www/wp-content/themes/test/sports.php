<?php

/**
* Template Name: Доска спорта
 */

get_header(); ?>

<div class="container">
	<h1 class="woocommerce-products-header__title "><?php the_title();?></h1>
	<div class="row">
		
		<?php foreach (getSports() as $post):?>
		<div class="col-lg-4 sports">	
			<div class="photo"><img src="<?php echo $post['photo'] ?>"></div>
			<div class="age"></div>
			<div class="name">
				<h2><?php echo $post['lastname'] ?></h2>
			</div>
			<div class="name">
				<h2><?php echo $post['firstname'] ?></h2>
			</div>
			<div class="zvanie">
				<h4><?php echo $post['zvanie']; ?></h4>
			</div>
			<p>

				<?php echo $post['regal']; ?>
			</p>
		</div>	
	<?php endforeach; ?>


	</div>
</div>

<?php get_footer(); ?>