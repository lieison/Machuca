<form method="get" id="searchform" action="<?php echo esc_url( home_url() ); ?>/">
	<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
	<input id="type" name="post_type" value="post" type="hidden">
	<input type="submit"  class="hidden" id="searchsubmit" value="<?php _e('Search', EWF_SETUP_THEME_DOMAIN); ?>" />
</form>