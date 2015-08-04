jQuery(document).ready(function($) {

	// BLOCK SIZING
	$(window).resize(function() {
		block_resize();
		// archive_setup();
	});
	

	function block_resize() {
		// $('.block').each(function() {
		// 	if (!($(this).find('.content-wrapper').hasClass('banner-content'))) {
		// 		if (!($(this).find('.content-wrapper').hasClass('archive-content'))) {
		// 			$(this).height($(this).parent().height());
		// 		}
		// 	}
		// });

		

		$('.component-row').each(function() {
			var numberOfBlocks = $(this).children('.block').length;
			var pageWidth = $(window).width();

			if (numberOfBlocks > 1) {
				if (pageWidth > 560){
					if ($(this).children('.wrapper-text').length > 0) {
						var textHeight = $(this).children('.wrapper-text').height();
						$(this).children('.wrapper-image').height(textHeight);	
						$(this).children('.wrapper-video').height(textHeight);	
					} else {
						$(this).children('.block').height($(this).height()/numberOfBlocks);
					}
				}
				else{
					$(this).children('.block').height('400px');
					$(this).children('.block.wrapper-text').height('auto');
				}	
			}
			
		});

		$('.white-square').each(function(){
			$(this).css({
				height: "85%",
				width: "85%"
			})
			var squareHeight = $(this).height();
			var squareWidth = $(this).width();
			$(this).css({
				height: Math.floor(squareHeight),
				width: Math.floor(squareWidth)
			})

		});

	}
	block_resize();

	//MOBILE NAVIGATION
	$('.links-hamburger').click(function(){
		$('.page-nav-outer').toggleClass('links-open');
		$('.page-links ul').toggleClass('links-open');
	});

	//VIDEO LIGHTBOX

	var pageHeight = $('.video-lightbox').height();
	pageHeight = pageHeight+100 + "px";
	$('.video-lightbox').css('top',pageHeight);

	$('.video-button-container').click(function(){
		var videoPoster = $(this).closest('.video-content').css('background-image');
		var $this = $(this);
		$('.video-lightbox-poster').css('background-image',videoPoster);
		$('.video-lightbox').animate({top:"0"},function(){
			var playlistID = $this.closest('.video-content').data('playlistid');
			var videoID = $this.closest('.video-content').data('videoid');
			if (playlistID == 'null'){
				var videoURL = '<iframe src="https://www.youtube.com/embed/' + videoID + '?autoplay=1&showinfo=0&rel=0&modestbranding=1&iv_load_policy=3" frameborder="0" allowfullscreen></iframe>';
			}
			else{
				var videoURL = '<iframe src="https://www.youtube.com/embed/' + videoID + '?list=' + playlistID +'&autoplay=1&showinfo=0&rel=0&modestbranding=1&iv_load_policy=3" frameborder="0" allowfullscreen></iframe>';
			}
			$('.video-lightbox-poster').html(videoURL);
		});		
	});

	$('.video-close').click(function(){
		$('.video-lightbox').animate({top:pageHeight},function(){
    		$('.video-lightbox-poster').html("");
    	});
	});

	$('.video-lightbox').on('click', function(e) { 
   		if( e.target !== this ) 
       	return;
    	$('.video-lightbox').animate({top:pageHeight},function(){
    		$('.video-lightbox-poster').html("");
    	});
	});

	// BANNER SLIDERS
	if ($('.bxslider-banner').length > 0) {
		$('.bxslider-banner').bxSlider({
			auto: true,
			pause: 3000,
			onSliderLoad: function(){
				// $('.banner:nth-child(1) .ellipse-darkblue').addClass('ellipse-darkblue-active');
				// $('.banner:nth-child(1) .ellipse-midblue').addClass('ellipse-midblue-active');
				// $('.banner:nth-child(1) .ellipse-green').addClass('ellipse-green-active');
				$('.banner:nth-child(1) .banner-info').addClass('banner-info-active');
			},
			onSlideAfter: function($afterSlide){
				// $afterSlide.find('.ellipse-darkblue').addClass('ellipse-darkblue-active');
				// $afterSlide.find('.ellipse-midblue').addClass('ellipse-midblue-active');
				// $afterSlide.find('.ellipse-green').addClass('ellipse-green-active');
				$afterSlide.find('.banner-info').addClass('banner-info-active');

			},
			onSlideBefore: function($beforeSlide){
				// $beforeSlide.find('.ellipse-darkblue').removeClass('ellipse-darkblue-active');
				// $beforeSlide.find('.ellipse-midblue').removeClass('ellipse-midblue-active');
				// $beforeSlide.find('.ellipse-green').removeClass('ellipse-green-active');
				$beforeSlide.find('.banner-info').removeClass('banner-info-active');	
				$('.banner:nth-child(1) .banner-info').removeClass('banner-info-active');
			}
		});
	}

	// GALLERY
	if ($('.bxslider-gallery').length > 0) {

		$('.bxslider-gallery').bxSlider({
			infiniteLoop: true,
			useCSS: false
		});
	}

	
	// ARCHIVE SETUP
	// var sliderArray = [];
	if ($('.archive-list-wrapper').length > 0) {

		var pageWidth = $(window).width();

		// $('.archive-list-wrapper').each(function(){

		// var $archiveSlider;
		
		if (pageWidth > 870){
			$('.archive-list-wrapper').bxSlider({
				minSlides: 4,
				maxSlides: 4,
				slideWidth: "1000px",
				infiniteLoop: false,
				hideControlOnEnd: true
			});
		}
		else if (580 < pageWidth && pageWidth < 870){
			$('.archive-list-wrapper').bxSlider({
				minSlides: 2,
				maxSlides: 2,
				slideWidth: "1000px",
				infiniteLoop: false,
				hideControlOnEnd: true
			});
		}
		else{
			$('.archive-list-wrapper').bxSlider({
				minSlides: 1,
				maxSlides: 1,
				slideWidth: "1000px",
				infiniteLoop: false,
				hideControlOnEnd: true
			});
		}
	}

	if ($('.component-row .wrapper-archive').length > 1){
		$('.wrapper-archive').parent().addClass('multi-archive');
		$('.multi-archive').wrapAll('<div class="multi-archive-wrapper"></div>');
		$('.multi-archive-wrapper').prepend('<div class="archive-tabs-container"></div>');

		//Creating tabs for each archive
		$( ".archive-content" ).each(function(){
		  var archiveTitle = ($(this).data('archivename'));
		  $('.archive-tabs-container').append('<div class="archive-tab"><p>' + archiveTitle + '</p></div>');
		});

		//Tab and archive setup when page loads
		var $tabOnPageLoad = $('.archive-tab:nth-child(1)');
		$tabOnPageLoad.addClass('active-tab');
		var $tabTitleOnPageLoad = $tabOnPageLoad.text();
		var $archiveOnPageLoad = $('.archive-content[data-archivename="'+$tabTitleOnPageLoad+'"]');
		$archiveOnPageLoad.addClass('active');
		$('.archive-content.active').show();
		$('.archive-content:not(.active)').hide();

		//Tab and archive setup when tab is clicked
		$('.archive-tab').click(function(){
			$(this).addClass('active-tab');
			$('.archive-tab').not($(this)).removeClass('active-tab');
			var $archiveTitle = $(this).text();
			var $this = $('.archive-content[data-archivename="'+$archiveTitle+'"]');
			$this.addClass('active');
			$('.archive-content').not($this).removeClass('active');
			$('.archive-content.active').show();
			$('.archive-content:not(.active)').hide();

		});
	}


	// function archive_setup() {
	// 	if ($(window).width() <= 400) {
	// 		// smaller than 500
	// 		$archiveSlider.reloadSlider({
	// 			minSlides: 1,
	// 			maxSlides: 1,
	// 		});
	// 	} else if ($(window).width() <= 900) {
	// 		// between 500 and 900
	// 		$archiveSlider.reloadSlider({
	// 			minSlides: 3,
	// 			maxSlides: 3,
	// 		});
	// 	} else {
	// 		// bigger than 900
	// 		$archiveSlider.reloadSlider({
	// 			minSlides: 4,
	// 			maxSlides: 4,
	// 		});
	// 	}
	// }

	// function make_archive(blocklength) {
	// 	for (var i = 0; i < $('.archive-list-item').length; i++) {
	// 		$('.archive-list-item')[i]
	// 	};
	// }

});

	
// https://www.youtube.com/watch?v=hv5bZXauR2M
// https://youtu.be/hv5bZXauR2M
// https://www.youtube.com/embed/hv5bZXauR2M
// hv5bZXauR2M
