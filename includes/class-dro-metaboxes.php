<?php

include plugin_dir_path(__FILE__). 'meta-boxes-prices/prices.php';
include plugin_dir_path(__FILE__). 'meta-boxes-prices/promo.php';

/**
 * 
 * This class generate Meta Boxes
 * 
 * @todo Create a genereric class for creation metabox
 * 
 */
//class DRO_MetaBoxes {
//
//    /**
//     * MetaBoxe options
//     * @var array 
//     */
//    public $metaboxe_options;
//
//    public function __construct($options) {
//
//        $this->metaboxe_options = $options;
//    }
//
//    public function create_metabox() {
//
//        add_action('add_meta_boxes', function() {
//
////            add_meta_box($id, $title, $callback, $screen, $context, $priority, $callback_args)
//        });
//    }
//
//}

/**
 * code rady
 */



//
///* ---------------------- Select box  --- */
//add_action('add_meta_boxes','init_metabox');
//function init_metabox(){
//  add_meta_box('dispo_produit', 'Disponibilité du produit', 'dispo_produit', 'produit', 'side');
//}
//
//function dispo_produit($post){
//  $dispo = get_post_meta($post->ID,'_dispo_produit',true);
//  echo '<label for="dispo_meta">Indiquez la disponibilité du produit :</label>';
//  echo '<select name="dispo_produit">';
//  echo '<option ' . selected( 'dispo', $dispo, false ) . ' value="dispo">En stock</option>';
//  echo '<option ' . selected( 'encours', $dispo, false ) . ' value="encours">En cours d\'approvisionnement</option>';
//  echo '<option ' . selected( 'indispo', $dispo, false ) . ' value="indispo">En rupture</option>';
//  echo '</select>';
//
//}
//
//add_action('save_post','save_metabox');
//function save_metabox($post_id){
//if(isset($_POST['dispo_produit']))
//  update_post_meta($post_id, '_dispo_produit', $_POST['dispo_produit']);
//}
//
///* ---------------------- checkbox  --- */
//
//add_action('add_meta_boxes','init_metabox');
//function init_metabox(){
//  add_meta_box('conditionnement_vin', 'Conditionnements disponnibles pour ce vin', 'conditionnement_vin', 'vins', 'side');
//}
//// cette fonction me sert à inscrire checked, si jamais la valeur est coché
//function check($cible,$test){
//  if(in_array($test,$cible)){return ' checked="checked" ';}
//}
//function conditionnement_vin($post){
//  $cond = get_post_meta($post->ID,'_conditionnement_vin',false);
//  echo 'Indiquez la Conditionnements disponibles :';
//  echo '<label><input type="checkbox" ' . check( $cond, 5 ) . ' name="cond[]" value="5" /> Mignonette 5cl</label>';
//  echo '<label><input type="checkbox" ' . check( $cond, 35 ) . ' name="cond[]" value="35" /> Demi-bouteille 35cl</label>';
//  echo '<label><input type="checkbox" ' . check( $cond, 37 ) . ' name="cond[]" value="37" /> Fillette 37.5cl</label>';
//  echo '<label><input type="checkbox" ' . check( $cond, 50 ) . ' name="cond[]" value="50" /> Désirée 50cl</label>';
//  echo '<label><input type="checkbox" ' . check( $cond, 75 ) . ' name="cond[]" value="75" /> Bouteille 75cl</label>';
//  echo '<label><input type="checkbox" ' . check( $cond, 150 ) . ' name="cond[]" value="150" /> Magnum 150cl</label>';
//}
//
//add_action('save_post','save_metabox');
//function save_metabox($post_id){
//  if(isset($_POST['cond'])){
//    // je supprime toutes les entrées pour cette meta
//    delete_post_meta($post_id, '_conditionnement_vin');
//    // et pour chaque conditionnement coché, j'ajoute une metadonnée
//    foreach($_POST['cond'] as $c){
//      add_post_meta($post_id, '_conditionnement_vin', intval($c) )
//    }
//  }
//}
