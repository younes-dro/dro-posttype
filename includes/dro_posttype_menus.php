<?php

/* * ***************************************************************
 * 
 *  Menus :
 * 1 - Menu panini
 * 2 - Menu Swicth
 * 3 - Menu Spécial Midi
 * 4 - Menu Enfant
 * 5 - Chicken Wings
 * 6 - The 3 Menu ( Perso , Duo, Familier )
 * 
 * **************************************************************** */

//--------------------------------------------- Panini
$panini_labels = array(
    'name' => _x('Menu Panini', 'post type general name'),
    'singular_name' => _x('Menu Panini', 'post type singular name'),
    'add_new' => _x('Add New', 'Menu Panini'),
    'add_new_item' => __('Add New Menu Panini'),
    'edit_item' => __('Edit Menu Panini'),
    'new_item' => __('New Menu Panini'),
    'all_items' => __('All Menu Paninis'),
    'view_item' => __('View Menu Panini'),
    'search_items' => __('Search Menu Panini'),
    'not_found' => __('No Menu Paninis found'),
    'not_found_in_trash' => __('No Menu Paninis found in the Trash'),
    'parent_item_colon' => '',
    'menu_name' => 'Menu Paninis'
);
$panini_options = array(
    'labels' => $panini_labels,
    'description' => 'Holds our Menu Paninis and pizza specific data',
    'public' => true,
    'menu_position' => 5,
    'menu_icon' => dirname(plugin_dir_url(__FILE__)) . '/assets/images/panini_16.png',
    'supports' => array('title', 'excerpt', 'thumbnail'),
    'has_archive' => true,
    'rewrite' => array(
        'slug' => 'dro-shop'
    )
);
$posttypes['panini'] = array(
    'posttype_options' => $panini_options
);

//--------------------------------------------- Swicth

$switch_labels = array(
    'name' => _x('Menu Switch', 'post type general name'),
    'singular_name' => _x('Menu Switch', 'post type singular name'),
    'add_new' => _x('Add New', 'Menu Switch'),
    'add_new_item' => __('Add New Menu Switch'),
    'edit_item' => __('Edit Menu Switch'),
    'new_item' => __('New Menu Switch'),
    'all_items' => __('All Menu Switchs'),
    'view_item' => __('View Menu Switch'),
    'search_items' => __('Search Menu Switch'),
    'not_found' => __('No Menu Switchs found'),
    'not_found_in_trash' => __('No Menu Switchs found in the Trash'),
    'parent_item_colon' => '',
    'menu_name' => 'Menu Switchs'
);
$switch_options = array(
    'labels' => $switch_labels,
    'description' => 'Holds our Menu Switchs and pizza specific data',
    'public' => true,
    'menu_position' => 5,
    'menu_icon' => dirname(plugin_dir_url(__FILE__)) . '/assets/images/icons8-nachos-48.png',
    'supports' => array('title', 'excerpt', 'thumbnail'),
    'has_archive' => true,
    'rewrite' => array(
        'slug' => 'dro-shop'
    )
);
$posttypes['switch'] = array(
    'posttype_options' => $switch_options
);

//--------------------------------------------- Spécial Midi

$special_midi_labels = array(
    'name' => _x('Menu Spécial Midi', 'post type general name'),
    'singular_name' => _x('Menu Spécial Midi', 'post type singular name'),
    'add_new' => _x('Add New', 'Menu Spécial Midi'),
    'add_new_item' => __('Add New Menu Spécial Midi'),
    'edit_item' => __('Edit Menu Spécial Midi'),
    'new_item' => __('New Menu Spécial Midi'),
    'all_items' => __('All Menu Spécial Midis'),
    'view_item' => __('View Menu Spécial Midi'),
    'search_items' => __('Search Menu Spécial Midi'),
    'not_found' => __('No Menu Spécial Midis found'),
    'not_found_in_trash' => __('No Menu Spécial Midis found in the Trash'),
    'parent_item_colon' => '',
    'menu_name' => 'Menu Spécial Midis'
);
$special_midi_options = array(
    'labels' => $special_midi_labels,
    'description' => 'Holds our Menu Spécial Midis and pizza specific data',
    'public' => true,
    'menu_position' => 5,
    'menu_icon' => dirname(plugin_dir_url(__FILE__)) . '/assets/images/icons8-meal-48.png',
    'supports' => array('title', 'excerpt', 'thumbnail'),
    'has_archive' => true,
    'rewrite' => array(
        'slug' => 'dro-shop'
    )
);
$posttypes['special_midi'] = array(
    'posttype_options' => $special_midi_options
);

//--------------------------------------------- Menu Enfant

$enfant_labels = array(
    'name' => _x('Menu Enfant', 'post type general name'),
    'singular_name' => _x('Menu Enfant', 'post type singular name'),
    'add_new' => _x('Add New', 'Menu Enfant'),
    'add_new_item' => __('Add New Menu Enfant'),
    'edit_item' => __('Edit Menu Enfant'),
    'new_item' => __('New Menu Enfant'),
    'all_items' => __('All Menu Enfants'),
    'view_item' => __('View Menu Enfant'),
    'search_items' => __('Search Menu Enfant'),
    'not_found' => __('No Menu Enfants found'),
    'not_found_in_trash' => __('No Menu Enfants found in the Trash'),
    'parent_item_colon' => '',
    'menu_name' => 'Menu Enfants'
);
$enfant_options = array(
    'labels' => $enfant_labels,
    'description' => 'Holds our Menu Enfants and pizza specific data',
    'public' => true,
    'menu_position' => 5,
    'menu_icon' => dirname(plugin_dir_url(__FILE__)) . '/assets/images/children.png',
    'supports' => array('title', 'excerpt', 'thumbnail'),
    'has_archive' => true,
    'rewrite' => array(
        'slug' => 'dro-shop'
    )
);
$posttypes['enfant'] = array(
    'posttype_options' => $enfant_options
);

//--------------------------------------------- Chiken Wings

$chicken_labels = array(
    'name' => _x('Menu chicken', 'post type general name'),
    'singular_name' => _x('Menu chicken', 'post type singular name'),
    'add_new' => _x('Add New', 'Menu chicken'),
    'add_new_item' => __('Add New Menu chicken'),
    'edit_item' => __('Edit Menu chicken'),
    'new_item' => __('New Menu chicken'),
    'all_items' => __('All Menu chickens'),
    'view_item' => __('View Menu chicken'),
    'search_items' => __('Search Menu chicken'),
    'not_found' => __('No Menu chickens found'),
    'not_found_in_trash' => __('No Menu chickens found in the Trash'),
    'parent_item_colon' => '',
    'menu_name' => 'Menu chickens'
);
$chicken_options = array(
    'labels' => $chicken_labels,
    'description' => 'Holds our Menu chickens and pizza specific data',
    'public' => true,
    'menu_position' => 5,
    'menu_icon' => dirname(plugin_dir_url(__FILE__)) . '/assets/images/chicken.png',
    'supports' => array('title', 'excerpt', 'thumbnail'),
    'has_archive' => true,
    'rewrite' => array(
        'slug' => 'dro-shop'
    )
);
$posttypes['chicken'] = array(
    'posttype_options' => $chicken_options
);

//--------------------------------------------- The 3 menu

$three_menu_labels = array(
    'name' => _x('Menu singular', 'post type general name'),
    'singular_name' => _x('Menu singular', 'post type singular name'),
    'add_new' => _x('Add New', 'Menu singular'),
    'add_new_item' => __('Add New Menu singular'),
    'edit_item' => __('Edit Menu singular'),
    'new_item' => __('New Menu singular'),
    'all_items' => __('All Menu singulars'),
    'view_item' => __('View Menu singular'),
    'search_items' => __('Search Menu singular'),
    'not_found' => __('No Menu singulars found'),
    'not_found_in_trash' => __('No Menu singulars found in the Trash'),
    'parent_item_colon' => '',
    'menu_name' => '3 Menus '
);
$three_menu_options = array(
    'labels' => $three_menu_labels,
    'description' => 'Holds our Menu singulars and pizza specific data',
    'public' => true,
    'menu_position' => 5,
    'menu_icon' => dirname(plugin_dir_url(__FILE__)) . '/assets/images/3-menus.png',
    'supports' => array('title', 'excerpt', 'thumbnail'),
    'has_archive' => true,
    'rewrite' => array(
        'slug' => 'dro-shop'
    )
);
$posttypes['three_menu'] = array(
    'posttype_options' => $three_menu_options
);



