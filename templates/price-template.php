<?php /* Template name: Price template */ ?>

<?php get_header(); ?>


<?php

$terms = get_terms([
    'taxonomy' => 'price-category'
]);

?>

<?php foreach ($terms as $term): ?>

    <div class="container mt-10">

        <div>
            <h2 class="text-h2">
                <?php echo $term->name ?>
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 ">
            <?php
            $posts = get_posts([
                'post_type' => 'price',
                'tax_query' => [
                    [
                        'taxonomy' => 'price-category',

                        'terms' => [$term->term_id]
                    ]
                ]
            ]);


            foreach ($posts as $post) {
                cyn_get_card('price', ['post_id' => $post->ID]);
            }

            ?>
        </div>


    </div>

<?php endforeach; ?>


<?php get_footer(); ?>