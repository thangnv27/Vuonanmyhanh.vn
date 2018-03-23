	<div class="wrap">

		<div id="icon-themes" class="icon32"></div>

		<h2><?php printf( "%s Settings - %s", wp_get_theme()->Name, esc_attr(__("Appearance", "loc_canon")) ); ?></h2>

		<?php 
			//delete_option('canon_options_appearance');
			$canon_options_appearance = get_option('canon_options_appearance'); 

			// var_dump($canon_options_appearance);

		?>

		<br>
		
		<div class="options_wrapper canon-options">
		
			<div class="table_container">

				<form method="post" action="options.php" enctype="multipart/form-data">
					<?php settings_fields('group_canon_options_appearance'); ?>				<!-- very important to add these two functions as they mediate what wordpress generates automatically from the functions.php -->
					<?php do_settings_sections('handle_canon_options_appearance'); ?>		


					<?php submit_button(); ?>
					

					<!-- 
					--------------------------------------------------------------------------
						SKINS
				    -------------------------------------------------------------------------- 
					-->

						<h3><?php _e("Skins", "loc_canon"); ?> <img src="<?php echo get_template_directory_uri() . '/img/help.png' ?>"></h3>

						<div class='help'>

							<?php
								
								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Skins', 'loc_canon'),
									'content' 				=> array(
										__('Click a skin-button to change the colour-scheme of the whole theme.', 'loc_canon'),
									),
								)); 

							?>			

						</div>

						<table class='form-table' id="skins">

							<?php
								
								fw_option(array(
									'type'					=> 'hidden',
									'slug' 					=> 'body_skin_class',
									'options_name'			=> 'canon_options_appearance',
								)); 
							
							?>

							<tr valign='top'>
								<td>
									<img src="<?php echo get_template_directory_uri() ?>/img/skin_btn_default.png" alt="" 

										data-body_skin_class					="default-nosh"

										data-color_feat_text_1					="#dd4400"
										data-color_feat_text_2					="#dd4400"
										data-color_plate						="#ffffff"
										data-color_body							="#ffffff"
										data-color_general_text					="#111111"
										data-color_headings						="#000000"
										data-color_white_text					="#ffffff"
										data-color_meta							="#9c9fa4"
										
										data-color_header_nav					="#111111"
										data-color_preheader					="#252525"
										data-color_menu_nav						="#dd4400"
										data-color_premenu_nav					="#ffffff"
										data-color_third_nav					="#252525"
										data-color_third_prenav					="#111111"
										data-color_feature_1					="#dd4400"
										data-color_feature_2					="#111111"
										data-color_feature_3					="#dd4400"
										
										data-color_feature_block				="#f1f1f1"
										data-color_feature_block_2				="#e1f5fb"
										data-color_light_button					="#E8E8E8"
										data-color_white_button					="#ffffff"
										data-color_dark_button					="#252525"
										data-color_form_fields_bg				="#f2f2f2"
										data-color_form_fields_text				="#969ca5"
										data-color_price_table					="#f7f7f7"
										data-color_elements						="#fbfbfb"
										data-color_lines						="#eaeaea"
										
										data-color_footer_block					="#252525"
										data-color_footer_base					="#111111"
										data-color_footer_headings				="#ffffff"
										data-color_footer_text					="#bdc0c6"
										data-color_footer_featuretext			="#dd4400"
										data-color_footer_button				="#dd4400"
										data-color_footer_form_fields_bg		="#828995"
										data-color_footer_form_fields_text		="#ffffff"
										data-color_footer_form_fields_focus		="#6d7482"
										data-color_footlines					="#454444"
										data-color_responsive_menu				="#282D36"
				
									/>
									
									
								
									<img src="<?php echo get_template_directory_uri() ?>/img/skin_btn_fast.png" alt="" 

										data-body_skin_class					="family-nosh"

										data-color_feat_text_1					="#ffb400"
										data-color_feat_text_2					="#ffb400"
										data-color_plate						="#ffffff"
										data-color_body							="#ffffff"
										data-color_general_text					="#111111"
										data-color_headings						="#c4201f"
										data-color_white_text					="#ffffff"
										data-color_meta							="#9c9fa4"
										
										data-color_header_nav					="#c4201f"
										data-color_preheader					="#1e1e1e"
										data-color_menu_nav						="#ffb400"
										data-color_premenu_nav					="#ffffff"
										data-color_third_nav					="#dd4d4d"
										data-color_third_prenav					="#111111"
										data-color_feature_1					="#c42020"
										data-color_feature_2					="#111111"
										data-color_feature_3					="#ffb400"
										
										data-color_feature_block				="#f1f1f1"
										data-color_feature_block_2				="#fbf6e1"
										data-color_light_button					="#E8E8E8"
										data-color_white_button					="#ffffff"
										data-color_dark_button					="#252525"
										data-color_form_fields_bg				="#f2f2f2"
										data-color_form_fields_text				="#969ca5"
										data-color_price_table					="#f7f7f7"
										data-color_elements						="#fbfbfb"
										data-color_lines						="#eaeaea"
										
										data-color_footer_block					="#c4201f"
										data-color_footer_base					="#1e1e1e"
										data-color_footer_headings				="#ffffff"
										data-color_footer_text					="#ffffff"
										data-color_footer_featuretext			="#ffb400"
										data-color_footer_button				="#111111"
										data-color_footer_form_fields_bg		="#dd4d4d"
										data-color_footer_form_fields_text		="#ffffff"
										data-color_footer_form_fields_focus		="#dd4d4d"
										data-color_footlines					="#dd4d4d"
										data-color_responsive_menu				="#dd4d4d"
				
									/>
									
									
								</td>
							</tr>

						</table>

					<!-- 
					--------------------------------------------------------------------------
						COLOR SETTINGS
				    -------------------------------------------------------------------------- 
					-->

						<h3><?php _e("Color settings", "loc_canon"); ?> <img src="<?php echo get_template_directory_uri() . '/img/help.png' ?>"></h3>

						<div class='help'>

							<?php
								
								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Colors', 'loc_canon'),
									'content' 				=> array(
										__('Change the colours of the theme. Remember to save your changes.', 'loc_canon'),
									),
								)); 

							?>			

						</div>

						<table class='form-table'>

							<?php
								
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('General Text', 'loc_canon'),
									'slug' 					=> 'color_general_text',
									'options_name'			=> 'canon_options_appearance',
								)); 
								
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Primary Feature Text', 'loc_canon'),
									'slug' 					=> 'color_feat_text_1',
									'options_name'			=> 'canon_options_appearance',
								)); 
							
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Secondary Feature Text', 'loc_canon'),
									'slug' 					=> 'color_feat_text_2',
									'options_name'			=> 'canon_options_appearance',
								)); 
							
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Main Plate Background', 'loc_canon'),
									'slug' 					=> 'color_plate',
									'options_name'			=> 'canon_options_appearance',
								)); 
								
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Body Background', 'loc_canon'),
									'slug' 					=> 'color_body',
									'options_name'			=> 'canon_options_appearance',
								)); 
							

								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Primary Headings', 'loc_canon'),
									'slug' 					=> 'color_headings',
									'options_name'			=> 'canon_options_appearance',
								)); 
							
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('White Text', 'loc_canon'),
									'slug' 					=> 'color_white_text',
									'options_name'			=> 'canon_options_appearance',
								)); 
							
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Meta Text', 'loc_canon'),
									'slug' 					=> 'color_meta',
									'options_name'			=> 'canon_options_appearance',
								)); 
								
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Header Menu Item Active', 'loc_canon'),
									'slug' 					=> 'color_menu_nav',
									'options_name'			=> 'canon_options_appearance',
								));
								
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Pre/Post Header Menu Item', 'loc_canon'),
									'slug' 					=> 'color_premenu_nav',
									'options_name'			=> 'canon_options_appearance',
								));
								
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Header Menu Background', 'loc_canon'),
									'slug' 					=> 'color_header_nav',
									'options_name'			=> 'canon_options_appearance',
								));
								
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Pre/Post Header Background', 'loc_canon'),
									'slug' 					=> 'color_preheader',
									'options_name'			=> 'canon_options_appearance',
								));
								
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Third Level Menu Background', 'loc_canon'),
									'slug' 					=> 'color_third_nav',
									'options_name'			=> 'canon_options_appearance',
								));
								
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Pre/Post Third Level Menu Background', 'loc_canon'),
									'slug' 					=> 'color_third_prenav',
									'options_name'			=> 'canon_options_appearance',
								));  
							
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Primary Feature Button', 'loc_canon'),
									'slug' 					=> 'color_feature_1',
									'options_name'			=> 'canon_options_appearance',
								));
								
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Secondary Feature Button', 'loc_canon'),
									'slug' 					=> 'color_feature_2',
									'options_name'			=> 'canon_options_appearance',
								));
								
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Tertiary Feature Button / Hover ', 'loc_canon'),
									'slug' 					=> 'color_feature_3',
									'options_name'			=> 'canon_options_appearance',
								));
								
							
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Primary Feature Block', 'loc_canon'),
									'slug' 					=> 'color_feature_block',
									'options_name'			=> 'canon_options_appearance',
								));
								
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Secondary Feature Block', 'loc_canon'),
									'slug' 					=> 'color_feature_block_2',
									'options_name'			=> 'canon_options_appearance',
								)); 
							
								
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Pagination Buttons', 'loc_canon'),
									'slug' 					=> 'color_light_button',
									'options_name'			=> 'canon_options_appearance',
								)); 
							
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('White Button', 'loc_canon'),
									'slug' 					=> 'color_white_button',
									'options_name'			=> 'canon_options_appearance',
								));  
							
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Dark Buttons', 'loc_canon'),
									'slug' 					=> 'color_dark_button',
									'options_name'			=> 'canon_options_appearance',
								)); 
							
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Price Table Background', 'loc_canon'),
									'slug' 					=> 'color_price_table',
									'options_name'			=> 'canon_options_appearance',
								));
								
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Form Fields Background', 'loc_canon'),
									'slug' 					=> 'color_form_fields_bg',
									'options_name'			=> 'canon_options_appearance',
								)); 
							
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Form Fields Text', 'loc_canon'),
									'slug' 					=> 'color_form_fields_text',
									'options_name'			=> 'canon_options_appearance',
								)); 
							
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Light Block Elements', 'loc_canon'),
									'slug' 					=> 'color_elements',
									'options_name'			=> 'canon_options_appearance',
								)); 
							
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Border/Rulers Color', 'loc_canon'),
									'slug' 					=> 'color_lines',
									'options_name'			=> 'canon_options_appearance',
								));
								
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Footer Block', 'loc_canon'),
									'slug' 					=> 'color_footer_block',
									'options_name'			=> 'canon_options_appearance',
								));
								
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Footer Base', 'loc_canon'),
									'slug' 					=> 'color_footer_base',
									'options_name'			=> 'canon_options_appearance',
								));
								
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Footer Headings', 'loc_canon'),
									'slug' 					=> 'color_footer_headings',
									'options_name'			=> 'canon_options_appearance',
								)); 
							
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Footer Text', 'loc_canon'),
									'slug' 					=> 'color_footer_text',
									'options_name'			=> 'canon_options_appearance',
								)); 
								
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Footer Feature Color', 'loc_canon'),
									'slug' 					=> 'color_footer_featuretext',
									'options_name'			=> 'canon_options_appearance',
								)); 
								
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Footer Buttons', 'loc_canon'),
									'slug' 					=> 'color_footer_button',
									'options_name'			=> 'canon_options_appearance',
								)); 
								
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Footer Form Fields Background', 'loc_canon'),
									'slug' 					=> 'color_footer_form_fields_bg',
									'options_name'			=> 'canon_options_appearance',
								)); 
							
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Footer Form Fields Text', 'loc_canon'),
									'slug' 					=> 'color_footer_form_fields_text',
									'options_name'			=> 'canon_options_appearance',
								)); 
							
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Footer Form Fields on Focus', 'loc_canon'),
									'slug' 					=> 'color_footer_form_fields_focus',
									'options_name'			=> 'canon_options_appearance',
								)); 
								
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Footer Border/Rulers Color', 'loc_canon'),
									'slug' 					=> 'color_footlines',
									'options_name'			=> 'canon_options_appearance',
								));
								
								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Responsive Menu Background', 'loc_canon'),
									'slug' 					=> 'color_responsive_menu',
									'options_name'			=> 'canon_options_appearance',
								));  
							
							?>			


						</table>


					<!-- 
					--------------------------------------------------------------------------
						BACKGROUND
				    -------------------------------------------------------------------------- 
					-->

						<h3><?php _e("Background", "loc_canon"); ?> <img src="<?php echo get_template_directory_uri() . '/img/help.png' ?>"></h3>

						<div class='help'>
							<?php

								fw_option_help(array(
									'type'					=> 'ul',
									'title' 				=> __('Background image URL', 'loc_canon'),
									'content' 				=> array(
										__('Enter a complete URL to the image you want to use or', 'loc_canon'),
										__('Click the "Upload" button, upload an image and make sure you click the "Use this image" button or', 'loc_canon'),
										__('Click the "Upload" button and choose an image from the media library tab. Make sure you click the "Use this image" button.', 'loc_canon'),
										__('Remember to save your changes.', 'loc_canon'),
										__('NB: the background image will be positioned top-center.', 'loc_canon'),
									),
								));

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Background link (optional)', 'loc_canon'),
									'content' 				=> array(
										__('If you insert a link here you background will automatically be made clickable. Clicking the background will open up your link in a new window. Great for take-over style ad-campaigns.', 'loc_canon'),
										__('NB: Only works with boxed design.', 'loc_canon'),
									),
								));

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Repeat', 'loc_canon'),
									'content' 				=> array(
										__('If set to repeat the background image will repeat vertically.', 'loc_canon'),
									),
								));

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Attachement', 'loc_canon'),
									'content' 				=> array(
										__('If set to fixed the background image will not scroll.', 'loc_canon'),
									),
								));

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Background pattern', 'loc_canon'),
									'content' 				=> array(
										__('Click one of buttons to use that background pattern. Notice that the url of pattern image file will be automatically inserted into the Backgroun image URL input. Also notice that Repeat and attachment selects will be updated to recommended selections for use with pattern backgrounds (repeat fixed). Remember to save your changes.', 'loc_canon'),
									),
								));

							?> 

						</div>

						<table class='form-table' id="background_table">

							<?php

								fw_option(array(
									'type'					=> 'upload',
									'title' 				=> __('Background image URL', 'loc_canon'),
									'slug' 					=> 'bg_img_url',
									'btn_text'				=> __('Upload background image', 'loc_canon'),
									'options_name'			=> 'canon_options_appearance',
								)); 

								fw_option(array(
									'type'					=> 'text',
									'title' 				=> __('Background link (optional)', 'loc_canon'),
									'slug' 					=> 'bg_link',
									'class'					=> 'widefat',
									'options_name'			=> 'canon_options_appearance',
								)); 

								fw_option(array(
									'type'					=> 'select',
									'title' 				=> __('Repeat', 'loc_canon'),
									'slug' 					=> 'bg_repeat',
									'select_options'		=> array(
										'repeat'			=> __('Repeat', 'loc_canon'),
										'no-repeat'			=> __('No repeat', 'loc_canon')
									),
									'options_name'			=> 'canon_options_appearance',
								)); 

								fw_option(array(
									'type'					=> 'select',
									'title' 				=> __('Attachment', 'loc_canon'),
									'slug' 					=> 'bg_attachment',
									'select_options'		=> array(
										'fixed'				=> __('Fixed', 'loc_canon'),
										'scroll'			=> __('Scroll', 'loc_canon')
									),
									'options_name'			=> 'canon_options_appearance',
								)); 

							 ?>		

							<tr valign='top'>
								<th scope='row'><?php _e("Background pattern", "loc_canon"); ?></th>
								<td class="bg_pattern_picker">
									<img src="<?php echo get_template_directory_uri(); ?>/img/patterns/tile_btn.png" data-img_file="tile.png"> 
									<img src="<?php echo get_template_directory_uri(); ?>/img/patterns/tile2_btn.png" data-img_file="tile2.png"> 
									<img src="<?php echo get_template_directory_uri(); ?>/img/patterns/tile3_btn.png" data-img_file="tile3.png">
									<img src="<?php echo get_template_directory_uri(); ?>/img/patterns/tile4_btn.png" data-img_file="tile4.png"> 
									<img src="<?php echo get_template_directory_uri(); ?>/img/patterns/tile5_btn.png" data-img_file="tile5.png"> 
									<img src="<?php echo get_template_directory_uri(); ?>/img/patterns/tile6_btn.png" data-img_file="tile6.png">
									<img src="<?php echo get_template_directory_uri(); ?>/img/patterns/tile7_btn.png" data-img_file="tile7.png"> 
									<img src="<?php echo get_template_directory_uri(); ?>/img/patterns/tile8_btn.png" data-img_file="tile8.png"> 
									<img src="<?php echo get_template_directory_uri(); ?>/img/patterns/tile9_btn.png" data-img_file="tile9.png"> 
									<img src="<?php echo get_template_directory_uri(); ?>/img/patterns/tile10_btn.png" data-img_file="tile10.png">  
								</td>
							</tr>


						</table>


					<!-- 
					--------------------------------------------------------------------------
						GOOGLE WEBFONTS
				    -------------------------------------------------------------------------- 
					-->

						<h3><?php _e("Google Webfonts", "loc_canon"); ?> <img src="<?php echo get_template_directory_uri() . '/img/help.png' ?>"></h3>

						<div class='help'>
							<?php

								fw_option_help(array(
									'type'					=> 'ul',
									'title' 				=> __('Change fonts', 'loc_canon'),
									'content' 				=> array(
										__('<i>first select:</i> Font name.', 'loc_canon'),
										__('<i>middle select:</i> Font variants (will change automatically if available for the chosen font).', 'loc_canon'),
										__('<i>last select:</i> Font subset (will change automatically if available for the chosen font).', 'loc_canon'),
									),
								));

								fw_option_help(array(
									'type'					=> 'paragraphs',
									'title' 				=> __('More info', 'loc_canon'),
									'content' 				=> array(
										__('Notice: You can only control the general fonts to be used. However, parameters like font size, styling, letter-spacing etc. are controlled by the theme itself.', 'loc_canon'),
										__('Go to <a href="http://www.google.com/webfonts" target="_blank">Google Webfonts</a> homepage to preview fonts.', 'loc_canon'),
									),
								));

							?> 

						</div>

						<table class='form-table'>

							<?php 

								fw_option(array(
									'type'					=> 'font',
									'title' 				=> __('Body text', 'loc_canon'),
									'slug' 					=> 'font_main',
									'options_name'			=> 'canon_options_appearance',
								)); 

								fw_option(array(
									'type'					=> 'font',
									'title' 				=> __('Quote text', 'loc_canon'),
									'slug' 					=> 'font_quote',
									'options_name'			=> 'canon_options_appearance',
								));
								
								fw_option(array(
									'type'					=> 'font',
									'title' 				=> __('Lead in text', 'loc_canon'),
									'slug' 					=> 'font_lead',
									'options_name'			=> 'canon_options_appearance',
								)); 
								
								fw_option(array(
									'type'					=> 'font',
									'title' 				=> __('Logo text', 'loc_canon'),
									'slug' 					=> 'font_logotext',
									'options_name'			=> 'canon_options_appearance',
								)); 

								fw_option(array(
									'type'					=> 'font',
									'title' 				=> __('Bold text', 'loc_canon'),
									'slug' 					=> 'font_bold',
									'options_name'			=> 'canon_options_appearance',
								)); 

								fw_option(array(
									'type'					=> 'font',
									'title' 				=> __('Button text', 'loc_canon'),
									'slug' 					=> 'font_button',
									'options_name'			=> 'canon_options_appearance',
								)); 

								fw_option(array(
									'type'					=> 'font',
									'title' 				=> __('Italic text', 'loc_canon'),
									'slug' 					=> 'font_italic',
									'options_name'			=> 'canon_options_appearance',
								)); 

								fw_option(array(
									'type'					=> 'font',
									'title' 				=> __('Main headings text', 'loc_canon'),
									'slug' 					=> 'font_heading',
									'options_name'			=> 'canon_options_appearance',
								));
								
								fw_option(array(
									'type'					=> 'font',
									'title' 				=> __('Second headings text', 'loc_canon'),
									'slug' 					=> 'font_heading2',
									'options_name'			=> 'canon_options_appearance',
								));  

								fw_option(array(
									'type'					=> 'font',
									'title' 				=> __('Nav style text', 'loc_canon'),
									'slug' 					=> 'font_nav',
									'options_name'			=> 'canon_options_appearance',
								)); 

								fw_option(array(
									'type'					=> 'font',
									'title' 				=> __('Widget footer text', 'loc_canon'),
									'slug' 					=> 'font_widget_footer',
									'options_name'			=> 'canon_options_appearance',
								)); 

							?>

						</table>


					<!-- 
					--------------------------------------------------------------------------
						LIGHTBOX SETTINGS
				    -------------------------------------------------------------------------- 
					-->


						<h3><?php _e("Lightbox settings", "loc_canon"); ?> <img src="<?php echo get_template_directory_uri() . '/img/help.png' ?>"></h3>

						<div class='help'>
							<?php

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Lightbox overlay color', 'loc_canon'),
									'content' 				=> array(
										__('Select the color of the lightbox overlay.', 'loc_canon'),
									),
								));

								fw_option_help(array(
									'type'					=> 'ul',
									'title' 				=> __('Lightbox overlay opacity', 'loc_canon'),
									'content' 				=> array(
										__('Select the opacity of the lightbox overlay.', 'loc_canon'),
										__('Choose a value between 0 and 1.', 'loc_canon'),
										__('0 is completely transparent.', 'loc_canon'),
										__('1 is compeltely solid.', 'loc_canon'),
									),
								));

							?> 

						</div>

						<table class='form-table'>

							<?php

								fw_option(array(
									'type'					=> 'color',
									'title' 				=> __('Lightbox overlay color', 'loc_canon'),
									'slug' 					=> 'lightbox_overlay_color',
									'options_name'			=> 'canon_options_appearance',
								)); 

								fw_option(array(
									'type'					=> 'number',
									'title' 				=> __('Lightbox overlay opacity', 'loc_canon'),
									'slug' 					=> 'lightbox_overlay_opacity',
									'min'					=> '0',
									'max'					=> '1',
									'step'					=> '0.1',
									'width_px'				=> '60',
									'colspan'				=> '2',
									'options_name'			=> 'canon_options_appearance',
								)); 

							?>

						</table>


					<!-- 
					--------------------------------------------------------------------------
						ANIMATION: IMG SLIDERS
				    -------------------------------------------------------------------------- 
					-->

						<h3><?php _e("Animation: Image Sliders", "loc_canon"); ?> <img src="<?php echo get_template_directory_uri() . '/img/help.png' ?>"></h3>

						<div class='help'>

							This controls general behavior of image flexsliders used in theme.

							<br>

							<?php

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Slideshow', 'loc_canon'),
									'content' 				=> array(
										__('If checked slides will change automatically.', 'loc_canon'),
									),
								));

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Slide delay', 'loc_canon'),
									'content' 				=> array(
										__('Delay between each slide (in milliseconds).', 'loc_canon'),
									),
								));

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Animation duration', 'loc_canon'),
									'content' 				=> array(
										__('Duration of transition animation (in milliseconds).', 'loc_canon'),
									),
								));

							?> 

						</div>

						<table class='form-table'>

							<?php 

								fw_option(array(
									'type'					=> 'checkbox',
									'title' 				=> __('Slideshow', 'loc_canon'),
									'slug' 					=> 'anim_img_slider_slideshow',
									'options_name'			=> 'canon_options_appearance',
								)); 

								fw_option(array(
									'type'					=> 'number',
									'title' 				=> __('Slide delay', 'loc_canon'),
									'slug' 					=> 'anim_img_slider_delay',
									'min'					=> '0',
									'max'					=> '100000',
									'step'					=> '10',
									'postfix'				=> '<i> (milliseconds)</i>',
									'width_px'				=> '60',
									'options_name'			=> 'canon_options_appearance',
								)); 

								fw_option(array(
									'type'					=> 'number',
									'title' 				=> __('Animation duration', 'loc_canon'),
									'slug' 					=> 'anim_img_slider_anim_duration',
									'min'					=> '0',
									'max'					=> '100000',
									'step'					=> '10',
									'postfix'				=> '<i> (milliseconds)</i>',
									'width_px'				=> '60',
									'options_name'			=> 'canon_options_appearance',
								)); 

							?>

						</table>


					<!-- 
					--------------------------------------------------------------------------
						ANIMATION: QUOTE SLIDERS
				    -------------------------------------------------------------------------- 
					-->

						<h3><?php _e("Animation: Quote Sliders", "loc_canon"); ?> <img src="<?php echo get_template_directory_uri() . '/img/help.png' ?>"></h3>

						<div class='help'>

							This controls general behavior of quote flexsliders used in theme.

							<br><br>

							<?php

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Slideshow', 'loc_canon'),
									'content' 				=> array(
										__('If checked slides will change automatically.', 'loc_canon'),
									),
								));

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Slide delay', 'loc_canon'),
									'content' 				=> array(
										__('Delay between each slide (in milliseconds).', 'loc_canon'),
									),
								));

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Animation duration', 'loc_canon'),
									'content' 				=> array(
										__('Duration of transition animation (in milliseconds).', 'loc_canon'),
									),
								));

							?> 

						</div>

						<table class='form-table'>

							<?php 

								fw_option(array(
									'type'					=> 'checkbox',
									'title' 				=> __('Slideshow', 'loc_canon'),
									'slug' 					=> 'anim_quote_slider_slideshow',
									'options_name'			=> 'canon_options_appearance',
								)); 

								fw_option(array(
									'type'					=> 'number',
									'title' 				=> __('Slide delay', 'loc_canon'),
									'slug' 					=> 'anim_quote_slider_delay',
									'min'					=> '0',
									'max'					=> '100000',
									'step'					=> '10',
									'postfix'				=> '<i> (milliseconds)</i>',
									'width_px'				=> '60',
									'options_name'			=> 'canon_options_appearance',
								)); 

								fw_option(array(
									'type'					=> 'number',
									'title' 				=> __('Animation duration', 'loc_canon'),
									'slug' 					=> 'anim_quote_slider_anim_duration',
									'min'					=> '0',
									'max'					=> '100000',
									'step'					=> '10',
									'postfix'				=> '<i> (milliseconds)</i>',
									'width_px'				=> '60',
									'options_name'			=> 'canon_options_appearance',
								)); 

							?>

						</table>

					<!-- 
					--------------------------------------------------------------------------
						ANIMATION: REVIEW SLIDERS
				    -------------------------------------------------------------------------- 
					-->

						<h3><?php _e("Animation: Review Sliders", "loc_canon"); ?> <img src="<?php echo get_template_directory_uri() . '/img/help.png' ?>"></h3>

						<div class='help'>

							<?php _e("This controls general behavior of review flexsliders used in theme.", "loc_cph"); ?>

							<br><br>

							<?php

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Slideshow', 'loc_canon'),
									'content' 				=> array(
										__('If checked slides will change automatically.', 'loc_canon'),
									),
								));

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Slide delay', 'loc_canon'),
									'content' 				=> array(
										__('Delay between each slide (in milliseconds).', 'loc_canon'),
									),
								));

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Animation duration', 'loc_canon'),
									'content' 				=> array(
										__('Duration of transition animation (in milliseconds).', 'loc_canon'),
									),
								));

							?> 

						</div>

						<table class='form-table'>

							<?php 

								fw_option(array(
									'type'					=> 'checkbox',
									'title' 				=> __('Slideshow', 'loc_canon'),
									'slug' 					=> 'anim_menu_slider_slideshow',
									'options_name'			=> 'canon_options_appearance',
								)); 

								fw_option(array(
									'type'					=> 'number',
									'title' 				=> __('Slide delay', 'loc_canon'),
									'slug' 					=> 'anim_menu_slider_delay',
									'min'					=> '0',
									'max'					=> '100000',
									'step'					=> '10',
									'postfix'				=> '<i> (milliseconds)</i>',
									'width_px'				=> '60',
									'options_name'			=> 'canon_options_appearance',
								)); 

								fw_option(array(
									'type'					=> 'number',
									'title' 				=> __('Animation duration', 'loc_canon'),
									'slug' 					=> 'anim_menu_slider_anim_duration',
									'min'					=> '0',
									'max'					=> '100000',
									'step'					=> '10',
									'postfix'				=> '<i> (milliseconds)</i>',
									'width_px'				=> '60',
									'options_name'			=> 'canon_options_appearance',
								)); 

							?>

						</table>

					<!-- 
					--------------------------------------------------------------------------
						ANIMATION: LAZY LOAD EFFECT
				    -------------------------------------------------------------------------- 
					-->

						<h3><?php _e("Animation: Lazy Load Effect", "loc_canon"); ?> <img src="<?php echo get_template_directory_uri() . '/img/help.png' ?>"></h3>

						<div class='help'>

							<?php

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Lazy Load Effect', 'loc_canon'),
									'content' 				=> array(
										__('When scrolling down elements fade in as they enter the viewport simulating lazy load.', 'loc_canon'),
									),
								));

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Start animation after', 'loc_canon'),
									'content' 				=> array(
										__('Delay before animation starts (in seconds).', 'loc_canon'),
									),
								));

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Enter from', 'loc_canon'),
									'content' 				=> array(
										__('Element moves in from this angle.', 'loc_canon'),
									),
								));

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Move', 'loc_canon'),
									'content' 				=> array(
										__('How much the element will move (in pixels). Can be 0 if you do not want the element to move at all.', 'loc_canon'),
									),
								));

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Animation duration', 'loc_canon'),
									'content' 				=> array(
										__('How long the fade-in animation lasts (in seconds).', 'loc_canon'),
									),
								));

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Viewport factor', 'loc_canon'),
									'content' 				=> array(
										__('How big a part of the element that must enter the viewport for the fade-in animation to trigger. 0 will trigger fade-in animation right when element enters viewport. 1 will require the whole element to enter viewport before triggering fade-in.', 'loc_canon'),
									),
								));

							?> 

						</div>

						<table class='form-table'>

							<?php 

								fw_option(array(
									'type'					=> 'checkbox',
									'title' 				=> __('Use on pagebuilder blocks', 'loc_canon'),
									'slug' 					=> 'lazy_load_on_pagebuilder_blocks',
									'options_name'			=> 'canon_options_appearance',
								)); 

								fw_option(array(
									'type'					=> 'checkbox',
									'title' 				=> __('Use on blog/archive posts', 'loc_canon'),
									'slug' 					=> 'lazy_load_on_blog',
									'options_name'			=> 'canon_options_appearance',
								)); 

								fw_option(array(
									'type'					=> 'checkbox',
									'title' 				=> __('Use on widgets', 'loc_canon'),
									'slug' 					=> 'lazy_load_on_widgets',
									'options_name'			=> 'canon_options_appearance',
								)); 

								fw_option(array(
									'type'					=> 'number',
									'title' 				=> __('Start animation after', 'loc_canon'),
									'slug' 					=> 'lazy_load_after',
									'min'					=> '0',
									'max'					=> '100',
									'step'					=> '0.01',
									'postfix'				=> '<i> (seconds)</i>',
									'width_px'				=> '60',
									'options_name'			=> 'canon_options_appearance',
								)); 

								fw_option(array(
									'type'					=> 'select',
									'title' 				=> __('Enter from', 'loc_canon'),
									'slug' 					=> 'lazy_load_enter',
									'select_options'		=> array(
										'top'				=> __('Top', 'loc_canon'),
										'right'				=> __('Right', 'loc_canon'),
										'bottom'			=> __('Bottom', 'loc_canon'),
										'left'				=> __('Left', 'loc_canon'),
									),
									'options_name'			=> 'canon_options_appearance',
								)); 


								fw_option(array(
									'type'					=> 'number',
									'title' 				=> __('Move', 'loc_canon'),
									'slug' 					=> 'lazy_load_move',
									'min'					=> '0',
									'max'					=> '1000',
									'step'					=> '1',
									'postfix'				=> '<i> (pixels)</i>',
									'width_px'				=> '60',
									'options_name'			=> 'canon_options_appearance',
								)); 

								fw_option(array(
									'type'					=> 'number',
									'title' 				=> __('Animation duration', 'loc_canon'),
									'slug' 					=> 'lazy_load_over',
									'min'					=> '0',
									'max'					=> '100',
									'step'					=> '0.01',
									'postfix'				=> '<i> (seconds)</i>',
									'width_px'				=> '60',
									'options_name'			=> 'canon_options_appearance',
								)); 

								fw_option(array(
									'type'					=> 'number',
									'title' 				=> __('Viewport factor', 'loc_canon'),
									'slug' 					=> 'lazy_load_viewport_factor',
									'min'					=> '0',
									'max'					=> '1',
									'step'					=> '0.01',
									'postfix'				=> '<i> (ratio)</i>',
									'width_px'				=> '60',
									'options_name'			=> 'canon_options_appearance',
								)); 

							?>

						</table>


					<!-- 
					--------------------------------------------------------------------------
						ANIMATION: MENUS
				    -------------------------------------------------------------------------- 
					-->

						<h3><?php _e("Animation: Menus", "loc_canon"); ?> <img src="<?php echo get_template_directory_uri() . '/img/help.png' ?>"></h3>

						<div class='help'>

							<?php

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Animate menus', 'loc_canon'),
									'content' 				=> array(
										__('Select which menus to animate - or turn off menu animation altogether.', 'loc_canon'),
									),
								));

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Enter from', 'loc_canon'),
									'content' 				=> array(
										__('Element moves in from this angle.', 'loc_canon'),
									),
								));

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Move distance', 'loc_canon'),
									'content' 				=> array(
										__('How much the element will move (in pixels). Can be 0 if you do not want the element to move at all.', 'loc_canon'),
									),
								));

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Animation duration', 'loc_canon'),
									'content' 				=> array(
										__('Duration of the menu animation.', 'loc_canon'),
									),
								));

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Delay between elements', 'loc_canon'),
									'content' 				=> array(
										__('Delay in milliseconds between each menu item starts to appear.', 'loc_canon'),
									),
								));

							?> 

						</div>

						<table class='form-table'>

							<?php 

								fw_option(array(
									'type'					=> 'select',
									'title' 				=> __('Animate menus', 'loc_canon'),
									'slug' 					=> 'anim_menus',
									'select_options'		=> array(
										'anim_menus_off'		=> __('Off', 'loc_canon'),
										'.primary_menu'			=> __('Primary menu', 'loc_canon'),
										'.secondary_menu'		=> __('Secondary menu', 'loc_canon'),
										'.nav'					=> __('Primary + Secondary menu', 'loc_canon'),
									),
									'options_name'			=> 'canon_options_appearance',
								)); 

								fw_option(array(
									'type'					=> 'select',
									'title' 				=> __('Enter from', 'loc_canon'),
									'slug' 					=> 'anim_menus_enter',
									'select_options'		=> array(
										'bottom'			=> __('Top', 'loc_canon'),
										'left'				=> __('Right', 'loc_canon'),
										'top'				=> __('Bottom', 'loc_canon'),
										'right'				=> __('Left', 'loc_canon'),
									),
									'options_name'			=> 'canon_options_appearance',
								)); 

								fw_option(array(
									'type'					=> 'number',
									'title' 				=> __('Move distance', 'loc_canon'),
									'slug' 					=> 'anim_menus_move',
									'min'					=> '0',
									'max'					=> '10000',
									'step'					=> '1',
									'postfix'				=> '<i> (pixels)</i>',
									'width_px'				=> '60',
									'options_name'			=> 'canon_options_appearance',
								)); 

								fw_option(array(
									'type'					=> 'number',
									'title' 				=> __('Animation duration', 'loc_canon'),
									'slug' 					=> 'anim_menus_duration',
									'min'					=> '0',
									'max'					=> '10000',
									'step'					=> '10',
									'postfix'				=> '<i> (milliseconds)</i>',
									'width_px'				=> '60',
									'options_name'			=> 'canon_options_appearance',
								)); 

								fw_option(array(
									'type'					=> 'number',
									'title' 				=> __('Delay between elements', 'loc_canon'),
									'slug' 					=> 'anim_menus_delay',
									'min'					=> '0',
									'max'					=> '10000',
									'step'					=> '10',
									'postfix'				=> '<i> (milliseconds)</i>',
									'width_px'				=> '60',
									'options_name'			=> 'canon_options_appearance',
								)); 

							?>

						</table>







					<?php submit_button(); ?>
				</form>
			</div> <!-- end table container -->	

	
		</div>

	</div>

