<?php defined('ABSPATH') || exit; ?>


<?php

global $post;

$authorId = $post->post_author;

$postId = $args['post-id'] ?? get_the_ID();

?>

<?php get_header() ?>

<!-- Bread Crumb -->

<div
    class="my-6 px-10 py-6 bg-noise bg-primary-80 text-primary-50 [&_.last]:text-primary-0 [&_p]:flex [&_p]:items-center [&_p]:gap-2">
    <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
</div>

<!-- blog main -->
<main class="container grid grid-cols-4 gap-6">

    <!-- Side Bar -->
    <section class="col-span-1 max-xl:col-span-2 max-lg:col-span-4 max-lg:order-1">

        <?php cyn_get_component("blog-side-bar") ?>

    </section>

    <!-- Paragraph -->
    <section class="col-span-3 max-xl:col-span-2 max-lg:col-span-4">

        <!--Blog Title  -->
        <div class="text-h1">
            <?php the_title() ?>
        </div>

        <div class="pt-4"></div>

        <!-- Blog Thumbnail -->
        <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'full', false, ['class' => 'blog-thumbnail rounded-3xl my-0 w-full object-cover']) ?>

        <div class="pb-4"></div>

        <!-- Blog Author -->
        <div class="bg-primary-100 rounded-2xl p-3 flex justify-between gap-3 max-sm:flex-col ">
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
                <?php echo get_the_date('F j, Y') ?>
            </div>
        </div>

        <div class="pt-4"></div>

        <!-- Blog Content -->
        <div
            class="bg-accent-100 rounded-3xl p-5 prose prose-img:w-full prose-img:rounded-3xl prose-img:object-cover min-w-full prose-p:text-primary-50 prose-p:text-body_s prose-h4:text-h4 prose-h6:text-h6">
            <?php the_content() ?>
        </div>

        <div class="pt-4"></div>

        <!-- Comments -->
        <div>

            <!-- Comment Count -->
            <div class="flex flex-col gap-1">

                <div class="text-primary-0">
                    <?php echo get_comments_number() . '&nbsp' . '&nbsp' .  'دیدگاه' ?>
                </div>

                <div class="text-primary-50"><?php _e('شماهم توی این بحث شرکت کنید', 'cyn-dm') ?></div>
            </div>

            <!-- Comment Form -->
            <?php comments_template(); ?>

        </div>

    </section>

</main>



<?php get_footer() ?>