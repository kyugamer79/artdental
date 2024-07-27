<?php defined('ABSPATH') || exit; ?>

<?php

$photos = get_field('video') ?? [];

if (!is_array($photos) || count($photos) < 1) {
    $photos = get_posts([
        'post_type' => 'video',
        'posts_per_page' => -1,
        'fields' => 'ids',
    ]);
}
?>

<!-- Archive Video Page -->
<?php get_header() ?>

<!-- Breadcrumb -->
<?php cyn_get_component('breadcrumb') ?>


<main>

    <?php cyn_get_component('gallery-inputs') ?>


    <!-- Photo Card -->
    <section class="container space-y-3 col-span-3 max-lg:col-span-4 ">

        <!-- Title -->
        <div class="text-h1 max-lg:text-h4 pb-6">
            <?php _e('ویدئوها', 'cyn-dm')
            ?>
        </div>

        <div class="grid grid-cols-3 max-xl:grid-cols-2 max-sm:grid-cols-1 gap-3">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    cyn_get_card('video', ['post-id' => get_the_ID(), 'class' => ' first:col-span-2 first:max-xl:col-span-1']);
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