<?php get_header(); ?>
 



<div class="wrap-container zerogrid">
	<h1>УСЛУГИ</h1>
	
			<?php 	$field = ['Красота и здоровье','Одежда и обувь','Отдых и развлечения', 'Связь'];
				//var_dump($field) ?>
		

		<div id="main-content" class="col">	
			<?php foreach ($field as $f):  ?>
				<div class="sub-title"><h2 class="service-title"><?php echo $f; ?></h2></div>
				<?php foreach (getServicesCat($f) as $post ): ?>		
					<div class="col-1-3 item item-service">
							<div class="art-header"><?php $post['img'] ?></div>
							<div class="art-content">
							<h3 class="service-title"><?php echo $post['title'];?></h3>
							<em><?php echo $post['contentservice'];?></em>
							
							<div class="info"><?php echo $post['phone1']?></div>

							<?php if($post['phone2']): ?>
								<div class="info"><?php echo $post['phone2']?></div>
							<?php endif; ?>
							
							<?php if($post['linkinsta']): ?>
								<div class="info">Ссылка в инстаграм: <a href="https://www.instagram.com/<?php echo $post['linkinsta']?>/" target=_blank rel="nofollow">@<?php echo $post['linkinsta']?></a></div>
							<?php endif;  ?>
							<?php if($post['vk']): ?>
								<div class="info">Ссылка ВК: <a href="https://www.vk.com/<?php echo $post['vk']?>" target=_blank rel="nofollow">@<?php echo $post['vk']?></a></div>
							<?php endif;  ?>
                                <?php if($post['site']): ?>
                                    <div class="info">Сайт: <a href="<?php echo $post['site']?>" target=_blank rel="nofollow"><?php echo $post['site']?></a></div>
                                <?php endif;  ?>
							</div>
					</div>		
		<?php	endforeach; ?>
	<div style="clear:both"></div>
		<?php	endforeach; ?>	
</div>
    <a href="/addservice">Добавиться на эту страницу</a>
</div>





<?php get_footer(); ?>