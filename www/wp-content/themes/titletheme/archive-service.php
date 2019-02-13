<?php get_header(); ?>
 



<div class="wrap-container zerogrid">
	<h1>УСЛУГИ</h1>
	<div id="main-content" class="col">
			<div class="wrap-col">
				<div class="wrap-content">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="col-1-3 item item-service">
							<div class="art-header"><?php the_post_thumbnail() ?></div>
							<div class="art-content">
								<h3><?php the_title();?></h3>

							<div class="info"><?php the_field('phone1')?></div>

							<?php if(get_field('phone2')): ?>
								<div class="info"><?php the_field('phone2')?></div>
							<?php endif; ?>
							
							<?php if(get_field('linkinsta')): ?>
								<div class="info">Ссылка в инстаграм: <a href="http://instagram.com/<?php the_field('linkinsta')?>" target=_blank rel="nofollow">@<?php the_field('linkinsta')?></a></div>
							<?php endif;  ?>
							</div>
						</div>
					<?php endwhile; else: ?>
					<p><?php _p('Публикации не найдены'); ?></p>
				<?php endif; ?>
				<?php the_posts_pagination() ?>
				</div>
			</div>
		</div>
	</div>






<?php get_footer(); ?>