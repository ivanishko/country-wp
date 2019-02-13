<?php
	
	add_filter('show_admin_bar','__return_false');

	add_action('wp_enqueue_scripts', 'test_media');
	add_action('after_setup_theme','test_after_setup');
	add_action('widgets_init', 'test_widgets');
	
	function test_media(){
		wp_enqueue_style('test-main', get_stylesheet_uri());

		wp_enqueue_script('test-script-main', get_template_directory_uri() . '/assets/js/script.js');
	}

	function test_after_setup(){
		register_nav_menu('top','Для шапки');
		register_nav_menu('footer','Для подвала');

		add_theme_support('post-thumbnails');
		add_theme_support('title-tag');
	}

	function test_widgets(){
		register_sidebar([
			'name' => 'Sidebar Right',
			'id' => 'sidebar-right',
			'description' => 'Правая колонка',
			'before_widget' => '<div class="widget %2$s">',
			'after_widget'  => "</div>\n"
		]);
		


		register_sidebar([
			'name' => 'Sidebar Top',
			'id' => 'sidebar-top',
			'description' => 'Странный пример',
			'before_widget' => '<div class="widget %2$s">',
			'after_widget'  => "</div>\n"
		]);
	}

	add_action( 'init', function(){
			register_post_type('sports', array(
				'label'  => null,
				'labels' => array(
					'name'               => 'Спортсмены', // основное название для типа записи
					'singular_name'      => 'Спортсмен', // название для одной записи этого типа
					'add_new'            => 'Добавить на доску', // для добавления новой записи
					'add_new_item'       => 'Добавление на доску', // заголовка у вновь создаваемой записи в админ-панели.
					'edit_item'          => 'Редактирование', // для редактирования типа записи
					'new_item'           => 'Новое', // текст новой записи
					'view_item'          => 'Смотреть', // для просмотра записи этого типа.
					'search_items'       => 'Искать', // для поиска по этим типам записи
					'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
					'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
					'parent_item_colon'  => '', // для родителей (у древовидных типов)
					'menu_name'          => 'Спортсмены', // название меню
				),
					'public'              => false,
					'show_ui'             => true, // зависит от public
					'menu_icon'           => 'dashicons-awards', 
					'supports'            => array('title') // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'			

			) );
		});

	function getSports(){
		$args = array(
			'numberposts' => 10,
			'orderby'     => 'meta_value',
			'meta_key'	  => 'sort',
			'order'       => 'ASC',
			'post_type'   => 'sports',
	);	

		$posts = [];

		foreach (get_posts($args) as $post) {
			$post = get_fields($post->ID);		

			$posts[] = $post;	
		}
		return $posts;
	}



?>