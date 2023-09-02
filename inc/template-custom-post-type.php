<?php 
    // function register_news_post_type() {
    //     $labels = array(
    //         'name'               => 'News',
    //         'singular_name'      => 'News',
    //         'menu_name'          => 'News',
    //         'add_new'            => 'Add New News',
    //         'add_new_item'       => 'Add New News',
    //         'edit_item'          => 'Edit News',
    //         'new_item'           => 'New News',
    //         'view_item'          => 'View News',
    //         'search_items'       => 'Search News',
    //         'not_found'          => 'News not found',
    //         'not_found_in_trash' => 'News not found in trash',
    //         'parent_item_colon'  => 'Parent item:',
    //         'all_items'          => 'All News',
    //     );

    //     $args = array(
    //         'labels'             => $labels,
    //         'public'             => true,
    //         'publicly_queryable' => true,
    //         'show_ui'            => true,
    //         'show_in_menu'       => true,
    //         'query_var'          => true,
    //         'rewrite'            => array( 'slug' => 'news' ),
    //         'capability_type'    => 'post',
    //         'has_archive'        => true,
    //         'hierarchical'       => false,
    //         'menu_position'      => null,
    //         'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    //     );

    //     register_post_type( 'news', $args );
    // }
    // add_action( 'init', 'register_news_post_type' );

    function register_product_post_type() {
        $labels = array(
            'name'               => 'Products',
            'singular_name'      => 'Product',
            'menu_name'          => 'Products',
            'add_new'            => 'Add New Product',
            'add_new_item'       => 'Add New Product',
            'edit_item'          => 'Edit Product',
            'new_item'           => 'New Product',
            'view_item'          => 'View Product',
            'search_items'       => 'Search Products',
            'not_found'          => 'Products not found',
            'not_found_in_trash' => 'Products not found in trash',
            'parent_item_colon'  => 'Parent item:',
            'all_items'          => 'All Products',
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'products' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        );

        register_post_type( 'product', $args );
    }
    add_action( 'init', 'register_product_post_type' );
?>