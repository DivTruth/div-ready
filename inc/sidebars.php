<?php 
/**
 * DF Sidebars
 * Sidebars are registered here, any additional sidebars can be added. 
 * Also consider using WooSidebars (https://wordpress.org/plugins/woosidebars/)
 *
 * @author    Div Truth
 * @category  Framework/Features
 * @license   GPL
 */

/************* ACTIVE SIDEBARS ********************/
# Include Div Sidebars
include(DF_INC_DIR.'sidebars.php');

# Activate Div Sidebars (WARNING: ^framework sidebars must be included)
add_action( 'widgets_init', 'register_theme_sidebars' );

function register_theme_sidebars() {

    /* HEADER SIDERBARS */
    register_nav_social_icons(FALSE);
    register_header_right(FALSE);
    
    /* STANDARD SIDEBARS */
    register_primary_sidebar(TRUE);
    register_secondary_sidebar(FALSE);

    /* FOOTER SIDEBARS */
    register_footer_1(FALSE);
    register_footer_2(FALSE);
    register_footer_3(FALSE);
    register_footer_4(FALSE);

    /* CUSTOM TEMPLATES */
    
    //register_sidebar(array(
        //'id' => 'features',
        //'name' => __('Features', 'div_theme'),
        // 'description' => __('The features sidebar.', 'div_theme'),
        //'before_widget' => '<div id="%1$s" class="widget %2$s">',
        //'after_widget' => '</div>',
        //'before_title' => '<h4 class="widgettitle">',
        //'after_title' => '</h4>',
    //));

    // register_sidebar(array(
    //     'id' => 'cta',
    //     'name' => __('Call to Action', 'div_theme'),
    //     'description' => __('The Call to Action sidebar.', 'div_theme'),
    //     'before_widget' => '<div id="%1$s" class="widget %2$s">',
    //     'after_widget' => '</div>',
    //     'before_title' => '',
    //     'after_title' => '',
    // ));
      
} 

?>