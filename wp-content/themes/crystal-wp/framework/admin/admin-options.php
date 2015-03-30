<?php

	
	$ewf_admin_defaults = array(
		
		
	#	General typography
	#
		'body_font_size' 			=> '13px',
		'body_font_lineheight' 		=> '24px',
		'body_font_margin' 			=> '0px',
	
		
	#	Custom typography
	#
		'h1_font_size' 				=> '32px',
		'h1_font_lineheight' 		=> '50px',
		'h1_font_margin' 			=> '14px',
		
		'h2_font_size' 				=> '24px',
		'h2_font_lineheight' 		=> '40px',
		'h2_font_margin' 			=> '10px',
		
		'h3_font_size' 				=> '18px',
		'h3_font_lineheight' 		=> '24px',
		'h3_font_margin' 			=> '8px',
		
		'h4_font_size' 				=> '16px',
		'h4_font_lineheight' 		=> '30px',
		'h4_font_margin' 			=> '4px',
		
		'h5_font_size' 				=> '14px',
		'h5_font_lineheight' 		=> '24px',
		'h5_font_margin' 			=> '0px',
		
		'h6_font_size' 				=> '12px',
		'h6_font_lineheight' 		=> '21px',
		'h6_font_margin' 			=> '0px',
		
		
	#	Colors
	#
	//	'color_accent_02'			=> '#9E679E',
		
		'color_accent_01'			=> '#18829c',
		'color_header_top'			=> '#022B36',
		'color_header_top_font'		=> '#FFFFFF',
		'color_content'				=> '#022b36',
		'color_footer_top'			=> '#18829C',
		'color_footer_top_font'		=> '#ffffff',
		'color_footer'				=> '#022B36',
		'color_footer_font'			=> '#ffffff',
		'color_footer_bottom'		=> '#021B22',
		'color_footer_bottom_font'	=> '#ffffff',
		
		
	#	Sidebar sizes
	#
		'page_sidebar_size'			=> '8,4',
		'blog_sidebar_size'			=> '8,4',
		
		
	#	Sections Columns
	#
		'footer_columns'			=> '3,3,3,3',
		'footer_sub_columns'		=> '12',
	);
	
	
	
	$ewf_admin_options = array (
		
		#	General Settings
		#
		array("type" => "panel", "name" => "Home page", "mode"=>"open", "id" => "ewf-panel-general"),					   
			  

				array(    "type" => "ewf-ui-image", 
					"image-size" => "full",
					"image-height" => "32",
							"id" => EWF_SETUP_THNAME."_favicon",
				 "section-title" => __("Favicon", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Upload your favicon", EWF_SETUP_THEME_DOMAIN),
						   "std" => get_template_directory_uri().'/layout/images/favicon.png'),
				
				array(    "type" => "ewf-ui-image", 
					"image-size" => "full",
				  "image-height" => "64",
							"id" => EWF_SETUP_THNAME."_favicon_retina",
				 "section-title" => __("Favicon Retina", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Upload your favicon", EWF_SETUP_THEME_DOMAIN),
						   "std" => get_template_directory_uri().'/layout/images/apple-touch-icon-144-precomposed.png'),
		
						   
			   array(     "type" => "ewf-ui-columns-size", 
							"id" => EWF_SETUP_THNAME."_page_sidebar_size",
					   "min" => '2',
					   "max" => '5',
				 "section-title" => __("Page sidebar size", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Select the number of columns on sidebar", EWF_SETUP_THEME_DOMAIN),
						   "std" => $ewf_admin_defaults['page_sidebar_size'] ),
						   
						   
			   array(     "type" => "ewf-ui-columns-size", 
							"id" => EWF_SETUP_THNAME."_blog_sidebar_size",
					   "min" => '2',
					   "max" => '5',
				 "section-title" => __("Blog sidebar size", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Select the number of columns on sidebar", EWF_SETUP_THEME_DOMAIN),
						   "std" => $ewf_admin_defaults['blog_sidebar_size'] ),
						   
						   
				array(    "type" => "ewf-ui-options", 
							"id" => EWF_SETUP_THNAME."_page_layout",
					   "options" => array(
							'boxed-in'=>array(
									'label' => __('Boxed in', EWF_SETUP_THEME_DOMAIN),
									'value' => 'boxed-in',
									'class' => 'ewf-layout-boxedin'
								), 
							'full-width' => array(
									'label' => __('Full Width', EWF_SETUP_THEME_DOMAIN),
									'value' => 'full-width',
									'class' => 'ewf-layout-fullwidth'
								)
							),
				 "section-title" => __("Layout style", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Select the layout", EWF_SETUP_THEME_DOMAIN),
						   "std" => 'full-width'),	
						   
						   
				array(    "type" => "ewf-ui-select", 
							"id" => EWF_SETUP_THNAME."_page_404",
				 "section-title" => __("Page not found", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Select the 404 page from your existing pages", EWF_SETUP_THEME_DOMAIN),
					   "options" => ewf_load_site_pages(),		
						   "std" => 0),		
						   
						   
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_content_width",
						   "min" => '1170px',
						   "max" => '1500px',
						  "step" => '5',
				 "section-title" => __("Content width", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Select the content width", EWF_SETUP_THEME_DOMAIN),
						   "std" => '1370px'),	
					
					
				array(    "type" => "ewf-ui-background", 
					"image-size" => "thumbnail",
					"image-height" => "50",
							"id" => EWF_SETUP_THNAME."_background",
				 "section-title" => __("Background", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Adjust background settings", EWF_SETUP_THEME_DOMAIN),
						   "std" => json_encode(array(  
										array('name' => 'background-color'			, 'value' => '#fff'			),
										array('name' => 'background-pattern'		, 'value' => ''				),
										array('name' => 'background-repeat'			, 'value' => 'repeat-all'	),
										array('name' => 'background-position'		, 'value' => 'center center'),
										array('name' => 'background-image'			, 'value' => ''				),
										array('name' => 'background-image-preview'	, 'value' => ''				),
										array('name' => 'background-attachment'		, 'value' => 'scroll'		),
										array('name' => 'background-stretch'		, 'value' => 'false'		),
									))
								),

				array(    "type" => "ewf-ui-toggle", 
							"id" => EWF_SETUP_THNAME."_backtotop_button",
				 "section-title" => __("Show back to top button", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("You can show or hide the button", EWF_SETUP_THEME_DOMAIN),
						   "std" => 'true'),	
							
						  
				array(    "type" => "textarea", 
							"id" => EWF_SETUP_THNAME."_include_analytics",
				 "section-title" => __('Google Analytics', EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __('Paste the analytics code', EWF_SETUP_THEME_DOMAIN),
						   "std" => null ),
						  
				array(    "type" => "textarea", 
							"id" => EWF_SETUP_THNAME."_include_css",
				 "section-title" => __('Extra CSS Code', EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __('Paste extra css code here', EWF_SETUP_THEME_DOMAIN),
						   "std" => null ),
						  
		array("type" => "panel", "mode"=>"close"),	
	
	
		#	Typography settings
		#
		array("type" => "panel", "name" => "Typography settings", "mode"=>"open", "id" => "ewf-panel-typography"),

				array(    "type" => "ewf-ui-toggle", 
							"id" => EWF_SETUP_THNAME."_fonts_custom",
				 "section-title" => __("Use custom typography", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("You can overwrite custom fonts", EWF_SETUP_THEME_DOMAIN),
					"dependency" => '.group-fonts-custom',
						   "std" => 'false'),	

						   
				array(    "type" => "ewf-ui-section", "name" => '<strong>'.__("Global Font", EWF_SETUP_THEME_DOMAIN).'</strong>', "group" => 'fonts-custom') ,
			

				array(    "type" => "ewf-ui-font", 
							"id" => EWF_SETUP_THNAME."_body_font",
				 "section-title" => __("Font family", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the font of the body", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => json_encode(array(
										array('name' => 'font-family', 'value' => 'Open sans'),
										array('name' => 'font-weight', 'value' => 'Regular'),
										array('name' => 'font-italic', 'value' => '')
									))
							),
		
		
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_body_font_size",
						   "max" => '60',
				 "section-title" => __("Font size", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set fize of the font", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['body_font_size']),
						  
		
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_body_font_lineheight",
						   "max" => '60',
				 "section-title" => __("Line height", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the font line height", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['body_font_lineheight']),
						   
						   
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_body_font_margin",
						   "max" => '60',
				 "section-title" => __("Margin bottom", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the bottom spacing", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['body_font_margin']),
													
				
				//
				//	H1
				//
				array(    "type" => "ewf-ui-section", 
						  "name" => "<strong>".__("Font - Heading 1", EWF_SETUP_THEME_DOMAIN)."</strong>",
						 "group" => 'fonts-custom'),
				
				array(    "type" => "ewf-ui-font", 
							"id" => EWF_SETUP_THNAME."_h1_font",
				 "section-title" => __("Font family", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the font of the body", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => json_encode(array(
										array('name' => 'font-family', 'value' => 'Open sans'),
										array('name' => 'font-weight', 'value' => 'Regular'),
										array('name' => 'font-italic', 'value' => '')
									))
							),
		
		
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h1_font_size",
						   "max" => '60',
				 "section-title" => __("Font size", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set fize of the font", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['h1_font_size']),
						  
		
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h1_font_lineheight",
						   "max" => '60',
				 "section-title" => __("Line height", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the font line height", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						    "std" => $ewf_admin_defaults['h1_font_lineheight']),
						   
						   
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h1_font_margin",
						   "max" => '60',
				 "section-title" => __("Margin bottom", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the bottom spacing", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['h1_font_margin']),
				
				
				
				//
				//	H2
				//
				array(    "type" => "ewf-ui-section", 
						  "name" => "<strong>".__("Font - Heading 2", EWF_SETUP_THEME_DOMAIN)."</strong>",
						 "group" => 'fonts-custom'),
						 
						 
				array(    "type" => "ewf-ui-font", 
							"id" => EWF_SETUP_THNAME."_h2_font",
				 "section-title" => __("Font family", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the font of the body", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => json_encode(array(
										array('name' => 'font-family', 'value' => 'Open sans'),
										array('name' => 'font-weight', 'value' => 'Regular'),
										array('name' => 'font-italic', 'value' => '')
									))
							),
		
		
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h2_font_size",
						   "max" => '60',
				 "section-title" => __("Font size", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set fize of the font", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						    "std" => $ewf_admin_defaults['h2_font_size']),
						  
		
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h2_font_lineheight",
						   "max" => '60',
				 "section-title" => __("Line height", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the font line height", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['h2_font_lineheight']),
						   
						   
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h2_font_margin",
						   "max" => '60',
				 "section-title" => __("Margin bottom", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the bottom spacing", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['h2_font_margin']),
						 
				//
				//	H3
				//
				array(    "type" => "ewf-ui-section", 
						  "name" => "<strong>".__("Font - Heading 3", EWF_SETUP_THEME_DOMAIN)."</strong>",
						 "group" => 'fonts-custom'),
						 
				array(    "type" => "ewf-ui-font", 
							"id" => EWF_SETUP_THNAME."_h3_font",
				 "section-title" => __("Font family", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the font of the body", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => json_encode(array(
										array('name' => 'font-family', 'value' => 'Open sans'),
										array('name' => 'font-weight', 'value' => 'Regular'),
										array('name' => 'font-italic', 'value' => '')
									))
							),
		
		
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h3_font_size",
						   "max" => '60',
				 "section-title" => __("Font size", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set fize of the font", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['h3_font_size']),
						  
		
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h3_font_lineheight",
						   "max" => '60',
				 "section-title" => __("Line height", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the font line height", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['h3_font_lineheight']),
						   
						   
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h3_font_margin",
						   "max" => '60',
				 "section-title" => __("Margin bottom", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the bottom spacing", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['h3_font_margin']),
						   
				//
				//	H4
				// 
				array(    "type" => "ewf-ui-section", 
						  "name" => "<strong>".__("Font - Heading 4", EWF_SETUP_THEME_DOMAIN)."</strong>",
						 "group" => 'fonts-custom'),
						 
				array(    "type" => "ewf-ui-font", 
							"id" => EWF_SETUP_THNAME."_h4_font",
				 "section-title" => __("Font family", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the font of the body", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => json_encode(array(
										array('name' => 'font-family', 'value' => 'Open sans'),
										array('name' => 'font-weight', 'value' => 'Regular'),
										array('name' => 'font-italic', 'value' => '')
									))
							),
		
		
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h4_font_size",
						   "max" => '60',
				 "section-title" => __("Font size", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set fize of the font", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['h4_font_size']),
						  
		
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h4_font_lineheight",
						   "max" => '60',
				 "section-title" => __("Line height", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the font line height", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['h4_font_lineheight']),
						   
						   
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h4_font_margin",
						   "max" => '60',
				 "section-title" => __("Margin bottom", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the bottom spacing", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['h4_font_margin']),
						   
				//
				//	H5
				// 
				array(    "type" => "ewf-ui-section", 
						  "name" => "<strong>".__("Font - Heading 5", EWF_SETUP_THEME_DOMAIN)."</strong>",
						 "group" => 'fonts-custom'),
						 
				array(    "type" => "ewf-ui-font", 
							"id" => EWF_SETUP_THNAME."_h5_font",
				 "section-title" => __("Font family", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the font of the body", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => json_encode(array(
										array('name' => 'font-family', 'value' => 'Open sans'),
										array('name' => 'font-weight', 'value' => 'Regular'),
										array('name' => 'font-italic', 'value' => '')
									))
							),
		
		
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h5_font_size",
						   "max" => '60',
				 "section-title" => __("Font size", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set fize of the font", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['h5_font_size']),
						  
		
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h5_font_lineheight",
						   "max" => '60',
				 "section-title" => __("Line height", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the font line height", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['h5_font_lineheight']),
						   
						   
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h5_font_margin",
						   "max" => '60',
				 "section-title" => __("Margin bottom", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the bottom spacing", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['h5_font_margin']),
						   
				//
				//	H6
				//
				array(    "type" => "ewf-ui-section", 
						  "name" => "<strong>".__("Font - Heading 6", EWF_SETUP_THEME_DOMAIN)."</strong>",
						 "group" => 'fonts-custom'),

				array(    "type" => "ewf-ui-font", 
							"id" => EWF_SETUP_THNAME."_h6_font",
				 "section-title" => __("Font family", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the font of the body", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => json_encode(array(
										array('name' => 'font-family', 'value' => 'Open sans'),
										array('name' => 'font-weight', 'value' => 'Regular'),
										array('name' => 'font-italic', 'value' => '')
									))
							),
		
		
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h6_font_size",
						   "max" => '60',
				 "section-title" => __("Font size", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set fize of the font", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['h6_font_size']),
						  
		
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h6_font_lineheight",
						   "max" => '60',
				 "section-title" => __("Line height", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the font line height", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['h6_font_lineheight']),
						   
						   
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h6_font_margin",
						   "max" => '60',
				 "section-title" => __("Margin bottom", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the bottom spacing", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['h6_font_margin']),
				
		
		array("type" => "panel", "mode"=>"close"),
				
				
	
		#	Import/Export settings
		#
		array("type" => "panel", "name" => "Import/Export settings", "mode"=>"open", "id" => "ewf-panel-import-export"),
				
				array( "type" => "ewf-mod-import-export" ),
				
		array("type" => "panel", "mode"=>"close"),
	
	
		#	Header settings
		#
		array("type" => "panel", "name" => "Header settings", "mode"=>"open", "id" => "ewf-panel-header"),
		
				array(    "type" => "ewf-ui-image",
					"image-size" => "full",
							"id" => EWF_SETUP_THNAME."_logo_url",
				 "section-title" => __("Header logo", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Upload logo in the header", EWF_SETUP_THEME_DOMAIN),
						   "std" => get_template_directory_uri().'/layout/images/logo.png'),
						   
						   
				array(    "type" => "ewf-ui-toggle", 
							"id" => EWF_SETUP_THNAME."_header_sticky",
				 "section-title" => __("Sticky header", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Keep the header visible after scrolling", EWF_SETUP_THEME_DOMAIN),
						   "std" => 'true'),	
						   
				array(    "type" => "ewf-ui-toggle", 
							"id" => EWF_SETUP_THNAME."_header_search",
				 "section-title" => __("Search", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Adds a search box on the right side of the menu", EWF_SETUP_THEME_DOMAIN),
						   "std" => 'true'),	

		array("type" => "panel", "mode"=>"close"),
		
		
		
		#	Footer settings
		#
		array("type" => "panel", "name" => "Footer settings", "mode"=>"open", "id" => "ewf-panel-footer"),
		
				array(    "type" => "ewf-ui-toggle", 
							"id" => EWF_SETUP_THNAME."_footer_section",
				 "section-title" => __("Footer section", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Show footer section at the bottom", EWF_SETUP_THEME_DOMAIN),
				    "dependency" => '.group-footer-custom',
						   "std" => 'true'),	
						   
						   
			   array(     "type" => "ewf-ui-columns", 
							"id" => EWF_SETUP_THNAME."_footer_columns",
				 "section-title" => __("Footer columns", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Select the number of columns", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'footer-custom',
						   "std" => $ewf_admin_defaults['footer_columns'] ),
						   
						   
				array(    "type" => "ewf-ui-toggle", 
							"id" => EWF_SETUP_THNAME."_footer_sub",
				 "section-title" => __("Footer sub", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Show sub footer section at the bottom", EWF_SETUP_THEME_DOMAIN),
					"dependency" => '.group-footer-sub',
						   "std" => 'true'),	
						   
						   
			   array(     "type" => "ewf-ui-columns", 
							"id" => EWF_SETUP_THNAME."_footer_sub_columns",
				 "section-title" => __("Footer sub columns", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Select the number of columns", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'footer-sub',
						   "std" => $ewf_admin_defaults['footer_sub_columns']),
					
		array("type" => "panel", "mode"=>"close"),
		
		
	 
		#	Color schemes
		#
		array("type" => "panel", "name" => "Colors schemes", "mode"=>"open", "id" => "ewf-panel-colors"),
			
			
				array(    "type" => "ewf-ui-toggle", 
							"id" => EWF_SETUP_THNAME."_colors_custom",
				 "section-title" => __("Use custom colors", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("You can overwrite the default color scheme", EWF_SETUP_THEME_DOMAIN),
					"dependency" => '.group-colors-custom',
						   "std" => 'false'),	
		
		
				array(    "type" => "ewf-ui-color", 
							"id" => EWF_SETUP_THNAME."_color_accent_01",
				 "section-title" => __('Accent color 1', EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __('Specify the color you want to use.', EWF_SETUP_THEME_DOMAIN),
						 "group" => 'colors-custom',
						   "std" => $ewf_admin_defaults['color_accent_01']),
						  
						  
				// array(    "type" => "ewf-ui-color", 
							// "id" => EWF_SETUP_THNAME."_color_accent_02",
				 // "section-title" => __('Accent Color 2', EWF_SETUP_THEME_DOMAIN),
		   // "section-description" => __('Specify the color you want to use.', EWF_SETUP_THEME_DOMAIN),
						 // "group" => 'colors-custom',
						   // "std" => $ewf_admin_defaults['color_accent_02']),
		
		
				array(    "type" => "ewf-ui-color", 
							"id" => EWF_SETUP_THNAME."_color_header_top",
				 "section-title" => __('Header top background color', EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __('Specify the color you want to use.', EWF_SETUP_THEME_DOMAIN),
						 "group" => 'colors-custom',
						   "std" => $ewf_admin_defaults['color_header_top']),
						  
						  						  
				array(    "type" => "ewf-ui-color", 
							"id" => EWF_SETUP_THNAME."_color_header_top_font",
				 "section-title" => __('Header top font color', EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __('Specify the color you want to use.', EWF_SETUP_THEME_DOMAIN),
						 "group" => 'colors-custom',
						   "std" => $ewf_admin_defaults['color_header_top_font']),
						  
						  
				array(    "type" => "ewf-ui-color", 
							"id" => EWF_SETUP_THNAME."_color_content",
				 "section-title" => __('Content font color', EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __('Specify the color you want to use.', EWF_SETUP_THEME_DOMAIN),
						 "group" => 'colors-custom',
						   "std" => $ewf_admin_defaults['color_content']),
						  
						  
				array(    "type" => "ewf-ui-color", 
							"id" => EWF_SETUP_THNAME."_color_footer_top",
				 "section-title" => __('Footer top color', EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __('Specify the color you want to use.', EWF_SETUP_THEME_DOMAIN),
						 "group" => 'colors-custom',
						   "std" => $ewf_admin_defaults['color_footer_top']),
						  
						  
				array(    "type" => "ewf-ui-color", 
							"id" => EWF_SETUP_THNAME."_color_footer_top_font",
				 "section-title" => __('Footer top font color', EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __('Specify the color you want to use.', EWF_SETUP_THEME_DOMAIN),
						 "group" => 'colors-custom',
						   "std" => $ewf_admin_defaults['color_footer_top_font']),
						  
						  
				array(    "type" => "ewf-ui-color", 
							"id" => EWF_SETUP_THNAME."_color_footer",
				 "section-title" => __('Footer background color', EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __('Specify the color you want to use.', EWF_SETUP_THEME_DOMAIN),
						 "group" => 'colors-custom',
						   "std" => $ewf_admin_defaults['color_footer']),
						  
						  
				array(    "type" => "ewf-ui-color", 
							"id" => EWF_SETUP_THNAME."_color_footer_font",
				 "section-title" => __('Footer font color', EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __('Specify the color you want to use.', EWF_SETUP_THEME_DOMAIN),
						 "group" => 'colors-custom',
						   "std" => $ewf_admin_defaults['color_footer_font']),
						  
						  
				array(    "type" => "ewf-ui-color", 
							"id" => EWF_SETUP_THNAME."_color_footer_bottom",
				 "section-title" => __('Footer bottom background color', EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __('Specify the color you want to use.', EWF_SETUP_THEME_DOMAIN),
						 "group" => 'colors-custom',
						   "std" => $ewf_admin_defaults['color_footer_bottom']),
						  
						  
				array(    "type" => "ewf-ui-color", 
							"id" => EWF_SETUP_THNAME."_color_footer_bottom_font",
				 "section-title" => __('Footer bottom font color', EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __('Specify the color you want to use.', EWF_SETUP_THEME_DOMAIN),
						 "group" => 'colors-custom',
						   "std" => $ewf_admin_defaults['color_footer_bottom_font']),
		
		
		array("type" => "panel", "mode"=>"close"),


	);



	function ewf_admin_load_dynamicStyles(){
		global $ewf_admin_defaults;
		
		ob_start();
		
			
			//	Theme Options - Content Width
			//	
			$_eto_content_width = get_option(EWF_SETUP_THNAME."_content_width", '1370px');
			echo ".ewf-boxed-layout #wrap, \n";
			echo ".ewf-boxed-layout #header { max-width:".$_eto_content_width.";} \n";
			echo '.ewf-debug-message  { background-color: #FCFCFC;border-left: 4px solid #7ad03a;box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.1);padding:12px;margin:20px;color:#555; }';

			
			
		?>
		
		<?php	if (get_option(EWF_SETUP_THNAME."_colors_custom", "false") == 'true'){  ?>	
				
				<?php
				// $color_accent_02 = get_option(EWF_SETUP_THNAME."_color_accent_02"						, $ewf_admin_defaults['color_accent_02']);
				

				$color_accent_01 = get_option(EWF_SETUP_THNAME."_color_accent_01"						, $ewf_admin_defaults['color_accent_01']);
				$color_header_top = get_option(EWF_SETUP_THNAME."_color_header_top"						, $ewf_admin_defaults['color_header_top']);
				$color_header_top_font = get_option(EWF_SETUP_THNAME."_color_header_top_font"			, $ewf_admin_defaults['color_header_top_font']);
				$color_content = get_option(EWF_SETUP_THNAME."_color_content"							, $ewf_admin_defaults['color_content']);
				$color_footer_top = get_option(EWF_SETUP_THNAME."_color_footer_top"						, $ewf_admin_defaults['color_footer_top']);
				$color_footer_top_font = get_option(EWF_SETUP_THNAME."_color_footer_top_font"			, $ewf_admin_defaults['color_footer_top_font']);
				$color_footer = get_option(EWF_SETUP_THNAME."_color_footer"								, $ewf_admin_defaults['color_footer']);
				$color_footer_font = get_option(EWF_SETUP_THNAME."_color_footer_font"					, $ewf_admin_defaults['color_footer_font']);
				$color_footer_bottom = get_option(EWF_SETUP_THNAME."_color_footer_bottom"				, $ewf_admin_defaults['color_footer_bottom']);
				$color_footer_bottom_font = get_option(EWF_SETUP_THNAME."_color_footer_bottom_font"		, $ewf_admin_defaults['color_footer_bottom_font']);
		
				?>
		
				/*	###	EWF Custom Colors 	*/
				
					body {
		background-color: #fff;
		color: <?php echo $color_content; ?>;
	}
		
	abbr[title] {  
		border-bottom: 1px dotted #999; 
	}
	
	blockquote span { 
		color: #999999;  
	}
	
	hr { 
		border: solid <?php echo $color_content; ?>; 
	}

	code { 
		border: 1px solid #e1e1e8;
		background-color: #f7f7f7;  
		color: #d14;  
	}
	
	pre { 
		border: 1px solid #e1e1e8;   
		background-color: #f7f7f7; 
	}
	
	.hr { 
		border-top: 1px solid <?php echo $color_content; ?>;  
	}
	
	.text-highlight { color: <?php echo $color_accent_01; ?>; }
	
	.mute{ color: #aaa; }

	a, 
	a:visited { 
		color: <?php echo $color_accent_01; ?>; 
	}

	table th, 
	table td {
		border-top: 1px solid <?php echo $color_content; ?>;
	}
	
	table th { 
		background-color: <?php echo $color_accent_01; ?>;
	}

	label span { color: #ff0000; }
	
	input,
	textarea,
	select {
		border: 1px solid <?php echo $color_content; ?>;		 
	}
	
	input[type="text"]:focus,
	input[type="email"]:focus,
	input[type="url"]:focus,
	textarea:focus {
		border-color: <?php echo $color_accent_01; ?>;
	}
	
	select:focus {
	  outline: thin dotted #333;
	}

	.wpb_accordion_header {
		border: 1px solid <?php echo $color_content; ?> !important;
		background-color: #fff !important;
		color: <?php echo $color_content; ?> !important;
	}
	
	.wpb_accordion_header a{ color: <?php echo $color_content; ?> !important; }
	
	.wpb_accordion_header.ui-state-hover,
	.wpb_accordion_header.ui-state-active {
		background-color: <?php echo $color_accent_01; ?> !important;
		border-color: <?php echo $color_accent_01; ?> !important;
	}
	
	.wpb_accordion_header.ui-state-hover a,
	.wpb_accordion_header.ui-state-active a{ color: #fff !important;}
	
	.wpb_accordion_header.ui-state-active:after, .wpb_accordion_header.ui-state-hover:after {
		color: #fff;
	}

	.alert {
		border: 1px solid <?php echo $color_content; ?>;
	}
	
	.alert.info {
		border: 1px solid #8bc1cd;
		background-color: #8bc1cd;
		color: #fff;
	}
	
	.alert.success {
		border: 1px solid <?php echo $color_accent_01; ?>;
		background-color: <?php echo $color_accent_01; ?>;
		color: #fff;
	}
	
	.alert.error {
		border: 1px solid #032b35;
		background-color: #032b35;
		color: #fff;
	}
	
	.alert.warning {
		border: 1px solid #ff0030;
		background-color: #ff0030;
		color: #fff;
	}

	#back-to-top {
		background-color: <?php echo $color_accent_01; ?>;
		color: #fff;
	}

	.btn { 
		border: 1px solid <?php echo $color_accent_01; ?>;
		background-color: <?php echo $color_accent_01; ?>;
		color: #fff;
	}
	
	a.btn { color: #fff; }
	
	.btn:hover { 
		background: #fff;
		color: <?php echo $color_content; ?>;
	}

	ul.check li:before,
	ul.fill-circle li:before { 
		color: <?php echo $color_accent_01; ?>;
	}

	.divider.single-line { border-top: 1px solid <?php echo $color_content; ?>; }
	
	.divider.double-line { border-top: 4px double <?php echo $color_content; ?>; }
	
	.divider.single-dotted { }
	
	.divider.double-dotted { }	
	
	.divider:before {
		color: <?php echo $color_accent_01; ?>;
	}

	.ewf-full-width-section  .milestone .milestone-value {
		color: #fff;
	}
	
	.ewf-full-width-section .headline:after {
		color: #fff;
	}

	.headline {
		border-bottom: 1px solid <?php echo $color_content; ?>;
	}
	
	.headline:after {
		color: <?php echo $color_accent_01; ?>;
	}

	.icon-box-1 > i { 
		color: <?php echo $color_accent_01; ?>;
	} 
	
	.icon-box-1 a { 
		color: <?php echo $color_content; ?>;
	}
	
	.icon-box-1 a:hover { color: <?php echo $color_accent_01; ?>; }
	
	.icon-box-1 a i {
		color: <?php echo $color_accent_01; ?>; 
	}

	.icon-box-2 > i { 
		color: <?php echo $color_accent_01; ?>; 
	}
	
	.icon-box-2 a { 
		color: <?php echo $color_content; ?>;
	}
	
	.icon-box-2 a:hover { color: <?php echo $color_accent_01; ?>; }
	
	.icon-box-2 a i { 
		color: <?php echo $color_accent_01; ?>; 
	}	

	.icon-box-3 > i { 	 
		color: <?php echo $color_accent_01; ?>;
	} 
	
	.icon-box-3 a { 
		color: <?php echo $color_content; ?>;
	}
	
	.icon-box-3 a:hover { color: <?php echo $color_accent_01; ?>; }
	
	.icon-box-3 a i {
		color: <?php echo $color_accent_01; ?>; 
	}

	.icon-box-4 > i { 
		color: <?php echo $color_accent_01; ?>;
	} 
	
	.icon-box-4 h2 {
		color: <?php echo $color_accent_01; ?>;
	}

	.milestone {
		border: 1px solid <?php echo $color_content; ?>;
	}
	
	.milestone .milestone-value {
		color: <?php echo $color_content; ?>;
	}

	.pie-chart i, 
	.pie-chart .pie-chart-custom-text, 
	.pie-chart .pie-chart-percent {
		color: <?php echo $color_content; ?>;
	}

	.pricing-table {
		border: 1px solid <?php echo $color_content; ?>;
	}

	.pricing-table-header h3 {
		border-bottom: 1px solid <?php echo $color_content; ?>;
	}

	.progress-bar {
		background-color: <?php echo $color_content; ?>;
	}
	
	.progress-bar .progress-bar-outer {
		background-color: <?php echo $color_accent_01; ?>;
	}

	a.social-icon {
		border: 1px solid <?php echo $color_accent_01; ?>;
		background-color: <?php echo $color_accent_01; ?>;
	}

	.table-bordered { 
		border: 1px solid <?php echo $color_content; ?>; 		
	}
	
	.table-bordered th, 
	.table-bordered td { border-left: 1px solid <?php echo $color_content; ?>; }

	.wpb_tabs * {
		background-color: #fff !important; 
	}
	
	.wpb_content_element .wpb_tour_tabs_wrapper .wpb_tabs_nav a {
		border: 1px solid <?php echo $color_content; ?> !important; 
		color: <?php echo $color_content; ?> !important;
	}
	
	
	.wpb_content_element .wpb_tabs_nav li.ui-tabs-active a {
		background-color: <?php echo $color_accent_01; ?> !important;
		border-color: <?php echo $color_accent_01; ?> !important;
		color: #fff !important;
	}

	.testimonial blockquote { 
		border: 1px solid <?php echo $color_content; ?>;
		background-color: #fff;
	}
	
	.testimonial blockquote:after {
		border-color: <?php echo $color_content; ?> <?php echo $color_content; ?> rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
	}
	
	.testimonial blockquote:before {
		border-color: #fff #fff rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
	}

	.testimonial blockquote h5 {
		color: <?php echo $color_accent_01; ?>; 
	}
	
	@media (max-width: 767px) {
				
		.testimonial blockquote:after {
			border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) <?php echo $color_content; ?> <?php echo $color_content; ?>;
		}
		
		.testimonial blockquote:before {
			border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #fff #fff;
		}
		
	}

	.wp-caption {
		background: #fff;
		border: 1px solid #f0f0f0;
	}

	#footer-top .btn{ border-color: #fff; }

	#footer-top .btn:hover { background-color: rgba(255,255,255,0.1); }
	
	.ewf_widget_latest_posts ul li a { color: <?php echo $color_content; ?>; }
	
	.ewf_widget_latest_posts ul li .post-date { 
		color: <?php echo $color_accent_01; ?>;
	}
	
	.widget_pages ul li {
		border-bottom: 1px solid <?php echo $color_content; ?>;
	}
	
	.widget_pages a { color: <?php echo $color_content; ?>; }
	
	.widget_archive ul li {
		border-bottom: 1px solid <?php echo $color_content; ?>;
	}
	
	.widget_archive a { color: <?php echo $color_content; ?>; }
	
	.widget_categories ul li {
		border-bottom: 1px solid <?php echo $color_content; ?>;
	}
	
	.widget_categories a { color: <?php echo $color_content; ?>; }
	
	.widget_meta ul li {
		border-bottom: 1px solid <?php echo $color_content; ?>;
	}
	
	.widget_meta a { color: <?php echo $color_content; ?>; }
	
	.widget_tag_cloud a {
		border: 1px solid <?php echo $color_accent_01; ?>;
		background-color: <?php echo $color_accent_01; ?>;
		color: #fff;
	}
	
	.widget_tag_cloud a:hover {
		background-color: #fff;
		color: <?php echo $color_content; ?>;
	}
	
	.widget_nav_menu ul li {
		border-bottom: 1px solid <?php echo $color_content; ?>;
	}
	
	.widget_nav_menu a { color: <?php echo $color_content; ?>; }
	
	.ewf_widget_navigation li { border-bottom: 1px solid <?php echo $color_content; ?>; }
	
	.ewf_widget_navigation li a { color: <?php echo $color_content; ?>; }
	
	.ewf_widget_contact_info ul li a { color: <?php echo $color_content; ?>; }

	#header-top .ewf_widget_contact_info ul li i { color: <?php echo $color_accent_01; ?>; }
	#header-top .ewf_widget_contact_info ul li a { color: <?php echo $color_content; ?>; }
	
	#header-top .ewf_widget_social_media a.social-icon {
		color: <?php echo $color_content; ?>;
	}

	.commentlist .vcard img.avatar {}
	.commentlist .vcard cite.fn a.url {
		color: <?php echo $color_content; ?>;
	}

	.wpcf7-form p {  }
   
	.wpcf7-form input[type="text"],
	.wpcf7-form input[type="email"],	
	.wpcf7-form textarea {
		border: 1px solid 1px solid <?php echo $color_content; ?>;
	}
	
	.wpcf7-form input[type="submit"] {
		background-color: <?php echo $color_accent_01; ?>;
	}	

	.caption.title {
		color: #fff;
	}

	.caption.subtitle {
		color: #fff;
	}

	.caption.subtitle-2 {
		color: #fff;
	}

	.caption.text { color: #fff; }

	.caption .btn {
		border-color: #fff;
		background-color: transparent;
		color: #fff;
	}

	.caption .btn:hover {
		background-color: <?php echo $color_accent_01; ?>;;
		color: #fff;
	}

	.tp-bullets.simplebullets.round .bullet {
		border: 2px solid #fff;
	}

	.tp-bullets.simplebullets.round .bullet.selected { border-color: <?php echo $color_accent_01; ?>; }

	#wrap {
		background-color: #fff;
	}

	#header-top {
		background-color: <?php echo $color_header_top; ?>;
		color: <?php echo $color_header_top_font; ?>;
	}

	.sf-menu a {
		border-bottom: 1px dotted rgba(0, 0, 0, 0.15);
		color: <?php echo $color_content; ?>; 
	}
	
	.sf-menu > li > a,
	.sf-menu > li.dropdown > a {
		color: <?php echo $color_content; ?>;
	}
	
	.sf-menu li.sfHover > a,
	.sf-menu a:hover,
	.sf-menu li.sfHover a:hover {
		color: <?php echo $color_accent_01; ?>;
	}
	
	.sf-menu > li.current_page_parent > a span,
	.sf-menu > li.current-menu-ancestor > a span ,
	.sf-menu > li.current-menu-parent > a span ,
	.sf-menu > li.current_page_parent	> a span ,
	.sf-menu > li.current > a span { background-color: <?php echo $color_accent_01; ?>; }
	
	.sf-menu > li.current_page_parent > a,
	.sf-menu > li.current_page_parent > a:hover,
	.sf-menu > li.current-menu-ancestor > a,
	.sf-menu > li.current-menu-ancestor > a:hover,
	.sf-menu > li.current-menu-parent > a,
	.sf-menu > li.current-menu-parent > a:hover,
	.sf-menu > li.current > a,
	.sf-menu > li.current > a:hover { color: #fff; }
	
	.sf-menu li.dropdown ul {
		background-color: #fff;			
	}

	.sf-menu > li.dropdown ul { border-bottom: 3px solid <?php echo $color_accent_01; ?>; }	
	
	.sf-mega {
		border: 1px solid rgba(0, 0, 0, 0.1);
		border-bottom: 3px solid <?php echo $color_accent_01; ?>;	
		background-color: #fff;
	}
	
	.sf-mega-section {
		border-right: 1px solid #efefef;
	}
	
	#mobile-menu {
		border-bottom: 1px solid <?php echo $color_content; ?>;
	}
	
	#mobile-menu li a {
		border-top: 1px solid <?php echo $color_content; ?>;
		color: <?php echo $color_content; ?>;
	}
	
	#mobile-menu .mobile-menu-submenu-arrow {
		border-left: 1px solid <?php echo $color_content; ?>;
		color: <?php echo $color_content; ?>;
	}
	
	#mobile-menu .mobile-menu-submenu-arrow:hover { 
		background-color: <?php echo $color_accent_01; ?>; 
		color: #fff;
	}				
		
	/* Custom Search Form */

	#custom-search-form #s {
	    color: <?php echo $color_content; ?>;
	}

	#custom-search-form #s.open {
	    border: 1px solid <?php echo $color_content; ?>;
	}

	#page-header {
		background-color: <?php echo $color_accent_01; ?>;
	}
	
	#page-header h2 {
		color: #fff;
	}

	#footer-top { 
		background-color: <?php echo $color_footer_top; ?>;
		color: <?php echo $color_footer_top_font; ?>;
	}
	
	#footer-top a { color: <?php echo $color_footer_top_font; ?>; }
	
	#footer-middle {
		background-color: <?php echo $color_footer; ?>;
		color: <?php echo $color_footer_font; ?>;
	}
	
	#footer-middle a { color: <?php echo $color_footer_font; ?>; }

	#footer-bottom {
		background-color: <?php echo $color_footer_bottom; ?>;
		color: <?php echo $color_footer_bottom_font; ?>;
	}

	#footer-bottom a { color: <?php echo $color_footer_bottom_font; ?>; }

	.team-member-overlay {}
	
	.team-member h4 {
		border-top: 1px solid <?php echo $color_content; ?>;
		border-bottom: 1px solid <?php echo $color_content; ?>;
	}

   	.box {
		border: 1px solid <?php echo $color_content; ?>;
	}
	
	.portfolio-item-overlay-actions .portfolio-item-zoom,
	.portfolio-item-overlay-actions .portfolio-item-link {
		border: 1px solid <?php echo $color_accent_01; ?>;
		background-color: <?php echo $color_accent_01; ?>;
		color: #fff;
	}
	
	.portfolio-item-overlay-actions .portfolio-item-zoom:hover,
	.portfolio-item-overlay-actions .portfolio-item-link:hover {
		background-color: #fff;
		border-color: #fff;
	}
	
	.portfolio-item-description a { color: <?php echo $color_content; ?>; }
	
	.portfolio-item-description a i {
		color: <?php echo $color_accent_01; ?>; 
	}
	
	.portfolio-item-description h3 {
		border-bottom: 1px solid <?php echo $color_content; ?>;
	}
	
	.portfolio-item-overlay .portfolio-item-description a { color: #fff; }

	.portfolio-item a:hover {
		color: <?php echo $color_accent_01; ?>;
	}
				
	.pagination a { 
		border: 1px solid <?php echo $color_content; ?>; 
	}
	
	.pagination li.current a,
	.pagination li a:hover { 
		color: <?php echo $color_content; ?>; 
		border-color: <?php echo $color_accent_01; ?>; 
	}

	.portfolio-filter ul li a {
		color: <?php echo $color_content; ?>;
	}
	
	.portfolio-filter ul li a:hover,
	.portfolio-filter ul li a.active { color: <?php echo $color_accent_01; ?>; }	

	.blog-post a { color: <?php echo $color_content; ?>; }
	
	.blog-post a:hover {
		color: <?php echo $color_accent_01; ?>;
	}
	
	.blog-post a i {
		color: <?php echo $color_accent_01; ?>; 
	}
	
	.blog-post-title p {
		border-top: 1px solid <?php echo $color_content; ?>;
		border-bottom: 1px solid <?php echo $color_content; ?>;
	}
	
	.blog-post-info {
		border: 1px solid <?php echo $color_content; ?>;
	}

	label.validation-error { color: #b55454; }
	
	input.validation-error,
	textarea.validation-error,
	select.validation-error { border :1px solid #e1a1a1; }

	h1.error {
		color: <?php echo $color_accent_01; ?>;
	}	

	#wrap { border-top: 5px solid <?php echo $color_accent_01; ?>; }

	ul.check li:before,
	ul.fill-circle li:before,
	ul.arrow li:before { 
		color: <?php echo $color_accent_01; ?>;
	}	
	ul.ewf-list-arrow li:before { 
		color: <?php echo $color_accent_01; ?>;
	} 
			
		<?php	}	?>		
		
		
		
		
		<?php	
			
			

			//	Theme Options - Background
			//	
			$_body_background = ewf_hlp_font_decode(EWF_SETUP_THNAME."_background");
			echo "body { ".$_body_background."}\n" ;
			
		
			//	Theme Options - Typography
			//	
			if (get_option(EWF_SETUP_THNAME."_fonts_custom", 'false') == 'true'){
				echo "\n/*	###	EWF Custom Typography  */ \n";
				 

				//	Global Font
				//
				$_body_font = ewf_hlp_font_decode( EWF_SETUP_THNAME."_body_font", true);
				$_body_font_size = 'font-size:'.get_option(EWF_SETUP_THNAME."_body_font_size", $ewf_admin_defaults['body_font_size'])."; \n";
				$_body_font_lineheight = 'line-height:'.get_option(EWF_SETUP_THNAME."_body_font_lineheight", $ewf_admin_defaults['body_font_lineheight'])."; \n";
				echo "body { ".$_body_font['css'].$_body_font_size.$_body_font_lineheight."\n }" ;
				
				
				
				$_h1_font = ewf_hlp_font_decode( EWF_SETUP_THNAME."_h1_font", true);
				$_h1_font_size = 'font-size:'.get_option(EWF_SETUP_THNAME."_h1_font_size", $ewf_admin_defaults['h1_font_size'])."; \n";
				$_h1_font_lineheight = 'line-height:'.get_option(EWF_SETUP_THNAME."_h1_font_lineheight", $ewf_admin_defaults['h1_font_lineheight'])."; \n";
				$_h1_font_margin = 'margin-bottom:'.get_option(EWF_SETUP_THNAME."_h1_font_margin", $ewf_admin_defaults['h1_font_margin'])."; \n";
				echo "h1 { ".$_h1_font['css'].$_h1_font_size.$_h1_font_lineheight.$_h1_font_margin."}\n\n" ;
				
				
				$_h2_font = ewf_hlp_font_decode( EWF_SETUP_THNAME."_h2_font", true);
				$_h2_font_size = 'font-size:'.get_option(EWF_SETUP_THNAME."_h2_font_size", $ewf_admin_defaults['h2_font_size'])."; \n";
				$_h2_font_lineheight = 'line-height:'.get_option(EWF_SETUP_THNAME."_h2_font_lineheight", $ewf_admin_defaults['h2_font_lineheight'])."; \n";
				$_h2_font_margin = 'margin-bottom:'.get_option(EWF_SETUP_THNAME."_h2_font_margin", $ewf_admin_defaults['h2_font_margin'])."; \n";
				echo "h2 { ".$_h2_font['css'].$_h2_font_size.$_h2_font_lineheight.$_h2_font_margin."}\n\n" ;
				
				
				$_h3_font = ewf_hlp_font_decode( EWF_SETUP_THNAME."_h3_font", true);
				$_h3_font_size = 'font-size:'.get_option(EWF_SETUP_THNAME."_h3_font_size", $ewf_admin_defaults['h3_font_size'])."; \n";
				$_h3_font_lineheight = 'line-height:'.get_option(EWF_SETUP_THNAME."_h3_font_lineheight", $ewf_admin_defaults['h3_font_lineheight'])."; \n";
				$_h3_font_margin = 'margin-bottom:'.get_option(EWF_SETUP_THNAME."_h3_font_margin", $ewf_admin_defaults['h3_font_margin'])."; \n";
				echo "h3 { ".$_h3_font['css'].$_h3_font_size.$_h3_font_lineheight.$_h3_font_margin."}\n\n" ;
				
				
				$_h4_font = ewf_hlp_font_decode( EWF_SETUP_THNAME."_h4_font", true);
				$_h4_font_size = 'font-size:'.get_option(EWF_SETUP_THNAME."_h4_font_size", $ewf_admin_defaults['h4_font_size'])."; \n";
				$_h4_font_lineheight = 'line-height:'.get_option(EWF_SETUP_THNAME."_h4_font_lineheight", $ewf_admin_defaults['h4_font_lineheight'])."; \n";
				$_h4_font_margin = 'margin-bottom:'.get_option(EWF_SETUP_THNAME."_h4_font_margin", $ewf_admin_defaults['h4_font_margin'])."; \n";
				echo "h4 { ".$_h4_font['css'].$_h4_font_size.$_h4_font_lineheight.$_h4_font_margin."}\n\n" ;
				

				$_h5_font = ewf_hlp_font_decode( EWF_SETUP_THNAME."_h5_font", true);
				$_h5_font_size = 'font-size:'.get_option(EWF_SETUP_THNAME."_h5_font_size", $ewf_admin_defaults['h5_font_size'])."; \n";
				$_h5_font_lineheight = 'line-height:'.get_option(EWF_SETUP_THNAME."_h5_font_lineheight",$ewf_admin_defaults['h5_font_lineheight'])."; \n";
				$_h5_font_margin = 'margin-bottom:'.get_option(EWF_SETUP_THNAME."_h5_font_margin", $ewf_admin_defaults['h5_font_margin'])."; \n";
				echo "h5 { ".$_h5_font['css'].$_h5_font_size.$_h5_font_lineheight.$_h5_font_margin."}\n\n" ;
				

				$_h6_font = ewf_hlp_font_decode( EWF_SETUP_THNAME."_h6_font", true);
				$_h6_font_size = 'font-size:'.get_option(EWF_SETUP_THNAME."_h6_font_size", $ewf_admin_defaults['h6_font_size'])."; \n";
				$_h6_font_lineheight = 'line-height:'.get_option(EWF_SETUP_THNAME."_h6_font_lineheight", $ewf_admin_defaults['h6_font_lineheight'])."; \n";
				$_h6_font_margin = 'margin-bottom:'.get_option(EWF_SETUP_THNAME."_h6_font_margin", $ewf_admin_defaults['h6_font_margin'])."; \n";
				echo "h6 { ".$_h6_font['css'].$_h6_font_size.$_h6_font_lineheight.$_h6_font_margin."}\n\n" ;


			}	
		
		
		return ob_get_clean();
	
	}
	
?>