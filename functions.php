<?php
/**
 * @package 	Div-Framework
 * @subpackage 	Div-Ready
 * @author  	Div Truth
 * @license 	GPL
 *
 */

/**
 * Actions
 *
 * @since  1.0
 * @return DivStarter
 */
add_action('after_setup_theme', 'theme_action_adjustments', 99);
function theme_action_adjustments(){
	DF::add_action('div_post_content',array('div_post_info'=>12) );
}



# Remove ACF Menu
// remove_menu_page('edit.php?post_type=acf'); 
