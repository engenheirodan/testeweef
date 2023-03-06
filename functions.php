<?php
/**
 * Tema Weef
 *
 * @link https://weef.com.br/
 *
 * @package WordPress
 * @subpackage Weef
 * @since Weef
 */



 add_theme_support( 'post-thumbnails' );
add_post_type_support( 'product','thumbnail' );



// editar menu dinamico
// Registrando um menu
register_nav_menus(
    array(
        'meu_site' => __( 'Menu Site', 'meu-text-domain' )
    )
  ); 


//escolher menu top admin na visualização
add_filter('show_admin_bar','admin_bar_custom');
function admin_bar_custom(){
    return false;
}
 
//[alunos_tornese foo="foo-value"]
function alunos_tornese_func( $atts ){
	$a = shortcode_atts( array(
		'foo' => 'something',
		'bar' => 'something else',
	), $atts );

	return "foo = {$a['foo']}";
}
add_shortcode( 'alunos_tornese', 'alunos_tornese_func' );


add_action('register_shortcode_ui','shortcode_alunos_tornese');

function shortcode_alunos_tornese(){
    shortcode_ui_register_for_shortcode('alunos_tornese',array(
        'label'=>'alunos tornese',
        'listItemImage'=>'dashicons-welcome-learn-more'
    ));
}

//[caption]seu texto aqui[/caption]
function caption_shortcode( $atts, $content = null ) {
	return '<span class="caption">' . $content . '</span>';
}
add_shortcode( 'caption', 'caption_shortcode' );
