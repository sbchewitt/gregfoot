<?php
// GALLERY PAGE
?>

<div class="content-wrapper gallery-content">
	<ul class="bxslider-gallery">
	<?php // start sub field loop
		if (have_rows('gallery_item')) {
			while (have_rows('gallery_item')) { 
				the_row(); ?>
		<li class="gallery-item" style="background-image:url(<?php $image = get_sub_field('image'); echo $image['url'];?>);">
		</li>

	<?php // close sub field loop
			}
		} ?>
	</ul>
</div>
