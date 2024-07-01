<?php defined('ABSPATH') || exit; ?>

<!-- Archive Blog Page -->
<?php get_header() ?>

<?php cyn_get_component('breadcrumb') ?>

<main class="container grid grid-cols-4 gap-3">

    <!-- Side Bar -->
    <section class="col-span-1 max-lg:col-span-4 max-lg:order-1">

        <?php cyn_get_component("blog-side-bar") ?>

    </section>

    <!-- Blog Card -->
    <section class="grid gap-y-6 col-span-3 max-lg:col-span-4 max-xl:mx-5">

        <!-- Title -->
        <div class="text-h1 max-lg:text-h4">
            <?php _e('همه ی مقالات', 'cyn-dm') ?>
        </div>


        <div class="grid grid-cols-3 max-xl:grid-cols-2 max-sm:grid-cols-1 gap-3">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    cyn_get_card('post', ['post-id' => get_the_ID(), 'class' => 'min-h-[400px] first:col-span-2 first:max-xl:col-span-1']);
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>

        <!-- Pagination -->
        <?php cyn_get_component('pagination') ?>

    </section>

</main>

<?php get_footer() ?>