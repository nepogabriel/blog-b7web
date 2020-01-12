<?php
require get_template_directory().'/include/customizer/social.php';

function gb_customize_register( $wp_customize ) {

    gb_social_customizer( $wp_customize );

}