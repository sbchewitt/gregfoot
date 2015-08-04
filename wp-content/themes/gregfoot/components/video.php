<?php
// IMAGE PAGE
//Get IDs for video and playlist
$videoURL = get_sub_field('video_url_' . ($i+1));
$String = 'list';
$pos = strpos($videoURL, $String);
$pieces = explode("=", $videoURL);
if ($pos !== false){
	$playlistID = $pieces[2];
	$videoIDSubstring = $pieces[1];
	$videoIDpieces = explode("&", $videoIDSubstring);
	$videoID = $videoIDpieces[0];
}
else{
	$playlistID = 'null';
	$videoID = $pieces[1];
}

//Get the video poster image URL
if (get_sub_field('video_poster_' . ($i+1))) {
	$videoPosterField = get_sub_field('video_poster_' . ($i+1));
	$videoPoster = $videoPosterField['url'];
} else {
	$videoPoster = 'http://img.youtube.com/vi/' . $videoID . '/maxresdefault.jpg';
	$file_headers = get_headers($videoPoster);

	if (strpos($file_headers[0],'404') !== false) {
    	$videoPoster = 'http://img.youtube.com/vi/' . $videoID . '/0.jpg';
	}
	else {
	    $posterSize = getimagesize($videoPoster);
		$posterWidth = $posterSize[0];
		if ($posterWidth < 100){
			$videoPoster = 'http://img.youtube.com/vi/' . $videoID . '/0.jpg';
		}
	}
}

//Get the video title
$videoInfo = "http://youtube.com/get_video_info?video_id=".$videoID;
$content = file_get_contents($videoInfo);
parse_str($content, $ytarr);
$videoTitle = $ytarr['title'];

global $post;
$Slug = $post->post_name;
if ($Slug == 'on-tv' or $Slug == 'on-youtube' or $Slug == 'on-stage'){
	$slugPieces = explode("-", $Slug);
	$slugTitle = $slugPieces[0] . '<br/>' . $slugPieces[1];
}
else{
	$slugTitle = '';
}

?>

<div class="content-wrapper video-content <?php echo $Slug?>" data-videoid="<?php echo $videoID ?>" data-playlistid="<?php echo $playlistID ?>" style="background-image: url('<?php echo $videoPoster ?>');">
	<div class="video-button-container">
		<p class="slug-title"><?php echo $slugTitle ?></p>
		<div class="white-square">
			<p class="video-title"><?php echo $videoTitle ?></p>
			<div class="video-button">
			</div>
		</div>
	</div>
</div>






