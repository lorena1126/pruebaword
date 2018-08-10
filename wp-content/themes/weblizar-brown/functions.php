<?php
add_action('wp_enqueue_scripts', 'removeScripts' , 20);
function removeScripts() {
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
wp_dequeue_style( 'flat-blue',get_template_directory_uri() .'/css/skins/flat-blue.css'); 

wp_enqueue_style('lite-brown', get_stylesheet_directory_uri() . '/css/skins/light-brown.css');

}

//child theme option//
add_action( 'customize_register' , 'weblizar_child_options' );
function weblizar_child_options( $wp_customize ) {

$wp_customize->add_section( 
    'layout_option', 
    array(
        'title'       => __( 'Theme Layout', 'weblizar' ),
        'priority'    => 100,
        'panel'=>'weblizar_theme_option',
		'capability'=>'edit_theme_options',
        'description' => __('Theme Layout', 'weblizar'), 
    ) 
);
$wp_customize->add_setting( 'layout',
    array(
		'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
		'default'=>"1",
        'sanitize_callback'=>'weblizar_sanitize_integer',
    )
);  
$wp_customize->add_control( 'layout', array(
        'label'    => __( 'Select layout from here', 'weblizar' ), 
        'section'  => 'layout_option',
        'settings' => 'layout',
        'type'    => 'select',
		'choices'=>array(
		'1'=>'Full Width',
		'2'=>'Boxed',
		),
        'priority' => 10,
    ) 
);
}
?>