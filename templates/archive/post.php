<?php defined('ABSPATH') || exit; ?>

<!-- Archive blog page -->
<?php get_header() ?>

<main class="container grid grid-cols-3 gap-3">

    <!-- Side Bar -->
    <section class="col-span-1 max-lg:col-span-4 max-lg:order-1">

        <?php cyn_get_component("blog-side-bar") ?>

    </section>

    <!-- Blog Card -->
    <section class="grid gap-y-6 col-span-2 max-lg:col-span-4 max-xl:mx-5">

        <div class="grid grid-cols-3 gap-3">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    cyn_get_card('post', ['post-id' => get_the_ID(), 'class' => 'min-h-[400px] first:col-span-2']);
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>

        <!-- Pagination -->
        <div class="pagination flex mb-40 justify-start">
            <?php

            $big = 999999999;
            echo the_posts_pagination([
                'screen_reader_text' => ' ',
                'base'               => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format'             => '%#%',
                'total'              => $wp_query->max_num_pages,
                'current'            => max(1, get_query_var('paged')),
                'aria_current'       => 'page',
                'show_all'           => true,
                'prev_next'          => true,
                'type'               => 'plain',
                'prev_text'          => __('﹤'),
                'next_text'          => __('﹥'),
                'before_page_number' => '<span class="bg-primary-100 rounded-full border border-primary-50 p-1 inline-flex justify-center items-center size-8 transition-all duration-300 cursor-pointer color-primary-20  hover:border-primary-20 hover:bg-primary-100/0"">',
                'after_page_number' => '</span>',
            ]);
            ?>
        </div>

    </section>

</main>



<?php get_footer() ?>