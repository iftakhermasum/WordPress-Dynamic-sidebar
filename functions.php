<?php

/**** use this code into your function.php file*******/

add_action( 'widgets_init', 'register_my_sidebars' );

function register_my_sidebars() {	
	register_sidebar(
		array(
			'id'            => 'sidbr_widgts',
			'name'          => __( 'sidebar widget'),
			'description'   => __( 'This is sidebar widget.'),
			'before_widget' => '',
			'after_widget'  => '',
		)
	);
	register_sidebar(
		array(
			'id'            => 'sidbr_widgts2',
			'name'          => __( 'sidebar widget 2'),
			'description'   => __( 'This is sidebar widget 2.'),
			'before_widget' => '',
			'after_widget'  => '',
		)
	);
}
