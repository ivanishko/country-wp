<?php 
	
	if(is_active_sidebar('sidebar-history')): 	
		$pid = 126;
		//var_dump($pid);
		if (is_page( $pid )) {
			dynamic_sidebar('sidebar-history');
		}
		$anc = get_post_ancestors( $post->ID );
		foreach ( $anc as $ancestor ) {		
			if( is_page() && $ancestor == $pid ) {
				dynamic_sidebar('sidebar-history');
			}
		}	
	endif;

	if (is_category('news')):
		dynamic_sidebar('sidebar-sportsnews');
	endif;

	if (get_post_type()=='sportsnews'):
		dynamic_sidebar('sidebar-news');
	endif;
?>