<?php defined('ABSPATH') || exit; ?>


<?php

global $post;

$authorId = $post->post_author;

$postId = $args['post-id'] ?? get_the_ID();

?>

<?php get_header() ?>

<!-- Bread Crumb -->

<?php cyn_get_component('breadcrumb') ?>

<!-- blog main -->
<main class="container grid grid-cols-4 gap-6">

    <!-- Side Bar -->
    <section class="col-span-1  max-lg:col-span-4 max-lg:order-2">

        <?php cyn_get_component("blog-side-bar") ?>

    </section>

    <!-- Paragraph -->
    <section class="col-span-3 max-lg:col-span-4 md:max-[1407px]:ms-6">

        <!--Blog Title  -->
        <div class="text-h1 max-lg:text-h5">
            <?php the_title() ?>
        </div>

        <div class="pt-4"></div>

        <!-- Blog Thumbnail -->
        <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'full', false, ['class' => 'blog-thumbnail rounded-3xl my-0 aspect-video w-full object-cover']) ?>

        <div class="pb-4"></div>

        <!-- Blog Author -->
        <div class="bg-primary-100 rounded-2xl p-3 flex justify-between gap-3 max-sm:flex-col">
            <!-- Author Name -->
            <div
                class="before:w-3 before:h-3 before:bg-accent-50 before:rounded-full before:inline-block flex items-center gap-3">
                <a href="<?php echo get_permalink($authorId) ?>">
                    <?php echo get_the_author_meta('display_name', $authorId); ?>
                </a>
            </div>

            <!-- Date -->
            <div class="flex items-center gap-1">
                <svg class="icon w-6 h-6">
                    <use href="#icon-calendar-schedule-1" />
                </svg>
                <?php echo get_the_date() ?>
            </div>
        </div>

        <div class="pt-4"></div>

        <!-- Blog Content -->
        <div
            class="bg-accent-100 rounded-3xl p-5 prose prose-img:w-full prose-img:rounded-3xl prose-img:object-cover min-w-full prose-p:text-primary-50 prose-p:text-body_s prose-h4:text-h4 prose-h6:text-h6">
            <?php the_content() ?>
        </div>

        <div class="py-3"></div>

        <!-- Comments -->
        <?php cyn_get_component('single-comment')?>

    </section>

    <!-- Comments For Mobile -->
    <?php cyn_get_component('mobile-res-comment')?>

</main>



<?php get_footer() ?>