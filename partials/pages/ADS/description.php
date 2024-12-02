<?php
$postId = $args['post-id'] ?? get_the_ID();
$cover_image = get_field("description_cover");
$video = get_field("description_video"); ?>



<div class="container flex items-center gap-10 max-lg:gap-4 max-lg:flex-col">
    <!-- Description Texts -->
    <div class="max-lg:w-full w-1/2 text-primary-20">

        <!-- Title -->
        <h2 class="text-h1 max-lg:text-h4">
            <?php echo get_field('description_title') ?>
        </h2>

        <div class="py-2"></div>

        <!-- Txt -->
        <div class="text-body max-lg:text-body_s leading-8 ">
            <?php echo get_field('description_txt') ?>
        </div>


        <div class="flex justify-end">
            <cyn-button class="text-body_s rounded-3xl justify-center items-center col-span-2 max-lg:col-span-6" type="primary" href="<?php echo $video['url'] ?>">
                <?php _e('مشاهده ویدیو', 'cyn-dm') ?>
            </cyn-button>
        </div>
    </div>
    <!-- Description Image -->
    <div class="aspect-video w-1/2 rounded-3xl h-full max-lg:w-full max-w-fit">
        <!-- <?php //echo wp_get_attachment_image($description_image, "full", false, ["class" => "rounded-3xl max-lg:h-[400px]"]) 
                ?> -->
        <video class="fade-in-down rounded-3xl plyr-video" controls src="<?php echo $video['url'] ?>" poster="<?php echo wp_get_attachment_image_url($cover_image, 'full') ?>">

        </video>
    </div>
</div>