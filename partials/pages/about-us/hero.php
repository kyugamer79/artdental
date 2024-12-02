<?php
$hero_video = get_field( "video_file" );
$hero_cover = get_field( "video_cover" );

if ( empty( $hero_cover ) || empty( $hero_video ) )
	return;
?>

<section class="container">
	<!-- Hero Video -->

	<video class="plyr-video | rounded-3xl overflow-hidden"
		   playsinline
		   controls
		   data-poster="<?php echo wp_get_attachment_image_url( $hero_cover ) ?>">
		<source src="<?php echo $hero_video['url'] ?>"
				type="<?php echo $hero_video['mime_type'] ?>" />

	</video>
</section>