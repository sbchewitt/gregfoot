<?php

// REGISTAR WIDGET READY SIDEBARS
function widgets_init() {

	register_sidebar( array(
		'name' => __( 'Left Sidebar' ),
		'id' => 'left-sidebar',
		'before_widget' => '<section class="widget">',
		'after_widget' => '</section>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Widgets' ),
		'id' => 'footer-widgets',
		'before_widget' => '<section class="twitter">',
		'after_widget' => '</section>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

}
