<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title><?php the_title(); ?></title>
	<?php 	wp_head();	?>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body>
	
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

	

































	<?php wp_footer();?>
</body>
</html>