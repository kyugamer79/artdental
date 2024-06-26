<?php defined('ABSPATH') || exit; ?>

<?php
$query = new WP_Query([
    'post_type' => 'service',
    'posts_per_page' => get_option('posts_per_page'),
])


?>

<!-- Archive Service Page -->
<?php get_header() ?>

<?php cyn_get_component('breadcrumb') ?>

<main class="container grid grid-cols-4 gap-3">

    <!-- Side Bar -->
    <section class="col-span-1 max-lg:col-span-4 max-lg:order-1">

        <?php cyn_get_component("archive-service-side-bar") ?>

    </section>

    <!-- Service Card -->
    <section class="grid gap-y-6 col-span-3 max-lg:col-span-4 max-xl:mx-5">

        <!-- Title -->
        <div class="text-h1 max-lg:text-h4">
            <?php _e('همه ی خدمات', 'cyn-dm') ?>
        </div>

        <div class="grid grid-cols-3 max-xl:grid-cols-2 max-sm:grid-cols-1 gap-3">
            <?php
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    cyn_get_card('service', ['post-id' => get_the_ID(), 'class' => 'min-h-[400px] first:col-span-2']);
                endwhile;
            endif;
            ?>

        </div>

        <!-- Pagination -->
        <?php cyn_get_component('pagination') ?>

    </section>

</main>


<?php get_footer() ?>