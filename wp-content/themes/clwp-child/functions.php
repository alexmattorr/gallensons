<?php

// Require Scripts and Styles
require 'library/enqueue-scripts.php';

function remove_menus(){
  remove_menu_page( 'edit-comments.php' );
  // remove_menu_page( 'themes.php' );
  
}
add_action( 'admin_menu', 'remove_menus' );

?>