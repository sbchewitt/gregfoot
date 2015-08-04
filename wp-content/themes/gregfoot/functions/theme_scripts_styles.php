<?php
function theme_scripts_styles() {
	
	// if (is_page('12') || is_page('why-namgrass')) {
	// 	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/why-namgrass-scripts.js', array('jquery'));
	// } else {
	// 	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'));
	// }

	wp_enqueue_style('stylesheet', get_template_directory_uri() . '/style.css');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js');
	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/bundle.js', array('jquery'));
	wp_enqueue_style('fonts', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic');
	// wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');

	// ADD ADMIN SCRIPT
}	


function my_custom_admin_head() {
	?>
	<script>
		$('.block-1-component').on('click', '.acf-fc-add', function() {
			$('.block-1-component .acf-fc-add').hide();
		});
		$('.block-1-component .acd-layout-handle').on('click', '.acf-fc-remove', function() {
			$('.block-1-component .acf-fc-add').show();
		});

		$('.block-2-component').on('click', '.acf-fc-add', function() {
			$('.block-2-component .acf-fc-add').hide();
		});
		$('.block-2-component .acd-layout-handle').on('click', '.acf-fc-remove', function() {
			$('.block-2-component .acf-fc-add').show();
		});

		$('.block-3-component').on('click', '.acf-fc-add', function() {
			$('.block-3-component .acf-fc-add').hide();
		});
		$('.block-3-component .acd-layout-handle').on('click', '.acf-fc-remove', function() {
			$('.block-3-component .acf-fc-add').show();
		});
	</script>
	<?php
}