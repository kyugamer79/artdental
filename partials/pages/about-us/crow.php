<?php $postId = $args['post-id'] ?? get_the_ID(); ?>

<?php $crow_img = get_field("crow_img"); ?>


<div class="container grid grid-cols-2 items-center gap-10 max-lg:gap-4">

    <!-- Title -->
    <div class="col-span-2 text-h5 max-[1024px]:block min-[1024px]:hidden">
        <?php echo get_field('crow_title') ?>
    </div>

    <!-- Crow Image -->
    <div class="col-span-1 max-lg:col-span-2 aspect-video min-[1024px]:order-1 ">
        <?php echo wp_get_attachment_image($crow_img, "full", false, ["class" => "rounded-3xl w-full max-lg:h-[400px] object-cover"]) ?>
    </div>

    <!-- Crow Texts -->
    <div class="col-span-1 max-lg:col-span-2 min-[1024px]:order-0">

        <!-- Title -->
        <div class="text-h2 max-[1023px]:hidden">
            <?php echo get_field('crow_title') ?>
        </div>

        <div class="py-2"></div>

        <!-- Txt -->
        <div class="text-body_s leading-8">
            <?php echo get_field('crow_txt') ?>
        </div>
    </div>

</div>