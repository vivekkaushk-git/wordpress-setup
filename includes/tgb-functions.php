<?php


// Disable gutenberg

if ( version_compare($GLOBALS['wp_version'], '5.0-beta', '>') ) {
    // WP > 5 beta
    add_filter( 'use_block_editor_for_post_type', '__return_false', 100 );
} else {
    // WP < 5 beta
    add_filter( 'gutenberg_can_edit_post_type', '__return_false' );
}


//Enable upload for webp image files.

function webp_upload_mimes($existing_mimes) {
    $existing_mimes['webp'] = 'image/webp';
    return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');


// Enable preview / thumbnail for webp image files.

function webp_is_displayable($result, $path) {
    if ($result === false) {
        $displayable_image_types = array( IMAGETYPE_WEBP );
        $info = @getimagesize( $path );

        if (empty($info)) {
            $result = false;
        } elseif (!in_array($info[2], $displayable_image_types)) {
            $result = false;
        } else {
            $result = true;
        }
    }

    return $result;
}
add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);


add_action('init', function() {
	add_rewrite_endpoint('account-uploads', EP_ROOT | EP_PAGES);
});

add_filter('woocommerce_account_menu_items', function($items) {
	$logout = $items['customer-logout'];
	unset($items['customer-logout']);
	$user_type = get_user_meta(get_current_user_id(), 'user_type', true);

	if (current_user_can('administrator') || $user_type == "RYA Club/Centre" || $user_type == "University Sailing Club"){
		$items['account-uploads'] = __('Account uploads', 'tgb');
	}
	
	$items['customer-logout'] = $logout;
	return $items;
});

add_action('woocommerce_account_account-uploads_endpoint', function() {
	wc_get_template('myaccount/account-uploads.php');
});

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 1);

add_filter( 'woocommerce_product_tabs', '__return_empty_array', 98 );

add_filter( 'woocommerce_product_related_products_heading', function(){ return 'You may also like ...'; } );

add_action('woocommerce_before_add_to_cart_form', 'woocommerce_before_add_to_cart_form_show_downloadable');
function woocommerce_before_add_to_cart_form_show_downloadable(){
    echo get_field('resource_downloadable_file') ? '<a style="text-align:center; display:block; margin: 2em 0" target="_blank" href="'.get_field('resource_downloadable_file').'" class="ast-button">Download a Copy</a><span style="display:block; margin: 0 0 1em">Order hardcopies</span>' : '';    
}


/**
 * @snippet       Add First & Last Name to My Account Register Form - WooCommerce
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @compatible    WC 3.9
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */
  
///////////////////////////////
// 1. ADD FIELDS
  
add_action( 'woocommerce_register_form_start', 'bbloomer_add_name_woo_account_registration' );
  
function bbloomer_add_name_woo_account_registration() {
    ?>
  
    <p class="form-row form-row-first">
    <label for="reg_billing_first_name"><?php _e( 'First name', 'woocommerce' ); ?> <span class="required">*</span></label>
    <input type="text" class="input-text" name="billing_first_name" id="reg_billing_first_name" value="<?php if ( ! empty( $_POST['billing_first_name'] ) ) esc_attr_e( $_POST['billing_first_name'] ); ?>" />
    </p>
  
    <p class="form-row form-row-last">
    <label for="reg_billing_last_name"><?php _e( 'Last name', 'woocommerce' ); ?> <span class="required">*</span></label>
    <input type="text" class="input-text" name="billing_last_name" id="reg_billing_last_name" value="<?php if ( ! empty( $_POST['billing_last_name'] ) ) esc_attr_e( $_POST['billing_last_name'] ); ?>" />
    </p>
  
    <div class="clear"></div>

    <p class="form-row form-row-first">
    <label for="reg_billing_phone"><?php _e( 'Phone Number', 'woocommerce' ); ?> <span class="required">*</span></label>
    <input type="text" class="input-text" name="billing_phone" id="reg_billing_phone" value="<?php if ( ! empty( $_POST['billing_phone'] ) ) esc_attr_e( $_POST['billing_phone'] ); ?>" />
    </p>
  
    <p class="form-row form-row-last">
    <label for="reg_billing_company"><?php _e( 'Company/Organisation', 'woocommerce' ); ?></label>
    <input type="text" class="input-text" name="billing_company" id="reg_billing_company" value="<?php if ( ! empty( $_POST['billing_company'] ) ) esc_attr_e( $_POST['billing_company'] ); ?>" />
    </p>

    <div class="clear"></div>

    <p class="form-row">
    <label for="reg_user_type"><?php _e( 'Type of User?', 'tgb' ); ?> <span class="required">*</span></label>
    <select class="input-select" name="user_type" id="reg_user_type" />
        <option>Individual</option>
        <option>Organisation</option>
        <option>Business</option>
        <option>RYA Club/Centre</option>
        <option>University Sailing Club</option>        
    </select>    
    </p>

    <div class="clear"></div>

    <?php
}
  
///////////////////////////////
// 2. VALIDATE FIELDS
  
add_filter( 'woocommerce_registration_errors', 'bbloomer_validate_name_fields', 10, 3 );
  
function bbloomer_validate_name_fields( $errors, $username, $email ) {
    if ( isset( $_POST['billing_first_name'] ) && empty( $_POST['billing_first_name'] ) ) {
        $errors->add( 'billing_first_name_error', __( '<strong>Error</strong>: First name is required!', 'woocommerce' ) );
    }
    if ( isset( $_POST['billing_last_name'] ) && empty( $_POST['billing_last_name'] ) ) {
        $errors->add( 'billing_last_name_error', __( '<strong>Error</strong>: Last name is required!.', 'woocommerce' ) );
    }
    if ( isset( $_POST['billing_phone'] ) && empty( $_POST['billing_phone'] ) ) {
        $errors->add( 'billing_phone_error', __( '<strong>Error</strong>: Phone number is required!.', 'woocommerce' ) );
    }
    if ( isset( $_POST['user_type'] ) && empty( $_POST['user_type'] ) ) {
        $errors->add( 'user_type_error', __( '<strong>Error</strong>: User Type is required!.', 'woocommerce' ) );
    }
    return $errors;
}
  
///////////////////////////////
// 3. SAVE FIELDS
  
add_action( 'woocommerce_created_customer', 'bbloomer_save_name_fields' );
  
function bbloomer_save_name_fields( $customer_id ) {
    if ( isset( $_POST['billing_first_name'] ) ) {
        update_user_meta( $customer_id, 'billing_first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
        update_user_meta( $customer_id, 'first_name', sanitize_text_field($_POST['billing_first_name']) );
    }
    if ( isset( $_POST['billing_last_name'] ) ) {
        update_user_meta( $customer_id, 'billing_last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
        update_user_meta( $customer_id, 'last_name', sanitize_text_field($_POST['billing_last_name']) );
    }
    if ( isset( $_POST['billing_phone'] ) ) {
        update_user_meta( $customer_id, 'billing_phone', sanitize_text_field( $_POST['billing_phone'] ) );
    }
    if ( isset( $_POST['billing_company'] ) ) {
        update_user_meta( $customer_id, 'billing_company', sanitize_text_field( $_POST['billing_company'] ) );
    }
    if ( isset( $_POST['user_type'] ) ) {
        update_user_meta( $customer_id, 'user_type', sanitize_text_field( $_POST['user_type'] ) );
    }
}