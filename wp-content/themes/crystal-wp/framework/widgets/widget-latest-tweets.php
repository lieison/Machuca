<?php 



	class ewf_widget_latest_tweets extends WP_Widget {

		function ewf_widget_latest_tweets() {
			$widget_ops = array( 'classname' => 'ewf_widget_latest_tweets', 'description' => __('A widget that displays latest tweets from a specified account', EWF_SETUP_THEME_DOMAIN) );
			$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'ewf_widget_latest_tweets' );
			$this->WP_Widget( 'ewf_widget_latest_tweets', __('EWF - Latest Tweets', EWF_SETUP_THEME_DOMAIN), $widget_ops, $control_ops );
		}
		


		function widget( $args, $instance ) {
			extract( $args );
			global $post;

		#	Data Validation
		#
			$title 		= esc_html( apply_filters('widget_title', $instance['title'] ));
			$account 	=  esc_html( $instance['account'] ); 
			$items 		=  intval( $instance['items'] ); 
			
			if (!$items) { $items = 2; }
		
		echo $before_widget;
		
			if ( $title ){
				echo $before_title . $title . $after_title;
				}
			
			if ( $account ){
				echo '<div class="ewf-tweet-list" data-items="'.$items.'" data-account-id="'.$account.'"></div><!-- end #tweet -->';
				}
			
			echo $after_widget;
		}
	 
		
		function update( $new_instance, $old_instance ) {
			$instance = $old_instance;
		
		#	Data Validation
		#
			$instance['title'] 		= sanitize_text_field( $new_instance['title'] );
			$instance['items'] 		= intval( $new_instance['items'] );
			$instance['account'] 	= sanitize_text_field( $new_instance['account'] );

			return $instance;
		}
		

		function form( $instance ) {
			$defaults = array( 'title' => __(null , EWF_SETUP_THEME_DOMAIN), 'account' => null, 'items' => 3 );
			$instance = wp_parse_args( (array) $instance, $defaults ); 
			
		#	Data Validation
		#
			$instance['title'] 		= esc_html( $instance['title'] );
			$instance['account'] 	= esc_html( $instance['account'] );
			$instance['items'] 		= intval( $instance['items'] );
			
			?>
			<div class="ewf-meta">
				<p>
					<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', EWF_SETUP_THEME_DOMAIN); ?></label>
					<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
				</p>
				
				<p>
					<label for="<?php echo $this->get_field_id( 'account' ); ?>"><?php _e('Twitter ID:', EWF_SETUP_THEME_DOMAIN); ?></label>
					<input id="<?php echo $this->get_field_id( 'account' ); ?>" name="<?php echo $this->get_field_name( 'account' ); ?>" value="<?php echo $instance['account']; ?>" style="width:100%;" />
				</p>
				
				<p>
					<label for="<?php echo $this->get_field_id( 'items' ); ?>"><?php _e('How many post to show:', EWF_SETUP_THEME_DOMAIN); ?></label>
					<select id="<?php echo $this->get_field_id( 'items' ); ?>" name="<?php echo $this->get_field_name( 'items' ); ?>" style="width:100%;">
					<?php
						
						for($i = 1; $i <= 5; $i++){
							#$instance['items']
							
							if ($i == $instance['items']){
								echo '<option  selected="selected">'.$i.'</option>';
							}else{
								echo '<option>'.$i.'</option>';
							}
						}

					?>
					</select>
				</p>
				
				<ul>
					<li>* ### HOW TO CREATE A VALID ID TO USE: ###</li>
					<li>* Go to www.twitter.com and sign in as normal, go to your settings page.</li>
					<li>* Go to "Widgets" on the left hand side.</li>
					<li>* Create a new widget for what you need eg "user time line" or "search" etc.</li>
					<li>* Feel free to check "exclude replies" if you don't want replies in results.</li>
					<li>* Now go back to settings page, and then go back to widgets page and</li>
					<li>* you should see the widget you just created. Click edit.</li>
					<li>* Look at the URL in your web browser, you will see a long number like this:</li>
					<li>* 440384536610734080</li>
					<li>* Use this as your ID below instead!</li>
				</ul>

			</div>
 
		<?php
		}
	}


?>