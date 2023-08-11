<?php
/* Remove page titles */
add_action( 'after_setup_theme', 'tu_remove_all_titles' );
function tu_remove_all_titles() {
    add_filter( 'generate_show_title', '__return_false' );
}
?>