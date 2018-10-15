<?php

/* -----------------------------------------
 * Price : regular price and promo price  
 * 
 * ----------------------------------------- */

add_action('add_meta_boxes', 'init_metabox');

function init_metabox() {

    /**
     * create_prices_field() callback  create fields for all prices 
     */
    add_meta_box('price_pizza', 'Prix', 'create_prices_field', 'pizza', 'normal');
    
}

function create_prices_field($post) {

    $price_junior = get_post_meta($post->ID, 'price_junior', true);
    echo '<label for="price_junior">Prix Junior :</label>';
    echo '<input class="widefat" id="price_junior" type="text" name="price_junior" value="' . $price_junior . '" />';

    $price_senior = get_post_meta($post->ID, 'price_senior', true);
    echo '<label for="price_senior">Prix Sénior :</label>';
    echo '<input class="widefat" id="price_senior" type="text" name="price_senior" value="' . $price_senior . '" />';

    $price_famille = get_post_meta($post->ID, 'price_famille', true);
    echo '<label for="price_famille">Prix Famille :</label>';
    echo '<input class="widefat" id="price_famille" type="text" name="price_famille" value="' . $price_famille . '" />';
    
}

add_action('save_post', 'save_price_pizza');

function save_price_pizza($post_id) {
    if (isset($_POST['price_junior']))
        update_post_meta($post_id, 'price_junior', strip_tags($_POST['price_junior']));

    if (isset($_POST['price_senior']))
        update_post_meta($post_id, 'price_senior', strip_tags($_POST['price_senior']));

    if (isset($_POST['price_famille']))
        update_post_meta($post_id, 'price_famille', strip_tags($_POST['price_famille']));
}



/* Define the custom box */

//add_action( 'add_meta_boxes', 'myplugin_add_custom_box' );
//
//// backwards compatible (before WP 3.0)
//// add_action( 'admin_init', 'myplugin_add_custom_box', 1 );
//
///* Do something with the data entered */
//add_action( 'save_post', 'myplugin_save_postdata' );
//
///* Adds a box to the main column on the Post and Page edit screens */
//function myplugin_add_custom_box() {
//    $screens = array( 'post', 'page' );
//    foreach ($screens as $screen) {
//        add_meta_box(
//            'myplugin_sectionid',
//            __( 'My Post Section Title', 'myplugin_textdomain' ),
//            'myplugin_inner_custom_box',
//            $screen
//        );
//    }
//}
//
///* Prints the box content */
//function myplugin_inner_custom_box( $post ) {
//
//  // Use nonce for verification
//  wp_nonce_field( plugin_basename( __FILE__ ), 'myplugin_noncename' );
//
//  // The actual fields for data entry
//  // Use get_post_meta to retrieve an existing value from the database and use the value for the form
//  $value = get_post_meta( $_POST['post_ID'], $key = '_my_meta_value_key', $single = true );
//  echo '<label for="myplugin_new_field">';
//       _e("Description for this field", 'myplugin_textdomain' );
//  echo '</label> ';
//  echo '<input type="text" id="myplugin_new_field" name="myplugin_new_field" value="'.esc_attr($value).'" size="25" />';
//}
//
///* When the post is saved, saves our custom data */
//function myplugin_save_postdata( $post_id ) {
//
//  // First we need to check if the current user is authorised to do this action. 
//  if ( 'page' == $_POST['post_type'] ) {
//    if ( ! current_user_can( 'edit_page', $post_id ) )
//        return;
//  } else {
//    if ( ! current_user_can( 'edit_post', $post_id ) )
//        return;
//  }
//
//  // Secondly we need to check if the user intended to change this value.
//  if ( ! isset( $_POST['myplugin_noncename'] ) || ! wp_verify_nonce( $_POST['myplugin_noncename'], plugin_basename( __FILE__ ) ) )
//      return;
//
//  // Thirdly we can save the value to the database
//
//  //if saving in a custom table, get post_ID
//  $post_ID = $_POST['post_ID'];
//  //sanitize user input
//  $mydata = sanitize_text_field( $_POST['myplugin_new_field'] );
//
//  // Do something with $mydata 
//  // either using 
//  add_post_meta($post_ID, '_my_meta_value_key', $mydata, true) or
//    update_post_meta($post_ID, '_my_meta_value_key', $mydata);
//  // or a custom table (see Further Reading section below)
//}
