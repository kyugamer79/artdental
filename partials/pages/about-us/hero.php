<?php $postId = $args['post-id'] ?? get_the_ID(); ?>

<?php $hero_image = get_field("banner"); ?>

<section class="container">
    <!-- Hero Image & Texts -->
    <!--accent 60% not working -->
    <div class="flex flex-col justify-center items-center rounded-3xl text-primary-100 text-center aspect-video p-7 bg-cover bg-no-repeat after:rounded-3xl after:inset-0 after:absolute relative after:bg-accent-0/65 after:-z-[1] isolate"
        style="background-image: url('<?php echo wp_get_attachment_image_url($hero_image, "full", false, ["class" => ""]) ?>');">
        <div class="text-title_2 font-bold max-md:text-h4 max-md:font-[500]">
            <?php echo get_field('hero_title') ?>
        </div>

        <div class="text-h2 max-md:text-h6 max-md:font-[400]">
            <?php echo get_field('hero_subtitle') ?>
        </div>
    </div>
</section>