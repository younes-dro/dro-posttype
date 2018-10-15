<?php

/*
 * Plugin Name: DRO Post Type
 * Plugin URI: https://github.com/younes-dro/dro-posttype
 * Author: Younes DRO
 * Author URI: http://www.dro.123.fr
 * Version: 1.0.0
 * License: GPLv2 or later
 * Description: Class generator for post type and taxanomies and custom post meta
 * Text Domain: dro-alan-pizza
 */

include plugin_dir_path(__FILE__) . 'includes/dro_posttype_pizzas.php';
include plugin_dir_path(__FILE__) . 'includes/dro_posttype_menus.php';
include plugin_dir_path(__FILE__) . 'includes/class-dro-posttype.php';
include plugin_dir_path(__FILE__) . 'includes/class-dro-taxonomies.php';
include plugin_dir_path(__FILE__) . 'includes/class-dro-metaboxes.php';


/**
 *  Initialze the Class
 */
add_action('init', function() {

    global $posttypes, $taxonomies;

    /**
     * Create the Post Types 
     */
    $dro_post_type = new DRO_PostType($posttypes);
    $dro_post_type->register_post_type();

    /**
     * Create the taxonomies
     */
    $dro_taxonomies = new DRO_Taxonomies($taxonomies);
    $dro_taxonomies->create_taxanomies();

    /**
     * Add Custom Post Type columns for Pizza Screen Edit 
     */
    add_filter('manage_edit-pizza_columns', function($pizza_columns) {
        $pizza_columns['type_pizza'] = __('Type de Pizza');
        $pizza_columns['prices'] = __('Prix');


        $pizza_columns['promo'] = __('Pomo');

        return $pizza_columns;
    });
    add_action('manage_pizza_posts_custom_column', 'manage_pizza_colums', 10, 2);

    function manage_pizza_colums($column_name, $id) {
        global $wpdb;
        switch ($column_name) {

            case 'type_pizza':
                $type_pizza_sql = "SELECT t.term_id, t.name 
                    FROM $wpdb->terms t
                    inner join $wpdb->term_taxonomy tt on tt.term_id = t.term_id
                    where tt.taxonomy = 'type_pizza'";
                $type_pizza_results = $wpdb->get_results($type_pizza_sql, ARRAY_A);
                $current_type_pizza = "SELECT t.term_id
                    FROM $wpdb->term_relationships tr
                    join $wpdb->terms t on t.term_id = tr.term_taxonomy_id 
                    where tr.object_id =" . $id;
                $current_row = $wpdb->get_row($current_type_pizza, ARRAY_A);
                echo "<input type='button' id='ala' value='clikc' />";
                echo "<select name='type_pizza_select_$id' id='type_pizza_select_$id' class='widefat tax_type_pizza'>";
                echo '<option disabled="disabled">-</option>';
                foreach ($type_pizza_results as $key => $value) {
                    $selected = ($current_row['term_id'] === $value['term_id']) ? 'selected="selected"' : '';
                    echo '<option ' . $selected . ' value="' . $value['term_id'] . '">' . $value['name'] . '</value>';
                }
                echo '</select>';
                break;
            default:
                break;
        }
    }

    add_action('admin_enqueue_scripts', 'dro_posttype_scripts');
});

/**
 * Change the Excerpt label
 */
add_filter('gettext', 'wpse22764_gettext', 10, 2);

function wpse22764_gettext($translation, $original) {
    if ('Excerpt' == $original) {
        return 'Ingrédients';
    } else {
        $pos = strpos($original, 'Excerpts are optional hand-crafted summaries of your');
        if ($pos !== false) {
            return 'Ingrédients';
        }
    }
    return $translation;
}

/**
 * Enqueueing JS and CSS
 */
function dro_posttype_scripts($hook) {

    $screen = get_current_screen();
    if ($hook == 'post-new.php' || $hook == 'post.php' || $hook == 'edit.php') {


        if ($screen->post_type === 'pizza') {
            wp_enqueue_style('dro-posttype-css', plugins_url('assets/css/dro-posttype-css.css', __FILE__));
            //js 
            wp_enqueue_script('dro-posttype-js', plugins_url('assets/js/dro-posttype-js.js', __FILE__), array('jquery'));
        }
    }
}
