<?php

$faq_cats = get_terms([
    'taxonomy' => 'faq-cat',
    'hide_empty' => true,
]);

$faq_select = get_field('faq-cat');

?>

<div class="container space-y-4">
    <div class="text-h1 max-lg:text-h5 flex justify-between">

        <div class="text-primary-100">
            <?php echo get_field('faq_title') ?>
        </div>
    </div>

    <div class="col-span-5 max-md:col-span-6">
        <div class="fade-in-down" anim-delay="0.8">
            <?php foreach ($faq_select as $category): ?>
                <?php
                $term = get_term_by('id', $category, 'faq-cat');
                $term_query = new WP_Query(
                    array(
                        'taxonomy' => 'faq-cat',
                        'hide_empty' => true,
                        'posts_per_page' => 4,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'faq-cat',
                                'field' => "slug",
                                'terms' => $term->slug
                            )
                        )
                    )
                );
                ?>
                <div class="faq-panel grid grid-rows-[0fr] transition-all duration-700"
                    controlled-by="<?php echo "faq-cat-" . $term->term_id ?>">
                    <div class="overflow-hidden">
                        <?php cyn_get_component('yalda-faq-group', ['type' => 'query', 'term_ids' => [$term->term_id]]) ?>
                    </div>
                </div>
                <?php wp_reset_postdata() ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>