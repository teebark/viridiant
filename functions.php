<?php
/* Adds page name to classes for page */
add_filter('body_class','page_class');
function page_class($classes) {
   global $wp_query;
   $page = '';
   $page = $wp_query->query_vars['pagename'];
   // add 'pagename' to the $classes array
   $classes[] = $page;
   // return the $classes array
   return $classes;
}
/* Remove page titles */
/*
add_action( 'after_setup_theme', 'tu_remove_all_titles' );
function tu_remove_all_titles() {
    add_filter( 'generate_show_title', '__return_false' );
}
*/
?>