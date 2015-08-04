<?php
// ARCHIVE PAGE
$type_of_archive = get_sub_field('type_of_archive');

if ($type_of_archive == 'Latest') {
	$args = array(
		'post_type' => array('page', 'post', 'ontv', 'onyoutube', 'training', 'talks', 'onstage'),
	);
} else if ($type_of_archive == 'Greatest') {
	$args = array(
		'post_type' => array('page', 'post', 'ontv', 'onyoutube', 'training', 'talks', 'onstage'),
		'cat' => 3,
	);
} else if ($type_of_archive == 'On TV') {
	$args = array(
		'post_type' => 'ontv',
	);
} else if ($type_of_archive == 'On YouTube') {
	$args = array(
		'post_type' => 'onyoutube',
	);
} else if ($type_of_archive == 'On Stage') {
	$args = array(
		'post_type' => 'onstage',
	);
} else if ($type_of_archive == 'Training') {
	$args = array(
		'post_type' => 'training',
	);
}else if ($type_of_archive == 'Talks') {
	$args = array(
		'post_type' => 'talks',
	);
} else {
	$args = array(
		'post_type' => array('page', 'post', 'ontv', 'onyoutube', 'training', 'talks', 'onstage'),
	);
}

// THE QUERY
$query = new WP_Query( $args );
?>

<div class="content-wrapper archive-content" data-archivename="<?php echo $type_of_archive ?>">
	<ul class="archive-list-wrapper">
		<?php // The Loop
		// echo '<li class="slide">';
		// $count = 0;
		while ( $query->have_posts() ) {
			$query->the_post();
			// $count++;

			if (get_field('default_preview_image')) {
				$previewimageurl = get_field('default_preview_image');	
				$previewimage = $previewimageurl['url'];
			} else {
				$previewimage = '/wp-content/uploads/2015/04/test-image-3.jpg';
			}
			
			// if ($count > 1) {
			// 	if ($count %2 != 0 ) {
			// 		echo '</li>';
			// 		echo '<li class="slide">';
			// 	}
			// }
			
		?>
			<li class="slide">
				<a href="<?php echo get_the_permalink(); ?>">
					<div class="archive-list-item" style="background-image: url('<?php echo $previewimage; ?>');">
						<div class="archive-item-background">
						</div>
						<div class="archive-text">
							<div class="archive-item-title">
								<p><?php echo get_the_title(); ?></p>
							</div>
							<!-- <div class="archive-item-subtitle">
								<p><?php echo get_field('subtitle'); ?></p>
							</div> -->
							<!-- <div class="archive-item-more">
								<p>SEE MORE</p>
							</div> -->
						</div>
					</div>
				</a>
			</li>
		
		<?php
		}
		// echo '</li>';

		/* Restore original Post Data 
		 * NB: Because we are using new WP_Query we aren't stomping on the 
		 * original $wp_query and it does not need to be reset with 
		 * wp_reset_query(). We just need to set the post data back up with
		 * wp_reset_postdata().
		 */
		wp_reset_postdata();
		?>
	</ul>
</div>
