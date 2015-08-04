<?php

// ADD CUSTOM TAXONOMY
function onstage_post_type() {
    $labels = array(
        'name'                => 'On Stage',
        'singular_name'       => 'On Stage',
        'menu_name'           => 'On Stage',
        'name_admin_bar'      => 'On Stage',
        'parent_item_colon'   => 'Parent Item:',
        'all_items'           => 'All Items',
        'add_new_item'        => 'Add New Item',
        'add_new'             => 'Add New',
        'new_item'            => 'New Item',
        'edit_item'           => 'Edit Item',
        'update_item'         => 'Update Item',
        'view_item'           => 'View Item',
        'search_items'        => 'Search Item',
        'not_found'           => 'Not found',
        'not_found_in_trash'  => 'Not found in Trash',
    );
    $args = array(
        'label'               => 'onstage',
        'description'         => 'On Stage specific posts.',
        'labels'              => $labels,
        'supports'            => array( ),
        'taxonomies'          => array( 'category', 'post_tag' ),
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 11,
        'menu_icon'           => '',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'rewrite' => array('slug' => 'onstage'),
    );
    register_post_type( 'onstage', $args );
}


function onyoutube_post_type() {
    $labels = array(
        'name'                => 'On YouTube',
        'singular_name'       => 'On YouTube',
        'menu_name'           => 'On YouTube',
        'name_admin_bar'      => 'On YouTube',
        'parent_item_colon'   => 'Parent Item:',
        'all_items'           => 'All Items',
        'add_new_item'        => 'Add New Item',
        'add_new'             => 'Add New',
        'new_item'            => 'New Item',
        'edit_item'           => 'Edit Item',
        'update_item'         => 'Update Item',
        'view_item'           => 'View Item',
        'search_items'        => 'Search Item',
        'not_found'           => 'Not found',
        'not_found_in_trash'  => 'Not found in Trash',
    );
    $args = array(
        'label'               => 'onyoutube',
        'description'         => 'On YouTube specific posts.',
        'labels'              => $labels,
        'supports'            => array( ),
        'taxonomies'          => array( 'category', 'post_tag' ),
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 11,
        'menu_icon'           => '',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'rewrite' => array('slug' => 'onyoutube'),
    );
    register_post_type( 'onyoutube', $args );
}

function ontv_post_type() {
    $labels = array(
        'name'                => 'On TV',
        'singular_name'       => 'On TV',
        'menu_name'           => 'On TV',
        'name_admin_bar'      => 'On TV',
        'parent_item_colon'   => 'Parent Item:',
        'all_items'           => 'All Items',
        'add_new_item'        => 'Add New Item',
        'add_new'             => 'Add New',
        'new_item'            => 'New Item',
        'edit_item'           => 'Edit Item',
        'update_item'         => 'Update Item',
        'view_item'           => 'View Item',
        'search_items'        => 'Search Item',
        'not_found'           => 'Not found',
        'not_found_in_trash'  => 'Not found in Trash',
    );
    $args = array(
        'label'               => 'ontv',
        'description'         => 'On TV specific posts.',
        'labels'              => $labels,
        'supports'            => array( ),
        'taxonomies'          => array( 'category', 'post_tag' ),
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 11,
        'menu_icon'           => '',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'rewrite' => array('slug' => 'ontv'),
    );
    register_post_type( 'ontv', $args );
}

function training_post_type() {
    $labels = array(
        'name'                => 'Training',
        'singular_name'       => 'Training',
        'menu_name'           => 'Training',
        'name_admin_bar'      => 'Training',
        'parent_item_colon'   => 'Parent Item:',
        'all_items'           => 'All Items',
        'add_new_item'        => 'Add New Item',
        'add_new'             => 'Add New',
        'new_item'            => 'New Item',
        'edit_item'           => 'Edit Item',
        'update_item'         => 'Update Item',
        'view_item'           => 'View Item',
        'search_items'        => 'Search Item',
        'not_found'           => 'Not found',
        'not_found_in_trash'  => 'Not found in Trash',
    );
    $args = array(
        'label'               => 'training',
        'description'         => 'Training specific posts.',
        'labels'              => $labels,
        'supports'            => array( ),
        'taxonomies'          => array( 'category', 'post_tag' ),
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 11,
        'menu_icon'           => '',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'rewrite' => array('slug' => 'training-and-seminars'),
    );
    register_post_type( 'training', $args );
}

function talks_post_type() {
    $labels = array(
        'name'                => 'Talks',
        'singular_name'       => 'Talks',
        'menu_name'           => 'Talks',
        'name_admin_bar'      => 'Talks',
        'parent_item_colon'   => 'Parent Item:',
        'all_items'           => 'All Items',
        'add_new_item'        => 'Add New Item',
        'add_new'             => 'Add New',
        'new_item'            => 'New Item',
        'edit_item'           => 'Edit Item',
        'update_item'         => 'Update Item',
        'view_item'           => 'View Item',
        'search_items'        => 'Search Item',
        'not_found'           => 'Not found',
        'not_found_in_trash'  => 'Not found in Trash',
    );
    $args = array(
        'label'               => 'talks',
        'description'         => 'talks specific posts.',
        'labels'              => $labels,
        'supports'            => array( ),
        'taxonomies'          => array( 'category', 'post_tag' ),
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 11,
        'menu_icon'           => '',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'rewrite' => array('slug' => 'talks-and-seminars'),
    );
    register_post_type( 'talks', $args );
}

function taxonomy_additional_icons(){
    ?>
    <style>
        .menu-icon-onyoutube .dashicons-before::before {
            content: "\f236";
        }
        .menu-icon-ontv .dashicons-before::before {
            content: "\f126";
        }
        .menu-icon-onstage .dashicons-before::before {
            content: "\f524";
        }
        .menu-icon-training .dashicons-before::before {
            content: "\f118";
        }
        .menu-icon-talks .dashicons-before::before {
            content: "\f125";
        }
        
        #adminmenu li#menu-posts-onstage {
            margin-top: 16px;
            border-top: solid 1px rgba(255, 255, 255, 0.2);
        }
        #adminmenu li#menu-posts-training {
            margin-bottom: 16px;
            border-bottom: solid 1px rgba(255, 255, 255, 0.2);
        }
    </style>
    <?php
}



function prefix_flush_rewrite_rules() {
    flush_rewrite_rules();
}

