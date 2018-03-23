	<div class="wrap">

		<div id="icon-themes" class="icon32"></div>

		<h2><?php printf( "%s Settings - %s", wp_get_theme()->Name, esc_attr(__("Posts & Pages", "loc_canon")) ); ?></h2>

		<?php 
			//delete_option('canon_options_post');

			// GET VARS
			$canon_options_post = get_option('canon_options_post'); 
			$canon_theme_name = wp_get_theme()->Name;

			// var_dump($canon_options_post);
		?>

		<br>
		
		<div class="options_wrapper canon-options">
		
			<div class="table_container">

				<form method="post" action="options.php" enctype="multipart/form-data">
					<?php settings_fields('group_canon_options_post'); ?>				<!-- very important to add these two functions as they mediate what wordpress generates automatically from the functions.php -->
					<?php do_settings_sections('handle_canon_options_post'); ?>		


					<?php submit_button(); ?>
					

					<!-- 
					--------------------------------------------------------------------------
						SINGLE POST
				    -------------------------------------------------------------------------- 
					-->

						<h3><?php _e("Single Post", "loc_canon"); ?> <img src="<?php echo get_template_directory_uri() . '/img/help.png' ?>"></h3>

						<div class='help'>
							<?php 

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Show post navigation', 'loc_canon'),
									'content' 				=> array(
										__('Adds post navigation to posts. Use this to navigate between previous and next post relative to the current post.', 'loc_canon'),
									),
								)); 

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Show comments', 'loc_canon'),
									'content' 				=> array(
										__('Displays comments and comment reply form.', 'loc_canon'),
									),
								)); 

							 ?>		

						</div>

						<table class='form-table'>

							<?php 

								fw_option(array(
									'type'					=> 'checkbox',
									'title' 				=> __('Show post navigation', 'loc_canon'),
									'slug' 					=> 'show_post_nav',
									'options_name'			=> 'canon_options_post',
								)); 

								fw_option(array(
									'type'					=> 'checkbox',
									'title' 				=> __('Show comments', 'loc_canon'),
									'slug' 					=> 'show_comments',
									'options_name'			=> 'canon_options_post',
								)); 

							 ?>	

						</table>

					<!-- 
					--------------------------------------------------------------------------
						SINGLE PERSON POST
				    -------------------------------------------------------------------------- 
					-->

						<h3><?php _e("Single Person Post", "loc_canon"); ?> <img src="<?php echo get_template_directory_uri() . '/img/help.png' ?>"></h3>

						<div class='help'>
							<?php 

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Show title/position', 'loc_canon'),
									'content' 				=> array(
										__('Show title/position meta info on single person page.', 'loc_canon'),
									),
								)); 

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Show tagline', 'loc_canon'),
									'content' 				=> array(
										__('Show tagline meta info on single person page.', 'loc_canon'),
									),
								)); 

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Show post navigation', 'loc_canon'),
									'content' 				=> array(
										__('Show post navigation on single person page.', 'loc_canon'),
									),
								)); 

							 ?>		

						</div>

						<table class='form-table'>

							<?php 

								fw_option(array(
									'type'					=> 'checkbox',
									'title' 				=> __('Show title/position', 'loc_canon'),
									'slug' 					=> 'show_person_position',
									'options_name'			=> 'canon_options_post',
								)); 

								fw_option(array(
									'type'					=> 'checkbox',
									'title' 				=> __('Show tagline', 'loc_canon'),
									'slug' 					=> 'show_person_tagline',
									'options_name'			=> 'canon_options_post',
								)); 

								fw_option(array(
									'type'					=> 'checkbox',
									'title' 				=> __('Show post navigation', 'loc_canon'),
									'slug' 					=> 'show_person_nav',
									'options_name'			=> 'canon_options_post',
								)); 

							 ?>	

						</table>

					<!-- 
					--------------------------------------------------------------------------
						META INFO
				    -------------------------------------------------------------------------- 
					-->

						<h3><?php _e("Meta info", "loc_canon"); ?> <img src="<?php echo get_template_directory_uri() . '/img/help.png' ?>"></h3>

						<div class='help'>
							<?php 

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Show meta info', 'loc_canon'),
									'content' 				=> array(
										__('Choose what meta info to display in posts and blog.', 'loc_canon'),
									),
								)); 

							 ?>		

						</div>

						<table class='form-table'>

							<?php 

								fw_option(array(
									'type'					=> 'checkbox',
									'title' 				=> __('Show meta info: author', 'loc_canon'),
									'slug' 					=> 'show_meta_author',
									'options_name'			=> 'canon_options_post',
								)); 

								fw_option(array(
									'type'					=> 'checkbox',
									'title' 				=> __('Show meta info: publish date', 'loc_canon'),
									'slug' 					=> 'show_meta_date',
									'options_name'			=> 'canon_options_post',
								)); 

								fw_option(array(
									'type'					=> 'checkbox',
									'title' 				=> __('Show meta info: comments count', 'loc_canon'),
									'slug' 					=> 'show_meta_comments',
									'options_name'			=> 'canon_options_post',
								)); 

								fw_option(array(
									'type'					=> 'checkbox',
									'title' 				=> __('Show meta info: tags', 'loc_canon'),
									'slug' 					=> 'show_tags',
									'options_name'			=> 'canon_options_post',
								)); 

							 ?>	

						</table>

					<!-- 
					--------------------------------------------------------------------------
						BLOG STYLED PAGES
				    -------------------------------------------------------------------------- 
					-->

						<h3><?php _e("Blog styled pages", "loc_canon"); ?> <img src="<?php echo get_template_directory_uri() . '/img/help.png' ?>"></h3>

						<div class='help'>
							<?php 

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Homepage blog style', 'loc_canon'),
									'content' 				=> array(
										__('Blog is displayed as default homepage right when installing the theme. You can set the style here.', 'loc_canon'),
									),
								)); 

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Default blog style (page)', 'loc_canon'),
									'content' 				=> array(
										__("You can set up a blog using the blog page-template. Here you can set default style. You can change this for individual blog pages in the $canon_theme_name Page Settings.", 'loc_canon'),
									),
								)); 

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Category pages style', 'loc_canon'),
									'content' 				=> array(
										__('Category pages also use a blog layout to display posts. Choose which style to use.', 'loc_canon'),
									),
								)); 

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Show category title', 'loc_canon'),
									'content' 				=> array(
										__('Choose to display the category title at the top of category pages.', 'loc_canon'),
									),
								)); 

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Show category description', 'loc_canon'),
									'content' 				=> array(
										__('Choose to display the category description at the top of category pages.', 'loc_canon'),
										__('You can set the category description at <i>Posts > Categories > Your category > Description</i>.', 'loc_canon'),
									),
								)); 

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Category pages', 'loc_canon'),
									'content' 				=> array(
										__('Category pages will display posts within a certain category.', 'loc_canon'),
										__('To add a category page to your site go to <i>Appearance > Menus > Categories</i>. Select a category and click the Add to Menu button. Drag and drop the new menu item to the desired location in the menu.', 'loc_canon'),
									),
								)); 

							 ?>		

						</div>

						<table class='form-table'>

							<?php 

								fw_option(array(
									'type'					=> 'select',
									'title' 				=> __('Homepage Blog Style', 'loc_canon'),
									'slug' 					=> 'homepage_blog_style',
									'select_options'		=> array(
										'full'					=> __('Full width', 'loc_canon'),
										'sidebar'				=> __('With sidebar', 'loc_canon')
									),
									'options_name'			=> 'canon_options_post',
								)); 

								fw_option(array(
									'type'					=> 'select',
									'title' 				=> __('Default blog style (page)', 'loc_canon'),
									'slug' 					=> 'blog_style',
									'select_options'		=> array(
										'full'					=> __('Full width', 'loc_canon'),
										'sidebar'				=> __('With sidebar', 'loc_canon')
									),
									'options_name'			=> 'canon_options_post',
								)); 

								fw_option(array(
									'type'					=> 'select',
									'title' 				=> __('Category Pages Style', 'loc_canon'),
									'slug' 					=> 'cat_style',
									'select_options'		=> array(
										'full'					=> __('Full width', 'loc_canon'),
										'sidebar'				=> __('With sidebar', 'loc_canon')
									),
									'options_name'			=> 'canon_options_post',
								)); 

								fw_option(array(
									'type'					=> 'checkbox',
									'title' 				=> __('Show category title', 'loc_canon'),
									'slug' 					=> 'show_cat_title',
									'options_name'			=> 'canon_options_post',
								)); 

								fw_option(array(
									'type'					=> 'checkbox',
									'title' 				=> __('Show category description', 'loc_canon'),
									'slug' 					=> 'show_cat_description',
									'options_name'			=> 'canon_options_post',
								)); 

							 ?>	

						</table>

					<!-- 
					--------------------------------------------------------------------------
						SEARCH 
				    -------------------------------------------------------------------------- 
					-->

						<h3><?php _e("Search", "loc_canon"); ?> <img src="<?php echo get_template_directory_uri() . '/img/help.png' ?>"></h3>

						<div class='help'>
							<?php 

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Search box text', 'loc_canon'),
									'content' 				=> array(
										__('The text that displays inside the search box.', 'loc_canon'),
									),
								)); 

							?>

						</div>

						<table class='form-table'>

							<?php
								
								fw_option(array(
									'type'					=> 'text',
									'title' 				=> __('Search box text', 'loc_canon'),
									'slug' 					=> 'search_box_text',
									'class'					=> 'widefat',
									'options_name'			=> 'canon_options_post',
								)); 
							
							?>			

						</table>

					<!-- 
					--------------------------------------------------------------------------
						404
				    -------------------------------------------------------------------------- 
					-->

						<h3>404 <img src="<?php echo get_template_directory_uri() . '/img/help.png' ?>"></h3>

						<div class='help'>
							<?php 

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('404 title', 'loc_canon'),
									'content' 				=> array(
										__('Title that displays on the 404-page.', 'loc_canon'),
									),
								)); 

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('404 message', 'loc_canon'),
									'content' 				=> array(
										__('Message to display on the 404-page.', 'loc_canon'),
									),
								)); 

							?>
						</div>

						<table class='form-table'>

							<?php
								
								fw_option(array(
									'type'					=> 'text',
									'title' 				=> __('404 title', 'loc_canon'),
									'slug' 					=> '404_title',
									'class'					=> 'widefat',
									'options_name'			=> 'canon_options_post',
								)); 

								fw_option(array(
									'type'					=> 'textarea',
									'title' 				=> __('404 message', 'loc_canon'),
									'slug' 					=> '404_msg',
									'cols'					=> '100',
									'rows'					=> '5',
									'options_name'			=> 'canon_options_post',
								)); 
							
							?>			

						</table>
						
					<!-- 
					--------------------------------------------------------------------------
						FOOD MENUS
				    -------------------------------------------------------------------------- 
					-->

						<h3><?php _e("Food menus", "loc_cph"); ?> <img src="<?php echo get_template_directory_uri() . '/img/help.png' ?>"></h3>

						<div class='help'>
							<?php 

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Currency symbol', 'loc_canon'),
									'content' 				=> array(
										__('Choose which currency symbol to use. Can be left empty for no currency symbol.', 'loc_canon'),
									),
								)); 

								fw_option_help(array(
									'type'					=> 'standard',
									'title' 				=> __('Currency symbol position', 'loc_canon'),
									'content' 				=> array(
										__('Choose whether the currency symbol should be prepended or appended the price.', 'loc_canon'),
									),
								)); 

							?>
						</div>

						<table class='form-table'>

							<?php
								
								fw_option(array(
									'type'					=> 'text',
									'title' 				=> __('Currency symbol', 'loc_canon'),
									'slug' 					=> 'currency_symbol',
									'class'					=> 'widefat',
									'options_name'			=> 'canon_options_post',
								)); 

								fw_option(array(
									'type'					=> 'select',
									'title' 				=> __('Currency symbol position', 'loc_canon'),
									'slug' 					=> 'currency_symbol_pos',
									'select_options'		=> array(
										'prepend'				=> __('Prepend', 'loc_canon'),
										'append'				=> __('Append', 'loc_canon'),
									),
									'options_name'			=> 'canon_options_post',
								)); 

							
							?>			

						</table>
						

					<?php 

						if (is_plugin_active('woocommerce/woocommerce.php')) {
						?>

					<!-- 
					--------------------------------------------------------------------------
						WOOCOMMERCE
				    -------------------------------------------------------------------------- 
					-->

							<h3>WooCommerce <img src="<?php echo get_template_directory_uri() . '/img/help.png' ?>"></h3>

							<div class='help'>
								<?php 

									fw_option_help(array(
										'type'					=> 'standard',
										'title' 				=> __('Sidebar on shop and product pages', 'loc_canon'),
										'content' 				=> array(
											__('Choose to have a sidebar displayed on your shop and product pages.', 'loc_canon'),
										),
									)); 

									fw_option_help(array(
										'type'					=> 'standard',
										'title' 				=> __('What about the other WooCommerce pages?', 'loc_canon'),
										'content' 				=> array(
											__('Other WooCommerce pages use ordinary page templates. You can change which template to use for each of the WooCommerce pages (sidebar or full width page templates).', 'loc_canon'),
										),
									)); 

									fw_option_help(array(
										'type'					=> 'standard',
										'title' 				=> __('Sidebar for WooCommerce pages', 'loc_canon'),
										'content' 				=> array(
											__('Choose which sidebar to use for your WooCommerce pages. This will be the same across all WooCommerce pages that have a sidebar.', 'loc_canon'),
										),
									)); 

								?>

							</div>

							<table class='form-table'>

								<?php
								
									fw_option(array(
										'type'					=> 'checkbox',
										'title' 				=> __('Sidebar on shop and product pages', 'loc_canon'),
										'slug' 					=> 'use_woocommerce_sidebar',
										'options_name'			=> 'canon_options_post',
									)); 

								?>

								<?php 

									// get array of registered sidebars
									$registered_sidebars_array = array();

									foreach ($GLOBALS['wp_registered_sidebars'] as $key => $value) {
										array_push($registered_sidebars_array, $value);
									}


								?>

								<tr valign='top'>
									<th scope='row'><?php _e("Sidebar for WooCommerce pages", "loc_canon"); ?></th>
									<td>
										<select name="canon_options_post[woocommerce_sidebar]">
											<?php 
												for ($i = 0; $i < count($registered_sidebars_array); $i++) { 
												?>
								     				<option value="<?php echo $registered_sidebars_array[$i]['id']; ?>" <?php if (isset($canon_options_post['woocommerce_sidebar'])) {if ($canon_options_post['woocommerce_sidebar'] ==  $registered_sidebars_array[$i]['id']) echo "selected='selected'";} ?>><?php echo  $registered_sidebars_array[$i]['name']; ?></option> 
												<?php
												}
											?>
										</select> 
									</td>
								</tr>


							</table>

						 		
						<?php	
						}
					?>



					<?php 

						if (function_exists('bp_is_active')) {
						?>

					<!-- 
					--------------------------------------------------------------------------
						BUDDYPRESS
				    -------------------------------------------------------------------------- 
					-->

							<h3>BuddyPress <img src="<?php echo get_template_directory_uri() . '/img/help.png' ?>"></h3>

							<div class='help'>
								<?php 

									fw_option_help(array(
										'type'					=> 'standard',
										'title' 				=> __('Sidebar on BuddyPress pages', 'loc_canon'),
										'content' 				=> array(
											__('Choose to have a sidebar displayed on your BuddyPress pages.', 'loc_canon'),
										),
									)); 

									fw_option_help(array(
										'type'					=> 'standard',
										'title' 				=> __('Sidebar for BuddyPress pages', 'loc_canon'),
										'content' 				=> array(
											__('Choose which sidebar to use for your BuddyPress pages.', 'loc_canon'),
										),
									)); 

								?>

							</div>

							<table class='form-table'>

								<?php
								
									fw_option(array(
										'type'					=> 'checkbox',
										'title' 				=> __('Sidebar on BuddyPress pages', 'loc_canon'),
										'slug' 					=> 'use_buddypress_sidebar',
										'options_name'			=> 'canon_options_post',
									)); 

								?>

								<?php 

									// get array of registered sidebars
									$registered_sidebars_array = array();

									foreach ($GLOBALS['wp_registered_sidebars'] as $key => $value) {
										array_push($registered_sidebars_array, $value);
									}


								?>

								<tr valign='top'>
									<th scope='row'><?php _e("Sidebar for BuddyPress pages", "loc_canon"); ?></th>
									<td>
										<select name="canon_options_post[buddypress_sidebar]">
											<?php 
												for ($i = 0; $i < count($registered_sidebars_array); $i++) { 
												?>
								     				<option value="<?php echo $registered_sidebars_array[$i]['id']; ?>" <?php if (isset($canon_options_post['buddypress_sidebar'])) {if ($canon_options_post['buddypress_sidebar'] ==  $registered_sidebars_array[$i]['id']) echo "selected='selected'";} ?>><?php echo  $registered_sidebars_array[$i]['name']; ?></option> 
												<?php
												}
											?>
										</select> 
									</td>
								</tr>


							</table>

						 		
						<?php	
						}
					?>


					<?php 

						if (class_exists('bbPress')) {
						?>

					<!-- 
					--------------------------------------------------------------------------
						BBPRESS
				    -------------------------------------------------------------------------- 
					-->

							<h3>bbPress <img src="<?php echo get_template_directory_uri() . '/img/help.png' ?>"></h3>

							<div class='help'>
								<?php 

									fw_option_help(array(
										'type'					=> 'standard',
										'title' 				=> __('Sidebar on bbPress pages', 'loc_canon'),
										'content' 				=> array(
											__('Choose to have a sidebar displayed on your bbPress pages.', 'loc_canon'),
										),
									)); 

									fw_option_help(array(
										'type'					=> 'standard',
										'title' 				=> __('Sidebar for bbPress pages', 'loc_canon'),
										'content' 				=> array(
											__('Choose which sidebar to use for your bbPress pages.', 'loc_canon'),
										),
									)); 

								?>

							</div>

							<table class='form-table'>

								<?php
								
									fw_option(array(
										'type'					=> 'checkbox',
										'title' 				=> __('Sidebar on bbPress pages', 'loc_canon'),
										'slug' 					=> 'use_bbpress_sidebar',
										'options_name'			=> 'canon_options_post',
									)); 

								?>

								<?php 

									// get array of registered sidebars
									$registered_sidebars_array = array();

									foreach ($GLOBALS['wp_registered_sidebars'] as $key => $value) {
										array_push($registered_sidebars_array, $value);
									}


								?>

								<tr valign='top'>
									<th scope='row'><?php _e("Sidebar for bbPress pages", "loc_canon"); ?></th>
									<td>
										<select name="canon_options_post[bbpress_sidebar]">
											<?php 
												for ($i = 0; $i < count($registered_sidebars_array); $i++) { 
												?>
								     				<option value="<?php echo $registered_sidebars_array[$i]['id']; ?>" <?php if (isset($canon_options_post['bbpress_sidebar'])) {if ($canon_options_post['bbpress_sidebar'] ==  $registered_sidebars_array[$i]['id']) echo "selected='selected'";} ?>><?php echo  $registered_sidebars_array[$i]['name']; ?></option> 
												<?php
												}
											?>
										</select> 
									</td>
								</tr>


							</table>

						 		
						<?php	
						}
					?>
					


					<?php 

						if (class_exists('TribeEvents')) {
						?>

					<!-- 
					--------------------------------------------------------------------------
						THE EVENTS CALENDAR BY TRIBE
				    -------------------------------------------------------------------------- 
					-->

							<h3>The Events Calendar <img src="<?php echo get_template_directory_uri() . '/img/help.png' ?>"></h3>

							<div class='help'>
								<?php 

									fw_option_help(array(
										'type'					=> 'standard',
										'title' 				=> __('Sidebar on Events pages', 'loc_canon'),
										'content' 				=> array(
											__('Choose to have a sidebar displayed on your Events pages. Make sure you are using the Default Events Template (Events > Settings > Display > Events Template).', 'loc_canon'),
										),
									)); 

									fw_option_help(array(
										'type'					=> 'standard',
										'title' 				=> __('Sidebar for Events pages', 'loc_canon'),
										'content' 				=> array(
											__('Choose which sidebar to use for your Events pages.', 'loc_canon'),
										),
									)); 

								?>

							</div>

							<table class='form-table'>

								<?php
								
									fw_option(array(
										'type'					=> 'checkbox',
										'title' 				=> __('Sidebar on Events pages', 'loc_canon'),
										'slug' 					=> 'use_events_sidebar',
										'options_name'			=> 'canon_options_post',
									)); 

								?>

								<?php 

									// get array of registered sidebars
									$registered_sidebars_array = array();

									foreach ($GLOBALS['wp_registered_sidebars'] as $key => $value) {
										array_push($registered_sidebars_array, $value);
									}


								?>

								<tr valign='top'>
									<th scope='row'><?php _e("Sidebar for Events pages", "loc_canon"); ?></th>
									<td>
										<select name="canon_options_post[events_sidebar]">
											<?php 
												for ($i = 0; $i < count($registered_sidebars_array); $i++) { 
												?>
								     				<option value="<?php echo $registered_sidebars_array[$i]['id']; ?>" <?php if (isset($canon_options_post['events_sidebar'])) {if ($canon_options_post['events_sidebar'] ==  $registered_sidebars_array[$i]['id']) echo "selected='selected'";} ?>><?php echo  $registered_sidebars_array[$i]['name']; ?></option> 
												<?php
												}
											?>
										</select> 
									</td>
								</tr>


							</table>

						 		
						<?php	
						}
					?>
					


					<!-- END OPTIONS AND WRAP UP FILE -->

					<?php submit_button(); ?>

				</form>
			</div> <!-- end table container -->	

	
		</div>

	</div>

