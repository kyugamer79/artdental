<?php

$prices = get_field( 'prices' ) ?? [];
$title = $args['title'] ?? __( 'قیمت خدمات', 'cyn-dm' );
$has_button = $args['has_button'] ?? true;

if ( ! is_array( $prices ) || count( $prices ) < 1 ) {
	$prices = get_posts( [ 
		'post_type' => 'price',
		'posts_per_page' => 3,
		'fields' => 'ids',
	] );
}

?>
<div class="container space-y-4">
	<div class="flex justify-between items-center ">
		<div class="text-h1 max-md:text-h5">
			<?php echo $title ?>
		</div>

		<?php if ( false !== $has_button ) : ?>
			<div class="flex gap-4 max-md:hidden">
				<div class="reservePopUpOpener">
					<cyn-button type="primary"
								size="md"
								href="#">
						<?php _e( 'مشاوره رایگان', 'cyn-dm' ) ?>
					</cyn-button>
				</div>

				<cyn-button type="secondary-dark"
							size="md"
							href="<?php echo get_field( 'archive_price' ) ?>">
					<?php _e( 'مشاهده همه', 'cyn-dm' ) ?>
				</cyn-button>
			</div>
		<?php endif; ?>
	</div>

	<div class="flex gap-3 max-lg:flex-col">
		<?php foreach ( $prices as $index => $price ) : ?>
			<div class="flex-1 fade-in-down"
				 anim-delay="<?php echo $index * 0.7 ?>">
				<?php cyn_get_card( 'price', [ 'post-id' => $price, 'class' => 'min-h-[400px] max-lg:min-h-[240px]' ] ) ?>
			</div>
		<?php endforeach; ?>
	</div>

	<div class="flex flex-col gap-4 md:hidden">
		<div class="reservePopUpOpener">
			<cyn-button type="primary"
						size="md"
						class="justify-center"
						href="#">
				<?php _e( 'مشاوره رایگان', 'cyn-dm' ) ?>
			</cyn-button>
		</div>

		<cyn-button type="secondary-dark"
					size="md"
					class="justify-center"
					href="<?php echo get_post_type_archive_link( 'price' ) ?>">
			<?php _e( 'مشاهده همه', 'cyn-dm' ) ?>
		</cyn-button>
	</div>
</div>