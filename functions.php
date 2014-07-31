<?php
/**
 * @package 	Div-Framework
 * @subpackage 	Div-Ready
 * @author  	Div Truth
 * @license 	GPL
 *
 */

/** Actions ****************************************************************/

	/**
	 * Reorder the post_content call
	 */
	add_action('after_setup_theme', 'theme_action_adjustments', 99);
	function theme_action_adjustments(){
		DF::add_action('df_post_content', array('df_post_info'=>12) );
	}


/** Filters ****************************************************************/

	/**
	 * The body is hidden until the CSS is loaded so that nothing appears until it is styled,
	 * therefore the CSS must reset this to be displayed.
	 */
	add_filter( 'body_styles', function($s){
		return 'opacity:0;filter: alpha(opacity=0); display:none;'.$s;
	});
