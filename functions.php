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
	DF::add_action('div_post_content', array('div_post_info'=>12) );

}

add_filter( 'post_info_date', function($s){
	return '<i class="fa fa-calendar">test</i>'.$s;
});