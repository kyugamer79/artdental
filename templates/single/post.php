<?php defined('ABSPATH') || exit; ?>



<?php get_header() ?>

<!-- Bread Crumb -->

<div>

</div>

<!-- blog main -->
<main class="container grid grid-cols-4 gap-6">

    <!-- Side Bar -->
    <section class="col-span-1 max-xl:col-span-2  max-md:col-span-4">

        <?php cyn_get_component("blog-side-bar") ?>

    </section>

    <!-- Paragraph -->
    <section class="col-span-3 md:max-xl:col-span-2 max-md:col-span-4 prose prose-img:w-full min-w-full">
        <?php the_content() ?>
    </section>

</main>



<?php get_footer() ?>