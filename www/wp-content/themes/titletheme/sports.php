<?php

/**
* Template Name: Доска спорта
 */

get_header(); ?>
<div class="wrap-container zerogrid">

	<h1><?php the_title();?></h1>
	<div class="row">	
		<?php foreach (getSports() as $post):?>
		<div class="col-1-4 sports">	
			<div class="item t-center">
				<div class="item-container">
						<div class="item-caption">
							<div class="item-caption-inner">
								<div class="item-caption-inner1">
									<span class="user-social"><?php echo $post['regal']; ?></span>
								</div>
							</div>
						</div>
						<img src="<?php echo $post['photo'] ?>" style="height: 300px; width: auto ">
				</div>
				<div class="item-content">
					<h3><?php echo $post['lastname'] ?> <?php echo $post['firstname'] ?></h3>
					<p><?php echo $post['zvanie']; ?></p>
				</div>
			</div>
		</div>	
	<?php endforeach; ?>


	</div>
</div>
<?php get_footer(); ?>