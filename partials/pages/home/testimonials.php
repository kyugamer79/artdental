<?php
$testimonials = get_field( 'testimonials' ) ?? [];


if ( ! is_array( $testimonials ) || count( $testimonials ) < 1 ) {
	$testimonials = get_posts( [ 
		'post_type' => 'testimonial',
		'posts_per_page' => 12,
		'fields' => 'ids',
	] );
}


?>

<div class="bg-noise bg-primary-80 py-9 space-y-2 max-lg:space-y-13">

    <div class="container flex justify-between items-center">

        <div class="text-h1 max-lg:text-h3 max-md:text-h5">
            <?php _e( 'داستان مراجعه کنندگان', 'cyn-dm' ) ?>
        </div>

        <div class="flex gap-2">
            <cyn-icon-button type="primary" id="testimonialsPrev" class="-rotate-90" icon="#icon-chevron-down">
            </cyn-icon-button>
            <cyn-icon-button type="primary" id="testimonialsNext" class="rotate-90" icon="#icon-chevron-down">
            </cyn-icon-button>
        </div>

    </div>

    <div class=" px-3">
        <swiper-container navigation-next-el="#testimonialsNext" navigation-prev-el="#testimonialsPrev"
            space-between="12" slides-per-view="auto">
            <?php foreach ( $testimonials as $index => $testimonial ) : ?>
            <swiper-slide class="max-w-[390px] fade-in-down" anim-delay="<?php echo $index * 0.3 ?>">
                <?php cyn_get_card( 'testimonial', [ 'post-id' => $testimonial ] ) ?>
            </swiper-slide>
            <?php endforeach; ?>
        </swiper-container>
    </div>

</div>