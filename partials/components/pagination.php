<?php

$query = new WP_Query([
    'post_type' => 'service',
    'posts_per_page' => get_option('posts_per_page'),
])

?>

<div
    class="container pagination flex mb-40 justify-end max-md:justify-center text-body_s text-primary-50 [&_.current]:border [&_.current]:border-primary-50 [&_.current]:rounded-full [&_.current]:text-primary-0 [&_.nav-links]:flex [&_.nav-links]:justify-center [&_.nav-links]:items-center [&_.nav-links]:gap-1 [&_.next]:flex [&_.next]:justify-center [&_.next]:items-center [&_.next]:rounded-full [&_.next]:w-10 [&_.next]:h-10 [&_.next]:border [&_.next]:border-primary-50 [&_.prev]:flex [&_.prev]:justify-center [&_.prev]:items-center [&_.prev]:w-10 [&_.prev]:h-10 [&_.prev]:rounded-full [&_.prev]:border [&_.prev]:border-primary-50 [&_.prev]:p-1">
    <?php
    $big = 999999999;
    echo the_posts_pagination([
        'screen_reader_text' => ' ',
        'base'               => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format'             => '%#%',
        'total'              => $wp_query->max_num_pages,
        'current'            => max(1, get_query_var('paged')),
        'aria_current'       => 'page',
        'show_all'           => false,
        'prev_next'          => true,
        'type'               => 'plain',
        'prev_text'          => __('<svg class="icon text-primary-0 size-5 rotate-[-90deg]"><use href="#icon-chevron-down"/></svg>'),
        'next_text'          => __('<svg class="icon text-primary-0 size-5 rotate-90"><use href="#icon-chevron-down"/></svg>'),
        'before_page_number' => '<span class="w-10 h-10 bg-primary-100 rounded-full p-1 inline-flex justify-center items-center size-8 transition-all duration-300 cursor-pointer color-primary-20 hover:border-primary-20 hover:bg-primary-100/0">',
        'after_page_number' => '</span>',
    ]);
    ?>
</div>