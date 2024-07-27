<?php defined('ABSPATH') || exit; ?>

<?php

$postId = $args['post-id'] ?? get_the_ID();

?>

<?php get_header() ?>

<!-- Bread Crumb -->
<?php cyn_get_component('breadcrumb') ?>

<!-- service main -->
<main class="container grid grid-cols-4 gap-6">

    <!-- Side Bar -->
    <section class="col-span-1 max-lg:col-span-4 max-lg:order-1">

        <?php cyn_get_component("single-service-side-bar") ?>

    </section>

    <!-- Paragraph -->
    <section class="col-span-3 max-lg:col-span-4 max-xl:mx-5">

        <!--Blog Title  -->
        <div class="text-h1">
            <?php the_title() ?>
        </div>

        <div class="pt-4"></div>

        <!-- Blog Thumbnail -->
        <div class="">
            <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'full', false, ['class' => 'blog-thumbnail rounded-3xl my-0 aspect-video w-full object-cover']) ?>
        </div>

        <div class="pb-4"></div>

        <!-- Blog Content -->
        <div class="prose prose-img:w-full prose-img:rounded-3xl prose-img:object-cover min-w-full prose-p:text-primary-50 prose-p:text-body_s prose-h4:text-h4 prose-h6:text-h6">
            <?php the_content() ?>
        </div>

        <!-- FAQ -->
        <?php if (!empty(get_field('faq-group', $postId))) : ?>

            <div class="pt-[93px]"></div>

            <div>
                <!-- Title -->
                <div class="text-h2">
                    <?php _e('سوالات متداول ', 'cyn-dm') . ' ' . the_title() ?>
                </div>

                <div class="text-h2">

                </div>

                <div class="p-6">
                    <?php cyn_get_component('faq-group', ['type' => 'acf', 'acf_field' => 'faq-group', 'post-id' => $postId]) ?>
                </div>
            </div>

        <?php endif; ?>

        <div class="py-3"></div>

        <!-- CTA -->
        <div class="container fade-in-down" anim-delay="0.8">
            <cyn-cta />
        </div>

        <div class="pt-[48px]"></div>

        <!-- Comments -->
        <?php cyn_get_component('single-comment') ?>

    </section>

    <!-- Comments For Mobile -->
    <?php cyn_get_component('mobile-res-comment') ?>

</main>



<?php get_footer() ?>