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

	if (is_category('news') || (is_page('116'))):
		dynamic_sidebar('sidebar-sportsnews');
	endif;


	if (get_post_type()=='sportsnews' || get_post_type()=='post'):
		dynamic_sidebar('sidebar-news');
	endif;

	if (is_page('134')):
	    dynamic_sidebar('sidebar-footbal');
	endif;
?>