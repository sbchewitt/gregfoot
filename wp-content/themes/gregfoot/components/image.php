<?php
// IMAGE PAGE
$image = get_sub_field('image_content_' . ($i+1));
?>

<div class="content-wrapper image-content" style="background-image: url('<?php echo $image['url'] ?>');">
	<span class="image-overlay"></span>
</div>
