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
	DF::add_action('df_post_content', array('df_post_info'=>12) );

}

add_filter( 'post_info_date', function($s){
	return '<i class="fa fa-calendar">test</i>'.$s;
});


// $my_theme = wp_get_theme( 'twentyten' );
// if ( $my_theme->exists() )
// 	echo $my_theme;

# Remove ACF Menu
// remove_menu_page('edit.php?post_type=acf'); 
