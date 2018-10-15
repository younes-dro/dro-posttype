<?php

/**
 * Gnerate a custom Taxanomies 
 * 
 * This Class generate a Taxonmies
 * 
 * @author Younés DRO <dro66_8@hotmail.fr>
 * @version 1.0.0
 */
class DRO_Taxonomies {

    /**
     * List taxonomies to create
     * 
     * 
     */
    public $taxanomies;

    /**
     * Initialize the taxanomies options
     * 
     * @param array $taxonomies
     */
    public function __construct($taxonomies) {
        $this->taxanomies = $taxonomies;
    }

    public function create_taxanomies() {


        foreach ($this->taxanomies as $name => $arr) {

            register_taxonomy($name, $arr['post_types'], $arr['options']);
        }
    }

}
