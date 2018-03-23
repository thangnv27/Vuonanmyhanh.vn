<?php

/****************************************************
DESCRIPTION: 	GENERAL OPTIONS
OPTION HANDLE: 	canon_options_appearance
****************************************************/


	/****************************************************
	REGISTER MENU
	****************************************************/

	add_action('admin_menu', 'register_canon_options_appearance');

	function register_canon_options_appearance () {
		global $screen_handle_canon_options_appearance;	  	//this is the SCREEN handle used to identify the new admin menu page (notice: different than the add_menu_page handle)

		// Use this instad if submenu
		$screen_handle_canon_options_appearance = add_submenu_page(
			'handle_canon_options',							//the handle of the parent options page. 
			'Appearance Settings',							//the submenu title that will appear in browser title area.
			'Appearance',									//the on screen name of the submenu
			'manage_options',								//privileges check
			'handle_canon_options_appearance',				//the handle of this submenu
			'display_options_appearance'					//the callback function to display the actual submenu page content.
		);

	}

	/****************************************************
	INITIALIZE MENU
	****************************************************/

	add_action('admin_init', 'init_canon_options_appearance');	
	
	function init_canon_options_appearance () {
		register_setting(
			'group_canon_options_appearance',				//group name. The group for the fields custom_options_group
			'canon_options_appearance',						//the options variabel. THIS IS WEHERE YOUR OPTIONS ARE STORED.
			'validate_canon_options_appearance'				//optional 3rd param. Callback /function to sanitize and validate
		);
	}

	/****************************************************
	SET DEFAULTS
	****************************************************/

	add_action('after_setup_theme', 'default_canon_options_appearance');	

	function default_canon_options_appearance () {

		//if this is first runthrough set default values
		if (get_option('canon_options_appearance') == FALSE) {		//trying to get options 'canon_options_appearance' which doesn't yet exist results in FALSE
		 	$options = array (

			 		'body_skin_class'					=> '',

			 		'color_feat_text_1'					=> '#dd4400',
			 		'color_feat_text_2'					=> '#dd4400',
			 		'color_plate'						=> '#fff',
			 		'color_body'						=> '#ffffff',
			 		'color_general_text'				=> '#111111',
			 		'color_headings'					=> '#000000',
			 		'color_white_text'					=> '#fff',
			 		'color_meta'						=> '#9c9fa4',

			 		'color_menu_nav'					=> '#dd4400',
			 		'color_premenu_nav'					=> '#ffffff',
			 		'color_header_nav'					=> '#111111',
			 		'color_preheader'					=> '#252525',
			 		'color_third_nav'					=> '#252525',
			 		'color_third_prenav'				=> '#111111',
			 		'color_feature_1'					=> '#dd4400',
			 		'color_feature_2'					=> '#111111',
			 		'color_feature_3'					=> '#dd4400',
			 		'color_feature_block'				=> '#f1f1f1',
			 		'color_feature_block_2'				=> '#e1f5fb',
			 		'color_light_button'				=> '#E8E8E8',
			 		'color_white_button'				=> '#ffffff',
			 		'color_dark_button'					=> '#252525',
			 		'color_form_fields_bg'				=> '#f2f2f2',
			 		'color_form_fields_text'			=> '#969ca5',
			 		'color_price_table'					=> '#f7f7f7',
			 		'color_elements'					=> '#fbfbfb',
			 		'color_lines'						=> '#eaeaea',
			 		
			 		'color_footer_block'				=> '#252525',
			 		'color_footer_base'					=> '#111111',
			 		'color_footer_headings'				=> '#ffffff',
			 		'color_footer_text'					=> '#bdc0c6',
			 		'color_footer_featuretext'			=> '#dd4400',
			 		'color_footer_button'				=> '#dd4400',
			 		'color_footer_form_fields_bg'		=> '#828995',
			 		'color_footer_form_fields_text'		=> '#fff',
			 		'color_footer_form_fields_focus'	=> '#6d7482',
			 		'color_footlines'					=> '#454444', 
			 		'color_responsive_menu'				=> '#282D36',

					'bg_img_url'						=> '',
					'bg_link'							=> '',
					'bg_repeat'							=> 'repeat',
					'bg_attachment'						=> 'fixed',

					'lightbox_overlay_color'			=> '#000000',
					'lightbox_overlay_opacity'			=> '0.7',

				 	'font_main'        					=> array('canon_default','',''),				 	
				 	'font_quote'        				=> array('canon_default','',''),
				 	'font_lead'        				=> array('canon_default','',''),
				 	'font_logotext'	        			=> array('canon_default','',''),
				 	'font_bold'        					=> array('canon_default','',''),
				 	'font_button'      					=> array('canon_default','',''),
				 	'font_italic'        				=> array('canon_default','',''),
				 	'font_heading'        				=> array('canon_default','',''),
				 	'font_heading2'        				=> array('canon_default','',''),
				 	'font_nav'        					=> array('canon_default','',''),
				 	'font_widget_footer'				=> array('canon_default','',''),

					'anim_img_slider_slideshow'			=> 'unchecked',
					'anim_img_slider_delay'				=> '5000',
					'anim_img_slider_anim_duration'		=> '800',
					'anim_quote_slider_slideshow'		=> 'unchecked',
					'anim_quote_slider_delay'			=> '5000',
					'anim_quote_slider_anim_duration'	=> '800',
					'anim_menu_slider_slideshow'		=> 'unchecked',
					'anim_menu_slider_delay'			=> '5000',
					'anim_menu_slider_anim_duration'	=> '800',

					'lazy_load_on_pagebuilder_blocks'	=> 'checked',
					'lazy_load_on_blog'					=> 'checked',
					'lazy_load_on_widgets'				=> 'checked',
					'lazy_load_after'					=> 0.3,
					'lazy_load_enter'					=> 'bottom',
					'lazy_load_move'					=> 24,
					'lazy_load_over'					=> 0.56,
					'lazy_load_viewport_factor'			=> 0.2,

					'anim_menus'						=> '.nav',
					'anim_menus_enter'					=> 'left',
					'anim_menus_move'					=> 40,
					'anim_menus_duration'				=> 600,
					'anim_menus_delay'					=> 150,

				);

			update_option('canon_options_appearance', $options);
		}
	}


	/****************************************************
	VALIDATE INPUT AND DISPLAY MENU
	****************************************************/

	//remember this will strip all html php tags, strip slashes and convert quotation marks. This is not always what you want (maybe you want a field for HTML?) why you might want to modify this part.	
	function validate_canon_options_appearance ($new_instance) {				
		return $new_instance;
	}

	//display the menus
	function display_options_appearance () {
		require "options_appearance.php";
	}