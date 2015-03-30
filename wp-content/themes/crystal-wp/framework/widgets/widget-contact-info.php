<?php 



	class ewf_widget_contact_info extends WP_Widget {

		function ewf_widget_contact_info() {
			$widget_ops = array( 'classname' => 'ewf_widget_contact_info', 'description' => __('A widget that displays brochure item', EWF_SETUP_THEME_DOMAIN) );
			$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'ewf_widget_contact_info' );
			$this->WP_Widget( 'ewf_widget_contact_info', __('EWF - Contact Info', EWF_SETUP_THEME_DOMAIN), $widget_ops, $control_ops );
		}
		


		function widget( $args, $instance ) {
			extract( $args );
			global $post;

		#	Data Validation
		#
			$title 		= esc_html( apply_filters('widget_title', $instance['title']) );
			$address 	= esc_html($instance['address']);
			$email 		= esc_html( $instance['email'] );
			$phone 		= esc_html( $instance['phone'] );


			echo $before_widget;

			if ( $title ) 
				echo $before_title . $title . $after_title;
			
			
			echo '<ul>';
				
				if ($address){
					echo '<li><i class="ifc-home"></i>'.$address.'</li>';
				}	
				
				if ($phone){
					echo '<li><i class="ifc-phone1"></i>'.$phone.'</li>';
				}
				
				if ($email){
					echo '<li><i class="ifc-message"></i>'.$email.'</li>';
				}			
				
			echo '</ul>';
			

			
			echo $after_widget;
		}
	 
		
		function update( $new_instance, $old_instance ) {
			$instance = $old_instance;


		#	Data Validation
		#
			$instance['title'] 		= sanitize_text_field($new_instance['title']);
			$instance['address'] 	= sanitize_text_field($new_instance['address']);
			$instance['email'] 		= sanitize_email($new_instance['email']);
			$instance['phone'] 		= sanitize_text_field($new_instance['phone']);

			return $instance;
		}
		 

		function form( $instance ) {
			$defaults = array( 'title' => __(null , EWF_SETUP_THEME_DOMAIN), 'address' => null, 'email' => null, 'phone' => null);
			$instance = wp_parse_args( (array) $instance, $defaults ); 


		#	Data Validation
		#
			$instance['title'] 		= esc_html($instance['title']);
			$instance['address'] 	= esc_html($instance['address']);
			$instance['email'] 		= esc_html($instance['email']);
			$instance['phone'] 		= esc_html($instance['phone']);
			
			?>
			
			<div class="ewf-meta">
				<p>
					<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', EWF_SETUP_THEME_DOMAIN); ?></label>
					<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
				</p>

				<p>
					<label for="<?php echo $this->get_field_id( 'address' ); ?>"><?php _e('Address:', EWF_SETUP_THEME_DOMAIN); ?></label>
					<input id="<?php echo $this->get_field_id( 'address' ); ?>" name="<?php echo $this->get_field_name( 'address' ); ?>" value="<?php echo $instance['address']; ?>" style="width:100%;" />
				</p>
				
				<p>
					<label for="<?php echo $this->get_field_id( 'email' ); ?>"><?php _e('E-mail:', EWF_SETUP_THEME_DOMAIN); ?></label>
					<input id="<?php echo $this->get_field_id( 'email' ); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>" value="<?php echo $instance['email']; ?>" style="width:100%;" />
				</p>
				
				<p>
					<label for="<?php echo $this->get_field_id( 'phone' ); ?>"><?php _e('Phone:', EWF_SETUP_THEME_DOMAIN); ?></label>
					<input id="<?php echo $this->get_field_id( 'phone' ); ?>" name="<?php echo $this->get_field_name( 'phone' ); ?>" value="<?php echo $instance['phone']; ?>" style="width:100%;" />
				</p>
			</div>
			
		<?php
		}
	}


?>