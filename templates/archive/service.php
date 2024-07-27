<?php
global $wp_query;

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
    <section class="space-y-3 col-span-3 max-lg:col-span-4 max-xl:mx-5">

        <!-- Title -->
        <div class="text-h1 max-lg:text-h4">
            <?php echo single_term_title() ?>
        </div>

        <div class="grid grid-cols-3 max-xl:grid-cols-2 max-sm:grid-cols-1 gap-3">

            <?php
            if ($wp_query->have_posts()) :

                foreach ($wp_query->get_posts() as $post) {
                    cyn_get_card('service', ['post-id' => $post->ID, 'class' => 'min-h-[400px] first:col-span-2']);
                }

            endif;
            ?>

        </div>

        <!-- Pagination -->
        <?php cyn_get_component('pagination') ?>

    </section>

</main>


<?php get_footer() ?>