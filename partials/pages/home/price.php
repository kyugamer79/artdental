<?php

$prices = get_field( 'prices' ) ?? [];

if ( ! is_array( $prices ) || count( $prices ) < 0 ) {
	$prices = get_posts( [ 
		'post_type' => 'price',
		'posts_per_page' => 2,
		'fields' => 'ids',
	] );
}

?>


<div class="container">
	<div class="flex justify-between items-center">
		<div class="text-h1 max-md:text-h5">
			<?php _e( 'قیمت ایمپلنت', 'cyn-dm' ) ?>
		</div>

		<div class="flex gap-4">
			<cyn-button type="primary"
						size="md"
						href="#">
				<?php _e( 'مشاوره رایگان', 'cyn-dm' ) ?>
			</cyn-button>

			<cyn-button type="accent"
						size="md"
						href="#">
				<?php _e( 'مشاهده همه', 'cyn-dm' ) ?>
			</cyn-button>
		</div>
	</div>

	<div class="flex space-x-4">
		<?php foreach ( $prices as $index => $price ) : ?>
			<?php cyn_get_card( 'price', [ 'post-id' => $price ] ) ?>
		<?php endforeach; ?>
	</div>
</div>