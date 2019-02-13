<?php 
   	add_filter('show_admin_bar','__return_false');
 
	add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

	function theme_name_scripts() {
		wp_enqueue_style( 'theme', get_stylesheet_uri() );
		wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
	}

	//add_theme_support('post-thumbnails');

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


