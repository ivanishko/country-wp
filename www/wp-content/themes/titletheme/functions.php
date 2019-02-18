<?php
	
	define(G_THEME_ROOT, get_template_directory_uri());
	
	define(G_CSS_DIR, G_THEME_ROOT . '/assets/css/');
	define(G_JS_DIR,  G_THEME_ROOT . '/assets/js/');
	define(F_CSS_DIR, G_THEME_ROOT . '/assets/font-awesome/css/');
	define(F_IMG_DIR, G_THEME_ROOT . '/assets/images/');

	add_filter('widget_text', 'do_shortcode');
	add_filter('show_admin_bar' , '__return_false');

	add_action('wp_enqueue_scripts' , 'test_media');
	add_action('after_setup_theme' , 'test_after_setup');
	add_action('widgets_init' , 'test_widgets');
	
	add_shortcode('test_recent', 'threenews');
	add_shortcode('sportsnews_recent', 'threesportnews');

	add_theme_support( 'post-thumbnails' ); 

	function test_media(){
		wp_enqueue_style('test-main' , get_stylesheet_uri());
		
		wp_enqueue_style('font' , F_CSS_DIR . 'font-awesome.min.css');
		wp_enqueue_style('zerogrid' , G_CSS_DIR . 'zerogrid.css');	
		wp_enqueue_style('menu' , G_CSS_DIR . 'menu.css');	
		wp_enqueue_style('responsiveslides' , G_CSS_DIR . 'responsiveslides.css');

		wp_enqueue_script('jquery', G_JS_DIR . 'jquery183.min.js');
		wp_enqueue_script('jquerylatest', G_JS_DIR . 'jquery-latest.min.js');

		wp_enqueue_script('scripts', G_JS_DIR . 'script.js');
		wp_enqueue_script('responsiveslides', G_JS_DIR . 'responsiveslides.min.js');
		wp_enqueue_script('html5', G_JS_DIR . 'html5.js');
		wp_enqueue_script('css3-mediaquaries', G_JS_DIR . 'css3-mediaquaries.js');
		
	}





	function test_after_setup(){
		register_nav_menu('top','Для шапки');
		register_nav_menu('aside','Для правой колонки');
		register_nav_menu('footer','Для подвала');

		add_theme_support('post-thumbnails');
		add_theme_support('title-tag');
	}

	function test_widgets(){

		register_sidebar([
			'name' => 'Sidebar Right',
			'id' => 'sidebar-history',
			'description' => 'Правое меню Истории',
			'before_widget' => '<div class="widget %2$s">',
			'after_widget'  => "</div>\n"
		]);


		register_sidebar([
			'name' => 'Sidebar Right News',
			'id' => 'sidebar-news',
			'description' => 'Правая колонка',
			'before_widget' => '<div class="widget %2$s">',
			'after_widget'  => "</div>\n"
		]);


		register_sidebar([
			'name' => 'Sidebar Right SportNews',
			'id' => 'sidebar-sportsnews',
			'description' => 'Правая колонка спортивных новостей',
			'before_widget' => '<div class="widget %2$s">',
			'after_widget'  => "</div>\n"
		]);

        register_sidebar([
            'name' => 'Sidebar Right FootbalTable',
            'id' => 'sidebar-footbal',
            'description' => 'Правая колонка таблица',
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

	add_action( 'init', function(){
			register_post_type('sportsnews', array(
				'label'  => null,
				'labels' => array(
					'name'               => 'Новости спорта', // основное название для типа записи
					'singular_name'      => 'Спортивная новость', // название для одной записи этого типа
					'add_new'            => 'Добавить спортивную новость', // для добавления новой записи
					'add_new_item'       => 'Добавление спортивной новости', // заголовка у вновь создаваемой записи в админ-панели.
					'edit_item'          => 'Редактирование', // для редактирования типа записи
					'new_item'           => 'Новая запись', // текст новой записи
					'view_item'          => 'Смотреть', // для просмотра записи этого типа.
					'search_items'       => 'Искать', // для поиска по этим типам записи
					'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
					'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
					'parent_item_colon'  => '', // для родителей (у древовидных типов)
					'menu_name'          => 'Новости спорта', // название меню
				),
					'public'              => true,
					'show_ui'             => null, // зависит от public
					'menu_icon'           => 'dashicons-nametag', 
					'supports'            => array('title','editor','thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'	
					'has_archive'		  => true,		

			) );
		});


	add_action( 'init', function(){
			register_post_type('service', array(
				'label'  => null,
				'labels' => array(
					'name'               => 'Услуги', // основное название для типа записи
					'singular_name'      => 'Одна услуга', // название для одной записи этого типа
					'add_new'            => 'Добавить услугу', // для добавления новой записи
					'add_new_item'       => 'Добавление услуги', // заголовка у вновь создаваемой записи в админ-панели.
					'edit_item'          => 'Редактирование', // для редактирования типа записи
					'new_item'           => 'Новая запись', // текст новой записи
					'view_item'          => 'Смотреть', // для просмотра записи этого типа.
					'search_items'       => 'Искать', // для поиска по этим типам записи
					'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
					'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
					'parent_item_colon'  => '', // для родителей (у древовидных типов)
					'menu_name'          => 'Услуги', // название меню
				),
					'public'              => true,
					'show_ui'             => null, // зависит от public
					'menu_icon'           => 'dashicons-smiley', 
					'supports'            => array('title','thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'	
					'has_archive'		  => true,		

			) );
		});



	function getServices(){
		$args = array(
			'numberposts' => 33,
			'orderby'     => 'meta_value',
			'meta_key'	  => 'selectservices',
			'order'       => 'ASC',
			'post_type'   => 'service',
	);	
		$posts = [];
		foreach (get_posts($args) as $post) {
			$post = get_fields($post->ID);	
			//$post['img'] = get_the_post_thumbnail();		
			$posts[] = $post;	
		}
		return $posts;
	}


	function getServicesCat($field){
		$args = array(
			'numberposts' => 33,
			'orderby'     => 'date',
			'meta_value'  => $field,
			'meta_key'	  => 'selectservices',
			'order'       => 'DESC',
			'post_type'   => 'service',
	);	
		$posts = [];
		foreach (get_posts($args) as $post) {
			$post = get_fields($post->ID);	
			//$post['img'] = get_the_post_thumbnail();		
			$posts[] = $post;	
		}
		return $posts;
	}


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


	function getSportsNews(){
		$args = array(
			'numberposts' => 2,
			'orderby'     => 'date',
			'order'       => 'DESC',
			'post_type'   => 'sportsnews'
	);	
		
		global $post;
		foreach (get_posts($args)  as $post) {
			setup_postdata($post);
			
			//var_dump($post); 		

			$posts[] = $post;	
		}
		wp_reset_postdata();
		return $posts;
	}


	function threenews($atts){
		
		$atts = shortcode_atts( array(
			'cnt' => 3
		), $atts );
		

		$str = '';

		$args = array(
			'numberposts' => $atts['cnt'],
			'orderby'     => 'date',
			'order'       => 'DESC',
			'post_type'   => 'post',
	);	
		global $post;
		foreach (get_posts($args) as $post) {
			setup_postdata($post);

			$link = get_the_permalink();
			$img = get_the_post_thumbnail();
			$title = get_the_title();
			$dt = get_the_date();
			$intro = CFS()->get('intro');

		$str .= "<div class='post'>
								<a href=$link>$img</a>
								<div class='wrapper'>
								  <h5><a href='$link'>$title</a></h5>
								   <span>$dt</span>
								</div>
							</div>";
		}
		wp_reset_postdata(); 
		
		return $str;
	}

	function threesportnews($atts){
		
		$atts = shortcode_atts( array(
			'cnt' => 3
		), $atts );
		

		$str = '';

		$args = array(
			'numberposts' => $atts['cnt'],
			'orderby'     => 'date',
			'order'       => 'DESC',
			'post_type'   => 'sportsnews',
	);	
		global $post;
		foreach (get_posts($args) as $post) {
			setup_postdata($post);

			$link = get_the_permalink();
			$img = get_the_post_thumbnail();
			$title = get_the_title();
			$dt = get_the_date();
		

		$str .= "<div class='post'>
								<a href=$link>$img</a>
								<div class='wrapper'>
								  <h5><a href='$link'>$title</a></h5>
								   <span>$dt</span>
								</div>
							</div>";
		}
		wp_reset_postdata(); 
		
		return $str;
	}



















































?>