<?php
/**
 * @package 	Div-Framework
 * @subpackage 	Div-Ready
 * @author  	Div Blend Team
 * @license 	GPL
 *
 */

/** Actions ****************************************************************/

	add_action('after_setup_theme', 'theme_action_adjustments', 99);
	function theme_action_adjustments(){
		/**
		 * Reorder the post_content call
		 * @example DF::add_action('df_post_content', array('df_post_info'=>15) );
		 */
	}

/** Filters ****************************************************************/

	/**
	 * CSS DELAY (Built for faster load times)
	 * Sets the body to hidden until the CSS is loaded (from footer) so that nothing appears until it is styled,
	 * then the CSS must reset this to be displayed. 
	 */
	add_filter( 'body_styles', function($s){
		return 'opacity:0;filter: alpha(opacity=0); display:none;'.$s;
	});

	/**
	 * Add Font Awesome icons to post meta
	 * TODO: Fix Font awesome additions
	 */
	add_filter( 'post_info_date', function($s){
		echo '<i class="fa fa-calendar"></i>'.$s;
	});
	add_filter( 'post_info_author', function($s){
		echo '<i class="fa fa-user"></i>'.$s;
	});
	add_filter( 'post_info_comments_count', function($s){
		echo '<i class="fa fa-comments"></i>'.$s;
	});