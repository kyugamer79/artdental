<?php
$testimonials = get_field('testimonials') ?? [];


if (!is_array($testimonials) || count($testimonials) < 1) {
    $testimonials = get_posts([
        'post_type' => 'testimonial',
        'posts_per_page' => 12,
        'fields' => 'ids',
    ]);
}


?>

<?php if (!empty($testimonials)): ?>

    <div class="container py-9 space-y-2 max-lg:space-y-13">

        <div class="flex justify-between items-center">

            <div class="text-h1 max-lg:text-h3 max-md:text-h5 text-primary-100">
                <?php _e('نظرات مشتریان ما', 'cyn-dm') ?>
            </div>

            <div class="flex gap-2">

                <button id="testimonialsPrev" class="border border-[#B3B3B3] rounded-full p-4 cursor-pointer">
                    <svg class="icon size-4 text-primary-100 -rotate-90">
                        <use href="#icon-chevron-down" />
                    </svg>
                </button>

                <button id="testimonialsNext" class="border border-[#B3B3B3] rounded-full p-4 cursor-pointer">
                    <svg class="icon size-4 text-primary-100 rotate-90">
                        <use href="#icon-chevron-down" />
                    </svg>
                </button>
            </div>

        </div>

        <div>
            <swiper-container navigation-next-el="#testimonialsNext" navigation-prev-el="#testimonialsPrev"
                space-between="12" slides-per-view="auto">
                <?php foreach ($testimonials as $index => $testimonial): ?>
                    <swiper-slide class="max-w-[390px] fade-in-down" anim-delay="<?php echo $index * 0.3 ?>">
                        <?php cyn_get_card('yalda-testimonial', ['post-id' => $testimonial]) ?>
                    </swiper-slide>
                <?php endforeach; ?>
            </swiper-container>
        </div>
    </div>
    
<?php endif ?>