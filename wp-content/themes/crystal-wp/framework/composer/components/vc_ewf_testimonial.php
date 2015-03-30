<?php

	add_shortcode( 'ewf-testimonial', 'ewf_vc_testimonial' );
	
	
	function ewf_vc_testimonial( $atts, $content ) {
	   extract( shortcode_atts( array(
		  'image_id' => 0,
		  'image_url' => null,
		  'name' => __("Sample Name", EWF_SETUP_THEME_DOMAIN),
		  'description' => __("Client", EWF_SETUP_THEME_DOMAIN),
		  'css' => null
	   ), $atts ) );
	   
	   $class_extra = null;
	   
		if ($image_id){
			$image_url = wp_get_attachment_image_src($image_id, 'large'); 
			$image_url = $image_url[0]; 
		}else{
			$class_extra = 'class="no-image"';
		}
	   
	   
		ob_start();
		
		echo '<div class="testimonial fixed '.$css.'">';
			
			if ($image_id){
				echo '<img src="'.$image_url.'" alt="'.$image_id.'" />';
			}
			
			echo '<blockquote '.$class_extra.'>'; 		
				echo '<h5>'.$name.', '.$description.'</h5>';
				
				echo '<p>';
					echo $content;
				echo '</p>';
			echo '</blockquote>';
						
		echo '</div><!-- end .testimonial -->';
		
		return ob_get_clean();
	}

	
	vc_map( array(
	   "name" => __("Testimonial", EWF_SETUP_THEME_DOMAIN),
	   "base" => "ewf-testimonial",
	   "class" => "",
	   "icon" => "icon-wpb-ewf-testimonial",
	   "description" => __("Add a quote, image and description", EWF_SETUP_THEME_DOMAIN),  
	   "category" => __('Typography', EWF_SETUP_THEME_DOMAIN),
	   "params" => array(
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => __("Image", EWF_SETUP_THEME_DOMAIN),
				"param_name" => "image_id",
				"description" => __("Add an image to the right side of the testimonial", EWF_SETUP_THEME_DOMAIN)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Name", EWF_SETUP_THEME_DOMAIN),
				"param_name" => "name",
				"value" => __("Sample Name", EWF_SETUP_THEME_DOMAIN),
				"description" => __("Specify the the name of the testimonial author", EWF_SETUP_THEME_DOMAIN)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Description", EWF_SETUP_THEME_DOMAIN),
				"param_name" => "description",
				"value" => __("Description", EWF_SETUP_THEME_DOMAIN),
				"description" => __("Specify a description of the author", EWF_SETUP_THEME_DOMAIN)
			),
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => __("Testimonial", EWF_SETUP_THEME_DOMAIN),
				"param_name" => "content",
				"value" => null,
				"description" => __("Specify the text of the testimonial", EWF_SETUP_THEME_DOMAIN)
			)
	   )
	));


?>