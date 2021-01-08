<?php 

function montheme_supports (){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support( 'custom-logo', array(
        'height' => 50,
        'width'  => 50,
    ) );
    register_nav_menu('header','Header');
    register_nav_menu('footer','Pied de page');
}

function montheme_register_assets (){
    wp_enqueue_script('cel-scripts', get_template_directory_uri() . '/scripts/cel-scripts.js', array( 'jquery' ), '1.0', true);
}

function montheme_register_widget (){
    register_sidebar([
        'id' => 'socials',
        'name' => 'sidebar réseaux sociaux',
        'before_widget' => '<div id="%1$s" class="cel-socials %2$s">',
        'after_widget'  => '</div>'
    ]);
}


function theme_scripts() {
      
    wp_enqueue_script( 
        'tch-scripts', 
        get_template_directory_uri() . '/scripts/cel-scripts.js', 
        array( 'jquery' ), 
        '1.0', 
        true
);
    
    }

// //* Ajouter le support de page pour les articles : desactiver pour avoir le projet suggéré en random, laissé seulement le page-attributes
// add_post_type_support( 'post', 'page-attributes' );
//     //* Changer ordre d'affichage dans les pages d'archives des articles
// add_action( 'pre_get_posts', 'gn_post_archive_order' );
// function gn_post_archive_order( $query ) {
	
// 		$query->set( 'orderby', 'menu_order' );
// 		$query->set('order','ASC');
// 	}

add_post_type_support( 'post', 'page-attributes' );

add_action('wp_enqueue_scripts', 'theme_scripts');
add_action('widgets_init', 'montheme_register_widget');
add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'montheme_register_assets');

