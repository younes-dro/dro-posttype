<?php

/**
 * CheckBox Promo
 */
function prfx_featured_meta() {
    add_meta_box('prfx_meta', __('Promotion', 'dro-alan-pizza'), 'prfx_meta_callback', 'pizza', 'normal');
}

add_action('add_meta_boxes', 'prfx_featured_meta');

/**
 * Outputs the content of the meta box
 */
function prfx_meta_callback($post) {
    wp_nonce_field(basename(__FILE__), 'prfx_nonce');
    $prfx_stored_meta = get_post_meta($post->ID);
    ?>
    <table class="wp-list-table widefat fixed striped posts">
        <tr class="iedit hentry">
            <th class="check-column" scope="row">
                <input type="checkbox" name="promo" id="promo" value="yes" <?php if (isset($prfx_stored_meta['promo'])) checked($prfx_stored_meta['promo'][0], 'yes'); ?> />

            </th>
            <td class="title column-title has-row-actions column-primary page-title">
                <span class="prfx-row-title"><?php _e('(Cocher la case si la Pizza est en Promotion)', 'prfx-textdomain') ?></span>
            </td>
            <td class="list-price-promo">
                <p>
                    <?php
                    $price_junior_promo = get_post_meta($post->ID, 'price_junior_promo', true);
                    echo '<label for="price_junior_promo">Promo Junior :</label>';
                    echo '<input class="widefat" id="price_junior_promo" type="text" name="price_junior_promo" value="' . $price_junior_promo . '" />';
                    ?>
                </p>
                <p>
                    <?php
                    $price_senior_promo = get_post_meta($post->ID, 'price_senior_promo', true);
                    echo '<label for="price_senior_promo">Promo Sénior :</label>';
                    echo '<input class="widefat" id="price_senior_promo" type="text" name="price_senior_promo" value="' . $price_senior_promo . '" />';
                    ?>
                </p>
                <p>
                    <?php
                    $price_famille_promo = get_post_meta($post->ID, 'price_famille_promo', true);
                    echo '<label for="price_famille_promo">Promo Familier :</label>';
                    echo '<input class="widefat" id="price_famille_promo" type="text" name="price_famille_promo" value="' . $price_famille_promo . '" />';
                    ?>
                </p>
            </td>
        </tr>
    </table>


    <?php
}

/**
 * Saves the custom meta input
 */
function prfx_meta_save($post_id) {

    // Checks save status - overcome autosave, etc.
    $is_autosave = wp_is_post_autosave($post_id);
    $is_revision = wp_is_post_revision($post_id);
    $is_valid_nonce = ( isset($_POST['prfx_nonce']) && wp_verify_nonce($_POST['prfx_nonce'], basename(__FILE__)) ) ? 'true' : 'false';

    // Exits script depending on save status
    if ($is_autosave || $is_revision || !$is_valid_nonce) {
        return;
    }

// Checks for input and saves - save checked as yes and unchecked at no
    if (isset($_POST['promo'])) {
        update_post_meta($post_id, 'promo', 'yes');
    } else {
        update_post_meta($post_id, 'promo', 'no');
    }
    
    if (isset($_POST['price_junior_promo']))
        update_post_meta($post_id, 'price_junior_promo', strip_tags($_POST['price_junior_promo']));

    if (isset($_POST['price_senior_promo']))
        update_post_meta($post_id, 'price_senior_promo', strip_tags($_POST['price_senior_promo']));

    if (isset($_POST['price_famille_promo']))
        update_post_meta($post_id, 'price_famille_promo', strip_tags($_POST['price_famille_promo']));    
}

add_action('save_post', 'prfx_meta_save');


