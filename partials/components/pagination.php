<?php

$query = new WP_Query([
    'post_type' => 'service',
    'posts_per_page' => get_option('posts_per_page'),
])

?>

<div class="pagination flex mb-40 justify-start">
    <?php

    $big = 999999999;
    echo the_posts_pagination([
        'screen_reader_text' => ' ',
        'base'               => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format'             => '%#%',
        'total'              => $wp_query->max_num_pages,
        'current'            => max(1, $query->get_query_var('paged')),
        'aria_current'       => 'page',
        'show_all'           => true,
        'prev_next'          => true,
        'type'               => 'plain',
        'prev_text'          => __('﹤'),
        'next_text'          => __('﹥'),
        'before_page_number' => '<span class="bg-primary-100 rounded-full border border-primary-50 p-1 inline-flex justify-center items-center size-8 transition-all duration-300 cursor-pointer color-primary-20  hover:border-primary-20 hover:bg-primary-100/0">',
        'after_page_number' => '</span>',
    ]);
    ?>
</div>