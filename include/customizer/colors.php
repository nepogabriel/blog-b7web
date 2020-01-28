<?php
function gb_colors_customizer( $wp_customize ) {

    //Settings
    $wp_customize->add_setting('gb_linetop', array('default' => '#2d3a64'));
    $wp_customize->add_setting('gb_titlepost', array('default' => '#2d3a64'));
    $wp_customize->add_setting('gb_button', array('default' => '#455482'));
    $wp_customize->add_setting('gb_footerup', array('default' => '#455482'));
    $wp_customize->add_setting('gb_pagination', array('default' => '#2d3a64'));
    $wp_customize->add_setting('gb_pagination_hover', array('default' => '#2d3a64'));
    $wp_customize->add_setting('gb_footerdown', array('default' => '#2d3a64'));
    $wp_customize->add_setting('gb_footerdown_text', array('default' => '#fff'));

    //Sections
    $wp_customize->add_section('gb_colors_section', array(
        'title' => 'Cores',
        'priority' => 5
    ));

    //Controllers
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gb_linetop',
            array(
                'label' => 'Linha do Topo',
                'section' => 'gb_colors_section',
                'settings' => 'gb_linetop',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gb_titlepost',
            array(
                'label' => 'Título do Post',
                'section' => 'gb_colors_section',
                'settings' => 'gb_titlepost',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gb_button',
            array(
                'label' => 'Botão "Ler Mais"',
                'section' => 'gb_colors_section',
                'settings' => 'gb_button',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gb_pagination',
            array(
                'label' => 'Paginação',
                'section' => 'gb_colors_section',
                'settings' => 'gb_pagination',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gb_pagination_hover',
            array(
                'label' => 'Paginação Borda',
                'section' => 'gb_colors_section',
                'settings' => 'gb_pagination_hover',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gb_footerup',
            array(
                'label' => 'Rodapé Superior',
                'section' => 'gb_colors_section',
                'settings' => 'gb_footerup',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gb_footerdown',
            array(
                'label' => 'Rodapé Inferior',
                'section' => 'gb_colors_section',
                'settings' => 'gb_footerdown',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gb_footerdown_text',
            array(
                'label' => 'Texto Rodapé Inferior',
                'section' => 'gb_colors_section',
                'settings' => 'gb_footerdown_text',
            )
        )
    );

}