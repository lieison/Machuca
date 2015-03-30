<?php

/*
Template Name: Blog Page
*/


get_header(); 


	#	Get page settings - layout, sidebar, blog page
	#
	$page_data 						= array();
	$page_data['meta'] 				= get_post($page_data['blog']);
	
	$page_data['blog']				= ewf_get_page_relatedID();
	$page_data['spans'] 			= ewf_get_sidebarSizes();	
	$page_data['sidebar']			= ewf_get_sidebar_id('sidebar-page', $page_data['blog']);
	$page_data['layout'] 			= ewf_get_sidebar_layout("layout-sidebar-single-right", $page_data['blog'] );
	$page_data['page-posts'] 		= get_option('page_for_posts');
	$page_data['page-posts-items']	= get_option('posts_per_page');
	
	
	switch ($page_data['layout']){
	
		case "layout-sidebar-single-left": 
			echo '<div class="ewf-row">';
				echo '<div class="ewf-span'.$page_data['spans']['sidebar'].'">';
					dynamic_sidebar($page_data['sidebar']);
				echo '</div>';
				echo '<div class="ewf-span'.$page_data['spans']['content'].'">';
				
					if ($page_data['page-posts'] == $page_data['blog']){ 
						echo apply_filters('the_content',$page_data['meta']->post_content);
					}
					
					echo do_shortcode('[blog '.$page_data['page-posts-items'].' sidebar="true" ]');
						
				echo '</div>';
			echo '</div>';
			break;
	
		case "layout-sidebar-single-right": 
			echo '<div class="ewf-row">';
				echo '<div class="ewf-span'.$page_data['spans']['content'].'">';

					if ($page_data['page-posts'] == $page_data['blog']){ 
						echo apply_filters('the_content',$page_data['meta']->post_content);
					}
					
					echo do_shortcode('[blog '.$page_data['page-posts-items'].' sidebar="true" ]');
					
				echo '</div>';
				echo '<div class="ewf-span'.$page_data['spans']['sidebar'].'">';
					dynamic_sidebar($page_data['sidebar']);
				echo '</div>';
			echo '</div>';
			break; 
	
		case "layout-full": 
			echo '<div class="ewf-row">';
				echo '<div class="span12">';
			
					if ($page_data['page-posts'] == $page_data['blog']){ 
						echo apply_filters('the_content',$page_data['meta']->post_content);
					}
					
					echo do_shortcode('[blog '.$page_data['page-posts-items'].']');

				echo '</div>';
			echo '</div>';
	}
	
?>

<?php

	//	Debug info
	//
	ewf_debug($page_data);
	
?>
	
<?php	get_footer();  ?>