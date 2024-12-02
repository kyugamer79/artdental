<?php $postId = $args['post-id'] ?? get_the_ID(); ?>

<?php $hero_image = get_field("banner"); ?>

<section class="container">
    <!-- Hero Image & Texts -->
    <div class="flex flex-col rounded-3xl justify-end text-primary-80 aspect-video p-7 bg-cover max-lg:after:bg-accent-0/65 bg-no-repeat after:rounded-3xl after:inset-0 after:absolute relative after:-z-[1] isolate" style="background-color: linear-gradient(270deg, rgba(119, 119, 119, 0) 13.27%, #5B5B5B 100%); background-image: url('<?php echo wp_get_attachment_image_url($hero_image, "full", false, ["class" => ""]) ?>');">
        <h1 class="text-title_2 w-1/3 font-bold max-md:text-h4 max-md:font-[500] max-lg:w-full">
            <?php echo get_field('hero_title') ?>
        </h1>
        <div class="py-2"></div>

        <div class="text-h2 w-1/3 max-lg:w-full max-md:text-h6 max-md:font-[400] ">
            <?php echo get_field('hero_subtitle') ?>
        </div>



        <div class="py-8"></div>
        <div class="grid grid-cols-12">
            <cyn-button class="border reservePopUpOpener rounded-3xl justify-center text-body_s items-center col-span-2 max-lg:col-span-6" type="primary" href="#">
                <?php _e('دریافت مشاوره', 'cyn-dm') ?>
            </cyn-button>
        </div>
    </div>
</section>