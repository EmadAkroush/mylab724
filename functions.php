

<?php


add_theme_support('menus');
add_theme_support('post-thumbnails');

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}


add_theme_support('woocommerce');
//search form 













//shop product 
function shop_page_products(){
     // query arguments 
     $args_shop = array(
         'post_type' => 'product',
         'product_tag' => 'Featured',

     );
     // run the loop 
     $query = new WP_Query($args_shop);
     if ( $query ->  have_posts() ) { }
       
     


}
add_action('','');

// Custom Card Icons shows and create the short code

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); ?></a>
	<?php
	$fragments['a.cart-customlocation'] = ob_get_clean();
	return $fragments;
}
function no_links($thelist) {
    return preg_replace('#<a.*?>([^<]*)</a>#i', '$1', $thelist);
  }
  
  add_filter( 'the_category', 'no_links' );

?>





