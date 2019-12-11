<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */

function jnp_scripts() {
	wp_enqueue_style( 'jnp-custom-style', get_stylesheet_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'jnp-responsive', get_stylesheet_directory_uri() . '/assets/css/responsive.css' );
}
add_action( 'wp_enqueue_scripts', 'jnp_scripts' );

function storefront_homepage_remove() {
    remove_action( 'homepage', 'storefront_product_categories', 20 );
    remove_action( 'homepage', 'storefront_recent_products', 30 );
    remove_action( 'homepage', 'storefront_featured_products', 40 );
    remove_action( 'homepage', 'storefront_popular_products', 50 );
    remove_action( 'homepage', 'storefront_on_sale_products', 60 );
    remove_action( 'homepage', 'storefront_best_selling_products', 70 );
}

add_action( 'wp_head', 'storefront_homepage_remove', 80 );

// Debug
add_action('wp_head', 'show_template');
function show_template() {
	global $template;
    print_r($template);
}

// Add Product Excerpt to Archive
add_action( 'woocommerce_after_shop_loop_item_title', 'output_product_excerpt', 9 ); 
function output_product_excerpt() { 
   the_excerpt();
}




remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );


/**
 * Change number of products that are displayed per page (shop page)
 */
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = 4;
  return $cols;
}


add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);

function add_my_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'DKK': $currency_symbol = 'kr.'; break;
     }
     return $currency_symbol;
}