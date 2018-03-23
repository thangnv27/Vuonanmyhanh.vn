<?php 

    // GET OPTIONS
    $canon_options_post = get_option('canon_options_post'); 

    // GET CMB DATA
    $cmb_single_style = get_post_meta( $post->ID, 'cmb_single_style', true);
    $cmb_feature = get_post_meta( $post->ID, 'cmb_feature', true);
    $cmb_media_link = get_post_meta( $post->ID, 'cmb_media_link', true);
    $cmb_hide_feat_img = get_post_meta( $post->ID, 'cmb_hide_feat_img', true);
    $cmb_post_show_post_slider = get_post_meta( $post->ID, 'cmb_post_show_post_slider', true);

    // DEFAULTS
    if (empty($cmb_single_style)) $cmb_single_style = "full";

    // HANDLE POST SLIDER
    $consolidated_slider_array = array();
    if ($cmb_post_show_post_slider == "checked") {
        $cmb_post_slider_source = get_post_meta( $post->ID, 'cmb_post_slider_source', true);
        $post_slider_array = mb_strip_wp_galleries_to_array($cmb_post_slider_source);
        $consolidated_slider_array = mb_convert_wp_galleries_array_to_consolidated_wp_gallery_array($post_slider_array);
    }

?>

    <!-- BEGIN LOOP -->
    <?php while ( have_posts() ) : the_post(); ?>


        <!-- FEATURED IMAGE -->
        <?php 
            if ( ( $cmb_single_style == "full" || $cmb_single_style == "boxed") && ( $cmb_post_show_post_slider == "checked" || ( has_post_thumbnail(get_the_ID()) && get_post(get_post_thumbnail_id(get_the_ID()))) && $cmb_hide_feat_img != "checked") ) {
            ?>
                <div class="outter-wrapper feature">

                    <?php if ($cmb_single_style == "boxed") { echo '<div class="wrapper feature-boxed">';} ?>

                    <div class="flexslider flexslider-standard">
                        <ul class="slides">

                            <?php

                                if ($cmb_post_show_post_slider != "checked") {
                                    
                                    if ( ($cmb_feature == "media") && (!empty($cmb_media_link)) ) {
                                        echo "<li>";
                                        echo $cmb_media_link;
                                        echo "</li>";
                                    } elseif ( ($cmb_feature == "media_in_lightbox") && (!empty($cmb_media_link)) && get_post(get_post_thumbnail_id(get_the_ID())) ) {
                                        $post_thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full');
                                        $img_alt = get_post_meta(get_post_thumbnail_id(get_the_ID()), '_wp_attachment_image_alt', true);
                                        printf("<li><a class='fancybox fancybox.iframe' href='%s'><img src='%s' alt='%s'></a></li>", esc_url($cmb_media_link), esc_url($post_thumbnail_src[0]), esc_attr($img_alt));
                                    } elseif ( has_post_thumbnail(get_the_ID()) && get_post(get_post_thumbnail_id(get_the_ID())) ) { 
                                        $post_thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full');
                                        $img_alt = get_post_meta(get_post_thumbnail_id(get_the_ID()), '_wp_attachment_image_alt', true);
                                        $img_post = get_post(get_post_thumbnail_id(get_the_ID()));
                                        printf("<li><a title='%s' href='%s'><img src='%s' alt='%s'></a></li>", esc_attr($img_post->post_title), esc_url($post_thumbnail_src[0]), esc_url($post_thumbnail_src[0]), esc_attr($img_alt));
                                    }
                                        
                                } else {
                                        
                                    for ($i = 0; $i < count($consolidated_slider_array); $i++) {  

                                        $post_thumbnail_src = wp_get_attachment_image_src($consolidated_slider_array[$i]['id'],'full');
                                        $img_alt = get_post_meta($consolidated_slider_array[$i]['id'], '_wp_attachment_image_alt', true);
                                        $img_post = get_post($consolidated_slider_array[$i]['id']);
                                        printf("<li><a title='%s' href='%s'><img src='%s' alt='%s'></a></li>", esc_attr($img_post->post_excerpt), esc_url($post_thumbnail_src[0]), esc_url($post_thumbnail_src[0]), esc_attr($img_alt));
                                    }
                                }

                            ?>

                        </ul>
                    </div>

                    <?php if ($cmb_single_style == "boxed") { echo '</div>';} ?>

                </div>

            <?php    
            } else {
            ?>
                <!-- Start Outter Wrapper -->   
                <div class="outter-wrapper feature">
                    <hr/>
                </div>  
                <!-- End Outter Wrapper --> 
                       
            <?php       
            }
        ?>
 
        <!-- start outter-wrapper -->   
        <div class="outter-wrapper">
            <!-- start main-container -->
            <div class="main-container">
                <!-- start main wrapper -->
                <div class="main wrapper clearfix">
                    <!-- start main-content -->
                    <div class="main-content">



                        <!-- Start Post --> 
                        <div id="post-<?php the_ID(); ?>" <?php post_class("clearfix"); ?>>

                            <h1><?php the_title(); ?></h1>
                            
                            <!-- META -->
                            <ul class="meta blogPost">
                                <?php if (isset($canon_options_post['show_meta_author'])) { if ($canon_options_post['show_meta_author'] == "checked") { ?> <li><?php the_author_posts_link(); ?></li> <?php } } ?>
                                <?php if (isset($canon_options_post['show_meta_date'])) { if ($canon_options_post['show_meta_date'] == "checked") { ?><li><?php echo mb_localize_datetime(get_the_time(get_option('date_format'))); ?></li> <?php } } ?>
                                <?php if (isset($canon_options_post['show_meta_comments'])) { if ($canon_options_post['show_meta_comments'] == "checked") { ?> <li><a href="#comments" class="comment"><?php comments_number(__("No comments", "loc_canon"), __("1 comment", "loc_canon"), "% " . __("comments", "loc_canon")); ?></a></li> <?php } } ?>
                                <?php if (isset($canon_options_post['show_tags'])) { if ($canon_options_post['show_tags'] == "checked") { ?> <li><?php the_tags("",", "); ?></li> <?php } } ?>
                                	
                            </ul>	
                            

                            <div>

                                <!-- FEATURED IMAGE -->
                                <?php 
                                    if ( ( $cmb_single_style == "compact") && ( $cmb_post_show_post_slider == "checked" || ( has_post_thumbnail(get_the_ID()) && get_post(get_post_thumbnail_id(get_the_ID()))) && $cmb_hide_feat_img != "checked") ) {
                                    ?>
                                        <div class="compact">

                                            <?php if ($cmb_single_style == "boxed") { echo '<div class="wrapper">';} ?>

                                            <div class="flexslider flexslider-standard">
                                                <ul class="slides">

                                                <?php

                                                    if ($cmb_post_show_post_slider != "checked") {
                                                        
                                                        if ( ($cmb_feature == "media") && (!empty($cmb_media_link)) ) {
                                                            echo "<li>";
                                                            echo $cmb_media_link;
                                                            echo "</li>";
                                                        } elseif ( ($cmb_feature == "media_in_lightbox") && (!empty($cmb_media_link)) && get_post(get_post_thumbnail_id(get_the_ID())) ) {
                                                            $post_thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full');
                                                            $img_alt = get_post_meta(get_post_thumbnail_id(get_the_ID()), '_wp_attachment_image_alt', true);
                                                            printf("<li><a class='fancybox fancybox.iframe' href='%s'><img src='%s' alt='%s'></a></li>", esc_url($cmb_media_link), esc_url($post_thumbnail_src[0]), esc_attr($img_alt));
                                                        } elseif ( has_post_thumbnail(get_the_ID()) && get_post(get_post_thumbnail_id(get_the_ID())) ) { 
                                                            $post_thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full');
                                                            $img_alt = get_post_meta(get_post_thumbnail_id(get_the_ID()), '_wp_attachment_image_alt', true);
                                                            $img_post = get_post(get_post_thumbnail_id(get_the_ID()));
                                                            printf("<li><a title='%s' href='%s'><img src='%s' alt='%s'></a></li>", esc_attr($img_post->post_title), esc_url($post_thumbnail_src[0]), esc_url($post_thumbnail_src[0]), esc_attr($img_alt));
                                                        }
                                                            
                                                    } else {
                                                            
                                                        for ($i = 0; $i < count($consolidated_slider_array); $i++) {  

                                                            $post_thumbnail_src = wp_get_attachment_image_src($consolidated_slider_array[$i]['id'],'full');
                                                            $img_alt = get_post_meta($consolidated_slider_array[$i]['id'], '_wp_attachment_image_alt', true);
                                                            $img_post = get_post($consolidated_slider_array[$i]['id']);
                                                            printf("<li><a title='%s' href='%s'><img src='%s' alt='%s'></a></li>", esc_attr($img_post->post_excerpt), esc_url($post_thumbnail_src[0]), esc_url($post_thumbnail_src[0]), esc_attr($img_alt));
                                                        }
                                                    }

                                                ?>
                                                
                                                </ul>
                                            </div>

                                            <?php if ($cmb_single_style == "boxed") { echo '</div>';} ?>

                                        </div>

                                    <?php    
                                    } 
                                ?>


                                <!-- THE CONTENT -->
                                <?php the_content(); ?>
                                <div class="link-pages"><?php wp_link_pages(array('before' => '<p>' . __('Pages:','loc_canon'))); ?></div>

                                <!-- POST PAGINATION -->    
                                <?php if ($canon_options_post['show_post_nav'] == "checked") get_template_part('inc/templates/template_post_pagination'); ?>   

                                <hr/>

                                <!-- COMMENTS --> 
                                  
                                <div class="coms"> 
                                	<?php if ($canon_options_post['show_comments'] == "checked") comments_template( '', true ); ?>
								</div>
                            </div>

                        </div>                  


                    </div>
                    <!-- end main-content -->
                </div>
                <!-- end main wrapper -->
            </div>
             <!-- end main-container -->
        </div>
        <!-- end outter-wrapper -->
    	
    <?php endwhile; ?>
    <!-- END LOOP -->
