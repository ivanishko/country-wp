<!doctype html>
<html <?php language_attributes(); ?>>
<?php wp_head(); ?>  

	<meta charset="<?php bloginfo('charset')?>">
	<title><?php the_title();?></title>
	

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   

  
</head>
<body>
<div class="wrap-body">

<!-- /////////////////////////////////////////Top -->
<div class="top">
	<div class="zerogrid">
		<div class="row">
			<div class="f-left">
				<span><i class="fa fa-map-marker"></i> Краснодарский край, Гулькевичский район, посёлок Гирей </span>
				<span><i class="fa fa-phone"></i> Код 8-861-222-22-22</span>
				<span><i class="fa fa-envelope"></i> girey.ru</span>
			</div>
			<div class="f-right">
				<span></span>
			</div>
		</div>
	</div>
</div>

<!--////////////////////////////////////Header-->
<header>
	<div class="wrap-header zerogrid">
		<div class="row">
			<div id="cssmenu">
				<?php 
							wp_nav_menu([
								'menu' => 'Меню сайта',
								'theme_location' => 'top',
								'container' => null,
								'items_wrap' => '<ul>%3$s</ul>'
							]);
						?>
			</div>
			<div class="title"><span>ПОСЁЛОК ГОРОДСКОГО ТИПА</span><a href='/' class="logo"><h2>ГИРЕЙ</h2></a></div>
		</div>
	</div>
</header>