<?php get_header() ?>


<main class="container grid grid-cols-1 md:grid-cols-3 gap-4">

    <?php

    if (have_posts()) :

        while (have_posts()) : the_post();
            cyn_get_card('price', ['class' => 'min-h-[400px] max-lg:min-h-[240px]']);

        endwhile;
    else :

        cyn_get_card('search-not-found');

    endif;

    ?>
</main>


<?php get_footer() ?>