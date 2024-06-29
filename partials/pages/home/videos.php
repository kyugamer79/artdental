<?php
$videos = get_field( 'videos' ) ?? [];

if ( ! is_array( $videos ) || count( $videos ) < 1 ) {
	$videos = get_posts( [ 
		'post_type' => 'video',
		'posts_per_page' => 12,
		'fields' => 'ids',
	] );
}

?>

<div class="container space-y-2">
	<div class="text-h1 max-lg:text-h3 max-md:text-h5">
		<?php echo get_field( 'video_title' ); ?>
	</div>

	<div class="grid grid-cols-8 grid-rows-2 gap-3 max-lg:hidden">
		<?php foreach ( $videos as $index => $video ) : ?>
			<div class="fade-in-down <?php echo $index === 0 ? 'col-span-5 row-span-2' : "row-span-1 col-span-3" ?>"
				 anim-delay="<?php echo $index * 0.3 ?>">
				<?php cyn_get_card( 'video', [ 'post-id' => $video ] ) ?>
			</div>
		<?php endforeach; ?>
	</div>

	<div class="lg:hidden fade-in-down"
		 anim-delay="0.8">
		<swiper-container slides-per-view="1"
						  space-between="12"
						  pagination='true'>
			<?php foreach ( $videos as $index => $video ) : ?>
				<swiper-slide>
					<?php cyn_get_card( 'video', [ 'post-id' => $video ] ) ?>
				</swiper-slide>
			<?php endforeach; ?>
		</swiper-container>
	</div>
</div>