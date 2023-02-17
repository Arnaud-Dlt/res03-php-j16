<?php

add_theme_support('post-thumbnails');

function register_my_menus() 
{ 
    register_nav_menus( array( 
    'header-menu' => __( 'Menu de navigation' ))); 
}

add_action( 'init', 'register_my_menus' );

function getNavigationMenu() {  
    $items = wp_get_nav_menu_items('Navigation');  
  
    return $items;  
}

function getHomepageData()  
{  
    $data = [];  
    $data["a-propos"] = [];  
    $data["a-propos"]["titre"] = get_field("titre_a_propos");  
    $data["a-propos"]["contenu"] = get_field("contenu_a_propos");  
  
    return $data;  
}