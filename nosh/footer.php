<?php 

      $canon_options = get_option('canon_options'); 
      $canon_options_frame = get_option('canon_options_frame'); 


?>

      <!-- HEADER -->
      <?php

         if ( (is_page_template('page-placeholder.php') === false) ) {
         ?> 
         
            <!-- WIDGETIZED FOOTER -->
            <?php if ($canon_options_frame['show_widgetized_footer'] == "checked") { get_template_part('inc/templates/template_widgetized_footer'); } ?>

            <!-- SOCIAL FOOTER -->
            <?php if ($canon_options_frame['show_social_footer'] == "checked") { get_template_part('inc/templates/template_social_footer'); } ?>
            
         <?php
         }

      ?>

      <!-- GOOGLE ANALYTICS-->
      <?php if (!empty($canon_options['google_analytics_code'])) echo $canon_options['google_analytics_code']; ?>

      <!-- WP FOOTER -->
      <?php wp_footer(); ?>
        
			        
	</body>
	
</html>
		