<?php

/**
 *  Load the options for  : Custom Post Type , Taxanomies 
 * 
 * @author Younes DRO<dro66_8@hotmail.fr>
 * @todo To use a YAML file 
 */

/* * ***************************************************************
 *  Post Type options 
 * **************************************************************** */
$posttypes = array();

// Pizza
$pizza_labels = array(
    'name' => _x('Pizza', 'post type general name'),
    'singular_name' => _x('Pizza', 'post type singular name'),
    'add_new' => _x('Add New', 'Pizza'),
    'add_new_item' => __('Add New Pizza'),
    'edit_item' => __('Edit Pizza'),
    'new_item' => __('New Pizza'),
    'all_items' => __('All Pizzas'),
    'view_item' => __('View Pizza'),
    'search_items' => __('Search Pizzas'),
    'not_found' => __('No pizzas found'),
    'not_found_in_trash' => __('No pizzas found in the Trash'),
    'parent_item_colon' => '',
    'menu_name' => 'Pizzas'
);
$pizza_options = array(
    'labels' => $pizza_labels,
    'description' => 'Holds our pizzas and pizza specific data',
    'public' => true,
    'menu_position' => 5,
    'menu_icon' => dirname(plugin_dir_url(__FILE__)).'/assets/images/pizza_16.png',
    'supports' => array('title', 'excerpt', 'thumbnail'),
    'has_archive' => true,
    'rewrite' => array(
        'slug' => 'dro-shop'
    )
);


$posttypes['pizza'] = array(
    'posttype_options' => $pizza_options
);

/* * ******************************* End Post type  options ******************* */

 
 
/* * ***************************************************************
 * 
 *  Taxonomies  options 
 * 
 * **************************************************************** */
$taxonomies = array();

// Taxonomy  : Famille de Pizza (example : Creme or Sauce , Alan ..) 
$pizza_type = array(
    'name' => _x('Type de Pizza', 'taxonomy general name'),
    'singular_name' => _x('Type de Pizza', 'taxonomy singular name'),
    'search_items' => __('Search Type de Pizza'),
    'all_items' => __('All Product '),
    'parent_item' => __('Parent Type de Pizza'),
    'parent_item_colon' => __('Parent Type de Pizza:'),
    'edit_item' => __('Edit Type de Pizza'),
    'update_item' => __('Update Type de Pizza'),
    'add_new_item' => __('Add New Type de Pizza'),
    'new_item_name' => __('New Type de Pizza'),
    'menu_name' => __('Type de Pizza'),
);

$taxonomies['type_pizza'] = array(
    'post_types' => array('pizza'),// ID post type
    'description' =>' La base des Pizzas',
    'options' => array(
        'labels' => $pizza_type,
        'hierarchical' => true,
    ),
);

// Taxonomy: Menus
//$panninis = array(
//    'name' => _x('Type de Menus', 'taxonomy Menus'),
//    'singular_name' => _x('Type de Menus', 'taxonomy singular name'),
//    'search_items' => __('Search Menus'),
//    'all_items' => __('All Menus '),
//    'parent_item' => __('Parent Menus'),
//    'parent_item_colon' => __('Parent Menus:'),
//    'edit_item' => __('Edit Menus'),
//    'update_item' => __('Update Menus'),
//    'add_new_item' => __('Add New Menus'),
//    'new_item_name' => __('New Menus'),
//    'menu_name' => __('Menus'),
//);
//
//$taxonomies['panninis'] = array(
//    'post_types' => array('pannini'), // ID post type
//    'options' => array(
//        'labels' => $panninis,
//        'hierarchical' => true,
//    ),
//);

/* * ******************************* End Taxonomies options ******************* /

