<?php
// BANNER PAGE
// $bannerTitle = get_sub_field("banner_title");
// $containTv = strpos($bannerTitle, 'tv');
// $containYoutube = strpos($bannerTitle, 'youtube');
// $containStage = strpos($bannerTitle, 'stage');
// if ($containTv !== false)
// {
// 	$iconLink = '#ontv';
// }
// if ($containYoutube !== false)
// {
// 	$iconLink = '#onyoutube';
// }
// if ($containStage !== false)
// {
// 	$iconLink = '#onstage'
// }
?>

<div class="content-wrapper banner-content">
	<ul class="bxslider-banner">
	<?php // start sub field loop
		if (have_rows('banner')) {
			while (have_rows('banner')) { 
				the_row(); 
	?>
		<a href='<?php echo get_sub_field('banner_link'); ?>'>
			<li class="banner" style="background-image:url(<?php $image = get_sub_field('banner_image'); echo $image['url'];?>);">
				<!-- <div class="ellipse ellipse-green">
				</div>
				<div class="ellipse ellipse-midblue">
				</div>
				<div class="ellipse ellipse-darkblue">
				</div> -->
				<div class="banner-info">
					<p class="banner-title">
						<?php
						$bannerTitleSplit = str_replace(" ","<br/>",get_sub_field("banner_title"));
						echo $bannerTitleSplit;
						?>
					</p>
					<p class="banner-sub-title">
						<?php
						echo get_sub_field("banner_subtitle");
						?>
					</p>
					<?php
						$bannerTitle = get_sub_field("banner_title");
						$containTv = strpos($bannerTitle, 'TV');
						$containYoutube = strpos($bannerTitle, 'YOUTUBE');
						$containStage = strpos($bannerTitle, 'STAGE');
						if ($containTv !== false)
						{
							$iconLink = '#ontv';
						}
						if ($containYoutube !== false)
						{
							$iconLink = '#onyoutube';
						}
						if ($containStage !== false)
						{
							$iconLink = '#onstage';
						}
					?>
					<div class="banner-icon">
						<svg><use xlink:href="<?php echo $iconLink ?>"></use></svg>
					</div>
				</div>
			</li>
		</a>

	<?php // close sub field loop
			}
		} ?>
	</ul>
</div>
