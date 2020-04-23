<?php
/**
 *  Functions and definitions for auxin framework
 *
 * 
 * @package    Auxin
 * @author     averta (c) 2014-2020
 * @link       http://averta.net
 */

/*-----------------------------------------------------------------------------------*/
/*  Add your custom functions here -  We recommend you to use "code-snippets" plugin instead
/*  https://wordpress.org/plugins/code-snippets/
/*-----------------------------------------------------------------------------------*/


// your code here


/*-----------------------------------------------------------------------------------*/
/*  Init theme framework
/*-----------------------------------------------------------------------------------*/
require( 'auxin/auxin-include/auxin.php' );
/*-----------------------------------------------------------------------------------*/



function recipe_post_type(){

    $labels = array(
        'name' => 'Recipe',
        'singular_name' => 'Recipes',
        'add_new' => 'Add Recipe',
        'all_items' => "All Recipes",
        'add_new_item' => ' Add Recipe',
        'edit_item' => 'Edit Recipe', 
        'new_item' => 'New Recipe',
        'view_item' => 'View Recipe',
        'search_item' => "Search Recipe",
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true, 
        'rewrite' => true,
        'capability_type' => 'recipe',
        'map_meta_cap'=> true,
        'hierarchical' => false,
        'supports' => array(
            'title',
            'excerpt',
            'author',
            'thumbnail',
            'custom-fields'
        ),
        'taxonomies' => array('category'),
    );
    register_post_type('recipe', $args);
}
add_action('init', 'recipe_post_type');

function review_post_type(){

    $labels = array(
        'name' => 'Reviews',
        'singular_name' => 'Review',
        'add_new' => 'Add Review',
        'all_items' => "All Reviews",
        'add_new_item' => ' Add Review',
        'edit_item' => 'Edit Review', 
        'new_item' => 'New Review',
        'view_item' => 'View Review',
        'search_item' => "Search Review",
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true, 
        'rewrite' => true,
        'capability_type' => 'review',
        'map_meta_cap'=> true,
        'hierarchical' => false,
        'supports' => array(
            'title',
            'author',
            'excerpt',
            'custom-fields'
        ),
        'taxonomies' => array('category'),
    );
    register_post_type('review', $args);
}

add_action('init', 'review_post_type');


function theme_styles()
{ 
    // Load all of the styles that need to appear on all pages
    wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/style2.css' );
    wp_enqueue_style( 'materializecss', get_template_directory_uri() . '/css/materialize.css' );

}
add_action('wp_enqueue_scripts', 'theme_styles');

function is_post_type($type){
    global $wp_query;
    if($type == get_post_type($wp_query->post->ID)) 
        return true;
    return false;
}