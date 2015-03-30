<?php 



	class ewf_widget_flickr extends WP_Widget {

		function ewf_widget_flickr() {
			$widget_ops = array( 'classname' => 'ewf_widget_flickr', 'description' => __('A widget that displays brochure item', EWF_SETUP_THEME_DOMAIN) );
			$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'ewf_widget_flickr' );
			$this->WP_Widget( 'ewf_widget_flickr', __('EWF - Flickr', EWF_SETUP_THEME_DOMAIN), $widget_ops, $control_ops );
		}
		


		function widget( $args, $instance ) {
			extract( $args );
			global $post;

		#	Data Validation
		#
			$title 			= esc_html ( apply_filters('widget_title', $instance['title'] ) );
			$gallery_id 	= esc_html( $instance['gallery_id'] );
			$gallery_items 	= intval( $instance['gallery_items'] );
			
			if ($gallery_items <= 0 ){ $gallery_items = 9; }
			
			echo $before_widget;

			if ( $title ) {
				echo $before_title . $title . $after_title;
			}
			
				
			if ($gallery_id){
				echo '<div id="flickr-feed">';
					echo '<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count='.$gallery_items.'&display=latest&size=s&layout=x&source=user&user='.$gallery_id.'"></script>';
				echo '</div>';
			}
			
			echo $after_widget;
		}
	 
		
		function update( $new_instance, $old_instance ) {
			$instance = $old_instance;
			
		#	Data Validation
		#
			$instance['title'] 			= sanitize_text_field( $new_instance['title'] );
			$instance['gallery_id'] 	= sanitize_text_field( $new_instance['gallery_id'] );
			$instance['gallery_items'] 	= intval( $new_instance['gallery_items'] );

			return $instance;
		}
		

		function form( $instance ) {
			$defaults = array( 'title' => __(null , EWF_SETUP_THEME_DOMAIN), 'gallery_items' => 9, 'gallery_id' => 0 );
			$instance = wp_parse_args( (array) $instance, $defaults ); 
			
		#	Data Validation
		#
			$instance['title'] 			= esc_html($instance['title']);
			$instance['gallery_id'] 	= esc_html($instance['gallery_id']);
			$instance['gallery_items'] 	= intval($instance['gallery_items']);
			
			?>
			
			<div class="ewf-meta">
				<p>
					<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', EWF_SETUP_THEME_DOMAIN); ?></label>
					<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
				</p>
				
				<p>
					<label for="<?php echo $this->get_field_id( 'gallery_id' ); ?>"><?php _e('Gallery or User ID:', EWF_SETUP_THEME_DOMAIN); ?></label>
					<input id="<?php echo $this->get_field_id( 'gallery_id' ); ?>" name="<?php echo $this->get_field_name( 'gallery_id' ); ?>" value="<?php echo $instance['gallery_id']; ?>" style="width:100%;" />
				</p>
				<p>You can find the <strong>Flickr ID</strong> on <a href="http://idgettr.com/" target="_blank">http://idgettr.com/</a></p>
				
				<p>
					<label for="<?php echo $this->get_field_id( 'gallery_items' ); ?>"><?php _e('Number of items:', EWF_SETUP_THEME_DOMAIN); ?></label>
					<input id="<?php echo $this->get_field_id( 'gallery_items' ); ?>" name="<?php echo $this->get_field_name( 'gallery_items' ); ?>" value="<?php echo $instance['gallery_items']; ?>" style="width:100%;" />
				</p>
				
			</div>
 
		<?php
		}
	}


?>