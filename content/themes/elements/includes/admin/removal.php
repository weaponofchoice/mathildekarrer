<?php
// Removes items from wp admin menu
function remove_menu_items() {
  remove_menu_page( 'edit-comments.php' );
  remove_menu_page( 'edit.php?post_type=page' );
}
add_action( 'admin_menu', 'remove_menu_items' );
?>