<?php

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'tgb-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_TGB_VERSION, 'all' );
	
    wp_enqueue_style( 'tgb-header-css', get_stylesheet_directory_uri() . '/assets/css/header.css', array('astra-theme-css'), time(), 'all' );
    
    
    if(is_home() || is_front_page()){
	        wp_enqueue_style( 'tgb-home-css', get_stylesheet_directory_uri() . '/assets/css/home.css', array('astra-theme-css'), time(), 'all' );
	  }
    
    if(is_page('team')) {
	        wp_enqueue_style( 'tgb-the-team-css', get_stylesheet_directory_uri() . '/assets/css/the-team.css', array('astra-theme-css'), time(), 'all' );
    }
	    
    if(is_page('ambassadors')) {
	        wp_enqueue_style( 'tgb-ambassador-css', get_stylesheet_directory_uri() . '/assets/css/ambassador.css', array('astra-theme-css'), time(), 'all' );
	}
	
	if(is_page('our-partners')) {
	        wp_enqueue_style( 'tgb-partners-css', get_stylesheet_directory_uri() . '/assets/css/partners.css', array('astra-theme-css'), time(), 'all' );
	}
	
	if(is_page('waste-recycling')) {
	        wp_enqueue_style( 'tgb-waste-recycling-css', get_stylesheet_directory_uri() . '/assets/css/waste-recycling.css', array('astra-theme-css'), time(), 'all' );
	}
	
	if(is_page('engine-efficiency')) {
	        wp_enqueue_style( 'tgb-engine-efficiency.css', get_stylesheet_directory_uri() . '/assets/css/engine-efficiency.css', array('astra-theme-css'), time(), 'all' );
	}
	
	if(is_page('clubs-centres-associations')) {
	        wp_enqueue_style( 'tgb-club-centres-association-css', get_stylesheet_directory_uri() . '/assets/css/club-centres-association.css', array('astra-theme-css'), time(), 'all' );
	}
	
	if(is_page('running-a-sustainable-event')) {
	        wp_enqueue_style( 'tgb-running-sustainable-event-css', get_stylesheet_directory_uri() . '/assets/css/running-sustainable-event.css', array('astra-theme-css'), time(), 'all' );
	}
	
	if(is_page('marine-businesses')) {
	        wp_enqueue_style( 'tgb-marine-businesses-css', get_stylesheet_directory_uri() . '/assets/css/marine-businesses.css', array('astra-theme-css'), time(), 'all' );
	}
	
	if(is_page('sustainability-challenge')) {
	        wp_enqueue_style( 'tgb-university-sailing-css', get_stylesheet_directory_uri() . '/assets/css/university-sailing.css', array('astra-theme-css'), time(), 'all' );
	}
	
	if(is_page('saveourseabed')) {
	        wp_enqueue_style( 'tgb-save-our-seabed-css', get_stylesheet_directory_uri() . '/assets/css/save-our-seabed.css', array('astra-theme-css'), time(), 'all' );
	}
	
	if(is_page('waste-management')) {
	        wp_enqueue_style( 'tgb-waste-management-css', get_stylesheet_directory_uri() . '/assets/css/waste-management.css', array('astra-theme-css'), time(), 'all' );
	}
	
	if(is_page('anchoring-with-care')) {
	        wp_enqueue_style( 'tgb-anchoring-with-care-css', get_stylesheet_directory_uri() . '/assets/css/anchoring-with-care.css', array('astra-theme-css'), time(), 'all' );
	}
	
	if(is_page('boating-around-wildlife')) {
	        wp_enqueue_style( 'tgb-boating-around-wildlife-css', get_stylesheet_directory_uri() . '/assets/css/boating-around-wildlife.css', array('astra-theme-css'), time(), 'all' );
	}
	
	if(is_page('invasive-species-prevention')) {
	        wp_enqueue_style( 'tgb-invasive-species-prevention-css', get_stylesheet_directory_uri() . '/assets/css/invasive-species-prevention.css', array('astra-theme-css'), time(), 'all' );
	}
	
	if(is_page('antifouling')) {
	        wp_enqueue_style( 'tgb-antifouling-css', get_stylesheet_directory_uri() . '/assets/css/antifouling.css', array('astra-theme-css'), time(), 'all' );
	}
	
	if(is_page('sewage')) {
	        wp_enqueue_style( 'tgb-sewage-css', get_stylesheet_directory_uri() . '/assets/css/sewage.css', array('astra-theme-css'), time(), 'all' );
	}
	
	if(is_page('cleaning-onboard')) {
	        wp_enqueue_style( 'tgb-cleaning-onboard-css', get_stylesheet_directory_uri() . '/assets/css/cleaning-onboard.css', array('astra-theme-css'), time(), 'all' );
	}
	
	if(is_page('oil-fuel')) {
	        wp_enqueue_style( 'tgb-oil-fuel-css', get_stylesheet_directory_uri() . '/assets/css/oil-fuel.css', array('astra-theme-css'), time(), 'all' );
	}
	
	if(is_page('water-use')) {
	        wp_enqueue_style( 'tgb-water-use-css', get_stylesheet_directory_uri() . '/assets/css/water-use.css', array('astra-theme-css'), time(), 'all' );
	}
	
	if(is_page('energy-use')) {
	        wp_enqueue_style( 'tgb-energy-use-css', get_stylesheet_directory_uri() . '/assets/css/energy-use.css', array('astra-theme-css'), time(), 'all' );
	}
	
	if(is_page('wildlife-habitats')) {
	        wp_enqueue_style( 'tgb-wildlife-habitats-css', get_stylesheet_directory_uri() . '/assets/css/wildlife-habitats.css', array('astra-theme-css'), time(), 'all' );
	}
	
	if(is_page('biosecurity')) {
	        wp_enqueue_style( 'tgb-biosecurity-css', get_stylesheet_directory_uri() . '/assets/css/biosecurity.css', array('astra-theme-css'), time(), 'all' );
	}
	
	if(is_page('catering')) {
	        wp_enqueue_style( 'tgb-catering-css', get_stylesheet_directory_uri() . '/assets/css/catering.css', array('astra-theme-css'), time(), 'all' );
	}
	
	if(is_page('antifoul')) {
	        wp_enqueue_style( 'tgb-antifoul-css', get_stylesheet_directory_uri() . '/assets/css/antifoul.css', array('astra-theme-css'), time(), 'all' );
	}
	
	if(is_page('blackwater')) {
	        wp_enqueue_style( 'tgb-blackwater-css', get_stylesheet_directory_uri() . '/assets/css/blackwater.css', array('astra-theme-css'), time(), 'all' );
	}
	
	if(is_page('cleaning-maintanence')) {
	        wp_enqueue_style( 'tgb-cleaning-maintanence-css', get_stylesheet_directory_uri() . '/assets/css/cleaning-maintanence.css', array('astra-theme-css'), time(), 'all' );
	}
	
	if(is_page('green-blue-business-directory')) {
	        wp_enqueue_style( 'tgb-green-blue-business-directory-css', get_stylesheet_directory_uri() . '/assets/css/green-blue-business-directory.css', array('astra-theme-css'), time(), 'all' );
	}
	
	if(is_page('services')) {
	        wp_enqueue_style( 'tgb-services-css', get_stylesheet_directory_uri() . '/assets/css/services.css', array('astra-theme-css'), time(), 'all' );
	}
	
	if(is_page('resources')) {
	        wp_enqueue_style( 'tgb-resources-css', get_stylesheet_directory_uri() . '/assets/css/resources.css', array('astra-theme-css'), time(), 'all' );
	}
	
	if(is_archive()) {
	        wp_enqueue_style( 'tgb-category-css', get_stylesheet_directory_uri() . '/assets/css/tgb-category.css', array('astra-theme-css'), time(), 'all' );
	}
	
	if(is_singular('product' )) {
	        wp_enqueue_style( 'tgb-product-single-css', get_stylesheet_directory_uri() . '/assets/css/tgb-product-single.css', array('astra-theme-css'), time(), 'all' );
	}
	
	if(is_page('news' )) {
	        wp_enqueue_style( 'tgb-news-css', get_stylesheet_directory_uri() . '/assets/css/tgb-news.css', array('astra-theme-css'), time(), 'all' );
	}
	
	if(is_singular('post' )) {
	        wp_enqueue_style( 'tgb-news-sigle-css', get_stylesheet_directory_uri() . '/assets/css/tgb-news-sigle.css', array('astra-theme-css'), time(), 'all' );
	}

	
}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );