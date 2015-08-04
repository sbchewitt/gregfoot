<?php // INDEX

// header
get_header();


if (have_posts()) {
	while (have_posts()) {
		the_post(); 
		if (have_rows('new_row')) {
			while (have_rows('new_row')) { 

				// 'THE ROW'
				the_row();

				// VARS
				$blocks_in_row = get_sub_field('blocks_in_row');

				echo '<section class="component-row row-' . $blocks_in_row . '">';

				

				for ($i=0; $i < $blocks_in_row; $i++) {
					
					
					$component = get_sub_field('component_' . ($i+1));

			    	if ($component == 'Text') {
			    		echo '<div class="block block-' . ($i+1) . ' wrapper-text" style="background-color:' . get_sub_field('block_background_colour_' . ($i+1)) . '">';
			    		include('components/text.php');
			    		echo '</div>';
					} else if ($component == 'Image') {
						echo '<div class="block block-' . ($i+1) . ' wrapper-image" style="background-color:' . get_sub_field('block_background_colour_' . ($i+1)) . '">';
			    		include('components/image.php');
			    		echo '</div>';
					} else if ($component == 'Video') {
						echo '<div class="block block-' . ($i+1) . ' wrapper-video" style="background-color:' . get_sub_field('block_background_colour_' . ($i+1)) . '">';
			    		include('components/video.php');
			    		echo '</div>';
					} else if ($component == 'Archive') {
						echo '<div class="block block-' . ($i+1) . ' wrapper-archive" style="background-color:' . get_sub_field('block_background_colour_' . ($i+1)) . '">';
						include('components/archive.php');
						echo '</div>';
					} else if ($component == 'Banners') {
						echo '<div class="block block-' . ($i+1) . ' wrapper-banner" style="background-color:' . get_sub_field('block_background_colour_' . ($i+1)) . '">';
						include('components/banner.php');
						echo '</div>';
					} else if ($component == 'Gallery') {
						echo '<div class="block block-' . ($i+1) . ' wrapper-gallery" style="background-color:' . get_sub_field('block_background_colour_' . ($i+1)) . '">';
						include('components/gallery.php');
						echo '</div>';
					}
				}

				echo '</section>';	
			
			} // while (have_rows)
		} // if (have_rows)
	} // while (have_posts)
} // if (have_posts)

// footer
get_footer();