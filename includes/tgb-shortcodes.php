<?php

/* DISPLAY ALL PRODUCT CATEGORIES */
add_shortcode('get_categories', 'get_categories_fn');
function get_categories_fn() {
    
    $html = '';
    
    $args = array(
        'taxonomy'   => "product_cat",
        'orderby'    => "title",
        'order'      => "ASC",
        'hide_empty' => false,
        'parent' => 0
        
    );
    
    $categories = get_terms($args);

    if(!empty($categories)) {
        $html  .= '<section id="product_categories" class="elementor-section">';
        $html  .= '<div class="elementor-container elementor-column-gap-default">';

            foreach($categories as $category) {
                
                $cat_id       = $category->term_id;
                $cat_name     = $category->name;
                $cat_link     = get_category_link($cat_id);
                $cat_image_id = get_term_meta($cat_id, 'thumbnail_id', true); 
                $cat_image    = wp_get_attachment_url($cat_image_id);
  
                $html .= '<div class="elementor-column elementor-col-33">';
                $html .= '<div class="category-wrapper">';
                $html .= '<a href="'.$cat_link.'" class="category-link">'; 
                $html .= '<img src="'.$cat_image.'" class="category-image"/>';
                $html .= '</a>';
                $html .= '<a href="'.$cat_link.'" class="btn-circle">'; 
                $html .= '<span>Learn More</span>';
                $html .= '</a>';
                
                $html .= '<h3 class="category-name">'.$cat_name .'</h3>';
                $html .= '</div>'; 
                $html .= '</div>'; 

             }

        $html  .= '</div></section>';

    }

    return $html;
}
/* /DISPLAY ALL PRODUCT CATEGORIES */