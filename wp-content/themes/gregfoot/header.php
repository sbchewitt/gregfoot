<?php
/**
 * @package WordPress
 * @subpackage Greg_Foot
**/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="icon" href="/wp-content/themes/gregfoot/img/favicon.ico" type="image/x-icon" />
	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
	<?php wp_head(); ?>
	<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-63809631-1', 'auto');
		  ga('send', 'pageview');
	</script>
</head>

<body <?php body_class(); ?>>
	<svg class="svg-sprite">
		<symbol id="facebook" viewBox="0 0 47.9 99.3">
			<path d="M0,32.9h10.3v-4.7v-4.6v-0.8c0-4.4,0.1-11.2,3.3-15.4C17,3,21.6,0,29.5,0c13,0,18.4,1.8,18.4,1.8l-2.6,15.2 c0,0-4.3-1.2-8.3-1.2s-7.6,1.4-7.6,5.4v1.6v5.3v4.7h16.4l-1.1,14.9H29.5v51.6H10.3V47.7H0L0,32.9L0,32.9z"/>
		</symbol>
		<symbol id="youtube" viewBox="0 0 142.6 100.3">
			<path d="M61.9,0c6.3,0,12.6,0,18.8,0c0.2,0,0.4,0.1,0.7,0.1c5.1,0.1,10.2,0.2,15.3,0.3c5.2,0.1,10.5,0.3,15.7,0.6
				c3.9,0.2,7.9,0.4,11.7,0.9c7.3,1,12.4,4.9,15,11.9c1.7,4.6,2.3,9.5,2.7,14.3c0.3,4.5,0.6,9,0.7,13.5c0.1,6.6,0.1,13.1,0,19.7
				c-0.1,4.5-0.6,9-0.9,13.6c-0.2,3.7-0.9,7.3-2.1,10.8c-1.2,3.7-3.1,7-6.4,9.3c-3.4,2.5-7.2,3.5-11.3,3.8c-6,0.4-12,0.7-18,0.9
				c-5.1,0.2-10.3,0.3-15.4,0.4c-4.4,0.1-8.7,0.2-13.1,0.2c-6.4,0-12.8-0.1-19.2-0.2c-4.3-0.1-8.6-0.2-12.9-0.3
				c-4.2-0.1-8.3-0.3-12.5-0.4c-4.5-0.2-9.1-0.5-13.5-1.3c-3.6-0.7-6.9-2.1-9.6-4.7c-2.3-2.2-3.5-4.9-4.6-7.8
				c-1.7-4.9-2.1-10-2.5-15.1c-0.3-3.9-0.5-7.9-0.6-11.8c-0.1-6.5-0.1-13,0-19.5C0.2,34.6,0.7,30,1,25.4c0.3-4.1,1.1-8,2.5-11.9
				C6,7,10.7,3.1,17.5,2c3.7-0.6,7.4-0.8,11.1-1c6-0.3,12.1-0.5,18.1-0.7c3.9-0.1,7.9-0.1,11.8-0.2C59.6,0.1,60.8,0,61.9,0z
				 M56.6,28.7c0,13.4,0,26.6,0,40C69.5,62,82.2,55.4,95.1,48.7C82.2,42,69.5,35.4,56.6,28.7z"/>
		</symbol>
		<symbol id="twitter" viewBox="0 0 126.6 102.9">
			<path d="M126.6,12.2c-4.7,2.1-9.7,3.5-14.9,4.1c5.4-3.2,9.5-8.3,11.4-14.4c-5,3-10.6,5.1-16.5,6.3
				c-4.7-5-11.5-8.2-19-8.2c-14.3,0-26,11.6-26,26c0,2,0.2,4,0.7,5.9C40.8,30.8,21.6,20.5,8.8,4.8c-2.2,3.8-3.5,8.3-3.5,13.1
				c0,9,4.6,17,11.6,21.6c-4.3-0.1-8.3-1.3-11.8-3.2c0,0.1,0,0.2,0,0.3c0,12.6,9,23.1,20.8,25.5c-2.2,0.6-4.5,0.9-6.8,0.9
				c-1.7,0-3.3-0.2-4.9-0.5c3.3,10.3,12.9,17.8,24.3,18c-8.9,7-20.1,11.1-32.3,11.1c-2.1,0-4.2-0.1-6.2-0.4
				c11.5,7.4,25.1,11.7,39.8,11.7c47.8,0,73.9-39.6,73.9-73.9c0-1.1,0-2.2-0.1-3.4C118.7,22,123.1,17.4,126.6,12.2z"/>
		</symbol>
		<symbol id="instagram" viewBox="0 0 104 104.3">
			<path d="M48.7,79.2c-14.6-1.4-28-17.1-22.1-35c0.4-1.1,1.2-2.4,1.8-3.6c0.6-1.1,1.5-2.5,1.3-3.3
				c-9.7,0-29.4,0-29.4,0v49c1,9.6,8.5,17.1,18.3,18h33.7H86c9.8-1,17-9.1,18-17.8c0,0,0-40.7,0-49.2c-9.9,0-19.8,0-29.7,0
				C85.9,56.4,72.6,81.5,48.7,79.2z"/>
			<path d="M52,73.1c9.3,0,20.7-6.7,20.6-20.5c-0.1-12.6-10.2-21.6-23.1-20c-4,0.5-6.1,1.3-8.1,2.5
				c-4.6,2.7-8.9,7.9-9.6,14.7C30.1,63.6,40.3,73.1,52,73.1z M38,46.4c1.7-3.9,5.4-8.3,13.2-8.9c9.5-0.7,18.4,7.9,15.7,19
				c-1.7,7-9.5,12.3-17.5,11.2C41.8,66.7,33.5,57.1,38,46.4z"/>
			<path d="M98.2,5.8C95.4,3,90.8,0.5,85.7,0H52.1H52H27.9v26.4h-4.3V0h-2.7v26.4h-4.3V0.3c-1,0.2-1.9,0.4-2.8,0.7
				v25.4H9.5V3C8.1,3.9,6.9,4.8,5.9,5.8C0.2,11.6-0.3,21.4,0.1,34h32.2c1.3-0.3,2.9-1.9,4.1-2.8c4.3-3.2,9.9-4.9,15.6-5h0.2
				c5.7,0.1,11.3,1.8,15.6,5c1.2,0.9,2.8,2.5,4.1,2.8H104C104.1,21.3,103.9,11.6,98.2,5.8z M93.7,22.9c0,1.5-1.2,2.7-2.7,2.7H79.9
				c-1.5,0-2.7-1.2-2.7-2.7V11.8c0-1.5,1.2-2.7,2.7-2.7h11.1c1.5,0,2.7,1.2,2.7,2.7V22.9z"/>
		</symbol>
		<symbol id="cflogo" viewBox="0 0 802.1 172.4">
			<path d="M114.5,103.3c0.4,0.7-0.4,1.3-0.6,1.4c-7.3,5.9-16.7,9.3-26.9,9.3c-24,0-43.4-19.4-43.4-43.4c0-24,19.4-43.4,43.4-43.4
				c2.9,0,5.7,0.3,8.4,0.8l0,0c2.8,0.6,4.8,3,4.8,5.9c0,3-2.2,5.3-5,5.8c-1,0.2-4.9-0.3-5.6-0.3c-19.9,0-35.5,15.7-35.5,35.6
				c0,19.9,15.3,34.1,35.2,34.1c8.8,0,17.2-1.6,23.5-6C112.9,103.2,113.9,102.3,114.5,103.3z"/>
			<path d="M68.7,88.7c0.4,0.9-0.1,1.5-0.6,1.5c-0.6,0-1-0.2-2-2.2c-1.4-2.9-3-7.3-3-12.3c0-14.1,11-25,24.8-25.9
				c2.8-0.2,5.3,1.8,5.2,4.3c-0.2,3.7-2.4,4.6-6.1,4.6c-11.4,0-20.2,9.1-20.2,20.5C66.7,82.6,68.3,87.8,68.7,88.7z"/>
			<path d="M169.9,106.8c-9.2,37.6-43.2,65.6-83.7,65.6C38.6,172.4,0,133.8,0,86.2C0,38.6,38.6,0,86.2,0c5.3,0,10.4,0.5,15.4,1.4
				c0.1,0,0.2,0,0.3,0.1c4.1,0.8,7.2,4.4,7.2,8.8c0,4.9-4,9-9,9c-0.5,0-1,0-1.5-0.1c-0.2-0.1-0.5-0.1-0.7-0.2
				c-3.5-0.7-7.1-1.1-10.8-1.1c-29.2,0-52.9,23.7-52.9,52.9c0,29.2,23.7,52.9,52.9,52.9c21,0,38.8-11.9,47.7-30
				c3.5-7,9.5-10.7,17-10.7c10.4,0,18.8,8.4,18.8,18.8C170.6,103.1,170,106.4,169.9,106.8z"/>
			<path d="M296.4,47.6c-11.8,0-21,4.7-29.8,20.1L259,80.8l-6.6,11.4c-4.1,7.1-5.7,13.2-5.4,18.2c-5.4,3.1-10.7,5-15.3,5
				c-9.6,0-15.3-6-8.1-18.6l16-27.9c5.2-8.9,12.6-11.8,16.3-9.6l8-10.4c-2.4-1.2-5.3-1.9-8.4-1.9c-12.6,0-22.6,6.6-29.2,18L210,93
				c-9.7,16.6-1.3,31.9,17.1,31.9c7.6,0,15.2-2.6,22.4-6.7c7.1,11,27.7,10.4,41.3-6.8c0,0,2.3-3.3,4.9-7.7l14.5-24.9
				C319.4,62.8,310.8,47.6,296.4,47.6z M298.3,73.1l-11.2,19.2c0,0-5.7,10.2-8.3,14.3l-0.1,0.3c-7.2,12.4-24.8,10-15.6-5.9l11.7-20.2
				l7.4-12.5C292.8,50,307.6,57.2,298.3,73.1z"/>
			<path d="M701.5,47.6c-11.8,0-21,4.7-29.8,20.1l-7.5,13.1l-6.6,11.4c-19.3,33.2,17.7,45.5,38.4,19.3c0,0,2.3-3.3,4.9-7.7l14.5-24.9
				C724.5,62.8,716,47.6,701.5,47.6z M703.4,73.1l-11.2,19.2c0,0-5.7,10.2-8.3,14.3l-0.1,0.3c-7.2,12.4-24.8,10-15.6-5.9l11.7-20.2
				l7.4-12.5C698,50,712.7,57.2,703.4,73.1z"/>
			<path d="M642.9,47.6c-11.8,0-21,4.7-29.8,20.1l-7.5,13.1l-6.6,11.4c-3.8,6.5-5.4,12.1-5.4,16.9c-4.8,4-9.1,6.4-12.4,6.4
				c-3.4,0-5.3-2.3-1.8-8.4l43.4-75h-15.3l-41.3,71c-6.5,11.4-1.9,21.8,10.5,21.8c6,0,12.4-3,18.8-7.8c6.4,12.1,27.9,12,41.9-5.7
				c0,0,2.3-3.3,4.9-7.7l14.5-24.9C665.9,62.8,657.4,47.6,642.9,47.6z M644.8,73.1l-11.2,19.2c0,0-5.7,10.2-8.3,14.3l-0.1,0.3
				c-7.2,12.4-24.8,10-15.6-5.9l11.7-20.2l7.4-12.5C639.4,50,654.1,57.2,644.8,73.1z"/>
			<path d="M382.8,47.6c-11.8,0-21,4.7-29.8,20.1l-7.5,13.1l-6.6,11.4c-3.7,6.3-5.3,11.9-5.4,16.6c-5,4.2-9.4,6.8-12.8,6.8
				c-3.4,0-5.3-2.3-1.8-8.4l43.4-75h-15.3l-41.3,71c-6.5,11.4-1.9,21.8,10.5,21.8c6.1,0,12.6-3.1,19.1-8c6.3,12.3,28,12.3,42-5.5
				c0,0,2.3-3.3,4.9-7.7l14.5-24.9C405.8,62.8,397.3,47.6,382.8,47.6z M384.7,73.1l-11.2,19.2c0,0-5.7,10.2-8.3,14.3l-0.1,0.3
				c-7.2,12.4-24.8,10-15.6-5.9l11.7-20.2l7.4-12.5C379.3,50,394,57.2,384.7,73.1z"/>
			<path d="M546.6,52l-36.4,62.2c-1.8,0.9-3.5,1.4-4.9,1.4c-3.4,0-5.3-2.4-1.8-8.4l15.3-26.9c5.3-9.3,2.8-14.8-2.2-20.8L508,49.1
				c-2.2-2.8-2.2-5.9,0.9-8.9l-8-8.7c-8.7,7.8-9.4,16.5-4,23.6l1.3,1.8c-6.8,9.6-15.9,22.6-26,34.4l-1,1.2c-11.1,12.8-21.8,23-28.6,23
				c-3.4,0-5.3-2.1-1.8-8.2l32.8-57.2h-15.3L431,97.6c-11.7,10.6-20.7,16.4-23.6,15.1c-3.8-1.6,0-7.2,1.9-10.5l30-52.1h-15.3
				L393.8,102c-7.8,13.6-4.3,23.1,5.9,23.1c8.4,0,17.9-7.7,25.2-14.8c-1.5,8.3,3.4,14.7,13.1,14.7c12.7,0,27.3-13.6,40-28.3
				c7.4-8.6,13.1-16.2,25.4-32.9l2.1,2.5c1.9,2.5,2.7,5.6,0.9,8.7l-16.2,28.2c-6.5,11.4-1.9,21.8,10.5,21.8c1.1,0,2.2-0.1,3.4-0.3
				l-5.7,9.8c-11.8,20.5,11.8,36.9,28.2,8.1l2.7-4.9c3.1-5.5,3.2-11.2,1.8-15.5c-1.2-3.8-3.9-3.6-7.3-3.6c3.1-0.3,6.5-1.2,9.2-3
				c10.5-5.5,23.2-14.2,31-27.6l18.4-30.2C599.9,27,566.7,17.1,546.6,52z M520,133.8l-4,7.3c-5.3,9.1-11.7,6.4-5.3-4.4l8.6-14.6h1.3
				C523.1,124.1,523.1,128,520,133.8z M572.2,52.9l-17.6,29c-6.8,11.7-17,24.5-29.1,29.8l35.4-59C569.1,38.4,579.7,39,572.2,52.9z"/>
			<path d="M769.6,111.6c-3.4,2.4-6.5,3.9-9.1,3.9c-3.4,0-5.3-2.3-1.8-8.4l43.4-75h-15.3l-14,24.1c-2.7-4.3-7.7-8-14-8
				c-8.3,0-19.8,6.5-26.3,17.7l-21.5,37.2c-6.5,11.4-1.9,21.8,10.5,21.8c6.2,0,13.9-4,21.3-10c0.7,5.9,5.5,10,13.3,10
				c6,0,12.5-3.1,19-7.9C773.9,116,772.1,114.2,769.6,111.6z M751.2,93.1c-9.3,15.2-18.7,22.4-25.2,22.4c-3.4,0-5.3-2.4-1.8-8.4
				l21.4-37.3c8.3-14.3,24.6-10.7,17.1,3.3h0.1L751.2,93.1z"/>
		</symbol>
		<symbol id="onstage" viewBox="0 0 18.6 33.7">
			<path d="M1.2,33.1c-0.3-0.2-0.6-0.5-0.9-0.7c-0.3-0.3-0.4-0.7-0.3-1.2c1.3-4.2,2.6-8.4,3.8-12.6c0.6-1.9,1.2-3.9,1.8-5.8
				c0-0.2,0.1-0.3,0.2-0.5c0.2-0.6,0.8-0.8,1.4-0.4c1.6,1,3.4,1.7,5.3,2c0.7,0.1,1,0.7,0.7,1.4c-1,2-1.9,4.1-2.9,6.1
				c-1,2.2-2.1,4.4-3.1,6.6c-0.8,1.7-1.6,3.4-2.4,5.1c-0.2,0.4-0.5,0.6-0.9,0.6c-0.4,0-0.9,0-1.3-0.1C2.2,33.5,1.7,33.3,1.2,33.1z
				 M7.3,17.3c-0.2,0.4-0.3,0.8-0.5,1.2c-0.2,0.5,0,0.9,0.4,1.1c0.4,0.1,0.8-0.1,1-0.5c0.3-0.8,0.6-1.6,0.9-2.4c0.2-0.5,0-0.9-0.4-1.1
				c-0.4-0.1-0.8,0.1-1,0.5C7.6,16.5,7.5,16.9,7.3,17.3z"/>
			<path d="M17.7,10c-0.2,0.3-0.3,0.6-0.5,0.9c-0.5,0.7-1.1,1.4-1.9,1.8c-0.4,0.2-0.9,0.3-1.3,0.3c-2.7-0.2-5.2-1.1-7.3-2.8
				C6.3,9.9,6,9.4,5.9,8.9C5.6,7.8,5.6,6.8,5.9,5.7c0-0.1,0-0.2,0-0.2c0.2-0.6,0.4-1.1,0.7-1.7c0.1-0.1,0.1-0.2,0.2-0.3
				C8,1.2,10.6-0.3,13.2,0c0.3,0,0.6,0.1,0.9,0.1c0.4,0.2,0.8,0.3,1.3,0.5c0,0,0,0.1,0.1,0.1c2.4,1.4,3.3,3.5,3.2,6.2
				c0,0.5-0.2,1-0.2,1.4C18.2,8.9,18,9.5,17.7,10z"/>
		</symbol>
		<symbol id="onyoutube" viewBox="0 0 339.3 238.6">
			<path d="M181.8,238.6c-6.3,0-12.6,0-18.9,0c-0.4-0.1-0.8-0.2-1.3-0.2c-7.9-0.1-15.7-0.2-23.6-0.3c-10.6-0.2-21.1-0.3-31.7-0.7
				c-15.4-0.5-30.8-0.9-46.2-1.9c-7.7-0.5-15.4-1.6-22.9-3.3c-11.6-2.7-20.7-9.2-26.2-20.2c-3.9-7.9-6.4-16.3-7.5-25
				c-1.1-8.8-1.7-17.7-2.4-26.6c-1.7-21.5-1.1-43.1-0.8-64.7C0.5,84,1.7,72.3,2.5,60.7c0.6-9,2.3-17.8,5.2-26.4
				C13.7,16.5,26,6.5,44.3,4.2C54.7,2.9,65.3,2.5,75.7,2c12.9-0.6,25.7-1,38.6-1.3C128.9,0.3,143.4,0,158,0c18.4,0,36.8,0.2,55.3,0.4
				c7.4,0.1,14.7,0.2,22.1,0.5c15.3,0.6,30.6,1.2,45.9,2c6.1,0.3,12.3,0.8,18.3,2c12.5,2.6,22.4,9.3,28.5,20.8
				c4.3,8,6.7,16.7,7.8,25.7c1.1,8.8,1.7,17.7,2.4,26.6c1.6,21.5,1.1,43.1,0.8,64.7c-0.2,11.9-1.4,23.8-2.2,35.7
				c-0.6,8.9-2.4,17.5-5.2,25.9c-4.9,14.7-14.7,24.2-29.5,28.4c-7.1,2-14.4,2.3-21.7,2.7c-15.2,0.8-30.4,1.5-45.6,2
				c-14.5,0.5-29.1,0.6-43.6,0.8C188.1,238.3,184.9,238.5,181.8,238.6z M113.7,46.1c0,46.5,0,92.6,0,139.1
				c44.6-23.1,88.9-46.1,133.7-69.3C202.5,92.4,158.2,69.3,113.7,46.1z"/>
		</symbol>
		<symbol viewBox="0 0 305 305" id="ontv">
			<path d="M273.4,305c-80.6,0-161.2,0-241.9,0c-0.6-0.2-1.1-0.5-1.7-0.6C14.8,301.6,5.3,292.7,1.1,278c-0.4-1.5-0.8-3-1.1-4.6
				c0-49.4,0-98.9,0-148.3c0.5-2.1,1-4.2,1.7-6.3C6.3,103.5,19.6,94,36.6,94c31.8,0,63.5,0,95.3,0c1.1,0,2.3,0,3.4,0
				c0.3-0.4,0.6-0.9,0.9-1.3c-1-0.5-2.1-0.9-2.8-1.6c-11.4-11.3-22.8-22.7-34.1-34.1c-1.1-1.1-2.2-2.3-3.1-3.6
				c-3.9-5.6-1.8-13.5,4.2-16.5c5.1-2.6,10-1.6,14.8,3.1c11.7,11.7,23.4,23.4,35.2,35.2c0.7,0.7,1.5,1.4,2.7,2.5
				c1-1.3,1.8-2.3,2.7-3.3c21.3-21.4,42.7-42.7,64-64c3.9-3.9,7.4-8.2,12.7-10.3c1.2,0,2.4,0,3.6,0c1.1,0.4,2.2,0.8,3.3,1.3
				c5,2.1,8.1,7.7,6.5,12.9c-0.9,2.7-2.6,5.4-4.6,7.4c-23.1,23.3-46.3,46.4-69.4,69.5c-0.8,0.8-1.5,1.6-2.7,2.9c2.7,0,4.4,0,6.2,0
				c32,0,63.9-0.2,95.9,0.2c15.8,0.2,28.8,11.1,32.7,26.4c0.4,1.5,0.8,3,1.2,4.5c0,49.4,0,98.9,0,148.3c-0.2,0.7-0.5,1.3-0.6,2
				c-2.6,13.7-10.5,22.9-23.6,27.7C278.4,303.9,275.9,304.4,273.4,305z M123.9,116.8c0,0.2,0,0.4,0,0.5c-9.6,0-19.3-0.2-28.9,0
				c-13.5,0.3-27,0.6-40.2,4c-12.2,3.2-21.4,10-25.5,22.2c-2,6.2-3.8,12.7-4.2,19.1c-1,16.5-1.5,33.1-1.5,49.7
				c-0.1,13.7,0.8,27.4,4.9,40.6c3.4,10.8,9.9,18.5,20.7,22.5c11.5,4.3,23.6,5.3,35.7,5.5c22,0.4,44.1,0.4,66.1,0.3
				c13.4-0.1,26.8-0.5,39.9-3.7c12.6-3.1,22-10.1,26.1-22.7c1.8-5.6,3.2-11.5,3.9-17.3c2.5-19.3,2.1-38.6,1.5-58
				c-0.3-11.4-1.2-22.8-4.6-33.8c-3.1-10-8.8-17.7-18.6-21.9c-7.9-3.4-16.3-5-24.9-5.4C157.6,117.8,140.8,117.4,123.9,116.8z
				 M264.1,188.5c10.2-0.1,18.4-8.3,18.3-18.4c0-10.2-8.5-18.5-18.7-18.3c-10.1,0.2-18.4,8.6-18.2,18.6
				C245.7,180.5,253.9,188.6,264.1,188.5z M263.8,235.4c10.2,0.1,18.4-8,18.6-18.2c0.1-10.2-8.3-18.7-18.5-18.7
				c-10,0-18.4,8.3-18.5,18.4C245.4,227,253.7,235.4,263.8,235.4z"/>
		</symbol>
		<symbol viewBox="0 0 708 252" id="logo">
			<path d="M17.4,121.7l-3.3,2c-0.6-1.1-1.2-1.8-1.8-2.1c-0.6-0.4-1.4-0.6-2.3-0.6c-1.1,0-2.1,0.3-2.9,1
				c-0.8,0.6-1.1,1.4-1.1,2.4c0,1.3,1,2.4,3,3.2l2.7,1.1c2.2,0.9,3.8,2,4.9,3.3c1,1.3,1.5,2.9,1.5,4.8c0,2.5-0.8,4.6-2.5,6.2
				c-1.7,1.7-3.8,2.5-6.3,2.5c-2.4,0-4.3-0.7-5.9-2.1c-1.5-1.4-2.5-3.4-2.9-5.9l4.2-0.9c0.2,1.6,0.5,2.7,1,3.3
				c0.9,1.2,2.1,1.8,3.7,1.8c1.3,0,2.4-0.4,3.2-1.3c0.8-0.9,1.3-2,1.3-3.3c0-0.5-0.1-1-0.2-1.5c-0.1-0.4-0.4-0.8-0.7-1.2
				c-0.3-0.4-0.7-0.7-1.2-1c-0.5-0.3-1.1-0.6-1.8-0.9l-2.6-1.1c-3.7-1.6-5.6-3.9-5.6-6.9c0-2.1,0.8-3.8,2.4-5.1
				c1.6-1.4,3.5-2.1,5.9-2.1C13.1,117.1,15.6,118.6,17.4,121.7z"/>
			<path d="M65,119.1v4.9c-2.4-2-4.9-3-7.4-3c-2.8,0-5.2,1-7.1,3c-1.9,2-2.9,4.5-2.9,7.4c0,2.9,1,5.3,2.9,7.3
				c1.9,2,4.3,3,7.1,3c1.5,0,2.7-0.2,3.7-0.7c0.6-0.2,1.2-0.6,1.8-1c0.6-0.4,1.2-0.9,1.9-1.5v5c-2.4,1.3-4.8,2-7.4,2
				c-3.9,0-7.2-1.4-10-4.1c-2.8-2.8-4.1-6.1-4.1-10c0-3.5,1.2-6.6,3.5-9.3c2.8-3.3,6.5-5,11-5C60.4,117.1,62.7,117.8,65,119.1z"/>
			<path d="M96.1,117.6V145H92v-27.3H96.1z"/>
			<path d="M139.5,121.5h-11v6.6h10.6v3.9h-10.6v9.1h11v3.9h-15.1v-27.3h15.1V121.5z"/>
			<path d="M166.7,145v-29.2l19.9,20.9v-19h4.1v29l-19.9-20.8V145H166.7z"/>
			<path d="M239.5,119.1v4.9c-2.4-2-4.9-3-7.4-3c-2.8,0-5.2,1-7.1,3c-1.9,2-2.9,4.5-2.9,7.4c0,2.9,1,5.3,2.9,7.3
				c1.9,2,4.3,3,7.1,3c1.5,0,2.7-0.2,3.7-0.7c0.6-0.2,1.2-0.6,1.8-1c0.6-0.4,1.2-0.9,1.9-1.5v5c-2.4,1.3-4.8,2-7.4,2
				c-3.9,0-7.2-1.4-10-4.1c-2.8-2.8-4.1-6.1-4.1-10c0-3.5,1.2-6.6,3.5-9.3c2.8-3.3,6.5-5,11-5C234.9,117.1,237.2,117.8,239.5,119.1z"
				/>
			<path d="M281.6,121.5h-11v6.6h10.6v3.9h-10.6v9.1h11v3.9h-15.1v-27.3h15.1V121.5z"/>
			<path d="M345.8,133.9V145h-4.1v-27.3h4.7c2.3,0,4,0.2,5.2,0.5c1.2,0.3,2.2,0.9,3.1,1.8c1.6,1.5,2.4,3.5,2.4,5.8
				c0,2.5-0.8,4.5-2.5,5.9c-1.7,1.5-3.9,2.2-6.8,2.2H345.8z M345.8,130h1.5c3.8,0,5.7-1.5,5.7-4.4c0-2.8-2-4.2-5.9-4.2h-1.4V130z"/>
			<path d="M392.3,133.3l8.5,11.7h-5l-7.8-11.2h-0.7V145H383v-27.3h4.8c3.6,0,6.2,0.7,7.8,2c1.8,1.5,2.7,3.5,2.7,6
				c0,1.9-0.6,3.6-1.7,5C395.6,132,394.1,132.9,392.3,133.3z M387.2,130.2h1.3c3.9,0,5.9-1.5,5.9-4.5c0-2.8-1.9-4.2-5.7-4.2h-1.5
				V130.2z"/>
			<path d="M441.7,121.5h-11v6.6h10.6v3.9h-10.6v9.1h11v3.9h-15.1v-27.3h15.1V121.5z"/>
			<path d="M484.4,121.7l-3.3,2c-0.6-1.1-1.2-1.8-1.8-2.1c-0.6-0.4-1.4-0.6-2.3-0.6c-1.1,0-2.1,0.3-2.9,1
				c-0.8,0.6-1.1,1.4-1.1,2.4c0,1.3,1,2.4,3,3.2l2.7,1.1c2.2,0.9,3.8,2,4.9,3.3c1,1.3,1.5,2.9,1.5,4.8c0,2.5-0.8,4.6-2.5,6.2
				c-1.7,1.7-3.8,2.5-6.3,2.5c-2.4,0-4.3-0.7-5.9-2.1c-1.5-1.4-2.5-3.4-2.9-5.9l4.2-0.9c0.2,1.6,0.5,2.7,1,3.3
				c0.9,1.2,2.1,1.8,3.7,1.8c1.3,0,2.4-0.4,3.2-1.3c0.8-0.9,1.3-2,1.3-3.3c0-0.5-0.1-1-0.2-1.5c-0.1-0.4-0.4-0.8-0.7-1.2
				c-0.3-0.4-0.7-0.7-1.2-1s-1.1-0.6-1.8-0.9l-2.6-1.1c-3.7-1.6-5.6-3.9-5.6-6.9c0-2.1,0.8-3.8,2.4-5.1c1.6-1.4,3.5-2.1,5.9-2.1
				C480.1,117.1,482.6,118.6,484.4,121.7z"/>
			<path d="M526.9,121.5h-11v6.6h10.6v3.9h-10.6v9.1h11v3.9h-15.1v-27.3h15.1V121.5z"/>
			<path d="M554.1,145v-29.2l19.9,20.9v-19h4.1v29l-19.9-20.8V145H554.1z"/>
			<path d="M614,121.5V145h-4.1v-23.5h-6.3v-3.9h16.7v3.9H614z"/>
			<path d="M660.8,121.5h-11v6.6h10.6v3.9h-10.6v9.1h11v3.9h-15.1v-27.3h15.1V121.5z"/>
			<path d="M697.2,133.3l8.5,11.7h-5l-7.8-11.2h-0.7V145h-4.1v-27.3h4.8c3.6,0,6.2,0.7,7.8,2c1.8,1.5,2.7,3.5,2.7,6
				c0,1.9-0.6,3.6-1.7,5C700.5,132,699,132.9,697.2,133.3z M692.1,130.2h1.3c3.9,0,5.9-1.5,5.9-4.5c0-2.8-1.9-4.2-5.7-4.2h-1.5V130.2
				z"/>
			<path d="M71.8,234.5c0,4.9-4.1,9-9.1,9s-9.1-4.1-9.1-9s4.1-9,9.1-9C67.7,225.5,71.8,229.5,71.8,234.5z M54.8,234.5
				c0,4.3,3.6,7.9,7.9,7.9c4.3,0,7.9-3.6,7.9-7.9c0-4.3-3.6-7.9-7.9-7.9C58.4,226.5,54.8,230.1,54.8,234.5z"/>
			<path d="M97.2,243.8l-14.7-15.6v15h-1.1v-17.7L96.1,241v-15.2h1.1V243.8z"/>
			<path d="M125.9,243.2h-1.1v-16.4h-4.5v-1h10.1v1h-4.5V243.2z"/>
			<path d="M144,240.6L144,240.6l5.2-14.9h1.1l-6.3,18l-6.3-18h1.1L144,240.6z"/>
			<path d="M279.9,234.5c0,4.9-4.1,9-9.1,9s-9.1-4.1-9.1-9s4.1-9,9.1-9C275.8,225.5,279.9,229.5,279.9,234.5z
				 M262.9,234.5c0,4.3,3.6,7.9,7.9,7.9c4.3,0,7.9-3.6,7.9-7.9c0-4.3-3.6-7.9-7.9-7.9C266.5,226.5,262.9,230.1,262.9,234.5z"/>
			<path d="M305.3,243.8l-14.7-15.6v15h-1.1v-17.7l14.7,15.5v-15.2h1.1V243.8z"/>
			<path d="M328.4,225.7h1.2l5.1,8.8l5.1-8.8h1.2l-5.8,10v7.5h-1.1v-7.5L328.4,225.7z"/>
			<path d="M367.1,234.5c0,4.9-4.1,9-9.1,9c-4.9,0-9.1-4.1-9.1-9s4.1-9,9.1-9C363,225.5,367.1,229.5,367.1,234.5z
				 M350.1,234.5c0,4.3,3.6,7.9,7.9,7.9c4.3,0,7.9-3.6,7.9-7.9c0-4.3-3.6-7.9-7.9-7.9C353.7,226.5,350.1,230.1,350.1,234.5z"/>
			<path d="M387.3,225.7h1.1v10.9c0,1.8,0,3.3-1.2,4.8c-1.2,1.3-3,2-4.7,2c-1.8,0-3.6-0.7-4.7-2
				c-1.2-1.5-1.2-3-1.2-4.8v-10.9h1.1v10.6c0,1.6,0,3.2,0.9,4.4c0.9,1.1,2.6,1.7,3.9,1.7c1.3,0,3.1-0.6,3.9-1.7
				c0.9-1.2,0.9-2.8,0.9-4.4V225.7z"/>
			<path d="M402.9,243.2h-1.1v-16.4h-4.5v-1h10.1v1h-4.5V243.2z"/>
			<path d="M426.9,225.7h1.1v10.9c0,1.8,0,3.3-1.2,4.8c-1.2,1.3-3,2-4.7,2c-1.8,0-3.6-0.7-4.7-2
				c-1.2-1.5-1.2-3-1.2-4.8v-10.9h1.1v10.6c0,1.6,0,3.2,0.9,4.4c0.9,1.1,2.6,1.7,3.9,1.7c1.3,0,3.1-0.6,3.9-1.7
				c0.9-1.2,0.9-2.8,0.9-4.4V225.7z"/>
			<path d="M438.6,243.2v-17.5h3.5c1.3,0,2.6,0.1,3.6,1c1.1,0.9,1.5,2.2,1.5,3.6c0,1.6-0.6,2.8-2,3.6
				c2.2,0.4,3.6,2.2,3.6,4.4c0,1.4-0.5,2.7-1.6,3.6c-1.2,1-2.5,1.3-4.1,1.3H438.6z M439.7,233.6h1.9c1.2,0,2.1,0.1,3.1-0.6
				c1-0.7,1.3-1.6,1.3-2.8c0-1.1-0.4-2.2-1.4-2.9c-0.9-0.6-2-0.6-3-0.6h-1.9V233.6z M439.7,242.1h2.7c1.2,0,2.5,0,3.6-0.7
				c1.1-0.7,1.7-1.8,1.7-3.1c0-1.3-0.6-2.5-1.8-3.1c-1.1-0.5-2.5-0.6-3.7-0.6h-2.5V242.1z"/>
			<path d="M459.7,226.8v6.3h7v1h-7v8h7.2v1h-8.3v-17.5h8.3v1H459.7z"/>
			<path d="M566.5,234.5c0,4.9-4.1,9-9.1,9s-9.1-4.1-9.1-9s4.1-9,9.1-9C562.4,225.5,566.5,229.5,566.5,234.5z
				 M549.5,234.5c0,4.3,3.6,7.9,7.9,7.9c4.3,0,7.9-3.6,7.9-7.9c0-4.3-3.6-7.9-7.9-7.9C553.1,226.5,549.5,230.1,549.5,234.5z"/>
			<path d="M591.9,243.8l-14.7-15.6v15h-1.1v-17.7l14.7,15.5v-15.2h1.1V243.8z"/>
			<path d="M624.8,228.6c-0.8-1.2-1.9-2.1-3.5-2.1c-1.9,0-3.3,1.5-3.3,3.3c0,1.8,1.7,2.6,3.1,3.3l3.3,1.7
				c1.3,0.8,2,1.9,2,3.5c0,2.9-2.6,5.1-5.5,5.1c-2.4,0-4.3-1.5-5.1-3.7l1-0.4c0.7,1.9,2.1,3.1,4.2,3.1c2.3,0,4.3-1.8,4.3-4.1
				c0-2-2-2.8-3.5-3.5l-3.1-1.7c-1.2-0.7-1.8-1.7-1.8-3.1c0-2.6,1.9-4.4,4.5-4.4c1.8,0,3.4,0.9,4.3,2.5L624.8,228.6z"/>
			<path d="M640.2,243.2h-1.1v-16.4h-4.5v-1h10.1v1h-4.5V243.2z"/>
			<path d="M653.5,237.4l-2.3,5.7H650l7.3-18l7.3,18h-1.1l-2.3-5.7H653.5z M657.4,228l-3.4,8.4h6.8L657.4,228z"/>
			<path d="M690,234.8c0,2.2-0.3,4.1-1.8,5.8c-1.7,1.8-4.2,2.8-6.6,2.8c-4.8,0-9-4.1-9-8.9c0-5,4.1-9,9.1-9
				c3.2,0,5.7,1.6,7.6,4.1l-0.9,0.7c-1.6-2.3-3.9-3.7-6.7-3.7c-4.3,0-7.9,3.7-7.9,7.9c0,4.3,3.6,7.9,7.9,7.9c1.9,0,3.7-0.8,5.1-1.9
				c1.5-1.3,2.1-2.7,2.1-4.6h-6.2v-1H690z"/>
			<path d="M700.7,226.8v6.3h7v1h-7v8h7.2v1h-8.3v-17.5h8.3v1H700.7z"/>
			<path d="M36.7,251c-10.8,0-21.6,0-32.4,0c-0.1,0-0.1-0.1-0.2-0.1c-2-0.4-3.3-1.6-3.9-3.5c-0.1-0.2-0.1-0.4-0.2-0.6
				c0-6.6,0-13.2,0-19.9c0.1-0.3,0.1-0.6,0.2-0.8c0.6-2,2.4-3.3,4.7-3.3c4.3,0,8.5,0,12.8,0c0.2,0,0.3,0,0.5,0c0-0.1,0.1-0.1,0.1-0.2
				c-0.1-0.1-0.3-0.1-0.4-0.2c-1.5-1.5-3.1-3-4.6-4.6c-0.1-0.2-0.3-0.3-0.4-0.5c-0.5-0.7-0.2-1.8,0.6-2.2c0.7-0.4,1.3-0.2,2,0.4
				c1.6,1.6,3.1,3.1,4.7,4.7c0.1,0.1,0.2,0.2,0.4,0.3c0.1-0.2,0.2-0.3,0.4-0.4c2.9-2.9,5.7-5.7,8.6-8.6c0.5-0.5,1-1.1,1.7-1.4
				c0.2,0,0.3,0,0.5,0c0.1,0.1,0.3,0.1,0.4,0.2c0.7,0.3,1.1,1,0.9,1.7c-0.1,0.4-0.3,0.7-0.6,1c-3.1,3.1-6.2,6.2-9.3,9.3
				c-0.1,0.1-0.2,0.2-0.4,0.4c0.4,0,0.6,0,0.8,0c4.3,0,8.6,0,12.8,0c2.1,0,3.9,1.5,4.4,3.5c0.1,0.2,0.1,0.4,0.2,0.6
				c0,6.6,0,13.2,0,19.9c0,0.1-0.1,0.2-0.1,0.3c-0.3,1.8-1.4,3.1-3.2,3.7C37.4,250.9,37,250.9,36.7,251z M16.7,225.8
				C16.7,225.8,16.7,225.8,16.7,225.8c-1.3,0.1-2.6,0-3.9,0.1c-1.8,0-3.6,0.1-5.4,0.5c-1.6,0.4-2.9,1.3-3.4,3
				c-0.3,0.8-0.5,1.7-0.6,2.6c-0.1,2.2-0.2,4.4-0.2,6.7c0,1.8,0.1,3.7,0.7,5.4c0.5,1.4,1.3,2.5,2.8,3c1.5,0.6,3.2,0.7,4.8,0.7
				c3,0.1,5.9,0.1,8.9,0c1.8,0,3.6-0.1,5.3-0.5c1.7-0.4,2.9-1.3,3.5-3c0.2-0.8,0.4-1.5,0.5-2.3c0.3-2.6,0.3-5.2,0.2-7.8
				c0-1.5-0.2-3.1-0.6-4.5c-0.4-1.3-1.2-2.4-2.5-2.9c-1.1-0.5-2.2-0.7-3.3-0.7C21.2,225.9,18.9,225.9,16.7,225.8z M35.4,235.4
				c1.4,0,2.5-1.1,2.5-2.5c0-1.4-1.1-2.5-2.5-2.5c-1.4,0-2.5,1.2-2.4,2.5C33,234.3,34.1,235.4,35.4,235.4z M35.4,241.7
				c1.4,0,2.5-1.1,2.5-2.4c0-1.4-1.1-2.5-2.5-2.5c-1.3,0-2.5,1.1-2.5,2.5C32.9,240.5,34.1,241.7,35.4,241.7z"/>
			<path d="M229.9,252c-0.8,0-1.7,0-2.5,0c-0.1,0-0.1,0-0.2,0c-1.1,0-2.1,0-3.2,0c-1.4,0-2.8,0-4.2-0.1
				c-2.1-0.1-4.1-0.1-6.2-0.3c-1-0.1-2.1-0.2-3.1-0.4c-1.6-0.4-2.8-1.2-3.5-2.7c-0.5-1.1-0.9-2.2-1-3.3c-0.1-1.2-0.2-2.4-0.3-3.6
				c-0.2-2.9-0.1-5.8-0.1-8.7c0-1.6,0.2-3.1,0.3-4.7c0.1-1.2,0.3-2.4,0.7-3.5c0.8-2.4,2.5-3.7,4.9-4c1.4-0.2,2.8-0.2,4.2-0.3
				c1.7-0.1,3.4-0.1,5.2-0.2c1.9,0,3.9-0.1,5.8-0.1c2.5,0,4.9,0,7.4,0.1c1,0,2,0,3,0.1c2,0.1,4.1,0.2,6.1,0.3c0.8,0,1.6,0.1,2.4,0.3
				c1.7,0.3,3,1.2,3.8,2.8c0.6,1.1,0.9,2.2,1.1,3.4c0.1,1.2,0.2,2.4,0.3,3.6c0.2,2.9,0.2,5.8,0.1,8.7c0,1.6-0.2,3.2-0.3,4.8
				c-0.1,1.2-0.3,2.3-0.7,3.5c-0.7,2-2,3.2-3.9,3.8c-0.9,0.3-1.9,0.3-2.9,0.4c-2,0.1-4.1,0.2-6.1,0.3c-1.9,0.1-3.9,0.1-5.8,0.1
				C230.7,251.9,230.3,251.9,229.9,252z M220.7,226.2c0,6.2,0,12.4,0,18.6c6-3.1,11.9-6.2,17.9-9.3
				C232.6,232.4,226.7,229.3,220.7,226.2z"/>
			<line x1="0" y1="182" x2="708" y2="182"/>
			<rect y="181" width="708" height="2"/>
			<path d="M523.1,247.8c-0.3-0.2-0.6-0.5-0.9-0.7c-0.3-0.3-0.4-0.7-0.3-1.2c1.3-4.2,2.6-8.4,3.8-12.6
				c0.6-1.9,1.2-3.9,1.8-5.8c0-0.2,0.1-0.3,0.2-0.5c0.2-0.6,0.8-0.8,1.4-0.4c1.6,1,3.4,1.7,5.3,2c0.7,0.1,1,0.7,0.7,1.4
				c-1,2-1.9,4.1-2.9,6.1c-1,2.2-2.1,4.4-3.1,6.6c-0.8,1.7-1.6,3.4-2.4,5.1c-0.2,0.4-0.5,0.6-0.9,0.6c-0.4,0-0.9,0-1.3-0.1
				C524.1,248.2,523.6,248,523.1,247.8z M529.2,232c-0.2,0.4-0.3,0.8-0.5,1.2c-0.2,0.5,0,0.9,0.4,1.1c0.4,0.1,0.8-0.1,1-0.5
				c0.3-0.8,0.6-1.6,0.9-2.4c0.2-0.5,0-0.9-0.4-1.1c-0.4-0.1-0.8,0.1-1,0.5C529.5,231.2,529.4,231.6,529.2,232z"/>
			<path d="M539.6,224.7c-0.2,0.3-0.3,0.6-0.5,0.9c-0.5,0.7-1.1,1.4-1.9,1.8c-0.4,0.2-0.9,0.3-1.3,0.3
				c-2.7-0.2-5.2-1.1-7.3-2.8c-0.4-0.3-0.7-0.8-0.8-1.3c-0.2-1.1-0.3-2.1,0.1-3.2c0-0.1,0-0.2,0-0.2c0.2-0.6,0.4-1.1,0.7-1.7
				c0.1-0.1,0.1-0.2,0.2-0.3c1.2-2.3,3.8-3.8,6.4-3.5c0.3,0,0.6,0.1,0.9,0.1c0.4,0.2,0.8,0.3,1.3,0.5c0,0,0,0.1,0.1,0.1
				c2.4,1.4,3.3,3.5,3.2,6.2c0,0.5-0.2,1-0.2,1.4C540.1,223.6,539.9,224.1,539.6,224.7z"/>
			<path d="M135.3,45l23.5,32.4h-14l-21.7-31.1H121v31.1h-11.5v-76H123c10,0,17.3,1.9,21.8,5.7
				c4.9,4.2,7.4,9.7,7.4,16.6c0,5.4-1.5,10-4.6,13.9C144.4,41.4,140.4,43.9,135.3,45z M121,36.3h3.6c10.9,0,16.3-4.2,16.3-12.5
				c0-7.8-5.3-11.7-15.9-11.7H121V36.3z"/>
			<path d="M43.5,38H75v2.5c0,5.7-0.7,10.8-2,15.2c-1.3,4.1-3.5,7.9-6.7,11.4C59.2,75,50.2,79,39.3,79
				c-10.6,0-19.8-3.8-27.4-11.5c-7.6-7.7-11.4-17-11.4-27.8c0-11,3.9-20.4,11.6-28.1C19.9,3.9,29.3,0,40.3,0C46.3,0,51.8,1.2,57,3.6
				c4.9,2.4,9.8,6.4,14.5,11.8l-8.2,7.8C57.1,15,49.5,10.8,40.5,10.8c-8.1,0-14.8,2.8-20.3,8.3c-5.5,5.5-8.2,12.3-8.2,20.5
				c0,8.5,3,15.5,9.1,21c5.7,5.1,11.8,7.6,18.5,7.6c5.7,0,10.7-1.9,15.2-5.7c4.5-3.8,7-8.4,7.5-13.8h-19V38z"/>
			<path d="M227.8,12.3h-30.5v18.3h29.6v10.8h-29.6v25.4h30.5v10.8h-42V1.5h42V12.3z"/>
			<path d="M300.2,38h31.5v2.5c0,5.7-0.7,10.8-2,15.2c-1.3,4.1-3.5,7.9-6.7,11.4C316,75,307,79,296.1,79
				c-10.6,0-19.8-3.8-27.4-11.5c-7.6-7.7-11.4-17-11.4-27.8c0-11,3.9-20.4,11.6-28.1C276.6,3.9,286,0,297.1,0
				c5.9,0,11.5,1.2,16.7,3.6c4.9,2.4,9.8,6.4,14.5,11.8l-8.2,7.8c-6.2-8.3-13.9-12.5-22.8-12.5c-8.1,0-14.8,2.8-20.3,8.3
				c-5.5,5.5-8.2,12.3-8.2,20.5c0,8.5,3,15.5,9.1,21c5.7,5.1,11.8,7.6,18.5,7.6c5.7,0,10.7-1.9,15.2-5.7c4.5-3.8,7-8.4,7.5-13.8h-19
				V38z"/>
			<path d="M452.8,12.9h-26.5v18.3h25.6V42h-25.6v36.2h-11.5V2.1h38V12.9z"/>
			<path d="M566,39.8c0-10.7,3.9-19.9,11.8-27.6C585.6,4.5,595,0.7,606,0.7c10.8,0,20.1,3.9,27.9,11.6
				c7.8,7.8,11.7,17.1,11.7,28c0,10.9-3.9,20.2-11.7,27.9c-7.9,7.7-17.3,11.5-28.4,11.5c-9.8,0-18.7-3.4-26.5-10.2
				C570.3,61.9,566,52,566,39.8z M577.6,39.9c0,8.4,2.8,15.3,8.5,20.7c5.6,5.4,12.1,8.1,19.5,8.1c8,0,14.7-2.8,20.2-8.3
				c5.5-5.6,8.2-12.4,8.2-20.4c0-8.1-2.7-14.9-8.1-20.4c-5.4-5.5-12.1-8.3-20-8.3c-7.9,0-14.6,2.8-20.1,8.3
				C580.4,25.2,577.6,31.9,577.6,39.9z"/>
			<path d="M469,39.8c0-10.7,3.9-19.9,11.8-27.6C488.6,4.5,498,0.7,509,0.7c10.8,0,20.1,3.9,27.9,11.6
				c7.8,7.8,11.7,17.1,11.7,28c0,10.9-3.9,20.2-11.7,27.9c-7.9,7.7-17.3,11.5-28.4,11.5c-9.8,0-18.7-3.4-26.5-10.2
				C473.3,61.9,469,52,469,39.8z M475.1,39.9c0,10,3.4,18.3,10.1,24.8c6.7,6.5,14.5,9.7,23.2,9.7c9.5,0,17.6-3.3,24.1-9.9
				c6.6-6.7,9.8-14.8,9.8-24.3c0-9.7-3.2-17.8-9.7-24.3c-6.4-6.6-14.4-9.9-23.9-9.9c-9.5,0-17.4,3.3-24,9.9
				C478.4,22.3,475.1,30.3,475.1,39.9z"/>
			<path d="M687,12.9v65.3h-11.5V12.9H658V2.1h46.4v10.8H687z"/>
			<circle cx="535.1" cy="15.4" r="10.4"/>
			<circle opacity="0.5" cx="508.8" cy="40.1" r="13.2"/>
		</symbol>
	</svg>

	<div class="video-lightbox">
		<span class="video-close"></span>
		<div class="video-lightbox-poster">
		</div>
	</div>
	<div class="page-nav-outer">
		<div class="page-nav">
			<span class="links-hamburger">&#9776;</span>
			<a href="/" class="site-name-link">
				<div class="site-name">
					<!-- <h1>GREG FOOT</h1> -->
					<svg><use xlink:href="#logo"></use></svg>
				</div>
			</a>
			<nav class="links">
				<div class="page-links">
					<?php //wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
					<ul class="menu">
						<li><a href="/about/">ABOUT</a></li>
						<li class="ontv-link"><svg><use xlink:href="#ontv"></use></svg><a href="/on-tv/">ON TV</a></li>
						<li class="onyoutube-link"><svg><use xlink:href="#onyoutube"></use></svg><a href="/on-youtube/">ON YOUTUBE</a></li>
						<li class="onstage-link"><svg><use xlink:href="#onstage"></use></svg><a href="/on-stage/">ON STAGE</a></li>
						<li><a href="/training-talks/">TRAINING &amp; TALKS</a></li>
						<li><a href="/contact/">CONTACT</a></li>
					</ul>
					<div class="social-links social-mobile">
						<ul>
							<li class="twitter"><a href="https://twitter.com/gregfoot" target="_blank"><div class="social-icon-outer">
								<div class="social-icon">
									<svg><use xlink:href="#twitter"></use></svg>
								</div>
							</div></a></li>
							<li class="facebook"><a href="https://www.facebook.com/gregfootFB" target="_blank"><div class="social-icon-outer">
								<div class="social-icon">
									<svg><use xlink:href="#facebook"></use></svg>
								</div>
							</div></a></li>
							<li class="youtube"><a href="https://www.youtube.com/user/gregfoot08" target="_blank"><div class="social-icon-outer">
								<div class="social-icon">
									<svg><use xlink:href="#youtube"></use></svg>
								</div>
							</div></a></li>
							<li class="instagram"><a href="https://instagram.com/gregfoot/" target="_blank"><div class="social-icon-outer">
								<div class="social-icon">
									<svg><use xlink:href="#instagram"></use></svg>
								</div>
							</div></a></li>
						</ul>
					</div>
				</div>
				<div class="social-links">
					<ul>
						<li class="twitter"><a href="https://twitter.com/gregfoot" target="_blank"><div class="social-icon-outer">
							<div class="social-icon">
								<svg><use xlink:href="#twitter"></use></svg>
							</div>
						</div></a></li>
						<li class="facebook"><a href="https://www.facebook.com/gregfootFB" target="_blank"><div class="social-icon-outer">
							<div class="social-icon">
								<svg><use xlink:href="#facebook"></use></svg>
							</div>
						</div></a></li>
						<li class="youtube"><a href="https://www.youtube.com/user/gregfoot08" target="_blank"><div class="social-icon-outer">
							<div class="social-icon">
								<svg><use xlink:href="#youtube"></use></svg>
							</div>
						</div></a></li>
						<li class="instagram"><a href="https://instagram.com/gregfoot/" target="_blank"><div class="social-icon-outer">
							<div class="social-icon">
								<svg><use xlink:href="#instagram"></use></svg>
							</div>
						</div></a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<div class="main-wrapper <?php global $post; echo $post->post_name; ?>">

		