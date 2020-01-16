<?php
require get_template_directory().'/include/customizer/social.php';
require get_template_directory().'/include/customizer/depositions.php';

function gb_customize_register( $wp_customize ) {

    gb_social_customizer( $wp_customize );
    gb_depositions_customizer( $wp_customize );

}