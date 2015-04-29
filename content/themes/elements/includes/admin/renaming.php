<?php
function edit_admin_menus() {
    global $menu;
    global $submenu;
     
    $menu[5][0] = 'Cases'; // Change Posts to Recipes
    $submenu['edit.php'][5][0] = 'All Cases';
    $submenu['edit.php'][10][0] = 'Add a Case';
}
add_action( 'admin_menu', 'edit_admin_menus' );
?>