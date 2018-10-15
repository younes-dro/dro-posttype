<?php

/**
 * Gnerate a custom : post type 
 * 
 * This Class generate a single Post type 
 * 
 * @author Younés DRO <dro66_8@hotmail.fr>
 * @version 1.0.0
 */
class DRO_PostType {

    /**
     * @var array posttypes
     */
    public $posttypes;

    /**
     * Constructor
     * 
     * @param array $posttypes The list of the Post Type to create
     */
    public function __construct(array $posttypes) {

        $this->posttypes = $posttypes;
    }

    /**
     * Register the Post type
     */
    public function register_post_type() {

        foreach ($this->posttypes as $name => $options) {

            register_post_type($name, $options['posttype_options']);
        }
    }

}
