<?php defined('ABSPATH') || exit; ?>



<?php get_header() ?>

<!-- Bread Crumb -->

<div>

</div>

<!-- blog main -->
<main class="container grid grid-cols-4 gap-6">

    <!-- Side Bar -->
    <section class="col-span-1">

        <?php cyn_get_component("blog-side-bar") ?>

    </section>

    <!-- Paragraph -->
    <section class="col-span-3">
        this is paragraph test
    </section>

</main>



<?php get_footer() ?>