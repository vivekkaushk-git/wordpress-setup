<?php
/**
 * elysium Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package elysium
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ELYSIUM_VERSION', '9.7.7' );

/**
 * Enqueue styles
 */
 




 
function child_enqueue_styles() {
    
    global $post;
    $current_site = get_current_blog_id();
	
    //GLOBAL STYLE
	wp_enqueue_style( 'elysium-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), time(), 'all' );
	wp_enqueue_style( 'elysium-bootstrap-css', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array('astra-theme-css'), time(), 'all' );
	wp_enqueue_style( 'elysium-fontawesome-css', get_stylesheet_directory_uri() . '/assets/css/font-awesome.css', array('astra-theme-css'), time(), 'all' );
	wp_enqueue_style( 'elysium-header-css', get_stylesheet_directory_uri() . '/assets/css/header.css', array('astra-theme-css'), time(), 'all' );
	wp_enqueue_style( 'elysium-footer-css', get_stylesheet_directory_uri() . '/assets/css/footer.css', array('astra-theme-css'), time(), 'all' );
	wp_enqueue_style( 'elysium-floating-think-space-css', get_stylesheet_directory_uri() . '/assets/css/floating-think-space.css', array('astra-theme-css'), time(), 'all' );
	wp_enqueue_style( 'elysium-global-location-css', get_stylesheet_directory_uri() . '/assets/css/global-location.css', array('astra-theme-css'), time(), 'all' );
	wp_enqueue_style( 'elysium-social-float-css', get_stylesheet_directory_uri() . '/assets/css/social-float-right.css', array('astra-theme-css'), time(), 'all' );
	wp_enqueue_style( 'elysium-bottom-bar-css', get_stylesheet_directory_uri() . '/assets/css/bottom-bar.css', array('astra-theme-css'), time(), 'all' );
	wp_enqueue_style( 'elysium-site-custom-tables-css', get_stylesheet_directory_uri() . '/assets/css/site-custom-tables.css', array('astra-theme-css'), time(), 'all' );
   
    wp_enqueue_style( 'elysium-open-days-css', get_stylesheet_directory_uri() . '/assets/css/open-days.css', array('astra-theme-css'), time(), 'all' );
	
	
	/*---START ELYSIUM HEALTHCARE--*/
	
	if($current_site == 1) {
	    
	    wp_enqueue_style('header-main-site-css', get_stylesheet_directory_uri() . '/assets/css/header-main-site.css', array(), time(), 'all');
	    
	    if(is_home() || is_front_page()){
	        wp_enqueue_style( 'elysium-home-css', get_stylesheet_directory_uri() . '/assets/css/home.css', array('astra-theme-css'), time(), 'all' );
	    }
	    
	    if(is_page('useful-links')) {
    	    wp_enqueue_style( 'elysium-useful-links-css', get_stylesheet_directory_uri() . '/assets/css/useful-links.css', array('astra-theme-css'), time(), 'all' );
    	}
	
	    if(is_page('news')) {
	        wp_enqueue_style( 'elysium-news-css', get_stylesheet_directory_uri() . '/assets/css/news.css', array('astra-theme-css'), time(), 'all' );
	    }
	
	    if(is_page('accessibility')) {
	        wp_enqueue_style( 'elysium-accessibility-css', get_stylesheet_directory_uri() . '/assets/css/accessibility.css', array('astra-theme-css'), time(), 'all' );
	    }
	
	    if(is_page('your-questions')) {
            wp_enqueue_style( 'elysium-your-question-css', get_stylesheet_directory_uri() . '/assets/css/your-question.css', array('astra-theme-css'), time(), 'all' );
	    }
	
	    if(is_page('thinkspace')) {
            wp_enqueue_style( 'elysium-think-space-css', get_stylesheet_directory_uri() . '/assets/css/think-space.css', array('astra-theme-css'), time(), 'all' );
        }
    
        if(is_page('byod')) {
            wp_enqueue_style( 'elysium-byod-css', get_stylesheet_directory_uri() . '/assets/css/byod.css', array('astra-theme-css'), time(), 'all' );
        }
	    
	}
	
	
	/*---END ELYSIUM HEALTHCARE--*/
	
	
	
   /*--START MENTAL HEALTH AND WELLBEING--*/
   
	if($current_site == 3){
		    
		if(is_home() || is_front_page()) {
            wp_enqueue_style( 'elysium-mental-wellbeing-css', get_stylesheet_directory_uri() . '/assets/css/mental-wellbeing/mental-wellbeing.css', array('astra-theme-css'), time(), 'all' );
            wp_enqueue_style( 'elysium-table-slides-css', get_stylesheet_directory_uri() . '/assets/css/table-slides.css', array('astra-theme-css'), time(), 'all' );
        } 
        
        if(is_page('faq')) {
            wp_enqueue_style( 'elysium-faq-well-being-css', get_stylesheet_directory_uri() . '/assets/css/mental-wellbeing/faq.css', array('astra-theme-css'), time(), 'all' );
        }
        
        if(is_home() || is_front_page()) {
            wp_enqueue_script( 'elysium-table-slides-js', get_stylesheet_directory_uri() . '/assets/js/table-slides.js', array(), time(), true );
        } 
	}
    
    /*--END MENTAL HEALTH AND WELLBEING--*/
    
     
    
   /*--START CHILDREN AND EDUACTION--*/
   
    if($current_site == 5) {
        
        $parent_id = wp_get_post_parent_id($post);
        $school_ids = [5601, 5903, 5925, 6452, 6006];
        if(in_array($parent_id, $school_ids)){
            wp_enqueue_style( 'elysium-education-education-inner-menu-css', get_stylesheet_directory_uri() . '/assets/css/education/education-inner-menu.css', array('astra-theme-css'), time(), 'all' );
        }
        
        if(is_page($school_ids)){
            wp_enqueue_style( 'elysium-education-schools-sigle-details-css', get_stylesheet_directory_uri() . '/assets/css/education/schools-single-details.css', array('astra-theme-css'), time(), 'all' );
        }
        
        $hospital_ids = [5758, 5808, 5844, 6461];
        if(is_page($hospital_ids)){
            wp_enqueue_style( 'elysium-education-hospitals-sigle-details-css', get_stylesheet_directory_uri() . '/assets/css/education/hospitals-single-details.css', array('astra-theme-css'), time(), 'all' );
        }
        
        if(is_page('hospitals')) {
            wp_enqueue_style( 'elysium-education-hospitals-css', get_stylesheet_directory_uri() . '/assets/css/education/hospitals.css', array('astra-theme-css'), time(), 'all' );
        }
        
        if(is_home() || is_front_page()) {
            wp_enqueue_style( 'elysium-education-home-css', get_stylesheet_directory_uri() . '/assets/css/education/education-home.css', array('astra-theme-css'), time(), 'all' );
        }
    
        if(is_page('schools')) {
            wp_enqueue_style( 'elysium-education-schools-css', get_stylesheet_directory_uri() . '/assets/css/education/schools.css', array('astra-theme-css'), time(), 'all' );
        }
            
    }
    
      /*--END CHILDREN AND EDUACTION--*/
      
      
      
      
    /*--START PRIVATE HEALTH---*/
     
    if($current_site == 6) {
        if(is_home() || is_front_page()){
            wp_enqueue_style( 'elysium-private-home-css', get_stylesheet_directory_uri() . '/assets/css/private/home.css', array('astra-theme-css'), time(), 'all' );
        }
        
        if(is_page('treatments') || is_page('conditions-treatments') || is_page('gp-resources') ) {  
            wp_enqueue_style( 'elysium-private-conditions-css', get_stylesheet_directory_uri() . '/assets/css/private/treatments.css', array('astra-theme-css'), time(), 'all' );
        }
        
        if(is_page('consultant-therapist-directory')) {
            wp_enqueue_style( 'elysium-private-consultant-css', get_stylesheet_directory_uri() . '/assets/css/private/consultant.css', array('astra-theme-css'), time(), 'all' );
        }
        
        if(is_page('client-information')) {
            wp_enqueue_style( 'elysium-private-client-info-css', get_stylesheet_directory_uri() . '/assets/css/private/client-info.css', array('astra-theme-css'), time(), 'all' );
        }
        
        wp_enqueue_style( 'elysium-private-testimonial-css', get_stylesheet_directory_uri() . '/assets/css/private/testimonial.css', array('astra-theme-css'), time(), 'all' );
       
        
    }
    
    /*--END PRIVATE HEALTH---*/
    
    /*--START LDA --*/
  
    if($current_site == 7) {
        
        if(is_home() || is_front_page() || is_page('services') ){
            wp_enqueue_style( 'elysium-lda-global-css', get_stylesheet_directory_uri() . '/assets/css/learning-disabilities-autism/lda-global.css', array('astra-theme-css'), time(), 'all' );
        }
        
        if(is_home() || is_front_page()){
            wp_enqueue_style( 'elysium-learning-disabilities-home-css', get_stylesheet_directory_uri() . '/assets/css/learning-disabilities-autism/home.css', array('astra-theme-css'), time(), 'all' );
        }
        
        if(is_page('hospitals') || is_page('specialist-autism-spectrum-disorder-care') || is_page('specialist-forensic-care-services') || is_page('personality-disorder-treatment-care') || is_page('specialist-epilepsy-care-men-women') || is_page('high-intesity-services')) {
            wp_enqueue_style( 'elysium-learning-disabilities-hospitals-lda-css', get_stylesheet_directory_uri() . '/assets/css/learning-disabilities-autism/hospitals-lda.css', array('astra-theme-css'), time(), 'all' );
        }
        
        if(is_page('community-based-services') || is_page('our-conferences')) {
            wp_enqueue_style( 'elysium-learning-disabilities-community-based-css', get_stylesheet_directory_uri() . '/assets/css/learning-disabilities-autism/community-based-services.css', array('astra-theme-css'), time(), 'all' );
            wp_enqueue_style( 'elysium-learning-disabilities-conference-css', get_stylesheet_directory_uri() . '/assets/css/learning-disabilities-autism/conference.css', array('astra-theme-css'), time(), 'all' );
        }
        
        if(is_singular("hospital")){
            wp_enqueue_style( 'elysium-learning-disabilities-hospital-single-lda-css', get_stylesheet_directory_uri() . '/assets/css/learning-disabilities-autism/hospitals-single-lda.css', array('astra-theme-css'), time(), 'all' );
        }
    }
    
    /*--END LDA --*/
   
    
    /*---START NEUROLOGICAL---*/
    
    if($current_site == 9) {
    
        if(is_home() || is_front_page() || is_page('services') ){
            wp_enqueue_style( 'elysium-neurological-home-css', get_stylesheet_directory_uri() . '/assets/css/neurological/home.css', array('astra-theme-css'), time(), 'all' );
        }
      
        if(is_page('support')) {
            wp_enqueue_style( 'elysium-neurological-who-we-support-css', get_stylesheet_directory_uri() . '/assets/css/neurological/who-we-support.css', array('astra-theme-css'), time(), 'all' );
        }
    
        if(is_page('service-pathways')) {
            wp_enqueue_style( 'elysium-neurological-service-pathway-css', get_stylesheet_directory_uri() . '/assets/css/neurological/service-pathway.css', array('astra-theme-css'), time(), 'all' );
        }
    
       
         wp_enqueue_style( 'elysium-neurological-locations-css', get_stylesheet_directory_uri() . '/assets/css/neurological/locations.css', array('astra-theme-css'), time(), 'all' );
        
    
        if(is_page('our-expertise')) {
            wp_enqueue_style( 'elysium-neurological-expertise-css', get_stylesheet_directory_uri() . '/assets/css/neurological/expertise.css', array('astra-theme-css'), time(), 'all' );
        }
    
        if(is_page('enquiries-referrals')) {
            wp_enqueue_style( 'elysium-neurological-enquiries-css', get_stylesheet_directory_uri() . '/assets/css/neurological/enquiries.css', array('astra-theme-css'), time(), 'all' );
        }
    
    }
    
     /*---END NEUROLOGICAL---*/
    
      // Single Post  
     
    if (is_singular("post")) {
        wp_enqueue_style('single-post-css', get_stylesheet_directory_uri() . '/assets/css/single-post.css', array(), time(), 'all');
    }
    
    
    /*--START GLOBAL JS--*/    
        
    wp_enqueue_script( 'elysium-bootstrap-min-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array(), time(), true );    
    wp_enqueue_script( 'elysium-header-js', get_stylesheet_directory_uri() . '/assets/js/header.js', array('jquery'), time(), true );
    wp_enqueue_script( 'elysium-footer-js', get_stylesheet_directory_uri() . '/assets/js/footer.js', array('jquery'), time(), true );
    
    /*--END GLOBAL JS--*/ 
}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );



//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );


add_filter( 'elementor_pro/custom_fonts/font_display', function( $current_value, $font_family, $data ) {
	return 'swap';
}, 10, 3 );


if ( version_compare($GLOBALS['wp_version'], '5.0-beta', '>') ) {
    // WP > 5 beta
    add_filter( 'use_block_editor_for_post_type', '__return_false', 100 );
} else {
    // WP < 5 beta
    add_filter( 'gutenberg_can_edit_post_type', '__return_false' );
}



/*
* Elysium functions 
*/
if(file_exists(get_stylesheet_directory().'/inc/elysium-functions.php')) {
    require_once (get_stylesheet_directory().'/inc/elysium-functions.php');
}
if(file_exists(get_stylesheet_directory().'/inc/thinkspace-posts.php')) {
    require_once (get_stylesheet_directory().'/inc/thinkspace-posts.php');
}




//shortcode for nearby locations

add_shortcode('nearby_location_shortcode', 'shortcode_fuction');
function shortcode_fuction($params) {

    $nearby_locations = get_field('nearby_location');

    ob_start();
    
    ?>
    
    <section class="elementor-section elementor-inner-section elementor-element elementor-element-d1b93c3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d1b93c3" data-element_type="section">
    
        <div class="elementor-container elementor-column-gap-default">
            <?php foreach ($nearby_locations as $nearby_location) { ?>
                
                <a href="<?php echo get_permalink($nearby_location); ?>" class="elementor-column custom-style-block elementor-col-25 elementor-inner-column elementor-element elementor-element-21f9aec" data-id="21f9aec" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-7af189f elementor-widget elementor-widget-image" data-id="7af189f" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-image">
                                    <img width="494" height="296" src="<?php echo convert_to_photon(get_field('location_image', $nearby_location), "494,296"); ?>" class="attachment-large size-large" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-bc33c39 elementor-widget elementor-widget-heading" data-id="bc33c39" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default"><?php echo get_the_title($nearby_location); ?></h2>
                            </div>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>
        
    </section>
    
    <?php
    
    $output = ob_get_clean();
    return $output;

}

function convert_to_photon($url, $size = ''){
    $toreplace = str_replace("https://", "https://i0.wp.com/", get_home_url());
    $url = str_replace(get_home_url(), $toreplace, $url);
    if ($size)
        $url = $url."?resize=".$size;
    return $url;
}

//shortcode for site link

add_shortcode('divisions_services', 'divisions_services_fn');
function divisions_services_fn($params) {
    
    $divisions_services = get_field('divisions_services');
    
    ob_start();
    
    if (in_array("Mental Health & Wellbeing", $divisions_services)) { ?>
        <div class="elementor-element elementor-element-cbb5675 button-division-location elementor-widget elementor-widget-heading" data-id="cbb5675" data-element_type="widget" data-widget_type="heading.default" style="background:url(https://elysium.coming-soon.xyz/wp-content/themes/elysium/assets/images/misc/LP-BUTTON-MHWB.png);background-size: cover;background-repeat: no-repeat;background-position: right;">
    		<div class="elementor-widget-container">
    			<h2 class="elementor-heading-title elementor-size-default"><a href="https://elysium.coming-soon.xyz/mental-wellbeing/">Mental Health and Wellbeing<br>
                  <span><i class="fa fa-angle-left"></i> take me there</span></a>
                </h2>
            </div>
    	</div>
    <?php } ?>
    
	
	<?php if (in_array("Learning Disabilities & Autism", $divisions_services)) { ?>
	<div class="elementor-element elementor-element-bb22d84 button-division-location elementor-widget elementor-widget-heading" data-id="bb22d84" data-element_type="widget" data-widget_type="heading.default" style="background:url(https://elysium.coming-soon.xyz/wp-content/themes/elysium/assets/images/misc/LP-BUTTON-LDA.png);background-size: cover;background-repeat: no-repeat;background-position: right;">
		<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default"><a href="https://elysium.coming-soon.xyz/learning-disabilities-autism/">Learning Disabilities &amp; Autism<br>
                <span><i class="fa fa-angle-left"></i> take me there</span></a>
            </h2>		
        </div>
	</div>
      <?php } ?>
	   
	<?php if (in_array("Neurological", $divisions_services)) { ?>
	<div class="elementor-element elementor-element-bb22d84 button-division-location elementor-widget elementor-widget-heading" data-id="bb22d84" data-element_type="widget" data-widget_type="heading.default" style="background:url(https://elysium.coming-soon.xyz/wp-content/themes/elysium/assets/images/misc/LP-BUTTON-NEURO.png);background-size: cover;background-repeat: no-repeat;background-position: right;">
		<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default"><a href="https://elysium.coming-soon.xyz/neurological/">Neurological<br>
                <span><i class="fa fa-angle-left"></i> take me there</span></a>
            </h2>		
        </div>
	</div>
	<?php } ?>
		
	<?php if (in_array("Children & Education", $divisions_services)) { ?>	
	<div class="elementor-element elementor-element-bb22d84 button-division-location elementor-widget elementor-widget-heading" data-id="bb22d84" data-element_type="widget" data-widget_type="heading.default" style="background:url(https://elysium.coming-soon.xyz/wp-content/themes/elysium/assets/images/misc/LP-BUTTON-CEDU.png);background-size: cover;background-repeat: no-repeat;background-position: right;">
		<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default"><a href="https://elysium.coming-soon.xyz/education/">Children & Education<br>
                <span><i class="fa fa-angle-left"></i> take me there</span></a>
            </h2>		
        </div>
	</div>
    <?php } ?>
	
	<?php if (in_array("Elysium Therapy Brighton", $divisions_services)) { ?>
	<div class="elementor-element elementor-element-bb22d84 button-division-location elementor-widget elementor-widget-heading" data-id="bb22d84" data-element_type="widget" data-widget_type="heading.default" style="background:url(https://elysium.coming-soon.xyz/wp-content/themes/elysium/assets/images/misc/LP-BUTTON-PRIV.png);background-size: cover;background-repeat: no-repeat;background-position: right;">
		<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default"><a href="https://elysium.coming-soon.xyz/private/">Elysium Therapy Brighton<br>
                <span><i class="fa fa-angle-left"></i> take me there</span></a>
            </h2>		
        </div>
	</div>
    <?php } ?>
    
    <?php
    
    $output = ob_get_clean();
    return $output;

}



//shortcode for side menu location

add_shortcode('side_menu', 'side_menu_fn');
function side_menu_fn($params) {
    
    $side_menu_location   = get_field('side_menu_location');
  
    
    ob_start();
    ?>
            <ul id="menu-side-menu-location" class="menu">
                <?php
                    if (have_rows('side_menu_location')) :
                        while (have_rows('side_menu_location')) : the_row();
                            $submenu = get_sub_field('sub_menu');
                            
                            ?>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom <?php echo $submenu ? 'menu-item-has-children' : ''; ?>">
                                    <a href="<?php the_sub_field('main_menu_link'); ?>" class="menu-link"><?php the_sub_field('main_menu_label'); ?></a>
                                    <?php if ($submenu) { ?>
                                    <ul class="sub-menu">
                                        <?php
                                            while (have_rows('sub_menu')) : the_row();
                                                ?> 
                                                	<li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                	    <a href="<?php the_sub_field('sub_menu_url'); ?>" class="menu-link"><?php the_sub_field('sub_menu_label'); ?></a>
                                            	    </li>
                                                <?php
                                            endwhile;
                                            
                                        ?>  
                                    </ul>
                                    <?php } ?>
                                </li>
                            <?php 
                         endwhile;
                    endif;
                ?>
            </ul>
    
    <?php
    
    $output = ob_get_clean();
    return $output;

}








add_shortcode('cqc_reports_location', 'cqc_reports_location');
function cqc_reports_location(){
	if (!\Elementor\Plugin::$instance->editor->is_edit_mode()   &&  !is_admin()){
		return get_field('cqc_report_script');
	}
}


//ADD SITE ID

add_filter( 'body_class', function( $classes ) {
    $siteid = get_current_blog_id();
    return array_merge( $classes, array( 'siteid-'.$siteid ) );
} ); 




//ADD SEARCH 

add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);

// Display fontawesome search icon in menus and toggle search form 

function add_search_form($items, $args) {
if( $args->theme_location == 'primary' )
       $items .= '<li class="search"><a class="search_icon"><i class="fa fa-search"></i></a><div style="display:none;" class="spicewpsearchform">'. get_search_form(false) .'</div></li>';
       return $items;
}