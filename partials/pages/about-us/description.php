<?php $postId = $args['post-id'] ?? get_the_ID(); ?>

<?php $description_image = get_field("description_img"); ?>



<div class="container grid grid-cols-2 items-center gap-10 max-lg:gap-4">

    <div class="text-h1 max-lg:text-h3 max-lg:pt-3"><?php _e('درباره ما', 'cyn-dm') ?></div>

    <div class="pb-7"></div>

    <!-- Title -->
    <div class="col-span-2 text-h5 max-[1024px]:block min-[1024px]:hidden">
        <?php echo get_field('description_title') ?>
    </div>

    <!-- Description Image -->
    <div class="col-span-1 max-lg:col-span-2 aspect-video">
        <?php echo wp_get_attachment_image($description_image, "full", false, ["class" => "rounded-3xl w-full max-lg:h-[400px]"]) ?>
    </div>

    <!-- Description Texts -->
    <div class="col-span-1 max-lg:col-span-2">

        <!-- Title -->
        <div class="text-h2 max-[1023px]:hidden">
            <?php echo get_field('description_title') ?>
        </div>

        <div class="py-2"></div>

        <!-- Txt -->
        <div class="text-body_s leading-8">
            <?php echo get_field('description_txt') ?>
        </div>
    </div>

</div>