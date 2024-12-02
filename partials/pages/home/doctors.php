<?php
$doctors = get_field( 'doctors' ) ?? [];

if ( ! is_array( $doctors ) || count( $doctors ) < 1 ) {
	$doctors = get_posts( [ 
		'post_type' => 'doctor',
		'posts_per_page' => 3,
		'fields' => 'ids',
	] );
}

?>


<div class="container space-y-4">
	<div class="flex justify-between items-center">
		<span class="text-h1 max-lg:text-h5">
			<?php _e( 'متخصص‌های مجموعه', 'cyn-dm' ) ?>
		</span>

		<cyn-button type="secondary-dark"
					size="md"
					class="max-lg:hidden"
					href="<?php echo get_post_type_archive_link( 'doctor' ) ?>">
			<?php _e( 'مشاهده همه', 'cyn-dm' ) ?>
		</cyn-button>
	</div>


	<div class="columns-3 max-lg:hidden">
		<?php foreach ( $doctors as $index => $postId ) : ?>
			<div class="fade-in-down"
				 anim-delay="<?php echo $index * 0.3 ?>">
				<?php cyn_get_card( 'doctor', [ 'post-id' => $postId ] ) ?>
			</div>
		<?php endforeach; ?>
	</div>

	<div class="lg:hidden ">
		<swiper-container slides-per-view="auto"
						  space-between="12"
						  pagination='true'>
			<?php foreach ( $doctors as $index => $postId ) : ?>
				<swiper-slide class="max-w-[340px] fade-in-down"
							  anim-delay="<?php echo $index * 0.3 ?>">
					<?php cyn_get_card( 'doctor', [ 'post-id' => $postId ] ) ?>
				</swiper-slide>
			<?php endforeach; ?>
		</swiper-container>
	</div>

	<cyn-button type="secondary-dark"
				size="md"
				class="justify-center mt-3 lg:hidden"
				href="<?php echo get_post_type_archive_link( 'doctor' ) ?>">
		<?php _e( 'مشاهده همه', 'cyn-dm' ) ?>
	</cyn-button>
</div>