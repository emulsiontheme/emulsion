<?php

namespace child\theme;

add_action( 'emulsion_setup_after', 'child\theme\my_setup' );

function my_setup() {

	add_filter( 'the_content', __NAMESPACE__ . '\remove_hello' );

	function remove_hello( $content ) {
		//var_dump( __FUNCTION__ );
		return str_replace( 'hello', '', $content );
	}
	remove_action( 'after_setup_theme', 'emulsion_setup' );

}
function hello_world(){
	echo 'hello world';
}
//hello_world();

//\get_template_part('template-parts/hello');

//echo \strlen('hi');